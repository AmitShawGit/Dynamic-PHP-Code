<?php include '../server/connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <?php include 'links.php' ?> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container">
        <div class="shoppingdabba">
            <h3>Buy Toys</h3>
            <div class='row justify-content-around'>
            <?php
             $selectquery = " select * from product ";
             $query = mysqli_query($con, $selectquery);
             while($res = mysqli_fetch_assoc($query)){
                $image = $res['image'];
                $pname = $res['pname'];
                $pdesc = $res['pdesc'];
                $mrp = $res['mrp'];
                $quantity = $res['quantity'];

                 echo "
                 
                 <div class= 'col-md-4 mb-2'>
                 <a href='red.html'>
                    <div class='card' >
                        <img src='../Back-end/imagess/$image' class='img-fluid card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$pname</h5>
                            <p class='card-text'>$pdesc</p>
                            <p class='card-text'>Price: $mrp</p>
                            <a href='buy.html' class='btn btn-success' onclick = 'buy()' >Buy Now</a>
                            <a href='#' class='btn btn-primary'>Add to cart</a>
                        </div>
                    </div>
                </a>
                </div>
                
                ";
             }
             ?>
             </div>
            <!-- <div class="row justify-content-around"> -->
                <!-- <div class="col-md-4">
<a href="red.html">
                    <div class="card" >
                        <img src="../Back-end/imagess/" class="img-fluid card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="buy.html" class="btn btn-success" onclick = "buy()" >Buy Now</a>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </a>

                </div>
                <div class="col-md-4">
<a href="blue.html">
                    <div class="card" >
                        <img src="../images/blue.png" class="img-fluid card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blue Tarzan</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                                <a href="#" class="btn btn-success">Buy Now</a>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-4">
<a href="lal.html">
                    <div class="card" >
                        <img src="../images/lal.png"class="img-fluid card-img-top" alt="...">
                        <div  class="card-body">
                            <h5 class="card-title">Red Ranger</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                                <a href="#" class="btn btn-success">Buy Now</a>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
</a>
                </div>
            </div> -->
            
        </div>
    </div>
</body>

</html>