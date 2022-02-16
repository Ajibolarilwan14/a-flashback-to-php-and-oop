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

    // $greeting = new Greet;
    // // $greeting->msg_1();

    // $greeting2 = new Greet2;
    // $greeting2->msg_1() . $greeting2->msg_2();

    class Testing {
        public static function greet()
        {
            echo "Hello Mr. Ajibola";
        }

        public function __construct()
        {
            self::greet();
        }
    }

    class Testing2 {
        public function welcome()
        {
            Testing::greet();
        }
    }

    // Testing::greet();
    // $test = new Testing2;
    // echo $test->welcome();

    class Domain {
        protected function get_website_name()
        {
            return "ajibolarilwan14.github.io";
        }
    }

    class Ajibola extends domain {
        public $website_name;

        public function __construct()
        {
            $this->website_name = parent::get_website_name();
        }
    }

    // $ajibola = new Ajibola;
    // echo $ajibola->website_name;

    class Pi {
        public static $pi = 3.142;

        public function staticValue()
        {
            return self::$pi;
        }
    }

    class x extends Pi {
        public function y()
        {
            return parent::$pi;
        }
    }

    // echo Pi::$pi;
    // $pi = new Pi;
    // echo $pi->staticValue();
    $pi = new x;
    // echo x::$pi;
    // echo $pi->y();

    // iterables
    function printIterables(iterable $my_iterable)
    {
        foreach ($my_iterable as $item) {
            # code...
            echo $item . '<br/>';
        }
    }

    // $arr = [1, 2, 'a', 3, '9'];
    // printIterables($arr);

    function get_iterable() : iterable
    {
        # code...
        return [2, 3, 5, 5, 9, 7];
    }

    // $myIterable = get_iterable();
    // foreach($myIterable as $item)
    // {
    //     echo $item . '<br/>';
    // }

    class my_iterables implements Iterator {
        public $items = [];
        public $pointer = 0;

        public function __construct($items)
        {
            $this->items = array_values($items);
        }

        public function next(): void
        {
            $this->pointer++;
        }

        public function current(): mixed
        {
            return $this->items[$this->pointer];
        }

        public function rewind(): void
        {
            $this->pointer = 0;
        }

        public function valid(): bool
        {
            return $this->pointer < count($this->items);
        }

        public function key(): mixed
        {
            return $this->pointer;
        }
    }

    // $iterator = new my_iterables([3, 4, 5, 8, 9, 0 ,3, 0, 9, 4, 5]);
    // printIterables($iterator);
    // echo $iterator->valid();

    // $pattern = '/la/i';
    // $str = 'Ajibola is in Baltimoore right now.';
    // echo preg_match_all($pattern, $str);

    // $pattern = '/otandtconsulting/i';
    // $str = 'works at otandtconsulting ltd';
    // echo preg_replace($pattern, 'tm30 Global', $str);
    // echo $str2;

    // ?file handling
    // $file = readfile('./demo.txt');
    // echo $file;
    // $file = fopen('./demo.txt', 'r') or die("Unable to find the specified file!");
    // echo fread($file, filesize('./demo.txt'));
    // echo fgets($file);
    // while (!(feof($file))) {
    //     # code...
    //     echo fgets($file). '<br/>';
    // }
    // while (!(feof($file))){
    //     echo fgetc($file) . '<br/>';
    // }
    // fclose($file);
    $file = fopen('./demo2.txt', 'w');
    $txt = 'The name of my dream car is suzuki!\n';
    fwrite($file, $txt);
    $txt = 'The name of my dream ride is bicycle!\n';
    fwrite($file, $txt);
    while (!(feof($file))) {
        # code...
        echo fread($file, filesize('./demo2.txt')) . '<br/>';
    }
    fclose($file);



?>