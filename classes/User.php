<?php

class User
{
    protected string $userId, $email, $password, $loaned_books;

    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
}