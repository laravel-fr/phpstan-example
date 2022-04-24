<?php

namespace LaravelFrance\PhpstanExample;

class Hello
{
    public function say(string $name): bool
    {
        return "$name say Hello to the world";
    }
}
