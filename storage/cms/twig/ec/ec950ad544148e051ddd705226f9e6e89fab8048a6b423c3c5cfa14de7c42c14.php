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

/* C:\work\xampp\htdocs\tourism/themes/tourism/pages/type-tours.htm */
class __TwigTemplate_8c717f565a0833579178c3008e3849dffd0e27fe540ac03b3a6787b9acfac61f extends \Twig\Template
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
        $tags = array("for" => 55, "partial" => 98);
        $filters = array("escape" => 2, "page" => 58);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['escape', 'page'],
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
        echo "<div id=\"top\" class=\"small_top lazy\" style=\"\"
    data-bg=\"url(";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 2), "preview_image", [], "any", false, false, true, 2), "getPath", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ")\">

    <div class=\"breadcrumb_wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span
                                    class=\"breadcrumb_last\" aria-current=\"page\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 9), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
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
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TypeToursDetail"] ?? null), "recordDetail", [], "any", false, false, true, 20), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <div id=\"archive_content\">

                <div id=\"content\" class=\"tax-content\">
                    <p>We offer a wide range of horseback tours throughout <a
                            href=\"https://kyrgyzstan-tourism.com/kyrgyzstan/\" target=\"_blank\"
                            rel=\"noopener noreferrer\">Kyrgyzstan</a>. Each route and details can be fully tailor-made
                        for your requests. Our guides have extensive experience in conducting horse tours of various
                        categories from one to twenty days’ routes. During the tour, you will get riding skills and find
                        the most good-natured friends and feel the spirit of adventure.</p>
                    <h3><a href=\"https://kyrgyzstan-tourism.com/blog/horseriding-in-kyrgyzstan/\" target=\"_blank\"
                            rel=\"noopener noreferrer\">-The 7 horseback riding basic rules in Kyrgyzstan.-</a></h3>
                    <h6><em>Horse tours in Kyrgyzstan. Directed by Myrzabek Ozubekov</em><iframe width=\"560\"
                            height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"
                            data-src=\"https://www.youtube.com/embed/H4DLFG-aVOk\" class=\"lazyload\"
                            src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe>
                    </h6>
                    <div id=\"gtx-trans\" style=\"position: absolute; left: 534px; top: 126px;\">
                        <div class=\"gtx-trans-icon\"></div>
                    </div>
                </div>


                <div class=\"row\">

                 ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "items", [], "any", false, false, true, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 56
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"item item_tour with_border auto_height \">
                            <a href=\"";
            // line 58
            echo ((twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 58)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 58), 58, $this->source), [twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 58) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 58)])) : (""));
            echo "\">
                                <span class=\"img_wrapper\">
                                    <span class=\"img lazy\" style=\"\"
                                        data-bg=\"url(";
            // line 61
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 61), "getPath", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo ")\"></span>

                                </span>
                                <div class=\"desc\">
                                    <h3>";
            // line 65
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</h3>
                                    <p class=\"excerpt\">";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "</p>
                                </div>
                                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "getAttributeValueBySlug", [0 => "prodolzhitelnost_tura"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo " days</p>
                            </a>
                        </div>

                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                </div>
            







                <div id=\"pagin_wrapper\">


                </div>
            </div>

        </div>

        <div class=\"col-sm-3\">
            <div class=\"sidebar_wrapper\">

                <div id=\"sidebar\">


                ";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "                  

                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/type-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 99,  195 => 98,  169 => 74,  157 => 68,  152 => 66,  148 => 65,  141 => 61,  135 => 58,  131 => 56,  127 => 55,  89 => 20,  75 => 9,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top\" class=\"small_top lazy\" style=\"\"
    data-bg=\"url({{TypeToursDetail.recordDetail.preview_image.getPath }})\">

    <div class=\"breadcrumb_wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p id=\"breadcrumbs\"><span><span><a href=\"https://kyrgyzstan-tourism.com/\">Home</a> / <span
                                    class=\"breadcrumb_last\" aria-current=\"page\">{{ TypeToursDetail.recordDetail.name }}</span></span></span></p>
                    <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"desc\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <h1 id=\"single_tour_title\">{{ TypeToursDetail.recordDetail.name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <div id=\"archive_content\">

                <div id=\"content\" class=\"tax-content\">
                    <p>We offer a wide range of horseback tours throughout <a
                            href=\"https://kyrgyzstan-tourism.com/kyrgyzstan/\" target=\"_blank\"
                            rel=\"noopener noreferrer\">Kyrgyzstan</a>. Each route and details can be fully tailor-made
                        for your requests. Our guides have extensive experience in conducting horse tours of various
                        categories from one to twenty days’ routes. During the tour, you will get riding skills and find
                        the most good-natured friends and feel the spirit of adventure.</p>
                    <h3><a href=\"https://kyrgyzstan-tourism.com/blog/horseriding-in-kyrgyzstan/\" target=\"_blank\"
                            rel=\"noopener noreferrer\">-The 7 horseback riding basic rules in Kyrgyzstan.-</a></h3>
                    <h6><em>Horse tours in Kyrgyzstan. Directed by Myrzabek Ozubekov</em><iframe width=\"560\"
                            height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"
                            data-src=\"https://www.youtube.com/embed/H4DLFG-aVOk\" class=\"lazyload\"
                            src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"></iframe>
                    </h6>
                    <div id=\"gtx-trans\" style=\"position: absolute; left: 534px; top: 126px;\">
                        <div class=\"gtx-trans-icon\"></div>
                    </div>
                </div>


                <div class=\"row\">

                 {% for record in Tours.items %}
                    <div class=\"col-sm-4\">
                        <div class=\"item item_tour with_border auto_height \">
                            <a href=\"{{Tours.property('recordPage') ? Tours.property('recordPage')|page({(Tours.paramName('recordPageSlug')):(record.slug)})}}\">
                                <span class=\"img_wrapper\">
                                    <span class=\"img lazy\" style=\"\"
                                        data-bg=\"url({{ record.preview_image.getPath }})\"></span>

                                </span>
                                <div class=\"desc\">
                                    <h3>{{record.name}}</h3>
                                    <p class=\"excerpt\">{{record.description}}</p>
                                </div>
                                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> {{ record.getAttributeValueBySlug('prodolzhitelnost_tura') }} days</p>
                            </a>
                        </div>

                    </div>
                    {% endfor %}

                </div>
            







                <div id=\"pagin_wrapper\">


                </div>
            </div>

        </div>

        <div class=\"col-sm-3\">
            <div class=\"sidebar_wrapper\">

                <div id=\"sidebar\">


                {% partial 'site/sidebar' %}
                  

                </div>
            </div>
        </div>

    </div>
</div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/type-tours.htm", "");
    }
}
