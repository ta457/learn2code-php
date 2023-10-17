<?php
require base_path('models/Model.php');

$rolesModel = new Model();
$roles = $rolesModel->getAll('roles');

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
    $rolesModel->add('roles', [
      'role_name' => $roleName,
      'role_description' => $roleDesc
    ]);
    header('location: /admin/roles');
    exit();
  }
}

view("admin/roles/index.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Roles',
  'roles' => $roles
]);