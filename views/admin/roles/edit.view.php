<?php require __DIR__ . '/../../partials/head.php'; ?>
<body>
  <?php require __DIR__ . '/../../partials/nav.php'; ?>

  <?php ?>

  <div class="main">
    <!-- ------code goes here------ -->
    <?php require __DIR__ . '/../../partials/admin-sidebar.php'; ?>
    <div class="container">
      <?php require __DIR__ . '/../../partials/header.php'; ?>
      <h3><?= $subHeader ?></h3>
      <form action="" method="POST">
      <div class="content roleContent">

        <div class="tableHeader tableCell">ID</div>
        <div class="tableHeader tableCell">Role name</div>
        <div class="tableHeader tableCell">Role description</div>
        <div class="tableHeader tableCell"></div>

        <div class="tableCell">Edit role</div>
        <div class="tableCell">
          <input type="text" 
            name="roleName" 
            id="roleName" 
            placeholder="<?= $role['role_name']?>"
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="roleDesc" 
            id="roleDesc"
            placeholder="<?= $role['role_description']?>"
          >
        </div>
        <div class="tableCell">
          <button class="normalBtn" type="submit">Save</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>