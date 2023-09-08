
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TASK</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/header.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">

</head>

<body>
<div class="header">

  <nav class="navbar navbar-expand-lg  ">

    <div class="container ">

      <div class="navbar-brand-container ">

        <a class="navbar-brand" href="http://localhost/ITS-5/main.php?#">
          <img src="assets/img/logo.png" class="logo">
        </a>
        <div class="white-stick"></div>
      </div>

      <!-- TOGGLE CONTENT -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="custom-navbar-toggler">
          <!-- Mã SVG mới thay thế biểu tượng -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" fill="white">
            <path d="M4 6h22a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zM4 12h22a1 1 0 1 1 0 2H4a1 1 0 0 1 0-2zM4 18h22a1 1 0 1 1 0 2H4a1 1 0 0 1 0-2z"></path>
          </svg>
        </span>
      </button>

      <div class="collapse navbar-collapse " id="navbarNav">

        <div class="navbar-nav d-flex align-items-center  ">

          <!-- KHÓA HỌC CONTENT -->
          <div class="col-md-1 nav-item ">
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle content-nav text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Khóa học
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="http://localhost/ITS-5/main.php?">Hành trình tri thức</a></li>
                <li><a class="dropdown-item" href="http://localhost/ITS-5/web_10.php?">Hành trình lập trình</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Full Stack</a></li>
              </ul>
            </li>
          </div>

          <!--  Hành trình tri thức  CONTENT -->
          <div class="col-md-2 m-3  nav-item">
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle content-nav text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hành trình tri thức
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Front-End</a></li>
                <li><a class="dropdown-item" href="#">back-End</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Full Stack</a></li>
              </ul>
            </li>

          </div>

          <!--  "..."  CONTENT -->
          <a style="margin: -5px 0 0 -20px;" class="navbar-brand p-4" href="http://localhost/ITS-5/web_10.php?#">
            <img src="assets/img/3dots.png">
          </a>

          <!--   Bạn muốn học gì?  CONTENT -->
          <div class="col-md-3 nav-item">

            <li>
              <button type="button " class=" btn btn-default text-white px-4 text-start" style="width: 230px; background: rgba(255, 255, 255, 0.55)">
                <span class="bi bi-search"></span>
                Bạn muốn học gì?
              </button>
            </li>

          </div>

          <!--   shoppingcart  CONTENT -->
          <div class="col-md-2 m-3 p-1 nav-item">
            <li>
              <a style="margin: 5px 0 0 5px;" type="button"><img src="assets/img/shoppingcart.png" alt></a>
            </li>

          </div>

          <!--   MIỄN PHÍ VIP 30 NGÀY<  CONTENT -->
          <div class="col-md-2  nav-item " style="margin: -3px 0 0 -25px;">
            <button class="free-30-days-button">
              <span class="free-30-days-text">MIỄN PHÍ VIP 30 NGÀY</span>
            </button>
          </div>

          <!--   bell  CONTENT -->
          <div class="col-md-2  nav-item " style="margin: -5px 0 0 0px;">
            <li>
              <a type="button"><img src="assets/img/bell.png" alt></a>
            </li>
          </div>

          <!--   avatar  CONTENT -->
          <div class="col-md-1 nav-item">
            <div>
              <a style="margin: -15px 0 0 -100px;" type="button"><img src="assets/img/avatar.png" alt></a>
            </div>
          </div>

          <!--   VIE  CONTENT -->

          <div class="col-md-1 nav-item ">

            <form class=" d-flex" style="margin: 0px 0 0-120px;">

              <div>
                <img class="nav"style="margin: 5px 0 0 5px;" src="assets/img/flag/Vietnam (VN).png">
              </div>

              <div class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle text-white" style="margin: -5px 0 0 -2px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  VIE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">ENG</a></li>
                  <li><a class="dropdown-item" href="#">UK</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">...</a></li>
                </ul>
              </div>
            </form>

          </div>

        </div>

      </div>

    </div>

  </nav>

</div>