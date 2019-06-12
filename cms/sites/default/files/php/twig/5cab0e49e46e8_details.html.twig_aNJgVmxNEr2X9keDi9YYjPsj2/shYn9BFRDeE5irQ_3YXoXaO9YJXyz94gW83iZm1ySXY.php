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

/* core/themes/seven/templates/details.html.twig */
class __TwigTemplate_8f9d47dc1a40e90d1c7fd8946856b39182eda0b488f9eec7b0679c03b9ad4a94 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 23, "set" => 25];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
        // line 22
        echo "<details";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => "seven-details"], "method")), "html", null, true);
        echo ">";
        // line 23
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            $context["summary_classes"] = [0 => "seven-details__summary", 1 => ((            // line 27
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((            // line 28
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : (""))];
            // line 31
            echo "    <summary";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "addClass", [0 => (isset($context["summary_classes"]) ? $context["summary_classes"] : null)], "method")), "html", null, true);
            echo ">";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            // line 33
            echo "</summary>";
        }
        // line 35
        echo "<div class=\"seven-details__wrapper details-wrapper\">
    ";
        // line 36
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 37
            echo "      <div class=\"form-item form-item--error-message\">
        <strong>";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["errors"]) ? $context["errors"] : null)), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 41
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 42
            echo "<div class=\"seven-details__description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["description"]) ? $context["description"] : null)), "html", null, true);
            echo "</div>";
        }
        // line 44
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["children"]) ? $context["children"] : null)), "html", null, true);
        }
        // line 47
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
        }
        // line 50
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  102 => 48,  100 => 47,  97 => 45,  95 => 44,  90 => 42,  88 => 41,  82 => 38,  79 => 37,  77 => 36,  74 => 35,  71 => 33,  69 => 32,  65 => 31,  63 => 28,  62 => 27,  61 => 25,  59 => 23,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/seven/templates/details.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\seven\\templates\\details.html.twig");
    }
}
