<?php get_header(); ?>
<main class="inicio">

    <section class="portada flex flex-col lg:block justify-between" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <ul class="list-reset flex pt-3 justify-end pr-3">
            <li class="mx-1">
                <a href="http://" target="_blank">
                    <i class="icon-google"></i>
                </a>
            </li>
            <li class="mx-1">
                <a href="http://" target="_blank">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <li class="mx-1">
                <a href="http://" target="_blank">
                    <i class="icon-twitter"></i>
                </a>
            </li>
        </ul>
        <h1 class="px-2">La Clínica Dental Gebelin Audi</h1>
    </section>
    <div class="relative">
        <div class="background-home">
            <img src="<?php get_the_post_thumbnail_url(); ?>" alt="">
        </div>
    </div>
    <section class="tratamientos py-2 md:py-20">
        <h2 class="titulo">Tratamientos</h2>
        <div class="flex flex-wrap">

            <?php
            $args = array (
                'post_type' => 'tratamientos',
                'posts_per_page' => 8
            );
                      
            $query = new WP_Query($args);

            if($query->have_posts()) : while($query->have_posts()) : $query->the_post();?>

            <a href="<?php echo get_the_permalink(); ?>" class="tratamiento w-full md:w-1/2 lg:w-1/4">
                <img src="<?php echo get_field('icono'); ?>" alt="">
                <h3><?php echo get_the_title(); ?></h3>
                <p class="px-4"><?php echo get_the_content(); ?></p>
            </a>

            <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </section>
    <div class="relative">
        <div class="background-tratamientos">
            <img src="<?php echo get_template_directory_uri();?>/img/background/tratamientos.svg" alt="">
        </div>
    </div>

    
    <section class="instalaciones pb-2 md:pb-20 container mx-auto">
        <h2 class="titulo">Instalaciones</h2>
        <div class="instalacionescarousel owl-carousel owl-theme">

            <?php $imagenes = get_field('imagenes'); 
            
            foreach($imagenes as $imagen) { ?>

            <div class="item">
                <img src="<?php echo $imagen['imagen']; ?>" alt="">
            </div>

            <?php } ?>
        </div>
    </section>
    
    <div class="relative">
        <div class="background-instalaciones">
            <img src="<?php echo get_template_directory_uri();?>/img/background/instalaciones.svg" alt="">
        </div>
    </div>

    <section class="nosotros container mx-auto relative pb-2 md:pb-20">
        <h2 class="titulo">Nosotros</h2>
        <p class="subtitulo px-2 pb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ratione, nesciunt odit corporis qui explicabo rerum eos rem porro vero ipsa quo fugit, eius nulla molestiae nihil. Ut, minus excepturi.</p>
        <div class="flex flex-wrap lg:hidden">
            <div class="w-full md:w-1/2 image-soledad">
            </div>
            <div class="w-full md:w-1/2 info-soledad info flex flex-col justify-between p-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae praesentium modi similique quis officia nam porro nisi laborum! Assumenda, nam!</p>
                <div class="text-right">
                    <h3>Soledad Audi</h2>
                    <p>Nº: 03002013</p>
                </div>
            </div>
            <div class="hidden w-1/2 info-soledad info md:flex flex-col justify-between p-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae praesentium modi similique quis officia nam porro nisi laborum! Assumenda, nam!</p>
                <div class="text-right">
                    <h3>Gustavo Gebelin</h2>
                    <p>Nº: 03001824</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 image-gustavo">
            </div>
            <div class="w-full md:hidden info-soledad info flex flex-col justify-between p-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae praesentium modi similique quis officia nam porro nisi laborum! Assumenda, nam!</p>
                <div class="text-right">
                    <h3>Gustavo Gebelin</h2>
                    <p>Nº: 03001824</p>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex">
            <div class="w-1/2 image-soledad">
                <div class="w-1/2 absolute info info-soledad flex flex-col justify-between p-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae praesentium modi similique quis officia nam porro nisi laborum! Assumenda, nam!</p>
                    <div class="text-right">
                        <h3>Soledad Audi</h2>
                        <p>Nº: 03002013</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 image-gustavo">
                <div class="absolute info info-gustavo w-1/2 flex flex-col justify-between p-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae praesentium modi similique quis officia nam porro nisi laborum! Assumenda, nam!</p>
                    <div>
                        <h3>Gustavo Gebelin</h2>
                        <p>Nº: 03001824</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="relative">
        <div class="background-nosotros">
            <img src="<?php echo get_template_directory_uri();?>/img/background/nosotros.svg" alt="">
        </div>
    </div>
    <section class="contacto container mx-auto pb-10">
        <h2 class="titulo">Contacto</h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 flex flex-col justify-between p-4 info-contacto">
                <h4 class="py-3 md: py-0 text-lg md:text-3xl">
                    La clínica dental<br> Gebelin Audi
                </h4>
                <div>
                    <div class="flex items-center telefono">
                        <div class="icono pr-4"><i class="icon-telefono"></i></div> 
                        <p class="py-1 md:py-3 telefono texto"><a href="tel:+34965862612">965 86 26 12</a></p>
                    </div>
                    <div class="flex items-center horario">
                        <div class="icono pr-4"><i class="icon-horario"></i></div>
                        <p class="py-1 md:py-3">L - V : 10:00 - 14:00 | 16:00 - 20:00</p>
                    </div>
                    <div class="flex items-center direccion">
                        <div class="icono pr-4"><i class="icon-localizador"></i></div>
                        <p class="py-1 md:py-3"><a href="https://www.google.es/maps/place/La+Cl%C3%ADnica+Dental+Gebelin+Audi+en+Benidorm/@38.542953,-0.126639,15z/data=!4m5!3m4!1s0x0:0x7df066914c30f5a1!8m2!3d38.542953!4d-0.126639" target="_blank">Av. Alfonso Puchades 21, Benidorm</a></p>
                    </div>
                    <div class="flex items-center email">
                        <div class="icono icono-email pr-4"><i class="icon-email"></i></div>
                        <p class="py-1 md:py-3"><a href="mailto:gebelin.audi@gmail.com">gebelin.audi@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
            
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
