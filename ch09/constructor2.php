<?php  
    class Fruit {
        private $name;
        private $color;
        private $price;

        public function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }
    

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function setColor($color) {
            $this->color = $color;
            return $this;
        }

        public function setPrice($price) {
            $this->price = $price;
            return $this;
        }
    }

$apple1 = (new Fruit)->setName("사과");
$apple1->print_fruit();

$apple2 = (new Fruit)
            ->setColor("파란")
            ->setPrice(1000);

$apple2->print_fruit();
