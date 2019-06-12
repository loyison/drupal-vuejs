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

/* core/themes/classy/templates/form/form-element.html.twig */
class __TwigTemplate_49947b7577486ef507a1baa659c16c6765c89dfb870397f15c75450d4d6ce8c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 48, "if" => 67];
        $filters = ["clean_class" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class'],
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
        // line 48
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
(isset($context["type"]) ? $context["type"] : null)))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
(isset($context["type"]) ? $context["type"] : null)))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
(isset($context["name"]) ? $context["name"] : null)))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
(isset($context["name"]) ? $context["name"] : null)))), 6 => ((!twig_in_filter(        // line 55
(isset($context["title_display"]) ? $context["title_display"] : null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 56
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 57
(isset($context["errors"]) ? $context["errors"] : null)) ? ("form-item--error") : (""))];
        // line 61
        $context["description_classes"] = [0 => "description", 1 => (((        // line 63
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 66
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method")), "html", null, true);
        echo ">
  ";
        // line 67
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), [0 => "before", 1 => "invisible"])) {
            // line 68
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 70
        echo "  ";
        if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
            // line 71
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["prefix"]) ? $context["prefix"] : null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 73
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", []))) {
            // line 74
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", [])), "html", null, true);
            echo ">
      ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 78
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["children"]) ? $context["children"] : null)), "html", null, true);
        echo "
  ";
        // line 79
        if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
            // line 80
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["suffix"]) ? $context["suffix"] : null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 82
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 85
        echo "  ";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 86
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["errors"]) ? $context["errors"] : null)), "html", null, true);
            echo "</strong>
    </div>
  ";
        }
        // line 90
        echo "  ";
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), [0 => "after", 1 => "invisible"]) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", []))) {
            // line 91
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", []), "addClass", [0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)], "method")), "html", null, true);
            echo ">
      ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 95,  145 => 92,  140 => 91,  137 => 90,  131 => 87,  128 => 86,  125 => 85,  119 => 83,  116 => 82,  110 => 80,  108 => 79,  103 => 78,  97 => 75,  92 => 74,  89 => 73,  83 => 71,  80 => 70,  74 => 68,  72 => 67,  67 => 66,  65 => 63,  64 => 61,  62 => 57,  61 => 56,  60 => 55,  59 => 54,  58 => 53,  57 => 52,  56 => 51,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/form/form-element.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\classy\\templates\\form\\form-element.html.twig");
    }
}
