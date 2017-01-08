<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Administrator</a></li>
                    <li class="active">Control artist</li>
                </ol>
            </div>

            <a href="/admin/artist/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add artist</a>
            
            <h4>Artist list</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ArtistId</th>
                    <th>Date of birth</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($artistList as $artist): ?>
                    <tr>
                        <td><?php echo $artist['artistId']; ?></td>
                        <td><?php echo $artist['dateOfBirth']; ?></td>
                        <td>
                            <a href="/artist/<?php echo $artist['artistId'];?>">
                            <?php echo $artist['firstName']; ?> 
                            </a>
                        </td>
                        <td>
                            <a href="/artist/<?php echo $artist['artistId'];?>">
                            <?php echo $artist['lastName']; ?> 
                            </a>
                        </td>

                        
                        <td><a href="/admin/artist/update/<?php echo $artist['artistId']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/artist/delete/<?php echo $artist['artistId']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>



