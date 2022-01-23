<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Education</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">Authors</h2>
        <a href="?mod=author&act=add" class="btn btn-primary">Add</a>
        <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row) {?>
              <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                    <a href="?mod=author&act=detail&id=<?= $row['id'] ?>" class="btn btn-success">Detail</a>
                     <a href="?mod=author&act=edit&id=<?= $row['id'] ?>" class="btn btn-warning">Update</a>
                    <a href="?mod=author&act=delete&id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
            <?php }
            ?>
            </tbody>
          </table>
    </div>
</body>
</html>
