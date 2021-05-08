<?php

/* modules/gavias_view/templates/views-view-gvaonefour.html.twig */
class __TwigTemplate_eaeb91e7b12bf6a4223c4d2937e6c98f6d1d4de7111a32fa528446b083b9b808 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 9, "for" => 11);
        $filters = array("raw" => 17, "length" => 25);
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
        $context["j"] = 0;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 13
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 14
            if ((($context["i"] ?? null) == 1)) {
                echo "<div class=\"big-row row\">";
            }
            // line 15
            if ((($context["i"] ?? null) == 1)) {
                // line 16
                echo "        <div class=\"item index-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] ?? null), "html", null, true));
                echo " first-item col-md-6 col-sm-12 col-xs-12\">
          <div";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
        </div>";
            } else {
                // line 20
                if ((($context["i"] ?? null) == 2)) {
                    echo " <div class=\"small-items col-md-6 col-sm-12 col-xs-12\">";
                }
                // line 21
                if (((($context["i"] ?? null) % 2) == 0)) {
                    echo "<div class=\"row\">";
                }
                // line 22
                echo "            <div class=\"item index-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] ?? null), "html", null, true));
                echo " col-sm-6 col-xs-12\">
              <div";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
            </div>";
                // line 25
                if ((((($context["i"] ?? null) % 2) == 1) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div>";
                }
                // line 26
                if (((($context["i"] ?? null) == 5) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div>";
                }
            }
            // line 28
            if (((($context["i"] ?? null) == 5) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                echo "</div>";
            }
            // line 29
            if ((($context["i"] ?? null) == 5)) {
                $context["i"] = 0;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        if (($context["attributes"] ?? null)) {
            // line 33
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_view/templates/views-view-gvaonefour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  127 => 32,  119 => 29,  115 => 28,  110 => 26,  106 => 25,  100 => 23,  95 => 22,  91 => 21,  87 => 20,  80 => 17,  75 => 16,  73 => 15,  69 => 14,  67 => 13,  65 => 12,  61 => 11,  59 => 10,  57 => 9,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/gavias_view/templates/views-view-gvaonefour.html.twig", "C:\\laragon\\www\\fsr\\modules\\gavias_view\\templates\\views-view-gvaonefour.html.twig");
    }
}
