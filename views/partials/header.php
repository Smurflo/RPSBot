<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="LGiZH7XNBIS_Z7qJywaGuLULCYx6C1NvkpX0LoY_ryI" />

    <title>Base Template</title>
    <?php /* Stylesheets here */ ?>
    <link href="<?=$baseUrl . '/assets/images/favicon.ico'?>" rel="icon">
    <link href="<?=$baseUrl . '/assets/css/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/bootstrap-theme.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/jquery-ui-autocomplete.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/style.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/dashboard.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/bootstrap-timepicker.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/bootstrap-datepicker.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?=$baseUrl . '/assets/css/spacing.css'; ?>" rel="stylesheet" type="text/css">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo($baseUrl . '/assets/js/ie8-responsive-file-warning.js'); ?>"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php include 'navbar.php'; ?>