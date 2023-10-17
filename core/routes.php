<?php
return [
  '/' => ['url' => 'controllers/index.php', 'roles' => [0,1,2]],
  '/courses' => ['url' => 'controllers/courses.php', 'roles' => [0,1,2]],
  '/profile' => ['url' => 'controllers/profile.php', 'roles' => [1,2]],
  '/login' => ['url' => 'controllers/login.php', 'roles' => [0]],
  '/signup' => ['url' => 'controllers/signup.php', 'roles' => [0]],
  '/logout' => ['url' => 'controllers/logout.php', 'roles' => [1,2]],
  '/admin' => ['url' => 'controllers/admin.php', 'roles' => [2]],

  '/admin/roles' => ['url' => 'controllers/admin/roles/index.php', 'roles' => [2]],
  '/admin/roles/edit' => ['url' => 'controllers/admin/roles/edit.php', 'roles' => [2]],
  '/admin/roles/delete' => ['url' => 'controllers/admin/roles/delete.php', 'roles' => [2]],

  '/admin/users' => ['url' => 'controllers/admin/users/index.php', 'roles' => [2]],
  '/admin/users/edit' => ['url' => 'controllers/admin/users/edit.php', 'roles' => [2]],
  '/admin/users/delete' => ['url' => 'controllers/admin/users/delete.php', 'roles' => [2]],

  '/admin/groups' => ['url' => 'controllers/admin/groups/index.php', 'roles' => [2]],
  '/admin/groups/edit' => ['url' => 'controllers/admin/groups/edit.php', 'roles' => [2]],
  '/admin/groups/delete' => ['url' => 'controllers/admin/groups/delete.php', 'roles' => [2]],

  '/admin/courses' => ['url' => 'controllers/admin/courses/index.php', 'roles' => [2]],
  '/admin/courses/edit' => ['url' => 'controllers/admin/courses/edit.php', 'roles' => [2]],
  '/admin/courses/delete' => ['url' => 'controllers/admin/courses/delete.php', 'roles' => [2]],

  '/admin/lessons' => ['url' => 'controllers/admin/lessons/index.php', 'roles' => [2]],
  '/admin/lessons/edit' => ['url' => 'controllers/admin/lessons/edit.php', 'roles' => [2]],
  '/admin/lessons/delete' => ['url' => 'controllers/admin/lessons/delete.php', 'roles' => [2]],

  '/admin/exercises' => ['url' => 'controllers/admin/exercises/index.php', 'roles' => [2]],
  '/admin/exercises/edit' => ['url' => 'controllers/admin/exercises/edit.php', 'roles' => [2]],
  '/admin/exercises/delete' => ['url' => 'controllers/admin/exercises/delete.php', 'roles' => [2]],

  '/admin/quizzes' => ['url' => 'controllers/admin/quizzes/index.php', 'roles' => [2]],
  '/admin/quizzes/edit' => ['url' => 'controllers/admin/quizzes/edit.php', 'roles' => [2]],
  '/admin/quizzes/delete' => ['url' => 'controllers/admin/quizzes/delete.php', 'roles' => [2]]
];