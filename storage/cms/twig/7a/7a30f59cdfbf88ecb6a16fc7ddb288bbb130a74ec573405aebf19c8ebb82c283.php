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
        $tags = array("for" => 116);
        $filters = array("page" => 120, "escape" => 122);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape'],
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
  <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o2\" lang=\"ru-RU\" dir=\"ltr\">
    <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
    <form action=\"/group-tours/explore-south-and-north-kyrgyzstan/#wpcf7-f5211-o2\" method=\"post\" class=\"wpcf7-form init\"
      novalidate=\"novalidate\">
      <div style=\"display: none;\">
        <input type=\"hidden\" name=\"_wpcf7\" value=\"5211\" />
        <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\" />
        <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\" />
        <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f5211-o2\" />
        <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\" />
        <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\" />
        <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\" value=\"\" />
      </div>
      <p><span class=\"wpcf7-form-control-wrap text-tour\"><input type=\"text\" name=\"text-tour\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text hidden input_tour_name\" aria-invalid=\"false\" /></span><span
          class=\"wpcf7-form-control-wrap text-departure\"><input type=\"text\" name=\"text-departure\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text text_departure hidden\" aria-invalid=\"false\" /></span><span
          class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\" aria-invalid=\"false\"
            placeholder=\"Your name\" /></span></p>
      <h4>Departure</h4>
      <p><select name='available_departure_select' class='available_departure_select'>
          <option value=\"Jul 22, 2021 - Thu\" selected>Jul 22, 2021 - Thu</option>
          <option value=\"Sep 4, 2021 - Sat\">Sep 4, 2021 - Sat</option>
        </select></p>
      <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
            aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
      <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\" rows=\"10\"
            class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\" placeholder=\"Your message\"></textarea></span>
      </p>
      <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
          class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"></p>
      <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
    </form>
  </div>
</div>

<div class=\"sdb_most_popular hidden-xs\">

  <h3>Most popular tours</h3>



  ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "items", [], "any", false, false, true, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 117
            echo "
  <div class=\"item item_tour with_border auto_height \">
    <a
      href=\"";
            // line 120
            echo ((twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 120)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 120), 120, $this->source), [twig_get_attribute($this->env, $this->source, ($context["GroupTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 120) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 120)])) : (""));
            echo "\">
      <span class=\"img_wrapper\">
        <span class=\"img lazy\" style=\"\" data-bg=\"url(";
            // line 122
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 122), "getPath", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo ")\"></span>

      </span>
      <div class=\"desc\">
        <h3>";
            // line 126
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "</h3>
        <p class=\"excerpt\">";
            // line 127
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "</p>
      </div>
      <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
        ";
            // line 130
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "prodolzhitelnost_tura"], "method", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
        days</p>
    </a>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
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
        return array (  222 => 136,  210 => 130,  204 => 127,  200 => 126,  193 => 122,  188 => 120,  183 => 117,  179 => 116,  62 => 1,);
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
  <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o2\" lang=\"ru-RU\" dir=\"ltr\">
    <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
    <form action=\"/group-tours/explore-south-and-north-kyrgyzstan/#wpcf7-f5211-o2\" method=\"post\" class=\"wpcf7-form init\"
      novalidate=\"novalidate\">
      <div style=\"display: none;\">
        <input type=\"hidden\" name=\"_wpcf7\" value=\"5211\" />
        <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\" />
        <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\" />
        <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f5211-o2\" />
        <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\" />
        <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\" />
        <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\" value=\"\" />
      </div>
      <p><span class=\"wpcf7-form-control-wrap text-tour\"><input type=\"text\" name=\"text-tour\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text hidden input_tour_name\" aria-invalid=\"false\" /></span><span
          class=\"wpcf7-form-control-wrap text-departure\"><input type=\"text\" name=\"text-departure\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text text_departure hidden\" aria-invalid=\"false\" /></span><span
          class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\" aria-invalid=\"false\"
            placeholder=\"Your name\" /></span></p>
      <h4>Departure</h4>
      <p><select name='available_departure_select' class='available_departure_select'>
          <option value=\"Jul 22, 2021 - Thu\" selected>Jul 22, 2021 - Thu</option>
          <option value=\"Sep 4, 2021 - Sat\">Sep 4, 2021 - Sat</option>
        </select></p>
      <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\" size=\"40\"
            class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
            aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
      <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\" rows=\"10\"
            class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\" placeholder=\"Your message\"></textarea></span>
      </p>
      <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
          class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"></p>
      <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
    </form>
  </div>
</div>

<div class=\"sdb_most_popular hidden-xs\">

  <h3>Most popular tours</h3>



  {% for record in PopularTours.items %}

  <div class=\"item item_tour with_border auto_height \">
    <a
      href=\"{{GroupTours.property('recordPage') ? GroupTours.property('recordPage')|page({(GroupTours.paramName('recordPageSlug')):(record.slug)})}}\">
      <span class=\"img_wrapper\">
        <span class=\"img lazy\" style=\"\" data-bg=\"url({{ record.preview_image.getPath }})\"></span>

      </span>
      <div class=\"desc\">
        <h3>{{ record.name }}</h3>
        <p class=\"excerpt\">{{ record.description }}</p>
      </div>
      <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
        {{ record.getAttributeValueBySlug('prodolzhitelnost_tura') }}
        days</p>
    </a>
  </div>

  {% endfor %}


</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/sidebar.htm", "");
    }
}
