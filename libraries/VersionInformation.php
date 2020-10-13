<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Responsible for retrieving version information and notifiying about latest version
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries;

use PMA\libraries\Util;
use stdClass;

if (!defined('PHPMYADMIN')) {
    exit;
}

/**
 * Responsible for retrieving version information and notifiying about latest version
 *
 * @package PhpMyAdmin
 *
 */
class VersionInformation
{
    /**
     * Returns information with latest version from phpmyadmin.net
     *
     * @return object JSON decoded object with the data
     */
    public function getLatestVersion()
    {
        if (!$GLOBALS['cfg']['VersionCheck']) {
            return null;
        }

        // Get response text from phpmyadmin.net or from the session
        // Update cache every 6 hours
        if (isset($_SESSION['cache']['version_check'])
            && time() < $_SESSION['cache']['version_check']['timestamp'] + 3600 * 6
        ) {
            $save = false;
            $response = $_SESSION['cache']['version_check']['response'];
        } else {
            $save = true;
            $file = 'https://www.phpmyadmin.net/home_page/version.json';
            $response = Util::httpRequest($file, "GET");
        }
        $response = $response ? $response : '{}';
        /* Parse response */
        $data = json_decode($response);

        /* Basic sanity checking */
        if (! is_object($data)
            || empty($data->version)
            || empty($data->releases)
            || empty($data->date)
        ) {
            return null;
        }

        if ($save) {
            $_SESSION['cache']['version_check'] = array(
                'response' => $response,
                'timestamp' => time()
            );
        }
        return $data;
    }

    /**
     * Calculates numerical equivalent of phpMyAdmin version string
     *
     * @param string $version version
     *
     * @return mixed false on failure, integer on success
     */
    public function versionToInt($version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the version and date of the latest phpMyAdmin version compatible
     * with the available PHP and MySQL versions
     *
     * @param array $releases array of information related to each version
     *
     * @return array containing the version and date of latest compatible version
     */
    public function getLatestCompatibleVersion($releases)
    {
        foreach ($releases as $release) {
            $phpVersions = $release->php_versions;
            $phpConditions = explode(",", $phpVersions);
            foreach ($phpConditions as $phpCondition) {
                if (! $this->evaluateVersionCondition("PHP", $phpCondition)) {
                    continue 2;
                }
            }

            // We evalute MySQL version constraint if there are only
            // one server configured.
            if (count($GLOBALS['cfg']['Servers']) == 1) {
                $mysqlVersions = $release->mysql_versions;
                $mysqlConditions = explode(",", $mysqlVersions);
                foreach ($mysqlConditions as $mysqlCondition) {
                    if (!$this->evaluateVersionCondition('MySQL', $mysqlCondition)) {
                        continue 2;
                    }
                }
            }

            return array(
                'version' => $release->version,
                'date' => $release->date,
            );
        }

        // no compatible version
        return null;
    }

    /**
     * Checks whether PHP or MySQL version meets supplied version condition
     *
     * @param string $type      PHP or MySQL
     * @param string $condition version condition
     *
     * @return boolean whether the condition is met
     */
    public function evaluateVersionCondition($type, $condition)
    {
        $operator = null;
        $operators = array("<=", ">=", "!=", "<>", "<", ">", "="); // preserve order
        foreach ($operators as $oneOperator) {
            if (strpos($condition, $oneOperator) === 0) {
                $operator = $oneOperator;
                $version = substr($condition, strlen($oneOperator));
                break;
            }
        }

        $myVersion = null;
        if ($type == 'PHP') {
            $myVersion = $this->getPHPVersion();
        } elseif ($type == 'MySQL') {
            $myVersion = $this->getMySQLVersion();
        }

        if ($myVersion != null && $operator != null) {
            return version_compare($myVersion, $version, $operator);
        }
        return false;
    }

    /**
     * Returns the PHP version
     *
     * @return string PHP version
     */
    protected function getPHPVersion()
    {
        return PHP_VERSION;
    }

    /**
     * Returns the MySQL version
     *
     * @return string MySQL version
     */
    protected function getMySQLVersion()
    {
        return PMA_MYSQL_STR_VERSION;
    }
}
