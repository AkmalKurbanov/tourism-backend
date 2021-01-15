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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/head_styles_index_page/style2.htm */
class __TwigTemplate_cb1e38cf55f7befae1f1c40f02eccefd1b6239dcb607fa2c0b32e1eef406bcd2 extends \Twig\Template
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
        echo "<style type=\"text/css\">
   .heateorSssInstagramBackground {
     background: radial-gradient(circle at 30% 107%, #fdf497 0, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%)
   }

   div.heateor_sss_horizontal_sharing i.heateorSssInstagramBackground {
     background: #fff !important
   }

   div.heateor_sss_standard_follow_icons_container i.heateorSssInstagramBackground {
     background: #fff
   }

   .heateor_sss_horizontal_sharing .heateorSssSharing,
   .heateor_sss_standard_follow_icons_container .heateorSssSharing {
     background-color: #fff;
     color: #005271;
     border-width: 0;
     border-style: solid;
     border-color: transparent
   }

   .heateor_sss_horizontal_sharing .heateorSssSharing:hover,
   .heateor_sss_standard_follow_icons_container .heateorSssSharing:hover {
     color: #2cb1b6;
     border-color: transparent
   }

   .heateor_sss_vertical_sharing .heateorSssSharing,
   .heateor_sss_floating_follow_icons_container .heateorSssSharing {
     color: #fff;
     border-width: 0;
     border-style: solid;
     border-color: transparent
   }

   .heateor_sss_vertical_sharing .heateorSssSharing:hover,
   .heateor_sss_floating_follow_icons_container .heateorSssSharing:hover {
     border-color: transparent
   }

   @media screen and (max-width:783px) {
     .heateor_sss_vertical_sharing {
       display: none !important
     }

     .heateor_sss_floating_follow_icons_container {
       display: none !important
     }
   }
 </style>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_styles_index_page/style2.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
   .heateorSssInstagramBackground {
     background: radial-gradient(circle at 30% 107%, #fdf497 0, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%)
   }

   div.heateor_sss_horizontal_sharing i.heateorSssInstagramBackground {
     background: #fff !important
   }

   div.heateor_sss_standard_follow_icons_container i.heateorSssInstagramBackground {
     background: #fff
   }

   .heateor_sss_horizontal_sharing .heateorSssSharing,
   .heateor_sss_standard_follow_icons_container .heateorSssSharing {
     background-color: #fff;
     color: #005271;
     border-width: 0;
     border-style: solid;
     border-color: transparent
   }

   .heateor_sss_horizontal_sharing .heateorSssSharing:hover,
   .heateor_sss_standard_follow_icons_container .heateorSssSharing:hover {
     color: #2cb1b6;
     border-color: transparent
   }

   .heateor_sss_vertical_sharing .heateorSssSharing,
   .heateor_sss_floating_follow_icons_container .heateorSssSharing {
     color: #fff;
     border-width: 0;
     border-style: solid;
     border-color: transparent
   }

   .heateor_sss_vertical_sharing .heateorSssSharing:hover,
   .heateor_sss_floating_follow_icons_container .heateorSssSharing:hover {
     border-color: transparent
   }

   @media screen and (max-width:783px) {
     .heateor_sss_vertical_sharing {
       display: none !important
     }

     .heateor_sss_floating_follow_icons_container {
       display: none !important
     }
   }
 </style>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_styles_index_page/style2.htm", "");
    }
}
