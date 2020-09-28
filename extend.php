<?php
require_once('./index.php');
    class ani extends Human{
         public function cant()
        {
            echo $this->breath;
        }
    }
    $a=new Human('cant','cant');
    echo $a->say();
    Human::staticFunction();
?>