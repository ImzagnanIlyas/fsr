<?php

/* themes/gavias_edubiz/templates/views/testimonial/views-view-fields--testimonial-v5.html.twig */
class __TwigTemplate_41c431fd8876c85aa9192a4c39a2a912daba5b2532b3781484a52a0db112d404 extends Twig_Template
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
        $filters = array("trim" => 5, "striptags" => 5, "t" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('trim', 'striptags', 't'),
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
        echo "<article class=\"testimonial-node-v5\">      
   <div class=\"testimonial-content\">
      <div class=\"content\">
         <div class=\"content-inner\">
            <div class=\"video\"><a class=\"popup-video\" href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_video", array()), "content", array()))), "html", null, true));
        echo "\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Play video")));
        echo "</a></div>
            <div class=\"quote\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", array()), "content", array()))), "html", null, true));
        echo "</div>  
            <div class=\"info clearfix\">
               <div class=\"title\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_name", array()), "content", array()), "html", null, true));
        echo "</div>  
               <div class=\"job\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_job", array()), "content", array()), "html", null, true));
        echo "</div>   
            </div> 
         </div>    
      </div>
   </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/views/testimonial/views-view-fields--testimonial-v5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  55 => 6,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/views/testimonial/views-view-fields--testimonial-v5.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\views\\testimonial\\views-view-fields--testimonial-v5.html.twig");
    }
}
