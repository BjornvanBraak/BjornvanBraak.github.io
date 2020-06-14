<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("pages/general/metaData.php");
    ?>
    <title>Document</title>
    <!--CSS-->
    <link rel="stylesheet" href="resources/css/templateStyle.css" type="text/css">
    <!--icon-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <!--jQuery-->
</head>
<body>
    <?php
        $active = "portfolio/games";
        include("pages/general/header.php"); 
    ?>
    <main>
        <article>
            <h1>Add Game:</h1>
            <p>Is there a game you would like to see included? Pls contact me at: <a href="#">insert</a></p>
        </article>
        <article>
            <h1>Games in progress</h1>
            <ul>
                <li>chess board</li>
                <li>rubic's cube</li>
                <li>risk game</li>
                <li>monopoly</li>
                <li>weerwolven van wakkerdam</li>
            </ul>
        </article>
    </main>
    <?php
    include('pages/general/footer.php');
    ?>
</body>
</html>