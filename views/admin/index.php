<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h4>Welcome, administrator <?php echo $user['firstName'];?>!</h4>
            
            <br/>
            
            <p>Available to you such opportunities:</p>
            
            <br/>
            
            <ul>
                <li><h5><a href="/admin/movie"><i class="fa fa-film"></i>  Control movies</a></h5></li></br>
                <li><h5><a href="/admin/artist"><i class="fa fa-group"></i>  Control actors</a></h5></li></br>
                <?php if ($user['usertype'] == '1'): ?>
                <li><h5><a href="/admin/user"><i class="fa fa-wrench"></i>  Control admins</a></h5></li></br>
                <?php endif; ?>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

