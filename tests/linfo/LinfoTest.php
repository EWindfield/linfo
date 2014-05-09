<?php

class LinfoTest extends PHPUnit_Framework_TestCase {

  protected static $linfo;

  public static function setUpBeforeClass() {
    self::$linfo = new Linfo;
  }

  public static function tearDownAfterClass() {
    self::$linfo = null;
    LinfoCommon::unconfig();
  }

  /**
   * @test
   */
  public static function getLang() {
    self::assertTrue(is_array(self::$linfo->getLang()));
  }

  /**
   * @test
   */
  public static function getSettings() {
    self::assertTrue(is_array(self::$linfo->getSettings()));
  }

  /**
   * @test
   */
  public static function getAppName() {
    self::assertTrue(is_string(self::$linfo->getAppName()));
  }

  /**
   * @test
   */
  public static function getVersion() {
    self::assertTrue(is_string(self::$linfo->getVersion()));
  }

  /**
   * @test
   */
  public static function getTimeStart() {
    self::assertTrue(is_float(self::$linfo->getTimeStart()));
  }

  /**
   * @test
   */
  public static function getParser() {
    self::assertInstanceOf('OS', self::$linfo->getParser());
  }
}
