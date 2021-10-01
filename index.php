<?php 
if(isset($_POST['submit'])){
    $to = "manuesteban1990@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Porfolio";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      property="og:title"
      content="Manuel Morales Portfolio"
    />
    <meta property="og:image" content="img/introduction.png" />
    <meta
      property="og:description"
      content="App Para Buscar Autos que muestra imagenes de automoviles cuando le das click en la descripcion de los autos."
    />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image" content="img/introduction.png" />
    <title>Manuel Morales Portfolio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/56d07d3ff6.js"></script>
    <script src="https://kit.fontawesome.com/dcd33c3e51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
  </head>
  <body>
    <header>
      <section class="navigation">
        <div class="simbol">
          <a href="index.html">
          <img src="img/simbolo.jpg" alt="simbol" id="img">
          </a>
        </div>
        <button class="nav-toggle" aria-label="toggle navigation">
        <span class="burger"></span>
      </button>
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
          <li class="nav__item">
            <a href="#services" class="nav__link">My Services</a>
          </li>
          <li class="nav__item"><a href="#work" class="nav__link">About Me</a></li>
          <li class="nav__item"><a href="#about" class="nav__link">My Work</a></li>
        </ul>
      </nav>
      </section>
    </header>
    <!-- Introduction -->
    <section class="intro" id="home">
      <div class="presentation">
        <div class="logo">
        <img src="img/serio.jpg" alt="Me" />
        </div>
        <div class="titles">
           <h3 class="section__title section__title--intro">
            Hello, My Name Is:
          </h3>
          <div class="underline"></div>
          <h1>Manuel Morales</h1>
          <h3 class="bold">Web Developer</h3>
          <a href="https://api.whatsapp.com/send?phone=584144021058"><h2 class="info"><i class="fab fa-whatsapp"></i> +5804144021058</h2></a>
          <a href="manuesteban1990@gmail.com"><h2 class="info"><i class="fas fa-envelope-square"></i> manuesteban1990@gmail.com</h2></a>
          
          
      </div>
      </div>
      <p class="section__subtitle section__subtitle--intro">Presentation</p>
      <div class="container auto">
        <p>I am <span class="typed-text"></span><span class="TypeCursor">&nbsp;</span></p>
      </div>
      <div class="tecnologies">
        <div class="first-block" id="first">
          <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS" data-img="1">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML5" data-img="2">
          <img src="img/logo-javascript.svg" alt="JavaScript" data-img="3">
          <img src="img/php.svg" alt="PHP" data-img="4">
        </div>
        <div class="second-block hidden" id="second">
          <img src="img/jquery-2.svg" alt="JQuery" class="hidden" data-img="5">
          <img src="img/react-2.svg" alt="React" class="hidden" data-img="6">
          <img src="img/wordpress.svg" alt="Wordpress" class="hidden" data-img="7">
          <img src="img/icons8-sass.svg" alt="Sass" class="hidden" data-img="8">
        </div>
      </div>
      <div class="portrait-container">
          <div class="portrait"></div>
          <div class="portrait2"></div>
        </div>
      </div>
    </section>
    <!--My Services-->
    <section class="my-services" id="services">
      <h2 class="section__title my-services__services">What I do</h2>
      <div class="description">
        <p>
          From understanding your requirements, designing a blueprint and delivering the final product, I do everything that falls in between these lines.</p>
        <h2 class="arrow"><i class="fas fa-arrow-right"></i></h2>
      </div>
      <h3 class="section__title section__title--intro" style="color: teal;">
            My Services:
          </h3>
          <div class="underline"></div>
      <div class="services">
          <div class="service">
              <h1 class="works"><i class="fa fa-wordpress fa-3x"></i></h1>
              <h3>Wordpress</h3>
              <p class="section__subtitle">Design of great Wordpress themes and Plugins with integrations of other technologies as React. </p>
          </div>
          <div class="service">
                  <h1 class="works"><i class="fas fa-file-code fa-3x"></i></h1>
                  <h3>Web Development</h3>
                  <p>Web design of dynamic pages both in Frontend and Backend with these tools: HTML, CSS, JavaScript, PHP and MySQL</p>
          </div>
          <div class="service">
                  <h1 class="works"><i class="fab fa-react fa-3x"></i></h1>
                  <h3>React.js</h3>
                  <p>Integration of React on FullStack and Fronend development projects for Making Apps and Websites</p>
          </div>
          <div class="service">
                <h1 class="works"><i class="fab fa-php fa-3x"></i></h1>
                <h3>PHP</h3>
                <p>Creation of Apps, connection with databases, PHP integration with multiple web development technologies Backend in PHP with connection to databases in SQL</p>
                 
          </div> 
    </div> <!--Services-->
    <section class="services-explained container">
      <h1 class="service-title">My Skills</h1>
      <div class="skills">
         <ul class="skill">
         <h2 class="section_subtitle">Wordpress</h2>
        <li>Plugin Designer</li>
        <li>Making of Themes</li>
        <li>Administration of  Wordpress Places</li>
        <li>Creation of Marketplace with Wordpress</li>
      </ul>
      
      <ul class="skill">
        <h2 class="section_subtitle">Web Designt</h2>
        <li>Frontend Development Beautiful with CSS and Powerful with JavaScript</li>
        <li>Management of Backend building with PHP, MySQL and SQL</li>
      </ul>
      <ul class="skill">
        <h2 class="section_subtitle">React Js</h2>
        <li>Great Apps, friendly with users.</li>
        <li>Amazing user experience with JavaScript and React.</li>
      </ul>
      <ul class="skill">
        <h2 class="section_subtitle">PHP</h2>
        <li>Dynamic websites with PHP</li>
        <li>Great connection with SQL</li>
        <li>Creation of Contact Forms. </li>
        <li>Creation of User Registration Pages</li>
      </ul>
      </div>
      <div class="btn-container">
        <a href="#work" class="btn">My Work</a>
      </div>
      
    </section>
      
    </section>
    <!--About Me-->
    <section class="about-me container" id="about">
        <h2 class="section__title about-me__title--about">Who I Am</h2>
        <div class="about-me__body">
            <h3 class="section-third-title">Speaking of Myself</h3>
            <p class="section__subtitle">Web developer with experience developing in Wordpress, JavaScript, CSS, PHP, and React</p>
            <p>Programmer on the web very enthusiastic about learning new things every day, keeping myself in constant positive evolution and improvement.</p>
            <p>Web Developer From Venezuela</p>
            <h2 class="great-title">WHO IS THIS <span>MAN</span>? DUDE, MYTH OR <span>MEGA</span> DESIGNER
            </h2>
            <p class="third">This is a guy who likes to design fully functional web pages, with quite exquisite style, those places of his remarkable shape are made it with the conjunction of several tecnologies mentioned before on this place. </p>
            <p class="star-seriusly">That´s enough of talking about myself in the third person.</p>
            <p class="talking">I have three philosophical principles that enhance my work and lead me on the right path, adaptable first, being efficient and diligent in my work and learning more every day, these methods have led me to know and want to know more in a passion that feeds on itself.</p>
            <p class="contacmeyo">With  nothing else to say I welcome you to tell me hello <a href="#contact">here</a> , hire me <a href="#contact">here</a> or be my friends <a href="#contact">here</a>.</p>
        </div>
        <div class="about-me__img">
          <div class="img-container">
            <img src="img/image2vector.svg" alt="Yo">
          </div>
        </div>
    </section>
    <!--My Work--> 
    <section class="my-work" id="work">
        <h2 class="section__title">See My Projects</h2>
        <p class="section__subtitle"></p>
        <div class="portfolio">
            <main class="container">
        <header class="header">
            <div class="logo1">
                <h1>Manuel Morales Web Designer</h1>
                <a href="index.html">
                  <img src="img/sApp_Image_2021-09-24_at_3.42.00_PM.svg" alt="logo">
                </a>
            </div>
            <form autocomplete="off" class="search" id="search">
                <!--<label for="bar">Search</label>-->
                
                    <div class="input-group">
                        <input type="text" id="bar" placeholder="Search" >
                    </div>
                
            </form>
            <div class="categories" id="categories">
                <nav>
                    <a href="#" class="active">All</a>
                    <a href="#">Websites</a>
                    <a href="#">Apps</a>
                    <a href="#">Games</a>
                </nav>
            </div>
        </header>
        <h1 class="text-center">My Work</h1>
        <section class="grid" id="grid">
            
            
        </section>
    </main>
    
        </div>
   <div class="container-contact">
  <form class="contact" method="post" id="form" action="index.php">
    <p>Write Me</p>
    <input type="name" placeholder="Name" class="input" name="name" required><br>
    <input type="email" placeholder="email" class="input" name="email" required><br>
    <textarea name="write-me" cols="30" rows="10" class="input" name="message" required></textarea>
    <input type="submit" value="Talk Me" class="form-button" name="submit"> <br>
    <div class="sending-message__container" id="sendingID">
       <?php  
      if(isset($_POST['submit'])){ ?>
        <h2 class="succesfull-send hide-success" id="sending-good"><?php echo "Mail Sent. Thank you " . $name . ", I will contact you shortly."; ?></h2> 
        <?php
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    ?>
      </div>
    </form>
  </div>
        <footer class="container">
        <div class="social-networks">
        <div class="container-icon">
            <a href="https://twitter.com/CodingManuel" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="social-networks">
            <a href="https://www.facebook.com/esteban.zuarez.14/" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="social-networks">
            <a href="https://www.instagram.com/manuelmorales4280/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="social-networks">
            <a href="https://github.com/Angstromico" target="_blank" class="github"><i class="fab fa-github"></i></a>
        </div>
        </div>
        <div class="navigation-footer">
           <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
              <li class="nav__item">
                <a href="#services" class="nav__link">My Services</a>
              </li>
              <li class="nav__item"><a href="#work" class="nav__link">About Me</a></li>
              <li class="nav__item"><a href="#about" class="nav__link">My Work</a></li>
            </ul>
      </nav>
        </div>
        <div class="copyright">
            <p>Manuel Morales &#169 all Rights Reserved <span id="year"></span></p>
        </div>
    </footer>
    </section>
    
         <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>
