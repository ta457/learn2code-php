<?php

require_once('Model.php');

class UserModel extends Model {

  public function getAllUsers() {
    return parent::getAll('users');
  }

  public function findUser($conditions) {
    return parent::findRecord('users', $conditions);
  }

  public function addUser($data) {
    parent::add('users', $data);
  }

}