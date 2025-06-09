<?php
declare(strict_types=1);

/**
 * Example class with static and non-static properties.
 */
class A {
    public int $a;
    public string $b;
    public static array $c = [];

    public function __construct(int $a = 10, string $b = "novo") {
        $this->a = $a;
        $this->b = $b;
        self::$c = [0 => "Item1", 1 => "Item2", 2 => "Item3"];
    }
}

$a = new A();
echo "<pre>";
echo $a->a; // non-static property
echo "<br>";
echo $a->b;
echo "<br>";
var_dump(A::$c); // static property
