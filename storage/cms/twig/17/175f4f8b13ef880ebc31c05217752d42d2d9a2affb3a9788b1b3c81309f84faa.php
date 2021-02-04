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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/layouts/group-tours.htm */
class __TwigTemplate_628529c93a5c938c2ee424260a704b3d0764297b2c445c4bbb692dfec5f2ec91 extends \Twig\Template
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
        $tags = array("styles" => 24, "partial" => 34, "for" => 61, "if" => 110, "page" => 154, "framework" => 170, "scripts" => 171);
        $filters = array("escape" => 6, "theme" => 12, "resize" => 86);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'for', 'if', 'page', 'framework', 'scripts'],
                ['escape', 'theme', 'resize'],
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
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "site_name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/6d2d0.css");
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/113f9.css");
        echo "\" rel=\"stylesheet\">
   
  <link rel='stylesheet' id='font-style-css'
    href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;subset=latin-ext&#038;ver=5.3.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='font-style-2-css'
    href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700&#038;ver=5.3.2' type='text/css' media='all' />
    <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/c6d25.js");
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\" />
  ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "</head>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/modal_window"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
  <!-- Header -->
  <header id=\"header\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">


            <phone><a href=\"tel:";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 46), "phone1", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 46), "phone1", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</a></phone>



          </div>
        </div>

        <div class=\"col-sm-6 text-right social_top\">






          <div class=\"social\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 61), "social", [], "any", false, false, true, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "\"></i></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        // line 86
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 86), "logo", [], "any", false, false, true, 86), "path", [], "any", false, false, true, 86), 86, $this->source), 200, false, ["mode" => "crop", "quality" => "80", "extension" => "png"]]);
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
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 110)) {
            // line 111
            echo "

                ";
            // line 113
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 113)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 114
            echo "
                ";
        }
        // line 116
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
        // line 154
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 155
        echo "                    
           



  <button id=\"toTop\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></button>
  <!-- Footer -->
  <footer id=\"footer\">
    ";
        // line 163
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 164
        echo "  </footer>

  <!-- Scripts -->

 <script src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/e0855.js");
        echo "\"></script>
<script src=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js\"></script>
  ";
        // line 170
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
        // line 171
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 172
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/layouts/group-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 172,  320 => 171,  309 => 170,  304 => 168,  298 => 164,  294 => 163,  284 => 155,  282 => 154,  242 => 116,  238 => 114,  233 => 113,  229 => 111,  227 => 110,  200 => 86,  176 => 64,  165 => 62,  161 => 61,  141 => 46,  128 => 35,  124 => 34,  113 => 25,  110 => 24,  105 => 22,  95 => 15,  91 => 14,  86 => 12,  79 => 8,  75 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\" />
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
            <img src=\"{{this.theme.logo.path | resize(200, false, { mode: 'crop', quality: '80', extension: 'png' })}}\" alt=\"\">
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

 <script src=\"{{ 'assets/javascript/e0855.js'|theme }}\"></script>
<script src=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js\"></script>
  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/layouts/group-tours.htm", "");
    }
}
