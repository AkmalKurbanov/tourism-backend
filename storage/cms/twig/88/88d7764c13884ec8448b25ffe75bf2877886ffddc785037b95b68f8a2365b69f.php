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
        $tags = array("partial" => 27);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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







        <h2 class=\"with_line\"><a href=\"https://kyrgyzstan-tourism.com/group-tours/\">GROUP TOURS 2021</a>
        </h2>

        <div class=\"tour_slider\" id=\"discounts_slider_wrapper\" data-count=\"3\">


          <button class='btn btn-default leftRs slider_arrow' data-slider=\"discounts_slider\"><i
              class=\"fa fa-chevron-left\"></i></button>


          <div class=\"resCarousel\" data-items=\"1,2,3,3\" data-slide=\"1\" id=\"discounts_slider\">

            <div class=\"resCarousel-inner\">






              ";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/group_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 98
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
        // line 138
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/type_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 139
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
        // line 171
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/popular_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 172
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
        // line 221
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tours/discount_tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 222
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
          <form action=\"/#wpcf7-f198-o1\" method=\"post\" class=\"wpcf7-form init\" novalidate=\"novalidate\">
            <div style=\"display: none;\">
              <input type=\"hidden\" name=\"_wpcf7\" value=\"198\" />
              <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\" />
              <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\" />
              <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f198-o1\" />
              <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\" />
              <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\" />
              <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\" value=\"\" />
            </div>
            <p><span class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
                  class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                  aria-invalid=\"false\" placeholder=\"Your name\" /></span></p>
            <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\" size=\"40\"
                  class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                  aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
            <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\" rows=\"10\"
                  class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                  placeholder=\"Your message\"></textarea></span></p>
            <p><input type=\"submit\" value=\"Send\" class=\"wpcf7-form-control wpcf7-submit cstm_button submit\" /></p>
            <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
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
        return array (  313 => 222,  309 => 221,  258 => 172,  254 => 171,  220 => 139,  216 => 138,  174 => 98,  170 => 97,  124 => 53,  120 => 52,  94 => 28,  90 => 27,  62 => 1,);
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
          <form action=\"/#wpcf7-f198-o1\" method=\"post\" class=\"wpcf7-form init\" novalidate=\"novalidate\">
            <div style=\"display: none;\">
              <input type=\"hidden\" name=\"_wpcf7\" value=\"198\" />
              <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\" />
              <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\" />
              <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f198-o1\" />
              <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\" />
              <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\" />
              <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\" value=\"\" />
            </div>
            <p><span class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
                  class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                  aria-invalid=\"false\" placeholder=\"Your name\" /></span></p>
            <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\" size=\"40\"
                  class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                  aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
            <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\" rows=\"10\"
                  class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                  placeholder=\"Your message\"></textarea></span></p>
            <p><input type=\"submit\" value=\"Send\" class=\"wpcf7-form-control wpcf7-submit cstm_button submit\" /></p>
            <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/home.htm", "");
    }
}
