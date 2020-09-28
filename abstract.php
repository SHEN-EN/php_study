<?php
 abstract  class abs{
    abstract public function get($get);
    abstract public function set($set);
    public function put()
    {
        echo 'abstract';
    }
 }

?>