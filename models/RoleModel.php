<?php

require_once('Model.php');

class RoleModel extends Model {

  public function getAllRoles() {
    return parent::getAll('roles');
  }

  public function getAllRoleIDs() {
    return parent::getColumn('role_id', 'roles');
  }
}