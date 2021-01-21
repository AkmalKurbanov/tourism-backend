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

/* C:\work\xampp\htdocs\tourism/themes/tourism/layouts/static-layout.htm */
class __TwigTemplate_d0e3e91f087574b6925a1b19c2b890140ea9d30579d0ec20b3145382a05c015c extends \Twig\Template
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
        $tags = array("partial" => 5, "styles" => 38, "for" => 76, "if" => 125, "page" => 167, "framework" => 183, "scripts" => 184);
        $filters = array("theme" => 6, "escape" => 28);
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
        echo "<!DOCTYPE html>
<html>

<head>
  ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "  <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/plugins/w3-total-cache/pub/js/lazyload.min.js");
        echo "\" rel=\"stylesheet\">

  ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "
  ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style3"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "
  <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/6d2d0.css");
        echo "\" rel=\"stylesheet\">
  <link rel='stylesheet' id='font-style-css'
    href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;subset=latin-ext&#038;ver=5.3.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='font-style-2-css'
    href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700&#038;ver=5.3.2' type='text/css' media='all' />
  <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/113f9.css");
        echo "\" rel=\"stylesheet\">
  ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style4"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "   
  ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script3"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script4"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
  <meta charset=\"utf-8\">
  <title>";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 28), "site_name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 28), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 29), "meta_description", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "meta_title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

  ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style6"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 39
        echo "</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/modal_window"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "
  <!-- Header -->
  <header id=\"header\">
    <div class=\"container\">

  <div class=\"row\">

    <div class=\"col-sm-6\">
      <div class=\"phone\">


        <phone><a href=\"tel:";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 61), "phone1", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 61), "phone1", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "</a></phone>



      </div>
    </div>

    <div class=\"col-sm-6 text-right social_top\">






      <div class=\"social\">
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 76), "social", [], "any", false, false, true, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\"></i></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
      <a href=\"https://kyrgyzstan-tourism.com/\" class=\"logo\">
        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 101), "logo", [], "any", false, false, true, 101), "path", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
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
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 125)) {
            // line 126
            echo "   
    
        ";
            // line 128
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 128)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 129
            echo "   
";
        }
        // line 131
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
\$(function(){
    \$('.nav.navbar-nav.navbar-right li:has(ul)').addClass('dropdown');
    \$('.nav.navbar-nav.navbar-right .dropdown a').append('<span class=\"caret\"></span>').addClass('event-off');
    \$('.nav.navbar-nav.navbar-right li ul').addClass('dropdown-menu');
    \$('.nav.navbar-nav.navbar-right li .dropdown-menu a').removeClass('event-off');
    \$('.nav.navbar-nav.navbar-right .dropdown .event-off').on('click', function(e) {
        e.preventDefault();
        });
}); 

</script>
<style>
.nav.navbar-nav.navbar-right .dropdown:hover .dropdown-menu{
display: block;
}
.nav.navbar-nav.navbar-right .dropdown ul li a .caret{
display: none;
}
</style>
  <!-- Content -->
    
    ";
        // line 167
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 168
        echo "

  <!-- Footer -->
  <footer id=\"footer\">
    ";
        // line 172
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 173
        echo "  </footer>

  <!-- Scripts -->
  <!-- <script src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script> -->
  ";
        // line 179
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script6"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 180
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style7"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 181
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script7"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 182
        echo "
  ";
        // line 183
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
        // line 184
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 185
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 185,  400 => 184,  389 => 183,  386 => 182,  381 => 181,  376 => 180,  372 => 179,  368 => 178,  364 => 177,  360 => 176,  355 => 173,  351 => 172,  345 => 168,  343 => 167,  305 => 131,  301 => 129,  296 => 128,  292 => 126,  290 => 125,  263 => 101,  239 => 79,  228 => 77,  224 => 76,  204 => 61,  191 => 50,  187 => 49,  175 => 39,  171 => 38,  166 => 37,  162 => 36,  157 => 34,  150 => 30,  146 => 29,  140 => 28,  136 => 26,  131 => 25,  126 => 24,  122 => 23,  119 => 22,  115 => 21,  111 => 20,  102 => 14,  99 => 13,  95 => 12,  92 => 11,  87 => 10,  82 => 9,  78 => 8,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
      <a href=\"https://kyrgyzstan-tourism.com/\" class=\"logo\">
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
\$(function(){
    \$('.nav.navbar-nav.navbar-right li:has(ul)').addClass('dropdown');
    \$('.nav.navbar-nav.navbar-right .dropdown a').append('<span class=\"caret\"></span>').addClass('event-off');
    \$('.nav.navbar-nav.navbar-right li ul').addClass('dropdown-menu');
    \$('.nav.navbar-nav.navbar-right li .dropdown-menu a').removeClass('event-off');
    \$('.nav.navbar-nav.navbar-right .dropdown .event-off').on('click', function(e) {
        e.preventDefault();
        });
}); 

</script>
<style>
.nav.navbar-nav.navbar-right .dropdown:hover .dropdown-menu{
display: block;
}
.nav.navbar-nav.navbar-right .dropdown ul li a .caret{
display: none;
}
</style>
  <!-- Content -->
    
    {% page %}


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

</html>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/layouts/static-layout.htm", "");
    }
}
