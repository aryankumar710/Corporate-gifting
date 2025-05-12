<?php include 'include/header.php'; ?>

    <!--Breadcumb-->
    <section class="breadcrumb mb-0 breadcrumb-wrapper d-none d-md-flex">
        <div class="container">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="#"
                                style="color: #0b0b0b;">Home</a></li>
                        <li class="breadcrumb-item active d-block" aria-current="page" style="color: #0068C8;">Dashboard
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!--Dashboard-->
    <section class="dashboard wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  ">
                    <ul class="nav nav-pills mb-3  d-flex flex-lg-column flex-row" id="pills-tab" role="tablist">
                        <li class="nav-item py-1 col-6 col-lg-12 " role="presentation">
                            <button class=" nav-link w-100 text-start active " id="pills-dashboard-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-dashboard" type="button" role="tab"
                                aria-controls="pills-dashboard" aria-selected="true"> <svg class="me-2 svg-color"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8333 7.5V2.5H17.5V7.5H10.8333ZM2.5 10.8333V2.5H9.16667V10.8333H2.5ZM10.8333 17.5V9.16667H17.5V17.5H10.8333ZM2.5 17.5V12.5H9.16667V17.5H2.5Z" />
                                </svg>Dashboard</button>
                        </li>
                        <li class="nav-item  py-1 col-6 col-lg-12 " role="presentation">
                            <button class="nav-link w-100 text-start" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false"><svg class="me-2 svg-color" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.66667 5.83333C6.66667 4.94928 7.01786 4.10143 7.64298 3.47631C8.2681 2.85119 9.11594 2.5 10 2.5C10.8841 2.5 11.7319 2.85119 12.357 3.47631C12.9821 4.10143 13.3333 4.94928 13.3333 5.83333C13.3333 6.71739 12.9821 7.56523 12.357 8.19036C11.7319 8.81548 10.8841 9.16667 10 9.16667C9.11594 9.16667 8.2681 8.81548 7.64298 8.19036C7.01786 7.56523 6.66667 6.71739 6.66667 5.83333ZM6.66667 10.8333C5.5616 10.8333 4.50179 11.2723 3.72039 12.0537C2.93899 12.8351 2.5 13.8949 2.5 15C2.5 15.663 2.76339 16.2989 3.23223 16.7678C3.70107 17.2366 4.33696 17.5 5 17.5H15C15.663 17.5 16.2989 17.2366 16.7678 16.7678C17.2366 16.2989 17.5 15.663 17.5 15C17.5 13.8949 17.061 12.8351 16.2796 12.0537C15.4982 11.2723 14.4384 10.8333 13.3333 10.8333H6.66667Z" />
                                </svg>
                                Profile</button>
                        </li>
                        <li class="nav-item  py-1 col-6 col-lg-12" role="presentation">
                            <button class="nav-link w-100 text-start" id="pills-seller-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-seller-profile" type="button" role="tab"
                                aria-controls="pills-seller-profile" aria-selected="false"><svg class="me-2 svg-color"
                                    width="22" height="22" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.0827 17.6663L15.666 14.2497C15.9993 13.4163 15.8327 12.333 15.0827 11.6663C14.3327 10.9163 13.2493 10.7497 12.3327 11.1663L13.916 12.7497L12.7493 13.9163L11.0827 12.2497C10.666 13.1663 10.8327 14.2497 11.5827 15.083C12.3327 15.833 13.3327 15.9997 14.166 15.6663L17.5827 19.083C17.7493 19.2497 17.9993 19.2497 18.0827 19.083L18.916 18.2497C19.166 17.9997 19.166 17.7497 19.0827 17.6663ZM10.8327 16.6663H1.66602V14.9997C1.66602 13.1663 4.66602 11.6663 8.33268 11.6663C8.74935 11.6663 9.16602 11.6663 9.49935 11.7497C9.24935 12.2497 9.16602 12.7497 9.16602 13.333C9.16602 14.6663 9.83268 15.9163 10.8327 16.6663ZM8.33268 3.33301C6.49935 3.33301 4.99935 4.83301 4.99935 6.66634C4.99935 8.49967 6.49935 9.99967 8.33268 9.99967C10.166 9.99967 11.666 8.49967 11.666 6.66634C11.666 4.83301 10.166 3.33301 8.33268 3.33301Z" />
                                </svg>
                                Seller Profile</button>
                        </li>

                        <li class="nav-item  py-1 col-6 col-lg-12" role="presentation">
                            <button class="nav-link w-100 text-start" id="pills-leads-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-leads" type="button" role="tab" aria-controls="pills-leads"
                                aria-selected="false"><svg class="me-2 svg-border-color" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.1875 9.6875H12.8125M7.1875 13.4375H10.3125M7.1875 5.9375H12.8125M3.4375 2.1875H16.5625V17.8125H3.4375V2.1875Z"
                                        stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Leads & enquiry</button>
                        </li>
                        <li class="nav-item  py-1 col-6 col-lg-12" role="presentation">
                            <button class="nav-link w-100 text-start" id="pills-manage-products-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-manage-products" type="button" role="tab"
                                aria-controls="pills-manage-products" aria-selected="false"><svg class="me-2 svg-color"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83268 1.66699H2.49935C2.27834 1.66699 2.06637 1.75479 1.91009 1.91107C1.75381 2.06735 1.66602 2.27931 1.66602 2.50033V17.5003C1.66602 17.7213 1.75381 17.9333 1.91009 18.0896C2.06637 18.2459 2.27834 18.3337 2.49935 18.3337H5.83268C6.0537 18.3337 6.26566 18.2459 6.42194 18.0896C6.57822 17.9333 6.66602 17.7213 6.66602 17.5003V2.50033C6.66602 2.27931 6.57822 2.06735 6.42194 1.91107C6.26566 1.75479 6.0537 1.66699 5.83268 1.66699ZM4.16602 17.5003C3.83638 17.5003 3.51415 17.4026 3.24007 17.2194C2.96598 17.0363 2.75236 16.776 2.62622 16.4715C2.50007 16.1669 2.46706 15.8318 2.53137 15.5085C2.59568 15.1852 2.75442 14.8882 2.9875 14.6551C3.22059 14.4221 3.51756 14.2633 3.84087 14.199C4.16417 14.1347 4.49928 14.1677 4.80382 14.2939C5.10836 14.42 5.36866 14.6336 5.5518 14.9077C5.73493 15.1818 5.83268 15.504 5.83268 15.8337C5.83268 16.2757 5.65709 16.6996 5.34453 17.0122C5.03197 17.3247 4.60804 17.5003 4.16602 17.5003ZM5.83268 10.0003H2.49935V2.50033H5.83268V10.0003ZM4.99935 15.8337C4.99935 15.9985 4.95047 16.1596 4.85891 16.2966C4.76734 16.4337 4.63719 16.5405 4.48492 16.6036C4.33265 16.6666 4.16509 16.6831 4.00344 16.651C3.84179 16.6188 3.6933 16.5395 3.57676 16.4229C3.46022 16.3064 3.38085 16.1579 3.34869 15.9962C3.31654 15.8346 3.33304 15.667 3.39612 15.5148C3.45919 15.3625 3.566 15.2323 3.70304 15.1408C3.84008 15.0492 4.0012 15.0003 4.16602 15.0003C4.38703 15.0003 4.59899 15.0881 4.75527 15.2444C4.91155 15.4007 4.99935 15.6126 4.99935 15.8337ZM11.666 1.66699H8.33268C8.11167 1.66699 7.89971 1.75479 7.74343 1.91107C7.58715 2.06735 7.49935 2.27931 7.49935 2.50033V17.5003C7.49935 17.7213 7.58715 17.9333 7.74343 18.0896C7.89971 18.2459 8.11167 18.3337 8.33268 18.3337H11.666C11.887 18.3337 12.099 18.2459 12.2553 18.0896C12.4116 17.9333 12.4993 17.7213 12.4993 17.5003V2.50033C12.4993 2.27931 12.4116 2.06735 12.2553 1.91107C12.099 1.75479 11.887 1.66699 11.666 1.66699ZM9.99935 17.5003C9.66971 17.5003 9.34748 17.4026 9.0734 17.2194C8.79932 17.0363 8.5857 16.776 8.45955 16.4715C8.3334 16.1669 8.3004 15.8318 8.36471 15.5085C8.42902 15.1852 8.58775 14.8882 8.82084 14.6551C9.05393 14.4221 9.3509 14.2633 9.6742 14.199C9.9975 14.1347 10.3326 14.1677 10.6372 14.2939C10.9417 14.42 11.202 14.6336 11.3851 14.9077C11.5683 15.1818 11.666 15.504 11.666 15.8337C11.666 16.2757 11.4904 16.6996 11.1779 17.0122C10.8653 17.3247 10.4414 17.5003 9.99935 17.5003ZM11.666 10.0003H8.33268V2.50033H11.666V10.0003ZM10.8327 15.8337C10.8327 15.9985 10.7838 16.1596 10.6922 16.2966C10.6007 16.4337 10.4705 16.5405 10.3183 16.6036C10.166 16.6666 9.99842 16.6831 9.83677 16.651C9.67512 16.6188 9.52664 16.5395 9.41009 16.4229C9.29355 16.3064 9.21418 16.1579 9.18203 15.9962C9.14987 15.8346 9.16638 15.667 9.22945 15.5148C9.29252 15.3625 9.39933 15.2323 9.53637 15.1408C9.67341 15.0492 9.83453 15.0003 9.99935 15.0003C10.2204 15.0003 10.4323 15.0881 10.5886 15.2444C10.7449 15.4007 10.8327 15.6126 10.8327 15.8337ZM17.4993 1.66699H14.166C13.945 1.66699 13.733 1.75479 13.5768 1.91107C13.4205 2.06735 13.3327 2.27931 13.3327 2.50033V17.5003C13.3327 17.7213 13.4205 17.9333 13.5768 18.0896C13.733 18.2459 13.945 18.3337 14.166 18.3337H17.4993C17.7204 18.3337 17.9323 18.2459 18.0886 18.0896C18.2449 17.9333 18.3327 17.7213 18.3327 17.5003V2.50033C18.3327 2.27931 18.2449 2.06735 18.0886 1.91107C17.9323 1.75479 17.7204 1.66699 17.4993 1.66699ZM15.8327 17.5003C15.503 17.5003 15.1808 17.4026 14.9067 17.2194C14.6326 17.0363 14.419 16.776 14.2929 16.4715C14.1667 16.1669 14.1337 15.8318 14.198 15.5085C14.2623 15.1852 14.4211 14.8882 14.6542 14.6551C14.8873 14.4221 15.1842 14.2633 15.5075 14.199C15.8308 14.1347 16.1659 14.1677 16.4705 14.2939C16.775 14.42 17.0353 14.6336 17.2185 14.9077C17.4016 15.1818 17.4993 15.504 17.4993 15.8337C17.4993 16.2757 17.3238 16.6996 17.0112 17.0122C16.6986 17.3247 16.2747 17.5003 15.8327 17.5003ZM17.4993 10.0003H14.166V2.50033H17.4993V10.0003ZM16.666 15.8337C16.666 15.9985 16.6171 16.1596 16.5256 16.2966C16.434 16.4337 16.3039 16.5405 16.1516 16.6036C15.9993 16.6666 15.8318 16.6831 15.6701 16.651C15.5085 16.6188 15.36 16.5395 15.2434 16.4229C15.1269 16.3064 15.0475 16.1579 15.0154 15.9962C14.9832 15.8346 14.9997 15.667 15.0628 15.5148C15.1259 15.3625 15.2327 15.2323 15.3697 15.1408C15.5067 15.0492 15.6679 15.0003 15.8327 15.0003C16.0537 15.0003 16.2657 15.0881 16.4219 15.2444C16.5782 15.4007 16.666 15.6126 16.666 15.8337Z" />
                                </svg>

                                Manage Products</button>
                        </li>
                        <li class="nav-item  py-1 col-6 col-lg-12" role="presentation">
                            <button class="nav-link w-100 text-start" id="pills-setting-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-setting" type="button" role="tab" aria-controls="pills-setting"
                                aria-selected="false"><svg class="me-2 svg-color" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.70833 18.3337L7.375 15.667C7.19444 15.5975 7.02444 15.5142 6.865 15.417C6.70556 15.3198 6.54917 15.2156 6.39583 15.1045L3.91667 16.1462L1.625 12.1878L3.77083 10.5628C3.75694 10.4656 3.75 10.372 3.75 10.282V9.71949C3.75 9.62894 3.75694 9.53505 3.77083 9.43783L1.625 7.81283L3.91667 3.85449L6.39583 4.89616C6.54861 4.78505 6.70833 4.68088 6.875 4.58366C7.04167 4.48644 7.20833 4.4031 7.375 4.33366L7.70833 1.66699H12.2917L12.625 4.33366C12.8056 4.4031 12.9758 4.48644 13.1358 4.58366C13.2958 4.68088 13.4519 4.78505 13.6042 4.89616L16.0833 3.85449L18.375 7.81283L16.2292 9.43783C16.2431 9.53505 16.25 9.62894 16.25 9.71949V10.2812C16.25 10.3717 16.2361 10.4656 16.2083 10.5628L18.3542 12.1878L16.0625 16.1462L13.6042 15.1045C13.4514 15.2156 13.2917 15.3198 13.125 15.417C12.9583 15.5142 12.7917 15.5975 12.625 15.667L12.2917 18.3337H7.70833ZM10.0417 12.917C10.8472 12.917 11.5347 12.6323 12.1042 12.0628C12.6736 11.4934 12.9583 10.8059 12.9583 10.0003C12.9583 9.19477 12.6736 8.50727 12.1042 7.93783C11.5347 7.36838 10.8472 7.08366 10.0417 7.08366C9.22222 7.08366 8.53111 7.36838 7.96833 7.93783C7.40556 8.50727 7.12444 9.19477 7.125 10.0003C7.12556 10.8059 7.40694 11.4934 7.96917 12.0628C8.53139 12.6323 9.22222 12.917 10.0417 12.917Z" />
                                </svg>
                                Settings</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content col-lg-9" id="pills-tabContent">

                    <div class="tab-pane fade active show" id="pills-dashboard" role="tabpanel"
                        aria-labelledby="pills-dashboard-tab">
                        <div class="row">
                            <div class="col-md-4 mt-3 mt-md-0">
                                <div class=" p-3 inquiry-box shadow">
                                    <div class="d-flex justify-content-between mb-1">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.00065 29.3337C7.26732 29.3337 6.63976 29.0728 6.11798 28.551C5.59621 28.0292 5.33487 27.4012 5.33398 26.667V5.33366C5.33398 4.60033 5.59532 3.97277 6.11798 3.45099C6.64065 2.92921 7.26821 2.66788 8.00065 2.66699H18.6673L26.6673 10.667V26.667C26.6673 27.4003 26.4064 28.0283 25.8847 28.551C25.3629 29.0737 24.7349 29.3345 24.0007 29.3337H8.00065ZM17.334 12.0003H24.0007L17.334 5.33366V12.0003Z"
                                                fill="#0DC635" />
                                        </svg>
                                        <a href="#pills-leads" class="text-decoration-none ms-2" role="tabpanel" aria-labelledby="pills-leads-tab">Read All</a>
                                    </div>
                                    <div class="d-flex flex-column mt-4">
                                        <h5>Total Inquiries</h5>
                                        <h3>2323</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3 mt-md-0">
                                <div class=" p-3 inquiry-box shadow">
                                    <div class="d-flex justify-content-between mb-1">
                                        <svg width="32" height="32" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.5 7.87505C4.20163 7.87505 3.91548 7.99357 3.7045 8.20455C3.49353 8.41553 3.375 8.70168 3.375 9.00005C3.375 9.29842 3.49353 9.58456 3.7045 9.79554C3.91548 10.0065 4.20163 10.125 4.5 10.125H6.9975L9.9495 21.9375C10.2004 22.9388 11.097 23.625 12.1286 23.625H26.1574C27.1732 23.625 28.0361 22.95 28.3028 21.9713L31.2188 11.25H28.863L26.1562 21.375H12.1275L9.17662 9.56255C9.05473 9.07793 8.77373 8.64824 8.37864 8.34228C7.98354 8.03632 7.4972 7.87179 6.9975 7.87505H4.5ZM24.75 23.625C22.8994 23.625 21.375 25.1494 21.375 27C21.375 28.8507 22.8994 30.375 24.75 30.375C26.6006 30.375 28.125 28.8507 28.125 27C28.125 25.1494 26.6006 23.625 24.75 23.625ZM14.625 23.625C12.7744 23.625 11.25 25.1494 11.25 27C11.25 28.8507 12.7744 30.375 14.625 30.375C16.4756 30.375 18 28.8507 18 27C18 25.1494 16.4756 23.625 14.625 23.625ZM18 7.87505V13.5H14.625L19.125 18L23.625 13.5H20.25V7.87505H18ZM14.625 25.875C15.2595 25.875 15.75 26.3655 15.75 27C15.75 27.6345 15.2595 28.125 14.625 28.125C13.9905 28.125 13.5 27.6345 13.5 27C13.5 26.3655 13.9905 25.875 14.625 25.875ZM24.75 25.875C25.3845 25.875 25.875 26.3655 25.875 27C25.875 27.6345 25.3845 28.125 24.75 28.125C24.1155 28.125 23.625 27.6345 23.625 27C23.625 26.3655 24.1155 25.875 24.75 25.875Z"
                                                fill="#EF981E" />
                                        </svg>

                                        <a href="#" class="text-decoration-none ms-2">Read All</a>
                                    </div>
                                    <div class="d-flex flex-column mt-4">
                                        <h5>Buy Inquiries</h5>
                                        <h3>2323</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3 mt-md-0">
                                <div class=" p-3 inquiry-box shadow">
                                    <div class="d-flex justify-content-between mb-1">
                                        <svg width="32" height="32" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.7491 10.125H29.3571C29.6358 10.1253 29.9045 10.229 30.111 10.416C30.3176 10.6031 30.4475 10.8602 30.4753 11.1375L31.1616 18H28.8981L28.3356 12.375H24.7491V15.75C24.7491 16.0484 24.6306 16.3345 24.4196 16.5455C24.2086 16.7565 23.9224 16.875 23.6241 16.875C23.3257 16.875 23.0396 16.7565 22.8286 16.5455C22.6176 16.3345 22.4991 16.0484 22.4991 15.75V12.375H13.4991V15.75C13.4991 16.0484 13.3806 16.3345 13.1696 16.5455C12.9586 16.7565 12.6724 16.875 12.3741 16.875C12.0757 16.875 11.7896 16.7565 11.5786 16.5455C11.3676 16.3345 11.2491 16.0484 11.2491 15.75V12.375H7.66033L5.86033 30.375H17.9991V32.625H4.61608C4.45895 32.6248 4.30359 32.5918 4.16002 32.5279C4.01645 32.4641 3.88784 32.3708 3.78249 32.2543C3.67714 32.1377 3.59738 32.0003 3.54836 31.851C3.49933 31.7017 3.48211 31.5438 3.49783 31.3875L5.52283 11.1375C5.5507 10.8602 5.68051 10.6031 5.8871 10.416C6.0937 10.229 6.36238 10.1253 6.64108 10.125H11.2491V9.33975C11.2491 5.43825 14.2551 2.25 17.9991 2.25C21.7431 2.25 24.7491 5.43825 24.7491 9.33975V10.1272V10.125ZM22.4991 10.125V9.33975C22.4991 6.65325 20.4696 4.5 17.9991 4.5C15.5286 4.5 13.4991 6.65325 13.4991 9.33975V10.1272H22.4991V10.125ZM29.5798 27.135L26.9991 24.5565V32.625C26.9991 32.9234 26.8806 33.2095 26.6696 33.4205C26.4586 33.6315 26.1724 33.75 25.8741 33.75C25.5757 33.75 25.2896 33.6315 25.0786 33.4205C24.8676 33.2095 24.7491 32.9234 24.7491 32.625V24.5565L22.1706 27.135C22.0668 27.2424 21.9427 27.3282 21.8054 27.3871C21.6682 27.4461 21.5205 27.4771 21.3712 27.4784C21.2218 27.4797 21.0736 27.4512 20.9354 27.3947C20.7971 27.3381 20.6715 27.2546 20.5659 27.1489C20.4603 27.0433 20.3767 26.9177 20.3202 26.7794C20.2636 26.6412 20.2351 26.4931 20.2364 26.3437C20.2377 26.1943 20.2688 26.0467 20.3277 25.9094C20.3867 25.7722 20.4724 25.648 20.5798 25.5442L25.0798 21.0442C25.2908 20.8333 25.5769 20.7149 25.8752 20.7149C26.1735 20.7149 26.4596 20.8333 26.6706 21.0442L31.1706 25.5442C31.278 25.648 31.3637 25.7722 31.4227 25.9094C31.4817 26.0467 31.5127 26.1943 31.514 26.3437C31.5153 26.4931 31.4868 26.6412 31.4303 26.7794C31.3737 26.9177 31.2901 27.0433 31.1845 27.1489C31.0789 27.2546 30.9533 27.3381 30.815 27.3947C30.6768 27.4512 30.5286 27.4797 30.3792 27.4784C30.2299 27.4771 30.0822 27.4461 29.945 27.3871C29.8077 27.3282 29.6836 27.2424 29.5798 27.135Z"
                                                fill="red" />
                                        </svg>

                                        <a href="#" class="text-decoration-none ms-2">Read All</a>
                                    </div>
                                    <div class="d-flex flex-column mt-4">
                                        <h5>Sell Inquiries</h5>
                                        <h3>2323</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-7 d-flex flex-column">
                                <div>
                                    <div class="p-3 inquiry-box shadow">
                                        <div class="top-heading pb-3">
                                            <h4>Analysis</h4>
                                        </div>
                                        <div>
                                            <hr class="mt-0">
                                        </div>
                                        <div class="mt-4">
                                            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                        </div>
                                        <div class="d-flex gap-4 mt-4 ms-4">
                                            <div class="d-flex align-items-center graph-box1">
                                                <div></div>
                                                <p class="ms-2">Total Inquiries</p>
                                            </div>
                                            <div class="d-flex align-items-center graph-box2">
                                                <div></div>
                                                <p class="ms-2">Sell Inquiries</p>
                                            </div>
                                            <div class="d-flex align-items-center graph-box3">
                                                <div></div>
                                                <p class="ms-2">Buy Inquiries</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="p-3 inquiry-box shadow">
                                        <div class="top-heading pb-3">
                                            <h4>Product Status</h4>
                                        </div>
                                        <div>
                                            <hr class="mt-0">
                                        </div>
                                        <div class="row">
                                            <div class="mt-4">
                                                <canvas id="myChart2" style="width:100%; max-width:600px"></canvas>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center mt-4">
                                                <div>
                                                    <button class="btn btn-sm btn-primary me-2">Add Product</button>
                                                    <button class="btn btn-sm btn-outline-primary">See Leads</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0 " style="height: auto;">
                                <div class="p-3 shadow inquiry-box " style="height: 100%;">
                                    <div class="top-heading pb-3">
                                        <h4>My Products</h4>
                                    </div>
                                    <div>
                                        <hr class="mt-0">
                                    </div>
                                    <div class="row ">
                                        <div class="tab-content " id="pills-tabContent">
                                            <div class="tab-pane fade show active " id="pills-p1" role="tabpanel"
                                                aria-labelledby="pills-p1-tab">
                                                <div class="d-flex flex-column gap-4 py-3">
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img1.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2  ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img2.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img3.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img4.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img5.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img6.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-p2" role="tabpanel"
                                                aria-labelledby="pills-p2-tab">
                                                <div class="d-flex flex-column gap-4 py-3">
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img8.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="pills-p3" role="tabpanel"
                                                aria-labelledby="pills-p3-tab">
                                                <div class="d-flex flex-column gap-4 py-3">
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img4.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="pills-p4" role="tabpanel"
                                                aria-labelledby="pills-p4-tab">
                                                <div class="d-flex flex-column gap-4 py-3">
                                                    <div class="dasboard-product-list d-flex">
                                                        <div class="col-3">
                                                            <img src="images/Product-img6.jpeg" alt="product-image">
                                                        </div>
                                                        <div class="col-9 ps-2 ">
                                                            <h4>Product Name</h4>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <h5>4.9</h5>
                                                                <svg class="rating-homepage" width="18" height="16"
                                                                    viewBox="0 0 26 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                                        fill="#0b0b0b" />
                                                                </svg>
                                                                <h6>(1223)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row product-tab ">
                                            <ul class="nav nav-pills d-flex justify-content-center "
                                                id="pills-tab-product" role="tablist">
                                                <li class="nav-item  " role="presentation">
                                                    <button class=" nav-link active " id="pills-p1-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-p1" type="button"
                                                        role="tab" aria-controls="pills-p1"
                                                        aria-selected="true">1</button>
                                                </li>
                                                <li class="nav-item  " role="presentation">
                                                    <button class=" nav-link  " id="pills-p2-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-p2" type="button" role="tab"
                                                        aria-controls="pills-p2" aria-selected="false">2</button>
                                                </li>
                                                <li class="nav-item  " role="presentation">
                                                    <button class=" nav-link  " id="pills-p3-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-p3" type="button" role="tab"
                                                        aria-controls="pills-p3" aria-selected="false">3</button>
                                                </li>
                                                <li class="nav-item  " role="presentation">
                                                    <button class=" nav-link " id="pills-p4-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-p4" type="button" role="tab"
                                                        aria-controls="pills-p4" aria-selected="false">4</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div>
                                <div
                                    class="inquiry-box shadow col-12 flex-wrap d-flex px-3 justify-content-center py-5">
                                    <div class="col-lg-5 mb-4 mb-lg-0">
                                        <h4>Tell Us What You Need !</h4>
                                    </div>
                                    <div class="col-lg-7 justify-content-end gap-2 d-flex">
                                        <button class="btn btn-primary ">Post Buy Requirement</button>
                                        <button class="btn btn-outline-primary ">Buy Leads</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="row gap-4">
                            <div class="d-flex">
                                <div class="me-3">
                                    <img src="images/Profile1.png" alt=""
                                        style="width:3.5rem; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;">
                                </div>
                                <div>
                                    <h4>Aryan Kumar</h4>
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

                            <div>
                                <div class="top-heading pb-3 ">
                                    <h4>Profile Details</h4>
                                </div>
                                <div>
                                    <hr class="mt-0">
                                </div>
                            </div>

                            <form class="col-12 d-flex flex-wrap needs-validation4 " novalidate>
                                <div class="form-floating-label col-12   px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="FullName" placeholder=""
                                        required>
                                    <label for="FullName">Full Name</label>
                                    <div class="invalid-feedback">
                                        Please enter full name.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="email" placeholder=" " required>
                                    <label for="email">Email*</label>
                                    <div class="invalid-feedback">
                                        Please enter your email.
                                    </div>
                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="alternateemail" placeholder="">
                                    <label for="alternateemail">Alternative Email</label>

                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control col-12" id="phonenumber" placeholder=" ">
                                    <label for="phonenumber">Phone number</label>

                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="alternatephonenumber"
                                        placeholder="">
                                    <label for="alternatephonenumber">Alternate phone number</label>

                                </div>
                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control col-12" id="whatsappnumber" placeholder=" ">
                                    <label for="whatsappnumber">Whatsapp number</label>

                                </div>

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="designationjob" placeholder="">
                                    <label for="designationjob">Designation/Job</label>

                                </div>

                                <div class="form-floating-label col-12  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" style="padding-bottom: 4.5rem;"
                                        id="Address" placeholder=" ">
                                    <label for="Address">Address</label>

                                </div>
                                <div class="col-12 col-md-6 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center">
                                        <option selected disabled value="">Select Country</option>
                                        <option>...</option>
                                    </select>

                                </div>
                                <div class="col-12 col-md-6 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center">
                                        <option selected disabled value="">Select State</option>
                                        <option>...</option>
                                    </select>

                                </div>
                                <div class="col-12 col-md-6 px-2 mb-4">
                                    <select id="inputState" class="form-select d-flex align-items-center">
                                        <option selected disabled value="">Select City</option>
                                        <option>...</option>
                                    </select>

                                </div>
                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="Pincode" placeholder=" ">
                                    <label for="Pincode">Pincode</label>

                                </div>
                                <div class="col-12 d-flex justify-content-end mb-4">
                                    <a href="" style="color: var(--black-color);">Change Password</a>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="d-flex col-md-3 mt-3 mt-md-0 col-12 flex-column ">
                                        <button class="btn btn-primary" id="Continue2" type="submit">Save
                                            Details</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="tab-pane fade " id="pills-seller-profile" role="tabpanel"
                        aria-labelledby="pills-seller-profile-tab">
                        <div class="row gap-4">
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

                            <div>
                                <div class="top-heading pb-3 ">
                                    <h4>Company & Bank Detail</h4>
                                </div>
                                <div>
                                    <hr class="mt-0">
                                </div>
                            </div>

                            <form class="col-12 d-flex flex-wrap needs-validation3" novalidate>
                                <div class="form-floating-label col-12   px-2 mb-4">
                                    <input type="text" class="form-control col-12" id="CompanyName " placeholder=""
                                        required>
                                    <label for="CompanyName ">Company Name</label>
                                    <div class="invalid-feedback">
                                        Please enter company name.
                                    </div>
                                </div>
                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="Businessemail" placeholder=" "
                                        required>
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
                                    <input type="text" class="form-control col-12" id="Numberofemployee" placeholder=" "
                                        required>
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

                                <div class="form-floating-label col-12 col-md-6  px-2  mb-4">
                                    <input type="text" class="form-control  col-12" id="AccountNumber " placeholder=""
                                        required>
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
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="d-flex col-md-3 mt-3 mt-md-0 col-12 flex-column ">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="pills-leads" role="tabpanel" aria-labelledby="pills-leads-tab">
                        <div class="row" style=" overflow-y: hidden;">
                            <div class="col-md-6">
                                <div class="inquiry-box shadow p-3">
                                    <div class="lead-tab " style=" overflow-x: auto; scrollbar-width: thin;">
                                        <ul class="nav nav-pills d-flex flex-nowrap gap-2" id="pills-tab-lead"
                                            role="tablist">
                                            <li class="nav-item  active" role="presentation">
                                                <button class=" nav-link btn-sm active " id="pills-all-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-all" type="button"
                                                    role="tab" aria-controls="pills-all"
                                                    aria-selected="true">All</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class=" nav-link btn-sm  " id="pills-read-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-read" type="button"
                                                    role="tab" aria-controls="pills-read"
                                                    aria-selected="false">Read</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class=" nav-link btn-sm  " id="pills-unread-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-unread" type="button"
                                                    role="tab" aria-controls="pills-unread"
                                                    aria-selected="false">Unread</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class=" nav-link btn-sm " id="pills-sell-lead-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-sell-lead"
                                                    type="button" role="tab" aria-controls="pills-sell-lead"
                                                    aria-selected="false" style="white-space: nowrap">Sell
                                                    Leads</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class=" nav-link btn-sm " id="pills-buy-lead-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-buy-lead" type="button"
                                                    role="tab" aria-controls="pills-buy-lead" aria-selected="false"
                                                    style="white-space: nowrap">Buy Leads</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content mt-3 " id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="pills-all" role="tabpanel"
                                            aria-labelledby="pills-all-tab"
                                            style="max-height: 37.5rem; overflow-y: auto; overflow-x: hidden; scrollbar-width:thin;">
                                            <div class="row ">
                                                <ul class="nav nav-pills gap-3 ps-2" id="pills-tab-lead-detail"
                                                    role="tablist">

                                                    <li class="nav-item" role="presentation">
                                                        <div class=" d-flex" id="pills-all1-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all1" type="button" role="tab"
                                                            aria-controls="pills-all1" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all2-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all2" type="button" role="tab"
                                                            aria-controls="pills-all2" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all3-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all3" type="button" role="tab"
                                                            aria-controls="pills-all3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6>Aryan Kumar</h6>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all4-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all4" type="button" role="tab"
                                                            aria-controls="pills-all3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all5-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all5" type="button" role="tab"
                                                            aria-controls="pills-all5" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all6-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all6" type="button" role="tab"
                                                            aria-controls="pills-all6" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-read" role="tabpanel"
                                            aria-labelledby="pills-read-tab"
                                            style="max-height: 37.5rem; overflow-y: auto; overflow-x: hidden; scrollbar-width:thin;">
                                            <div class="row ">
                                                <ul class="nav nav-pills gap-3 ps-2" id="pills-tab-lead-detail"
                                                    role="tablist">

                                                    <li class="nav-item" role="presentation">
                                                        <div class=" d-flex" id="pills-read1-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-read1" type="button" role="tab"
                                                            aria-controls="pills-read1" aria-selected="true">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-read2-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-read2" type="button" role="tab"
                                                            aria-controls="pills-read2" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-read3-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-read3" type="button" role="tab"
                                                            aria-controls="pills-read3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6>Aryan Kumar</h6>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-read4-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-read4" type="button" role="tab"
                                                            aria-controls="pills-read3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-read5-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-read5" type="button" role="tab"
                                                            aria-controls="pills-read5" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-read6-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-read6" type="button" role="tab"
                                                            aria-controls="pills-read6" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-unread" role="tabpanel"
                                            aria-labelledby="pills-unread-tab"
                                            style="max-height: 37.5rem; overflow-y: auto; overflow-x: hidden; scrollbar-width:thin;">
                                            <div class="row ">
                                                <ul class="nav nav-pills gap-3 ps-2" id="pills-tab-lead-detail"
                                                    role="tablist">

                                                    <li class="nav-item" role="presentation">
                                                        <div class=" d-flex" id="pills-unread1-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-unread1"
                                                            type="button" role="tab" aria-controls="pills-unread1"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-unread2-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-unread2" type="button" role="tab"
                                                            aria-controls="pills-unread2" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-unread3-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-unread3" type="button" role="tab"
                                                            aria-controls="pills-unread3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6>Aryan Kumar</h6>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-unread4-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-unread4" type="button" role="tab"
                                                            aria-controls="pills-unread3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-unread5-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-unread5" type="button" role="tab"
                                                            aria-controls="pills-unread5" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all6-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all6" type="button" role="tab"
                                                            aria-controls="pills-all6" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-sell-lead" role="tabpanel"
                                            aria-labelledby="pills-sell-lead-tab"
                                            style="max-height: 37.5rem; overflow-y: auto; overflow-x: hidden; scrollbar-width:thin;">
                                            <div class="row ">
                                                <ul class="nav nav-pills gap-3 ps-2" id="pills-tab-lead-detail"
                                                    role="tablist">

                                                    <li class="nav-item" role="presentation">
                                                        <div class=" d-flex" id="pills-all1-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all1" type="button" role="tab"
                                                            aria-controls="pills-all1" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all2-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all2" type="button" role="tab"
                                                            aria-controls="pills-all2" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all3-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all3" type="button" role="tab"
                                                            aria-controls="pills-all3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6>Aryan Kumar</h6>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all4-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all4" type="button" role="tab"
                                                            aria-controls="pills-all3" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all5-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all5" type="button" role="tab"
                                                            aria-controls="pills-all5" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-all6-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-all6" type="button" role="tab"
                                                            aria-controls="pills-all6" aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-buy-lead" role="tabpanel"
                                            aria-labelledby="pills-buy-lead-tab"
                                            style="max-height: 37.5rem; overflow-y: auto; overflow-x: hidden; scrollbar-width:thin;">
                                            <div class="row ">
                                                <ul class="nav nav-pills gap-3 ps-2" id="pills-tab-lead-detail"
                                                    role="tablist">

                                                    <li class="nav-item" role="presentation">
                                                        <div class=" d-flex" id="pills-buy-lead1-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-buy-lead1"
                                                            type="button" role="tab" aria-controls="pills-buy-lead1"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-buy-lead2-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-buy-lead2"
                                                            type="button" role="tab" aria-controls="pills-buy-lead2"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-buy-lead3-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-buy-lead3"
                                                            type="button" role="tab" aria-controls="pills-buy-lead3"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6>Aryan Kumar</h6>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-buy-lead4-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-buy-lead4"
                                                            type="button" role="tab" aria-controls="pills-buy-lead3"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-buy-lead5-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-buy-lead5"
                                                            type="button" role="tab" aria-controls="pills-buy-lead5"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile1.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <div class="d-flex" id="pills-buy-lead6-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-buy-lead6"
                                                            type="button" role="tab" aria-controls="pills-buy-lead6"
                                                            aria-selected="false">
                                                            <div class="col-3">
                                                                <img src="images/Profile2.png" alt="product-image"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                                            </div>
                                                            <div class="col-9 d-flex flex-column ps-2">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5>Aryan Kumar</h5>
                                                                    <p>00:00 AM</p>
                                                                </div>
                                                                <p class="truncate-2 text-truncate mt-2">Thank you for
                                                                    being
                                                                    a
                                                                    loyal customer and for your ongoing support, which
                                                                    means
                                                                    the
                                                                    world to us. Your dedication to our product/service
                                                                    is
                                                                    truly
                                                                    valued and motivates us to keep improving and
                                                                    providing
                                                                    you
                                                                    with the best experience possible.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inquiry-box shadow p-3" style="height: 44rem;  overflow-y: auto;">
                                    <div class="tab-content  " id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="pills-all1" role="tabpanel"
                                            aria-labelledby="pills-all1-tab">
                                            <div class="row ">
                                                <div class="d-flex">
                                                    <div class="col-6">
                                                        <img src="images/Product-img2.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-all2" role="tabpanel"
                                            aria-labelledby="pills-all2-tab">
                                            <div class="row ">
                                                <div class="d-flex ">
                                                    <div class="col-6">
                                                        <img src="images/Product-img3.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-all3" role="tabpanel"
                                            aria-labelledby="pills-all3-tab">
                                            <div class="row ">
                                                <div class="d-flex ">
                                                    <div class="col-6">
                                                        <img src="images/Product-img5.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-all4" role="tabpanel"
                                            aria-labelledby="pills-all4-tab">
                                            <div class="row ">
                                                <div class="d-flex ">
                                                    <div class="col-6">
                                                        <img src="images/Product-img6.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-all5" role="tabpanel"
                                            aria-labelledby="pills-all5-tab">
                                            <div class="row ">
                                                <div class="d-flex ">
                                                    <div class="col-6">
                                                        <img src="images/Product-img7.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="pills-all6" role="tabpanel"
                                            aria-labelledby="pills-all6-tab">
                                            <div class="row ">
                                                <div class="d-flex ">
                                                    <div class="col-6">
                                                        <img src="images/Product-img8.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="pills-read1" role="tabpanel"
                                            aria-labelledby="pills-read1-tab">
                                            <div class="row ">
                                                <div class="d-flex ">
                                                    <div class="col-6">
                                                        <img src="images/Product-img8.jpeg" alt=""
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" />
                                                    </div>
                                                    <div class="col-6  gap-3 ">
                                                        <h4 class="text-end">Product Name</h4>
                                                        <p class="text-end">Quantity: <span>3 pieces</span></p>
                                                        <p class="text-end">Total price: <span>10000 INR</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3 ">
                                                    <p>Lorem ipsum dolor sit amet consectetur. Vitae consectetur felis
                                                        vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor. Lorem ipsum dolor sit amet consectetur. Vitae
                                                        consectetur felis vulputate nibh.
                                                        Enim sed posuere rhoncus donec sed. Vitae integer dignissim urna
                                                        in feugiat sodales mauris ut felis. Viverra penatibus tristique
                                                        semper vel senectus ullamcorper vivamus. Lectus proin ante at
                                                        enim posuere tortor. Enim quisque turpis duis eu nisl praesent.
                                                        Volutpat eu nunc malesuada metus purus.
                                                        Id euismod in massa pellentesque etiam a gravida faucibus
                                                        porttitor.</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3 py-2 message-detail"
                                                    style="background-color: var(--tertiary-color);">
                                                    <h6 style="width: fit-content;">Aryan Kumar</h6>
                                                    <h6 style="width: fit-content;">aryankumar79101117@gmail.com</h6>
                                                    <h6 style="width: fit-content;">+91 8299314643</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="pills-manage-products" role="tabpanel"
                        areia-labelledby="pills-manage-products-tab">
                        <div class="row addproduct d-block">
                            <form class="col-12 d-flex flex-wrap needs-validation2" novalidate>
                                <div class="col-12 mb-4">
                                    <div class="top-heading pb-3">
                                        <h4>Add New Product</h4>
                                    </div>
                                    <div>
                                        <hr class="mt-0">
                                    </div>
                                </div>
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
                                    <input type="text" class="form-control col-12" id="Priceinrupees" placeholder=" "
                                        required>
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
                                        <button class="btn btn-primary" type="submit" id="Continue1">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <div class="col-12 mt-5 d-flex flex-column gap-3 p-3 inquiry-box shadow">
                                <div>
                                    <div class="top-heading pb-3">
                                        <h4>My Products</h4>
                                    </div>
                                    <div>
                                        <hr class="mt-0">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="dasboard-product-list d-flex">
                                        <div class="col-2">
                                            <img src="images/Product-img1.jpeg" alt="product-image">
                                        </div>
                                        <div class="col-9 ps-2  ">
                                            <h4>Product Name</h4>
                                            <div class="d-flex gap-2 align-items-center">
                                                <h5>4.9</h5>
                                                <svg class="rating-homepage" width="18" height="16" viewBox="0 0 26 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                        fill="#0b0b0b" />
                                                </svg>
                                                <h6>(1223)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <button class="btn btn-link text-decoration-none edit">Edit</button>
                                        <button class="btn btn-link text-decoration-none delete">Delete</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="dasboard-product-list d-flex">
                                        <div class="col-2">
                                            <img src="images/Product-img2.jpeg" alt="product-image">
                                        </div>
                                        <div class="col-9 ps-2  ">
                                            <h4>Product Name</h4>
                                            <div class="d-flex gap-2 align-items-center">
                                                <h5>4.9</h5>
                                                <svg class="rating-homepage" width="18" height="16" viewBox="0 0 26 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                        fill="#0b0b0b" />
                                                </svg>
                                                <h6>(1223)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <button class="btn btn-link text-decoration-none edit">Edit</button>
                                        <button class="btn btn-link text-decoration-none delete">Delete</button>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-between">
                                    <div class="dasboard-product-list d-flex">
                                        <div class="col-2">
                                            <img src="images/Product-img4.jpeg" alt="product-image">
                                        </div>
                                        <div class="col-9 ps-2  ">
                                            <h4>Product Name</h4>
                                            <div class="d-flex gap-2 align-items-center">
                                                <h5>4.9</h5>
                                                <svg class="rating-homepage" width="18" height="16" viewBox="0 0 26 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                        fill="#0b0b0b" />
                                                </svg>
                                                <h6>(1223)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <button class="btn btn-link text-decoration-none edit">Edit</button>
                                        <button class="btn btn-link text-decoration-none delete">Delete</button>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-between">
                                    <div class="dasboard-product-list d-flex">
                                        <div class="col-2">
                                            <img src="images/Product-img1.jpeg" alt="product-image">
                                        </div>
                                        <div class="col-9 ps-2  ">
                                            <h4>Product Name</h4>
                                            <div class="d-flex gap-2 align-items-center">
                                                <h5>4.9</h5>
                                                <svg class="rating-homepage" width="18" height="16" viewBox="0 0 26 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.805 23.3058L6.87167 15.002L0 9.41926L9.05167 8.68469L12.5967 0.852905L16.1417 8.68313L25.1917 9.4177L18.32 15.0004L20.3883 23.3042L12.5967 18.8968L4.805 23.3058Z"
                                                        fill="#0b0b0b" />
                                                </svg>
                                                <h6>(1223)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <button class="btn btn-link text-decoration-none edit">Edit</button>
                                        <button class="btn btn-link text-decoration-none delete">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row editproduct d-none">
                            <form class="col-12 d-flex flex-wrap needs-validation2" novalidate>
                                <div class="col-12 mb-4">
                                    <div class="top-heading pb-3">
                                        <h4>Edit Product</h4>
                                    </div>
                                    <div>
                                        <hr class="mt-0">
                                    </div>
                                </div>
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
                                    <input type="text" class="form-control col-12" id="Priceinrupees" placeholder=" "
                                        required>
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
                                        <button class="btn btn-primary" type="submit" id="Continue1">Submit</button>
                                    </div>
                                </div>
                            </form>

    
                        </div>

                    </div>
                    <div class="tab-pane" id="pills-setting" role="tabpanel" areia-labelledby="pills-setting-tab">
                        <div class="row">
                            <div class="col-md-6 inquiry-box shadow p-3 d-flex flex-column gap-4">
                                <div>
                                    <div class="top-heading pb-3">
                                        <h4>Update Your Location Preference for Selling</h4>
                                    </div>
                                    <div>
                                        <hr class="mt-0">
                                    </div>
                                </div>
                                <div>
                                    <h5>Select States for Business</h5>
                                    <div class="input-group">
                                        <div class="form-control d-flex flex-wrap p-2" id="chip-container-states">
                                            <input type="text" id="chip-input-states" class="border-0 flex-grow-1"
                                                placeholder="Select State" readonly>
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
                                                <input type="text" id="chip-input-bihar" class="border-0 flex-grow-1"
                                                    placeholder="Select City" readonly>

                                            </div>
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
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
                                                <input type="text" id="chip-input-up" class="border-0 flex-grow-1"
                                                    placeholder="Select City" readonly>

                                            </div>
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"></button>
                                            <ul class="dropdown-menu dropdown-menu-end" id="chip-options-up">
                                                <li><a class="dropdown-item" href="#" data-value="Lucknow">Lucknow</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" data-value="Kanpur">Kanpur</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" data-value="Varanasi">Varanasi</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" data-value="Noida">Noida</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary col-12" id="LocationButton" type="submit">Save
                                    Location</button>
                            </div>

                            <div class="col-md-6 inquiry-box shadow p-3 d-flex flex-column mb-4">
                                <div>
                                    <div class="top-heading pb-3">
                                        <h4>Update Password</h4>
                                    </div>
                                    <div>
                                        <hr class="mt-0">
                                    </div>
                                </div>
                                <form class="col-12 d-flex flex-wrap " novalidate>
                                    <div class="input-container col-12">
                                        <input type="password" id="OldPassword" placeholder="Old Password" required>

                                    </div>
                                    <div class="input-container col-12">
                                        <input type="password" id="NewPassword" placeholder="Confirm Password" required>

                                    </div>
                                    <div class="input-container col-12">
                                        <input type="password" id="ReenterPassword" placeholder="Confirm Password"
                                            required>

                                    </div>
                                    <button class="btn btn-primary col-12" id="UpdatePasswordButton" type="submit">Save
                                        Password</button>
                                </form>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>



    <script src="js/main.js"></script>


    <script>
        const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [0, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    lineTension: 0,
                    borderColor: "red",
                    fill: false
                }, {
                    data: [0, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    lineTension: 0,
                    borderColor: "green",
                    fill: false
                }, {
                    data: [0, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    lineTension: 0,
                    borderColor: "orange",
                    fill: false
                }]
            },
            options: {
                legend: { display: false },
                scales: {
                    yAxes: [{
                        gridLines: { display: false } // Remove Y-axis grid lines
                    }],
                    xAxes: [{
                        gridLines: { display: false } // Remove X-axis grid lines
                    }]
                }
            }
        });



        Chart.plugins.register({
            beforeDraw: function (chart) {
                if (chart.config.options.elements && chart.config.options.elements.center) {
                    var centerConfig = chart.config.options.elements.center;
                    var ctx = chart.chart.ctx;
                    var txt = centerConfig.text;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var color = centerConfig.color || '#000';
                    var sidePadding = centerConfig.sidePadding || 20;
                    // Calculate padding in pixels
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2);
                    ctx.font = "30px " + fontStyle;
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var fontSizeToUse = Math.min(newFontSize, chart.innerRadius * 2, centerConfig.maxFontSize || 75);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = (chart.chartArea.left + chart.chartArea.right) / 2;
                    var centerY = (chart.chartArea.top + chart.chartArea.bottom) / 2;
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;
                    ctx.fillText(txt, centerX, centerY);
                }
            }
        });

    </script>


    <script>
        var xValue = ["Live", "Pending", "Draft"];
        var yValues = [55, 49, 44];
        var barColors = [
            "green",
            "orange",
            "red",

        ];

        new Chart("myChart2", {
            type: "doughnut",
            data: {
                labels: xValue,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                cutoutPercentage: 75,
                elements: {
                    center: {
                        text: "Total 158",
                        color: "#000",
                        fontStyle: "Catamaran",
                        sidePadding: 20,
                        maxFontSize: 25
                    }
                },
                legend: {
                    display: true
                }
            }
        });

    </script>

    <script>
        (function () {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation3')
            //  const pillsprofiletab = document.getElementById('pill-profile-tab');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        event.preventDefault()
                        if (!form.checkValidity()) {
                            event.stopPropagation()

                        }
                        form.classList.add('was-validated')

                    }, false)
                })
        })();

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

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation4')
            //  const pillsprofiletab = document.getElementById('pill-profile-tab');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        event.preventDefault()
                        if (!form.checkValidity()) {

                            event.stopPropagation()
                            form.classList.add('was-validated')
                        }


                    }, false)
                })
        })();
    </script>

    <script>
     document.addEventListener('DOMContentLoaded', function () {
        const editButton  = document.querySelector('.edit');
        const editproduct = document.querySelector('.editproduct');
        const addproduct = document.querySelector('.addproduct');
        editButton.addEventListener('click', function () {
            addproduct.classList.remove("d-block")
            addproduct.classList.add("d-none")
        editproduct.classList.remove("d-none")
        editproduct.classList.add("d-block")
        })
      });
    </script>
</body>

</html>