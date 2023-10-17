<?php
require base_path('models/Model.php');

$coursesModel = new Model();
$groupsModel = new Model();
$courses = $coursesModel->getAll('courses');
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
    $coursesModel->add('courses', [
      'course_name' => $name,
      'course_description' => $desc,
      'group_id' => $group
    ]);
    header('location: /admin/courses');
    exit();
  }
}

function getGroupName($id, $groupsModel) {
  return $groupsModel->get("SELECT group_name FROM course_groups WHERE group_id = $id")['group_name'];
}

view("admin/courses/index.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Courses',
  'courses' => $courses,
  'groups' => $groups,
  'groupsModel' => $groupsModel
]);