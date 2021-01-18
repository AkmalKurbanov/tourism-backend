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
        $filters = array("escape" => 26);
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
          

  <phone><a href=\"tel:+996 706 363738\">+996 706 363738</a></phone>

            

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
            <script data-pagespeed-no-defer>
              //<![CDATA[
              (function () {
                for (var g = \"function\" == typeof Object.defineProperties ? Object.defineProperty :
                    function (b, c, a) {
                      if (a.get || a.set) throw new TypeError(
                        \"ES3 does not support getters and setters.\");
                      b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                    }, h = \"undefined\" != typeof window && window === this ? this :
                    \"undefined\" != typeof global && null != global ? global : this, k = [
                      \"String\", \"prototype\", \"repeat\"
                    ], l = 0; l < k.length - 1; l++) {
                  var m = k[l];
                  m in h || (h[m] = {});
                  h = h[m]
                }
                var n = k[k.length - 1],
                  p = h[n],
                  q = p ? p : function (b) {
                    var c;
                    if (null == this) throw new TypeError(
                      \"The 'this' value for String.prototype.repeat must not be null or undefined\"
                    );
                    c = this + \"\";
                    if (0 > b || 1342177279 < b) throw new RangeError(\"Invalid count value\");
                    b |= 0;
                    for (var a = \"\"; b;)
                      if (b & 1 && (a += c), b >>>= 1) c += c;
                    return a
                  };
                q != p && null != q && g(h, n, {
                  configurable: !0,
                  writable: !0,
                  value: q
                });
                var t = this;

                function u(b, c) {
                  var a = b.split(\".\"),
                    d = t;
                  a[0] in d || !d.execScript || d.execScript(\"var \" + a[0]);
                  for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d =
                    d[e] : d = d[e] = {} : d[e] = c
                };

                function v(b) {
                  var c = b.length;
                  if (0 < c) {
                    for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                    return a
                  }
                  return []
                };

                function w(b) {
                  var c = window;
                  if (c.addEventListener) c.addEventListener(\"load\", b, !1);
                  else if (c.attachEvent) c.attachEvent(\"onload\", b);
                  else {
                    var a = c.onload;
                    c.onload = function () {
                      b.call(this);
                      a && a.call(this)
                    }
                  }
                };
                var x;

                function y(b, c, a, d, e) {
                  this.h = b;
                  this.j = c;
                  this.l = a;
                  this.f = e;
                  this.g = {
                    height: window.innerHeight || document.documentElement.clientHeight ||
                      document.body.clientHeight,
                    width: window.innerWidth || document.documentElement.clientWidth ||
                      document.body.clientWidth
                  };
                  this.i = d;
                  this.b = {};
                  this.a = [];
                  this.c = {}
                }

                function z(b, c) {
                  var a, d, e = c.getAttribute(\"data-pagespeed-url-hash\");
                  if (a = e && !(e in b.c))
                    if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                    else {
                      d = c.getBoundingClientRect();
                      var f = document.body;
                      a = d.top + (\"pageYOffset\" in window ? window.pageYOffset : (document
                        .documentElement || f.parentNode || f).scrollTop);
                      d = d.left + (\"pageXOffset\" in window ? window.pageXOffset : (document
                        .documentElement || f.parentNode || f).scrollLeft);
                      f = a.toString() + \",\" + d;
                      b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height &&
                        d <= b.g.width)
                    } a && (b.a.push(e), b.c[e] = !0)
                }
                y.prototype.checkImageForCriticality = function (b) {
                  b.getBoundingClientRect && z(this, b)
                };
                u(\"pagespeed.CriticalImages.checkImageForCriticality\", function (b) {
                  x.checkImageForCriticality(b)
                });
                u(\"pagespeed.CriticalImages.checkCriticalImages\", function () {
                  A(x)
                });

                function A(b) {
                  b.b = {};
                  for (var c = [\"IMG\", \"INPUT\"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(
                    document.getElementsByTagName(c[d])));
                  if (a.length && a[0].getBoundingClientRect) {
                    for (d = 0; c = a[d]; ++d) z(b, c);
                    a = \"oh=\" + b.l;
                    b.f && (a += \"&n=\" + b.f);
                    if (c = !!b.a.length)
                      for (a += \"&ci=\" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++
                        d) {
                        var e = \",\" + encodeURIComponent(b.a[d]);
                        131072 >= a.length + e.length && (a += e)
                      }
                    b.i && (e = \"&rd=\" + encodeURIComponent(JSON.stringify(B())), 131072 >= a
                      .length + e.length && (a += e), c = !0);
                    C = a;
                    if (c) {
                      d = b.h;
                      b = b.j;
                      var f;
                      if (window.XMLHttpRequest) f = new XMLHttpRequest;
                      else if (window.ActiveXObject) try {
                        f = new ActiveXObject(\"Msxml2.XMLHTTP\")
                      } catch (r) {
                        try {
                          f = new ActiveXObject(\"Microsoft.XMLHTTP\")
                        } catch (D) {}
                      }
                      f && (f.open(\"POST\", d + (-1 == d.indexOf(\"?\") ? \"?\" : \"&\") + \"url=\" +
                        encodeURIComponent(b)), f.setRequestHeader(\"Content-Type\",
                        \"application/x-www-form-urlencoded\"), f.send(a))
                    }
                  }
                }

                function B() {
                  var b = {},
                    c;
                  c = document.getElementsByTagName(\"IMG\");
                  if (!c.length) return {};
                  var a = c[0];
                  if (!(\"naturalWidth\" in a && \"naturalHeight\" in a)) return {};
                  for (var d = 0; a = c[d]; ++d) {
                    var e = a.getAttribute(\"data-pagespeed-url-hash\");
                    e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 <
                      a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m
                    ) && (b[e] = {
                      rw: a.width,
                      rh: a.height,
                      ow: a.naturalWidth,
                      oh: a.naturalHeight
                    })
                  }
                  return b
                }
                var C = \"\";
                u(\"pagespeed.CriticalImages.getBeaconData\", function () {
                  return C
                });
                u(\"pagespeed.CriticalImages.Run\", function (b, c, a, d, e, f) {
                  var r = new y(b, c, a, e, f);
                  x = r;
                  d && w(function () {
                    window.setTimeout(function () {
                      A(r)
                    }, 0)
                  })
                });
              })();
              pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'http://kyrgyzstan-tourism.com/',
                'NqBu-of7bl', true, false, '-lJygSkbD9k');
              //]]>
            </script>
            

            
            
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
        return array (  89 => 26,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

      <div class=\"row\">

        <div class=\"col-sm-6\">
          <div class=\"phone\">
          

  <phone><a href=\"tel:+996 706 363738\">+996 706 363738</a></phone>

            

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
            <script data-pagespeed-no-defer>
              //<![CDATA[
              (function () {
                for (var g = \"function\" == typeof Object.defineProperties ? Object.defineProperty :
                    function (b, c, a) {
                      if (a.get || a.set) throw new TypeError(
                        \"ES3 does not support getters and setters.\");
                      b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                    }, h = \"undefined\" != typeof window && window === this ? this :
                    \"undefined\" != typeof global && null != global ? global : this, k = [
                      \"String\", \"prototype\", \"repeat\"
                    ], l = 0; l < k.length - 1; l++) {
                  var m = k[l];
                  m in h || (h[m] = {});
                  h = h[m]
                }
                var n = k[k.length - 1],
                  p = h[n],
                  q = p ? p : function (b) {
                    var c;
                    if (null == this) throw new TypeError(
                      \"The 'this' value for String.prototype.repeat must not be null or undefined\"
                    );
                    c = this + \"\";
                    if (0 > b || 1342177279 < b) throw new RangeError(\"Invalid count value\");
                    b |= 0;
                    for (var a = \"\"; b;)
                      if (b & 1 && (a += c), b >>>= 1) c += c;
                    return a
                  };
                q != p && null != q && g(h, n, {
                  configurable: !0,
                  writable: !0,
                  value: q
                });
                var t = this;

                function u(b, c) {
                  var a = b.split(\".\"),
                    d = t;
                  a[0] in d || !d.execScript || d.execScript(\"var \" + a[0]);
                  for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d =
                    d[e] : d = d[e] = {} : d[e] = c
                };

                function v(b) {
                  var c = b.length;
                  if (0 < c) {
                    for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                    return a
                  }
                  return []
                };

                function w(b) {
                  var c = window;
                  if (c.addEventListener) c.addEventListener(\"load\", b, !1);
                  else if (c.attachEvent) c.attachEvent(\"onload\", b);
                  else {
                    var a = c.onload;
                    c.onload = function () {
                      b.call(this);
                      a && a.call(this)
                    }
                  }
                };
                var x;

                function y(b, c, a, d, e) {
                  this.h = b;
                  this.j = c;
                  this.l = a;
                  this.f = e;
                  this.g = {
                    height: window.innerHeight || document.documentElement.clientHeight ||
                      document.body.clientHeight,
                    width: window.innerWidth || document.documentElement.clientWidth ||
                      document.body.clientWidth
                  };
                  this.i = d;
                  this.b = {};
                  this.a = [];
                  this.c = {}
                }

                function z(b, c) {
                  var a, d, e = c.getAttribute(\"data-pagespeed-url-hash\");
                  if (a = e && !(e in b.c))
                    if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                    else {
                      d = c.getBoundingClientRect();
                      var f = document.body;
                      a = d.top + (\"pageYOffset\" in window ? window.pageYOffset : (document
                        .documentElement || f.parentNode || f).scrollTop);
                      d = d.left + (\"pageXOffset\" in window ? window.pageXOffset : (document
                        .documentElement || f.parentNode || f).scrollLeft);
                      f = a.toString() + \",\" + d;
                      b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height &&
                        d <= b.g.width)
                    } a && (b.a.push(e), b.c[e] = !0)
                }
                y.prototype.checkImageForCriticality = function (b) {
                  b.getBoundingClientRect && z(this, b)
                };
                u(\"pagespeed.CriticalImages.checkImageForCriticality\", function (b) {
                  x.checkImageForCriticality(b)
                });
                u(\"pagespeed.CriticalImages.checkCriticalImages\", function () {
                  A(x)
                });

                function A(b) {
                  b.b = {};
                  for (var c = [\"IMG\", \"INPUT\"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(
                    document.getElementsByTagName(c[d])));
                  if (a.length && a[0].getBoundingClientRect) {
                    for (d = 0; c = a[d]; ++d) z(b, c);
                    a = \"oh=\" + b.l;
                    b.f && (a += \"&n=\" + b.f);
                    if (c = !!b.a.length)
                      for (a += \"&ci=\" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++
                        d) {
                        var e = \",\" + encodeURIComponent(b.a[d]);
                        131072 >= a.length + e.length && (a += e)
                      }
                    b.i && (e = \"&rd=\" + encodeURIComponent(JSON.stringify(B())), 131072 >= a
                      .length + e.length && (a += e), c = !0);
                    C = a;
                    if (c) {
                      d = b.h;
                      b = b.j;
                      var f;
                      if (window.XMLHttpRequest) f = new XMLHttpRequest;
                      else if (window.ActiveXObject) try {
                        f = new ActiveXObject(\"Msxml2.XMLHTTP\")
                      } catch (r) {
                        try {
                          f = new ActiveXObject(\"Microsoft.XMLHTTP\")
                        } catch (D) {}
                      }
                      f && (f.open(\"POST\", d + (-1 == d.indexOf(\"?\") ? \"?\" : \"&\") + \"url=\" +
                        encodeURIComponent(b)), f.setRequestHeader(\"Content-Type\",
                        \"application/x-www-form-urlencoded\"), f.send(a))
                    }
                  }
                }

                function B() {
                  var b = {},
                    c;
                  c = document.getElementsByTagName(\"IMG\");
                  if (!c.length) return {};
                  var a = c[0];
                  if (!(\"naturalWidth\" in a && \"naturalHeight\" in a)) return {};
                  for (var d = 0; a = c[d]; ++d) {
                    var e = a.getAttribute(\"data-pagespeed-url-hash\");
                    e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 <
                      a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m
                    ) && (b[e] = {
                      rw: a.width,
                      rh: a.height,
                      ow: a.naturalWidth,
                      oh: a.naturalHeight
                    })
                  }
                  return b
                }
                var C = \"\";
                u(\"pagespeed.CriticalImages.getBeaconData\", function () {
                  return C
                });
                u(\"pagespeed.CriticalImages.Run\", function (b, c, a, d, e, f) {
                  var r = new y(b, c, a, e, f);
                  x = r;
                  d && w(function () {
                    window.setTimeout(function () {
                      A(r)
                    }, 0)
                  })
                });
              })();
              pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'http://kyrgyzstan-tourism.com/',
                'NqBu-of7bl', true, false, '-lJygSkbD9k');
              //]]>
            </script>
            

            
            
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
