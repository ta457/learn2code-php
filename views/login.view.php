<?php require 'partials/head.php' ?>
<body>
  <?php require 'partials/nav.php'; ?>

  <div class="main">
    
    <!-- ------code goes here------ -->
    <div class="container loginContainer">
      <form method="POST">
        <div class="loginBox">
          <?php require 'partials/header.php'; ?>

          <div class="row">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
          </div>

          <div class="row">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
          </div>
          
          <div class="row">
            <button class="normalBtn" type="submit">Log in</button>
          </div>

          <h2 class="alert"><?php echo $alert; ?></h2>
          
        </div>
      </form>
    </div>
    
  </div>
</body>
</html>