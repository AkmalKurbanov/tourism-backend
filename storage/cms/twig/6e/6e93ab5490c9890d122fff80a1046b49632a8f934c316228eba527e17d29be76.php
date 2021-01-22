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

/* C:\work\xampp\htdocs\tourism/themes/tourism/pages/group-tours-detail.htm */
class __TwigTemplate_6dabcd254fad78b03f7ff60dda0e73ec565423a5e3f31cbf9fd7bf7c5d217ead extends \Twig\Template
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
        $tags = array("for" => 58, "set" => 64, "if" => 66, "partial" => 590);
        $filters = array("escape" => 1, "raw" => 43, "page" => 103);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'partial'],
                ['escape', 'raw', 'page'],
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
        echo "<div id=\"top\" class=\"lazy\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 1), "preview_image", [], "any", false, false, true, 1), "getPath", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ")\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
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
          <h1 id=\"single_tour_title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 19), "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div class=\"tours-tabs\">
        <ul class=\"nav nav-tabs hidden-xs\">
          <li class=\"active\"><a href=\"#itinerary\" data-toggle=\"tab\">ITINERARY</a></li>
          <li><a href=\"#location\" data-toggle=\"tab\">LOCATION</a></li>
          <li><a href=\"#photos\" data-toggle=\"tab\">PHOTOS</a></li>
        </ul>

        <div id=\"tour_content\">

          <div class=\"tab-content hidden-xs\">

            <div class=\"tab-pane active\" id=\"itinerary\">
              ";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 43), "itinerary_desc", [], "any", false, false, true, 43), 43, $this->source);
        echo "



              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 58), "custom_repeater", [], "any", false, false, true, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 59
            echo "
                <div class=\"panel panel-default\">

                  ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 63
                echo "
                  ";
                // line 64
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 64);
                // line 65
                echo "
                  ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 66) == "richeditor")) {
                    // line 67
                    echo "
                  <div id=\"\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">

                      ";
                    // line 71
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 71, $this->source);
                    echo "

                    </div>
                  </div>

                  ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 76
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 76) == "checkbox")) {
                    // line 77
                    echo "                  <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                  ";
                } else {
                    // line 79
                    echo "
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"\">
                        ";
                    // line 83
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 83, $this->source), "html", null, true);
                    echo "</a>
                    </h4>
                  </div>

                  ";
                }
                // line 88
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a
                  href=\"";
        // line 103
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 103)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 103), 103, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 103) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 103)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 103), "name", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "</a>
              </h2>

              <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover dates_table_archive\">
                  <thead>
                    <tr>
                      <th>Departure</th>
                      <th>End</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Book</th>
                    </tr>
                  </thead>

                  <tbody>


                    <tr>
                      <td>
                        <!-- <p> -->
                          ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 125
            echo "                            ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["actor"], "tour_dateDeparture", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
                          
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                          ";
        // line 129
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 129), "schedule_tours", [], "any", false, false, true, 129), "tour_dateDeparture", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
                      </td>
                      <td>
                        <!-- <p>";
        // line 132
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 132), "date1", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        echo "</p> -->
                      </td>
                      <td>
                        <p class=\"available\">";
        // line 135
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 135), "tour_status", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "</p>
                      </td>
                      <td>
                        <p>\$";
        // line 138
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 138), "tour_cost", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\"
                          data-departure=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 142), "date", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        echo "\"
                          data-title=\"Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.\">Book</button>
                      </td>
                    </tr>

                  </tbody>

                </table>
              </div>



            </div>


            <div class=\"tab-pane\" id=\"location\">


              <iframe src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 160), "itinerary_map", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "&amp;hl=en&amp;z=8\" width=\"100%\"
                height=\"480\"></iframe>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"photos\">

              <div class=\"custom_gallery justified-gallery\"
                style=\"height: 724px; display:flex; flex-direction: row; flex-wrap: wrap;\" lg-uid=\"lg0\">

                ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 173));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 174
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "              </div>
            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">

            ";
        // line 189
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 189), "itinerary_desc", [], "any", false, false, true, 189), 189, $this->source);
        echo "

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">
              ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 201), "custom_repeater", [], "any", false, false, true, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 202
            echo "
              <div class=\"panel panel-default\" style=\"display: flex; flex-direction: column-reverse;\">

                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 206
                echo "
                ";
                // line 207
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 207);
                // line 208
                echo "
                ";
                // line 209
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 209) == "richeditor")) {
                    // line 210
                    echo "
                <div id=\"collapse_1\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">

                    ";
                    // line 214
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 214, $this->source);
                    echo "

                  </div>
                </div>

                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 219
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 219) == "checkbox")) {
                    // line 220
                    echo "                <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                ";
                } else {
                    // line 222
                    echo "
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      ";
                    // line 226
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 226, $this->source), "html", null, true);
                    echo "</a>
                  </h4>
                </div>

                ";
                }
                // line 231
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "
              </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "
            </div>



            <h2><a href=\"https://kyrgyzstan-tourism.com/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/\">Pearls
                of Kyrgyzstan: Issyk-Kul and Song-Kul.</a></h2>

            <div class=\"table-responsive\">
              <table class=\"table table-striped table-hover dates_table_archive\">
                <thead>
                  <tr>
                    <th>Departure</th>
                    <th>End</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Book</th>
                  </tr>
                </thead>

                <tbody>


                  <tr>
                    <td>
                      <p>Jul 13, 2021 - Tue</p>
                    </td>
                    <td>
                      <p>Jul 21, 2021 - Wed</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$890 US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Jul 13, 2021 - Tue\"
                        data-title=\"Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.\">Book</button>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <p>Aug 26, 2021 - Thu</p>
                    </td>
                    <td>
                      <p>Sep 3, 2021 - Fri</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$890 US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Aug 26, 2021 - Thu\"
                        data-title=\"Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.\">Book</button>
                    </td>
                  </tr>
                </tbody>

              </table>
            </div>



            <iframe width=\"100%\" height=\"480\"
              data-src=\"https://www.google.com/maps/d/embed?mid=10MUqRJ8-Hf8Gcl42TX6sUCcVN-usk2b9&amp;hl=en&amp;z=7\"
              class=\"lazyload\"
              src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe>
            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

          </div>




          <div class=\"panel-group visible-xs\" id=\"accordion\">

            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
                    PHOTOS
                  </a>
                </h4>
              </div>
              <div id=\"collapseFour\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <div class=\"custom_gallery justified-gallery\" style=\"height: 724px;\" lg-uid=\"lg1\">
                    
                    ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 332));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 333
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                      style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                      <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                   
                  </div>
                  <!--                                    <div class=\"mobile_book_btn_wrapper text-center\">-->
                  <!--                                        <button class=\"cstm_button mobile_book_btn\">Book</button>-->
                  <!--                                    </div>-->
                </div>
              </div>
            </div>

          </div>
          <!--                    END MOBILE VISIBLE-->

        </div>

      </div>

      <div id=\"faq_wrapper\">

        <h2>FAQ</h2>
        <p class=\"text-right\"><button class=\"cstm_button\" id=\"faqExpand\">Expand all</button></p>
        <div class=\"panel-group\" id=\"accordion_group_faq\">

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  What included and excluded? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse in\">
              <div class=\"panel-body\">
                <p><strong>It is included:</strong><br>
                  – All accommodations (hotels, guest houses, yurt camps) except the first day in Bishkek.</p>
                <p>– Eng.speaking guide from Airport to Airport</p>
                <p>– All meals (Lunches, Dinners, and breakfasts)</p>
                <p>– Mineral waters</p>
                <p>– Individual transport from the Airport to the Airport</p>
                <p><strong>It is not included:</strong></p>
                <p>– Air flight ticket</p>
                <p>– Bishkek hotel for arrival dates.</p>
                <p>– Personal expenses</p>
                <p>– Alcohol drinks</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_2\">
                  Am I fit enough? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_2\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Song-Kul mountain is a high altitude and some point you prefer to do walking instead of horse riding.
                  We recommend you train with sport or jogging 2-3 times a week in the run-up to your trip.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_3\">
                  How old do I need to be? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_3\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>The minimum age for this tour and horse trek is 18, or 16 with a parent/guardian.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_4\">
                  What kit do I need? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_4\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Clothing for hiking in temperatures from +25C to -0C. A detailed kit list will be sent to you when
                  you book on.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_5\">
                  How big is the group? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_5\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Most groups have 6-10 people, with a maximum of 12.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_6\">
                  Which hotel do we stay at in Bishkek on the last day, Karakol? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_6\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>In Bishkek, we arrange you hotel with 3 stars level (Olive. My hotel …). in Karakol will be Green
                  Yard, Karagat or similar.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_7\">
                  How to book? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_7\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Contact us and we issue the invoice for 20% payment from the net tour cost. You can send it by bank
                  transfer. The rest of the payment you can pay in cash upon your arrival day in Bishkek (welcoming the
                  first day with briefing ). Be informed that the bank transfer fee will be additionally 3% over the
                  cost of the transaction and it will be on the client (For cash payment no additional costs).</p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>


        </div>

      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>
              <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o1\" lang=\"ru-RU\" dir=\"ltr\">
                <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
                <form action=\"/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/#wpcf7-f5211-o1\" method=\"post\"
                  class=\"wpcf7-form init\" novalidate=\"novalidate\">
                  <div style=\"display: none;\">
                    <input type=\"hidden\" name=\"_wpcf7\" value=\"5211\">
                    <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\">
                    <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\">
                    <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f5211-o1\">
                    <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\">
                    <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\">
                    <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\"
                      value=\"03AGdBq245nfBlA-4PfYV9pYgYZusS80N7wGHGd9ySGeXG7Ofhd1rIBj62UKAuAGI6CqFU9b3MrSGwIociEk5M_OKUc9IUw8sqQnX7wXkhuZPGKVS0ZetjCtAo1eOCnKc2_n5jEG-LiOq9lYQthI__3eaDEKYAQA3BSHK3KbCbVsIjUKRXt0mE3GnnVCs7-wKnzJnSzU72h9yZ7DqPsODDu7szsXs7IkttFL2OTgF9NW6I86GHHRgj3lFm6FJuyoPTJW16GCi38xn4PjFB1slutYSd8E6SpzQpLPEUnIhIV_zrbqziZeoyVcrOqhduGlIkF7MgrFkNB6q6trXlSRrARsy7z8jC3QjIgCKaBqRsGUNaHkMSflZV6_2xHj3U1PL56Xwl9_nbkhoQz0vzPwF49vzzG3GH-yV-bL_UAwRKD9RiFqgB4n7h8LSwqFT6ELS2ECGkaaxAXxZXVKzYHmBwNWpSmrM_SAIvmA\">
                  </div>
                  <p><span class=\"wpcf7-form-control-wrap text-tour\"><input type=\"text\" name=\"text-tour\" value=\"\"
                        size=\"40\" class=\"wpcf7-form-control wpcf7-text hidden input_tour_name\"
                        aria-invalid=\"false\"></span><span class=\"wpcf7-form-control-wrap text-departure\"><input
                        type=\"text\" name=\"text-departure\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text text_departure hidden\" aria-invalid=\"false\"></span><span
                      class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                        aria-invalid=\"false\" placeholder=\"Your name\"></span></p>
                  <h4>Departure</h4>
                  <p><select name=\"available_departure_select\" class=\"available_departure_select\">
                      <option value=\"Jul 13, 2021 - Tue\" selected=\"\">Jul 13, 2021 - Tue</option>
                      <option value=\"Aug 26, 2021 - Thu\">Aug 26, 2021 - Thu</option>
                    </select></p>
                  <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\"
                        size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                        aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\"></span></p>
                  <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\"
                        rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                        placeholder=\"Your message\"></textarea></span></p>
                  <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
                      class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"><span class=\"ajax-loader\"></span></p>
                  <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">


          ";
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 540));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 541
            echo "          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 544
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 544)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 544), 544, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 544) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 544)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"background-image: url(&quot;";
            // line 546
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 546), "getPath", [], "any", false, false, true, 546), 546, $this->source), "html", null, true);
            echo "&quot;);\"
                    data-bg=\"url(";
            // line 547
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 547), "getPath", [], "any", false, false, true, 547), 547, $this->source), "html", null, true);
            echo ")\" data-was-processed=\"true\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$";
            // line 550
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 550), 550, $this->source), "html", null, true);
            echo " US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 555
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 555), 555, $this->source), "html", null, true);
            echo " </h3>
                  <p class=\"excerpt\">";
            // line 556
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 556), 556, $this->source), "html", null, true);
            echo " </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 558
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 558), 558, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>

          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        echo "

        </div>
      </div>

    </div>
    <div class=\"col-sm-3\">

      <div id=\"sidebar\">
        <div class=\"tags tags_light\">
          <h3>Group tours</h3>
          <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
          <ul class=\"list-unstyled sdb_ul\">

            ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 578));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 579
            echo "
            <li><a
                href=\"";
            // line 581
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 581)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 581), 581, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 581) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 581)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 581), 581, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 584
        echo "          </ul>


        </div>


        ";
        // line 590
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 591
        echo "
      </div>
    </div>
  </div>
</div>



<script>
  \$('#accordion_group .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'title' + (i + 1);
    });

  \$('#accordion_group .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group .panel-heading .panel-title a').attr('href', function (i) {
    return '#title' + (i + 1);
  });





  \$('#accordion_group_mobile .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'title_mobile' + (i + 1);
    });

  \$('#accordion_group_mobile .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group_mobile .panel-heading .panel-title a').attr('href', function (i) {
    return '#title_mobile' + (i + 1);
  });
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/group-tours-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  864 => 591,  860 => 590,  852 => 584,  841 => 581,  837 => 579,  833 => 578,  817 => 564,  805 => 558,  800 => 556,  796 => 555,  788 => 550,  782 => 547,  778 => 546,  773 => 544,  768 => 541,  764 => 540,  560 => 338,  551 => 335,  545 => 333,  541 => 332,  444 => 237,  435 => 233,  428 => 231,  420 => 226,  414 => 222,  408 => 220,  406 => 219,  398 => 214,  392 => 210,  390 => 209,  387 => 208,  385 => 207,  382 => 206,  378 => 205,  373 => 202,  369 => 201,  354 => 189,  342 => 179,  333 => 176,  327 => 174,  323 => 173,  307 => 160,  286 => 142,  279 => 138,  273 => 135,  267 => 132,  261 => 129,  258 => 128,  248 => 125,  244 => 124,  218 => 103,  207 => 94,  198 => 90,  191 => 88,  183 => 83,  177 => 79,  171 => 77,  169 => 76,  161 => 71,  155 => 67,  153 => 66,  150 => 65,  148 => 64,  145 => 63,  141 => 62,  136 => 59,  132 => 58,  114 => 43,  87 => 19,  73 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"lazy\" style=\"background-image: url({{ TourDetail.recordDetail.preview_image.getPath }})\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">{{this.page.title}}</span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{ TourDetail.recordDetail.name }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div class=\"tours-tabs\">
        <ul class=\"nav nav-tabs hidden-xs\">
          <li class=\"active\"><a href=\"#itinerary\" data-toggle=\"tab\">ITINERARY</a></li>
          <li><a href=\"#location\" data-toggle=\"tab\">LOCATION</a></li>
          <li><a href=\"#photos\" data-toggle=\"tab\">PHOTOS</a></li>
        </ul>

        <div id=\"tour_content\">

          <div class=\"tab-content hidden-xs\">

            <div class=\"tab-pane active\" id=\"itinerary\">
              {{ TourDetail.recordDetail.itinerary_desc | raw }}



              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                {% for repeaterBlock in TourDetail.recordDetail.custom_repeater %}

                <div class=\"panel panel-default\">

                  {% for key, value in repeaterBlock %}

                  {% set customRepeaterFieldDefinition = TourDetail.getCustomRepeaterField(key) %}

                  {% if customRepeaterFieldDefinition.custom_repeater_field_type == 'richeditor' %}

                  <div id=\"\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">

                      {{ value|raw }}

                    </div>
                  </div>

                  {% elseif customRepeaterFieldDefinition.custom_repeater_field_type == 'checkbox' %}
                  <!-- <span class=\"glyphicon {{value ? 'glyphicon-check' : 'glyphicon-unchecked'}}\"></span> -->
                  {% else %}

                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"\">
                        {{ value }}</a>
                    </h4>
                  </div>

                  {% endif %}

                  {% endfor %}

                </div>

                {% endfor %}

              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a
                  href=\"{{TourDetail.property('recordPage') ? TourDetail.property('recordPage')|page({(TourDetail.paramName('recordPageSlug')):(record.slug)})}}\">{{ TourDetail.recordDetail.name }}</a>
              </h2>

              <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover dates_table_archive\">
                  <thead>
                    <tr>
                      <th>Departure</th>
                      <th>End</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Book</th>
                    </tr>
                  </thead>

                  <tbody>


                    <tr>
                      <td>
                        <!-- <p> -->
                          {% for actor in recordDetail.schedule_tours %}
                            {{actor.tour_dateDeparture}}
                          
                          {% endfor %}

                          {{TourDetail.recordDetail.schedule_tours.tour_dateDeparture}}
                      </td>
                      <td>
                        <!-- <p>{{ TourDetail.recordDetail.date1 }}</p> -->
                      </td>
                      <td>
                        <p class=\"available\">{{ TourDetail.recordDetail.tour_status }}</p>
                      </td>
                      <td>
                        <p>\${{ TourDetail.recordDetail.tour_cost }} US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\"
                          data-departure=\"{{ TourDetail.recordDetail.date }}\"
                          data-title=\"Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.\">Book</button>
                      </td>
                    </tr>

                  </tbody>

                </table>
              </div>



            </div>


            <div class=\"tab-pane\" id=\"location\">


              <iframe src=\"{{ TourDetail.recordDetail.itinerary_map }}&amp;hl=en&amp;z=8\" width=\"100%\"
                height=\"480\"></iframe>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"photos\">

              <div class=\"custom_gallery justified-gallery\"
                style=\"height: 724px; display:flex; flex-direction: row; flex-wrap: wrap;\" lg-uid=\"lg0\">

                {% for image in recordDetail.images %}
                <a href=\"{{image.path}}\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"{{image.path}}\" alt=\"\">
                </a>
                {%endfor%}
              </div>
            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">

            {{ TourDetail.recordDetail.itinerary_desc | raw }}

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">
              {% for repeaterBlock in TourDetail.recordDetail.custom_repeater %}

              <div class=\"panel panel-default\" style=\"display: flex; flex-direction: column-reverse;\">

                {% for key, value in repeaterBlock %}

                {% set customRepeaterFieldDefinition = TourDetail.getCustomRepeaterField(key) %}

                {% if customRepeaterFieldDefinition.custom_repeater_field_type == 'richeditor' %}

                <div id=\"collapse_1\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">

                    {{ value|raw }}

                  </div>
                </div>

                {% elseif customRepeaterFieldDefinition.custom_repeater_field_type == 'checkbox' %}
                <!-- <span class=\"glyphicon {{value ? 'glyphicon-check' : 'glyphicon-unchecked'}}\"></span> -->
                {% else %}

                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      {{ value }}</a>
                  </h4>
                </div>

                {% endif %}

                {% endfor %}

              </div>

              {% endfor %}

            </div>



            <h2><a href=\"https://kyrgyzstan-tourism.com/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/\">Pearls
                of Kyrgyzstan: Issyk-Kul and Song-Kul.</a></h2>

            <div class=\"table-responsive\">
              <table class=\"table table-striped table-hover dates_table_archive\">
                <thead>
                  <tr>
                    <th>Departure</th>
                    <th>End</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Book</th>
                  </tr>
                </thead>

                <tbody>


                  <tr>
                    <td>
                      <p>Jul 13, 2021 - Tue</p>
                    </td>
                    <td>
                      <p>Jul 21, 2021 - Wed</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$890 US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Jul 13, 2021 - Tue\"
                        data-title=\"Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.\">Book</button>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <p>Aug 26, 2021 - Thu</p>
                    </td>
                    <td>
                      <p>Sep 3, 2021 - Fri</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$890 US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Aug 26, 2021 - Thu\"
                        data-title=\"Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.\">Book</button>
                    </td>
                  </tr>
                </tbody>

              </table>
            </div>



            <iframe width=\"100%\" height=\"480\"
              data-src=\"https://www.google.com/maps/d/embed?mid=10MUqRJ8-Hf8Gcl42TX6sUCcVN-usk2b9&amp;hl=en&amp;z=7\"
              class=\"lazyload\"
              src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe>
            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

          </div>




          <div class=\"panel-group visible-xs\" id=\"accordion\">

            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
                    PHOTOS
                  </a>
                </h4>
              </div>
              <div id=\"collapseFour\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <div class=\"custom_gallery justified-gallery\" style=\"height: 724px;\" lg-uid=\"lg1\">
                    
                    {% for image in recordDetail.images %}
                    <a href=\"{{image.path}}\" class=\"jg-entry\"
                      style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                      <img class=\"ls-is-cached lazyloaded\" src=\"{{image.path}}\" alt=\"\">
                    </a>
                    {%endfor%}
                   
                  </div>
                  <!--                                    <div class=\"mobile_book_btn_wrapper text-center\">-->
                  <!--                                        <button class=\"cstm_button mobile_book_btn\">Book</button>-->
                  <!--                                    </div>-->
                </div>
              </div>
            </div>

          </div>
          <!--                    END MOBILE VISIBLE-->

        </div>

      </div>

      <div id=\"faq_wrapper\">

        <h2>FAQ</h2>
        <p class=\"text-right\"><button class=\"cstm_button\" id=\"faqExpand\">Expand all</button></p>
        <div class=\"panel-group\" id=\"accordion_group_faq\">

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  What included and excluded? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse in\">
              <div class=\"panel-body\">
                <p><strong>It is included:</strong><br>
                  – All accommodations (hotels, guest houses, yurt camps) except the first day in Bishkek.</p>
                <p>– Eng.speaking guide from Airport to Airport</p>
                <p>– All meals (Lunches, Dinners, and breakfasts)</p>
                <p>– Mineral waters</p>
                <p>– Individual transport from the Airport to the Airport</p>
                <p><strong>It is not included:</strong></p>
                <p>– Air flight ticket</p>
                <p>– Bishkek hotel for arrival dates.</p>
                <p>– Personal expenses</p>
                <p>– Alcohol drinks</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_2\">
                  Am I fit enough? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_2\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Song-Kul mountain is a high altitude and some point you prefer to do walking instead of horse riding.
                  We recommend you train with sport or jogging 2-3 times a week in the run-up to your trip.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_3\">
                  How old do I need to be? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_3\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>The minimum age for this tour and horse trek is 18, or 16 with a parent/guardian.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_4\">
                  What kit do I need? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_4\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Clothing for hiking in temperatures from +25C to -0C. A detailed kit list will be sent to you when
                  you book on.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_5\">
                  How big is the group? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_5\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Most groups have 6-10 people, with a maximum of 12.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_6\">
                  Which hotel do we stay at in Bishkek on the last day, Karakol? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_6\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>In Bishkek, we arrange you hotel with 3 stars level (Olive. My hotel …). in Karakol will be Green
                  Yard, Karagat or similar.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_7\">
                  How to book? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_7\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Contact us and we issue the invoice for 20% payment from the net tour cost. You can send it by bank
                  transfer. The rest of the payment you can pay in cash upon your arrival day in Bishkek (welcoming the
                  first day with briefing ). Be informed that the bank transfer fee will be additionally 3% over the
                  cost of the transaction and it will be on the client (For cash payment no additional costs).</p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>


        </div>

      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>
              <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o1\" lang=\"ru-RU\" dir=\"ltr\">
                <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
                <form action=\"/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/#wpcf7-f5211-o1\" method=\"post\"
                  class=\"wpcf7-form init\" novalidate=\"novalidate\">
                  <div style=\"display: none;\">
                    <input type=\"hidden\" name=\"_wpcf7\" value=\"5211\">
                    <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\">
                    <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\">
                    <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f5211-o1\">
                    <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\">
                    <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\">
                    <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\"
                      value=\"03AGdBq245nfBlA-4PfYV9pYgYZusS80N7wGHGd9ySGeXG7Ofhd1rIBj62UKAuAGI6CqFU9b3MrSGwIociEk5M_OKUc9IUw8sqQnX7wXkhuZPGKVS0ZetjCtAo1eOCnKc2_n5jEG-LiOq9lYQthI__3eaDEKYAQA3BSHK3KbCbVsIjUKRXt0mE3GnnVCs7-wKnzJnSzU72h9yZ7DqPsODDu7szsXs7IkttFL2OTgF9NW6I86GHHRgj3lFm6FJuyoPTJW16GCi38xn4PjFB1slutYSd8E6SpzQpLPEUnIhIV_zrbqziZeoyVcrOqhduGlIkF7MgrFkNB6q6trXlSRrARsy7z8jC3QjIgCKaBqRsGUNaHkMSflZV6_2xHj3U1PL56Xwl9_nbkhoQz0vzPwF49vzzG3GH-yV-bL_UAwRKD9RiFqgB4n7h8LSwqFT6ELS2ECGkaaxAXxZXVKzYHmBwNWpSmrM_SAIvmA\">
                  </div>
                  <p><span class=\"wpcf7-form-control-wrap text-tour\"><input type=\"text\" name=\"text-tour\" value=\"\"
                        size=\"40\" class=\"wpcf7-form-control wpcf7-text hidden input_tour_name\"
                        aria-invalid=\"false\"></span><span class=\"wpcf7-form-control-wrap text-departure\"><input
                        type=\"text\" name=\"text-departure\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text text_departure hidden\" aria-invalid=\"false\"></span><span
                      class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                        aria-invalid=\"false\" placeholder=\"Your name\"></span></p>
                  <h4>Departure</h4>
                  <p><select name=\"available_departure_select\" class=\"available_departure_select\">
                      <option value=\"Jul 13, 2021 - Tue\" selected=\"\">Jul 13, 2021 - Tue</option>
                      <option value=\"Aug 26, 2021 - Thu\">Aug 26, 2021 - Thu</option>
                    </select></p>
                  <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\"
                        size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                        aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\"></span></p>
                  <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\"
                        rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                        placeholder=\"Your message\"></textarea></span></p>
                  <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
                      class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"><span class=\"ajax-loader\"></span></p>
                  <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">


          {% for record in GroupTours.items %}
          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"background-image: url(&quot;{{ record.preview_image.getPath }}&quot;);\"
                    data-bg=\"url({{ record.preview_image.getPath }})\" data-was-processed=\"true\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\${{ record.tour_cost }} US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>{{ record.name }} </h3>
                  <p class=\"excerpt\">{{ record.description }} </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> {{ record.tour_duration }} days</p>
              </a>
            </div>

          </div>
          {% endfor %}


        </div>
      </div>

    </div>
    <div class=\"col-sm-3\">

      <div id=\"sidebar\">
        <div class=\"tags tags_light\">
          <h3>Group tours</h3>
          <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
          <ul class=\"list-unstyled sdb_ul\">

            {% for record in GroupTours.items %}

            <li><a
                href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\">{{record.name}}</a>
            </li>
            {% endfor %}
          </ul>


        </div>


        {% partial 'site/sidebar' %}

      </div>
    </div>
  </div>
</div>



<script>
  \$('#accordion_group .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'title' + (i + 1);
    });

  \$('#accordion_group .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group .panel-heading .panel-title a').attr('href', function (i) {
    return '#title' + (i + 1);
  });





  \$('#accordion_group_mobile .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'title_mobile' + (i + 1);
    });

  \$('#accordion_group_mobile .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group_mobile .panel-heading .panel-title a').attr('href', function (i) {
    return '#title_mobile' + (i + 1);
  });
</script>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/group-tours-detail.htm", "");
    }
}