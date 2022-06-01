<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

     <!-- My Css -->
     <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">

     <title><?php echo $judul; ?></title>
  </head>
  <body id="home">
    
    <nav  class="navbar navbar-expand-lg fixed-top navbar-dark main-color ">
         <div class="container">
            <a class="navbar-brand" href="#home">Catering Mekar Jaya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="#home">HOME</a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MASTER DATA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url('admin/datauser'); ?>">DATA USER</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo base_url('admin/dataproduk'); ?>">DATA PRODUK</a></li>
            
            
          </ul>
        </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/tampilPesananAdmin');?>">PESANAN MASUK</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('auth/logout');?>">LOGOUT</a>
                
                </ul>
            </div>
        </div>
    </nav>