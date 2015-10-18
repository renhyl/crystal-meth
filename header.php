<?php
/**
* Header template for our theme
*
* Displays all of the <head> section and everything up till <div id="main">.
    *
    * @package Crystal Meth
    * @since 0.1
    */
    ?><!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

            <title><?php wp_title(); ?></title>
            
            <?php
            /*
            * We add some JavaScript to pages with the comment form
            * to support sites with threaded comments (when in use).
            */
            if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );
                
            /*
        * Always have wp_head() just before the closing </head>
        * tag of your theme, or you will break many plugins, which
        * generally use this hook to add elements to <head> such
            * as styles, scripts, and meta tags.
            */
            wp_head();
            ?>
        </head>
        <body <?php body_class(); ?>>

            <nav class="navbar navbar-default navbar-static-top" role="navigation">
               <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a href="#"><i class="fa fa-phone"></i>0123 456 789</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i>email@email.com</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav social-icons pull-right">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div> 
            </nav>

            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    
                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'crystalmeth' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    </div>
                    <?php
                    wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav pull-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?><!--/.nav-collapse -->
                </div>
            </nav>
            <div class="container-fluid">