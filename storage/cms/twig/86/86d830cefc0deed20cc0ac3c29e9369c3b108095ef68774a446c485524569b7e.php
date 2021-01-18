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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/tours/popular_tours.htm */
class __TwigTemplate_11cb7c5202d1a559bcb54cbeae7406d939f8e7258ab92026ae93755e1896dccb extends \Twig\Template
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
        $tags = array("for" => 1);
        $filters = array("page" => 5, "escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape'],
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "items", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 2
            echo "
<div class=\"item item_tour   \">
  <a
    href=\"";
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 5)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 5), 5, $this->source), [twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 5) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 5)])) : (""));
            echo "\">
    <span class=\"img_wrapper\">
      <span class=\"img lazy\" style=\"\" data-bg=\"url(";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 7), "getPath", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo ")\"></span>

      <span class=\"price-round\">
        <span class=\"inner\">from <br />\$";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "stoimost_tura"], "method", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</span>
      </span>


    </span>
    <div class=\"desc\">
      <h3> ";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h3>
      <p class=\"excerpt\">";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</p>
    </div>
    <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
      ";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "prodolzhitelnost_tura"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " days</p>
  </a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/popular_tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  95 => 17,  91 => 16,  82 => 10,  76 => 7,  71 => 5,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for record in PopularTours.items %}

<div class=\"item item_tour   \">
  <a
    href=\"{{PopularTours.property('recordPage') ? PopularTours.property('recordPage')|page({(PopularTours.paramName('recordPageSlug')):(record.slug)})}}\">
    <span class=\"img_wrapper\">
      <span class=\"img lazy\" style=\"\" data-bg=\"url({{ record.preview_image.getPath }})\"></span>

      <span class=\"price-round\">
        <span class=\"inner\">from <br />\${{ record.getAttributeValueBySlug('stoimost_tura') }}</span>
      </span>


    </span>
    <div class=\"desc\">
      <h3> {{ record.name }}</h3>
      <p class=\"excerpt\">{{ record.description }}</p>
    </div>
    <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
      {{ record.getAttributeValueBySlug('prodolzhitelnost_tura') }} days</p>
  </a>
</div>

{% endfor %}", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/popular_tours.htm", "");
    }
}
