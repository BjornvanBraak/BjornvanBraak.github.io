<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("pages/general/metaData.php");
    ?>
    <title>Document</title>
    <!--CSS-->
    <link rel="stylesheet" href="resources/css/templateStyle.css" type="text/css">
    <link rel="stylesheet" href="resources/css/tabPortfolio.css">
    <!--icons-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body>
    <?php
        $active = "portfolio";
        include('pages/general/header.php');
    ?>
    <main>
        <h1>My Portfolio</h1>
        A quick overview on the language learned. The hours especially are a very rough estimate and therefore
        more a measurement of confident in each language.
        <table>
            <thead>
                <tr>
                    <th>Language</th>
                    <th>Purpose</th>
                    <th>comfort level(1-10)</th>
                    <th class="extraInfo">Ways of Learning</th>
                    <th class="extraInfo">When used/learned</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matlab</td>
                    <td>Used in engineering and science field</td>
                    <td>6</td>
                    <td class="extraInfo">through University</td>
                    <td class="extraInfo">2018/2019</td>
                </tr>
                <tr>
                    <td>C++</td>
                    <td>Main language of windows pc</td>
                    <td>2</td>
                    <td class="extraInfo">through University and a bit self</td>
                    <td class="extraInfo">2019 (hope to learn more)</td>
                </tr>
                <tr>
                    <td>Html&CSS</td>
                    <td>Language for webdesign</td>
                    <td>8</td>
                    <td class="extraInfo">self-taught, base with codecademy</td>
                    <td class="extraInfo">2020</td>
                </tr>
                <tr>
                    <td>Php</td>
                    <td>Server side</td>
                    <td>3</td>
                    <td class="extraInfo">self-taught, codeacademy</td>
                    <td class="extraInfo">2020</td>
                </tr>
                <tr>
                    <td>Javascript</td>
                    <td>Higher Level Web Devolpment</td>
                    <td>5</td>
                    <td class="extraInfo">self-taught, base with codecademy</td>
                    <td class="extraInfo">2020 (no good projects)</td>
                </tr>
                <tr>
                    <td>Google Script</td>
                    <td>Used with all google applications (e.g. google spreadsheet)</td>
                    <td>2</td>
                    <td class="extraInfo">self-taught, google documentation/tutorial</td>
                    <td class="extraInfo">2020</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>total languages: 6</td>
                    <td></td>
                    <td>total time: 220 hours</td>
                    <td class="extraInfo"></td>
                    <td class="extraInfo"></td>
                </tr>
            </tfoot>
        </table>
        What I have mostly done is learn coding through school.
        This means that there are a lot of very small exercises. I will not include most of them, maybe one or two to show the
        progress made in the years.
        <table>
            <thead>
                <tr>
                    <th>My Projects</th>
                    <th>Type of language</th>
                    <th>Program used</th>
                    <th>Hours Spend</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>This site</td>
                    <td>Html&CSS</td>
                    <td>VisualStudio&Git</td>
                    <td>15 hours</td>
                </tr>
                <tr>
                    <td>Asterion Site</td>
                    <td>Html&CSS&Javascript</td>
                    <td>VisualStudio&Git&WordPress</td>
                    <td>40 hours</td>
                </tr>

            </tbody>
            <tfoot>

            </tfoot>
        </table>
        I also wanted to include a more detailed description of my experience with working with different scripting and programming languages.
        This will also go more in depth about the software used with the coding language and mostly how interchangable different
        parts of the software are.
    </main>
    <?php
    include('pages/general/footer.php');
    ?>
</body>
</html>