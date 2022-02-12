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

/* core/themes/bartik/templates/page.html.twig */
class __TwigTemplate_ba9678193b0f284b3754ed402de0d89101b497526c879631ccd5f99a5f05a233 extends \Twig\Template
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
        // line 53
        echo "<script src=\"https://kit.fontawesome.com/27010df775.js\" crossorigin=\"anonymous\"></script>
<script src=\"/jquery.min.js\"></script>
<script src=\"/slider.js\"></script>
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
        ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
      </div>
    </header>
    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 65)) {
            // line 66
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 72
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 72)) {
            // line 73
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 79
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 88)) {
            // line 89
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 95
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)) {
            // line 96
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 102
        echo "      </div>
    </div>
    ";
        // line 104
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 104) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 104)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 104))) {
            // line 105
            echo "      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
          ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
          ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 113
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 115
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 115) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 115)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 115)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 115))) {
            // line 116
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
            ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
            ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
            ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 123
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 123)) {
            // line 124
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 128
        echo "      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 128,  191 => 125,  188 => 124,  185 => 123,  179 => 120,  175 => 119,  171 => 118,  167 => 117,  164 => 116,  162 => 115,  158 => 113,  151 => 109,  147 => 108,  143 => 107,  139 => 105,  137 => 104,  133 => 102,  126 => 98,  122 => 96,  119 => 95,  112 => 91,  108 => 89,  106 => 88,  100 => 85,  93 => 81,  89 => 79,  82 => 75,  78 => 73,  75 => 72,  68 => 68,  64 => 66,  62 => 65,  56 => 62,  52 => 61,  48 => 60,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/page.html.twig", "/var/www/html/blog/core/themes/bartik/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 65);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
}
