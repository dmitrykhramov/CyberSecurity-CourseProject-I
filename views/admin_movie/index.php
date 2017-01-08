<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Administrator</a></li>
                    <li class="active">Control movies</li>
                </ol>
            </div>

            <a href="/admin/movie/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add movie</a>
            
            <h4>Movie list</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>Movie code</th>
                    <th>Year</th>
                    <th>Movie title</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($movieList as $movie): ?>
                    <tr>
                        <td><?php echo $movie['movieCode']; ?></td>
                        <td><?php echo $movie['year']; ?></td>
                        <td>
                            <a href="/movie/<?php echo $movie['movieCode'];?>">
                            <?php echo $movie['title']; ?>
                            </a>
                        </td>

                        
                        <td><a href="/admin/movie/update/<?php echo $movie['movieCode']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/movie/delete/<?php echo $movie['movieCode']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>



