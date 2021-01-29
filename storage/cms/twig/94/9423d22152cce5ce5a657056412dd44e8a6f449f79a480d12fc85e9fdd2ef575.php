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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/partials/site/modal_window.htm */
class __TwigTemplate_2e7d0756c13c09bc8bb7b58135cabc1fe58aa5c007eda035176b80f7062647bd extends \Twig\Template
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
        $filters = array("page" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<div class=\"modal fade in\" id=\"modal_search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div id=\"search_form\">

<form action=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
     <button type=\"submit\" id=\"search_button\"><i class=\"fa fa-search\"></i></button>
</form>
        

        
         </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/modal_window.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade in\" id=\"modal_search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div id=\"search_form\">

<form action=\"{{ 'search' | page }}\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
     <button type=\"submit\" id=\"search_button\"><i class=\"fa fa-search\"></i></button>
</form>
        

        
         </div>
      </div>
    </div>
  </div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/modal_window.htm", "");
    }
}
