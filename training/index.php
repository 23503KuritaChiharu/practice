<?php
    echo 'Hello World!';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>記録帳</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="css/index.css?<?php echo date('Ymd-His'); ?>">
    </head>

    <body>
        <div class="position-absolute h-100 w-100 m-0 d-flex align-items-center justify-content-center">
            <div class="btn">
                <a href="#" class="btn btn-info btn-lg btn-block" role="button">記録する</a>
                <a href="#" class="btn btn-info btn-lg btn-block mt-3" role="button">記録をみる</a>
            </div>
        </div>
    </body>
</html>