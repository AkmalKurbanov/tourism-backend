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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/tours.htm */
class __TwigTemplate_61fd4557dc6e3037616f53c4985c8d84b9ed2326f2e4d32f636d06c912619931 extends \Twig\Template
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
        $tags = array("for" => 47, "partial" => 94);
        $filters = array("resize" => 1, "media" => 1, "page" => 53, "escape" => 60, "raw" => 82);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'media', 'page', 'escape', 'raw'],
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
        echo "<div class=\"small_top lazy\" id=\"top\" style=\"background-image: url(";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "toursbanner_ToursBanner", [], "any", false, false, true, 1), 1, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ")\">




  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"https://kyrgyzstan-tourism.com/\">Home</a> /
                <span>
                  <span class=\"breadcrumb_last\" aria-current=\"page\">Tours</span>
                </span>
              </span>
            </span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">All tours</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div id=\"archive_content\" class=\"\">


        <div class=\"row\">
            

          ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "items", [], "any", false, false, true, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 48
            echo "          
          <div class=\"col-sm-4\">

            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 53
            echo ((twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 53)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 53), 53, $this->source), [twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 53) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 53)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\"
                    style=\"background-image: url(";
            // line 56
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 56), "getPath", [], "any", false, false, true, 56), 56, $this->source), 265, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ")\"></span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</h3>
                  <p class=\"excerpt\">";
            // line 61
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>


          </div>
          
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "






        </div>

      </div>

  ";
        // line 82
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "items", [], "any", false, false, true, 82), 82, $this->source);
        echo "
    </div>




    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          ";
        // line 94
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 95
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 95,  187 => 94,  172 => 82,  159 => 71,  145 => 63,  140 => 61,  136 => 60,  129 => 56,  123 => 53,  116 => 48,  112 => 47,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"small_top lazy\" id=\"top\" style=\"background-image: url({{ this.page.toursbanner_ToursBanner | media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\">




  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"https://kyrgyzstan-tourism.com/\">Home</a> /
                <span>
                  <span class=\"breadcrumb_last\" aria-current=\"page\">Tours</span>
                </span>
              </span>
            </span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">All tours</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div id=\"archive_content\" class=\"\">


        <div class=\"row\">
            

          {% for record in AllTours.items %}
          
          <div class=\"col-sm-4\">

            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"{{AllTours.property('recordPage') ? AllTours.property('recordPage')|page({(AllTours.paramName('recordPageSlug')):(record.slug)})}}\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\"
                    style=\"background-image: url({{ record.preview_image.getPath | resize(265, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\"></span>

                </span>
                <div class=\"desc\">
                  <h3>{{record.name}}</h3>
                  <p class=\"excerpt\">{{ record.description }}</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> {{ record.tour_duration }} days</p>
              </a>
            </div>


          </div>
          
          {% endfor %}







        </div>

      </div>

  {{ AllTours.items|raw }}
    </div>




    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          {% partial 'site/sidebar_without_date' %}

        </div>
      </div>
    </div>
  </div>
</div>
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tours.htm", "");
    }
}
