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
        <div role="tabpanel" class="tab-pane fade in active" id="addPost">
            <form class="form-horizontal" method="get">
                <input type="hidden" name="type" value="post">
                <div class="form-group">
                    <label class="col-md-2 mylabel" for="post-title">عنوان پست :</label>
                    <div class="col-md-5 col-md-pull-1">
                        <input type="text" class="form-control" id="post-title" name="title" placeholder="عنوان پست">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 mylabel" for="textarea">متن طولانی :</label>
                    <div class="col-md-5 col-md-pull-1">
                        <textarea class="form-control" id="textarea" name="text" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> طراحی سایت
                        </label>
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1"> طراحی سایت
                        </label>
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option1"> طراحی سایت
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        <button type="submit" class="btn btn-default">ارسال</button>
                    </div>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="posts">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>شناسه</th>
                    <th>عنوان پست</th>
                    <th>نویسنده</th>
                    <th>لینک</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>متن اول</td>
                    <td>نام نویسنده</td>
                    <td>
                        <a title="لینک" type="button" class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>
                        <a title="ویرایش" type="button" class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a title="حذف" type="button" class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="categories">
            <form class="form-inline" method="get">
                <input type="hidden" name="type" value="categories">
                <div class="form-group">
                    <label class="mylabel" for="post-title">افزودن دسته بندی :</label>
                    <input type="text" class="form-control" id="post-title" name="title" placeholder="نام دسته بندی">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">افزودن</button>
                </div>
            </form>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>شناسه</th>
                    <th>عنوان دسته بندی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>متن اول</td>
                    <td>
                        <a title="ویرایش" type="button" class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a title="حذف" type="button" class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="settings">
            <form class="form-horizontal" method="get">
                <input type="hidden" name="type" value="setting">
                <div class="form-group">
                    <label class="col-md-2 mylabel" for="website-name">نام وبسایت :</label>
                    <div class="col-md-5 col-md-pull-1">
                        <input type="text" class="form-control" id="website-name" name="sitename" placeholder="نام وبسایت">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 mylabel" for="author">نام نویسنده :</label>
                    <div class="col-md-5 col-md-pull-1">
                        <input type="text" class="form-control" id="author" name="author" placeholder="نام نویسنده">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 mylabel" for="copyright">متن کپی رایت :</label>
                    <div class="col-md-5 col-md-pull-1">
                        <input type="text" class="form-control" id="copyright" name="copyright" placeholder="متن کپی رایت">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        <button type="submit" class="btn btn-default">ارسال</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>