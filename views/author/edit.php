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
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Sửa tác giả</h3>
    <hr>

    <form action="?mod=author&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$author['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?=$author['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password" value="<?=$author['password'] ?>">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" id="" placeholder="" name="status" value="<?=$author['status'] ?>">
            </div>
            <input type="hidden" name="id" value="<?=$author['id'] ?>">
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
    </form>
</body>
</html>
