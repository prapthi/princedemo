<?php

/* default/layout/show_header.tpl */
class __TwigTemplate_2a362a42739102cc696ed144ab424618 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("default/layout/main_header.tpl")->display($context);
        // line 6
        echo "
";
        // line 7
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 8
            echo "        ";
            if ((!(null === (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)))) {
                // line 9
                echo "            <div id=\"plugin_content_top\" class=\"span12\">
                ";
                // line 10
                echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
                echo "
            </div>
        ";
            }
            // line 13
            echo "        <div class=\"span12\">
            ";
            // line 14
            $this->env->loadTemplate("default/layout/page_body.tpl")->display($context);
            // line 15
            echo "            <section id=\"main_content\">
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 15,  29 => 14,  26 => 13,  20 => 10,  17 => 9,  14 => 8,  12 => 7,  9 => 6,  7 => 1,);
    }
}
