<!DOCTYPE html>
<html lang="en">
    <head><!--element is a container for metadata (data about data)-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Best movie</title>
        <link href="/template/images/movie_favicon.png" rel="icon">
        <!--href: link to external style sheets-->
        <!--rel: specifies the relationship between the current document and the linked document-->
        <link href="/template/css/styleSheet.css" rel="stylesheet">
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">     
    </head>
    <body><!--http://getbootstrap.com/css/-->
        <header id="header"><!--header-->
        <!--one or more heading elements (<h1> - <h6>),logo or icon-->
            <div class="header_top"><!--header_top-->
                <div class="container"><!--.container for a responsive fixed width container-->
                    <div class="row"><!--placed in container, use row to create horizontal groups of columns-->
                        <div class="col-md-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <!--a: defines a hyperlink; href: indicates the link's destination-->
                                    <li><a href="tel:0466846780"><i class="fa fa-phone"></i> Call Us</a></li><!--font awesome-->               
                                    <li><a href="mailto:best.bestmovie@gmail.com"><i class="fa fa-envelope-o"></i> Email Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="https://www.facebook.com/bestmovie.it/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://plus.google.com/up/accounts/upgrade/?continue=https://plus.google.com/u/0/?gpsrc%3Dogpy0%26tab%3DwX&gpsrc=ogpy0">
                                            <i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://twitter.com/xrtfully?lang=en">
                                            <i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="pull-left">
                                <a href="/"><img src="/template/images/bestMovieEver.jpg" width="600" height="175" alt="Best Movie" /></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                                <ul class="nav navbar-nav">                                    
                                    <?php if (User::isAdmin() && !User::isGuest()): ?>
                                        <li><a href="/admin"><i class="fa fa-edit"></i> Administrator</a></li>
                                        <?php endif; ?>
                                    <?php if (User::isGuest()): ?>
                                        <li><a href="/user/register/"><i class="fa fa-user"></i> Register</a></li>
                                        <li><a href="/user/login/"><i class="fa fa-lock"></i> Log in</a></li>
                                    <?php else: ?>
                                        <li><a href="/cabinet/"><i class="fa fa-user"></i> Profile</a></li>
                                        <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Log out</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse pull-left">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/movielist">Movies</a></li>
                                    <li><a href="/artistlist">Actors</a></li>
                                    <li><a href="/contacts/">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">                            
                            <div class="searchblock navbar-nav collapse navbar-collapse pull-right">                          
                                <form  method="post" action="search"> 
                                    <input type="text" name="words" placeholder=" Search..." id="search" 
                                        <?php if (isset($words)): ?>
                                            value="<?php echo $words; ?>"
                                        <?php endif; ?>> 								
                                    <select id="dropMenu" name="filter"> 
                                        <option value="movie"
                                            <?php if (isset($table)): ?>    
                                                <?php if ($table == "movie") echo 'selected="selected"'; ?>
                                            <?php endif; ?>>Movie</option>
                                        <option value="artist"
                                            <?php if (isset($table)): ?>
                                                <?php if ($table == "artist") echo 'selected="selected"'; ?>
                                            <?php endif; ?>>Actor</option>
                                    </select>
                                    <button type="submit" name="search" id="searchButton"><i class="fa fa-search"></i>
                                    </button> 
                                </form> 
                            </div>
                        </div>
                    </div>    
                </div>        
            </div><!--/header-bottom-->        
        </header><!--/header-->
    </body>
</html>   
            
            
        

