<?php namespace Gbuckingham89\Laraflash;

use Illuminate\Session\Store;

/**
 * Class LaravelSessionStorage
 * @package Gbuckingham89\Laraflash
 */
class LaravelSessionStorage implements SessionStorage
{
    /**
     * @var \Illuminate\Session\Store
     */
    private $session;

    /**
     * LaravelSessionStorage constructor.
     *
     * @param \Illuminate\Session\Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function flash($key, $value)
    {
        $this->session->flash($key, $value);
    }
}