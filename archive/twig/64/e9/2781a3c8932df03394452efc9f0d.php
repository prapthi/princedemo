<?php

/* default/layout/welcome_to_course.tpl */
class __TwigTemplate_64e92781a3c8932df03394452efc9f0d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo sprintf(get_lang("HelloXAsYouCanSeeYourCourseListIsEmpty"), $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name"));
        echo "

";
        // line 3
        if (((isset($context["count_courses"]) ? $context["count_courses"] : null) == 0)) {
            // line 4
            echo "    ";
            echo get_lang("PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses");
            echo "
";
        } else {
            // line 6
            echo "
    ";
            // line 7
            if ((api_get_setting("allow_students_to_browse_courses") == "true")) {
                // line 8
                echo "        
        ";
                // line 9
                echo sprintf(get_lang("GoAheadAndBrowseOurCourseCatalogXOnceRegisteredYouWillSeeTheCourseHereX"), (isset($context["course_catalog_link"]) ? $context["course_catalog_link"] : null), (isset($context["course_list_link"]) ? $context["course_list_link"] : null));
                echo "
        
        <a class=\"btn btn-primary btn-large\" href=\"";
                // line 11
                echo (isset($context["course_catalog_url"]) ? $context["course_catalog_url"] : null);
                echo "\">
            ";
                // line 12
                echo get_lang("CourseCatalog");
                echo "
        </a>
    ";
            } else {
                // line 15
                echo "        ";
                echo get_lang("PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses");
                echo "
    ";
            }
            // line 17
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/welcome_to_course.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  43 => 15,  37 => 12,  33 => 11,  28 => 9,  25 => 8,  23 => 7,  20 => 6,  14 => 4,  12 => 3,  7 => 1,);
    }
}
