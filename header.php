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