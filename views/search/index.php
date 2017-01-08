<?php include ROOT . '/views/layouts/header.php'; ?>

<?php if (isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if ($errors == false): ?>

<?php if ($searchResults == NULL) echo '<ul>Nothing was found</ul>' ?>

    <?php if ($table === "movie"): ?>
        <?php foreach ($searchResults as $result): ?>
            <section class="singleSection">
                <img src="<?php echo $result['image']; ?>" class="singlePic">
                <a href="/movie/<?php echo $result['movieCode'];?>">
                    <h3><?php echo $result['title']; ?></h3>
                </a>
                <ul>
                <br>
                <br>
                <li><p>Year: <?php echo $result['year']; ?></p></li>
                <br>
                <li><p><a href="/movie/<?php echo $result['movieCode'];?>">Read more...</a></li>
                </ul>
            </section>
        <?php endforeach;?>
    <?php endif; ?>

    <?php if ($table === "artist"): ?>
        <?php foreach ($searchResults as $result): ?>
            <section class="singleSection">
                <img src="<?php echo $result['artistImage']; ?>" class="singlePic">
                <a href="/artist/<?php echo $result['artistId'];?>">
                    <h3><?php echo $result['firstName']; ?> <?php echo $result['lastName']; ?></h3>
                </a>
                <ul>
                <li><p>Date of birth: <?php echo $result['dateOfBirth']; ?></p></li>
                <li><p>Nationality: <?php echo $result['nationality']; ?></p></li>
                <br>
                <li><p><a href="/artist/<?php echo $result['artistId'];?>">Read more...</a></li>
                </ul>
            </section>
        <?php endforeach;?>
    <?php endif; ?>
<?php endif; ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>
