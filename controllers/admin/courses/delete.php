<?php

require base_path('models/Model.php');

$coursesModel = new Model();

$coursesModel->delete('courses', ['course_id' => $_GET['id']]);

header('location: /admin/courses');
exit();