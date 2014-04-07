<?php

/* default/create_course/add_course.tpl */
class __TwigTemplate_c25d310333cb7a9ace7dae001c505704 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["just_created_link"]) ? $context["just_created_link"] : null);
        echo "
<h3>";
        // line 2
        echo get_lang("JustCreated");
        echo " ";
        echo (isset($context["course_title"]) ? $context["course_title"] : null);
        echo "</h3>
<hr />
<h3>";
        // line 4
        echo get_lang("ThingsToDo");
        echo "</h3>
<br />

<div id=\"course_thing_to_do\" class=\"row\">
    <div class=\"span3\">
        <div class=\"thumbnail\">
            <img src=\"";
        // line 10
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
        echo "icons/64/home.png\"/>
            <div class=\"caption\">
                <a href=\"";
        // line 12
        echo (isset($context["course_url"]) ? $context["course_url"] : null);
        echo "\" class=\"btn\">
                    ";
        // line 13
        echo get_lang("CourseHomepage");
        echo "
                </a>    
            </div>
        </div>
    </div>
        
    ";
        // line 19
        if (((api_get_setting("allow_user_course_subscription_by_course_admin") == "true") || ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin") == 1))) {
            // line 20
            echo "    <div class=\"span3\">
        <div class=\"thumbnail\">
        <img src=\"";
            // line 22
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
            echo "icons/64/user.png\"/>
            <div class=\"caption\">
            <a href=\"";
            // line 24
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
            echo "user/subscribe_user.php?cidReq=";
            echo (isset($context["course_id"]) ? $context["course_id"] : null);
            echo "\" class=\"btn\">
                ";
            // line 25
            echo get_lang("SubscribeUserToCourse");
            echo "
            </a>    
            </div>
        </div>
    </div>
    ";
        }
        // line 31
        echo "        
    <div class=\"span3\">
        <div class=\"thumbnail\">
        <img src=\"";
        // line 34
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
        echo "icons/64/info.png\"/>
            <div class=\"caption\">
            <a href=\"";
        // line 36
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "course_description/?cidReq=";
        echo (isset($context["course_id"]) ? $context["course_id"] : null);
        echo "\" class=\"btn\">
                ";
        // line 37
        echo get_lang("AddCourseDescription");
        echo "
            </a>
            </div>
        </div>
    </div>
    <div class=\"span3\">
        <div class=\"thumbnail\">        
        <img src=\"";
        // line 44
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
        echo "icons/64/reference.png\"/>
            <div class=\"caption\">
            <a href=\"";
        // line 46
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "course_info/infocours.php?cidReq=";
        echo (isset($context["course_id"]) ? $context["course_id"] : null);
        echo "\" class=\"btn\">
                ";
        // line 47
        echo get_lang("ModifInfo");
        echo "
            </a>
            </div>
        </div>
    </div>
</div>
    
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "default/create_course/add_course.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 47,  102 => 46,  97 => 44,  87 => 37,  81 => 36,  76 => 34,  71 => 31,  62 => 25,  56 => 24,  51 => 22,  47 => 20,  45 => 19,  36 => 13,  32 => 12,  27 => 10,  18 => 4,  11 => 2,  7 => 1,);
    }
}
