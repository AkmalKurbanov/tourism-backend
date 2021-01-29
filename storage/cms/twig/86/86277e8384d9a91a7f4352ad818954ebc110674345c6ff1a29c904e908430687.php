<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/layouts/static-page.htm */
class __TwigTemplate_dd3f8626ca2c7e02443435c376a9d67517cd369c6a784d3d7f7b78c86116e729 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 25, "partial" => 36, "for" => 63, "if" => 112, "page" => 191, "framework" => 222, "scripts" => 223);
        $filters = array("escape" => 7, "theme" => 13, "page" => 194);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'for', 'if', 'page', 'framework', 'scripts'],
                ['escape', 'theme', 'page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "site_name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

<link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/6d2d0.css");
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/113f9.css");
        echo "\" rel=\"stylesheet\">
   
  <link rel='stylesheet' id='font-style-css'
    href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;subset=latin-ext&#038;ver=5.3.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='font-style-2-css'
    href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700&#038;ver=5.3.2' type='text/css' media='all' />
    <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/c6d25.js");
        echo "\"></script>

  ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 26
        echo "</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/modal_window"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
  <!-- Header -->
  <header id=\"header\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">


            <phone><a href=\"tel:";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 48), "phone1", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 48), "phone1", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</a></phone>



          </div>
        </div>

        <div class=\"col-sm-6 text-right social_top\">






          <div class=\"social\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 63), "social", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\"></i></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "

          </div>

          <button class=\"blank search_button\" id=\"show_search\" data-toggle=\"modal\" data-target=\"#modal_search\"><i
              class=\"fa fa-search\"></i></button>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-12\">
          <div class=\"line_helper\"></div>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-3\">
          <a href=\"/\" class=\"logo\">
            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 88), "logo", [], "any", false, false, true, 88), "path", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "\" alt=\"\">
          </a>
        </div>

        <div class=\"col-sm-9\">
          <nav class=\"navbar\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav navbar-right\">


                ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 112)) {
            // line 113
            echo "

                ";
            // line 115
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 115)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 116
            echo "
                ";
        }
        // line 118
        echo "


              </ul>
              </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>

      </div>

    </div>
  </header>
  <script>
    \$(function () {
      \$('.nav.navbar-nav.navbar-right li:has(ul)').addClass('dropdown');
      \$('.nav.navbar-nav.navbar-right .dropdown a').append('<span class=\"caret\"></span>').addClass('event-off');
      \$('.nav.navbar-nav.navbar-right li ul').addClass('dropdown-menu');
      \$('.nav.navbar-nav.navbar-right li .dropdown-menu a').removeClass('event-off');
      \$('.nav.navbar-nav.navbar-right .dropdown .event-off').on('click', function (e) {
        e.preventDefault();
      });
    });
  </script>
  <style>
    .nav.navbar-nav.navbar-right .dropdown:hover .dropdown-menu {
      display: block;
    }

    .nav.navbar-nav.navbar-right .dropdown ul li a .caret {
      display: none;
    }
  </style>
  <!-- Content -->


  <div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url(&quot;https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg&quot;);\"
    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\" data-was-processed=\"true\">


    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span
                    class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 165
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 165), "title", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        echo "</span></span></span></p>
            <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"desc\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">
            <h1 id=\"single_tour_title\">";
        // line 176
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 176), "title", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
        echo "</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-9\">
        <div id=\"content\">


          ";
        // line 191
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 192
        echo "
          <div class=\"line_helper\" style=\"background: #e4e4e4\"></div>
          <p><a class=\"cstm_button\" href=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours");
        echo "\">View all tours</a></p>

        </div>
      </div>

      <div class=\"col-sm-3\">
        <div class=\"sidebar_wrapper\">

          <div id=\"sidebar\">

            ";
        // line 204
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 205
        echo "
          </div>
        </div>
      </div>

    </div>
  </div>

  <button id=\"toTop\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></button>
  <!-- Footer -->
  <footer id=\"footer\">
    ";
        // line 216
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 217
        echo "  </footer>

 <!-- Scripts -->

 <script src=\"";
        // line 221
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/e0855.js");
        echo "\"></script>
  ";
        // line 222
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 223
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 224
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/layouts/static-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 224,  386 => 223,  375 => 222,  371 => 221,  365 => 217,  361 => 216,  348 => 205,  344 => 204,  331 => 194,  327 => 192,  325 => 191,  307 => 176,  293 => 165,  244 => 118,  240 => 116,  235 => 115,  231 => 113,  229 => 112,  202 => 88,  178 => 66,  167 => 64,  163 => 63,  143 => 48,  130 => 37,  126 => 36,  114 => 26,  111 => 25,  106 => 23,  96 => 16,  92 => 15,  87 => 13,  80 => 9,  76 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>{{this.theme.site_name}} - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

<link href=\"{{ 'assets/css/6d2d0.css'|theme }}\" rel=\"stylesheet\">
 <link href=\"{{ 'assets/css/113f9.css'|theme }}\" rel=\"stylesheet\">
   
  <link rel='stylesheet' id='font-style-css'
    href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;subset=latin-ext&#038;ver=5.3.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='font-style-2-css'
    href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700&#038;ver=5.3.2' type='text/css' media='all' />
    <script src=\"{{ 'assets/javascript/c6d25.js'|theme }}\"></script>

  {% styles %}
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  {% partial 'site/modal_window' %}

  <!-- Header -->
  <header id=\"header\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">


            <phone><a href=\"tel:{{this.theme.phone1}}\">{{this.theme.phone1}}</a></phone>



          </div>
        </div>

        <div class=\"col-sm-6 text-right social_top\">






          <div class=\"social\">
            {% for item in this.theme.social %}
            <a href=\"{{item.url}}\" target=\"_blank\"><i class=\"{{item.awesome_icon}}\"></i></a>
            {%endfor%}


          </div>

          <button class=\"blank search_button\" id=\"show_search\" data-toggle=\"modal\" data-target=\"#modal_search\"><i
              class=\"fa fa-search\"></i></button>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-12\">
          <div class=\"line_helper\"></div>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-3\">
          <a href=\"/\" class=\"logo\">
            <img src=\"{{this.theme.logo.path}}\" alt=\"\">
          </a>
        </div>

        <div class=\"col-sm-9\">
          <nav class=\"navbar\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav navbar-right\">


                {% if staticMenu.menuItems %}


                {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}

                {% endif %}



              </ul>
              </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>

      </div>

    </div>
  </header>
  <script>
    \$(function () {
      \$('.nav.navbar-nav.navbar-right li:has(ul)').addClass('dropdown');
      \$('.nav.navbar-nav.navbar-right .dropdown a').append('<span class=\"caret\"></span>').addClass('event-off');
      \$('.nav.navbar-nav.navbar-right li ul').addClass('dropdown-menu');
      \$('.nav.navbar-nav.navbar-right li .dropdown-menu a').removeClass('event-off');
      \$('.nav.navbar-nav.navbar-right .dropdown .event-off').on('click', function (e) {
        e.preventDefault();
      });
    });
  </script>
  <style>
    .nav.navbar-nav.navbar-right .dropdown:hover .dropdown-menu {
      display: block;
    }

    .nav.navbar-nav.navbar-right .dropdown ul li a .caret {
      display: none;
    }
  </style>
  <!-- Content -->


  <div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url(&quot;https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg&quot;);\"
    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\" data-was-processed=\"true\">


    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span
                    class=\"breadcrumb_last\" aria-current=\"page\">{{this.page.title}}</span></span></span></p>
            <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"desc\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">
            <h1 id=\"single_tour_title\">{{this.page.title}}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-9\">
        <div id=\"content\">


          {% page %}

          <div class=\"line_helper\" style=\"background: #e4e4e4\"></div>
          <p><a class=\"cstm_button\" href=\"{{ 'tours' | page }}\">View all tours</a></p>

        </div>
      </div>

      <div class=\"col-sm-3\">
        <div class=\"sidebar_wrapper\">

          <div id=\"sidebar\">

            {% partial 'site/sidebar_without_date' %}

          </div>
        </div>
      </div>

    </div>
  </div>

  <button id=\"toTop\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></button>
  <!-- Footer -->
  <footer id=\"footer\">
    {% partial 'site/footer' %}
  </footer>

 <!-- Scripts -->

 <script src=\"{{ 'assets/javascript/e0855.js'|theme }}\"></script>
  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/layouts/static-page.htm", "");
    }
}
