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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/menu-items.htm */
class __TwigTemplate_a5b524d519360f7db5ff5fec3dd6f0240d52e98e69f296a12b9fda4e04e0a885 extends \Twig\Template
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
        $tags = array("for" => 2, "if" => 8, "partial" => 17);
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape'],
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li 
            class=\"";
            // line 4
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 4) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 4))) ? ("active") : (""));
            echo " 
            ";
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 5)) ? ("dropdown") : (""));
            echo "\"
        >
            <a 
                ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 8)) {
                echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
            }
            echo " 
                href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"
            >
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "

                ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 13)) {
                echo "<span class=\"caret\"></span>";
            }
            // line 14
            echo "            </a>

            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 16)) {
                // line 17
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 17)                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "            ";
            }
            // line 19
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/menu-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 21,  120 => 19,  117 => 18,  110 => 17,  108 => 16,  104 => 14,  100 => 13,  95 => 11,  90 => 9,  84 => 8,  78 => 5,  74 => 4,  71 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li 
            class=\"{{ item.isActive or item.isChildActive ? 'active' : '' }} 
            {{ item.items ? 'dropdown' : '' }}\"
        >
            <a 
                {% if item.items %}class=\"dropdown-toggle\" data-toggle=\"dropdown\"{% endif %} 
                href=\"{{ item.url }}\"
            >
                {{ item.title }}

                {% if item.items %}<span class=\"caret\"></span>{% endif %}
            </a>

            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/menu-items.htm", "");
    }
}
