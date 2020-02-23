[![Build Status](https://travis-ci.com/Lablnet/PHP-Encryption.svg?branch=master)](https://travis-ci.com/Lablnet/PHP-Encryption)
[![StyleCI](https://github.styleci.io/repos/169368362/shield?branch=master)](https://github.styleci.io/repos/169368362)

# PHP Encryption
Encryption in PHP.

## Requirement
1. PHP 7 (7.3 Recommanded).
2. Composer.
3. openSSL php extension.
4. Sodium php extension for use sodium adapter.

## Insallation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run:
``` composer require lablnet/encryption ```


## Encrypt
You can encrypt string by calling to encrypt method

```php 
<?php 
use Lablnet\Encryption;
require '../vendor/autoload.php';

$encryption = new Encryption('your-key');

//Encrypt the message
$encrypt = $encryption->encrypt("This is a text");

echo $encrypt;
```

### Decrypt
You can decrypt token by calling decrypt method 

```php 
<?php 
use Lablnet\Encryption;
require '../vendor/autoload.php';

$encryption = new Encryption('your-key');

//Decrypt the message
$decrypt = $encryption->decrypt($encrypt);	
echo $decrypt;
```

### Adapter
This Package support two encryption adapter
- OpenSSL
- Sodium

Default openSSL will use,
you can use any one you want.

### change Adapter
You can pass supported adapter to class like

Use of sodium
```php 
<?php 
use Lablnet\Encryption;
require '../vendor/autoload.php';

$encryption = new Encryption('your-key','sodium');
```
Use of openSSL
```php 
<?php 
use Lablnet\Encryption;
require '../vendor/autoload.php';

$encryption = new Encryption('your-key','openssl');
```

## Contributions  
There is still a lot of work to do, so feel free to contribute to open `PR`  
  
## License  
MIT  
  
## Support  
Donate coffee?  
here is the bitcoin address  
[![Balance](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)

   ```37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV```  
  
Thanks you so much.

## Disclaimer
**I don't Accept any responsibility for any illegal usage**
