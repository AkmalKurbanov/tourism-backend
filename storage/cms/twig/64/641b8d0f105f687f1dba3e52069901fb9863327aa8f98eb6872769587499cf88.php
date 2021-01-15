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

/* C:\work\xampp\htdocs\tourism/themes/tourism/layouts/default.htm */
class __TwigTemplate_9fd84c980f7e6ee92e458db0a01f575c6dc27bdf91412947e3a34a001f846cf5 extends \Twig\Template
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
        $tags = array("partial" => 5, "styles" => 38, "page" => 58, "framework" => 74, "scripts" => 75);
        $filters = array("theme" => 6, "escape" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'styles', 'page', 'framework', 'scripts'],
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
  <title>October CMS - ";
        // line 28
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
    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "  </header>

  <!-- Content -->
  <section id=\"layout-content\">
    ";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 59
        echo "  </section>

  <!-- Footer -->
  <footer id=\"footer\">
    ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "  </footer>

  <!-- Scripts -->
  <!-- <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script> -->
  ";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script6"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_styles_index_page/style7"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head_scripts_index_page/script7"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "
  ";
        // line 74
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
        // line 75
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 76
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 76,  261 => 75,  250 => 74,  247 => 73,  242 => 72,  237 => 71,  233 => 70,  229 => 69,  225 => 68,  221 => 67,  216 => 64,  212 => 63,  206 => 59,  204 => 58,  198 => 54,  194 => 53,  189 => 50,  185 => 49,  173 => 39,  169 => 38,  164 => 37,  160 => 36,  155 => 34,  148 => 30,  144 => 29,  140 => 28,  136 => 26,  131 => 25,  126 => 24,  122 => 23,  119 => 22,  115 => 21,  111 => 20,  102 => 14,  99 => 13,  95 => 12,  92 => 11,  87 => 10,  82 => 9,  78 => 8,  72 => 6,  68 => 5,  62 => 1,);
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
  <title>October CMS - {{ this.page.title }}</title>
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
    {% partial 'site/header' %}
  </header>

  <!-- Content -->
  <section id=\"layout-content\">
    {% page %}
  </section>

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

</html>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/layouts/default.htm", "");
    }
}
