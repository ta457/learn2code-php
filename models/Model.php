<?php 
require_once base_path('core/Database.php');

class Model {
  private $db;

  public function __construct() {
    $config = require(base_path('core/config.php'));
    //return $db = new Database($config['database']);
    $this->db = new Database($config['database']);
  }

  public function getAll($table) {
    return $this->db->query("SELECT * FROM $table")->findAll();
  }

  public function getColumn($column, $table) {
    return $this->db->query("SELECT $column FROM $table")->findAll();
  }

  public function findRecord($table, $array = []) {
    $query = "SELECT * FROM $table WHERE ";
    $conditions = [];
    foreach ($array as $key => $value) {
      $conditions[] = "$key = '$value'";
    }
    $query .= implode(' AND ', $conditions);
    return $this->db->query($query)->find();
  }

  public function add($table, $array = []) {
    $keys = implode(', ', array_keys($array));
    $values = "'" . implode("', '", $array) . "'";
    $query = "INSERT INTO $table ($keys) VALUES ($values)";
    $this->db->query($query);
  }
}