<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transparent Container with Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for transparent container */
    .transparent-container {
      background-color: rgba(255, 255, 255, 0.5); /* Adjust the last value (0.5) for transparency */
      padding: 10px 20px;
      border-radius: 10px;
    }
    .transparent-container:hover {
      background-color: rgba(255, 255, 255, 0.8); /* Adjust the last value (0.8) for hover transparency */
    }
    .nav-link {
      font-size: 18px;
      font-weight: bold;
      color: black;
      transition: all 0.3s ease-in-out;
    }
    .nav-link:hover {
      color: red;
    }
  </style>
</head>
<body>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="transparent-container">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#">Excavator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Loader</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bulldozer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
