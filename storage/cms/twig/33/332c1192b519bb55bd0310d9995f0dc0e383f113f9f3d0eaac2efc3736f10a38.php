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
        $tags = array("for" => 51, "partial" => 162);
        $filters = array("resize" => 11, "media" => 11, "escape" => 19, "page" => 56, "date" => 76);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['resize', 'media', 'escape', 'page', 'date'],
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
          <div class=\"col-sm-12\" style=\"width: 100%\">
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
                          <p class=\"dateDeparture\">
                            ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date1", [], "any", false, false, true, 76), 76, $this->source), "d-m-Y"), "html", null, true);
            echo "
                          </p>
                        </td>

                        <td>
                          <p>
                            ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date2", [], "any", false, false, true, 82), 82, $this->source), "d-m-Y"), "html", null, true);
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
                          <a href=\"";
            // line 92
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 92)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 92), 92, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 92) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 92)])) : (""));
            echo "\"
                            class=\"cstm_button group_archive_book_button\">Book</a>
                        </td>
                      </tr>

                      ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "schedule_tours", [], "any", false, false, true, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 98
                echo "                      <tr>
                        <td>
                          <p class=\"dateDeparture\">
                            ";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 101), 101, $this->source), "d-m-Y"), "html", null, true);
                echo "
                          </p>
                        </td>
                        <td>
                          <p>
                            ";
                // line 106
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateEnd", [], "any", false, false, true, 106), 106, $this->source), "d-m-Y"), "html", null, true);
                echo "
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "status_tour", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                          <p>\$";
                // line 113
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "cost_tour", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo " US</p>
                        </td>
                        <td>
                          <a href=\"";
                // line 116
                echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 116)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 116), 116, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 116) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 116)])) : (""));
                echo "\"
                            class=\"cstm_button group_archive_book_button\">Book</a>
                        </td>
                      </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
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
        // line 130
        echo "
            </div>
          </div>
        </div>


        <div id=\"pagin_wrapper\">


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
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "items", [], "any", false, false, true, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 151
            echo "
            <li><a
                href=\"";
            // line 153
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 153)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 153), 153, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 153) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 153)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "          </ul>


        </div>


        ";
        // line 162
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 163
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
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 163,  304 => 162,  296 => 156,  285 => 153,  281 => 151,  277 => 150,  255 => 130,  241 => 121,  230 => 116,  224 => 113,  218 => 110,  211 => 106,  203 => 101,  198 => 98,  194 => 97,  186 => 92,  180 => 89,  174 => 86,  167 => 82,  158 => 76,  133 => 56,  127 => 52,  123 => 51,  99 => 30,  85 => 19,  74 => 11,  62 => 1,);
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
          <div class=\"col-sm-12\" style=\"width: 100%\">
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
                          <p class=\"dateDeparture\">
                            {{record.date1 | date('d-m-Y')}}
                          </p>
                        </td>

                        <td>
                          <p>
                            {{record.date2 | date('d-m-Y')}}
                          </p>
                        </td>
                        <td>
                          <p class=\"available\">{{record.tour_status}}</p>
                        </td>
                        <td>
                          <p>\${{record.tour_cost}} US</p>
                        </td>
                        <td>
                          <a href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\"
                            class=\"cstm_button group_archive_book_button\">Book</a>
                        </td>
                      </tr>

                      {% for schedule in record.schedule_tours %}
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
                          <a href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\"
                            class=\"cstm_button group_archive_book_button\">Book</a>
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
</script>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/pages/group-tours.htm", "");
    }
}
