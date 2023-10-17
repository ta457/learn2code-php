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
            <div>
              <label for="email">Email: </label>
              <p>Already have an account? <a href="/login"><strong>Log in</strong></a></p>
            </div>
            <input type="email" name="email" id="email" required>
          </div>

          <div class="row">
            <div>
              <label for="password">Password: </label>
              <strong id="showPw">Show</strong>
            </div>
            <input type="password" name="password" id="password" required>
          </div>
          
          <div class="row">
            <button class="normalBtn" type="submit">Sign up</button>
          </div>

          <p class="alert"><?php echo $alert; ?></p>
          
        </div>
      </form>
    </div>
  </div>

  <script src="/views/assets/login.js"></script>
</body>
</html>