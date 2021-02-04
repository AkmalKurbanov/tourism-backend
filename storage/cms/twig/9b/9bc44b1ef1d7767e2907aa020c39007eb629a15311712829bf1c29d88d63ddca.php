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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/partials/site/main_slider.htm */
class __TwigTemplate_294c72f219f31811a982481c074a8f351218302778c580ff08636ae6ab62facd extends \Twig\Template
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
        $filters = array("resize" => 3, "escape" => 8, "page" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['resize', 'escape', 'page'],
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
            echo "<div class=\"item lazy\"
  style=\"background-image: url(&quot;";
            // line 3
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, true, 3), "getPath", [], "any", false, false, true, 3), 3, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "&quot;);\">
  <div class=\"carousel-caption\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h2>
          <h3>";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h3>
          <div class=\"button_wrapper\">
            <a href=\"";
            // line 11
            echo ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 11)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 11), 11, $this->source), [twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 11) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 11)])) : (""));
            echo "\"
              class=\"cstm_button\"><i class=\"fa fa-eye\"></i>
              view tours</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

<script>
  \$('#front_slider .item.lazy').first().addClass('active');
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/main_slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  86 => 11,  81 => 9,  77 => 8,  69 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for category in categories.items %}
<div class=\"item lazy\"
  style=\"background-image: url(&quot;{{ category.preview_image.getPath | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' }) }}&quot;);\">
  <div class=\"carousel-caption\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h2>{{ category.name }}</h2>
          <h3>{{ category.description }}</h3>
          <div class=\"button_wrapper\">
            <a href=\"{{categories.property('categoriesPage') ? categories.property('categoriesPage')|page({(categories.paramName('categoriesPageSlug')):(category.slug)})}}\"
              class=\"cstm_button\"><i class=\"fa fa-eye\"></i>
              view tours</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endfor %}


<script>
  \$('#front_slider .item.lazy').first().addClass('active');
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/main_slider.htm", "");
    }
}
