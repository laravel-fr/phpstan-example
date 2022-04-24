<?php

namespace LaravelFrance\PhpstanExample;

class Hello
{
    public function say(string $name): string
    {
        if (is_string($name)) {
            return "$name say Hello to the world";
        }

        return "name is not a string";
    }
}
