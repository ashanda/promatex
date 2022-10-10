<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Promatex
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promatex</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.css"></script>

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">


    <!-- fontAwsome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/
assets/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.css">



    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
		<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Main wrapper start -->
    <header>

        <div class="banner">
            <!-- header wrapper start -->
            <div class="nav-banner">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php the_field('comapany_logo','option'); ?>" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                                       wp_nav_menu( array(
                                       'theme_location' => 'menu-1',
                                       'depth' => 2,
                                       'container' => 'false',
                                       'container_class' => 'collapse navbar-collapse',
                                       'container_id' => 'navbarNav',
                                       
                                       'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                      
                                       'add_a_class' => 'nav-link',
                                       'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                       'walker' => new WP_Bootstrap_Navwalker(),
                                       ) );
                    ?>
                       

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Login</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                            height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"
                                            id="search">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                                                style="font-weight: bold;" />
                                        </svg></span></a>


                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                            height="22" fill="currentColor" class="bi bi-suit-heart"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"><span id="bag"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="22" height="22" fill="currentColor" class="bi bi-bag" id="bag"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- header wrapper end -->
