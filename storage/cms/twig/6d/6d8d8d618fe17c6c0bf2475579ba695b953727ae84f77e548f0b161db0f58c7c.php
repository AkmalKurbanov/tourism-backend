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
        $tags = array("set" => 82, "for" => 87, "partial" => 139);
        $filters = array("escape" => 65, "slice" => 97);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['escape', 'slice'],
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

  <div class=\"modal fade in\" id=\"modal_search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div id=\"search_form\">
          <form role=\"search\" method=\"get\" id=\"searchform\" action=\"https://kyrgyzstan-tourism.com/\">
            <input type=\"text\" value=\"\" name=\"s\" id=\"s\">
            <button type=\"submit\" id=\"search_button\"><i class=\"fa fa-search\"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>




  

  <div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url(&quot;https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg&quot;);\"
    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\" data-was-processed=\"true\">




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
        // line 65
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
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
        // line 82
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 82);
        // line 83
        echo "



            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 88
            echo "


            <div class=\"col-sm-6\">

              <div class=\"item item_tour with_border archive_item auto_height blog_item blog_item_new\">
                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "\">
                  <span class=\"img_wrapper\">

                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 97), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 98
                echo "                    <span class=\"img lazy\" style=\"background-image: url(&quot;";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "&quot;);\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
                  </span>
                  <div class=\"desc\">
                    <h3>";
            // line 103
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "</h3>
                    <p class=\"excerpt\">";
            // line 104
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
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
        // line 113
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
        // line 139
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_without_date"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 140
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
        return array (  243 => 140,  239 => 139,  211 => 113,  196 => 104,  192 => 103,  187 => 100,  178 => 98,  174 => 97,  168 => 94,  160 => 88,  156 => 87,  150 => 83,  148 => 82,  128 => 65,  62 => 1,);
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

  <div class=\"modal fade in\" id=\"modal_search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div id=\"search_form\">
          <form role=\"search\" method=\"get\" id=\"searchform\" action=\"https://kyrgyzstan-tourism.com/\">
            <input type=\"text\" value=\"\" name=\"s\" id=\"s\">
            <button type=\"submit\" id=\"search_button\"><i class=\"fa fa-search\"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>




  <script>
    \$(window).load(function () {
      \$(\"#wpcf7-f198-o2 input[type=submit]\").first().attr(\"onclick\", \"ga('send','event','НижняяФорма','send')\");
      \$(\"#wpcf7-f198-o1 input[type=submit]\").first().attr(\"onclick\", \"ga('send','event','Верхняяформа','send')\");
    });
  </script>

  <div id=\"top\" class=\"small_top lazy\"
    style=\"background-image: url(&quot;https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg&quot;);\"
    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg)\" data-was-processed=\"true\">




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
                    <span class=\"img lazy\" style=\"background-image: url(&quot;{{image.path}}&quot;);\"></span>
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
