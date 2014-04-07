<?php

/* default/layout/hot_courses.tpl */
class __TwigTemplate_5f1f43267b5a9b2734e4bb019a5505f7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((!(null === (isset($context["hot_courses"]) ? $context["hot_courses"] : null))) && (!twig_test_empty((isset($context["hot_courses"]) ? $context["hot_courses"] : null))))) {
            // line 2
            echo "
<script>
\$(document).ready( function() {
    \$('.star-rating li a').live('click', function(event) {
        var id = \$(this).parents('ul').attr('id');
        \$('#vote_label2_' + id).html(\"";
            // line 7
            echo get_lang("Loading");
            echo "\");
        \$.ajax({
            url: \$(this).attr('data-link'),
            success: function(data) {
                \$(\"#rating_wrapper_\"+id).html(data);
                if (data == 'added') {
                    //\$('#vote_label2_' + id).html(\"";
            // line 13
            echo get_lang("Saved");
            echo "\");
                }
                if (data == 'updated') {
                    //\$('#vote_label2_' + id).html(\"";
            // line 16
            echo get_lang("Saved");
            echo "\");
                }
            }
        });
    });

});
</script>

    <section id=\"hot_courses\">
        <div class=\"row\">
            <div class=\"span9\">
                ";
            // line 28
            if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin")) {
                // line 29
                echo "                <span class=\"pull-right\">
                    <a title=\"";
                // line 30
                echo get_lang("Hide");
                echo "\" alt=\"";
                echo get_lang("Hide");
                echo "\" href=\"";
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "admin/settings.php?search_field=show_hot_courses&submit_button=&_qf__search_settings=&category=search_setting\">
                        <img src=\"";
                // line 31
                echo Template::get_icon_path("visible.png", 32);
                echo "\">
                    </a>
                </span>
                ";
            }
            // line 35
            echo "                ";
            echo Display::page_subheader_and_translate("HottestCourses");
            echo "
            </div>            
                
            ";
            // line 38
            $this->env->loadTemplate("default/layout/hot_course_item.tpl")->display($context);
            // line 39
            echo "        </div>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/hot_courses.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 39,  51 => 30,  46 => 28,  56 => 22,  35 => 16,  16 => 7,  11 => 3,  62 => 29,  40 => 18,  36 => 18,  9 => 2,  217 => 77,  210 => 75,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  180 => 68,  176 => 66,  170 => 63,  163 => 61,  158 => 58,  143 => 53,  116 => 44,  109 => 42,  102 => 40,  90 => 38,  84 => 37,  79 => 35,  74 => 35,  59 => 31,  47 => 26,  33 => 13,  21 => 9,  17 => 6,  12 => 4,  365 => 305,  126 => 69,  122 => 45,  114 => 66,  110 => 65,  96 => 46,  41 => 14,  28 => 14,  23 => 9,  19 => 6,  15 => 5,  179 => 86,  171 => 81,  165 => 62,  162 => 76,  149 => 54,  147 => 67,  141 => 63,  135 => 60,  132 => 50,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 38,  89 => 37,  83 => 58,  67 => 23,  60 => 34,  49 => 16,  45 => 17,  38 => 10,  32 => 14,  29 => 11,  18 => 7,  14 => 5,  10 => 2,  7 => 1,  73 => 38,  66 => 35,  63 => 22,  53 => 25,  50 => 19,  43 => 12,  30 => 11,  27 => 10,  25 => 13,  22 => 5,  20 => 11,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 83,  228 => 100,  225 => 80,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 52,  133 => 53,  130 => 52,  124 => 50,  118 => 67,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 60,  82 => 40,  76 => 54,  70 => 34,  64 => 20,  61 => 12,  58 => 28,  55 => 16,  52 => 15,  48 => 29,  42 => 21,  39 => 23,  37 => 13,  34 => 17,  31 => 16,  26 => 11,);
    }
}
