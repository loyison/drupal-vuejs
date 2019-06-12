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

/* core/themes/classy/templates/views/views-view.html.twig */
class __TwigTemplate_0716f629c82844fc61434c31187a3aac617baad6a9db9509acd34ba0fd2dc3d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 34, "if" => 44];
        $filters = ["clean_class" => 36];
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
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
(isset($context["id"]) ? $context["id"] : null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
(isset($context["id"]) ? $context["id"] : null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
(isset($context["display_id"]) ? $context["display_id"] : null))), 4 => ((        // line 39
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed((isset($context["dom_id"]) ? $context["dom_id"] : null)))) : (""))];
        // line 42
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method")), "html", null, true);
        echo ">
  ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_prefix"]) ? $context["title_prefix"] : null)), "html", null, true);
        echo "
  ";
        // line 44
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 47
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_suffix"]) ? $context["title_suffix"] : null)), "html", null, true);
        echo "
  ";
        // line 48
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 49
            echo "    <div class=\"view-header\">
      ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["header"]) ? $context["header"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 53
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 54
            echo "    <div class=\"view-filters\">
      ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["exposed"]) ? $context["exposed"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 58
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 59
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["attachment_before"]) ? $context["attachment_before"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 65
            echo "    <div class=\"view-content\">
      ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["rows"]) ? $context["rows"] : null)), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 68
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 69
            echo "    <div class=\"view-empty\">
      ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["empty"]) ? $context["empty"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 75
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["pager"]) ? $context["pager"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 77
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 78
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["attachment_after"]) ? $context["attachment_after"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["more"]) ? $context["more"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 85
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 86
            echo "    <div class=\"view-footer\">
      ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["footer"]) ? $context["footer"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 90
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 91
            echo "    <div class=\"feed-icons\">
      ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["feed_icons"]) ? $context["feed_icons"] : null)), "html", null, true);
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
        return "core/themes/classy/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 95,  192 => 92,  189 => 91,  186 => 90,  180 => 87,  177 => 86,  174 => 85,  168 => 83,  165 => 82,  159 => 79,  156 => 78,  153 => 77,  147 => 75,  145 => 74,  142 => 73,  136 => 70,  133 => 69,  131 => 68,  126 => 66,  123 => 65,  121 => 64,  118 => 63,  112 => 60,  109 => 59,  106 => 58,  100 => 55,  97 => 54,  94 => 53,  88 => 50,  85 => 49,  83 => 48,  78 => 47,  72 => 45,  70 => 44,  66 => 43,  61 => 42,  59 => 39,  58 => 38,  57 => 37,  56 => 36,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/views/views-view.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\classy\\templates\\views\\views-view.html.twig");
    }
}
