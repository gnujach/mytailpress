<?php get_header(); ?>
<div class="container mx-auto my-8">
    <?php if (have_posts()) : ?>
        <div class="max-w-full mx-auto">
            <!-- <img class="z-50" src="<?php echo get_bloginfo('template_url') . '/assets/images/centro-victoria.jpg' ?>" /> -->
            <?php
            the_posts_from_loop_principal(1, function () {
                get_template_part('template-parts/partials/post-w100');
            });
            ?>
        </div>
        <div class="container mx-auto">
            <div class="carousel">
                <?php
                the_posts_from_loop(4, function () {
                    get_template_part('template-parts/partials/slider4');
                })
                ?>
            </div>
            <!-- <?php while (have_posts()) {
                        the_post();
                    }
                    ?> -->
        </div>
        <div class="flex flex-col md:flex-row justify-between bg-green-500 text-white font-bold ml-2 mr-2 mt-4">
            <p class="pl-4 mx-2">Enlaces de Interes</p>
        </div>
        <div>
            <section class="bg-white dark:bg-gray-900">
                <div class="container px-6 py-12 mx-auto">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div>
                            <a href="https://migrante.guanajuato.gob.mx/wp-content/uploads/2022/10/Convocatoria-Mineros-de-Plata-3ra-HF.pdf">
                                <img src="https://victoriaguanajuato.gob.mx/wp-content/uploads/2022/10/mineros_de_plata.jpg" class="rounded-md">
                            </a>
                            <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">MINEROS DE PLATA</h1>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Tercera convocatoria para participal en la selección de los clubes de migrantes.</p>
                        </div>

                        <div>
                            <a href="https://juventudesgto.guanajuato.gob.mx/wp-content/uploads/Convocatoria-Talento-de-Exportacio%CC%81n-2.pdf">
                                <img src="https://victoriaguanajuato.gob.mx/wp-content/uploads/2022/07/talento.jpeg" class="rounded-md">
                            </a>
                            <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">Talento de Exportación</h1>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Talento de Exportación.</p>
                        </div>
                        <div>
                            <a href="https://fondos.guanajuato.gob.mx/fondos/crece-tu-negocio/">
                                <img src="https://victoriaguanajuato.gob.mx/wp-content/uploads/2022/07/crea_negocio.jpeg" class="rounded-md">
                            </a>
                            <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">Crece tu Negocio</h1>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Crece tu Negocio</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
