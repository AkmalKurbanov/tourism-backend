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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/tours/type_tours.htm */
class __TwigTemplate_5c91e20506427ebc62aa570a204283fc971d07229e4c2c771ccc95ec6f1599fe extends \Twig\Template
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
        $filters = array("page" => 6, "escape" => 8);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "items", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 2
            echo "
 <div class=\"col-sm-4\">
   <div class=\"item item_tour with_border auto_height tour_type\">
     <a
       href=\"";
            // line 6
            echo ((twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 6)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 6), 6, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 6) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 6)])) : (""));
            echo "\">
       <span class=\"img_wrapper\">
         <span class=\"img lazy\" style=\"\" data-bg=\"url(";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 8), "getPath", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo ")\"></span>
       </span>
       <div class=\"desc\">
         <h3>";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</h3>
       </div>
     </a>
   </div>
 </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/type_tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 8,  72 => 6,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for record in TypeTours.items %}

 <div class=\"col-sm-4\">
   <div class=\"item item_tour with_border auto_height tour_type\">
     <a
       href=\"{{TypeTours.property('recordPage') ? TypeTours.property('recordPage')|page({(TypeTours.paramName('recordPageSlug')):(record.slug)})}}\">
       <span class=\"img_wrapper\">
         <span class=\"img lazy\" style=\"\" data-bg=\"url({{ record.preview_image.getPath }})\"></span>
       </span>
       <div class=\"desc\">
         <h3>{{ record.name }}</h3>
       </div>
     </a>
   </div>
 </div>

 {% endfor %}", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/tours/type_tours.htm", "");
    }
}
