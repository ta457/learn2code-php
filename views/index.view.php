<?php require 'partials/head.php' ?>
<body>
  <?php require 'partials/nav.php'; ?>
  <div class="main">
    <?php require 'partials/header.php'; ?>

    <?php if(isset($_SESSION['user'])) {
      echo 'Welcome ' . $_SESSION['user']['email'];
    }?>

    <!-- ------code goes here------ -->



    
  </div>
</body>
</html>