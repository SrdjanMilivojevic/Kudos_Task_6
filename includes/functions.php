<?php

class NewsLetter
{

    private static $_instance = null;

    public static function getInstance()
    {

        if (self::$_instance == null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function send()
    {

    }

    public function save()
    {

    }
}
