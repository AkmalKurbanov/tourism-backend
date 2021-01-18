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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "logo", [], "any", false, false, true, 6), "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
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
               <phone><a href=\"tel:\"></a></phone>
             </p>
             <p class=\"phone\">
               <phone><a href=\"tel:\"></a></phone>
             </p>
             <p><a href=\"mailto:info@kyrgyzstan-tourism.com\"></a></p>
           </div>
           <div class=\"col-sm-6\">
             <p></p>
           </div>
         </div>
       </div>

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
        return array (  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
     <div class=\"row\">

       <div class=\"col-sm-4\">
         <a href=\"https://kyrgyzstan-tourism.com\">
         <img src=\"{{record.logo.path}}\" alt=\"\">
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
               <phone><a href=\"tel:\"></a></phone>
             </p>
             <p class=\"phone\">
               <phone><a href=\"tel:\"></a></phone>
             </p>
             <p><a href=\"mailto:info@kyrgyzstan-tourism.com\"></a></p>
           </div>
           <div class=\"col-sm-6\">
             <p></p>
           </div>
         </div>
       </div>

     </div>
   </div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/footer.htm", "");
    }
}
