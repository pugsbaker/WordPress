<script>

    !function ($) {
        $(function(){
            // carousel demo
            $('#myCarousel').carousel({interval: 10000})
        })
    }(window.jQuery)
    
</script>

<header id="banner" role="banner">



    <div class="nav-wrapper">
        <div class="container">

            <div  class="navbar" >
                <div class="navbar-inner">

                    <div class="container">
                        <nav id="nav-main" class="nav-collapse" role="navigation">
                            <?php
                            if (has_nav_menu('primary_navigation')) :
                                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
                            endif;
                            ?>
                        </nav>
                        <div class="nav-brand-wrapper">
                            <a class="brand" href="<?php echo home_url(); ?>/">
                                <img src="/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
                            </a>

                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <?php
        if (is_front_page()) {
            get_template_part('templates/page', 'carousel');
        }
        ?>
    </div>





</header>