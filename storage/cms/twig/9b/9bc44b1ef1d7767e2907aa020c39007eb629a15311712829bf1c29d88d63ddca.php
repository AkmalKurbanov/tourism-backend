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
        $filters = array("escape" => 2, "page" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'page'],
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
            echo "<div class=\"item lazy\" style=\"background-image: url(&quot;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 2), "getPath", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
            echo "&quot;);\"
  data-bg=\"url(";
            // line 3
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 3), "getPath", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo ")\" data-was-processed=\"true\">
  <div class=\"carousel-caption\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h2>
          <h3>";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h3>
          <div class=\"button_wrapper\">
            <a href=\"";
            // line 11
            echo ((twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 11)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 11), 11, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TypeTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 11) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 11)])) : (""));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
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
        return array (  104 => 21,  88 => 11,  83 => 9,  79 => 8,  71 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for record in TypeTours.items %}
<div class=\"item lazy\" style=\"background-image: url(&quot;{{ record.preview_image.getPath }}&quot;);\"
  data-bg=\"url({{ record.preview_image.getPath }})\" data-was-processed=\"true\">
  <div class=\"carousel-caption\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h2>{{ record.name }}</h2>
          <h3>{{ record.description }}</h3>
          <div class=\"button_wrapper\">
            <a href=\"{{TypeTours.property('recordPage') ? TypeTours.property('recordPage')|page({(TypeTours.paramName('recordPageSlug')):(record.slug)})}}\"
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
