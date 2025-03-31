<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill this form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">

        <form class="form_data" action="insert_into.php" method="post">
            <h2 style="text-align: center;">Fill this form</h2>
            <label>Name</label>
            <input type="text" name="name" autocomplete="off">
            <label>Sex</label>
            <input type="radio" name="sex" value="Male">
            <label>male</label>
            <input type="radio" name="sex" value="Female">
            <label>Female</label>
            <label>Country</label>
            <select name="country">
                <option value="select">Select</option>
                <option value="Uganda">Uganda</option>
                <option value="Kenya">Kenya</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Tanzania">Tanzania</option>
            </select>
            <label>Email</label>
            <input type="email" name="email" autocomplete="">
            <button type="submit" name="submit">Submit</button><br>
            <button class="views"><a href="read.php">View Data</a></button>
        </form>
    </div>
</body>

</html>