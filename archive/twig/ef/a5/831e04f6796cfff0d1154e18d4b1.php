<?php

/* bbb/listing.tpl */
class __TwigTemplate_efa5831e04f6796cfff0d1154e18d4b1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class =\"row\">

";
        // line 3
        if (((isset($context["bbb_status"]) ? $context["bbb_status"] : null) == true)) {
            // line 4
            echo "  ";
            if (((isset($context["show_join_button"]) ? $context["show_join_button"] : null) == true)) {
                // line 5
                echo "    <div class =\"span12\" style=\"text-align:center\">
        <a href=\"";
                // line 6
                echo (isset($context["conference_url"]) ? $context["conference_url"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-large\">
            ";
                // line 7
                echo get_lang("EnterConference");
                echo "
        </a>
        <span id=\"users_online\" class=\"label label-warning\">";
                // line 9
                echo sprintf(get_lang("XUsersOnLine"), (isset($context["users_online"]) ? $context["users_online"] : null));
                echo " </span>
    </div>
  ";
            }
            // line 12
            echo "
    <div class =\"span12\">
        <div class=\"page-header\">
            <h2>";
            // line 15
            echo get_lang("RecordList");
            echo "</h2>
        </div>

        <table class=\"table\">
            <tr>
                <th>#</th>
                <th>";
            // line 21
            echo get_lang("CreatedAt");
            echo "</th>
                <th>";
            // line 22
            echo get_lang("Status");
            echo "</th>
                <th>";
            // line 23
            echo get_lang("Records");
            echo "</th>

                ";
            // line 25
            if ((isset($context["allow_to_edit"]) ? $context["allow_to_edit"] : null)) {
                // line 26
                echo "                    <th>";
                echo get_lang("Actions");
                echo "</th>
                ";
            }
            // line 28
            echo "
            </tr>
            ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["meetings"]) ? $context["meetings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
                // line 31
                echo "            <tr>
                <td>";
                // line 32
                echo $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "id");
                echo "</td>
                <td>";
                // line 33
                echo $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "created_at");
                echo "</td>
                <td>
                    ";
                // line 35
                if (($this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "status") == 1)) {
                    // line 36
                    echo "                        <span class=\"label label-success\">";
                    echo get_lang("MeetingOpened");
                    echo "</span>
                    ";
                } else {
                    // line 38
                    echo "                        <span class=\"label label-info\">";
                    echo get_lang("MeetingClosed");
                    echo "</span>
                    ";
                }
                // line 40
                echo "                </td>
                <td>
                    ";
                // line 42
                if (($this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "record") == 1)) {
                    // line 43
                    echo "                        ";
                    // line 44
                    echo "                        ";
                    echo $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "show_links");
                    echo "
                    ";
                }
                // line 46
                echo "                </td>

                ";
                // line 48
                if ((isset($context["allow_to_edit"]) ? $context["allow_to_edit"] : null)) {
                    // line 49
                    echo "                    <td>
                    ";
                    // line 50
                    if (($this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "status") == 1)) {
                        // line 51
                        echo "                        <a class=\"btn\" href=\"";
                        echo $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : null), "end_url");
                        echo " \"> ";
                        echo get_lang("CloseMeeting");
                        echo "</a>
                    ";
                    }
                    // line 53
                    echo "                    </td>
                ";
                }
                // line 55
                echo "
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>
    </div>
";
        } else {
            // line 61
            echo "    <div class =\"span12\" style=\"text-align:center\">
        ";
            // line 62
            echo Display::return_message_and_translate("ServerIsNotRunning", "warning");
            echo "
    </div>
";
        }
        // line 65
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bbb/listing.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  156 => 62,  153 => 61,  148 => 58,  140 => 55,  136 => 53,  128 => 51,  126 => 50,  123 => 49,  121 => 48,  117 => 46,  111 => 44,  109 => 43,  107 => 42,  103 => 40,  97 => 38,  91 => 36,  89 => 35,  84 => 33,  80 => 32,  77 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  56 => 23,  52 => 22,  48 => 21,  39 => 15,  34 => 12,  28 => 9,  23 => 7,  19 => 6,  16 => 5,  13 => 4,  11 => 3,  7 => 1,);
    }
}
