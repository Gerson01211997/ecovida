<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body class="single-page">

        <header class="site-header">
                <div class="nav-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                                <div class="site-branding d-flex align-items-center">
                                    <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo_ecovida.png" alt="logo"></a>
                                </div><!-- .site-branding -->
        
                                <nav class="site-navigation d-flex justify-content-end align-items-center">
                                    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                            <li class="current-menu-item"><a href="/">Inicio</a></li>
                                            <li><a href="/Acerca-de-nosotros">Acerca de Nosotros</a></li>
                                            <li><a href="/Servicios">Servicios</a></li>
                                            <li><a href="/Reseña">Reseña</a></li>
                                            <li><a href="/Contacto">Contacto</a></li>
        
                                        <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                            <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                                        </li>
                                    </ul>
                                </nav><!-- .site-navigation -->
        
                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .nav-bar -->
        
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Contacto</h1>
        
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                                    <li><a href="#">Inicio</a></li>
                                    <li>Contacto</li>
                                </ul>
                            </div><!-- .breadcrumbs -->
        
                        </div>
                    </div>
                </div>
        
                <img class="header-img" src="images/contact-bg.png" alt="">
            </header><!-- .site-header -->
        
    
    @include('partials/boxes')

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Ponerse en contacto</h2>
                </div>

                <div class="col-12  col-md-4">
                    <input type="text" placeholder="Nombre">
                </div><!-- col-4 -->

                <div class="col-12 col-md-4">
                    <input type="email" placeholder="Correo">
                </div><!-- col-6 -->

                <div class="col-12 col-md-4">
                    <input type="text" placeholder="Asunto">
                </div>

                <div class="col-12">
                    <textarea name="name" rows="12" cols="80" placeholder="Mensaje"></textarea>
                </div>

                <div class="col-12">
                    <input type="submit" name="" value="Enviar mensaje" class="button gradient-bg">
                </div>
            </div><!-- row -->
        </div>
    </div><!-- contact-form -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-page-map">
                    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.3130400160126!2d-75.39748748565376!3d9.30550579332936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5915dc7d9fd5f3%3A0x33123b06d1349b11!2sEcovida!5e0!3m2!1ses-419!2sco!4v1570376168147!5m2!1ses-419!2sco" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div><!-- map -->
            </div>
        </div>
    </div>
    @include('partials/subscribe')

    @include('partials/footer')

    @include('partials/scripts')
</body>
</html>