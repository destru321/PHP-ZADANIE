<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php 
        
            $conn = new mysqli("localhost", "root", "", "dziennik");

            $req = "UPDATE ocena SET ocena = ocena + 1";
            $res = mysqli_query( $conn, $req);

            mysqli_close($conn);
        ?>
    </ol>
</body>
</html>