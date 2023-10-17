<?php require 'partials/head.php' ?>

<body>
  <?php require 'partials/nav.php'; ?>
  <section class="search">
    <div class="search-bar">
      <h1 class="">Learn to Code</h1>
      <h2 class="">Cung cấp kiến thức cơ bản về lập trình.</h2>
      <div class="bar-input">
        <input class="outline-none ml-2 mr-2 hover:not-italic font-bold w-96 h-11" type="search" placeholder="Tìm kiếm khóa học, ví dụ: HTML" />
        <div class="input-outline">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
      <a href="#!">
        <h3 class="bar-outline mt-5 mb-5 text-white w-full">
          Gợi ý khóa học
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
        <h2>Tiến trình học</h2>
        <p>Giúp bạn theo dõi quá trình học tập với hệ thống đánh giá bằng điểm số.</p>
        <p>Hãy đăng nhập và bắt đầu tích điểm!</p>
      </div>
      <img src="/views/home-asset/img/myl-green-off.png" />
      <button>Đăng ký miễn phí</button>
    </div>
  </section>
  <section class="exercise">
    <div class="exercise-flex">
      <div class="flex-header">
        <h2>Khóa học và bài tập</h2>
        <p>Nơi bạn học và ứng dụng</p>
      </div>
      <div class="flex-body">
        <a href="#!" class="body-box ex-background">
          <div>Khóa học</div>
        </a>
        <a href="#!" class="body-box qui-background">
          <div>Bài luyện tập</div>
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
  <script src="/views/script.js"></script>
</body>

</html>