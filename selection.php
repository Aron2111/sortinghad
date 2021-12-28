<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Voting</title>
</head>
<body onload="output(passedarray)">
    <div class="content">

        <h1 class="title">test</h1>
        <div class="foto"><img src="./assets/images/person.png" alt="foto voor layout"></div>
        <div class="info">
            <p class="name">Name</p>
            <p class="gender">Gender</p>
            <p class="age">Age</p>
        </div>
        <button class="knop" id="gryffondor" onclick="clickgryffondor(passedarray)">gryffondor</button>
        <button class="knop" id="hufflepuff" onclick="clickhufflepuff(passedarray)">hufflepuff</button><br>
        <button class="knop" id="slytherin" onclick="clickslytherin(passedarray)">slytherin</button>
        <button class="knop" id="ravenclaw" onclick="clickravenclaw(passedarray)">ravenclaw</button>
        <butto class="button" onclick="next(passedarray)">next person</button><br>


        


        <?php
        $array1=array();
        include "conn.php";
        $sql2 = "SELECT * FROM persoon;";
        $result = mysqli_query($conn, $sql2);
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                array_push($array1,$row['firstname'],$row['name'],$row['gender'],$row['age'],$row['gryffondor'],$row['hufflepuff'],$row['slytherin'],$row['ravenclaw']);
            }
        } 
        else {
            echo "0 results";
          }
          
            
                  
        ?>
    </div>
    <script>
        var passedarray=
          <?php echo json_encode($array1); ?>;
    </script>
    <script src="./assets/script.js"></script>    
</body>
</html>