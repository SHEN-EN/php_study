<?php
class db{
   private $dns="mysql:host=localhost;dbname=php_test";
   private $user="root";
   private $password="123456";
   public function connection()
   {
        try {
            $PDO = new PDO($this->dns,$this->user,$this->password);
            return $PDO;
        } catch (PDOException $e) {
            return "Error!: " . $e->getMessage() . "<br/>";
        }
      
   }
}
$db=new db();
return $db->connection();
?>