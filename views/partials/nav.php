<div class="navbar">
  <?php  
    $userRole = 0;
    if(isset($_SESSION['user'])) {
      $userRole = $_SESSION['user']['role'];
    }
  ?>
  
  <div class="navLeft">
    <a href="/" class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
        <text x="0" y="40" font-family="Arial" font-size="35" fill="#000000">L</text>
        <text x="13" y="30" font-family="Arial" font-size="20" fill="#000000">2</text>
        <text x="25" y="40" font-family="Arial" font-size="35" font-weight="bold" fill="#000000">C</text>
      </svg>
    </a>

    <?php if ($userRole == 0 || $userRole == 1 || $userRole == 2)
      echo '<a class="'.dynamicNavItem('/').'" href="/">Home</a>';
    ?>

    <?php if ($userRole == 0 || $userRole == 1 || $userRole == 2)
      echo '<a class="'.dynamicNavItem('/courses').'" href="/courses">Courses</a>';
    ?>
    
    <?php if ($userRole == 2)
      echo '<a class="'.dynamicNavItem('/admin').'" href="/admin">Admin</a>';
    ?>
  </div>
  
  <div class="navRight">
    <?php if ($userRole == 1 || $userRole == 2)
      echo '<a class="'.dynamicNavItem('/profile').'" href="/profile">Profile</a>';
    ?>

    <?php if($userRole == 0)
      echo '<a class="'.dynamicNavItem('/signup').'" href="/signup">Sign up</a>';
    ?>
    
    <?php if($userRole == 0) 
      echo '<a class="'.dynamicNavItem('/login').'" href="/login">Log in</a>';
    ?>
    
    <?php if($userRole == 1 || $userRole == 2)
      echo '<a class="'.dynamicNavItem('/logout').'" href="/logout">Log out</a>';
    ?>
  </div>
</div>