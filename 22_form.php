<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php if($_GET['submitted'] == "true"): ?>
        <p>The data is sumbitted succefully</p>
        <?php else :?>
        <p>You should check the field</p>
        <?php endif ?>
    </div>

    <form method="POST" action="22_handle.php">
        <div>
            <label for='name'>name</label>
            <input id="name" name="name" type="text" />
        </div>
        <div>
            <label for='email'>email</label>
            <input id="email" name="email" type="email" />
        </div>
        <div>
            <label for='message'>message</label>
            <textarea id="message" name="message" type="text" ></textarea>
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>