<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio - Maxime LASSIAZ</title>
</head>
<body>
    <header>
    <!-- navbar menu -->
        <nav class="navbar-menu navbar navbar-expand-md navbar-dark bg-dark mb-5 fixed-top">
            <a class="navbar-brand" href="#">Maxime LASSIAZ <br> Full Stack Web Developper</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about-me">About me <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- about me section -->
        <section id="about-me" class="about-me main-section">
            <h2>About me</h2>
            <div class="about-me-cards">
                <div class="card">
                <video autoplay muted loop>
                    <source src="media/butterfly.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                    <div class="card-body">
                        <h5 class="card-title">De l'environnement</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet tortor id elit euismod tempor ut vitae dui. Curabitur nec congue metus. Etiam in lectus ac dui lacinia varius in at est. Nunc luctus ex in dapibus vestibulum.</p>
                    </div>
                </div>
                <div class="card">
                    <video autoplay muted loop>
                        <source src="media/coding.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Vers le développement web</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet tortor id elit euismod tempor ut vitae dui. Curabitur nec congue metus. Etiam in lectus ac dui lacinia varius in at est. Nunc luctus ex in dapibus vestibulum.</p>
                    </div>
                </div>
            </div>            
        </section> 

        <!-- skills section -->
        <section id="skills" class="skills main-section"> 
            <h2>Languages & technologies</h2>
            <div class="container-skills">
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-html5"></i>
                        <p>HTML5</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-css3-alt"></i>
                        <p>CSS3</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-js"></i>
                        <p>JavaScript</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Proficient</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-php"></i>
                        <p>PHP 7</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-bootstrap"></i>
                        <p>Bootstrap 4</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-react"></i>
                        <p>React.js</p>
                    </div>
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Novice</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-node"></i>
                        <p>Node.js</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Novice</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-symfony"></i>
                        <p>Symfony</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Novice</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-wordpress"></i>
                        <p>WordPress</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-git"></i>
                        <p>Git</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-title">
                        <i class="fab fa-3x fa-github"></i>
                        <p>GitHub</p>
                    </div>                    
                    <div class="progress bg-dark">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                    </div>
                </div>                
            </div>
        </section>  

        <!-- project section -->
        <section id="projects" class="project main-section">
            <h2>Projects</h2>
            <div class="card" style="width: 18rem;">
                <img src="images/form.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Last project : <br> Sign in form</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore neque, inventore perferendis itaque aspernatur error, asperiores beatae fugit molestias possimus fugiat. Facilis, distinctio dolore odit pariatur libero eos eum blanditiis.</p>
                    <ul>
                        <li><i class="fab fa-2x fa-html5"></i></li>
                        <li><i class="fab fa-2x fa-css3-alt"></i></li>
                        <li><i class="fab fa-2x fa-bootstrap"></i></li>
                        <li><i class="fab fa-2x fa-js"></i></li>
                        <li><i class="fab fa-2x fa-php"></i></li>
                    </ul>
                </div>
            </div>
            <div id="carousel-project" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-project" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-project" data-slide-to="1"></li>
                <li data-target="#carousel-project" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/battleship.png" class="d-block w-100" alt="picture of a battleship game">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Battleship game</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit porro aperiam reiciendis, accusamus vel officia consectetur consequuntur explicabo ut ea consequatur tempora corrupti ipsa, officiis non repudiandae? Similique, error molestiae!</p>
                        <ul>
                            <li><i class="fab fa-3x fa-html5"></i></li>
                            <li><i class="fab fa-3x fa-css3-alt"></i></li>
                            <li><i class="fab fa-3x fa-js"></i></li>
                            <li><i class="fab fa-3x fa-php"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item carousel-item-light">
                    <img src="images/todolist.png" class="d-block w-100" alt="picture of a to do list app">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>To do list app</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque hic recusandae, at veniam vitae fugiat error sint soluta est atque laudantium asperiores deleniti aspernatur consequuntur necessitatibus dolor deserunt eveniet ab.</p>
                        <ul>
                            <li><i class="fab fa-3x fa-html5"></i></li>
                            <li><i class="fab fa-3x fa-css3-alt"></i></li>
                            <li><i class="fab fa-3x fa-js"></i></li>
                            <li><i class="fab fa-3x fa-react"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item carousel-item-light">
                    <img src="images/weatherapp.png" class="d-block w-100" alt="picture of a weather app">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Weather app API</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae qui fugit, placeat mollitia eum nam, excepturi perferendis ullam inventore saepe eius dolorem numquam unde, labore maiores. Soluta a architecto error.</p>
                        <ul>
                            <li><i class="fab fa-3x fa-html5"></i></li>
                            <li><i class="fab fa-3x fa-css3-alt"></i></li>
                            <li><i class="fab fa-3x fa-bootstrap"></i></li>
                            <li><i class="fab fa-3x fa-js"></i></li>
                            <li><i class="fab fa-3x fa-node"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
                <a class="carousel-control-prev" href="#carousel-project" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-project" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- experience section -->
        <section id="experience" class="experience main-section">
            <h2>Experience</h2>
                <div class="experience-cards">
                <div class="card" style="width: 18rem;">
                    <img src="images/ofp.svg" class="card-img-top" alt="logo online formapro">
                    <div class="card-body">
                        <h5 class="card-title">Web developper full stack</h5>
                        <p class="card-text">ONLINE FORMAPRO</p>
                        <p class="card-text">2020 - 2021</p>
                        <p class="card-text">Grenoble, France</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/ugrenoble.png" class="card-img-top" alt="logo université grenoble alpes">
                    <div class="card-body">
                        <h5 class="card-title">Master Economie de l'environnement, de l'energie et des transports</h5>
                        <p class="card-text">Université de Grenoble</p>
                        <p class="card-text">2014 - 2016</p>
                        <p class="card-text">Grenoble, France</p>
                    </div>
                </div>
            </div>            
        </section>
    </main>

    <footer>
        <!-- contact section -->
        <section id="contact" class="contact-form">
            <form method="POST" action="email.php">
                <div class="form-group">
                    <label for="name-form">Name :</label>
                    <input type="text" class="form-control" id="name-form" name="name-form" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <label for="subject-form">Subject :</label>
                    <input type="text" class="form-control" id="subject-form" name="subject-form" placeholder="Subject of your mail" required>
                </div>
                <div class="form-group">
                    <label for="email-form">Email :</label>
                    <input type="email" class="form-control" id="email-form" name="email-form" placeholder="Your email" required>
                </div>                
                <div class="form-group">
                    <label for="message-form">Your message :</label>
                    <textarea class="form-control" id="message-form" rows="3" name="message-form" placeholder="Content of your mail" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark" name="form-submit">Send message</button>
            </form>
            <?php
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    if ($error === "emptyfields") {
                        echo "<p class='p-2 bg-danger fixed-bottom'>All fields must be completed !</p>";
                    }
                    if ($error === "errname") {
                        echo "<p class='p-2 bg-danger fixed-bottom'>Your name shall only include letters and spaces</p>";
                    }
                    if ($error === "erremail") {
                        echo "<p class='p-2 bg-danger fixed-bottom'>Your email address must be valid !</p>";
                    }
                }

                if (isset($_GET['mail'])) {
                    $mailSending = $_GET['mail'];
                    if ($mailSending === "sent") {
                        echo "<p class='p-2 bg-success fixed-bottom'>Your email has been sent !</p>";
                    }
                    if ($mailSending === "err") {
                        echo "<p class='p-2 bg-danger fixed-bottom'>An error occured while sending your email, try again later !</p>";
                    }
                }
            ?>
        </section>
        <section class="contact-links">
            <a href="https://drive.google.com/file/d/1973brNSJgwmmMmYBXPdWYgOmR_aTIloW/view?usp=sharing" target="_blank"><i class="fas fa-3x fa-download"></i> Download my resume</a>
            <p><i class="fas fa-3x fa-map-marker-alt"></i> Grenoble, France</p>
            <ul>
                <li><a href="https://github.com/"><i class="fab fa-3x fa-github"></i></a></li>
                <li><a href="https://www.facebook.com/"><i class="fab fa-3x fa-facebook"></i></a></li>
                <li><a href="https://fr.linkedin.com/"><i class="fab fa-3x fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-3x fa-twitter-square"></i></a></li>
                <li><a href="https://wordpress.com/"><i class="fab fa-3x fa-wordpress"></i></a></li>
            </ul>
        </section>
    </footer>

    <script src="https://kit.fontawesome.com/8f90edd687.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>