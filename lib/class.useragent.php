<?php

use Detection;

class useragent
{
	private static $mobiledetect;
	private static $browser;

	private static function init()
	{
		self::$mobiledetect = new Detection\MobileDetect;
		self::$browser = new Browser;
	}

	//Start - methods from Mobile_Detect
	public static function isMobile()
	{
		if (empty(self::$mobiledetect)) {
			self::init();
		}

		return self::$mobiledetect->isMobile();
	}

	public static function isSmartphone()
	{
		return self::isMobile() && !self::isTablet();
	}

	public static function isTablet()
	{
		if (empty(self::$mobiledetect)) {
			self::init();
		}

		return self::$mobiledetect->isTablet();
	}
	//End - methods from Mobile_Detect

	//Start - methods from Browser
	public static function getBrowser()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser();
	}

	public static function getBrowserVersion()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getVersion();
	}

	public static function isBrowserFirefox()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser() == Browser::BROWSER_FIREFOX;
	}

	public static function isBrowserOpera()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser() == Browser::BROWSER_OPERA;
	}

	public static function isBrowserSafari()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser() == Browser::BROWSER_SAFARI;
	}

	public static function isBrowserChrome()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser() == Browser::BROWSER_CHROME;
	}

	public static function isBrowserInternetExplorer()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser() == Browser::BROWSER_IE;
	}

	public static function isBrowserEdge()
	{
		if (empty(self::$browser)) {
			self::init();
		}

		return self::$browser->getBrowser() == Browser::BROWSER_EDGE;
	}
	//End - methods from Browser
}
