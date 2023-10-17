<?php
require base_path('models/Model.php');

$groupsModel = new Model();
$coursesModel = new Model();
$course = $coursesModel->get("SELECT * FROM courses WHERE course_id={$_GET['id']}");
$groups = $groupsModel->getAll('course_groups');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $group = $_POST['group'];

  $courseNameExisted = 0;
  foreach ($courses as $course) {
    if($course['course_name'] == $name) {
      $courseNameExisted = 1;
    }
  }
  if($courseNameExisted == 0 && !empty($name) && !empty($desc)) {
    $coursesModel->update('courses', 
      ['course_name', 'course_description', 'group_id'], 
      [$name, $desc, $group],
      'course_id = ' . $_GET['id']);

    header('location: /admin/courses');
    exit();
  }
}

view("admin/courses/edit.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Course',
  'course' => $course,
  'groups' => $groups
]);