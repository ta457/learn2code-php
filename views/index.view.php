<?php require 'partials/head.php' ?>
<body>
  <?php require 'partials/nav.php'; ?>
  <div class="main">
    <?php require 'partials/header.php'; ?>

    <!-- ------code goes here------ -->
    <?php if(isset($_SESSION['user'])) {
      echo 'Welcome' . $_SESSION['user']['email'];
    }?>
  </div>
</body>
</html>