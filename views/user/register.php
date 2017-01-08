<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>You are registered!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Register for website</h2>
                        <form action="#" method="post" onsubmit="return IsEmpty(this)">
                            <input type="text" name="firstName" placeholder="Firstname" value="<?php echo $firstName; ?>"/>
                            <input type="text" name="lastName" placeholder="Lastname" value="<?php echo $lastName; ?>"/>
                            <input type="text" name="userName" placeholder="Username" value="<?php echo $userName; ?>"/>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                            <input type="submit" name="submit" class="btn btn-default" value="Register" />
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
function IsEmpty(Form){

	if((Form.firstName.value == '') || (Form.firstName.value.length < 2)) 
	{
		alert('Firstname should not be less than 2 characters');
		return false;
	}
        else if((Form.lastName.value == '') || (Form.lastName.value.length < 2)) 
	{
		alert('Lastname should not be less than 2 characters');
		return false;
	}
        else if((Form.userName.value == '') || (Form.userName.value.length < 2)) 
	{
		alert('Username should not be less than 2 characters');
		return false;
	}
	else if(Form.password.value == '' || Form.password.value.length < 6)
	{
		alert('Password should be at least 6 characters');
		return false;
	}else {
		return true;
		}
}



</script>

<?php include ROOT . '/views/layouts/footer.php'; ?>