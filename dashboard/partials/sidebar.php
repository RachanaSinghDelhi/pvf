<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- Core Section-->
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a> 

                    <!-- Members Section -->
                    <div class="sb-sidenav-menu-heading">Members</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMembers" aria-expanded="false" aria-controls="collapseMembers">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Members
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseMembers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php">View Members</a>
                            <a class="nav-link" href="add_members.php">Add Members</a>
                          </nav>
                    </div>

                    <!-- Gallery Section -->
                    <div class="sb-sidenav-menu-heading">Gallery</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGallery" aria-expanded="false" aria-controls="collapseGallery">
                        <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                        Gallery
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseGallery" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="gallery.php">View Gallery</a>
                            <a class="nav-link" href="add_gallery.php">Add New Image</a>
                        </nav>
                    </div>

                    <!-- Events Section -->
                    <div class="sb-sidenav-menu-heading">Events</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEvents" aria-expanded="false" aria-controls="collapseEvents">
                        <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                        Events
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseEvents" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="events.php">Upcoming Events</a>
                            <a class="nav-link" href="add_event.php">Create Event</a>
                        </nav>
                    </div>

                    <!-- Reports Section 
                    <div class="sb-sidenav-menu-heading">Reports</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReports" aria-expanded="false" aria-controls="collapseReports">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                        Reports
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseReports" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/dash">View Reports</a>
                          <a class="nav-link" href="/reports/create">Create Report</a>
                        </nav>
                    </div>-->
                </div>
            </div>

            <!-- Footer Section -->
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Pasmanda Foundation Admin
            </div>
        </nav>
    </div>
</div>
