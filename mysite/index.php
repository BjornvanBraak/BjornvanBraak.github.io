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
        $active = "home";
        include("pages/general/header.php"); 
    ?>
    <main>
        <div>
            <h1>hello there pls</h1>
            <p>All project of Bjorn van Braak are stored on this site</p>
        </div>
        <div>
            <p>This is the younger me</p>
                        <image src="images/BjornvanBraakFootball.jpg"/>
        </div>
        <div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sh
        </div>
    </main>
    <?php
    include('pages/general/footer.php');
    ?>
</body>
</html>