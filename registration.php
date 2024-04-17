<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <?php 
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     print_r($_POST);
        // }
        
        // Form submission check
        if(isset($_POST["submit"])) {

            // Retrieving the filled data from the form 
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $errors = array(); //

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            // Checks if the fields are empty, in case of empty it returns an alert
            if (empty($fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors, "All fields are required");
            }

            // Checks if the email are valid using filter_var in case of empty it returns an alert
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid");
            }

            // Check if password 6 characters long
            if(strlen($password) < 6 ){
                array_push($errors, "Password must be at least 8 characters!");
            }

            // Check if repeat password 6 is the same
            if($password !== $passwordRepeat) {
                array_push($errors, "Password must be the same!");
            }

            // Verifying the email so that it doesnt dupe
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);

            if ($rowCount > 0){
                array_push($errors, "email already exists!");
            }

            if(count($errors) > 0){
                foreach($errors as $error){
                    echo "<div class = 'alert alert-danger'> $error </div>";
                }
            }else{
                // Push the data into the database
                $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullname, $email,$passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class = 'alert alert-success'>You have registered successfully</div>";
                }else{
                    die("something is wrong");
                }
            }   
        }

        ?>

        <!-- Regis form  -->
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder = "Full Name :">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder = "Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder = "Password :">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder = "Repeat Password :">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
    </div>
    
</body>
</html>