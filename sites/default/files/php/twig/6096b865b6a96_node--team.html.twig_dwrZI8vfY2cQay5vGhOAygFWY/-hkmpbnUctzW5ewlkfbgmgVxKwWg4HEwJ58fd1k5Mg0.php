<?php

/* themes/gavias_edubiz/templates/node/node--team.html.twig */
class __TwigTemplate_7a2e355100caa039a5365858f9e006784290b36b8962ddd63a8e35b06e26b8c8 extends Twig_Template
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
        $tags = array("if" => 2, "for" => 12, "set" => 24);
        $filters = array("e" => 5, "t" => 5, "clean_class" => 27, "without" => 66, "render" => 69);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('e', 't', 'clean_class', 'without', 'render'),
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
        echo "<!-- Start Display article for teaser page -->";
        // line 2
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
  <div class=\"team-block\">
    <div class=\"team-image\">";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "
      <a class=\"team-email\" href=\"mailto:";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_email", array()), "value", array())));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Email")));
            echo "</a>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</a></div>   
      <div class=\"team-job\">";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
      <div class=\"team-body\">";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
            echo "</div>
      <div class=\"socials\">";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
            <i class=\"";
                // line 14
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></i>
          </a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo " 
      </div>
    </div>
  </div>  
<!-- End Display article for teaser page -->";
        } else {
            // line 22
            echo "<!-- Start Display article for detail page -->";
            // line 24
            $context["classes"] = array(0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(            // line 27
($context["node"] ?? null), "bundle", array()))), 3 => (($this->getAttribute(            // line 28
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(            // line 29
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(            // line 30
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((            // line 31
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 7 => "clearfix");
            // line 35
            echo "
<article";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-single-page\">
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-3 col-xs-12\">
        <div class=\"team-image\">";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "</div>
        <div class=\"team-contact margin-top-10\">
            <div class=\"heading\">";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_contact", array()), "html", null, true));
            echo "</div>
            <div class=\"socials\">";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
                  <i class=\"";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></i>
                </a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo " 
            </div>
          </div>
      </div>
      <div class=\"col-md-9 col-sm-9 col-xs-12\">
        <div class=\"team-name clearfix\">
          <div class=\"name\">";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</div>
          <div class=\"job\">";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
        </div> 
        <div class=\"team-description\">";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_description", array()), "html", null, true));
            echo "</div>
        <div class=\"team-info\">
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_education", array()), "html", null, true));
            echo "</div>
          </div>
        </div>
        <div";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true));
            echo "
        </div>";
            // line 69
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_team_quote", array()))) {
                // line 70
                echo "          <div class=\"team-quote\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_quote", array()), "html", null, true));
                echo " </div>";
            }
            // line 71
            echo "  
        
      </div>";
            // line 75
            if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
                // line 76
                echo "      <div id=\"node-single-comment\">";
                // line 77
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
                echo "
      </div>";
            }
            // line 79
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->";
        }
        // line 86
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 86,  209 => 79,  204 => 77,  202 => 76,  200 => 75,  196 => 71,  191 => 70,  189 => 69,  185 => 66,  182 => 65,  176 => 62,  172 => 61,  166 => 58,  161 => 56,  157 => 55,  149 => 49,  141 => 47,  136 => 46,  132 => 45,  128 => 43,  124 => 42,  119 => 40,  112 => 36,  109 => 35,  107 => 31,  106 => 30,  105 => 29,  104 => 28,  103 => 27,  102 => 24,  100 => 22,  93 => 16,  85 => 14,  80 => 13,  76 => 12,  72 => 10,  68 => 9,  62 => 8,  54 => 5,  50 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/node/node--team.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\node\\node--team.html.twig");
    }
}
