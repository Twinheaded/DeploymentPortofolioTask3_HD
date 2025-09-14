<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interactive PHP App</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        input { padding: 5px; }
        button { padding: 5px 10px; }
    </style>
</head>
<body>

    <h1>HD Level Interactive PHP App</h1>

    <?php
        // Check if the form has been submitted and the 'username' field is not empty
        if (isset($_POST['username']) && !empty($_POST['username'])) {
            // Get the user's name and make it safe to display
            $name = htmlspecialchars($_POST['username']);
            $greeting = "Hello, " . $name . "! Welcome to my PHP application.";
        }
    ?>

    <form method="post">
        <label for="username">Please enter your name:</label><br><br>
        <input type="text" id="username" name="username" placeholder="e.g., Jane Doe">
        <button type="submit">Submit</button>
    </form>

    <?php
        // If the greeting message exists, display it
        if (isset($greeting)) {
            echo "<h2>" . $greeting . "</h2>";
        }
    ?>

</body>
</html>