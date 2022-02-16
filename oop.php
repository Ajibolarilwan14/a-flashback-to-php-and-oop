<?php 
    // class Fruit {
    //     public $name;
    //     public $color;

    //     public function getName()
    //     {
    //         return $this->name;
    //     }

    //     public function setName($name)
    //     {
    //         $this->name = $name;
    //     }
        
    //     public function set_color($color)
    //     {
    //         $this->color = $color;
    //     }

    //     public function get_color()
    //     {
    //         return $this->color;
    //     }
    // }

    // $apple = new Fruit();
    // // $apple->setName("Orange");
    // $apple->name = "Apple";
    // $apple->set_color("Yellow");
    // echo $apple->getName() . '<br/>';
    // echo $apple->get_color() . '<br/>';
    // var_dump($apple instanceof Fruit);

    // class Car {
    //     public $brand, $year;

    //     public function __construct($name, $year)
    //     {
    //         $this->name = $name;
    //         $this->year = $year;
    //     }

    //     public function get_name()
    //     {
    //         return $this->name;
    //     }

    //     public function get_year()
    //     {
    //         return $this->year;
    //     }

    //     public function __destruct()
    //     {
    //         echo "The car name is {$this->name} and the year is {$this->year}";
    //     }
    // }

    // // $car = new Car("Geely", 2022);

    // // echo $car->get_name() . $car->get_year();

    // // access modifiers
    // class Person {
    //     // public $name;
    //     // protected $age;
    //     // private $color; 
    //     public $name;
    //     public $age;
    //     public $color;

    //     public function set_name($name)
    //     {
    //         $this->name = $name;
    //     }

    //     protected function set_age($age)
    //     {
    //         $this->age = $age;
    //     }

    //     private function set_color($color)
    //     {
    //         $this->color = $color;
    //     }
    // }

    // $person = new Person();
    // $name = $person->set_name("Ridwan");
    // $age = $person->set_age(26);
    // $color = $person->set_color("Black");

    // echo $name;

    // Inheritance
    // class Fruit {
    //     public $name, $color;

    //     public function __construct($name, $color)
    //     {
    //         $this->name = $name;
    //         $this->color = $color;
    //     }

    //     public function intro()
    //     {
    //         echo "I am {$this->name} with the color of {$this->color}";
    //     }

    //     protected function protect()
    //     {
    //         echo "Oh sorrry subclass, this can only be access in a class but not outside a class";
    //     }
    // }

    // class Banana extends Fruit {
    //     const TYPE = "I'm just a fruit";
    //     public $weight;

    //     public function __construct($name, $color, $weight)
    //     {
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }

    //     public function intro()
    //     {
    //         echo "I am a {$this->name} with a color of {$this->color} and a weight of {$this->weight}";
    //     }

    //     public function message()
    //     {
    //         echo "I'm inside the banana class!" . $this->protect();
    //         echo SELF::TYPE;
    //     }
    // }

    // $banana = new Banana("Banana", "Green", 22);
    // $banana->intro();
    // $banana->message();
    // // $banana->protect();
    // $osan = new Fruit("Orange", "Yellow");
    // $osan->intro();
    // $osan->message();
    // echo Banana::TYPE;

    // Abstract class
    abstract class Car {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        abstract public function intro() : string;
    }

    class Geely extends Car {
        public function intro(): string
        {
            return "I am proud to be an American because I'm a " . $this->name;
        }
    }

    class Benz extends Car {
        public function intro(): string
        {
            return "I am proud to be a Uknian because I'm a " . $this->name;
        }
    }

    // $geely = new Geely("Geely");
    // echo $geely->intro() . '<br/>';

    // $benz = new Benz("Benz");
    // echo $benz->intro() . '<br/>';

    // abstract class ParentClass {
    //     abstract protected function prefixName($name) : string;
    // }

    // class ChildClass extends ParentClass {
    //     public function prefixName($name) : string
    //     {
    //         if ($name == 'Adebayo Rilwan') {
    //             # code...
    //             $prefix = 'Mr.';
    //         } else if($name == 'Adebayo Olabisi') {
    //             # code...
    //             $prefix = 'Mrs.';
    //         } else {
    //             # code...
    //             $prefix = '';
    //         }

    //         return "{$prefix} {$name}";
            
    //     }
    // }

    // $name = new ChildClass();
    // echo $name->prefixName("Adebayo Olabisi");

    interface Animal {
        public function make_sound();
    }

    class Cat implements Animal {
        public function make_sound()
        {
            echo "Meow!";
        }
    }

    class Dog implements Animal {
        public function make_sound()
        {
            echo "Bark!";
        }
    }

    class Rat implements Animal {
        public function make_sound()
        {
            echo "Squeak!";
        }
    }

    $cat = new Cat();
    $dog = new Dog;
    $rat = new Rat();

    $animals = array($cat, $dog, $rat);

    // foreach ($animals as $animal) {
    //     # code...
    //     echo $animal->make_sound() . '<br/>';
    // }

    trait message_1 {
        public function msg()
        {
            echo "My name is Adebayo Rilwan Ajibola";
        }
    }

    class Welcome {
        use message_1;
    }

    // $intro = new Welcome;
    // echo $intro->msg();

    trait first_message {
        public function msg_1()
        {
            echo "My name is Adebayo Rilwan Ajibola";
        }
    }

    trait second_message {
        public function msg_2()
        {
            echo "I'm a Software Engineer from West Africa";
        }
    }

    class Greet {
        use first_message;
    }

    class Greet2 {
        use first_message, second_message;
    }

    $greeting = new Greet;
    // $greeting->msg_1();

    $greeting2 = new Greet2;
    $greeting2->msg_1() . $greeting2->msg_2();
?>