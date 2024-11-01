<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification System</title>
    
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="../index.php">Welcome Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4" id="sidebarToggle"><i class="fas fa-bars"></i></button>

    <!-- Right-aligned icons -->
    <ul class="navbar-nav ms-auto">
        <!-- Notification Icon with Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="notificationBtn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge bg-danger" id="notification-count">0</span>
            </a>
            <ul class="dropdown-menu" id="notificationDropdown" aria-labelledby="notificationBtn" style="min-width: 300px; left: auto; right: 0;">
                <li>
                    <h6 class="dropdown-header">Notifications</h6>
                </li>
                <li>
                    <ul class="list-group" id="notification-list">
                        <!-- Notifications will be dynamically loaded here -->
                    </ul>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <a class="dropdown-item text-center" href="#" id="viewAllNotifications" data-bs-toggle="modal" data-bs-target="#viewAllNotificationsModal">View all notifications</a>
                </li>
            </ul>
        </li>

        <!-- User Profile Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../login_register/logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- View All Notifications Modal -->
<div class="modal fade" id="viewAllNotificationsModal" tabindex="-1" aria-labelledby="viewAllNotificationsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewAllNotificationsModalLabel">All Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group" id="all-notification-list">
                    <!-- All notifications will be dynamically loaded here -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
// Function to fetch and update notification count
function updateNotificationCount() {
    $.ajax({
        url: 'fetch_notifications.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data) {
                let count = data.length; // Count the number of notifications
                $('#notification-count').text(count); // Update the badge with the count

                // Populate the dropdown
                let notificationList = $('#notification-list');
                notificationList.empty(); // Clear existing notifications

                data.forEach(function(notification) {
                    // Create a list item
                    let listItem = $('<li class="list-group-item"></li>')
                        .text(notification.message)
                        .data('id', notification.id) // Store the notification ID
                        .on('click', function() {
                            markAsRead(notification.id, $(this)); // Call markAsRead when clicked
                        });
                    notificationList.append(listItem);
                });
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching notifications:', textStatus, errorThrown);
        }
    });
}

// Function to mark all notifications as read and reset count to 0
function markAllAsRead() {
    $.ajax({
        url: 'mark_as_read.php',
        method: 'POST',
        success: function(response) {
            if (response.success) {
                // Reset the notification count to 0
                $('#notification-count').text(0);
                // Clear the notification list if needed
                $('#notification-list').empty();
            } else {
                console.error('Failed to mark notifications as read:', response.message);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error marking notifications as read:', textStatus, errorThrown);
        }
    });
}

// Trigger markAllAsRead when the notification button is clicked
$('#notificationBtn').on('click', function() {
    markAllAsRead();
});




// Call the function when the document is ready
$(document).ready(function() {
    updateNotificationCount(); // Initial call
    setInterval(updateNotificationCount, 5000); // Update every 5 seconds

    // Load all notifications when modal is opened
    $('#viewAllNotifications').on('click', function() {
        $.ajax({
            url: 'fetch_all_notifications.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                let allNotificationList = $('#all-notification-list');
                allNotificationList.empty(); // Clear existing notifications

                if (data.length === 0) {
                    allNotificationList.append('<li class="list-group-item">No notifications available.</li>');
                } else {
                    data.forEach(function(notification) {
                        allNotificationList.append('<li class="list-group-item">' + notification.message + '</li>');
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching all notifications:', textStatus, errorThrown);
            }
        });
    });

  
});
</script>
</body>
</html>
