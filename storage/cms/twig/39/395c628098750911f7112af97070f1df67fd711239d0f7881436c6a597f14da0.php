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

/* C:\work\xampp\htdocs\tourism/themes/tourism/layouts/group-tours.htm */
class __TwigTemplate_4dcc1cef9cccc9303cfc3a9c4addcab74d18e563b0c9ca6d564aeff6557de977 extends \Twig\Template
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
        $tags = array("partial" => 6, "styles" => 39, "for" => 92, "if" => 141, "page" => 185, "framework" => 205, "scripts" => 206);
        $filters = array("theme" => 7, "escape" => 29);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'styles', 'for', 'if', 'page', 'framework', 'scripts'],
                ['theme', 'escape'],
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
  ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "  <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/plugins/w3-total-cache/pub/js/lazyload.min.js");
        echo "\" rel=\"stylesheet\">

  ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
  ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style3"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
  <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/6d2d0.css");
        echo "\" rel=\"stylesheet\">
  <link rel='stylesheet' id='font-style-css'
    href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;subset=latin-ext&#038;ver=5.3.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='font-style-2-css'
    href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700&#038;ver=5.3.2' type='text/css' media='all' />
  <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/113f9.css");
        echo "\" rel=\"stylesheet\">
  ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style4"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
  ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script3"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script4"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
  <meta charset=\"utf-8\">
  <title>";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 29), "site_name", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 29), "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "meta_description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "meta_title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

  ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style6"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 40
        echo "  \t<style>
  \t  #map {
  \t    height: 100%;
  \t  }

  \t  /* Optional: Makes the sample page fill the window. */
  \t  html,
  \t  body {
  \t    height: 100%;
  \t    margin: 0;
  \t    padding: 0;
  \t  }
  \t</style>

  
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/modal_window"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "
  <!-- Header -->
  <header id=\"header\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">


            <phone><a href=\"tel:";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 77), "phone1", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 77), "phone1", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "</a></phone>



          </div>
        </div>

        <div class=\"col-sm-6 text-right social_top\">






          <div class=\"social\">
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 92), "social", [], "any", false, false, true, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 93
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "\"></i></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 117), "logo", [], "any", false, false, true, 117), "path", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
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
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 141)) {
            // line 142
            echo "

                ";
            // line 144
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 144)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 145
            echo "
                ";
        }
        // line 147
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

   

                    ";
        // line 185
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 186
        echo "                    
           



  <button id=\"toTop\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></button>
  <!-- Footer -->
  <footer id=\"footer\">
    ";
        // line 194
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 195
        echo "  </footer>

  <!-- Scripts -->
  <!-- <script src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script> -->
  ";
        // line 201
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script6"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 202
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style7"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 203
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script7"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 204
        echo "
  ";
        // line 205
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
        // line 206
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 207
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/layouts/group-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 207,  422 => 206,  411 => 205,  408 => 204,  403 => 203,  398 => 202,  394 => 201,  390 => 200,  386 => 199,  382 => 198,  377 => 195,  373 => 194,  363 => 186,  361 => 185,  321 => 147,  317 => 145,  312 => 144,  308 => 142,  306 => 141,  279 => 117,  255 => 95,  244 => 93,  240 => 92,  220 => 77,  207 => 66,  203 => 65,  176 => 40,  172 => 39,  167 => 38,  163 => 37,  158 => 35,  151 => 31,  147 => 30,  141 => 29,  137 => 27,  132 => 26,  127 => 25,  123 => 24,  120 => 23,  116 => 22,  112 => 21,  103 => 15,  100 => 14,  96 => 13,  93 => 12,  88 => 11,  83 => 10,  79 => 9,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<head>
  {% partial 'site/head_styles_index_page/style1' %}
  <link href=\"{{ 'assets/javascript/plugins/w3-total-cache/pub/js/lazyload.min.js'|theme }}\" rel=\"stylesheet\">

  {% partial 'site/head_styles_index_page/style2' %}
  {% partial 'site/head_scripts_index_page/script1' %}
  {% partial 'site/head_scripts_index_page/script2' %}

  {% partial 'site/head_styles_index_page/style3' %}

  <link href=\"{{ 'assets/css/6d2d0.css'|theme }}\" rel=\"stylesheet\">
  <link rel='stylesheet' id='font-style-css'
    href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;subset=latin-ext&#038;ver=5.3.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='font-style-2-css'
    href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700&#038;ver=5.3.2' type='text/css' media='all' />
  <link href=\"{{ 'assets/css/113f9.css'|theme }}\" rel=\"stylesheet\">
  {% partial 'site/head_styles_index_page/style4' %}

  {% partial 'site/head_scripts_index_page/script3' %}
  {% partial 'site/head_scripts_index_page/script4' %}
  {% partial 'site/head_styles_index_page/style5' %}

  <meta charset=\"utf-8\">
  <title>{{this.theme.site_name}} - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

  {% partial 'site/head_styles_index_page/style6' %}
  {% partial 'site/head_scripts_index_page/script5' %}
  {% styles %}
  \t<style>
  \t  #map {
  \t    height: 100%;
  \t  }

  \t  /* Optional: Makes the sample page fill the window. */
  \t  html,
  \t  body {
  \t    height: 100%;
  \t    margin: 0;
  \t    padding: 0;
  \t  }
  \t</style>

  
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

   

                    {% page %}
                    
           



  <button id=\"toTop\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></button>
  <!-- Footer -->
  <footer id=\"footer\">
    {% partial 'site/footer' %}
  </footer>

  <!-- Scripts -->
  <!-- <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
    <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script> -->
  {% partial 'site/head_scripts_index_page/script6' %}
  {% partial 'site/head_styles_index_page/style7' %}
  {% partial 'site/head_scripts_index_page/script7' %}

  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/layouts/group-tours.htm", "");
    }
}
