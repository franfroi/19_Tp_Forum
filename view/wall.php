<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wall Page</title>
</head>
<body>
    <h1> Wall Page   </h1>
    <a href ="index.php?page=login">Aller au login</a>
    <h2><?php echo $user[0]/*,$user[1]*/;?></h2>
    <div><?php echo $description;?></div>
</body>
</html>