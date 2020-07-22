<?php
/*
@PDO
*/
class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "db_userdb";
    private $username = "root";
    private $password = "Dbuser@1234";
    // public $conn;
    // Set auto connections
    public function __construct()
    { 
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;

      //
    }
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
/**
*@ all common db operation
* dld_, dldb_, dldf
*/
public function dldbSingleRowId($uid=3){
    $data=[3, 5, 'ROhit'];
    $query = "SELECT
*
FROM Telpas_course_users WHERE id=3
ORDER BY
created_at";  

$stmt = $this->conn->prepare( $query );
$stmt->execute();
$result = $stmt -> fetch();// fetchAll

// print_r($result); // die;
// foreach( $result as $row ) {
//     print_r($row); die;
// }
return $result;

}

//
}
?>
