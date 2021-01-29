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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/type-tours.htm */
class __TwigTemplate_c8849e18bd91c5e06f34d6d3001be19fc92671042cddf1a3d71d8b71b33e20c3 extends \Twig\Template
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
        $tags = array("for" => 43, "partial" => 88);
        $filters = array("escape" => 1, "raw" => 35, "page" => 48);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['escape', 'raw', 'page'],
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
        echo "<div id=\"top\" class=\"small_top lazy\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 1), "preview_image", [], "any", false, false, true, 1), "getPath", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ")\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/tours/default\">Tours</a> / <span
                  class=\"breadcrumb_last\"
                  aria-current=\"page\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 9), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
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
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 20), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div id=\"archive_content\">

        <div id=\"content\" class=\"tax-content\">

          ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 35), "itinerary_desc", [], "any", false, false, true, 35), 35, $this->source);
        echo "

         
        </div>


        <div class=\"row\">

          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "items", [], "any", false, false, true, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 44
            echo "          
          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 48
            echo ((twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 48)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 48), 48, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 48) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 48)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"background-image: url(";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 50), "getPath", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo ")\"></span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</h3>
                  <p class=\"excerpt\">";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
                  ";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>

          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
        </div>








        <div id=\"pagin_wrapper\">


        </div>
      </div>

    </div>

    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "

        </div>
      </div>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/type-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 89,  187 => 88,  161 => 64,  149 => 58,  143 => 55,  139 => 54,  132 => 50,  127 => 48,  121 => 44,  117 => 43,  106 => 35,  88 => 20,  74 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\" style=\"background-image: url({{TypeToursDetail.recordDetail.preview_image.getPath }})\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/tours/default\">Tours</a> / <span
                  class=\"breadcrumb_last\"
                  aria-current=\"page\">{{ TypeToursDetail.recordDetail.name }}</span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{ TypeToursDetail.recordDetail.name }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div id=\"archive_content\">

        <div id=\"content\" class=\"tax-content\">

          {{TypeToursDetail.recordDetail.itinerary_desc | raw}}

         
        </div>


        <div class=\"row\">

          {% for record in Tours.items %}
          
          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"{{Tours.property('recordPage') ? Tours.property('recordPage')|page({(Tours.paramName('recordPageSlug')):(record.slug)})}}\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"background-image: url({{ record.preview_image.getPath }})\"></span>

                </span>
                <div class=\"desc\">
                  <h3>{{record.name}}</h3>
                  <p class=\"excerpt\">{{record.description}}</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
                  {{ record.tour_duration }} days</p>
              </a>
            </div>

          </div>
          {% endfor %}

        </div>








        <div id=\"pagin_wrapper\">


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
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/type-tours.htm", "");
    }
}
