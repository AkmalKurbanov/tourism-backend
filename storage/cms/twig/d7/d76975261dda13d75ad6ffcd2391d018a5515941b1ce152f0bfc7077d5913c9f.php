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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/partials/site/type_tours.htm */
class __TwigTemplate_258a5af0eab41cd20c62be38dc59f6116ef607e6ecf4c658a6bc38ea497903b4 extends \Twig\Template
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
        $filters = array("page" => 6, "resize" => 9, "escape" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'resize', 'escape'],
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "items", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "
<div class=\"col-sm-4\">
  <div class=\"item item_tour with_border auto_height tour_type\">
    <a
      href=\"";
            // line 6
            echo ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 6)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 6), 6, $this->source), [twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 6) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 6)])) : (""));
            echo "\">
      <span class=\"img_wrapper\">
            <span class=\"img lazy\"
              style=\"background-image: url(";
            // line 9
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, true, 9), "getPath", [], "any", false, false, true, 9), 9, $this->source), 360, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ")\"></span>
      </span>
      
      <div class=\"desc\">
        <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</h3>
      </div>
    </a>
  </div>
</div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/type_tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  78 => 9,  72 => 6,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for category in categories.items %}

<div class=\"col-sm-4\">
  <div class=\"item item_tour with_border auto_height tour_type\">
    <a
      href=\"{{categories.property('categoriesPage') ? categories.property('categoriesPage')|page({(categories.paramName('categoriesPageSlug')):(category.slug)})}}\">
      <span class=\"img_wrapper\">
            <span class=\"img lazy\"
              style=\"background-image: url({{ category.preview_image.getPath | resize(360, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\"></span>
      </span>
      
      <div class=\"desc\">
        <h3>{{ category.name }}</h3>
      </div>
    </a>
  </div>
</div>

 {% endfor %}", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/type_tours.htm", "");
    }
}
