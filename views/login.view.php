<?php require 'partials/head.php' ?>
<body>
  <?php require 'partials/nav.php'; ?>
  <div class="main">
    <?php require 'partials/header.php'; ?>
    
    <!-- ------code goes here------ -->

    <form method="POST">
      <div><label for="email">Email: </label></div>
      <input type="email" name="email" id="email" required>

      <div><label for="password">Password: </label></div>
      <input type="password" name="password" id="password" required>
      
      <div>
        <button type="submit">Log in</button>
      </div>

      <h2 class="alert"><?php echo $alert; ?></h2>
    </form>

  </div>
</body>
</html>