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

/* C:\work\OpenServer\domains\tourism.loc/plugins/offline/sitesearch/components/searchresults/content.htm */
class __TwigTemplate_376a29e8b134b5a193b7f4950434535123c3efa1ad5f552705eb9218b17cea67 extends \Twig\Template
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
        $tags = array("if" => 3);
        $filters = array("app" => 2, "raw" => 2, "escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['app', 'raw', 'escape'],
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
        echo "<h4 class=\"ss-result__title\">
    <a href=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, true, 2), 2, $this->source));
        echo "\">";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", [], "any", false, false, true, 2), 2, $this->source);
        echo "</a>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProviderBadge", [], "any", false, false, true, 3)) {
            // line 4
            echo "        <span class=\"ss-result__badge\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "provider", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "</h4>

<p class=\"ss-result__text\">
    ";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "excerpt", [], "any", false, false, true, 18), 18, $this->source);
        echo "
</p>

<p class=\"ss-result__url\">
    <a href=\"";
        // line 22
        echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, true, 22), 22, $this->source));
        echo "\" class=\"ss-result__link\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "visitPageMessage", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo " &rarr;</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/plugins/offline/sitesearch/components/searchresults/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  100 => 18,  95 => 15,  93 => 14,  91 => 13,  89 => 12,  87 => 11,  85 => 10,  82 => 8,  76 => 5,  73 => 4,  71 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"ss-result__title\">
    <a href=\"{{ result.url | app }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"ss-result__badge\">
            {{ result.provider }}
        </span>
    {% endif %}

    {# Some results contain meta information.     #}
    {# You can access it using result.meta.       #}
    {# To find out from which plugin the result   #}
    {# was returned you can use result.identifier #}
    {# Some results contain the original model.   #}
    {# You can access it using result.model       #}
</h4>

<p class=\"ss-result__text\">
    {{ result.excerpt | raw }}
</p>

<p class=\"ss-result__url\">
    <a href=\"{{ result.url | app }}\" class=\"ss-result__link\">{{ __SELF__.visitPageMessage }} &rarr;</a>
</p>
", "C:\\work\\OpenServer\\domains\\tourism.loc/plugins/offline/sitesearch/components/searchresults/content.htm", "");
    }
}
