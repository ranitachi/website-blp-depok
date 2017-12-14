"use strict";

$(function(){
    
    function new_external_event(){
        var et = $("#new-event-text").val();
        if (et != '') {
            $("#external-events").prepend('<a class="list-group-item external-event">' + et + '</a>');
            prepare_external_list();
        }
    }
    function prepare_external_list(){
                    
        $('#external-events .external-event').each(function () {
            var eventObject = {title: $.trim($(this).text())};

            $(this).data('eventObject', eventObject);
            $(this).draggable({
                zIndex: 999,
                revert: true,
                revertDuration: 0
            });
        });

    }


    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    prepare_external_list();

    var calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonIcons: {
            prev: 'icon-chevron-left',
            next: 'icon-chevron-right',
            prevYear: 'icon-chevron-left',
            nextYear: 'icon-chevron-right'
        },
        editable: true,
        eventSources: {url: "assets/html/calendar_ajax.html"},
        droppable: true,
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                calendar.fullCalendar('renderEvent',{title: title,start: start,end: end,allDay: allDay},true);
            }
            calendar.fullCalendar('unselect');
        },
        drop: function (date, allDay) {

            var originalEventObject = $(this).data('eventObject');

            var copiedEventObject = $.extend({}, originalEventObject);

            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);


            if ($('#drop-remove').is(':checked')) {
                $(this).remove();
            }

        }
    });

    $("#new-event").on("click", function () {
        new_external_event();
        return false;
    });
    $("#new-event-form").on("submit",function(){
        new_external_event();
        return false;
    });
});