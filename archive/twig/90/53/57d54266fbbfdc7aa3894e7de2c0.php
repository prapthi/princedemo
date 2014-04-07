<?php

/* default/layout/footer.tpl */
class __TwigTemplate_905357d54266fbbfdc7aa3894e7de2c0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer> <!-- start of #footer section -->\t    
    <div class=\"container\">
        <div class=\"row\">            
            <div id=\"footer_left\" class=\"span4\">                
                ";
        // line 5
        if ((!(null === (isset($context["session_teachers"]) ? $context["session_teachers"] : null)))) {
            // line 6
            echo "                    <div id=\"session_teachers\">
                        ";
            // line 7
            echo (isset($context["session_teachers"]) ? $context["session_teachers"] : null);
            echo "           
                    </div>
                ";
        }
        // line 10
        echo "
                ";
        // line 11
        if ((!(null === (isset($context["teachers"]) ? $context["teachers"] : null)))) {
            // line 12
            echo "                    <div id=\"teachers\">
                        ";
            // line 13
            echo (isset($context["teachers"]) ? $context["teachers"] : null);
            echo "            
                    </div>
                ";
        }
        // line 16
        echo "                
                ";
        // line 17
        echo "                                             
                ";
        // line 18
        if ((!(null === (isset($context["plugin_footer_left"]) ? $context["plugin_footer_left"] : null)))) {
            // line 19
            echo "                    <div id=\"plugin_footer_left\">
                        ";
            // line 20
            echo (isset($context["plugin_footer_left"]) ? $context["plugin_footer_left"] : null);
            echo "               
                    </div>                
                ";
        }
        // line 23
        echo "                 &nbsp;
            </div>
            
            <div id=\"footer_center\" class=\"span4\">
                ";
        // line 27
        echo "\t\t
                ";
        // line 28
        if ((!(null === (isset($context["plugin_footer_center"]) ? $context["plugin_footer_center"] : null)))) {
            // line 29
            echo "                    <div id=\"plugin_footer_center\">
                        ";
            // line 30
            echo (isset($context["plugin_footer_center"]) ? $context["plugin_footer_center"] : null);
            echo "                
                    </div>
                ";
        }
        // line 33
        echo "                 &nbsp;
            </div>
            
            <div id=\"footer_right\" class=\"span4\">                
                ";
        // line 37
        if ((!(null === (isset($context["administrator_name"]) ? $context["administrator_name"] : null)))) {
            // line 38
            echo "                    <div id=\"admin_name\">
                        ";
            // line 39
            echo (isset($context["administrator_name"]) ? $context["administrator_name"] : null);
            echo "          
                    </div>
                ";
        }
        // line 42
        echo "                
                <div id=\"software_name\">\t    \t
                    ";
        // line 44
        echo get_lang("Platform");
        echo " <a href=\"";
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
        echo "\" target=\"_blank\">";
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name");
        echo " ";
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "system_version");
        echo "</a>
                    &copy; ";
        // line 45
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "   \t
                </div>
                ";
        // line 47
        echo "\t\t
                ";
        // line 48
        if ((!(null === (isset($context["plugin_footer_right"]) ? $context["plugin_footer_right"] : null)))) {
            echo "                                
                    <div id=\"plugin_footer_right\">
                        ";
            // line 50
            echo (isset($context["plugin_footer_right"]) ? $context["plugin_footer_right"] : null);
            echo "                
                    </div>                
                ";
        }
        // line 53
        echo "                &nbsp;
            </div><!-- end of #footer_right -->
        </div><!-- end of #row -->        
    </div><!-- end of #container -->
</footer>

";
        // line 59
        echo (isset($context["footer_extra_content"]) ? $context["footer_extra_content"] : null);
        echo "

";
        // line 94
        echo "
<script>
/* Makes row highlighting possible */
\$(document).ready( function() {
    //Chosen select
    \$(\".chzn-select\").chosen();     
    
    //Table highlight
    \$(\"form .data_table input:checkbox\").click(function() {
        if (\$(this).is(\":checked\")) {
            \$(this).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
                        
        } else {
            \$(this).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
        }    
    });
    
    /* For non HTML5 browsers */
    if (\$(\"#formLogin\".length > 1)) {
        \$(\"input[name=login]\").focus();
    }
    
    /* For IOS users */
    \$('.autocapitalize_off').attr('autocapitalize', 'off');
    
    //Tool tip (in exercises)
    var tip_options = {
        placement : 'right'
    }
    \$('.boot-tooltip').tooltip(tip_options);
   
});
</script>
";
        echo "
";
        // line 95
        echo (isset($context["execution_stats"]) ? $context["execution_stats"] : null);
    }

    public function getTemplateName()
    {
        return "default/layout/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 95,  138 => 94,  125 => 53,  119 => 50,  86 => 39,  81 => 37,  69 => 30,  44 => 18,  24 => 10,  13 => 5,  75 => 33,  51 => 30,  46 => 19,  56 => 22,  35 => 16,  16 => 7,  11 => 3,  62 => 29,  40 => 18,  36 => 18,  9 => 2,  217 => 77,  210 => 75,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  180 => 68,  176 => 66,  170 => 63,  163 => 61,  158 => 58,  143 => 53,  116 => 44,  109 => 42,  102 => 40,  90 => 38,  84 => 37,  79 => 35,  74 => 35,  59 => 31,  47 => 26,  33 => 13,  21 => 9,  17 => 6,  12 => 4,  365 => 305,  126 => 69,  122 => 45,  114 => 48,  110 => 65,  96 => 44,  41 => 17,  28 => 14,  23 => 9,  19 => 6,  15 => 6,  179 => 86,  171 => 81,  165 => 62,  162 => 76,  149 => 54,  147 => 67,  141 => 63,  135 => 60,  132 => 50,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 42,  89 => 37,  83 => 38,  67 => 23,  60 => 34,  49 => 20,  45 => 17,  38 => 16,  32 => 13,  29 => 12,  18 => 7,  14 => 5,  10 => 2,  7 => 1,  73 => 38,  66 => 29,  63 => 22,  53 => 25,  50 => 19,  43 => 12,  30 => 11,  27 => 11,  25 => 13,  22 => 5,  20 => 11,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 83,  228 => 100,  225 => 80,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 52,  133 => 59,  130 => 52,  124 => 50,  118 => 67,  112 => 44,  106 => 45,  100 => 38,  94 => 35,  88 => 60,  82 => 40,  76 => 54,  70 => 34,  64 => 28,  61 => 27,  58 => 28,  55 => 23,  52 => 15,  48 => 29,  42 => 21,  39 => 23,  37 => 13,  34 => 17,  31 => 16,  26 => 11,);
    }
}
