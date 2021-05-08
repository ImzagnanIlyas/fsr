<?php

/* themes/gavias_edubiz/templates/navigation/menu--main.html.twig */
class __TwigTemplate_096747233728e62df5a6fb3c7708a90694ea76c74cfd5e3c480745859a6abe1b extends Twig_Template
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
        $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 40, "set" => 41);
        $filters = array("join" => 47, "without" => 60, "trim" => 65);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array('join', 'without', 'trim'),
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

        // line 21
        echo "
<div class=\"gva-navigation\">";
        // line 23
        $context["menus"] = $this;
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        // line 83
        echo "</div>

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            $context["menus"] = $this;
            // line 33
            if (($context["items"] ?? null)) {
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "gva_menu gva_menu_main"), "method"), "html", null, true));
                    echo ">";
                } else {
                    // line 38
                    echo "      <ul class=\"menu sub-menu\">";
                }
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    $context["class_mega_menu"] = "";
                    // line 42
                    $context["class_columns"] = "";
                    // line 43
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 44
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 45
$context["item"], "attributes", array()), "gva_layout", array()) == "menu-grid") && (($context["menu_level"] ?? null) == 0))) {
                        // line 46
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        // line 47
                        $context["class_columns"] = twig_join_filter(array(0 => "menu-columns-", 1 => $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout_columns", array())), "");
                    }
                    // line 50
                    $context["classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 52
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 53
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 54
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")), 4 => $this->getAttribute($this->getAttribute(                    // line 55
$context["item"], "attributes", array()), "gva_class", array()), 5 =>                     // line 56
($context["class_mega_menu"] ?? null), 6 =>                     // line 57
($context["class_columns"] ?? null));
                    // line 60
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true));
                    echo ">
        <a href=\"";
                    // line 61
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    // line 62
                    if (($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_icon", array()) != "")) {
                        // line 63
                        echo "            <i class=\"fa";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_icon", array()), "html", null, true));
                        echo "\"></i>";
                    }
                    // line 65
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($context["item"], "title", array())), "html", null, true));
                    // line 66
                    if (($this->getAttribute($context["item"], "below", array()) || (($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && (($context["menu_level"] ?? null) == 0)))) {
                        // line 67
                        echo "            <span class=\"icaret nav-plus fa fa-angle-down\"></span>";
                    }
                    // line 68
                    echo "  
        </a>";
                    // line 70
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 71
                        echo "          <div class=\"sub-menu\">";
                        // line 72
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($context["item"], "gva_block_content", array())), "html", null, true));
                        echo "
          </div>";
                    }
                    // line 75
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 76
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                    }
                    // line 78
                    echo "      </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "    </ul>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 80,  150 => 78,  147 => 76,  145 => 75,  140 => 72,  138 => 71,  136 => 70,  133 => 68,  130 => 67,  128 => 66,  126 => 65,  121 => 63,  119 => 62,  116 => 61,  111 => 60,  109 => 57,  108 => 56,  107 => 55,  106 => 54,  105 => 53,  104 => 52,  103 => 50,  100 => 47,  98 => 46,  96 => 45,  94 => 44,  92 => 43,  90 => 42,  88 => 41,  84 => 40,  81 => 38,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  56 => 31,  50 => 83,  48 => 29,  46 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/navigation/menu--main.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\navigation\\menu--main.html.twig");
    }
}
