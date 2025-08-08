<?php

namespace Training\Adapter\SimpleExample;

class AudioBook implements AudioBookInterface
{
    public bool $hasBeenListened = false;

    public function listen(): void
    {
        $this->hasBeenListened = true;
    }
}
