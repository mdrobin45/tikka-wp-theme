<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php bloginfo('title')?> - <?php bloginfo('description')?></title>

      <!-- Favicon -->
      <link
         rel="shortcut icon"
         href="./assets/images/favicon.ico"
         type="image/x-icon" />
         <?php wp_head();?>
   </head>
   <body id="page-top">
      <main>
         <!-- Mobile Menu -->
         <nav id="mobile-nav" class="d-lg-none">
            <ul class="right-nav">
               <li>
                  <img src="<?php get_template_directory_uri();?>/assets/images/home/tikka-logo.png" alt="Logo" />
               </li>
            </ul>
            <label for="toggleMainNav" class="hamburger-menu"></label>
            <input type="checkbox" id="toggleMainNav" class="check-toggle" />
            <label for="toggleMainNav" class="menu-overlay"></label>
            <div class="main-nav-holder">
               <ul class="main-nav">
                  <li class="close-nav">
                     <label for="toggleMainNav"></label>
                  </li>
                  <li class="has-submenu">
                     <input
                        type="checkbox"
                        id="labelMen"
                        class="check-toggle" />
                     <label for="labelMen">Home</label>

                     <i class="menu-caret"></i>
                     <ul class="submenu">
                        <li>
                           <a href="./index.html">Home 1</a>
                        </li>
                        <li>
                           <a href="./index-2.html">Home 2</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="./about.html">About Us</a>
                  </li>
                  <li class="has-submenu">
                     <input
                        type="checkbox"
                        id="labelproject"
                        class="check-toggle" />
                     <label for="labelproject">Projects</label>

                     <i class="menu-caret"></i>
                     <ul class="submenu">
                        <li>
                           <a href="./project.html">Projects</a>
                        </li>
                        <li>
                           <a href="./project-details.html">Project Details</a>
                        </li>
                     </ul>
                  </li>
                  <li></li>
                  <li class="has-submenu">
                     <input
                        type="checkbox"
                        id="labelBlog"
                        class="check-toggle" />
                     <label for="labelBlog">Blog</label>

                     <i class="menu-caret"></i>
                     <ul class="submenu">
                        <li>
                           <a href="./blog.html">Blog</a>
                        </li>
                        <li>
                           <a href="./single-blog.html">Blog Details</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="./contact.html">Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>

         <!-- Start: Hero section -->
         <div class="hero-main-section">
            <div class="container">
               <!-- Navigation start -->
               <header
                  data-aos="fade-down"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                  class="d-none d-lg-flex align-items-center justify-content-between navMainWrapper">
                  <!-- Logo -->
                  <a href="./index.html">
                     <div
                        class="d-flex align-items-center text-white m-0 text-uppercase gap-2">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/home/logo.svg" alt="Logo" />
                        <h3>Tikka</h3>
                     </div>
                  </a>

                  <!-- Menu links -->
                  <div
                     class="d-flex align-items-center justify-content-end menuWrapper">
                     <nav class="navbarLinksWrapper d-flex align-items-center">
                        <div class="dropdown">
                           <p
                              class="dropdown-toggle p-0 text-white cursor-pointer"
                              id="dropdownMenuButton"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              role="button">
                              Home <i class="fa-solid fa-angle-down"></i>
                           </p>
                           <div
                              class="dropdown-menu dropdown-menu-end animate slideIn"
                              aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="./index.html"
                                 >Home 1</a
                              >
                              <a class="dropdown-item" href="./index-2.html"
                                 >Home 2</a
                              >
                           </div>
                        </div>
                        <a href="./about.html">About Us</a>
                        <div class="dropdown">
                           <p
                              class="dropdown-toggle cursor-pointer p-0 text-white"
                              id="ProjectDropdownBtn"
                              role="button"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              Projects <i class="fa-solid fa-angle-down"></i>
                           </p>
                           <div
                              class="dropdown-menu dropdown-menu-end animate slideIn"
                              aria-labelledby="ProjectDropdownBtn">
                              <a class="dropdown-item" href="./project.html"
                                 >Projects</a
                              >
                              <a
                                 class="dropdown-item"
                                 href="./project-details.html"
                                 >Project Details</a
                              >
                           </div>
                        </div>
                        <div class="dropdown">
                           <p
                              class="dropdown-toggle cursor-pointer p-0 text-white"
                              id="pagesDropdownBtn"
                              role="button"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              Blog <i class="fa-solid fa-angle-down"></i>
                           </p>
                           <div
                              class="dropdown-menu dropdown-menu-end animate slideIn"
                              aria-labelledby="pagesDropdownBtn">
                              <a class="dropdown-item" href="./blog.html"
                                 >Blog</a
                              >
                              <a class="dropdown-item" href="./single-blog.html"
                                 >Blog Details</a
                              >
                           </div>
                        </div>
                        <a href="./contact.html">Contact</a>
                     </nav>
                  </div>

                  <!-- Button -->
                  <div>
                     <a href="./contact.html">
                        <div
                           class="button navBtn d-flex justify-content-center align-items-center">
                           Hire Me
                           <p class="btn-plus-icon d-flex">
                              <i class="fa-solid fa-plus btnIcon"></i>
                           </p>
                        </div>
                     </a>
                  </div>
               </header>
               <!-- Navigation end -->

               <!-- Banner section start -->
               <div class="row home-banner">
                  <!-- Banner left side -->
                  <div class="col-12 col-lg-6 pe-0 pe-lg-0">
                     <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        class="subtitle">
                        Hello I’am
                     </p>
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="bannerTitle">
                        Darlene <span class="highlightedWord">Robertson</span>
                     </h1>
                     <h2
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="designation">
                        Web Designer
                     </h2>
                     <p
                        data-aos="fade-up"
                        data-aos-delay="300"
                        data-aos-duration="1000"
                        class="gray-paragraph">
                        Financial planners help people to gain knowledge about
                        toio invest and save their money in the most efficient
                     </p>
                     <ul class="home-banner-list-wrapper">
                        <li
                           data-aos="fade-up"
                           data-aos-delay="400"
                           data-aos-duration="1000">
                           <div
                              class="home-banner-checked-item element-list-item">
                              <i
                                 class="fa-regular fa-circle-check text-color home-banner-check-icon"></i
                              ><span>Achieve Excellence Academy</span>
                           </div>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="500"
                           data-aos-duration="1000">
                           <div
                              class="element-list-item home-banner-checked-item">
                              <i
                                 class="fa-regular fa-circle-check text-color home-banner-check-icon"></i>
                              <span>Pathway to Success Coaching </span>
                           </div>
                        </li>
                     </ul>
                     <div
                        class="banner-buttons d-md-flex flex-column flex-md-row position-relative">
                        <a
                           data-aos="fade-up"
                           data-aos-delay="600"
                           data-aos-duration="1000"
                           href="./contact.html"
                           class="button fillBtn">
                           <div
                              class="d-flex align-items-center justify-content-center m-0 btn-inner-wrapper">
                              <span class="d-block btn-text"> Hire Me </span>
                              <p class="btn-plus-icon d-flex">
                                 <i class="fa-solid fa-plus btnIcon"></i>
                              </p>
                           </div>
                        </a>
                        <a
                           target="_blank"
                           data-aos="fade-up"
                           data-aos-delay="700"
                           data-aos-duration="1000"
                           href="#popup-with-something"
                           class="open-popup-link banner-play-button mt-4 mt-md-0">
                           <img
                              src="<?php echo get_template_directory_uri();?>/assets/images/home/banner-play-icon.svg"
                              alt="Banner Play Icon" />
                           <h4>Watch Now</h4>
                        </a>

                        <!-- Video popup -->
                        <div id="popup-with-something" class="mfp-hide">
                           <div class="some-element video-popup-element">
                              <iframe
                                 src="https://www.youtube.com/embed/D0UnqGm_miA?si=hJ-sjK_-D_7mO120"
                                 title="YouTube video player"
                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                 allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Banner right side -->
                  <div class="col-12 col-lg-6">
                     <div
                        data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="banner-right-image-inner-wrapper">
                           <img
                              class="w-100"
                              src="<?php echo get_template_directory_uri();?>/assets/images/home/home-top-banner-right-image.png"
                              alt="Banner Right Image" />
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Banner section end -->
            </div>
         </div>
         <!-- End: Hero section -->
         <!-- ============================================ -->

         <!-- Start: Counter section -->
         <div class="container">
            <div class="counter-section">
               <div class="row g-3 g-lg-0">
                  <div
                     class="col-6 col-lg-3 d-flex flex-column justify-content-center m-0">
                     <div
                        data-aos="fade-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="counter-item p-2 p-lg-0 text-center">
                        <h1><span class="counterup">260</span>+</h1>
                        <p class="white-paragraph counter-title">Team member</p>
                     </div>
                  </div>

                  <div
                     class="col-6 col-lg-3 d-flex flex-column justify-content-center m-0">
                     <div
                        data-aos="fade-in"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="counter-item p-2 p-lg-0 text-center">
                        <h1><span class="counterup2">46</span>+</h1>
                        <p class="white-paragraph counter-title">
                           Winning award
                        </p>
                     </div>
                  </div>
                  <div
                     class="col-6 col-lg-3 d-flex flex-column justify-content-center m-0">
                     <div
                        data-aos="fade-in"
                        data-aos-delay="300"
                        data-aos-duration="1000"
                        class="counter-item p-2 p-lg-0 text-center">
                        <h1><span class="counterup3">27</span>k+</h1>
                        <p class="white-paragraph counter-title">
                           Complete project
                        </p>
                     </div>
                  </div>
                  <div
                     class="col-6 col-lg-3 d-flex flex-column justify-content-center m-0">
                     <div
                        data-aos="fade-in"
                        data-aos-delay="400"
                        data-aos-duration="1000"
                        class="text-center p-2 p-lg-0 counter-item-last">
                        <h1><span class="counterup4">1500</span>+</h1>
                        <p class="white-paragraph counter-title">
                           Client review
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End: Counter section -->
         <!-- ============================================ -->

         <!-- Start: About me section -->
         <div class="container">
            <div class="row gx-5">
               <!-- Left image -->
               <div class="col-12 col-lg-6 mt-5 mt-lg-0 position-relative">
                  <div class="shine-image-wrapper">
                     <figure class="b-left-radius b-right-radius">
                        <img
                           class="w-100"
                           src="<?php echo get_template_directory_uri();?>/assets/images/home/aboutMe.png"
                           alt="A men taking care of a dog" />
                     </figure>
                  </div>

                  <div
                     data-aos="fade-right"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="about-badge">
                     <div class="badge-inner">
                        <img
                           src="<?php echo get_template_directory_uri();?>/assets/images/home/person-icon.svg"
                           alt="Person Icon" />
                        <div class="badge-info-wrapper">
                           <h2 class="badge-title">3K+</h2>
                           <p class="badge-text">Satisfied Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Right about details -->
               <div class="col-12 col-lg-6 d-flex pt-4 pt-lg-0">
                  <div class="d-flex flex-column justify-content-center">
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="sub-heading-text sub-heading-1">
                        About Me
                     </h1>
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="abt-title">
                        Designing Success One Project at a Time
                     </h1>
                     <p
                        data-aos="fade-up"
                        data-aos-delay="300"
                        data-aos-duration="1000"
                        class="gray-paragraph my-30 about-description-main-home">
                        Financial planners help people to gain knowledge aboutw
                        toio invest and save their money in the most efficient
                        way ever. Many people all of
                     </p>
                     <div>
                        <ul class="horizontal-list-items">
                           <li
                              data-aos="fade-up"
                              data-aos-delay="400"
                              data-aos-duration="1000">
                              <div class="element-list-item">
                                 <i
                                    class="fa-solid fa-angles-right text-color"></i
                                 ><span>Web Designer</span>
                              </div>
                           </li>
                           <li
                              data-aos="fade-up"
                              data-aos-delay="500"
                              data-aos-duration="1000">
                              <div class="element-list-item">
                                 <i
                                    class="fa-solid fa-angles-right text-color"></i
                                 ><span>Product Designer</span>
                              </div>
                           </li>
                           <li
                              data-aos="fade-up"
                              data-aos-delay="600"
                              data-aos-duration="1000">
                              <div class="element-list-item">
                                 <i
                                    class="fa-solid fa-angles-right text-color"></i
                                 ><span>Product Designer</span>
                              </div>
                           </li>
                           <li
                              data-aos="fade-up"
                              data-aos-delay="700"
                              data-aos-duration="1000">
                              <div class="element-list-item">
                                 <i
                                    class="fa-solid fa-angles-right text-color"></i
                                 ><span>Product Designer</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <!-- <a href="#" class="btn">
                        <span> Hire Me <i class="fa-solid fa-plus"></i> </span>
                     </a> -->
                     <div
                        class="about-btn-wrapper align-items-md-center align-items-start d-flex flex-column flex-md-row">
                        <a
                           data-aos="fade-up"
                           data-aos-delay="800"
                           data-aos-duration="1000"
                           href="./contact.html"
                           class="button outlineBtn">
                           <div
                              class="d-flex align-items-center justify-content-center m-0 btn-inner-wrapper">
                              <span class="d-block btn-text"> Hire Me </span>
                              <p class="btn-plus-icon d-flex">
                                 <i class="fa-solid fa-plus btnIcon"></i>
                              </p>
                           </div>
                        </a>
                        <div
                           data-aos="fade-up"
                           data-aos-delay="1000"
                           data-aos-duration="1000"
                           class="d-flex align-items-center abt-need-help-wrapper">
                           <img
                              src="<?php echo get_template_directory_uri();?>/assets/images/home/phone-call-icon.png"
                              alt="24 Hour Phone Call Icon" />
                           <div>
                              <p class="gray-paragraph">Need help?</p>
                              <a href="tel:(319)5550115" class="white-paragraph"
                                 >(319) 555-0115</a
                              >
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End: About me section -->
         <!-- ============================================ -->

         <!-- Start: Education & skills section -->
         <div class="container section-space">
            <!-- Education & Skills header -->
            <div
               class="row mx-3 mx-md-0 align-items-end education-and-skills-header">
               <div class="col-12 col-lg-6 p-0">
                  <h1
                     data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="sub-heading-text sub-heading-1 education-section-subtitle">
                     Education and skills
                  </h1>
                  <h1
                     data-aos="fade-up"
                     data-aos-delay="200"
                     data-aos-duration="1000">
                     Transforming Concepts into Captivating Designs
                  </h1>
               </div>
               <div
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                  class="col-12 col-lg-6 education-skills-header-description">
                  <p class="gray-paragraph">
                     Financial planners help people to gain knowledge aboutw
                     toio invest and save their monFinancial planners help
                     people to gain knowledge aboutw toio invest and save their
                     money
                  </p>
               </div>
            </div>

            <!-- Education and skills content -->
            <div class="skills-area mx-3">
               <!-- Wordpress developer -->
               <div
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000">
                  <p class="job-duration">2014 - 2018</p>
                  <h3 class="edu-and-skills-title">
                     Wordpress and End Developer
                  </h3>
                  <p class="gray-paragraph">
                     Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                     odit aut fugit sed thisnquia consequuntur magni dolores eos
                     qui ratione voluptatem
                  </p>

                  <!-- Progress bar -->
                  <div
                     class="progress-wrapper-1 wordpress-dev-progress-wrapper index-skill-bar">
                     <div
                        class="d-flex align-items-end progress-1 wordpress-dev-progress justify-content-between">
                        <p class="m-0 d-inline-block">Skills</p>
                        <p class="m-0 d-inline-block">75%</p>
                     </div>
                  </div>
               </div>

               <!-- Python developer -->
               <div
                  data-aos="fade-left"
                  data-aos-delay="100"
                  data-aos-duration="1000">
                  <p class="job-duration">2012 - 2014</p>
                  <h3 class="edu-and-skills-title">Python Developer</h3>
                  <p class="gray-paragraph">
                     Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                     odit aut fugit sed thisnquia consequuntur magni dolores eos
                     qui ratione voluptatem
                  </p>

                  <!-- Progress bar -->
                  <div
                     class="progress-wrapper-1 python-dev-progress-wrapper index-skill-bar">
                     <div
                        class="d-flex align-items-end progress-1 python-dev-progress justify-content-between">
                        <p class="m-0 d-inline-block">Skills</p>
                        <p class="m-0 d-inline-block">90%</p>
                     </div>
                  </div>
               </div>

               <!-- Kent State University -->
               <div
                  data-aos="fade-right"
                  data-aos-delay="200"
                  data-aos-duration="1000">
                  <p class="job-duration">2005 - 2009</p>
                  <h3 class="edu-and-skills-title">Kent State University</h3>
                  <p class="gray-paragraph">
                     Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                     odit aut fugit sed thisnquia consequuntur magni dolores eos
                     qui ratione voluptatem
                  </p>

                  <!-- Progress bar -->
                  <div
                     class="progress-wrapper-1 index-skill-bar ken-university-progress-wrapper">
                     <div
                        class="d-flex align-items-end progress-1 ken-university-progress justify-content-between">
                        <p class="m-0 d-inline-block">Skills</p>
                        <p class="m-0 d-inline-block">80%</p>
                     </div>
                  </div>
               </div>

               <!-- User experience design -->
               <div
                  data-aos="fade-left"
                  data-aos-delay="300"
                  data-aos-duration="1000">
                  <p class="job-duration">2009 - 2012</p>
                  <h3 class="edu-and-skills-title">User Experience Design</h3>
                  <p class="gray-paragraph">
                     Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                     odit aut fugit sed thisnquia consequuntur magni dolores eos
                     qui ratione voluptatem
                  </p>

                  <!-- Progress bar -->
                  <div
                     class="progress-wrapper-1 ui-design-progress-wrapper index-skill-bar">
                     <div
                        class="d-flex align-items-end progress-1 ui-design-progress justify-content-between">
                        <p class="m-0 d-inline-block">Skills</p>
                        <p class="m-0 d-inline-block">90%</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End: Education & skills section -->
         <!-- ============================================ -->

         <!-- Start: My service section -->
         <div class="section-bg section-space my-service-section">
            <div class="container">
               <!-- Section header -->
               <div class="text-center">
                  <h1
                     data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="sub-heading-text sub-heading-1 service-section-subtitle">
                     My Services
                  </h1>
                  <h1
                     data-aos="fade-up"
                     data-aos-delay="200"
                     data-aos-duration="1000">
                     Showcasing Ambitions <br />
                     Skills Achievements
                  </h1>
               </div>

               <!-- Services cards -->
               <div class="row service-cards-row gap-4 gap-md-0">
                  <!-- Card-1 -->
                  <div
                     data-aos="fade-up"
                     data-aos-duration="1000"
                     class="col-12 mt-lg-0 mt-3 col-lg-4 m-0">
                     <div class="service-card">
                        <img
                           src="<?php echo get_template_directory_uri();?>/assets/images/home/document-icon.png"
                           alt="Content Writing" />
                        <div class="my-30">
                           <h3 class="main-home-service-title">
                              Content writing
                           </h3>
                           <p class="gray-paragraph">
                              Financial planners help people to gain knowledge
                              aboutw toio invest and save their money in the
                              most
                           </p>
                        </div>

                        <!-- Link button -->
                        <a class="link-btn" href="./project-details.html"
                           >Learn More
                           <i class="fa-solid fa-arrow-right btn-right-icon"></i
                        ></a>
                     </div>
                  </div>

                  <!-- Card-2 -->
                  <div
                     data-aos="fade-up"
                     data-aos-delay="200"
                     data-aos-duration="1000"
                     class="col-12 mt-lg-0 mt-3 col-lg-4 m-0">
                     <div class="service-card">
                        <img
                           src="<?php echo get_template_directory_uri();?>/assets/images/home/history-icon.png"
                           alt="SEO optimization" />
                        <div class="my-30">
                           <h3>SEO optimization</h3>
                           <p class="gray-paragraph">
                              Financial planners help people to gain knowledge
                              aboutw toio invest and save their money in the
                              most
                           </p>
                        </div>

                        <!-- Link button -->
                        <a class="link-btn" href="./project-details.html"
                           >Learn More
                           <i class="fa-solid fa-arrow-right btn-right-icon"></i
                        ></a>
                     </div>
                  </div>

                  <!-- Card-3 -->
                  <div
                     data-aos="fade-up"
                     data-aos-delay="400"
                     data-aos-duration="1000"
                     class="col-12 col-lg-4 mt-lg-0 mt-3 m-0 mt-0 mt-lg-0 mt-md-4">
                     <div class="service-card">
                        <img
                           src="<?php echo get_template_directory_uri();?>/assets/images/home/home-icon.png"
                           alt="Graphic design" />
                        <div class="my-30">
                           <h3>Graphic design</h3>
                           <p class="gray-paragraph">
                              Financial planners help people to gain knowledge
                              aboutw toio invest and save their money in the
                              most
                           </p>
                        </div>

                        <!-- Link button -->
                        <a class="link-btn" href="./project-details.html"
                           >Learn More
                           <i class="fa-solid fa-arrow-right btn-right-icon"></i
                        ></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End: My services section -->
         <!-- ============================================ -->

         <!-- Features card -->
         <div class="container">
            <div class="d-flex justify-content-center justify-content-lg-end">
               <div class="featured-section p-4">
                  <div
                     class="position-relative single-feature-image w-100 w-lg-75 z-1 mt-5 mt-lg-0">
                     <img
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="featured-image w-100 w-md-auto"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/featured-image.png"
                        alt="Feature Card Image" />
                  </div>
                  <div>
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="sub-heading-text sub-heading-1">
                        Features
                     </h1>
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000">
                        Achieving milestones with determination
                     </h1>
                     <p
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="gray-paragraph mt-4">
                        Financial planners help people to gain knowledge aboutw
                        toio invest and save their money in the most effici save
                        their money in the most efficient way ever. Many people
                        all of
                     </p>
                     <div class="row mt-4">
                        <div class="col-12 col-lg-6">
                           <!-- First two features -->
                           <ul class="features-list">
                              <li
                                 data-aos="fade-up"
                                 data-aos-delay="100"
                                 data-aos-duration="1000">
                                 <div class="element-list-item">
                                    <i class="fa-solid fa-check text-color"></i
                                    ><span>Mistakes To Avoid</span>
                                 </div>
                              </li>
                              <li
                                 data-aos="fade-up"
                                 data-aos-delay="200"
                                 data-aos-duration="1000">
                                 <div class="element-list-item">
                                    <i class="fa-solid fa-check text-color"></i
                                    ><span>Knew About Fonts</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                           <ul class="features-list">
                              <li
                                 data-aos="fade-up"
                                 data-aos-delay="300"
                                 data-aos-duration="1000">
                                 <div class="element-list-item">
                                    <i class="fa-solid fa-check text-color"></i
                                    ><span>Your Startup</span>
                                 </div>
                              </li>
                              <li
                                 data-aos="fade-up"
                                 data-aos-delay="400"
                                 data-aos-duration="1000">
                                 <div class="element-list-item">
                                    <i class="fa-solid fa-check text-color"></i
                                    ><span>Winning Startup</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Start:Portfolio section -->
         <div class="container">
            <!-- Portfolio section header -->
            <div class="row align-items-center">
               <!-- Title section -->
               <div class="col-lg-6">
                  <h1
                     class="sub-heading-text sub-heading-1"
                     data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-duration="1000">
                     My Portfolio
                  </h1>
                  <h1
                     data-aos="fade-up"
                     data-aos-delay="200"
                     data-aos-duration="1000">
                     Resonating Professionalism and Accomplishments
                  </h1>
               </div>
               <div
                  class="col-lg-6 d-flex justify-content-lg-end justify-content-start my-3 my-lg-0">
                  <a
                     data-aos="fade-left"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     href="./project.html"
                     class="button fillBtn">
                     <div
                        class="d-flex align-items-center justify-content-center m-0 btn-inner-wrapper">
                        <span class="d-block btn-text"> View More </span>
                     </div>
                  </a>
               </div>
            </div>

            <!-- Portfolio Cards -->
            <div class="portfolio-cards-wrappers">
               <!-- Card-1: Video Editing -->
               <div class="row align-items-center">
                  <div
                     data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="col-12 col-lg-8">
                     <div class="d-lg-flex">
                        <div class="shine-image-wrapper">
                           <figure class="b-left-radius">
                              <img
                                 class="portfolio-image w-100"
                                 src="<?php echo get_template_directory_uri();?>/assets/images/home/video-editing-portfolio.png"
                                 alt="Portfolio Image" />
                           </figure>
                        </div>
                        <div
                           class="portfolio-card-content d-flex flex-column justify-content-center">
                           <p class="text-color">Video Editing</p>
                           <div class="my-10">
                              <h3>Promoting Excellence in Professional</h3>
                              <p class="gray-paragraph">
                                 Financial planners help people to gain
                                 knowledge aboutw toio invest
                              </p>
                           </div>

                           <a class="link-btn" href="./project-details.html"
                              >Learn More
                              <i
                                 class="fa-solid fa-arrow-right btn-right-icon"></i
                           ></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 d-lg-block d-none ps-5">
                     <img
                        data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/portfolio-watermark.svg"
                        alt="Watermark" />
                  </div>
               </div>

               <!-- Card-2: Web Development -->
               <div class="row align-items-center">
                  <div class="col-12 col-lg-8 mx-auto">
                     <div
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="d-lg-flex">
                        <div class="shine-image-wrapper">
                           <figure class="b-left-radius">
                              <img
                                 class="portfolio-image w-100"
                                 src="<?php echo get_template_directory_uri();?>/assets/images/home/web-development-portfolio.png"
                                 alt="Portfolio Image" />
                           </figure>
                        </div>
                        <div
                           class="portfolio-card-content d-flex flex-column justify-content-center">
                           <p class="text-color">Web Development</p>
                           <div class="my-10">
                              <h3>looking to create a personal portfolio</h3>
                              <p class="gray-paragraph">
                                 Financial planners help people to gain
                                 knowledge aboutw toio invest
                              </p>
                           </div>

                           <!-- Link button -->
                           <a class="link-btn" href="./project-details.html"
                              >Learn More
                              <i
                                 class="fa-solid fa-arrow-right btn-right-icon"></i
                           ></a>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Card-3: Copywriting -->
               <div class="row align-items-center">
                  <div
                     data-aos="fade-right"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="col-12 col-lg-4 d-lg-block d-none">
                     <img
                        class="w-75"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/portfolio-watermark-2.svg"
                        alt="Watermark" />
                  </div>
                  <div
                     data-aos="fade-left"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="col-12 col-lg-8">
                     <div class="d-lg-flex">
                        <div class="shine-image-wrapper">
                           <figure class="b-left-radius">
                              <img
                                 class="portfolio-image w-100"
                                 src="<?php echo get_template_directory_uri();?>/assets/images/home/copywriting-portfolio.png"
                                 alt="Portfolio Image" />
                           </figure>
                        </div>
                        <div
                           class="portfolio-card-content d-flex flex-column justify-content-center">
                           <p class="text-color">Copywriting</p>
                           <div class="my-10">
                              <h3>You'll want to include information that</h3>
                              <p class="gray-paragraph">
                                 Financial planners help people to gain
                                 knowledge aboutw toio invest
                              </p>
                           </div>

                           <!-- Link button -->
                           <a class="link-btn" href="./project-details.html"
                              >Learn More
                              <i
                                 class="fa-solid fa-arrow-right btn-right-icon"></i
                           ></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End: Portfolio section -->
         <!-- ============================================ -->

         <!-- Start: Newsletter subscription -->
         <div class="container">
            <div class="align-items-center row newsletter-section-wrapper">
               <div class="col-12 col-lg-6 p-0">
                  <div
                     class="d-flex flex-column h-100 justify-content-center newsletter-content">
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="sub-heading-text sub-heading-1">
                        Call To Action
                     </h1>
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="my-3 subscription-form-title position-relative">
                        Subscribe to Our Newsletter
                     </h1>
                     <p
                        data-aos="fade-up"
                        data-aos-delay="300"
                        data-aos-duration="1000"
                        class="gray-paragraph">
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page when
                     </p>
                  </div>
               </div>
               <div class="col-12 col-lg-6 newsletter-form-wrapper p-0">
                  <form
                     data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="align-items-center d-flex flex-column flex-md-row gap-4 h-100 justify-content-between newsletter-form">
                     <input
                        class="inputField w-100"
                        type="text"
                        placeholder="Enter Your Email" />
                     <button
                        class="button d-flex fillBtn justify-content-center w-100">
                        Subscribe
                     </button>
                  </form>
               </div>
            </div>
         </div>
         <!-- End: Newsletter subscription section -->
         <!-- ============================================ -->

         <!-- Start: Logos section -->
         <div class="container pb-120">
            <div class="logo_carousel owl-carousel owl-theme">
               <div class="item">
                  <div class="align-items-center d-flex justify-content-center">
                     <img
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/company-5.png"
                        alt="Travel" />
                  </div>
               </div>
               <div class="item">
                  <div class="align-items-center d-flex justify-content-center">
                     <img
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/company-1.png"
                        alt="Travel" />
                  </div>
               </div>
               <div class="item">
                  <div class="align-items-center d-flex justify-content-center">
                     <img
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/company-2.png"
                        alt="Travel" />
                  </div>
               </div>
               <div class="item">
                  <div class="align-items-center d-flex justify-content-center">
                     <img
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/company-3.png"
                        alt="Travel" />
                  </div>
               </div>
               <div class="item">
                  <div class="align-items-center d-flex justify-content-center">
                     <img
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/company-4.png"
                        alt="Travel" />
                  </div>
               </div>
               <div class="item">
                  <div class="align-items-center d-flex justify-content-center">
                     <img
                        src="<?php echo get_template_directory_uri();?>/assets/images/home/company-5.png"
                        alt="Travel" />
                  </div>
               </div>
            </div>
         </div>
         <!-- End: Logos section -->
         <!-- ============================================ -->

         <!-- Start: Customer feedback section -->
         <div class="pt-120 section-bg">
            <div class="container">
               <!-- Section header -->
               <div class="align-items-end row">
                  <!-- Title section -->
                  <div class="col-12 col-lg-6">
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="sub-heading-text sub-heading-1">
                        Customer Feedbacks
                     </h1>
                     <h1
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000">
                        Empowering Success go through outstanding
                     </h1>
                  </div>
                  <div
                     class="col-12 col-lg-6 d-flex justify-content-md-end justify-content-start mt-20 mt-lg-0">
                     <div
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="d-flex gap-3">
                        <button class="slider-nav prev-customer-feedback">
                           <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="slider-nav next-customer-feedback">
                           <i class="fa-solid fa-arrow-right"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Testimonials -->
            <div class="testimonial-wrapper pb-120">
               <div class="container">
                  <div
                     class="customers-feedback-carousel owl-carousel owl-theme">
                     <div
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="testimonial-card item">
                        <p class="gray-paragraph">
                           Financial planners help people to gain knowledge
                           aboutw toio invest and save their money in the most
                           efficient way ever. Many people all of across the
                           coun us them Financial planners help people Financial
                           know planners help people Financial planners=
                        </p>
                        <div
                           class="align-items-center d-flex justify-content-between my-30">
                           <div class="d-flex align-items-center gap-3">
                              <div>
                                 <img
                                    src="<?php echo get_template_directory_uri();?>/assets/images/home/testimonial-author-1.png"
                                    alt="Profile Image" />
                              </div>
                              <div>
                                 <h4 class="home-feedback-client-name">
                                    Marvin McKinney
                                 </h4>
                                 <p class="gray-paragraph">
                                    President of Sales
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial-quote-icon-wrapper">
                              <i class="fa-solid fa-quote-right"></i>
                           </div>
                        </div>
                     </div>
                     <div
                        data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        class="testimonial-card item">
                        <p class="gray-paragraph">
                           Financial planners help people to gain knowledge
                           aboutw toio invest and save their money in the most
                           efficient way ever. Many people all of across the
                           coun us them Financial planners help people Financial
                           know planners help people Financial planners=
                        </p>
                        <div
                           class="align-items-center d-flex justify-content-between my-30">
                           <div class="d-flex align-items-center gap-3">
                              <div>
                                 <img
                                    src="<?php echo get_template_directory_uri();?>/assets/images/home/testimonial-author-1.png"
                                    alt="Profile Image" />
                              </div>
                              <div>
                                 <h4 class="home-feedback-client-name">
                                    Marvin McKinney
                                 </h4>
                                 <p class="gray-paragraph">
                                    President of Sales
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial-quote-icon-wrapper">
                              <i class="fa-solid fa-quote-right"></i>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card item">
                        <p class="gray-paragraph">
                           Financial planners help people to gain knowledge
                           aboutw toio invest and save their money in the most
                           efficient way ever. Many people all of across the
                           coun us them Financial planners help people Financial
                           know planners help people Financial planners=
                        </p>
                        <div
                           class="align-items-center d-flex justify-content-between my-30">
                           <div class="d-flex align-items-center gap-3">
                              <div>
                                 <img
                                    src="<?php echo get_template_directory_uri();?>/assets/images/home/testimonial-author-1.png"
                                    alt="Profile Image" />
                              </div>
                              <div>
                                 <h4 class="home-feedback-client-name">
                                    Marvin McKinney
                                 </h4>
                                 <p class="gray-paragraph">
                                    President of Sales
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial-quote-icon-wrapper">
                              <i class="fa-solid fa-quote-right"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End: Customer feedback section -->
         <!-- ============================================ -->

         <!-- Start: Blog section -->
         <div class="container pt-120">
            <!-- Section Header -->
            <div class="mx-auto text-center main-home-blog-header">
               <h1
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                  class="sub-heading-text sub-heading-1">
                  Recent Blogs
               </h1>
               <h1
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000">
                  Striving for Perfection in this Profession Presentation
               </h1>
            </div>

            <!-- Blog Cards -->
            <div class="row mt-5">
               <?php while(have_posts()):the_post(); ?>
               <div
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                  class="col-12 col-lg-4">
                  <div class="p-0 text-capitalize blog-card-wrapper">
                     <div class="shine-image-wrapper">
                        <figure>
                           <img
                              class="w-100"
                              src="<?php echo get_template_directory_uri();?>/assets/images/home/blog-1.png"
                              alt="Blog-1" />
                        </figure>
                     </div>
                     <div class="blog-content">
                        <p class="gray-paragraph"><?php the_time('F j, Y')?></p>

                        <a
                           href="<?php the_permalink()?>"
                           class="home1-blog-card-title">
                           <?php the_title()?>
                        </a>
                        <!-- Link button -->
                        <a class="link-btn" href="<?php the_permalink()?>"
                           >Learn More
                           <i class="fa-solid fa-arrow-right btn-right-icon"></i
                        ></a>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
            </div>
         </div>
         <!-- End: Blog section -->
         <!-- ============================================ -->

         <!-- Start: Footer section -->
         <footer class="footer-main-wrapper">
            <div class="container">
               <!-- Footer heading -->
               <div>
                  <h1
                     data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-duration="1000"
                     class="my-30">
                     Got A <span class="text-color">Project</span> To Do ?
                  </h1>
                  <a
                     href="mailto:madbuz@yahoo.com"
                     data-aos="fade-up"
                     data-aos-delay="200"
                     data-aos-duration="1000"
                     class="footer-email position-relative">
                     madbuz@yahoo.com
                  </a>
               </div>

               <!-- Footer details -->
               <div class="row footer-content-wrapper">
                  <div class="col-12 col-lg-3 pt-4 pt-lg-0">
                     <!-- Logo -->
                     <div
                        class="d-flex align-items-center text-white m-0 text-uppercase gap-2">
                        <img
                           data-aos="fade-up"
                           data-aos-delay="100"
                           data-aos-duration="1000"
                           src="<?php echo get_template_directory_uri();?>/assets/images/home/footer-logo.png"
                           alt="Logo" />
                        <h3
                           data-aos="fade-up"
                           data-aos-delay="200"
                           data-aos-duration="1000"
                           class="">
                           Tikka
                        </h3>
                     </div>
                     <p
                        data-aos="fade-up"
                        data-aos-delay="300"
                        data-aos-duration="1000"
                        class="gray-paragraph my-3">
                        Lorem ipsum dolor amet, consectetur sell adipis elit
                        phase nibh ellentes
                     </p>
                     <ul
                        data-aos="fade-up"
                        data-aos-delay="400"
                        data-aos-duration="1000"
                        class="d-flex footer-social-icons-wrapper gap-4 p-0">
                        <li>
                           <a href="https://facebook.com"
                              ><i class="fa-brands fa-facebook-f"></i
                           ></a>
                        </li>
                        <li>
                           <a href="https://twitter.com"
                              ><i class="fa-brands fa-x-twitter"></i
                           ></a>
                        </li>
                        <li>
                           <a href="https://www.linkedin.com/"
                              ><i class="fa-brands fa-linkedin"></i
                           ></a>
                        </li>
                        <li>
                           <a href="https://pinterest.com"
                              ><i class="fa-brands fa-pinterest-p"></i
                           ></a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                     <h3
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000">
                        Useful Links
                     </h3>
                     <ul
                        class="d-flex flex-column footer-title-gap-wrapper footer-useful-link-wrapper p-0">
                        <li
                           data-aos="fade-up"
                           data-aos-delay="200"
                           data-aos-duration="1000"
                           class="list-unstyled gray-paragraph">
                           <a href="./index.html">Home</a>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="300"
                           data-aos-duration="1000"
                           class="list-unstyled gray-paragraph">
                           <a href="./about.html">About Us</a>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="400"
                           data-aos-duration="1000"
                           class="list-unstyled gray-paragraph">
                           <a href="./project.html">Projects</a>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="500"
                           data-aos-duration="1000"
                           class="list-unstyled gray-paragraph">
                           <a href="./blog.html">Blog</a>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="600"
                           data-aos-duration="1000"
                           class="list-unstyled gray-paragraph">
                           <a href="./contact.html">Contact</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-12 col-lg-3 pt-4 pt-lg-0">
                     <h3
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000">
                        Latest News
                     </h3>
                     <ul
                        class="footer-title-latest-news-gap-wrapper p-0 d-flex flex-column gap-4">
                        <li
                           data-aos="fade-up"
                           data-aos-delay="200"
                           data-aos-duration="1000"
                           class="d-flex footer-lst-news-list">
                           <div>
                              <img
                                 src="<?php echo get_template_directory_uri();?>/assets/images/home/latest-news-1.png"
                                 alt="Blogs" />
                           </div>
                           <div>
                              <div class="d-flex gap-2 align-items-center">
                                 <i
                                    class="fa-solid fa-calendar-days text-color"></i>
                                 <p class="gray-paragraph">October 19, 2022</p>
                              </div>
                              <a
                                 href="./single-blog.html"
                                 class="gray-paragraph">
                                 Market research helps businesses understand
                              </a>
                           </div>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="300"
                           data-aos-duration="1000"
                           class="d-flex footer-lst-news-list">
                           <div>
                              <img
                                 src="<?php echo get_template_directory_uri();?>/assets/images/home/latest-news-2.png"
                                 alt="Blogs" />
                           </div>
                           <div>
                              <div class="d-flex gap-2 align-items-center">
                                 <i
                                    class="fa-solid fa-calendar-days text-color"></i>
                                 <p class="gray-paragraph">October 19, 2022</p>
                              </div>
                              <a
                                 href="./single-blog.html"
                                 class="gray-paragraph">
                                 Market research helps businesses understand
                              </a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-12 col-lg-3 pt-4 pt-lg-0">
                     <h3
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000">
                        Contact
                     </h3>
                     <ul
                        class="d-flex flex-column footer-title-gap-wrapper footer-ci-wrapper p-0">
                        <li
                           data-aos="fade-up"
                           data-aos-delay="200"
                           data-aos-duration="1000">
                           <div class="align-items-center d-flex main-foo-ci">
                              <i class="fa-solid fa-envelope text-color"></i>
                              <a
                                 href="mailto:debra.holt@example.com"
                                 class="gray-paragraph"
                                 >debra.holt@example.com</a
                              >
                           </div>
                        </li>
                        <li
                           data-aos="fade-up"
                           data-aos-delay="300"
                           data-aos-duration="1000">
                           <div class="align-items-baseline d-flex main-foo-ci">
                              <i
                                 class="fa-solid fa-location-dot text-color"></i>
                              <p class="gray-paragraph">
                                 3891 Ranchview Dr. Richardson, California 62639
                              </p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer-divider"></div>
               <div
                  class="align-items-md-center d-flex flex-column flex-md-row justify-content-between py-4">
                  <div>
                     <p class="gray-paragraph">
                        &copy; Copyright 2024 | All Rights Reserved.
                     </p>
                  </div>
                  <div>
                     <ul
                        class="d-flex flex-column flex-md-row gap-3 justify-content-start m-0 p-0">
                        <li class="gray-paragraph list-unstyled gray-paragraph">
                           <a href="./contact.html">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End: Footer section -->
         <!-- ============================================ -->

         <!-- scroll top -->
         <div class="scroll-top">
            <a class="page-scroll" href="#page-top"
               ><span class="fa fa-angle-up"></span
            ></a>
         </div>

         <!-- end: scroll top -->
         <!-- Jquery -->
      </main>

      <?php wp_footer();?>
   </body>
</html>
