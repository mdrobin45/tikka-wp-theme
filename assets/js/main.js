/* 
*******************************
Index
*******************************

# 01. Logo carousel
# 02. Gallery carousel
# 03. Project details image slider
# 04. Home 2 testimonial carousel
# 05. Home 1 Customer feedback carousel
# 06. Home 1 Customer feedback trigger next & prev button of carousel
# 07. Home 2 Customer feedback trigger next & prev button of carousel
# 08. Project show & less - Projects page
# 09. Show hind mobile dropdown
# 10. AOS Initialize
# 11. Scroll to top

-------------------
*/

jQuery(document).ready(function () {
   /*
    *************************
    * 01. Logo carousel
    *************************
    */
   jQuery(".logo_carousel").owlCarousel({
      autoplay: true,
      loop: true,
      dots: false,
      slideSpeed: 300,
      margin: 10,
      responsive: {
         0: {
            items: 1,
            loop: true,
         },
         600: {
            items: 3,
            loop: true,
         },
         1000: {
            items: 5,
            loop: true,
         },
      },
   });

   /*
    *************************
    * 02. Gallery carousel
    *************************
    */
   jQuery(".gallery-carousel").owlCarousel({
      autoplay: true,
      loop: true,
      dots: false,
      slideSpeed: 300,
      margin: 20,
      responsive: {
         0: {
            items: 1,
            loop: true,
         },
         600: {
            items: 2,
            loop: true,
         },
         1000: {
            items: 3,
            loop: true,
         },
      },
   });

   /*
    *************************
    * 03. Project details image slider
    *************************
    */
   jQuery(".project-details-images-wrapper").owlCarousel({
      autoplay: true,
      loop: true,
      dots: false,
      slideSpeed: 300,
      margin: 20,
      responsive: {
         0: {
            items: 1,
            loop: true,
         },
         600: {
            items: 2,
            loop: true,
         },
         1000: {
            items: 4,
            loop: true,
         },
      },
   });

   /*
    *************************
    * 04. Home 2 testimonial carousel
    *************************
    */
   const home2Testimonial = jQuery(".home2-testimonial-quote-wrapper");
   home2Testimonial.owlCarousel({
      autoplay: true,
      loop: true,
      items: 1,
      dots: false,
      slideSpeed: 300,
      margin: 20,
      responsive: {
         0: {
            items: 1,
            loop: true,
         },
         600: {
            items: 1,
            loop: true,
         },
         1000: {
            items: 1,
            loop: true,
         },
      },
   });

   /*
    *************************
    * 05. Home 1 Customer feedback carousel
    *************************
    */
   const owl = jQuery(".customers-feedback-carousel");
   owl.owlCarousel({
      autoPlay: true,
      loop: true,
      items: 2,
      dots: false,
      slideSpeed: 300,
      margin: 20,
      responsive: {
         0: {
            loop: true,
            items: 1,
         },
         600: {
            loop: true,
            items: 1,
         },
         1000: {
            items: 2,
            loop: true,
         },
      },
   });

   /*
    *************************
    * 06. Home 1 Customer feedback trigger next & prev button of carousel
    *************************
    */
   jQuery(".prev-customer-feedback").on("click", function () {
      owl.trigger("prev.owl.carousel");
   });

   jQuery(".next-customer-feedback").on("click", function () {
      owl.trigger("next.owl.carousel");
   });

   /*
    *************************
    * 07. Home 2 Customer feedback trigger next & prev button of carousel
    *************************
    */
   jQuery(".home2-prev-customer-feedback").on("click", function () {
      home2Testimonial.trigger("prev.owl.carousel");
   });

   jQuery(".home2-next-customer-feedback").on("click", function () {
      home2Testimonial.trigger("next.owl.carousel");
   });

   /*
    *************************
    * 08. Project show & less - Projects page
    *************************
    */
   jQuery("#show__more--content").hide();

   jQuery("#show__more").on("click", function () {
      jQuery("#show__more--content").show(600);
      jQuery("#show__less").show();
      jQuery("#show__more").hide();
   });

   jQuery("#show__less").on("click", function () {
      jQuery("#show__more--content").hide(600);
      jQuery("#show__more").show();
      jQuery(this).hide();
   });

   /*
    *************************
    * 09. Show hind mobile dropdown
    *************************
    */
   jQuery("nav .dropdown").on(
      "click",
      function () {
         var $this = jQuery(this);
         $this.addClass("show");
         $this.find("> a").attr("aria-expanded", true);
         $this.find(".dropdown-menu").addClass("show");
      },
      function () {
         var $this = jQuery(this);
         $this.removeClass("show");
         $this.find("> a").attr("aria-expanded", false);
         $this.find(".dropdown-menu").removeClass("show");
      }
   );

   jQuery('nav input[type="checkbox"]').on("change", function () {
      jQuery('.main-nav input[type="checkbox"]')
         .not(this)
         .prop("checked", false);
      jQuery('.right-nav input[type="checkbox"]')
         .not(this)
         .prop("checked", false);
   });

   /*
    *************************
    * 10. AOS Initialize
    *************************
    */
   AOS.init();
});

/*
 *************************
 * 11. Scroll to top
 *************************
 */
jQuery(window).scroll(function () {
   if (jQuery(this).scrollTop() > 400) {
      jQuery(".scroll-top").fadeIn();
   } else {
      jQuery(".scroll-top").fadeOut();
   }
});
