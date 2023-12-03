<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example</title>
</head>
<body>
    <h2>Enter Your Information</h2>

    <form action="insert.php" method="post">

    <label>Interests:</label><br>
        <input type="checkbox" name="interests[]" value="Reading"> Reading<br>
        <input type="checkbox" name="interests[]" value="Traveling"> Traveling<br>
        <input type="checkbox" name="interests[]" value="Cooking"> Cooking<br>
        <input type="checkbox" name="interests[]" value="Sports"> Sports<br>

        
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

        

        <label for="comments">Additional Comments:</label><br>
        <textarea name="comments" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
