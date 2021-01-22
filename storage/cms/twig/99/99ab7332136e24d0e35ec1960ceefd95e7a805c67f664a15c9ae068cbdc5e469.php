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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/tours/discount_tours.htm */
class __TwigTemplate_d65363ef16917c0e0ef2ac74f75690aded79a90680c5e275a4d43e4008a0a507 extends \Twig\Template
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
        $filters = array("page" => 4, "escape" => 6);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "items", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 2
            echo "<div class=\"item item_tour with_border  \">
  <a
    href=\"";
            // line 4
            echo ((twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 4)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 4), 4, $this->source), [twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 4) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 4)])) : (""));
            echo "\">
    <span class=\"img_wrapper\">
      <span class=\"img lazy\" style=\"\" data-bg=\"url( ";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 6), "getPath", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo ")\"></span>

      <span class=\"price-round\">
        <span class=\"inner\">from <br />\$ ";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo " US
        
        </span>
      </span>


    </span>
    <div class=\"desc\">
      <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</h3>
      <p class=\"excerpt\"> ";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
    </div>
    <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
      ";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
       days
    </p>
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
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/discount_tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 18,  92 => 17,  81 => 9,  75 => 6,  70 => 4,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for record in DealsAndDiscounts.items %}
<div class=\"item item_tour with_border  \">
  <a
    href=\"{{DealsAndDiscounts.property('recordPage') ? DealsAndDiscounts.property('recordPage')|page({(DealsAndDiscounts.paramName('recordPageSlug')):(record.slug)})}}\">
    <span class=\"img_wrapper\">
      <span class=\"img lazy\" style=\"\" data-bg=\"url( {{ record.preview_image.getPath }})\"></span>

      <span class=\"price-round\">
        <span class=\"inner\">from <br />\$ {{ record.tour_cost }} US
        
        </span>
      </span>


    </span>
    <div class=\"desc\">
      <h3>{{ record.name }}</h3>
      <p class=\"excerpt\"> {{ record.description }}</p>
    </div>
    <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
      {{ record.tour_duration }}
       days
    </p>
  </a>
</div>
{% endfor %}", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/discount_tours.htm", "");
    }
}
