<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Create account</title>
</head>
<body>
    <div class="content">
        <h1>Creata account</h1>
        <form action="added.php">
            <label for="Firstname">Firstname</label><br>
            <input type="text" name="Firstname" required><br>
            <label for="Name">Name</label><br>
            <input type="text" name="Name" required><br>
            <label for="Gender">Gender</label><br>
            <select name="Gender" id="Gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            <label for="Age">Age</label><br>
            <input type="number" name="Age" required><br>
            <input class="button" type="submit" value="Submit">
        </form>
    </div>
    
</body>
</html>