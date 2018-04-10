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
        <h1>Contactanos</h1>
        <p><a href="index.php">Inicio</a> / Contactanos</p>
    </div>
    <!-- end top bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="name">
                            <span>Tu Nombre</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="email">
                            <span>Tu Email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="object">
                            <span>Asunto</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="message"></textarea>
                            <span>Mensaje</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="btn btn-box">Enviar</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="text-uppercase">Contactanos</h3>
            <h5>Atencion al cliente</h5>
            <div class="h-30"></div>
            <p>Nuestro personal de atencion al cliente respondera lo mas pronto posible</p>
            <div class="contact-info">
                <p><i class="ion-android-call"></i> 75757575</p>
                <p><i class="ion-ios-email"></i> atencionalcliente@gamestoresv.online</p>
            </div>
        </div>


    </div>
    <!-- end main-container -->

    <!-- footer -->
    <footer>
        <?php include './links/footer.php'; ?>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->    

</body>

</html>