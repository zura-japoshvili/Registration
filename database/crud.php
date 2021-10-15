<?php 
    class crud {
        private $db;

        function __construct($conn) {
            $this->db = $conn;            
        }

        public function insert($fname,$lname,$email,$pass){
            try{
                $sql = "INSERT INTO attendee(firstname,lastname,emailaddress,password) VALUES(:fname,:lname,:email,:pass)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(":fname",$fname);
                $stmt->bindparam(":lname",$lname);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":pass",$pass);

                $stmt->execute();
                return true;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }

        }
    }
?>