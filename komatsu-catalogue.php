<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komatsu Catalogue</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section class="navbar">

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="text-danger font-weight-bold">IRON</span>GIANT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link" >Log In / Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                <img src="assets/komatsu_catalogue/komatsu.png" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="text-center">
        <p class="fs-4">
            Komatsu, established in 1921 in Japan's Komatsu city, is a renowned multinational corporation. Specializing in heavy equipment
        </p>
        <p class="fs-4">It specializes in manufacturing heavy equipment for sectors such as construction, mining, forestry, and agriculture.
        </p>
        <p class="fs-4">With over a century of experience, Komatsu is renowned globally for its commitment to innovation and excellence. Embracing the motto "Forward Together to Sustainable Growth," 
        Komatsu strives to develop cutting-edge products and foster sustainable practices across industries.
        </p>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="transparent-container text-center">
                <div class="menu-item" >
                    <button  onclick="excavator_button()">Excavator</button>
                </div>
                <div class="menu-item">
                    <button  onclick="loader_button()">Loader</button>
                </div>
                <div class="menu-item">
                    <button onclick="bulldozer_button()">Bulldozer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Excavator Section -->
    <div class="container mt-5" id="excavator-list" style="display: none;" >
        <div class="row justify-content-center">
            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page1.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/excavator/Komatsu PC2000-11 Hydraulic Excavator.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu PC2000-11 Hydraulic Excavator </h5>
                            <p class="card-text">The Komatsu PC2000-11 is a high-performance hydraulic excavator designed for large-scale mining and quarrying operations.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page2.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/excavator/Komatsu PC4000-11 Hydraulic Excavator.png" class="card-img-top" alt="Komatsu-PC4000-11-Hydraulic-Excavator-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu PC4000-11 Hydraulic Excavator</h5>
                            <p class="card-text">The Komatsu PC4000-11 is an ultra-large hydraulic excavator engineered for heavy-duty mining and earthmoving tasks. </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page3.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/excavator/Komatsu PC1250-11 Hydraulic Excavator.png" class="card-img-top" alt="Komatsu-PC1250-11-Hydraulic-Excavator-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu PC1250-11 Hydraulic Excavator</h5>
                            <p class="card-text">The Komatsu PC1250-11 is a versatile hydraulic excavator suitable for a wide range of applications, including construction, quarrying, and material handling.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page4.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/excavator/Komatsu PC210LCi-11.png" class="card-img-top" alt="Komatsu-PC210LCi-11-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu PC210LCi-11 Intelligent Machine Control Excavator</h5>
                            <p class="card-text">The Komatsu PC210LCi-11 is an innovative hydraulic excavator equipped with Intelligent Machine Control technology.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Loader Section -->
    <div class="container mt-5" id="loader-list" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page1.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/loader/Komatsu-WA320.png" class="card-img-top" alt="Komatsu-WA320-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu WA320 </h5>
                            <p class="card-text">The WA320 is a versatile wheel loader designed for a wide range of applications, including construction, agriculture, and waste management. It offers a powerful engine, efficient hydraulic system, and comfortable operator cab for increased productivity and operator comfort..</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page2.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/loader/Komatsu-WA470.png" class="card-img-top" alt="Komatsu-WA470-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu WA470</h5>
                            <p class="card-text"> The WA470 is a mid-size wheel loader known for its high performance and reliability in demanding environments such as mining, quarrying, and heavy construction. </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page3.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/loader/Komatsu-WA500.png" class="card-img-top" alt="Komatsu-WA500-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu WA500</h5>
                            <p class="card-text">The WA500 is a large wheel loader suitable for heavy-duty applications, including loading trucks, stockpiling, and material handling in ports and industrial facilities. </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page4.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/loader/WA600-Picture.png" class="card-img-top" alt="Komatsu-D475-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu WA600</h5>
                            <p class="card-text">The WA600 is a heavyweight wheel loader designed for large-scale earthmoving and material handling tasks, such as mining, quarrying, and bulk material handling. </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <!-- Bulldozer Section -->
    <div class="container mt-5" id="bulldozer-list" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page1.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/bulldozer/Komatsu-D65.png" class="card-img-top" alt="Komatsu-D65-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu D65 </h5>
                            <p class="card-text">The D65 is a mid-size bulldozer known for its versatility and performance in a variety of applications, including construction, mining, and forestry.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page2.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/bulldozer/Komatsu-D85.png" class="card-img-top" alt="Komatsu-D85-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu D85</h5>
                            <p class="card-text"> The D85 is a larger bulldozer designed for heavy-duty earthmoving tasks, such as land clearing, road construction, and large-scale excavation projects. </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page3.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/bulldozer/Komatsu-D155.png" class="card-img-top" alt="Komatsu-D155-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu D155</h5>
                            <p class="card-text">The D155 is a powerful bulldozer used in demanding applications such as mining, quarrying, and major construction projects.  </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <a href="page4.html" class="card-link">
                    <div class="card mb-3">
                        <img src="assets/komatsu_catalogue/bulldozer/Komatsu-D475.png" class="card-img-top" alt="Komatsu-D475-picture">
                        <div class="card-body">
                            <h5 class="card-title">Komatsu D475</h5>
                            <p class="card-text">The D475 is one of the largest bulldozers offered by Komatsu, suitable for the most demanding earthmoving and mining applications.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function excavator_button(){
        var x = document.getElementById("excavator-list");

        if(x.style.display === "none"){
            x.display = "inline"
        }
        else {
            x.style.display = "none"
        }
    }

    function loader_button(){
        var x = document.getElementById("loader-list");

        if(x.style.display === "none"){
            x.display = "inline"
        }
        else {
            x.style.display = "none"
        }
    }

    function bulldozer_button(){
        var x = document.getElementById("bulldozer-list");

        if(x.style.display === "none"){
            x.display = "inline"
        }
        else {
            x.style.display = "none"
        }
    }

</script>


</body>
</html>