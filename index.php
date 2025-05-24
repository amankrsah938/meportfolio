<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?> - <?=$data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-experience-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?=$data['name']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?=$data['title']?></span> from <?=$data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#experience">Experience</a></li>
          <li><a class="nav-link" href="#Projects">Projects</a></li>
          <li><a class="nav-link" href="#Education">Education</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php   
          if($data['twitter']){
        ?>
            <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php
          }
        ?>

        

        <?php   
          if($data['github']){
        ?>
            <a href="<?=$data["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['linkedin']){
        ?>
            <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
          }
        ?>

      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p> About me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/bg.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic">
            <?=$data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <!-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>#?php echo date('d M Y', strtotime($data['birthday']))?></span></li> -->
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a style="color: white;" href="<?=$data['website']?>" target="_blank"><?=$data['website']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a style="color: white;" href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$data['city']?></span></li>
                <!-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data['age']?></span></li> -->
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?=$data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?=$data['certification']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a style="color: white;" href="mailto:<?=$data['email']?>"><?=$data['email']?></a></span></li>
                <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span> -->
                  <!-- <?php 
                  if($data['freelance'] == 1){
                    echo "Available";
                  }
                  else{
                    echo "Not Available";
                  }
                  ?> -->

                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <?php
    
    $counter = "SELECT * FROM `counter`";
    $counter_result = mysqli_query($con, $counter);

    ?>
    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">
    <?php
    if($counter_result -> num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
      ?>
        <!-- <div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <i class="<?=$row['icon']?>"></i>
            <span data-purecounter-start="<?=$row['pre']?>" data-purecounter-end="<?=$row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$row['title']?></p>
          </div>
        </div> -->
        <?php
      }
    }

    ?>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
        <p>Core Technologies</p>
      </div>

      <div class="row">

      <?php
      
      $skills = "SELECT * FROM `skills`";
      $skills_result = mysqli_query($con, $skills);

      if($skills_result -> num_rows > 0){
        while($skills_row = $skills_result -> fetch_assoc()){
          ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?=$skills_row['icon']?>" style="color: #<?=$skills_row['color']?>;"></i>
                <h3><?=$skills_row['title']?></h3>
              </div>
            </div>
          <?php
        }
      }

      ?>
      </div>

    </div><!-- End Interests -->

    
    

  </section><!-- End About Section -->

  <!-- ======= experience Section ======= -->
  <section id="experience" class="experience">
  <div class="container">

    <div class="section-title">
      <h2>Professional Experience</h2>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="experience-item">
          <h4>Application Support Executive</h4>
          <h5>May 2025 - Present</h5>
          <p><b>RKV IT Solution | Purnea, Bihar</b></p>
          <ul>
            <li>Provide technical support and troubleshooting assistance for software applications to ensure smooth and uninterrupted business operations.</li>
            <li>Act as the primary point of contact between end-users and the development team, facilitating effective communication and timely resolution of issues.</li>
           
        </div>
        <div class="experience-item">
          <h4>Software Developer Intern</h4>
          <h5>1 March 2025 - April 25</h5>
          <p><b>RKV IT Solution | Patna, Bihar</b></p>
          <ul>
            <li>Design, develop, and maintain full-stack web applications using MongoDB, Express.js, React, and Node.js.</li>
            <li>Build responsive and dynamic user interfaces with React, ensuring seamless user experience across devices.</li>
            <li>Develop RESTful APIs and backend Projects with Node.js and Express.js for efficient data processing and integration.</li>
            <!-- <li>Created 4+ design presentations and proposals a month for clients and account managers</li> -->
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End experience Section -->

  <!-- ======= Projects Section ======= -->
  <section id="Projects" class="Projects">
  <div class="container">

    <div class="section-title">
      <h2>Projects</h2>
      <p>My Projects</p>
    </div>

    <?php 
      $Projects = "SELECT * FROM `Projects`";
      $Projects_result = mysqli_query($con, $Projects);
    ?>

    <div class="row">
      <?php
        if($Projects_result -> num_rows > 0){
          while($Projects_data = $Projects_result->fetch_assoc()){
            ?>
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                  <div class="icon"><i class="<?=$Projects_data['icon']?>"></i></div>
                  <h4><?=$Projects_data['title']?></h4>
                  <p><?=$Projects_data['text']?></p>
                  <a href="<?=$Projects_data['link']?>" target="_blank" class="project-link">View Project</a>
                </div>
              </div>
            <?php
          }
        } else {
          echo "No Projects Found.";
        }
      ?>
    </div>

  </div>
</section>


  <!-- End Projects Section -->

  <!-- ======= Education Section ======= -->
  <section id="Education" class="Education">
    <div class="container">

      <div class="section-title">
        <h2>Education</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="Education-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
              $cat_list = "SELECT * FROM `category`";
              $cat_result = mysqli_query($con, $cat_list);
              if($cat_result -> num_rows > 0){
                while($cat_data = $cat_result -> fetch_assoc()){
                  ?>
                  <li data-filter=".<?php echo $cat_data['name']?>"><?php echo $cat_data['name']?></li>
                  <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>

      <div class="row Education-container">
        <?php
          $Education = "SELECT * FROM `Education`";
          $Education_result = mysqli_query($con, $Education);

          if($Education_result -> num_rows > 0){
            while($Education_data = $Education_result->fetch_assoc()){
              $category = $Education_data['category'];
                $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
                $category_result = mysqli_query($con, $category_sql);
                $category_data = mysqli_fetch_assoc($category_result);
              ?>
                <div class="col-lg-4 col-md-6 Education-item <?=$category_data['name']?>">
                  <div class="Education-wrap">
                    <img src="<?=$Education_data['image']?>" class="img-fluid" alt="">
                    <div class="Education-info">
                      <h4><?=$Education_data['title']?></h4>
                      <p><?=$category_data['name']?></p>
                      <div class="Education-links">
                        <a href="<?=$Education_data['image']?>" data-gallery="EducationGallery" class="Education-lightbox" title="<?php echo $Education_data['title']?>"><i class="bx bx-plus"></i></a>
                        <a href="Education-details.php?id=<?php echo $Education_data['id']?>" data-gallery="EducationDetailsGallery" data-glightbox="type: external" class="Education-details-lightbox" title="Education Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }
          else{
            echo "NO Education Found.";
          }
        ?>
      </div>

    </div>
  </section><!-- End Education Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Patna</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php   
                if($data['twitter']){
              ?>
                  <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php
                }
              ?>

              <!-- <?php   
                if($data['facebook']){
              ?>
                  <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['instagram']){
              ?>
                  <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['youtube']){
              ?>
                  <a href="<?=$data["youtube"]?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
              <?php
                }
              ?> -->

              <?php   
                if($data['github']){
              ?>
                  <a href="<?=$data["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['linkedin']){
              ?>
                  <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php
                }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php 
    
    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result = mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);

    ?>
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-experience-bootstrap-template/ -->
      © 2025   <a href="<?=$details_data['url']?>" target="_blank"><?=$details_data['company']?></a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>