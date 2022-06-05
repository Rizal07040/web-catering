<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

     <!-- My Css -->
     <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     
     <title><?php echo $judul; ?></title>
  </head>
  <body id="home">
    
    <nav  class="navbar navbar-expand-lg fixed-top navbar-dark main-color shadow p-3 mb-5 ">
         <div class="container">
            <a class="navbar-brand" href="<?= base_url('home/index');?>">Catering Mekar Jaya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
              
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href=" <?= base_url('user/index');?> ">MENU</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user/tampil_pesanan');?>">PESANAN</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">KONTAK KAMI</a>
                    </li>
                    
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout');?>">LOGOUT</a>
                
                </ul>
            </div>
        </div>
    </nav>