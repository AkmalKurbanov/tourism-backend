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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/blog.htm */
class __TwigTemplate_15ee090b1f3fc79c9ad9e503b458303de3072f98415b15022ab842164dc87de8 extends \Twig\Template
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
        $tags = array("set" => 62, "for" => 67, "partial" => 120);
        $filters = array("resize" => 23, "media" => 23, "escape" => 45, "slice" => 77);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['resize', 'media', 'escape', 'slice'],
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
        echo "<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class=\"modal fade\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->





  <div id=\"top\" class=\"small_top lazy\"
    style=\"background-image:
    url(";
        // line 23
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "banner_blog_banner", [], "any", false, false, true, 23), 23, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">




    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span
                    class=\"breadcrumb_last\" aria-current=\"page\">Blog</span></span></span></p>
            <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"desc\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">
            <h1 id=\"single_tour_title\">
             ";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 45), "title", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9\">

        <div id=\"archive_content\" class=\"\">


          <div class=\"row\" style=\"display: flex; flex-wrap: wrap; justify-content: center;\">
            ";
        // line 62
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 62);
        // line 63
        echo "



            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 68
            echo "


            <div class=\"col-sm-6\">

              <div class=\"item item_tour with_border archive_item auto_height blog_item blog_item_new\">
                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\">
                  <span class=\"img_wrapper\">

                    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 77), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 78
                echo "                    <span class=\"img lazy\"
                      style=\"background-image: url(&quot;";
                // line 79
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 79), 79, $this->source), 410, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "&quot;);\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
                  </span>
                  <div class=\"desc\">
                    <h3>";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "</h3>
                    <p class=\"excerpt\">";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "</p>
                    <p class=\"r_more\">Read more &gt;</p>
                  </div>
                </a>
              </div>


            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        // line 120
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 121
        echo "
          </div>
        </div>
      </div>

    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 121,  224 => 120,  196 => 94,  181 => 85,  177 => 84,  172 => 81,  164 => 79,  161 => 78,  157 => 77,  151 => 74,  143 => 68,  139 => 67,  133 => 63,  131 => 62,  111 => 45,  86 => 23,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"
      data-src=\"https://www.googletagmanager.com/ns.html?id=GTM-5LMH84W\" class=\"lazyload\"
      src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class=\"modal fade\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->





  <div id=\"top\" class=\"small_top lazy\"
    style=\"background-image:
    url({{ this.page.banner_blog_banner|media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' }) }});\">




    <div class=\"breadcrumb_wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span
                    class=\"breadcrumb_last\" aria-current=\"page\">Blog</span></span></span></p>
            <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"desc\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">
            <h1 id=\"single_tour_title\">
             {{this.page.title}}
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9\">

        <div id=\"archive_content\" class=\"\">


          <div class=\"row\" style=\"display: flex; flex-wrap: wrap; justify-content: center;\">
            {% set posts = blogPosts.posts %}




            {% for post in posts %}



            <div class=\"col-sm-6\">

              <div class=\"item item_tour with_border archive_item auto_height blog_item blog_item_new\">
                <a href=\"{{ post.url }}\">
                  <span class=\"img_wrapper\">

                    {% for image in post.featured_images|slice(0,1) %}
                    <span class=\"img lazy\"
                      style=\"background-image: url(&quot;{{image.path | resize(410, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}&quot;);\"></span>
                    {% endfor %}

                  </span>
                  <div class=\"desc\">
                    <h3>{{ post.title }}</h3>
                    <p class=\"excerpt\">{{post.excerpt}}</p>
                    <p class=\"r_more\">Read more &gt;</p>
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
  </div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/blog.htm", "");
    }
}
