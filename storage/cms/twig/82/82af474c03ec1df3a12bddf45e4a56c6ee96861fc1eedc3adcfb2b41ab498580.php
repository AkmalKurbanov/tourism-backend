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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/head_styles_index_page/style5.htm */
class __TwigTemplate_14051b77fc28c97cc3055acd4f5fa5ab4566493e6ee837cf09c147afdb774b62 extends \Twig\Template
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
        echo "<style>
    .no-js img.lazyload {
      display: none
    }

    figure.wp-block-image img.lazyloading {
      min-width: 150px
    }

    .lazyload,
    .lazyloading {
      opacity: 0
    }

    .lazyloaded {
      opacity: 1;
      transition: opacity 400ms;
      transition-delay: 0ms
    }
  </style>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_styles_index_page/style5.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .no-js img.lazyload {
      display: none
    }

    figure.wp-block-image img.lazyloading {
      min-width: 150px
    }

    .lazyload,
    .lazyloading {
      opacity: 0
    }

    .lazyloaded {
      opacity: 1;
      transition: opacity 400ms;
      transition-delay: 0ms
    }
  </style>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_styles_index_page/style5.htm", "");
    }
}
