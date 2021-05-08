<?php

/* {# inline_template_start #}<div class="post-block">
     <div class="post-image"> {{ field_image }}</div>
     <div class="post-content">     
           <div class="content-inner">
                 <div class="post-meta"><span class="post-categories">{{ field_post_category }} </span>&nbsp;|&nbsp;<span class="post-created">{{ created }} </span></div>
                 <div class="post-title"> {{ title }} </div>
                 <div class="post-body">{{body}}</div>
           </div>
      </div>	 
</div> */
class __TwigTemplate_f1948c7a785f697873b3fbfc4a375ad2f10bbebfac118ed56dd5df3df3ecfbee extends Twig_Template
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
     <div class=\"post-content\">     
           <div class=\"content-inner\">
                 <div class=\"post-meta\"><span class=\"post-categories\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_post_category"] ?? null), "html", null, true));
        echo " </span>&nbsp;|&nbsp;<span class=\"post-created\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo " </span></div>
                 <div class=\"post-title\"> ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </div>
                 <div class=\"post-body\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</div>
           </div>
      </div>\t 
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
     <div class=\"post-image\"> {{ field_image }}</div>
     <div class=\"post-content\">     
           <div class=\"content-inner\">
                 <div class=\"post-meta\"><span class=\"post-categories\">{{ field_post_category }} </span>&nbsp;|&nbsp;<span class=\"post-created\">{{ created }} </span></div>
                 <div class=\"post-title\"> {{ title }} </div>
                 <div class=\"post-body\">{{body}}</div>
           </div>
      </div>\t 
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  67 => 6,  61 => 5,  55 => 2,  52 => 1,);
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
     <div class=\"post-content\">     
           <div class=\"content-inner\">
                 <div class=\"post-meta\"><span class=\"post-categories\">{{ field_post_category }} </span>&nbsp;|&nbsp;<span class=\"post-created\">{{ created }} </span></div>
                 <div class=\"post-title\"> {{ title }} </div>
                 <div class=\"post-body\">{{body}}</div>
           </div>
      </div>\t 
</div>", "");
    }
}
