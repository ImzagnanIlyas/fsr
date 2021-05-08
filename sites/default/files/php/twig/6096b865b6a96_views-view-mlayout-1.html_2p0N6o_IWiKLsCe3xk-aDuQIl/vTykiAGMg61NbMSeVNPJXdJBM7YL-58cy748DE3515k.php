<?php

/* modules/gavias_views_magazine/templates/views-view-mlayout-1.html.twig */
class __TwigTemplate_0219667c31d12e8d45880a68120193c8b3b6ea8231e6a61d26100888c828f11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "set" => 9, "for" => 10);
        $filters = array("raw" => 14, "length" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('raw', 'length'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">";
        }
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "    <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>";
        }
        // line 9
        $context["i"] = 0;
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 12
            if ((($context["i"] ?? null) == 1)) {
                // line 13
                echo "      <div class=\"item-first\">
        <div";
                // line 14
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
      </div>";
            } else {
                // line 17
                if ((($context["i"] ?? null) == 2)) {
                    echo "<div class=\"items-second\">";
                }
                // line 18
                echo "        <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => "item-post"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>";
                // line 19
                if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null)))) {
                    echo "</div>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        if (($context["attributes"] ?? null)) {
            // line 24
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_views_magazine/templates/views-view-mlayout-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  96 => 23,  87 => 19,  81 => 18,  77 => 17,  70 => 14,  67 => 13,  65 => 12,  63 => 11,  59 => 10,  57 => 9,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/gavias_views_magazine/templates/views-view-mlayout-1.html.twig", "C:\\laragon\\www\\fsr\\modules\\gavias_views_magazine\\templates\\views-view-mlayout-1.html.twig");
    }
}
