<?php
require base_path('models/Model.php');

$groupsModel = new Model();
$groups = $groupsModel->getAll('course_groups');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $desc = $_POST['desc'];

  $groupNameExisted = 0;
  foreach ($groups as $group) {
    if($group['group_name'] == $name) {
      $groupNameExisted = 1;
    }
  }
  if($groupNameExisted == 0 && !empty($name) && !empty($desc)) {
    $groupsModel->add('course_groups', [
      'group_name' => $name,
      'group_description' => $desc
    ]);
    header('location: /admin/groups');
    exit();
  }
}

view("admin/groups/index.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Groups',
  'groups' => $groups
]);