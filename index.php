<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-4">
        <form action="/form.php" method="POST" enctype="multipart/form-data">
        <legend>Form Title</legend>
            <div class="form-group">
                <label for="userfile"></label>
                <input type="file" class="form-control" name="userfile" id="userfile" placeholder="Input...">
            </div>

            <img src="/uploads/162145950.jpg" alt="">
<button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>
