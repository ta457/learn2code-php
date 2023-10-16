<div class="navbar">
  <?php  
    $userRole = 0;
    if(isset($_SESSION['user'])) {
      $userRole = $_SESSION['user']['role'];
    }
  ?>
  <div>
    <a href="/">Home</a>
    <a href="/courses">Courses</a>
    <?php if ($userRole == 1 || $userRole == 2)
      echo '<a href="/profile">Profile</a>';
    ?>
    <?php if ($userRole == 2)
      echo '<a href="/admin">Admin</a>';
    ?>
  </div>
  <div>
    <?php if($userRole == 0) 
      echo '<a href="/signup">Sign Up</a>'; 
    ?>
    <?php if($userRole == 0) 
      echo '<a href="/login">Log In</a>'; 
    ?>
    <?php if($userRole == 1 || $userRole == 2) 
      echo '<a href="/logout">Log out</a>'; 
    ?>
  </div>
</div>