<?php

namespace App;

class PhpSessionAdapter implements SessionInterface
{
    public function get($var)
    {
        return isset($_SESSION[$var]) ? $_SESSION[$var] : null;
    }

    public function set($var, $value)
    {
        $_SESSION[$var] = $value;
    }
}