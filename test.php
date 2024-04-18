<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komatsu PC2000-11</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .Komatsu-PC2000-11 {
            max-width: 100%;
            height: auto;
        }
    </style>
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

<section class="product-catalogue">
    <div class="container">
        <div class="row">
            <div class="col mt-5 h-100 w-100">
                <img src="../../assets/komatsu_catalogue/excavator/Komatsu PC2000-11 Hydraulic Excavator.png" alt="Komatsu PC2000-11 Hydraulic Excavator" class="Komatsu-PC2000-11">
            </div>
            <div class="col-6 mt-5">
                <h2 class="fs-1" style="font-weight: 1000;"> KOMATSU  <span class="text-danger">PC2000-11</span></h2>
                <p class="text-start fs-5 ">The Komatsu PC2000-11 is a formidable hydraulic excavator specifically engineered for high-volume mining and quarrying tasks.  </p>
                <p class="text-start fs-5">Boasting a sturdy build, this machine is equipped with a potent engine and cutting-edge hydraulic technology, enabling it to tackle demanding excavation projects with ease.  </p>
                <p class="text-start fs-5"> Its advanced features ensure efficient material handling and excavation, making it a reliable choice for operations in rugged environments.</p>
                <button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#priceModal">Order</button>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="priceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priceModalLabel">Select Lease Duration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-select" id="leaseDuration">
            <option value="0">Pay Outright</option>
            <option value="3">3 years</option>
            <option value="5">5 years</option>
            <option value="10">10 years</option>
             <!-- New option for paying outright -->
        </select>
        <h5 class="mt-3">Final Price: <span id="finalPrice">$</span></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    // Function to format number with dots for every three digits
    function formatNumberWithDots(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Function to calculate the final price based on lease duration
    function calculatePrice() {
        const leaseDuration = parseInt(document.getElementById('leaseDuration').value);
        let markupPercentage;

        // Assign markup percentage based on lease duration
        switch (leaseDuration) {
            case 3:
                markupPercentage = 5;
                break;
            case 5:
                markupPercentage = 7;
                break;
            case 10:
                markupPercentage = 14;
                break;
            default:
                markupPercentage = 0; // No markup for paying outright
        }

        // Calculate final price
        const originalPrice = 1000000000; // Placeholder original price
        const markupAmount = (originalPrice * markupPercentage) / 100;
        const finalPrice = originalPrice + markupAmount;

        // Format final price with dots for every three digits
        const formattedPrice = formatNumberWithDots(finalPrice);

        // Update final price in the modal
        document.getElementById('finalPrice').textContent = `Rp.${formattedPrice}`;
    }

    // Add event listener to the lease duration select element
    document.getElementById('leaseDuration').addEventListener('change', calculatePrice);

    // Call calculatePrice function initially to display the default price
    calculatePrice();
</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Kt9CDy1N62vfjZ0lv7dN3jDlQ1eZPugTkLjzKkutFf5M6qzTTHOv2gpf2GpZolrM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
