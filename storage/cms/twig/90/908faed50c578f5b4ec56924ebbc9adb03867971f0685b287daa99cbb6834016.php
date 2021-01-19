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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/footer.htm */
class __TwigTemplate_424734f792bf4c9d83037135ab187bfec7a34be2ad79190eaa0e767e13bc90a1 extends \Twig\Template
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
        $tags = array("for" => 12);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-4\">
      <a href=\"https://kyrgyzstan-tourism.com\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "logo", [], "any", false, false, true, 6), "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" alt=\"\">
      </a>
      <div class=\"social\">



        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "social", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\"></i></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "



      </div>
    </div>

    <div class=\"col-sm-8\">
      <h2>Contacts</h2>
      <div class=\"row\">

        <div class=\"col-sm-6\">
          <p class=\"phone\">
            <phone><a href=\"tel:";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 28), "phone2", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 28), "phone2", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</a></phone>
          </p>
          <p class=\"phone\">
            <phone><a href=\"tel:";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 31), "phone3", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 31), "phone3", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</a></phone>
          </p>
          <p><a href=\"mailto:";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 33), "user_email", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 33), "user_email", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</a></p>
        </div>
        <div class=\"col-sm-6\">
          <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 36), "info", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class=\"line_helper\" style=\"background: #959da7;\"></div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-6\">
      <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 47), "copyright", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-6 text-right\"><a href=\"#\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 49), "termsUse", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</a></div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  145 => 47,  131 => 36,  123 => 33,  116 => 31,  108 => 28,  93 => 15,  82 => 13,  78 => 12,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-4\">
      <a href=\"https://kyrgyzstan-tourism.com\">
        <img src=\"{{this.theme.logo.path}}\" alt=\"\">
      </a>
      <div class=\"social\">



        {% for item in this.theme.social %}
        <a href=\"{{item.url}}\" target=\"_blank\"><i class=\"{{item.awesome_icon}}\"></i></a>
        {%endfor%}




      </div>
    </div>

    <div class=\"col-sm-8\">
      <h2>Contacts</h2>
      <div class=\"row\">

        <div class=\"col-sm-6\">
          <p class=\"phone\">
            <phone><a href=\"tel:{{this.theme.phone2}}\">{{this.theme.phone2}}</a></phone>
          </p>
          <p class=\"phone\">
            <phone><a href=\"tel:{{this.theme.phone3}}\">{{this.theme.phone3}}</a></phone>
          </p>
          <p><a href=\"mailto:{{this.theme.user_email}}\">{{this.theme.user_email}}</a></p>
        </div>
        <div class=\"col-sm-6\">
          <p>{{this.theme.info}}</p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class=\"line_helper\" style=\"background: #959da7;\"></div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-6\">
      <p>{{this.theme.copyright}}</p>
    </div>
    <div class=\"col-xs-6 text-right\"><a href=\"#\">{{this.theme.termsUse}}</a></div>
  </div>
</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/footer.htm", "");
    }
}
