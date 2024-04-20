<?php

namespace App;

class Truncater
{
    public static $defaultOptions = [
        "separator" => '...',
        "length" => 50
    ];

    private $options;

    public function __construct($options = [])
    {
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    public function truncate(string $text, $options = [])
    {
        $options = array_merge($this->options, $options);

        if (mb_strlen($text) <= $options['length']) {
            return $text;
        }

        $truncated = mb_substr($text, 0, $options['length']);
        $truncated .= $options['separator'];

        return $truncated;
    }
}

