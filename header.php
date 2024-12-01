<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIS 4013 Homework 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--SweetAlert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Moment.js-->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.30.1/moment.min.js"></script>
    <!--Typed.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Particles.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" integrity="sha512-Kef5sc7gfTacR7TZKelcrRs15ipf7+t+n7Zh6mKNJbmW+/RRdCW9nwfLn4YX0s2nO6Kv5Y2ChqgIakaC6PW09A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts.js" defer></script>
  </head>
  <body>
    <div class="d-flex justify-content-center">
        <h1 class="position-relative px-4" >MIS 4013 Homework 6</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light mx-4 border border-dark rounded-pill">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cindy Le</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($current_page == 'sweetalert2.php') ? 'active' : ''; ?>" href="sweetalert2.php">SweetAlert2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($current_page == 'momentjs.php') ? 'active' : ''; ?>" href="/momentjs.php">Moment.js</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($current_page == 'typedjs.php') ? 'active' : ''; ?>" href="/typedjs.php">Typed.js</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($current_page == 'particlejs.php') ? 'active' : ''; ?>" href="/particlejs.php">Particles.js</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>