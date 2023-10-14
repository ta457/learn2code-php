<?php require 'partials/head.php' ?>
<body>
  <?php require 'partials/nav.php'; ?>
  <div class="main">
    <?php require 'partials/header.php'; ?>

    <!-- ------code goes here------ -->
    <?php echo $_SESSION['user']['email'];?>



  </div>
</body>
</html>