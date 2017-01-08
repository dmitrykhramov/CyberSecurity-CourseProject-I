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

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Latest Movies</h2>
                            
                            <?php foreach ($categoryMovies as $movie): ?>
                            <div class="col-sm-4">
                                <a href="/movie/<?php echo $movie['movieCode'];?>">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center effectscale">
                                            <img class="pic" src="<?php echo $movie['image']; ?>" alt="" />
                                            <h4><?php echo $movie['title']; ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <?php endforeach;?>
                            
                        </div>
                    </div>
                                			
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>



