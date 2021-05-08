<?php

/* themes/gavias_edubiz/templates/node/node--course.html.twig */
class __TwigTemplate_8089f2c1ef5d010c93b5b9546e8c82215885c379aaad0178d713a34b762ef6fd extends Twig_Template
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
        $tags = array("set" => 2, "if" => 15);
        $filters = array("clean_class" => 5, "t" => 30, "without" => 113, "raw" => 121);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't', 'without', 'raw'),
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

        // line 2
        $context["classes"] = array(0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 5
($context["node"] ?? null), "bundle", array()))), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 7 => "clearfix");
        // line 13
        echo "
<!-- Start Display course for teaser page -->
";
        // line 15
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
  <div class=\"course-block\">
    <div class=\"course-thumbnail\">
      ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_image", array()), "html", null, true));
            echo "
    </div>
    <div class=\"course-content\">
      ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
         <h3";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "course-title"), "method"), "html", null, true));
            echo "><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a></h3>
      ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "         
      <div class=\"course-meta\">
        <div class=\"course-teacher\"><i class=\"gv-icon-1080\"></i>";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_teacher", array()), "html", null, true));
            echo "</div> 
        <div class=\"course-duration \"><i class=\"gv-icon-952\"></i>";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_duration", array()), "value", array()), "html", null, true));
            echo "</div> 
      </div>
      <div class=\"description\">";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
            echo "</div>
      <div class=\"course-price hidden\">";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_price", array()), "html", null, true));
            echo "</div>
      <div class=\"view-node\"><a href=\"";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more")));
            echo " <i class=\"gv-icon-165\"></i></a></div>
    </div>
  </div>
<!-- End Display course for teaser page -->
";
        } else {
            // line 35
            echo "<!-- Start Display course for detail page -->

<article";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  <div class=\"row single-course\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> 
      <div class=\"clearfix\">
        <div class=\"post-thumbnail\">
          ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_image", array()), "html", null, true));
            echo "
        </div>

        ";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
          <h1";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "post-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h1>
        ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "   

        <div class=\"course-meta clearfix\">
          ";
            // line 50
            if ($this->getAttribute(($context["content"] ?? null), "field_course_teacher", array())) {
                // line 51
                echo "            <div class=\"meta-item\">
              <div class=\"icon icon-teacher\"></div>
              <div class=\"content\">
                <span class=\"lab\">";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Teacher")));
                echo "</span>
                <span class=\"val\">";
                // line 55
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_teacher", array()), "html", null, true));
                echo "</span>
              </div>
            </div>
          ";
            }
            // line 59
            echo "
          ";
            // line 60
            if ($this->getAttribute(($context["content"] ?? null), "field_course_category", array())) {
                // line 61
                echo "            <div class=\"meta-item\">
              <div class=\"icon icon-category\"></div>
              <div class=\"content\">
                <span class=\"lab\">";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Category")));
                echo "</span>
                <span class=\"val\">";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_category", array()), "html", null, true));
                echo "</span>
              </div>
            </div>
          ";
            }
            // line 68
            echo "  
    
          ";
            // line 70
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_duration", array()), "value", array())) {
                // line 71
                echo "            <div class=\"meta-item\">
              <div class=\"icon icon-duration\"></div>
              <div class=\"content\">
                <span class=\"lab\">";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Duration Time")));
                echo "</span>
                <span class=\"val\">";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_duration", array()), "value", array()), "html", null, true));
                echo "</span>
              </div>
            </div>
          ";
            }
            // line 79
            echo "
          ";
            // line 80
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_level", array()), "value", array())) {
                // line 81
                echo "            <div class=\"meta-item\">
              <div class=\"icon icon-level\"></div>
              <div class=\"content\">
                <span class=\"lab\">";
                // line 84
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Level")));
                echo "</span>
                <span class=\"val\">";
                // line 85
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_level", array()), "value", array()), "html", null, true));
                echo "</span>
              </div>
            </div>
          ";
            }
            // line 89
            echo "
          ";
            // line 90
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_student", array()), "value", array())) {
                // line 91
                echo "            <div class=\"meta-item\">
              <div class=\"icon icon-students\"></div>
              <div class=\"content\">
                <span class=\"lab\">";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Students")));
                echo "</span>
                <span class=\"val\">";
                // line 95
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_student", array()), "value", array()), "html", null, true));
                echo "</span>
              </div>
            </div>
          ";
            }
            // line 99
            echo "
          ";
            // line 100
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_price", array()), "value", array())) {
                // line 101
                echo "            <div class=\"meta-item\">
              <div class=\"icon icon-price\"></div>
              <div class=\"content\">
                <span class=\"lab\">";
                // line 104
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Price")));
                echo "</span>
                <span class=\"val\">";
                // line 105
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_course_price", array()), "value", array()), "html", null, true));
                echo "</span>
              </div>
            </div>
          ";
            }
            // line 109
            echo "        </div>

        <div class=\"post-content\">
          <div";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
            ";
            // line 113
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_course_image", "field_course_category", "field_course_duration", "field_course_student", "field_course_level", "field_course_teacher", "field_course_price", "field_lesson", "field_course_feature", "comment"), "html", null, true));
            echo "
        </div>

        <div class=\"course-features\">
          ";
            // line 117
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_course_feature", array()), "html", null, true));
            echo "
        </div>

        <div class=\"course-lessons\">
            ";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["lessons"] ?? null)));
            echo "
        </div>
        <div id=\"node-single-comment\">
            ";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
            echo "
        </div>
        </div>
      </div>
    </div>

  </div>    

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/node/node--course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 124,  291 => 121,  284 => 117,  277 => 113,  273 => 112,  268 => 109,  261 => 105,  257 => 104,  252 => 101,  250 => 100,  247 => 99,  240 => 95,  236 => 94,  231 => 91,  229 => 90,  226 => 89,  219 => 85,  215 => 84,  210 => 81,  208 => 80,  205 => 79,  198 => 75,  194 => 74,  189 => 71,  187 => 70,  183 => 68,  176 => 65,  172 => 64,  167 => 61,  165 => 60,  162 => 59,  155 => 55,  151 => 54,  146 => 51,  144 => 50,  138 => 47,  132 => 46,  128 => 45,  122 => 42,  114 => 37,  110 => 35,  100 => 30,  96 => 29,  92 => 28,  87 => 26,  83 => 25,  78 => 23,  70 => 22,  66 => 21,  60 => 18,  54 => 15,  50 => 13,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_edubiz/templates/node/node--course.html.twig", "C:\\laragon\\www\\fsr\\themes\\gavias_edubiz\\templates\\node\\node--course.html.twig");
    }
}
