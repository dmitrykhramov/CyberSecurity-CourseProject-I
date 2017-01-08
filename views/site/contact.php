<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Message sent! We will respond to the specified email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Feedback</h2>
                        <h5>Have a question? Write to us!</h5>
                        <br/>
                        <form name="Form" action="#" method="post" onsubmit="return ValidateEmail(this)">
							<input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
                            <p>Your mail</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"  />
                            <p>Subject</p>
                            <input type="text" name="Subject" placeholder="Subject" value="<?php echo $subject; ?>" />
                            <p>Message</p>
                            <textarea name="userText" rows="8" cols="50" placeholder="Message" value="<?php echo $userText; ?>"  /></textarea> <br>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Send" />
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
function ValidateEmail(Form){  

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	var mail=Form.userEmail.value;
	var result=IsEmpty(Form);
	
	
	if(result)
	{
		if(mail.match(mailformat))  
		{    
			return true;  
		}  
		else  
		{  
			alert("You have entered an invalid email address!");  
			return false;  
		}  
	}
	return false;
}


function IsEmpty(Form){

	if(Form.userEmail.value == '') 
	{
		alert('Field is empty');
		return false;
	}
	else if(Form.Subject.value == ''){
		
		alert('Field is empty');
		return false;
	}
	else if(Form.userText.value == ''){
		
		alert('Field is empty');
		return false;
	}
	else
	{
		return true;
	}
}
</script>




<?php include ROOT . '/views/layouts/footer.php'; ?>