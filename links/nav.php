<!-- Caja header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.php"><img src="img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- Caja-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span> 
            </a>
            <!-- Caja-primaria-navegacion -->
        </header>
        <!-- end caja header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Game Store SV</li>

                <li><a href="index.php">Inicio</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="" data-toggle="modal" data-target="#modalLogin">Iniciar Sesión</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="miapp.php">Nuestra App</a></li>
                <li><a href="contacto.php">Contactanos</a></li>



                <li class="box-label">Siguenos En Nuestras Redes</li>

                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->        

        <!-- Modal Login -->
    <div class="modal fade" id="modalLogin">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">                
                <div class="modal-body">                    
                    <form >
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="Email" class="form-control" id="inputEmail" placeholder="Escribe tu email...">   
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Escribe tu contraseña...">   
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sessión</button>
                        <button type="submit" class="btn btn-success btn-block">Cancelar</button>
                    </form>                      
                </div>
                <div class="modal-footer">
                    <p><a href="">Has olvidado la contraseña?</a></p>                    
                </div>
            </div>
        </div>
    </div>
    <!-- end modal Login -->