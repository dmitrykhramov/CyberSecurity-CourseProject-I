<?php include ROOT . '/views/layouts/header.php'; ?>

    <?php foreach ($allartists as $artists): ?>
        <section class="singleSection">
            <img src="<?php echo $artists['artistImage']; ?>" class="singlePic">
            <a href="/artist/<?php echo $artists['artistId'];?>">
                <h3><?php echo $artists['firstName']; ?> <?php echo $artists['lastName']; ?></h3>
            </a>
            <br>
            <br>
            <ul>
                <li><p>Date of birth: <?php echo $artists['dateOfBirth']; ?></p></li>
                <li><p>Nationality: <?php echo $artists['nationality']; ?></p></li>
                <li><p>Movies:
                    <?php foreach ($role as $movie): ?>
                        <?php if ($artists['artistId'] == $movie['artistId']): ?>
                            <a href="/movie/<?php echo $movie['movieCode']; ?>">
                            <?php echo $movie['title']; ?></a>      
                        <?php endif; ?>
                    <?php endforeach;?></p>
                </li>
                <br>
                <li><p><a href="/artist/<?php echo $artists['artistId'];?>">Read more...</a></li>
            </ul>
        </section>
    <?php endforeach;?>

<?php include ROOT . '/views/layouts/footer.php'; ?>

