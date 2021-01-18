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

/* C:\work\xampp\htdocs\tourism/plugins/janvince/smallrecords/components/records/default.htm */
class __TwigTemplate_68c35e39e9e2c69f53aa024bd8065ca369bc22e57a9826bfc08263e654d198e4 extends \Twig\Template
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
        $tags = array("if" => 17, "for" => 49);
        $filters = array("escape" => 1, "media" => 57, "page" => 62, "length" => 76, "raw" => 133);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'media', 'page', 'length', 'raw'],
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
        echo "<div class=\"container ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cssClass"] ?? null), 1, $this->source), "html", null, true);
        echo "\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Records</h1>

        </div>

        <div class=\"col-xs-12 col-sm-6\">

            <ul class=\"list-group\">
                
                <li class=\"list-group-item\">Records from list: <strong>";
        // line 15
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getProperties", [], "any", false, false, true, 15), "areaSlug", [], "any", false, false, true, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getProperties", [], "any", false, false, true, 15), "areaSlug", [], "any", false, false, true, 15), "html", null, true))) : (print ("Not set")));
        echo "</strong></li>

                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categorySlug"], "method", false, false, true, 17)) {
            // line 18
            echo "                    <li class=\"list-group-item\">Records filtered by category: <strong>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categorySlug"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</strong></li>
                ";
        }
        // line 20
        echo "
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "areaSlug"], "method", false, false, true, 21)) {
            // line 22
            echo "                    <li class=\"list-group-item\">Records filtered by category used as: <strong>";
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "useMultiCategories"], "method", false, false, true, 22)) ? ("Secondary categories") : ("Main category"));
            echo "</strong></li>
                ";
        }
        // line 24
        echo "
                <li class=\"list-group-item\">Ordered by: <strong>";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getProperties", [], "any", false, false, true, 25), "orderBy", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getProperties", [], "any", false, false, true, 25), "orderByDirection", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ")</strong></li>

            </ul>

        </div>

        <div class=\"col-xs-12\">

            <h3>Records details</h3>

            <table class=\"table table-bordered table-striped table-hover\">

                <tr>
                
                    <th>Preview image</th>
                    <th>Name</th>
                    <th>List</th>
                    <th>Main category</th>
                    <th>Secondary categories</th>
                    <th>Tags</th>
                    <th>Attributes</th>
                
                </tr>

                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, true, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 50
            echo "
                    <tr>

                        <th width=\"150\">
                            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 54)) {
                // line 55
                echo "                                <img class=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 55), "getPath", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "\" width=\"100%\" />
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 56
$context["record"], "preview_image_media", [], "any", false, false, true, 56)) {
                // line 57
                echo "                                <img class=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "preview_image_media", [], "any", false, false, true, 57), 57, $this->source));
                echo "\" width=\"100%\" />
                            ";
            }
            // line 58
            echo "            
                        </th>

                        <td>
                            <a href=\"";
            // line 62
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 62)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 62), 62, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 62) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 62)])) : (""));
            echo "\">
                                ";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
                            </a>
                        </td>

                        <td>
                            ";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "area", [], "any", false, false, true, 68), "name", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, true, 72), "name", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 76
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "categories", [], "any", false, false, true, 76))) {
                // line 77
                echo "
                            <ul>

                                ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "categories", [], "any", false, false, true, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 81
                    echo "
                                    <li>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    echo "</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "
                            </ul>

                            ";
            }
            // line 89
            echo "                        </td>

                        <td>
                            ";
            // line 92
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tags", [], "any", false, false, true, 92))) {
                // line 93
                echo "
                            <ul>

                                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "tags", [], "any", false, false, true, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 97
                    echo "
                                    <li>";
                    // line 98
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                    echo "</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "
                            </ul>

                            ";
            }
            // line 105
            echo "                        </td>

                        <td>
                            ";
            // line 108
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "attributes", [], "any", false, false, true, 108))) {
                // line 109
                echo "
                            <ul>

                                ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "attributes", [], "any", false, false, true, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 113
                    echo "
                                    <li>";
                    // line 114
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo "</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "
                            </ul>

                            ";
            }
            // line 121
            echo "                        </td>

                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
            </table>

            ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "allowLimit"], "method", false, false, true, 129)) {
            // line 130
            echo "            
                <div>

                    ";
            // line 133
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, true, 133), "render", [], "any", false, false, true, 133), 133, $this->source);
            echo "
                
                </div>      
            
            ";
        }
        // line 138
        echo "
        </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/plugins/janvince/smallrecords/components/records/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 138,  318 => 133,  313 => 130,  311 => 129,  306 => 126,  296 => 121,  290 => 117,  279 => 114,  276 => 113,  272 => 112,  267 => 109,  265 => 108,  260 => 105,  254 => 101,  245 => 98,  242 => 97,  238 => 96,  233 => 93,  231 => 92,  226 => 89,  220 => 85,  211 => 82,  208 => 81,  204 => 80,  199 => 77,  197 => 76,  190 => 72,  183 => 68,  175 => 63,  171 => 62,  165 => 58,  157 => 57,  155 => 56,  148 => 55,  146 => 54,  140 => 50,  136 => 49,  107 => 25,  104 => 24,  98 => 22,  96 => 21,  93 => 20,  87 => 18,  85 => 17,  80 => 15,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container {{ cssClass }}\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Records</h1>

        </div>

        <div class=\"col-xs-12 col-sm-6\">

            <ul class=\"list-group\">
                
                <li class=\"list-group-item\">Records from list: <strong>{{__SELF__.getProperties.areaSlug ? __SELF__.getProperties.areaSlug : 'Not set'}}</strong></li>

                {% if __SELF__.property('categorySlug') %}
                    <li class=\"list-group-item\">Records filtered by category: <strong>{{__SELF__.property('categorySlug')}}</strong></li>
                {% endif %}

                {% if __SELF__.property('areaSlug') %}
                    <li class=\"list-group-item\">Records filtered by category used as: <strong>{{__SELF__.property('useMultiCategories') ? 'Secondary categories' : 'Main category'}}</strong></li>
                {% endif %}

                <li class=\"list-group-item\">Ordered by: <strong>{{__SELF__.getProperties.orderBy}} ({{__SELF__.getProperties.orderByDirection}})</strong></li>

            </ul>

        </div>

        <div class=\"col-xs-12\">

            <h3>Records details</h3>

            <table class=\"table table-bordered table-striped table-hover\">

                <tr>
                
                    <th>Preview image</th>
                    <th>Name</th>
                    <th>List</th>
                    <th>Main category</th>
                    <th>Secondary categories</th>
                    <th>Tags</th>
                    <th>Attributes</th>
                
                </tr>

                {% for record in __SELF__.items %}

                    <tr>

                        <th width=\"150\">
                            {% if record.preview_image %}
                                <img class=\"thumbnail\" alt=\"{{ record.name }}\" src=\"{{ record.preview_image.getPath }}\" width=\"100%\" />
                            {% elseif record.preview_image_media %}
                                <img class=\"thumbnail\" alt=\"{{ record.name }}\" src=\"{{ record.preview_image_media|media }}\" width=\"100%\" />
                            {% endif %}            
                        </th>

                        <td>
                            <a href=\"{{__SELF__.property('recordPage') ? __SELF__.property('recordPage')|page({(__SELF__.paramName('recordPageSlug')):(record.slug)})}}\">
                                {{ record.name }}
                            </a>
                        </td>

                        <td>
                            {{ record.area.name }}
                        </td>

                        <td>
                            {{ record.category.name }}
                        </td>

                        <td>
                            {% if record.categories|length %}

                            <ul>

                                {% for category in record.categories %}

                                    <li>{{ category.name }}</li>

                                {% endfor %}

                            </ul>

                            {% endif %}
                        </td>

                        <td>
                            {% if record.tags|length %}

                            <ul>

                                {% for tag in record.tags %}

                                    <li>{{ tag.name }}</li>

                                {% endfor %}

                            </ul>

                            {% endif %}
                        </td>

                        <td>
                            {% if record.attributes|length %}

                            <ul>

                                {% for attribute in record.attributes %}

                                    <li>{{ attribute.name }}:{{ attribute.value }}</li>

                                {% endfor %}

                            </ul>

                            {% endif %}
                        </td>

                    </tr>

                {% endfor %}

            </table>

            {% if __SELF__.property('allowLimit') %}
            
                <div>

                    {{ __SELF__.items.render|raw }}
                
                </div>      
            
            {% endif %}

        </div>

    </div>

</div>", "C:\\work\\xampp\\htdocs\\tourism/plugins/janvince/smallrecords/components/records/default.htm", "");
    }
}
