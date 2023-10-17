<?php
require base_path('models/Model.php');

$rolesModel = new Model();
$role = $rolesModel->get("SELECT * FROM roles WHERE role_id={$_GET['id']}");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $roleName = $_POST['roleName'];
  $roleDesc = $_POST['roleDesc'];

  $roleNameExisted = 0;
  foreach ($roles as $role) {
    if($role['role_name'] == $roleName) {
      $roleNameExisted = 1;
    }
  }
  if($roleNameExisted == 0 && !empty($roleName) && !empty($roleDesc)) {
    $rolesModel->update('roles', 
      ['role_name', 'role_description'], 
      [$roleName, $roleDesc],
      'role_id = ' . $_GET['id']);

    header('location: /admin/roles');
    exit();
  }
}

view("admin/roles/edit.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Roles',
  'role' => $role
]);