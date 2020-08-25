<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sites/all/themes/pewobox/templates/page.html.twig */
class __TwigTemplate_8a7509d8b96db19d375f1442c9f8ee205bcf1e75e1316d5eb055f137a5850819 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 53
        echo "
<!-- start header -->
<header>
  <!-- start navigation -->
  <nav class=\"navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg\">
    <div class=\"container nav-header-container\">
      <!-- start logo -->
      <div class=\"col-auto pl-lg-0\">
        <a href=\"index.html\" title=\"Pofo\" class=\"logo\"><img src=\"images/logo.png\" data-rjs=\"images/logo@2x.png\" class=\"logo-dark\" alt=\"Pofo\"><img src=\"images/logo-white.png\" data-rjs=\"images/logo-white@2x.png\" alt=\"Pofo\" class=\"logo-light default\"></a>
      </div>
      <!-- end logo -->
      <div class=\"col accordion-menu pr-0 pr-md-3\">
        <button type=\"button\" class=\"navbar-toggler collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-toggle-1\">
          <span class=\"sr-only\">toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbar-collapse-toggle-1\">
          <ul id=\"accordion\" class=\"nav navbar-nav no-margin alt-font text-normal\" data-in=\"fadeIn\" data-out=\"fadeOut\">
            <!-- start menu item -->
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Home</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Classic Homepages</li>
                      <li><a href=\"home-classic-corporate.html\">Classic corporate</a></li>
                      <li><a href=\"home-classic-digital-agency.html\">Classic digital agency</a></li>
                      <li><a href=\"home-classic-innovation-agency.html\">Classic innovation agency</a></li>
                      <li><a href=\"home-classic-web-agency.html\">Classic web agency</a></li>
                      <li><a href=\"home-classic-one-page.html\">Classic one page</a></li>
                      <li><a href=\"home-classic-start-up.html\">Classic start-up</a></li>
                      <li><a href=\"home-classic-interactive-agency.html\">Classic interactive agency</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Creative Homepages</li>
                      <li><a href=\"home-creative-studio.html\">Creative studio</a></li>
                      <li><a href=\"home-creative-business.html\">Creative business</a></li>
                      <li><a href=\"home-creative-simple-portfolio.html\">Creative simple portfolio</a></li>
                      <li><a href=\"home-creative-branding-agency.html\">Creative branding agency</a></li>
                      <li class=\"menu-new\"><a href=\"home-creative-minimalist-portfolio.html\">creative minimalist portfolio</a></li>
                      <li><a href=\"home-creative-small-business.html\">Creative small business</a></li>
                      <li><a href=\"home-creative-designer.html\">Creative designer</a></li>
                      <li><a href=\"home-creative-agency.html\">Creative agency</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Portfolio Homepages</li>
                      <li><a href=\"home-portfolio-minimal.html\">Portfolio minimal</a></li>
                      <li><a href=\"home-portfolio-multiple-carousel.html\">Portfolio multiple carousel</a></li>
                      <li><a href=\"home-portfolio-centered-slides.html\">Portfolio centered slides</a></li>
                      <li><a href=\"home-portfolio-personal.html\">Portfolio personal</a></li>
                      <li><a href=\"home-portfolio-metro.html\">Portfolio metro</a></li>
                      <li><a href=\"home-portfolio-full-screen-vertical.html\">Portfolio full screen – vertical</a></li>
                      <li><a href=\"home-portfolio-photographer.html\">Portfolio photographer</a></li>
                      <li><a href=\"home-portfolio-parallax.html\">Portfolio parallax</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Blog Homepages</li>
                      <li><a href=\"home-blog-grid.html\">Blog grid</a></li>
                      <li><a href=\"home-blog-masonry.html\">Blog masonry</a></li>
                      <li><a href=\"home-blog-clean.html\">Blog clean</a></li>
                      <li><a href=\"home-blog-personal.html\">Blog personal</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
            <!-- end menu item -->
            <li class=\"dropdown simple-dropdown\"><a href=\"#\">Pages</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">About <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"about-us-simple.html\">About us simple</a></li>
                    <li><a href=\"about-us-classic.html\">About us classic</a></li>
                    <li><a href=\"about-us-modern.html\">About us modern</a></li>
                    <li><a href=\"about-me.html\">About me</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Services <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"services-simple.html\">Services simple</a></li>
                    <li><a href=\"services-classic.html\">Services classic</a></li>
                    <li><a href=\"services-modern.html\">Services modern</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Contact <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"contact-us-simple.html\">Contact simple</a></li>
                    <li><a href=\"contact-us-classic.html\">Contact classic</a></li>
                    <li><a href=\"contact-us-classic-02.html\">Contact classic – style 02</a></li>
                    <li><a href=\"contact-us-modern.html\">Contact modern</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Team <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"team-simple.html\">Team simple</a></li>
                    <li><a href=\"team-classic.html\">Team classic</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Additional Pages <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"our-clients.html\">Our clients</a></li>
                    <li><a href=\"404.html\">Error 404</a></li>
                    <li><a href=\"coming-soon.html\">Coming soon</a></li>
                    <li><a href=\"coming-soon-02.html\">Coming soon – style 02</a></li>
                    <li><a href=\"faq.html\">Faq</a></li>
                    <li><a href=\"maintenance.html\">Maintenance</a></li>
                    <li><a href=\"search-result.html\">Search result</a></li>
                    <li><a href=\"pricing.html\">Pricing</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Portfolio</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Grid - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-grid-overlay.html\">Portfolio grid overlay</a></li>
                      <li><a href=\"portfolio-full-width-grid-with-icon.html\">Portfolio grid with icon</a></li>
                      <li><a href=\"portfolio-full-width-grid-transform.html\">Portfolio grid transform</a></li>
                      <li><a href=\"portfolio-full-width-grid-zooming.html\">Portfolio grid zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Masonry - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-masonry-overlay.html\">Portfolio masonry overlay</a></li>
                      <li><a href=\"portfolio-full-width-masonry-with-icon.html\">Portfolio masonry with icon</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Metro - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-metro-overlay.html\">Portfolio metro overlay</a></li>
                      <li><a href=\"portfolio-full-width-metro-with-icon.html\">Portfolio metro with icon</a></li>
                      <li><a href=\"portfolio-full-width-metro-transform.html\">Portfolio metro transform</a></li>
                      <li><a href=\"portfolio-full-width-metro-zooming.html\">Portfolio metro zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Other - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-image-gallery.html\">Portfolio image gallery</a></li>
                      <li><a href=\"portfolio-full-width-justified-gallery.html\">Portfolio justified</a></li>
                      <li><a href=\"portfolio-full-width-carousel.html\">Portfolio carousel</a></li>
                      <li><a href=\"portfolio-full-width-parallax.html\">Portfolio parallax</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Grid - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-grid-overlay.html\">Portfolio grid overlay</a></li>
                      <li><a href=\"portfolio-boxed-grid-with-icon.html\">Portfolio grid with icon</a></li>
                      <li><a href=\"portfolio-boxed-grid-transform.html\">Portfolio grid transform</a></li>
                      <li><a href=\"portfolio-boxed-grid-zooming.html\">Portfolio grid zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Masonry - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-masonry-overlay.html\">Portfolio masonry overlay</a></li>
                      <li><a href=\"portfolio-boxed-masonry-with-icon.html\">Portfolio masonry with icon</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Metro - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-metro-overlay.html\">Portfolio metro overlay</a></li>
                      <li><a href=\"portfolio-boxed-metro-with-icon.html\">Portfolio metro with icon</a></li>
                      <li><a href=\"portfolio-boxed-metro-transform.html\">Portfolio metro transform</a></li>
                      <li><a href=\"portfolio-boxed-metro-zooming.html\">Portfolio metro zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Other - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-image-gallery.html\">Portfolio image gallery</a></li>
                      <li><a href=\"portfolio-boxed-justified-gallery.html\">Portfolio justified</a></li>
                      <li><a href=\"portfolio-boxed-carousel.html\">Portfolio carousel</a></li>
                      <li><a href=\"portfolio-boxed-parallax.html\">Portfolio parallax</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->

                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Single Project Page</li>
                      <li><a href=\"single-project-page-01.html\">Single project page 01</a></li>
                      <li><a href=\"single-project-page-02.html\">Single project page 02</a></li>
                      <li><a href=\"single-project-page-03.html\">Single project page 03</a></li>
                      <li><a href=\"single-project-page-04.html\">Single project page 04</a></li>
                      <li><a href=\"single-project-page-05.html\">Single project page 05</a></li>
                      <li><a href=\"single-project-page-06.html\">Single project page 06</a></li>
                      <li><a href=\"single-project-page-07.html\">Single project page 07</a></li>
                      <li><a href=\"single-project-page-08.html\">Single project page 08</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Portfolio Columns</li>
                      <li><a href=\"portfolio-two-columns.html\">Portfolio 2 columns</a></li>
                      <li><a href=\"portfolio-three-columns.html\">Portfolio 3 columns</a></li>
                      <li><a href=\"portfolio-four-columns.html\">Portfolio 4 columns</a></li>
                      <li><a href=\"portfolio-five-columns.html\">Portfolio 5 columns</a></li>
                    </ul>
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3 d-none d-lg-block\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li>
                        <a href=\"home-creative-studio.html\" class=\"menu-banner-image\"><img src=\"images/menu-banner-01.png\" alt=\"portfolio\"/></a>
                      </li>
                      <li>
                        <a href=\"home-creative-business.html\" class=\"menu-banner-image\"><img src=\"images/menu-banner-02.png\" alt=\"portfolio\"/></a>
                      </li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
            <li class=\"dropdown simple-dropdown\"><a href=\"#\" title=\"Blog\">Blog</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Standard <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-standard-full-width.html\">Blog standard – full width</a></li>
                    <li><a href=\"blog-standard-with-left-sidebar.html\">Blog standard with left sidebar</a></li>
                    <li><a href=\"blog-standard-with-right-sidebar.html\">Blog standard with right sidebar</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Classic <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-classic.html\">Blog classic</a></li>
                    <li><a href=\"blog-classic-full-width.html\">Blog classic – full width</a></li>

                  </ul></li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog List <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-list.html\">Blog list</a></li>
                    <li><a href=\"blog-list-full-width.html\">Blog list – full width</a></li>
                  </ul></li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Grid <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-grid.html\">Blog grid</a></li>
                    <li><a href=\"blog-grid-full-width.html\">Blog grid – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Masonry <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-masonry.html\">Blog masonry</a></li>
                    <li><a href=\"blog-masonry-full-width.html\">Blog masonry – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Simple <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-simple.html\">Blog simple</a></li>
                    <li><a href=\"blog-simple-full-width.html\">Blog simple – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Clean <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-clean.html\">Blog clean</a></li>
                    <li><a href=\"blog-clean-full-width.html\">Blog clean – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Images <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-images.html\">Blog images</a></li>
                    <li><a href=\"blog-images-full-width.html\">Blog images – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Only Text <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-only-text.html\">Blog only text</a></li>
                    <li><a href=\"blog-only-text-full-width.html\">Blog only text – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Post Layout <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-post-layout-01.html\">Blog post layout 01</a></li>
                    <li><a href=\"blog-post-layout-02.html\">Blog post layout 02</a></li>
                    <li><a href=\"blog-post-layout-03.html\">Blog post layout 03</a></li>
                    <li><a href=\"blog-post-layout-04.html\">Blog post layout 04</a></li>
                    <li><a href=\"blog-post-layout-05.html\">Blog post layout 05</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Post Types <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-standard-post.html\">Standard post</a></li>
                    <li><a href=\"blog-gallery-post.html\">Gallery post</a></li>
                    <li><a href=\"blog-slider-post.html\">Slider post</a></li>
                    <li><a href=\"blog-html5-video-post.html\">HTML5 video post</a></li>
                    <li><a href=\"blog-youtube-video-post.html\">Youtube video post</a></li>
                    <li><a href=\"blog-vimeo-video-post.html\">Vimeo video post</a></li>
                    <li><a href=\"blog-audio-post.html\">Audio post</a></li>
                    <li><a href=\"blog-blockquote-post.html\">Blockquote post</a></li>
                    <li><a href=\"blog-full-width-post.html\">Full width post</a></li>
                  </ul>
                </li>
              </ul>
              <!-- end sub menu -->
            </li>
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Elements</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full icon-list-menu\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">General elements</li>
                      <li><a href=\"accordions.html\"><i class=\"ti-layout-accordion-separated\"></i> Accordions</a></li>
                      <li><a href=\"buttons.html\"><i class=\"ti-mouse\"></i> Buttons</a></li>
                      <li><a href=\"team.html\"><i class=\"ti-user\"></i> Team</a></li>
                      <li><a href=\"team-carousel.html\"><i class=\"ti-layout-slider-alt\"></i> Team carousel</a></li>
                      <li><a href=\"clients.html\"><i class=\"ti-id-badge\"></i> Clients</a></li>
                      <li><a href=\"client-carousel.html\"><i class=\"ti-layout-slider\"></i> Client carousel</a></li>
                      <li><a href=\"subscribe.html\"><i class=\"ti-bookmark\"></i> Subscribe</a></li>
                      <li><a href=\"call-to-action.html\"><i class=\"ti-headphone-alt\"></i> Call to action</a></li>
                      <li><a href=\"tab.html\"><i class=\"ti-layout-tab\"></i> Tab</a></li>
                      <li><a href=\"google-map.html\"><i class=\"ti-location-pin\"></i> Google map</a></li>
                      <li><a href=\"text-slider.html\"><i class=\"ti-layout-media-overlay\"></i> Text slider</a></li>
                      <li><a href=\"contact-form.html\"><i class=\"ti-clipboard\"></i> Contact form</a></li>
                      <li><a href=\"image-gallery.html\"><i class=\"ti-gallery\"></i> Image gallery</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Infographics / icons</li>
                      <li><a href=\"process-bar.html\"><i class=\"icon-hourglass\"></i> Process bar</a></li>
                      <li><a href=\"icon-with-text.html\"><i class=\"ti-layout-media-left\"></i> Icon with text</a></li>
                      <li><a href=\"overline-icon-box.html\"><i class=\"ti-layout-placeholder\"></i> Overline icon box</a></li>
                      <li><a href=\"custom-icon-with-text.html\"><i class=\"ti-layout-cta-btn-left\"></i> Custom icon with text</a></li>
                      <li><a href=\"counters.html\"><i class=\"ti-timer\"></i> Counters</a></li>
                      <li><a href=\"countdown.html\"><i class=\"ti-alarm-clock\"></i> Countdown</a></li>
                      <li><a href=\"pie-charts.html\"><i class=\"ti-pie-chart\"></i> Pie charts</a></li>
                      <li><a href=\"text-box.html\"><i class=\"ti-layout-cta-left\"></i> Text box</a></li>
                      <li><a href=\"fancy-text-box.html\"><i class=\"ti-layout-cta-center\"></i> Fancy text box</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->

                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Interactive Elements</li>
                      <li><a href=\"testimonials.html\"><i class=\"ti-thought\"></i> Testimonials</a></li>
                      <li><a href=\"testimonials-carousel.html\"><i class=\"ti-comments\"></i> Testimonials carousel</a></li>
                      <li><a href=\"video.html\"><i class=\"ti-video-camera\"></i> Video</a></li>
                      <li><a href=\"interactive-banners.html\"><i class=\"ti-image\"></i> Interactive banners</a></li>
                      <li><a href=\"services.html\"><i class=\"ti-headphone-alt\"></i> Services</a></li>
                      <li><a href=\"portfolio-slider.html\"><i class=\"ti-layout-slider-alt\"></i> Portfolio slider</a></li>
                      <li><a href=\"info-banner.html\"><i class=\"ti-layout-slider\"></i> Info banner</a></li>
                      <li><a href=\"rotate-box.html\"><i class=\"ti-layout-width-full\"></i> Rotate box</a></li>
                      <li><a href=\"process-step.html\"><i class=\"ti-stats-up\"></i> Process step</a></li>
                      <li><a href=\"blog-posts.html\"><i class=\"ti-comment-alt\"></i> Blog posts</a></li>
                      <li><a href=\"instagram.html\"><i class=\"ti-instagram\"></i> Instagram</a></li>
                      <li><a href=\"parallax-scrolling.html\"><i class=\"ti-exchange-vertical\"></i> Parallax scrolling</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Text & containers</li>
                      <li><a href=\"heading.html\"><i class=\"ti-text\"></i> Heading</a></li>
                      <li><a href=\"dropcaps.html\"><i class=\"ti-layout-accordion-list\"></i> Dropcaps</a></li>
                      <li><a href=\"columns.html\"><i class=\"ti-layout-column3-alt\"></i> Columns</a></li>
                      <li><a href=\"blockquote.html\"><i class=\"ti-quote-left\"></i> Blockquote</a></li>
                      <li><a href=\"highlights.html\"><i class=\"ti-underline\"></i> Highlights</a></li>
                      <li><a href=\"message-box.html\"><i class=\"ti-layout-media-right-alt\"></i> Message box</a></li>
                      <li><a href=\"social-icons.html\"><i class=\"ti-signal\"></i> Social icons</a></li>
                      <li><a href=\"lists.html\"><i class=\"ti-list\"></i> Lists</a></li>
                      <li><a href=\"seperators.html\"><i class=\"ti-layout-line-solid\"></i> Separators</a></li>
                      <li><a href=\"pricing-table.html\"><i class=\"ti-layout-grid2-thumb\"></i> Pricing table</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Features</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Header Styles</li>
                      <li><a href=\"transparent-header.html\">Transparent header</a></li>
                      <li><a href=\"white-header.html\">White header</a></li>
                      <li><a href=\"dark-header.html\">Dark header</a></li>
                      <li><a href=\"header-with-top-bar.html\">Header with top bar</a></li>
                      <li><a href=\"header-with-sticky-top-bar.html\">Header with sticky top bar</a></li>
                      <li><a href=\"header-with-push.html\">Header with push</a></li>
                      <li><a href=\"center-navigation.html\">Center navigation</a></li>
                      <li><a href=\"center-logo.html\">Center logo</a></li>
                      <li><a href=\"top-logo.html\">Top logo</a></li>
                      <li><a href=\"one-page-navigation.html\">One page navigation</a></li>
                      <li><a href=\"hamburger-menu.html\">Hamburger menu</a></li>
                      <li><a href=\"hamburger-menu-modern.html\">Hamburger menu modern</a></li>
                      <li><a href=\"hamburger-menu-half.html\">Hamburger menu half</a></li>
                      <li><a href=\"left-menu-classic.html\">Left menu classic</a></li>
                      <li><a href=\"left-menu-modern.html\">Left menu modern</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Footer</li>
                      <li><a href=\"footer-standard.html\">Footer standard</a></li>
                      <li><a href=\"footer-standard-dark.html\">Footer standard dark</a></li>
                      <li><a href=\"footer-classic.html\">Footer classic</a></li>
                      <li><a href=\"footer-classic-dark.html\">Footer classic dark</a></li>
                      <li><a href=\"footer-clean.html\">Footer clean</a></li>
                      <li><a href=\"footer-clean-dark.html\">Footer clean dark</a></li>
                      <li><a href=\"footer-modern.html\">Footer modern</a></li>
                      <li><a href=\"footer-modern-dark.html\">Footer modern dark</a></li>
                      <li><a href=\"footer-center-logo.html\">Footer center logo </a></li>
                      <li><a href=\"footer-center-logo-dark.html\">Footer center logo dark</a></li>
                      <li><a href=\"footer-strip.html\">Footer strip</a></li>
                      <li><a href=\"footer-strip-dark.html\">Footer strip dark</a></li>
                      <li><a href=\"footer-center-logo-02.html\">Footer center logo 02</a></li>
                      <li><a href=\"footer-center-logo-02-dark.html\">Footer center logo 02 dark</a></li>
                      <li class=\"menu-new\"><a href=\"footer-clean-modern.html\">footer clean modern</a></li>
                      <li class=\"menu-new\"><a href=\"footer-clean-modern-dark.html\">footer clean modern dark</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->

                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Page Title</li>
                      <li><a href=\"page-title-left-alignment.html\">Left alignment</a></li>
                      <li><a href=\"page-title-right-alignment.html\">Right alignment</a></li>
                      <li><a href=\"page-title-center-alignment.html\">Center alignment</a></li>
                      <li><a href=\"page-title-dark-style.html\">Dark style</a></li>
                      <li><a href=\"page-title-big-typography.html\">Big typography</a></li>
                      <li><a href=\"page-title-parallax-image-background.html\">Parallax image background</a></li>
                      <li><a href=\"page-title-background-breadcrumbs.html\">Image after breadcrumbs</a></li>
                      <li><a href=\"page-title-gallery-background.html\">Gallery background</a></li>
                      <li><a href=\"page-title-background-video.html\">Background video</a></li>
                      <li><a href=\"page-title-mini-version.html\">Mini version</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Gallery</li>
                      <li><a href=\"single-image-lightbox.html\">Single image lightbox</a></li>
                      <li><a href=\"lightbox-gallery.html\">Lightbox gallery</a></li>
                      <li><a href=\"zoom-gallery.html\">Zoom gallery</a></li>
                      <li class=\"menu-new\"><a href=\"metro-gallery.html\">metro gallery</a></li>
                      <li class=\"menu-new\"><a href=\"justified-gallery.html\">justified gallery</a></li>
                      <li><a href=\"popup-with-form.html\">Popup with form</a></li>
                      <li><a href=\"modal-popup.html\">Modal popup</a></li>
                      <li><a href=\"open-youtube-video.html\">Open youtube video</a></li>
                      <li><a href=\"open-vimeo-video.html\">Open vimeo video</a></li>
                      <li><a href=\"open-google-map.html\">Open google map</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"col-auto pr-lg-0\">
        <div class=\"header-searchbar\">
          <a href=\"#search-header\" class=\"header-search-form\"><i class=\"fas fa-search search-button\"></i></a>
          <!-- search input-->
          <form id=\"search-header\" method=\"post\" action=\"search-result.html\" name=\"search-header\" class=\"mfp-hide search-form-result\">
            <div class=\"search-form position-relative\">
              <button type=\"submit\" class=\"fas fa-search close-search search-button\"></button>
              <input type=\"text\" name=\"search\" class=\"search-input\" placeholder=\"Enter your keywords...\" autocomplete=\"off\">
            </div>
          </form>
        </div>
        <div class=\"heder-menu-button d-none d-lg-inline-block\">
          <button class=\"navbar-toggle mobile-toggle right-menu-button\" type=\"button\" id=\"showRightPush\">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navigation -->
  <div class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right\" id=\"cbp-spmenu-s2\">
    <button class=\"close-button-menu side-menu-close\" id=\"close-pushmenu\"></button>
    <div class=\"d-table padding-twelve-all height-100 width-100 text-center\">
      <div class=\"d-table-cell align-top padding-70px-top position-relative\">
        <div class=\"row\">
          <div class=\"col-lg-12 margin-70px-bottom\">
            <img src=\"images/logo-black-big.png\"/>
          </div>
          <div class=\"col-lg-12 margin-70px-bottom\">
            <img src=\"images/sidebar-image1.png\"/>
          </div>
          <div class=\"col-lg-12\">
            <h5 class=\"alt-font text-extra-dark-gray\"><span class=\"d-block font-weight-300 text-dark-gray\">The world's most</span><strong>powerful website builder.</strong></h5>
          </div>
          <div class=\"col-lg-12\">
            <a href=\"#\" class=\"btn btn-deep-pink btn-small text-extra-small border-radius-4\"><i class=\"fas fa-play-circle icon-very-small margin-5px-right no-margin-left\" aria-hidden=\"true\"></i>Purchase Now</a>
          </div>
          <div class=\"col-md-12 margin-100px-top text-center\">
            <div class=\"icon-social-medium margin-three-bottom\">
              <a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
              <a href=\"https://twitter.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
              <a href=\"https://dribbble.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-dribbble\" aria-hidden=\"true\"></i></a>
              <a href=\"https://plus.google.com\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-google-plus-g\" aria-hidden=\"true\"></i></a>
              <a href=\"https://www.tumblr.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-tumblr\" aria-hidden=\"true\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- end navigation -->
</header>
<!-- end header -->
<!-- start parallax hero section -->
<section class=\"wow fadeIn p-0 parallax sm-background-image-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('http://placehold.it/1920x1100')\">
  <div class=\"opacity-extra-medium bg-black\"></div>
  <div class=\"container-fluid position-relative full-screen\">
    <div class=\"slider-typography\">
      <div class=\"slider-text-middle-main\">
        <div class=\"slider-text-bottom\">
          <div class=\"col-12 col-xl-6 col-lg-7 float-right bg-deep-pink-opacity padding-six-lr lg-padding-seven-lr padding-five-tb sm-padding-30px-all last-paragraph-no-margin\">
            <div class=\"box-separator-line width-180px bg-white lg-width-120px md-width-90px d-none d-lg-block\"></div>
            <h1 class=\"font-weight-600 alt-font text-white-2 width-95 md-width-100\">We combine design, thinking and technical.</h1>
            <p class=\"text-large font-weight-300 text-white-2 width-75 lg-width-85 md-width-95 sm-width-100 d-none d-md-block\">We are a full-service digital agency. Everything you could possibly want it to do and not only that, beautifully carefully designed.</p>
            <a href=\"https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa\" target=\"_blank\" class=\"btn btn-medium btn-white margin-40px-top text-link-deep-pink sm-margin-10px-top\">Purchase Pofo</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end parallax hero section -->
<!-- start about agency section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12 col-lg-8 col-md-11 text-center margin-six-bottom sm-margin-30px-bottom\">
        <div class=\"alt-font text-medium-gray margin-5px-bottom text-uppercase text-small\">About Digital Agency</div>
        <h6 class=\"font-weight-300 text-extra-dark-gray mb-0\">We always stay with our <strong class=\"font-weight-400\">clients and respect</strong> their business. We deliver 100% and provide instant response to help them succeed in constantly changing and <strong class=\"font-weight-400\">challenging business</strong> world.</h6>
      </div>
    </div>
    <div class=\"row\">
      <!-- feature box item-->
      <div class=\"col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\">
        <div class=\"feature-box\">
          <div class=\"content\">
            <i class=\"icon-browser text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom\"></i>
            <div class=\"text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom\">Live Website Builder</div>
            <p class=\"width-85 mx-auto md-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item-->
      <!-- feature box item-->
      <div class=\"col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.2s\">
        <div class=\"feature-box\">
          <div class=\"content\">
            <i class=\"icon-book-open text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom\"></i>
            <div class=\"text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom\">Live Content Creator</div>
            <p class=\"width-85 mx-auto md-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item-->
      <!-- feature box item-->
      <div class=\"col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.4s\">
        <div class=\"feature-box\">
          <div class=\"content\">
            <i class=\"icon-wallet text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom\"></i>
            <div class=\"text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom\">Create Unique Demos</div>
            <p class=\"width-85 mx-auto md-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item-->
    </div>
  </div>
</section>
<!-- end about agency section -->
<!-- start parallax with feature box section -->
<section class=\"parallax one-second-screen parallax-feature-box md-height-auto\" data-stellar-background-ratio=\"0.3\" style=\"background-image:url('http://placehold.it/1920x1200');\">
  <div class=\"opacity-medium bg-extra-dark-gray\"></div>
  <div class=\"container position-relative\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12 col-xl-6 col-md-8 text-center md-margin-60px-bottom sm-margin-40px-bottom\">
        <a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=nrJtHemSPW4\">
          <img src=\"images/icon-play.png\" class=\"width-130px\" alt=\"\"/></a>
        <h4 class=\"alt-font text-white-2\">We are delivering beautiful digital products for you</h4>
      </div>
    </div>
    <div class=\"parallax-feature-box-bottom z-index-5 d-flex flex-wrap justify-content-center w-100 left-0 wow fadeInUp\">
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-desktop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">Unique Design</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp\" data-wow-delay=\"0.2s\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-tools icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">Different Layout</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 sm-margin-eight-bottom wow fadeInUp\" data-wow-delay=\"0.4s\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-target icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">Portfolio Styles</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.6s\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-laptop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">WordPress Theme</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
    </div>
  </div>
</section>
<!-- end parallax with feature box section -->
<!-- start feature box -->
<section class=\"wow fadeIn bg-light-gray wow fadeIn\">
  <div class=\"container margin-six-top lg-margin-ten-top md-no-margin-top\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom\">
        <h5 class=\"text-extra-dark-gray font-weight-600 alt-font mb-0\">The world's most powerful wordpress website builder</h5>
      </div>
      <!-- end feature box item -->
      <!-- start feature box item -->
      <div class=\"col-12 col-lg-4 col-md-6 text-center text-lg-left sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
        <div class=\"row m-0\">
          <div class=\"col-12 col-lg-3 text-center sm-no-padding-lr\">
            <h2 class=\"text-light-gray alt-font letter-spacing-minus-3 mb-0 md-margin-10px-bottom\">01</h2>
          </div>
          <div class=\"col-12 col-lg-9 margin-5px-top text-center text-lg-left sm-no-padding-lr\">
            <span class=\"alt-font text-medium text-extra-dark-gray margin-5px-bottom d-block\">Modern Framework</span>
            <p class=\"width-80 lg-width-100\">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item -->
      <!-- start feature box item -->
      <div class=\"col-12 col-lg-4 col-md-6 text-center text-lg-left wow fadeIn last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
        <div class=\"row m-0\">
          <div class=\"col-12 col-lg-3 text-center sm-no-padding-lr\">
            <h2 class=\"text-light-gray alt-font letter-spacing-minus-3 mb-0 md-margin-10px-bottom\">02</h2>
          </div>
          <div class=\"col-12 col-lg-9 margin-5px-top text-center text-lg-left sm-no-padding-lr\">
            <span class=\"alt-font text-medium text-extra-dark-gray margin-5px-bottom d-block\">Live Website Builder</span>
            <p class=\"width-80 lg-width-100\">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item -->
    </div>
  </div>
</section>
<!-- end feature box section -->
<!-- start portfolio section -->
<section class=\"wow fadeIn border-bottom border-color-extra-light-gray no-padding-bottom\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <p class=\"alt-font text-medium-gray margin-5px-bottom text-uppercase text-small\">Selected latest Works</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">New Projects</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"filter-content overflow-hidden margin-100px-top md-margin-70px-top sm-margin-50px-top sm-margin-15px-lr w-100\">
        <ul class=\"portfolio-grid work-4col gutter-large hover-option6 lightbox-portfolio\">
          <li class=\"grid-sizer\"></li>
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-01.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-01.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Herbal Beauty Salon</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Identity</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-02.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a
                  ></div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-02.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Tailoring Interior</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Brochure</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-03.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-03.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Designblast Inc</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Web and Photography</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.6s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-04.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-04.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">HardDot Stone</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Identity</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-05.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-05.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Crop Identity</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Brochure</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-06.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-06.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Violator Series</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Web and Photography</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-07.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-07.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Jeremy Dupont</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Identity</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.6s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-08.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-08.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Bill Gardner</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Web and Photography</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end portfolio section -->
<!-- start section -->
<section class=\"wow fadeIn position-relative md-no-padding-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6 padding-eleven-right lg-padding-ten-right text-center text-lg-left md-padding-15px-right md-margin-50px-bottom sm-margin-40px-bottom wow fadeIn\">
        <h4 class=\"font-weight-600 alt-font text-extra-dark-gray\">Working to build a better web design</h4>
        <p class=\"text-large alt-font font-weight-300\">We are committed to customers success from start to finish. Our input helps make their solutions stand out from the crowd.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <a href=\"team-classic.html\" class=\"btn btn-small btn-dark-gray\">Meet The Team</a>
      </div>
      <div class=\"right-image\">
        <img src=\"images/image-right.png\" alt=\"\"/>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start testimonials section -->
<section class=\"wow fadeIn bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom\">
        <p class=\"alt-font text-medium-gray margin-5px-bottom text-uppercase text-small\">what people says</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">Testimonials</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-12 col-md-7 col-lg-12\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-4 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3\">
            <div class=\"testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-eight-all\">
              I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.
            </div>
            <!-- start testimonials item -->
            <div class=\"testimonial-box padding-25px-all sm-padding-20px-all\">
              <div class=\"image-box width-20\"><img src=\"http://placehold.it/149x149\" class=\"border-radius-100\" alt=\"\"></div>
              <div class=\"name-box padding-20px-left\">
                <div class=\"alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray\">Shoko Mugikura</div>
                <p class=\"text-extra-small text-uppercase text-medium-gray\">Graphic Designer</p>
              </div>
            </div>
          </div>
          <!-- end testimonials item -->
          <!-- start testimonials item -->
          <div class=\"col-12 col-lg-4 sm-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3\" data-wow-delay=\"0.2s\">
            <div class=\"testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-eight-all\">
              This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.
            </div>
            <div class=\"testimonial-box padding-25px-all sm-padding-20px-all\">
              <div class=\"image-box width-20\"><img src=\"http://placehold.it/149x149\" class=\"border-radius-100\" alt=\"\"></div>
              <div class=\"name-box padding-20px-left\">
                <div class=\"alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray\">Alexander Harvard</div>
                <p class=\"text-extra-small text-uppercase text-medium-gray\">Creative Director</p>
              </div>
            </div>
          </div>
          <!-- end testimonials item -->
          <!-- start testimonials item -->
          <div class=\"col-12 col-lg-4 wow fadeIn last-paragraph-no-margin testimonial-style3\" data-wow-delay=\"0.4s\">
            <div class=\"testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom sm-padding-eight-all\">
              Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks again guys for all your hard work.
            </div>
            <div class=\"testimonial-box padding-25px-all sm-padding-20px-all\">
              <div class=\"image-box width-20\"><img src=\"http://placehold.it/149x149\" class=\"border-radius-100\" alt=\"\"></div>
              <div class=\"name-box padding-20px-left\">
                <div class=\"alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray\">Herman Miller</div>
                <p class=\"text-extra-small text-uppercase text-medium-gray\">Co Founder / CEO</p>
              </div>
            </div>
          </div>
          <!-- end testimonials item -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end testimonial section  -->
<!-- start feature box section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-seven-bottom sm-margin-40px-bottom wow fadeInRight last-paragraph-no-margin\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-tools icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">Powerful Options</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-seven-bottom sm-margin-40px-bottom wow fadeInRight last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-heart icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">Made with Love</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 sm-margin-40px-bottom wow fadeInRight last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-layers icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">Visual Page Builder</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 wow fadeInRight last-paragraph-no-margin\" data-wow-delay=\"0.6s\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-expand icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">User Experience</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
    </div>
  </div>
</section>
<!-- end feature box section -->
<!-- start section -->
<section class=\"wow fadeIn p-0 main-slider mobile-height content-right-slider\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeIn\" style=\"background-image:url('http://placehold.it/1200x854')\"></div>
      <div class=\"swiper-full-screen swiper-container col-12 col-lg-6 px-0 white-move bg-extra-dark-gray text-center sm-padding-20px-tb wow fadeIn\">
        <div class=\"swiper-wrapper\">
          <!-- start slider item -->
          <div class=\"swiper-slide last-paragraph-no-margin\">
            <div class=\"padding-eighteen-all lg-padding-eight-all md-padding-thirteen-all sm-padding-15px-lr\">
              <div class=\"margin-30px-bottom text-center position-relative\">
                <span class=\"title-large alt-font font-weight-100 text-dark-gray opacity4\">01</span>
                <p class=\"alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 md-top-25 sm-top-12\">Let’s make something beautiful</p>
              </div>
              <h4 class=\"alt-font text-white-2\">Unlimited power and customization possibilities</h4>
              <p class=\"width-90 md-width-95 sm-width-85 mx-auto\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
              <a href=\"about-us-classic.html\" class=\"btn btn-small btn-white margin-35px-top\"> About company</a>
            </div>
          </div>
          <!-- end slider item -->
          <!-- start slider item -->
          <div class=\"swiper-slide last-paragraph-no-margin\">
            <div class=\"padding-eighteen-all lg-padding-eight-all md-padding-thirteen-all sm-padding-15px-lr\">
              <div class=\"margin-30px-bottom text-center position-relative\">
                <span class=\"title-large alt-font font-weight-100 text-dark-gray opacity4\">02</span>
                <p class=\"alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 md-top-25 sm-top-12\">We are digital media agency</p>
              </div>
              <h4 class=\"alt-font text-white-2\">We are delivering beautiful digital products for you</h4>
              <p class=\"width-90 md-width-95 sm-width-85 mx-auto\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
              <a href=\"about-us-classic.html\" class=\"btn btn-small btn-white margin-35px-top\"> About company</a>
            </div>
          </div>
          <!-- end slider item -->
          <!-- start slider item -->
          <div class=\"swiper-slide last-paragraph-no-margin\">
            <div class=\"padding-eighteen-all lg-padding-eight-all md-padding-thirteen-all sm-padding-15px-lr\">
              <div class=\"margin-30px-bottom text-center position-relative\">
                <span class=\"title-large alt-font font-weight-100 text-dark-gray opacity4\">03</span>
                <p class=\"alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 md-top-25 sm-top-12\">We create designs and technology</p>
              </div>
              <h4 class=\"alt-font text-white-2\">We provide high quality & cost effective services</h4>
              <p class=\"width-90 md-width-95 sm-width-85 mx-auto\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
              <a href=\"about-us-classic.html\" class=\"btn btn-small btn-white margin-35px-top\"> About company</a>
            </div>
          </div>
          <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class=\"swiper-button-next slider-long-arrow-white\"></div>
        <div class=\"swiper-button-prev slider-long-arrow-white\"></div>
        <!-- end slider pagination -->
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start team section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom\">
        <p class=\"alt-font margin-5px-bottom text-uppercase text-medium-gray text-small\">Teamwork builds trust</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">Creative People</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row\">
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Herman Miller</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Co-Founder / Design</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight\" data-wow-delay=\"0.2s\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Bill Gardner</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Co-Founder / Design</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 sm-margin-30px-bottom wow fadeInRight\" data-wow-delay=\"0.4s\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Jeremy Dupont</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Creative Director</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 wow fadeInRight\" data-wow-delay=\"0.6s\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Sara Smith</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Creative Studio Head</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
    </div>
  </div>
</section>
<!-- end team section -->
<!-- start blog section -->
<section id=\"blog\" class=\"bg-light-gray blog-post-style5 wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom\">
        <p class=\"alt-font margin-5px-bottom text-uppercase text-medium-gray text-small\">Publish what you think</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">Recent Blog</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-12 px-3 p-md-0\">
        <ul class=\"blog-grid blog-3col gutter-large\">
          <li class=\"grid-sizer\"></li>
          <!-- start post item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\">
            <div class=\"blog-post\">
              <div class=\"blog-post-images overflow-hidden\">
                <a href=\"#\">
                  <img src=\"http://placehold.it/900x650\" alt=\"\">
                </a>
                <div class=\"blog-categories bg-white text-uppercase text-extra-small alt-font\"><a href=\"#\">Graphic Design</a></div>
              </div>
              <div class=\"post-details padding-40px-all bg-white md-padding-20px-all\">
                <div class=\"blog-hover-color\"></div>
                <a href=\"#\" class=\"alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom\">I like the body. I like to design everything to do with the body.</a>
                <div class=\"author\">
                  <span class=\"text-medium-gray text-uppercase text-extra-small d-inline-block\">by <a href=\"#\" class=\"text-medium-gray\">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                </div>
                <div class=\"separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb\"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
              </div>
            </div>
          </li>
          <!-- end post item -->
          <!-- start post item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
            <div class=\"blog-post\">
              <div class=\"blog-post-images overflow-hidden\">
                <a href=\"blog-post-layout-02.html\">
                  <img src=\"http://placehold.it/900x650\" alt=\"\">
                </a>
                <div class=\"blog-categories bg-white text-uppercase text-extra-small alt-font\"><a href=\"blog-grid.html\">Advertisement</a></div>
              </div>
              <div class=\"post-details padding-40px-all bg-white md-padding-20px-all\">
                <div class=\"blog-hover-color\"></div>
                <a href=\"blog-post-layout-02.html\" class=\"alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom\">Recognizing the need is the primary condition for design.</a>
                <div class=\"author\">
                  <span class=\"text-medium-gray text-uppercase text-extra-small d-inline-block\">by <a href=\"#\" class=\"text-medium-gray\">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                </div>
                <div class=\"separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb\"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
              </div>
            </div>
          </li>
          <!-- end post item -->
          <!-- start post item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
            <div class=\"blog-post\">
              <div class=\"blog-post-images overflow-hidden\">
                <a href=\"blog-post-layout-03.html\">
                  <img src=\"http://placehold.it/900x650\" alt=\"\">
                </a>
                <div class=\"blog-categories bg-white text-uppercase text-extra-small alt-font\"><a href=\"blog-grid.html\">Branding</a></div>
              </div>
              <div class=\"post-details padding-40px-all bg-white md-padding-20px-all\">
                <div class=\"blog-hover-color\"></div>
                <a href=\"blog-post-layout-03.html\" class=\"alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom\">Styles come and go. Design is a language, not a style.</a>
                <div class=\"author\">
                  <span class=\"text-medium-gray text-uppercase text-extra-small d-inline-block\">by <a href=\"#\" class=\"text-medium-gray\">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                </div>
                <div class=\"separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb\"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
              </div>
            </div>
          </li>
          <!-- end post item -->
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end blog section -->
<!-- start footer -->
<footer class=\"footer-standard-dark bg-extra-dark-gray\">
  <div class=\"footer-widget-area padding-five-tb sm-padding-30px-tb\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center\">
          <!-- start logo -->
          <a href=\"index.html\" class=\"margin-20px-bottom d-inline-block\"><img class=\"footer-logo\" src=\"images/logo-white.png\" data-rjs=\"images/logo-white@2x.png\" alt=\"\"></a>
          <!-- end logo -->
          <p class=\"text-small width-95 sm-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <!-- start social media -->
          <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">
            <ul class=\"small-icon no-margin-bottom\">
              <li><a class=\"facebook text-white-2\" href=\"https://www.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a></li>
              <li><a class=\"twitter text-white-2\" href=\"https://twitter.com/\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
              <li><a class=\"google text-white-2\" href=\"https://plus.google.com\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a></li>
              <li><a class=\"instagram text-white-2\" href=\"https://instagram.com/\" target=\"_blank\"><i class=\"fab fa-instagram no-margin-right\" aria-hidden=\"true\"></i></a></li>
            </ul>
          </div>
          <!-- end social media -->
        </div>
        <!-- start additional links -->
        <div class=\"col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left\">
          <div class=\"widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600\">Additional Links</div>
          <ul class=\"list-unstyled\">
            <li><a class=\"text-small\" href=\"home-classic-corporate.html\">Home Classic Corporate</a></li>
            <li><a class=\"text-small\" href=\"home-creative-business.html\">Home Creative Business</a></li>
            <li><a class=\"text-small\" href=\"home-creative-designer.html\">Home Creative Designer</a></li>
            <li><a class=\"text-small\" href=\"home-portfolio-minimal.html\">Home Portfolio Minimal</a></li>
            <li><a class=\"text-small\" href=\"home-portfolio-parallax.html\">Home Portfolio  parallax</a></li>
            <li><a class=\"text-small\" href=\"home-portfolio-personal.html\">Home Portfolio Personal</a></li>
          </ul>
        </div>
        <!-- end additional links -->
        <!-- start contact information -->
        <div class=\"col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left\">
          <div class=\"widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600\">Contact Info</div>
          <p class=\"text-small d-block margin-15px-bottom width-80 sm-width-100\">POFO Design Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <div class=\"text-small\">Email: <a href=\"mailto:sales@domain.com\">sales@domain.com</a></div>
          <div class=\"text-small\">Phone: +44 (0) 123 456 7890</div>
          <a href=\"contact-us-modern.html\" class=\"text-small text-uppercase text-decoration-underline\">View Direction</a>
        </div>
        <!-- end contact information -->
        <!-- start instagram -->
        <div class=\"col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left text-center text-md-left\">
          <div class=\"widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600\">Instagram portfolio</div>
          <div class=\"instagram-follow-api\">
            <ul id=\"instaFeed-footer\"></ul>
          </div>
        </div>
        <!-- end instagram -->
      </div>
    </div>
  </div>
  <div class=\"bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb\">
    <div class=\"container\">
      <div class=\"row\">
        <!-- start copyright -->
        <div class=\"col-md-6 text-md-left text-small text-center\">&copy; 2019 POFO is Proudly Powered by <a href=\"http://www.themezaa.com\" target=\"_blank\" class=\"text-dark-gray\">ThemeZaa</a></div>
        <div class=\"col-md-6 text-md-right text-small text-center\">
          <a href=\"javascript:void(0);\" class=\"text-dark-gray\">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Privacy Policy</a>
        </div>
        <!-- end copyright -->
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- start scroll to top -->
<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
<!-- end scroll to top -->
<!-- javascript libraries -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<!--<script type=\"text/javascript\" src=\"js/modernizr.js\"></script>-->
<script type=\"text/javascript\" src=\"js/bootstrap.bundle.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"js/skrollr.min.js\"></script>
<script type=\"text/javascript\" src=\"js/smooth-scroll.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.appear.js\"></script>
<!-- menu navigation -->
<script type=\"text/javascript\" src=\"js/bootsnav.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.nav.js\"></script>
<!-- animation -->
<script type=\"text/javascript\" src=\"js/wow.min.js\"></script>
<!-- page scroll -->
<script type=\"text/javascript\" src=\"js/page-scroll.js\"></script>
<!-- swiper carousel -->
<script type=\"text/javascript\" src=\"js/swiper.min.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"js/jquery.count-to.js\"></script>
<!-- parallax -->
<script type=\"text/javascript\" src=\"js/jquery.stellar.js\"></script>
<!-- magnific popup -->
<script type=\"text/javascript\" src=\"js/jquery.magnific-popup.min.js\"></script>
<!-- portfolio with shorting tab -->
<script type=\"text/javascript\" src=\"js/isotope.pkgd.min.js\"></script>
<!-- images loaded -->
<script type=\"text/javascript\" src=\"js/imagesloaded.pkgd.min.js\"></script>
<!-- pull menu -->
<script type=\"text/javascript\" src=\"js/classie.js\"></script>
<script type=\"text/javascript\" src=\"js/hamburger-menu.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"js/counter.js\"></script>
<!-- fit video -->
<script type=\"text/javascript\" src=\"js/jquery.fitvids.js\"></script>

<!-- skill bars -->
<script type=\"text/javascript\" src=\"js/skill.bars.jquery.js\"></script>
<!-- justified gallery -->
<script type=\"text/javascript\" src=\"js/justified-gallery.min.js\"></script>
<!--pie chart-->
<script type=\"text/javascript\" src=\"js/jquery.easypiechart.min.js\"></script>
<!-- instagram -->
<script type=\"text/javascript\" src=\"js/instafeed.min.js\"></script>
<!-- retina -->
<script type=\"text/javascript\" src=\"js/retina.min.js\"></script>
<!-- revolution -->
<script type=\"text/javascript\" src=\"revolution/js/jquery.themepunch.tools.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/jquery.themepunch.revolution.min.js\"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!--<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.actions.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.kenburn.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.layeranimation.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.migration.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.navigation.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.parallax.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.slideanims.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.video.min.js\"></script>-->
<!-- setting -->
<script type=\"text/javascript\" src=\"js/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/pewobox/templates/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<!-- start header -->
<header>
  <!-- start navigation -->
  <nav class=\"navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg\">
    <div class=\"container nav-header-container\">
      <!-- start logo -->
      <div class=\"col-auto pl-lg-0\">
        <a href=\"index.html\" title=\"Pofo\" class=\"logo\"><img src=\"images/logo.png\" data-rjs=\"images/logo@2x.png\" class=\"logo-dark\" alt=\"Pofo\"><img src=\"images/logo-white.png\" data-rjs=\"images/logo-white@2x.png\" alt=\"Pofo\" class=\"logo-light default\"></a>
      </div>
      <!-- end logo -->
      <div class=\"col accordion-menu pr-0 pr-md-3\">
        <button type=\"button\" class=\"navbar-toggler collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-toggle-1\">
          <span class=\"sr-only\">toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbar-collapse-toggle-1\">
          <ul id=\"accordion\" class=\"nav navbar-nav no-margin alt-font text-normal\" data-in=\"fadeIn\" data-out=\"fadeOut\">
            <!-- start menu item -->
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Home</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Classic Homepages</li>
                      <li><a href=\"home-classic-corporate.html\">Classic corporate</a></li>
                      <li><a href=\"home-classic-digital-agency.html\">Classic digital agency</a></li>
                      <li><a href=\"home-classic-innovation-agency.html\">Classic innovation agency</a></li>
                      <li><a href=\"home-classic-web-agency.html\">Classic web agency</a></li>
                      <li><a href=\"home-classic-one-page.html\">Classic one page</a></li>
                      <li><a href=\"home-classic-start-up.html\">Classic start-up</a></li>
                      <li><a href=\"home-classic-interactive-agency.html\">Classic interactive agency</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Creative Homepages</li>
                      <li><a href=\"home-creative-studio.html\">Creative studio</a></li>
                      <li><a href=\"home-creative-business.html\">Creative business</a></li>
                      <li><a href=\"home-creative-simple-portfolio.html\">Creative simple portfolio</a></li>
                      <li><a href=\"home-creative-branding-agency.html\">Creative branding agency</a></li>
                      <li class=\"menu-new\"><a href=\"home-creative-minimalist-portfolio.html\">creative minimalist portfolio</a></li>
                      <li><a href=\"home-creative-small-business.html\">Creative small business</a></li>
                      <li><a href=\"home-creative-designer.html\">Creative designer</a></li>
                      <li><a href=\"home-creative-agency.html\">Creative agency</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Portfolio Homepages</li>
                      <li><a href=\"home-portfolio-minimal.html\">Portfolio minimal</a></li>
                      <li><a href=\"home-portfolio-multiple-carousel.html\">Portfolio multiple carousel</a></li>
                      <li><a href=\"home-portfolio-centered-slides.html\">Portfolio centered slides</a></li>
                      <li><a href=\"home-portfolio-personal.html\">Portfolio personal</a></li>
                      <li><a href=\"home-portfolio-metro.html\">Portfolio metro</a></li>
                      <li><a href=\"home-portfolio-full-screen-vertical.html\">Portfolio full screen – vertical</a></li>
                      <li><a href=\"home-portfolio-photographer.html\">Portfolio photographer</a></li>
                      <li><a href=\"home-portfolio-parallax.html\">Portfolio parallax</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Blog Homepages</li>
                      <li><a href=\"home-blog-grid.html\">Blog grid</a></li>
                      <li><a href=\"home-blog-masonry.html\">Blog masonry</a></li>
                      <li><a href=\"home-blog-clean.html\">Blog clean</a></li>
                      <li><a href=\"home-blog-personal.html\">Blog personal</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
            <!-- end menu item -->
            <li class=\"dropdown simple-dropdown\"><a href=\"#\">Pages</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">About <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"about-us-simple.html\">About us simple</a></li>
                    <li><a href=\"about-us-classic.html\">About us classic</a></li>
                    <li><a href=\"about-us-modern.html\">About us modern</a></li>
                    <li><a href=\"about-me.html\">About me</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Services <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"services-simple.html\">Services simple</a></li>
                    <li><a href=\"services-classic.html\">Services classic</a></li>
                    <li><a href=\"services-modern.html\">Services modern</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Contact <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"contact-us-simple.html\">Contact simple</a></li>
                    <li><a href=\"contact-us-classic.html\">Contact classic</a></li>
                    <li><a href=\"contact-us-classic-02.html\">Contact classic – style 02</a></li>
                    <li><a href=\"contact-us-modern.html\">Contact modern</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Team <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"team-simple.html\">Team simple</a></li>
                    <li><a href=\"team-classic.html\">Team classic</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Additional Pages <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"our-clients.html\">Our clients</a></li>
                    <li><a href=\"404.html\">Error 404</a></li>
                    <li><a href=\"coming-soon.html\">Coming soon</a></li>
                    <li><a href=\"coming-soon-02.html\">Coming soon – style 02</a></li>
                    <li><a href=\"faq.html\">Faq</a></li>
                    <li><a href=\"maintenance.html\">Maintenance</a></li>
                    <li><a href=\"search-result.html\">Search result</a></li>
                    <li><a href=\"pricing.html\">Pricing</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Portfolio</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Grid - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-grid-overlay.html\">Portfolio grid overlay</a></li>
                      <li><a href=\"portfolio-full-width-grid-with-icon.html\">Portfolio grid with icon</a></li>
                      <li><a href=\"portfolio-full-width-grid-transform.html\">Portfolio grid transform</a></li>
                      <li><a href=\"portfolio-full-width-grid-zooming.html\">Portfolio grid zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Masonry - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-masonry-overlay.html\">Portfolio masonry overlay</a></li>
                      <li><a href=\"portfolio-full-width-masonry-with-icon.html\">Portfolio masonry with icon</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Metro - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-metro-overlay.html\">Portfolio metro overlay</a></li>
                      <li><a href=\"portfolio-full-width-metro-with-icon.html\">Portfolio metro with icon</a></li>
                      <li><a href=\"portfolio-full-width-metro-transform.html\">Portfolio metro transform</a></li>
                      <li><a href=\"portfolio-full-width-metro-zooming.html\">Portfolio metro zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Other - Full width Layouts</li>
                      <li><a href=\"portfolio-full-width-image-gallery.html\">Portfolio image gallery</a></li>
                      <li><a href=\"portfolio-full-width-justified-gallery.html\">Portfolio justified</a></li>
                      <li><a href=\"portfolio-full-width-carousel.html\">Portfolio carousel</a></li>
                      <li><a href=\"portfolio-full-width-parallax.html\">Portfolio parallax</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Grid - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-grid-overlay.html\">Portfolio grid overlay</a></li>
                      <li><a href=\"portfolio-boxed-grid-with-icon.html\">Portfolio grid with icon</a></li>
                      <li><a href=\"portfolio-boxed-grid-transform.html\">Portfolio grid transform</a></li>
                      <li><a href=\"portfolio-boxed-grid-zooming.html\">Portfolio grid zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Masonry - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-masonry-overlay.html\">Portfolio masonry overlay</a></li>
                      <li><a href=\"portfolio-boxed-masonry-with-icon.html\">Portfolio masonry with icon</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Metro - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-metro-overlay.html\">Portfolio metro overlay</a></li>
                      <li><a href=\"portfolio-boxed-metro-with-icon.html\">Portfolio metro with icon</a></li>
                      <li><a href=\"portfolio-boxed-metro-transform.html\">Portfolio metro transform</a></li>
                      <li><a href=\"portfolio-boxed-metro-zooming.html\">Portfolio metro zooming</a></li>
                    </ul>
                    <ul>
                      <li class=\"dropdown-header\">Other - Boxed Layouts</li>
                      <li><a href=\"portfolio-boxed-image-gallery.html\">Portfolio image gallery</a></li>
                      <li><a href=\"portfolio-boxed-justified-gallery.html\">Portfolio justified</a></li>
                      <li><a href=\"portfolio-boxed-carousel.html\">Portfolio carousel</a></li>
                      <li><a href=\"portfolio-boxed-parallax.html\">Portfolio parallax</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->

                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Single Project Page</li>
                      <li><a href=\"single-project-page-01.html\">Single project page 01</a></li>
                      <li><a href=\"single-project-page-02.html\">Single project page 02</a></li>
                      <li><a href=\"single-project-page-03.html\">Single project page 03</a></li>
                      <li><a href=\"single-project-page-04.html\">Single project page 04</a></li>
                      <li><a href=\"single-project-page-05.html\">Single project page 05</a></li>
                      <li><a href=\"single-project-page-06.html\">Single project page 06</a></li>
                      <li><a href=\"single-project-page-07.html\">Single project page 07</a></li>
                      <li><a href=\"single-project-page-08.html\">Single project page 08</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Portfolio Columns</li>
                      <li><a href=\"portfolio-two-columns.html\">Portfolio 2 columns</a></li>
                      <li><a href=\"portfolio-three-columns.html\">Portfolio 3 columns</a></li>
                      <li><a href=\"portfolio-four-columns.html\">Portfolio 4 columns</a></li>
                      <li><a href=\"portfolio-five-columns.html\">Portfolio 5 columns</a></li>
                    </ul>
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3 d-none d-lg-block\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li>
                        <a href=\"home-creative-studio.html\" class=\"menu-banner-image\"><img src=\"images/menu-banner-01.png\" alt=\"portfolio\"/></a>
                      </li>
                      <li>
                        <a href=\"home-creative-business.html\" class=\"menu-banner-image\"><img src=\"images/menu-banner-02.png\" alt=\"portfolio\"/></a>
                      </li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
            <li class=\"dropdown simple-dropdown\"><a href=\"#\" title=\"Blog\">Blog</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Standard <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-standard-full-width.html\">Blog standard – full width</a></li>
                    <li><a href=\"blog-standard-with-left-sidebar.html\">Blog standard with left sidebar</a></li>
                    <li><a href=\"blog-standard-with-right-sidebar.html\">Blog standard with right sidebar</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Classic <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-classic.html\">Blog classic</a></li>
                    <li><a href=\"blog-classic-full-width.html\">Blog classic – full width</a></li>

                  </ul></li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog List <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-list.html\">Blog list</a></li>
                    <li><a href=\"blog-list-full-width.html\">Blog list – full width</a></li>
                  </ul></li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Grid <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-grid.html\">Blog grid</a></li>
                    <li><a href=\"blog-grid-full-width.html\">Blog grid – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Masonry <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-masonry.html\">Blog masonry</a></li>
                    <li><a href=\"blog-masonry-full-width.html\">Blog masonry – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Simple <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-simple.html\">Blog simple</a></li>
                    <li><a href=\"blog-simple-full-width.html\">Blog simple – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Clean <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-clean.html\">Blog clean</a></li>
                    <li><a href=\"blog-clean-full-width.html\">Blog clean – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Images <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-images.html\">Blog images</a></li>
                    <li><a href=\"blog-images-full-width.html\">Blog images – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Blog Only Text <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-only-text.html\">Blog only text</a></li>
                    <li><a href=\"blog-only-text-full-width.html\">Blog only text – full width</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Post Layout <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-post-layout-01.html\">Blog post layout 01</a></li>
                    <li><a href=\"blog-post-layout-02.html\">Blog post layout 02</a></li>
                    <li><a href=\"blog-post-layout-03.html\">Blog post layout 03</a></li>
                    <li><a href=\"blog-post-layout-04.html\">Blog post layout 04</a></li>
                    <li><a href=\"blog-post-layout-05.html\">Blog post layout 05</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Post Types <i class=\"fas fa-angle-right\"></i></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"blog-standard-post.html\">Standard post</a></li>
                    <li><a href=\"blog-gallery-post.html\">Gallery post</a></li>
                    <li><a href=\"blog-slider-post.html\">Slider post</a></li>
                    <li><a href=\"blog-html5-video-post.html\">HTML5 video post</a></li>
                    <li><a href=\"blog-youtube-video-post.html\">Youtube video post</a></li>
                    <li><a href=\"blog-vimeo-video-post.html\">Vimeo video post</a></li>
                    <li><a href=\"blog-audio-post.html\">Audio post</a></li>
                    <li><a href=\"blog-blockquote-post.html\">Blockquote post</a></li>
                    <li><a href=\"blog-full-width-post.html\">Full width post</a></li>
                  </ul>
                </li>
              </ul>
              <!-- end sub menu -->
            </li>
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Elements</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full icon-list-menu\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">General elements</li>
                      <li><a href=\"accordions.html\"><i class=\"ti-layout-accordion-separated\"></i> Accordions</a></li>
                      <li><a href=\"buttons.html\"><i class=\"ti-mouse\"></i> Buttons</a></li>
                      <li><a href=\"team.html\"><i class=\"ti-user\"></i> Team</a></li>
                      <li><a href=\"team-carousel.html\"><i class=\"ti-layout-slider-alt\"></i> Team carousel</a></li>
                      <li><a href=\"clients.html\"><i class=\"ti-id-badge\"></i> Clients</a></li>
                      <li><a href=\"client-carousel.html\"><i class=\"ti-layout-slider\"></i> Client carousel</a></li>
                      <li><a href=\"subscribe.html\"><i class=\"ti-bookmark\"></i> Subscribe</a></li>
                      <li><a href=\"call-to-action.html\"><i class=\"ti-headphone-alt\"></i> Call to action</a></li>
                      <li><a href=\"tab.html\"><i class=\"ti-layout-tab\"></i> Tab</a></li>
                      <li><a href=\"google-map.html\"><i class=\"ti-location-pin\"></i> Google map</a></li>
                      <li><a href=\"text-slider.html\"><i class=\"ti-layout-media-overlay\"></i> Text slider</a></li>
                      <li><a href=\"contact-form.html\"><i class=\"ti-clipboard\"></i> Contact form</a></li>
                      <li><a href=\"image-gallery.html\"><i class=\"ti-gallery\"></i> Image gallery</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Infographics / icons</li>
                      <li><a href=\"process-bar.html\"><i class=\"icon-hourglass\"></i> Process bar</a></li>
                      <li><a href=\"icon-with-text.html\"><i class=\"ti-layout-media-left\"></i> Icon with text</a></li>
                      <li><a href=\"overline-icon-box.html\"><i class=\"ti-layout-placeholder\"></i> Overline icon box</a></li>
                      <li><a href=\"custom-icon-with-text.html\"><i class=\"ti-layout-cta-btn-left\"></i> Custom icon with text</a></li>
                      <li><a href=\"counters.html\"><i class=\"ti-timer\"></i> Counters</a></li>
                      <li><a href=\"countdown.html\"><i class=\"ti-alarm-clock\"></i> Countdown</a></li>
                      <li><a href=\"pie-charts.html\"><i class=\"ti-pie-chart\"></i> Pie charts</a></li>
                      <li><a href=\"text-box.html\"><i class=\"ti-layout-cta-left\"></i> Text box</a></li>
                      <li><a href=\"fancy-text-box.html\"><i class=\"ti-layout-cta-center\"></i> Fancy text box</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->

                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Interactive Elements</li>
                      <li><a href=\"testimonials.html\"><i class=\"ti-thought\"></i> Testimonials</a></li>
                      <li><a href=\"testimonials-carousel.html\"><i class=\"ti-comments\"></i> Testimonials carousel</a></li>
                      <li><a href=\"video.html\"><i class=\"ti-video-camera\"></i> Video</a></li>
                      <li><a href=\"interactive-banners.html\"><i class=\"ti-image\"></i> Interactive banners</a></li>
                      <li><a href=\"services.html\"><i class=\"ti-headphone-alt\"></i> Services</a></li>
                      <li><a href=\"portfolio-slider.html\"><i class=\"ti-layout-slider-alt\"></i> Portfolio slider</a></li>
                      <li><a href=\"info-banner.html\"><i class=\"ti-layout-slider\"></i> Info banner</a></li>
                      <li><a href=\"rotate-box.html\"><i class=\"ti-layout-width-full\"></i> Rotate box</a></li>
                      <li><a href=\"process-step.html\"><i class=\"ti-stats-up\"></i> Process step</a></li>
                      <li><a href=\"blog-posts.html\"><i class=\"ti-comment-alt\"></i> Blog posts</a></li>
                      <li><a href=\"instagram.html\"><i class=\"ti-instagram\"></i> Instagram</a></li>
                      <li><a href=\"parallax-scrolling.html\"><i class=\"ti-exchange-vertical\"></i> Parallax scrolling</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Text & containers</li>
                      <li><a href=\"heading.html\"><i class=\"ti-text\"></i> Heading</a></li>
                      <li><a href=\"dropcaps.html\"><i class=\"ti-layout-accordion-list\"></i> Dropcaps</a></li>
                      <li><a href=\"columns.html\"><i class=\"ti-layout-column3-alt\"></i> Columns</a></li>
                      <li><a href=\"blockquote.html\"><i class=\"ti-quote-left\"></i> Blockquote</a></li>
                      <li><a href=\"highlights.html\"><i class=\"ti-underline\"></i> Highlights</a></li>
                      <li><a href=\"message-box.html\"><i class=\"ti-layout-media-right-alt\"></i> Message box</a></li>
                      <li><a href=\"social-icons.html\"><i class=\"ti-signal\"></i> Social icons</a></li>
                      <li><a href=\"lists.html\"><i class=\"ti-list\"></i> Lists</a></li>
                      <li><a href=\"seperators.html\"><i class=\"ti-layout-line-solid\"></i> Separators</a></li>
                      <li><a href=\"pricing-table.html\"><i class=\"ti-layout-grid2-thumb\"></i> Pricing table</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
            <li class=\"dropdown megamenu-fw\">
              <a href=\"#\">Features</a><i class=\"fas fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\" aria-hidden=\"true\"></i>
              <!-- start sub menu -->
              <div class=\"menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full\">
                <ul>
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Header Styles</li>
                      <li><a href=\"transparent-header.html\">Transparent header</a></li>
                      <li><a href=\"white-header.html\">White header</a></li>
                      <li><a href=\"dark-header.html\">Dark header</a></li>
                      <li><a href=\"header-with-top-bar.html\">Header with top bar</a></li>
                      <li><a href=\"header-with-sticky-top-bar.html\">Header with sticky top bar</a></li>
                      <li><a href=\"header-with-push.html\">Header with push</a></li>
                      <li><a href=\"center-navigation.html\">Center navigation</a></li>
                      <li><a href=\"center-logo.html\">Center logo</a></li>
                      <li><a href=\"top-logo.html\">Top logo</a></li>
                      <li><a href=\"one-page-navigation.html\">One page navigation</a></li>
                      <li><a href=\"hamburger-menu.html\">Hamburger menu</a></li>
                      <li><a href=\"hamburger-menu-modern.html\">Hamburger menu modern</a></li>
                      <li><a href=\"hamburger-menu-half.html\">Hamburger menu half</a></li>
                      <li><a href=\"left-menu-classic.html\">Left menu classic</a></li>
                      <li><a href=\"left-menu-modern.html\">Left menu modern</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column -->
                  <!-- start sub menu column -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Footer</li>
                      <li><a href=\"footer-standard.html\">Footer standard</a></li>
                      <li><a href=\"footer-standard-dark.html\">Footer standard dark</a></li>
                      <li><a href=\"footer-classic.html\">Footer classic</a></li>
                      <li><a href=\"footer-classic-dark.html\">Footer classic dark</a></li>
                      <li><a href=\"footer-clean.html\">Footer clean</a></li>
                      <li><a href=\"footer-clean-dark.html\">Footer clean dark</a></li>
                      <li><a href=\"footer-modern.html\">Footer modern</a></li>
                      <li><a href=\"footer-modern-dark.html\">Footer modern dark</a></li>
                      <li><a href=\"footer-center-logo.html\">Footer center logo </a></li>
                      <li><a href=\"footer-center-logo-dark.html\">Footer center logo dark</a></li>
                      <li><a href=\"footer-strip.html\">Footer strip</a></li>
                      <li><a href=\"footer-strip-dark.html\">Footer strip dark</a></li>
                      <li><a href=\"footer-center-logo-02.html\">Footer center logo 02</a></li>
                      <li><a href=\"footer-center-logo-02-dark.html\">Footer center logo 02 dark</a></li>
                      <li class=\"menu-new\"><a href=\"footer-clean-modern.html\">footer clean modern</a></li>
                      <li class=\"menu-new\"><a href=\"footer-clean-modern-dark.html\">footer clean modern dark</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->

                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Page Title</li>
                      <li><a href=\"page-title-left-alignment.html\">Left alignment</a></li>
                      <li><a href=\"page-title-right-alignment.html\">Right alignment</a></li>
                      <li><a href=\"page-title-center-alignment.html\">Center alignment</a></li>
                      <li><a href=\"page-title-dark-style.html\">Dark style</a></li>
                      <li><a href=\"page-title-big-typography.html\">Big typography</a></li>
                      <li><a href=\"page-title-parallax-image-background.html\">Parallax image background</a></li>
                      <li><a href=\"page-title-background-breadcrumbs.html\">Image after breadcrumbs</a></li>
                      <li><a href=\"page-title-gallery-background.html\">Gallery background</a></li>
                      <li><a href=\"page-title-background-video.html\">Background video</a></li>
                      <li><a href=\"page-title-mini-version.html\">Mini version</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                  <!-- start sub menu column  -->
                  <li class=\"mega-menu-column col-lg-3\">
                    <!-- start sub menu item  -->
                    <ul>
                      <li class=\"dropdown-header\">Gallery</li>
                      <li><a href=\"single-image-lightbox.html\">Single image lightbox</a></li>
                      <li><a href=\"lightbox-gallery.html\">Lightbox gallery</a></li>
                      <li><a href=\"zoom-gallery.html\">Zoom gallery</a></li>
                      <li class=\"menu-new\"><a href=\"metro-gallery.html\">metro gallery</a></li>
                      <li class=\"menu-new\"><a href=\"justified-gallery.html\">justified gallery</a></li>
                      <li><a href=\"popup-with-form.html\">Popup with form</a></li>
                      <li><a href=\"modal-popup.html\">Modal popup</a></li>
                      <li><a href=\"open-youtube-video.html\">Open youtube video</a></li>
                      <li><a href=\"open-vimeo-video.html\">Open vimeo video</a></li>
                      <li><a href=\"open-google-map.html\">Open google map</a></li>
                    </ul>
                    <!-- end sub menu item  -->
                  </li>
                  <!-- end sub menu column  -->
                </ul>
                <!-- end sub menu -->
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"col-auto pr-lg-0\">
        <div class=\"header-searchbar\">
          <a href=\"#search-header\" class=\"header-search-form\"><i class=\"fas fa-search search-button\"></i></a>
          <!-- search input-->
          <form id=\"search-header\" method=\"post\" action=\"search-result.html\" name=\"search-header\" class=\"mfp-hide search-form-result\">
            <div class=\"search-form position-relative\">
              <button type=\"submit\" class=\"fas fa-search close-search search-button\"></button>
              <input type=\"text\" name=\"search\" class=\"search-input\" placeholder=\"Enter your keywords...\" autocomplete=\"off\">
            </div>
          </form>
        </div>
        <div class=\"heder-menu-button d-none d-lg-inline-block\">
          <button class=\"navbar-toggle mobile-toggle right-menu-button\" type=\"button\" id=\"showRightPush\">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navigation -->
  <div class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right\" id=\"cbp-spmenu-s2\">
    <button class=\"close-button-menu side-menu-close\" id=\"close-pushmenu\"></button>
    <div class=\"d-table padding-twelve-all height-100 width-100 text-center\">
      <div class=\"d-table-cell align-top padding-70px-top position-relative\">
        <div class=\"row\">
          <div class=\"col-lg-12 margin-70px-bottom\">
            <img src=\"images/logo-black-big.png\"/>
          </div>
          <div class=\"col-lg-12 margin-70px-bottom\">
            <img src=\"images/sidebar-image1.png\"/>
          </div>
          <div class=\"col-lg-12\">
            <h5 class=\"alt-font text-extra-dark-gray\"><span class=\"d-block font-weight-300 text-dark-gray\">The world's most</span><strong>powerful website builder.</strong></h5>
          </div>
          <div class=\"col-lg-12\">
            <a href=\"#\" class=\"btn btn-deep-pink btn-small text-extra-small border-radius-4\"><i class=\"fas fa-play-circle icon-very-small margin-5px-right no-margin-left\" aria-hidden=\"true\"></i>Purchase Now</a>
          </div>
          <div class=\"col-md-12 margin-100px-top text-center\">
            <div class=\"icon-social-medium margin-three-bottom\">
              <a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
              <a href=\"https://twitter.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
              <a href=\"https://dribbble.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-dribbble\" aria-hidden=\"true\"></i></a>
              <a href=\"https://plus.google.com\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-google-plus-g\" aria-hidden=\"true\"></i></a>
              <a href=\"https://www.tumblr.com/\" target=\"_blank\" class=\"text-extra-dark-gray text-deep-pink-hover margin-one-lr\"><i class=\"fab fa-tumblr\" aria-hidden=\"true\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- end navigation -->
</header>
<!-- end header -->
<!-- start parallax hero section -->
<section class=\"wow fadeIn p-0 parallax sm-background-image-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('http://placehold.it/1920x1100')\">
  <div class=\"opacity-extra-medium bg-black\"></div>
  <div class=\"container-fluid position-relative full-screen\">
    <div class=\"slider-typography\">
      <div class=\"slider-text-middle-main\">
        <div class=\"slider-text-bottom\">
          <div class=\"col-12 col-xl-6 col-lg-7 float-right bg-deep-pink-opacity padding-six-lr lg-padding-seven-lr padding-five-tb sm-padding-30px-all last-paragraph-no-margin\">
            <div class=\"box-separator-line width-180px bg-white lg-width-120px md-width-90px d-none d-lg-block\"></div>
            <h1 class=\"font-weight-600 alt-font text-white-2 width-95 md-width-100\">We combine design, thinking and technical.</h1>
            <p class=\"text-large font-weight-300 text-white-2 width-75 lg-width-85 md-width-95 sm-width-100 d-none d-md-block\">We are a full-service digital agency. Everything you could possibly want it to do and not only that, beautifully carefully designed.</p>
            <a href=\"https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa\" target=\"_blank\" class=\"btn btn-medium btn-white margin-40px-top text-link-deep-pink sm-margin-10px-top\">Purchase Pofo</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end parallax hero section -->
<!-- start about agency section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12 col-lg-8 col-md-11 text-center margin-six-bottom sm-margin-30px-bottom\">
        <div class=\"alt-font text-medium-gray margin-5px-bottom text-uppercase text-small\">About Digital Agency</div>
        <h6 class=\"font-weight-300 text-extra-dark-gray mb-0\">We always stay with our <strong class=\"font-weight-400\">clients and respect</strong> their business. We deliver 100% and provide instant response to help them succeed in constantly changing and <strong class=\"font-weight-400\">challenging business</strong> world.</h6>
      </div>
    </div>
    <div class=\"row\">
      <!-- feature box item-->
      <div class=\"col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\">
        <div class=\"feature-box\">
          <div class=\"content\">
            <i class=\"icon-browser text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom\"></i>
            <div class=\"text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom\">Live Website Builder</div>
            <p class=\"width-85 mx-auto md-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item-->
      <!-- feature box item-->
      <div class=\"col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.2s\">
        <div class=\"feature-box\">
          <div class=\"content\">
            <i class=\"icon-book-open text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom\"></i>
            <div class=\"text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom\">Live Content Creator</div>
            <p class=\"width-85 mx-auto md-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item-->
      <!-- feature box item-->
      <div class=\"col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.4s\">
        <div class=\"feature-box\">
          <div class=\"content\">
            <i class=\"icon-wallet text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom\"></i>
            <div class=\"text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom\">Create Unique Demos</div>
            <p class=\"width-85 mx-auto md-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item-->
    </div>
  </div>
</section>
<!-- end about agency section -->
<!-- start parallax with feature box section -->
<section class=\"parallax one-second-screen parallax-feature-box md-height-auto\" data-stellar-background-ratio=\"0.3\" style=\"background-image:url('http://placehold.it/1920x1200');\">
  <div class=\"opacity-medium bg-extra-dark-gray\"></div>
  <div class=\"container position-relative\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12 col-xl-6 col-md-8 text-center md-margin-60px-bottom sm-margin-40px-bottom\">
        <a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=nrJtHemSPW4\">
          <img src=\"images/icon-play.png\" class=\"width-130px\" alt=\"\"/></a>
        <h4 class=\"alt-font text-white-2\">We are delivering beautiful digital products for you</h4>
      </div>
    </div>
    <div class=\"parallax-feature-box-bottom z-index-5 d-flex flex-wrap justify-content-center w-100 left-0 wow fadeInUp\">
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-desktop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">Unique Design</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp\" data-wow-delay=\"0.2s\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-tools icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">Different Layout</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 sm-margin-eight-bottom wow fadeInUp\" data-wow-delay=\"0.4s\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-target icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">Portfolio Styles</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.6s\">
        <div class=\"bg-white box-shadow-light text-center padding-twelve-all position-relative h-100 sm-padding-five-all\">
          <i class=\"icon-laptop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-15px-bottom\"></i>
          <div class=\"alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600\">WordPress Theme</div>
          <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div>
      </div>
      <!-- end features box item -->
    </div>
  </div>
</section>
<!-- end parallax with feature box section -->
<!-- start feature box -->
<section class=\"wow fadeIn bg-light-gray wow fadeIn\">
  <div class=\"container margin-six-top lg-margin-ten-top md-no-margin-top\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom\">
        <h5 class=\"text-extra-dark-gray font-weight-600 alt-font mb-0\">The world's most powerful wordpress website builder</h5>
      </div>
      <!-- end feature box item -->
      <!-- start feature box item -->
      <div class=\"col-12 col-lg-4 col-md-6 text-center text-lg-left sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
        <div class=\"row m-0\">
          <div class=\"col-12 col-lg-3 text-center sm-no-padding-lr\">
            <h2 class=\"text-light-gray alt-font letter-spacing-minus-3 mb-0 md-margin-10px-bottom\">01</h2>
          </div>
          <div class=\"col-12 col-lg-9 margin-5px-top text-center text-lg-left sm-no-padding-lr\">
            <span class=\"alt-font text-medium text-extra-dark-gray margin-5px-bottom d-block\">Modern Framework</span>
            <p class=\"width-80 lg-width-100\">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item -->
      <!-- start feature box item -->
      <div class=\"col-12 col-lg-4 col-md-6 text-center text-lg-left wow fadeIn last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
        <div class=\"row m-0\">
          <div class=\"col-12 col-lg-3 text-center sm-no-padding-lr\">
            <h2 class=\"text-light-gray alt-font letter-spacing-minus-3 mb-0 md-margin-10px-bottom\">02</h2>
          </div>
          <div class=\"col-12 col-lg-9 margin-5px-top text-center text-lg-left sm-no-padding-lr\">
            <span class=\"alt-font text-medium text-extra-dark-gray margin-5px-bottom d-block\">Live Website Builder</span>
            <p class=\"width-80 lg-width-100\">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
          </div>
        </div>
      </div>
      <!-- end feature box item -->
    </div>
  </div>
</section>
<!-- end feature box section -->
<!-- start portfolio section -->
<section class=\"wow fadeIn border-bottom border-color-extra-light-gray no-padding-bottom\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <p class=\"alt-font text-medium-gray margin-5px-bottom text-uppercase text-small\">Selected latest Works</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">New Projects</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"filter-content overflow-hidden margin-100px-top md-margin-70px-top sm-margin-50px-top sm-margin-15px-lr w-100\">
        <ul class=\"portfolio-grid work-4col gutter-large hover-option6 lightbox-portfolio\">
          <li class=\"grid-sizer\"></li>
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-01.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-01.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Herbal Beauty Salon</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Identity</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-02.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a
                  ></div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-02.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Tailoring Interior</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Brochure</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-03.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-03.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Designblast Inc</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Web and Photography</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.6s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-04.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-04.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">HardDot Stone</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Identity</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-05.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-05.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Crop Identity</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Brochure</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-06.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-06.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Violator Series</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Web and Photography</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-07.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-07.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Jeremy Dupont</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Branding and Identity</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
          <!-- start portfolio item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.6s\">
            <figure>
              <div class=\"portfolio-img bg-deep-pink position-relative text-center overflow-hidden\">
                <img src=\"http://placehold.it/800x650\" alt=\"\"/>
                <div class=\"portfolio-icon\">
                  <a href=\"single-project-page-08.html\"><i class=\"fas fa-link text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                  <a class=\"gallery-link\" title=\"Lightbox gallery image title...\" href=\"http://placehold.it/800x650\"><i class=\"fas fa-search text-extra-dark-gray\" aria-hidden=\"true\"></i></a>
                </div>
              </div>
              <figcaption class=\"bg-white\">
                <div class=\"portfolio-hover-main text-center\">
                  <div class=\"portfolio-hover-box vertical-align-middle\">
                    <div class=\"portfolio-hover-content position-relative\">
                      <a href=\"single-project-page-08.html\"><span class=\"line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block\">Bill Gardner</span></a>
                      <p class=\"text-medium-gray text-extra-small text-uppercase\">Web and Photography</p>
                    </div>
                  </div>
                </div>
              </figcaption>
            </figure>
          </li>
          <!-- end portfolio item -->
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end portfolio section -->
<!-- start section -->
<section class=\"wow fadeIn position-relative md-no-padding-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6 padding-eleven-right lg-padding-ten-right text-center text-lg-left md-padding-15px-right md-margin-50px-bottom sm-margin-40px-bottom wow fadeIn\">
        <h4 class=\"font-weight-600 alt-font text-extra-dark-gray\">Working to build a better web design</h4>
        <p class=\"text-large alt-font font-weight-300\">We are committed to customers success from start to finish. Our input helps make their solutions stand out from the crowd.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <a href=\"team-classic.html\" class=\"btn btn-small btn-dark-gray\">Meet The Team</a>
      </div>
      <div class=\"right-image\">
        <img src=\"images/image-right.png\" alt=\"\"/>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start testimonials section -->
<section class=\"wow fadeIn bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom\">
        <p class=\"alt-font text-medium-gray margin-5px-bottom text-uppercase text-small\">what people says</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">Testimonials</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-12 col-md-7 col-lg-12\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-4 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3\">
            <div class=\"testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-eight-all\">
              I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.
            </div>
            <!-- start testimonials item -->
            <div class=\"testimonial-box padding-25px-all sm-padding-20px-all\">
              <div class=\"image-box width-20\"><img src=\"http://placehold.it/149x149\" class=\"border-radius-100\" alt=\"\"></div>
              <div class=\"name-box padding-20px-left\">
                <div class=\"alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray\">Shoko Mugikura</div>
                <p class=\"text-extra-small text-uppercase text-medium-gray\">Graphic Designer</p>
              </div>
            </div>
          </div>
          <!-- end testimonials item -->
          <!-- start testimonials item -->
          <div class=\"col-12 col-lg-4 sm-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3\" data-wow-delay=\"0.2s\">
            <div class=\"testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-eight-all\">
              This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.
            </div>
            <div class=\"testimonial-box padding-25px-all sm-padding-20px-all\">
              <div class=\"image-box width-20\"><img src=\"http://placehold.it/149x149\" class=\"border-radius-100\" alt=\"\"></div>
              <div class=\"name-box padding-20px-left\">
                <div class=\"alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray\">Alexander Harvard</div>
                <p class=\"text-extra-small text-uppercase text-medium-gray\">Creative Director</p>
              </div>
            </div>
          </div>
          <!-- end testimonials item -->
          <!-- start testimonials item -->
          <div class=\"col-12 col-lg-4 wow fadeIn last-paragraph-no-margin testimonial-style3\" data-wow-delay=\"0.4s\">
            <div class=\"testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom sm-padding-eight-all\">
              Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks again guys for all your hard work.
            </div>
            <div class=\"testimonial-box padding-25px-all sm-padding-20px-all\">
              <div class=\"image-box width-20\"><img src=\"http://placehold.it/149x149\" class=\"border-radius-100\" alt=\"\"></div>
              <div class=\"name-box padding-20px-left\">
                <div class=\"alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray\">Herman Miller</div>
                <p class=\"text-extra-small text-uppercase text-medium-gray\">Co Founder / CEO</p>
              </div>
            </div>
          </div>
          <!-- end testimonials item -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end testimonial section  -->
<!-- start feature box section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-seven-bottom sm-margin-40px-bottom wow fadeInRight last-paragraph-no-margin\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-tools icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">Powerful Options</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 md-margin-seven-bottom sm-margin-40px-bottom wow fadeInRight last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-heart icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">Made with Love</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 sm-margin-40px-bottom wow fadeInRight last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-layers icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">Visual Page Builder</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class=\"col-12 col-lg-3 col-md-6 wow fadeInRight last-paragraph-no-margin\" data-wow-delay=\"0.6s\">
        <div class=\"feature-box-6 position-relative\">
          <i class=\"icon-expand icon-extra-medium text-deep-pink\"></i>
          <div class=\"alt-font text-extra-dark-gray font-weight-600 line-height-20\">User Experience</div>
          <p class=\"line-height-20\">Shortcode subtitle</p>
        </div>
      </div>
      <!-- end features box item -->
    </div>
  </div>
</section>
<!-- end feature box section -->
<!-- start section -->
<section class=\"wow fadeIn p-0 main-slider mobile-height content-right-slider\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeIn\" style=\"background-image:url('http://placehold.it/1200x854')\"></div>
      <div class=\"swiper-full-screen swiper-container col-12 col-lg-6 px-0 white-move bg-extra-dark-gray text-center sm-padding-20px-tb wow fadeIn\">
        <div class=\"swiper-wrapper\">
          <!-- start slider item -->
          <div class=\"swiper-slide last-paragraph-no-margin\">
            <div class=\"padding-eighteen-all lg-padding-eight-all md-padding-thirteen-all sm-padding-15px-lr\">
              <div class=\"margin-30px-bottom text-center position-relative\">
                <span class=\"title-large alt-font font-weight-100 text-dark-gray opacity4\">01</span>
                <p class=\"alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 md-top-25 sm-top-12\">Let’s make something beautiful</p>
              </div>
              <h4 class=\"alt-font text-white-2\">Unlimited power and customization possibilities</h4>
              <p class=\"width-90 md-width-95 sm-width-85 mx-auto\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
              <a href=\"about-us-classic.html\" class=\"btn btn-small btn-white margin-35px-top\"> About company</a>
            </div>
          </div>
          <!-- end slider item -->
          <!-- start slider item -->
          <div class=\"swiper-slide last-paragraph-no-margin\">
            <div class=\"padding-eighteen-all lg-padding-eight-all md-padding-thirteen-all sm-padding-15px-lr\">
              <div class=\"margin-30px-bottom text-center position-relative\">
                <span class=\"title-large alt-font font-weight-100 text-dark-gray opacity4\">02</span>
                <p class=\"alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 md-top-25 sm-top-12\">We are digital media agency</p>
              </div>
              <h4 class=\"alt-font text-white-2\">We are delivering beautiful digital products for you</h4>
              <p class=\"width-90 md-width-95 sm-width-85 mx-auto\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
              <a href=\"about-us-classic.html\" class=\"btn btn-small btn-white margin-35px-top\"> About company</a>
            </div>
          </div>
          <!-- end slider item -->
          <!-- start slider item -->
          <div class=\"swiper-slide last-paragraph-no-margin\">
            <div class=\"padding-eighteen-all lg-padding-eight-all md-padding-thirteen-all sm-padding-15px-lr\">
              <div class=\"margin-30px-bottom text-center position-relative\">
                <span class=\"title-large alt-font font-weight-100 text-dark-gray opacity4\">03</span>
                <p class=\"alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 md-top-25 sm-top-12\">We create designs and technology</p>
              </div>
              <h4 class=\"alt-font text-white-2\">We provide high quality & cost effective services</h4>
              <p class=\"width-90 md-width-95 sm-width-85 mx-auto\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the typesetting industry.</p>
              <a href=\"about-us-classic.html\" class=\"btn btn-small btn-white margin-35px-top\"> About company</a>
            </div>
          </div>
          <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class=\"swiper-button-next slider-long-arrow-white\"></div>
        <div class=\"swiper-button-prev slider-long-arrow-white\"></div>
        <!-- end slider pagination -->
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start team section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom\">
        <p class=\"alt-font margin-5px-bottom text-uppercase text-medium-gray text-small\">Teamwork builds trust</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">Creative People</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row\">
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Herman Miller</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Co-Founder / Design</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight\" data-wow-delay=\"0.2s\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Bill Gardner</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Co-Founder / Design</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 sm-margin-30px-bottom wow fadeInRight\" data-wow-delay=\"0.4s\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" target=\"_blank\" class=\"text-white-2\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Jeremy Dupont</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Creative Director</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
      <!-- start team item -->
      <div class=\"col-12 col-lg-3 col-md-6 team-block text-left team-style-1 wow fadeInRight\" data-wow-delay=\"0.6s\">
        <figure>
          <div class=\"team-image sm-width-100\">
            <img src=\"http://placehold.it/700x892\" alt=\"\">
            <div class=\"overlay-content text-center d-flex align-items-end justify-content-center\">
              <div class=\"icon-social-small padding-twelve-all width-100\">
                <span class=\"text-white-2 text-small d-inline-block m-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                <div class=\"separator-line-horrizontal-full bg-deep-pink margin-eleven-tb\"></div>
                <a href=\"http://www.facebook.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"http://www.twitter.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"http://www.plus.google.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                <a href=\"http://www.instagram.com\" class=\"text-white-2\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
              </div>
            </div>
            <div class=\"team-overlay bg-extra-dark-gray opacity8\"></div>
          </div>
          <figcaption>
            <div class=\"team-member-position margin-20px-top text-center\">
              <div class=\"text-small font-weight-500 text-extra-dark-gray text-uppercase\">Sara Smith</div>
              <div class=\"text-extra-small text-uppercase text-medium-gray\">Creative Studio Head</div>
            </div>
          </figcaption>
        </figure>
      </div>
      <!-- end team item -->
    </div>
  </div>
</section>
<!-- end team section -->
<!-- start blog section -->
<section id=\"blog\" class=\"bg-light-gray blog-post-style5 wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom\">
        <p class=\"alt-font margin-5px-bottom text-uppercase text-medium-gray text-small\">Publish what you think</p>
        <h5 class=\"text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100\">Recent Blog</h5>
        <span class=\"separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px\"></span>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-12 px-3 p-md-0\">
        <ul class=\"blog-grid blog-3col gutter-large\">
          <li class=\"grid-sizer\"></li>
          <!-- start post item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\">
            <div class=\"blog-post\">
              <div class=\"blog-post-images overflow-hidden\">
                <a href=\"#\">
                  <img src=\"http://placehold.it/900x650\" alt=\"\">
                </a>
                <div class=\"blog-categories bg-white text-uppercase text-extra-small alt-font\"><a href=\"#\">Graphic Design</a></div>
              </div>
              <div class=\"post-details padding-40px-all bg-white md-padding-20px-all\">
                <div class=\"blog-hover-color\"></div>
                <a href=\"#\" class=\"alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom\">I like the body. I like to design everything to do with the body.</a>
                <div class=\"author\">
                  <span class=\"text-medium-gray text-uppercase text-extra-small d-inline-block\">by <a href=\"#\" class=\"text-medium-gray\">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                </div>
                <div class=\"separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb\"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
              </div>
            </div>
          </li>
          <!-- end post item -->
          <!-- start post item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.2s\">
            <div class=\"blog-post\">
              <div class=\"blog-post-images overflow-hidden\">
                <a href=\"blog-post-layout-02.html\">
                  <img src=\"http://placehold.it/900x650\" alt=\"\">
                </a>
                <div class=\"blog-categories bg-white text-uppercase text-extra-small alt-font\"><a href=\"blog-grid.html\">Advertisement</a></div>
              </div>
              <div class=\"post-details padding-40px-all bg-white md-padding-20px-all\">
                <div class=\"blog-hover-color\"></div>
                <a href=\"blog-post-layout-02.html\" class=\"alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom\">Recognizing the need is the primary condition for design.</a>
                <div class=\"author\">
                  <span class=\"text-medium-gray text-uppercase text-extra-small d-inline-block\">by <a href=\"#\" class=\"text-medium-gray\">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                </div>
                <div class=\"separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb\"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
              </div>
            </div>
          </li>
          <!-- end post item -->
          <!-- start post item -->
          <li class=\"grid-item wow fadeInUp last-paragraph-no-margin\" data-wow-delay=\"0.4s\">
            <div class=\"blog-post\">
              <div class=\"blog-post-images overflow-hidden\">
                <a href=\"blog-post-layout-03.html\">
                  <img src=\"http://placehold.it/900x650\" alt=\"\">
                </a>
                <div class=\"blog-categories bg-white text-uppercase text-extra-small alt-font\"><a href=\"blog-grid.html\">Branding</a></div>
              </div>
              <div class=\"post-details padding-40px-all bg-white md-padding-20px-all\">
                <div class=\"blog-hover-color\"></div>
                <a href=\"blog-post-layout-03.html\" class=\"alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom\">Styles come and go. Design is a language, not a style.</a>
                <div class=\"author\">
                  <span class=\"text-medium-gray text-uppercase text-extra-small d-inline-block\">by <a href=\"#\" class=\"text-medium-gray\">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                </div>
                <div class=\"separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb\"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
              </div>
            </div>
          </li>
          <!-- end post item -->
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end blog section -->
<!-- start footer -->
<footer class=\"footer-standard-dark bg-extra-dark-gray\">
  <div class=\"footer-widget-area padding-five-tb sm-padding-30px-tb\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center\">
          <!-- start logo -->
          <a href=\"index.html\" class=\"margin-20px-bottom d-inline-block\"><img class=\"footer-logo\" src=\"images/logo-white.png\" data-rjs=\"images/logo-white@2x.png\" alt=\"\"></a>
          <!-- end logo -->
          <p class=\"text-small width-95 sm-width-100\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <!-- start social media -->
          <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">
            <ul class=\"small-icon no-margin-bottom\">
              <li><a class=\"facebook text-white-2\" href=\"https://www.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a></li>
              <li><a class=\"twitter text-white-2\" href=\"https://twitter.com/\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
              <li><a class=\"google text-white-2\" href=\"https://plus.google.com\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a></li>
              <li><a class=\"instagram text-white-2\" href=\"https://instagram.com/\" target=\"_blank\"><i class=\"fab fa-instagram no-margin-right\" aria-hidden=\"true\"></i></a></li>
            </ul>
          </div>
          <!-- end social media -->
        </div>
        <!-- start additional links -->
        <div class=\"col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left\">
          <div class=\"widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600\">Additional Links</div>
          <ul class=\"list-unstyled\">
            <li><a class=\"text-small\" href=\"home-classic-corporate.html\">Home Classic Corporate</a></li>
            <li><a class=\"text-small\" href=\"home-creative-business.html\">Home Creative Business</a></li>
            <li><a class=\"text-small\" href=\"home-creative-designer.html\">Home Creative Designer</a></li>
            <li><a class=\"text-small\" href=\"home-portfolio-minimal.html\">Home Portfolio Minimal</a></li>
            <li><a class=\"text-small\" href=\"home-portfolio-parallax.html\">Home Portfolio  parallax</a></li>
            <li><a class=\"text-small\" href=\"home-portfolio-personal.html\">Home Portfolio Personal</a></li>
          </ul>
        </div>
        <!-- end additional links -->
        <!-- start contact information -->
        <div class=\"col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left\">
          <div class=\"widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600\">Contact Info</div>
          <p class=\"text-small d-block margin-15px-bottom width-80 sm-width-100\">POFO Design Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <div class=\"text-small\">Email: <a href=\"mailto:sales@domain.com\">sales@domain.com</a></div>
          <div class=\"text-small\">Phone: +44 (0) 123 456 7890</div>
          <a href=\"contact-us-modern.html\" class=\"text-small text-uppercase text-decoration-underline\">View Direction</a>
        </div>
        <!-- end contact information -->
        <!-- start instagram -->
        <div class=\"col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left text-center text-md-left\">
          <div class=\"widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600\">Instagram portfolio</div>
          <div class=\"instagram-follow-api\">
            <ul id=\"instaFeed-footer\"></ul>
          </div>
        </div>
        <!-- end instagram -->
      </div>
    </div>
  </div>
  <div class=\"bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb\">
    <div class=\"container\">
      <div class=\"row\">
        <!-- start copyright -->
        <div class=\"col-md-6 text-md-left text-small text-center\">&copy; 2019 POFO is Proudly Powered by <a href=\"http://www.themezaa.com\" target=\"_blank\" class=\"text-dark-gray\">ThemeZaa</a></div>
        <div class=\"col-md-6 text-md-right text-small text-center\">
          <a href=\"javascript:void(0);\" class=\"text-dark-gray\">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Privacy Policy</a>
        </div>
        <!-- end copyright -->
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- start scroll to top -->
<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
<!-- end scroll to top -->
<!-- javascript libraries -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<!--<script type=\"text/javascript\" src=\"js/modernizr.js\"></script>-->
<script type=\"text/javascript\" src=\"js/bootstrap.bundle.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"js/skrollr.min.js\"></script>
<script type=\"text/javascript\" src=\"js/smooth-scroll.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.appear.js\"></script>
<!-- menu navigation -->
<script type=\"text/javascript\" src=\"js/bootsnav.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.nav.js\"></script>
<!-- animation -->
<script type=\"text/javascript\" src=\"js/wow.min.js\"></script>
<!-- page scroll -->
<script type=\"text/javascript\" src=\"js/page-scroll.js\"></script>
<!-- swiper carousel -->
<script type=\"text/javascript\" src=\"js/swiper.min.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"js/jquery.count-to.js\"></script>
<!-- parallax -->
<script type=\"text/javascript\" src=\"js/jquery.stellar.js\"></script>
<!-- magnific popup -->
<script type=\"text/javascript\" src=\"js/jquery.magnific-popup.min.js\"></script>
<!-- portfolio with shorting tab -->
<script type=\"text/javascript\" src=\"js/isotope.pkgd.min.js\"></script>
<!-- images loaded -->
<script type=\"text/javascript\" src=\"js/imagesloaded.pkgd.min.js\"></script>
<!-- pull menu -->
<script type=\"text/javascript\" src=\"js/classie.js\"></script>
<script type=\"text/javascript\" src=\"js/hamburger-menu.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"js/counter.js\"></script>
<!-- fit video -->
<script type=\"text/javascript\" src=\"js/jquery.fitvids.js\"></script>

<!-- skill bars -->
<script type=\"text/javascript\" src=\"js/skill.bars.jquery.js\"></script>
<!-- justified gallery -->
<script type=\"text/javascript\" src=\"js/justified-gallery.min.js\"></script>
<!--pie chart-->
<script type=\"text/javascript\" src=\"js/jquery.easypiechart.min.js\"></script>
<!-- instagram -->
<script type=\"text/javascript\" src=\"js/instafeed.min.js\"></script>
<!-- retina -->
<script type=\"text/javascript\" src=\"js/retina.min.js\"></script>
<!-- revolution -->
<script type=\"text/javascript\" src=\"revolution/js/jquery.themepunch.tools.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/jquery.themepunch.revolution.min.js\"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!--<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.actions.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.kenburn.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.layeranimation.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.migration.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.navigation.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.parallax.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.slideanims.min.js\"></script>
<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.video.min.js\"></script>-->
<!-- setting -->
<script type=\"text/javascript\" src=\"js/main.js\"></script>
{#
<div id=\"page-wrapper\">
  <div id=\"page\">

    <h1>this is my theme pewobox</h1>
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
      <div class=\"section layout-container clearfix\">
        {{ page.secondary_menu }}
        {{ page.header }}
        {{ page.primary_menu }}
      </div>
    </header>
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          {{ page.featured_top }}
        </aside>
      </div>
    {% endif %}
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        {{ page.breadcrumb }}
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            {{ page.content }}
          </section>
        </main>
        {% if page.sidebar_first %}
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_first }}
            </aside>
          </div>
        {% endif %}
        {% if page.sidebar_second %}
          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          </div>
        {% endif %}
      </div>
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
      </div>
    {% endif %}
    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
          <div class=\"site-footer__top clearfix\">
            {{ page.footer_first }}
            {{ page.footer_second }}
            {{ page.footer_third }}
            {{ page.footer_fourth }}
          </div>
        {% endif %}
        {% if page.footer_fifth %}
          <div class=\"site-footer__bottom\">
            {{ page.footer_fifth }}
          </div>
        {% endif %}
      </div>
    </footer>
  </div>
</div>
#}
", "sites/all/themes/pewobox/templates/page.html.twig", "/var/www/drupalvm/drupal/web/pewobox-personal-website/www/sites/all/themes/pewobox/templates/page.html.twig");
    }
}
