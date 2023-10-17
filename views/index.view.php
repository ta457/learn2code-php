<?php require 'partials/head.php' ?>

<body>
  <?php require 'partials/nav.php'; ?>
  <section class="search">
    <div class="search-bar">
      <h1 class="">Learn2Code</h1>
      <h2 class="">Ctrl+Z Your Way to Coding Greatness.</h2>
      <div class="bar-input">
        <input class="outline-none ml-2 mr-2 hover:not-italic font-bold w-96 h-11" type="search" placeholder="Search our tutorials, e.g. HTML" />
        <div class="input-outline">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
      <a href="#!">
        <h3 class="bar-outline mt-5 mb-5 text-white w-full">
          Not sure where to begin?
        </h3>
      </a>
    </div>
  </section>
  <!--    <svg-->
  <!--      style="background-color: #d9eee1; margin-bottom: -8px"-->
  <!--      width="100%"-->
  <!--      height="80"-->
  <!--      viewBox="0 0 100 100"-->
  <!--      preserveAspectRatio="none"-->
  <!--    >-->
  <!--      <path-->
  <!--        id="wavepath"-->
  <!--        d="M0,0  L110,0C35,150 35,0 0,100z"-->
  <!--        fill="#282A35"-->
  <!--      ></path>-->
  <!--    </svg>-->
  <section class="lang">
    <div class="lang-grid">

    </div>
  </section>
  <section class="langtag"></section>
  <section class="score">
    <div class="score-container">
      <div class="container-header">
        <h2>Track your progress</h2>
        <p>We are always tracking you, even in your sleep.</p>
        <br>
        <p>Log in to your account, and start coding now! Or else...</p>
        <br>
      </div>
      <img src="/views/home-asset/img/myl-green-off.png" />
      <button>Sign Up for Free</button>
    </div>
  </section>
  <section class="exercise">
    <div class="exercise-flex">
      <div class="flex-header">
        <h2>Exercises and Quizzes</h2>
        <p>Test your skill!</p>
      </div>
      <div class="flex-body">
        <a href="#!" class="body-box ex-background">
          <div>Exercises</div>
        </a>
        <a href="#!" class="body-box qui-background">
          <div>Quizzes</div>
        </a>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer-box">
      <!--        <ul>-->
      <!--          <li></li>-->
      <!--          <li>Space</li>-->
      <!--          <li>upgrade</li>-->
      <!--          <li>newsletter</li>-->
      <!--          <li>get certificated</li>-->
      <!--          <li>get report</li>-->
      <!--        </ul>-->
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/8a2b31a7f1.js" crossorigin="anonymous"></script>
  <script src="/views/home-asset/script.js"></script>
</body>

</html>