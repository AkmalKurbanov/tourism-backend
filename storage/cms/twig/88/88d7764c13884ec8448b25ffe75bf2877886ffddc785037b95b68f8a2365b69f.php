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

/* C:\work\xampp\htdocs\tourism/themes/tourism/pages/home.htm */
class __TwigTemplate_f7f3d08e74deb0f0953cc2af8de91ba287ddd936a2d76f03b796a62368566685 extends \Twig\Template
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
        $tags = array("partial" => 27, "if" => 90, "for" => 122);
        $filters = array("escape" => 74, "media" => 130, "page" => 135, "length" => 149, "raw" => 206);
        $functions = array("form_token" => 566);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if', 'for'],
                ['escape', 'media', 'page', 'length', 'raw'],
                ['form_token']
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
        echo "<script>
  \$(window).load(function () {
    \$(\"#wpcf7-f198-o2 input[type=submit]\").first().attr(\"onclick\",
      \"ga('send','event','НижняяФорма','send')\");
    \$(\"#wpcf7-f198-o1 input[type=submit]\").first().attr(\"onclick\",
      \"ga('send','event','Верхняяформа','send')\");
  });
</script>






<div id=\"front_slider\" class=\"carousel slide\" data-ride=\"carousel\">


  <ol class=\"carousel-indicators\">
    <li data-target=\"#front_slider\" data-slide-to=\"7\" class=\"\"></li>
    <li data-target=\"#front_slider\" data-slide-to=\"8\" class=\"\"></li>
  </ol>


  
  <div class=\"carousel-inner\">

    ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/main_slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
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
          
          
          ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/introduction_block"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "
         
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



 <div class=\"container ";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cssClass"] ?? null), 74, $this->source), "html", null, true);
        echo "\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Records</h1>

        </div>

        <div class=\"col-xs-12 col-sm-6\">

            <ul class=\"list-group\">
                
                <li class=\"list-group-item\">Records from list: <strong>";
        // line 88
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "getProperties", [], "any", false, false, true, 88), "areaSlug", [], "any", false, false, true, 88)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "getProperties", [], "any", false, false, true, 88), "areaSlug", [], "any", false, false, true, 88), "html", null, true))) : (print ("Not set")));
        echo "</strong></li>

                ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "categorySlug"], "method", false, false, true, 90)) {
            // line 91
            echo "                    <li class=\"list-group-item\">Records filtered by category: <strong>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "categorySlug"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "</strong></li>
                ";
        }
        // line 93
        echo "
                ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "areaSlug"], "method", false, false, true, 94)) {
            // line 95
            echo "                    <li class=\"list-group-item\">Records filtered by category used as: <strong>";
            echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "useMultiCategories"], "method", false, false, true, 95)) ? ("Secondary categories") : ("Main category"));
            echo "</strong></li>
                ";
        }
        // line 97
        echo "
                <li class=\"list-group-item\">Ordered by: <strong>";
        // line 98
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "getProperties", [], "any", false, false, true, 98), "orderBy", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "getProperties", [], "any", false, false, true, 98), "orderByDirection", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo ")</strong></li>

            </ul>

        </div>

        <div class=\"col-xs-12\">

            <h3>Records details</h3>

            <table class=\"table table-bordered table-striped table-hover\">

                <tr>
                
                    <th>Preview image</th>
                    <th>Name</th>
                    <th>List</th>
                    <th>Main category</th>
                    <th>Secondary categories</th>
                    <th>Tags</th>
                    <th>Attributes</th>
                
                </tr>

                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "items", [], "any", false, false, true, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 123
            echo "
                    <tr>

                        <th width=\"150\">
                            ";
            // line 127
            if (twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 127)) {
                // line 128
                echo "                                <img class=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 128), "getPath", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "\" width=\"100%\" />
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 129
$context["record"], "preview_image_media", [], "any", false, false, true, 129)) {
                // line 130
                echo "                                <img class=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "preview_image_media", [], "any", false, false, true, 130), 130, $this->source));
                echo "\" width=\"100%\" />
                            ";
            }
            // line 131
            echo "            
                        </th>

                        <td>
                            <a href=\"";
            // line 135
            echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 135)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 135), 135, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 135) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 135)])) : (""));
            echo "\">
                                ";
            // line 136
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
                            </a>
                        </td>

                        <td>
                            ";
            // line 141
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "area", [], "any", false, false, true, 141), "name", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 145
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, true, 145), "name", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 149
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "categories", [], "any", false, false, true, 149))) {
                // line 150
                echo "
                            <ul>

                                ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "categories", [], "any", false, false, true, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 154
                    echo "
                                    <li>";
                    // line 155
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                    echo "</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "
                            </ul>

                            ";
            }
            // line 162
            echo "                        </td>

                        <td>
                            ";
            // line 165
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tags", [], "any", false, false, true, 165))) {
                // line 166
                echo "
                            <ul>

                                ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "tags", [], "any", false, false, true, 169));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 170
                    echo "
                                    <li>";
                    // line 171
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                    echo "</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "
                            </ul>

                            ";
            }
            // line 178
            echo "                        </td>

                        <td>
                            ";
            // line 181
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "attributes", [], "any", false, false, true, 181))) {
                // line 182
                echo "
                            <ul>

                                ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "attributes", [], "any", false, false, true, 185));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 186
                    echo "
                                    <li>";
                    // line 187
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                    echo "</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "
                            </ul>

                            ";
            }
            // line 194
            echo "                        </td>

                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "
            </table>

            ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "allowLimit"], "method", false, false, true, 202)) {
            // line 203
            echo "            
                <div>

                    ";
            // line 206
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "items", [], "any", false, false, true, 206), "render", [], "any", false, false, true, 206), 206, $this->source);
            echo "
                
                </div>      
            
            ";
        }
        // line 211
        echo "
        </div>

    </div>

</div>



        <h2 class=\"with_line\"><a href=\"https://kyrgyzstan-tourism.com/group-tours/\">GROUP TOURS 2021</a>
        </h2>
         

        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"3\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,3\" data-slide=\"1\" id=\"discounts_slider\">

            <div class=\"resCarousel-inner\">






              ";
        // line 240
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/group_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 241
        echo "












            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow' data-slider=\"discounts_slider\"><i
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
        // line 281
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/type_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 282
        echo "







  </div>
</div>

<div class=\"lazy\" id=\"most_popular_tours\" style=\"\"
  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/themes/native/img/about_bg.jpg)\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line\">MOST POPULAR KYRGYZSTAN TOURS</h2>

        <div class=\"tour_slider\" id=\"most_popular_slider_wrapper\" data-count=\"21\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"most_popular_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,3\" data-slide=\"1\" id=\"most_popular_slider\">

            <div class=\"resCarousel-inner\">



              ";
        // line 314
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/popular_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 315
        echo "













            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow' data-slider=\"most_popular_slider\"><i
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

        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"5\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,4\" data-slide=\"1\" id=\"discounts_slider\">

            <div class=\"resCarousel-inner\">


              ";
        // line 364
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/discount_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 365
        echo "







            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>


<div id=\"destination\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line text-center\">DESTINATION</h2>

        <div class=\"row\">


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/kyrgyzstan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/world-nomad-games-kyrgyzstan1-9b925c7fee3b.jpg)\"></span>
              <h3>Kyrgyzstan</h3>
            </a>
          </div>


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/kazakhstan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/acj-2301-kazakhstan-tourist-attractions-1.jpg)\"></span>
              <h3>Kazakhstan</h3>
            </a>
          </div>


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/uzbekistan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/khiva-highlight.jpg)\"></span>
              <h3>Uzbekistan</h3>
            </a>
          </div>


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/tajikistan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Destin_Tadj.jpg)\"></span>
              <h3>Tajikistan</h3>
            </a>
          </div>


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


        <div class=\"latest_post\">
          <a href=\"https://kyrgyzstan-tourism.com/blog/wildlife-photography-expedition-to-the-tien-shan-mountains/\"
            class=\"img_link\">
            <span class=\"img lazy\" style=\"\"
              data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2020/10/Snowleopard-555x360.jpg)\"></span>
          </a>

        </div>
        <div class=\"excerpt latest_post_excerpt\">
          <h4><a
              href=\"https://kyrgyzstan-tourism.com/blog/wildlife-photography-expedition-to-the-tien-shan-mountains/\">Wildlife
              photography expedition in the Tien-Shan mountains.</a></h4>
          <div class=\"text-center\">
            <p>Summer 2020 has been nothing if not unusual. No one expected summer 2020 to be the most
              stressful and alarming [&hellip;]</p>
          </div>
          <div class=\"text-center\">
            <a href=\"https://kyrgyzstan-tourism.com/blog/wildlife-photography-expedition-to-the-tien-shan-mountains/\"
              class=\"cstm_button round lblue\">Read more <i class=\"fa fa-long-arrow-right\"></i></a>
          </div>
        </div>



      </div>

      <div class=\"col-sm-6\">
        <h2 class=\"with_line with_big_line text-center\">REVIEWS</h2>



        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\"
                data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/400969_101519606676593_902175698_n.jpg\"
                class=\"img-responsive lazyload\"
                src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                data-pagespeed-url-hash=\"31059146\"
                onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\"><noscript><img
                  src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20335%20335'%3E%3C/svg%3E\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/400969_101519606676593_902175698_n.jpg\"
                  alt=\"review\" class=\"img-responsive lazy\" data-pagespeed-url-hash=\"2394147287\"></noscript>
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">Marianne Carrière</h4>
              <h5 class=\"work\">LIVING IN THE NETHERLANDS, TRAVELER AND VOLUNTEER IN KYRGYZSTAN </h5>

              <div class=\"excerpt\">
                <p>
                  <p>“Kyrgyzstan is great country to discover! High mountains with endless trails
                    to explore by foot or on a horseback. Nothing [&hellip;]</p>
                </p>
                <div class=\"more\">
                  <a href=\"https://kyrgyzstan-tourism.com/reviews/marianne-carriere/\">Read more
                    ...</a>
                </div>
              </div>

            </div>
          </div>
        </div>


        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\" data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Antonio-Castro.jpg\"
                class=\"img-responsive lazyload\"
                src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                data-pagespeed-url-hash=\"31059146\"
                onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\"><noscript><img
                  src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20314'%3E%3C/svg%3E\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Antonio-Castro.jpg\" alt=\"review\"
                  class=\"img-responsive lazy\" data-pagespeed-url-hash=\"3215038259\"></noscript>
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">Antonio Castro</h4>
              <h5 class=\"work\">TRAVELER </h5>

              <div class=\"excerpt\">
                <p>
                  <p>The friends of Native Kyrgyzstan have been very helpful during my journey in
                    Kyrgyzstan. They have organised the visits to [&hellip;]</p>
                </p>
                <div class=\"more\">
                  <a href=\"https://kyrgyzstan-tourism.com/reviews/antonio-castro/\">Read more
                    ...</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
<div class=\"lazy\" id=\"contact_block\" style=\"\"
  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/themes/native/img/contact_bg.webp)\">
  <div class=\"shadow\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-sm-offset-4\">
        <h2 class=\"text-center with_line with_big_line\">Contact with us</h2>
        <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f198-o1\" lang=\"ru-RU\" dir=\"ltr\">
          <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
         
    <form data-request=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["HomPageForm"] ?? null), 564, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 566
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["HomPageForm"] ?? null), 568, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

   <div class=\"form-group\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\">
    </div>

    <div class=\"form-group\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\">
    </div>

 

    <div class=\"form-group\">
        <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

</form>

      
          
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  795 => 568,  790 => 566,  785 => 564,  584 => 365,  580 => 364,  529 => 315,  525 => 314,  491 => 282,  487 => 281,  445 => 241,  441 => 240,  410 => 211,  402 => 206,  397 => 203,  395 => 202,  390 => 199,  380 => 194,  374 => 190,  363 => 187,  360 => 186,  356 => 185,  351 => 182,  349 => 181,  344 => 178,  338 => 174,  329 => 171,  326 => 170,  322 => 169,  317 => 166,  315 => 165,  310 => 162,  304 => 158,  295 => 155,  292 => 154,  288 => 153,  283 => 150,  281 => 149,  274 => 145,  267 => 141,  259 => 136,  255 => 135,  249 => 131,  241 => 130,  239 => 129,  232 => 128,  230 => 127,  224 => 123,  220 => 122,  191 => 98,  188 => 97,  182 => 95,  180 => 94,  177 => 93,  171 => 91,  169 => 90,  164 => 88,  147 => 74,  124 => 53,  120 => 52,  94 => 28,  90 => 27,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
  \$(window).load(function () {
    \$(\"#wpcf7-f198-o2 input[type=submit]\").first().attr(\"onclick\",
      \"ga('send','event','НижняяФорма','send')\");
    \$(\"#wpcf7-f198-o1 input[type=submit]\").first().attr(\"onclick\",
      \"ga('send','event','Верхняяформа','send')\");
  });
</script>






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
          
          
          {% partial 'site/introduction_block' %}

         
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



 <div class=\"container {{ cssClass }}\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Records</h1>

        </div>

        <div class=\"col-xs-12 col-sm-6\">

            <ul class=\"list-group\">
                
                <li class=\"list-group-item\">Records from list: <strong>{{records.getProperties.areaSlug ? records.getProperties.areaSlug : 'Not set'}}</strong></li>

                {% if records.property('categorySlug') %}
                    <li class=\"list-group-item\">Records filtered by category: <strong>{{records.property('categorySlug')}}</strong></li>
                {% endif %}

                {% if records.property('areaSlug') %}
                    <li class=\"list-group-item\">Records filtered by category used as: <strong>{{records.property('useMultiCategories') ? 'Secondary categories' : 'Main category'}}</strong></li>
                {% endif %}

                <li class=\"list-group-item\">Ordered by: <strong>{{records.getProperties.orderBy}} ({{records.getProperties.orderByDirection}})</strong></li>

            </ul>

        </div>

        <div class=\"col-xs-12\">

            <h3>Records details</h3>

            <table class=\"table table-bordered table-striped table-hover\">

                <tr>
                
                    <th>Preview image</th>
                    <th>Name</th>
                    <th>List</th>
                    <th>Main category</th>
                    <th>Secondary categories</th>
                    <th>Tags</th>
                    <th>Attributes</th>
                
                </tr>

                {% for record in records.items %}

                    <tr>

                        <th width=\"150\">
                            {% if record.preview_image %}
                                <img class=\"thumbnail\" alt=\"{{ record.name }}\" src=\"{{ record.preview_image.getPath }}\" width=\"100%\" />
                            {% elseif record.preview_image_media %}
                                <img class=\"thumbnail\" alt=\"{{ record.name }}\" src=\"{{ record.preview_image_media|media }}\" width=\"100%\" />
                            {% endif %}            
                        </th>

                        <td>
                            <a href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\">
                                {{ record.name }}
                            </a>
                        </td>

                        <td>
                            {{ record.area.name }}
                        </td>

                        <td>
                            {{ record.category.name }}
                        </td>

                        <td>
                            {% if record.categories|length %}

                            <ul>

                                {% for category in record.categories %}

                                    <li>{{ category.name }}</li>

                                {% endfor %}

                            </ul>

                            {% endif %}
                        </td>

                        <td>
                            {% if record.tags|length %}

                            <ul>

                                {% for tag in record.tags %}

                                    <li>{{ tag.name }}</li>

                                {% endfor %}

                            </ul>

                            {% endif %}
                        </td>

                        <td>
                            {% if record.attributes|length %}

                            <ul>

                                {% for attribute in record.attributes %}

                                    <li>{{ attribute.name }}:{{ attribute.value }}</li>

                                {% endfor %}

                            </ul>

                            {% endif %}
                        </td>

                    </tr>

                {% endfor %}

            </table>

            {% if records.property('allowLimit') %}
            
                <div>

                    {{ records.items.render|raw }}
                
                </div>      
            
            {% endif %}

        </div>

    </div>

</div>



        <h2 class=\"with_line\"><a href=\"https://kyrgyzstan-tourism.com/group-tours/\">GROUP TOURS 2021</a>
        </h2>
         

        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"3\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,3\" data-slide=\"1\" id=\"discounts_slider\">

            <div class=\"resCarousel-inner\">






              {% partial 'site/tours/group_tours' %}













            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow' data-slider=\"discounts_slider\"><i
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



    {% partial 'site/tours/type_tours' %}








  </div>
</div>

<div class=\"lazy\" id=\"most_popular_tours\" style=\"\"
  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/themes/native/img/about_bg.jpg)\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line\">MOST POPULAR KYRGYZSTAN TOURS</h2>

        <div class=\"tour_slider\" id=\"most_popular_slider_wrapper\" data-count=\"21\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"most_popular_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,3\" data-slide=\"1\" id=\"most_popular_slider\">

            <div class=\"resCarousel-inner\">



              {% partial 'site/tours/popular_tours' %}














            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow' data-slider=\"most_popular_slider\"><i
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

        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"5\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,4\" data-slide=\"1\" id=\"discounts_slider\">

            <div class=\"resCarousel-inner\">


              {% partial 'site/tours/discount_tours' %}








            </div>

          </div>


          <button class='btn btn-default rightRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-right\"></i></button>


        </div>

      </div>
    </div>
  </div>
</div>


<div id=\"destination\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">

        <h2 class=\"with_line text-center\">DESTINATION</h2>

        <div class=\"row\">


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/kyrgyzstan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/world-nomad-games-kyrgyzstan1-9b925c7fee3b.jpg)\"></span>
              <h3>Kyrgyzstan</h3>
            </a>
          </div>


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/kazakhstan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/acj-2301-kazakhstan-tourist-attractions-1.jpg)\"></span>
              <h3>Kazakhstan</h3>
            </a>
          </div>


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/uzbekistan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/khiva-highlight.jpg)\"></span>
              <h3>Uzbekistan</h3>
            </a>
          </div>


          <div class=\"col-sm-3\">
            <a href=\"https://kyrgyzstan-tourism.com/tour/destination/tajikistan/\" class=\"s_destination\">
              <span class=\"img lazy\" style=\"\"
                data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Destin_Tadj.jpg)\"></span>
              <h3>Tajikistan</h3>
            </a>
          </div>


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


        <div class=\"latest_post\">
          <a href=\"https://kyrgyzstan-tourism.com/blog/wildlife-photography-expedition-to-the-tien-shan-mountains/\"
            class=\"img_link\">
            <span class=\"img lazy\" style=\"\"
              data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2020/10/Snowleopard-555x360.jpg)\"></span>
          </a>

        </div>
        <div class=\"excerpt latest_post_excerpt\">
          <h4><a
              href=\"https://kyrgyzstan-tourism.com/blog/wildlife-photography-expedition-to-the-tien-shan-mountains/\">Wildlife
              photography expedition in the Tien-Shan mountains.</a></h4>
          <div class=\"text-center\">
            <p>Summer 2020 has been nothing if not unusual. No one expected summer 2020 to be the most
              stressful and alarming [&hellip;]</p>
          </div>
          <div class=\"text-center\">
            <a href=\"https://kyrgyzstan-tourism.com/blog/wildlife-photography-expedition-to-the-tien-shan-mountains/\"
              class=\"cstm_button round lblue\">Read more <i class=\"fa fa-long-arrow-right\"></i></a>
          </div>
        </div>



      </div>

      <div class=\"col-sm-6\">
        <h2 class=\"with_line with_big_line text-center\">REVIEWS</h2>



        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\"
                data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/400969_101519606676593_902175698_n.jpg\"
                class=\"img-responsive lazyload\"
                src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                data-pagespeed-url-hash=\"31059146\"
                onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\"><noscript><img
                  src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20335%20335'%3E%3C/svg%3E\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/400969_101519606676593_902175698_n.jpg\"
                  alt=\"review\" class=\"img-responsive lazy\" data-pagespeed-url-hash=\"2394147287\"></noscript>
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">Marianne Carrière</h4>
              <h5 class=\"work\">LIVING IN THE NETHERLANDS, TRAVELER AND VOLUNTEER IN KYRGYZSTAN </h5>

              <div class=\"excerpt\">
                <p>
                  <p>“Kyrgyzstan is great country to discover! High mountains with endless trails
                    to explore by foot or on a horseback. Nothing [&hellip;]</p>
                </p>
                <div class=\"more\">
                  <a href=\"https://kyrgyzstan-tourism.com/reviews/marianne-carriere/\">Read more
                    ...</a>
                </div>
              </div>

            </div>
          </div>
        </div>


        <div class=\"s_review\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <img alt=\"review\" data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Antonio-Castro.jpg\"
                class=\"img-responsive lazyload\"
                src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                data-pagespeed-url-hash=\"31059146\"
                onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\"><noscript><img
                  src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20314'%3E%3C/svg%3E\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Antonio-Castro.jpg\" alt=\"review\"
                  class=\"img-responsive lazy\" data-pagespeed-url-hash=\"3215038259\"></noscript>
            </div>
            <div class=\"col-sm-9\">
              <h4 class=\"name\">Antonio Castro</h4>
              <h5 class=\"work\">TRAVELER </h5>

              <div class=\"excerpt\">
                <p>
                  <p>The friends of Native Kyrgyzstan have been very helpful during my journey in
                    Kyrgyzstan. They have organised the visits to [&hellip;]</p>
                </p>
                <div class=\"more\">
                  <a href=\"https://kyrgyzstan-tourism.com/reviews/antonio-castro/\">Read more
                    ...</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
<div class=\"lazy\" id=\"contact_block\" style=\"\"
  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/themes/native/img/contact_bg.webp)\">
  <div class=\"shadow\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-sm-offset-4\">
        <h2 class=\"text-center with_line with_big_line\">Contact with us</h2>
        <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f198-o1\" lang=\"ru-RU\" dir=\"ltr\">
          <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
         
    <form data-request=\"{{ HomPageForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ HomPageForm }}_forms_flash\"></div>

   <div class=\"form-group\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\">
    </div>

    <div class=\"form-group\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\">
    </div>

 

    <div class=\"form-group\">
        <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

</form>

      
          
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/home.htm", "");
    }
}
