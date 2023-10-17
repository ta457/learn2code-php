<?php require __DIR__ . '/../../partials/head.php'; ?>
<body>
  <?php require __DIR__ . '/../../partials/nav.php'; ?>

  <?php ?>

  <div class="main">
    <!-- ------code goes here------ -->
    <?php require __DIR__ . '/../../partials/admin-sidebar.php'; ?>
    <div class="container adminContainer">
      <?php require __DIR__ . '/../../partials/header.php'; ?>
      <h3><?= $subHeader ?></h3>
      <form action="" method="POST">
      <div class="content userContent">

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

        <div class="tableCell">Edit user</div>
        <div class="tableCell">
          <input style="color: gray;" 
            type="text" 
            name="email" 
            id="email" 
            value="<?= $user['email']?>"
            readonly
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="password" 
            id="password"
            value="<?= $user['password']?>"
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="name" 
            id="name"
            value="<?= $user['name']?>"
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="profile_img" 
            id="profile_img"
            value="<?= $user['profile_img']?>"
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="github" 
            id="github"
            value="<?= $user['github']?>"
          >
        </div>
        <div class="tableCell">
          <input 
            type="text" 
            name="phone" 
            id="phone"
            value="<?= $user['phone']?>"
          >
        </div>
        <div class="tableCell">
          <select name="active" id="active">
            <option value="1" <?php echo $user['is_active'] == 1 ? 'selected' : ''?>>
              Active
            </option>
            <option value="0" <?php echo $user['is_active'] == 0 ? 'selected' : ''?>>
              Inactive
            </option>
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
          <button class="normalBtn" type="submit">Save</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>