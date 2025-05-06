<div class="product-box col-xl-3 col-lg-4 col-6 py-2">
  <div class="px-2">
    <img src="<?php echo $ProductImage; ?>" alt="cup" class="image-fluid">
    <h6><?php echo $SellerName; ?></h6>
    <h4><?php echo $ProductName; ?></h4>
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
    <h3><?php echo $ProductPrice; ?></h3>
    <div class="d-flex flex-column">
      <a href="#category-item4" class="btn  btn-md btn-primary mb-1" type="button" data-bs-toggle="modal" data-bs-target="#enquiryPopUp">Send Enquiry</a>
      <a href="<?php echo $ProductUrl; ?>" class="btn  btn-md btn-outline-primary mt-1" type="button">Product
        Detail</a>
    </div>
  </div>
</div>


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
            <h6 style=" color: var(--text-color);"><?php echo $SellerName; ?></h6>
            <h4><?php echo $ProductName; ?></h4>
            <h3 style="color: red;"><?php echo $ProductPrice; ?></h3>
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