<?php include '../server/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <div class="nav-toggle">
      <i class="bi bi-list bars" id="bars"></i>
    </div>

    <div class="container-fluid" id="menu">
      <div class="vertical-nav"> <!--sidebar-->
        <div class="row d-flex justify-content-center">
          <div class="col-md-11">
            <div class="profile">
              <div class="row">
                <div class="col-md-5">
                  <img
                    src="../Back-end/imagess/scene.jpg"
                    alt=""
                    class="img-fluid rounded-circle"
                    width="100"
                    height="100"
                  />
                </div>
                <div class="col-md-5">
                  <p class="admin">
                    Admin <br />
                    9123456789 <br />
                    admin@gmail.com
                    <a href="#" style="color: orangered">Update</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-11">
            <ul class="options">
              <li class="category">
                <a href="#"><i class="bi bi-person" id="jio"></i>Profile</a>
              </li>
              <li class="category">
                <a href="actions.php"><i class="bi bi-bag-dash" id="jio"></i>dashboard</a>
              </li>
              <li class="category">
                <a href="insertfiles.php"
                  ><i class="bi bi-chat-left-heart" id="jio"></i>Insert</a
                >
              </li>
             
              <li class="category">
                <a href="../front-end/home.php"
                  ><i class="bi bi-person-plus-fill" id="jio"></i>Visit Site</a
                >
              </li>
              <li class="category">
                <a href="../front-end/home.php"
                  ><i class="bi bi-person-plus-fill" id="jio"></i>Social Media</a>
              </li>
              <li class="category">
                <a href="#"><i class="bi bi-snow3" id="jio"></i>log out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container" id="content">
      <div class="row">
        <div class="col-md-6">
          <p class="texts">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum
            ad distinctio nostrum id odit itaque necessitatibus mollitia,
            molestias laboriosam animi voluptate enim, nesciunt maiores unde,
            tenetur laudantium! Reiciendis deleniti cum atque facere explicabo
            quae, tempora error blanditiis consequatur labore eaque odit
            repellat eveniet, sed nobis commodi magnam cupiditate aliquid
            quidem.
          </p>
        </div>
        <div class="col-md-6">
          <p class="texts">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum
            ad distinctio nostrum id odit itaque necessitatibus mollitia,
            molestias laboriosam animi voluptate enim, nesciunt maiores unde,
            tenetur laudantium! Reiciendis deleniti cum atque facere explicabo
            quae, tempora error blanditiis consequatur labore eaque odit
            repellat eveniet, sed nobis commodi magnam cupiditate aliquid
            quidem.
          </p>
        </div>
      </div>
    </div> -->

    <!--JS-->
    <script>
      let bars = document.querySelector(".nav-toggle");
      let menu = document.querySelector(".vertical-nav");
      bars.addEventListener("click", function () {
        if (bars.firstElementChild.classList.contains("bi-list")) {
          bars.firstElementChild.classList.replace("bi-list", "bi-hash");
          menu.classList.replace("vertical-nav","show-vertical-nav");
        } else {
          bars.firstElementChild.classList.replace("bi-hash", "bi-list");
          menu.classList.replace("show-vertical-nav","vertical-nav");
        }
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
