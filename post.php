<?php include('db.php');?>
<?php
class Post{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function addPost($title,$description){
        $sql = "INSERT INTO posts(title,description) VALUES('$title','$description')";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }
}
?>