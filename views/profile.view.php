<?php require 'partials/head.php' ?>
<body>
  <?php require 'partials/nav.php'; ?>
  
  <div class="main">
    <!-- ------code goes here------ -->
    <div class="container profileContainer">
      <form action="" method="POST">
      <section class="basicInfo">
        <img id="prfImg" src="/views/assets/svg/prf-default.svg" alt="prf">
        <div class="info">
          <h2 class="">
            <?php echo ($user['name']=='') ? $user['email'] : $user['name'];?>
          </h2>
          <div class="contact">
            <strong>Email:</strong>
            <p><?= $user['email'] ?></p>

            <strong>Phone:</strong>
            <p><?= $user['phone'] ?></p>
            
            <strong>Github:</strong>
            <a target="_blank" href="<?= makeLink($user['github'])?>">
              <?= $user['github'] ?>
            </a>
          </div>
        </div>
        
        <img class="hidden" id="editPrfImg" src="/views/assets/svg/prf-default.svg" alt="prf">
        <div class="info editInfo hidden">
          <h2 class="">
            <?php //echo ($user['name']=='') ? $user['email'] : $user['name'];?>
            <input type="text" name="name" id="name" value="<?= $user['name'] ?>">
          </h2>
          <div class="contact">
            <strong>Phone:</strong>
            <input type="text" name="phone" id="phone" value="<?= $user['phone'] ?>">
            
            <strong>Github:</strong>
            <input type="text" name="github" id="github" value="<?= $user['github'] ?>">
          </div>
        </div>

        <div></div>
        <div class="editPrf" style="display:flex;flex-direction:column;justify-content:flex-start;align-items:flex-end;">
          <a class="normalBtn" id="toggleEditPrf">
            <img src="/views/assets/svg/edit.svg" alt="icon">
          </a>

          <button type="submit" class="normalBtn hidden" id="savePrf">
            <img src="/views/assets/svg/check.svg" alt="icon">
          </button>

          <a class="normalBtn redBtn hidden" id="toggleCancel" style="margin-top:10px;">
            <img src="/views/assets/svg/close.svg" alt="icon">
          </a>
        </div>
      </section>

      <hr>
      <section></section>
    </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const prfImg = document.getElementById('prfImg');
      const infoDiv = document.querySelector('.info');
      const editPrfImg = document.getElementById('editPrfImg');
      const editInfoDiv = document.querySelector('.editInfo');

      const editButton = document.getElementById('toggleEditPrf');
      const saveButton = document.getElementById('savePrf');
      const cancelButton = document.getElementById('toggleCancel');

      function toggle() {
        prfImg.classList.toggle('hidden');
        infoDiv.classList.toggle('hidden');
        editPrfImg.classList.toggle('hidden');
        editInfoDiv.classList.toggle('hidden');
        editButton.classList.toggle('hidden');
        saveButton.classList.toggle('hidden');
        cancelButton.classList.toggle('hidden');
      }
      editButton.addEventListener('click', function() {
        toggle();
      });
      cancelButton.addEventListener('click', function() {
        toggle();
      });
    });
  </script>
</body>
</html>