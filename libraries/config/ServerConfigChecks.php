<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Server config checks management
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\config;

use PMA\libraries\URL;

/**
 * Performs various compatibility, security and consistency checks on current config
 *
 * Outputs results to message list, must be called between PMA_messagesBegin()
 * and PMA_messagesEnd()
 *
 * @package PhpMyAdmin
 */
class ServerConfigChecks
{
    /**
     * @var ConfigFile configurations being checked
     */
    protected $cfg;

    /**
     * Constructor.
     *
     * @param ConfigFile $cfg Configuration
     */
    public function __construct(ConfigFile $cfg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Perform config checks
     *
     * @return void
     */
    public function performConfigChecks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check config of servers
     *
     * @param boolean $cookieAuthUsed    Cookie auth is used
     * @param string  $blowfishSecret    Blowfish secret
     * @param string  $sServerAuthCfgMsg Message for server auth config
     * @param string  $sSecurityInfoMsg  Message for security information
     * @param boolean $blowfishSecretSet Blowfish secret set
     *
     * @return array
     */
    protected function performConfigChecksServers(
        $cookieAuthUsed,
        $blowfishSecret,
        $sServerAuthCfgMsg,
        $sSecurityInfoMsg,
        $blowfishSecretSet
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set blowfish secret
     *
     * @param string  $blowfishSecret    Blowfish secret
     * @param boolean $cookieAuthServer  Cookie auth is used
     * @param boolean $blowfishSecretSet Blowfish secret set
     *
     * @return array
     */
    protected function performConfigChecksServersSetBlowfishSecret(
        $blowfishSecret,
        $cookieAuthServer,
        $blowfishSecretSet
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Define server name
     *
     * @param string $serverName Server name
     * @param int    $serverId   Server id
     *
     * @return string Server name
     */
    protected function performConfigChecksServersGetServerName(
        $serverName,
        $serverId
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Perform config checks for zip part.
     *
     * @param string $sGZipDumpWarning   Gzip dump warning
     * @param string $sBZipDumpWarning   Bzip dump warning
     * @param string $sZipDumpImportWarn Zip dump import warning
     * @param string $sZipDumpExportWarn Zip dump export warning
     *
     * @return void
     */
    protected function performConfigChecksZips(
        $sGZipDumpWarning,
        $sBZipDumpWarning,
        $sZipDumpImportWarn,
        $sZipDumpExportWarn
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Perform config checks for zip part.
     *
     * @param string $sZipDumpImportWarn Zip dump import warning
     * @param string $sZipDumpExportWarn Zip dump export warning
     *
     * @return void
     */
    protected function performConfigChecksServersZipdump(
        $sZipDumpImportWarn,
        $sZipDumpExportWarn
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check config of servers
     *
     * @param boolean $cookieAuthUsed     Cookie auth is used
     * @param boolean $blowfishSecretSet  Blowfish secret set
     * @param string  $sBlowfishSecretMsg Blowfish secret message
     * @param string  $blowfishSecret     Blowfish secret
     *
     * @return array
     */
    protected function performConfigChecksCookieAuthUsed(
        $cookieAuthUsed,
        $blowfishSecretSet,
        $sBlowfishSecretMsg,
        $blowfishSecret
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Define all messages
     *
     * @return array
     */
    protected static function defineMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check configuration for login cookie
     *
     * @param string $sLoginCookieValidityWarn  Warning 1 for login cookie validity
     * @param string $sLoginCookieValidityWarn2 Warning 2 for login cookie validity
     * @param string $sLoginCookieValidityWarn3 Warning 3 for login cookie validity
     *
     * @return void
     */
    protected function performConfigChecksLoginCookie(
        $sLoginCookieValidityWarn,
        $sLoginCookieValidityWarn2,
        $sLoginCookieValidityWarn3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check GZipDump configuration
     *
     * @param string $sBZipDumpWarn Warning for BZipDumpWarning
     *
     * @return void
     */
    protected function performConfigChecksServerBZipdump($sBZipDumpWarn)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check GZipDump configuration
     *
     * @param string $sGZipDumpWarn Warning for GZipDumpWarning
     *
     * @return void
     */
    protected function performConfigChecksServerGZipdump($sGZipDumpWarn)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
