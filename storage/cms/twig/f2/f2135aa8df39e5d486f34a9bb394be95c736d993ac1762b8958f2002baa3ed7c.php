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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/reviews.htm */
class __TwigTemplate_bc0c364a7c59c92702dd3455518a6d05c2442d56c507f38b58817e9b6f1602b2 extends \Twig\Template
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
        $tags = array("for" => 35, "partial" => 84);
        $filters = array("resize" => 2, "media" => 2, "escape" => 46, "page" => 55);
        $functions = array("str_words" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'media', 'escape', 'page'],
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
        echo "<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image: url(";
        // line 2
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "reviewsbanner_reviewsBanner", [], "any", false, false, true, 2), 2, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span> <span
                    class=\"breadcrumb_last\"
                    aria-current=\"page\">Reviews</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">Reviews - Archive</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container\">
  <div class=\"row\">
<div class=\"col-sm-9\">

  <div id=\"archive_content\" class=\"\">



 ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "items", [], "any", false, false, true, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 36
            echo "    <div class=\"row\">

      <div class=\"s_review\">
        <div class=\"row\">
          <div class=\"col-sm-2\">
            <img alt=\"review\"
              src=\"";
            // line 42
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 42), "getPath", [], "any", false, false, true, 42), 42, $this->source), 120, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\"
              class=\"img-responsive lazyload\">
          </div>
          <div class=\"col-sm-10\">
            <h4 class=\"name\">";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</h4>
            <h5 class=\"work\">";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review_author_status", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</h5>

            <div class=\"excerpt\">
              <p></p>
              <p><em>";
            // line 51
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review", [], "any", false, false, true, 51), 51, $this->source), 20]);
            echo "</em></p>
              <p></p>
              <div class=\"more\">
            <a
              href=\"";
            // line 55
            echo ((twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 55)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 55), 55, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 55) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 55)])) : (""));
            echo "\">Read
              more
              ...</a>
              </div>
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
        echo "

    <div id=\"pagin_wrapper\">


    </div>
  </div>


</div>

    <div class=\"col-sm-3\">


      <div id=\"sidebar\" style=\"margin-top: 50px;\">



        ";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "


      </div>

    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 85,  175 => 84,  155 => 66,  138 => 55,  131 => 51,  124 => 47,  120 => 46,  113 => 42,  105 => 36,  101 => 35,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image: url({{ this.page.reviewsbanner_reviewsBanner | media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span> <span
                    class=\"breadcrumb_last\"
                    aria-current=\"page\">Reviews</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">Reviews - Archive</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container\">
  <div class=\"row\">
<div class=\"col-sm-9\">

  <div id=\"archive_content\" class=\"\">



 {% for record in Reviews.items %}
    <div class=\"row\">

      <div class=\"s_review\">
        <div class=\"row\">
          <div class=\"col-sm-2\">
            <img alt=\"review\"
              src=\"{{ record.preview_image.getPath | resize(120, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
              class=\"img-responsive lazyload\">
          </div>
          <div class=\"col-sm-10\">
            <h4 class=\"name\">{{record.name}}</h4>
            <h5 class=\"work\">{{record.review_author_status}}</h5>

            <div class=\"excerpt\">
              <p></p>
              <p><em>{{ str_words(record.review, 20) }}</em></p>
              <p></p>
              <div class=\"more\">
            <a
              href=\"{{Reviews.property('recordPage') ? Reviews.property('recordPage')|page({(Reviews.paramName('recordPageSlug')):(record.slug)})}}\">Read
              more
              ...</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
{% endfor %}


    <div id=\"pagin_wrapper\">


    </div>
  </div>


</div>

    <div class=\"col-sm-3\">


      <div id=\"sidebar\" style=\"margin-top: 50px;\">



        {% partial 'site/sidebar_without_date' %}



      </div>

    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/reviews.htm", "");
    }
}
