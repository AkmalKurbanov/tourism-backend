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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/photo-gallery.htm */
class __TwigTemplate_34a53a5c849c76f51dbb42db4a1a5ce076c5ceaa684dedcedeeb72b7ab5a8988 extends \Twig\Template
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
        $tags = array("for" => 38, "partial" => 82);
        $filters = array("resize" => 2, "media" => 2, "escape" => 10, "page" => 42);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'media', 'escape', 'page'],
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
    style=\"background-image: url(&quot;";
        // line 2
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "gallerybanner_galleryBanner", [], "any", false, false, true, 2), 2, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo "&quot;);\">


    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
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
            <h1 id=\"single_tour_title\">Galleries - Archive</h1>
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "items", [], "any", false, false, true, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 39
            echo "            <div class=\"col-sm-4\">

              <div class=\"item item_tour with_border archive_item auto_height blog_item gallery_item\">
                <a href=\"";
            // line 42
            echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 42)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 42), 42, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 42) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 42)])) : (""));
            echo "\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\"
                      style=\"background-image: url(";
            // line 45
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 45), "getPath", [], "any", false, false, true, 45), 45, $this->source), 265, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ");\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</h3>
                    <p class=\"r_more\">View more &gt;</p>
                  </div>
                </a>
              </div>


            </div>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "
          </div>
        </div>
      </div>

    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/photo-gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 83,  170 => 82,  145 => 59,  129 => 49,  122 => 45,  116 => 42,  111 => 39,  107 => 38,  76 => 10,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url(&quot;{{ this.page.gallerybanner_galleryBanner|media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}&quot;);\">


    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">{{this.page.title}}</span></span></span></p>
            <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"desc\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">
            <h1 id=\"single_tour_title\">Galleries - Archive</h1>
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

            {% for record in records.items %}
            <div class=\"col-sm-4\">

              <div class=\"item item_tour with_border archive_item auto_height blog_item gallery_item\">
                <a href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\"
                      style=\"background-image: url({{ record.preview_image.getPath | resize(265, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>{{record.name}}</h3>
                    <p class=\"r_more\">View more &gt;</p>
                  </div>
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
  </div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/photo-gallery.htm", "");
    }
}
