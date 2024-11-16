document.addEventListener('DOMContentLoaded', function () {
    const addMemberForm = document.getElementById('addMemberForm');
    const responseDiv = document.getElementById('response');

    if (addMemberForm) {
        addMemberForm.addEventListener('submit', function (e) {
            e.preventDefault();
            let formData = new FormData(this);

            // Send form data using AJAX
            fetch('save_member.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Display response in the green alert box
                responseDiv.classList.remove('d-none');
                responseDiv.innerHTML = data;

                addMemberForm.reset(); // Clear form after submission
            })
            .catch(error => {
                responseDiv.classList.remove('d-none');
                responseDiv.classList.remove('alert-success');
                responseDiv.classList.add('alert-danger');
                responseDiv.innerHTML = "An error occurred. Please try again.";
            });
        });
    }
});


$(document).ready(function () {
    $('#editMemberForm').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this); // This will include the image file too

        $.ajax({
            url: 'update_member.php', // PHP file to handle the request
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response); // Show success or error message
                // Redirect to gallery page or refresh the list, if necessary
                window.location.href = 'index.php'; // Adjust to your gallery page
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("An error occurred: " + textStatus); // Handle error
            }
        });
    });
});


/*document.addEventListener("DOMContentLoaded", function () {
    const editMemberForm = document.getElementById("editMemberForm");
    
    editMemberForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission
        
        const formData = new FormData(this); // Create a FormData object from the form
        
        // Send AJAX request
        fetch('update_member.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            // Show response message
            const responseBox = document.getElementById("response");
            responseBox.classList.remove("d-none");
            responseBox.textContent = data.message; // Assuming your PHP returns a JSON object with a 'message'
            if(data.success) {
                responseBox.classList.add("alert-success");
            } else {
                responseBox.classList.add("alert-danger");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
*/
// Delete member using AJAX
$(document).ready(function() {
    $('.delete-btn').click(function() {
        var memberId = $(this).data('id');
        if (confirm('Are you sure you want to delete this member?')) {
            $.ajax({
                url: 'delete_member.php', // Your backend PHP file
                type: 'POST',
                data: { id: memberId },
                success: function(response) {
                    if (response.success) {
                        alert('Member deleted successfully.');
                        location.reload(); // Refresh the page
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function() {
                    alert('There was an error processing your request.');
                }
            });
        }
    });
});


 // Load gallery list using AJAX

 $(document).ready(function () {
    $('#addGalleryForm').on('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        $.ajax({
            url: 'save_gallery.php', // Backend script for saving gallery
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                const res = JSON.parse(response);
                if (res.success) {
                    $('#response')
                        .removeClass('d-none alert-danger')
                        .addClass('alert-success')
                        .text(res.success);
                    $('#addGalleryForm')[0].reset();
                    $('#imagePreviews').html(''); // Clear previews
                } else if (res.error) {
                    $('#response')
                        .removeClass('d-none alert-success')
                        .addClass('alert-danger')
                        .text(res.error);
                }
            },
            error: function () {
                $('#response')
                    .removeClass('d-none alert-success')
                    .addClass('alert-danger')
                    .text('An unexpected error occurred.');
            }
        });
    });

    // Image previews
    $('#images').on('change', function () {
        const files = this.files;
        const previewsContainer = $('#imagePreviews');
        previewsContainer.html('');

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewsContainer.append(`<img src="${e.target.result}" style="max-width: 100px; height: auto; margin: 5px;">`);
            };
            reader.readAsDataURL(file);
        });
    });
});


 
$(document).ready(function () {
    $('#editGalleryForm').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this); // This will include the image file too

        $.ajax({
            url: 'update_gallery.php', // PHP file to handle the request
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response); // Show success or error message
                // Redirect to gallery page or refresh the list, if necessary
                window.location.href = 'gallery.php'; // Adjust to your gallery page
            }
        });
    });
});


// Delete member using AJAX
$(document).ready(function() {
    $('.delete-gallery-btn').click(function() {
        var memberId = $(this).data('id');
        if (confirm('Are you sure you want to delete this Image?')) {
            $.ajax({
                url: 'delete_gallery.php', // Your backend PHP file
                type: 'POST',
                data: { id: memberId },
                success: function(response) {
                    if (response.success) {
                        alert('Image deleted successfully.');
                        location.reload(); // Refresh the page
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function() {
                    alert('There was an error processing your request.');
                }
            });
        }
    });
});

//ad event
$(document).ready(function () {
    $('#addEventForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        let formData = new FormData(this); // Get form data

        // Perform AJAX request
        $.ajax({
            url: 'save_event.php', // PHP file to handle the request
            method: 'POST',
            data: formData,
            contentType: false, // Prevent jQuery from overriding content type
            processData: false, // Prevent jQuery from transforming the data into a query string
            success: function (response) {
                // Display success message
                $('#response').removeClass('d-none').addClass('alert-success').text(response);
               // $('#addEventForm')[0].reset(); // Reset the form after submission
            },
            error: function (xhr, status, error) {
                // Log the error details for debugging
                console.error("Error Status:", status);
                console.error("XHR Status:", xhr.status);
                console.error("Error Message:", error);
                console.error("Response Text:", xhr.responseText);

                // Display error details in the response div
                $('#response')
                    .removeClass('d-none')
                    .addClass('alert-danger')
                    .html(
                        `<strong>Error:</strong> ${xhr.status} - ${error}<br>${xhr.responseText}`
                    );
            }
        });
    });
});


$(document).ready(function () {
    $('#editEventForm').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this); // This will include the image file too

        $.ajax({
            url: 'update_event.php', // PHP file to handle the request
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response); // Show success or error message
                // Redirect to gallery page or refresh the list, if necessary
                window.location.href = 'events.php'; // Adjust to your gallery page
            }
        });
    });
});

// Delete event using AJAX
$(document).ready(function() {
    $('.delete-events-form').click(function() {
        var eventId = $(this).data('id');
        if (confirm('Are you sure you want to delete this event?')) {
            $.ajax({
                url: 'delete_event.php', // Your backend PHP file
                type: 'POST',
                data: { id: eventId },
                success: function(response) {
                    console.log(response); // Log response for debugging
                    if (response.success) {
                        alert('Event deleted successfully.');
                        location.reload(); // Refresh the page
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Log error details
                    alert('There was an error processing your request.');
                }
            });
        }
    });
});

// Update notification count every 5 seconds
setInterval(function() {
    $.ajax({
        url: 'fetch_notifications.php',
        method: 'GET',
        success: function(data) {
            let notifications = JSON.parse(data);
            let count = notifications.length;
            $('#notification-count').text(count);
        }
    });
}, 5000); // Check every 5 seconds

// Show notifications on icon click
$('#notificationBtn').click(function() {
    alert("hello");
    $.ajax({
        url: 'fetch_notifications.php',
        method: 'GET',
        success: function(data) {
            let notifications = JSON.parse(data);
            let notificationList = $('#notification-list');
            notificationList.empty(); // Clear existing notifications

            notifications.forEach(function(notification) {
                notificationList.append('<li class="list-group-item">' + notification.message + '</li>');
            });

            $('#notificationDropdown').toggle();
            
            // Mark notifications as read
            $.ajax({ url: 'mark_as_read.php', method: 'POST' });
            $('#notification-count').text('0'); // Reset count
        }
    });
});
