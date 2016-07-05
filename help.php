<?php
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isMobile()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob das aktuelle Gerät ein Smartphone oder Tablet ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isSmartphone()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob das aktuelle Gerät ein Smartphone ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isTablet()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob das aktuelle Gerät ein Tablet ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isiOS()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob das aktuelle Gerät iOS nutzt', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isAndroidOS()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob das aktuelle Gerät Android nutzt', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
?>