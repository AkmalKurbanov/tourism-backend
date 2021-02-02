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
        $filters = array("resize" => 1, "media" => 1, "escape" => 7, "raw" => 32, "page" => 57);
        $functions = array("str_words" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'media', 'escape', 'raw', 'page'],
                ['str_words']
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
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "reviewsdetailbanner_ReviewsDetailBanner", [], "any", false, false, true, 1), 1, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">

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

                                
                        <p>
                            ";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReviewsDetail"] ?? null), "recordDetail", [], "any", false, false, true, 32), "review", [], "any", false, false, true, 32), 32, $this->source);
        echo "
                        </p>

                


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
              <img alt=\"review\"
                src=\"";
            // line 44
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 44), "getPath", [], "any", false, false, true, 44), 44, $this->source), 190, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\"
               
                class=\"img-responsive lazyload\">
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</h4>
              <h5 class=\"work\">";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review_author_status", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo " </h5>

              <div class=\"excerpt\">
                <p>
                  <p>";
            // line 54
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review", [], "any", false, false, true, 54), 54, $this->source), 20]);
            echo "</p>
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
        return array (  180 => 75,  176 => 74,  166 => 66,  151 => 57,  145 => 54,  138 => 50,  134 => 49,  126 => 44,  120 => 40,  116 => 39,  106 => 32,  99 => 28,  86 => 18,  72 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\" style=\"background-image: url({{ this.page.reviewsdetailbanner_ReviewsDetailBanner | media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">

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

                                
                        <p>
                            {{ ReviewsDetail.recordDetail.review | raw}}
                        </p>

                


            </div>
             {% for record in Reviews.items %}
        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\"
                src=\"{{ record.preview_image.getPath | resize(190, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
               
                class=\"img-responsive lazyload\">
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">{{record.name}}</h4>
              <h5 class=\"work\">{{record.review_author_status}} </h5>

              <div class=\"excerpt\">
                <p>
                  <p>{{ str_words(record.review, 20) }}</p>
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
