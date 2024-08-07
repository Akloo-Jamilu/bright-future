{{-- <!DOCTYPE html>
<html>
<head>
    <title>BrightFuture Schools</title>
    <style>
        /* Add some basic styling for the buttons */
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            border: none;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to BrightFuture Schools</h1>
    <p>Your journey to a brighter future starts here.</p>

    <!-- Add Login and Register buttons -->
    <a href="{{ route('login') }}" class="button">Login</a>
    <a href="{{ route('register') }}" class="button">Register</a>
</body>
</html>
 --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright future</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
     <!--============ HEADER ==========-->
     <header class="header" id="header">
        <nav class="nav">
            <a href="{{ route('home') }}" class="logo">BF.</a>
            <div class="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav__link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav__link">ACADEMICS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav__link">ADMISSIONS</a>
                    </li>
                    
                </ul>
            </div>
            <div class="login">
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav__link active">Register</a>
                </li>
                 <a href="{{ route('login') }}" class="nav__link active-link">Login</a>
                </li>
            </div>
        </nav>
     </header>
     <main class="main">
        <section class="home">
            <div class="home-container">
                <div class="home-content">
                  <h2>LEARNING <br>EXCELLENCE</h2>
                  <p>Welcome to Bright Future.
                    A modern, global school for a modern,
                    global academic experience.
                  </p>
                  <button class="button"><a href="#">Apply Now</a></button>
                </div>

            </div>
        </section>

        <section class="whybfs">
            <div class="why-container">
                <div class="why-image"><img src="./assets/O5EMzfdxedg.png" alt=""></div>
                <div class="why-text">
                    <h3>Why BF</h3>
                    <div class="line"></div> <br> <br>
                    <p class="whyp">Bright Future School is an institute that takes pride in the growth of our students, not just as intellectuals but also as responsible members of the society.

                       <br> <br> We encourage curiosity, free thinking and inquisitiveness in our students. Our teachers are techically adept and passionate about their jobs and our facilities meet global standards.
                        </p>
                </div>
            </div>
        </section>
        <section class="education">
            <div class="education-container">
                <h3 class="yoo">Education that inspires</h3>
                <div class="content">
                    <div class="first">
                        <img class="edu" src="./assets/istockphoto-950608328-612x612 1.png" alt="">
                        <h6>Modern Curicculum</h6>
                        <p class="dot">We provide our school with a curriculum that is meets global standards we stay updated to  keep up with those standards. </p>
                    </div>
                    <div class="first">
                        <img class="edu" src="./assets/istockphoto-950608328-612x612 2.png" alt="">
                        <h6>Professional Tutoring</h6>
                        <p class="dot">Our teachers are highly trained and are intellectually, morally and technically capable of imparting knowledge to our students. </p>
                    </div>
                    <div class="first">
                        <img class="edu" src="./assets/istockphoto-950608328-612x612 3.png" alt="">
                        <h6>Technology Skills</h6>
                        <p class="dot">We live in a digital age so we equip our students with all the tools needed to be technical and acquire problem solving skills.  </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="person">
            <div class="person-container">
                <p class="key">KEY PERSON</p>
                <h3 class="yeah">Meet The Board of Directors</h3>
                <div class="content">
                    <div class="second">
                        <img class="educ" src="./assets/istockphoto-950608328-612x612 1.png" alt="">
                        <h6>Hassan Jemilu </h6>
                        <p class="dots">Shareholder</p>
                    </div>
                    <div class="second">
                        <img class="educ" src="./assets/istockphoto-950608328-612x612 2.png" alt="">
                        <h6>Adam Sa'ad</h6>
                        <p class="dots">Director</p>
                    </div>
                    
                </div>
            </div>
        </section>

     </main>
     <footer>
        <div class="car">
          <div class="let">
            <a href="#" class="logo">BF.</a>
            <div class="with">
              <p>
                Education is tailored to students with disabilities. it involves
                individualized teaching
              </p>
            </div>
            <div class="footer-sm">
              <a href="http://www.facebook.com">
                <img src="./assets/Vector.png" alt="facebook icon" />
              </a>
              <a href="http://www.twitter.com">
                <img src="./assets/Vector-1.png" alt="twitter icon" />
              </a>
              <a href="http://www.youtube.com">
                <img src="./assets/Vector-2.png" alt="" />
              </a>
              <a href="http://www.instagram.com">
                <img src="./assets/Vector-3.png" alt="" />
              </a>
            </div>
          </div>
          <div class="ul">
            <ul class="footer-links-main">
              <li><p>Our School</p></li>
              <li><a href="#">Academics</a></li>
              <li><a href="#">Admission</a></li>
              <li><a href="#">Our Policy</a></li>
              <li><a href="#">Technical Workshop</a></li>
            </ul>
            <ul class="footer-links-cases">
              <li><p>Contact Us</p></li>
              <li><a href="#">08144297768</a></li>
              <li><a href="#">www.brightfuturesch.com</a></li>
              <li><a href="#">saadadam009@gmail.com</a></li>
              <li><a href="#">11, oyun road adewole estate ilorin</a></li>
            </ul>
          </div>
          <div class="in">
            <h6>Get the latest information</h6>
            <div class="form-group">
              <form action="" class="email-bar">
                <input type="text" placeholder="Email Address" name="Email" />
                <button type="submit">Send</button>
              </form>
            </div>
          </div>
        </div>
        <div class="lins"></div>
        <div class="out">
          <div class="pri">
            <a href="#"> User Terms & Condition</a>
            <a href="#">Privacy policy</a>
          </div>
          <div class="copy">
            <p>Copyright &copy;2023 Brightfuture. All Right Reserved</p>
          </div>
        </div>
      </footer
</body>
</html>