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

/* core/themes/bartik/templates/node.html.twig */
class __TwigTemplate_b4ecb1751ea592fdfca890cb83e3eff72645726f6afc4f1fd23d4d17372cf307 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 70, "if" => 84, "trans" => 94];
        $filters = ["clean_class" => 72];
        $functions = ["attach_library" => 80];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class'],
                ['attach_library']
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
        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "bundle", [])))), 2 => (($this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed((isset($context["view_mode"]) ? $context["view_mode"] : null))))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method")), "html", null, true);
        echo ">
  <header>
    ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_prefix"]) ? $context["title_prefix"] : null)), "html", null, true);
        echo "
    ";
        // line 84
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 85
            echo "      <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
        <a href=\"";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["url"]) ? $context["url"] : null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 89
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_suffix"]) ? $context["title_suffix"] : null)), "html", null, true);
        echo "
    ";
        // line 90
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 91
            echo "      <div class=\"node__meta\">
        ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["author_picture"]) ? $context["author_picture"] : null)), "html", null, true);
            echo "
        <span";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["author_attributes"]) ? $context["author_attributes"] : null)), "html", null, true);
            echo ">
          ";
            // line 94
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 95
            echo "        </span>
        ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["metadata"]) ? $context["metadata"] : null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 99
        echo "  </header>
  <div";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
    ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["content"]) ? $context["content"] : null)), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 101,  122 => 100,  119 => 99,  113 => 96,  110 => 95,  108 => 94,  104 => 93,  100 => 92,  97 => 91,  95 => 90,  90 => 89,  82 => 86,  77 => 85,  75 => 84,  71 => 83,  66 => 81,  62 => 80,  60 => 76,  59 => 75,  58 => 74,  57 => 73,  56 => 72,  55 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/node.html.twig", "D:\\www\\drupalapp.local\\cms\\core\\themes\\bartik\\templates\\node.html.twig");
    }
}
