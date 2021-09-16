<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- attached php links -->
  <?php include 'links/link.php'; ?>
  <!-- attached php style -->
  <?php include 'css/style.php'; ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg  nav_style p-3">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <!-- three lining button when we go for inspect or responsive -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- for margin left auto (home,link all comes the right side) -->
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">preventions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>

      </ul>
    </div>
  </nav>
  <!-- ********************************** Grid system************************************* -->
  <div class="main_header">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside">
          <img src="images/corona1.png" width="300" height="300" >
        </div>
        <!--order 2 meanns in mobile phone -->
      </div>
      <div class="row">
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="rightside">
            <h1>Let's Stay Safe & fight Togethor Against Cor<span> <img src=""> Virus</h1>
          </div>
        </div>
      </div>
    </div>
</body>

</html>