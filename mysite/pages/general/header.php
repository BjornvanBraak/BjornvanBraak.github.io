<header>
        <nav id="navigation">        
            <ul>
                <li <?php if($active == "home"){echo 'class="active"';} ?> >
                    <a href="index.php"><i class="fa fa-home"></i>Home</a>
                </li>
                <li <?php if($active == "aboutMe"){echo 'class="active"';} ?>>
                    <a href="aboutMe.php">About Me</a>
                </li>
                <li <?php if($active == "portfolio"){echo 'class="active"';} ?>>
                    <a href="portfolio.php">My Portfolio</a>
                    <ul class="subnav">
                        <li>
                            <a href="games.php">Games</a>
                            <ul>
                                <li><a href="chess.php">Chess</a></li>
                                <li><a href="weerwolven.php">Weerwolven</a></li>
                            </ul>
                        </li>
                        <li><a href="projects.php">Projects</a></li>
                    </ul>
                </li>
            </ul>
            <img src="images/deGraafschapLogo.png" alt="de Graafschap voor het leven!" width="40rem" class="toRight">
        </nav>
</header>