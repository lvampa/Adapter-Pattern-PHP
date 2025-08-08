<?php

namespace Training\Adapter\SimpleExample;

class LibraryPatron implements LibraryPatronInterface
{
    public function readBook(BookInterface $book): void
    {
        $book->read();
    }
}
