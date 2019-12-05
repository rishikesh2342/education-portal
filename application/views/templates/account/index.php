<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'; ?>
    </head>
    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <?php include_once 'header.php'; ?>
        <section>
            <?php include_once 'sidemenu.php'; ?>
            <?php include_once 'rightsidemenu.php'; ?>
        </section>
        <?php
        if (isset($body)) {
            echo $body;
        }
        include_once 'footer.php';
        ?>
    </body>
</html>
