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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
         <a href=\"https://kyrgyzstan-tourism.com\"><img alt=\"logo\" style=\"max-width: 200px;\"
             data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo_white.png\"
             class=\"img-responsive lazyload\"
             src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
             data-pagespeed-url-hash=\"31059146\"
             onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\"><noscript><img
               src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E\"
               data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo_white.png\" alt=\"logo\"
               class=\"img-responsive lazy\" style=\"max-width: 200px;\"
               data-pagespeed-url-hash=\"2295055879\"></noscript></a>
         <div class=\"social\">
           <a href=\"https://www.facebook.com/kgTourism/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
           <a href=\"https://www.instagram.com/kyrgyzstan_tourism/\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
           <a href=\"https://www.youtube.com/channel/UCUpfM9AjbXgLe_IGKSDtqRA\" target=\"_blank\"><i
               class=\"fa fa-youtube\"></i></a>
           <a href=\"https://twitter.com/NativeKyrgyzst1\" target=\"_blank\"><i
               class=\"fa fa-Example of twitter-square fa-twitter-square\"></i></a>
           <a href=\"https://www.tripadvisor.ru/Attraction_Review-g293948-d17433303-Reviews-Kyrgyz_Tourism-Bishkek.html\"
             target=\"_blank\"><i class=\"fa fa-Example of tripadvisor fa-tripadvisor\"></i></a>
           <a href=\"https://www.pinterest.com/myrza79/\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
         </div>
       </div>

       <div class=\"col-sm-8\">
         <h2>Contacts</h2>
         <div class=\"row\">

           <div class=\"col-sm-6\">
             <p class=\"phone\">
               <phone><a href=\"tel:+996 706 363738\">+996 706 363738</a></phone>
             </p>
             <p class=\"phone\">
               <phone><a href=\"tel:+996 777 970779\">+996 777 970779</a></phone>
             </p>
             <p><a href=\"mailto:info@kyrgyzstan-tourism.com\">info@kyrgyzstan-tourism.com</a></p>
           </div>
           <div class=\"col-sm-6\">
             <p>Kyrgyz Republic. Bishkek city</p>
             <p>Mon – Sat 9.00 – 18.00 Sunday CLOSED</p>
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

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
     <div class=\"row\">

       <div class=\"col-sm-4\">
         <a href=\"https://kyrgyzstan-tourism.com\"><img alt=\"logo\" style=\"max-width: 200px;\"
             data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo_white.png\"
             class=\"img-responsive lazyload\"
             src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
             data-pagespeed-url-hash=\"31059146\"
             onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\"><noscript><img
               src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E\"
               data-src=\"https://kyrgyzstan-tourism.com/wp-content/themes/native/img/logo_white.png\" alt=\"logo\"
               class=\"img-responsive lazy\" style=\"max-width: 200px;\"
               data-pagespeed-url-hash=\"2295055879\"></noscript></a>
         <div class=\"social\">
           <a href=\"https://www.facebook.com/kgTourism/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
           <a href=\"https://www.instagram.com/kyrgyzstan_tourism/\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
           <a href=\"https://www.youtube.com/channel/UCUpfM9AjbXgLe_IGKSDtqRA\" target=\"_blank\"><i
               class=\"fa fa-youtube\"></i></a>
           <a href=\"https://twitter.com/NativeKyrgyzst1\" target=\"_blank\"><i
               class=\"fa fa-Example of twitter-square fa-twitter-square\"></i></a>
           <a href=\"https://www.tripadvisor.ru/Attraction_Review-g293948-d17433303-Reviews-Kyrgyz_Tourism-Bishkek.html\"
             target=\"_blank\"><i class=\"fa fa-Example of tripadvisor fa-tripadvisor\"></i></a>
           <a href=\"https://www.pinterest.com/myrza79/\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
         </div>
       </div>

       <div class=\"col-sm-8\">
         <h2>Contacts</h2>
         <div class=\"row\">

           <div class=\"col-sm-6\">
             <p class=\"phone\">
               <phone><a href=\"tel:+996 706 363738\">+996 706 363738</a></phone>
             </p>
             <p class=\"phone\">
               <phone><a href=\"tel:+996 777 970779\">+996 777 970779</a></phone>
             </p>
             <p><a href=\"mailto:info@kyrgyzstan-tourism.com\">info@kyrgyzstan-tourism.com</a></p>
           </div>
           <div class=\"col-sm-6\">
             <p>Kyrgyz Republic. Bishkek city</p>
             <p>Mon – Sat 9.00 – 18.00 Sunday CLOSED</p>
           </div>
         </div>
       </div>

     </div>
   </div>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/footer.htm", "");
    }
}
