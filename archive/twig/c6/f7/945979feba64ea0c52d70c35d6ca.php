<?php

/* default/agenda/month.tpl */
class __TwigTemplate_c6f7945979feba64ea0c52d70c35d6ca extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
function checkLength( o, n, min, max ) {
    if ( o.val().length > max || o.val().length < min ) {
        o.addClass( \"ui-state-error\" );
        updateTips( \"Length of \" + n + \" must be between \" +
            min + \" and \" + max + \".\" );
        return false;
    } else {
        return true;
    }
}
function clean_user_select() {
    //Cleans the selected attr
    \$('#users_to_send_id')
        .find('option')
        .removeAttr('selected')
        .end();
}

var region_value = '";
        // line 20
        echo (isset($context["region_value"]) ? $context["region_value"] : null);
        echo "';
\$(document).ready(function() {

    /*\$(\"body\").delegate(\".datetime\", \"focusin\", function(){
        \$(this).datepicker({
            stepMinute: 10,
            dateFormat: 'dd/mm/yy',
            timeFormat: 'hh:mm:ss'
        });
    });*/

\tvar date = new Date();
\tvar d = date.getDate();
\tvar m = date.getMonth()+1;
\tvar y = date.getFullYear();

\t\$(\"#dialog-form\").dialog({
\t\tautoOpen: false,
\t\tmodal\t: false,
\t\twidth\t: 580,
\t\theight\t: 480,
        zIndex: 20000 // added because of qtip2
   \t});

    \$(\"#simple-dialog-form\").dialog({
\t\tautoOpen: false,
\t\tmodal\t: false,
\t\twidth\t: 580,
\t\theight\t: 480,
        zIndex: 20000 // added because of qtip2
   \t});

\tvar title = \$( \"#title\" ),
\tcontent = \$( \"#content\" ),
\tallFields = \$( [] ).add( title ).add( content ), tips = \$(\".validateTips\");

\t\$('#users_to_send_id').bind('change', function() {

\t    var selected_counts = \$(\"#users_to_send_id option:selected\").size();

\t    //alert(selected_counts);
       /* if (selected_counts >= 1 && \$(\"#users_to_send_id option[value='everyone']\").attr('selected') == 'selected') {
            clean_user_select();

            \$('#users_to_send_id option').eq(0).attr('selected', 'selected');
            //deleting the everyone
            \$(\"#users_to_send_id\").trigger(\"liszt:updated\");
            deleted_items = true;

        }*/
        \$(\"#users_to_send_id\").trigger(\"liszt:updated\");
     /*
\t    if (selected_counts >= 1) {
\t        \$('#users_to_send_id option').eq(0).removeAttr('selected');


\t    }

\t   */
\t    //clean_user_select();
\t    //\$(\"#users_to_send_id\").trigger(\"liszt:updated\");
\t    //alert(\$(\"#users_to_send_id option[value='everyone']\").attr('selected'));
\t    if (\$(\"#users_to_send_id option[value='everyone']\").attr('selected') == 'selected') {
            //clean_user_select();
            //\$('#users_to_send_id option').eq(0).attr('selected', 'selected');
            //\$(\"#users_to_send_id\").trigger(\"liszt:updated\");
        }
    });

    \$.datepicker.setDefaults( \$.datepicker.regional[region_value] );

\tvar calendar = \$('#calendar').fullCalendar({
\t\theader: {
\t\t\tleft: 'today prev,next',
\t\t\tcenter: 'title',
\t\t\tright: 'month,agendaWeek,agendaDay'
\t\t},
        ";
        // line 97
        if (((isset($context["use_google_calendar"]) ? $context["use_google_calendar"] : null) == 1)) {
            // line 98
            echo "            eventSources: [
                '";
            // line 99
            echo (isset($context["google_calendar_url"]) ? $context["google_calendar_url"] : null);
            echo "',  //if you want to add more just add URL in this array
                {
                    className: 'gcal-event'           // an option!
                }
            ],
        ";
        }
        // line 105
        echo "
\t\tbuttonText: \t";
        // line 106
        echo (isset($context["button_text"]) ? $context["button_text"] : null);
        echo ",
\t\tmonthNames: \t";
        // line 107
        echo (isset($context["month_names"]) ? $context["month_names"] : null);
        echo ",
\t\tmonthNamesShort:";
        // line 108
        echo (isset($context["month_names_short"]) ? $context["month_names_short"] : null);
        echo ",
\t\tdayNames: \t\t";
        // line 109
        echo (isset($context["day_names"]) ? $context["day_names"] : null);
        echo ",
\t\tdayNamesShort: \t";
        // line 110
        echo (isset($context["day_names_short"]) ? $context["day_names_short"] : null);
        echo ",
        firstHour: 8,
        firstDay: 1,
\t\tselectable\t: true,
\t\tselectHelper: true,

        viewDisplay: function(view) {
            /* When changing the view update the qtips */
            var api = \$('.qtip').qtip('api'); // Access the API of the first tooltip on the page
            if (api) {
                api.destroy();
                //api.render();
            }
        },
\t\t//Add event
\t\tselect: function(start, end, allDay, jsEvent, view) {
\t\t\t//Removing UTC stuff
            var start_date = \$.datepicker.formatDate(\"yy-mm-dd\", start) + \" \" + start.toTimeString().substr(0, 8);
            var end_date  = \$.datepicker.formatDate(\"yy-mm-dd\", end) + \" \" + end.toTimeString().substr(0, 8);

\t\t\t\$('#visible_to_input').show();
\t\t\t\$('#add_as_announcement_div').show();
\t\t\t\$('#visible_to_read_only').hide();

\t\t\t//Cleans the selected attr
\t\t    clean_user_select();

            //Sets the 1st item selected by default
            //\$('#users_to_send_id option').eq(0).attr('selected', 'selected');

\t\t\t//Update chz-select
\t\t\t\$(\"#users_to_send_id\").trigger(\"liszt:updated\");

\t\t\tif (";
        // line 143
        echo (isset($context["can_add_events"]) ? $context["can_add_events"] : null);
        echo " == 1) {
\t\t\t\tvar url = '";
        // line 144
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=add_event&start='+start_date+'&end='+end_date+'&all_day='+allDay+'&view='+view.name;

                var start_date_value = \$.datepicker.formatDate('";
        // line 146
        echo (isset($context["js_format_date"]) ? $context["js_format_date"] : null);
        echo "', start);
                var end_date_value  = \$.datepicker.formatDate('";
        // line 147
        echo (isset($context["js_format_date"]) ? $context["js_format_date"] : null);
        echo "', end);

\t\t\t\t\$('#start_date').html(start_date_value + \" \" +  start.toTimeString().substr(0, 8));

\t\t\t\tif (view.name != 'month') {
\t\t\t\t\t\$('#start_date').html(start_date_value + \" \" +  start.toTimeString().substr(0, 8));
\t\t\t\t\tif (start.toDateString() == end.toDateString()) {
\t\t\t\t\t\t\$('#end_date').html(' - '+end.toTimeString().substr(0, 8));
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#end_date').html(' - '+start_date_value+\" \" + end.toTimeString().substr(0, 8));
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$('#start_date').html(start_date_value);
\t\t\t\t\t\$('#end_date').html(' ');
\t\t\t\t}
\t\t\t\t\$('#color_calendar').html('";
        // line 162
        echo (isset($context["type_label"]) ? $context["type_label"] : null);
        echo "');
\t\t\t\t\$('#color_calendar').removeClass('group_event');
\t\t\t\t\$('#color_calendar').addClass('label_tag');
\t\t\t\t\$('#color_calendar').addClass('";
        // line 165
        echo (isset($context["type_event_class"]) ? $context["type_event_class"] : null);
        echo "');

\t\t\t\tallFields.removeClass( \"ui-state-error\" );

\t\t\t\t\$(\"#dialog-form\").dialog(\"open\");

\t\t\t\t\$(\"#dialog-form\").dialog({
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t'";
        // line 173
        echo get_lang("Add");
        echo "' : function() {
\t\t\t\t\t\t\tvar bValid = true;
\t\t\t\t\t\t\tbValid = bValid && checkLength( title, \"title\", 1, 255 );
\t\t\t\t\t\t\t//bValid = bValid && checkLength( content, \"content\", 1, 255 );

\t\t\t\t\t\t\tvar params = \$(\"#add_event_form\").serialize();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: url+'&'+params,
\t\t\t\t\t\t\t\tsuccess:function(data) {
\t\t\t\t\t\t\t\t\tvar user = \$('#users_to_send_id').val();
                                    if (user.length > 1) {
                                        user = 0;
                                    } else {
                                        user = user[0];
                                    }
                                    var user_length = String(user).length;
                                    if (String(user).substring(0,1) == 'G') {
                                        var user_id = String(user).substring(6,user_length);
                                        var  user_id = \"G:\"+user_id;
                                    } else {
                                        var user_id = String(user).substring(5,user_length);
                                    }
                                    var temp = \"&user_id=\"+user_id;
                                    var position =String(window.location).indexOf(\"&user\");
                                    var url_length = String(window.location).length;
                                    var url = String(window.location).substring(0,position)+temp;
                                    if (position > 0) {
                                     window.location.replace(url);
                                    } else {
                                        url = String(window.location)+temp;
                                        window.location.replace(url);
                                    }
                                \t//calendar.fullCalendar(\"refetchEvents\");
\t\t\t\t\t\t\t\t\t//calendar.fullCalendar(\"rerenderEvents\");
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog(\"close\");
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tclose: function() {
\t\t\t\t\t\t\$(\"#title\").attr('value', '');
\t\t\t\t\t\t\$(\"#content\").attr('value', '');
\t\t\t\t\t}
\t\t\t\t});
\t            //Don't follow the link
\t            return false;
\t\t\t\tcalendar.fullCalendar('unselect');
                //Reload events
                calendar.fullCalendar(\"refetchEvents\");
                calendar.fullCalendar(\"rerenderEvents\");
\t\t\t}
\t\t},
\t\teventRender: function(event, element) {
            if (event.attachment) {
                element.qtip({
                    hide: {
                        delay: 2000
                    },
\t\t            content: event.attachment,
\t\t            position: { at:'top right' , my:'bottom right'},
\t\t        }).removeData('qtip'); // this is an special hack to add multiple qtip in the same target
            }
\t\t\tif (event.description) {
\t\t\t\telement.qtip({
                    hide: {
                        delay: 2000
                    },
\t\t            content: event.description,
\t\t            position: { at:'top left' , my:'bottom left'}
\t\t        });
\t\t\t}
\t    },
\t\teventClick: function(calEvent, jsEvent, view) {
            //var start_date \t= Math.round(calEvent.start.getTime() / 1000);
            var start_date = \$.datepicker.formatDate(\"yy-mm-dd\", calEvent.start) + \" \" + calEvent.start.toTimeString().substr(0, 8);

            if (calEvent.allDay == 1) {
                var end_date \t= '';
            } else {
                var end_date \t= '';
                if (calEvent.end && calEvent.end != '') {
                    //var end_date \t= Math.round(calEvent.end.getTime() / 1000);
                    var end_date  = \$.datepicker.formatDate(\"yy-mm-dd\", calEvent.end) + \" \" + calEvent.end.toTimeString().substr(0, 8);
                }
            }

\t\t\t//Edit event
\t\t\tif (calEvent.editable) {

\t\t\t\t\$('#visible_to_input').hide();
                \$('#add_as_announcement_div').hide();

                ";
        // line 266
        if (((isset($context["type"]) ? $context["type"] : null) != "admin")) {
            // line 267
            echo "                    \$('#visible_to_read_only').show();
                    \$(\"#visible_to_read_only_users\").html(calEvent.sent_to);
\t\t\t\t";
        }
        // line 270
        echo "
                \$('#color_calendar').html('";
        // line 271
        echo (isset($context["type_label"]) ? $context["type_label"] : null);
        echo "');
                \$('#color_calendar').addClass('label_tag');
                \$('#color_calendar').removeClass('course_event');
                \$('#color_calendar').removeClass('personal_event');
                \$('#color_calendar').removeClass('group_event');
                \$('#color_calendar').addClass(calEvent.type+'_event');

                my_start_month = calEvent.start.getMonth() +1;

                \$('#start_date').html(calEvent.start.getDate() +\"/\"+ my_start_month +\"/\"+calEvent.start.getFullYear());

                if (end_date != '') {
                    my_end_month = calEvent.end.getMonth() +1;
                    \$('#end_date').html(' '+calEvent.end.getDate() +\"/\"+ my_end_month +\"/\"+calEvent.end.getFullYear());
                }

                /*\$(\"#title\").attr('value', calEvent.title);
                \$(\"#content\").attr('value', calEvent.description);*/

                \$(\"#title_edit\").html(calEvent.title);
                \$(\"#content_edit\").html(calEvent.description);

                \$(\"#title_edit\").show();
                \$(\"#content_edit\").show();

                \$(\"#title\").hide();
                \$(\"#content\").hide();

\t\t\t\tallFields.removeClass( \"ui-state-error\" );

\t\t\t\t\$(\"#dialog-form\").dialog(\"open\");

\t\t\t\tvar url = '";
        // line 303
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=edit_event&id='+calEvent.id+'&start='+start_date+'&end='+end_date+'&all_day='+calEvent.allDay+'&view='+view.name;
\t\t\t\tvar delete_url = '";
        // line 304
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=delete_event&id='+calEvent.id;

\t\t\t\t\$(\"#dialog-form\").dialog({
\t\t\t\t\tbuttons: {
                        '";
        // line 308
        echo get_lang("ExportiCalConfidential");
        echo "' : function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=confidential\";
                            window.location.href = url;
\t\t\t\t\t\t},
\t\t\t\t\t\t'";
        // line 312
        echo get_lang("ExportiCalPrivate");
        echo "': function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=private\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        '";
        // line 316
        echo get_lang("ExportiCalPublic");
        echo "': function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=public\";
                            window.location.href = url;
\t\t\t\t\t\t},

                        ";
        // line 321
        if (((isset($context["type"]) ? $context["type"] : null) == "not_available")) {
            // line 322
            echo "\t\t\t\t\t\t'";
            echo get_lang("Edit");
            echo "' : function() {

\t\t\t\t\t\t\tvar bValid = true;
\t\t\t\t\t\t\tbValid = bValid && checkLength( title, \"title\", 1, 255 );

\t\t\t\t\t\t\tvar params = \$(\"#add_event_form\").serialize();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: url+'&'+params,
\t\t\t\t\t\t\t\tsuccess:function() {
\t\t\t\t\t\t\t\t\tcalEvent.title \t\t\t= \$(\"#title\").val();
\t\t\t\t\t\t\t\t\tcalEvent.start \t\t\t= calEvent.start;
\t\t\t\t\t\t\t\t\tcalEvent.end \t\t\t= calEvent.end;
\t\t\t\t\t\t\t\t\tcalEvent.allDay         = calEvent.allDay;
\t\t\t\t\t\t\t\t\tcalEvent.description \t= \$(\"#content\").val();

\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('updateEvent',
                                        calEvent,
                                        true // make the event \"stick\"
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog(\"close\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t},
                        ";
        }
        // line 346
        echo "
                        '";
        // line 347
        echo get_lang("Edit");
        echo "' : function() {
                            url =  \"agenda.php?action=edit&type=fromjs&id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"\";
                            window.location.href = url;
                            \$(\"#dialog-form\").dialog( \"close\" );
                        },

\t\t\t\t\t\t'";
        // line 353
        echo get_lang("Delete");
        echo "': function() {
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: delete_url,
\t\t\t\t\t\t\t\tsuccess:function() {
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('removeEvents',
\t\t\t\t\t\t\t\t\t\tcalEvent
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar(\"refetchEvents\");
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar(\"rerenderEvents\");
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog( \"close\" );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tclose: function() {
                        \$(\"#title_edit\").hide();
                        \$(\"#content_edit\").hide();

                        \$(\"#title\").show();
                        \$(\"#content\").show();

\t\t\t\t\t\t\$(\"#title_edit\").html('');
\t\t\t\t\t\t\$(\"#content_edit\").html('');

                        \$(\"#title\").attr('value', '');
                        \$(\"#content\").attr('value', '');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} else {
\t\t\t    //Simple form
                my_start_month = calEvent.start.getMonth() +1;
                \$('#simple_start_date').html(calEvent.start.getDate() +\"/\"+ my_start_month +\"/\"+calEvent.start.getFullYear());

                if (end_date != '') {
                    my_end_month = calEvent.end.getMonth() +1;
                    \$('#simple_start_date').html(calEvent.start.getDate() +\"/\"+ my_start_month +\"/\"+calEvent.start.getFullYear() +\" - \"+calEvent.start.toLocaleTimeString());
                    \$('#simple_end_date').html(' '+calEvent.end.getDate() +\"/\"+ my_end_month +\"/\"+calEvent.end.getFullYear() +\" - \"+calEvent.end.toLocaleTimeString());
                }

                \$(\"#simple_title\").html(calEvent.title);
                \$(\"#simple_content\").html(calEvent.description);
                \$(\"#simple-dialog-form\").dialog(\"open\");

                \$(\"#simple-dialog-form\").dialog({
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t'";
        // line 398
        echo get_lang("ExportiCalConfidential");
        echo "' : function() {
                                url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=confidential\";
                                window.location.href = url;

\t\t\t\t\t\t},
\t\t\t\t\t\t'";
        // line 403
        echo get_lang("ExportiCalPrivate");
        echo "': function() {
                                url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=private\";
                                window.location.href = url;
\t\t\t\t\t\t},
                        '";
        // line 407
        echo get_lang("ExportiCalPublic");
        echo "': function() {
                                url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=public\";
                                window.location.href = url;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

            }
\t\t},
\t\teditable: true,
\t\tevents: \"";
        // line 417
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=get_events\",
\t\teventDrop: function(event, day_delta, minute_delta, all_day, revert_func) {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 420
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "',
\t\t\t\tdata: {
\t\t\t\t\ta:'move_event', id: event.id, day_delta: day_delta, minute_delta: minute_delta
\t\t\t\t}
\t\t\t});
\t\t},
        eventResize: function(event, day_delta, minute_delta, revert_func) {
            \$.ajax({
\t\t\t\turl: '";
        // line 428
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "',
\t\t\t\tdata: {
\t\t\t\t\ta:'resize_event', id: event.id, day_delta: day_delta, minute_delta: minute_delta
\t\t\t\t}
\t\t\t});
        },
\t\taxisFormat: 'HH(:mm)',
\t\ttimeFormat: 'HH:mm{ - HH:mm}',
\t\tloading: function(bool) {
\t\t\tif (bool) \$('#loading').show();
\t\t\telse \$('#loading').hide();
\t\t}
\t});
});
</script>

<div id=\"simple-dialog-form\" style=\"display:none;\">
    <div style=\"width:500px\">
        <form name=\"form-simple\" class=\"form-vertical\" >
            <div class=\"control-group\">
                <label class=\"control-label\"><b>";
        // line 448
        echo get_lang("Date");
        echo "</b></label>
                <div class=\"controls\">
                    <span id=\"simple_start_date\"></span><span id=\"simple_end_date\"></span>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\"><b>";
        // line 454
        echo get_lang("Title");
        echo "</b></label>
                <div class=\"controls\">
                    <div id=\"simple_title\"></div>
                </div>
            </div>

            <div class=\"control-group\">
                <label class=\"control-label\"><b>";
        // line 461
        echo get_lang("Description");
        echo "</b></label>
                <div class=\"controls\">
                    <div id=\"simple_content\"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id=\"dialog-form\" style=\"display:none;\">
\t<div style=\"width:500px\">
\t<form class=\"form-horizontal\" id=\"add_event_form\" name=\"form\">

        ";
        // line 474
        if ((!(null === (isset($context["visible_to"]) ? $context["visible_to"] : null)))) {
            // line 475
            echo "    \t    <div id=\"visible_to_input\" class=\"control-group\">
                <label class=\"control-label\">";
            // line 476
            echo get_lang("To");
            echo "</label>
                <div class=\"controls\">
                    ";
            // line 478
            echo (isset($context["visible_to"]) ? $context["visible_to"] : null);
            echo "
                </div>
            </div>
        ";
        }
        // line 482
        echo "         <div id=\"visible_to_read_only\" class=\"control-group\" style=\"display:none\">
                <label class=\"control-label\">";
        // line 483
        echo get_lang("To");
        echo "</label>
                <div class=\"controls\">
                    <div id=\"visible_to_read_only_users\"></div>
                </div>
         </div>
\t\t<div class=\"control-group\">
            <label class=\"control-label\">";
        // line 489
        echo get_lang("Agenda");
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<div id=\"color_calendar\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"end_date\">";
        // line 495
        echo get_lang("Date");
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<span id=\"start_date\"></span><span id=\"end_date\"></span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"title\">";
        // line 501
        echo get_lang("Title");
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"text\" name=\"title\" id=\"title\" size=\"40\" />
                <span id=\"title_edit\"></span>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"content\">";
        // line 509
        echo get_lang("Description");
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<textarea name=\"content\" id=\"content\" class=\"span3\" rows=\"5\"></textarea>
                <span id=\"content_edit\"></span>
\t\t\t</div>
\t\t</div>

        ";
        // line 516
        if (((isset($context["type"]) ? $context["type"] : null) == "course")) {
            // line 517
            echo "\t\t<div id=\"add_as_announcement_div\">
    \t\t <div class=\"control-group\">
                <label></label>
                <div class=\"controls\">
                    <label class=\"checkbox inline\" for=\"add_as_annonuncement\">
                        ";
            // line 522
            echo get_lang("AddAsAnnouncement");
            echo " (";
            echo get_lang("SendEmail");
            echo ")
                        <input type=\"checkbox\" name=\"add_as_annonuncement\" id=\"add_as_annonuncement\" />
                    </label>
                </div>
            </div>
        </div>
\t\t";
        }
        // line 529
        echo "\t</form>
\t</div>
</div>
<div id=\"loading\" style=\"margin-left:150px;position:absolute;display:none\">";
        // line 532
        echo get_lang("Loading");
        echo "...</div>
<div id=\"calendar\"></div>";
    }

    public function getTemplateName()
    {
        return "default/agenda/month.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 532,  681 => 529,  669 => 522,  662 => 517,  660 => 516,  650 => 509,  639 => 501,  630 => 495,  621 => 489,  612 => 483,  609 => 482,  602 => 478,  597 => 476,  594 => 475,  592 => 474,  576 => 461,  566 => 454,  557 => 448,  534 => 428,  523 => 420,  517 => 417,  504 => 407,  497 => 403,  489 => 398,  441 => 353,  432 => 347,  429 => 346,  401 => 322,  399 => 321,  391 => 316,  384 => 312,  377 => 308,  370 => 304,  366 => 303,  331 => 271,  328 => 270,  323 => 267,  321 => 266,  225 => 173,  214 => 165,  208 => 162,  190 => 147,  186 => 146,  181 => 144,  177 => 143,  141 => 110,  137 => 109,  133 => 108,  129 => 107,  125 => 106,  122 => 105,  113 => 99,  110 => 98,  108 => 97,  28 => 20,  7 => 1,);
    }
}
