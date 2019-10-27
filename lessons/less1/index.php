<?php

// задания 1-4 в папке classes

include 'classes/Product.php';
include 'classes/Computer.php';
include 'classes/Book.php';

$computer1 =  new Computer('Gamer', 100, 'intel');
$computer2 = new Computer('Office', 70, 'AMD');
$book1 = new Book('Тихий Дон', 50, 800);
$book2 = new Book('Война и мир', 200, 450);

echo $computer1->getProduct();
echo $computer2->getProduct();
echo $book1->getProduct();
echo $book2->getProduct();

// задание - 5 Что он выведет на каждом шаге? Почему?
// Выводит числа 1,2,3,4 потому что метод класса вызывается 4 раза 
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();


// Задание - 6. Объясните результаты в этом случае.
// выводится сначала 1 и 1  затем 2 и 2 , т.к. происходит вызовы метода по 2 раза 
// в базовом классе А и в классе наследнике В
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

// Задание - 7. *Дан код:
// Что он выведет на каждом шаге? Почему?
// тоже что и в задании 6, не нашел отличий.
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 
