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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/gallery.htm */
class __TwigTemplate_225a417c0c85ec2854da08926d366f871c322e26e1d7e71d953f52f93f689cc8 extends \Twig\Template
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
        $tags = array("for" => 37, "partial" => 62);
        $filters = array("resize" => 2, "escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'escape'],
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
        echo "<div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url(";
        // line 2
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "preview_image", [], "any", false, false, true, 2), "getPath", [], "any", false, false, true, 2), 2, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">


    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/photo-gallery\">Photo gallery</a> / <span
                    class=\"breadcrumb_last\"
                    aria-current=\"page\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</span></span></span></p>
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
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-9\">
        <div id=\"content\" class=\"\">

          <div class=\"custom_gallery justified-gallery\" style=\"height: 1287px;\" lg-uid=\"lg0\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 38
            echo "            <a data-fancybox=\"gallery\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
              style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
              <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" alt=\"\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        

          </div>

        </div>







      </div>

      <div class=\"col-sm-3\">
        <div class=\"sidebar_wrapper\">

          <div id=\"sidebar\">

            ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "
          </div>
        </div>
      </div>

    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  149 => 62,  128 => 43,  119 => 40,  113 => 38,  109 => 37,  91 => 22,  77 => 11,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url({{ recordDetail.preview_image.getPath | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">


    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/photo-gallery\">Photo gallery</a> / <span
                    class=\"breadcrumb_last\"
                    aria-current=\"page\">{{recordDetail.name}}</span></span></span></p>
            <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"desc\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">
            <h1 id=\"single_tour_title\">{{recordDetail.name}}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-9\">
        <div id=\"content\" class=\"\">

          <div class=\"custom_gallery justified-gallery\" style=\"height: 1287px;\" lg-uid=\"lg0\">
            {% for image in recordDetail.images %}
            <a data-fancybox=\"gallery\" href=\"{{image.path}}\" class=\"jg-entry\"
              style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
              <img class=\"ls-is-cached lazyloaded\" src=\"{{image.path}}\" alt=\"\">
            </a>
            {%endfor%}
        

          </div>

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
  </div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/gallery.htm", "");
    }
}
