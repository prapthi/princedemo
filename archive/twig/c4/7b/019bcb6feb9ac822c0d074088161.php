<?php

/* default/layout/layout_1_col.tpl */
class __TwigTemplate_c47b019bcb6feb9ac822c0d074088161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default/layout/main.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        if ((!(null === (isset($context["content"]) ? $context["content"] : null)))) {
            // line 18
            echo "                <section id=\"main_content\">
                ";
            // line 19
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                </section>
            ";
        }
        // line 22
        echo "        ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 8
            echo "        <div id=\"plugin_content_top\" class=\"span12\">
            ";
            // line 9
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    <div class=\"span12\">
        ";
        // line 14
        $this->env->loadTemplate("default/layout/page_body.tpl")->display($context);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "        &nbsp;
    </div>

    ";
        // line 27
        echo "    ";
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 28
            echo "        <div id=\"plugin_content_bottom\" class=\"span12\">
            ";
            // line 29
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/layout_1_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  83 => 28,  80 => 27,  75 => 23,  70 => 15,  68 => 14,  58 => 9,  55 => 8,  49 => 5,  42 => 22,  36 => 19,  33 => 18,  30 => 17,  27 => 16,  119 => 44,  102 => 40,  96 => 38,  93 => 37,  91 => 36,  88 => 35,  84 => 33,  73 => 16,  69 => 30,  66 => 29,  64 => 12,  59 => 26,  52 => 7,  46 => 4,  29 => 21,  7 => 1,);
    }
}
