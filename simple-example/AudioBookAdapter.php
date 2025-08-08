<?php

namespace Training\Adapter\SimpleExample;

class AudioBookAdapter implements BookInterface
{
    public bool $hasBeenRead = false;

    public function __construct(public AudioBook $audiobook) {}

    public function read(): void
    {
        $this->audiobook->listen();
        $this->hasBeenRead = $this->audiobook->hasBeenListened;
    }
}
