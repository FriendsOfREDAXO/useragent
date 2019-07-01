# Useragent

Das AddOn hilft bei der Ermittlung des Endgerätes. 

Neben der verkürzten Anwandung über die Useragent-Class, kann auch auf die mitgelieferten Vendor-Classes [Mobile_detect](https://github.com/serbanghita/Mobile-Detect) und [Browser.php](https://chrisschuld.com/projects/browser-php-detecting-a-users-browser-from-php/) direkt zurückgegriffen werden. 

## Anwendung über die Useragent-Class:

### Prüfen ob das aktuelle Gerät ein Smartphone oder Tablet ist

```php 
if (useragent::isMobile()) {
//...
}
```

### Prüfen ob das aktuelle Gerät ein Smartphone ist

```php
if (useragent::isSmartphone()) {
//...
}
```

### Prüfen ob das aktuelle Gerät ein Tablet ist

```php 
if (useragent::isTablet()) {
//...
}
```    

### Prüfen ob der aktuelle Browser Firefox ist

```php
if (useragent::isBrowserFirefox()) {
//...
}
```

### Prüfen ob der aktuelle Browser Opera ist

```php
if (useragent::isBrowserOpera()) {
//...
}
 ```

### Prüfen ob der aktuelle Browser Safari ist

```php
if (useragent::isBrowserSafari()) {
//...
}
```

### Prüfen ob der aktuelle Browser Chrome ist

```php
if (useragent::isBrowserChrome()) {
//...
}
```

### Prüfen ob der aktuelle Browser Internet Explorer ist

```php
if (useragent::isBrowserInternetExplorer()) {
//...
}
```

### Prüfen ob der aktuelle Browser Edge ist

```php
if (useragent::isBrowserInternetEdge()) {
//...
}
```

