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
        $tags = array("component" => 1, "for" => 47, "partial" => 106);
        $filters = array("page" => 53, "escape" => 55);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for', 'partial'],
                ['page', 'escape'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<div class=\"small_top lazy\" id=\"top\" style=\"background-image: url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\">




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
                  <span class=\"img lazy\" style=\"background-image: url(";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 55), "getPath", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo ")\"></span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</h3>
                  <p class=\"excerpt\">";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>


          </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "






        </div>

      </div>




      <div id=\"pagin_wrapper\">



        <nav class=\"navigation pagination\" role=\"navigation\" aria-label=\" \">
          <h2 class=\"screen-reader-text\"> </h2>
          <div class=\"nav-links\"><span aria-current=\"page\" class=\"page-numbers current\">1</span>
            <a class=\"page-numbers\" href=\"https://kyrgyzstan-tourism.com/tours/page/2/\">2</a>
            <a class=\"next page-numbers\" href=\"https://kyrgyzstan-tourism.com/tours/page/2/\">Next »</a></div>
        </nav>
      </div>
    </div>




    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          ";
        // line 106
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 107
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
        return array (  201 => 107,  197 => 106,  159 => 70,  145 => 62,  140 => 60,  136 => 59,  129 => 55,  124 => 53,  117 => 48,  113 => 47,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'siteSearchInclude' %}<div class=\"small_top lazy\" id=\"top\" style=\"background-image: url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\">




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
                  <span class=\"img lazy\" style=\"background-image: url({{ record.preview_image.getPath }})\"></span>

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




      <div id=\"pagin_wrapper\">



        <nav class=\"navigation pagination\" role=\"navigation\" aria-label=\" \">
          <h2 class=\"screen-reader-text\"> </h2>
          <div class=\"nav-links\"><span aria-current=\"page\" class=\"page-numbers current\">1</span>
            <a class=\"page-numbers\" href=\"https://kyrgyzstan-tourism.com/tours/page/2/\">2</a>
            <a class=\"next page-numbers\" href=\"https://kyrgyzstan-tourism.com/tours/page/2/\">Next »</a></div>
        </nav>
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
</div>
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tours.htm", "");
    }
}
