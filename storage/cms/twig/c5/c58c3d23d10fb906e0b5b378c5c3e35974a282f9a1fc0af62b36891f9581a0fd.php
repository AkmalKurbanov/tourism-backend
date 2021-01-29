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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/reviews-detail.htm */
class __TwigTemplate_c13c4701383d46991344217454cc51c7fdb031622d40d1bdf777e839c6bbdf52 extends \Twig\Template
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
        $tags = array("for" => 39, "partial" => 74);
        $filters = array("escape" => 7, "raw" => 32, "page" => 57);
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
        echo "<div id=\"top\" class=\"small_top lazy\" style=\"background-image: url(&quot;https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Contact_Us-3.jpg&quot;);\" data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Contact_Us-3.jpg)\" data-was-processed=\"true\">

    <div class=\"breadcrumb_wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a href=\"/reviews\">Reviews</a> / <span class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReviewsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 7), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</span></span></span></span></p>       
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
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReviewsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
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
                                    <h3 class=\"work\">";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReviewsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 28), "review_author_status", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</h3>

                                
                        <p><em>
                            ";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReviewsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 32), "review", [], "any", false, false, true, 32), 32, $this->source);
        echo "
                        </em></p>

                


            </div>
             ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "items", [], "any", false, false, true, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 40
            echo "        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 43), "getPath", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "\"
               
                class=\"img-responsive lazyload\">
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</h4>
              <h5 class=\"work\">";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review_author_status", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo " </h5>

              <div class=\"excerpt\">
                <p>
                  <p>“Kyrgyzstan is great country to discover! High mountains with endless trails
                    to explore by foot or on a horseback. Nothing [&hellip;]</p>
                </p>
                <div class=\"more\">
                  <a href=\"";
            // line 57
            echo ((twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 57)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 57), 57, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 57) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 57)])) : (""));
            echo "\">Read more
                    ...</a>
                </div>
              </div>

            </div>
          </div>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
   <div class=\"col-sm-3\">


      <div id=\"sidebar\" style=\"margin-top: 50px;\">



        ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "


      </div>
     
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/reviews-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 75,  171 => 74,  161 => 66,  146 => 57,  135 => 49,  131 => 48,  123 => 43,  118 => 40,  114 => 39,  104 => 32,  97 => 28,  84 => 18,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\" style=\"background-image: url(&quot;https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Contact_Us-3.jpg&quot;);\" data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Contact_Us-3.jpg)\" data-was-processed=\"true\">

    <div class=\"breadcrumb_wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a href=\"/reviews\">Reviews</a> / <span class=\"breadcrumb_last\" aria-current=\"page\">{{ ReviewsDetail.recordDetail.name }}</span></span></span></span></p>       
                    <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"desc\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <h1 id=\"single_tour_title\">{{ ReviewsDetail.recordDetail.name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-9\">
<div id=\"content\">
                                    <h3 class=\"work\">{{ ReviewsDetail.recordDetail.review_author_status }}</h3>

                                
                        <p><em>
                            {{ ReviewsDetail.recordDetail.review | raw}}
                        </em></p>

                


            </div>
             {% for record in Reviews.items %}
        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\" src=\"{{ record.preview_image.getPath }}\"
               
                class=\"img-responsive lazyload\">
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">{{record.name}}</h4>
              <h5 class=\"work\">{{record.review_author_status}} </h5>

              <div class=\"excerpt\">
                <p>
                  <p>“Kyrgyzstan is great country to discover! High mountains with endless trails
                    to explore by foot or on a horseback. Nothing [&hellip;]</p>
                </p>
                <div class=\"more\">
                  <a href=\"{{Reviews.property('recordPage') ? Reviews.property('recordPage')|page({(Reviews.paramName('recordPageSlug')):(record.slug)})}}\">Read more
                    ...</a>
                </div>
              </div>

            </div>
          </div>
        </div>
{% endfor %}
</div>
   <div class=\"col-sm-3\">


      <div id=\"sidebar\" style=\"margin-top: 50px;\">



        {% partial 'site/sidebar_without_date' %}



      </div>
     
    </div>
</div>
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/reviews-detail.htm", "");
    }
}
