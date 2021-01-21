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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/tours/group_tours.htm */
class __TwigTemplate_19149381e72534c2b30f7d4694f08b0ae3fa5f14f89d6e38687eda2f6165fedb extends \Twig\Template
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
        $filters = array("page" => 7, "escape" => 11);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 2
            echo "
 

<div class=\"item item_tour with_border  \">
  <a
    href=\"";
            // line 7
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 7)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 7), 7, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 7) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 7)])) : (""));
            echo "\">

    <span class=\"img_wrapper\">

      <span class=\"img lazy\" style=\"background-image: url(";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 11), "getPath", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo ");\" data-bg=\"url(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 11), "getPath", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" data-was-processed=\"true\"></span>

      <span class=\"price-round group_price\">
        <span class=\"inner\">\$";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "stoimost_tura"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo " US</span>
         ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 15), "custom_repeater", [], "any", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_repeater"]) {
                // line 16
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["custom_repeater"], "tour_duration", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_repeater'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "</span>

    </span>
    <div class=\"desc\">
      <h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo " </h3> 
      <p class=\"excerpt\">";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo " </p>
    </div>
    <p class=\"duration\">
      <i class=\"fa fa-clock-o\"></i>
      ";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "prodolzhitelnost_tura"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
      days</p>
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
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/group_tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  115 => 23,  111 => 22,  105 => 18,  96 => 16,  92 => 15,  88 => 14,  80 => 11,  73 => 7,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for record in GroupTours.items %}

 

<div class=\"item item_tour with_border  \">
  <a
    href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\">

    <span class=\"img_wrapper\">

      <span class=\"img lazy\" style=\"background-image: url({{ record.preview_image.getPath }});\" data-bg=\"url({{ record.preview_image.getPath }}\" data-was-processed=\"true\"></span>

      <span class=\"price-round group_price\">
        <span class=\"inner\">\${{ record.getAttributeValueBySlug('stoimost_tura') }} US</span>
         {% for custom_repeater in TourDetail.recordDetail.custom_repeater %}
          <li>{{ custom_repeater.tour_duration }}</li>
          {% endfor %}
</span>

    </span>
    <div class=\"desc\">
      <h3>{{ record.name }} </h3> 
      <p class=\"excerpt\">{{ record.description }} </p>
    </div>
    <p class=\"duration\">
      <i class=\"fa fa-clock-o\"></i>
      {{ record.getAttributeValueBySlug('prodolzhitelnost_tura') }}
      days</p>
  </a>
</div>

     
{% endfor %}", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/group_tours.htm", "");
    }
}
