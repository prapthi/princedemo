<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_9d8dbb588fc5767312d78ccc74e12ccf extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (((isset($context["actions"]) ? $context["actions"] : null) != "")) {
            // line 3
            echo "    <div class=\"actions\">
        ";
            // line 4
            echo (isset($context["actions"]) ? $context["actions"] : null);
            echo "
    </div>
";
        }
        // line 7
        echo "
";
        // line 9
        if (((isset($context["header"]) ? $context["header"] : null) != "")) {
            echo "    
    <div class=\"page-header\">
        <h1>";
            // line 11
            echo (isset($context["header"]) ? $context["header"] : null);
            echo "</h1>
    </div>
";
        }
        // line 14
        echo "
";
        // line 16
        if (((isset($context["message"]) ? $context["message"] : null) != "")) {
            echo "    
    <section id=\"messages\">
        ";
            // line 18
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  35 => 16,  16 => 5,  11 => 3,  62 => 29,  40 => 18,  36 => 18,  9 => 3,  217 => 77,  210 => 75,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  180 => 68,  176 => 66,  170 => 63,  163 => 61,  158 => 58,  143 => 53,  116 => 44,  109 => 42,  102 => 40,  90 => 38,  84 => 37,  79 => 35,  74 => 35,  59 => 28,  47 => 26,  33 => 13,  21 => 9,  17 => 6,  12 => 4,  365 => 305,  126 => 69,  122 => 45,  114 => 66,  110 => 65,  96 => 46,  41 => 14,  28 => 14,  23 => 9,  19 => 6,  15 => 5,  179 => 86,  171 => 81,  165 => 62,  162 => 76,  149 => 54,  147 => 67,  141 => 63,  135 => 60,  132 => 50,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 38,  89 => 37,  83 => 58,  67 => 23,  60 => 34,  49 => 16,  45 => 17,  38 => 10,  32 => 14,  29 => 11,  18 => 7,  14 => 5,  10 => 2,  7 => 2,  73 => 27,  66 => 47,  63 => 22,  53 => 25,  50 => 19,  43 => 12,  30 => 11,  27 => 10,  25 => 5,  22 => 5,  20 => 11,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 83,  228 => 100,  225 => 80,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 52,  133 => 53,  130 => 52,  124 => 50,  118 => 67,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 60,  82 => 40,  76 => 54,  70 => 34,  64 => 20,  61 => 12,  58 => 28,  55 => 16,  52 => 15,  48 => 6,  42 => 21,  39 => 23,  37 => 13,  34 => 17,  31 => 5,  26 => 11,);
    }
}
