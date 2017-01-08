<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Administrator</a></li>
                    <li><a href="/admin/artist">Control artists</a></li>
                    <li class="active">Edit artist</li>
                </ol>
            </div>


            <h4>Edit artist #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data" onsubmit="return IsEmpty(this)">

                        <p>*First name</p>
                        <input type="text" name="firstName" placeholder="" value="<?php echo $artist['firstName']; ?>">
                        
                        <p>*Last name</p>
                        <input type="text" name="lastName" placeholder="" value="<?php echo $artist['lastName']; ?>">

                        <p>Date of birth</p>
                        <input type="text" name="dateOfBirth" placeholder="" value="<?php echo $artist['dateOfBirth']; ?>">
                        
                        <p>Nationality</p>
                        <input type="text" name="nationality" placeholder="" value="<?php echo $artist['nationality']; ?>">

                        <p>Image</p>
                        <img src="<?php echo Movie::getImage($artist['artistId']); ?>" width="200" alt="" />
                        <input type="file" name="artistImage" placeholder="" value="<?php echo $artist['image']; ?>">

                        <p>Other info</p>
                        <textarea name="otherInfo" rows="8" cols="50"><?php echo $artist['otherInfo']; ?></textarea>
                        
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


