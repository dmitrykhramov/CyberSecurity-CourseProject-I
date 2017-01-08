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
                        <div class="product-details"><!--artist-details-->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="view-product">
                                        <img src="<?php echo $artist['artistImage']; ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="product-information"><!--/artist-information-->
                                        <h3><?php echo $artist['firstName']; ?> <?php echo $artist['lastName']; ?> </h3>
                                        <br>
                                        <ul>
                                        <li><p>Date of birth: <?php echo $artist['dateOfBirth']; ?>:</p></li>
                                        <li><p>Nationality: <?php echo $artist['nationality']; ?></p></li>
                                        <li><p>Movies:
                                            <?php foreach ($role as $movie): ?>
                                                <?php if ($artist['artistId'] == $movie['artistId']): ?>
                                                <a href="/movie/<?php echo $movie['movieCode'];?>">
                                                 <?php echo $movie['title']; ?></a>
                                                <?php echo str_repeat('&nbsp;', 1); // add extra whitespace ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?></p></li>
                                        </ul>
                                    </div><!--/artist-information-->
                                </div>
                            </div>
                            </div>
                            <div class="Description">                                
                                <div class="col-sm-12">
                                    <p>About:</p>
                                    <p><?php echo $artist['otherInfo']; ?></p>
                                    <br>
                                    <br>
                                    <p><?php echo 'Retrieved from ';?>
                                        <a href='http://www.imdb.com/'>http://www.imdb.com/</a></p>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div><!--/artist-details-->
                    </div>
                </div>
            </div>
        </section>
        

        <br/>
        <br/>

<?php include ROOT . '/views/layouts/footer.php'; ?>
