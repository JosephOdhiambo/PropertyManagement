<?php 
session_start();
error_reporting(1);
?>
<div class="menu-bar-container container d-flex align-items-center justify-content-between">
    <h1 class="logo"><a href="../index.php">PropertyEnquiry<span>.</span>com</a></h1>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="../index.php" title="Home">Home</a></li>
            <li><a class="nav-link scrollto" href="../about.php" title="About">About</a></li>
            <li><a class="nav-link scrollto" href="../image gallery.php" title="Gallery">Gallery</a></li>
            <?php 
            if(isset($_SESSION['create_account_logged_in']) && $_SESSION['create_account_logged_in']!="")
            {
                if(basename($_SERVER['PHP_SELF']) !== 'index.php') {  // check if the current page is not index.php
            ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="order.php">Booking Status</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
            <?php } } else
            {
            ?>
            <li><a class="nav-link scrollto" href="../Login.php" title="login"><span
                        class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
            </li>
            <?php 
            } ?>
            <li><a class="nav-link scrollto" href="index.php" title="Admin Login"><span
                        class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
</div>