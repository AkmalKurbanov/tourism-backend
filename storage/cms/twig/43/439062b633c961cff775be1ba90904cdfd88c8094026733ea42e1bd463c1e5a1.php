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

/* C:\work\xampp\htdocs\tourism/themes/tourism/partials/site/head_scripts_index_page/script1.htm */
class __TwigTemplate_4848e9b6711c3f19512b440ac00c9de56bcb45782e4e52b0575644caa37f0ad4 extends \Twig\Template
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
        echo "<script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>
    {
      \"@context\": \"https://schema.org\",
      \"@graph\": [{
        \"@type\": \"Organization\",
        \"@id\": \"https://kyrgyzstan-tourism.com/#organization\",
        \"name\": \"Kyrgyz Tourism\",
        \"url\": \"https://kyrgyzstan-tourism.com/\",
        \"sameAs\": [\"https://www.facebook.com/kgTourism/?modal=admin_todo_tour\",
          \"https://www.instagram.com/native_kyrgyzstan/\",
          \"https://www.youtube.com/channel/UCUpfM9AjbXgLe_IGKSDtqRA?view_as=subscriber\"
        ],
        \"logo\": {
          \"@type\": \"ImageObject\",
          \"@id\": \"https://kyrgyzstan-tourism.com/#logo\",
          \"inLanguage\": \"en-US\",
          \"url\": \"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/01/512x512-1.png\",
          \"width\": 512,
          \"height\": 512,
          \"caption\": \"Kyrgyz Tourism\"
        },
        \"image\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#logo\"
        }
      }, {
        \"@type\": \"WebSite\",
        \"@id\": \"https://kyrgyzstan-tourism.com/#website\",
        \"url\": \"https://kyrgyzstan-tourism.com/\",
        \"name\": \"Kyrgyzstan Tourism\",
        \"inLanguage\": \"en-US\",
        \"description\": \"Traveling in Kyrgyzstan | kirghizistan trekking &amp; backpacking\",
        \"publisher\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#organization\"
        },
        \"potentialAction\": {
          \"@type\": \"SearchAction\",
          \"target\": \"https://kyrgyzstan-tourism.com/?s={search_term_string}\",
          \"query-input\": \"required name=search_term_string\"
        }
      }, {
        \"@type\": \"CollectionPage\",
        \"@id\": \"https://kyrgyzstan-tourism.com/#webpage\",
        \"url\": \"https://kyrgyzstan-tourism.com/\",
        \"name\": \"Kyrgyzstan Tourism - Private &amp; Group Tours in Kyrgyzstan\",
        \"isPartOf\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#website\"
        },
        \"inLanguage\": \"en-US\",
        \"about\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#organization\"
        },
        \"description\": \"Visit & discover Kyrgyzstan with ancient Silk Road tours, horseback tours, bike tours & more. Private & group tour options availabe. Start your adventure!\"
      }]
    }
  </script>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_scripts_index_page/script1.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>
    {
      \"@context\": \"https://schema.org\",
      \"@graph\": [{
        \"@type\": \"Organization\",
        \"@id\": \"https://kyrgyzstan-tourism.com/#organization\",
        \"name\": \"Kyrgyz Tourism\",
        \"url\": \"https://kyrgyzstan-tourism.com/\",
        \"sameAs\": [\"https://www.facebook.com/kgTourism/?modal=admin_todo_tour\",
          \"https://www.instagram.com/native_kyrgyzstan/\",
          \"https://www.youtube.com/channel/UCUpfM9AjbXgLe_IGKSDtqRA?view_as=subscriber\"
        ],
        \"logo\": {
          \"@type\": \"ImageObject\",
          \"@id\": \"https://kyrgyzstan-tourism.com/#logo\",
          \"inLanguage\": \"en-US\",
          \"url\": \"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/01/512x512-1.png\",
          \"width\": 512,
          \"height\": 512,
          \"caption\": \"Kyrgyz Tourism\"
        },
        \"image\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#logo\"
        }
      }, {
        \"@type\": \"WebSite\",
        \"@id\": \"https://kyrgyzstan-tourism.com/#website\",
        \"url\": \"https://kyrgyzstan-tourism.com/\",
        \"name\": \"Kyrgyzstan Tourism\",
        \"inLanguage\": \"en-US\",
        \"description\": \"Traveling in Kyrgyzstan | kirghizistan trekking &amp; backpacking\",
        \"publisher\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#organization\"
        },
        \"potentialAction\": {
          \"@type\": \"SearchAction\",
          \"target\": \"https://kyrgyzstan-tourism.com/?s={search_term_string}\",
          \"query-input\": \"required name=search_term_string\"
        }
      }, {
        \"@type\": \"CollectionPage\",
        \"@id\": \"https://kyrgyzstan-tourism.com/#webpage\",
        \"url\": \"https://kyrgyzstan-tourism.com/\",
        \"name\": \"Kyrgyzstan Tourism - Private &amp; Group Tours in Kyrgyzstan\",
        \"isPartOf\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#website\"
        },
        \"inLanguage\": \"en-US\",
        \"about\": {
          \"@id\": \"https://kyrgyzstan-tourism.com/#organization\"
        },
        \"description\": \"Visit & discover Kyrgyzstan with ancient Silk Road tours, horseback tours, bike tours & more. Private & group tour options availabe. Start your adventure!\"
      }]
    }
  </script>", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/partials/site/head_scripts_index_page/script1.htm", "");
    }
}
