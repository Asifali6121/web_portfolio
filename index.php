

<?php


$servername='localhost';

$username='root';
$password='';
$dbname = 'student';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $textarea = $_POST['textarea'];

      $sql = "INSERT INTO `myweb`( `name`, `email`, `subject`, `textarea`) VALUES ('$name','$email','$subject','$textarea')";

	 if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
</head>
<body>


    <!-- navbar section -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Coding<span>By</span>Asif Ali</a>
            </div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#teams">Teams</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section -->

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
                    Hello, my name is
                </div>
                <div class="text-2">
                    Asif Ali
                </div>
                <div class="text-3">
                    And I'm  <span class="multiple-text"> </span>
                </div>


                <div class="link">
        <a href="#" class="social"> <i class="bx bxl-facebook"></i></a>
        <a href="#" class="social"> <i class="bx bxl-twitter"></i></a>
        <a href="#" class="social"><i class="bx bxl-instagram-alt"></i></a>
        <a href="#" class="social"><i class="bx bxl-linkedin"></i></a>
      </div>

                <a href="#" class="btn">Hire Me</a>
            </div>
        </div>
    </section>

    <!-- about section -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About <span> Me </span></h2>
            <div class="about-content">
                <div class="column left">
                    <img src="assets/image/3vRqDI.jpg" alt="">
                </div>

                <div class="column right">
                    <div class="text">
                        I'm Asif Ali and I'm <span>Full stack Developer</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint commodi temporibus, omnis est
                        autem odio consequuntur blanditiis quam, sunt provident atque expedita, tempore officia adipisci
                        magnam ipsam reprehenderit tenetur.</p>
                    <a href="#">Download CV</a>

                </div>
            </div>
        </div>
    </section>


    <!-- services section -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title"> <span> My </span> Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus fugiat dolore illum
                            sed incidunt accusantium eius.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus fugiat dolore illum
                            sed incidunt accusantium eius.</p>
                    </div>
                </div>


                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Design</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus fugiat dolore illum
                            sed incidunt accusantium eius.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- skills section -->

    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title"> My  <span>Skills </span></h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative Skills <span> & Expriences. </span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Impedit cum, earum aspernatur fuga expedita repellat dolorum ea est
                        quae eveniet, officia eum at placeat animi consectetur
                        quas doloribus magnam. Minima!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Impedit cum, earum aspernatur fuga expedita repellat dolorum ea est
                        quae eveniet, officia eum at placeat animi consectetur
                        quas doloribus magnam. Minima!</p>
                    <a href="#">Read More</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="line css"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>BOOTSTRAP</span>
                            <span>85%</span>
                        </div>
                        <div class="line bootstrap"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>JAVASCRIPT</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>JQUERY</span>
                            <span>60%</span>
                        </div>
                        <div class="line jquery"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>75%</span>
                        </div>
                        <div class="line php"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>AJAX</span>
                            <span>70%</span>
                        </div>
                        <div class="line ajax"></div>
                    </div>

                    <div class="bars">
                        <div class="info">
                            <span>WORDPRESS</span>
                            <span>90%</span>
                        </div>
                        <div class="line wordpress"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- my Teams section -->


    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title"> <span>My</span> Teams</h2>
            <div class="team-slider owl-carousel">
                <div class="single-box text-center">
                    <div class="img-area">
                        <img alt="" class="img-fluid move-animation"
                            src="https://i.postimg.cc/65VQDfjs/1.png"></div>
                    <div class="info-area">
                        <h4>Person's Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn
                            More</a>
                    </div>
                </div>
                <div class="single-box text-center">
                    <div class="img-area">
                        <img alt="" class="img-fluid move-animation"
                            src="https://i.postimg.cc/vmCM14qL/2.png"></div>
                    <div class="info-area">
                        <h4>Person's Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn
                            More</a>
                    </div>
                </div>
                <div class="single-box text-center">
                    <div class="img-area">
                        <img alt="" class="img-fluid move-animation"
                            src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
                    <div class="info-area">
                        <h4>Person's Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn
                            More</a>
                    </div>
                </div>
                <div class="single-box text-center">
                    <div class="img-area">
                        <img alt="" class="img-fluid move-animation"
                            src="https://i.postimg.cc/593GTHB7/4.png"></div>
                    <div class="info-area">
                        <h4>Person's Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn
                            More</a>
                    </div>
                </div>
                <div class="single-box text-center">
                    <div class="img-area">
                        <img alt="" class="img-fluid move-animation"
                            src="https://i.postimg.cc/tJCrp53r/5.png"></div>
                    <div class="info-area">
                        <h4>Person's Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- contact section -->

      <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact <span> Me </span></h2>
            <div class="contact-content">
                <div class="column left">
                  <div class="text">get in touch</div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptates facilis soluta tempora.</p>
                  <div class="icons">
                    <div class="row">
                       <i class="fas fa-user"></i>
                       <div class="info">
                        <div class="head">Name</div>
                        <div class="sub-title">Asif Ali</div>
                       </div>
                    </div>
                    <div class="row">
                       <i class="fas fa-map-marker-alt"></i>
                       <div class="info">
                        <div class="head">Address</div>
                        <div class="sub-title">Delhi, Delhi</div>
                       </div>
                    </div>

                    <div class="row">
                       <i class="fas fa-envelope"></i>
                       <div class="info">
                        <div class="head">Email</div>
                        <div class="sub-title">admin@gmail.com</div>
                       </div>
                    </div>


                  </div>
                </div>

                   <div class="column right">
                       <div class="text"> <span>Contact</span> Me!</div>
                       <form action="#" method="POST">
                        <div class="fields">
                            <div class="field name">
                                 <input type="text" placeholder="Name" name="name" required>
                            </div>

                            <div class="field email">
                                 <input type="text" placeholder="Email"  name="email" required>
                            </div>
</div>

                            <div class="field">
                                 <input type="text" placeholder="Subject"  name="subject" required>
                            </div>

                            <div class="field textarea">
                                <textarea cols="30" rows="10"  name="textarea" placeholder="Describe Project.."></textarea>
                            </div>

                            <div class="button">
                                <button type="submit"  value="submit" name="submit">Send Message</button>
                            </div>

                        </div>
                       </form>

                   

            </div>
        </div>
      </section>

      <button class="scroll1">top</button>


      <!-- footer section -->

      <footer>
        <span>Created By <a href="#">Asif Ali </a> |<span class="far fa-copyright"> </span> 2023 rights reserved</span>
      </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script>
 <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

 <script>
     // auto tpye slider
     let typed = new Typed(".multiple-text", {
      strings: ["A Web Designer", "A Web Developer", "A Blogger", "A Freelancer"],
      typeSpeed: 100,
      backSpeed: 100,
      backDelay: 1000,
      loop: true,
    });
 </script>



    <script src="assets/css/script.js"></script>

</body>

</html>