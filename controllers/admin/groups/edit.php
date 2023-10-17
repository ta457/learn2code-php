<?php
require base_path('models/Model.php');

$groupsModel = new Model();
$group = $groupsModel->get("SELECT * FROM course_groups WHERE group_id={$_GET['id']}");

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
    $groupsModel->update('course_groups', 
      ['group_name', 'group_description'], 
      [$name, $desc],
      'group_id = ' . $_GET['id']);

    header('location: /admin/groups');
    exit();
  }
}

view("admin/groups/edit.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Groups',
  'group' => $group
]);