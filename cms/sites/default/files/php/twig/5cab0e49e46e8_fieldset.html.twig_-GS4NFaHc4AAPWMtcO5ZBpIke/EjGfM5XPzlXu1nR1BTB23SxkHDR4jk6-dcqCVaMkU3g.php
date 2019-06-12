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

/* core/themes/classy/templates/form/fieldset.html.twig */
class __TwigTemplate_1a5659743076ce15960b9d828c8d00239aa10aa3891fb39813182bb6667222c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 24, "if" => 44];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
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
        // line 24
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper"];
        // line 31
        echo "<fieldset";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method")), "html", null, true);
        echo ">
  ";
        // line 33
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 35
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((        // line 36
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : (""))];
        // line 39
        echo "  ";
        // line 40
        echo "  <legend";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes", [])), "html", null, true);
        echo ">
    <span";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute((isset($context["legend_span"]) ? $context["legend_span"] : null), "attributes", []), "addClass", [0 => (isset($context["legend_span_classes"]) ? $context["legend_span_classes"] : null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title", [])), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 44
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 45
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["errors"]) ? $context["errors"] : null)), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 49
        echo "    ";
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 50
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["prefix"]) ? $context["prefix"] : null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 52
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["children"]) ? $context["children"] : null)), "html", null, true);
        echo "
    ";
        // line 53
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 54
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["suffix"]) ? $context["suffix"] : null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 56
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", [])) {
            // line 57
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", []), "addClass", [0 => "description"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 59
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  117 => 57,  114 => 56,  108 => 54,  106 => 53,  101 => 52,  95 => 50,  92 => 49,  86 => 46,  83 => 45,  81 => 44,  73 => 41,  68 => 40,  66 => 39,  64 => 36,  63 => 35,  62 => 33,  57 => 31,  55 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/form/fieldset.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\classy\\templates\\form\\fieldset.html.twig");
    }
}
