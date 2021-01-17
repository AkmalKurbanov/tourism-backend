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
        $tags = array("set" => 18, "for" => 26);
        $filters = array("escape" => 28, "page" => 127);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'page'],
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
        // line 18
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["HeroSLider"] ?? null), "records", [], "any", false, false, true, 18);
        // line 19
        echo "    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["HeroSLider"] ?? null), "displayColumn", [], "any", false, false, true, 19);
        // line 20
        echo "    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["HeroSLider"] ?? null), "noRecordsMessage", [], "any", false, false, true, 20);
        // line 21
        echo "    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["HeroSLider"] ?? null), "detailsPage", [], "any", false, false, true, 21);
        // line 22
        echo "    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["HeroSLider"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 22);
        // line 23
        echo "    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["HeroSLider"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 23);
        // line 24
        echo "

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 27
            echo "
    <div class=\"item lazy\" style=\"\" data-bg=\"url(";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "slider_item_img", [], "any", false, false, true, 28), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ")\">
      <div class=\"carousel-caption\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
              <h2>";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</h2>
              <h3>";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "sub_title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</h3>
              <div class=\"button_wrapper\">
                <a href=\"https://kyrgyzstan-tourism.com/kyrgyzstan/\" class=\"cstm_button\"><i class=\"fa fa-eye\"></i>
                  view tours </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 46, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "


    <script>
      \$('#front_slider .item.lazy').first().addClass('active');
    </script>

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
          <p><img style=\"float: left; margin-right: 35px; margin-top: 30px;\" alt=\"logo\"
              data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo.png\"
              class=\"img-responsive logo lazyload\"
              src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
              data-pagespeed-url-hash=\"31059146\"
              onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\" /><noscript><img
                class=\"img-responsive logo lazy\" style=\"float: left; margin-right: 35px; margin-top: 30px;\"
                src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E\"
                data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo.png\" alt=\"logo\"
                data-pagespeed-url-hash=\"2295055879\" /></noscript></p>
          <div class=\"text\">
            <h1 style=\"text-align: left;\">Kyrgyzstan &#8211; Land of adventure!</h1>
            <p>“Get unmatched travel tour information from the people who know the land first-hand. We
              honor our heritage and traditions by making our tour products inspirational and through
              our hospitality. We dream of a world that helps people and the environment reach their
              fullest potential.” &#8220;Kyrgyzstan Tourism&#8221;.</p>
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
        // line 118
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "records", [], "any", false, false, true, 118);
        // line 119
        echo "              ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "displayColumn", [], "any", false, false, true, 119);
        // line 120
        echo "              ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "noRecordsMessage", [], "any", false, false, true, 120);
        // line 121
        echo "              ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "detailsPage", [], "any", false, false, true, 121);
        // line 122
        echo "              ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 122);
        // line 123
        echo "              ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 123);
        // line 124
        echo "
              ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 126
            echo "              <div class=\"item item_tour with_border  \">
                <a href=\"";
            // line 127
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 127, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 127)]);
            echo "\">

                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\" data-bg=\"url(";
            // line 130
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, true, 130), "path", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo ")\"></span>

                    <span class=\"price-round group_price\">
                      <span class=\"inner\">\$";
            // line 133
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo " US</span>
                    </span>

                  </span>
                  <div class=\"desc\">
                    <h3>";
            // line 138
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "</h3>
                    <p class=\"excerpt\">";
            // line 139
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "annotation", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo " </p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 141
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "duration", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo " days</p>
                </a>
              </div>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "              <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 145, $this->source), "html", null, true);
            echo "</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
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
        // line 180
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["TourType"] ?? null), "records", [], "any", false, false, true, 180);
        // line 181
        echo "    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["TourType"] ?? null), "displayColumn", [], "any", false, false, true, 181);
        // line 182
        echo "    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["TourType"] ?? null), "noRecordsMessage", [], "any", false, false, true, 182);
        // line 183
        echo "    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["TourType"] ?? null), "detailsPage", [], "any", false, false, true, 183);
        // line 184
        echo "    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["TourType"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 184);
        // line 185
        echo "    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["TourType"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 185);
        // line 186
        echo "

    ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 189
            echo "

    <div class=\"col-sm-4\">
      <div class=\"item item_tour with_border auto_height tour_type\">
        <a href=\"";
            // line 193
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 193, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 193)]);
            echo "\">
          <span class=\"img_wrapper\">
            <span class=\"img lazy\" style=\"\"
              data-bg=\"url(";
            // line 196
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, true, 196), "path", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            echo ")\"></span>
          </span>
          <div class=\"desc\">
            <h3>";
            // line 199
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "</h3>
          </div>
        </a>
      </div>
    </div>


    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 207
            echo "    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 207, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
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



              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/2-days-horse-trek/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/n1-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$100</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Lake Kol-Ukok -nomad’s life</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 2 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/silk-road-tour-kyrgyzstan-uzbekistan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Bukhara-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Silk-Road Tour: Kyrgyzstan &#038; Uzbekistan</h3>
                    <p class=\"excerpt\">Kyrgyzstan & Uzbekistan</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 15 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/horse-riding-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Kirgizië-1447-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Nomadic Horse Trek for beginners.</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/lake-hopping-issyk-kul-and-song-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SunsetSKyurt-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Lake hopping: Issyk-Kul and Song-Kul</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a
                  href=\"https://kyrgyzstan-tourism.com/tours/travelling-from-kichik-alay-to-pamir-alay-through-jiptik-pass/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/HikerLeninPeak-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Travelling from Kichik-Alay to Pamir-Alay.</h3>
                    <p class=\"excerpt\">Alay mountains, Lenin peak panorama</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/lakes-issyk-kul-song-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SongkolExplore-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Discover the Lakes Issyk-Kol, Song-Kol and Kel-Suu.</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 11 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/pamir-high-way/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Pamir-mount-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Pamir Highway</h3>
                    <p class=\"excerpt\">Pamir</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 10 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/off-road-adventure/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/OffRoad_tour-600x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Off road adventure in Kyrgyzstan</h3>
                    <p class=\"excerpt\">Off road adventure</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/family-traveling-in-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Off-road-coffee-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Family traveling in Kyrgyzstan.</h3>
                    <p class=\"excerpt\">Family tours</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/kyrgyz-cuisine-tour/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Food_in-yurta-600x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Kyrgyz Cuisine Tour</h3>
                    <p class=\"excerpt\">Family tours</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days </p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/mountain-bike-tour-pro/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/04/Bike-tour-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Mountain Bike Tour Pro</h3>
                    <p class=\"excerpt\">Bike</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 13 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/jailoo-hopping-to-the-lake-song-kul-for-9-days/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SongKolyurt_dark-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Jailoo Hopping to the Lake Song-Kul for 9 days</h3>
                    <p class=\"excerpt\">Trekking</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/pamir-travel/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/06/Pamir-Yak-Saffari-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Pamir trek. Yak Safari</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 15 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/silk-road-kazakhstan-kyrgyzstan-lakes/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/YssikKol-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Silk Road Tour: Kazakhstan and Kyrgyzstan</h3>
                    <p class=\"excerpt\">Kyrgyzstan and Kazakhstan</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/shar-waterfall-at-bashy/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/08/Shar-waterfull-1-of-1-3-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>The tallest waterfall in Central Asia &#8220;Shar&#8221;.</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 4 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/backcountry-ski-tour-in-northern-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/turnaluu-1-of-1-copy-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Backcountry ski tour in northern Kyrgyzstan</h3>
                    <p class=\"excerpt\">Backcountry ski tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 10 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/discovery-bishkek-osh/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Slider_Burana-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Discovery Kyrgyzstan. Bishkek &#038; Osh.</h3>
                    <p class=\"excerpt\"></p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 12 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-to-the-lake-kel-suu/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/Kel-Suu-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Trekking to the Lake Kel-Suu</h3>
                    <p class=\"excerpt\">Trekking</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 5</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/winter-adventures-in-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/winter-kyrgyzstan-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Winter adventures in Kyrgyzstan</h3>
                    <p class=\"excerpt\">Family tours</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 12 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/handicraft-tour/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2020/01/Handicraft-tour-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Handicraft tour</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/childrens-quiz-tour/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2020/01/Children-tour-660x348.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Children&#8217;s Quiz Tour</h3>
                    <p class=\"excerpt\"></p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
                </a>
              </div>





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


              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/jailoo-hiking-lake-song-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/YurtCamp-1-of-1-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$100</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Jailoo hiking “Lake Song-Kul”</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 3 days</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/day-horseback-tour-around-bishkek/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/header-horse-tours-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$60</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>One day horseback riding tour around Bishkek.</h3>
                    <p class=\"excerpt\">Day horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 1 day</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/express-trip-to-the-lake-song-kol/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Express-Trip-Songkol-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$200</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Express trip to the Lake Song-Kul.</h3>
                    <p class=\"excerpt\"></p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 2 days</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-from-chui-valley-to-issyk-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/KolKongur-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$230</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Trekking from Chui Valley to Issyk-Kul</h3>
                    <p class=\"excerpt\">Horseback or trekking tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 3 days</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/2-days-horse-trek/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/n1-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$100</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Lake Kol-Ukok -nomad’s life</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 2 days</p>
                </a>
              </div>


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
        return array (  396 => 209,  387 => 207,  374 => 199,  368 => 196,  362 => 193,  356 => 189,  351 => 188,  347 => 186,  344 => 185,  341 => 184,  338 => 183,  335 => 182,  332 => 181,  330 => 180,  295 => 147,  286 => 145,  277 => 141,  272 => 139,  268 => 138,  260 => 133,  254 => 130,  248 => 127,  245 => 126,  240 => 125,  237 => 124,  234 => 123,  231 => 122,  228 => 121,  225 => 120,  222 => 119,  220 => 118,  148 => 48,  139 => 46,  122 => 34,  118 => 33,  110 => 28,  107 => 27,  102 => 26,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  81 => 18,  62 => 1,);
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
    {% set records = HeroSLider.records %}
    {% set displayColumn = HeroSLider.displayColumn %}
    {% set noRecordsMessage = HeroSLider.noRecordsMessage %}
    {% set detailsPage = HeroSLider.detailsPage %}
    {% set detailsKeyColumn = HeroSLider.detailsKeyColumn %}
    {% set detailsUrlParameter = HeroSLider.detailsUrlParameter %}


    {% for record in records %}

    <div class=\"item lazy\" style=\"\" data-bg=\"url({{ record.slider_item_img.path }})\">
      <div class=\"carousel-caption\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
              <h2>{{record.title}}</h2>
              <h3>{{record.sub_title}}</h3>
              <div class=\"button_wrapper\">
                <a href=\"https://kyrgyzstan-tourism.com/kyrgyzstan/\" class=\"cstm_button\"><i class=\"fa fa-eye\"></i>
                  view tours </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {% else %}
    <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}



    <script>
      \$('#front_slider .item.lazy').first().addClass('active');
    </script>

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
          <p><img style=\"float: left; margin-right: 35px; margin-top: 30px;\" alt=\"logo\"
              data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo.png\"
              class=\"img-responsive logo lazyload\"
              src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
              data-pagespeed-url-hash=\"31059146\"
              onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\" /><noscript><img
                class=\"img-responsive logo lazy\" style=\"float: left; margin-right: 35px; margin-top: 30px;\"
                src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E\"
                data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo.png\" alt=\"logo\"
                data-pagespeed-url-hash=\"2295055879\" /></noscript></p>
          <div class=\"text\">
            <h1 style=\"text-align: left;\">Kyrgyzstan &#8211; Land of adventure!</h1>
            <p>“Get unmatched travel tour information from the people who know the land first-hand. We
              honor our heritage and traditions by making our tour products inspirational and through
              our hospitality. We dream of a world that helps people and the environment reach their
              fullest potential.” &#8220;Kyrgyzstan Tourism&#8221;.</p>
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



              {% set records = PopularTours.records %}
              {% set displayColumn = PopularTours.displayColumn %}
              {% set noRecordsMessage = PopularTours.noRecordsMessage %}
              {% set detailsPage = PopularTours.detailsPage %}
              {% set detailsKeyColumn = PopularTours.detailsKeyColumn %}
              {% set detailsUrlParameter = PopularTours.detailsUrlParameter %}

              {% for record in records %}
              <div class=\"item item_tour with_border  \">
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">

                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\" data-bg=\"url({{ record.poster.path }})\"></span>

                    <span class=\"price-round group_price\">
                      <span class=\"inner\">\${{record.price}} US</span>
                    </span>

                  </span>
                  <div class=\"desc\">
                    <h3>{{record.title}}</h3>
                    <p class=\"excerpt\">{{record.annotation}} </p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> {{record.duration}} days</p>
                </a>
              </div>
              {% else %}
              <li class=\"no-data\">{{ noRecordsMessage }}</li>
              {% endfor %}








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
    
    {% set records = TourType.records %}
    {% set displayColumn = TourType.displayColumn %}
    {% set noRecordsMessage = TourType.noRecordsMessage %}
    {% set detailsPage = TourType.detailsPage %}
    {% set detailsKeyColumn = TourType.detailsKeyColumn %}
    {% set detailsUrlParameter = TourType.detailsUrlParameter %}


    {% for record in records %}


    <div class=\"col-sm-4\">
      <div class=\"item item_tour with_border auto_height tour_type\">
        <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
          <span class=\"img_wrapper\">
            <span class=\"img lazy\" style=\"\"
              data-bg=\"url({{record.poster.path}})\"></span>
          </span>
          <div class=\"desc\">
            <h3>{{record.title}}</h3>
          </div>
        </a>
      </div>
    </div>


    {% else %}
    <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}





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



              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/2-days-horse-trek/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/n1-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$100</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Lake Kol-Ukok -nomad’s life</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 2 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/silk-road-tour-kyrgyzstan-uzbekistan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Bukhara-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Silk-Road Tour: Kyrgyzstan &#038; Uzbekistan</h3>
                    <p class=\"excerpt\">Kyrgyzstan & Uzbekistan</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 15 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/horse-riding-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Kirgizië-1447-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Nomadic Horse Trek for beginners.</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/lake-hopping-issyk-kul-and-song-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SunsetSKyurt-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Lake hopping: Issyk-Kul and Song-Kul</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a
                  href=\"https://kyrgyzstan-tourism.com/tours/travelling-from-kichik-alay-to-pamir-alay-through-jiptik-pass/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/HikerLeninPeak-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Travelling from Kichik-Alay to Pamir-Alay.</h3>
                    <p class=\"excerpt\">Alay mountains, Lenin peak panorama</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/lakes-issyk-kul-song-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SongkolExplore-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Discover the Lakes Issyk-Kol, Song-Kol and Kel-Suu.</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 11 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/pamir-high-way/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Pamir-mount-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Pamir Highway</h3>
                    <p class=\"excerpt\">Pamir</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 10 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/off-road-adventure/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/OffRoad_tour-600x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Off road adventure in Kyrgyzstan</h3>
                    <p class=\"excerpt\">Off road adventure</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/family-traveling-in-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Off-road-coffee-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Family traveling in Kyrgyzstan.</h3>
                    <p class=\"excerpt\">Family tours</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/kyrgyz-cuisine-tour/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Food_in-yurta-600x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Kyrgyz Cuisine Tour</h3>
                    <p class=\"excerpt\">Family tours</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days </p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/mountain-bike-tour-pro/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/04/Bike-tour-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Mountain Bike Tour Pro</h3>
                    <p class=\"excerpt\">Bike</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 13 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/jailoo-hopping-to-the-lake-song-kul-for-9-days/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SongKolyurt_dark-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Jailoo Hopping to the Lake Song-Kul for 9 days</h3>
                    <p class=\"excerpt\">Trekking</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/pamir-travel/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/06/Pamir-Yak-Saffari-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Pamir trek. Yak Safari</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 15 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/silk-road-kazakhstan-kyrgyzstan-lakes/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/YssikKol-1-of-1-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Silk Road Tour: Kazakhstan and Kyrgyzstan</h3>
                    <p class=\"excerpt\">Kyrgyzstan and Kazakhstan</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/shar-waterfall-at-bashy/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/08/Shar-waterfull-1-of-1-3-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>The tallest waterfall in Central Asia &#8220;Shar&#8221;.</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 4 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/backcountry-ski-tour-in-northern-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/turnaluu-1-of-1-copy-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Backcountry ski tour in northern Kyrgyzstan</h3>
                    <p class=\"excerpt\">Backcountry ski tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 10 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/discovery-bishkek-osh/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Slider_Burana-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Discovery Kyrgyzstan. Bishkek &#038; Osh.</h3>
                    <p class=\"excerpt\"></p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 12 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-to-the-lake-kel-suu/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/Kel-Suu-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Trekking to the Lake Kel-Suu</h3>
                    <p class=\"excerpt\">Trekking</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 5</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/winter-adventures-in-kyrgyzstan/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/winter-kyrgyzstan-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Winter adventures in Kyrgyzstan</h3>
                    <p class=\"excerpt\">Family tours</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 12 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/handicraft-tour/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2020/01/Handicraft-tour-660x360.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Handicraft tour</h3>
                    <p class=\"excerpt\">Milti-active tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
                </a>
              </div>

              <div class=\"item item_tour   \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/childrens-quiz-tour/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2020/01/Children-tour-660x348.jpg)\"></span>

                  </span>
                  <div class=\"desc\">
                    <h3>Children&#8217;s Quiz Tour</h3>
                    <p class=\"excerpt\"></p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
                </a>
              </div>





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


              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/jailoo-hiking-lake-song-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/YurtCamp-1-of-1-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$100</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Jailoo hiking “Lake Song-Kul”</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 3 days</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/day-horseback-tour-around-bishkek/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/header-horse-tours-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$60</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>One day horseback riding tour around Bishkek.</h3>
                    <p class=\"excerpt\">Day horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 1 day</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/express-trip-to-the-lake-song-kol/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Express-Trip-Songkol-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$200</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Express trip to the Lake Song-Kul.</h3>
                    <p class=\"excerpt\"></p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 2 days</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-from-chui-valley-to-issyk-kul/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/KolKongur-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$230</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Trekking from Chui Valley to Issyk-Kul</h3>
                    <p class=\"excerpt\">Horseback or trekking tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 3 days</p>
                </a>
              </div>

              <div class=\"item item_tour with_border  \">
                <a href=\"https://kyrgyzstan-tourism.com/tours/2-days-horse-trek/\">
                  <span class=\"img_wrapper\">
                    <span class=\"img lazy\" style=\"\"
                      data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/n1-660x360.jpg)\"></span>

                    <span class=\"price-round\">
                      <span class=\"inner\">from <br />\$100</span>
                    </span>


                  </span>
                  <div class=\"desc\">
                    <h3>Lake Kol-Ukok -nomad’s life</h3>
                    <p class=\"excerpt\">Horseback tour</p>
                  </div>
                  <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 2 days</p>
                </a>
              </div>


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
