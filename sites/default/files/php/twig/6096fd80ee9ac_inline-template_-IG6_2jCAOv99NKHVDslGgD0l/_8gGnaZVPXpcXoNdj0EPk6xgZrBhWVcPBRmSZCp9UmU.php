<?php

/* {# inline_template_start #}<div class="post-block">
        <div class="post-image"> {{ field_image }}</div>
        <div class="post-content text-left">
                <div class="post-title"> {{ title }} </div>
                <div class="post-meta"><span class="post-categories">{{ field_post_category }} </span>, <span class="post-created">{{ created }} </span></div>
	 </div>	 
</div> */
class __TwigTemplate_884949df22ec714d3f34eea1b9a9de91cff1b695f40fbd622a0e706b7ddec107 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"post-block\">
        <div class=\"post-image\"> ";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "</div>
        <div class=\"post-content text-left\">
                <div class=\"post-title\"> ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </div>
                <div class=\"post-meta\"><span class=\"post-categories\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_post_category"] ?? null), "html", null, true));
        echo " </span>, <span class=\"post-created\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo " </span></div>
\t </div>\t 
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
        <div class=\"post-image\"> {{ field_image }}</div>
        <div class=\"post-content text-left\">
                <div class=\"post-title\"> {{ title }} </div>
                <div class=\"post-meta\"><span class=\"post-categories\">{{ field_post_category }} </span>, <span class=\"post-created\">{{ created }} </span></div>
\t </div>\t 
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  57 => 4,  52 => 2,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-block\">
        <div class=\"post-image\"> {{ field_image }}</div>
        <div class=\"post-content text-left\">
                <div class=\"post-title\"> {{ title }} </div>
                <div class=\"post-meta\"><span class=\"post-categories\">{{ field_post_category }} </span>, <span class=\"post-created\">{{ created }} </span></div>
\t </div>\t 
</div>", "");
    }
}
