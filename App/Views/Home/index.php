<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>Hello from the view!</p>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Output escaping</title>
    <meta charset="utf-8"> 
</head>
<body>
    <h1>Output escaping</h1>

<?php

    // Display the results of submitting the form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Hello, " . htmlspecialchars($_POST['name']);
    }

?>

    <form method="post">
        <div>
            <label for="name">Your name</label>
            <input id="name" name="name" autofocus />
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>Hello <?php echo htmlspecialchars($name); ?>!</p>

    <ul>
        <?php foreach ($colours as $colour): ?>
            <li><?php echo htmlspecialchars($colour); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
