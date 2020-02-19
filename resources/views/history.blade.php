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

                        <nav class="site-navigation d-flex justify-content-end align-items-center" >
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="/">Inicio</a></li>
                                <li><a href="/Acerca-de-nosotros">Acerca de Nosotros</a></li>
                                <li><a href="/Servicios">Servicios</a></li>
                                <li><a href="/Reseña">Reseña</a></li>
                                <li><a href="/Contacto">Contacto</a></li>

                                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +57 322 585 1559</a>
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
                    <h1>Historia</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Inicio</a></li>
                            <li>Reseña</li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <img class="header-img" src="images/about-bg.png" alt="">
    </header><!-- .site-header -->
    <div class="med-history">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-6">
                    <h2>Reseña Histórica</h2>

                    <p style="text-align: justify"><strong>Centro Especializado Ecovida Ltda.</strong> Surgió bajo el liderazgo del <strong>Dr. Jaime Hernández Herazo</strong> con el apoyo de su esposa. <strong>Dra. Edith Pájaro Silgado</strong>, el 02 de mayo de 2005 mediante escritura pública N°. 000766 de la Notaría Segunda e inscrita en cámara de comercio el 10 de mayo de 2005, con el objeto de encaminar sus servicios a la detección temprana de alteraciones del embarazo, mediante la conformación de un equipo médico-científico y estableciendo estrategias para el cubrimiento poblacional en todo el <strong><em>Departamento de Sucre</em></strong>, garantizando de esta manera una atención oportuna y eficiente a las usuarias de las diferentes entidades. </p>
                    
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <img class="responsive" src="images/ecovida.jpg" alt="" style="width:600px; border-radius:20px;">
                </div>
           
                <div class="col-12 ">  
                    <p style="text-align: justify">Desde su creación, se ha esmerado para ser una institución líder en el desarrollo y mejoramiento en la calidad en salud de las gestantes en el departamento de Sucre y sus alrededores, siendo la <strong><em>primera institución especializada en el cuidado perinatal y ginocobstétrico</em></strong>, que realizara un gran aporte en la disminución de la morbi-mortalidad materna y perinatal en nuestra región. Esta problemática, en los últimos años se ha elevado, alcanzando niveles de morbilidad y mortalidad materna y perinatal que sobrepasan a la mayoría de los otros departamentos a nivel nacional. </p>                    
                </div>
                <div class="col-12 ">  
                    <p style="text-align: justify">La maternidad segura, es una prioridad a nivel nacional y nuestra institución siendo consciente de esta necesidad, está aportando todos los recursos necesarios que permitan disminuir los índices de mortalidad materna y perinatal en el Departamento de Sucre. Como entidad especializada en ginocobstetricia y medicina perinatal, somos los únicos en la región, que realizamos <strong><em>búsqueda activa de los gestantes a nivel urbano y en las zonas rurales</em></strong>, donde se presentan mayores porcentajes de muertes por falta de oportunidad en la atención y de orientación en los controles prenatales, que son indispensables para una maternidad segura. </p>                    
                </div>
                <div class="col-12 col-lg-6 mt-5 mt-lg-0 ">
                    <img class="responsive" src="images/about.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6">  
                    <p style="text-align: justify">Por todo lo anterior, a lo largo de estos años se ha conformado un EQUIPO de Especialistas altamente calificados, con el objeto de atender y satisface ñas necesidades de todas nuestras usuarias, además de construir una nueva sede ubicada en un excelente sitio de la ciudad, con instalaciones cómodas, acogedoras, modernas y acorde con los requisitos legales vigentes que aplican al sector salud, para la prestación del servicio con excelencia y calidad. Es así, como en el mes de febrero del año 2015, se da inicio a la prestación de servicios y atención de usuarias en nuestra nueva sede, ña cual cuenta con zona de parqueo, tres (03) consultorio para ultrasonido, una (01) sala de espera, área de archivo, oficinas administrativas, entre otras. </p>  
                    <p style="text-align: justify">En la actualidad, nuestro equipo de trabajo está constituido de manera interdisciplinaria, cuenta con la experiencia y los recursos necesarios para brindar un servicio con calidad humana y seguridad a las gestantes de la región; trabajamos como siempre, pensando con el Corazón de mamá </p>                  
                </div>

            </div>
        </div>
    </div>

    
    
</div>
    

    @include('partials/subscribe')

    @include('partials/footer')

    @include('partials/scripts')
</body>
</html>