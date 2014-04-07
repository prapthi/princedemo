<?php

/* default/layout/head.tpl */
class __TwigTemplate_83022e965cb4fb5b226495616a931ad2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"";
        echo (isset($context["system_charset"]) ? $context["system_charset"] : null);
        echo "\" />
<link href=\"http://www.chamilo.org/documentation.php\" rel=\"help\" />
<link href=\"http://www.chamilo.org/team.php\" rel=\"author\" />
<link href=\"http://www.chamilo.org\" rel=\"copyright\" />
";
        // line 5
        echo (isset($context["prefetch"]) ? $context["prefetch"] : null);
        echo "
";
        // line 6
        echo (isset($context["favico"]) ? $context["favico"] : null);
        echo "
<link rel=\"apple-touch-icon\" href=\"";
        // line 7
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
        echo "apple-touch-icon.png\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
<meta name=\"Generator\" content=\"";
        // line 9
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name");
        echo " ";
        echo twig_slice($this->env, $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "system_version"), 0, 1);
        echo "\" />
";
        // line 12
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 13
        echo (isset($context["title_string"]) ? $context["title_string"] : null);
        echo "</title>
";
        // line 14
        echo (isset($context["css_file_to_string"]) ? $context["css_file_to_string"] : null);
        echo "
";
        // line 15
        echo (isset($context["css_style_print"]) ? $context["css_style_print"] : null);
        echo "
";
        // line 16
        echo (isset($context["js_file_to_string"]) ? $context["js_file_to_string"] : null);
        echo "
";
        // line 17
        echo (isset($context["extra_headers"]) ? $context["extra_headers"] : null);
        echo "
<script>
//<![CDATA[
// This is a patch for the \"__flash__removeCallback\" bug, see FS#4378.
";
        // line 34
        echo "
if ((navigator.userAgent.toLowerCase().indexOf('msie') != -1 ) && ( navigator.userAgent.toLowerCase().indexOf('opera') == -1 )) {
    window.attachEvent( 'onunload', function() {
            window['__flash__removeCallback'] = function ( instance, name ) {
                try {
                    if ( instance ) {
                        instance[name] = null ;
                    }
                } catch ( flashEx ) {
                }
            } ;
    });
}
";
        echo "
//]]>



function setCheckbox(value, table_id) {
    checkboxes = \$(\"#\"+table_id+\" input:checkbox\");
    \$.each(checkboxes, function(index, checkbox) {
         checkbox.checked = value;
        if (value) {
            \$(checkbox).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
        } else {
            \$(checkbox).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
        }
    });
    return false;
}

function action_click(element, table_id) {
    d = \$(\"#\"+table_id);
    if (!confirm('";
        // line 54
        echo get_lang("ConfirmYourChoice");
        echo "')) {
        return false;
    } else {
        var action =\$(element).attr(\"data-action\");
        \$('#'+table_id+' input[name=\"action\"] ').attr(\"value\", action);
        d.submit();
        return false;
    }
}

/* Global chat variables */
var ajax_url        = '";
        // line 65
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_ajax");
        echo "chat.ajax.php';
var online_button   = '";
        // line 66
        echo (isset($context["online_button"]) ? $context["online_button"] : null);
        echo "';
var offline_button  = '";
        // line 67
        echo (isset($context["offline_button"]) ? $context["offline_button"] : null);
        echo "';
var connect_lang    = '";
        // line 68
        echo get_lang("ChatConnected");
        echo "';
var disconnect_lang = '";
        // line 69
        echo get_lang("ChatDisconnected");
        echo "';

function get_url_params(q, attribute) {
    var vars;
    var hash;
    if (q != undefined) {
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            if (hash[0] == attribute) {
                return hash[1];
            }
        }
    }
}

function check_brand() {
    if (\$('.subnav').length) {
        if (\$(window).width() >= 969) {
            \$('.subnav .brand').hide();
        } else {
            \$('.subnav .brand').show();
        }
    }
}

\$(window).resize(function() {
    check_brand();
});

\$(document).scroll(function() {

    // Top bar scroll effect
    if (\$('body').width() > 959) {
        if (\$('.subnav').length) {
            if (!\$('.subnav').attr('data-top')) {
                // If already fixed, then do nothing
                if (\$('.subnav').hasClass('subnav-fixed')) return;
                // Remember top position
                var offset = \$('.subnav').offset();
                \$('.subnav').attr('data-top', offset.top);
            }

            if (\$('.subnav').attr('data-top') - \$('.subnav').outerHeight() <= \$(this).scrollTop()) {
                \$('.subnav').addClass('subnav-fixed');
            } else {
                \$('.subnav').removeClass('subnav-fixed');
            }
            //\$('.subnav .brand').show();
        }
    } else {
        //\$('.subnav .brand').hide();
    }

    //Exercise warning fixed at the top
    var fixed =  \$(\"#exercise_clock_warning\");
    if (fixed.length) {
        if (!fixed.attr('data-top')) {
            // If already fixed, then do nothing
            if (fixed.hasClass('subnav-fixed')) return;
            // Remember top position
            var offset = fixed.offset();
            fixed.attr('data-top', offset.top);
            fixed.css('width', '100%');
        }

        if (fixed.attr('data-top') - fixed.outerHeight() <= \$(this).scrollTop()) {
            fixed.addClass('subnav-fixed');
            fixed.css('width', '100%');
        } else {
            fixed.removeClass('subnav-fixed');
            fixed.css('width', '200px');
        }
    }

    //Admin -> Settings toolbar
    if (\$('body').width() > 959) {
        if (\$('.new_actions').length) {
            if (!\$('.new_actions').attr('data-top')) {
                // If already fixed, then do nothing
                if (\$('.new_actions').hasClass('new_actions-fixed')) return;
                // Remember top position
                var offset = \$('.new_actions').offset();

                var more_top = 0;
                if (\$('.subnav').hasClass('new_actions-fixed')) {
                    more_top = 50;
                }
                \$('.new_actions').attr('data-top', offset.top + more_top);
            }

            if (\$('.new_actions').attr('data-top') - \$('.new_actions').outerHeight() <= \$(this).scrollTop()) {
                \$('.new_actions').addClass('new_actions-fixed');
            } else {
                \$('.new_actions').removeClass('new_actions-fixed');
            }
        }
    }

    //Bottom actions
    if (\$('.bottom_actions').length) {
        if (!\$('.bottom_actions').attr('data-top')) {
            // If already fixed, then do nothing
            if (\$('.bottom_actions').hasClass('bottom_actions_fixed')) return;

            // Remember top position
            var offset = \$('.bottom_actions').offset();
            \$('.bottom_actions').attr('data-top', offset.top);
        }

        if (\$('.bottom_actions').attr('data-top') > \$('body').outerHeight()) {
            if ( (\$('.bottom_actions').attr('data-top') - \$('body').outerHeight() - \$('.bottom_actions').outerHeight()) >= \$(this).scrollTop()) {
                \$('.bottom_actions').addClass('bottom_actions_fixed');
                \$('.bottom_actions').css(\"width\", \"100%\");
            } else {
                \$('.bottom_actions').css(\"width\", \"\");
                \$('.bottom_actions').removeClass('bottom_actions_fixed');
            }
        } else {
            if ( (\$('.bottom_actions').attr('data-top') -  \$('.bottom_actions').outerHeight()) <= \$(this).scrollTop()) {
                \$('.bottom_actions').addClass('bottom_actions_fixed');
                \$('.bottom_actions').css(\"width\", \"100%\");
            } else {
                \$('.bottom_actions').removeClass('bottom_actions_fixed');
                \$('.bottom_actions').css(\"width\", \"\");
            }
        }
    }
});

\$(function() {

    check_brand();

    //Removes the yellow input in Chrome
    if (navigator.userAgent.toLowerCase().indexOf(\"chrome\") >= 0) {
        \$(window).load(function(){
            \$('input:-webkit-autofill').each(function(){
                var text = \$(this).val();
                var name = \$(this).attr('name');
                \$(this).after(this.outerHTML).remove();
                \$('input[name=' + name + ']').val(text);
            });
        });
    }

    //Fixes buttons to the new btn class
    if (!\$('#button').hasClass('btn')) {
        \$(\"button\").addClass('btn');
    }

    //Dropdown effect
    \$('.dropdown-toggle').dropdown();

    //Responsive effect
    \$(\".collapse\").collapse();

    \$(\".accordion_jquery\").accordion({
        autoHeight: false,
        active: false, // all items closed by default
        collapsible: true,
        header: \".accordion-heading\"
    });

    //Global popup
    \$('.ajax').on('click', function() {
        var url     = this.href;
        var dialog  = \$(\"#dialog\");
        if (\$(\"#dialog\").length == 0) {
            dialog  = \$('<div id=\"dialog\" style=\"display:none\"></div>').appendTo('body');
        }

        width_value = 580;
        height_value = 450;
        resizable_value = true;

        new_param = get_url_params(url, 'width');
        if (new_param) {
            width_value = new_param;
        }

        new_param = get_url_params(url, 'height')
        if (new_param) {
            height_value = new_param;
        }

        new_param = get_url_params(url, 'resizable');
        if (new_param) {
            resizable_value = new_param;
        }

        // load remote content
        dialog.load(
                        url,
                        {},
                        function(responseText, textStatus, XMLHttpRequest) {
                                dialog.dialog({
                                        modal       : true,
                                        width       : width_value,
                                        height      : height_value,
                                        resizable   : resizable_value
                                });
        });
        //prevent the browser to follow the link
        return false;
    });

    //old jquery.menu.js
    \$('#navigation a').stop().animate({
        'marginLeft':'50px'
    },1000);

    \$('#navigation > li').hover(
        function () {
            \$('a',\$(this)).stop().animate({
                'marginLeft':'1px'
            },200);
        },
        function () {
            \$('a',\$(this)).stop().animate({
                'marginLeft':'50px'
            },200);
        }
    );
    /*
    \$(\".td_actions\").hide();

    \$(\".td_actions\").parent('tr').mouseover(function() {
       \$(\".td_actions\").show();
    });

    \$(\".td_actions\").parent('tr').mouseout(function() {
        \$(\".td_actions\").hide();
    });*/
});
</script>
";
        // line 305
        echo (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 305,  126 => 69,  122 => 68,  114 => 66,  110 => 65,  96 => 54,  41 => 14,  28 => 9,  23 => 7,  19 => 6,  15 => 5,  179 => 86,  171 => 81,  165 => 78,  162 => 76,  149 => 68,  147 => 67,  141 => 63,  135 => 60,  132 => 59,  129 => 58,  123 => 54,  117 => 50,  111 => 47,  108 => 46,  105 => 45,  101 => 42,  95 => 39,  92 => 38,  89 => 37,  83 => 34,  67 => 23,  60 => 34,  49 => 16,  45 => 15,  38 => 10,  32 => 9,  29 => 8,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 27,  66 => 14,  63 => 22,  53 => 17,  50 => 7,  43 => 12,  30 => 11,  27 => 7,  25 => 5,  22 => 5,  20 => 1,  282 => 126,  276 => 123,  270 => 121,  265 => 118,  262 => 117,  259 => 116,  251 => 111,  246 => 108,  243 => 107,  240 => 105,  234 => 102,  228 => 100,  225 => 98,  219 => 95,  216 => 94,  214 => 93,  211 => 92,  205 => 89,  199 => 87,  196 => 85,  194 => 84,  188 => 82,  185 => 80,  177 => 75,  172 => 72,  169 => 71,  166 => 69,  160 => 66,  157 => 65,  154 => 71,  148 => 59,  142 => 57,  139 => 56,  137 => 55,  133 => 53,  130 => 52,  124 => 50,  118 => 67,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  88 => 32,  82 => 29,  76 => 28,  70 => 23,  64 => 20,  61 => 12,  58 => 11,  55 => 16,  52 => 15,  48 => 6,  42 => 10,  39 => 9,  37 => 13,  34 => 12,  31 => 5,  26 => 3,);
    }
}
