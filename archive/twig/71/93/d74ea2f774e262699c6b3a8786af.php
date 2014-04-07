<?php

/* default/layout/social_layout.tpl */
class __TwigTemplate_7193d74ea2f774e262699c6b3a8786af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default/layout/layout_1_col.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/layout_1_col.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"span3\">
            ";
        // line 6
        echo (isset($context["social_left_content"]) ? $context["social_left_content"] : null);
        echo "
            ";
        // line 7
        echo (isset($context["social_left_menu"]) ? $context["social_left_menu"] : null);
        echo "
        </div>
        <div class=\"span9\">
            <div class=\"row\">
                <span id=\"message_ajax_reponse\" class=\"span9\"></span>
                ";
        // line 12
        echo (isset($context["social_right_content"]) ? $context["social_right_content"] : null);
        echo "
                <div id=\"display_response_id\" class=\"span9\"></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/layout/social_layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  37 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
