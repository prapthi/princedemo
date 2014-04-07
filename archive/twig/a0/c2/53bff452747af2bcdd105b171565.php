<?php

/* default/layout/topbar.tpl */
class __TwigTemplate_a0c253bff452747af2bcdd105b171565 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Topbar -->
";
        // line 2
        if (((isset($context["show_toolbar"]) ? $context["show_toolbar"] : null) == 1)) {
            // line 3
            echo "    <div id=\"topbar\" class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">              
                <a class=\"brand\" href=\"";
            // line 6
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
            echo "\">
                    ";
            // line 7
            echo api_get_setting("siteName");
            echo "
                </a>

                ";
            // line 10
            if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged")) {
                // line 11
                echo "                    <div class=\"nav-collapse\">                        
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"";
                // line 13
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
                echo "user_portal.php\"> ";
                echo get_lang("MyCourses");
                echo "</a></li>
                            ";
                // line 23
                echo "                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 24
                echo get_lang("Tracking");
                echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 26
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "mySpace/\">";
                echo get_lang("CoursesReporting");
                echo "</a></li>
                                    <li><a href=\"";
                // line 27
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "mySpace/index.php?view=admin\">";
                echo get_lang("AdminReports");
                echo "</a></li>
                                    <li><a href=\"";
                // line 28
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "tracking/exams.php\">";
                echo get_lang("ExamsReporting");
                echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 30
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "dashboard/\">";
                echo get_lang("Dashboard");
                echo "</a></li>
                                </ul>
                            </li>
                            ";
                // line 33
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin") == 1)) {
                    // line 34
                    echo "                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 35
                    echo get_lang("Administration");
                    echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                    // line 37
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/\">";
                    echo get_lang("Home");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 38
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/user_list.php\">";
                    echo get_lang("UserList");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 39
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/course_list.php\">";
                    echo get_lang("CourseList");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 40
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/session_list.php\">";
                    echo get_lang("SessionList");
                    echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                    // line 42
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/settings.php\">";
                    echo get_lang("Settings");
                    echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                    // line 44
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/settings.php?category=Plugins\">";
                    echo get_lang("Plugins");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 45
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/settings.php?category=Regions\">";
                    echo get_lang("Regions");
                    echo "</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 50
                    echo get_lang("Add");
                    echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                    // line 52
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/user_add.php\">";
                    echo get_lang("User");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 53
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/course_add.php\">";
                    echo get_lang("Course");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 54
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/session_add.php\">";
                    echo get_lang("Session");
                    echo "</a></li>
                                </ul>
                            </li>
                            ";
                }
                // line 58
                echo "                        </ul>
                

                        ";
                // line 61
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin") == 1)) {
                    // line 62
                    echo "                        <form class=\"navbar-search pull-left\" action=\"";
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/user_list.php\" method=\"get\">
                            <input type=\"text\" class=\"search-query span2\" placeholder=\"";
                    // line 63
                    echo get_lang("SearchUsers");
                    echo "\" name=\"keyword\">
                        </form>
                        ";
                }
                // line 66
                echo "                
                        <ul class=\"nav pull-right\">
                            <li><a href=\"";
                // line 68
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "social/home.php\"><img src=\"";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small");
                echo "\"/></a></li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  href=\"#\">";
                // line 70
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name");
                echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 72
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "social/home.php\">";
                echo get_lang("Profile");
                echo "</a></li>
                                    <li><a href=\"";
                // line 73
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "calendar/agenda_js.php?type=personal\">";
                echo get_lang("MyAgenda");
                echo "</a></li>
                                    <li><a href=\"";
                // line 74
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "messages/inbox.php\">";
                echo get_lang("Inbox");
                echo "</a></li>
                                    <li><a href=\"";
                // line 75
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "auth/my_progress.php\">";
                echo get_lang("MyReporting");
                echo "</a></li>
                                    <!--<li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 77
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "social/invitations.php\">";
                echo get_lang("PendingInvitations");
                echo "</a></li> -->
                                </ul>
                            </li>
                            <li><a href=\"";
                // line 80
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
                echo "index.php?logout=logout\">";
                echo get_lang("Logout");
                echo "</a></li>
                        </ul>
                    </div> <!-- /nav collapse -->
                ";
            }
            // line 83
            echo "                 
            </div> <!-- /container-fluid-->
        </div><!-- /navbar-inner -->
    </div><!-- /topbar -->
    <div id=\"topbar_push\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/topbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 77,  210 => 75,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  180 => 68,  176 => 66,  170 => 63,  163 => 61,  158 => 58,  143 => 53,  116 => 44,  109 => 42,  102 => 40,  90 => 38,  84 => 37,  79 => 35,  74 => 33,  59 => 28,  47 => 26,  33 => 13,  21 => 7,  17 => 6,  12 => 3,  365 => 305,  126 => 69,  122 => 45,  114 => 66,  110 => 65,  96 => 39,  41 => 14,  28 => 9,  23 => 7,  19 => 6,  15 => 5,  179 => 86,  171 => 81,  165 => 62,  162 => 76,  149 => 54,  147 => 67,  141 => 63,  135 => 60,  132 => 50,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 38,  89 => 37,  83 => 34,  67 => 23,  60 => 34,  49 => 16,  45 => 15,  38 => 10,  32 => 9,  29 => 11,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 27,  66 => 30,  63 => 22,  53 => 27,  50 => 7,  43 => 12,  30 => 11,  27 => 10,  25 => 5,  22 => 5,  20 => 1,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 83,  228 => 100,  225 => 80,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 52,  133 => 53,  130 => 52,  124 => 50,  118 => 67,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 32,  82 => 29,  76 => 34,  70 => 23,  64 => 20,  61 => 12,  58 => 11,  55 => 16,  52 => 15,  48 => 6,  42 => 24,  39 => 23,  37 => 13,  34 => 12,  31 => 5,  26 => 3,);
    }
}
