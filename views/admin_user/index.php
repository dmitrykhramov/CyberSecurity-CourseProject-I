<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Administrator</a></li>
                    <li class="active">Control users</li>
                </ol>
            </div>

            <a href="/admin/user/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add user</a>
            
            <h4>User list</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>UserId</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>username</th>
                    <th>password</th>
                    <th>usertype</th>
                    <th></th>
                </tr>
                <?php foreach ($userList as $user): ?>
                    <tr>
                        <td><?php echo $user['userId']; ?></td>
                        <td><?php echo $user['firstName']; ?></td>
                        <td><?php echo $user['lastName']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><?php echo $user['usertype']; ?></td>
                        <td><a href="/admin/user/delete/<?php echo $user['userId']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>



