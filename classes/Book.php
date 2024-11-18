<?php

class Book
{
    public string $name;
    public string $author;
    public string $isbn;
    public bool $availability;

    function __construct(string $name, string $author, string $isbn, bool $availability)
    {
        $this->name = $name;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->availability = $availability;
    }
}