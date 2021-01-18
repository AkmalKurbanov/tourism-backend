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

/* C:\work\xampp\htdocs\tourism/themes/tourism/pages/tours.htm */
class __TwigTemplate_882db40db4832fe36e0daed9f9e61696ad8ab19021e1e68a923b74ec7512efa1 extends \Twig\Template
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
        $tags = array("for" => 48, "partial" => 107);
        $filters = array("escape" => 15, "page" => 53);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
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
        echo "<div class=\"small_top lazy\" id=\"top\" style=\"\" data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\">




  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"https://kyrgyzstan-tourism.com/\">Home</a> /
                <span>
                  <a href=\"https://kyrgyzstan-tourism.com/group-tours/\">Group Tours 2021</a> /<span
                    class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 15), "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</span>
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
          <h1 id=\"single_tour_title\">All Tours</h1>
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "items", [], "any", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 49
            echo "
            <div class=\"col-sm-4\">

              <div class=\"item item_tour with_border auto_height \">
                <a href=\"";
            // line 53
            echo ((twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 53)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 53), 53, $this->source), [twig_get_attribute($this->env, $this->source, ($context["AllTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 53) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 53)])) : (""));
            echo "\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 56), "getPath", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "prodolzhitelnost_tura"], "method", false, false, true, 63), 63, $this->source), "html", null, true);
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
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 108
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
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 108,  198 => 107,  160 => 71,  146 => 63,  141 => 61,  137 => 60,  130 => 56,  124 => 53,  118 => 49,  114 => 48,  78 => 15,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"small_top lazy\" id=\"top\" style=\"\" data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\">




  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"https://kyrgyzstan-tourism.com/\">Home</a> /
                <span>
                  <a href=\"https://kyrgyzstan-tourism.com/group-tours/\">Group Tours 2021</a> /<span
                    class=\"breadcrumb_last\" aria-current=\"page\">{{ TourDetail.recordDetail.name }}</span>
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
          <h1 id=\"single_tour_title\">All Tours</h1>
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
                <a href=\"{{AllTours.property('recordPage') ? AllTours.property('recordPage')|page({(AllTours.paramName('recordPageSlug')):(record.slug)})}}\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url({{ record.preview_image.getPath }})\"></span>
    
                  </span>
                  <div class=\"desc\">
                    <h3>{{record.name}}</h3>
                    <p class=\"excerpt\">{{ record.description }}</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> {{ record.getAttributeValueBySlug('prodolzhitelnost_tura') }} days</p>
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


{% partial 'site/sidebar' %}

          </div>
        </div>
      </div>
   </div>
    </div>
  </div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/tours.htm", "");
    }
}
