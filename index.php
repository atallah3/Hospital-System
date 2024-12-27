 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Al shifa Hospital</title>
    <link rel="stylesheet" href="CSS/style.css">
 </head>
 <body>
    <div class="main">
        <div class="logo">
            <img src="Images/logo.png">
            <h2>Al shifaa Hospital</h2>
        </div>

        <div class="book">
             <p>Welcom to Al shifaa Hospital</p>
             <form action="index.php" method="POST">
                <input type="text" placeholder="Please enter your name" name="name">
                <input type="text" placeholder="please enter your email" name="email">
                <input type="date" name="date">
                <input type="submit" value="Book" name="send">
             </form>
        </div>

        <?php
            // connection with DB
            $host = "localhost";
            $user = "root";
            $password = "rootroot";
            $database = "hospital";

            $conn = mysqli_connect($host, $user, $password, $database);
  
            // send input data  to the DB
            $user_name = $_POST["name"] ?? " ";
            $user_email = $_POST["email"] ?? " ";
            $user_date = $_POST["date"] ?? " ";
            $send = $_POST["send"] ?? " ";

            $user_message = "Welcome to Al shifaa Hospital";

            if($send) {
                $query = "INSERT INTO patients(name, email, created_date) VALUES('$user_name','$user_email','$user_date')";
                $result = mysqli_query($conn, $query);
                $user_message = "<h2 style=\"text-align: center\"> Booking has been completed successfully </h2>";
            }else {
                $user_message = "<h2> sorry something went wrong </h2>";
            }
             
        
        ?>
    </div>
</body>
 </html>