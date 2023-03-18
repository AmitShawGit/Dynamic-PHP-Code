<!DOCTYPE html>
<html lang="en">
    <?php include 'links.php' ?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <section class="productDetails">
    <div class="col-md-4">
    <form action="">
       <div class="form-group">
        <label for="productimg">Product Image :</label>
        <input type="file" name="productimg" id="productimg" accept="image/jpg, image/png" >
       </div>
       <div class="form-group">
        <label for="productmrp">Product Mrp</label>
        <input type="number" name="productmrp" id="productmrp" >
       </div>
       <div class="form-group">
        <label for="productdesc">Product desc</label>
        <input type="textarea" name="productdesc" id="productdesc" >
       </div>
    </form>
</section>
</div>
<section class="uploadedfile">
    <img src="" alt="" class="img-fluid">
    <img src="" alt=""class="img-fluid">
    <p class="pdescrip"></p>
</section>
<section class="displayProduct">
<div class="col-md-4">
<img id="imagess" alt="" class="img-fluid">
<p class="mrp" id="mrp"></p>
<p class="description" id="desc"></p>
</div>
</section>
</div>
<script>
    let productimg = document.getElementById("productimg");
    let preimg = document.getElementById("imagess");
    productimg.addEventListener("change", (event)=>{
     if(event.target.files.length == 0){
        return;
     }
     let tempurl = URL.createObjectURL(event.target.files[0]);
     preimg.setAttribute("src",tempurl);
    })
    

    let productmrp = document.getElementById('productmrp');
    productmrp.addEventListener('input',function(){
        var promrp = this.value;
        document.getElementById('mrp').innerHTML = promrp;
    })

   
     let pdesc = document.getElementById('productdesc');
     pdesc.addEventListener('input', function(){
        var prdesc = this.value;
        document.getElementById('desc').innerHTML = prdesc ;
     })

</script>
</body>
</html>