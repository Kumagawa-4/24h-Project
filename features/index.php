<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Features · Bootstrap v5.2</title>
    <script src="../fontawesome-free-5.15.4-web/js/all.js"></script>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/js/all.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/features/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">
  </head>
  <body>
<main>
<th><input type="text" name="recher" id=""placeholder="Recherche sur facebook"></li></th>
  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom"></h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <?php for ($i=0; $i < 10; $i++) { ?>
  <div class="col">
  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href="../in.php">Title</h2></a>
      <ul class="d-flex list-unstyled mt-auto">
        <li class="me-auto">
        </li>
        <li class="d-flex align-items-center me-3">
          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
        </li>
        <li class="d-flex align-items-center">
          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
        </li>
      </ul>
    </div>
  </div>
</div>  
<?php    } ?>
    
    



</main>



      
  </body>
</html>
