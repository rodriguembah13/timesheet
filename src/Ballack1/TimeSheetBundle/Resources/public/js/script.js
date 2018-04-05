/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function ()
{
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        defaultDate: '2018-03-12',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        eventSources: [

            // your event source
            {
                url: 'http://localhost/timesheet/Symfony/web/app_dev.php/api/absence_rest',
            }

        ],
         eventRender: function (event, element) {
            var tooltip = event.description;
            $(element).attr("data-original-title", tooltip)
            $(element).tooltip({ container: "body"})
        },

    });
    $('#calendar_collegue').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        defaultDate: '2018-03-12',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        eventSources: [

            // your event source
            {
                url: 'http://localhost/timesheet/Symfony/web/app_dev.php/api/absence_collegue_rest',
            }

        ],
        eventRender: function (event, element) {
            var tooltip = event.description;
            $(element).attr("data-original-title", tooltip)
            $(element).tooltip({ container: "body"})
        },
        loading: function( isLoading) {
            if(isLoading) {// isLoading gives boolean value
                $('#loading').show();

            } else {
                $('#loading').hide();
            }
        },
    });


});