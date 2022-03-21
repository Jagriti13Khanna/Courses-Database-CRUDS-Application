<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/reset.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">   
</head>
<body class="<?php echo $body_class; ?>">
    <header>
        <!-- <h1><?php echo $page_heading ; ?></h1> -->
        <nav>
            <ul>
                <li>Engineering Design Technology</li>
            </ul>
            <ul>
                <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>list.php">Courses List</a></li>
                <li><a href="<?php echo BASE_URL; ?>search.php">Search Courses</a></li>
                <li><a href="<?php echo BASE_URL; ?>admin/insert.php">Insert Courses</a></li>
                <li><a href="<?php echo BASE_URL; ?>admin/edit.php">Edit Courses</a></li>
                <li><a href="<?php echo BASE_URL; ?>admin/delete.php">Delete Courses</a></li>
            </ul>
        </nav>
    </header>
    