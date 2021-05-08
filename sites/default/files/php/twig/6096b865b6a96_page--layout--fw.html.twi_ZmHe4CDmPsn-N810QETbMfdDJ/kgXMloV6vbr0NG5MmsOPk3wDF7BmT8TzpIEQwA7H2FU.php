<?php

/* themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_9508460fad9607fb918108dbd13719484b06ab522453e03eb204e34be67200f4 extends Twig_Template
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
        $tags = array("include" => 7, "if" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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

        // line 7
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/message.html.twig"), "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"body-page gva-body-page\">";
        // line 10
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig", 10)->display($context);
        // line 11
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig", 11)->display($context);
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", array())) {
            // line 14
            echo "\t\t<div class=\"breadcrumbs\">";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t</div>";
        }
        // line 18
        echo "
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", array())) {
            // line 23
            echo "\t\t\t<div class=\"slideshow_content area\">";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t</div>";
        }
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 29
            echo "\t\t\t<div class=\"help show\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t\t\t\t\t<div class=\"content-inner\">";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>";
        }
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", array())) {
            // line 40
            echo "\t\t\t<div class=\"fw-before-content area\">";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t</div>";
        }
        // line 44
        echo "\t\t
\t\t<div class=\"clearfix\"></div>";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
            // line 47
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>";
        }
        // line 57
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container-full\">";
        // line 62
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig", 62)->display($context);
        // line 63
        echo "\t\t\t</div>
\t\t</div>";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 67
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>";
        }
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 75
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>";
        }
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", array())) {
            // line 85
            echo "\t\t\t<div class=\"fw-before-content area\">";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t</div>";
        }
        // line 89
        echo "
\t</div>

</div>";
        // line 94
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig", 94)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 94,  160 => 89,  155 => 86,  153 => 85,  151 => 84,  144 => 78,  140 => 75,  138 => 74,  132 => 69,  129 => 67,  127 => 66,  124 => 63,  122 => 62,  116 => 57,  108 => 51,  103 => 47,  101 => 46,  98 => 44,  93 => 41,  91 => 40,  89 => 39,  82 => 33,  77 => 29,  75 => 28,  70 => 24,  68 => 23,  66 => 22,  61 => 18,  56 => 15,  54 => 14,  52 => 13,  50 => 11,  48 => 10,  45 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/page/page-layout/page--layout--fw.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\page\\page-layout\\page--layout--fw.html.twig");
    }
}
