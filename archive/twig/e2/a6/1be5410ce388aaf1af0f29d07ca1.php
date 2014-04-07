<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_e2a61be5410ce388aaf1af0f29d07ca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default/layout/main.tpl");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/main.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "\t
\t";
        // line 5
        echo "   
\t";
        // line 7
        echo "\t<div class=\"span3 menu-column\">\t\t        
        ";
        // line 8
        if ((isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null)) {
            // line 9
            echo "            <div id=\"plugin_menu_top\">
                ";
            // line 10
            echo (isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null);
            echo "
            </div>
        ";
        }
        // line 12
        echo "  \t
        
\t    ";
        // line 15
        echo "\t\t";
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged") == 0)) {
            // line 16
            echo "\t\t\t";
            $this->env->loadTemplate("default/layout/login_form.tpl")->display($context);
            // line 17
            echo "\t\t";
        }
        // line 18
        echo "
\t\t";
        // line 20
        echo "        ";
        echo (isset($context["user_image_block"]) ? $context["user_image_block"] : null);
        echo "
        
        ";
        // line 23
        echo "\t\t";
        echo (isset($context["profile_block"]) ? $context["profile_block"] : null);
        echo "
        
        ";
        // line 26
        echo "\t\t";
        echo (isset($context["course_block"]) ? $context["course_block"] : null);
        echo "
        
        ";
        // line 29
        echo "\t\t";
        echo (isset($context["teacher_block"]) ? $context["teacher_block"] : null);
        echo "
\t\t
\t\t";
        // line 32
        echo "\t\t";
        echo (isset($context["notice_block"]) ? $context["notice_block"] : null);
        echo "
                    
        ";
        // line 35
        echo "\t\t";
        echo (isset($context["help_block"]) ? $context["help_block"] : null);
        echo "
\t\t
\t\t";
        // line 38
        echo "\t\t";
        echo (isset($context["navigation_course_links"]) ? $context["navigation_course_links"] : null);
        echo "
\t\t
\t\t";
        // line 41
        echo "\t\t";
        echo (isset($context["reservation_block"]) ? $context["reservation_block"] : null);
        echo "
\t\t
\t\t";
        // line 44
        echo "\t\t";
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
\t\t
\t\t";
        // line 47
        echo "\t\t";
        echo (isset($context["classes_block"]) ? $context["classes_block"] : null);
        echo "
\t\t
\t\t";
        // line 50
        echo "\t\t";
        echo (isset($context["skills_block"]) ? $context["skills_block"] : null);
        echo "
        \t
\t\t";
        // line 52
        echo "\t\t
        ";
        // line 53
        echo "\t\t
        
        ";
        // line 55
        if ((isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null)) {
            // line 56
            echo "            <div id=\"plugin_menu_bottom\">
                ";
            // line 57
            echo (isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null);
            echo "
            </div>
        ";
        }
        // line 59
        echo "        
\t</div>
\t<div class=\"span9 content-column\">
        
        ";
        // line 64
        echo "        ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 65
            echo "            <div id=\"plugin_content_top\">
                ";
            // line 66
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
            </div>
        ";
        }
        // line 69
        echo "        
\t\t";
        // line 71
        echo "        ";
        if ((isset($context["home_page_block"]) ? $context["home_page_block"] : null)) {
            // line 72
            echo "            <section id=\"homepage\">
                <div class=\"row\">
                    <div class=\"span9\">
                    ";
            // line 75
            echo (isset($context["home_page_block"]) ? $context["home_page_block"] : null);
            echo "
                    </div>
                </div>
            </section>
        ";
        }
        // line 80
        echo "        
\t\t";
        // line 82
        echo "\t\t";
        echo (isset($context["sniff_notification"]) ? $context["sniff_notification"] : null);
        echo "
\t\t
        ";
        // line 84
        $this->env->loadTemplate("default/layout/page_body.tpl")->display($context);
        // line 85
        echo "                
        ";
        // line 87
        echo "        ";
        if ((isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null)) {
            echo "      
            <section id=\"welcome_to_course\">
            ";
            // line 89
            echo (isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null);
            echo "
            </section>
        ";
        }
        // line 92
        echo "                
        ";
        // line 93
        if ((!(null === (isset($context["content"]) ? $context["content"] : null)))) {
            // line 94
            echo "            <section id=\"main_content\">
                ";
            // line 95
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
            </section>
        ";
        }
        // line 98
        echo "        \t\t
\t\t";
        // line 100
        echo "        ";
        if ((isset($context["announcements_block"]) ? $context["announcements_block"] : null)) {
            echo "      
            <section id=\"announcements\">
            ";
            // line 102
            echo (isset($context["announcements_block"]) ? $context["announcements_block"] : null);
            echo "
            </section>
        ";
        }
        // line 105
        echo "        
        ";
        // line 107
        echo "        ";
        if ((isset($context["course_category_block"]) ? $context["course_category_block"] : null)) {
            // line 108
            echo "            <section id=\"course_category\">
                <div class=\"row\">
                    <div class=\"span9\">
                    ";
            // line 111
            echo (isset($context["course_category_block"]) ? $context["course_category_block"] : null);
            echo "
                    </div>
                </div>
            </section>
        ";
        }
        // line 116
        echo "                \t
\t\t";
        // line 117
        echo "\t\t
\t\t";
        // line 118
        $this->env->loadTemplate("default/layout/hot_courses.tpl")->display($context);
        echo "        
        
        ";
        // line 121
        echo "        ";
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            echo "       
            <div id=\"plugin_content_bottom\">
                ";
            // line 123
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
            </div>
        ";
        }
        // line 126
        echo "        &nbsp;
\t</div>
\t\t
";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 102,  228 => 100,  225 => 98,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 64,  148 => 59,  142 => 57,  139 => 56,  137 => 55,  133 => 53,  130 => 52,  124 => 50,  118 => 47,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 32,  82 => 29,  76 => 26,  70 => 23,  64 => 20,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  48 => 12,  42 => 10,  39 => 9,  37 => 8,  34 => 7,  31 => 5,  26 => 3,);
    }
}
