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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/sights-detail.htm */
class __TwigTemplate_8bdd2e56e6826344fea80099d736d1677b06184cc9bbcd7c664a209c658d9140 extends \Twig\Template
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
        $tags = array("component" => 1, "partial" => 51);
        $filters = array("resize" => 4, "escape" => 12, "raw" => 36);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
                ['resize', 'escape', 'raw'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image:
  url(&quot;";
        // line 4
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 4), "preview_image", [], "any", false, false, true, 4), "getPath", [], "any", false, false, true, 4), 4, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo "&quot;);\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a
                    href=\"/sights\">Sights</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
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
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 23), "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
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
        // line 36
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 36), "sights_editor", [], "any", false, false, true, 36), 36, $this->source);
        echo "
        <iframe src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SightsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 37), "sights_map", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" width=\"100%\" height=\"480\"></iframe>

      </div>


    </div>


    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "
        </div>
      </div>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/sights-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  132 => 51,  115 => 37,  111 => 36,  95 => 23,  81 => 12,  70 => 4,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'siteSearchInclude' %}
<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image:
  url(&quot;{{ SightsDetail.recordDetail.preview_image.getPath | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}&quot;);\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a
                    href=\"/sights\">Sights</a> / <span class=\"breadcrumb_last\"
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
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/sights-detail.htm", "");
    }
}
