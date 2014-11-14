<html>
    <?php require("header.php") ?>
        <body>
                <div class="navbar navbar-fixed-top">
                        <div class="container">
                               
                                <a href="home.php" id="scale" class="navbar-brand" >{Vikas Joshi}</a>

                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                               
                                <div class="collapse navbar-collapse navHeaderCollapse">
                                        <ul class="nav navbar-nav navbar-right">
                                                <li class="active"><a href="home.php">Home</a></li>
                                                <li><a href="resume.php">Resume</a></li>
                                                <!--<li><a href = "projects.php">Projects</a></li>-->
                                        </ul>
                                </div>
                        </div>
                </div>

                <div class="container" id="fade" style="margin-top:100px">
                    <div class="row well well-lg">
                        <div class="col-lg-3">
                            <div class="thumbnail" style="margin-right: auto; margin-left: auto; max-width: 255px; max-height: 350px;">

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

                <div class = "navbar navbar-default navbar-fixed-bottom" height="100px">
                    <div class = "container">
                        <p style="margin-top:10px;"class="text-center">
                                 <a href="mailto:v2joshi@uwaterloo.ca" id="scale" class="btn btn-primary">Email Me</a> 
                                 &nbsp;
                                 |
                                 &nbsp;
                                 <a href = "http://www.linkedin.com/pub/vikas-joshi/65/4a8/458"><img src = "images/linkedin.png" id="scale" alt="linkedin" height="27" width="103"></a>
                                 &nbsp;
                                 |
                                 &nbsp;
                                 <a href = "https://github.com/vikasj"><img src="images/github.png" id="scale" alt="github" height="20" width="85"></a>
                                 </p>

                    </div>
                </div>  
    <?php require("footer.php") ?>
        </body>
</html>
