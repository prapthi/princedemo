<?php

/* default/work/view.tpl */
class __TwigTemplate_e555e8991012cc14ede64238bc4d6d03 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-header\">
    <h2>";
        // line 2
        echo $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "title");
        echo "</h2>
</div>

<p>
";
        // line 6
        echo $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "description");
        echo "
</p>";
    }

    public function getTemplateName()
    {
        return "default/work/view.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 6,  10 => 2,  7 => 1,);
    }
}
