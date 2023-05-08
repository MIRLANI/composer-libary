<?php 


namespace MuhammadMirlani\ComposerLibary;

class Constumer{
    public function __construct(private string $nama)
    {
        
    }

    public function sayHello(string $nama):string
    {
        return "Hello $nama perkenalkan nama saya $this->nama";
    }
}


?>