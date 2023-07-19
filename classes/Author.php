<?php declare(strict_types=1); 

// namespace defines the namespace of the class
namespace App;

class Author
{

    public function __construct(
        private string $name
    ){}

    public function getName() : string
    {
        return $this->name;
    }
}


?>