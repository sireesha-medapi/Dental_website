<?php 
$conn=mysqli_connect('localhost','root','','form_det') or die("connection failed");

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $number=$_POST['number'];
    $date=$_POST['date'];

    $insert=mysqli_query($conn,"INSERT INTO `details`(name,email,number,date) VALUES('$name','$email','$number','$date')") or die('query failed');
    if($insert){
        $message[]='Appointment Made Successfully!';
    }else{
        $message[]='Appointment Failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Complete Responsive Dentist Website Design Tutorial</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!-- bootstrap cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
        <!-- custom css file link -->
        <link rel="stylesheet" href="dental.css">
    </head>
    <body>

    <!-- header section starts -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row1">
                <a href="#home" class="logo">Dental<span>Care.</span></a>
                 <ul class="navigate">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <a href="#contact" class="link-btn">Make Appointment</a> 
                <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
            </div>  
        </div> 
    </header>  

    <!-- header section ends -->

    <!-- home section starts -->

   <section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content">
                <h3 class="main">Let Us Brighten Your Smile</h3>
                <p class="main-des">Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Laudantium <br> Itaque, Quasi Aliquam Alias Tempora Voluptatibus.</p>
                <a href="#contact" class="link-btn" id="button">Make Appointment</a>
            </div>
        </div>
    </div>
    </section>

    <!-- about section starts -->


    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712477901/dentist_pveqzg.jpg"  class="w-100 mb-4 mb-md-0 image1" alt="">
                </div>
                <div class="col-md-6 content">
                    <span class="row3">About Us</span>
                    <h3 class="about-head">True Healthcare For Your Family</h3>
                    <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Laboriosam <br>Cupiditate Vero In Provident Ducimus. Totam Quas Labore Mollitia Cum Nisi, Sint, <br>Expedita Rem Error Ipsa, Nesciunt Ab Provident. Aperiam, Officiis!</p>
                    <a href="#contact" class="link-btn" id="button">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    

<!-- process section starts -->


    
    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="grid-container1">
            <div class="box1">
                <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712731365/1_aqfxbe.jpg" alt="" width="275px" height="275px" >
                <h3 class="heading1">Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur <br>adipiscing elit. Maxime, excepturi></p>
            </div>

            <div class="box1">
                <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712740666/dental_laceyv.webp" alt="" width="275px" height="275px">
                <h3 class="heading1">Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur <br>adipiscing elit. Maxime, excepturi></p>
            </div>

            <div class="box1">
                <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712740785/dental1_ztxg64.jpg" alt="" width="275px" height="275px">
                <h3 class="heading1">Dental Implants</h3>
                <p>Lorem ipsum dolor sit, amet consectetur <br>adipiscing elit. Maxime, excepturi></p>
            </div>
        </div>
    </section>

    <!-- process section ends -->

<!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container ">
            <div class="grid-container">
                <div class="box">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712745517/alignment_specialist_hhjink.jpg" alt="" width="100px" height="100px" class="center">
                    <h4>Alignment Specialist</h4>
                    <p id="row4">Lorem Ipsum Dolor Sit Amet <br>Consectetur Adipiscing Elit. <br>Fugiat, Non?</p>
                </div>

                <div class="box">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712745555/mirror_12758654_oi8dfb.png" alt="" width="100px" height="100px" class="center">
                    <h4>Cosmetic Dentistry</h4>
                    <p id="row4">Lorem Ipsum Dolor Sit Amet <br>Consectetur Adipiscing Elit.<br> Fugiat, Non?</p>
                </div>

                <div class="box">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712745720/cavity_mc2xcf.png" alt="" width="100px" height="100px" class="center">
                    <h4>Cavity Inspection</h4>
                    <p id="row4">Lorem Ipsum Dolor Sit Amet <br>Consectetur Adipiscing Elit. <br>Fugiat, Non?</p>
                </div>
            
            
                <div class="box">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712745629/oral_kdtwwo.jpg" alt="" width="100px" height="100px" class="center">
                    <h4>Oral Hygiene Experts</h4>
                    <p id="row4">Lorem Ipsum Dolor Sit Amet <br>Consectetur Adipiscing Elit. <br>Fugiat, Non?</p>
                </div>

                <div class="box">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712745662/root_canal_vjk8dc.jpg" alt="" width="100px" height="100px" class="center">
                    <h4>Root Canal Specialist</h4>
                    <p id="row4">Lorem Ipsum Dolor Sit Amet <br>Consectetur Adipiscing Elit. <br>Fugiat, Non?</p>
                </div>

                <div class="box">
                    <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1712745486/advisory_giyvnl.jpg" alt="" width="100px" height="100px" class="center">
                    <h4>Live Dental Advisory</h4>
                    <p id="row4">Lorem Ipsum Dolor Sit Amet <br>Consectetur Adipiscing Elit.<br> Fugiat, Non?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- services section ends -->


    <!-- reviews section starts -->
    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied clients</h1>
        <div class="box-container container d-flex flex-row justify-content-between">
            <div class="box m-3">
                <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1713017486/3_syallf.png" alt="" width="130px" height="130px">
                <p>Lorem, ipsum dolor sit amet consectetur adipiscingelit. Eos, iure? Nemo est aspernatue voluptatum id, Laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h4>Angelika</h4>
                <span>satisfied client</span>
            </div>

            <div class="box m-3">
                <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1713017476/2_qjld69.png" alt="" width="130px" height="130px">
                <p>Lorem, ipsum dolor sit amet consectetur adipiscingelit. Eos, iure? Nemo est aspernatue voluptatum id, Laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h4>John Doe</h4>
                <span>satisfied client</span>
            </div>

            <div class="box m-3">
                <img src="https://res.cloudinary.com/dqfbn2hpt/image/upload/v1713017462/1_w361pi.png" alt="" width="130px" height="130px">
                <p>Lorem, ipsum dolor sit amet consectetur adipiscingelit. Eos, iure? Nemo est aspernatue voluptatum id, Laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h4>Josephine</h4>
                <span>satisfied client</span>
            </div>
        </div>
    </section>

    <!-- reviews section ends -->

    <!-- contact section starts --> 

    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php 
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>
            <!-- <p class="message">Testing Message Box</p> -->
            <span>Your Name :</span>
            <input type="text" name="name" placeholder="enter your name" class="form-details" required>
            <span>Your Email :</span>
            <input type="email" name="email" placeholder="enter your email" class="form-details" required>
            <span>Your Number :</span>
            <input type="number" name="number" placeholder="enter your number" class="form-details" required>
            <span>Appointment Date :</span>
            <input type="datetime-local" name="date" class="form-details" required>
            <input type="submit" value="Make Appointment" name="submit" class="link-btn">
        </form>
    </section>

    <!-- contact section ends -->

    <!-- footer section starts -->
    <div class="footer">
        <div class="box-container container">
            <div class="foot">
                <i class="fas fa-phone"></i>
                <h4>phone number</h4>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="foot">
                <i class="fas fa-map-marker-alt"></i>
                <h4>our address</h4>
                <p>mumbai, india - 400104</p>
            </div>

            <div class="foot">
                <i class="fas fa-clock"></i>
                <h4>opening hours</h4>
                <p>00:07am to 10:00pm</p>
            </div>

            <div class="foot">
                <i class="far fa-envelope"></i>
                <h4>email address</h4>
                <p>abc@gmail.com</p>
                <p>xyz@gmail.com</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>DentalCare Appointment</span></div>

    <!-- footer section ends -->

    <!-- home section ends --> 


    <!-- custom js file link -->
    <script src="dental.js"></script>
    </body>
</html>
