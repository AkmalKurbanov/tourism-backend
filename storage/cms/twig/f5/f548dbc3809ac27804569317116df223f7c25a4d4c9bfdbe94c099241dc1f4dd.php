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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/modal_window.htm */
class __TwigTemplate_ffc41738dd622a71c848bb5d256f231cc3a4885048addde730d84351cbc0e7fe extends \Twig\Template
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
        echo "<div class=\"modal fade\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal fade in\" id=\"modal_search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div id=\"search_form\">
          <form role=\"search\" method=\"get\" id=\"searchform\" action=\"https://kyrgyzstan-tourism.com/\">
            <input type=\"text\" value=\"\" name=\"s\" id=\"s\" />
            <button type=\"submit\" id=\"search_button\"><i class=\"fa fa-search\"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/modal_window.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal fade in\" id=\"modal_search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div id=\"search_form\">
          <form role=\"search\" method=\"get\" id=\"searchform\" action=\"https://kyrgyzstan-tourism.com/\">
            <input type=\"text\" value=\"\" name=\"s\" id=\"s\" />
            <button type=\"submit\" id=\"search_button\"><i class=\"fa fa-search\"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/modal_window.htm", "");
    }
}
