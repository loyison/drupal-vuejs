<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/bartik/templates/page.html.twig */
class __TwigTemplate_afb28e9ae6da1e52583dfe1c9506340bf5a14e36eaf4d31a104416fbb3e3b9b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62];
        $filters = ["t" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 53
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", [])), "html", null, true);
        echo "
        ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", [])), "html", null, true);
        echo "
        ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", [])), "html", null, true);
        echo "
      </div>
    </header>
    ";
        // line 62
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", [])) {
            // line 63
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 69
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", [])) {
            // line 70
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 76
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", [])), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", [])) {
            // line 86
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", [])), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 92
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", [])) {
            // line 93
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", [])), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 99
        echo "      </div>
    </div>
    ";
        // line 101
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", []) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", [])) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", []))) {
            // line 102
            echo "      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", [])), "html", null, true);
            echo "
          ";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", [])), "html", null, true);
            echo "
          ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 110
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 112
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", []) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", [])) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", [])) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", []))) {
            // line 113
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 114
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", [])), "html", null, true);
            echo "
            ";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", [])), "html", null, true);
            echo "
            ";
            // line 116
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", [])), "html", null, true);
            echo "
            ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 120
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", [])) {
            // line 121
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 125
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
        return array (  213 => 125,  207 => 122,  204 => 121,  201 => 120,  195 => 117,  191 => 116,  187 => 115,  183 => 114,  180 => 113,  178 => 112,  174 => 110,  167 => 106,  163 => 105,  159 => 104,  155 => 102,  153 => 101,  149 => 99,  142 => 95,  138 => 93,  135 => 92,  128 => 88,  124 => 86,  122 => 85,  116 => 82,  109 => 78,  105 => 76,  98 => 72,  94 => 70,  91 => 69,  84 => 65,  80 => 63,  78 => 62,  72 => 59,  68 => 58,  64 => 57,  59 => 55,  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/page.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\bartik\\templates\\page.html.twig");
    }
}
