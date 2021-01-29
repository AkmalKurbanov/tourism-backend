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

/* C:\work\OpenServer\domains\tourism.loc/themes/tourism/partials/site/sidebar_without_date.htm */
class __TwigTemplate_6eb78d4b6d500484045bc6569c67ad4886e5236c5ecd3f7b4389eafceecf51a5 extends \Twig\Template
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
        $tags = array("for" => 5);
        $filters = array("page" => 8, "escape" => 8);
        $functions = array("form_token" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape'],
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
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "items", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 6
            echo "
    <li><a
        href=\"";
            // line 8
            echo ((twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 8)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 8), 8, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Sights"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 8) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 8)])) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</a>
    </li>

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
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 36, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 38
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 40, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-group\">
      <input type=\"hidden\" id=\"pageTitle\" name=\"page title\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\"
        value=\"";
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

    <div class=\"form-group\">
      <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
    </div>



    <div class=\"form-group\">
      <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"
        required></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

    <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>

  </form>

</div>
</div>

<div class=\"sdb_most_popular hidden-xs\">

  <h3>Most popular tours</h3>


  ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "items", [], "any", false, false, true, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 81
            echo "
  <div class=\"item item_tour with_border auto_height \">
    <a
      href=\"";
            // line 84
            echo ((twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 84)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 84), 84, $this->source), [twig_get_attribute($this->env, $this->source, ($context["PopularTours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 84) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 84)])) : (""));
            echo "\">
      <span class=\"img_wrapper\">
          <span class=\"img lazy\" style=\"background-image: url(";
            // line 86
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 86), "getPath", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ")\"></span>

      </span>
      <div class=\"desc\">
        <h3>";
            // line 90
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</h3>
        <p class=\"excerpt\">";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "</p>
      </div>
      <p class=\"duration\"><i class=\"fa fa-clock-o\"></i>
        ";
            // line 94
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "tour_duration", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
        days</p>
    </a>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/sidebar_without_date.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 100,  208 => 94,  202 => 91,  198 => 90,  191 => 86,  186 => 84,  181 => 81,  177 => 80,  138 => 48,  130 => 43,  124 => 40,  119 => 38,  114 => 36,  88 => 12,  76 => 8,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tags tags_light\">
  <h3>Sights</h3>
  <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
  <ul class=\"list-unstyled sdb_ul\">
    {% for record in Sights.items %}

    <li><a
        href=\"{{Sights.property('recordPage') ? Sights.property('recordPage')|page({(Sights.paramName('recordPageSlug')):(record.slug)})}}\">{{record.name}}</a>
    </li>

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
      <input type=\"hidden\" id=\"tourName\" name=\"tour name/ post name /\" class=\"form-control\"
        value=\"{{ TourDetail.recordDetail.name }} {{ post.title }} {{ TypeToursDetail.recordDetail.name }}\">
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
    </div>



    <div class=\"form-group\">
      <textarea id=\"message\" name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Your message\"
        required></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default cstm_button submit\">send</button>

    <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>

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
          <span class=\"img lazy\" style=\"background-image: url({{ record.preview_image.getPath }})\"></span>

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


</div>", "C:\\work\\OpenServer\\domains\\tourism.loc/themes/tourism/partials/site/sidebar_without_date.htm", "");
    }
}
