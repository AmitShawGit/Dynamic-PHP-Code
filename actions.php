<?php include '../server/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script>
      <style>
        body{
          background-color: rgb(163, 211, 252);
        }
        .heading th{
          text-align: center;
        }
        td{
          text-align: center;
          border: 1px solid rgb(123, 123, 123);
        }
        .heading{
          background-color: green;
          color: white;
        }
        .content{
          background-color: pink;
          color: black;
          font-weight: 600;
        }
        .update{
          color:blue;
        }
        .trash{
          color:red;
        }
      </style>
</head>
<body>
  <?php include 'dashboard.php' ?>
    <div class="container-fluid">
        <table class="table">
            <thead class="heading">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Product Name</th>
                <th scope="col">MRP</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th colspan="3">Action</th>
              </tr>
            </thead>
            <tbody class="content">
              <?php
              $selectquery = " select * from product ";
              $query = mysqli_query($con, $selectquery);
              while($res = mysqli_fetch_assoc($query)){
              ?>
              <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['pname']; ?></td>
  
                
                <td><?php echo $res['mrp']; ?></td>
                <td><?php echo $res['quantity']; ?></td>
                <td><img src="imagess/<?php echo $res['image']; ?>" alt="" class="img-fluid" width="40"></td>
                <td>
                  <!-- Active -->
                   <?php 
                   if($res['status']==1){
                    echo '<p> <a href="active.php?id='.$res['id'].'&status=0" class="btn btn-success">Active</a></p>';
                   }else{
                    echo '<p> <a href="active.php?id='.$res['id'].'&status=1" class="btn btn-danger">Deactive</a></p>';
                   }
                   ?>
                </td>
                <td><a href="updating.php?id=<?php echo $res['id']; ?>"><i class="bi bi-pencil-square update"></i></a></td>
                <td><a href="dilited.php?id=<?php echo $res['id']; ?>"><i class="bi bi-trash-fill trash"></i></a></td>
                <td><a href="insertfiles.php" class="btn btn-info">Add New</a></td>
              </tr>
             <?php
              }
              ?>
            </tbody>
          </table>
    </div>
    
</body>
</html>
