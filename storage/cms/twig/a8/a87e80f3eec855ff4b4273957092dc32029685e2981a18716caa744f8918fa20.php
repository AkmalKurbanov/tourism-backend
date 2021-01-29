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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/tour-detail.htm */
class __TwigTemplate_87f079947f250b9583c5d4a3fe02194d38578ec38120d545d198579e51e318ee extends \Twig\Template
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
        $tags = array("component" => 1, "for" => 66, "set" => 72, "if" => 74, "partial" => 553);
        $filters = array("escape" => 1, "raw" => 51, "page" => 111);
        $functions = array("form_token" => 449);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for', 'set', 'if', 'partial'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<div class=\"lazy\" id=\"top\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 1), "preview_image", [], "any", false, false, true, 1), "getPath", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ")\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"/\">Home</a> /
                <span>
                  <a href=\"/tours/default\">Tours</a> /<span
                    class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</span>
                </span>
              </span>
            </span></p>
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
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 26), "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
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
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 51), "itinerary_desc", [], "any", false, false, true, 51), 51, $this->source);
        echo "



              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 66), "custom_repeater", [], "any", false, false, true, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 67
            echo "
                <div class=\"panel panel-default\">

                  ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 71
                echo "
                  ";
                // line 72
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 72);
                // line 73
                echo "
                  ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 74) == "richeditor")) {
                    // line 75
                    echo "
                  <div id=\"\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">

                      ";
                    // line 79
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 79, $this->source);
                    echo "

                    </div>
                  </div>

                  ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 84
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 84) == "checkbox")) {
                    // line 85
                    echo "                  <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                  ";
                } else {
                    // line 87
                    echo "
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"\">
                        ";
                    // line 91
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 91, $this->source), "html", null, true);
                    echo "</a>
                    </h4>
                  </div>

                  ";
                }
                // line 96
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a
                  href=\"";
        // line 111
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 111)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 111), 111, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 111) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 111)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 111), "name", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
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
        // line 131
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 131), "date", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "
                        </p>
                      </td>

                      <td>
                        <p>
                          ";
        // line 137
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 137), "date1", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
        // line 141
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 141), "tour_status", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "</p>
                      </td>
                      <td>
                        <p>\$";
        // line 144
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 144), "tour_cost", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\"
                          id=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 148), "date", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "\">Book</button>
                      </td>
                    </tr>



                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 154));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 155
            echo "                    <tr>
                      <td>
                        <p>
                          ";
            // line 158
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p>
                          ";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
            // line 167
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "</p>
                      </td>
                      <td>
                        <p>\$";
            // line 170
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" id=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "\">
                          Book</button>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
                  </tbody>

                </table>
              </div>



            </div>


            <div class=\"tab-pane\" id=\"location\">


              <iframe src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 192), "itinerary_map", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
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
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 205));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 206
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "              </div>
            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">

            ";
        // line 221
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 221), "itinerary_desc", [], "any", false, false, true, 221), 221, $this->source);
        echo "

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">
              ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 233), "custom_repeater", [], "any", false, false, true, 233));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 234
            echo "
              <div class=\"panel panel-default\" style=\"display: flex; flex-direction: column-reverse;\">

                ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 238
                echo "
                ";
                // line 239
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 239);
                // line 240
                echo "
                ";
                // line 241
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 241) == "richeditor")) {
                    // line 242
                    echo "
                <div id=\"collapse_1\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">

                    ";
                    // line 246
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 246, $this->source);
                    echo "

                  </div>
                </div>

                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 251
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 251) == "checkbox")) {
                    // line 252
                    echo "                <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                ";
                } else {
                    // line 254
                    echo "
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      ";
                    // line 258
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 258, $this->source), "html", null, true);
                    echo "</a>
                  </h4>
                </div>

                ";
                }
                // line 263
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "
              </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "
            </div>



            <h2><a
                href=\"";
        // line 275
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 275)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 275), 275, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 275) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 275)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 275), "name", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
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
        // line 297
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 297), "date", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
        echo "
                      </p>
                    </td>

                    <td>
                      <p>
                        ";
        // line 303
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 303), "date1", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
        echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
        // line 307
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 307), "tour_status", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
        echo "</p>
                    </td>
                    <td>
                      <p>\$";
        // line 310
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 310), "tour_cost", [], "any", false, false, true, 310), 310, $this->source), "html", null, true);
        echo " US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\"
                        id=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 314), "date", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
        echo "\">Book</button>
                    </td>
                  </tr>















                  ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 332));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 333
            echo "                  <tr>
                    <td>
                      <p>
                        ";
            // line 336
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p>
                        ";
            // line 341
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
            // line 345
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                      <p>\$";
            // line 348
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 348), 348, $this->source), "html", null, true);
            echo " US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\"
                        id=\"";
            // line 352
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
            echo "\">Book</button>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "
                </tbody>

              </table>
            </div>



            <iframe src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 364), "itinerary_map", [], "any", false, false, true, 364), 364, $this->source), "html", null, true);
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
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 389));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 390
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 390), 390, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                      style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                      <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 392
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
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
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "faq", [], "any", false, false, true, 414));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 415
            echo "

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  ";
            // line 421
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, true, 421), 421, $this->source), "html", null, true);
            echo " </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                ";
            // line 426
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, true, 426), 426, $this->source);
            echo "
              </div>
            </div>
          </div>


          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        echo "
        </div>




      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>

              <form data-request=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 447, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 449
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 451, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\" value=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 454), "title", [], "any", false, false, true, 454), 454, $this->source), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\" value=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 458), "name", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 458), "name", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
        echo "\">
      </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
    </div>

    <h4>Departure</h4>
    <div class=\"form-group\">

      <select name=\"available_departure_select\" class=\"available_departure_select\">

        <option value=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 470), "date", [], "any", false, false, true, 470), 470, $this->source), "html", null, true);
        echo "\">
          ";
        // line 471
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 471), "date", [], "any", false, false, true, 471), 471, $this->source), "html", null, true);
        echo "
        </option>
        ";
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 473));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 474
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 474), 474, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 474), 474, $this->source), "html", null, true);
            echo "
        </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "





      </select>

    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
    </div>



    <div class=\"form-group\">
      <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"
        required></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

    <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\" style=\"opacity: 0;\"></div>

  </form>


            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">


          ";
        // line 515
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 515));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 516
            echo "          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 519
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 519)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 519), 519, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 519) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 519)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"background-image: url(&quot;";
            // line 521
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 521), "getPath", [], "any", false, false, true, 521), 521, $this->source), "html", null, true);
            echo "&quot;);\"
                    data-bg=\"url(";
            // line 522
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 522), "getPath", [], "any", false, false, true, 522), 522, $this->source), "html", null, true);
            echo ")\" data-was-processed=\"true\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$";
            // line 525
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 525), 525, $this->source), "html", null, true);
            echo " US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 530
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 530), 530, $this->source), "html", null, true);
            echo " </h3>
                  <p class=\"excerpt\">";
            // line 531
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 531), 531, $this->source), "html", null, true);
            echo " </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 533
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 533), 533, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>


          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "

        </div>
      </div>

    </div>
    <div class=\"col-sm-3\">


      <div id=\"sidebar\">



        ";
        // line 553
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 554
        echo "


      </div>
     
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tour-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  931 => 554,  927 => 553,  912 => 540,  899 => 533,  894 => 531,  890 => 530,  882 => 525,  876 => 522,  872 => 521,  867 => 519,  862 => 516,  858 => 515,  818 => 477,  806 => 474,  802 => 473,  797 => 471,  793 => 470,  774 => 458,  767 => 454,  761 => 451,  756 => 449,  751 => 447,  735 => 433,  722 => 426,  714 => 421,  706 => 415,  702 => 414,  681 => 395,  672 => 392,  666 => 390,  662 => 389,  634 => 364,  624 => 356,  614 => 352,  607 => 348,  601 => 345,  594 => 341,  586 => 336,  581 => 333,  577 => 332,  556 => 314,  549 => 310,  543 => 307,  536 => 303,  527 => 297,  500 => 275,  492 => 269,  483 => 265,  476 => 263,  468 => 258,  462 => 254,  456 => 252,  454 => 251,  446 => 246,  440 => 242,  438 => 241,  435 => 240,  433 => 239,  430 => 238,  426 => 237,  421 => 234,  417 => 233,  402 => 221,  390 => 211,  381 => 208,  375 => 206,  371 => 205,  355 => 192,  339 => 178,  328 => 173,  322 => 170,  316 => 167,  309 => 163,  301 => 158,  296 => 155,  292 => 154,  283 => 148,  276 => 144,  270 => 141,  263 => 137,  254 => 131,  229 => 111,  218 => 102,  209 => 98,  202 => 96,  194 => 91,  188 => 87,  182 => 85,  180 => 84,  172 => 79,  166 => 75,  164 => 74,  161 => 73,  159 => 72,  156 => 71,  152 => 70,  147 => 67,  143 => 66,  125 => 51,  97 => 26,  80 => 12,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'siteSearchInclude' %}<div class=\"lazy\" id=\"top\" style=\"background-image: url({{ TourDetail.recordDetail.preview_image.getPath }})\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"/\">Home</a> /
                <span>
                  <a href=\"/tours/default\">Tours</a> /<span
                    class=\"breadcrumb_last\" aria-current=\"page\">{{ TourDetail.recordDetail.name }}</span>
                </span>
              </span>
            </span></p>
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
                    <a href=\"{{image.path}}\" class=\"jg-entry\"
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

              <form data-request=\"{{ BottomForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ BottomForm }}_forms_flash\"></div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\" value=\"{{this.page.title}}\">
      </div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\" value=\"{{ TourDetail.recordDetail.name }} {{ post.title }} {{ TypeToursDetail.recordDetail.name }}\">
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
      <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"
        required></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

    <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\" style=\"opacity: 0;\"></div>

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



        {% partial 'site/sidebar' %}



      </div>
     
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tour-detail.htm", "");
    }
}
