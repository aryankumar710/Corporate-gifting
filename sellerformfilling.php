<?php include 'include/header.php'; ?>

<!--Breadcumb-->
<section class="breadcrumb mb-0 breadcrumb-wrapper d-none d-md-block">
    <div class="container">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php"
                            style="color: var(--black-color);">Seller Registration</a></li>
                    <li class="breadcrumb-item active d-block" aria-current="page"
                        style="color:var(--primary-color)">Form Filling</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--Form Filling-->

<section class="form-filling wrapper">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center col-12">
                <div class="d-flex  align-items-center flex-column col-12 col-md-11">
                    <ul class="nav nav-pills mb-3 col-12" id="pills-tab" role="tablist">
                        <li class="nav-item d-flex flex-column px-1 col-4" role="presentation">
                            <button class=" nav-link active " id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true" style="border-radius: 0;">Product Details</button>
                        </li>
                        <li class="nav-item d-flex flex-column px-1 col-4" role="presentation">
                            <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false" disabled>Company Details</button>
                        </li>
                        <li class="nav-item d-flex flex-column px-1 col-4" role="presentation">
                            <button class="nav-link " id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false" disabled>Bank Details</button>
                        </li>
                    </ul>
                    <div class="tab-content col-12 mt-4 " id="pills-tabContent">
                        <div class="tab-pane  fade show active " id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <form class="col-12 d-flex flex-wrap needs-validation" novalidate>
                                <div class="form-floating-label col-12 col-md-6  px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="productname" placeholder=""
                                        required>
                                    <label for="productname">Product Name</label>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <div class=" col-12 col-md-6   px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center" required>
                                        <option selected disabled value="">Product Category</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select product category.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" style="padding-bottom: 4.5rem;"
                                        id="ProductDescription" placeholder="" required>
                                    <label for="ProductDescription">Product Description</label>
                                    <div class="invalid-feedback">
                                        Please write short description about product.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-4  px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="Quantityofeachproduct"
                                        placeholder="" required>
                                    <label for="Quantityofeachproduct">Quantity of each product</label>
                                    <div class="invalid-feedback">
                                        Please enter total quantity of each product.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-4  px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="Priceinrupees"
                                        placeholder=" " required>
                                    <label for="Priceinrupees">Price in rupees</label>
                                    <div class="invalid-feedback">
                                        Please enter price of each product.
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center" required>
                                        <option selected disabled value="">Metric Unit</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose appropriate unit for your product.
                                    </div>

                                </div>
                                <div class="col-12 d-flex  gap-3 px-2 flex-wrap">
                                    <div
                                        class=" d-flex flex-column justify-content-center align-items-center add-image">
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M37.125 7.21875H6.875C6.23682 7.21875 5.62478 7.47227 5.17352 7.92352C4.72227 8.37478 4.46875 8.98682 4.46875 9.625V34.375C4.46875 35.0132 4.72227 35.6252 5.17352 36.0765C5.62478 36.5277 6.23682 36.7812 6.875 36.7812H37.125C37.7632 36.7812 38.3752 36.5277 38.8265 36.0765C39.2777 35.6252 39.5312 35.0132 39.5312 34.375V9.625C39.5312 8.98682 39.2777 8.37478 38.8265 7.92352C38.3752 7.47227 37.7632 7.21875 37.125 7.21875ZM6.875 9.28125H37.125C37.2162 9.28125 37.3036 9.31747 37.3681 9.38193C37.4325 9.4464 37.4688 9.53383 37.4688 9.625V28.1136L32.4036 23.0484C32.1801 22.825 31.9149 22.6477 31.6229 22.5268C31.331 22.4058 31.018 22.3436 30.702 22.3436C30.386 22.3436 30.0731 22.4058 29.7811 22.5268C29.4892 22.6477 29.2239 22.825 29.0005 23.0484L25.3189 26.73L17.5141 18.9234C17.2906 18.7 17.0253 18.5227 16.7334 18.4018C16.4414 18.2808 16.1285 18.2186 15.8125 18.2186C15.4965 18.2186 15.1836 18.2808 14.8916 18.4018C14.5997 18.5227 14.3344 18.7 14.1109 18.9234L6.53125 26.5031V9.625C6.53125 9.53383 6.56747 9.4464 6.63193 9.38193C6.6964 9.31747 6.78383 9.28125 6.875 9.28125ZM6.53125 34.375V29.4198L15.5684 20.3827C15.6004 20.3504 15.6384 20.3249 15.6803 20.3074C15.7222 20.29 15.7671 20.281 15.8125 20.281C15.8579 20.281 15.9028 20.29 15.9447 20.3074C15.9866 20.3249 16.0246 20.3504 16.0566 20.3827L30.3927 34.7188H6.875C6.78383 34.7188 6.6964 34.6825 6.63193 34.6181C6.56747 34.5536 6.53125 34.4662 6.53125 34.375ZM37.125 34.7188H33.3094L26.7781 28.1875L30.458 24.5059C30.4899 24.474 30.5278 24.4486 30.5695 24.4313C30.6113 24.414 30.656 24.4051 30.7012 24.4051C30.7463 24.4051 30.7911 24.414 30.8328 24.4313C30.8745 24.4486 30.9124 24.474 30.9444 24.5059L37.4756 31.0372V34.375C37.4756 34.4207 37.4665 34.466 37.4488 34.5082C37.4311 34.5503 37.4052 34.5885 37.3725 34.6205C37.3399 34.6525 37.3012 34.6777 37.2587 34.6946C37.2162 34.7114 37.1707 34.7197 37.125 34.7188ZM25.0938 17.1875C25.0938 16.8476 25.1946 16.5153 25.3834 16.2326C25.5723 15.95 25.8407 15.7297 26.1548 15.5996C26.4688 15.4695 26.8144 15.4355 27.1478 15.5018C27.4812 15.5681 27.7875 15.7318 28.0278 15.9722C28.2682 16.2125 28.4319 16.5188 28.4982 16.8522C28.5645 17.1856 28.5305 17.5312 28.4004 17.8452C28.2703 18.1593 28.05 18.4277 27.7674 18.6166C27.4847 18.8054 27.1524 18.9062 26.8125 18.9062C26.3567 18.9062 25.9195 18.7252 25.5972 18.4028C25.2748 18.0805 25.0938 17.6433 25.0938 17.1875Z"
                                                fill="#666666" />
                                        </svg>
                                        <p>Add Image</p>
                                    </div>
                                    <div
                                        class=" d-flex flex-column justify-content-center align-items-center add-image">
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M27.8816 18.6777L19.6316 13.1777C19.528 13.1086 19.4076 13.0689 19.2833 13.0629C19.1589 13.0568 19.0353 13.0847 18.9255 13.1434C18.8158 13.2022 18.724 13.2897 18.6601 13.3965C18.5961 13.5033 18.5624 13.6255 18.5625 13.75V24.75C18.5624 24.8745 18.596 24.9967 18.6599 25.1035C18.7238 25.2104 18.8154 25.2979 18.9252 25.3567C19.035 25.4155 19.1587 25.4434 19.2831 25.4373C19.4075 25.4313 19.528 25.3915 19.6316 25.3223L27.8816 19.8223C27.9759 19.7596 28.0532 19.6745 28.1067 19.5746C28.1602 19.4748 28.1882 19.3633 28.1882 19.25C28.1882 19.1367 28.1602 19.0252 28.1067 18.9254C28.0532 18.8255 27.9759 18.7404 27.8816 18.6777ZM19.9375 23.4661V15.0339L26.2608 19.25L19.9375 23.4661ZM37.125 7.5625H6.875C6.32799 7.5625 5.80339 7.7798 5.41659 8.16659C5.0298 8.55339 4.8125 9.07799 4.8125 9.625V28.875C4.8125 29.422 5.0298 29.9466 5.41659 30.3334C5.80339 30.7202 6.32799 30.9375 6.875 30.9375H37.125C37.672 30.9375 38.1966 30.7202 38.5834 30.3334C38.9702 29.9466 39.1875 29.422 39.1875 28.875V9.625C39.1875 9.07799 38.9702 8.55339 38.5834 8.16659C38.1966 7.7798 37.672 7.5625 37.125 7.5625ZM37.8125 28.875C37.8125 29.0573 37.7401 29.2322 37.6111 29.3611C37.4822 29.4901 37.3073 29.5625 37.125 29.5625H6.875C6.69266 29.5625 6.5178 29.4901 6.38886 29.3611C6.25993 29.2322 6.1875 29.0573 6.1875 28.875V9.625C6.1875 9.44266 6.25993 9.2678 6.38886 9.13886C6.5178 9.00993 6.69266 8.9375 6.875 8.9375H37.125C37.3073 8.9375 37.4822 9.00993 37.6111 9.13886C37.7401 9.2678 37.8125 9.44266 37.8125 9.625V28.875ZM39.1875 35.75C39.1875 35.9323 39.1151 36.1072 38.9861 36.2361C38.8572 36.3651 38.6823 36.4375 38.5 36.4375H5.5C5.31766 36.4375 5.1428 36.3651 5.01386 36.2361C4.88493 36.1072 4.8125 35.9323 4.8125 35.75C4.8125 35.5677 4.88493 35.3928 5.01386 35.2639C5.1428 35.1349 5.31766 35.0625 5.5 35.0625H38.5C38.6823 35.0625 38.8572 35.1349 38.9861 35.2639C39.1151 35.3928 39.1875 35.5677 39.1875 35.75Z"
                                                fill="#666666" />
                                        </svg>
                                        <p>Add Video</p>
                                    </div>
                                    <div class="position-relative">
                                        <svg class="delete position-absolute top-0 end-0" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H24V24H4C1.79086 24 0 22.2091 0 20V0Z" fill="white" />
                                            <path
                                                d="M7.83398 19.5C7.37565 19.5 6.98343 19.3369 6.65732 19.0108C6.33121 18.6847 6.16787 18.2922 6.16732 17.8333V7H5.33398V5.33333H9.50065V4.5H14.5007V5.33333H18.6673V7H17.834V17.8333C17.834 18.2917 17.6709 18.6842 17.3448 19.0108C17.0187 19.3375 16.6262 19.5006 16.1673 19.5H7.83398ZM9.50065 16.1667H11.1673V8.66667H9.50065V16.1667ZM12.834 16.1667H14.5007V8.66667H12.834V16.1667Z"
                                                fill="#0068C8" />
                                        </svg>

                                        <img src="images/Product-img2.jpeg" alt="scan-image" class="image">

                                    </div>
                                    <div class="position-relative">
                                        <svg class="delete position-absolute top-0 end-0" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H24V24H4C1.79086 24 0 22.2091 0 20V0Z" fill="white" />
                                            <path
                                                d="M7.83398 19.5C7.37565 19.5 6.98343 19.3369 6.65732 19.0108C6.33121 18.6847 6.16787 18.2922 6.16732 17.8333V7H5.33398V5.33333H9.50065V4.5H14.5007V5.33333H18.6673V7H17.834V17.8333C17.834 18.2917 17.6709 18.6842 17.3448 19.0108C17.0187 19.3375 16.6262 19.5006 16.1673 19.5H7.83398ZM9.50065 16.1667H11.1673V8.66667H9.50065V16.1667ZM12.834 16.1667H14.5007V8.66667H12.834V16.1667Z"
                                                fill="#0068C8" />
                                        </svg>
                                        <img src="images/Product-img1.jpeg" alt="scan-image" class="image">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between flex-wrap align-items-end">
                                    <div class="col-md-8 col-12">
                                        <h4 class="p-2 mt-4">Availability</h4>
                                        <div class="d-flex col-12 col-md-5 justify-content-between p-2">
                                            <div class="filter">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <h6>In stock</h6>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="default" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="d-flex col-12 col-md-5 justify-content-between p-2">
                                            <div class="filter">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <h6>Out of stock</h6>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="default" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex col-md-3 mt-3 mt-md-0 col-12 flex-column">
                                        <button class="btn btn-primary" type="submit"
                                            id="Continue1">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <form class="col-12 d-flex flex-wrap needs-validation2" novalidate>
                                <div class="form-floating-label col-12   px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="CompanyName " placeholder=""
                                        required>
                                    <label for="CompanyName ">Company Name</label>
                                    <div class="invalid-feedback">
                                        Please enter company name.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="Businessemail"
                                        placeholder=" " required>
                                    <label for="Businessemail">Business email</label>
                                    <div class="invalid-feedback">
                                        Please enter business email.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="GSTnumber " placeholder=""
                                        required>
                                    <label for="GSTnumber ">GST number</label>
                                    <div class="invalid-feedback">
                                        Please enter GST number.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control col-12" id="PANnumber" placeholder=" "
                                        required>
                                    <label for="PANnumber">PAN number</label>
                                    <div class="invalid-feedback">
                                        Please enter PAN number.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="Businessphonenumber "
                                        placeholder="" required>
                                    <label for="Businessphonenumber ">Business phone number</label>
                                    <div class="invalid-feedback">
                                        Please enter business phone number.
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center" required>
                                        <option selected disabled value="">Ownership Type</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter owrnership type.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-4  px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="YearofEstablishment"
                                        placeholder="" required>
                                    <label for="YearofEstablishment">Year of Establishment</label>
                                    <div class="invalid-feedback">
                                        Please enter company establishment year.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-4  px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="Numberofemployee"
                                        placeholder=" " required>
                                    <label for="Numberofemployee">Number of employee</label>
                                    <div class="invalid-feedback">
                                        Please enter number of employee in company.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" style="padding-bottom: 4.5rem;"
                                        id="CompanyAddress" placeholder=" " required>
                                    <label for="CompanyAddress">Company Address</label>
                                    <div class="invalid-feedback">
                                        Please enter company address.
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center" required>
                                        <option selected disabled value="">Select Country</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select country.
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center" required>
                                        <option selected disabled value="">Select State</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select state
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center" required>
                                        <option selected disabled value="">Select City</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select city
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="Pincode" placeholder=" "
                                        required>
                                    <label for="Pincode">Pincode</label>
                                    <div class="invalid-feedback">
                                        Please enter valid pincode.
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="d-flex col-md-3 mt-3 mt-md-0 col-12 flex-column ">
                                        <button class="btn btn-primary" id="Continue2"
                                            type="submit">Continue</button>
                                    </div>
                                </div>                                <div class="col-12 d-flex flex-column my-4 gap-4">
                                    <div>
                                        <div class="top-heading pb-3">
                                            <h4>Add Location Preference for Selling</h4>
                                        </div>
                                        <div>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Select States for Business</h5>
                                        <div class="input-group">
                                            <div class="form-control d-flex flex-wrap p-2" id="chip-container-states">
                                                <input type="text" id="chip-input-states"
                                                    class="form-control border-0 flex-grow-1" placeholder="Select State"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Please select your preferred states for business.
                                                </div>
                                            </div>
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <ul class="dropdown-menu dropdown-menu-end" id="chip-options-states">
                                                <li><a class="dropdown-item" href="#" data-value="Delhi">Delhi</a></li>
                                                <li><a class="dropdown-item" href="#" data-value="Uttar Pradesh">Uttar
                                                        Pradesh</a></li>
                                                <li><a class="dropdown-item" href="#"
                                                        data-value="Uttrakhand">Uttrakhand</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" data-value="Bihar">Bihar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-3 select-cities p-3">
                                        <!-- Bihar Cities -->
                                        <div>
                                            <h6>Select Cities for Business in Bihar</h6>
                                            <div class="input-group">
                                                <div class="form-control d-flex flex-wrap p-2"
                                                    id="chip-container-bihar">
                                                    <input type="text" id="chip-input-bihar"
                                                        class="form-control border-0 flex-grow-1"
                                                        placeholder="Select City" required>
                                                    <div class="invalid-feedback">
                                                        Please select your preferred cities for business.
                                                    </div>

                                                </div>
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></button>
                                                <ul class="dropdown-menu dropdown-menu-end" id="chip-options-bihar">
                                                    <li><a class="dropdown-item" href="#" data-value="Patna">Patna</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#" data-value="Gaya">Gaya</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Bhagalpur">Bhagalpur</a></li>
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Muzaffarpur">Muzaffarpur</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- UP Cities -->
                                        <div>
                                            <h6>Select Cities for Business in Uttar Pradesh</h6>
                                            <div class="input-group">
                                                <div class="form-control d-flex flex-wrap p-2" id="chip-container-up">
                                                    <input type="text" id="chip-input-up"
                                                        class="form-control border-0 flex-grow-1"
                                                        placeholder="Select City" required>
                                                    <div class="invalid-feedback">
                                                        Please select your preferred cities for business.
                                                    </div>

                                                </div>
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></button>
                                                <ul class="dropdown-menu dropdown-menu-end" id="chip-options-up">
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Lucknow">Lucknow</a></li>
                                                    <li><a class="dropdown-item" href="#" data-value="Kanpur">Kanpur</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Varanasi">Varanasi</a></li>
                                                    <li><a class="dropdown-item" href="#" data-value="Noida">Noida</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>


                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <form class="col-12 d-flex flex-wrap needs-validation" novalidate>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="AccountNumber "
                                        placeholder="" required>
                                    <label for="AccountNumber ">Account Number</label>
                                    <div class="invalid-feedback">
                                        Please enter business account number.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="IFSCCode" placeholder=" "
                                        required>
                                    <label for="IFSCCode">IFSC Code</label>
                                    <div class="invalid-feedback">
                                        Please enter IFSC Code.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="AccountHolderName"
                                        placeholder=" " required>
                                    <label for="AccountHolderName">Account Holder Name</label>
                                    <div class="invalid-feedback">
                                        Please enter account holder name.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="BankName" placeholder=""
                                        required>
                                    <label for="BankName">Bank Name</label>
                                    <div class="invalid-feedback">
                                        Please enter bank name.
                                    </div>
                                </div>


                                <div class="form-floating-label col-12  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" style="padding-bottom: 4.5rem;"
                                        id="BankAddress" placeholder=" " required>
                                    <label for="BankAddress">Bank Address</label>
                                    <div class="invalid-feedback">
                                        Please enter bank address.
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-column my-4 gap-4">
                                    <div>
                                        <div class="top-heading pb-3">
                                            <h4>Add Location Preference for Selling</h4>
                                        </div>
                                        <div>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Select States for Business</h5>
                                        <div class="input-group">
                                            <div class="form-control d-flex flex-wrap p-2" id="chip-container-states">
                                                <input type="text" id="chip-input-states" class="form-control border-0 flex-grow-1"
                                                    placeholder="Select State" required>
                                                <div class="invalid-feedback">
                                                    Please select your preferred states for business.
                                                </div>
                                            </div>
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <ul class="dropdown-menu dropdown-menu-end" id="chip-options-states">
                                                <li><a class="dropdown-item" href="#" data-value="Delhi">Delhi</a></li>
                                                <li><a class="dropdown-item" href="#" data-value="Uttar Pradesh">Uttar
                                                        Pradesh</a></li>
                                                <li><a class="dropdown-item" href="#" data-value="Uttrakhand">Uttrakhand</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" data-value="Bihar">Bihar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-3 select-cities p-3">
                                        <!-- Bihar Cities -->
                                        <div>
                                            <h6>Select Cities for Business in Bihar</h6>
                                            <div class="input-group">
                                                <div class="form-control d-flex flex-wrap p-2" id="chip-container-bihar">
                                                    <input type="text" id="chip-input-bihar" class="form-control border-0 flex-grow-1"
                                                        placeholder="Select City" required>
                                                    <div class="invalid-feedback">
                                                        Please select your preferred cities for business.
                                                    </div>

                                                </div>
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></button>
                                                <ul class="dropdown-menu dropdown-menu-end" id="chip-options-bihar">
                                                    <li><a class="dropdown-item" href="#" data-value="Patna">Patna</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#" data-value="Gaya">Gaya</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Bhagalpur">Bhagalpur</a></li>
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Muzaffarpur">Muzaffarpur</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- UP Cities -->
                                        <div>
                                            <h6>Select Cities for Business in Uttar Pradesh</h6>
                                            <div class="input-group">
                                                <div class="form-control d-flex flex-wrap p-2" id="chip-container-up">
                                                    <input type="text" id="chip-input-up" class="form-control border-0 flex-grow-1"
                                                        placeholder="Select City" required>
                                                    <div class="invalid-feedback">
                                                        Please select your preferred cities for business.
                                                    </div>

                                                </div>
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></button>
                                                <ul class="dropdown-menu dropdown-menu-end" id="chip-options-up">
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Lucknow">Lucknow</a></li>
                                                    <li><a class="dropdown-item" href="#" data-value="Kanpur">Kanpur</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"
                                                            data-value="Varanasi">Varanasi</a></li>
                                                    <li><a class="dropdown-item" href="#" data-value="Noida">Noida</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="d-flex col-md-3 mt-3 mt-md-0 col-12 flex-column ">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        //  const pillsprofiletab = document.getElementById('pill-profile-tab');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault()
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        event.preventDefault()
                        document.getElementById('pills-profile-tab').removeAttribute('disabled');
                        document.getElementById('pills-profile-tab').click();


                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation2')
        //  const pillsprofiletab = document.getElementById('pill-profile-tab');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault()
                    if (!form.checkValidity()) {

                        event.stopPropagation()
                    } else {

                        document.getElementById('Continue2').addEventListener('click', function() {
                            document.getElementById('pills-contact-tab').removeAttribute('disabled');
                            document.getElementById('pills-contact-tab').click();
                        });
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script>
        $(document).ready(function () {
            function setupChipDropdown(dropdownId, containerId, inputId) {
                $(`${dropdownId} .dropdown-item`).click(function (e) {
                    e.preventDefault();
                    let selectedText = $(this).data("value");

                    if ($(containerId).find(`[data-value="${selectedText}"]`).length === 0) {
                        $(containerId).prepend(`
                            <span class="badge bg-primary me-2 p-2 d-flex align-items-center" >
                                ${selectedText}
                                <button type="button" class="btn-close  ms-2" aria-label="Close"></button>
                            </span>
                        `);

                        // Update input field
                        updateInputValue(containerId, inputId);
                    }
                });

                $(containerId).on("click", ".btn-close", function () {
                    $(this).parent().remove();
                    updateInputValue(containerId, inputId);
                });

                function updateInputValue(container, input) {
                    let values = $(container).find('.badge').map(function () {
                        return $(this).data("value");
                    }).get().join(", ");
                    $(input).val(values);
                }
            }
            // Setup for each section
            setupChipDropdown("#chip-options-states", "#chip-container-states", "#chip-input-states");
            setupChipDropdown("#chip-options-bihar", "#chip-container-bihar", "#chip-input-bihar");
            setupChipDropdown("#chip-options-up", "#chip-container-up", "#chip-input-up");
        });
    </script>


<script src="js/main.js"></script>



</body>

</html>