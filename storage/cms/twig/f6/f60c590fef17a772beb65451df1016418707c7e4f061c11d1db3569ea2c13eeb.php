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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/partials/site/discount_tours.htm */
class __TwigTemplate_afd422629d1efef3b49c1cb91b105b906044d026be8f98fa4eb582ac9ed78ae2 extends \Twig\Template
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
        $filters = array("page" => 4, "resize" => 7, "escape" => 10);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "items", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 2
            echo "<div class=\"item item_tour with_border swiper-slide\">
  <a
    href=\"";
            // line 4
            echo ((twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 4)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 4), 4, $this->source), [twig_get_attribute($this->env, $this->source, ($context["DealsAndDiscounts"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 4) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 4)])) : (""));
            echo "\">
    <span class=\"img_wrapper\">
      <span class=\"img lazy\"
        style=\"background-image: url(";
            // line 7
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 7), "getPath", [], "any", false, false, true, 7), 7, $this->source), 240, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ")\"></span>

      <span class=\"price-round\">
        <span class=\"inner\">from <br />\$ ";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo " US
        
        </span>
      </span>


    </span>
    <div class=\"desc\">
      <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</h3>
      <p class=\"excerpt\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</p>
    </div>
    <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
      ";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
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
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/discount_tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 19,  93 => 18,  82 => 10,  76 => 7,  70 => 4,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for record in DealsAndDiscounts.items %}
<div class=\"item item_tour with_border swiper-slide\">
  <a
    href=\"{{DealsAndDiscounts.property('recordPage') ? DealsAndDiscounts.property('recordPage')|page({(DealsAndDiscounts.paramName('recordPageSlug')):(record.slug)})}}\">
    <span class=\"img_wrapper\">
      <span class=\"img lazy\"
        style=\"background-image: url({{ record.preview_image.getPath | resize(240, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\"></span>

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
{% endfor %}", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/discount_tours.htm", "");
    }
}
