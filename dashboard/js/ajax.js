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

document.addEventListener("DOMContentLoaded", function () {
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
        e.preventDefault(); // Prevent default form submission

        let formData = new FormData(this); // Get form data

        // Perform AJAX request
        $.ajax({
            url: 'save_gallery.php', // Your PHP file to handle the request
            method: 'POST',
            data: formData,
            contentType: false, // Prevent jQuery from overriding content type
            processData: false, // Prevent jQuery from transforming the data into a query string
            success: function (response) {
                // Clear any previous messages
                $('#response').removeClass('d-none').addClass('alert-success').text(response);
                $('#galleryForm')[0].reset(); // Reset the form after submission
                loadGallery(); // Reload the gallery list to show the new entry

                // Optionally, you can add a timeout to clear the response message after a few seconds
                setTimeout(function () {
                    $('#response').addClass('d-none'); // Hide response message after 3 seconds
                }, 3000);
            },
            error: function (xhr, status, error) {
                // Handle error scenario
                $('#response').removeClass('d-none').addClass('alert-danger').text('Error: ' + xhr.responseText);
            }
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
        if (confirm('Are you sure you want to delete this member?')) {
            $.ajax({
                url: 'delete_gallery.php', // Your backend PHP file
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