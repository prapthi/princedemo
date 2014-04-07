<?php

/* default/admin/settings_index.tpl */
class __TwigTemplate_11ce6f096a8cc3a6f48f3eb325393656 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
\$(function() {
    //\$(\"#settings\").tabs();
});
</script>

<div id=\"settings\">
    <!--
    <ul>
        <li><a href=\"#tabs-1\">Users</a></li>
        <li><a href=\"#tabs-2\">Courses</a></li>
        <li><a href=\"#tabs-3\">Platform</a></li>
        <li><a href=\"#tabs-4\">Aenean lacinia</a></li>
        <li><a href=\"#tabs-5\">Aenean lacinia</a></li>
        <li><a href=\"#tabs-6\">Aenean lacinia</a></li>
        <li><a href=\"#tabs-7\">Aenean lacinia</a></li>
        <li><a href=\"#tabs-8\">Aenean lacinia</a></li>        
    </ul>
    -->        
    <div class=\"row\">
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block_item"]) {
            // line 22
            echo "        <div id=\"tabs-";
            echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            echo "\" class=\"span6\">
            <div class=\"well_border\">
                <h4>";
            // line 24
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "icon");
            echo " ";
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "label");
            echo "</h4>                
                <div style=\"list-style-type:none\">
                    ";
            // line 26
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "search_form");
            echo "
                </div>                           
                ";
            // line 28
            if ((!(null === $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "items")))) {
                // line 29
                echo "                    <ul>
    \t\t    \t";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                    // line 31
                    echo "    \t\t    \t\t<li><a href=\"";
                    echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "label");
                    echo "</a></li>\t    \t
    \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 33
                echo "                    </ul>    \t
                ";
            }
            // line 35
            echo "                
                ";
            // line 36
            if ((!(null === $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "extra")))) {
                // line 37
                echo "                    <div>
                    ";
                // line 38
                echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "extra");
                echo "
                    </div>
                ";
            }
            // line 40
            echo "                
            </div>
        </div>        
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block_item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/admin/settings_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  102 => 40,  96 => 38,  93 => 37,  91 => 36,  88 => 35,  84 => 33,  73 => 31,  69 => 30,  66 => 29,  64 => 28,  59 => 26,  52 => 24,  46 => 22,  29 => 21,  7 => 1,);
    }
}
