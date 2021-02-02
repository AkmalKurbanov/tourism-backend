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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/sights.htm */
class __TwigTemplate_0ca1ecddf7938a167c477caa76f8856983c8c390f6b9bb34c0b3d21ad1cc8d83 extends \Twig\Template
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
        $tags = array("component" => 1, "for" => 35, "partial" => 72);
        $filters = array("resize" => 4, "media" => 4, "page" => 40, "escape" => 48);
        $functions = array("str_words" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for', 'partial'],
                ['resize', 'media', 'page', 'escape'],
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
        echo "<!-- ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " -->

<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image: url(";
        // line 4
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "sightsbanner_sightsBanner", [], "any", false, false, true, 4), 4, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span class=\"breadcrumb_last\"
                  aria-current=\"page\">Sights</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">Sights - Archive</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"archive_content\">
      <div class=\"row\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "items", [], "any", false, false, true, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 36
            echo "        <div class=\"col-sm-4\">

          <div class=\"item item_tour with_border archive_item auto_height blog_item\">
            <a
              href=\"";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 40)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 40), 40, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 40) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 40)])) : (""));
            echo "\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\"
                  style=\"background-image:
                  url(";
            // line 44
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 44), "getPath", [], "any", false, false, true, 44), 44, $this->source), 330, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ");\"></span>

              </span>
              <div class=\"desc\">
                <h3>";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</h3>
                <p class=\"excerpt\"></p>
                <p>";
            // line 50
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "sights_editor", [], "any", false, false, true, 50), 50, $this->source), 20]);
            echo "</p>
                <p></p>
                <p class=\"r_more\">Read more &gt;</p>
              </div>
            </a>
          </div>


        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
      </div>

    </div>


    <div class=\"col-sm-3\">
      <div class=\"sidebar_wrapper\">

        <div id=\"sidebar\">


          ";
        // line 72
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "
        </div>
      </div>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/sights.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 73,  164 => 72,  150 => 60,  134 => 50,  129 => 48,  122 => 44,  115 => 40,  109 => 36,  105 => 35,  71 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- {% component 'siteSearchInclude' %} -->

<div id=\"top\" class=\"small_top lazy\"
  style=\"background-image: url({{ this.page.sightsbanner_sightsBanner | media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' }) }});\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span class=\"breadcrumb_last\"
                  aria-current=\"page\">Sights</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">Sights - Archive</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"archive_content\">
      <div class=\"row\">
        {% for record in Sights.items %}
        <div class=\"col-sm-4\">

          <div class=\"item item_tour with_border archive_item auto_height blog_item\">
            <a
              href=\"{{Sights.property('recordPage') ? Sights.property('recordPage')|page({(Sights.paramName('recordPageSlug')):(record.slug)})}}\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\"
                  style=\"background-image:
                  url({{ record.preview_image.getPath | resize(330, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\"></span>

              </span>
              <div class=\"desc\">
                <h3>{{record.name}}</h3>
                <p class=\"excerpt\"></p>
                <p>{{ str_words(record.sights_editor, 20) }}</p>
                <p></p>
                <p class=\"r_more\">Read more &gt;</p>
              </div>
            </a>
          </div>


        </div>
        {% endfor %}
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
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/sights.htm", "");
    }
}
