<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Changes saved!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Editing information</h2>
                        <form action="#" method="post" onsubmit="return check(this)">
                            <p>Name:</p>
                            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/>
                            
                            <p>Password:</p>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Save" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
<script>
function check(Form){

	if(Form.name.value.length < 2) 
	{
		alert('Name is too short');
		return false;
	}
	else if(Form.password.value.length < 6){
		
		alert('Password is too short');
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<?php include ROOT . '/views/layouts/footer.php'; ?>
