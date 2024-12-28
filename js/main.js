
//index page

$(document).ready(function () {
    $('.category-filter').owlCarousel({
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
                items: 3
            }, 
            1000: {
                items: 5
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


