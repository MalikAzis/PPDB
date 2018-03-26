<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>PPDB</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row header">
          <div class="col-md-6 col-sm-6 banner">
            <img src="http://pmb.unik-kediri.ac.id/wp-content/uploads/2015/07/LOGO-PPMB1.png" alt="">
          </div>

          <nav class="col-md-6 col-sm-6 navbar navbar-expand-sm" style="float:right;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="link" href="register">Form Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="link" href="#">Pengumuman</a>
              </li>
            </ul>
          </nav>
        </div>

      <hr>

          @yield('content')
    </div>
    <footer class="page-footer font-small unique-color-dark pt-0">
      <div class="footer-copyright py-3 text-center" style="color:white; background-color:rgb(22, 134, 186);">
        © 2018 Copyright: PMB UNIK. All Rights Reserved
    </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBc58HYaz5ugAbd-1KTJWc3w71PEJ0NeTw&callback=initMap">
    </script>
    </body>
    </html>
