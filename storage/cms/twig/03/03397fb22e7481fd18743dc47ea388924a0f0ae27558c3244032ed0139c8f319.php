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

/* C:\work\xampp\htdocs\tourism/themes/tourism/pages/tours.htm */
class __TwigTemplate_882db40db4832fe36e0daed9f9e61696ad8ab19021e1e68a923b74ec7512efa1 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 5);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["Tours"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "
<div class=\"lazy\" id=\"top\" style=\"\" data-bg=\"url(";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, true, 7), "path", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo ")\">




  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
          <span><span>
          <a href=\"https://kyrgyzstan-tourism.com/\">Home</a> /
          <span>
          <a href=\"https://kyrgyzstan-tourism.com/group-tours/\">Group Tours 2021</a> /<span class=\"breadcrumb_last\" aria-current=\"page\">Explore South and North
                    Kyrgyzstan</span>
                    </span>
                    </span>
                    </span></p>
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
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div class=\"tours-tabs\">
        <ul class=\"nav nav-tabs hidden-xs\">
          <!--                    <li><a href=\"#details\" data-toggle=\"tab\">DETAILS</a></li>-->
          <li class=\"active\"><a href=\"#itinerary\" data-toggle=\"tab\">ITINERARY</a></li>
          <!--                    <li><a href=\"#dates\" data-toggle=\"tab\">DATES</a></li>-->
          <li><a href=\"#location\" data-toggle=\"tab\">LOCATION</a></li>
          <li><a href=\"#photos\" data-toggle=\"tab\">PHOTOS</a></li>
        </ul>

        <div id=\"tour_content\">

          <div class=\"tab-content hidden-xs\">

            <!--                        <div class=\"tab-pane active\" id=\"details\">-->
            <!--                            -->
            <!---->
            <!--                        </div>-->

            <div class=\"tab-pane active\" id=\"itinerary\">
              <h3><img alt=\"\" width=\"960\" height=\"400\"
                  data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                  data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                  src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                  data-pagespeed-url-hash=\"31059146\"
                  onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\" /><noscript><img alt=\"\" width=\"960\"
                    height=\"400\"
                    data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                    data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                    data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                    src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                    data-pagespeed-url-hash=\"31059146\" /><noscript><img class=\"alignnone size-full wp-image-5273 lazy\"
                      src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20960%20400'%3E%3C/svg%3E\"
                      data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                      alt=\"\" width=\"960\" height=\"400\"
                      data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                      data-sizes=\"(max-width: 960px) 100vw, 960px\"
                      data-pagespeed-url-hash=\"3129193300\" /></noscript></noscript></h3>
              <h3>Have a chance to have a round trip in Kyrgyzstan, visiting South and North part of the country</h3>
              <p><b>South Kyrgyzstan &#8211; </b>Being part of the flourishing Fergana valley, south part of the country
                have a zest on it with natural walnut forests of Arslanbob and Kyzyl-Unkur,  ancient towns of Uzgen and
                <a href=\"https://kyrgyzstan-tourism.com/sights/osh-town/\">Osh</a></p>
              <p><b>North Kyrgyzstan &#8211; </b>You would have a chance to live in a yurt with local hosts, seeing
                semi-nomadic way of life in Son-Kol Lake. Explore the Silk Road <a
                  href=\"https://kyrgyzstan-tourism.com/sights/tash-rabat-honoring-silk-road-heritage/\">Caravanserai 
                  Tash-Rabat</a>. Visit the pearl of the Kyrgyzstan &#8211; <a
                  href=\"https://kyrgyzstan-tourism.com/sights/issyk-kul-lake/\">Issyk-Kul Lake</a></p>
              <ul>
                <li><strong>Duration</strong>: 13 days</li>
                <li><strong>Best Season:</strong> June &#8211; mid-September</li>
                <li><strong>Category:</strong> combined –auto/horseback/trek</li>
                <li><strong>Level of Difficulty:</strong> easy to medium</li>
                <li><strong>Group Size:</strong> 12 pax</li>
                <li><strong>Highlights:</strong> Arslanbob, Osh, Tash-Rabat, Son-Kol Lake, Jeti-Oguz,  Canyon Skazka,
                  Altyn-Arashan, Chong-Kemin National Park, Burana</li>
                <li><strong>Requirements:</strong> weatherproof warm clothes, trekking boots, hat, sunglasses, and
                  sunscreen</li>
              </ul>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_1\">
                        Day 1: Bishkek </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_1\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">
                      <p><strong>Briefing session</strong><br />
                        If you confirm your tour and already in a list of the travelers for the Group Tour 2020, please
                        join us and the group.We invite you for the Briefing Session!<br />
                        <strong>Day:</strong> The day before the departure date.<br />
                        <strong>Time:</strong> Meet at the noontime at 12.00 p.m.<br />
                        <strong>Place:</strong> Kyrgyz Tourism office at 21, Abay street (Olive Hotel)<br />
                        &#8211; Discuss day by day detailed program<br />
                        &#8211; Focus on highlights<br />
                        &#8211; Need to know issues<br />
                        &#8211; Discussion<br />
                        &#8211; Answer your questions<br />
                        &#8211; Welcome lunch</p>
                      <p>Upon your request, we can arrange your airport picking up/meeting and help you with your
                        accommodation arrangements in Bishkek.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_2\">
                        Day 2: Bishkek-Arslanbob </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_2\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Early morning start transfer to Arslanbob village at Jalalabad region (600 km, 8-9 hours
                        driving). Transfer via Too-Ashu Pass (3586 m asl) by the stunning serpentine road followed by
                        the amazing view of Suusamyr valley. On the way pass by the narrow Chychkan Gorge (‘mouse’
                        gorge) and Toktogul water reservoir. Evening arrival to the village. Dinner and overnight stay
                        at family run guesthouse.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_3\">
                        Day 3: Arslanbob-Kyzyl-Unkur </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_3\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Day trek to waterfall and panoramic view of the walnut forest of Arslanbob. The territory of
                        the walnut forest counted for 60,000 hectares and located at the altitude of 2,500 m above sea
                        level. Arslanbob produces 1500 tons of nuts per year. Afternoon transfer to Kyzyl-Unkur village,
                        less touristic spot near the Arslanbob. Lunch, Dinner and B&amp;B stay at local guesthouse.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_4\">
                        Day 4: Kyzyl-Unkur-Osh town </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_4\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Morning after the breakfast transfer to Osh town via Uzgen ( 180 km, 4 hours). Visit Uzgen
                        Minaret and Karakhanid Mausoleum of 12<sup>th</sup> century. Uzgen was a capital of Karakhanids
                        and called it as Mavarannahr. Lunch at local cafe. Arrival in Osh. Have a short city tour
                        visiting Sulaiman Mountain, the World Heritage Site of UNESCO in Kyrgyzstan. Visit
                        historical-archaeological museum with collection of diverse findings at the area. Dinner at cafe
                        with local tasty samsy (dumpling, baked at tandoor), ash (pilav) and green tea. Accommodation at
                        hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_5\">
                        Day 5: Osh town - Kazarman </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_5\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>That day road goes to the East part of the country. Osh-Kazarman &#8211; 260 km, 5 hours.
                        Kazarman village situated at the road from Osh to Naryn. During the Soviet time Kazarman was one
                        of the strategic points of the country because of the big gold mining company of Makmal. Direct
                        aid from Moscow and support made this place very popular at that time. Today Kazarman is small
                        village with more than 10,000 inhabitants. Kazarman is the nearest place for Saimaluu-Tash
                        (“embroidered stones”) – petroglyph site, originated at Neolitic and Bronze Ages. It says that
                        from 8th century BC people lived there on the high of 3,200 m asl. Dinner and accommodation at
                        family run guesthouse.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_6\">
                        Day 6: Kazarman-Tash-Rabat caravanserai </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_6\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Transfer to the Tash-Rabat Caravanserai (15<sup>th</sup> century stone building). Medieval
                        stone building of Caravanserai is one of the architectural sites of the Kyrgyzstan, standing
                        alone the Silk Road. On the way stop by for the lunch at Naryn town. Arrival to Tash-Rabat yurt
                        camp. Visit caravanserai. Free time. Dinner and B&amp;B stay in a yurt.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_7\">
                        Day 7: Tash-Rabat Caravaserai-Naryn </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_7\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Free morning at the site. Walking to the nearest mountains and enjoy participating at the
                        everyday household activities of the local family. Lunch in a yurt. Afternoon transfer to Naryn
                        via Koshoi-Korgon fortress. Arrival in Naryn. Dinner and accommodation at hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_8\">
                        Day 8: Naryn-Son-Kol Lake </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_8\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Transfer to the Son-Kol Lake – alpine summer pastures for the centuries giving growth and
                        prosperity for all folks. Road to the lake goes by the 32 serpentine Pass.  Picnic lunch on the
                        way. Arrival to Son-Kol lake shore. Meeting with local family living there for summer. Dinner
                        and stay in a yurt.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_9\">
                        Day 9: Son-Kol Lake-Bokonbaevo </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_9\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Free morning at the lake shore. See everyday life of families living at summer pastures –
                        everyday household and life at 3000 m asl. (Optional: horseback riding).  Drive to Kochkor
                        village, cross road of trade and logistics on the way. Visit family of local felt handicraft. 
                        Have a lunch with them. See felt items being made display by Guljan eje. Felt traditionally
                        worked out in 2 technologies – Ala-Kiyiz and Shyrdak. She will open up secrets of making natural
                        felt items. Further transfer to the southern shore of Issyk-Kul Lake. Evening have walk at the
                        lake shore and enjoy it. Dinner and B&amp;B stay at family run guesthouse in the village.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_10\">
                        Day 10: Bokonbaevo-Karakol </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_10\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Morning see eagle hunting demonstration with local eagle hunter. Traditional way of hunting as
                        a part of nomads’ life. Transfer to Karakol town (200 km, 3 hours driving)  on the way visit
                        Skazka Canyon (Fairy Tale – sandstone shapes taking forms of animals, sculptures and figures).
                        Jety-Oguz Gorge (Seven Bulls gorge) with seven red rock mountains with fir tree forest, running
                        mountain river, a classic view of Kyrgyz pastures. Picnic lunch at nature. Walk and enjoy nature
                        of the gorge. Arrival in Karakol. Visit Holy Trinity Orthodox Church and Dungan Mosque, both of
                        19<sup>th</sup> century.   Dinner and accommodation at hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_11\">
                        Day 11: Karakol-Altyn-Arashan-Karakol </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_11\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Day trip to Altyn-Arashan Hot springs. Drive up by 4 WD off-road car to the altitude of 2500
                        meters asl. Altyn-Arashan is a famous trekking area and a valley with hot springs. There are 2
                        sources of mineral waters – radon (35С) and hydrogen sulfide (41C) and in 1963 settled up small
                        soviet type resort area. Have a free time walking at the area and have thermal spa bath. Lunch.
                        Afternoon trek back to Karakol town. Support car will follow you and can pick you up if tired.
                        Dinner and accommodation at hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_12\">
                        Day 12: Karakol-Chong-Kemin </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_12\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Morning transfer to the territory of the National Park of Chong-Kemin by the northern shore of
                        the Issyk-Kul Lake. On the way stop by to visit Cholpon-Ata town and open air museum of
                        petroglyphs (stone drawings). These petroglyphs area is 42 hectares with drawings from 2nd
                        century BC to 4th century AD. Lunch on the way. Afternoon arrival to the territory of the
                        national park and meet with welcoming family. Dinner and B&amp;B stay at Kok-Archa guesthouse.
                      </p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_13\">
                        Day 13: Chong-Kemin-Bishkek </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_13\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Free morning and walking at the outskirts of the area. Transfer to Bishkek (150 km, 3-4 hours
                        driving). One of the famous minarets of middle ages Burana located at the area of old Balasagun
                        town, main trading center on the way of the great Silk Road. Visit Burana. Lunch at local family
                        on the way. Arrival in Bishkek. Have a city tour – visiting Osh bazar, Oak park, Ala-Too square,
                        Philharmonic hall and Museum of Fine Arts. Dinner and accommodation at hotel. End of the tour.
                      </p>
                    </div>
                  </div>
                </div>


              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a href=\"https://kyrgyzstan-tourism.com/group-tours/explore-south-and-north-kyrgyzstan/\">Explore South
                  and North Kyrgyzstan</a></h2>

              <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover dates_table_archive\">
                  <thead>
                    <tr>
                      <th>Departure</th>
                      <th>End</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Book</th>
                    </tr>
                  </thead>

                  <tbody>


                    <tr>
                      <td>
                        <p>Jul 22, 2021 - Thu</p>
                      </td>
                      <td>
                        <p>Aug 3, 2021 - Tue</p>
                      </td>
                      <td>
                        <p class=\"available\">Available</p>
                      </td>
                      <td>
                        <p>\$ 1045 USD</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" data-departure=\"Jul 22, 2021 - Thu\"
                          data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                      </td>
                    </tr>


                    <tr>
                      <td>
                        <p>Sep 4, 2021 - Sat</p>
                      </td>
                      <td>
                        <p>Oct 16, 2021 - Sat</p>
                      </td>
                      <td>
                        <p class=\"available\">Available</p>
                      </td>
                      <td>
                        <p>\$ 1045 USD</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" data-departure=\"Sep 4, 2021 - Sat\"
                          data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>



            </div>

            <!--                        <div class=\"tab-pane\" id=\"dates\">-->
            <!---->
            <!--                            -->
            <!---->
            <!--                        </div>-->

            <div class=\"tab-pane\" id=\"location\">

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"photos\">

              <div class=\"custom_gallery\">
              </div>
              <!--                            <div class=\"mobile_book_btn_wrapper text-center\">-->
              <!--                                <button class=\"cstm_button mobile_book_btn\">Book</button>-->
              <!--                            </div>-->

            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">
            <h3><img alt=\"\" width=\"960\" height=\"400\"
                data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                data-pagespeed-url-hash=\"31059146\"
                onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\" /><noscript><img alt=\"\" width=\"960\"
                  height=\"400\"
                  data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                  data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                  src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                  data-pagespeed-url-hash=\"31059146\" /><noscript><img class=\"alignnone size-full wp-image-5273 lazy\"
                    src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20960%20400'%3E%3C/svg%3E\"
                    data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\" alt=\"\"
                    width=\"960\" height=\"400\"
                    data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                    data-sizes=\"(max-width: 960px) 100vw, 960px\"
                    data-pagespeed-url-hash=\"3129193300\" /></noscript></noscript></h3>
            <h3>Have a chance to have a round trip in Kyrgyzstan, visiting South and North part of the country</h3>
            <p><b>South Kyrgyzstan &#8211; </b>Being part of the flourishing Fergana valley, south part of the country
              have a zest on it with natural walnut forests of Arslanbob and Kyzyl-Unkur,  ancient towns of Uzgen and <a
                href=\"https://kyrgyzstan-tourism.com/sights/osh-town/\">Osh</a></p>
            <p><b>North Kyrgyzstan &#8211; </b>You would have a chance to live in a yurt with local hosts, seeing
              semi-nomadic way of life in Son-Kol Lake. Explore the Silk Road <a
                href=\"https://kyrgyzstan-tourism.com/sights/tash-rabat-honoring-silk-road-heritage/\">Caravanserai 
                Tash-Rabat</a>. Visit the pearl of the Kyrgyzstan &#8211; <a
                href=\"https://kyrgyzstan-tourism.com/sights/issyk-kul-lake/\">Issyk-Kul Lake</a></p>
            <ul>
              <li><strong>Duration</strong>: 13 days</li>
              <li><strong>Best Season:</strong> June &#8211; mid-September</li>
              <li><strong>Category:</strong> combined –auto/horseback/trek</li>
              <li><strong>Level of Difficulty:</strong> easy to medium</li>
              <li><strong>Group Size:</strong> 12 pax</li>
              <li><strong>Highlights:</strong> Arslanbob, Osh, Tash-Rabat, Son-Kol Lake, Jeti-Oguz,  Canyon Skazka,
                Altyn-Arashan, Chong-Kemin National Park, Burana</li>
              <li><strong>Requirements:</strong> weatherproof warm clothes, trekking boots, hat, sunglasses, and
                sunscreen</li>
            </ul>

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">

              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      Day 1: Bishkek </a>
                  </h4>
                </div>
                <div id=\"collapse_1\" class=\"panel-collapse collapse in\">
                  <div class=\"panel-body\">
                    <p><strong>Briefing session</strong><br />
                      If you confirm your tour and already in a list of the travelers for the Group Tour 2020, please
                      join us and the group.We invite you for the Briefing Session!<br />
                      <strong>Day:</strong> The day before the departure date.<br />
                      <strong>Time:</strong> Meet at the noontime at 12.00 p.m.<br />
                      <strong>Place:</strong> Kyrgyz Tourism office at 21, Abay street (Olive Hotel)<br />
                      &#8211; Discuss day by day detailed program<br />
                      &#8211; Focus on highlights<br />
                      &#8211; Need to know issues<br />
                      &#8211; Discussion<br />
                      &#8211; Answer your questions<br />
                      &#8211; Welcome lunch</p>
                    <p>Upon your request, we can arrange your airport picking up/meeting and help you with your
                      accommodation arrangements in Bishkek.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_2\">
                      Day 2: Bishkek-Arslanbob </a>
                  </h4>
                </div>
                <div id=\"collapse_2\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Early morning start transfer to Arslanbob village at Jalalabad region (600 km, 8-9 hours
                      driving). Transfer via Too-Ashu Pass (3586 m asl) by the stunning serpentine road followed by the
                      amazing view of Suusamyr valley. On the way pass by the narrow Chychkan Gorge (‘mouse’ gorge) and
                      Toktogul water reservoir. Evening arrival to the village. Dinner and overnight stay at family run
                      guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_3\">
                      Day 3: Arslanbob-Kyzyl-Unkur </a>
                  </h4>
                </div>
                <div id=\"collapse_3\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Day trek to waterfall and panoramic view of the walnut forest of Arslanbob. The territory of the
                      walnut forest counted for 60,000 hectares and located at the altitude of 2,500 m above sea level.
                      Arslanbob produces 1500 tons of nuts per year. Afternoon transfer to Kyzyl-Unkur village, less
                      touristic spot near the Arslanbob. Lunch, Dinner and B&amp;B stay at local guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_4\">
                      Day 4: Kyzyl-Unkur-Osh town </a>
                  </h4>
                </div>
                <div id=\"collapse_4\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Morning after the breakfast transfer to Osh town via Uzgen ( 180 km, 4 hours). Visit Uzgen
                      Minaret and Karakhanid Mausoleum of 12<sup>th</sup> century. Uzgen was a capital of Karakhanids
                      and called it as Mavarannahr. Lunch at local cafe. Arrival in Osh. Have a short city tour visiting
                      Sulaiman Mountain, the World Heritage Site of UNESCO in Kyrgyzstan. Visit
                      historical-archaeological museum with collection of diverse findings at the area. Dinner at cafe
                      with local tasty samsy (dumpling, baked at tandoor), ash (pilav) and green tea. Accommodation at
                      hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_5\">
                      Day 5: Osh town - Kazarman </a>
                  </h4>
                </div>
                <div id=\"collapse_5\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>That day road goes to the East part of the country. Osh-Kazarman &#8211; 260 km, 5 hours.
                      Kazarman village situated at the road from Osh to Naryn. During the Soviet time Kazarman was one
                      of the strategic points of the country because of the big gold mining company of Makmal. Direct
                      aid from Moscow and support made this place very popular at that time. Today Kazarman is small
                      village with more than 10,000 inhabitants. Kazarman is the nearest place for Saimaluu-Tash
                      (“embroidered stones”) – petroglyph site, originated at Neolitic and Bronze Ages. It says that
                      from 8th century BC people lived there on the high of 3,200 m asl. Dinner and accommodation at
                      family run guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_6\">
                      Day 6: Kazarman-Tash-Rabat caravanserai </a>
                  </h4>
                </div>
                <div id=\"collapse_6\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Transfer to the Tash-Rabat Caravanserai (15<sup>th</sup> century stone building). Medieval stone
                      building of Caravanserai is one of the architectural sites of the Kyrgyzstan, standing alone the
                      Silk Road. On the way stop by for the lunch at Naryn town. Arrival to Tash-Rabat yurt camp. Visit
                      caravanserai. Free time. Dinner and B&amp;B stay in a yurt.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_7\">
                      Day 7: Tash-Rabat Caravaserai-Naryn </a>
                  </h4>
                </div>
                <div id=\"collapse_7\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Free morning at the site. Walking to the nearest mountains and enjoy participating at the
                      everyday household activities of the local family. Lunch in a yurt. Afternoon transfer to Naryn
                      via Koshoi-Korgon fortress. Arrival in Naryn. Dinner and accommodation at hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_8\">
                      Day 8: Naryn-Son-Kol Lake </a>
                  </h4>
                </div>
                <div id=\"collapse_8\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Transfer to the Son-Kol Lake – alpine summer pastures for the centuries giving growth and
                      prosperity for all folks. Road to the lake goes by the 32 serpentine Pass.  Picnic lunch on the
                      way. Arrival to Son-Kol lake shore. Meeting with local family living there for summer. Dinner and
                      stay in a yurt.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_9\">
                      Day 9: Son-Kol Lake-Bokonbaevo </a>
                  </h4>
                </div>
                <div id=\"collapse_9\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Free morning at the lake shore. See everyday life of families living at summer pastures –
                      everyday household and life at 3000 m asl. (Optional: horseback riding).  Drive to Kochkor
                      village, cross road of trade and logistics on the way. Visit family of local felt handicraft. 
                      Have a lunch with them. See felt items being made display by Guljan eje. Felt traditionally worked
                      out in 2 technologies – Ala-Kiyiz and Shyrdak. She will open up secrets of making natural felt
                      items. Further transfer to the southern shore of Issyk-Kul Lake. Evening have walk at the lake
                      shore and enjoy it. Dinner and B&amp;B stay at family run guesthouse in the village.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_10\">
                      Day 10: Bokonbaevo-Karakol </a>
                  </h4>
                </div>
                <div id=\"collapse_10\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Morning see eagle hunting demonstration with local eagle hunter. Traditional way of hunting as a
                      part of nomads’ life. Transfer to Karakol town (200 km, 3 hours driving)  on the way visit Skazka
                      Canyon (Fairy Tale – sandstone shapes taking forms of animals, sculptures and figures). Jety-Oguz
                      Gorge (Seven Bulls gorge) with seven red rock mountains with fir tree forest, running mountain
                      river, a classic view of Kyrgyz pastures. Picnic lunch at nature. Walk and enjoy nature of the
                      gorge. Arrival in Karakol. Visit Holy Trinity Orthodox Church and Dungan Mosque, both of
                      19<sup>th</sup> century.   Dinner and accommodation at hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_11\">
                      Day 11: Karakol-Altyn-Arashan-Karakol </a>
                  </h4>
                </div>
                <div id=\"collapse_11\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Day trip to Altyn-Arashan Hot springs. Drive up by 4 WD off-road car to the altitude of 2500
                      meters asl. Altyn-Arashan is a famous trekking area and a valley with hot springs. There are 2
                      sources of mineral waters – radon (35С) and hydrogen sulfide (41C) and in 1963 settled up small
                      soviet type resort area. Have a free time walking at the area and have thermal spa bath. Lunch.
                      Afternoon trek back to Karakol town. Support car will follow you and can pick you up if tired.
                      Dinner and accommodation at hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_12\">
                      Day 12: Karakol-Chong-Kemin </a>
                  </h4>
                </div>
                <div id=\"collapse_12\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Morning transfer to the territory of the National Park of Chong-Kemin by the northern shore of
                      the Issyk-Kul Lake. On the way stop by to visit Cholpon-Ata town and open air museum of
                      petroglyphs (stone drawings). These petroglyphs area is 42 hectares with drawings from 2nd century
                      BC to 4th century AD. Lunch on the way. Afternoon arrival to the territory of the national park
                      and meet with welcoming family. Dinner and B&amp;B stay at Kok-Archa guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_13\">
                      Day 13: Chong-Kemin-Bishkek </a>
                  </h4>
                </div>
                <div id=\"collapse_13\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Free morning and walking at the outskirts of the area. Transfer to Bishkek (150 km, 3-4 hours
                      driving). One of the famous minarets of middle ages Burana located at the area of old Balasagun
                      town, main trading center on the way of the great Silk Road. Visit Burana. Lunch at local family
                      on the way. Arrival in Bishkek. Have a city tour – visiting Osh bazar, Oak park, Ala-Too square,
                      Philharmonic hall and Museum of Fine Arts. Dinner and accommodation at hotel. End of the tour.</p>
                  </div>
                </div>
              </div>


            </div>

            <!--                        <div class=\"mobile_book_btn_wrapper text-center\">-->
            <!--                            <button class=\"cstm_button mobile_book_btn\">Book</button>-->
            <!--                        </div>-->


            <h2><a href=\"https://kyrgyzstan-tourism.com/group-tours/explore-south-and-north-kyrgyzstan/\">Explore South
                and North Kyrgyzstan</a></h2>

            <div class=\"table-responsive\">
              <table class=\"table table-striped table-hover dates_table_archive\">
                <thead>
                  <tr>
                    <th>Departure</th>
                    <th>End</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Book</th>
                  </tr>
                </thead>

                <tbody>


                  <tr>
                    <td>
                      <p>Jul 22, 2021 - Thu</p>
                    </td>
                    <td>
                      <p>Aug 3, 2021 - Tue</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$ 1045 USD</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Jul 22, 2021 - Thu\"
                        data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <p>Sep 4, 2021 - Sat</p>
                    </td>
                    <td>
                      <p>Oct 16, 2021 - Sat</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$ 1045 USD</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Sep 4, 2021 - Sat\"
                        data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                    </td>
                  </tr>
                </tbody>

              </table>
            </div>



            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

          </div>




          <div class=\"panel-group visible-xs\" id=\"accordion\">

            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
                    PHOTOS
                  </a>
                </h4>
              </div>
              <div id=\"collapseFour\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <div class=\"custom_gallery\">
                  </div>
                  <!--                                    <div class=\"mobile_book_btn_wrapper text-center\">-->
                  <!--                                        <button class=\"cstm_button mobile_book_btn\">Book</button>-->
                  <!--                                    </div>-->
                </div>
              </div>
            </div>

          </div>
          <!--                    END MOBILE VISIBLE-->

        </div>

      </div>

      <div id=\"faq_wrapper\">

        <h2>FAQ</h2>
        <p class=\"text-right\"><button class=\"cstm_button\" id=\"faqExpand\">Expand all</button></p>
        <div class=\"panel-group\" id=\"accordion_group_faq\">

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  What included and excluded? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse in\">
              <div class=\"panel-body\">
                <p><strong>It is included:</strong><br />
                  &#8211; All accommodations (hotels, guest houses, yurt camps), except the first day in Bishkek</p>
                <p>-All activities according to the program</p>
                <p>&#8211; Eng.speaking guide during the tour</p>
                <p>&#8211; All meals (Lunches, Dinners, and breakfasts)</p>
                <p>&#8211; Drinking bottled water</p>
                <p>&#8211; Individual transport from the Airport to the Airport</p>
                <p><strong>It is not included:</strong></p>
                <p>&#8211; Air flight ticket</p>
                <p>&#8211; Bishkek hotel for arrival dates.</p>
                <p>&#8211; Personal expenses</p>
                <p>&#8211; Alcohol drinks</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_2\">
                  Is it confirmed tour? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_2\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>This tour is a joint group tour. If we have less than 3 people in a group, we can adapt the tour for
                  the given budget and make it an individual tour especially for you.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_3\">
                  How big is the group? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_3\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Groups collected from 3 people till 12 people.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_4\">
                  How to book tour? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_4\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Contact us and we issue the invoice for 20% payment from the net tour cost. You can send it by bank
                  transfer. The rest of the payment you can pay upon your arrival day in Bishkek (welcoming the first
                  day with briefing ). Be informed that the bank transfer fee will be additionally 3% over the cost of
                  the transaction and it will be on the client (for cash payment no additional costs).</p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>


        </div>

      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>
              <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o1\" lang=\"ru-RU\" dir=\"ltr\">
                <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
                <form action=\"/group-tours/explore-south-and-north-kyrgyzstan/#wpcf7-f5211-o1\" method=\"post\"
                  class=\"wpcf7-form init\" novalidate=\"novalidate\">
                  <div style=\"display: none;\">
                    <input type=\"hidden\" name=\"_wpcf7\" value=\"5211\" />
                    <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\" />
                    <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\" />
                    <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f5211-o1\" />
                    <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\" />
                    <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\" />
                    <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\" value=\"\" />
                  </div>
                  <p><span class=\"wpcf7-form-control-wrap text-tour\"><input type=\"text\" name=\"text-tour\" value=\"\"
                        size=\"40\" class=\"wpcf7-form-control wpcf7-text hidden input_tour_name\"
                        aria-invalid=\"false\" /></span><span class=\"wpcf7-form-control-wrap text-departure\"><input
                        type=\"text\" name=\"text-departure\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text text_departure hidden\" aria-invalid=\"false\" /></span><span
                      class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                        aria-invalid=\"false\" placeholder=\"Your name\" /></span></p>
                  <h4>Departure</h4>
                  <p><select name='available_departure_select' class='available_departure_select'>
                      <option value=\"Jul 22, 2021 - Thu\" selected>Jul 22, 2021 - Thu</option>
                      <option value=\"Sep 4, 2021 - Sat\">Sep 4, 2021 - Sat</option>
                    </select></p>
                  <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\"
                        size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                        aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
                  <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\"
                        rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                        placeholder=\"Your message\"></textarea></span></p>
                  <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
                      class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"></p>
                  <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">




          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a href=\"https://kyrgyzstan-tourism.com/group-tours/nomadic-horse-trek-for-beginners/\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"\"
                    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/header-horse-tours-660x360.jpg)\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$780US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>Nomadic Horse Trek for Beginners</h3>
                  <p class=\"excerpt\">Horseback tour</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 10 days</p>
              </a>
            </div>

          </div>




          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a href=\"https://kyrgyzstan-tourism.com/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"\"
                    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Song-Kul-Lake-660x360.jpg)\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$890 US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.</h3>
                  <p class=\"excerpt\">guaranteed departure </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
              </a>
            </div>

          </div>



        </div>
      </div>

    </div>
    <div class=\"col-sm-3\">


      <div id=\"sidebar\">



        <div class=\"tags tags_light\">
          <h3>Group tours</h3>
          <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
          <ul class=\"list-unstyled sdb_ul\">


            <li><a href=\"https://kyrgyzstan-tourism.com/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/\">Pearls
                of Kyrgyzstan: Issyk-Kul and Song-Kul.</a></li>


            <li><a href=\"https://kyrgyzstan-tourism.com/group-tours/explore-south-and-north-kyrgyzstan/\">Explore South
                and North Kyrgyzstan</a></li>


            <li><a href=\"https://kyrgyzstan-tourism.com/group-tours/nomadic-horse-trek-for-beginners/\">Nomadic Horse
                Trek for Beginners</a></li>


          </ul>


        </div>



        <div class=\"tags tags_light\">
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


        <div class=\"sdb_most_popular visible-xs\">

          <h3>Most popular tours</h3>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-to-the-lake-kel-suu/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/Kel-Suu-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Trekking to the Lake Kel-Suu</h3>
                <p class=\"excerpt\">Trekking</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 5</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a
              href=\"https://kyrgyzstan-tourism.com/tours/travelling-from-kichik-alay-to-pamir-alay-through-jiptik-pass/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/HikerLeninPeak-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Travelling from Kichik-Alay to Pamir-Alay.</h3>
                <p class=\"excerpt\">Alay mountains, Lenin peak panorama</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/lake-hopping-issyk-kul-and-song-kul/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SunsetSKyurt-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Lake hopping: Issyk-Kul and Song-Kul</h3>
                <p class=\"excerpt\">Milti-active tour</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>


        </div>

        <div class=\"form_wrapper sdb_form\">


          <h3>Book the tour</h3>
          <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o2\" lang=\"ru-RU\" dir=\"ltr\">
            <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
            <form action=\"/group-tours/explore-south-and-north-kyrgyzstan/#wpcf7-f5211-o2\" method=\"post\"
              class=\"wpcf7-form init\" novalidate=\"novalidate\">
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
                  class=\"wpcf7-form-control-wrap text-departure\"><input type=\"text\" name=\"text-departure\" value=\"\"
                    size=\"40\" class=\"wpcf7-form-control wpcf7-text text_departure hidden\"
                    aria-invalid=\"false\" /></span><span class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\"
                    name=\"text-name\" value=\"\" size=\"40\"
                    class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                    aria-invalid=\"false\" placeholder=\"Your name\" /></span></p>
              <h4>Departure</h4>
              <p><select name='available_departure_select' class='available_departure_select'>
                  <option value=\"Jul 22, 2021 - Thu\" selected>Jul 22, 2021 - Thu</option>
                  <option value=\"Sep 4, 2021 - Sat\">Sep 4, 2021 - Sat</option>
                </select></p>
              <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\" size=\"40\"
                    class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                    aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
              <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\" rows=\"10\"
                    class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                    placeholder=\"Your message\"></textarea></span></p>
              <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
                  class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"></p>
              <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
            </form>
          </div>
        </div>

        <div class=\"sdb_most_popular hidden-xs\">

          <h3>Most popular tours</h3>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-to-the-lake-kel-suu/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/Kel-Suu-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Trekking to the Lake Kel-Suu</h3>
                <p class=\"excerpt\">Trekking</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 5</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a
              href=\"https://kyrgyzstan-tourism.com/tours/travelling-from-kichik-alay-to-pamir-alay-through-jiptik-pass/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/HikerLeninPeak-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Travelling from Kichik-Alay to Pamir-Alay.</h3>
                <p class=\"excerpt\">Alay mountains, Lenin peak panorama</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/lake-hopping-issyk-kul-and-song-kul/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SunsetSKyurt-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Lake hopping: Issyk-Kul and Song-Kul</h3>
                <p class=\"excerpt\">Milti-active tour</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>


        </div>

      </div>
      <div id=\"sidebar\">

      </div>

    </div>
  </div>
</div>










";
        } else {
            // line 1361
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 1361, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1436 => 1361,  107 => 35,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = Tours.record %}
{% set displayColumn = Tours.displayColumn %}
{% set notFoundMessage = Tours.notFoundMessage %}

{% if record %}

<div class=\"lazy\" id=\"top\" style=\"\" data-bg=\"url({{ record.poster.path }})\">




  <div class=\"breadcrumb_wrapper\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p id=\"breadcrumbs\">
          <span><span>
          <a href=\"https://kyrgyzstan-tourism.com/\">Home</a> /
          <span>
          <a href=\"https://kyrgyzstan-tourism.com/group-tours/\">Group Tours 2021</a> /<span class=\"breadcrumb_last\" aria-current=\"page\">Explore South and North
                    Kyrgyzstan</span>
                    </span>
                    </span>
                    </span></p>
          <div class=\"line_helper\" style=\"background: rgba(255,255,255,.3)\"></div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <h1 id=\"single_tour_title\">{{record.title}}</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-9\">

      <div class=\"tours-tabs\">
        <ul class=\"nav nav-tabs hidden-xs\">
          <!--                    <li><a href=\"#details\" data-toggle=\"tab\">DETAILS</a></li>-->
          <li class=\"active\"><a href=\"#itinerary\" data-toggle=\"tab\">ITINERARY</a></li>
          <!--                    <li><a href=\"#dates\" data-toggle=\"tab\">DATES</a></li>-->
          <li><a href=\"#location\" data-toggle=\"tab\">LOCATION</a></li>
          <li><a href=\"#photos\" data-toggle=\"tab\">PHOTOS</a></li>
        </ul>

        <div id=\"tour_content\">

          <div class=\"tab-content hidden-xs\">

            <!--                        <div class=\"tab-pane active\" id=\"details\">-->
            <!--                            -->
            <!---->
            <!--                        </div>-->

            <div class=\"tab-pane active\" id=\"itinerary\">
              <h3><img alt=\"\" width=\"960\" height=\"400\"
                  data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                  data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                  src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                  data-pagespeed-url-hash=\"31059146\"
                  onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\" /><noscript><img alt=\"\" width=\"960\"
                    height=\"400\"
                    data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                    data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                    data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                    src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                    data-pagespeed-url-hash=\"31059146\" /><noscript><img class=\"alignnone size-full wp-image-5273 lazy\"
                      src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20960%20400'%3E%3C/svg%3E\"
                      data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                      alt=\"\" width=\"960\" height=\"400\"
                      data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                      data-sizes=\"(max-width: 960px) 100vw, 960px\"
                      data-pagespeed-url-hash=\"3129193300\" /></noscript></noscript></h3>
              <h3>Have a chance to have a round trip in Kyrgyzstan, visiting South and North part of the country</h3>
              <p><b>South Kyrgyzstan &#8211; </b>Being part of the flourishing Fergana valley, south part of the country
                have a zest on it with natural walnut forests of Arslanbob and Kyzyl-Unkur,  ancient towns of Uzgen and
                <a href=\"https://kyrgyzstan-tourism.com/sights/osh-town/\">Osh</a></p>
              <p><b>North Kyrgyzstan &#8211; </b>You would have a chance to live in a yurt with local hosts, seeing
                semi-nomadic way of life in Son-Kol Lake. Explore the Silk Road <a
                  href=\"https://kyrgyzstan-tourism.com/sights/tash-rabat-honoring-silk-road-heritage/\">Caravanserai 
                  Tash-Rabat</a>. Visit the pearl of the Kyrgyzstan &#8211; <a
                  href=\"https://kyrgyzstan-tourism.com/sights/issyk-kul-lake/\">Issyk-Kul Lake</a></p>
              <ul>
                <li><strong>Duration</strong>: 13 days</li>
                <li><strong>Best Season:</strong> June &#8211; mid-September</li>
                <li><strong>Category:</strong> combined –auto/horseback/trek</li>
                <li><strong>Level of Difficulty:</strong> easy to medium</li>
                <li><strong>Group Size:</strong> 12 pax</li>
                <li><strong>Highlights:</strong> Arslanbob, Osh, Tash-Rabat, Son-Kol Lake, Jeti-Oguz,  Canyon Skazka,
                  Altyn-Arashan, Chong-Kemin National Park, Burana</li>
                <li><strong>Requirements:</strong> weatherproof warm clothes, trekking boots, hat, sunglasses, and
                  sunscreen</li>
              </ul>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2>ITINERARY</h2>

              <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand\">Expand all</button></p>

              <div class=\"panel-group\" id=\"accordion_group\">

                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_1\">
                        Day 1: Bishkek </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_1\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">
                      <p><strong>Briefing session</strong><br />
                        If you confirm your tour and already in a list of the travelers for the Group Tour 2020, please
                        join us and the group.We invite you for the Briefing Session!<br />
                        <strong>Day:</strong> The day before the departure date.<br />
                        <strong>Time:</strong> Meet at the noontime at 12.00 p.m.<br />
                        <strong>Place:</strong> Kyrgyz Tourism office at 21, Abay street (Olive Hotel)<br />
                        &#8211; Discuss day by day detailed program<br />
                        &#8211; Focus on highlights<br />
                        &#8211; Need to know issues<br />
                        &#8211; Discussion<br />
                        &#8211; Answer your questions<br />
                        &#8211; Welcome lunch</p>
                      <p>Upon your request, we can arrange your airport picking up/meeting and help you with your
                        accommodation arrangements in Bishkek.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_2\">
                        Day 2: Bishkek-Arslanbob </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_2\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Early morning start transfer to Arslanbob village at Jalalabad region (600 km, 8-9 hours
                        driving). Transfer via Too-Ashu Pass (3586 m asl) by the stunning serpentine road followed by
                        the amazing view of Suusamyr valley. On the way pass by the narrow Chychkan Gorge (‘mouse’
                        gorge) and Toktogul water reservoir. Evening arrival to the village. Dinner and overnight stay
                        at family run guesthouse.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_3\">
                        Day 3: Arslanbob-Kyzyl-Unkur </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_3\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Day trek to waterfall and panoramic view of the walnut forest of Arslanbob. The territory of
                        the walnut forest counted for 60,000 hectares and located at the altitude of 2,500 m above sea
                        level. Arslanbob produces 1500 tons of nuts per year. Afternoon transfer to Kyzyl-Unkur village,
                        less touristic spot near the Arslanbob. Lunch, Dinner and B&amp;B stay at local guesthouse.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_4\">
                        Day 4: Kyzyl-Unkur-Osh town </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_4\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Morning after the breakfast transfer to Osh town via Uzgen ( 180 km, 4 hours). Visit Uzgen
                        Minaret and Karakhanid Mausoleum of 12<sup>th</sup> century. Uzgen was a capital of Karakhanids
                        and called it as Mavarannahr. Lunch at local cafe. Arrival in Osh. Have a short city tour
                        visiting Sulaiman Mountain, the World Heritage Site of UNESCO in Kyrgyzstan. Visit
                        historical-archaeological museum with collection of diverse findings at the area. Dinner at cafe
                        with local tasty samsy (dumpling, baked at tandoor), ash (pilav) and green tea. Accommodation at
                        hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_5\">
                        Day 5: Osh town - Kazarman </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_5\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>That day road goes to the East part of the country. Osh-Kazarman &#8211; 260 km, 5 hours.
                        Kazarman village situated at the road from Osh to Naryn. During the Soviet time Kazarman was one
                        of the strategic points of the country because of the big gold mining company of Makmal. Direct
                        aid from Moscow and support made this place very popular at that time. Today Kazarman is small
                        village with more than 10,000 inhabitants. Kazarman is the nearest place for Saimaluu-Tash
                        (“embroidered stones”) – petroglyph site, originated at Neolitic and Bronze Ages. It says that
                        from 8th century BC people lived there on the high of 3,200 m asl. Dinner and accommodation at
                        family run guesthouse.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_6\">
                        Day 6: Kazarman-Tash-Rabat caravanserai </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_6\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Transfer to the Tash-Rabat Caravanserai (15<sup>th</sup> century stone building). Medieval
                        stone building of Caravanserai is one of the architectural sites of the Kyrgyzstan, standing
                        alone the Silk Road. On the way stop by for the lunch at Naryn town. Arrival to Tash-Rabat yurt
                        camp. Visit caravanserai. Free time. Dinner and B&amp;B stay in a yurt.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_7\">
                        Day 7: Tash-Rabat Caravaserai-Naryn </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_7\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Free morning at the site. Walking to the nearest mountains and enjoy participating at the
                        everyday household activities of the local family. Lunch in a yurt. Afternoon transfer to Naryn
                        via Koshoi-Korgon fortress. Arrival in Naryn. Dinner and accommodation at hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_8\">
                        Day 8: Naryn-Son-Kol Lake </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_8\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Transfer to the Son-Kol Lake – alpine summer pastures for the centuries giving growth and
                        prosperity for all folks. Road to the lake goes by the 32 serpentine Pass.  Picnic lunch on the
                        way. Arrival to Son-Kol lake shore. Meeting with local family living there for summer. Dinner
                        and stay in a yurt.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_9\">
                        Day 9: Son-Kol Lake-Bokonbaevo </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_9\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Free morning at the lake shore. See everyday life of families living at summer pastures –
                        everyday household and life at 3000 m asl. (Optional: horseback riding).  Drive to Kochkor
                        village, cross road of trade and logistics on the way. Visit family of local felt handicraft. 
                        Have a lunch with them. See felt items being made display by Guljan eje. Felt traditionally
                        worked out in 2 technologies – Ala-Kiyiz and Shyrdak. She will open up secrets of making natural
                        felt items. Further transfer to the southern shore of Issyk-Kul Lake. Evening have walk at the
                        lake shore and enjoy it. Dinner and B&amp;B stay at family run guesthouse in the village.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_10\">
                        Day 10: Bokonbaevo-Karakol </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_10\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Morning see eagle hunting demonstration with local eagle hunter. Traditional way of hunting as
                        a part of nomads’ life. Transfer to Karakol town (200 km, 3 hours driving)  on the way visit
                        Skazka Canyon (Fairy Tale – sandstone shapes taking forms of animals, sculptures and figures).
                        Jety-Oguz Gorge (Seven Bulls gorge) with seven red rock mountains with fir tree forest, running
                        mountain river, a classic view of Kyrgyz pastures. Picnic lunch at nature. Walk and enjoy nature
                        of the gorge. Arrival in Karakol. Visit Holy Trinity Orthodox Church and Dungan Mosque, both of
                        19<sup>th</sup> century.   Dinner and accommodation at hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_11\">
                        Day 11: Karakol-Altyn-Arashan-Karakol </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_11\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Day trip to Altyn-Arashan Hot springs. Drive up by 4 WD off-road car to the altitude of 2500
                        meters asl. Altyn-Arashan is a famous trekking area and a valley with hot springs. There are 2
                        sources of mineral waters – radon (35С) and hydrogen sulfide (41C) and in 1963 settled up small
                        soviet type resort area. Have a free time walking at the area and have thermal spa bath. Lunch.
                        Afternoon trek back to Karakol town. Support car will follow you and can pick you up if tired.
                        Dinner and accommodation at hotel.</p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_12\">
                        Day 12: Karakol-Chong-Kemin </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_12\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Morning transfer to the territory of the National Park of Chong-Kemin by the northern shore of
                        the Issyk-Kul Lake. On the way stop by to visit Cholpon-Ata town and open air museum of
                        petroglyphs (stone drawings). These petroglyphs area is 42 hectares with drawings from 2nd
                        century BC to 4th century AD. Lunch on the way. Afternoon arrival to the territory of the
                        national park and meet with welcoming family. Dinner and B&amp;B stay at Kok-Archa guesthouse.
                      </p>
                    </div>
                  </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#group_collapse_13\">
                        Day 13: Chong-Kemin-Bishkek </a>
                    </h4>
                  </div>
                  <div id=\"group_collapse_13\" class=\"panel-collapse collapse \">
                    <div class=\"panel-body\">
                      <p>Free morning and walking at the outskirts of the area. Transfer to Bishkek (150 km, 3-4 hours
                        driving). One of the famous minarets of middle ages Burana located at the area of old Balasagun
                        town, main trading center on the way of the great Silk Road. Visit Burana. Lunch at local family
                        on the way. Arrival in Bishkek. Have a city tour – visiting Osh bazar, Oak park, Ala-Too square,
                        Philharmonic hall and Museum of Fine Arts. Dinner and accommodation at hotel. End of the tour.
                      </p>
                    </div>
                  </div>
                </div>


              </div>

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>


              <h2><a href=\"https://kyrgyzstan-tourism.com/group-tours/explore-south-and-north-kyrgyzstan/\">Explore South
                  and North Kyrgyzstan</a></h2>

              <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover dates_table_archive\">
                  <thead>
                    <tr>
                      <th>Departure</th>
                      <th>End</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Book</th>
                    </tr>
                  </thead>

                  <tbody>


                    <tr>
                      <td>
                        <p>Jul 22, 2021 - Thu</p>
                      </td>
                      <td>
                        <p>Aug 3, 2021 - Tue</p>
                      </td>
                      <td>
                        <p class=\"available\">Available</p>
                      </td>
                      <td>
                        <p>\$ 1045 USD</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" data-departure=\"Jul 22, 2021 - Thu\"
                          data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                      </td>
                    </tr>


                    <tr>
                      <td>
                        <p>Sep 4, 2021 - Sat</p>
                      </td>
                      <td>
                        <p>Oct 16, 2021 - Sat</p>
                      </td>
                      <td>
                        <p class=\"available\">Available</p>
                      </td>
                      <td>
                        <p>\$ 1045 USD</p>
                      </td>
                      <td>
                        <button class=\"cstm_button group_archive_book_button\" data-departure=\"Sep 4, 2021 - Sat\"
                          data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>



            </div>

            <!--                        <div class=\"tab-pane\" id=\"dates\">-->
            <!---->
            <!--                            -->
            <!---->
            <!--                        </div>-->

            <div class=\"tab-pane\" id=\"location\">

              <div class=\"mobile_book_btn_wrapper text-center\">
                <button class=\"cstm_button mobile_book_btn\">Book</button>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"photos\">

              <div class=\"custom_gallery\">
              </div>
              <!--                            <div class=\"mobile_book_btn_wrapper text-center\">-->
              <!--                                <button class=\"cstm_button mobile_book_btn\">Book</button>-->
              <!--                            </div>-->

            </div>
          </div>



          <!--                    MOBILE VISIBLE-->

          <div class=\"visible-xs\">
            <h3><img alt=\"\" width=\"960\" height=\"400\"
                data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                data-pagespeed-url-hash=\"31059146\"
                onload=\"pagespeed.CriticalImages.checkImageForCriticality(this);\" /><noscript><img alt=\"\" width=\"960\"
                  height=\"400\"
                  data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                  data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\"
                  data-sizes=\"(max-width: 960px) 100vw, 960px\" class=\"alignnone size-full wp-image-5273 lazyload\"
                  src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                  data-pagespeed-url-hash=\"31059146\" /><noscript><img class=\"alignnone size-full wp-image-5273 lazy\"
                    src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20960%20400'%3E%3C/svg%3E\"
                    data-src=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg\" alt=\"\"
                    width=\"960\" height=\"400\"
                    data-srcset=\"https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth.jpg 960w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-300x125.jpg 300w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-768x320.jpg 768w, https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Grouptour-NorhtSouth-150x63.jpg 150w\"
                    data-sizes=\"(max-width: 960px) 100vw, 960px\"
                    data-pagespeed-url-hash=\"3129193300\" /></noscript></noscript></h3>
            <h3>Have a chance to have a round trip in Kyrgyzstan, visiting South and North part of the country</h3>
            <p><b>South Kyrgyzstan &#8211; </b>Being part of the flourishing Fergana valley, south part of the country
              have a zest on it with natural walnut forests of Arslanbob and Kyzyl-Unkur,  ancient towns of Uzgen and <a
                href=\"https://kyrgyzstan-tourism.com/sights/osh-town/\">Osh</a></p>
            <p><b>North Kyrgyzstan &#8211; </b>You would have a chance to live in a yurt with local hosts, seeing
              semi-nomadic way of life in Son-Kol Lake. Explore the Silk Road <a
                href=\"https://kyrgyzstan-tourism.com/sights/tash-rabat-honoring-silk-road-heritage/\">Caravanserai 
                Tash-Rabat</a>. Visit the pearl of the Kyrgyzstan &#8211; <a
                href=\"https://kyrgyzstan-tourism.com/sights/issyk-kul-lake/\">Issyk-Kul Lake</a></p>
            <ul>
              <li><strong>Duration</strong>: 13 days</li>
              <li><strong>Best Season:</strong> June &#8211; mid-September</li>
              <li><strong>Category:</strong> combined –auto/horseback/trek</li>
              <li><strong>Level of Difficulty:</strong> easy to medium</li>
              <li><strong>Group Size:</strong> 12 pax</li>
              <li><strong>Highlights:</strong> Arslanbob, Osh, Tash-Rabat, Son-Kol Lake, Jeti-Oguz,  Canyon Skazka,
                Altyn-Arashan, Chong-Kemin National Park, Burana</li>
              <li><strong>Requirements:</strong> weatherproof warm clothes, trekking boots, hat, sunglasses, and
                sunscreen</li>
            </ul>

            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

            <h2>ITINERARY</h2>


            <p class=\"text-right\"><button class=\"cstm_button\" id=\"stepExpand2\">Expand all</button></p>

            <div class=\"panel-group\" id=\"accordion_group_mobile\">

              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_1\">
                      Day 1: Bishkek </a>
                  </h4>
                </div>
                <div id=\"collapse_1\" class=\"panel-collapse collapse in\">
                  <div class=\"panel-body\">
                    <p><strong>Briefing session</strong><br />
                      If you confirm your tour and already in a list of the travelers for the Group Tour 2020, please
                      join us and the group.We invite you for the Briefing Session!<br />
                      <strong>Day:</strong> The day before the departure date.<br />
                      <strong>Time:</strong> Meet at the noontime at 12.00 p.m.<br />
                      <strong>Place:</strong> Kyrgyz Tourism office at 21, Abay street (Olive Hotel)<br />
                      &#8211; Discuss day by day detailed program<br />
                      &#8211; Focus on highlights<br />
                      &#8211; Need to know issues<br />
                      &#8211; Discussion<br />
                      &#8211; Answer your questions<br />
                      &#8211; Welcome lunch</p>
                    <p>Upon your request, we can arrange your airport picking up/meeting and help you with your
                      accommodation arrangements in Bishkek.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_2\">
                      Day 2: Bishkek-Arslanbob </a>
                  </h4>
                </div>
                <div id=\"collapse_2\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Early morning start transfer to Arslanbob village at Jalalabad region (600 km, 8-9 hours
                      driving). Transfer via Too-Ashu Pass (3586 m asl) by the stunning serpentine road followed by the
                      amazing view of Suusamyr valley. On the way pass by the narrow Chychkan Gorge (‘mouse’ gorge) and
                      Toktogul water reservoir. Evening arrival to the village. Dinner and overnight stay at family run
                      guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_3\">
                      Day 3: Arslanbob-Kyzyl-Unkur </a>
                  </h4>
                </div>
                <div id=\"collapse_3\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Day trek to waterfall and panoramic view of the walnut forest of Arslanbob. The territory of the
                      walnut forest counted for 60,000 hectares and located at the altitude of 2,500 m above sea level.
                      Arslanbob produces 1500 tons of nuts per year. Afternoon transfer to Kyzyl-Unkur village, less
                      touristic spot near the Arslanbob. Lunch, Dinner and B&amp;B stay at local guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_4\">
                      Day 4: Kyzyl-Unkur-Osh town </a>
                  </h4>
                </div>
                <div id=\"collapse_4\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Morning after the breakfast transfer to Osh town via Uzgen ( 180 km, 4 hours). Visit Uzgen
                      Minaret and Karakhanid Mausoleum of 12<sup>th</sup> century. Uzgen was a capital of Karakhanids
                      and called it as Mavarannahr. Lunch at local cafe. Arrival in Osh. Have a short city tour visiting
                      Sulaiman Mountain, the World Heritage Site of UNESCO in Kyrgyzstan. Visit
                      historical-archaeological museum with collection of diverse findings at the area. Dinner at cafe
                      with local tasty samsy (dumpling, baked at tandoor), ash (pilav) and green tea. Accommodation at
                      hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_5\">
                      Day 5: Osh town - Kazarman </a>
                  </h4>
                </div>
                <div id=\"collapse_5\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>That day road goes to the East part of the country. Osh-Kazarman &#8211; 260 km, 5 hours.
                      Kazarman village situated at the road from Osh to Naryn. During the Soviet time Kazarman was one
                      of the strategic points of the country because of the big gold mining company of Makmal. Direct
                      aid from Moscow and support made this place very popular at that time. Today Kazarman is small
                      village with more than 10,000 inhabitants. Kazarman is the nearest place for Saimaluu-Tash
                      (“embroidered stones”) – petroglyph site, originated at Neolitic and Bronze Ages. It says that
                      from 8th century BC people lived there on the high of 3,200 m asl. Dinner and accommodation at
                      family run guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_6\">
                      Day 6: Kazarman-Tash-Rabat caravanserai </a>
                  </h4>
                </div>
                <div id=\"collapse_6\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Transfer to the Tash-Rabat Caravanserai (15<sup>th</sup> century stone building). Medieval stone
                      building of Caravanserai is one of the architectural sites of the Kyrgyzstan, standing alone the
                      Silk Road. On the way stop by for the lunch at Naryn town. Arrival to Tash-Rabat yurt camp. Visit
                      caravanserai. Free time. Dinner and B&amp;B stay in a yurt.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_7\">
                      Day 7: Tash-Rabat Caravaserai-Naryn </a>
                  </h4>
                </div>
                <div id=\"collapse_7\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Free morning at the site. Walking to the nearest mountains and enjoy participating at the
                      everyday household activities of the local family. Lunch in a yurt. Afternoon transfer to Naryn
                      via Koshoi-Korgon fortress. Arrival in Naryn. Dinner and accommodation at hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_8\">
                      Day 8: Naryn-Son-Kol Lake </a>
                  </h4>
                </div>
                <div id=\"collapse_8\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Transfer to the Son-Kol Lake – alpine summer pastures for the centuries giving growth and
                      prosperity for all folks. Road to the lake goes by the 32 serpentine Pass.  Picnic lunch on the
                      way. Arrival to Son-Kol lake shore. Meeting with local family living there for summer. Dinner and
                      stay in a yurt.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_9\">
                      Day 9: Son-Kol Lake-Bokonbaevo </a>
                  </h4>
                </div>
                <div id=\"collapse_9\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Free morning at the lake shore. See everyday life of families living at summer pastures –
                      everyday household and life at 3000 m asl. (Optional: horseback riding).  Drive to Kochkor
                      village, cross road of trade and logistics on the way. Visit family of local felt handicraft. 
                      Have a lunch with them. See felt items being made display by Guljan eje. Felt traditionally worked
                      out in 2 technologies – Ala-Kiyiz and Shyrdak. She will open up secrets of making natural felt
                      items. Further transfer to the southern shore of Issyk-Kul Lake. Evening have walk at the lake
                      shore and enjoy it. Dinner and B&amp;B stay at family run guesthouse in the village.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_10\">
                      Day 10: Bokonbaevo-Karakol </a>
                  </h4>
                </div>
                <div id=\"collapse_10\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Morning see eagle hunting demonstration with local eagle hunter. Traditional way of hunting as a
                      part of nomads’ life. Transfer to Karakol town (200 km, 3 hours driving)  on the way visit Skazka
                      Canyon (Fairy Tale – sandstone shapes taking forms of animals, sculptures and figures). Jety-Oguz
                      Gorge (Seven Bulls gorge) with seven red rock mountains with fir tree forest, running mountain
                      river, a classic view of Kyrgyz pastures. Picnic lunch at nature. Walk and enjoy nature of the
                      gorge. Arrival in Karakol. Visit Holy Trinity Orthodox Church and Dungan Mosque, both of
                      19<sup>th</sup> century.   Dinner and accommodation at hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_11\">
                      Day 11: Karakol-Altyn-Arashan-Karakol </a>
                  </h4>
                </div>
                <div id=\"collapse_11\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Day trip to Altyn-Arashan Hot springs. Drive up by 4 WD off-road car to the altitude of 2500
                      meters asl. Altyn-Arashan is a famous trekking area and a valley with hot springs. There are 2
                      sources of mineral waters – radon (35С) and hydrogen sulfide (41C) and in 1963 settled up small
                      soviet type resort area. Have a free time walking at the area and have thermal spa bath. Lunch.
                      Afternoon trek back to Karakol town. Support car will follow you and can pick you up if tired.
                      Dinner and accommodation at hotel.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_12\">
                      Day 12: Karakol-Chong-Kemin </a>
                  </h4>
                </div>
                <div id=\"collapse_12\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Morning transfer to the territory of the National Park of Chong-Kemin by the northern shore of
                      the Issyk-Kul Lake. On the way stop by to visit Cholpon-Ata town and open air museum of
                      petroglyphs (stone drawings). These petroglyphs area is 42 hectares with drawings from 2nd century
                      BC to 4th century AD. Lunch on the way. Afternoon arrival to the territory of the national park
                      and meet with welcoming family. Dinner and B&amp;B stay at Kok-Archa guesthouse.</p>
                  </div>
                </div>
              </div>


              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion_group\" href=\"#collapse_13\">
                      Day 13: Chong-Kemin-Bishkek </a>
                  </h4>
                </div>
                <div id=\"collapse_13\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>Free morning and walking at the outskirts of the area. Transfer to Bishkek (150 km, 3-4 hours
                      driving). One of the famous minarets of middle ages Burana located at the area of old Balasagun
                      town, main trading center on the way of the great Silk Road. Visit Burana. Lunch at local family
                      on the way. Arrival in Bishkek. Have a city tour – visiting Osh bazar, Oak park, Ala-Too square,
                      Philharmonic hall and Museum of Fine Arts. Dinner and accommodation at hotel. End of the tour.</p>
                  </div>
                </div>
              </div>


            </div>

            <!--                        <div class=\"mobile_book_btn_wrapper text-center\">-->
            <!--                            <button class=\"cstm_button mobile_book_btn\">Book</button>-->
            <!--                        </div>-->


            <h2><a href=\"https://kyrgyzstan-tourism.com/group-tours/explore-south-and-north-kyrgyzstan/\">Explore South
                and North Kyrgyzstan</a></h2>

            <div class=\"table-responsive\">
              <table class=\"table table-striped table-hover dates_table_archive\">
                <thead>
                  <tr>
                    <th>Departure</th>
                    <th>End</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Book</th>
                  </tr>
                </thead>

                <tbody>


                  <tr>
                    <td>
                      <p>Jul 22, 2021 - Thu</p>
                    </td>
                    <td>
                      <p>Aug 3, 2021 - Tue</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$ 1045 USD</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Jul 22, 2021 - Thu\"
                        data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <p>Sep 4, 2021 - Sat</p>
                    </td>
                    <td>
                      <p>Oct 16, 2021 - Sat</p>
                    </td>
                    <td>
                      <p class=\"available\">Available</p>
                    </td>
                    <td>
                      <p>\$ 1045 USD</p>
                    </td>
                    <td>
                      <button class=\"cstm_button group_archive_book_button\" data-departure=\"Sep 4, 2021 - Sat\"
                        data-title=\"Explore South and North Kyrgyzstan\">Book</button>
                    </td>
                  </tr>
                </tbody>

              </table>
            </div>



            <div class=\"mobile_book_btn_wrapper text-center\">
              <button class=\"cstm_button mobile_book_btn\">Book</button>
            </div>

          </div>




          <div class=\"panel-group visible-xs\" id=\"accordion\">

            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
                    PHOTOS
                  </a>
                </h4>
              </div>
              <div id=\"collapseFour\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <div class=\"custom_gallery\">
                  </div>
                  <!--                                    <div class=\"mobile_book_btn_wrapper text-center\">-->
                  <!--                                        <button class=\"cstm_button mobile_book_btn\">Book</button>-->
                  <!--                                    </div>-->
                </div>
              </div>
            </div>

          </div>
          <!--                    END MOBILE VISIBLE-->

        </div>

      </div>

      <div id=\"faq_wrapper\">

        <h2>FAQ</h2>
        <p class=\"text-right\"><button class=\"cstm_button\" id=\"faqExpand\">Expand all</button></p>
        <div class=\"panel-group\" id=\"accordion_group_faq\">

          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_1\">
                  What included and excluded? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_1\" class=\"panel-collapse collapse in\">
              <div class=\"panel-body\">
                <p><strong>It is included:</strong><br />
                  &#8211; All accommodations (hotels, guest houses, yurt camps), except the first day in Bishkek</p>
                <p>-All activities according to the program</p>
                <p>&#8211; Eng.speaking guide during the tour</p>
                <p>&#8211; All meals (Lunches, Dinners, and breakfasts)</p>
                <p>&#8211; Drinking bottled water</p>
                <p>&#8211; Individual transport from the Airport to the Airport</p>
                <p><strong>It is not included:</strong></p>
                <p>&#8211; Air flight ticket</p>
                <p>&#8211; Bishkek hotel for arrival dates.</p>
                <p>&#8211; Personal expenses</p>
                <p>&#8211; Alcohol drinks</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_2\">
                  Is it confirmed tour? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_2\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>This tour is a joint group tour. If we have less than 3 people in a group, we can adapt the tour for
                  the given budget and make it an individual tour especially for you.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_3\">
                  How big is the group? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_3\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Groups collected from 3 people till 12 people.</p>
              </div>
            </div>
          </div>


          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion_group_faq\" href=\"#group_collapse_faq_4\">
                  How to book tour? </a>
              </h4>
            </div>
            <div id=\"group_collapse_faq_4\" class=\"panel-collapse collapse \">
              <div class=\"panel-body\">
                <p>Contact us and we issue the invoice for 20% payment from the net tour cost. You can send it by bank
                  transfer. The rest of the payment you can pay upon your arrival day in Bishkek (welcoming the first
                  day with briefing ). Be informed that the bank transfer fee will be additionally 3% over the cost of
                  the transaction and it will be on the client (for cash payment no additional costs).</p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>


        </div>

      </div>

      <div id=\"book_tour\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div id=\"content\">
              <h2>Book tour</h2>
              <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o1\" lang=\"ru-RU\" dir=\"ltr\">
                <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
                <form action=\"/group-tours/explore-south-and-north-kyrgyzstan/#wpcf7-f5211-o1\" method=\"post\"
                  class=\"wpcf7-form init\" novalidate=\"novalidate\">
                  <div style=\"display: none;\">
                    <input type=\"hidden\" name=\"_wpcf7\" value=\"5211\" />
                    <input type=\"hidden\" name=\"_wpcf7_version\" value=\"5.2.2\" />
                    <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"ru_RU\" />
                    <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f5211-o1\" />
                    <input type=\"hidden\" name=\"_wpcf7_container_post\" value=\"0\" />
                    <input type=\"hidden\" name=\"_wpcf7_posted_data_hash\" value=\"\" />
                    <input type=\"hidden\" name=\"_wpcf7_recaptcha_response\" value=\"\" />
                  </div>
                  <p><span class=\"wpcf7-form-control-wrap text-tour\"><input type=\"text\" name=\"text-tour\" value=\"\"
                        size=\"40\" class=\"wpcf7-form-control wpcf7-text hidden input_tour_name\"
                        aria-invalid=\"false\" /></span><span class=\"wpcf7-form-control-wrap text-departure\"><input
                        type=\"text\" name=\"text-departure\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text text_departure hidden\" aria-invalid=\"false\" /></span><span
                      class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\" name=\"text-name\" value=\"\" size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                        aria-invalid=\"false\" placeholder=\"Your name\" /></span></p>
                  <h4>Departure</h4>
                  <p><select name='available_departure_select' class='available_departure_select'>
                      <option value=\"Jul 22, 2021 - Thu\" selected>Jul 22, 2021 - Thu</option>
                      <option value=\"Sep 4, 2021 - Sat\">Sep 4, 2021 - Sat</option>
                    </select></p>
                  <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\"
                        size=\"40\"
                        class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                        aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
                  <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\"
                        rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                        placeholder=\"Your message\"></textarea></span></p>
                  <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
                      class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"></p>
                  <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id=\"similar_tours\">
        <h3>You May Also Like</h3>
        <div class=\"row\">




          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a href=\"https://kyrgyzstan-tourism.com/group-tours/nomadic-horse-trek-for-beginners/\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"\"
                    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/header-horse-tours-660x360.jpg)\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$780US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>Nomadic Horse Trek for Beginners</h3>
                  <p class=\"excerpt\">Horseback tour</p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 10 days</p>
              </a>
            </div>

          </div>




          <div class=\"col-sm-4\">
            <div class=\"item item_tour with_border auto_height \">
              <a href=\"https://kyrgyzstan-tourism.com/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/\">
                <span class=\"img_wrapper\">
                  <span class=\"img lazy\" style=\"\"
                    data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/11/Song-Kul-Lake-660x360.jpg)\"></span>

                  <span class=\"price-round group_price\">
                    <span class=\"inner\">\$890 US</span>
                  </span>

                </span>
                <div class=\"desc\">
                  <h3>Pearls of Kyrgyzstan: Issyk-Kul and Song-Kul.</h3>
                  <p class=\"excerpt\">guaranteed departure </p>
                </div>
                <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 9 days</p>
              </a>
            </div>

          </div>



        </div>
      </div>

    </div>
    <div class=\"col-sm-3\">


      <div id=\"sidebar\">



        <div class=\"tags tags_light\">
          <h3>Group tours</h3>
          <div class=\"line_helper\" style=\"background: #e9e9e9\"></div>
          <ul class=\"list-unstyled sdb_ul\">


            <li><a href=\"https://kyrgyzstan-tourism.com/group-tours/pearls-of-kyrgyzstan-issyk-kul-and-song-kul/\">Pearls
                of Kyrgyzstan: Issyk-Kul and Song-Kul.</a></li>


            <li><a href=\"https://kyrgyzstan-tourism.com/group-tours/explore-south-and-north-kyrgyzstan/\">Explore South
                and North Kyrgyzstan</a></li>


            <li><a href=\"https://kyrgyzstan-tourism.com/group-tours/nomadic-horse-trek-for-beginners/\">Nomadic Horse
                Trek for Beginners</a></li>


          </ul>


        </div>



        <div class=\"tags tags_light\">
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


        <div class=\"sdb_most_popular visible-xs\">

          <h3>Most popular tours</h3>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-to-the-lake-kel-suu/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/Kel-Suu-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Trekking to the Lake Kel-Suu</h3>
                <p class=\"excerpt\">Trekking</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 5</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a
              href=\"https://kyrgyzstan-tourism.com/tours/travelling-from-kichik-alay-to-pamir-alay-through-jiptik-pass/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/HikerLeninPeak-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Travelling from Kichik-Alay to Pamir-Alay.</h3>
                <p class=\"excerpt\">Alay mountains, Lenin peak panorama</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/lake-hopping-issyk-kul-and-song-kul/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SunsetSKyurt-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Lake hopping: Issyk-Kul and Song-Kul</h3>
                <p class=\"excerpt\">Milti-active tour</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>


        </div>

        <div class=\"form_wrapper sdb_form\">


          <h3>Book the tour</h3>
          <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f5211-o2\" lang=\"ru-RU\" dir=\"ltr\">
            <div class=\"screen-reader-response\" role=\"alert\" aria-live=\"polite\"></div>
            <form action=\"/group-tours/explore-south-and-north-kyrgyzstan/#wpcf7-f5211-o2\" method=\"post\"
              class=\"wpcf7-form init\" novalidate=\"novalidate\">
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
                  class=\"wpcf7-form-control-wrap text-departure\"><input type=\"text\" name=\"text-departure\" value=\"\"
                    size=\"40\" class=\"wpcf7-form-control wpcf7-text text_departure hidden\"
                    aria-invalid=\"false\" /></span><span class=\"wpcf7-form-control-wrap text-name\"><input type=\"text\"
                    name=\"text-name\" value=\"\" size=\"40\"
                    class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required\" aria-required=\"true\"
                    aria-invalid=\"false\" placeholder=\"Your name\" /></span></p>
              <h4>Departure</h4>
              <p><select name='available_departure_select' class='available_departure_select'>
                  <option value=\"Jul 22, 2021 - Thu\" selected>Jul 22, 2021 - Thu</option>
                  <option value=\"Sep 4, 2021 - Sat\">Sep 4, 2021 - Sat</option>
                </select></p>
              <p><span class=\"wpcf7-form-control-wrap email-196\"><input type=\"email\" name=\"email-196\" value=\"\" size=\"40\"
                    class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email\"
                    aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Your email\" /></span></p>
              <p><span class=\"wpcf7-form-control-wrap textarea-630\"><textarea name=\"textarea-630\" cols=\"40\" rows=\"10\"
                    class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\"
                    placeholder=\"Your message\"></textarea></span></p>
              <p><input type=\"submit\" value=\"Send\" onclick=\"ga('send','event','НижняяФорма','send')\"
                  class=\"wpcf7-form-control wpcf7-submit cstm_button submit\"></p>
              <div class=\"wpcf7-response-output\" role=\"alert\" aria-hidden=\"true\"></div>
            </form>
          </div>
        </div>

        <div class=\"sdb_most_popular hidden-xs\">

          <h3>Most popular tours</h3>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/trekking-to-the-lake-kel-suu/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/10/Kel-Suu-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Trekking to the Lake Kel-Suu</h3>
                <p class=\"excerpt\">Trekking</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 5</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a
              href=\"https://kyrgyzstan-tourism.com/tours/travelling-from-kichik-alay-to-pamir-alay-through-jiptik-pass/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/HikerLeninPeak-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Travelling from Kichik-Alay to Pamir-Alay.</h3>
                <p class=\"excerpt\">Alay mountains, Lenin peak panorama</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>

          <div class=\"item item_tour with_border auto_height \">
            <a href=\"https://kyrgyzstan-tourism.com/tours/lake-hopping-issyk-kul-and-song-kul/\">
              <span class=\"img_wrapper\">
                <span class=\"img lazy\" style=\"\"
                  data-bg=\"url(https://kyrgyzstan-tourism.com/wp-content/uploads/2019/03/SunsetSKyurt-1-of-1-660x360.jpg)\"></span>

              </span>
              <div class=\"desc\">
                <h3>Lake hopping: Issyk-Kul and Song-Kul</h3>
                <p class=\"excerpt\">Milti-active tour</p>
              </div>
              <p class=\"duration\"><i class=\"fa fa-clock-o\"></i> 7 days</p>
            </a>
          </div>


        </div>

      </div>
      <div id=\"sidebar\">

      </div>

    </div>
  </div>
</div>










{% else %}
{{ notFoundMessage }}
{% endif %}", "C:\\work\\xampp\\htdocs\\tourism/themes/tourism/pages/tours.htm", "");
    }
}
