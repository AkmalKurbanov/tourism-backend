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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/pages/group-tours.htm */
class __TwigTemplate_ae1616716e647c68f8f2999b45e945fa99f86c1f6eb2eb5585437ba9ea901b5f extends \Twig\Template
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
        $tags = array("for" => 51, "partial" => 221);
        $filters = array("resize" => 11, "media" => 11, "escape" => 19, "page" => 56);
        $functions = array("form_token" => 148);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'media', 'escape', 'page'],
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
  #sidebar h4,
  #book_tour h4,
  #sidebar .form-group select,
  #book_tour .form-group select {
    display: none;
  }
</style>
<div id=\"top\" class=\"lazy small_top\"
  style=\"background-image:
    url(";
        // line 11
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "grouptoursbanner_groupToursBanner", [], "any", false, false, true, 11), 11, $this->source)), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
        echo ");\">


  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span class=\"breadcrumb_last\"
                  aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
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
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div id=\"archive_content\" class=\"group_archive_content\">


        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\" class=\"group_archive\" style=\"font-family: inherit;\">



              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 52
            echo "
              <div class=\"s_archive_group\">

                <h2><a
                    href=\"";
            // line 56
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 56)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 56), 56, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 56) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 56)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
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
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date1", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
                          </p>
                        </td>

                        <td>
                          <p>
                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date2", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">";
            // line 86
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_status", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                          <p>\$";
            // line 89
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo " US</p>
                        </td>
                        <td>
                          <button class=\"cstm_button group_archive_book_button\" id=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "\">Book</button>
                        </td>
                      </tr>

                      ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "schedule_tours", [], "any", false, false, true, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 97
                echo "                      <tr>
                        <td>
                          <p>
                            ";
                // line 100
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "
                          </p>
                        </td>
                        <td>
                          <p>
                            ";
                // line 105
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">";
                // line 109
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                          <p>\$";
                // line 112
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo " US</p>
                        </td>
                        <td>
                          <button class=\"cstm_button group_archive_book_button\"
                            id=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "\">Book</button>
                        </td>
                      </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "
                    </tbody>

                  </table>
                </div>


              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
            </div>
          </div>
        </div>


        <div id=\"pagin_wrapper\">


        </div>
      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>
              <form data-request=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 146, $this->source), "html", null, true);
        echo "::onFormSubmit\" class=\"\">

                ";
        // line 148
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

                <div id=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BottomForm"] ?? null), 150, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name\" class=\"form-control\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                </div>

                <h4>Departure</h4>
                <div class=\"form-group\">

                  <select name=\"available_departure_select\" class=\"available_departure_select\">
                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 165
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "\">
                      ";
            // line 166
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
                    </option>
                    ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "schedule_tours", [], "any", false, false, true, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 169
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "
                    </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
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

    </div>
    <div class=\"col-sm-3\">

      <div id=\"sidebar\" style=\"margin-top: 50px;\">
        <div class=\"tags tags_light\">
          <h3>Group tours</h3>
          <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
          <ul class=\"list-unstyled sdb_ul\">

            ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 209));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 210
            echo "
            <li><a
                href=\"";
            // line 212
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 212)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 212), 212, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 212) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 212)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "          </ul>


        </div>


        ";
        // line 221
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 222
        echo "
      </div>
    </div>
  </div>
</div>



<script>
  \$(document).ready(function () {
    \$(\".dates_table_archive .group_archive_book_button\").click(function () {
      var text = \$(this).attr('id');
      \$(\".available_departure_select option[value='\" + text + \"']\").attr('selected', 'selected');
    });
  });

  \$('.available').addClass(ssdfd);
  
  \$(\"table td p\").each(function (index) {
    var ser = \$(this).text();
    var ssdfd = ser.split(\" \").pop();
    \$(this).addClass(ssdfd);
  });
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 222,  404 => 221,  396 => 215,  385 => 212,  381 => 210,  377 => 209,  339 => 173,  333 => 172,  321 => 169,  317 => 168,  312 => 166,  307 => 165,  303 => 164,  289 => 153,  283 => 150,  278 => 148,  273 => 146,  254 => 129,  240 => 120,  230 => 116,  223 => 112,  217 => 109,  210 => 105,  202 => 100,  197 => 97,  193 => 96,  186 => 92,  180 => 89,  174 => 86,  167 => 82,  158 => 76,  133 => 56,  127 => 52,  123 => 51,  99 => 30,  85 => 19,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  #sidebar h4,
  #book_tour h4,
  #sidebar .form-group select,
  #book_tour .form-group select {
    display: none;
  }
</style>
<div id=\"top\" class=\"lazy small_top\"
  style=\"background-image:
    url({{ this.page.grouptoursbanner_groupToursBanner |media | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">


  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span class=\"breadcrumb_last\"
                  aria-current=\"page\">{{this.page.title}}</span></span></span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{this.page.title}}</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div id=\"archive_content\" class=\"group_archive_content\">


        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\" class=\"group_archive\" style=\"font-family: inherit;\">



              {% for record in GroupTours.items %}

              <div class=\"s_archive_group\">

                <h2><a
                    href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\">{{ record.name }}</a>
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
                            {{record.date1}}
                          </p>
                        </td>

                        <td>
                          <p>
                            {{record.date2}}
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">{{record.tour_status}}</p>
                        </td>
                        <td>
                          <p>\${{record.tour_cost}} US</p>
                        </td>
                        <td>
                          <button class=\"cstm_button group_archive_book_button\" id=\"{{record.date}}\">Book</button>
                        </td>
                      </tr>

                      {% for schedule in record.schedule_tours %}
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


              </div>
              {% endfor %}

            </div>
          </div>
        </div>


        <div id=\"pagin_wrapper\">


        </div>
      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>
              <form data-request=\"{{ BottomForm }}::onFormSubmit\" class=\"\">

                {{ form_token() }}

                <div id=\"{{ BottomForm }}_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name\" class=\"form-control\" value=\"{{ record.name }}\">
                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                </div>

                <h4>Departure</h4>
                <div class=\"form-group\">

                  <select name=\"available_departure_select\" class=\"available_departure_select\">
                    {% for record in GroupTours.items %}
                    <option value=\"{{record.date}}\">
                      {{record.date}}
                    </option>
                    {% for schedule in record.schedule_tours %}
                    <option value=\"{{schedule.tour_dateDeparture}}\">{{schedule.tour_dateDeparture}}
                    </option>
                    {% endfor %}
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

    </div>
    <div class=\"col-sm-3\">

      <div id=\"sidebar\" style=\"margin-top: 50px;\">
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
  \$(document).ready(function () {
    \$(\".dates_table_archive .group_archive_book_button\").click(function () {
      var text = \$(this).attr('id');
      \$(\".available_departure_select option[value='\" + text + \"']\").attr('selected', 'selected');
    });
  });

  \$('.available').addClass(ssdfd);
  
  \$(\"table td p\").each(function (index) {
    var ser = \$(this).text();
    var ssdfd = ser.split(\" \").pop();
    \$(this).addClass(ssdfd);
  });
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours.htm", "");
    }
}
