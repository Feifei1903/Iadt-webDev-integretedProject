<?php
class Story {

    public $id;
    public $author;
    public $heading;
    public $sub_heading;
    public $article;
    public $images;
    public $published_date;
    public $category_id;

    public function __construct($props = null) {
        if ($props != null) {
            $this->id = $props["id"];
            $this->author = $props["author"];
            $this->heading = $props["heading"];
            $this->sub_heading = $props["sub_heading"];
            $this->article = $props["article"];
            $this->images = $props["images"];
            $this->published_date = $props["published_date"];
            $this->category_id = $props["category_id"];
        }
    }

  
    public function save() {
        // not yet written
    }

    public function delete() {
       // not yet written
    
    }

    public static function findAll() {
        $stories = array();
       
        try {
            $db = new DB();
            $conn = $db->open();
           // $conn = $db->getConnection();

            $sql = "SELECT * FROM stories";
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute();

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message = "SQLSTATE error code = ".$error_info[0]."; error message = ".$error_info[2];
                throw new Exception("Database error executing database query: " . $message);
            }

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                while ($row !== FALSE) {
                    $story = new Story($row);
                    $stories[] = $story;

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $stories;
    }
    
    public static function findAllLimit($limit, $offset) {
        $stories = array();
        
       
        try {
            $db = new DB();
            $conn = $db->open();
  //          $conn = $db->getConnection();

            $sql = "SELECT * FROM stories LIMIT :lim OFFSET :off";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":lim", $limit, PDO::PARAM_INT);
            $stmt->bindValue(":off", $offset, PDO::PARAM_INT);
            $status = $stmt->execute();
    

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message = "SQLSTATE error code = ".$error_info[0]."; error message = ".$error_info[2];
                throw new Exception("Database error executing database query: " . $message);
            }

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                while ($row !== FALSE) {
                    $story = new Story($row);
                    $stories[] = $story;

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $stories;
    }

    
    public static function findById($id) {
        $stories = null;
        try{
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM stories WHERE id = :id ";
            $params = [
                ":id" => $id
            ];
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute($params);

            if(!$status){
                $error_info = $stmt->errorInfo();
                $message = 
                    "SQLSTATE error code = " . $error_info[0] .
                    "; error message = ".$error_info[2];
                throw new Exception($message);
            }

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row !== FALSE){
                $stories = new Story($row);
            }
        }
        finally {
            if ($db !== null && $db ->isOpen()){
                $db->close();
            }
        }
        return $stories;
    }
}