<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Collector;

use Satooshi\Bundle\CoverallsV1Bundle\Entity\JsonFile;
use Satooshi\Bundle\CoverallsV1Bundle\Entity\SourceFile;
use Satooshi\ProjectTestCase;

/**
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Collector\CloverXmlCoverageCollector
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class CloverXmlCoverageCollectorTest extends ProjectTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createCloverXml()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getJsonFile()

    /**
     * @test
     */
    public function shouldNotHaveJsonFileOnConstruction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // collect() under srcDir

    /**
     * @test
     */
    public function shouldCollect()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollect
     */
    public function shouldCollectSourceFiles(JsonFile $jsonFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectSourceFiles
     */
    public function shouldCollectSourceFileTest1(JsonFile $jsonFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectSourceFiles
     */
    public function shouldCollectSourceFileTest2(JsonFile $jsonFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // collect() under /

    /**
     * @test
     */
    public function shouldCollectUnderRootDir()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectUnderRootDir
     */
    public function shouldCollectSourceFilesUnderRootDir(JsonFile $jsonFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectSourceFilesUnderRootDir
     */
    public function shouldCollectSourceFileTest1UnderRootDir(JsonFile $jsonFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectSourceFilesUnderRootDir
     */
    public function shouldCollectSourceFileTest2UnderRootDir(JsonFile $jsonFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // custom assert

    protected function assertJsonFile($jsonFile, $serviceName, $serviceJobId, $repoToken, $git, $runAt)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertSourceFile(SourceFile $sourceFile, $name, $path, $fileLines, array $coverage, $source)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertSourceFileTest1(SourceFile $sourceFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertSourceFileTest2(SourceFile $sourceFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertSourceFileTest1UnderRootDir(SourceFile $sourceFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertSourceFileTest2UnderRootDir(SourceFile $sourceFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
