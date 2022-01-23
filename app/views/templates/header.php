<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/dashboard.css">
    <style>
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
      .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
      }

      @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
      }
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inventory Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/Barang">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/jenis">Jenis</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/supplier">Supplier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/login">Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
