<?php

require base_path('models/Model.php');

$rolesModel = new Model();

$rolesModel->delete('roles', ['role_id' => $_GET['id']]);

header('location: /admin/roles');
exit();