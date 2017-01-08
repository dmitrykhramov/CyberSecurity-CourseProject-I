<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                
                <div class="signup-form"><!--sign up form-->
                    <h2>Log in</h2>
                    <form action="#" method="post" onsubmit="return IsEmpty(this)">
                        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>"/>
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Log in" />
                    </form>
                </div><!--/sign up form-->


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<script>
function IsEmpty(Form){

	if((Form.username.value == '') || (Form.username.value.length < 2)) 
	{
		alert('Incorrect username or password');
		return false;
	}
	else if(Form.password.value == '' || Form.password.value.length < 6)
	{
		alert('Incorrect username or password');
		return false;
	}else {
		return true;
		}
}



</script>
<?php include ROOT . '/views/layouts/footer.php'; ?>

