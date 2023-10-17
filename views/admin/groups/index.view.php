<?php require __DIR__ . '/../../partials/head.php'; ?>
<body>
  <?php require __DIR__ . '/../../partials/nav.php'; ?>

  <div class="main">
    <!-- ------code goes here------ -->
    <?php require __DIR__ . '/../../partials/admin-sidebar.php'; ?>
    <div class="container adminContainer">
      <?php require __DIR__ . '/../../partials/header.php'; ?>
      <h3><?= $subHeader ?></h3>

      <form action="" method="POST">
      <div class="content roleContent">

        <div class="tableCell">New group</div>
        <div class="tableCell">
          <input type="text" name="name" id="name">
        </div>
        <div class="tableCell">
          <input type="text" name="desc" id="desc">
        </div>
        <div class="tableCell">
          <button class="normalBtn" type="submit">
            <img src="/views/assets/svg/add.svg" alt="">
          </button>
        </div>

        <div class="tableHeader tableCell">ID</div>
        <div class="tableHeader tableCell">Group name</div>
        <div class="tableHeader tableCell">Group description</div>
        <div class="tableHeader tableCell"></div>

        <?php foreach ($groups as $group) : ?>
          <div class="tableCell"><?= $group['group_id']?></div>
          <div class="tableCell"><?= $group['group_name']?></div>
          <div class="tableCell"><?= $group['group_description']?></div>
          <div class="tableCell">
            <a class="normalBtn" href="/admin/groups/edit?id=<?= $group['group_id']?>">
              <img src="/views/assets/svg/edit.svg" alt="">
            </a>
            <a style="margin-left:5px;" class="normalBtn redBtn" href="/admin/groups/delete?id=<?= $group['group_id']?>">
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