<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rekenen</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style>
		html{
			height: 100%;
		}
		body {
			background: rgb(90,123,146);
			background: linear-gradient(0deg, rgba(90,123,146,1) 0%, rgba(0,12,97,1) 100%);
		}
	</style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../pages/index.php">Project Serious Games</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../pages/index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../pages/rekenen.php">Rekenen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/taal.php">Taal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../functions/login_functions.php?mode=logout">Log uit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Project Serious Games!</h1>
      <p class="lead">De leukste en leerzaamste spelletjes!</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4" style="cursor: pointer;">
        <div class="card h-100">
          <img class="card-img-top" src="../img/plus.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Plus sommen (+)</h4>
            <p class="card-text">Maak hier opdrachten met plus(+) sommen.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" style="cursor: pointer;">
        <div class="card h-100">
          <img class="card-img-top" src="../img/min.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Min sommen (-)</h4>
            <p class="card-text">Maak hier opdrachten met min(-) sommen.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" style="cursor: pointer;">
        <div class="card h-100">
          <img class="card-img-top" src="../img/keer.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Keer sommen(*)</h4>
            <p class="card-text">Maak hier opdrachten met keer(*) sommen.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" style="cursor: pointer;">
        <div class="card h-100">
          <img class="card-img-top" src="../img/deel.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Deel sommen(/)</h4>
            <p class="card-text">Maak hier opdrachten met deel(/) sommen.</p>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">XvY BV. &copy; Project Serious Games</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>