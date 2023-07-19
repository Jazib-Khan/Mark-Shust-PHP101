<?php declare(strict_types=1); 

namespace App;

// require('classes/Author.php');


class Post {

    // PHP Function
    public static function getAll() : array
    {

        // Creates an instance of the Author class
        $author1 = new Author('Jazib Khan');
        $author2 = new Author('John Doe');
        $author3 = new Author('Jane Doe');

        $posts = [
            [
                'title' => 'My first post',
                'content' => 'Conent for HTML post',
                'author' => $author1->getName(),
            ],
            [
                'title' => 'My second post',
                'content' => 'Conent for PHP post',
                'author' => $author2->getName(),
            ],
            [
                'title' => 'My third post',
                'content' => 'Conent for SQL post',
                'author' => $author3->getName(),
            ],
        ];

        return $posts;

    }

    // : String is a return type that defines what type of data is returned
    // static function means that the function can be called without creating an instance of the class
    public static function getText(int $numPosts) : String
    {
        // Ternary Operator
        return $numPosts === 1 ? 'post' : 'posts'; 
    }
}



?>