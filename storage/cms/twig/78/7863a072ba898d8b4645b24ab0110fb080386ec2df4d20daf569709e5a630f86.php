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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/group-tours-detail.htm */
class __TwigTemplate_f9e00315d87d9ef61131e74f9490bbad177c892cf1a15c5c5816e9d2a571096a extends \Twig\Template
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
        $tags = array("for" => 58, "set" => 64, "if" => 66, "partial" => 552);
        $filters = array("escape" => 1, "raw" => 43, "page" => 103);
        $functions = array("form_token" => 443);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'partial'],
                ['escape', 'raw', 'page'],
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
        echo "<div id=\"top\" class=\"lazy\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 1), "preview_image", [], "any", false, false, true, 1), "getPath", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ")\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/group-tours\">Group tours</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 8), "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
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
                        <p>
                          ";
        // line 123
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 123), "date", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
                        </p>
                      </td>

                      <td>
                        <p>
                          ";
        // line 129
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 129), "date1", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
        // line 133
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 133), "tour_status", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "</p>
                      </td>
                      <td>
                        <p>\$";
        // line 136
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 136), "tour_cost", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\"
                          id=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 140), "date", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "\">Book</button>
                      </td>
                    </tr>



                    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 147
            echo "                    <tr>
                      <td>
                        <p>
                          ";
            // line 150
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p>
                          ";
            // line 155
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
            // line 159
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "</p>
                      </td>
                      <td>
                        <p>\$";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" id=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "\">
                          Book</button>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
                  </tbody>

                </table>
              </div>



            </div>


            <div class=\"tab-pane\" id=\"location\">


              <iframe src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 184), "itinerary_map", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
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
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 197));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 198
            echo "                <a data-fancybox=\"gallery\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                
              </div>
            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">

            ";
        // line 214
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 214), "itinerary_desc", [], "any", false, false, true, 214), 214, $this->source);
        echo "

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">
              ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 226), "custom_repeater", [], "any", false, false, true, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 227
            echo "
              <div class=\"panel panel-default\" style=\"display: flex; flex-direction: column-reverse;\">

                ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 231
                echo "
                ";
                // line 232
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 232);
                // line 233
                echo "
                ";
                // line 234
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 234) == "richeditor")) {
                    // line 235
                    echo "
                <div id=\"collapse_1\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">

                    ";
                    // line 239
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 239, $this->source);
                    echo "

                  </div>
                </div>

                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 244
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 244) == "checkbox")) {
                    // line 245
                    echo "                <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                ";
                } else {
                    // line 247
                    echo "
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      ";
                    // line 251
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 251, $this->source), "html", null, true);
                    echo "</a>
                  </h4>
                </div>

                ";
                }
                // line 256
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "
              </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "
            </div>



            <h2><a
                href=\"";
        // line 268
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 268)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 268), 268, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 268) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 268)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 268), "name", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
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
                      <p>
                        ";
        // line 290
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 290), "date", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
        echo "
                      </p>
                    </td>

                    <td>
                      <p>
                        ";
        // line 296
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 296), "date1", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
        echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
        // line 300
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 300), "tour_status", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
        echo "</p>
                    </td>
                    <td>
                      <p>\$";
        // line 303
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 303), "tour_cost", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
        echo " US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\"
                        id=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 307), "date", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
        echo "\">Book</button>
                    </td>
                  </tr>















                  ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 325));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 326
            echo "                  <tr>
                    <td>
                      <p>
                        ";
            // line 329
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p>
                        ";
            // line 334
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
            // line 338
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 338), 338, $this->source), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                      <p>\$";
            // line 341
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
            echo " US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\"
                        id=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
            echo "\">Book</button>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                </tbody>

              </table>
            </div>



            <iframe src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 357), "itinerary_map", [], "any", false, false, true, 357), 357, $this->source), "html", null, true);
        echo "&amp;hl=en&amp;z=8\" width=\"100%\"
              height=\"480\"></iframe>
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
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 382));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 383
            echo "                <a data-fancybox=\"gallery\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 383), 383, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 385
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 385), 385, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "
                  </div>

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
          ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "faq", [], "any", false, false, true, 407));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 408
            echo "

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  ";
            // line 414
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
            echo " </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                ";
            // line 419
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, true, 419), 419, $this->source);
            echo "
              </div>
            </div>
          </div>


          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "
        </div>


     

      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>

              <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
              <form data-request=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 441, $this->source), "html", null, true);
        echo "::onFormSubmit\" class=\"\">

                ";
        // line 443
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

                <div id=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 445, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name\" class=\"form-control\"
                    value=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 449), "name", [], "any", false, false, true, 449), 449, $this->source), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                </div>

                <h4>Departure</h4>
                <div class=\"form-group\">

                  <select name=\"available_departure_select\" class=\"available_departure_select\">

                    <option value=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 461), "date", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
        echo "\">
                      ";
        // line 462
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 462), "date", [], "any", false, false, true, 462), 462, $this->source), "html", null, true);
        echo "
                    </option>
                    ";
        // line 464
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 464));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 465
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 465), 465, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 465), 465, $this->source), "html", null, true);
            echo "
                    </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "
                  </select>

                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
                </div>



                <div class=\"form-group\">
                  <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\"
                    placeholder=\"Your message\" required></textarea>
                </div>

                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\" style=\"background: #2cb1b6;
                  border: 0; \">send</button>



              </form>

            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">


          ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 501));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 502
            echo "          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 505
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 505)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 505), 505, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 505) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 505)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"background-image: url(&quot;";
            // line 507
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 507), "getPath", [], "any", false, false, true, 507), 507, $this->source), "html", null, true);
            echo "&quot;);\"
                    data-bg=\"url(";
            // line 508
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 508), "getPath", [], "any", false, false, true, 508), 508, $this->source), "html", null, true);
            echo ")\" data-was-processed=\"true\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$";
            // line 511
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 511), 511, $this->source), "html", null, true);
            echo " US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 516
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 516), 516, $this->source), "html", null, true);
            echo " </h3>
                  <p class=\"excerpt\">";
            // line 517
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 517), 517, $this->source), "html", null, true);
            echo " </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 519
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 519), 519, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>


          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
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
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 540));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 541
            echo "
            <li><a
                href=\"";
            // line 543
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 543)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 543), 543, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 543) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 543)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 543), 543, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 546
        echo "          </ul>


        </div>


        ";
        // line 552
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 553
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


  \$('#accordion_group_faq .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'faqtitle' + (i + 1);
    });

  \$('#accordion_group_faq .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group_faq .panel-heading .panel-title a').attr('href', function (i) {
    return '#faqtitle' + (i + 1);
  });





  \$('#accordion_group_mobile .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'title_mobile' + (i + 1);
    });

  \$('#accordion_group_mobile .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group_mobile .panel-heading .panel-title a').attr('href', function (i) {
    return '#title_mobile' + (i + 1);
  });



  \$(document).ready(function () {
    \$(\".dates_table_archive .group_archive_book_button\").click(function () {
      var text = \$(this).attr('id');
      \$(\".available_departure_select option[value='\" + text + \"']\").attr('selected', 'selected');
    });
  });
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  935 => 553,  931 => 552,  923 => 546,  912 => 543,  908 => 541,  904 => 540,  888 => 526,  875 => 519,  870 => 517,  866 => 516,  858 => 511,  852 => 508,  848 => 507,  843 => 505,  838 => 502,  834 => 501,  799 => 468,  787 => 465,  783 => 464,  778 => 462,  774 => 461,  759 => 449,  752 => 445,  747 => 443,  742 => 441,  725 => 426,  712 => 419,  704 => 414,  696 => 408,  692 => 407,  671 => 388,  662 => 385,  656 => 383,  652 => 382,  624 => 357,  614 => 349,  604 => 345,  597 => 341,  591 => 338,  584 => 334,  576 => 329,  571 => 326,  567 => 325,  546 => 307,  539 => 303,  533 => 300,  526 => 296,  517 => 290,  490 => 268,  482 => 262,  473 => 258,  466 => 256,  458 => 251,  452 => 247,  446 => 245,  444 => 244,  436 => 239,  430 => 235,  428 => 234,  425 => 233,  423 => 232,  420 => 231,  416 => 230,  411 => 227,  407 => 226,  392 => 214,  379 => 203,  370 => 200,  364 => 198,  360 => 197,  344 => 184,  328 => 170,  317 => 165,  311 => 162,  305 => 159,  298 => 155,  290 => 150,  285 => 147,  281 => 146,  272 => 140,  265 => 136,  259 => 133,  252 => 129,  243 => 123,  218 => 103,  207 => 94,  198 => 90,  191 => 88,  183 => 83,  177 => 79,  171 => 77,  169 => 76,  161 => 71,  155 => 67,  153 => 66,  150 => 65,  148 => 64,  145 => 63,  141 => 62,  136 => 59,  132 => 58,  114 => 43,  87 => 19,  73 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"lazy\" style=\"background-image: url({{ TourDetail.recordDetail.preview_image.getPath }})\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/group-tours\">Group tours</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">{{ TourDetail.recordDetail.name }}</span></span></span></p>
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
                        <p>
                          {{TourDetail.recordDetail.date}}
                        </p>
                      </td>

                      <td>
                        <p>
                          {{TourDetail.recordDetail.date1}}
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">{{TourDetail.recordDetail.tour_status}}</p>
                      </td>
                      <td>
                        <p>\${{TourDetail.recordDetail.tour_cost}} US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\"
                          id=\"{{TourDetail.recordDetail.date}}\">Book</button>
                      </td>
                    </tr>



                    {% for schedule in recordDetail.schedule_tours %}
                    <tr>
                      <td>
                        <p>
                          {{schedule.tour_dateDeparture}}
                        </p>
                      </td>
                      <td>
                        <p>
                          {{schedule.tour_dateEnd}}
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">{{ schedule.status_tour }}</p>
                      </td>
                      <td>
                        <p>\${{ schedule.cost_tour }} US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" id=\"{{schedule.tour_dateDeparture}}\">
                          Book</button>
                      </td>
                    </tr>
                    {% endfor %}

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
                <a data-fancybox=\"gallery\" href=\"{{image.path}}\" class=\"jg-entry\"
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
                      <p>
                        {{TourDetail.recordDetail.date}}
                      </p>
                    </td>

                    <td>
                      <p>
                        {{TourDetail.recordDetail.date1}}
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">{{TourDetail.recordDetail.tour_status}}</p>
                    </td>
                    <td>
                      <p>\${{TourDetail.recordDetail.tour_cost}} US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\"
                        id=\"{{TourDetail.recordDetail.date}}\">Book</button>
                    </td>
                  </tr>















                  {% for schedule in recordDetail.schedule_tours %}
                  <tr>
                    <td>
                      <p>
                        {{schedule.tour_dateDeparture}}
                      </p>
                    </td>
                    <td>
                      <p>
                        {{schedule.tour_dateEnd}}
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">{{ schedule.status_tour }}</p>
                    </td>
                    <td>
                      <p>\${{ schedule.cost_tour }} US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\"
                        id=\"{{schedule.tour_dateDeparture}}\">Book</button>
                    </td>
                  </tr>
                  {% endfor %}

                </tbody>

              </table>
            </div>



            <iframe src=\"{{ TourDetail.recordDetail.itinerary_map }}&amp;hl=en&amp;z=8\" width=\"100%\"
              height=\"480\"></iframe>
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
                <a data-fancybox=\"gallery\" href=\"{{image.path}}\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"{{image.path}}\" alt=\"\">
                </a>
                {%endfor%}

                  </div>

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
          {% for faq in recordDetail.faq %}


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  {{faq.question}} </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                {{faq.answer|raw}}
              </div>
            </div>
          </div>


          {% endfor %}

        </div>


     

      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>

              <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
              <form data-request=\"{{ BottomForm }}::onFormSubmit\" class=\"\">

                {{ form_token() }}

                <div id=\"{{ BottomForm }}_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name\" class=\"form-control\"
                    value=\"{{ TourDetail.recordDetail.name }}\">
                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                </div>

                <h4>Departure</h4>
                <div class=\"form-group\">

                  <select name=\"available_departure_select\" class=\"available_departure_select\">

                    <option value=\"{{TourDetail.recordDetail.date}}\">
                      {{TourDetail.recordDetail.date}}
                    </option>
                    {% for schedule in recordDetail.schedule_tours %}
                    <option value=\"{{schedule.tour_dateDeparture}}\">{{schedule.tour_dateDeparture}}
                    </option>
                    {% endfor %}

                  </select>

                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
                </div>



                <div class=\"form-group\">
                  <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\"
                    placeholder=\"Your message\" required></textarea>
                </div>

                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\" style=\"background: #2cb1b6;
                  border: 0; \">send</button>



              </form>

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


  \$('#accordion_group_faq .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'faqtitle' + (i + 1);
    });

  \$('#accordion_group_faq .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group_faq .panel-heading .panel-title a').attr('href', function (i) {
    return '#faqtitle' + (i + 1);
  });





  \$('#accordion_group_mobile .panel-default .panel-collapse').attr('id',
    function (i) {
      return 'title_mobile' + (i + 1);
    });

  \$('#accordion_group_mobile .panel-default .panel-collapse').first().addClass('in');

  \$('#accordion_group_mobile .panel-heading .panel-title a').attr('href', function (i) {
    return '#title_mobile' + (i + 1);
  });



  \$(document).ready(function () {
    \$(\".dates_table_archive .group_archive_book_button\").click(function () {
      var text = \$(this).attr('id');
      \$(\".available_departure_select option[value='\" + text + \"']\").attr('selected', 'selected');
    });
  });
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours-detail.htm", "");
    }
}
