<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">Burger <span>King</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.php" class="nav-item nav-link">Trang chủ</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="feature.php" class="nav-item nav-link">Feature</a>
                <a href="team.php" class="nav-item nav-link">Chef</a>
                <a href="menu.php" class="nav-item nav-link">Menu</a>
                <a href="booking.php" class="nav-item nav-link active">Booking</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a href="blog.php" class="dropdown-item">Blog Grid</a>
                        <a href="single.php" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <div class="nav-item dropdown">
                    <?php
                    session_start();
                        if(isset($_SESSION['tk'])){
                    ?>
                        <a href="login.php" class="nav-link dropdown-toggle" data-toggle="dropdown"> Hello, <?php echo $_SESSION['tk']; ?></a>

                    <?php
                        }else{
                    ?>
                        <a href="login.php" class="nav-link dropdown-toggle">Login</a>
                    <?php
                        }
                    ?>
                    <div class="dropdown-menu">
                        <a href="dangxuat.php" class="dropdown-item">Log out</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>