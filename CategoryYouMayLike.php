<?php include 'include/header.php'; ?>

  <!--Breadcumb-->
  <section class="breadcrumb mb-0 breadcrumb-wrapper d-none d-md-block">
    <div class="container">
      <div class="row">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php"
                style="color: var(--black-color);">Home</a></li>
            <li class="breadcrumb-item active d-block" aria-current="page" style="color:var(--primary-color)">Category Name</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <!--Description about category-->

  <section class="Category-content wrapper">
    <div class="container">
      <h3>Category Name</h3>
      <div>
        <div class="extra-line"></div>
        <hr>
      </div>
      <p class="d-lg-flex d-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est
        laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna
        aliqua.</p>
      <div class="row mt-4">
        <div class="col-md-4 ">
          <form class="d-flex align-items-center justify-content-between border border-2 border-dark rounded px-2">
            <input class="form-control " type="search" placeholder="Search for location" aria-label="Search">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.4856 20.7586L13.2236 14.4966C12.7236 14.9226 12.1486 15.2523 11.4986 15.4856C10.8486 15.719 10.1953 15.8356 9.53859 15.8356C7.93726 15.8356 6.58193 15.2813 5.47259 14.1726C4.36326 13.064 3.80859 11.709 3.80859 10.1076C3.80859 8.5063 4.36259 7.15063 5.47059 6.04063C6.57859 4.93063 7.93326 4.37496 9.53459 4.37363C11.1359 4.3723 12.4919 4.92696 13.6026 6.03763C14.7133 7.1483 15.2686 8.50396 15.2686 10.1046C15.2686 10.7993 15.1456 11.4716 14.8996 12.1216C14.6536 12.7716 14.3303 13.3276 13.9296 13.7896L20.1916 20.0506L19.4856 20.7586ZM9.53959 14.8346C10.8663 14.8346 11.9863 14.378 12.8996 13.4646C13.8129 12.5513 14.2696 11.431 14.2696 10.1036C14.2696 8.7763 13.8129 7.6563 12.8996 6.74363C11.9863 5.83096 10.8663 5.3743 9.53959 5.37363C8.21293 5.37296 7.09259 5.82963 6.17859 6.74363C5.26459 7.65763 4.80793 8.77763 4.80859 10.1036C4.80926 11.4296 5.26593 12.5496 6.17859 13.4636C7.09126 14.3776 8.21126 14.8343 9.53859 14.8336"
                fill="#0B0B0B" />
            </svg>
          </form>
        </div>
        <div class="col-md-8 d-flex flex-row flex-nowrap px-3 mt-4 mt-md-0">
          <button class="btn btn-outline-primary btn-sm m-2">Varanasi</button>
          <button class="btn  btn-outline-primary btn-sm  m-2">Delhi</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Ghaziabad</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Kanpur</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Noida</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Varanasi</button>
          <button class="btn  btn-outline-primary btn-sm  m-2">Delhi</button>
          <button class="btn btn-outline-primary btn-sm m-2">Ghaziabad</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Kanpur</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Noida</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Varanasi</button>
          <button class="btn  btn-outline-primary btn-sm  m-2">Delhi</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Ghaziabad</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Kanpur</button>
          <button class="btn  btn-outline-primary btn-sm m-2">Noida</button>
        </div>
      </div>      
  </section>

  <section class="Category-content-products">
    <div class="container">
      <div class="row">
        <div class="d-flex justify-content-start mb-3">
          <button class="btn d-lg-none btn-side-nav btn-link" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Filter
          </button>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header d-flex justify-content-end">
           <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="d-flex justify-content-between ">
              <h3>Filter</h3>
              <button id="myButton" class="btn btn-link">Apply Filter</button>
            </div>
           <div class="filter-wrapper">
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h5>Shop Now</h5>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
            </div>
            <div class="filter-wrapper">
              <h5 class="p-2">Price Range</h5>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 1</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 2</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 3</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 4</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 5</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
            </div>
            <div class="filter-wrapper">
              <h5 class="p-2">Filter 1</h5>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 1</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 2</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 3</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 4</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 5</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
            </div>
            <div class="filter-wrapper">
              <h5 class="p-2">Filter 2</h5>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 1</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 2</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 3</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 4</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 5</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
            </div>
            <div class="filter-wrapper">
              <h5 class="p-2">Filter 3</h5>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 1</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 2</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 3</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 4</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 5</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
            </div>
           <div class="filter-wrapper">
              <h5 class="p-2">Filter 4</h5>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 1</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 2</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 3</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 4</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
              <div class="d-flex justify-content-between p-2">
                <div class="filter">
                  <label class="form-check-label" for="flexCheckDefault">
                    <h6>Option 5</h6>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-none d-lg-flex flex-column">
          <div class="d-flex justify-content-between ">
            <h3>Filter</h3>
            <button id="myButton" class="btn btn-link">Apply Filter</button>
          </div>

          <div class="filter-wrapper">
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h5>Shop Now</h5>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
          </div>
          <div class="filter-wrapper">
            <h5 class="p-2">Price Range</h5>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 1</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 2</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 3</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 4</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 5</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
          </div>
          <div class="filter-wrapper">
            <h5 class="p-2">Filter 1</h5>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 1</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 2</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 3</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 4</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 5</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
          </div>
          <div class="filter-wrapper">
            <h5 class="p-2">Filter 2</h5>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 1</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 2</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 3</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 4</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 5</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
          </div>
          <div class="filter-wrapper">
            <h5 class="p-2">Filter 3</h5>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 1</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 2</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 3</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 4</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 5</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
          </div>
          <div class="filter-wrapper">
            <h5 class="p-2">Filter 4</h5>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 1</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 2</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 3</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 4</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div class="d-flex justify-content-between p-2">
              <div class="filter">
                <label class="form-check-label" for="flexCheckDefault">
                  <h6>Option 5</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
          </div>
        </div>

        <!-- Content Section -->

        <div class="col-lg-9 ">

          <div class="products">
            <div class="page " id="page-1">
              <div class="row">
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img1.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>   
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img2.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>   
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img3.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div> 
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img4.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>   
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img5.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>   
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img6.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div> 
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img7.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>   
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img8.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div> 
              <div class="product-box col-lg-4 col-6 py-2">
                <div class="px-2">
                  <img src="images/Product-img3.jpeg" alt="cup" class="image-fluid" >
                  <h6>Seller Name</h6>
                  <h4>Cup</h4>
                  <div class="d-flex">
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex flex-column">
                     <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div> 
            </div>     
            </div>
            <div class="page" id="page-2" style="display:none;">
              <div class="row">
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img1.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img2.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img3.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img4.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img5.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img6.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img7.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img8.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img3.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
              </div> 
            </div>
            <div class="page" id="page-3" style="display:none;">
              <div class="row">
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img1.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img2.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img3.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img4.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img5.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img6.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img7.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div>   
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img8.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
                <div class="product-box col-lg-4 col-6 py-2">
                  <div class="px-2">
                    <img src="images/Product-img3.jpeg" alt="cup" class="image-fluid" >
                    <h6>Seller Name</h6>
                    <h4>Cup</h4>
                    <div class="d-flex">
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
                    </div>
                    <h3>1000 INR</h3>
                    <div class="d-flex flex-column">
                       <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                      <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
                        Detail</a>
                    </div>
                  </div>
                </div> 
              </div> 
            </div>
            <div class="page" id="page-4" style="display:none;">
              <div class="row mb-5">
                <div class="col-lg-5">
                  <img src="images/Frame 246.png" alt="product image">
                </div>
                <div class="col-lg-7">
                  <h6>Seller Name</h6>
                  <h4>Product Name</h4>
                  <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex quantity">
                    <h6 class="me-2">Quantity: </h6>
                    <p>5</p>
                  </div>
                  <div class="d-flex">
                    <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary ms-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-5">
                  <img src="images/Frame 246.png" alt="product image">
                </div>
                <div class="col-lg-7">
                  <h6>Seller Name</h6>
                  <h4>Product Name</h4>
                  <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex quantity">
                    <h6 class="me-2">Quantity: </h6>
                    <p>5</p>
                  </div>
                  <div class="d-flex">
                    <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary ms-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-5">
                  <img src="images/Frame 246.png" alt="product image">
                </div>
                <div class="col-lg-7">
                  <h6>Seller Name</h6>
                  <h4>Product Name</h4>
                  <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex quantity">
                    <h6 class="me-2">Quantity: </h6>
                    <p>5</p>
                  </div>
                  <div class="d-flex">
                    <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary ms-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-5">
                  <img src="images/Frame 246.png" alt="product image">
                </div>
                <div class="col-lg-7">
                  <h6>Seller Name</h6>
                  <h4>Product Name</h4>
                  <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex quantity">
                    <h6 class="me-2">Quantity: </h6>
                    <p>5</p>
                  </div>
                  <div class="d-flex">
                    <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary ms-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-5">
                  <img src="images/Frame 246.png" alt="product image">
                </div>
                <div class="col-lg-7">
                  <h6>Seller Name</h6>
                  <h4>Product Name</h4>
                  <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
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
                  </div>
                  <h3>1000 INR</h3>
                  <div class="d-flex quantity">
                    <h6 class="me-2">Quantity: </h6>
                    <p>5</p>
                  </div>
                  <div class="d-flex">
                    <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
                    <a href="ProductDetail.php" class="btn  btn-md btn-outline-primary ms-1" type="button">Product
                      Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- Pagination Component -->
        <div class="d-flex justify-content-center  my-5">
          <nav>
            <ul class="pagination ">
              <li class="page-item" id="prev-page">
                <a class="page-link prev-next-btn" id="p-btn" href="#">Prev</a>
              </li>
              <li class="page-item  active" id="page-1-link"><a class="page-link nav-num" href="#">1</a></li>
              <li class="page-item " id="page-2-link"><a class="page-link nav-num" href="#">2</a></li>
              <li class="page-item " id="page-3-link"><a class="page-link nav-num" href="#">3</a></li>
              <li class="page-item " id="page-4-link"><a class="page-link nav-num" href="#">4</a></li>
              <li class="page-item " id="next-page">
                <a class="page-link prev-next-btn" id="n-btn" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Modal -->
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

    

    <script>
      
// JavaScript to handle page switching
let currentPage = 1;
const totalPages = 4;

function showPage(page) {
    // Hide all pages
    for (let i = 1; i <= totalPages; i++) {
        document.getElementById("page-" + i).style.display = "none";
        document.getElementById("page-" + i + "-link").classList.remove("active");
    }
    // Show the current page
    document.getElementById("page-" + page).style.display = "block";
    document.getElementById("page-" + page + "-link").classList.add("active");
}

// Event listeners for pagination buttons
document.getElementById("prev-page").addEventListener("click", function () {
    if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
    }
});

document.getElementById("next-page").addEventListener("click", function () {
    if (currentPage < totalPages) {
        currentPage++;
        showPage(currentPage);
    }
});

for (let i = 1; i <= totalPages; i++) {
    document.getElementById("page-" + i + "-link").addEventListener("click", function () {
        currentPage = i;
        showPage(currentPage);
    });
}
// Initialize the first page
showPage(currentPage);


    </script>

<script src="js/main.js"></script>

  



</body>

</html>