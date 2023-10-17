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
      <div class="content courseContent">

        <div class="tableHeader tableCell">ID</div>
        <div class="tableHeader tableCell">Course name</div>
        <div class="tableHeader tableCell">Course description</div>
        <div class="tableHeader tableCell">Group</div>
        <div class="tableHeader tableCell"></div>

        <div class="tableCell">Edit course</div>
        <div class="tableCell">
          <input type="text" 
            name="name" 
            id="name" 
            placeholder="<?= $course['course_name']?>"
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="desc" 
            id="desc"
            placeholder="<?= $course['course_description']?>"
          >
        </div>
        <div class="tableCell">
          <select id="group" name="group">
            <?php foreach ($groups as $group) : ?>
              <option value="<?= $group['group_id']?>" <?php echo ($group['group_id'] == $course['group_id']) ? 'selected' : '';?>>
                <?= $group['group_name']?>
              </option>
            <?php endforeach; ?>
          </select>
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