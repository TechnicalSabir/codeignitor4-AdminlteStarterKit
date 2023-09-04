<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('adminlte/img/adminlte_logo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('adminlte/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/toastr/toastr.min.css') ?>">
    <title>AdminLTE 3 | Dashboard</title>
</head>

<body class="sidebar-mini layout-fixed">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?= base_url("adminlte/img/adminlte_logo.png") ?>" alt="AdminLTELogo" height="60" width="60">
    </div>
    <?php
    require_once __DIR__ . "/navbar.php";
    require_once __DIR__ . "/sidebar.php";
    ?>