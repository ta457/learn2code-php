<?php 
require_once base_path('core/Database.php');

class Model {
  private $db;

  public function __construct() {
    $config = require(base_path('core/config.php'));
    //return $db = new Database($config['database']);
    $this->db = new Database($config['database']);
  }

  public function get($query) {
    return $this->db->query($query)->find();
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

  public function update($table, $columns = [], $values = [], $conditions) {
    if (count($columns) !== count($values)) {
        throw new Exception("Number of columns and values must be the same");
    }

    $query = "UPDATE {$table} SET ";
    
    $setPairs = [];
    for ($i = 0; $i < count($columns); $i++) {
        $setPairs[] = "{$columns[$i]} = '{$values[$i]}'";
    }

    $query .= implode(', ', $setPairs);
    if ($conditions) {
        $query .= " WHERE {$conditions}";
    }

    $this->db->query($query);
  }

  public function delete($table, $conditions) {
    $query = "DELETE FROM {$table}";
    if (!empty($conditions)) {
        $wherePairs = [];
        foreach ($conditions as $column => $value) {
            $wherePairs[] = "{$column} = '{$value}'";
        }
        $query .= " WHERE " . implode(' AND ', $wherePairs);
    }
    $this->db->query($query);
  }
}