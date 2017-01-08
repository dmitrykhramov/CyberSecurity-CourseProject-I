<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="wrapper">    
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                                <h2>Categories</h2>
                                <div class="panel-group category-products" id="accordian"><!--category-movies-->
                                <?php foreach($categories as $categoryItem): ?>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="/category/<?php echo $categoryItem['catId']; ?>"
                                        class="<?php if ($categoryId == $categoryItem['catId']) echo 'active'; ?>"
                                        >
                                            <?php echo $categoryItem['name']; ?>
                                            </a></h4>
                                    </div>
                                </div>
                                
                                <?php endforeach;?>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right movieDetailSection">
                        <div class="product-details"><!--movie-details-->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="view-product">
                                        <img src="<?php echo $movie['image']; ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="product-information"><!--/movie-information-->
                                        <h3><?php echo $movie['title']; ?></h3>
                                        <br>
                                        <ul>
                                        <li><p>Year: <?php echo $movie['year']; ?></p></li>
                                        
                                        <li><p>Category: 
                                            <a href="/category/<?php echo $movie['catID'];?>">
                                            <?php echo $movie['name']; ?></a></p></li>
                                    
                                        <li><p>Artists:
                                            <?php foreach ($role as $artist): ?>
                                                <?php if($movie['movieCode'] == $artist['movieCode']): ?>
                                                    <a href="/artist/<?php echo $artist['artistId'];?>">
                                                    <?php echo $artist['firstName']; ?> <?php echo $artist['lastName']; ?></a>
                                                    <?php echo str_repeat('&nbsp;', 1); // add extra whitespace ?> 
                                                <?php endif; ?>
                                            <?php endforeach;?></p></li>
                                        </ul>
                                    </div><!--/movie-information-->
                                </div>
                            </div>
                        </div>               
                        <div class="Description">
                            <div class="col-sm-12">
                            <p>Description:</p>
                            <p><?php echo $movie['movieDesc']; ?></p>
                            <br>
                            <br>
                            <p><?php echo 'Retrieved from ';?>
                                <a href='http://www.imdb.com/'>http://www.imdb.com/</a></p>
                            <br>
                            </div>   
                        </div>
                        <?php if (!User::isGuest()): ?>
                        <iframe width="850" height="450"
                               src="http://www.youtube.com/embed/<?php echo $movie['link']; ?>?autoplay=0" frameborder="0" allowfullscreen>
                        </iframe>
                        <?php endif; ?>
                    </div>
                                         
                        <!--/movie-details-->    
                </div>
            </div>
        </div>
    
    </section>
        

        <br/>
        <br/>

<?php include ROOT . '/views/layouts/footer.php'; ?>
        
   