<?php

namespace Training\Adapter\SimpleExample;

interface LibraryPatronInterface
{
    public function readBook(BookInterface $book): void;
}
