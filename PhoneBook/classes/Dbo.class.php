<?php 
class Model {

    private $servername = 'localhost';
    private $username = 'root';
    private $password = '1900';
    private $dbname = 'Login';
    private $conn;
    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($this->conn->connect_error) {
            echo 'Connection Failed';
        } else {
            $this->conn;
        }
        
    }
    public function insertData($post) {
        $fname = $post['fname'];
        $email = $post['lname'];
        $num = $post['num'];
        $sql = "INSERT INTO `PhoneBook` (fname, lname, num) VALUES ('$fname', '$email', '$num')";
        $result = $this->conn->query($sql);
        if($result) {
            header('location:');
        }else{
            echo "Error".$sql." <br>" .$this->conn->error;
        }
    }

   //display data record
    public function SelectData(){
        $sql = "SELECT * FROM PhoneBook";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    //update data record
    //display data record by id
    public function editData($editid){
        $sql = "SELECT * FROM `PhoneBook` WHERE `id` = '$editid'";
        $result = $this->conn->query($sql);
        if ($result->num_rows==1) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }
    //update data record
    public function updateData($post){
        $fname = $post['fname'];
        $lname = $post['lname'];
        $num = $post['num'];
        $edit_id = $post['update_id'];
        $sql = "UPDATE PhoneBook SET fname='$fname', lname='$lname', `num`='$num' WHERE id='$edit_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header("Location: index.php?");
        }else{
            echo "Error " .$sql."<br>".$this->conn->error;
        }
    }
    public function deleteData($del_id){
        $sql = "DELETE FROM `PhoneBook` WHERE `id` = '$del_id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header("Location: index.php");
        }else{
            echo "Error " .$sql."<br>".$this->conn->error;
        }
    }
}
?>