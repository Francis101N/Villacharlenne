<br>
<nav class="sidebar-nav">
    <ul id="sidebarnav">

        <!-- Dashboard -->
        <li class="sidebar-item pt-2">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard" aria-expanded="false">
                <i class="fas fa-chart-line" aria-hidden="true"></i>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="suites.php" aria-expanded="false">
                <i class="fa fa-bed" aria-hidden="true"></i>
                <span class="hide-menu">Suites</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bookings.php" aria-expanded="false">
                <i class="fa fa-calendar-check" aria-hidden="true"></i>
                <span class="hide-menu">Bookings</span>
            </a>
        </li>

        <!-- News List -->
        <!-- All News -->
        <li class="sidebar-item ms-2">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="news.php" aria-expanded="false">
                <!-- Newspaper SVG icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm2 2v10h12V3H2zm1 1h3v1H3V4zm0 2h5v1H3V6zm0 2h4v1H3V8zm0 2h3v1H3v-1z" />
                </svg>
                <span class="hide-menu ms-2">News</span>
            </a>
        </li>

        <!-- Change Password -->
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="change-password" aria-expanded="false">
                <i class="fas fa-key" aria-hidden="true"></i>
                <span class="hide-menu">Change password</span>
            </a>
        </li>

        <!-- Logout -->
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout" aria-expanded="false"
                onclick="return confirm('Are you sure you want to log out?');">

                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                <span class="hide-menu">Logout</span>
            </a>
        </li>

    </ul>
</nav>