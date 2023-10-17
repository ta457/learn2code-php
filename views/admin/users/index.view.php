<?php require __DIR__ . '/../../partials/head.php'; ?>
<body>
  <?php require __DIR__ . '/../../partials/nav.php'; ?>
  
  <div class="main">
    <!-- ------code goes here------ -->
    <?php require __DIR__ . '/../../partials/admin-sidebar.php'; ?>
    <div class="container">
      <?php require __DIR__ . '/../../partials/header.php'; ?>
      <h3><?= $subHeader ?></h3>
      <form action="" method="POST">
      <div class="content userContent">

        <div class="tableCell">New user</div>
        <div class="tableCell">
          <input type="text" name="email" id="email">
        </div>
        <div class="tableCell">
          <input type="text" name="password" id="password">
        </div>
        <div class="tableCell">
          <input type="text" name="name" id="name">
        </div>
        <div class="tableCell">
          <input type="text" name="prfImg" id="prfImg">
        </div>
        <div class="tableCell">
          <input type="text" name="github" id="github">
        </div>
        <div class="tableCell">
          <input type="text" name="phone" id="phone">
        </div>
        <div class="tableCell">
          <select name="active" id="active">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
          </select>
        </div>
        <div class="tableCell">
          <select id="role" name="role">
            <?php foreach ($roles as $role) : ?>
              <option value="<?= $role['role_id']?>" <?php echo ($role['role_id'] == $user['role_id']) ? 'selected' : '';?>>
                <?= $role['role_name']?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="tableCell">
          <button class="normalBtn" type="submit">
            <img src="/views/assets/svg/add.svg" alt="icon">
          </button>
        </div>

        <div class="tableHeader tableCell">ID</div>
        <div class="tableHeader tableCell">Email</div>
        <div class="tableHeader tableCell">Password</div>
        <div class="tableHeader tableCell">Name</div>
        <div class="tableHeader tableCell">Profile img</div>
        <div class="tableHeader tableCell">Github</div>
        <div class="tableHeader tableCell">Phone</div>
        <div class="tableHeader tableCell">Active</div>
        <div class="tableHeader tableCell">Role</div>
        <div class="tableHeader tableCell"></div>

        <?php foreach ($users as $user) : ?>
          <div class="tableCell"><?= $user['user_id']?></div>
          <div class="tableCell"><?= $user['email']?></div>
          <div class="tableCell"><?= $user['password']?></div>
          <div class="tableCell"><?= $user['name']?></div>
          <div class="tableCell"><?= $user['profile_img']?></div>
          <div class="tableCell"><?= $user['github']?></div>
          <div class="tableCell"><?= $user['phone']?></div>
          <div class="tableCell">
            <?php echo $user['is_active'] == 1 ? 'Active' : 'Inactive' ?>
          </div>
          <div class="tableCell"><?= getRoleName($user['role_id'], $rolesModel)?></div>
          <div class="tableCell">
            <a class="normalBtn" href="/admin/users/edit?id=<?= $user['user_id']?>">
              <img src="/views/assets/svg/edit.svg" alt="icon">
            </a>
            <a style="margin-left:5px;" class="normalBtn redBtn" href="/admin/users/delete?id=<?= $user['user_id']?>">
              <img src="/views/assets/svg/delete.svg" alt="icon">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      </form>
      

    </div>
  </div>
</body>
</html>