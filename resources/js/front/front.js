import './bootstrap';



$(function () {

    // ** 1. Navbar Scroll Effect using jQuery **
    // Function to handle the scroll event
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            // Add the 'scrolled' class to the navbar after scrolling 50px
            $('#main-nav').addClass('scrolled');
        } else {
            // Remove the 'scrolled' class when scrolled back to the top
            $('#main-nav').removeClass('scrolled');
        }
    });

    // Run on load in case the page is loaded below the scroll threshold
    if ($(window).scrollTop() > 50) {
        $('#main-nav').addClass('scrolled');
    }
});

$(function () {
    // right side contact fab button initial icon setup
    let $fabContainer = $('.contact-fab-container');
    let $fabMain = $('#fab-main');
    let $fabActions = $('#fab-actions');

    // Use an icon you want to be the default state (e.g., chat icon)
    let defaultIconClass = 'fas fa-comment-dots';
    // Use an icon for the 'close' state (e.g., times/close icon)
    let closeIconClass = 'fas fa-times';


    $fabMain.html(`<i class="${defaultIconClass}"></i>`);

    // Attach click event handler (jQuery's .on('click', ...))
    $fabMain.on('click', function () {
        // Toggle the 'open' class on the container and actions list (jQuery's .toggleClass())
        let isOpen = $fabContainer.toggleClass('open').hasClass('open');
        $fabActions.toggleClass('open');

        // Get the icon element inside the main button
        let $iconElement = $fabMain.find('i');

        if (isOpen) {
            // If opening, change to the close icon (jQuery's .removeClass() and .addClass())
            $iconElement.removeClass(defaultIconClass);
            $iconElement.addClass(closeIconClass);

            // Apply inline styles (jQuery's .css())
            $fabMain.css({
                'background-color': '#00004F', // Maintain purple
                'transform': 'none'            // No rotation needed for 'X' icon
            });
        } else {
            // If closing, change back to the default icon
            $iconElement.removeClass(closeIconClass);
            $iconElement.addClass(defaultIconClass);

            // Reset styles
            $fabMain.css({
                'transform': 'none'
            });
        }
    });
});

// The Counter Logic
// Function to format numbers with commas (e.g., 5000 -> 5,000)
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

const counter = (element, target) => {
    let current = 0;
    const duration = 2000; // Animation duration in milliseconds (2 seconds)
    const increment = target / (duration / 10); // Calculate step size

    const timer = setInterval(() => {
        current += increment;

        if (current >= target) {
            // Stop the counter and set the final target value
            clearInterval(timer);
            element.innerText = formatNumber(target) + ' + ';
        } else {
            // Update the visible number
            element.innerText = formatNumber(Math.ceil(current));
        }
    }, 10); // Update every 10 milliseconds
};

// Get all elements with the 'counter-number' class
const counters = document.querySelectorAll('.counter-number');
let hasCounted = false; // Flag to ensure the animation only runs once

// Create a new Intersection Observer
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // Check if the target element is visible and the counter hasn't run yet
        if (entry.isIntersecting && !hasCounted) {
            counters.forEach(counterElement => {
                const target = parseInt(counterElement.dataset.target);
                // Start the counting animation
                counter(counterElement, target);
            });
            hasCounted = true; // Set flag to true so it won't run again
            observer.unobserve(entry.target); // Stop observing after counting
        }
    });
}, {
    threshold: 0.5 // Start the animation when 50% of the section is visible
});

// Start observing the section that contains the counters
// (Assuming the parent section is what you want to observe)
const sectionToObserve = document.querySelector('.ameera-holidays-section');
if (sectionToObserve) {
    observer.observe(sectionToObserve);
}

//contact  booking form ajax submission
$(function () {
    // 1. Intercept the form submission
    $('#bookingForm').on('submit', function (e) {
        e.preventDefault(); // Stop the default form submission (page reload)

        var form = $(this);
        var button = $('#sendButton');
        var messageArea = $('#responseMessage');
        let bookingUrl = button.data('url');
        // Clear previous messages
        messageArea.html('');

        // 2. Client-side validation check
        // Note: We rely on Laravel's validation for detailed errors, but this is a quick check
        if (!form[0].checkValidity()) {
            form[0].reportValidity();
            return;
        }

        // 3. Disable the button and show loading state
        button.prop('disabled', true).text('Sending...');

        // 4. Send AJAX Request
        $.ajax({
            // Use Laravel's route helper to get the URL
            url: bookingUrl,
            type: 'POST',
            data: form.serialize(), // Collect all form data (includes CSRF token)
            dataType: 'json',

            // 5. Success Callback (HTTP 200 response)
            success: function (response) {
                // Display Success Message
               messageArea.html(
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                        response.message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>'
                );

                // Final success state
                button.text('Sent!').prop('disabled', false);

                // Optional: Clear the form fields after success
                form[0].reset();
            },

            // 6. Error Callback (HTTP 4xx or 5xx response)
            error: function (xhr, status, error) {
                var errorMessage = 'An error occurred. Please try again.';
                var errorDetails = '';

                // Handle Laravel Validation Errors (Status code 422)
                if (xhr.status === 422) {
                    errorMessage = 'Please fix the errors below.';
                    // Iterate through validation errors
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        errorDetails += '<li>' + value[0] + '</li>';
                    });
                }
                // Handle server errors (e.g., mail sending failure - Status code 500)
                else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }

                // Display Error Message
                messageArea.html('<div class="alert alert-danger"><strong>Error: ' + errorMessage + '</strong>' +
                    (errorDetails ? '<ul>' + errorDetails + '</ul>' : '') + '</div>');

                // 7. Re-enable the button after failure
                button.prop('disabled', false).text('Send');
            }
        });
    });
});