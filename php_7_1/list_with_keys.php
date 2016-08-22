<?php
// list() now supports keys

$a = ['A' => 1, 'B' => 2, 'C' => 3];
list('A' => $apple, 'B' => $banana, 'C' => $cherries) = $a;
var_dump($apple, $banana, $cherries);

class ElePHPant
{
    private $age, $name, $colour;

    public function __construct(array $attributes) {
        list(
            "age" => $this->age,
            "name" => $this->name,
            "colour" => $this->colour,
        ) = $attributes;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getColour()
    {
        return $this->colour;
    }

}

$e = new ElePHPant(['age' => 32, 'name' => 'Tantor', 'colour' => 'blue']);
printf('%8s : %10s' . PHP_EOL, 'Age', $e->getAge());
printf('%8s : %10s' . PHP_EOL, 'Name', $e->getName());
printf('%8s : %10s' . PHP_EOL, 'Colour', $e->getColour());
