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
        $tags = array("for" => 48, "partial" => 218);
        $filters = array("escape" => 16, "page" => 53);
        $functions = array("form_token" => 145);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['escape', 'page'],
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
  #sidebar .form-group select {
    display: none;
  }
</style>
<div id=\"top\" class=\"lazy small_top\"
  style=\"background-image: url('https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg')\">


  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span
                  class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
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
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 49
            echo "
              <div class=\"s_archive_group\">

                <h2><a
                    href=\"";
            // line 53
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 53)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 53), 53, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 53) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 53)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
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
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
                          </p>
                        </td>

                        <td>
                          <p>
                            ";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date1", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_status", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                          <p>\$";
            // line 86
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_cost", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo " US</p>
                        </td>
                        <td>
                          <button class=\"cstm_button group_archive_book_button\" id=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "\">Book</button>
                        </td>
                      </tr>

                      ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "schedule_tours", [], "any", false, false, true, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 94
                echo "                      <tr>
                        <td>
                          <p>
                            ";
                // line 97
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                echo "
                          </p>
                        </td>
                        <td>
                          <p>
                            ";
                // line 102
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">";
                // line 106
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                          <p>\$";
                // line 109
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo " US</p>
                        </td>
                        <td>
                          <button class=\"cstm_button group_archive_book_button\"
                            id=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "\">Book</button>
                        </td>
                      </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
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
        // line 126
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
        // line 143
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 143, $this->source), "html", null, true);
        echo "::onFormSubmit\" class=\"\">

                ";
        // line 145
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

                <div id=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 147, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

                <div class=\"form-group\">
                  <input type=\"hidden\" id=\"tourName\" name=\"tour name\" class=\"form-control\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                  <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                </div>

                <h4>Departure</h4>
                <div class=\"form-group\">

                  <select name=\"available_departure_select\" class=\"available_departure_select\">
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 162
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "\">
                      ";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
                    </option>
                    ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "schedule_tours", [], "any", false, false, true, 165));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 166
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "
                    </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
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
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 206));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 207
            echo "
            <li><a
                href=\"";
            // line 209
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 209)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 209), 209, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 209) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 209)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "          </ul>


        </div>


        ";
        // line 218
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 219
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
        return array (  402 => 219,  398 => 218,  390 => 212,  379 => 209,  375 => 207,  371 => 206,  333 => 170,  327 => 169,  315 => 166,  311 => 165,  306 => 163,  301 => 162,  297 => 161,  283 => 150,  277 => 147,  272 => 145,  267 => 143,  248 => 126,  234 => 117,  224 => 113,  217 => 109,  211 => 106,  204 => 102,  196 => 97,  191 => 94,  187 => 93,  180 => 89,  174 => 86,  168 => 83,  161 => 79,  152 => 73,  127 => 53,  121 => 49,  117 => 48,  93 => 27,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  #sidebar h4,
  #sidebar .form-group select {
    display: none;
  }
</style>
<div id=\"top\" class=\"lazy small_top\"
  style=\"background-image: url('https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/Sunset_1920.jpg')\">


  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\"><span><span><a href=\"/\">Home</a> / <span
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
                            {{record.date}}
                          </p>
                        </td>

                        <td>
                          <p>
                            {{record.date1}}
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
              <form data-request=\"{{ genericForm }}::onFormSubmit\" class=\"\">

                {{ form_token() }}

                <div id=\"{{ genericForm }}_forms_flash\"></div>

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
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours.htm", "");
    }
}
