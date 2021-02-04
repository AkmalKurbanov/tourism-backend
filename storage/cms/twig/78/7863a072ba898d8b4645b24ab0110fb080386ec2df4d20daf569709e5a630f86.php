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
        $tags = array("for" => 60, "set" => 66, "if" => 68, "partial" => 543);
        $filters = array("resize" => 2, "escape" => 9, "raw" => 45, "page" => 105, "date" => 125);
        $functions = array("form_token" => 442);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'partial'],
                ['resize', 'escape', 'raw', 'page', 'date'],
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
        echo "<div id=\"top\" class=\"lazy\"
  style=\"background-image: url(";
        // line 2
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 2), "preview_image", [], "any", false, false, true, 2), "getPath", [], "any", false, false, true, 2), 2, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ")\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/group-tours\">Group tours</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 9), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</span></span></span>
          </p>
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
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 21), "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
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
        // line 45
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 45), "itinerary_desc", [], "any", false, false, true, 45), 45, $this->source);
        echo "



              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 60), "custom_repeater", [], "any", false, false, true, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 61
            echo "
                <div class=\"panel panel-default\">

                  ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 65
                echo "
                  ";
                // line 66
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 66);
                // line 67
                echo "
                  ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 68) == "richeditor")) {
                    // line 69
                    echo "
                  <div id=\"\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">

                      ";
                    // line 73
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 73, $this->source);
                    echo "

                    </div>
                  </div>

                  ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 78
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 78) == "checkbox")) {
                    // line 79
                    echo "                  <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                  ";
                } else {
                    // line 81
                    echo "
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"\">
                        ";
                    // line 85
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 85, $this->source), "html", null, true);
                    echo "</a>
                    </h4>
                  </div>

                  ";
                }
                // line 90
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a
                  href=\"";
        // line 105
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 105)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 105), 105, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 105) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 105)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 105), "name", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
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
                        <p class=\"dateDeparture\">
                          ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 125), "date1", [], "any", false, false, true, 125), 125, $this->source), "d-m-Y"), "html", null, true);
        echo "
                        </p>
                      </td>

                      <td>
                        <p>
                          ";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 131), "date2", [], "any", false, false, true, 131), 131, $this->source), "d-m-Y"), "html", null, true);
        echo "
                        </p>
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
                        <button class=\"cstm_button group_archive_book_button\">Book</button>
                      </td>
                    </tr>



                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 148
            echo "                    <tr>
                      <td>
                        <p class=\"dateDeparture\">
                          ";
            // line 151
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 151), 151, $this->source), "d-m-Y"), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p>
                          ";
            // line 156
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 156), 156, $this->source), "d-m-Y"), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
            // line 160
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "</p>
                      </td>
                      <td>
                        <p>\$";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\">
                          Book</button>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
                  </tbody>

                </table>
              </div>



            </div>


            <div class=\"tab-pane\" id=\"location\">


              <iframe src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 185), "itinerary_map", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
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
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 198));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 199
            echo "                <a data-fancybox=\"gallery\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
              </div>
            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">

            ";
        // line 215
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 215), "itinerary_desc", [], "any", false, false, true, 215), 215, $this->source);
        echo "

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">
              ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 227), "custom_repeater", [], "any", false, false, true, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 228
            echo "
              <div class=\"panel panel-default\" style=\"display: flex; flex-direction: column-reverse;\">

                ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 232
                echo "
                ";
                // line 233
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 233);
                // line 234
                echo "
                ";
                // line 235
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 235) == "richeditor")) {
                    // line 236
                    echo "
                <div id=\"collapse_1\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">

                    ";
                    // line 240
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 240, $this->source);
                    echo "

                  </div>
                </div>

                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 245
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 245) == "checkbox")) {
                    // line 246
                    echo "                <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                ";
                } else {
                    // line 248
                    echo "
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      ";
                    // line 252
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 252, $this->source), "html", null, true);
                    echo "</a>
                  </h4>
                </div>

                ";
                }
                // line 257
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "
              </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "
            </div>



            <h2><a
                href=\"";
        // line 269
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 269)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 269), 269, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 269) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 269)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 269), "name", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
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
                      <p class=\"dateDeparture\">
                        ";
        // line 291
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 291), "date1", [], "any", false, false, true, 291), 291, $this->source), "d-m-Y"), "html", null, true);
        echo "
                      </p>
                    </td>

                    <td>
                      <p>
                        ";
        // line 297
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 297), "date2", [], "any", false, false, true, 297), 297, $this->source), "d-m-Y"), "html", null, true);
        echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
        // line 301
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 301), "tour_status", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
        echo "</p>
                    </td>
                    <td>
                      <p>\$";
        // line 304
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 304), "tour_cost", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
        echo " US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\">Book</button>
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
                      <p class=\"dateDeparture\">
                        ";
            // line 329
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 329), 329, $this->source), "d-m-Y"), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p>
                        ";
            // line 334
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 334), 334, $this->source), "d-m-Y"), "html", null, true);
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
                      <button class=\"cstm_button group_archive_book_button\">Book</button>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "
                </tbody>

              </table>
            </div>



            <iframe src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 356), "itinerary_map", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
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
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 381));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 382
            echo "                    <a data-fancybox=\"gallery\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 382), 382, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                      style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                      <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 384
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
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
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "faq", [], "any", false, false, true, 406));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 407
            echo "

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  ";
            // line 413
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
            echo " </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                ";
            // line 418
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, true, 418), 418, $this->source);
            echo "
              </div>
            </div>
          </div>


          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
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
        // line 440
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 440, $this->source), "html", null, true);
        echo "::onFormSubmit\" class=\"\">

                ";
        // line 442
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

                <div id=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 444, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name\" class=\"form-control\"
                    value=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 448), "name", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                </div>

                <h4>Departure</h4>
                <div class=\"form-group\">

                  <select name=\"available_departure_select\" class=\"available_departure_select\"></select>

                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
                </div>



                <div class=\"form-group\">
                  <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\"
                    placeholder=\"Your message\" required></textarea>
                </div>

                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\"
                  style=\"background: #a32330;
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
        // line 491
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "items", [], "any", false, false, true, 491));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 492
            echo "          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 495
            echo ((twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 495)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 495), 495, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 495) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 495)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\"
                    style=\"background-image: url(&quot;";
            // line 498
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 498), "getPath", [], "any", false, false, true, 498), 498, $this->source), 265, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "&quot;);\"
                    data-bg=\"url(";
            // line 499
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 499), "getPath", [], "any", false, false, true, 499), 499, $this->source), "html", null, true);
            echo ")\" data-was-processed=\"true\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$";
            // line 502
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 502), 502, $this->source), "html", null, true);
            echo " US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 507
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 507), 507, $this->source), "html", null, true);
            echo " </h3>
                  <p class=\"excerpt\">";
            // line 508
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 508), 508, $this->source), "html", null, true);
            echo " </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 510
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 510), 510, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>


          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
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
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 531));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 532
            echo "
            <li><a
                href=\"";
            // line 534
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 534)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 534), 534, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 534) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 534)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        echo "          </ul>


        </div>


        ";
        // line 543
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 544
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



  \$(\"table tr td\").each(function (index) {
    var str = \$(this).find('.available').text().split(\" \").pop();
    \$(this).find('.available').addClass(str);

    var str1 = \$(this).find('.available').text();
    var lastIndex = str1.lastIndexOf(\" \");
    str1 = str1.substring(0, lastIndex);
    \$(this).find('.available').text('').append(str1);
    if (\$(this).find('.available').hasClass('not_available')) {
      \$(this).parent().remove();
    }

  });



  var dateDeparture = [];
  \$(\".dateDeparture\").each(function (index) {
    if (\$(this).is(\":visible\")) {
      dateDeparture.push(\$(this).text().replace(/\\s+/g, ' ').trim());
    }
  });


  \$.each(dateDeparture, function () {
    \$('.available_departure_select').append(`<option value=\"\${this}\">` + this + '</option>');
  });

  \$(\".s_archive_group .table tbody\").each(function (index) {
    if (\$(this).html().trim() === '') {
      \$(this).parents().eq(2).remove();
    }
  });

  \$(\".s_archive_group .table tbody .available\").each(function (index) {
    if (\$(this).html().trim() === '') {
      \$(this).parents().eq(1).remove();
    }
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
        return array (  895 => 544,  891 => 543,  883 => 537,  872 => 534,  868 => 532,  864 => 531,  848 => 517,  835 => 510,  830 => 508,  826 => 507,  818 => 502,  812 => 499,  808 => 498,  802 => 495,  797 => 492,  793 => 491,  747 => 448,  740 => 444,  735 => 442,  730 => 440,  713 => 425,  700 => 418,  692 => 413,  684 => 407,  680 => 406,  659 => 387,  650 => 384,  644 => 382,  640 => 381,  612 => 356,  602 => 348,  589 => 341,  583 => 338,  576 => 334,  568 => 329,  563 => 326,  559 => 325,  535 => 304,  529 => 301,  522 => 297,  513 => 291,  486 => 269,  478 => 263,  469 => 259,  462 => 257,  454 => 252,  448 => 248,  442 => 246,  440 => 245,  432 => 240,  426 => 236,  424 => 235,  421 => 234,  419 => 233,  416 => 232,  412 => 231,  407 => 228,  403 => 227,  388 => 215,  375 => 204,  366 => 201,  360 => 199,  356 => 198,  340 => 185,  324 => 171,  310 => 163,  304 => 160,  297 => 156,  289 => 151,  284 => 148,  280 => 147,  268 => 138,  262 => 135,  255 => 131,  246 => 125,  221 => 105,  210 => 96,  201 => 92,  194 => 90,  186 => 85,  180 => 81,  174 => 79,  172 => 78,  164 => 73,  158 => 69,  156 => 68,  153 => 67,  151 => 66,  148 => 65,  144 => 64,  139 => 61,  135 => 60,  117 => 45,  90 => 21,  75 => 9,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"lazy\"
  style=\"background-image: url({{ TourDetail.recordDetail.preview_image.getPath | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <a href=\"/group-tours\">Group tours</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">{{ TourDetail.recordDetail.name }}</span></span></span>
          </p>
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
                        <p class=\"dateDeparture\">
                          {{TourDetail.recordDetail.date1 | date('d-m-Y')}}
                        </p>
                      </td>

                      <td>
                        <p>
                          {{TourDetail.recordDetail.date2 | date('d-m-Y')}}
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">{{TourDetail.recordDetail.tour_status}}</p>
                      </td>
                      <td>
                        <p>\${{TourDetail.recordDetail.tour_cost}} US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\">Book</button>
                      </td>
                    </tr>



                    {% for schedule in recordDetail.schedule_tours %}
                    <tr>
                      <td>
                        <p class=\"dateDeparture\">
                          {{schedule.tour_dateDeparture | date('d-m-Y')}}
                        </p>
                      </td>
                      <td>
                        <p>
                          {{schedule.tour_dateEnd | date('d-m-Y')}}
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">{{ schedule.status_tour }}</p>
                      </td>
                      <td>
                        <p>\${{ schedule.cost_tour }} US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\">
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
                      <p class=\"dateDeparture\">
                        {{TourDetail.recordDetail.date1 | date('d-m-Y')}}
                      </p>
                    </td>

                    <td>
                      <p>
                        {{TourDetail.recordDetail.date2 | date('d-m-Y')}}
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">{{TourDetail.recordDetail.tour_status}}</p>
                    </td>
                    <td>
                      <p>\${{TourDetail.recordDetail.tour_cost}} US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\">Book</button>
                    </td>
                  </tr>















                  {% for schedule in recordDetail.schedule_tours %}
                  <tr>
                    <td>
                      <p class=\"dateDeparture\">
                        {{schedule.tour_dateDeparture | date('d-m-Y')}}
                      </p>
                    </td>
                    <td>
                      <p>
                        {{schedule.tour_dateEnd | date('d-m-Y')}}
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">{{ schedule.status_tour }}</p>
                    </td>
                    <td>
                      <p>\${{ schedule.cost_tour }} US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\">Book</button>
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

                  <select name=\"available_departure_select\" class=\"available_departure_select\"></select>

                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
                </div>



                <div class=\"form-group\">
                  <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\"
                    placeholder=\"Your message\" required></textarea>
                </div>

                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\"
                  style=\"background: #a32330;
                  border: 0; \">send</button>



              </form>

            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">


          {% for record in Tours.items %}
          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"{{Tours.property('recordPage') ? Tours.property('recordPage')|page({(Tours.paramName('recordPageSlug')):(record.slug)})}}\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\"
                    style=\"background-image: url(&quot;{{ record.preview_image.getPath | resize(265, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}&quot;);\"
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



  \$(\"table tr td\").each(function (index) {
    var str = \$(this).find('.available').text().split(\" \").pop();
    \$(this).find('.available').addClass(str);

    var str1 = \$(this).find('.available').text();
    var lastIndex = str1.lastIndexOf(\" \");
    str1 = str1.substring(0, lastIndex);
    \$(this).find('.available').text('').append(str1);
    if (\$(this).find('.available').hasClass('not_available')) {
      \$(this).parent().remove();
    }

  });



  var dateDeparture = [];
  \$(\".dateDeparture\").each(function (index) {
    if (\$(this).is(\":visible\")) {
      dateDeparture.push(\$(this).text().replace(/\\s+/g, ' ').trim());
    }
  });


  \$.each(dateDeparture, function () {
    \$('.available_departure_select').append(`<option value=\"\${this}\">` + this + '</option>');
  });

  \$(\".s_archive_group .table tbody\").each(function (index) {
    if (\$(this).html().trim() === '') {
      \$(this).parents().eq(2).remove();
    }
  });

  \$(\".s_archive_group .table tbody .available\").each(function (index) {
    if (\$(this).html().trim() === '') {
      \$(this).parents().eq(1).remove();
    }
  });
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours-detail.htm", "");
    }
}
