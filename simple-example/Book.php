<?php

namespace Training\Adapter\SimpleExample;

class Book implements BookInterface
{
    public bool $hasBeenRead = false;

    public function read(): void {
        $this->hasBeenRead = true;
    }
}
