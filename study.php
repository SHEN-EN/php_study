<?php
   $P=require_once('./db.php');
    class study{
      private $db;
        public function __construct(PDO $P){
            $this->db=$P;
        }
        public function select()
        {
            foreach ($this->db->query('SELECT * from tb_user') as $key) {
                echo $key;
            }
        }
    }
     $study = new study($P);
     $study->select();
?>