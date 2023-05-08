<?php 



namespace Lani\Belajar;

class User{
    public function __construct(private string $nama)
    {
        
    }

    public function sayHello(string $nama){
        echo "Hi $nama Perkenalkan nama saya $this->nama" . PHP_EOL;
    }
}



?>