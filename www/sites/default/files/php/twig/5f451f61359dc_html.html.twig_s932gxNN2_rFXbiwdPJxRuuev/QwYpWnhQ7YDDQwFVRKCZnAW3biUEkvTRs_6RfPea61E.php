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

/* sites/all/themes/pewobox/templates/html.html.twig */
class __TwigTemplate_9b575337efa31347a32533dcd07eb42dded3ff953bd2f0b824d5d01f0a7ad8bf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 77];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 26
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
  <!-- title -->
  <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1\"/>
  <meta name=\"author\" content=\"ThemeZaa\">
  <!-- description -->
  <meta name=\"description\"
        content=\"POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.\">
  <!-- keywords -->
  <meta name=\"keywords\"
        content=\"creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq\">
  <!-- favicon -->
  <link rel=\"shortcut icon\" href=\"images/favicon.png\">
  <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon-57x57.png\">
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
  <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">
  <!-- animation -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/animate.css\"/>
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/bootstrap.min.css\"/>
  <!-- et line icon -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/et-line-icons.css\"/>
  <!-- font-awesome icon -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/font-awesome.min.css\"/>
  <!-- themify icon -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/themify-icons.css\">
  <!-- swiper carousel -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/swiper.min.css\">
  <!-- justified gallery -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/justified-gallery.min.css\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/magnific-popup.css\"/>
  <!-- revolution slider -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"sites/all/themes/pewobox/revolution/css/settings.css\" media=\"screen\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"sites/all/themes/pewobox/revolution/css/layers.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"sites/all/themes/pewobox/revolution/css/navigation.css\">
  <!-- bootsnav -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/bootsnav.css\">
  <!-- style -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/style.css\"/>
  <!-- responsive css -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/responsive.css\"/>
  <!--[if IE]>
  <script src=\"sites/all/themes/pewobox/js/html5shiv.js\"></script>
  <![endif]-->
</head>
<body>
";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
<!-- start scroll to top -->
<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
<!-- end scroll to top -->
<!-- javascript libraries -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.js\"></script>
<!--<script type=\"text/javascript\" src=\"js/modernizr.js\"></script>-->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/bootstrap.bundle.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/skrollr.min.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/smooth-scroll.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.appear.js\"></script>
<!-- menu navigation -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/bootsnav.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.nav.js\"></script>
<!-- animation -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/wow.min.js\"></script>
<!-- page scroll -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/page-scroll.js\"></script>
<!-- swiper carousel -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/swiper.min.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.count-to.js\"></script>
<!-- parallax -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.stellar.js\"></script>
<!-- magnific popup -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.magnific-popup.min.js\"></script>
<!-- portfolio with shorting tab -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/isotope.pkgd.min.js\"></script>
<!-- images loaded -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/imagesloaded.pkgd.min.js\"></script>
<!-- pull menu -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/classie.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/hamburger-menu.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/counter.js\"></script>
<!-- fit video -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.fitvids.js\"></script>

<!-- skill bars -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/skill.bars.jquery.js\"></script>
<!-- justified gallery -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/justified-gallery.min.js\"></script>
<!--pie chart-->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.easypiechart.min.js\"></script>
<!-- instagram -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/instafeed.min.js\"></script>
<!-- retina -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/retina.min.js\"></script>
<!-- revolution -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/revolution/js/jquery.themepunch.tools.min.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/revolution/js/jquery.themepunch.revolution.min.js\"></script>
<!-- setting -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/main.js\"></script>
<js-bottom-placeholder token=\"";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/pewobox/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 131,  108 => 77,  55 => 26,);
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
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
  <!-- title -->
  <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1\"/>
  <meta name=\"author\" content=\"ThemeZaa\">
  <!-- description -->
  <meta name=\"description\"
        content=\"POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.\">
  <!-- keywords -->
  <meta name=\"keywords\"
        content=\"creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq\">
  <!-- favicon -->
  <link rel=\"shortcut icon\" href=\"images/favicon.png\">
  <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon-57x57.png\">
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
  <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">
  <!-- animation -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/animate.css\"/>
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/bootstrap.min.css\"/>
  <!-- et line icon -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/et-line-icons.css\"/>
  <!-- font-awesome icon -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/font-awesome.min.css\"/>
  <!-- themify icon -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/themify-icons.css\">
  <!-- swiper carousel -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/swiper.min.css\">
  <!-- justified gallery -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/justified-gallery.min.css\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/magnific-popup.css\"/>
  <!-- revolution slider -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"sites/all/themes/pewobox/revolution/css/settings.css\" media=\"screen\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"sites/all/themes/pewobox/revolution/css/layers.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"sites/all/themes/pewobox/revolution/css/navigation.css\">
  <!-- bootsnav -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/bootsnav.css\">
  <!-- style -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/style.css\"/>
  <!-- responsive css -->
  <link rel=\"stylesheet\" href=\"sites/all/themes/pewobox/css/responsive.css\"/>
  <!--[if IE]>
  <script src=\"sites/all/themes/pewobox/js/html5shiv.js\"></script>
  <![endif]-->
</head>
<body>
{{ page }}
<!-- start scroll to top -->
<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
<!-- end scroll to top -->
<!-- javascript libraries -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.js\"></script>
<!--<script type=\"text/javascript\" src=\"js/modernizr.js\"></script>-->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/bootstrap.bundle.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/skrollr.min.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/smooth-scroll.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.appear.js\"></script>
<!-- menu navigation -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/bootsnav.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.nav.js\"></script>
<!-- animation -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/wow.min.js\"></script>
<!-- page scroll -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/page-scroll.js\"></script>
<!-- swiper carousel -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/swiper.min.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.count-to.js\"></script>
<!-- parallax -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.stellar.js\"></script>
<!-- magnific popup -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.magnific-popup.min.js\"></script>
<!-- portfolio with shorting tab -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/isotope.pkgd.min.js\"></script>
<!-- images loaded -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/imagesloaded.pkgd.min.js\"></script>
<!-- pull menu -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/classie.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/hamburger-menu.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/counter.js\"></script>
<!-- fit video -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.fitvids.js\"></script>

<!-- skill bars -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/skill.bars.jquery.js\"></script>
<!-- justified gallery -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/justified-gallery.min.js\"></script>
<!--pie chart-->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/jquery.easypiechart.min.js\"></script>
<!-- instagram -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/instafeed.min.js\"></script>
<!-- retina -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/retina.min.js\"></script>
<!-- revolution -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/revolution/js/jquery.themepunch.tools.min.js\"></script>
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/revolution/js/jquery.themepunch.revolution.min.js\"></script>
<!-- setting -->
<script type=\"text/javascript\" src=\"sites/all/themes/pewobox/js/main.js\"></script>
<js-bottom-placeholder token=\"{{ placeholder_token }}\">
</body>
</html>
", "sites/all/themes/pewobox/templates/html.html.twig", "/var/www/drupalvm/drupal/web/pewobox-personal-website/www/sites/all/themes/pewobox/templates/html.html.twig");
    }
}
