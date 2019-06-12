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

/* {# inline_template_start #}<div class="permission"><span class="title">{{ title }}</span>{% if description or warning %}<div class="description">{% if warning %}<em class="permission-warning">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div> */
class __TwigTemplate_fc50f0eb026949d5ec2f6e19538347b5dc4818928628020c0883289a70ea02d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 1
        echo "<div class=\"permission\"><span class=\"title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "</span>";
        if (((isset($context["description"]) ? $context["description"] : null) || (isset($context["warning"]) ? $context["warning"] : null))) {
            echo "<div class=\"description\">";
            if ((isset($context["warning"]) ? $context["warning"] : null)) {
                echo "<em class=\"permission-warning\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["warning"]) ? $context["warning"] : null)), "html", null, true);
                echo "</em> ";
            }
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["description"]) ? $context["description"] : null)), "html", null, true);
            echo "</div>";
        }
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"permission\"><span class=\"title\">{{ title }}</span>{% if description or warning %}<div class=\"description\">{% if warning %}<em class=\"permission-warning\">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "{# inline_template_start #}<div class=\"permission\"><span class=\"title\">{{ title }}</span>{% if description or warning %}<div class=\"description\">{% if warning %}<em class=\"permission-warning\">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div>", "");
    }
}
