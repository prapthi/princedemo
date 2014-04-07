<?php

/* default/layout/main_header.tpl */
class __TwigTemplate_9da09564d7e8765399641b9c84681ee2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--><html lang=\"";
        // line 5
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->env->loadTemplate("default/layout/head.tpl")->display($context);
        // line 8
        echo "</head>
<body dir=\"";
        // line 9
        echo (isset($context["text_direction"]) ? $context["text_direction"] : null);
        echo "\" class=\"";
        echo (isset($context["section_name"]) ? $context["section_name"] : null);
        echo "\">
<noscript>";
        // line 10
        echo get_lang("NoJavascript");
        echo "</noscript>

";
        // line 12
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 13
            echo "    <div class=\"skip\">
        <ul>
            <li><a href=\"#menu\">";
            // line 15
            echo get_lang("WCAGGoMenu");
            echo "</a></li>
            <li><a href=\"#content\" accesskey=\"2\">";
            // line 16
            echo get_lang("WCAGGoContent");
            echo "</a></li>
        </ul>
    </div>
    <div id=\"wrapper\">
        ";
            // line 21
            echo "        <ul id=\"navigation\" class=\"notification-panel\">
            ";
            // line 22
            echo (isset($context["help_content"]) ? $context["help_content"] : null);
            echo "
            ";
            // line 23
            echo (isset($context["bug_notification_link"]) ? $context["bug_notification_link"] : null);
            echo "
        </ul>
            
        ";
            // line 27
            echo "        ";
            $this->env->loadTemplate("default/layout/topbar.tpl")->display($context);
            // line 28
            echo "
        <div id=\"main\" class=\"container\">
            <header>
                <div class=\"row\">
                    <div id=\"header_left\" class=\"span4\">
                        ";
            // line 34
            echo "                        ";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "

                        ";
            // line 37
            echo "                        ";
            if ((!(null === (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null)))) {
                // line 38
                echo "                            <div id=\"plugin_header_left\">
                                ";
                // line 39
                echo (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null);
                echo "
                            </div>
                        ";
            }
            // line 42
            echo "                    </div>
                    <div id=\"header_center\" class=\"span3\">
                        ";
            // line 45
            echo "                        ";
            if ((!(null === (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null)))) {
                // line 46
                echo "                            <div id=\"plugin_header_center\">
                                ";
                // line 47
                echo (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null);
                echo "
                            </div>
                        ";
            }
            // line 50
            echo "                        &nbsp;
                    </div>
                    <div id=\"header_right\" class=\"span5\">
                        <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                            ";
            // line 54
            echo (isset($context["notification_menu"]) ? $context["notification_menu"] : null);
            echo "
                        </ul>

                        ";
            // line 58
            echo "                        ";
            if ((!(null === (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null)))) {
                // line 59
                echo "                            <div id=\"plugin_header_right\">
                                ";
                // line 60
                echo (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null);
                echo "
                            </div>
                        ";
            }
            // line 63
            echo "                        &nbsp;
                    </div>
                </div>

                ";
            // line 67
            if ((isset($context["plugin_header_main"]) ? $context["plugin_header_main"] : null)) {
                // line 68
                echo "                    <div class=\"row\">
                        <div class=\"span12\">
                            <div id=\"plugin_header_main\">
                                ";
                // line 71
                echo (isset($context["plugin_header_main"]) ? $context["plugin_header_main"] : null);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            $this->env->loadTemplate("default/layout/menu.tpl")->display($context);
            echo "                

                ";
            // line 81
            echo "                ";
            echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
            echo "
            </header>

            <div id=\"top_main_content\" class=\"row\">
            ";
            // line 86
            echo "            ";
            $this->env->loadTemplate("default/layout/course_navigation.tpl")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/layout/main_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 86,  171 => 81,  165 => 78,  162 => 76,  149 => 68,  147 => 67,  141 => 63,  135 => 60,  132 => 59,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 38,  89 => 37,  83 => 34,  67 => 23,  60 => 21,  49 => 15,  45 => 13,  38 => 10,  32 => 9,  29 => 8,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 27,  66 => 14,  63 => 22,  53 => 16,  50 => 7,  43 => 12,  30 => 11,  27 => 7,  25 => 5,  22 => 5,  20 => 1,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 102,  228 => 100,  225 => 98,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 55,  133 => 53,  130 => 52,  124 => 50,  118 => 47,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 32,  82 => 29,  76 => 28,  70 => 23,  64 => 20,  61 => 12,  58 => 11,  55 => 16,  52 => 15,  48 => 6,  42 => 10,  39 => 9,  37 => 2,  34 => 1,  31 => 5,  26 => 3,);
    }
}
