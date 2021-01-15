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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/head_scripts_index_page/script7.htm */
class __TwigTemplate_5f6d40e759cfbe2fbda58b466e449273795f5fe0419efc5b3f60d1db62ab1f2e extends \Twig\Template
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
        $filters = array("theme" => 21);
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
        echo "<script>
    window.w3tc_lazyload = 1, window.lazyLoadOptions = {
      elements_selector: \".lazy\",
      callback_loaded: function (t) {
        var e;
        try {
          e = new CustomEvent(\"w3tc_lazyload_loaded\", {
            detail: {
              e: t
            }
          })
        } catch (a) {
          (e = document.createEvent(\"CustomEvent\")).initCustomEvent(\"w3tc_lazyload_loaded\", !1, !1, {
            e: t
          })
        }
        window.dispatchEvent(e)
      }
    }
  </script>
  <script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/1615d.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_scripts_index_page/script7.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    window.w3tc_lazyload = 1, window.lazyLoadOptions = {
      elements_selector: \".lazy\",
      callback_loaded: function (t) {
        var e;
        try {
          e = new CustomEvent(\"w3tc_lazyload_loaded\", {
            detail: {
              e: t
            }
          })
        } catch (a) {
          (e = document.createEvent(\"CustomEvent\")).initCustomEvent(\"w3tc_lazyload_loaded\", !1, !1, {
            e: t
          })
        }
        window.dispatchEvent(e)
      }
    }
  </script>
  <script src=\"{{ 'assets/javascript/1615d.js'|theme }}\"></script>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_scripts_index_page/script7.htm", "");
    }
}
