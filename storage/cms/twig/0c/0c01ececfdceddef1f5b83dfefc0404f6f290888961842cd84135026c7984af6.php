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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/header.htm */
class __TwigTemplate_addce623bdcfa39daf4a56c0e69abdc7b5ad0786fa8fcb55e3f6ff7c5ecac5ae extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">
          

  <phone><a href=\"tel:";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "phone1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "phone1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</a></phone>

            

          </div>
        </div>

        <div class=\"col-sm-6 text-right social_top\">
        
        


 

          <div class=\"social\">
     
    
      <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "social_link", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"\"></i></a>
    
         
                                    
                                        </div>

          <button class=\"blank search_button\" id=\"show_search\" data-toggle=\"modal\" data-target=\"#modal_search\"><i
              class=\"fa fa-search\"></i></button>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-12\">
          <div class=\"line_helper\"></div>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-3\">
          <a href=\"https://kyrgyzstan-tourism.com/\" class=\"logo\">
            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 50), "logo", [], "any", false, false, true, 50), "path", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "\" alt=\"\">
         </a>
        </div>

        <div class=\"col-sm-9\">
          <nav class=\"navbar\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"https://kyrgyzstan-tourism.com/\">Home</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tours <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/bike-tours/\">Bike
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/culture-tours/\">Culture
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/experience-tours/\">Experience
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/horseback-tours-in-kyrgyzstan/\">Horseback
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/multi-active-tours/\">Multi-active
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/jeep-tours-in-kyrgyzstan/\">Off
                        road tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/photo-tours/\">Photo
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/trekking-kyrgyzstan/\">Trekking</a>
                    </li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/winter-tours/\">Winter
                        tours</a></li>
                  </ul>
                </li>
                <li><a href=\"/group-tours/\">Group tours</a></li>
                <li><a href=\"https://kyrgyzstan-tourism.com/blog/\">Blog</a></li>
                <li id=\"menu-item-4622\"
                  class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4622 dropdown\">
                  <a title=\"Kyrgyzstan\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"
                    aria-haspopup=\"true\">Kyrgyzstan <span class=\"caret\"></span></a>
                  <ul role=\"menu\" class=\" dropdown-menu\">
                    <li id=\"menu-item-4623\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4623\">
                      <a title=\"About Kyrgyzstan\" href=\"https://kyrgyzstan-tourism.com/kyrgyzstan-travel-guide/\">About
                        Kyrgyzstan</a></li>
                    <li id=\"menu-item-5599\"
                      class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-5599\">
                      <a title=\"Projects\" href=\"https://kyrgyz-tourism.kg/\">Projects</a></li>
                    <li id=\"menu-item-4675\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4675\">
                      <a title=\"Getting around\" href=\"https://kyrgyzstan-tourism.com/travel/\">Getting around</a></li>
                    <li id=\"menu-item-4941\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4941\">
                      <a title=\"Permits\" href=\"https://kyrgyzstan-tourism.com/get-permits/\">Permits</a></li>
                    <li id=\"menu-item-5086\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5086\">
                      <a title=\"Inspiration for visiting Kyrgyzstan\"
                        href=\"https://kyrgyzstan-tourism.com/video-gallery/\">Inspiration for
                        visiting Kyrgyzstan</a></li>
                    <li id=\"menu-item-4658\"
                      class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4658\">
                      <a title=\"Photo gallery\" href=\"/galleries\">Photo gallery</a></li>
                  </ul>
                </li>
                <li id=\"menu-item-4631\"
                  class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4631 dropdown\">
                  <a title=\"About\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-haspopup=\"true\">About
                    <span class=\"caret\"></span></a>
                  <ul role=\"menu\" class=\" dropdown-menu\">
                    <li id=\"menu-item-4649\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4649\">
                      <a title=\"About us\" href=\"https://kyrgyzstan-tourism.com/kyrgyz-tours/\">About us</a></li>
                    <li id=\"menu-item-4652\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4652\">
                      <a title=\"Contact us\" href=\"https://kyrgyzstan-tourism.com/contact-us/\">Contact us</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>

      </div>

    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  94 => 26,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">
          

  <phone><a href=\"tel:{{this.theme.phone1}}\">{{this.theme.phone1}}</a></phone>

            

          </div>
        </div>

        <div class=\"col-sm-6 text-right social_top\">
        
        


 

          <div class=\"social\">
     
    
      <a href=\"{{record.social_link}}\" target=\"_blank\"><i class=\"\"></i></a>
    
         
                                    
                                        </div>

          <button class=\"blank search_button\" id=\"show_search\" data-toggle=\"modal\" data-target=\"#modal_search\"><i
              class=\"fa fa-search\"></i></button>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-12\">
          <div class=\"line_helper\"></div>
        </div>

      </div>

      <div class=\"row\">

        <div class=\"col-sm-3\">
          <a href=\"https://kyrgyzstan-tourism.com/\" class=\"logo\">
            <img src=\"{{this.theme.logo.path}}\" alt=\"\">
         </a>
        </div>

        <div class=\"col-sm-9\">
          <nav class=\"navbar\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"https://kyrgyzstan-tourism.com/\">Home</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tours <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/bike-tours/\">Bike
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/culture-tours/\">Culture
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/experience-tours/\">Experience
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/horseback-tours-in-kyrgyzstan/\">Horseback
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/multi-active-tours/\">Multi-active
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/jeep-tours-in-kyrgyzstan/\">Off
                        road tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/photo-tours/\">Photo
                        tours</a></li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/trekking-kyrgyzstan/\">Trekking</a>
                    </li>
                    <li><a href=\"https://kyrgyzstan-tourism.com/tours/type/winter-tours/\">Winter
                        tours</a></li>
                  </ul>
                </li>
                <li><a href=\"/group-tours/\">Group tours</a></li>
                <li><a href=\"https://kyrgyzstan-tourism.com/blog/\">Blog</a></li>
                <li id=\"menu-item-4622\"
                  class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4622 dropdown\">
                  <a title=\"Kyrgyzstan\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"
                    aria-haspopup=\"true\">Kyrgyzstan <span class=\"caret\"></span></a>
                  <ul role=\"menu\" class=\" dropdown-menu\">
                    <li id=\"menu-item-4623\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4623\">
                      <a title=\"About Kyrgyzstan\" href=\"https://kyrgyzstan-tourism.com/kyrgyzstan-travel-guide/\">About
                        Kyrgyzstan</a></li>
                    <li id=\"menu-item-5599\"
                      class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-5599\">
                      <a title=\"Projects\" href=\"https://kyrgyz-tourism.kg/\">Projects</a></li>
                    <li id=\"menu-item-4675\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4675\">
                      <a title=\"Getting around\" href=\"https://kyrgyzstan-tourism.com/travel/\">Getting around</a></li>
                    <li id=\"menu-item-4941\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4941\">
                      <a title=\"Permits\" href=\"https://kyrgyzstan-tourism.com/get-permits/\">Permits</a></li>
                    <li id=\"menu-item-5086\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5086\">
                      <a title=\"Inspiration for visiting Kyrgyzstan\"
                        href=\"https://kyrgyzstan-tourism.com/video-gallery/\">Inspiration for
                        visiting Kyrgyzstan</a></li>
                    <li id=\"menu-item-4658\"
                      class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4658\">
                      <a title=\"Photo gallery\" href=\"/galleries\">Photo gallery</a></li>
                  </ul>
                </li>
                <li id=\"menu-item-4631\"
                  class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4631 dropdown\">
                  <a title=\"About\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-haspopup=\"true\">About
                    <span class=\"caret\"></span></a>
                  <ul role=\"menu\" class=\" dropdown-menu\">
                    <li id=\"menu-item-4649\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4649\">
                      <a title=\"About us\" href=\"https://kyrgyzstan-tourism.com/kyrgyz-tours/\">About us</a></li>
                    <li id=\"menu-item-4652\"
                      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4652\">
                      <a title=\"Contact us\" href=\"https://kyrgyzstan-tourism.com/contact-us/\">Contact us</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>

      </div>

    </div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/header.htm", "");
    }
}
