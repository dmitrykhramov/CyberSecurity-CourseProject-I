<?php include ROOT . '/views/layouts/header.php'; ?>

<?php foreach ($allmovies as $movies): ?>
    <section class="singleSection">

        <img src="<?php echo $movies['image']; ?>" class="singlePic">

        <a href="/movie/<?php echo $movies['movieCode'];?>">
            <h3><?php echo $movies['title']; ?></h3>
        </a>
        <br>
        <ul>
            <li><p>Year: <?php echo $movies['year']; ?></p></li>
            <li><p>Category: <?php echo $movies['name']; ?></p></li>
            <li><p>Artists: 
                <?php foreach ($role as $artist): ?>
                    <?php if ($movies['movieCode'] == $artist['movieCode']): ?>
                        <a href="/artist/<?php echo $artist['artistId'];?>">
                        <?php echo $artist['firstName']; ?> <?php echo $artist['lastName']; ?></a>
                        <?php echo str_repeat('&nbsp;', 1); // add extra whitespace ?> 
                    <?php endif; ?>
                <?php endforeach;?></p></li>
                    <br>
            <li><p>
                <?php     // !! display first 2 sentences  
                    $dot = ".";
                    $position1 = stripos ($movies['movieDesc'], $dot); //find first dot position

                    $offset = $position1 + 1; //prepare offset
                    $position2 = stripos ($movies['movieDesc'], $dot, $offset); //find second dot using offset
                    $first2Sen = substr($movies['movieDesc'], 0, $position2); //put two first sentences under $first2Sen

                    echo $first2Sen . '...'; //add a dot ?>

            <a href="/movie/<?php echo $movies['movieCode'];?>">Read more...</a></li>
        </ul>

    </section>
<?php endforeach;?>

<?php include ROOT . '/views/layouts/footer.php'; ?>

