<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<!--navbar start-->
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">NAHIAN PORIBOHON</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
<!--navbar end-->

<!--carasol start -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img1.jpg" alt="Los Angeles" >
            </div>
            <div class="carousel-item">
                <img src="img.jpg" alt="Chicago" >
            </div>
            <div class="carousel-item">
                <img src="img2.jpg" alt="New York" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
<!--carasol end -->

<!--form-->
    <section class="my-5" id="int-1">
        <div class="py-5">
            <h3 class="text-center"> BOOKING YOUR TICKET NOW </h3>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="sel1" >From:</label>
                        <select class="form-control" id="sel1" >
                            <option>Choose an option below</option>
                            <option>Dhaka</option>
                            <option>Chittagong</option>
                            <option>Khulna</option>
                            <option>Sylhet</option>
                            <option>Barisal</option>
                            <option>Rongpur</option>
                            <option>Cox's Bazer</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="sel1" >To:</label>
                        <select class="form-control" id="sel1" >
                            <option>Choose an option below</option>
                            <option>Dhaka</option>
                            <option>Chittagong</option>
                            <option>Khulna</option>
                            <option>Sylhet</option>
                            <option>Barisal</option>
                            <option>Rongpur</option>
                            <option>Cox's Bazer</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="name">Deperture:</label>
                    <input type="date" name="user" placeholder="pick a date"  autocomlete="off" class="form-control">
                </div>
               
                <div class="form-group">
                    <label for="name">Arrival:</label>
                    <input type="date" name="user" placeholder="pick a date" autocomlete="off" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div>
    </section>
<!--form-->

<!--seat start-->
    <section class="" id="int-2">
        <div>
            <div>
                <h2>Chittagong to Khulna</h2>
                <span>
                    
                </span>
                <span>
                
                </span>
                <span>
                
                </span>
                <span>
                
                </span>
            </div>
        </div>
        <div>
            

        </div>
        <div>
            

        </div>
        <div>
            

        </div>
        <div>
            

        </div>

    </section>
<!--seat end-->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>