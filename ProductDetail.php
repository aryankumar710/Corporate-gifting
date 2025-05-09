<?php include 'include/header.php'; ?>
<!--ProductBasicsDetail-->

<section class="ProductBasicsDetail wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-5 ">
        <div>
          <img src="images/Frame 290.png" id="product-image" class="img-fluid" alt=""
            style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius:0.625rem;" />
        </div>
        <div class="row">
          <div class="col-3 p-2 thumbnail-image img-fluid" onclick="changeimage('product-img1')" id="product-img1">
            <img src="images/Frame 296.png" alt="">
          </div>
          <div class="col-3 p-2 thumbnail-image img-fluid" onclick="changeimage('product-img2')" id="product-img2">
            <img src="images/Frame 292.png" alt="">
          </div>
          <div class="col-3 p-2 thumbnail-image img-fluid" onclick="changeimage('product-img3')" id="product-img3">
            <img src="images/Frame 293.png" alt="">
          </div>
          <div class="col-3 p-2 thumbnail-image img-fluid" onclick="changeimage('product-img4')" id="product-img4">
            <img src="images/Frame 294.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-7  d-flex flex-column gap-product-detail1 ps-md-5 mt-4 mt-md-0">
        <div class="d-none d-md-block">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php"
                  style="color: #0b0b0b;">Home</a></li>
              <li class="breadcrumb-item"><a class="text-decoration-none" href="CategoryYouMayLike.php"
                  style="color: #0b0b0b;">Category Name</a></li>
              <li class="breadcrumb-item active d-block" aria-current="page" style="color: var(--primary-color);">Category Name
              </li>
            </ol>
          </nav>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex flex-column gap-product-detail2">
            <h6>Seller Name</h6>
            <h3>Product Name</h3>
            <div class="d-flex stars">
              <svg class="rating-homepage" width="26" height="24" viewBox="0 0 26 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                  fill="#FDC904" />
              </svg>
              <svg class="rating-homepage" width="26" height="24" viewBox="0 0 26 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                  fill="#FDC904" />
              </svg>
              <svg class="rating-homepage" width="26" height="24" viewBox="0 0 26 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                  fill="#FDC904" />
              </svg>
              <svg class="rating-homepage" width="26" height="24" viewBox="0 0 26 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                  fill="#FDC904" />
              </svg>
              <svg class="rating-homepage" width="26" height="24" viewBox="0 0 26 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                  fill="#FDC904" />
              </svg>
              <p>(10 reviews)</p>
            </div>
            <h2>1000 INR</h2>
            <div class="d-flex quantity">
              <h6 class="me-2">Quantity: </h6>
              <p>5</p>
            </div>
          </div>
          <div>
            <svg width="24" height="24" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.5 27.5C21.4583 27.5 20.5729 27.1354 19.8438 26.4062C19.1146 25.6771 18.75 24.7917 18.75 23.75C18.75 23.6042 18.7604 23.4529 18.7812 23.2962C18.8021 23.1396 18.8333 22.9992 18.875 22.875L10.0625 17.75C9.70833 18.0625 9.3125 18.3075 8.875 18.485C8.4375 18.6625 7.97917 18.7508 7.5 18.75C6.45833 18.75 5.57292 18.3854 4.84375 17.6562C4.11458 16.9271 3.75 16.0417 3.75 15C3.75 13.9583 4.11458 13.0729 4.84375 12.3438C5.57292 11.6146 6.45833 11.25 7.5 11.25C7.97917 11.25 8.4375 11.3388 8.875 11.5163C9.3125 11.6938 9.70833 11.9383 10.0625 12.25L18.875 7.125C18.8333 7 18.8021 6.85958 18.7812 6.70375C18.7604 6.54792 18.75 6.39667 18.75 6.25C18.75 5.20833 19.1146 4.32292 19.8438 3.59375C20.5729 2.86458 21.4583 2.5 22.5 2.5C23.5417 2.5 24.4271 2.86458 25.1562 3.59375C25.8854 4.32292 26.25 5.20833 26.25 6.25C26.25 7.29167 25.8854 8.17708 25.1562 8.90625C24.4271 9.63542 23.5417 10 22.5 10C22.0208 10 21.5625 9.91167 21.125 9.735C20.6875 9.55833 20.2917 9.31333 19.9375 9L11.125 14.125C11.1667 14.25 11.1979 14.3908 11.2188 14.5475C11.2396 14.7042 11.25 14.855 11.25 15C11.25 15.145 11.2396 15.2963 11.2188 15.4537C11.1979 15.6112 11.1667 15.7517 11.125 15.875L19.9375 21C20.2917 20.6875 20.6875 20.4429 21.125 20.2662C21.5625 20.0896 22.0208 20.0008 22.5 20C23.5417 20 24.4271 20.3646 25.1562 21.0938C25.8854 21.8229 26.25 22.7083 26.25 23.75C26.25 24.7917 25.8854 25.6771 25.1562 26.4062C24.4271 27.1354 23.5417 27.5 22.5 27.5Z"
                fill="#0068C8" />
            </svg>
          </div>
        </div>
        <div class="truncate-text ">
          <p class="text-truncate text-wrap" id="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex .<span
              class="btn-link text-decoration-none" id="view-more-button" style="color: var(--secondary-color);">View More</span></p>
        </div>
        <div class="d-flex flex-column gap-product-detail2">
          <h5>In stock</h5>
          <h6>Check for your location</h6>
          <div class="col-md-6 col-12">
            <form class="d-flex align-items-center justify-content-between border border-2 border-dark rounded px-2">
              <input class="form-control " type="search" placeholder="Pincode" aria-label="Search">
              <h6 class="mt-1 " style="color: #0068C8;">Check</h6>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="d-flex  mt-3 button-container">
            <a href="#category-item4" class="btn  btn-lg btn-primary me-1 w-100" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
            <a href="ProductDetail.php" class="btn btn-lg btn-outline-primary ms-1 w-100" type="button" data-bs-toggle="modal" data-bs-target="#sellerDetail">Seller Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Overview-->

<section class="overview pb-5 py-md-5">
  <div class="container">
    <div class="top-heading pb-3">
      <h3>Overview</h3>
    </div>
    <div>
      <hr class="mt-0">
    </div>
    <div class="row gap-overview">
      <div class="d-flex align-items-md-center flex-md-row flex-column-reverse">
        <div class="col-md-7 pe-md-3 pe-0 pt-md-0 pt-3">
          <h4>Heading 1</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            . Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
        </div>
        <div class="col-md-5">
          <img src="images/Frame 297.png" alt="" class="overview-image" />
        </div>
      </div>
      <div class="d-flex align-items-md-center flex-md-row flex-column">
        <div class="col-md-5">
          <img src="images/Frame 296.png" alt="" class="overview-image" />
        </div>
        <div class="col-md-7 ps-md-3 ps-0 pt-md-0 pt-3">
          <h4>Heading 2</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            . Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--About Seller-->

<section class="about-seller wrapper">
  <div class="container">
    <div class="top-heading pb-3">
      <h3>About Seller</h3>
    </div>
    <div>
      <hr class="mt-0">
    </div>
    <div class="row ">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
        est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </div>
</section>

<!--Rate-Review-->

<section class="rate-review wrapper">
  <div class="container">
    <div class="top-heading pb-3">
      <h3>Rate & Review</h3>
    </div>
    <div>
      <hr class="mt-0">
    </div>
    <div class="row  gap-rate-review">
      <div class="col-md-3 col-5 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex mb-2 align-items-center justify-content-center">
          <h2 class="mb-0 me-2">4.6</h2>
          <svg class="rating-homepage" width="25" height="23" viewBox="0 0 26 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
              fill="#0b0b0b" />
          </svg>
        </div>
        <div>
          <p class="text-md-center review-paragraph text-start m-auto" style="width: 70%;">1290 Ratings & 366 Reviews</p>
        </div>
      </div>
      <div class="col-md-3 col-7 d-flex flex-column justify-content-start">
        <div class="d-flex justify-content-start align-items-center">
          <h6 class="mb-0">5</h6>
          <svg class="rating-homepage" width="10" height="9" viewBox="0 0 26 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
              fill="#0b0b0b" />
          </svg>
          <div class="w-100 mx-2">
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class=" mb-0" style="font-size: 0.8rem;">233</p>
        </div>
        <div class="d-flex justify-content-start align-items-center">
          <h6 class="mb-0">4</h6>
          <svg class="rating-homepage" width="10" height="9" viewBox="0 0 26 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
              fill="#0b0b0b" />
          </svg>
          <div class="w-100 mx-2">
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class=" mb-0" style="font-size: 0.8rem;">200</p>
        </div>
        <div class="d-flex justify-content-start align-items-center">
          <h6 class="mb-0">3</h6>
          <svg class="rating-homepage" width="10" height="9" viewBox="0 0 26 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
              fill="#0b0b0b" />
          </svg>
          <div class="w-100 mx-2">
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class=" mb-0" style="font-size:0.8rem">150</p>
        </div>
        <div class="d-flex justify-content-start align-items-center">
          <h6 class="mb-0">2</h6>
          <svg class="rating-homepage" width="10" height="9" viewBox="0 0 26 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
              fill="#0b0b0b" />
          </svg>
          <div class="w-100 mx-2">
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class=" mb-0" style="font-size:0.8rem;">125</p>
        </div>
        <div class="d-flex justify-content-start align-items-center">
          <h6 class="mb-0">1</h6>
          <svg class="rating-homepage" width="10" height="9" viewBox="0 0 26 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
              fill="#0b0b0b" />
          </svg>
          <div class="w-100 mx-2">
            <div class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class=" mb-0" style="font-size: 0.8rem;">80</p>
        </div>

      </div>
      <div class="col-md-6 mt-5 mt-md-0 d-flex flex-column align-items-end">
        <div>
          <a href="ProductDetail.php" class="btn primary-button btn-sm btn-primary ms-1" type="button">Rate Product
          </a>
        </div>
        <div class="d-flex gap-images">
          <div class="d-flex rate-images d-none d-sm-block d-md-none mt-4">
            <img src="images/review img1.png" alt="">
          </div>
          <div class="d-flex rate-images d-none d-sm-block d-md-none d-xl-block mt-4">
            <img src="images/review img2.png" alt="">
          </div>
          <div class="d-flex rate-images d-md-none d-lg-block  mt-4">
            <img src="images/review img3.png" alt="">
          </div>
          <div class="d-flex rate-images mt-4">
            <img src="images/review img4.png" alt="">
          </div>
          <div class="d-flex rate-images mt-4">
            <img src="images/review img5.png" alt="">
          </div>
          <div class="d-flex rate-images justify-content-center align-items-center img5 mt-4">
            <h3 class="text-white mb-0">10+</h3>
          </div>
        </div>
      </div>
      <div class="reviews d-flex flex-column  gap-5">
        <div class="d-flex justify-content-between">
          <div class="col-1">
            <img src="images/Frame 304.png" alt="" class="reviewer-image">
          </div>
          <div class="col-9 col-xl-11 col-lg-11 col-md-10 col-sm-9">
            <div class="d-flex  gap-lg-2 gap-sm-2 flex-column justify-content-start ">
              <div class="d-flex gap-3 ms-4 col-md-none">
                <h6 class="text-uppercase  mb-0">ADITI SINGH</h6>
                <p class="review-paragraph mb-0">Jun 18, 2024</p>
              </div>
              <div class="ms-4 d-flex  col-md-none stars pt-1">
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#999999" />
                </svg>
              </div>
            </div>
            <p class="ms-4  mt-3">I have had this for a couple years now and I really like it.
              It takes great photos and very clear. Everything works good on it and came as it said it would.</p>
            <div class="d-flex ms-4 gap-2 rate-images2 mt-2 flex-wrap">
              <div class="d-flex  ">
                <img src="images/review img1.png" alt="">
              </div>
              <div class="d-flex">
                <img src="images/review img2.png" alt="">
              </div>
              <div class="d-flex">
                <img src="images/review img3.png" alt="">
              </div>
              <div class="d-flex">
                <img src="images/review img4.png" alt="">
              </div>
              <div class="d-flex  ">
                <img src="images/review img5.png" alt="">
              </div>
              <div class="d-flex">
                <img src="images/review img1.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="col-1">
            <img src="images/Frame 305.png" alt="" class="reviewer-image">
          </div>
          <div class="col-9 col-xl-11 col-lg-11 col-md-10 col-sm-9">
            <div class="d-flex  gap-lg-2 gap-sm-2 flex-column justify-content-start ">
              <div class="d-flex gap-3 ms-4  col-md-none">
                <h6 class="text-uppercase  mb-0">Archit Gupta</h6>
                <p class="review-paragraph mb-0">Jun 22, 2024</p>
              </div>
              <div class="ms-4 d-flex  col-md-none stars pt-1">
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#FDC904" />
                </svg>
                <svg class="rating-homepage" width="12" height="11" viewBox="0 0 26 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                    fill="#999999" />
                </svg>
              </div>
            </div>
            <p class="ms-4  mt-3">Battery backup is very good. It's really worth buying it. The good part is the sensor
              at tips to attend and end the calls and to increase and decrease the volume.
              It's very good feature I loved it. Sound quality also very good.</p>
            <div class="d-flex ms-4 gap-2 rate-images2 mt-2 flex-wrap">
              <div class="d-flex  ">
                <img src="images/review img1.png" alt="">
              </div>
              <div class="d-flex ">
                <img src="images/review img2.png" alt="">
              </div>
              <div class="d-flex  ">
                <img src="images/review img3.png" alt="">
              </div>
              <div class="d-flex  ">
                <img src="images/review img4.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <div class="d-flex justify-content-center">
          <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary me-1" type="button">Load More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Similar-Products-->

<section class="productsYouMayLike wrapper">
  <div class="container">
    <div class="top-heading pb-3">
      <h3>Similar Products</h3>
    </div>
    <div>
      <hr class="mt-0">
    </div>
    <div class="row">
      <?php include 'reusableComponent/product-card-data.php'; ?>

    </div>
  </div>
  </div>
</section>

<!--Other-Products-By-CompanyName-->

<section class="productsYouMayLike wrapper">
  <div class="container">
    <div class="top-heading pb-3">
      <h3>Other Products By Seller</h3>
    </div>
    <div>
      <hr class="mt-0">
    </div>
    <div class="row">
      <?php include 'reusableComponent/product-card-data.php'; ?>
    </div>
  </div>
</section>

<!--Enquiry Popup-->
<div class="modal fade" id="enquiryPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Seller for Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="col-12 d-flex flex-wrap">
          <div class="col-md-5 ">
            <img src="images/Product-img1.jpeg" alt="" style="aspect-ratio: 4/3; width:100%; object-fit:cover" />
          </div>
          <div class=" col-md-7 ps-4">
            <h6 style=" color: var(--text-color);">Seller Name</h6>
            <h4>Product Name</h4>
            <h3 style="color: red;">2000 INR</h3>
            <div class="d-flex quantity">
              <h6 class="me-2">Quantity: </h6>
              <p style="color:black;">5</p>
            </div>
          </div>
          <div class="form-floating-label col-12  px-2 mt-4  mb-4">
            <input type="text" class="form-control  col-12" style="padding-bottom: 4.5rem;"
              id="ProductDescription" placeholder="" required>
            <label for="DescribeRequirement">Describe Requirement</label>
            <div class="invalid-feedback">
              Please write short description about your requirement.
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Send Enquiry</button>
      </div>
    </div>
  </div>
</div>


<!--Seller Detail-->

<div class="modal fade" id="sellerDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About Seller</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="d-flex">
            <div class="me-3">
              <img src="images/Profile1.png" alt=""
                style="width:3.5rem; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;">
            </div>
            <div>
              <h4>DeviceDisk</h4>
              <p> <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8 1.56934C5.51562 1.56934 3.5 3.48777 3.5 5.85059C3.5 8.56934 6.5 12.8778 7.60156 14.3659C7.64729 14.4287 7.70722 14.4798 7.77646 14.5151C7.84571 14.5503 7.9223 14.5687 8 14.5687C8.0777 14.5687 8.15429 14.5503 8.22354 14.5151C8.29278 14.4798 8.35271 14.4287 8.39844 14.3659C9.5 12.8784 12.5 8.57152 12.5 5.85059C12.5 3.48777 10.4844 1.56934 8 1.56934Z"
                    stroke="#0B0B0B" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M8 7.56934C8.82843 7.56934 9.5 6.89776 9.5 6.06934C9.5 5.24091 8.82843 4.56934 8 4.56934C7.17157 4.56934 6.5 5.24091 6.5 6.06934C6.5 6.89776 7.17157 7.56934 8 7.56934Z"
                    stroke="#0B0B0B" stroke-linecap="round" stroke-linejoin="round" />
                </svg>Malviya Nagar, Delhi, 201015</p>
            </div>
          </div>
          <div class="d-flex flex-md-row flex-column my-4">
            <div class="d-flex flex-column gap-3 ">
              <div>
                <h5>GST</h5>
                <p>XXXXXXXXXX</p>
              </div>
              <div>
                <h5>Email</h5>
                <p>aryankumar79101117@gmail.com</p>
              </div>
              <div>
                <h5>Number</h5>
                <p>+91 8299314643</p>
              </div>
            </div>
            <div class="d-flex flex-column gap-3 ms-md-5 mt-3 mt-md-0">
              <div>
                <h5>Member Since</h5>
                <p>2001</p>
              </div>
              <div>
                <h5>Alternate Email</h5>
                <p>aryankumar79101117@gmail.com</p>
              </div>
              <div>
                <h5>Alternate Number</h5>
                <p>+91 8299314643</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div>



<!--Footer-->
<?php include 'include/footer.php'; ?>


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

</body>

</html>