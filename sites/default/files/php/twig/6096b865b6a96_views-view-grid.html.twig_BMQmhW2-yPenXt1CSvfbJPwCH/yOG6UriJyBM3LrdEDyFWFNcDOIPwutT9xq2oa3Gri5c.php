<?php

/* themes/gavias_edubiz/templates/views/views-view-grid.html.twig */
class __TwigTemplate_69fcc666f40d52de389376c5b889bcb1d15545f19375c98d426c92520579abd3 extends Twig_Template
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
        $tags = array("set" => 30, "if" => 39, "for" => 74);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array(),
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

        // line 30
        $context["classes"] = array(0 => "views-view-grid", 1 => $this->getAttribute(        // line 32
($context["gva_masonry"] ?? null), "class", array()), 2 => $this->getAttribute(        // line 33
($context["options"] ?? null), "alignment", array()), 3 => ("cols-" . $this->getAttribute(        // line 34
($context["options"] ?? null), "columns", array())), 4 => "clearfix");
        // line 39
        if (($this->getAttribute(($context["options"] ?? null), "columns", array()) == "1")) {
            // line 40
            $context["xclass"] = array(0 => "col-lg-12 col-md-12 col-sm-12 col-xs-12");
        } elseif (($this->getAttribute(        // line 41
($context["options"] ?? null), "columns", array()) == "2")) {
            // line 42
            $context["xclass"] = array(0 => "col-lg-6 col-md-6 col-sm-6 col-xs-12");
        } elseif (($this->getAttribute(        // line 43
($context["options"] ?? null), "columns", array()) == "3")) {
            // line 44
            $context["xclass"] = array(0 => "col-lg-4 col-md-4 col-sm-4 col-xs-12");
        } elseif (($this->getAttribute(        // line 45
($context["options"] ?? null), "columns", array()) == "4")) {
            // line 46
            $context["xclass"] = array(0 => "col-lg-3 col-md-3 col-sm-6 col-xs-12");
        } elseif (($this->getAttribute(        // line 47
($context["options"] ?? null), "columns", array()) == "6")) {
            // line 48
            $context["xclass"] = array(0 => "col-lg-2 col-md-2 col-sm-6 col-xs-6");
        } else {
            // line 50
            $context["xclass"] = array(0 => "col-lg-4 col-md-4 col-sm-4 col-xs-12");
        }
        // line 53
        if ($this->getAttribute(($context["options"] ?? null), "row_class_default", array())) {
            // line 55
            $context["row_classes"] = array(0 => "views-row row", 1 => ((($this->getAttribute(            // line 57
($context["options"] ?? null), "alignment", array()) == "horizontal")) ? ("clearfix") : ("")));
        }
        // line 61
        if ($this->getAttribute(($context["options"] ?? null), "col_class_default", array())) {
            // line 63
            $context["col_classes"] = array(0 => "views-col", 1 => ((($this->getAttribute(            // line 65
($context["options"] ?? null), "alignment", array()) == "vertical")) ? ("clearfix") : ("")));
        }
        // line 69
        if (($context["title"] ?? null)) {
            // line 70
            echo "  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>";
        }
        // line 72
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 73
        if (($this->getAttribute(($context["options"] ?? null), "alignment", array()) == "horizontal")) {
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 76
                if (($this->getAttribute(($context["gva_masonry"] ?? null), "class", array()) == "")) {
                    // line 77
                    echo "        <div";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", array())) ? (("row-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true));
                    echo ">";
                }
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 81
                    echo "          <div";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", array())) ? (("col-" . $this->getAttribute($context["loop"], "index", array()))) : ("")), 2 => ($context["xclass"] ?? null), 3 => $this->getAttribute(($context["gva_masonry"] ?? null), "class_item", array())), "method"), "html", null, true));
                    echo ">";
                    // line 82
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                    echo "
          </div>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                if (($this->getAttribute(($context["gva_masonry"] ?? null), "class", array()) == "")) {
                    // line 87
                    echo "        </div>";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 93
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", array())) ? (("col-" . $this->getAttribute($context["loop"], "index", array()))) : ("")), 2 => ($context["xclass"] ?? null)), "method"), "html", null, true));
                echo ">";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 95
                    echo "          <div";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", array())) ? (("row-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true));
                    echo ">";
                    // line 96
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                    echo "
          </div>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "      </div>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 102
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/views/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 102,  234 => 99,  218 => 96,  214 => 95,  197 => 94,  193 => 93,  176 => 92,  160 => 87,  158 => 86,  142 => 82,  138 => 81,  121 => 80,  116 => 77,  114 => 76,  97 => 74,  95 => 73,  91 => 72,  86 => 70,  84 => 69,  81 => 65,  80 => 63,  78 => 61,  75 => 57,  74 => 55,  72 => 53,  69 => 50,  66 => 48,  64 => 47,  62 => 46,  60 => 45,  58 => 44,  56 => 43,  54 => 42,  52 => 41,  50 => 40,  48 => 39,  46 => 34,  45 => 33,  44 => 32,  43 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/views/views-view-grid.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\views\\views-view-grid.html.twig");
    }
}
