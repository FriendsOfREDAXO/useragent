# UserAgent

UserAgent nutzt unter Anderem Mobile_Detect um zu erkennen mit welchem Browser, Betriebssystem und Gerätetyp der Besucher die Seite aufgerufen hat. Dabei liefert UserAgent diverse Informationen die aus dem mitgelieferten Header des Browsers aufbereitet werden.

##Support-Beschleunigung

[Amazon Wunschliste](https://www.amazon.de/gp/registry/wishlist/3IW6TE09RDGV2)

## Variablen

<table width="100%">
	<tr>
		<th>Wert</th>
		<th>Beschreibung</th>
	</tr>
	<tr>
		<td width="150">$ua->class</td>
		<td>Liefert eine Klasse, die alle nötigen Informationen über den Browser enthält. Besonders geeignet als class-Attribut im HTML-Tag. <b>class="mac chrome webkit ch47 noTouch"</b></td>
	</tr>
	<tr>
		<td width="150">$ua->tablet</td>
		<td>Ist das Gerät ein Tablet: true | false</td>
	</tr>
	<tr>
		<td width="150">$ua->touch</td>
		<td>Beschreibung.</td>
	</tr>
	<tr>
		<td width="150">$ua->shorty</td>
		<td>Browser-Kürzel: ie, ff, ch</td>
	</tr>
	<tr>
		<td width="150">$ua->version</td>
		<td>Browser-Version: ie 8|9|10</td>
	</tr>
	<tr>
		<td width="150">$ua->engine</td>
		<td>Browser-Engine: gecko, trident, ...</td>
	</tr>
	<tr>
		<td width="150">$ua->mobile</td>
		<td>Mobile-Gerät: true | false.</td>
	</tr>
</table>

## Template / Beispiel

Im folgenden Code-Beispiel kann man sehen, wie die oben gezeigten Variablen genutzt werden können.

```
<?php
$ua = new UserAgent();
$ua = $ua->getAgent();
?><!DOCTYPE html>
<html class="<?php echo $ua->class;?> no-js" lang="de-CH">
    <!-- html goes here -->
    <head>
        <!-- head options ... -->
        <?php if($ua->mobile || $ua->tablet) {?>
        <link rel="apple-touch-icon" href="_img/res/apple-touch-icon-precomposed.png">
        <meta name="msapplication-TileImage" content="_img/res/apple-touch-icon-precomposed.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <?php }?>
        <!-- more head options ... -->
    </head>
</html>
```

### no-js

In einem Javascript-File dass später geladen wird, kann dann no-js wie folgt entfernt werden:

```
document.documentElement.className = document.documentElement.className.replace(/[ ]*no-js/,'');
```
