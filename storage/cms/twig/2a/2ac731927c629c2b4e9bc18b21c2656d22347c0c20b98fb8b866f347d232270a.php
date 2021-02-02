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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/partials/site/sidebar.htm */
class __TwigTemplate_2551e8953e505151923f9f0ed06570f94524cceb36799f9e77346b809865883d extends \Twig\Template
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
        $tags = array("for" => 7);
        $filters = array("page" => 9, "escape" => 9, "resize" => 109);
        $functions = array("form_token" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape', 'resize'],
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
        echo "<div class=\"tags tags_light\">
  <h3>Sights</h3>
  <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
  <ul class=\"list-unstyled sdb_ul\">
  

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "items", [], "any", false, false, true, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 8
            echo "
        <li><a href=\"";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 9)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 9), 9, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 9) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 9)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</a></li>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "   

  </ul>


</div>



<div class=\"form_wrapper sdb_form\">


  <h3>Book the tour</h3>

  <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>










  <form data-request=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 37, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 39
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 41, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 44), "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 48), "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 48), "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\">
      </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
    </div>

    <h4>Departure</h4>
    <div class=\"form-group\">

      <select name=\"available_departure_select\" class=\"available_departure_select\">

        <option value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 60), "date", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "\">
          ";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 61), "date", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
        </option>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 64
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
        </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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

<div class=\"sdb_most_popular hidden-xs\">

  <h3>Most popular tours</h3>


  ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "items", [], "any", false, false, true, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 103
            echo "
  <div class=\"item item_tour with_border auto_height \">
    <a
      href=\"";
            // line 106
            echo ((twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 106)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 106), 106, $this->source), [twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 106) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 106)])) : (""));
            echo "\">
      <span class=\"img_wrapper\">
        <span class=\"img lazy\"
          style=\"background-image: url(";
            // line 109
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 109), "getPath", [], "any", false, false, true, 109), 109, $this->source), 265, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ")\"></span>

      </span>
      <div class=\"desc\">
        <h3>";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</h3>
        <p class=\"excerpt\">";
            // line 114
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            echo "</p>
      </div>
      <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
        ";
            // line 117
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
        days</p>
    </a>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 123,  251 => 117,  245 => 114,  241 => 113,  234 => 109,  228 => 106,  223 => 103,  219 => 102,  182 => 67,  170 => 64,  166 => 63,  161 => 61,  157 => 60,  138 => 48,  131 => 44,  125 => 41,  120 => 39,  115 => 37,  88 => 12,  77 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tags tags_light\">
  <h3>Sights</h3>
  <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
  <ul class=\"list-unstyled sdb_ul\">
  

  {% for record in Sights.items %}

        <li><a href=\"{{Sights.property('recordPage') ? Sights.property('recordPage')|page({(Sights.paramName('recordPageSlug')):(record.slug)})}}\">{{record.name}}</a></li>

  {% endfor %}
   

  </ul>


</div>



<div class=\"form_wrapper sdb_form\">


  <h3>Book the tour</h3>

  <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>










  <form data-request=\"{{ genericForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ genericForm }}_forms_flash\"></div>

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

<div class=\"sdb_most_popular hidden-xs\">

  <h3>Most popular tours</h3>


  {% for record in PopularTours.items %}

  <div class=\"item item_tour with_border auto_height \">
    <a
      href=\"{{PopularTours.property('recordPage') ? PopularTours.property('recordPage')|page({(PopularTours.paramName('recordPageSlug')):(record.slug)})}}\">
      <span class=\"img_wrapper\">
        <span class=\"img lazy\"
          style=\"background-image: url({{ record.preview_image.getPath | resize(265, false, { mode: 'crop', quality: '80', extension: 'jpg' })}})\"></span>

      </span>
      <div class=\"desc\">
        <h3>{{ record.name }}</h3>
        <p class=\"excerpt\">{{ record.description }}</p>
      </div>
      <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
        {{record.tour_duration}}
        days</p>
    </a>
  </div>

  {% endfor %}


</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/sidebar.htm", "");
    }
}
