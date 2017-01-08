<?php include ROOT . '/views/layouts/header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categories</h2>
                            <div class="panel-group category-products">
                                
                                <?php foreach($categories as $categoryItem): ?>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="/category/<?php echo $categoryItem['catId']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                            </a></h4>
                                    </div>
                                </div>
                                
                                <?php endforeach;?>
                                
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Latest Movies</h2>
                            
                            <?php foreach ($latestMovies as $movie): ?><!-- foreach loop works only on arrays, and is used to loop through each key/value pair in an array-->
                            <div class="col-sm-4">
                                <a href="/movie/<?php echo $movie['movieCode'];?>">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center effectscale">
                                            <img class="pic" src="<?php echo $movie['image']; ?>" alt="" />
                                            <h4><?php echo $movie['title']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <?php endforeach;?>
                            
                     </div>
                     <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Most popular</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderMovies as $sliderItem): ?>
                          
                        <div class="item">
                                <div class="product-image-wrapper2">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img class="pic2" src="<?php echo $sliderItem['image']; ?>" alt="" />
                                            <a href="/movie/<?php echo $sliderItem['movieCode']; ?>">
                                                <h4><?php echo $sliderItem['title']; ?></h4>
                                            </a>
                                                                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                         
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
                                			
                </div>
            </div><!--/recommended_items-->
        </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
