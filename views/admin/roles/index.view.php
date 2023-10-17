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
      <div class="content roleContent">

        <div class="tableCell">New role</div>
        <div class="tableCell">
          <input type="text" name="roleName" id="roleName">
        </div>
        <div class="tableCell">
          <input type="text" name="roleDesc" id="roleDesc">
        </div>
        <div class="tableCell">
          <button class="normalBtn" type="submit">
            <img src="/views/assets/svg/add.svg" alt="">
          </button>
        </div>

        <div class="tableHeader tableCell">ID</div>
        <div class="tableHeader tableCell">Role name</div>
        <div class="tableHeader tableCell">Role description</div>
        <div class="tableHeader tableCell"></div>

        <?php foreach ($roles as $role) : ?>
          <div class="tableCell"><?= $role['role_id']?></div>
          <div class="tableCell"><?= $role['role_name']?></div>
          <div class="tableCell"><?= $role['role_description']?></div>
          <div class="tableCell">
            <a class="normalBtn" href="/admin/roles/edit?id=<?= $role['role_id']?>">
              <img src="/views/assets/svg/edit.svg" alt="">
            </a>
            <a style="margin-left:5px;" class="normalBtn redBtn" href="/admin/roles/delete?id=<?= $role['role_id']?>">
              <img src="/views/assets/svg/delete.svg" alt="">
            </a>
          </div>
        <?php endforeach; ?>
        
      </div>
      </form>
    </div>
  </div>
</body>
</html>