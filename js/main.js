
//login page





function openPopups() {
    document.getElementById('overlayss').style.display = 'block';
    document.getElementById('popupss').style.display = 'block';
  }

  function closePopupss() {
    document.getElementById('overlayss').style.display = 'none';
    document.getElementById('popupss').style.display = 'none';
  }

  // JS for password toggle
  const togglePassword = document.getElementById('togglePasswordss');
  const passwordInput = document.getElementById('passwordss');

  togglePassword.addEventListener('click', () => {
    const type = passwordInput.type === 'password' ? 'text' : 'password';
    passwordInput.type = type;
    togglePassword.classList.toggle('fa-eye-slash');
  });


  //signup page
    
    function openPopup() {
      document.getElementById('overlay').style.display = 'block';
      document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
      document.getElementById('overlay').style.display = 'none';
      document.getElementById('popup').style.display = 'none';
    }

    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordInput = document.getElementById('password');
      const type = passwordInput.type === 'password' ? 'text' : 'password';
      passwordInput.type = type;
      this.classList.toggle('fa-eye-slash');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
      const confirmPasswordInput = document.getElementById('confirmpassword');
      const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
      confirmPasswordInput.type = type;
      this.classList.toggle('fa-eye-slash');
    });

    document.getElementById('toggleOldPassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('OldPassword');
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        this.classList.toggle('fa-eye-slash');
      });
  
      document.getElementById('toggleNewPassword').addEventListener('click', function () {
        const confirmPasswordInput = document.getElementById('NewPassword');
        const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
        confirmPasswordInput.type = type;
        this.classList.toggle('fa-eye-slash');
      });

      document.getElementById('toggleReenterPassword').addEventListener('click', function () {
        const confirmPasswordInput = document.getElementById('ReenterPassword');
        const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
        confirmPasswordInput.type = type;
        this.classList.toggle('fa-eye-slash');
      });

//index page





















// Get the current date
const date = new Date();

// Format the date as YYYY-MM-DD
const formattedDate = date.toLocaleDateString('en-US');

// Display the formatted date in the HTML element
document.getElementById('currentDate').textContent = formattedDate;


// Get the current date
const dates = new Date();

// Format the date as YYYY-MM-DD
const formattedDates = dates.toLocaleDateString('en-US');

// Display the formatted date in the HTML element
document.getElementById('currentDates').textContent = formattedDates;


//Product Detail Page

function changeimage(image) {
    var mainimage = document.getElementById('product-image');
    var changingimage = document.getElementById(image).getElementsByTagName('img')[0];
    mainimage.src = changingimage.src;
}


//Categoty Page

$(document).ready(function () {
    $('.Category-content-carousel').owlCarousel({
        loop: true,
        // margin: 10,
        //nav: true,
        dots: false,
        //autoplay: true,     
        // autoplayTimeout: 3000, 
        /* responsive: {
           0: {
             items: 6
           },
           600: {
             items: 8
           },
           1000: {
             items:
           }
         }*/
    })
    $('.owl-prev').click(function () {
        $('.owl-carousel').trigger('prev.owl.carousel');
    });

    // Custom navigation for next button
    $('.owl-next').click(function () {
        $('.owl-carousel').trigger('next.owl.carousel');
    });

})



document.getElementById("myButton").addEventListener("click", function () {
    // Change text of the button
    if (this.classList.contains("btn-link")) {
        this.textContent = "Clear All";

        // Change the color of the button
        this.classList.remove("btn-link");
        this.classList.add("btn-custom"); // Adds the green success button class from Bootstrap
    }
    else {
        this.textContent = "Apply Filter";
        this.classList.remove("btn-custom");
        this.classList.add("btn-link");
    }
});




document.getElementById("p-btn").addEventListener("click", function () {
    if (this.classList.contains("prev-next-btn")) {
        this.classList.remove("prev-next-btn");
        this.classList.add("prev-next-clicked-btn");
    }
})
document.getElementById("n-btn").addEventListener("click", function () {
    if (this.classList.contains("prev-next-btn")) {
        this.classList.remove("prev-next-btn");
        this.classList.add("prev-next-clicked-btn");
    }
})

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


