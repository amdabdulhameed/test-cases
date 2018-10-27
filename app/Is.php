<?php

namespace App;

class Is
{
    public function array($array): bool
    {
        return is_array($array);
    }

    public function object($object): bool
    {
        return is_object($object);
    }

    public function string($string): bool
    {
        return is_string($string);
    }

    public function integer($integer): bool
    {
        return is_int($integer);
    }

    public function boolean($boolean): bool
    {
        return is_bool($boolean);
    }

    public function float($float): bool
    {
        return is_float($float);
    }

    public function email($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function url($url): bool
    {
        return preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url);
    }

    public function domain($domain): bool
    {
        return preg_match("/[^.]+\.[^.]+$/", $domain);
    }

    public function ip($domain) : bool
    {
        return filter_var($domain, FILTER_VALIDATE_IP);
    }
}
