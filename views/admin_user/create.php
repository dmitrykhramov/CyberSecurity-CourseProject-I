<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Administrator</a></li>
                    <li><a href="/admin/user">Control users</a></li>
                    <li class="active">Edit user</li>
                </ol>
            </div>


            <h4>Add new user</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data" onsubmit="return IsEmpty(this)">

                        <p>*First name</p>
                        <input type="text" name="firstName" placeholder="" value="">
                        
                        <p>*Last name</p>
                        <input type="text" name="lastName" placeholder="" value="">

                        <p>*User name</p>
                       <input type="text" name="username" placeholder="" value="">

                        <p>Password</p>
                        <input type="text" name="password" placeholder="" value="">
                        
                        <p>User type</p>
                        <select name="usertype">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function IsEmpty(Form){

	if(Form.firstName.value == '') 
	{
		alert('First name is empty');
		return false;
	}else if(Form.lastName.value == '')
	{
		alert('Last name is empty');
		return false;
	}else if(Form.username.value == '')
	{
		alert('User name is empty');
		return false;
	}else {
		var result = popup();
		
		if(result){
			
			return true;
		}
		else{
			
			return false;
		}
	}
}

function popup(){
	
    var x;
    if (confirm("Are you sure?") == true) {
        return true;
    } 
	else 
	{
        return false;
    }    
}

</script>


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

