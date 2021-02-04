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
        $tags = array("for" => 73, "set" => 79, "if" => 81, "partial" => 545);
        $filters = array("resize" => 8, "escape" => 19, "raw" => 58, "page" => 118, "date" => 138);
        $functions = array("form_token" => 452);

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
        echo "<style>
  .cstm_button.group_archive_book_button.disabled {
    opacity: .7;
    pointer-events: none;
  }
</style>
<div class=\"lazy\" id=\"top\"
  style=\"background-image: url(";
        // line 8
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 8), "preview_image", [], "any", false, false, true, 8), "getPath", [], "any", false, false, true, 8), 8, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ")\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"/\">Home</a> /
                <span>
                  <a href=\"/tours\">Tours</a> /<span class=\"breadcrumb_last\"
                    aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 19), "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
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
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 33), "name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
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
        // line 58
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 58), "itinerary_desc", [], "any", false, false, true, 58), 58, $this->source);
        echo "



              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 73), "custom_repeater", [], "any", false, false, true, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 74
            echo "
                <div class=\"panel panel-default\">

                  ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 78
                echo "
                  ";
                // line 79
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 79);
                // line 80
                echo "
                  ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 81) == "richeditor")) {
                    // line 82
                    echo "
                  <div id=\"\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">

                      ";
                    // line 86
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 86, $this->source);
                    echo "

                    </div>
                  </div>

                  ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 91
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 91) == "checkbox")) {
                    // line 92
                    echo "                  <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                  ";
                } else {
                    // line 94
                    echo "
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"\">
                        ";
                    // line 98
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 98, $this->source), "html", null, true);
                    echo "</a>
                    </h4>
                  </div>

                  ";
                }
                // line 103
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a
                  href=\"";
        // line 118
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 118)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 118), 118, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 118) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 118)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 118), "name", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
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
        // line 138
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 138), "date1", [], "any", false, false, true, 138), 138, $this->source), "d-m-Y"), "html", null, true);
        echo "
                        </p>
                      </td>

                      <td>
                        <p>
                          ";
        // line 144
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 144), "date2", [], "any", false, false, true, 144), 144, $this->source), "d-m-Y"), "html", null, true);
        echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
        // line 148
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 148), "tour_status", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "</p>
                      </td>
                      <td>
                        <p>\$";
        // line 151
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 151), "tour_cost", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo " US</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\">Book</button>
                      </td>
                    </tr>



                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 161
            echo "                    <tr>
                      <td>
                        <p class=\"dateDeparture\">
                          ";
            // line 164
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 164), 164, $this->source), "d-m-Y"), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p>
                          ";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 169), 169, $this->source), "d-m-Y"), "html", null, true);
            echo "
                        </p>
                      </td>
                      <td>
                        <p class=\"available\">";
            // line 173
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "</p>
                      </td>
                      <td>
                        <p>\$";
            // line 176
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
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
        // line 184
        echo "
                  </tbody>

                </table>
              </div>



            </div>


            <div class=\"tab-pane\" id=\"location\">


              <iframe src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 198), "itinerary_map", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
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
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 210));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 211
            echo "                <a data-fancybox=\"gallery\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                  style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                  <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "              </div>
            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">

            ";
        // line 226
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 226), "itinerary_desc", [], "any", false, false, true, 226), 226, $this->source);
        echo "

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">
              ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 238), "custom_repeater", [], "any", false, false, true, 238));
        foreach ($context['_seq'] as $context["_key"] => $context["repeaterBlock"]) {
            // line 239
            echo "
              <div class=\"panel panel-default\" style=\"display: flex; flex-direction: column-reverse;\">

                ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["repeaterBlock"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 243
                echo "
                ";
                // line 244
                $context["customRepeaterFieldDefinition"] = twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "getCustomRepeaterField", [0 => $context["key"]], "method", false, false, true, 244);
                // line 245
                echo "
                ";
                // line 246
                if ((twig_get_attribute($this->env, $this->source, ($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 246) == "richeditor")) {
                    // line 247
                    echo "
                <div id=\"collapse_1\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">

                    ";
                    // line 251
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 251, $this->source);
                    echo "

                  </div>
                </div>

                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 256
($context["customRepeaterFieldDefinition"] ?? null), "custom_repeater_field_type", [], "any", false, false, true, 256) == "checkbox")) {
                    // line 257
                    echo "                <!-- <span class=\"glyphicon ";
                    echo (($context["value"]) ? ("glyphicon-check") : ("glyphicon-unchecked"));
                    echo "\"></span> -->
                ";
                } else {
                    // line 259
                    echo "
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      ";
                    // line 263
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 263, $this->source), "html", null, true);
                    echo "</a>
                  </h4>
                </div>

                ";
                }
                // line 268
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "
              </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "
            </div>



            <h2><a
                href=\"";
        // line 280
        echo ((twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 280)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 280), 280, $this->source), [twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 280) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 280)])) : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 280), "name", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
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
        // line 302
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 302), "dat1", [], "any", false, false, true, 302), 302, $this->source), "d-m-Y"), "html", null, true);
        echo "
                      </p>
                    </td>

                    <td>
                      <p>
                        ";
        // line 308
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 308), "date2", [], "any", false, false, true, 308), 308, $this->source), "d-m-Y"), "html", null, true);
        echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
        // line 312
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 312), "tour_status", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
        echo "</p>
                    </td>
                    <td>
                      <p>\$";
        // line 315
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 315), "tour_cost", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
        echo " US</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\">Book</button>
                    </td>
                  </tr>















                  ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 336));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 337
            echo "                  <tr>
                    <td>
                      <p class=\"dateDeparture\">
                        ";
            // line 340
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 340), 340, $this->source), "d-m-Y"), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p>
                        ";
            // line 345
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 345), 345, $this->source), "d-m-Y"), "html", null, true);
            echo "
                      </p>
                    </td>
                    <td>
                      <p class=\"available\">";
            // line 349
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                      <p>\$";
            // line 352
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
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
        // line 359
        echo "
                </tbody>

              </table>
            </div>



            <iframe src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 367), "itinerary_map", [], "any", false, false, true, 367), 367, $this->source), "html", null, true);
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
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 392));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 393
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
            echo "\" class=\"jg-entry\"
                      style=\"width: 129px; height: 128.5px; top: 6px; left: 6px; opacity: 1;\">
                      <img class=\"ls-is-cached lazyloaded\" src=\"";
            // line 395
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 395), 395, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
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
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "faq", [], "any", false, false, true, 417));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 418
            echo "

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  ";
            // line 424
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, true, 424), 424, $this->source), "html", null, true);
            echo " </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                ";
            // line 429
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, true, 429), 429, $this->source);
            echo "
              </div>
            </div>
          </div>


          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "
        </div>




      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>

              <form data-request=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 450, $this->source), "html", null, true);
        echo "::onFormSubmit\">

                ";
        // line 452
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

                <div id=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 454, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\"
                    value=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 458), "title", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\"
                    value=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 463), "name", [], "any", false, false, true, 463), 463, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 463), 463, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 463), "name", [], "any", false, false, true, 463), 463, $this->source), "html", null, true);
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

                <button id=\"simpleContactSubmitButton\" type=\"submit\"
                  class=\"btn btn-default cstm_button submit\">send</button>

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
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "items", [], "any", false, false, true, 506));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 507
            echo "          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a
                href=\"";
            // line 510
            echo ((twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 510)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 510), 510, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 510) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 510)])) : (""));
            echo "\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\"
                    style=\"background-image: url(&quot;";
            // line 513
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 513), "getPath", [], "any", false, false, true, 513), 513, $this->source), 265, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "&quot;);\"
                    data-bg=\"url(";
            // line 514
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 514), "getPath", [], "any", false, false, true, 514), 514, $this->source), "html", null, true);
            echo ")\" data-was-processed=\"true\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$";
            // line 517
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 517), 517, $this->source), "html", null, true);
            echo " US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>";
            // line 522
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 522), 522, $this->source), "html", null, true);
            echo " </h3>
                  <p class=\"excerpt\">";
            // line 523
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 523), 523, $this->source), "html", null, true);
            echo " </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 525
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 525), 525, $this->source), "html", null, true);
            echo " days</p>
              </a>
            </div>


          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "

        </div>
      </div>

    </div>
    <div class=\"col-sm-3\">


      <div id=\"sidebar\">



        ";
        // line 545
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 546
        echo "


      </div>

    </div>
  </div>
</div>


<script>
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
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tour-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  889 => 546,  885 => 545,  870 => 532,  857 => 525,  852 => 523,  848 => 522,  840 => 517,  834 => 514,  830 => 513,  824 => 510,  819 => 507,  815 => 506,  765 => 463,  757 => 458,  750 => 454,  745 => 452,  740 => 450,  724 => 436,  711 => 429,  703 => 424,  695 => 418,  691 => 417,  670 => 398,  661 => 395,  655 => 393,  651 => 392,  623 => 367,  613 => 359,  600 => 352,  594 => 349,  587 => 345,  579 => 340,  574 => 337,  570 => 336,  546 => 315,  540 => 312,  533 => 308,  524 => 302,  497 => 280,  489 => 274,  480 => 270,  473 => 268,  465 => 263,  459 => 259,  453 => 257,  451 => 256,  443 => 251,  437 => 247,  435 => 246,  432 => 245,  430 => 244,  427 => 243,  423 => 242,  418 => 239,  414 => 238,  399 => 226,  387 => 216,  378 => 213,  372 => 211,  368 => 210,  353 => 198,  337 => 184,  323 => 176,  317 => 173,  310 => 169,  302 => 164,  297 => 161,  293 => 160,  281 => 151,  275 => 148,  268 => 144,  259 => 138,  234 => 118,  223 => 109,  214 => 105,  207 => 103,  199 => 98,  193 => 94,  187 => 92,  185 => 91,  177 => 86,  171 => 82,  169 => 81,  166 => 80,  164 => 79,  161 => 78,  157 => 77,  152 => 74,  148 => 73,  130 => 58,  102 => 33,  85 => 19,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  .cstm_button.group_archive_book_button.disabled {
    opacity: .7;
    pointer-events: none;
  }
</style>
<div class=\"lazy\" id=\"top\"
  style=\"background-image: url({{ TourDetail.recordDetail.preview_image.getPath | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\">

  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
            <span><span>
                <a href=\"/\">Home</a> /
                <span>
                  <a href=\"/tours\">Tours</a> /<span class=\"breadcrumb_last\"
                    aria-current=\"page\">{{ TourDetail.recordDetail.name }}</span>
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
                        {{TourDetail.recordDetail.dat1 | date('d-m-Y')}}
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
                  <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\"
                    value=\"{{this.page.title}}\">
                </div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\"
                    value=\"{{ TourDetail.recordDetail.name }} {{ post.title }} {{ TypeToursDetail.recordDetail.name }}\">
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

                <button id=\"simpleContactSubmitButton\" type=\"submit\"
                  class=\"btn btn-default cstm_button submit\">send</button>

                <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\" style=\"opacity: 0;\"></div>

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



        {% partial 'site/sidebar' %}



      </div>

    </div>
  </div>
</div>


<script>
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
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/tour-detail.htm", "");
    }
}
