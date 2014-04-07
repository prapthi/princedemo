<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_71ca64c4c424557f53c43321ceabe610 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 6
            echo "    </section>
</div>
";
        }
        // line 9
        echo "
";
        // line 10
        echo "   
";
        // line 11
        if ((!(null === (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)))) {
            // line 12
            echo "    <div id=\"plugin_content_bottom\" class=\"span12\">
        ";
            // line 13
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
    </div>
";
        }
        // line 16
        echo "
";
        // line 17
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 18
            echo "        </div> <!-- end of #row\" -->
    </div> <!-- end of #main\" -->
    <div class=\"push\"></div>
</div> <!-- end of #wrapper section -->
";
        }
        // line 23
        echo "
";
        // line 24
        $this->env->loadTemplate("default/layout/main_footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 24,  43 => 23,  36 => 18,  34 => 17,  25 => 13,  22 => 12,  31 => 16,  29 => 14,  26 => 13,  20 => 11,  17 => 10,  14 => 9,  12 => 7,  9 => 6,  7 => 5,);
    }
}
