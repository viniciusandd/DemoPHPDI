<?php

namespace App;

interface SessionInterface
{
    public function get($var);
    public function set($var, $value);
}