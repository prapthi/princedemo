<?php

/* default/layout/main.tpl */
class __TwigTemplate_263300139c09f874c932bf529c0ca9bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        $this->env->loadTemplate("default/layout/main_header.tpl")->display($context);
        echo "    
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "\t
\t";
        // line 6
        if (((isset($context["show_sniff"]) ? $context["show_sniff"] : null) == 1)) {
            // line 7
            echo "\t \t";
            $this->env->loadTemplate("default/layout/sniff.tpl")->display($context);
            // line 8
            echo "\t";
        }
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 14
            echo "        </div> <!-- end of #row\" -->
        </div> <!-- end of #main\" -->
        <div class=\"push\"></div>
        </div> <!-- end of #wrapper section -->
    ";
        }
        // line 19
        $this->env->loadTemplate("default/layout/main_footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/main.tpl";
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  66 => 14,  63 => 13,  53 => 8,  50 => 7,  43 => 5,  30 => 11,  27 => 10,  25 => 5,  22 => 4,  20 => 1,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 102,  228 => 100,  225 => 98,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 64,  148 => 59,  142 => 57,  139 => 56,  137 => 55,  133 => 53,  130 => 52,  124 => 50,  118 => 47,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 32,  82 => 29,  76 => 26,  70 => 23,  64 => 20,  61 => 12,  58 => 11,  55 => 16,  52 => 15,  48 => 6,  42 => 10,  39 => 9,  37 => 2,  34 => 1,  31 => 5,  26 => 3,);
    }
}
