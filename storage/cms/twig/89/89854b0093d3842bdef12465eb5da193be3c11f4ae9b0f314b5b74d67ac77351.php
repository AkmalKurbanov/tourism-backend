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

/* C:\work\xampp\htdocs\tourism/themes/tourism/pages/post.htm */
class __TwigTemplate_0629aba0e3a377cc6d21f16e9718dd9a9da0a99742b37d4d5c773122d0e3e75a extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 5, "partial" => 60);
        $filters = array("escape" => 6, "raw" => 41);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['escape', 'raw'],
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "


<div id=\"top\" class=\"small_top lazy\" ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "  style=\"background-image: url(&quot;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "&quot;);\" data-bg=\"url(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo ")\"
  data-was-processed=\"true\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span><a
                    href=\"https://kyrgyzstan-tourism.com/blog/\">Blog</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">Wildlife photography expedition in the Tien-Shan
                    mountains.</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"content\">
        <p><span style=\"font-weight: 400;\">

            ";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 41), 41, $this->source);
        echo "

          </span></p>
        <p><em>";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 44), "first_name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 44), "last_name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ".</em></p>
        <p><em>&nbsp;";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</em></p>
        
        
      </div>

      <div class=\"row\">

      </div>
    </div>

    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">

          ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "
        </div>
      </div>
    </div>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 61,  152 => 60,  134 => 45,  128 => 44,  122 => 41,  105 => 27,  85 => 9,  73 => 6,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}



<div id=\"top\" class=\"small_top lazy\" {% for image in post.featured_images %}
  style=\"background-image: url(&quot;{{ image.path }}&quot;);\" data-bg=\"url({{ image.path }})\"
  data-was-processed=\"true\">
  {% endfor %}
  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span><a
                    href=\"https://kyrgyzstan-tourism.com/blog/\">Blog</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">Wildlife photography expedition in the Tien-Shan
                    mountains.</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{ post.title }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"content\">
        <p><span style=\"font-weight: 400;\">

            {{post.content_html | raw }}

          </span></p>
        <p><em>{{ post.user.first_name}} {{ post.user.last_name}}.</em></p>
        <p><em>&nbsp;{{post.published_at}}</em></p>
        
        
      </div>

      <div class=\"row\">

      </div>
    </div>

    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">

          {% partial 'site/sidebar_without_date' %}

        </div>
      </div>
    </div>

  </div>

</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/post.htm", "");
    }
}
