<?php

/* themes/gavias_edubiz/templates/page/main-no-sidebar.html.twig */
class __TwigTemplate_eead4954608ad8b35a7c1af0929ff85ca38f328311f7b39c9b31e951807d27d9 extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<div class=\"content-main-inner\">
\t<div id=\"page-main-content\" class=\"main-content\">
\t\t<div class=\"main-content-inner\">";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 5
            echo "\t\t\t\t<div class=\"content-top\">";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t\t\t</div>";
        }
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 11
            echo "\t\t\t\t<div class=\"content-main\">";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t</div>";
        }
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 17
            echo "\t\t\t\t<div class=\"content-bottom\">";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t\t\t</div>";
        }
        // line 21
        echo "\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/page/main-no-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 18,  67 => 17,  65 => 16,  60 => 12,  58 => 11,  56 => 10,  51 => 6,  49 => 5,  47 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/page/main-no-sidebar.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\page\\main-no-sidebar.html.twig");
    }
}