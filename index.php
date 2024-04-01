<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>SCA Gene - Home</title>
  <meta name="title" content="Doclab - home">
  <meta name="description" content="This is a madical html template made by BTLeonce">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo2.svg" width="136" height="46" alt="SCE Gene home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo2.svg" width="136" height="46" alt="SCE Gene home">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="./index.php" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="./pages/articles.php" class="navbar-link title-md">Articles</a>
          </li>

          <li class="navbar-item">
            <a href="./pages/gallery.php" class="navbar-link title-md">ACR/CCA Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="./pages/contact.php" class="navbar-link title-md">Contact</a>
          </li>

          <li class="navbar-item">
            <a href="./login.php" class="title-md navbar-link">Login</a>
          </li>


        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="./login.php" class="btn has-before title-md">Login</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Welcome To SCA Gene</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
            Empowering Lives,
<br>
One Cell at a Time
            </h1>

            <!-- <div class="hero-card" data-reveal="left">

              <p class="title-lg card-text">
                Search doctors. clinics. hospitals. etc.
              </p>

              <div class="wrapper">

                <div class="input-wrapper title-lg">
                  <input type="text" name="location" placeholder="Locations" class="input-field">

                  <ion-icon name="location"></ion-icon>
                </div>

                <button class="btn has-before">
                  <ion-icon name="search"></ion-icon>

                  <span class="span title-md">Find Now</span>
                </button>

              </div>

            </div> -->

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/R.png" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>



      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left">About Us</p>

            <h2 class="headline-md" data-reveal="left">A site dedicated to Sickle Cell Anemia</h2>

            <p class="section-text" data-reveal="left">
              Explore our user-friendly platform to access detailed explanations about the causes, symptoms, and complications of sickle cell anemia. 
              We provide insights into treatment options, ongoing research, and lifestyle management strategies.
            </p>


            <p class="tab-text" data-reveal="left">
              Practical resources, such as support networks, treatment centers, and latest advancements, are also featured, 
              making it a valuable hub for those affected by or interested in understanding Sickle Cell Anemia.
            </p>

            <div class="wrapper">

              <ul class="about-list">

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Latest Research Updates</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Patient Stories</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Expert Interviews</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Resources for Daily Living</span>
                </li>

              </ul>

            </div>

          </div>

          <figure class="about-banner" data-reveal="right">
            <img src="./assets/images/about-banner.png" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #LISTING
      -->

      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">

          <ul class="grid-list">

            <li>
              <!-- <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Various Aspects</p> -->

              <h2 class="headline-md" data-reveal="left">Browse by various aspects</h2>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title"> Causes</h3>

                  <p class="card-text">Origins Contributors</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Symptoms</h3>

                  <p class="card-text">Manifestations Signs</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Diagnosis</h3>

                  <p class="card-text">Identification Recognition</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-5.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Treatment Options</h3>

                  <p class="card-text">Healing alternatives</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-6.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Impact</h3>

                  <p class="card-text">Effect Implication</p>
                </div>

              </div>
            </li>


          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
            News & Article
          </p>

          <h2 class="section-title headline-md text-center" data-reveal="bottom">Latest Articles</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

               
                <h3 class="headline-sm card-title">Advances in the research of sickle cell disease</h3>

                <time class="title-sm date" datetime="2022-01-28">December, 2022</time>

                <p class="card-text">
                  This article discusses recent advances in the diagnosis and management of four major complications in SCD: acute and chronic pain, 
                  cardiopulmonary disease, central nervous system disease, and kidney disease. It also discusses advances in disease-modifying and curative 
                  therapeutic options for SCD.
                </p>

                <a href="https://jhoonline.biomedcentral.com/articles/10.1186/s13045-022-01237-z" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">



                <h3 class="headline-sm card-title">Sickle Cell Anemia News</h3>

                <time class="title-sm date" datetime="2022-01-28">30 August, 2023</time>

                <p class="card-text">
                  This article reports on recent research that has found that an enriched diet and companionship can reduce pain in mice with sickle cell disease by increasing serotonin. 
                  It also discusses the use of CRISPR technology to cure sickle cell disease.
                </p>

                <a href="https://www.sciencedaily.com/news/health_medicine/sickle_cell_anemia/" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

            

                <h3 class="headline-sm card-title">Sickle Cell Disease</h3>

                <time class="title-sm date" datetime="2022-01-28">January, 2023</time>

                <p class="card-text">
                  This article provides an overview of sickle cell anemia, including its genetic basis, symptoms, and treatment options.
                </p>

                <a href="https://www.genomicseducation.hee.nhs.uk/genotes/knowledge-hub/sickle-cell-anaemia/" class="btn-text title-lg">Read More</a>

              </div>
            </li>

          </ul>

        </div>
        <a href="./pages/articles.php" class="btn has-before title-md" style="margin: 0 auto;top:25px;position;relative;width:150px">View More</a>
      </section>

    </article>
  </main>


  <!-- image card slider  -->
    <div class="txt_img" style="position:relative; bottom:40px;">
      <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
        
      </p>

      <h2 class="section-title headline-md text-center" data-reveal="bottom">Sickle Cells Association</h2>
    </div>
    <div class="slider owl-carousel">
      
      <div class="card">
        <div class="img"><img src="./assets/img/8.jpg" alt="" ></div>
        <div class="content">
          <!-- <div class="title">Briana Tozour</div> -->
          <!-- <div class="sub-title">Christmas tree 2019</div> -->
          <p>Les activités de l'association au Cameroun.</p>
          
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="./assets/img/2.jpg" alt=""></div>
        <div class="content">
          <!-- <div class="title">Pricilla Preez</div> -->
          <!-- <div class="sub-title">Web Developer</div> -->
          <p>Raising awareness in the collection zones and distribution of clothes to children.
            Awareness in the Removed Areas and Donations.</p>
          
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="./assets/img/3.jpg" alt=""></div>
        <div class="content">
          <!-- <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div> -->
          <p>Visite aux enfants hospitalisés.</p>
          
        </div>
      </div>
      
      <div class="card">
        <div class="img"><img src="./assets/img/5.jpg" alt=""></div>
        <div class="content">
          <!-- <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div> -->
          <p>Raising awareness in the collection zones and distribution of clothes to children.</p>
          
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="./assets/img/6.jpg" alt=""></div>
        <div class="content">
          <!-- <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div> -->
          <p>Les activités de l'association au Cameroun</p>
          
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="./assets/img/7.jpg" alt=""></div>
        <div class="content">
          <!-- <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div> -->
          <p>Journée internationale de la drépanocytose 29 juin 2020 Yaoundé/ Cameroun</p>
          
        </div>
      </div>
    </div>

  <!-- end of image card slider  -->

  
  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="./assets/images/logo2.svg" width="136" height="46" loading="lazy" alt="SCE Gene home">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Main Email : <a href="mailto:contact@website.com" class="contact-link">contact@&shy;website.com</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Office Telephone : <a href="tel:0029129102320" class="contact-link">0029129102320</a>
                </p>

                <p>
                  Mobile : <a href="tel:000232439493" class="contact-link">000 2324 39493</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">About Us</p>

          <p class="text">
            This website is designed to offer clear, reliable, 
            and up-to-date information about sickle cell anemia, a genetic blood disorder affecting red blood cells.
          </p>

          <!-- <address class="address">
            <ion-icon name="map-outline"></ion-icon>

            <span class="text">
              2416 Mapleview Drive <br>
              Tampa, FL 33634
            </span>
          </address> -->

        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

            
          <li>
              <a href="#" class="text footer-link">Listing</a>
          </li>

          <li>
              <a href="#" class="text footer-link">How It Works</a>
          </li>

          <li>
              <a href="#" class="text footer-link">What We Offer</a>
          </li>


        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="./pages/Faqs.php" class="text footer-link">FAQS</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Circle Cells Association gallery</a>
          </li>

        </ul>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Subscribe</p>

          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email" class="input-field title-lg">

            <button type="submit" class="btn has-before title-md">Subscribe</button>
          </form>

          <p class="text">
            Get the latest updates via email. Any time you may unsubscribe
          </p>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; SCA Gen 2024 | All Rights Reserved
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>


  <!-- card slider script -->
    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>