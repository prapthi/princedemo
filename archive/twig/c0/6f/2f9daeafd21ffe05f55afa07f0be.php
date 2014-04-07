<?php

/* default/layout/menu.tpl */
class __TwigTemplate_c06f2f9daeafd21ffe05f55afa07f0be extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!(null === (isset($context["menu"]) ? $context["menu"] : null)))) {
            // line 2
            echo "
<div class=\"navbar subnav\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a data-toggle=\"collapse\" data-target=\".nav-collapse\" class=\"btn btn-navbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
            // line 11
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
            echo "\">";
            echo (isset($context["portal_name"]) ? $context["portal_name"] : null);
            echo "</a>
            <div class=\"nav-collapse\">
                <ul class=\"nav\">
                    ";
            // line 14
            echo (isset($context["menu"]) ? $context["menu"] : null);
            echo "
                </ul>

                ";
            // line 17
            if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged") == 1)) {
                // line 18
                echo "                <ul class=\"nav pull-right\">

                    ";
                // line 20
                if ((!(null === (isset($context["user_notifications"]) ? $context["user_notifications"] : null)))) {
                    // line 21
                    echo "                    <li>
                        <a href=\"";
                    // line 22
                    echo (isset($context["message_url"]) ? $context["message_url"] : null);
                    echo "\">";
                    echo (isset($context["user_notifications"]) ? $context["user_notifications"] : null);
                    echo "</a>
                    </li>
                    ";
                }
                // line 25
                echo "
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <img src=\"";
                // line 28
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small");
                echo "\"/>
                            ";
                // line 29
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name");
                echo "
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                ";
                // line 34
                echo (isset($context["profile_link"]) ? $context["profile_link"] : null);
                echo "
                                ";
                // line 35
                echo (isset($context["message_link"]) ? $context["message_link"] : null);
                echo "
                            </li>
                        </ul>

                    <li>
                        <a id=\"logout_button\" class=\"logout\" title=\"";
                // line 40
                echo get_lang("Logout");
                echo "\" href=\"";
                echo (isset($context["logout_link"]) ? $context["logout_link"] : null);
                echo "\" >
                            <img src=\"";
                // line 41
                echo Template::get_icon_path("exit.png", 22);
                echo "\">
                        </a>
                    </li>
                </ul>
                ";
            }
            // line 46
            echo "            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 29,  40 => 20,  36 => 18,  9 => 2,  217 => 77,  210 => 75,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  180 => 68,  176 => 66,  170 => 63,  163 => 61,  158 => 58,  143 => 53,  116 => 44,  109 => 42,  102 => 40,  90 => 38,  84 => 37,  79 => 35,  74 => 35,  59 => 28,  47 => 26,  33 => 13,  21 => 7,  17 => 6,  12 => 3,  365 => 305,  126 => 69,  122 => 45,  114 => 66,  110 => 65,  96 => 46,  41 => 14,  28 => 14,  23 => 7,  19 => 6,  15 => 5,  179 => 86,  171 => 81,  165 => 62,  162 => 76,  149 => 54,  147 => 67,  141 => 63,  135 => 60,  132 => 50,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 38,  89 => 37,  83 => 34,  67 => 23,  60 => 34,  49 => 16,  45 => 22,  38 => 10,  32 => 9,  29 => 11,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 27,  66 => 30,  63 => 22,  53 => 25,  50 => 7,  43 => 12,  30 => 11,  27 => 10,  25 => 5,  22 => 5,  20 => 11,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 83,  228 => 100,  225 => 80,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 52,  133 => 53,  130 => 52,  124 => 50,  118 => 67,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 41,  82 => 40,  76 => 34,  70 => 34,  64 => 20,  61 => 12,  58 => 28,  55 => 16,  52 => 15,  48 => 6,  42 => 21,  39 => 23,  37 => 13,  34 => 17,  31 => 5,  26 => 3,);
    }
}
