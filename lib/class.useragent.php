<?php
	class useragent {
		private static $detect;
		
		private static function init() {
			self::$detect = new Mobile_Detect;
		}
		
		public static function isMobile() {
			if (empty(self::$detect)) {
				self::init();
			}
			
			return self::$detect->isMobile();
		}
		
		public static function isSmartphone() {
			return self::isMobile() && !self::isTablet();
		}
		
		public static function isTablet() {
			if (empty(self::$detect)) {
				self::init();
			}
			
			return self::$detect->isTablet();
		}
		
		public static function isiOS() {
			if (empty(self::$detect)) {
				self::init();
			}
			
			return self::$detect->isiOS();
		}
		
		public static function isAndroidOS() {
			if (empty(self::$detect)) {
				self::init();
			}
			
			return self::$detect->isAndroidOS();
		}
	}
?>