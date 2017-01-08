<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Administrator</a></li>
                    <li><a href="/admin/movie">Control movies</a></li>
                    <li class="active">Edit movie</li>
                </ol>
            </div>


            <h4>Add new movie</h4>

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

                        <p>*Movie title</p>
                        <input type="text" name="title" placeholder="" value="">

                        <p>*Category</p>
                        <select name="catID" id="dropCat">
                            <?php if (is_array($categoriesList)): ?>
							<option value="select" selected>-- Please select --</option>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['catId']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>
                        
                        <p>*Artists</p>
                        <select name="artistId[]" id="dropArt" multiple>
							<option value="select" selected>-- Please select --</option>
                            <?php if (is_array($artistList)): ?>
                                <?php foreach ($artistList as $artist): ?>
                                    <option value="<?php echo $artist['artistId']; ?>">
                                        <?php echo $artist['firstName']; ?> <?php echo $artist['lastName']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Year</p>
                        <input type="text" name="year" placeholder="" value="">

                        <p>Image</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Movie description</p>
                        <textarea name="movieDesc" rows="8" cols="50"></textarea>

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

	var dropCat = document.getElementById("dropCat");
	var dropArt = document.getElementById("dropArt");
	if(Form.title.value == '') 
	{
		alert('Title is empty');
		return false;
	}else if(dropCat.value == "select")
	{
		alert('Category is empty');
		return false;
	}else if(dropArt.value == "select")
	{
		alert('Choose artists');
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

