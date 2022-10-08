<!DOCTYPE>
<html lang="en">
<head>
    <title>Task 2 result</title>
    <style>
        div{
            background-color: rgb(85, 37, 196);
            width: 300px;
            height: 40px;            
            margin: auto;
            color:white;
        }
    </style>

</head>
<body>
<div>
<article style="margin-left: 30px;">
    Welcome: <?php echo $_GET["name"]." ".$_GET["surname"]; ?><br>
    Your date of birth is: <?php echo $_GET["birth"]; ?>
</article>
</div>
</body>
</html>