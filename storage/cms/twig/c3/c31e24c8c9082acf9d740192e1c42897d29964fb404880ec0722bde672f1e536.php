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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/sights.htm */
class __TwigTemplate_0ca1ecddf7938a167c477caa76f8856983c8c390f6b9bb34c0b3d21ad1cc8d83 extends \Twig\Template
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
        $tags = array("partial" => 50);
        $filters = array("escape" => 2, "raw" => 35);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape', 'raw'],
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
        echo "<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image: url(&quot;";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 2), "preview_image", [], "any", false, false, true, 2), "getPath", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "&quot;);\"
  data-bg=\"url(";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 3), "preview_image", [], "any", false, false, true, 3), "getPath", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo ")\" data-was-processed=\"true\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a
                    href=\"https://kyrgyzstan-tourism.com/sights/\">Sights</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 11), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 22), "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"content\">

        ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 35), "sights_editor", [], "any", false, false, true, 35), 35, $this->source);
        echo "
        <iframe src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 36), "sights_map", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\" width=\"100%\" height=\"480\"></iframe>

      </div>


    </div>


    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "
        </div>
      </div>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/sights.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 51,  131 => 50,  114 => 36,  110 => 35,  94 => 22,  80 => 11,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image: url(&quot;{{ SightsDetail.recordDetail.preview_image.getPath }}&quot;);\"
  data-bg=\"url({{ SightsDetail.recordDetail.preview_image.getPath }})\" data-was-processed=\"true\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a
                    href=\"https://kyrgyzstan-tourism.com/sights/\">Sights</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">{{ SightsDetail.recordDetail.name }}</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{ SightsDetail.recordDetail.name }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"content\">

        {{ SightsDetail.recordDetail.sights_editor | raw }}
        <iframe src=\"{{ SightsDetail.recordDetail.sights_map }}\" width=\"100%\" height=\"480\"></iframe>

      </div>


    </div>


    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          {% partial 'site/sidebar_without_date' %}

        </div>
      </div>
    </div>

  </div>
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/sights.htm", "");
    }
}
