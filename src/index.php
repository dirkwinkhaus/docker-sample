<?php
$pdo = new PDO('mysql:host=docker-mariadb.local', 'docker', 'sample');

$statement = $pdo->prepare("show databases");
$statement->execute();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Docker Sample</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
          rel='stylesheet'
          type='text/css'>

</head>
<body>
<header>
    <div class="row">
        <div class="medium-12 columns text-center">
            <h1>Docker Sample Configuration</h1>
        </div>
    </div>

    <br>
    <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
    </div>
</header>
<br>
<div class="row">
    <div class="medium-8 columns">
        <strong>Databases:</strong>
        <ul>
        <?php
        while ($row = $statement->fetch()) {
            echo '<li>' . $row['Database'] . '</li>';
        }
        ?>
        <ul>
    </div>
    <div class="medium-4 columns">
        <strong>Answering IP:</strong><br>
        <?= $_SERVER['SERVER_ADDR']; ?>
    </div>
</div>
<hr>
<div class="row column">
    <h4 style="margin: 0;" class="text-center">Running Container</h4>
</div>
<hr>

<div class="row small-up-3 medium-up-4 large-up-5">
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        nginx
        load balancer
        linked to web server 1 and 2
    </div>
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        nginx
        web server 1
        linked to php-fpm
    </div>
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        nginx
        web server 2
        linked to php-fpm
    </div>
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        php-fpm
        linked to mariadb
    </div>
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        mariadb
        sample connection
    </div>
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        rabbitmq
    </div>
    <div class="column" style="border-bottom: 1px solid silver; min-height: 80px;">
        redis
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>



