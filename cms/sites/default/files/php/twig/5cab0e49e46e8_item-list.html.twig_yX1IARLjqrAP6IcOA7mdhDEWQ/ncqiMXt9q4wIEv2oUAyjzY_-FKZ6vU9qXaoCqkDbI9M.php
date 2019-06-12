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

/* core/themes/classy/templates/dataset/item-list.html.twig */
class __TwigTemplate_a7987a6794e8c4741cd618ef6109e71e8835a1a8b716ca870bbbf2759b2f0444 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 22, "set" => 23, "for" => 33];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "list_style", [])) {
            // line 23
            $context["wrapper_attributes"] = $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", [0 => ("item-list--" . $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "list_style", [])))], "method");
            // line 24
            $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "list_style", [])))], "method");
        }
        // line 26
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 27
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", [0 => "item-list"], "method")), "html", null, true);
            echo ">";
            // line 28
            if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                // line 29
                echo "<h3>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
                echo "</h3>";
            }
            // line 31
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "<";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["list_type"]) ? $context["list_type"] : null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["attributes"]) ? $context["attributes"] : null)), "html", null, true);
                echo ">";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "<li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "value", [])), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["list_type"]) ? $context["list_type"] : null)), "html", null, true);
                echo ">";
            } else {
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["empty"]) ? $context["empty"] : null)), "html", null, true);
            }
            // line 40
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/dataset/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  101 => 38,  96 => 36,  86 => 34,  82 => 33,  77 => 32,  75 => 31,  70 => 29,  68 => 28,  64 => 27,  62 => 26,  59 => 24,  57 => 23,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/dataset/item-list.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\classy\\templates\\dataset\\item-list.html.twig");
    }
}
