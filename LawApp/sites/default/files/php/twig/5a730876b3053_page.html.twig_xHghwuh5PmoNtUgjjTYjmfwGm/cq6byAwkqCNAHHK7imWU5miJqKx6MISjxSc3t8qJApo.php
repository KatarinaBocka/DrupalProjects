<?php

/* themes/base_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_e54e3a5fb7aafe446b1e0d60fc07ca3abde16f6dbb76375c61a9d3899534397f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 63, "for" => 94);
        $filters = array("raw" => 95, "date" => 436);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "


";
        // line 63
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", array()) || $this->getAttribute(($context["page"] ?? null), "top_menu", array()))) {
            // line 64
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 70
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", array())) {
                // line 71
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_email", array()), "html", null, true));
                echo "
          ";
            }
            // line 73
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 78
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", array())) {
                // line 79
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_menu", array()), "html", null, true));
                echo "
          ";
            }
            // line 81
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 88
        echo "

<!-- Start: Slider -->
  ";
        // line 91
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 92
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 95
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "      </ul>
    </div>
  ";
        }
        // line 100
        echo "<!-- End: Slider -->


<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-2\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 117
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 119
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 125
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 127
        echo "        </div>
        <!-- End: Main menu -->

        <!-- Start: Search -->
        <div class=\"col-md-2\">
            ";
        // line 132
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 133
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
            ";
        }
        // line 134
        echo "        
        </div>
        <!-- End: Search -->

        </div>
      </div>
    </nav>
</header>


<!-- Start: Home page message -->
  ";
        // line 145
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()))) {
            // line 146
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "<!--End: Home page message -->


<!-- Start: Highlight region -->
  ";
        // line 158
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 159
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 167
        echo "<!-- End: Highlight region -->


<!-- Start Top Widgets -->
";
        // line 171
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
            // line 172
            echo "  <div class=\"topwidget\">
    <div class=\"container-\">
      <div class=\"row\">

        <!-- Start: Top widget first -->          
        ";
            // line 177
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                // line 178
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 179
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 181
            echo "          
        <!-- End: Top widget first --> 

        <!-- Start: Top widget second -->          
        ";
            // line 185
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                // line 186
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 187
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 189
            echo "          
        <!-- End: Top widget second --> 
        
        <!-- Start: Top widget third -->         
        ";
            // line 193
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                // line 194
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 195
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 197
            echo "          
        <!-- End: Top widget third --> 

      </div>
    </div>
  </div>
";
        }
        // line 204
        echo "<!-- End: Top Widgets -->


<!-- Start: Page title -->
";
        // line 208
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 209
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 214
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 221
        echo "<!-- End: Page title -- >


<!-- Start: Content Layout -->
<div id=\"wrapper\">  
  <div class=\"container\">
    
    <!-- Start: Content top -->
      ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 230
            echo "        <div class=\"row\">
          ";
            // line 231
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 234
        echo "    <!-- End: Content top -->
    
    <!-- Start: Breadcrumb -->
    ";
        // line 237
        if ( !($context["is_front"] ?? null)) {
            // line 238
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 239
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
      </div>
    ";
        }
        // line 242
        echo "    <!-- End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 247
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 248
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 249
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 250
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 254
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 257
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 258
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 259
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 260
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 264
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 267
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 268
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 269
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 270
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 274
        echo "      <!-- End: Right SideBar -->
      
    </div>
    <!--End: Content -->

  </div>
</div>
<!-- End: Content Layout -->


<!-- Start: Address -->
  ";
        // line 285
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "address", array()))) {
            // line 286
            echo "    <div class=\"address-wrap\">
      ";
            // line 287
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "address", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 290
        echo "<!--End: Address -->


<!-- Start: Bottom Widgets-->
";
        // line 294
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array())))) {
            // line 295
            echo "  <div class=\"bottom-widgets\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 300
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                // line 301
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 302
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 304
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 308
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                // line 309
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 310
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 312
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 316
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                // line 317
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 318
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 320
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 324
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                // line 325
                echo "        <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
          ";
                // line 326
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 329
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>
";
        }
        // line 335
        echo "<!-- End: Bottom Widgets-->


<!-- Start: Footer -->
";
        // line 339
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 340
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 345
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 346
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 347
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 350
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 353
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 354
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 355
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 358
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 361
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 362
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 363
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 366
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>
";
        }
        // line 372
        echo "<!--End: Footer -->


<!-- Start: Google map -->
";
        // line 376
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 377
            echo "  <div class=\"google_map\">
    ";
            // line 378
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 381
        echo "<!-- End: Google map -->


<!-- Start: Footer Menu -->
";
        // line 385
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 386
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Footer Menu -->
        <div class=\"col-sm-6\">
          ";
            // line 392
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Footer Menu -->

        <!-- Start: Social media links -->
        ";
            // line 397
            if (($context["show_social_icon"] ?? null)) {
                // line 398
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 400
                if (($context["facebook_url"] ?? null)) {
                    // line 401
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 403
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 404
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 406
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 407
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 409
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 410
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 412
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 413
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 415
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 416
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 418
                echo "            </div>
          </div>
        ";
            }
            // line 421
            echo "        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 427
        echo "<!-- End: Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 436
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 441
        if (($context["show_credit_link"] ?? null)) {
            // line 442
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 446
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/base_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 446,  749 => 442,  747 => 441,  739 => 436,  728 => 427,  720 => 421,  715 => 418,  709 => 416,  706 => 415,  700 => 413,  697 => 412,  691 => 410,  688 => 409,  682 => 407,  679 => 406,  673 => 404,  670 => 403,  664 => 401,  662 => 400,  658 => 398,  656 => 397,  648 => 392,  640 => 386,  638 => 385,  632 => 381,  626 => 378,  623 => 377,  621 => 376,  615 => 372,  607 => 366,  601 => 363,  596 => 362,  594 => 361,  589 => 358,  583 => 355,  578 => 354,  576 => 353,  571 => 350,  565 => 347,  560 => 346,  558 => 345,  551 => 340,  549 => 339,  543 => 335,  535 => 329,  529 => 326,  524 => 325,  522 => 324,  516 => 320,  510 => 318,  505 => 317,  503 => 316,  497 => 312,  491 => 310,  486 => 309,  484 => 308,  478 => 304,  472 => 302,  467 => 301,  465 => 300,  458 => 295,  456 => 294,  450 => 290,  444 => 287,  441 => 286,  439 => 285,  426 => 274,  419 => 270,  415 => 269,  412 => 268,  410 => 267,  405 => 264,  398 => 260,  394 => 259,  391 => 258,  389 => 257,  384 => 254,  377 => 250,  373 => 249,  370 => 248,  368 => 247,  361 => 242,  355 => 239,  352 => 238,  350 => 237,  345 => 234,  339 => 231,  336 => 230,  334 => 229,  324 => 221,  314 => 214,  307 => 209,  305 => 208,  299 => 204,  290 => 197,  284 => 195,  279 => 194,  277 => 193,  271 => 189,  265 => 187,  260 => 186,  258 => 185,  252 => 181,  246 => 179,  241 => 178,  239 => 177,  232 => 172,  230 => 171,  224 => 167,  216 => 162,  211 => 159,  209 => 158,  203 => 154,  195 => 149,  190 => 146,  188 => 145,  175 => 134,  169 => 133,  167 => 132,  160 => 127,  154 => 125,  152 => 124,  145 => 119,  139 => 117,  137 => 116,  119 => 100,  114 => 97,  105 => 95,  101 => 94,  97 => 92,  95 => 91,  90 => 88,  81 => 81,  75 => 79,  73 => 78,  66 => 73,  60 => 71,  58 => 70,  50 => 64,  48 => 63,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/base_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\DrupalProjects\\LawApp\\themes\\base_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
