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

$encryption = new Encryption();

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

$encryption = new Encryption();

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

$encryption = new Encryption('sodium');
```
Use of openSSL
```php 
<?php 
use Lablnet\Encryption;
require '../vendor/autoload.php';

$encryption = new Encryption('openssl');

//You can also provide your own key for openSSL
$encryption1 = new Encryption('openssl','my-key');
```
