<?php

/* {# inline_template_start #}<div class="gallery-post">
   <div class="post-inner">
	  <div class="image">{{ field_gallery_image }}<a class="gva-pajax" href="{{ path }} "><i class="fa fa-arrows-alt"></i></a></div>
	  <div class="post-meta-wrap small">
		 <div class="post-title">{{ title}}</div>
	  </div>
   </div>
</div>
 */
class __TwigTemplate_ec6b0e34834b8189bae5d9fb71b8566da8e111affeac02ab34b9534282cffd49 extends Twig_Template
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
        echo "<div class=\"gallery-post\">
   <div class=\"post-inner\">
\t  <div class=\"image\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_gallery_image"] ?? null), "html", null, true));
        echo "<a class=\"gva-pajax\" href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo " \"><i class=\"fa fa-arrows-alt\"></i></a></div>
\t  <div class=\"post-meta-wrap small\">
\t\t <div class=\"post-title\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</div>
\t  </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"gallery-post\">
   <div class=\"post-inner\">
\t  <div class=\"image\">{{ field_gallery_image }}<a class=\"gva-pajax\" href=\"{{ path }} \"><i class=\"fa fa-arrows-alt\"></i></a></div>
\t  <div class=\"post-meta-wrap small\">
\t\t <div class=\"post-title\">{{ title}}</div>
\t  </div>
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
        return array (  62 => 5,  55 => 3,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"gallery-post\">
   <div class=\"post-inner\">
\t  <div class=\"image\">{{ field_gallery_image }}<a class=\"gva-pajax\" href=\"{{ path }} \"><i class=\"fa fa-arrows-alt\"></i></a></div>
\t  <div class=\"post-meta-wrap small\">
\t\t <div class=\"post-title\">{{ title}}</div>
\t  </div>
   </div>
</div>
", "");
    }
}
