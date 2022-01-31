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

/* themes/medicare_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_cb626ab43888b3b5b6912a0ceb02038d19e11191614676d8981ac3a3c6a7922f extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!-- Start: Top Bar -->

<div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-md-6\">

        ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 69)) {
            // line 70
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "call", [], "any", false, false, true, 73)) {
            // line 74
            echo "          <i class=\"fa fa-phone\"></i>
          ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "call", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "
      </div>
      
      ";
        // line 80
        if (($context["show_social_icon"] ?? null)) {
            // line 81
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            Follow us 
            ";
            // line 84
            if (($context["facebook_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 85, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 87
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 88
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 88, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 90
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 91
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 91, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 93
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 94
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 94, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 96
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 97
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 97, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 99
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 100
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 100, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 102
            echo "          </p>
        </div>
      ";
        }
        // line 105
        echo "     
    </div>
  </div>
</div>

<!-- End: Top Bar -->


<!-- Start: Header -->

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>

        ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 125)) {
            // line 126
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 128
        echo "
      </div>

      ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 131) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 131))) {
            // line 132
            echo "        <div class=\"col-md-9\">

          ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 134)) {
                // line 135
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 137
            echo "
          ";
            // line 138
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 138)) {
                // line 139
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 141
            echo "          
        </div>
      ";
        }
        // line 144
        echo "
    </div>
  </div>
</div>

<!-- End: Header -->


<!-- Start: Slides -->

";
        // line 154
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 155
            echo "  
  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 160
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 160, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "      </ul>
    </div>
  </div>

";
        }
        // line 167
        echo "
<!-- End: Slides -->


<!-- Start: Clients -->

";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 173)) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 177)) {
                // line 178
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 179
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 182
            echo "
    <div class=\"container\">
      ";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "
    </div>

  </div>

";
        }
        // line 190
        echo "
<!--End: Clients -->


<!--Start: Top message -->

";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 196)) {
            // line 197
            echo "
  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 205
        echo "
<!--End: Top message -->


<!-- Start: Top widget -->

";
        // line 211
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 211) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 211)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 211))) {
            // line 212
            echo "  
  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 216
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 216)) {
                // line 217
                echo "        <div class=\"custom-block-title\">
          ";
                // line 218
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 221
            echo "
      <div class=\"row topwidget-list clearfix\">
      
        ";
            // line 224
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 224)) {
                // line 225
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 225, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 227
            echo "       
        ";
            // line 228
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 228)) {
                // line 229
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 229, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 231
            echo "               
        ";
            // line 232
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 232)) {
                // line 233
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 233, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 235
            echo "
      </div>

    </div>
  </div>

";
        }
        // line 242
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 248)) {
            // line 249
            echo "
  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 252
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 257
        echo "
<!--End: Highlighted -->


<!--Start: Title -->

";
        // line 263
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 263) &&  !($context["is_front"] ?? null))) {
            // line 264
            echo "
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 268
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 274
        echo "
<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 284
        if ( !($context["is_front"] ?? null)) {
            // line 285
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 286
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 289
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left sidebar -->
        ";
        // line 295
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 295)) {
            // line 296
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 296, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 298
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 298), 298, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 302
        echo "        <!-- End Left sidebar -->

        <!--- Start Content -->
        ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 305)) {
            // line 306
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 306, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 308
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 312
        echo "        <!-- End: Content -->

        <!-- Start: Right sidebar -->
        ";
        // line 315
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 315)) {
            // line 316
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 316, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 318
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 322
        echo "        <!-- End: Right sidebar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 335
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 335) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 335)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 335))) {
            // line 336
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 340
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 340)) {
                // line 341
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 342
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 345
            echo "
      <div class=\"row features-list\">

        ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 348)) {
                // line 349
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 349, $this->source), "html", null, true);
                echo ">
            ";
                // line 350
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 350), 350, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 353
            echo "
        ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 354)) {
                // line 355
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 355, $this->source), "html", null, true);
                echo ">
            ";
                // line 356
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 359
            echo "
        ";
            // line 360
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 360)) {
                // line 361
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 361, $this->source), "html", null, true);
                echo ">
            ";
                // line 362
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 362), 362, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 365
            echo "
      </div>

    </div>
  </div>

";
        }
        // line 372
        echo "
<!--End: Features -->


<!-- Start: Updates widgets -->

";
        // line 378
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 378) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 378)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 378))) {
            // line 379
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 383
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 383)) {
                // line 384
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 385
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 388
            echo "
      <div class=\"row updates-list\">
        
        ";
            // line 391
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 391)) {
                // line 392
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 392, $this->source), "html", null, true);
                echo ">
            ";
                // line 393
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 396
            echo "
        ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 397)) {
                // line 398
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 398, $this->source), "html", null, true);
                echo ">
            ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 402
            echo "        
        ";
            // line 403
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 403)) {
                // line 404
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 404, $this->source), "html", null, true);
                echo ">
            ";
                // line 405
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 408
            echo "         
        ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 409)) {
                // line 410
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 410, $this->source), "html", null, true);
                echo ">
            ";
                // line 411
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 414
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 420
        echo "
<!--End: Updates widgets -->


<!-- Start: Middle widgets -->

";
        // line 426
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 426) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 426)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 426)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 426))) {
            // line 427
            echo "
  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 431
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 431)) {
                // line 432
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 433
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 433), 433, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 436
            echo "
      <div class=\"row midwidget-list\">
         
        ";
            // line 439
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 439)) {
                // line 440
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 440, $this->source), "html", null, true);
                echo ">
            ";
                // line 441
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 441), 441, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 444
            echo "
        ";
            // line 445
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 445)) {
                // line 446
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 446, $this->source), "html", null, true);
                echo ">
            ";
                // line 447
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 447), 447, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 450
            echo "        
        ";
            // line 451
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 451)) {
                // line 452
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 452, $this->source), "html", null, true);
                echo ">
            ";
                // line 453
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 453), 453, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 456
            echo "
        ";
            // line 457
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 457)) {
                // line 458
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 458, $this->source), "html", null, true);
                echo ">
            ";
                // line 459
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 459), 459, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 462
            echo "
      </div>

    </div>
  </div>

";
        }
        // line 469
        echo "
<!--End: Middle widgets -->


<!-- Start: Bottom widgets -->

";
        // line 475
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 475) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 475)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 475)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 475))) {
            // line 476
            echo "
  <div class=\"btmwidget\" id=\"btmwidget\">    
    <div class=\"container\">

      ";
            // line 480
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 480)) {
                // line 481
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 482
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 482), 482, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 485
            echo "
      <div class=\"row btmwidget-list\">
        
        ";
            // line 488
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 488)) {
                // line 489
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 489, $this->source), "html", null, true);
                echo ">
            ";
                // line 490
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 490), 490, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 493
            echo "
        ";
            // line 494
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 494)) {
                // line 495
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 495, $this->source), "html", null, true);
                echo ">
            ";
                // line 496
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 496), 496, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 499
            echo "        
        ";
            // line 500
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 500)) {
                // line 501
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 501, $this->source), "html", null, true);
                echo ">
            ";
                // line 502
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 502), 502, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 505
            echo "
        ";
            // line 506
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 506)) {
                // line 507
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 507, $this->source), "html", null, true);
                echo ">
            ";
                // line 508
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 508), 508, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 511
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 517
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 523
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 523) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 523)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 523))) {
            // line 524
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 528
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 528)) {
                // line 529
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 530
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 530), 530, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 533
            echo "
      <div class=\"row footer-list\">

        ";
            // line 536
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 536)) {
                // line 537
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 537, $this->source), "html", null, true);
                echo ">
            ";
                // line 538
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 538), 538, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 541
            echo "
        ";
            // line 542
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 542)) {
                // line 543
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 543, $this->source), "html", null, true);
                echo ">
            ";
                // line 544
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 544), 544, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 547
            echo "
        ";
            // line 548
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 548)) {
                // line 549
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 549, $this->source), "html", null, true);
                echo ">
            ";
                // line 550
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 550), 550, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 553
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 559
        echo "
<!--End: Footer widgets -->


<!-- Start: Copyright -->

<div class=\"copyright\">
  <div class=\"container\">

    <span>Copyright © ";
        // line 568
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 569
        if (($context["show_credit_link"] ?? null)) {
            // line 570
            echo "      <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 572
        echo "
  </div>
</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/medicare_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1022 => 572,  1018 => 570,  1016 => 569,  1012 => 568,  1001 => 559,  993 => 553,  987 => 550,  982 => 549,  980 => 548,  977 => 547,  971 => 544,  966 => 543,  964 => 542,  961 => 541,  955 => 538,  950 => 537,  948 => 536,  943 => 533,  937 => 530,  934 => 529,  932 => 528,  926 => 524,  924 => 523,  916 => 517,  908 => 511,  902 => 508,  897 => 507,  895 => 506,  892 => 505,  886 => 502,  881 => 501,  879 => 500,  876 => 499,  870 => 496,  865 => 495,  863 => 494,  860 => 493,  854 => 490,  849 => 489,  847 => 488,  842 => 485,  836 => 482,  833 => 481,  831 => 480,  825 => 476,  823 => 475,  815 => 469,  806 => 462,  800 => 459,  795 => 458,  793 => 457,  790 => 456,  784 => 453,  779 => 452,  777 => 451,  774 => 450,  768 => 447,  763 => 446,  761 => 445,  758 => 444,  752 => 441,  747 => 440,  745 => 439,  740 => 436,  734 => 433,  731 => 432,  729 => 431,  723 => 427,  721 => 426,  713 => 420,  705 => 414,  699 => 411,  694 => 410,  692 => 409,  689 => 408,  683 => 405,  678 => 404,  676 => 403,  673 => 402,  667 => 399,  662 => 398,  660 => 397,  657 => 396,  651 => 393,  646 => 392,  644 => 391,  639 => 388,  633 => 385,  630 => 384,  628 => 383,  622 => 379,  620 => 378,  612 => 372,  603 => 365,  597 => 362,  592 => 361,  590 => 360,  587 => 359,  581 => 356,  576 => 355,  574 => 354,  571 => 353,  565 => 350,  560 => 349,  558 => 348,  553 => 345,  547 => 342,  544 => 341,  542 => 340,  536 => 336,  534 => 335,  519 => 322,  512 => 318,  506 => 316,  504 => 315,  499 => 312,  492 => 308,  486 => 306,  484 => 305,  479 => 302,  472 => 298,  466 => 296,  464 => 295,  456 => 289,  450 => 286,  447 => 285,  445 => 284,  433 => 274,  424 => 268,  418 => 264,  416 => 263,  408 => 257,  400 => 252,  395 => 249,  393 => 248,  385 => 242,  376 => 235,  368 => 233,  366 => 232,  363 => 231,  355 => 229,  353 => 228,  350 => 227,  342 => 225,  340 => 224,  335 => 221,  329 => 218,  326 => 217,  324 => 216,  318 => 212,  316 => 211,  308 => 205,  300 => 200,  295 => 197,  293 => 196,  285 => 190,  276 => 184,  272 => 182,  266 => 179,  263 => 178,  261 => 177,  254 => 173,  246 => 167,  239 => 162,  230 => 160,  226 => 159,  220 => 155,  218 => 154,  206 => 144,  201 => 141,  195 => 139,  193 => 138,  190 => 137,  184 => 135,  182 => 134,  178 => 132,  176 => 131,  171 => 128,  165 => 126,  163 => 125,  141 => 105,  136 => 102,  130 => 100,  127 => 99,  121 => 97,  118 => 96,  112 => 94,  109 => 93,  103 => 91,  100 => 90,  94 => 88,  91 => 87,  85 => 85,  83 => 84,  78 => 81,  76 => 80,  71 => 77,  66 => 75,  63 => 74,  61 => 73,  58 => 72,  52 => 70,  50 => 69,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/medicare_zymphonies_theme/templates/layout/page.html.twig", "/home/weightl1/nutridiction.co.in/themes/medicare_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 69, "for" => 159);
        static $filters = array("escape" => 70, "raw" => 160, "date" => 568);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
}
