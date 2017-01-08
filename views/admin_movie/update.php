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


            <h4>Edit movie #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data" onsubmit="return IsEmpty(this)">

                        <p>*Movie title</p>
                        <input type="text" name="title" placeholder="" value="<?php echo $movie['title']; ?>">

                        <p>*Category</p>
                        <select name="catID" id="dropCat">
							<option value="select" selected>-- Please select --</option>
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['catId']; ?>" 
                                        <?php if ($movie['catID'] == $category['catId']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>
                        
                        <p>*Artists</p>
                        <select name="artistId[]" id="dropArt" multiple>
							<option value="select" selected>-- Please select --</option>
                            <?php if (is_array($roleList)): ?>
                                <?php foreach ($roleList as $role): ?>
                                    <option value="<?php echo $role['artistId']; ?>"
                                            <?php if ($movie['movieCode'] == $role['movieCode']) echo ' selected="selected"'; ?>>
                                        <?php echo $role['firstName']; ?> <?php echo $role['lastName']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Year</p>
                        <input type="text" name="year" placeholder="" value="<?php echo $movie['year']; ?>">

                        <p>Image</p>
                        <img src="<?php echo Movie::getImage($movie['movieCode']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $movie['image']; ?>">

                        <p>Movie description</p>
                        <textarea name="movieDesc" rows="8" cols="50"><?php echo $movie['movieDesc']; ?></textarea>
                        
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


