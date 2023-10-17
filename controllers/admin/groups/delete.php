<?php

require base_path('models/Model.php');

$groupsModel = new Model();

$groupsModel->delete('course_groups', ['group_id' => $_GET['id']]);

header('location: /admin/groups');
exit();