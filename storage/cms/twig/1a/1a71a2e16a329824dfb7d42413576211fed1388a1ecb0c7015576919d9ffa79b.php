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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/head_scripts_index_page/script3.htm */
class __TwigTemplate_2adf996699e51540fe507c4327fde8725e5e61b4799f0bd41383ec765e5530e8 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/c6d25.js");
        echo "\"></script>
  <script type='text/javascript'>
    //<![CDATA[
      var _EPYT_ = {
        \"ajaxurl\": \"https:\\/\\/kyrgyzstan-tourism.com\\/wp-admin\\/admin-ajax.php\",
        \"security\": \"dfd2d24d0e\",
        \"gallery_scrolloffset\": \"20\",
        \"eppathtoscripts\": \"https:\\/\\/kyrgyzstan-tourism.com\\/wp-content\\/plugins\\/youtube-embed-plus\\/scripts\\/\",
        \"eppath\": \"https:\\/\\/kyrgyzstan-tourism.com\\/wp-content\\/plugins\\/youtube-embed-plus\\/\",
        \"epresponsiveselector\": \"[\\\"iframe.__youtube_prefs__\\\"]\",
        \"epdovol\": \"1\",
        \"version\": \"13.4.1.2\",
        \"evselector\": \"iframe.__youtube_prefs__[src], iframe[src*=\\\"youtube.com\\/embed\\/\\\"], iframe[src*=\\\"youtube-nocookie.com\\/embed\\/\\\"]\",
        \"ajax_compat\": \"\",
        \"ytapi_load\": \"light\",
        \"pause_others\": \"\",
        \"stopMobileBuffer\": \"1\",
        \"vi_active\": \"\",
        \"vi_js_posttypes\": []
      };
      //]]>
      </script>
  <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/8fc7a.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_scripts_index_page/script3.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ 'assets/javascript/c6d25.js'|theme }}\"></script>
  <script type='text/javascript'>
    //<![CDATA[
      var _EPYT_ = {
        \"ajaxurl\": \"https:\\/\\/kyrgyzstan-tourism.com\\/wp-admin\\/admin-ajax.php\",
        \"security\": \"dfd2d24d0e\",
        \"gallery_scrolloffset\": \"20\",
        \"eppathtoscripts\": \"https:\\/\\/kyrgyzstan-tourism.com\\/wp-content\\/plugins\\/youtube-embed-plus\\/scripts\\/\",
        \"eppath\": \"https:\\/\\/kyrgyzstan-tourism.com\\/wp-content\\/plugins\\/youtube-embed-plus\\/\",
        \"epresponsiveselector\": \"[\\\"iframe.__youtube_prefs__\\\"]\",
        \"epdovol\": \"1\",
        \"version\": \"13.4.1.2\",
        \"evselector\": \"iframe.__youtube_prefs__[src], iframe[src*=\\\"youtube.com\\/embed\\/\\\"], iframe[src*=\\\"youtube-nocookie.com\\/embed\\/\\\"]\",
        \"ajax_compat\": \"\",
        \"ytapi_load\": \"light\",
        \"pause_others\": \"\",
        \"stopMobileBuffer\": \"1\",
        \"vi_active\": \"\",
        \"vi_js_posttypes\": []
      };
      //]]>
      </script>
  <script src=\"{{ 'assets/javascript/8fc7a.js'|theme }}\"></script>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_scripts_index_page/script3.htm", "");
    }
}
