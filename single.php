<?php wp_head();?>
<div class="page-main-wrapper">
      <!-- Start: Hero section -->
      <div class="global-page-banner-wrapper">
        <div class="container">
          <!-- Navigation start -->
          <header
            data-aos="fade-down"
            data-aos-delay="100"
            data-aos-duration="1000"
            class="d-none d-lg-flex align-items-center justify-content-between navMainWrapper"
          >
            <!-- Logo -->
            <a href="./index.html">
              <div
                class="d-flex align-items-center text-white m-0 text-uppercase gap-2"
              >
                <img src="./assets/images/home/logo.svg" alt="Logo" />
                <h3>Tikka</h3>
              </div>
            </a>

            <!-- Menu links -->
            <div
              class="d-flex align-items-center justify-content-end menuWrapper"
            >
              <nav class="navbarLinksWrapper d-flex align-items-center">
                <div class="dropdown">
                  <p
                    class="dropdown-toggle p-0 text-white cursor-pointer"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    role="button"
                  >
                    Home <i class="fa-solid fa-angle-down"></i>
                  </p>
                  <div
                    class="dropdown-menu dropdown-menu-end animate slideIn"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="./index.html">Home 1</a>
                    <a class="dropdown-item" href="./index-2.html">Home 2</a>
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
                    aria-expanded="false"
                  >
                    Projects <i class="fa-solid fa-angle-down"></i>
                  </p>
                  <div
                    class="dropdown-menu dropdown-menu-end animate slideIn"
                    aria-labelledby="ProjectDropdownBtn"
                  >
                    <a class="dropdown-item" href="./project.html">Projects</a>
                    <a class="dropdown-item" href="./project-details.html"
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
                    aria-expanded="false"
                  >
                    Blog <i class="fa-solid fa-angle-down"></i>
                  </p>
                  <div
                    class="dropdown-menu dropdown-menu-end animate slideIn"
                    aria-labelledby="pagesDropdownBtn"
                  >
                    <a class="dropdown-item" href="./blog.html">Blog</a>
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
                  class="button navBtn d-flex justify-content-center align-items-center"
                >
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

          <div
            class="align-items-center d-flex d-md-block flex-column global-page-banner"
          >
            <h1
              data-aos="fade-up"
              data-aos-delay="100"
              data-aos-duration="1000"
              class="pb-2"
            >
              Blog Details
            </h1>
            <h4
              class="global-banner__bredcamb-wrapper"
              data-aos="fade-up"
              data-aos-delay="200"
              data-aos-duration="1000"
            >
              <a href="./">Home</a>
              <span class="text-color">/</span>
              <span>Blog Details</span>
            </h4>
          </div>
          <!-- Banner section end -->
        </div>
      </div>
      <!-- End: Hero section -->

      <!-- Start: Blog details section -->
      <div class="container px-3 px-md-0 section-space">
        <div class="row">
          <div class="col-12 col-lg-8 col-md-12">
            <div>
              <div class="position-relative">
                <div class="shine-image-wrapper">
                  <figure class="b-left-radius b-right-radius">
                    <img
                      class="w-100"
                      src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog-details.png"
                      alt="Blog Thumbnail"
                    />
                  </figure>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                  class="d-flex align-items-center flex-wrap justify-content-between p-3 blog-meta-wrapper single-blog-meta"
                >
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-regular fa-user text-color"></i>
                    <p class="white-paragraph">By Admin</p>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-regular fa-folder-open text-color"></i>
                    <p class="white-paragraph">Category</p>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-regular fa-comments text-color"></i>
                    <p class="white-paragraph">Comments (05)</p>
                  </div>
                </div>
              </div>

              <div class="pt-5">
                <h2
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  Designing a Legacy One Project at a Time
                </h2>
                <hr
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                  class="hr-divider"
                />
                <p
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                  class="white-paragraph"
                >
                  Miquam eros justo, posuere loborti viverra lao ullamcorper
                  posuere viverra .Aliquam eros justo, posuere lobortis in non,
                  viverra laoreet augue mattis start fermentum ullamcor viverra
                  laoreet By Admin . Creativity . 29th Februarym 2022 . Leave a
                  comment viverra laoreet augue mattis start fermentum
                </p>

                <!-- Client quote -->
                <div
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                  class="quote-wrapper"
                >
                  <button class="quote-icon">
                    <i class="fa-solid fa-quote-right text-color"></i>
                  </button>
                  <h4 class="py-4">
                    With a commitment to driving technological evolution, our IT
                    solutions and desigm services are the cornerstone of your
                    digital progression. We transcend boundariesi enabling
                    businesses to not
                  </h4>
                  <h4 class="quote-author-name">Stanio lainto</h4>
                  <p class="quote-author-company white-paragraph">Authore</p>
                </div>
                <p
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                  class="white-paragraph pt-4"
                >
                  Aliquam eros justo, posuere loborti viverra laoreet matti
                  ullamcorper posuere viverra .Aliquam eros justo, posuere
                  lobortis non, viverra laoreet augue mattis fermentum
                  ullamcorper viverra laoreet Aliquam eros justo, posuere.
                </p>
                <h2
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                  class="py-5"
                >
                  From Concept to Canvas My Creative
                </h2>
                <p
                  data-aos="fade-up"
                  data-aos-delay="400"
                  data-aos-duration="1000"
                  class="white-paragraph"
                >
                  Aliquam eros justo, posuere loborti viverra laoreet matti
                  ullamcorper posuere viverra .Aliquam eros justo, posuere
                  lobortis, viverra laoreet augue mattis fermentum ullamcorper
                  viverra laoreet Aliquam eros justo, posuere loborti viverra
                  laoreet matti ullamcorper posuere viverra .Aliquam eros justo,
                  posuere lobortis non.
                </p>
                <ul class="horizontal-list-items pt-4">
                  <li
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>Personalized campaigns</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>Personalized campaigns</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>Email autoresponders</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="400"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>Email autoresponders</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>A Symphony of Creativity</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>A Symphony of Creativity</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>Your Visual Experienc</span>
                    </div>
                  </li>
                  <li
                    data-aos="fade-up"
                    data-aos-delay="400"
                    data-aos-duration="1000"
                  >
                    <div class="element-list-item">
                      <i class="fa-solid fa-check text-color"></i
                      ><span>Your Visual Experienc</span>
                    </div>
                  </li>
                </ul>
                <p
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                  class="white-paragraph pt-4"
                >
                  Aliquam eros justo, posuere loborti viverra laoreet matti
                  ullamcorper posuere viverra .Aliquam eros justo, posuere
                  lobortis non, viverra laoreet augue mattis fermentum
                  ullamcorper viverra laoreet Aliquam eros justo, posuere.
                </p>
              </div>

              <!-- Share post -->
              <div
                data-aos="fade-up"
                data-aos-delay="100"
                data-aos-duration="1000"
                class="align-items-center tag-writing-box d-flex gap-2"
              >
                <div class="sharing-tag-and-icon-wrapper w-100">
                  <div class="d-flex">
                    <i class="fa-solid fa-angles-right text-color"></i>
                  </div>
                  <div class="w-100 d-flex align-items-center gap-2">
                    <div class="chip">
                      <div class="chip-content">HTML</div>
                    </div>
                    <div class="chip">
                      <div class="chip-content">CSS</div>
                    </div>
                    <div class="chip">
                      <div class="chip-content">Java</div>
                    </div>
                  </div>
                </div>

                <div>
                  <ul class="d-flex gap-2 gap-md-4 p-0">
                    <li>
                      <a href="https://pinterest.com"
                        ><i class="fa-brands fa-instagram text-color"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://twitter.com"
                        ><i class="fa-brands fa-x-twitter text-color"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://pinterest.com"
                        ><i class="fa-brands fa-pinterest-p text-color"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/"
                        ><i class="fa-brands fa-linkedin text-color"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Comment box -->
              <div class="comment-box-wrapper">
                <!-- Comment-1 -->
                <div
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                  class="align-items-start d-flex single-comment"
                >
                  <img
                  src="<?php echo get_template_directory_uri();?>/assets/images/blog/commenter-image-1.png"
                    alt="Commenter Picture"
                  />
                  <div>
                    <h4 class="commenter-name">Stanio lainto</h4>
                    <p class="comment-date white-paragraph">23 Decmeber</p>
                    <p class="comment-text white-paragraph">
                      ished fact that a reader will be distrol acted bioii
                      the.ished fact that a reader will be distrolra acted
                      laoreet Aliquam reader will be distrol acted ished fact
                      that a reader will be distrol dsff shem acted bioii
                      the.ished fact that a reader will .
                    </p>
                    <a
                      href="#comment-write-section"
                      class="comment-reply-button"
                      >Reply</a
                    >
                  </div>
                </div>
                <!-- Comment-2 -->
                <div
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                  class="align-items-start d-flex single-comment"
                >
                  <img
                  src="<?php echo get_template_directory_uri();?>/assets/images/blog/commenter-image-2.png"
                    alt="Commenter Picture"
                  />
                  <div>
                    <h4 id="comment-write-section" class="commenter-name">
                      Stanio lainto
                    </h4>
                    <p class="comment-date white-paragraph">23 Decmeber</p>
                    <p class="comment-text white-paragraph">
                      ished fact that a reader will be distrol acted bioii
                      the.ished fact that a reader will be distrolra acted
                      laoreet Aliquam reader will be distrol acted ished fact
                      that a reader will be distrol dsff shem acted bioii
                      the.ished fact that a reader will .
                    </p>
                    <a
                      href="#comment-write-section"
                      class="comment-reply-button"
                      >Reply</a
                    >
                  </div>
                </div>

                <!-- Leave a comment -->
                <div
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                  class="comment-writing-section"
                >
                  <h1>Leave a comment</h1>
                  <p class="body-text write-comment-paragraph">
                    Aliquam eros justo, posuere loborti viverra laoreet matti
                    ullamcorper posuere viverra .Aliquam eros justo, posuere
                    lobortis non, viverra laoreet augue mattis fermentum
                  </p>

                  <form
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                    class="comment-write-form"
                  >
                    <div class="contact-page__form--field-wrapper">
                      <input
                        class="v2-input-field cf-input-field w-100"
                        type="text"
                        placeholder="Your Name"
                      />
                      <input
                        class="v2-input-field cf-input-field w-100"
                        type="text"
                        placeholder="Your Email"
                      />
                    </div>
                    <div>
                      <textarea
                        class="v2-input-field cf-input-field w-100 comment-writing-input-box"
                        placeholder="Write your message"
                        cols="30"
                        rows="10"
                      ></textarea>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <input
                          class="button fillBtn contact-page__form-submit-btn"
                          type="submit"
                          value="Submit Now"
                        />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Blog details sidebar -->
          <div class="col-12 col-lg-4 col-md-12 mt-lg-0 mt-md-5">
            <div class="pt-5 pt-md-0 sidebar-widgets-wrapper">
              <!-- Search widget -->
              <div
                data-aos="fade-left"
                data-aos-delay="100"
                data-aos-duration="1000"
                class="sidebar-widget"
              >
                <h4>Search</h4>
                <div class="d-flex mt-3">
                  <input
                    class="bas-search-input w-100"
                    type="text"
                    placeholder="Enter Your Email"
                  />
                  <button class="bas-search-widget-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
              </div>

              <!-- Author box -->
              <div
                data-aos="fade-left"
                data-aos-delay="200"
                data-aos-duration="1000"
                class="sidebar-widget author-box-widget d-flex flex-column align-items-center position-relative"
              >
                <img
                  class="bas-author-profile-image position-absolute"
                src="<?php echo get_template_directory_uri();?>/assets/images/blog/author-profile-image.png"
                  alt="Author Profile image"
                />
                <h3 class="author-name">Naturials paul</h3>
                <p class="white-paragraph text-center pb-3">
                  Aliquam eros justo, posuere lobort viverrasi lao ullamcorper
                  posuere
                </p>
                <ul class="d-flex gap-4 p-0">
                  <li>
                    <a href="https://facebook.com"
                      ><i class="fa-brands fa-facebook-f text-color"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://twitter.com"
                      ><i class="fa-brands fa-x-twitter text-color"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/"
                      ><i class="fa-brands fa-linkedin text-color"></i
                    ></a>
                  </li>
                </ul>
              </div>

              <!-- Category box -->
              <div
                data-aos="fade-left"
                data-aos-delay="300"
                data-aos-duration="1000"
                class="sidebar-widget"
              >
                <h4 class="d-inline position-relative title-divider">
                  Category
                </h4>
                <ul class="mt-4 bas-category-list unordered-list-element">
                  <li>
                    <div class="element-list-item">
                      <i class="fa-solid fa-angles-right text-color"></i
                      ><a class="blog-page-category-names" href="blog.html"
                        >Inspire Create Impress</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="element-list-item">
                      <i class="fa-solid fa-angles-right text-color"></i
                      ><a class="blog-page-category-names" href="blog.html"
                        >Your Story Our Canvas</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="element-list-item">
                      <i class="fa-solid fa-angles-right text-color"></i
                      ><a class="blog-page-category-names" href="./blog.html"
                        >Artistry in Every Pixel</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="element-list-item">
                      <i class="fa-solid fa-angles-right text-color"></i
                      ><a class="blog-page-category-names" href="./blog.html"
                        >Your Vision Our Passion</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="element-list-item">
                      <i class="fa-solid fa-angles-right text-color"></i
                      ><a class="blog-page-category-names" href="./blog.html"
                        >Your Story with Design</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="element-list-item">
                      <i class="fa-solid fa-angles-right text-color"></i
                      ><a class="blog-page-category-names" href="./blog.html"
                        >Designing Tomorrow Today</a
                      >
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Recent news box -->
              <div
                data-aos="fade-left"
                data-aos-delay="400"
                data-aos-duration="1000"
                class="sidebar-widget"
              >
                <h4 class="d-inline position-relative title-divider">
                  Recent News
                </h4>
                <ul class="pt-4">
                  <li class="d-flex gap-4 pt-4">
                    <div>
                      <img
                      src="<?php echo get_template_directory_uri();?>/assets/images/blog/recent-news-1.png"
                        alt="Blog Thumbnail"
                      />
                    </div>
                    <div class="w-75">
                      <p class="white-paragraph bas-recent-news-date">
                        Dec 12,2023
                      </p>
                      <a
                        href="./single-blog.html"
                        class="white-paragraph bas-recent-news-title"
                      >
                        Designing My Story One Project at a Time
                      </a>
                    </div>
                  </li>
                  <li class="d-flex gap-4 pt-4">
                    <div>
                      <img
                      src="<?php echo get_template_directory_uri();?>/assets/images/blog/recent-news-2.png"
                        alt="Blog Thumbnail"
                      />
                    </div>
                    <div class="w-75">
                      <p class="white-paragraph bas-recent-news-date">
                        Dec 12,2023
                      </p>
                      <a
                        href="./single-blog.html"
                        class="white-paragraph bas-recent-news-title"
                      >
                        Innovate Create Elevate My Design Odyssey
                      </a>
                    </div>
                  </li>
                  <li class="d-flex gap-4 pt-4">
                    <div>
                      <img
                      src="<?php echo get_template_directory_uri();?>/assets/images/blog/recent-news-3.png"
                        alt="Blog Thumbnail"
                      />
                    </div>
                    <div class="w-75">
                      <p class="white-paragraph bas-recent-news-date">
                        Dec 12,2023
                      </p>
                      <a
                        href="./single-blog.html"
                        class="white-paragraph bas-recent-news-title"
                      >
                        Exploring Boundle Creativity in Every Detail
                      </a>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Tags box -->
              <div
                data-aos="fade-left"
                data-aos-delay="500"
                data-aos-duration="1000"
                class="sidebar-widget"
              >
                <h4 class="d-inline position-relative title-divider">Tags</h4>
                <div class="bas-tags-wrapper pt-4">
                  <button class="tags-pill">All Projects</button>
                  <button class="tags-pill">Stand</button>
                  <button class="tags-pill">Regularly</button>
                  <button class="tags-pill">Startup</button>
                  <button class="tags-pill">Productsline</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Footer section -->
      <!-- ============================================ -->

      <!-- scroll top -->
      <div class="scroll-top">
        <a class="page-scroll" href="#page-top"
          ><span class="fa fa-angle-up"></span
        ></a>
      </div>
    </div>

    <?php get_footer();?>