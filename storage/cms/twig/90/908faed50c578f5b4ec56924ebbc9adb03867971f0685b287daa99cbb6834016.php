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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/footer.htm */
class __TwigTemplate_424734f792bf4c9d83037135ab187bfec7a34be2ad79190eaa0e767e13bc90a1 extends \Twig\Template
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
        $filters = array("escape" => 6);
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

       <div class=\"col-sm-4\">
         <a href=\"https://kyrgyzstan-tourism.com\">
         <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "logo", [], "any", false, false, true, 6), "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" alt=\"\">
         </a>
         <div class=\"social\">
          


 
        <a href=\"\" target=\"_blank\"><i class=\"\"></i></a>
 

            
          </div>
       </div>

       <div class=\"col-sm-8\">
         <h2>Contacts</h2>
         <div class=\"row\">

           <div class=\"col-sm-6\">
             <p class=\"phone\">
               <phone><a href=\"tel:";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 26), "phone2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 26), "phone2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</a></phone>
             </p>
             <p class=\"phone\">
               <phone><a href=\"tel:";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 29), "phone3", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 29), "phone3", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</a></phone>
             </p>
             <p><a href=\"mailto:";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 31), "user_email", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 31), "user_email", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</a></p>
           </div>
           <div class=\"col-sm-6\">
             <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 34), "info", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</p>
           </div>
         </div>
       </div>

     </div>
   </div>
   <div class=\"line_helper\" style=\"background: #959da7;\"></div>
   <div class=\"container\">
     <div class=\"row\">
       <div class=\"col-xs-6\">
         <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 45), "copyright", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</p>
       </div>
       <div class=\"col-xs-6 text-right\"><a href=\"#\">";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 47), "termsUse", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</a></div>
     </div>
   </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  129 => 45,  115 => 34,  107 => 31,  100 => 29,  92 => 26,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
     <div class=\"row\">

       <div class=\"col-sm-4\">
         <a href=\"https://kyrgyzstan-tourism.com\">
         <img src=\"{{this.theme.logo.path}}\" alt=\"\">
         </a>
         <div class=\"social\">
          


 
        <a href=\"\" target=\"_blank\"><i class=\"\"></i></a>
 

            
          </div>
       </div>

       <div class=\"col-sm-8\">
         <h2>Contacts</h2>
         <div class=\"row\">

           <div class=\"col-sm-6\">
             <p class=\"phone\">
               <phone><a href=\"tel:{{this.theme.phone2}}\">{{this.theme.phone2}}</a></phone>
             </p>
             <p class=\"phone\">
               <phone><a href=\"tel:{{this.theme.phone3}}\">{{this.theme.phone3}}</a></phone>
             </p>
             <p><a href=\"mailto:{{this.theme.user_email}}\">{{this.theme.user_email}}</a></p>
           </div>
           <div class=\"col-sm-6\">
             <p>{{this.theme.info}}</p>
           </div>
         </div>
       </div>

     </div>
   </div>
   <div class=\"line_helper\" style=\"background: #959da7;\"></div>
   <div class=\"container\">
     <div class=\"row\">
       <div class=\"col-xs-6\">
         <p>{{this.theme.copyright}}</p>
       </div>
       <div class=\"col-xs-6 text-right\"><a href=\"#\">{{this.theme.termsUse}}</a></div>
     </div>
   </div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/footer.htm", "");
    }
}
