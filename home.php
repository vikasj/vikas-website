<html>
    <?php require("header.php") ?>
        <body>
                <nav class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <a href="home.php" id="scale" class="navbar-brand" >{Vikas Joshi}</a>

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                            </div>
                               
                                <div id="navbar" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav navbar-right">
                                                <li class="active">
                                                    <a href="home.php">Home</a>
                                                </li>
                                                <li>
                                                    <a href="resume.php">Resume</a>
                                                </li>
                                                <!--<li><a href = "projects.php">Projects</a></li>-->
                                        </ul>
                                </div>
                        </div>
                </nav>

                <div class="container" id="fade" style="margin-top:65px">
                    <div class="row well well-lg">
                        <div class="col-lg-3">
                            <div class="thumbnail" style="margin-right: auto; margin-left: auto; max-width: 260px; max-height: 365px;">

                                <img src="images/vikas.jpg" alt="Vikas Joshi" height="290px" width="245px">
                                <div class="caption">
                                    <p><i>"The future depends on what you do today." - Mahatma Gandhi</i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <h1>Vikas Joshi</h1>
                            <p>One of my goals in life is to play an important role in the creation of new innovative software that will have a significant impact on our technological advancements. As a student at the University of Waterloo pursuing a Bachelor's degree in Computer Science, programming is definitely my passion. I'm highly dedicated to the work I do and very eager to learn.  My interests include software, web and android development. Please have a look at my <a href="resume.pdf"><b>resume</b></a> and email me if you're looking to hire a developer or have any questions.</p>
                        </div>
                    </div>
                </div>

            <?php require("footer.php") ?>
        </body>
</html>
