<?php

/* {# inline_template_start #}<div class="post-slider post-block">
   <div class="post-inner">
		<div class="image">{{ field_image }}</div>
		<div class="post-meta-wrap">
			<div class="post-categories">{{ field_post_category }}</div>
		 	<div class="post-title">{{ title }}</div>
		</div>
    </div>
</div>
 */
class __TwigTemplate_024c49a804a6dacc0a458a660cd2c7ffbe28d7a6671fbd16f2d62bb2bda304bc extends Twig_Template
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
        echo "<div class=\"post-slider post-block\">
   <div class=\"post-inner\">
\t\t<div class=\"image\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "</div>
\t\t<div class=\"post-meta-wrap\">
\t\t\t<div class=\"post-categories\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_post_category"] ?? null), "html", null, true));
        echo "</div>
\t\t \t<div class=\"post-title\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</div>
\t\t</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-slider post-block\">
   <div class=\"post-inner\">
\t\t<div class=\"image\">{{ field_image }}</div>
\t\t<div class=\"post-meta-wrap\">
\t\t\t<div class=\"post-categories\">{{ field_post_category }}</div>
\t\t \t<div class=\"post-title\">{{ title }}</div>
\t\t</div>
    </div>
</div>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  61 => 5,  56 => 3,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-slider post-block\">
   <div class=\"post-inner\">
\t\t<div class=\"image\">{{ field_image }}</div>
\t\t<div class=\"post-meta-wrap\">
\t\t\t<div class=\"post-categories\">{{ field_post_category }}</div>
\t\t \t<div class=\"post-title\">{{ title }}</div>
\t\t</div>
    </div>
</div>
", "");
    }
}
