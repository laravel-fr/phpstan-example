<?php

namespace LaravelFrance\PhpstanExample;

class Hello
{
    public function say(string $name): string
    {
        return "$name say Hello to the world";
    }
}
