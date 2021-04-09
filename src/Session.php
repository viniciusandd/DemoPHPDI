<?php

namespace App;

class Session
{
    private $adapter;

    public function __construct(SessionInterface $adapter)
    {
        $this->adapter = $adapter;
    }
    
    public function get($var)
    {
        return $this->adapter->get($var);
    }
    public function set($var, $value)
    {
        $this->adapter->set($var, $value);
    }
}