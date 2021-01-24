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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/sidebar.htm */
class __TwigTemplate_b5429b61f8d3f49b5b0b34e88b0aebc4f3f37d1eb351e9c615eebc84a91d1652 extends \Twig\Template
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
        $tags = array("for" => 110);
        $filters = array("escape" => 84, "page" => 153);
        $functions = array("form_token" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<div class=\"tags tags_light\">
  <h3>Sights</h3>
  <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
  <ul class=\"list-unstyled sdb_ul\">

    <li><a href=\"https://kyrgyzstan-tourism.com/sights/ak-bulung-reserve/\">akbulung</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/bokonbaevo/\">Bokonbay</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/saimaluu-tash/\">Saimaluu-Tash</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/kochkor/\">Kochkor</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/arslanbob/\">Arslanbob</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/talas/\">Talas</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/batken/\">Batken</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/jalal-abad-town/\">Jalal-Abad</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/karakol-town/\">Karakol</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/ala-archa-national-park/\">Ala-Archa National Park</a>
    </li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/issyk-kul-lake/\">Issyk-Kul Lake</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/naryn-town/\">Naryn town</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/sary-chelek/\">Sary-Chelek Lake</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/osh-town/\">Osh town</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/bishkek/\">Bishkek</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/tash-rabat-honoring-silk-road-heritage/\">Tash-Rabat
        Caravanserai</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/lake-song-kol/\">Lake Song-Kol</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/lake-kel-suu/\">Lake Kel-Suu</a></li>

  </ul>


</div>



<div class=\"form_wrapper sdb_form\">


  <h3>Book the tour</h3>

  <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>










  <form data-request=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 84, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 86
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 88, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 91), "title", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 95), "name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 95), "name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "\">
      </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
    </div>

    <h4>Departure</h4>
    <div class=\"form-group\">

      <select name=\"available_departure_select\" class=\"available_departure_select\">

        <option value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 107), "date", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "\">
          ";
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TourDetail"] ?? null), "recordDetail", [], "any", false, false, true, 108), "date", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
        </option>
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "schedule_tours", [], "any", false, false, true, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 111
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["schedule"], "tour_dateDeparture", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
        </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
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
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "items", [], "any", false, false, true, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 150
            echo "
  <div class=\"item item_tour with_border auto_height \">
    <a
      href=\"";
            // line 153
            echo ((twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 153)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 153), 153, $this->source), [twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 153) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 153)])) : (""));
            echo "\">
      <span class=\"img_wrapper\">
        <span class=\"img lazy\" style=\"\" data-bg=\"url(";
            // line 155
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 155), "getPath", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo ")\"></span>

      </span>
      <div class=\"desc\">
        <h3>";
            // line 159
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "</h3>
        <p class=\"excerpt\">";
            // line 160
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "</p>
      </div>
      <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
        ";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
        days</p>
    </a>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 169,  282 => 163,  276 => 160,  272 => 159,  265 => 155,  260 => 153,  255 => 150,  251 => 149,  214 => 114,  202 => 111,  198 => 110,  193 => 108,  189 => 107,  170 => 95,  163 => 91,  157 => 88,  152 => 86,  147 => 84,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tags tags_light\">
  <h3>Sights</h3>
  <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
  <ul class=\"list-unstyled sdb_ul\">

    <li><a href=\"https://kyrgyzstan-tourism.com/sights/ak-bulung-reserve/\">akbulung</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/bokonbaevo/\">Bokonbay</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/saimaluu-tash/\">Saimaluu-Tash</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/kochkor/\">Kochkor</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/arslanbob/\">Arslanbob</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/talas/\">Talas</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/batken/\">Batken</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/jalal-abad-town/\">Jalal-Abad</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/karakol-town/\">Karakol</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/ala-archa-national-park/\">Ala-Archa National Park</a>
    </li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/issyk-kul-lake/\">Issyk-Kul Lake</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/naryn-town/\">Naryn town</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/sary-chelek/\">Sary-Chelek Lake</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/osh-town/\">Osh town</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/bishkek/\">Bishkek</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/tash-rabat-honoring-silk-road-heritage/\">Tash-Rabat
        Caravanserai</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/lake-song-kol/\">Lake Song-Kol</a></li>


    <li><a href=\"https://kyrgyzstan-tourism.com/sights/lake-kel-suu/\">Lake Kel-Suu</a></li>

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
        <span class=\"img lazy\" style=\"\" data-bg=\"url({{ record.preview_image.getPath }})\"></span>

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


</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/sidebar.htm", "");
    }
}
