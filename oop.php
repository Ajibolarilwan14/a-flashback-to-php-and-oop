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

    class Car {
        public $brand, $year;

        public function __construct($name, $year)
        {
            $this->name = $name;
            $this->year = $year;
        }

        public function get_name()
        {
            return $this->name;
        }

        public function get_year()
        {
            return $this->year;
        }

        public function __destruct()
        {
            echo "The car name is {$this->name} and the year is {$this->year}";
        }
    }

    // $car = new Car("Geely", 2022);

    // echo $car->get_name() . $car->get_year();

    // access modifiers
    class Person {
        // public $name;
        // protected $age;
        // private $color; 
        public $name;
        public $age;
        public $color;

        public function set_name($name)
        {
            $this->name = $name;
        }

        protected function set_age($age)
        {
            $this->age = $age;
        }

        private function set_color($color)
        {
            $this->color = $color;
        }
    }

    $person = new Person();
    $name = $person->set_name("Ridwan");
    $age = $person->set_age(26);
    $color = $person->set_color("Black");

    echo $name;
?>