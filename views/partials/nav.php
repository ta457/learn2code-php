<div class="navbar">
  <div>
    <a href="/">Home</a>
    <a href="/courses">Courses</a>
    <a href="/profile">Profile</a>
    <a href="/admin">Admin</a>
  </div>
  <div>
    <?php if(is_null($_SESSION['user'])) 
      echo '<a href="/signup">Sign Up</a>'; 
    ?>
    <?php if(is_null($_SESSION['user'])) 
      echo '<a href="/login">Log In</a>'; 
    ?>
    <?php if(!is_null($_SESSION['user'])) 
      echo '<a href="/logout">Log out</a>'; 
    ?>
  </div>
</div>