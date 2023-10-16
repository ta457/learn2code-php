<?php
// return [
//   '/' => 'controllers/index.php',
//   '/courses' => 'controllers/courses.php',
//   '/profile' => 'controllers/profile.php',
//   '/admin' => 'controllers/admin.php',
//   '/login' => 'controllers/login.php',
//   '/logout' => 'controllers/logout.php',
//   '/signup' => 'controllers/signup.php'
// ];

return [
  '/' => ['url' => 'controllers/index.php', 'roles' => [0,1,2]],
  '/courses' => ['url' => 'controllers/courses.php', 'roles' => [0,1,2]],
  '/profile' => ['url' => 'controllers/profile.php', 'roles' => [1,2]],
  '/admin' => ['url' => 'controllers/admin.php', 'roles' => [2]],
  '/login' => ['url' => 'controllers/login.php', 'roles' => [0]],
  '/signup' => ['url' => 'controllers/signup.php', 'roles' => [0]],
  '/logout' => ['url' => 'controllers/logout.php', 'roles' => [1,2]]
];