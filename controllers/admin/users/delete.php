<?php

require base_path('models/Model.php');

$usersModel = new Model();

$usersModel->delete('users', ['user_id' => $_GET['id']]);

header('location: /admin/users');
exit();