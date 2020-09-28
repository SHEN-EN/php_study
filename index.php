<?php
    require_once('./interface.php');
    require_once('./abstract.php');
    class Human implements ccc{
        private $breath = 'yes';
        private $eat = 'yes';
        private static $fire = 'yes';
        public function eat($food)
        {
            echo $food." human";
        }
        public function breath($air)
        {
            echo $air." human";
        }
        public function __construct($breath,$eat)
        {   
            $this->breath=$breath;
            $this->eat=$eat;
        }
         public function say()
        {
            echo $this->breath;
            echo $this->eat;
        }
        public static  function staticFunction()
        {
                
                echo self::$fire;
        }
    }
    class person extends Human{
         public function FunctionName()
        {
           
        }
    }
    class test extends abs{
        public function get($get)
        {
           echo $get;
        }
        public function set($set)
        {
            echo $set;

        }
    }
    $test = new test();
    $test->get('aaa');
    $test->put('aaa');
    $a = new person('cay','cat');
    $a->eat('banner');
    // Human::staticFunction();
    $new = new Human('no','no');
    $new->eat('apple'); 
    if ($a instanceof $new) {
        
    }
    
?>