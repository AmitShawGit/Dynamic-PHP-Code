<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
     
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="insert.css">
</head>
<body>
    <?php include 'dashboard.php' ?>
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <section class="insert-product">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="productimg">Image </label>
                        <input type="file" name="image" id="productimg" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="producthead"> Product Name </label>
                        <input type="text" name="pname" id="producthead" class="form-control">
                  
                </div>
                <div class="form-group">
                    <label for="productsd">About the product</label>
                        <input type="text" name="pdesc" id="productsd" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="productprice">Price</label>
                        <input type="text" name="mrp" id="productprice" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" id="pquantity" class="form-control">
                    
                </div>
    
                <br><br><br> 
                <center><input type="submit" class="btn btn-success" name="submit" value="insert"></center>
            </form>
         </section>
            </div>
           
           
            <div class="col-md-6"> 
                <section class="display-product">
                <div class="preview">
                   <center> <img  alt="" class="img-fluid" id="previewimg"></center>
                    <p id="phead"></p>
                    <p id="prosd"></p>
                    <p id="mrp"></p>
                    <p id="quan"></p>
                </div>
                
            </section>
            </div>
        </div>

    </div>
    


     <script>
        let productimg = document.getElementById("productimg");
        let previewimg = document.getElementById("previewimg");
        productimg.addEventListener("change", (event)=>{
        if(event.target.files.length == 0){
            return;
        }
        let tempurl = URL.createObjectURL(event.target.files[0]);
        previewimg.setAttribute("src",tempurl);
    })

     let producthead = document.getElementById('producthead');   
     producthead.addEventListener('input', function(){
       var pheads = this.value;
       document.getElementById('phead').innerHTML = pheads;
     })

    
  let productsd = document.getElementById('productsd');
   productsd.addEventListener('input', function(){
      var prsd = this.value;
      document.getElementById('prosd').innerHTML = prsd ;
   })

   let productprice = document.getElementById('productprice');
   productprice.addEventListener('input', function(){
    let priceOFProduct = this.value;
    document.getElementById('mrp').innerHTML= priceOFProduct;

   })
   let pquantity = document.getElementById('pquantity');
   pquantity.addEventListener('input', function(){
    let quantityOFProduct = this.value;
    document.getElementById('quan').innerHTML= quantityOFProduct;

   })
    </script> 
</body>
</html>

<?php include '../server/connection.php'; 
if(isset($_POST['submit'])){

    $pimage =  $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "imagess/".$pimage;
    $image_move = move_uploaded_file($tempname, $folder);

    $pname = mysqli_real_escape_string($con , $_POST['pname']);
    $pdesc = mysqli_real_escape_string($con , $_POST['pdesc']);
    $mrp = mysqli_real_escape_string($con , $_POST['mrp']);
    $quantity = mysqli_real_escape_string($con , $_POST['quantity']);
      
     $insertquery = " insert into product(image, pname, pdesc, mrp, quantity) value('$pimage', '$pname', '$pdesc', '$mrp', '$quantity') ";
     $query = mysqli_query($con,$insertquery);
     ?>
     <script>
     if($query){
        alert ('Data Inserted Successfully :)');
     }
     else{
        alert (" Failed to insert :(");
     }
     </script>
<?php
}
?>

