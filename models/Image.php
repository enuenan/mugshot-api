<?php 
class Image {
    // DB stuff
  private $conn;
  private $table = 'myimages';

    // Post Properties
  public $id;
  public $image;
  public $website;
  public $title;
  public $description;
  public $created_at;

    // Constructor with DB
  public function __construct($db) {
    $this->conn = $db;
  }

    // Get Posts
  public function read() {
      // Create query
    $query = 'SELECT * FROM ' . $this->table;

      // Prepare statement
    $stmt = $this->conn->prepare($query);

      // Execute query
    $stmt->execute();

    return $stmt;
  }



}