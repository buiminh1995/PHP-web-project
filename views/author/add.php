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
    <h3 align="center">Thêm tác giả</h3>
    <hr>

    <form action="?mod=author&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" id="" placeholder="" name="status">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
    </form>
</body>
</html>
