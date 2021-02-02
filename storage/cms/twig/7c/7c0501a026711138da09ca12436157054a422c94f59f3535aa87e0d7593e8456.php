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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/post.htm */
class __TwigTemplate_8e8c467279c36543e6d89b99bedd5c338df3660098c651ef570ca32fef049c0d extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 5, "partial" => 62);
        $filters = array("resize" => 7, "escape" => 15, "raw" => 41);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['resize', 'escape', 'raw'],
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "


<div id=\"top\" class=\"small_top lazy\" ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "  style=\"background-image:
  url(&quot;";
            // line 7
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 7), 7, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "&quot;);\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a
                    href=\"/blog/\">Blog</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
                    mountains.</span></span></span></span></p>
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
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
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
        <p><span style=\"font-weight: 400;\">

            ";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 41), 41, $this->source);
        echo "
            

          </span></p>
        <p><em>";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 45), "first_name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 45), "last_name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ".</em></p>
        <p><em>&nbsp;";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</em></p>
        
        <script src=\"https://yastatic.net/share2/share.js\"></script>
<div class=\"ya-share2\" data-curtain data-size=\"s\" data-shape=\"round\" data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp\"></div>
      </div>

      <div class=\"row\">

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
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 63,  156 => 62,  137 => 46,  131 => 45,  124 => 41,  107 => 27,  92 => 15,  84 => 9,  76 => 7,  73 => 6,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}



<div id=\"top\" class=\"small_top lazy\" {% for image in post.featured_images %}
  style=\"background-image:
  url(&quot;{{ image.path | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}&quot;);\">
  {% endfor %}
  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span><a
                    href=\"/blog/\">Blog</a> / <span class=\"breadcrumb_last\"
                    aria-current=\"page\">{{ post.title }}
                    mountains.</span></span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{ post.title }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-sm-9\">
      <div id=\"content\">
        <p><span style=\"font-weight: 400;\">

            {{post.content_html | raw }}
            

          </span></p>
        <p><em>{{ post.user.first_name}} {{ post.user.last_name}}.</em></p>
        <p><em>&nbsp;{{post.published_at}}</em></p>
        
        <script src=\"https://yastatic.net/share2/share.js\"></script>
<div class=\"ya-share2\" data-curtain data-size=\"s\" data-shape=\"round\" data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp\"></div>
      </div>

      <div class=\"row\">

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

</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/post.htm", "");
    }
}
