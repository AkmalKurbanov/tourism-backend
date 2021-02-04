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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/home.htm */
class __TwigTemplate_40e38ae4c2a19d43e43f620bcb7191afb393241d8038bb651c90091d05c7ee9b extends \Twig\Template
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
        $tags = array("component" => 1, "partial" => 16, "set" => 255, "for" => 256);
        $filters = array("escape" => 41, "raw" => 45, "resize" => 161, "media" => 161, "slice" => 259, "page" => 301);
        $functions = array("str_words" => 297, "form_token" => 344);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial', 'set', 'for'],
                ['escape', 'raw', 'resize', 'media', 'slice', 'page'],
                ['str_words', 'form_token']
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("records"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "

<div id=\"front_slider\" class=\"carousel slide\" data-ride=\"carousel\">


  <ol class=\"carousel-indicators\">
    <li data-target=\"#front_slider\" data-slide-to=\"7\" class=\"\"></li>
    <li data-target=\"#front_slider\" data-slide-to=\"8\" class=\"\"></li>
  </ol>



  <div class=\"carousel-inner\">

    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/main_slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
  </div>

  <a class=\"left carousel-control hidden-xs\" href=\"#front_slider\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
  </a>
  <a class=\"right carousel-control hidden-xs\" href=\"#front_slider\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
  </a>

</div>
<div id=\"about\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-12\">





        <div class=\"hm-about\">

          <p>
            <img style=\"float: left; margin-right: 35px; margin-top: 30px; max-width: 300px; width: 100%;\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 41), "introduction_logo", [], "any", false, false, true, 41), "path", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\"
              alt=\"\">
          </p>

          <p>";
        // line 45
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 45), "introduction_text", [], "any", false, false, true, 45), 45, $this->source);
        echo "</p>
          <style>
            .hm-about {
              background: #fff;
              padding: 50px;
              border-bottom: 4px solid #a32330;
              margin-bottom: 30px
            }

            .main-h {
              font-size: 50px !important
            }

            .sub-h {
              font-weight: bold;
              font-size: 22px;
              margin-top: -6px;
              color: #fff;
              text-shadow: 0 2px 2px rgba(0, 0, 0, .3)
            }
          </style>
        </div>
        <p>&nbsp;</p>
      </div>



    </div>

  </div>
</div>
</div>

<div id=\"group_tours\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">






        <h2 class=\"with_line\">GROUP TOURS 2021</h2>


        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"3\">


          <button class='btn btn-default leftRs slider_arrow'><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel swiper-container groupTours-js\">

            <div class=\"swiper-wrapper\">






              ";
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/group_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 108
        echo "












            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow'><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h2 class=\"with_line text-center\">TOUR TYPE</h2>
    </div>
  </div>
  <div class=\"row\">



    ";
        // line 148
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/type_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 149
        echo "







  </div>
</div>

<div class=\"lazy\" id=\"most_popular_tours\"
  style=\"background-image: url(";
        // line 161
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 161), "populartoursbanner_popularToursBanner", [], "any", false, false, true, 161), 161, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line\">MOST POPULAR KYRGYZSTAN TOURS</h2>

        <div class=\"tour_slider\" id=\"most_popular_slider_wrapper\">


          <button class='btn btn-default leftRs slider_arrow sliderLeftArrow'><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel swiper-container slider-js\">

            <div class=\"swiper-wrapper\">



              ";
        // line 181
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/popular_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 182
        echo "




            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow sliderRightArrow' data-slider=\"most_popular_slider\"><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>

<div id=\"discounts\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line\">DEALS AND DISCOUNTS</h2>

        <div class=\"tour_slider\">


          <button class='btn btn-default leftRs slider_arrow discountsLeftArrow'><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel swiper-container discounts-js\">

            <div class=\"swiper-wrapper\">


              ";
        // line 222
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/discount_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 223
        echo "







            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow discountsRightArrow'><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>


<div id=\"blog_and_review\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-6\">
        <h2 class=\"with_line with_big_line text-center\">LATEST POST</h2>

        ";
        // line 255
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 255);
        // line 256
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 257
            echo "        <div class=\"latest_post\">
          <a href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
            echo "\" class=\"img_link\">
            ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 259), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 260
                echo "            <span class=\"img lazy\"
              style=\"background-image: url('";
                // line 261
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 261), 261, $this->source), 555, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "');\"></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "          </a>

        </div>
        <div class=\"excerpt latest_post_excerpt\">
          <h4><a href=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
            echo "</a></h4>
          <div class=\"text-center\">
            <p>";
            // line 269
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "</p>
          </div>
          <div class=\"text-center\">
            <a href=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "\" class=\"cstm_button round lblue\">Read more <i class=\"fas fa-arrow-right\"></i></a>
          </div>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "
      </div>

      <div class=\"col-sm-6\">
        <h2 class=\"with_line with_big_line text-center\">REVIEWS</h2>

        ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "items", [], "any", false, false, true, 283));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 284
            echo "        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\"
                src=\"";
            // line 288
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 288), "getPath", [], "any", false, false, true, 288), 288, $this->source), 104, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\"
                class=\"img-responsive lazyload\">
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">";
            // line 292
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
            echo "</h4>
              <h5 class=\"work\">";
            // line 293
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review_author_status", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
            echo " </h5>

              <div class=\"excerpt\">
                <p>
                  <p><em>";
            // line 297
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "review", [], "any", false, false, true, 297), 297, $this->source), 20]);
            echo "</em></p>
                </p>
                <div class=\"more\">
                  <a
                    href=\"";
            // line 301
            echo ((twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 301)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 301), 301, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Reviews"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 301) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 301)])) : (""));
            echo "\">Read
                    more
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
        // line 311
        echo "
      </div>

    </div>
  </div>
</div>


<div class=\"partners\" style=\"padding: 30px 0;\">

<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<h2 class=\"with_line\" style=\"text-align: center;\">Наши партнеры</h2>
</div>
</div>
</div>

</div>


<div class=\"lazy\" id=\"contact_block\"
  style=\"background-image: url(";
        // line 333
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 333), "contactsbanner_contactsBanner", [], "any", false, false, true, 333), 333, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ")\">
  <div class=\"shadow\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-sm-offset-4\">
        <h2 class=\"text-center with_line with_big_line\">Contact with us</h2>

        <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>

        <form data-request=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 342, $this->source), "html", null, true);
        echo "::onFormSubmit\">

          ";
        // line 344
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

          <div id=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 346, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

          <div class=\"form-group\">
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" require>
          </div>

          <div class=\"form-group\">
            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" require>
          </div>



          <div class=\"form-group\">
            <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"
              require></textarea>
          </div>

          <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

        </form>



      </div>
    </div>
  </div>
</div>
<!-- </div> -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 346,  514 => 344,  509 => 342,  497 => 333,  473 => 311,  457 => 301,  450 => 297,  443 => 293,  439 => 292,  432 => 288,  426 => 284,  422 => 283,  414 => 277,  403 => 272,  397 => 269,  390 => 267,  384 => 263,  376 => 261,  373 => 260,  369 => 259,  365 => 258,  362 => 257,  357 => 256,  355 => 255,  321 => 223,  317 => 222,  275 => 182,  271 => 181,  248 => 161,  234 => 149,  230 => 148,  188 => 108,  184 => 107,  119 => 45,  112 => 41,  86 => 17,  82 => 16,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'records' %}


<div id=\"front_slider\" class=\"carousel slide\" data-ride=\"carousel\">


  <ol class=\"carousel-indicators\">
    <li data-target=\"#front_slider\" data-slide-to=\"7\" class=\"\"></li>
    <li data-target=\"#front_slider\" data-slide-to=\"8\" class=\"\"></li>
  </ol>



  <div class=\"carousel-inner\">

    {% partial 'site/main_slider' %}

  </div>

  <a class=\"left carousel-control hidden-xs\" href=\"#front_slider\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
  </a>
  <a class=\"right carousel-control hidden-xs\" href=\"#front_slider\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
  </a>

</div>
<div id=\"about\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-12\">





        <div class=\"hm-about\">

          <p>
            <img style=\"float: left; margin-right: 35px; margin-top: 30px; max-width: 300px; width: 100%;\" src=\"{{this.theme.introduction_logo.path}}\"
              alt=\"\">
          </p>

          <p>{{this.theme.introduction_text | raw}}</p>
          <style>
            .hm-about {
              background: #fff;
              padding: 50px;
              border-bottom: 4px solid #a32330;
              margin-bottom: 30px
            }

            .main-h {
              font-size: 50px !important
            }

            .sub-h {
              font-weight: bold;
              font-size: 22px;
              margin-top: -6px;
              color: #fff;
              text-shadow: 0 2px 2px rgba(0, 0, 0, .3)
            }
          </style>
        </div>
        <p>&nbsp;</p>
      </div>



    </div>

  </div>
</div>
</div>

<div id=\"group_tours\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">






        <h2 class=\"with_line\">GROUP TOURS 2021</h2>


        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"3\">


          <button class='btn btn-default leftRs slider_arrow'><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel swiper-container groupTours-js\">

            <div class=\"swiper-wrapper\">






              {% partial 'site/group_tours' %}













            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow'><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h2 class=\"with_line text-center\">TOUR TYPE</h2>
    </div>
  </div>
  <div class=\"row\">



    {% partial 'site/type_tours' %}








  </div>
</div>

<div class=\"lazy\" id=\"most_popular_tours\"
  style=\"background-image: url({{ this.page.populartoursbanner_popularToursBanner |media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line\">MOST POPULAR KYRGYZSTAN TOURS</h2>

        <div class=\"tour_slider\" id=\"most_popular_slider_wrapper\">


          <button class='btn btn-default leftRs slider_arrow sliderLeftArrow'><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel swiper-container slider-js\">

            <div class=\"swiper-wrapper\">



              {% partial 'site/popular_tours' %}





            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow sliderRightArrow' data-slider=\"most_popular_slider\"><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>

<div id=\"discounts\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line\">DEALS AND DISCOUNTS</h2>

        <div class=\"tour_slider\">


          <button class='btn btn-default leftRs slider_arrow discountsLeftArrow'><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel swiper-container discounts-js\">

            <div class=\"swiper-wrapper\">


              {% partial 'site/discount_tours' %}








            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow discountsRightArrow'><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>


<div id=\"blog_and_review\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-6\">
        <h2 class=\"with_line with_big_line text-center\">LATEST POST</h2>

        {% set posts = blogPosts.posts %}
        {% for post in posts %}
        <div class=\"latest_post\">
          <a href=\"{{ post.url }}\" class=\"img_link\">
            {% for image in post.featured_images|slice(0,1) %}
            <span class=\"img lazy\"
              style=\"background-image: url('{{image.path | resize(555, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}');\"></span>
            {% endfor %}
          </a>

        </div>
        <div class=\"excerpt latest_post_excerpt\">
          <h4><a href=\"{{ post.url }}\">{{ post.title }}</a></h4>
          <div class=\"text-center\">
            <p>{{post.excerpt}}</p>
          </div>
          <div class=\"text-center\">
            <a href=\"{{ post.url }}\" class=\"cstm_button round lblue\">Read more <i class=\"fas fa-arrow-right\"></i></a>
          </div>
        </div>

        {% endfor %}

      </div>

      <div class=\"col-sm-6\">
        <h2 class=\"with_line with_big_line text-center\">REVIEWS</h2>

        {% for record in Reviews.items %}
        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\"
                src=\"{{ record.preview_image.getPath | resize(104, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                class=\"img-responsive lazyload\">
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">{{record.name}}</h4>
              <h5 class=\"work\">{{record.review_author_status}} </h5>

              <div class=\"excerpt\">
                <p>
                  <p><em>{{ str_words(record.review, 20) }}</em></p>
                </p>
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
        {% endfor %}

      </div>

    </div>
  </div>
</div>


<div class=\"partners\" style=\"padding: 30px 0;\">

<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<h2 class=\"with_line\" style=\"text-align: center;\">Наши партнеры</h2>
</div>
</div>
</div>

</div>


<div class=\"lazy\" id=\"contact_block\"
  style=\"background-image: url({{ this.page.contactsbanner_contactsBanner |media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\">
  <div class=\"shadow\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-sm-offset-4\">
        <h2 class=\"text-center with_line with_big_line\">Contact with us</h2>

        <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>

        <form data-request=\"{{ genericForm }}::onFormSubmit\">

          {{ form_token() }}

          <div id=\"{{ genericForm }}_forms_flash\"></div>

          <div class=\"form-group\">
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" require>
          </div>

          <div class=\"form-group\">
            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" require>
          </div>



          <div class=\"form-group\">
            <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"
              require></textarea>
          </div>

          <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

        </form>



      </div>
    </div>
  </div>
</div>
<!-- </div> -->", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/home.htm", "");
    }
}
