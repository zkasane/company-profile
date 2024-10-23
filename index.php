<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="./backend/login.php" method="POST">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" id="email" placeholder="Email"/></br>
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" id="password" placeholder="Password"/></br>
        <button type="submit">Login</button>
    </form>
</body>
</html>