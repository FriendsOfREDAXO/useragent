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
	$code .= "	if (useragent::isBrowserFirefox()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob der aktuelle Browser Firefox ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isBrowserOpera()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob der aktuelle Browser Opera ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isBrowserSafari()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob der aktuelle Browser Safari ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isBrowserChrome()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob der aktuelle Browser Chrome ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isBrowserInternetExplorer()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob der aktuelle Browser Internet Explorer ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	if (useragent::isBrowserEdge()) {".PHP_EOL;
	$code .= "		//...".PHP_EOL;
	$code .= "	}".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', 'Prüfen ob der aktuelle Browser Edge ist', false); //todo: translate
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
?>