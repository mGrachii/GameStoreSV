<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game Store SV</title>
    <?php include './links/link.php'; ?>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
    <?php include './links/nav.php' ?>
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>Categorias</h1>
        <p><a href="index.php">Inicio</a> / Categorias</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">Todas</a></li>
                            <li><a href="" data-filter=".photography">Acción</a></li>
                            <li><a href="" data-filter=".logo">Aventura</a></li>
                            <li><a href="" data-filter=".graphics">Arcade</a></li>
                            <li><a href="" data-filter=".ads">Misiones</a></li>
                            <li><a href="" data-filter=".fashion">Batalla</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->               


    <!-- footer -->
    <footer>
        <?php include './links/footer.php';?>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->    

</body>
</html>