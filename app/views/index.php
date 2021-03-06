<!DOCTYPE html>
<html>
<head> 
        <title>Web Inventory Barang</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head> 
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>

    <div class="container">
        <div class="row justify-content-md">
            <div class="col-md-auto">
      
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <a class="navbar-brand" href="index.php?page=home">Sistem Inventory Barang</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=barang">Barang</a>
                        
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=supplier">Supplier</a>
                        
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=jenis">Jenis</a>
                        
                        </li>
                        
                        
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                    


                </nav>
            
            </div>
        </div>

        
            <div class="col-md-auto">
                <?php

                        if($_GET['page']=="barang" || $_GET['page']=='home'){
                            include ("list_barang.php");
                        }else if($_GET['page']=="add_barang"){
                            include ("add_barang.php");
                        }else if($_GET['page']=="supplier"){
                            include ("list_supplier.php");
                        }else if($_GET['page'] == "add_supplier"){
                            include ("add_supplier.php");
                        }else if($_GET['page'] == "jenis"){
                            include ("list_jenis.php");
                        }else if($_GET['page'] == "add_jenis"){
                            include ("add_jenis.php");
                        }
                ?>
            </div>

    </div>
</body>
</html>