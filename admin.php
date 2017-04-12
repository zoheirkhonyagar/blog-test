<?php
include 'config.php';
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getSiteName();?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="admin">
<div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#addPost" aria-controls="addPost" role="tab" data-toggle="tab">افزودن مطلب</a></li>
        <li role="presentation"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">فهرست مطالب</a></li>
        <li role="presentation"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">دسته بندی ها</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">تنظیمات اصلی</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="addPost">...</div>
        <div role="tabpanel" class="tab-pane fade" id="posts">...</div>
        <div role="tabpanel" class="tab-pane fade" id="categories">...</div>
        <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
    </div>

</div>






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>