<?php include 'include/header.php'; ?>

  <!--Hero Section-->

  <section class="hero">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 box-1 d-flex align-items-center ">
          <div class="">
            <h4><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.75 6.75H8.25V5.25H9.75M9.75 12.75H8.25V8.25H9.75M9 1.5C8.01509 1.5 7.03982 1.69399 6.12987 2.0709C5.21993 2.44781 4.39314 3.00026 3.6967 3.6967C2.29018 5.10322 1.5 7.01088 1.5 9C1.5 10.9891 2.29018 12.8968 3.6967 14.3033C4.39314 14.9997 5.21993 15.5522 6.12987 15.9291C7.03982 16.306 8.01509 16.5 9 16.5C10.9891 16.5 12.8968 15.7098 14.3033 14.3033C15.7098 12.8968 16.5 10.9891 16.5 9C16.5 8.01509 16.306 7.03982 15.9291 6.12987C15.5522 5.21993 14.9997 4.39314 14.3033 3.6967C13.6069 3.00026 12.7801 2.44781 11.8701 2.0709C10.9602 1.69399 9.98491 1.5 9 1.5Z"
                  fill="white" />
              </svg> Learn more about
              our company</h4>
            <h1 class="my-4 col-md-8"><span>The leading B2B e-commerce platform for corporate gifting</span></h1>
            <div class="d-flex flex-wrap align-items-center ">
              <h4 class="mb-0 me-3">Frequently Searched:</h4>
              <button class="btn btn-outline-secondary btn-sm px-3 m-2" type="button">Diwali Gift</button>
              <button class="btn btn-outline-secondary btn-sm px-3 m-2" type="button">New Year Gift</button>
              <button class="btn btn-outline-secondary btn-sm px-3 m-2" type="button">Farewell Gift</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Enquiry section-->

  <section class="enquiry-section wrapper">
    <div class="container">
      <div class="row enquiry">
        <div class="col-md-6 my-3">
          <div class="seller">
            <div class="d-flex align-items-center  px-3">
              <div>
                <h3 class="col-md-10">Looking for product</h3>
                <a href="buyerpage.php" class="btn  btn-outline-primary btn-sm px-5 mt-2 " type="button">Post Buy
                  Requirement</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 my-3">
          <div class="buyer">
            <div class=" d-flex align-items-center px-3">
              <div>
                <h3 class="col-md-10">Want to grow your
                  business faster</h3>
                <a href="sellerpage.php" class="btn  btn-outline-primary btn-md px-5 mt-2" type="button">Sell on Company
                  Name</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Categories You May Like-->

  <section class="categoryYouMayLike wrapper-background">
    <div class="container">
      <div class="top-heading pb-3">
        <h3>Category You May Like</h3>
      </div>
      <div>
        <hr class="mt-0">
      </div>
      <div class="row rowcategory">
        <div class="owl-carousel categorycarousel owl-theme">
          <div class="item">
            <a class="text-decoration-none" href="CategoryYouMayLike.php">
              <div class="card  p-4">
                <img src="images/category img.png" alt="cup" class="category-image">
                <h6 class="my-2 text-center">Diwali Gift</h6>
              </div>
            </a>
          </div>
          <div class="item">
            <a class="text-decoration-none" href="CategoryYouMayLike.php">
              <div class="card p-4">
                <img src="images/category img.png" alt="cup" class="category-image">
                <h6 class="my-2 text-center">Holi Gift</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="custom-nav d-flex  mt-3">
        <button class="btn btn-outline-primary owl-prev" style="border-radius: 50%;"><i class="fa fa-chevron-left"
            aria-hidden="true"></i></button>
        <button class="btn btn-outline-primary owl-next" style="border-radius: 50%;"><i class="fa fa-chevron-right"
            aria-hidden="true"></i></button>
      </div>
    </div>
  </section>

  <!--Products You May Like-->

  <section class="productsYouMayLike wrapper">
    <div class="container">
      <div class="top-heading pb-3">
        <h3>Products You May Like</h3>
      </div>
      <div>
        <hr class="mt-0">
      </div>
      <div class="row">
      <?php include 'reusableComponent/product-card-data.php'; ?>
      </div>
    </div>
  </section>





  <!--New Arrival and Famous Products-->

  <section class="Arrival-Famous wrapper-background">
    <div class="container">
      <div class="row">
        <div class="Arrival-Products col-lg-6 my-3 px-4">
          <div class="top-heading pb-3">
            <h3>New Arrival</h3>
          </div>
          <div>
            <hr class="mt-0">
          </div>
          <div class="Arrival-Box">
            <h5 class="my-5">Most Popular</h5>
            <div id="Arrivalcarousel" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div>
                    <img src="images/Frame 296.png" alt="cup" class="image-large px-1"
                      style="max-width: 100%; height:auto;">
                    <div class="d-flex mt-2">
                      <div class="col-4 px-1">
                        <img src="images/Frame 292.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 293.png" alt="cup" class="image-small" style="width: 100%;height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 294.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                    <img src="images/Frame 296.png" alt="cup" class="image-large px-1"
                    style="max-width: 100%; height:auto;">
                  <div class="d-flex mt-2">
                    <div class="col-4 px-1">
                      <img src="images/Frame 292.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-4 px-1">
                      <img src="images/Frame 293.png" alt="cup" class="image-small" style="width: 100%;height: auto;">
                    </div>
                    <div class="col-4 px-1">
                      <img src="images/Frame 294.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                    </div>
                  </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                    <img src="images/Frame 296.png" alt="cup" class="image-large px-1"
                    style="max-width: 100%; height:auto;">
                  <div class="d-flex mt-2">
                    <div class="col-4 px-1">
                      <img src="images/Frame 292.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-4 px-1">
                      <img src="images/Frame 293.png" alt="cup" class="image-small" style="width: 100%;height: auto;">
                    </div>
                    <div class="col-4 px-1">
                      <img src="images/Frame 294.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="custom-nav2">
                <button class="btn btn-outline-primary carouselExample-prev me-2" type="button"
                  style="border-radius: 50%;" data-bs-target="#Arrivalcarousel" data-bs-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="btn btn-outline-primary carouselExample-next ms-2" type="button"
                  style="border-radius: 50%;" data-bs-target="#Arrivalcarousel" data-bs-slide="next">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="Famous-Products col-lg-6  my-3 px-4">
          <div class="top-heading pb-3">
            <h3>Famous Products</h3>
          </div>
          <div>
            <hr class="mt-0">
          </div>
          <div class="Famous-Box">
            <h5 class="my-5">105,000+ Products Added Today</h5>
            <div id="Famouscarousel" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div>
                    <div class="d-flex">
                      <div class="col-4 px-1">
                        <img src="images/Frame 292.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 293.png" alt="cup" class="image-small" style="width: 100%;height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 294.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                    </div>
                    <img src="images/Frame 297.png" alt="cup" class="image-large mt-2 px-1"
                      style="max-width: 100%; height:auto;">
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                    <div class="d-flex">
                      <div class="col-4 px-1">
                        <img src="images/Frame 292.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 293.png" alt="cup" class="image-small" style="width: 100%;height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 294.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                    </div>
                    <img src="images/Frame 297.png" alt="cup" class="image-large mt-2 px-1"
                      style="max-width: 100%; height:auto;">
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                    <div class="d-flex">
                      <div class="col-4 px-1">
                        <img src="images/Frame 292.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 293.png" alt="cup" class="image-small" style="width: 100%;height: auto;">
                      </div>
                      <div class="col-4 px-1">
                        <img src="images/Frame 294.png" alt="cup" class="image-small" style="width: 100%; height: auto;">
                      </div>
                    </div>
                    <img src="images/Frame 297.png" alt="cup" class="image-large mt-2 px-1"
                      style="max-width: 100%; height:auto;">
                  </div>
                </div>
              </div>
              <div class="custom-nav2">
                <button class="btn btn-outline-primary carouselExample-prev me-2" type="button"
                  style="border-radius: 50%;" data-bs-target="#Famouscarousel" data-bs-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="btn btn-outline-primary carouselExample-next ms-2" type="button"
                  style="border-radius: 50%;" data-bs-target="#Famouscarousel" data-bs-slide="next">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--We connect buyer and sellers-->

  <section class="BuyerandSeller wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pb-3 py-md-0">
          <h2 class="text-md-start text-center">We connect Buyers & Sellers</h2>
          <h6 class="text-md-start text-center my-4">Company Name is a marketplace, connecting buyers with suppliers.
          </h6>
          <div class="row text-md-start text-center">
            <div class="col-4">
              <div class="benefits d-flex flex-column justify-content-start gap-2">
                <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_57049_1020)">
                    <path
                      d="M17.1464 0.716311C17.7032 0.716311 18.2514 0.752436 18.7614 0.837436C19.2639 0.902162 19.7596 1.01168 20.2425 1.16469C20.7242 1.30919 21.2016 1.49548 21.6748 1.72356C22.1359 1.94244 22.6098 2.21019 23.0837 2.50131C23.8848 3.01131 24.6732 3.42356 25.4764 3.75294C27.0573 4.38712 28.7297 4.76378 30.4298 4.86856C31.2897 4.93231 32.1801 4.96489 33.1009 4.96631V13.4663C33.1009 15.0799 32.8948 16.6141 32.4825 18.0691C32.0865 19.506 31.5238 20.8917 30.8059 22.1979C30.0912 23.5024 29.2453 24.7306 28.2814 25.8636C27.3034 27.0228 26.2439 28.1107 25.1109 29.1191C23.962 30.1291 22.7536 31.0694 21.492 31.9347C20.2284 32.813 18.9576 33.6226 17.6798 34.3636L17.1698 34.6674L16.6598 34.3636C15.349 33.6049 14.0687 32.7946 12.822 31.9347C11.5538 31.0786 10.3447 30.138 9.20317 29.1191C8.07096 28.1106 7.01215 27.0227 6.03479 25.8636C5.07419 24.7253 4.22458 23.4979 3.49754 22.1979C2.7926 20.8856 2.2305 19.5014 1.82092 18.0691C1.4088 16.5698 1.20431 15.0211 1.21317 13.4663V4.96631C2.134 4.96489 3.02508 4.93231 3.88642 4.86856C4.73583 4.81082 5.5797 4.68935 6.41092 4.50519C7.22479 4.32244 8.03867 4.08019 8.83979 3.75294C9.6709 3.41699 10.4679 3.00213 11.2198 2.51406C12.1548 1.90631 13.1025 1.45794 14.0375 1.16256C15.0446 0.854201 16.0933 0.703667 17.1464 0.716311ZM30.9632 7.05519C29.3547 6.97646 27.7612 6.70754 26.2159 6.25406C24.6794 5.79453 23.2156 5.11988 21.8682 4.25019C21.169 3.79248 20.4104 3.43283 19.6135 3.18131C18.8171 2.9411 17.9889 2.82218 17.157 2.82856C16.319 2.82345 15.4847 2.94232 14.6814 3.18131C13.8836 3.42534 13.1261 3.78549 12.4332 4.25019C11.0829 5.12376 9.61546 5.8013 8.07479 6.26256C6.56888 6.70031 4.99 6.96806 3.33817 7.06581V13.4769C3.33817 14.8837 3.52092 16.2352 3.88642 17.5314C4.2591 18.8184 4.77218 20.0605 5.41642 21.2353C6.06864 22.4222 6.83743 23.5413 7.71142 24.5758C8.59754 25.6192 9.54317 26.5903 10.5632 27.5126C11.5832 28.4348 12.652 29.2891 13.7698 30.0753C14.8989 30.863 16.028 31.5834 17.157 32.2364C18.313 31.5647 19.4395 30.8436 20.5337 30.0753C21.6601 29.2912 22.7348 28.4352 23.7509 27.5126C24.7709 26.5903 25.7187 25.6192 26.6048 24.5758C27.4788 23.5413 28.2476 22.4222 28.8998 21.2353C29.5408 20.0618 30.0462 18.8192 30.4064 17.5314C30.7834 16.2132 30.9709 14.848 30.9632 13.4769V7.05519Z"
                      fill="#0068C8" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M25.068 10.7229L24.133 9.91968L23.2703 9.99405L14.0053 20.9336L10.8496 16.4286L9.99964 16.2841L9.01577 16.9874L8.86914 17.8374L12.9258 23.6302L13.3869 23.8852L14.358 23.9447L14.8553 23.7279L25.1296 11.5836L25.068 10.7229Z"
                      fill="#0068C8" />
                  </g>
                  <defs>
                    <clipPath id="clip0_57049_1020">
                      <rect width="34" height="34" fill="white" transform="translate(0 0.716309)" />
                    </clipPath>
                  </defs>
                </svg>
                <h6 class="text-center">Trusted Platform</h6>
              </div>
            </div>
            <div class="col-4">
              <div class="benefits d-flex flex-column justify-content-start gap-2">
                <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.9998 32.503C14.5698 30.1713 11.024 25.6863 10.3998 20.2663C10.2288 17.7503 10.2101 15.2262 10.344 12.708C13.2815 12.458 16.8365 11.7105 19.9998 9.3938C23.169 11.713 26.7248 12.4605 29.6557 12.7096C29.7898 15.243 29.7707 17.7671 29.599 20.2663C28.9765 25.6863 25.4298 30.1713 19.9998 32.503Z"
                    stroke="#0068C8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M19.9991 36.9664C27.535 34.3689 32.9066 28.3306 33.7491 20.6422C33.9825 17.3047 33.9633 13.9547 33.69 10.6197C33.654 10.0941 33.4234 9.60071 33.043 9.23608C32.6627 8.87145 32.16 8.66179 31.6333 8.64808C28.2241 8.54308 24.2616 7.97475 21.2 4.95891C20.8802 4.64314 20.4489 4.46606 19.9995 4.46606C19.5501 4.46606 19.1189 4.64314 18.7991 4.95891C15.7366 7.97475 11.7741 8.54308 8.36579 8.64808C7.83907 8.66179 7.33641 8.87145 6.95606 9.23608C6.57572 9.60071 6.34504 10.0941 6.30912 10.6197C6.03576 13.9543 6.0157 17.3047 6.24912 20.6422C7.09245 28.3306 12.4633 34.3689 19.9991 36.9664ZM19.9991 36.9664V32.5031M19.9991 9.39391V4.53558M29.5991 20.2664H33.7491"
                    stroke="#0068C8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <h6 class="text-center">Safe & Secure</h6>
              </div>
            </div>
            <div class="col-4">
              <div class="benefits d-flex flex-column justify-content-start gap-2">
                <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.00065 35.033L10.984 29.0496H30.0007C30.8847 29.0496 31.7326 28.6985 32.3577 28.0733C32.9828 27.4482 33.334 26.6004 33.334 25.7163V10.7163C33.334 9.83225 32.9828 8.98441 32.3577 8.35929C31.7326 7.73416 30.8847 7.38298 30.0007 7.38298H8.33398C7.44993 7.38298 6.60208 7.73416 5.97696 8.35929C5.35184 8.98441 5.00065 9.83225 5.00065 10.7163V35.033ZM5.00065 37.383H3.33398V10.7163C3.33398 9.39023 3.86077 8.11846 4.79845 7.18077C5.73613 6.24309 7.0079 5.71631 8.33398 5.71631H30.0007C31.3267 5.71631 32.5985 6.24309 33.5362 7.18077C34.4739 8.11846 35.0007 9.39023 35.0007 10.7163V25.7163C35.0007 27.0424 34.4739 28.3142 33.5362 29.2518C32.5985 30.1895 31.3267 30.7163 30.0007 30.7163H11.6673L5.00065 37.383ZM10.0007 12.383H28.334V14.0496H10.0007V12.383ZM10.0007 17.383H28.334V19.0496H10.0007V17.383ZM10.0007 22.383H23.334V24.0496H10.0007V22.383Z"
                    fill="#0068C8" />
                </svg>
                <h6 class="text-center">Quick Assistance</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 form pt-3 py-md-0">
          <h3 class="text-center">Tell Us What You Need</h3>
          <form class="col-12 mt-4" action="#" method="post">
            <div class="col-12 my-2">
              <label for="productname" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="productname" name="productname"
                placeholder="Enter your product name" required>
            </div>
            <div class="col-12 my-2">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="col-12 my-2">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"
                required>
            </div>
            <button class="btn btn-md btn-primary  px-5 mt-3" type="button">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!--Find Seller by City-->

  <section class="FindSellersByCity wrapper-background">
    <div class="container">
      <div class="top-heading pb-3">
        <h3>Find City By Sellers</h3>
      </div>
      <div>
        <hr class="mt-0">
      </div>
      <div class="row">
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center ">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
            <img src="images/OIP.jpeg" alt="image" class="city-images">
            <h4 class="text-center mt-2">Hydrabad</h4>
          </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Mumbai.jpeg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Mumbai</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Varanasi.jpeg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Varanasi</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div>
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Prayagraj.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Prayagraj</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Delhi.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">New Delhi</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Jaipur.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Jaipur</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/bangalore_palace__main_entrance-1.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Bangalore</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/kanpur.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Kanpur</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Patna.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Patna</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/KOLKATA.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Kolkata</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Rae bareli.jpg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Rae Bareli</h4>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-2 col-md-3 col-6 p-3">
          <div class="d-flex flex-column align-items-center">
            <a href="ProductsByCity.php " class="text-decoration-none city-name">
              <img src="images/Chandigarh.jpeg" alt="image" class="city-images">
              <h4 class="text-center mt-2">Chandigarh</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Testimony-->
  <section class="Testimony wrapper">
    <div class="container">
      <h3 class="text-center">What Our Customers Say About Us</h3>
      <h6 class="text-center description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt
        ut labore et dolore magna aliqua. </h6>
      <div class="row">
        <div class="owl-carousel testimonycarousel owl-theme">
          <div class="item">
            <div class="card d-flex flex-column align-items-center p-4">
              <div class="d-inline-block">
                <p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <img src="images/Profile1.png" class="reviewer" alt="image"
                style="height: 5rem; width: 5rem; border-radius: 100px;">
              <h6 class="reviewer-name">Alice Walker, Actress, USA</h6>
            </div>
          </div>
          <div class="item">
            <div class="card d-flex flex-column align-items-center p-4">
              <div class="d-inline-block">
                <p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <img src="images/Profile2.png" class="reviewer" alt="image"
                style="height: 5rem; width: 5rem; border-radius: 100px;">
              <h6 class="reviewer-name">James Bond, Agent, London</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Blogs-->
  <section class="Blogs wrapper-background">
    <div class="container">
      <div class="top-heading pb-3">
        <h3>From Our Blogs</h3>
      </div>
      <div>
        <hr class="mt-0">
      </div>
      <div class="row">
        <div class="owl-carousel blogcarousel owl-theme">
          <div class="item">
            <div class="card mx-3" style="overflow:hidden;">
              <div class="p-0">
                <img src="images/Frame 15.png" alt="blogimage"
                  style="width:100%; aspect-ratio: 16/9; object-fit: cover;">
              </div>
              <div class="px-4">
                <h4 class="d-inline-block heading">1Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h4>
                <p class="d-inline-block description">1iPrice Group report offers insights on daily e-commerce activity
                  in the Philippines and Southeast. Statistically, you stand a better chance for success if you have...
                </p>
              </div>
              <div class="d-flex justify-content-between commentbox px-4"
                style="width: 100%; border-top: 1px solid #999;">
                <h6> <strong id="currentDate"></strong></h6>
                <h6>No comments</h6>
              </div>

            </div>
          </div>
          <div class="item">
            <div class="card mx-3" style="overflow:hidden;">
              <div class="p-0">
                <img src="images/Frame 141.png" alt="blogimage"
                  style="width:100%; aspect-ratio: 16/9; object-fit: cover;">
              </div>
              <div class="px-4">
                <h4 class="d-inline-block heading">2Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h4>
                <p class="d-inline-block description">2iPrice Group report offers insights on daily e-commerce activity
                  in the Philippines and Southeast. Statistically, you stand a better chance for success if you have...
                </p>
              </div>
              <div class="d-flex justify-content-between commentbox px-4"
                style="width: 100%; border-top: 1px solid #999;">
                <h6> <strong id="currentDates"></strong></h6>
                <h6>No comments</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="custom-nav d-flex  mt-3">
          <button class="btn btn-outline-primary owl-prevll" style="border-radius: 50%;"><i class="fa fa-chevron-left"
              aria-hidden="true"></i></button>
          <button class="btn btn-outline-primary owl-nextll" style="border-radius: 50%;"><i class="fa fa-chevron-right"
              aria-hidden="true"></i></button>
        </div>

        <div class="d-flex justify-content-center">
          <button class="btn btn-md btn-primary" type="button">View All</button>
        </div>
      </div>


    </div>
  </section>

  <!--Download App-->
  <section class="App wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-6 p-5">
          <img src="images/R 1.png" alt="appimage" class=" appimage ms-md-5" style="width: 100%; height: 100%; ">
        </div>
        <div class="col-md-6 p-5 d-flex align-items-center">
          <div class="">
            <h3 class="text-md-start text-center">Download Our New App</h3>
            <h4 class="text-md-start text-center">Scan the QR Code to download the app on your smartphone</h4>
            <div class="d-flex justify-content-md-start justify-content-center">
              <img src="images/Frame 182.png" alt="scan-image" class="scan-image">
              <div class="d-flex flex-column ms-3">
                <img src="images/app-store 1.png" alt="scan-image" class="apple-image">
                <img src="images/google-play 1.png" alt="scan-image" class="google-image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Tradeshow-->
  <section class="Tradeshow wrapper-background">
    <div class="container">
      <div class="top-heading pb-3">
        <h3>Tradeshows</h3>
      </div>
      <div>
        <hr class="mt-0">
      </div>
      <div class="row">
        <div class="owl-carousel tradeshowcrousel owl-theme">
          <div class="item">
            <div class="card d-flex flex-column align-items-start p-4">
              <div class="">
                <img src="images/R.jpeg" alt="image" class="tradeshow-image"
                  style="width: 4.5rem; height:4.5rem; border-radius: 0.25rem; object-fit: cover;">
              </div>
              <div>
                <h5>Tradeshow</h5>
                <div class="d-flex">
                  <div class="me-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13 2.06934H11V1.06934H10V2.06934H6V1.06934H5V2.06934H3C2.45 2.06934 2 2.51934 2 3.06934V13.0693C2 13.6193 2.45 14.0693 3 14.0693H13C13.55 14.0693 14 13.6193 14 13.0693V3.06934C14 2.51934 13.55 2.06934 13 2.06934ZM13 13.0693H3V6.06934H13V13.0693ZM13 5.06934H3V3.06934H5V4.06934H6V3.06934H10V4.06934H11V3.06934H13V5.06934Z"
                        fill="#0B0B0B" />
                    </svg>
                  </div>
                  <p>June 6, 2024 - June 17,2024</p>
                </div>
                <div class="d-flex ">
                  <div class="mb-3 me-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8 1.56934C5.51562 1.56934 3.5 3.48777 3.5 5.85059C3.5 8.56934 6.5 12.8778 7.60156 14.3659C7.64729 14.4287 7.70722 14.4798 7.77646 14.5151C7.84571 14.5503 7.9223 14.5687 8 14.5687C8.0777 14.5687 8.15429 14.5503 8.22354 14.5151C8.29278 14.4798 8.35271 14.4287 8.39844 14.3659C9.5 12.8784 12.5 8.57152 12.5 5.85059C12.5 3.48777 10.4844 1.56934 8 1.56934Z"
                        stroke="#0B0B0B" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M8 7.56934C8.82843 7.56934 9.5 6.89776 9.5 6.06934C9.5 5.24091 8.82843 4.56934 8 4.56934C7.17157 4.56934 6.5 5.24091 6.5 6.06934C6.5 6.89776 7.17157 7.56934 8 7.56934Z"
                        stroke="#0B0B0B" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>

                  <p class="d-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing.
                    Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card d-flex flex-column align-items-start p-4">
              <div class="">
                <img src="images/OIP.jpeg" alt="scan-image"
                  style="width: 4.5rem; height:4.5rem; border-radius: 0.25rem; object-fit: cover;">
              </div>
              <div>
                <h5>Tradeshow</h5>
                <div class="d-flex">
                  <div class="me-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13 2.06934H11V1.06934H10V2.06934H6V1.06934H5V2.06934H3C2.45 2.06934 2 2.51934 2 3.06934V13.0693C2 13.6193 2.45 14.0693 3 14.0693H13C13.55 14.0693 14 13.6193 14 13.0693V3.06934C14 2.51934 13.55 2.06934 13 2.06934ZM13 13.0693H3V6.06934H13V13.0693ZM13 5.06934H3V3.06934H5V4.06934H6V3.06934H10V4.06934H11V3.06934H13V5.06934Z"
                        fill="#0B0B0B" />
                    </svg>
                  </div>
                  <p>June 6, 2024 - June 17,2024</p>
                </div>
                <div class="d-flex ">
                  <div class="mb-3 me-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8 1.56934C5.51562 1.56934 3.5 3.48777 3.5 5.85059C3.5 8.56934 6.5 12.8778 7.60156 14.3659C7.64729 14.4287 7.70722 14.4798 7.77646 14.5151C7.84571 14.5503 7.9223 14.5687 8 14.5687C8.0777 14.5687 8.15429 14.5503 8.22354 14.5151C8.29278 14.4798 8.35271 14.4287 8.39844 14.3659C9.5 12.8784 12.5 8.57152 12.5 5.85059C12.5 3.48777 10.4844 1.56934 8 1.56934Z"
                        stroke="#0B0B0B" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M8 7.56934C8.82843 7.56934 9.5 6.89776 9.5 6.06934C9.5 5.24091 8.82843 4.56934 8 4.56934C7.17157 4.56934 6.5 5.24091 6.5 6.06934C6.5 6.89776 7.17157 7.56934 8 7.56934Z"
                        stroke="#0B0B0B" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <p class=" d-inline-block ">Lorem ipsum dolor sit amet, consectetur adipiscing.
                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-nav d-flex  mt-3">
          <button class="btn btn-outline-primary tradeshow-prev" style="border-radius: 50%;"><i
              class="fa fa-chevron-left" aria-hidden="true"></i></button>
          <button class="btn btn-outline-primary tradeshow-next" style="border-radius: 50%;"><i
              class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
        <div class="d-flex justify-content-center">
          <button class="btn btn-md  btn-primary" type="button">View More</button>
        </div>
      
      </div>
    </div>
  </section>

  <!--Popular Tags-->
  <?php include 'include/PopularTags.php'; ?>

  <!--Footer-->
  <?php include 'include/footer.php'; ?>


  <!--Javascript-->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script> 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/main.js"></script>

    <script>
      $(document).ready(function () {
    $('.categorycarousel').owlCarousel({
        loop: true,
        margin: 10,
        //nav: true,
        dots: false,
        //autoplay: true,     
        // autoplayTimeout: 3000, 
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    })
    $('.owl-prev').click(function () {
        $('.owl-carousel').trigger('prev.owl.carousel');
    });

    // Custom navigation for next button
    $('.owl-next').click(function () {
        $('.owl-carousel').trigger('next.owl.carousel');
    });
})


    </script>

    <script>
      $(document).ready(function () {
    $('.testimonycarousel').owlCarousel({
        loop: true,
        margin: 10,
        //nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

})
    </script>

    <script>
      $(document).ready(function () {
    $('.blogcarousel').owlCarousel({
        loop: true,
        margin: 10,
        //nav: true,
        dots: false,
        //autoplay: true,     
        // autoplayTimeout: 3000, 
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('.owl-prevll').click(function () {
        $('.owl-carousel').trigger('prev.owl.carousel');
    });

    // Custom navigation for next button
    $('.owl-nextll').click(function () {
        $('.owl-carousel').trigger('next.owl.carousel');
    });
})
    </script>

    <script>
      $(document).ready(function () {
    $('.tradeshowcrousel').owlCarousel({
        loop: true,
        margin: 10,
        //nav: true,
        dots: false,
        //autoplay: true,     
        // autoplayTimeout: 3000, 
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
    $('.tradeshow-prev').click(function () {
        $('.owl-carousel').trigger('prev.owl.carousel');
    });

    // Custom navigation for next button
    $('.tradeshow-next').click(function () {
        $('.owl-carousel').trigger('next.owl.carousel');
    });
})
    </script>
    
</body>

</html>