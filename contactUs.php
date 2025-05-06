<?php include 'include/header.php'; ?>

  <!--Breadcumb-->

  <section class="breadcrumb mb-0 breadcrumb-wrapper d-none d-md-flex">
    <div class="container">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-decoration-none" href="#" style="color: #0b0b0b;">Who we are</a></li>
                  <li class="breadcrumb-item active d-block" aria-current="page" style="color: #0068C8;">Help</li>
                </ol>
            </nav>
        </div>
    </div>
  </section>


  <!-- Section -->

  <section>
    <div class="container">
        <h3 class="mt-5">Get in touch</h3>
            <div>
                <div class="intro-extra-line"></div>
            <hr>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <select class="form-select-partner mt-3 px-2">
                        <option selected>Select issue type</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                    </select>

                    <div class="form-floating-label contacts col-12 mt-3">
                        <input type="text" class="form-control" id="name" placeholder="" required>
                        <label for="name">Full Name</label>
                        <div class="invalid-feedback">
                          Please provide the full name.
                        </div>
                    </div>

                    <div class="form-floating-label contacts col-12 mt-3">
                        <input type="email" class="form-control" id="email" placeholder="" required>
                        <label for="email">Email</label>
                        <div class="invalid-feedback">
                          Please provide the email.
                        </div>
                    </div>

                    <div class="form-floating-label contacts col-12 mt-3">
                        <input type="text" class="form-control" id="phonenumber" placeholder="" required>
                        <label for="phonenumber">Phone Number</label>
                        <div class="invalid-feedback">
                          Please provide phone number.
                        </div>
                    </div>

                    <input type="text" class="form-control mt-3" placeholder="Company name (optional)">
                    
                    <textarea class="form-control mt-3" placeholder="Message" rows="5"></textarea>

                    <button type="submit" class="btn btn-primary w-50 mt-3 mb-5">Submit</button>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-5 info">
                    <img src="images/contact-us1.png" class="img-fluid" alt="contact-image">

                    <div class="d-flex mt-3">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>+91 12345 12345</p>
                    </div>

                    <div class="d-flex mt-3">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p>mail2devicedisk@gmail.com</p>
                    </div>

                    <div class="d-flex mt-3">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Malviya Nagar, New Delhi</p>
                    </div>
                </div>

                <div class="col-md-12 my-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14020.648141307789!2d77.1994299470883!3d28.534848962754758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce21e7d306d03%3A0x94b8ccb323d7648!2sMalviya%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110017!5e0!3m2!1sen!2sin!4v1738664932585!5m2!1sen!2sin" style="width: 100%; height: 500px; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </div>
  </section>
  
  
  <!-- Footer -->

  <?php include 'include/footer.php'; ?>
    
  </body>
</html>