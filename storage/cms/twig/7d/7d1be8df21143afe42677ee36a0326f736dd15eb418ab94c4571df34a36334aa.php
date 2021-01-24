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

/* C:\work\xampp\htdocs\tourism/plugins/hariadi/share/components/share/default.htm */
class __TwigTemplate_3b30920d5d553b57d8d00c3513e7a0e378608a11a9e9a2193b57bf1f63959c01 extends \Twig\Template
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
        $tags = array("if" => 5);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"oc-share\">
    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-xs disabled\">Share:</button>

      \t";
        // line 5
        if (($context["facebook"] ?? null)) {
            // line 6
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Facebook\" href=\"https://www.facebook.com/sharer.php?u=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 6, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-facebook\"></i>
        </a>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        if (($context["twitter"] ?? null)) {
            // line 12
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Twitter\" href=\"https://twitter.com/share?url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 12, $this->source), "html", null, true);
            echo "&text=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-twitter\"></i>
        </a>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if (($context["googleplus"] ?? null)) {
            // line 18
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Google Plus\" href=\"https://plus.google.com/share?url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 18, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-google-plus\"></i>
        </a>
        ";
        }
        // line 22
        echo "
        ";
        // line 23
        if (($context["tumblr"] ?? null)) {
            // line 24
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Tumblr\" href=\"https://www.tumblr.com/share/link?url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-tumblr\"></i>
        </a>
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        if (($context["linkedin"] ?? null)) {
            // line 30
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On LinkedIn\" href=\"https://www.linkedin.com/shareArticle?url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 30, $this->source), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-linkedin\"></i>
        </a>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (($context["reddit"] ?? null)) {
            // line 36
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Reddit\" href=\"https://reddit.com/submit?url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 36, $this->source), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 36), "title", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-reddit\"></i>
        </a>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if (($context["digg"] ?? null)) {
            // line 42
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Digg\" href=\"http://digg.com/submit?url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 42, $this->source), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">
            <i class=\"icon-digg\"></i>
        </a>
        ";
        }
        // line 46
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/plugins/hariadi/share/components/share/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 46,  156 => 42,  154 => 41,  151 => 40,  141 => 36,  139 => 35,  136 => 34,  126 => 30,  124 => 29,  121 => 28,  111 => 24,  109 => 23,  106 => 22,  98 => 18,  96 => 17,  93 => 16,  83 => 12,  81 => 11,  78 => 10,  70 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"oc-share\">
    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-xs disabled\">Share:</button>

      \t{% if facebook %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Facebook\" href=\"https://www.facebook.com/sharer.php?u={{url}}\">
            <i class=\"icon-facebook\"></i>
        </a>
        {% endif %}

        {% if twitter %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Twitter\" href=\"https://twitter.com/share?url={{url}}&text={{ this.page.title }}\">
            <i class=\"icon-twitter\"></i>
        </a>
        {% endif %}

        {% if googleplus %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Google Plus\" href=\"https://plus.google.com/share?url={{url}}\">
            <i class=\"icon-google-plus\"></i>
        </a>
        {% endif %}

        {% if tumblr %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Tumblr\" href=\"https://www.tumblr.com/share/link?url={{url}}&title={{ this.page.title }}\">
            <i class=\"icon-tumblr\"></i>
        </a>
        {% endif %}

        {% if linkedin %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On LinkedIn\" href=\"https://www.linkedin.com/shareArticle?url={{url}}&title={{ this.page.title }}\">
            <i class=\"icon-linkedin\"></i>
        </a>
        {% endif %}

        {% if reddit %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Reddit\" href=\"https://reddit.com/submit?url={{url}}&title={{ this.page.title }}\">
            <i class=\"icon-reddit\"></i>
        </a>
        {% endif %}

        {% if digg %}
        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Digg\" href=\"http://digg.com/submit?url={{url}}&title={{ this.page.title }}\">
            <i class=\"icon-digg\"></i>
        </a>
        {% endif %}
    </div>
</div>

", "C:\\work\\xampp\\htdocs\\tourism/plugins/hariadi/share/components/share/default.htm", "");
    }
}
