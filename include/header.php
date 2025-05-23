<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>Corporate Gifting</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&display=swap" rel="stylesheet">

  <link href="css2/style.css" rel="stylesheet">

  <link href="css2/responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- Login page -->

  <div id="overlayss" onclick="closePopupss()"></div>

  <div id="popupss" class="container-fluid p-0">
    <div class="row g-0">
      <div class="popup-left col-12 col-md-6"></div>
      <div class="popup-right col-12 col-md-6">
        <span class="close-btn" onclick="closePopupss()">&times;</span>
        <h2>Login</h2>
        <form>
          <div class="input-container">
            <input type="email" id="exchangeIcon" placeholder="Email" required>

          </div>
          <div class="input-container">
            <input type="password" id="passwordss" placeholder="Password" required>
            <i class="fa fa-eye" id="togglePasswordss" aria-hidden="true"></i>
          </div>

          <div class="text-end">
            <a href="#">Forgot Password?</a>
          </div>

          <button type="submit">Log In</button>
        </form>
        <p>Don't have account? <a onclick="openPopup()">Sign Up</a></p>
      </div>
    </div>
  </div>

  <!-- signup page -->
  <div id="overlay" onclick="closePopup()"></div>

  <div id="popup" class="container-fluid p-0">
    <div class="row g-0">
      <div class="popup-left col-12 col-md-6"></div>
      <div class="popup-right col-12 col-md-6">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>Register</h2>
        <form>
          <div class="input-container">
            <input type="text" placeholder="Name" required>
          </div>
          <div class="input-container">
            <input type="email" placeholder="Email" required>
          </div>
          <div class="input-container">
            <input type="password" id="password" placeholder="Password" required>
            <i class="fa fa-eye" id="togglePassword" aria-hidden="true"></i>
          </div>
          <div class="input-container">
            <input type="password" id="confirmpassword" placeholder="Confirm Password" required>
            <i class="fa fa-eye" id="toggleConfirmPassword" aria-hidden="true"></i>
          </div>
          <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a onclick="openPopups()">Sign In</a></p>
      </div>
    </div>
  </div>
  <!--Header-->

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/LOGO.png" alt="logoimage"
            style="width: 56px; height: 14px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Icons/menu_24px">
              <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                d="M3 8V6H21V8H3ZM3 13H21V11H3V13ZM3 18H21V16H3V18Z" fill="white" />
            </g>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="d-flex justify-content-between flex-column flex-lg-row" style="width: 100%;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ">
                <a class="nav-link text-white active" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link text-white" href="Whoweare.php">ABOUT US</a>
              </li>

              <li class="nav-item mx-2">
                <a class="nav-link text-white" href="sellerpage.php">BECOME A SELLER</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link text-white" href="buyerpage.php">POST BUY REQUEST</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link text-white" href="brand.php">BRANDS</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link text-white" href="blogpage.php">BLOGS</a>
              </li>
            </ul>
            <div class="d-flex flex-column flex-lg-row">
              <a class="nav-link" onclick="openPopups()">LOGIN</a>
              <button class="btn btn-outline-secondary btn-sm px-3 mx-2" onclick="openPopup()"
                style="border-radius: 4px; height: 36px; width: 90px;" type="button">SIGN UP</button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <section class="header-search pt-5">
    <div class="container">
      <div class="row d-flex flex-column-reverse flex-lg-row py-3">
        <div class="col-xl-3 col-lg-4 py-2 py-lg-0" >
          <div class="dropdown w-100">
            <div class="d-flex align-items-center justify-content-between px-2 py-2 w-100 "
              style="background-color: #0068C8; cursor: pointer ; border-radius: 0.25rem;"
              id="customDropdown"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <h6 class="text-white mb-0 w-100 d-flex align-items-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 10C7.25 8.74022 7.75045 7.53204 8.64124 6.64124C9.53204 5.75045 10.7402 5.25 12 5.25C13.2598 5.25 14.468 5.75045 15.3588 6.64124C16.2496 7.53204 16.75 8.74022 16.75 10C16.75 11.2598 16.2496 12.468 15.3588 13.3588C14.468 14.2496 13.2598 14.75 12 14.75C10.7402 14.75 9.53204 14.2496 8.64124 13.3588C7.75045 12.468 7.25 11.2598 7.25 10ZM12 6.75C11.138 6.75 10.3114 7.09241 9.7019 7.7019C9.09241 8.3114 8.75 9.13805 8.75 10C8.75 10.862 9.09241 11.6886 9.7019 12.2981C10.3114 12.9076 11.138 13.25 12 13.25C12.862 13.25 13.6886 12.9076 14.2981 12.2981C14.9076 11.6886 15.25 10.862 15.25 10C15.25 9.13805 14.9076 8.3114 14.2981 7.7019C13.6886 7.09241 12.862 6.75 12 6.75Z" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.52447 8.857C3.69584 6.78397 4.64028 4.85113 6.17037 3.442C7.70045 2.03288 9.70437 1.25046 11.7845 1.25H12.2165C14.2966 1.25046 16.3005 2.03288 17.8306 3.442C19.3607 4.85113 20.3051 6.78397 20.4765 8.857C20.6671 11.1663 19.9536 13.4595 18.4865 15.253L13.6935 21.114C13.4883 21.3648 13.2301 21.567 12.9373 21.7057C12.6445 21.8445 12.3245 21.9165 12.0005 21.9165C11.6764 21.9165 11.3565 21.8445 11.0637 21.7057C10.7709 21.567 10.5126 21.3648 10.3075 21.114L5.51447 15.253C4.0473 13.4595 3.33383 11.1663 3.52447 8.857ZM11.7845 2.75C10.0811 2.75072 8.44019 3.39165 7.18727 4.54565C5.93436 5.69965 5.16095 7.28242 5.02047 8.98C4.86175 10.9019 5.45547 12.8103 6.67647 14.303L11.4695 20.165C11.5339 20.2439 11.6151 20.3074 11.7071 20.351C11.7991 20.3947 11.8996 20.4173 12.0015 20.4173C12.1033 20.4173 12.2039 20.3947 12.2959 20.351C12.3879 20.3074 12.469 20.2439 12.5335 20.165L17.3265 14.303C18.5467 12.81 19.1397 10.9016 18.9805 8.98C18.84 7.28225 18.0664 5.69934 16.8133 4.54531C15.5602 3.39128 13.919 2.75047 12.2155 2.75H11.7845Z" fill="white" />
                </svg>

                <span class="ps-2">All India</span>
              </h6>
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.4727 4.95264C13.6105 4.97981 13.7389 5.04641 13.8408 5.146L13.8398 5.14697C13.9071 5.21251 13.9615 5.28998 13.998 5.37646C14.0346 5.46317 14.0537 5.55677 14.0537 5.65088C14.0537 5.74504 14.0347 5.83854 13.998 5.92529C13.9615 6.01181 13.9071 6.08921 13.8398 6.15479L13.8408 6.15576L8.52344 11.3394C8.38343 11.4758 8.19548 11.5522 8 11.5522C7.85339 11.5522 7.71089 11.5092 7.58984 11.4302L7.47656 11.3394L2.15918 6.15479C2.09219 6.08915 2.03829 6.01078 2.00195 5.92432C1.96562 5.83785 1.94727 5.74467 1.94727 5.65088L1.96094 5.51221C1.97016 5.46629 1.98372 5.42083 2.00195 5.37744L2.06934 5.25439C2.09549 5.21596 2.12581 5.17967 2.15918 5.14697L2.26953 5.05908C2.38716 4.98214 2.5254 4.93994 2.66797 4.93994C2.85804 4.93998 3.04079 5.01415 3.17676 5.14697L8 9.84814L12.748 5.22021L12.8232 5.146C12.9592 5.01324 13.142 4.93896 13.332 4.93896L13.4727 4.95264Z" fill="white" stroke="white" stroke-width="0.5" />
              </svg>
            </div>

            <ul class="dropdown-menu w-100 mt-1" aria-labelledby="customDropdown">
              <li class="p-2"> <input class="form-control "
              style="height:max-content; border-top-right-radius: 0px; border-bottom-right-radius: 0px;" type="search"
              placeholder="Search City" aria-label="Search"></li>
              <li >
                <a class="dropdown-item d-flex justify-content-between align-items-center submenu-toggle">
                  Varanasi
                  <span class="ms-auto">&rsaquo;</span>
                </a>
              
              </li>

              <li >
                <a class="dropdown-item d-flex justify-content-between align-items-center submenu-toggle">
                  Delhi
                  <span class="ms-auto"></span>
                </a>
              
              </li>
              <li >
                <a class="dropdown-item d-flex justify-content-between align-items-center submenu-toggle">
                  Lucknow
                  <span class="ms-auto">&rsaquo;</span>
                </a>
              
              </li>
              
            </ul>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5 py-2 py-lg-0">
          <form class="d-flex">
            <input class="form-control p-2"
              style="height:max-content; border-top-right-radius: 0px; border-bottom-right-radius: 0px;" type="search"
              placeholder="Search" aria-label="Search">
            <button class="btn btn-primary btn-md px-3"
              style="border-radius: 4px; border-color: #0068C8; border-top-left-radius: 0px; border-bottom-left-radius: 0px;"
              type="submit">Search</button>
          </form>
        </div>
        <div class="col-xl-3 col-lg-3 d-none d-lg-flex justify-content-end p-0 py-2 py-lg-0">
          <h4 class="text-white"><svg width="44" height="44" viewBox="0 0 44 44" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18.7032 20.3518C18.9199 20.3518 19.1346 20.3091 19.3348 20.2262C19.535 20.1432 19.717 20.0217 19.8702 19.8684C20.0235 19.7152 20.1451 19.5332 20.228 19.333C20.311 19.1327 20.3537 18.9181 20.3537 18.7014C20.3537 18.4846 20.311 18.27 20.228 18.0698C20.1451 17.8695 20.0235 17.6876 19.8702 17.5343C19.717 17.3811 19.535 17.2595 19.3348 17.1765C19.1346 17.0936 18.9199 17.0509 18.7032 17.0509C18.2655 17.0509 17.8457 17.2248 17.5361 17.5343C17.2266 17.8438 17.0527 18.2636 17.0527 18.7014C17.0527 19.1391 17.2266 19.5589 17.5361 19.8684C17.8457 20.1779 18.2655 20.3518 18.7032 20.3518Z"
                fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.4592 27.5073V38.5H26.1452V32.5307H30.0804C30.3261 32.5307 30.5607 32.4821 30.7743 32.395L28.5927 30.6973H24.3118V36.6667H12.2916V26.7685L11.7782 26.2359C10.2749 24.673 7.33333 21.0201 7.33333 16.4771C7.33333 14.9829 7.89708 12.6949 9.59383 10.8029C11.0907 9.13367 13.6024 7.62667 17.7861 7.37183V13.8343C17.0627 13.9714 16.379 14.2682 15.7848 14.7029C15.1906 15.1377 14.7009 15.6995 14.3513 16.3475C14.0017 16.9955 13.8011 17.7133 13.764 18.4486C13.727 19.184 13.8544 19.9183 14.1371 20.5982C14.4197 21.278 14.8505 21.8862 15.398 22.3785C15.9455 22.8708 16.5959 23.2348 17.3018 23.4439C18.0078 23.653 18.7515 23.702 19.4788 23.5874C20.206 23.4727 20.8986 23.1972 21.5059 22.781L34.4034 32.7938C34.324 33.252 34.4017 33.7237 34.6241 34.1322C34.8465 34.5407 35.2004 34.8621 35.6285 35.0441C36.0565 35.2261 36.5335 35.2581 36.982 35.1349C37.4305 35.0117 37.8241 34.7405 38.0991 34.3654C38.3741 33.9902 38.5142 33.5332 38.4966 33.0684C38.4791 32.6036 38.305 32.1584 38.0026 31.805C37.7001 31.4516 37.2872 31.2109 36.8307 31.1218C36.3741 31.0327 35.9009 31.1005 35.4878 31.3142L22.8067 21.4683C23.2653 20.7883 23.5479 20.0049 23.629 19.1886C23.71 18.3724 23.587 17.5487 23.271 16.7918C22.955 16.0348 22.4559 15.3682 21.8185 14.8518C21.1811 14.3354 20.4255 13.9855 19.6194 13.8334V7.33883C21.9505 7.38192 23.5657 7.6945 24.7876 8.15283C26.0819 8.63867 27.0417 9.32617 28.0087 10.2218L28.1389 10.3428C29.0868 11.2209 29.3691 11.4831 29.5295 11.9103L33.4097 22.2411H30.0804V24.8884L31.9137 26.3138V24.0744H33.4097C33.706 24.0748 33.998 24.0034 34.2605 23.8661C34.5231 23.7289 34.7485 23.53 34.9173 23.2866C35.0861 23.0431 35.1934 22.7623 35.2299 22.4683C35.2663 22.1743 35.2309 21.8758 35.1267 21.5985L31.2455 11.2649C30.9256 10.4124 30.3068 9.84408 29.5277 9.12908L29.2554 8.87792C27.0875 6.86767 24.6207 5.5 19.0648 5.5C8.2555 5.5 5.5 12.7188 5.5 16.4771C5.5 21.7635 8.87608 25.8647 10.4592 27.5073ZM18.7027 21.8176C19.1122 21.8176 19.5176 21.7371 19.8958 21.5804C20.2741 21.4238 20.6178 21.1942 20.9073 20.9048C21.1969 20.6153 21.4266 20.2717 21.5833 19.8935C21.74 19.5153 21.8207 19.1099 21.8208 18.7005C21.8209 18.2911 21.7403 17.8856 21.5837 17.5074C21.427 17.1291 21.1974 16.7854 20.908 16.4959C20.6185 16.2063 20.2749 15.9766 19.8967 15.8199C19.5185 15.6632 19.1131 15.5825 18.7037 15.5824C17.8768 15.5824 17.0839 15.9109 16.4992 16.4955C15.9145 17.0802 15.5861 17.8732 15.5861 18.7C15.5861 19.5268 15.9145 20.3198 16.4992 20.9045C17.0839 21.4891 17.8759 21.8176 18.7027 21.8176Z"
                fill="white" />
            </svg>
            +91 8299314643</h4>
        </div>
      </div>
    </div>
  </section>