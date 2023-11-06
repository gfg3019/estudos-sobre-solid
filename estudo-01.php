<?php

interface JogarInterface
{
    public function jogar();
}

class Pedra implements JogarInterface
{
    public function jogar()
    {
        return 'jogar pedra';
    }
}


class Person
{
    public function jogar(JogarInterface $chupeta)
    {
        var_dump($chupeta->jogar());
    }
}

$person = new Person();
$person->jogar(new Pedra());