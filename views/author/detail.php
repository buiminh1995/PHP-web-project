
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Education And Technology Group</h3>
    <h3 align="center">Chi tiết tác giả</h3>
    <ul>
        <li><strong>ID</strong>: <?= $author['id'] ?></li>
        <li><strong>Name</strong>: <?= $author['name'] ?></li>
        <li><strong>Email</strong>: <?= $author['email'] ?></li>
        <li><strong>Password</strong>: <?= $author['password'] ?></li>
        <li><strong>Status</strong>: <?= $author['status'] ?></li>
    </ul>
</body>
</html>
