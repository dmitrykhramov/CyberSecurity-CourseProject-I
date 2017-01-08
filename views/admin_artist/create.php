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


            <h4>Add new artist</h4>

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

                        <p>Date of birth</p>
                        <input type="text" name="dateOfBirth" placeholder="yyyy-mm-dd" value="">
                        
                        <p>*Movies</p>
                        <select name="movieCode[]" id="dropMovie"multiple>
							<option value="select" selected>-- Please select --</option>
                            <?php if (is_array($movieList)): ?>
                                <?php foreach ($movieList as $movie): ?>
                                    <option value="<?php echo $movie['movieCode']; ?>">
                                        <?php echo $movie['title']; ?> 
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>
                        
                        <p>Nationality</p>
                        <input type="text" name="nationality" placeholder="" value="">

                        <p>Image</p>
                        <input type="file" name="artistImage" placeholder="" value="">

                        <p>Other info</p>
                        <textarea name="otherInfo" rows="8" cols="50"></textarea>

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

	var dropMovie = document.getElementById("dropMovie");

	if(Form.firstName.value == '') 
	{
		alert('First name is empty');
		return false;
	}else if(Form.lastName.value == '')
	{
		alert('Last name is empty');
		return false;
	}else if(dropMovie.value == "select")
	{
		alert('Choose movie');
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

