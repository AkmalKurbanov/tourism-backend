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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/head_styles_index_page/style6.htm */
class __TwigTemplate_9432cef1882235822b39af3d62ece2e93cdb78f0ecada8921253338251a4108b extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<style type=\"text/css\" id=\"wp-custom-css\">
    .hm-about {
      background: #fff;
      padding: 50px;
      border-bottom: 4px solid #005271;
      margin-bottom: 30px
    }

    .main-h {
      font-size: 50px !important
    }

    .sub-h {
      font-weight: bold;
      font-size: 22px;
      margin-top: -6px;
      color: #fff;
      text-shadow: 0 2px 2px rgba(0, 0, 0, .3)
    }
  </style>
  <style>
    :root {
      --qlwapp-scheme-brand: #21536f
    }

    #qlwapp .qlwapp-toggle,
    #qlwapp .qlwapp-box .qlwapp-header,
    #qlwapp .qlwapp-box .qlwapp-user,
    #qlwapp .qlwapp-box .qlwapp-user:before {
      background-color: var(--qlwapp-scheme-brand)
    }
  </style>
  <style></style>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_styles_index_page/style6.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\" id=\"wp-custom-css\">
    .hm-about {
      background: #fff;
      padding: 50px;
      border-bottom: 4px solid #005271;
      margin-bottom: 30px
    }

    .main-h {
      font-size: 50px !important
    }

    .sub-h {
      font-weight: bold;
      font-size: 22px;
      margin-top: -6px;
      color: #fff;
      text-shadow: 0 2px 2px rgba(0, 0, 0, .3)
    }
  </style>
  <style>
    :root {
      --qlwapp-scheme-brand: #21536f
    }

    #qlwapp .qlwapp-toggle,
    #qlwapp .qlwapp-box .qlwapp-header,
    #qlwapp .qlwapp-box .qlwapp-user,
    #qlwapp .qlwapp-box .qlwapp-user:before {
      background-color: var(--qlwapp-scheme-brand)
    }
  </style>
  <style></style>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_styles_index_page/style6.htm", "");
    }
}
