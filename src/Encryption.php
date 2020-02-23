<?php

/**
 * This file is part of the Zest Framework.
 *
 * @author   Malik Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/malikumerfarooq01/
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @since 3.0.0
 *
 * @license MIT
 */

namespace Lablnet;

use InvalidArgumentException;

class Encryption
{
    /**
     * Store the adapter object.
     *
     * @since 3.0.0
     *
     * @var object
     */
    private $adapter = null;

    /**
     * Store the key.
     *
     * @note This property is not a part of Zest Framework.
     *
     * @var mixed
     */
    private $key = '';

    /**
     * __construct.
     *
     * @since 3.0.0
     */
    public function __construct($key, $adapter = null)
    {
        $this->setKey($key);
        ($adapter !== null) ? $this->setAdapter($adapter) : $this->setAdapter('openssl');
    }

    /**
     * Set the adapter.
     *
     * @param (string) $adapter
     *
     * @since 3.0.0
     *
     * @return object
     */
    public function setAdapter($adapter)
    {
        switch (strtolower($adapter)) {
            case 'sodium':
                $adapterSet = '\Lablnet\Adapter\SodiumEncryption';
                break;
            case 'openssl':
                $adapterSet = '\Lablnet\Adapter\OpenSslEncryption';
                break;
            default:
                $adapterSet = '\Lablnet\Adapter\OpenSslEncryption';
                break;
        }

        $this->adapter = new $adapterSet($this->key);

        return $this;
    }

    /**
     * Set the encryption key for openSSL.
     *
     * @param (mixed) $key a valid key
     *
     * @note This method is not a part of Zest Framework.
     *
     * @return mixed
     */
    public function setKey($key)
    {
        if ($key === '') {
            throw new InvalidArgumentException('The key should not be empty string.');
        }

        $this->key = $key;

        return $this;
    }

    /**
     * Encrypt the message.
     *
     * @param (mixed) $data data to be encrypted
     *
     * @since 3.0.0
     *
     * @return mixed
     */
    public function encrypt($data)
    {
        return $this->adapter->encrypt($data);
    }

    /**
     * Decrypt the message.
     *
     * @param (mixed) $token encrypted token
     *
     * @since 3.0.0
     *
     * @return mixed
     */
    public function decrypt($token)
    {
        return $this->adapter->decrypt($token);
    }
}
