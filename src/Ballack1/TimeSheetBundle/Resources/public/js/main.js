/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $('#side-menu').metisMenu();
//    $('#search').keyup(function(key)
//    {
//        if(this.value.length >= 3 || this.value == '') {
//            $('#loader').show();
//          }
//    });
});

$(document).ready(function ()
{
/*
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

                url: 'http://localhost/timesheet/Symfony/web/app_dev.php/api/absence_rest', // use the `url` property

            }

            // any other sources...

        ],
        /!*eventRender: function (event, element) {
            element.attr('href', 'javascript:void(0);');
            element.click(function() {

                $("#eventContent").dialog({ modal: true, title: event.title, width:350});
            });
        },*!/ eventRender: function (event, element) {
            var tooltip = event.description;
            $(element).attr("data-original-title", tooltip)
            $(element).tooltip({ container: "body"})
        },

/!*        events: [
            {
                title: 'All Day Event',
                start: '2018-03-01'
            },
            {
                title: 'Long Event',
                start: '2018-03-07',
                end: '2018-03-10'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2018-03-09T16:00:00'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2018-03-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2018-03-11',
                end: '2018-03-13'
            },
            {
                title: 'Meeting',
                start: '2018-03-12T10:30:00',
                end: '2018-03-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2018-03-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2018-03-12T14:30:00'
            },
            {
                title: 'Happy Hour',
                start: '2018-03-12T17:30:00'
            },
            {
                title: 'Dinner',
                start: '2018-03-12T20:00:00'
            },
            {
                title: 'Birthday Party',
                start: '2018-03-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2018-03-28'
            }
        ]*!/
    });
*/
    $(".form_datetime").datetimepicker({
        format: "YYYY-MM-DD  HH:mm"
    });
    $('#dataTables-example').DataTable({
            responsive: true,pageLength: 3,
        });
        $('.date').datepicker({
            showOn:'button',buttonImageOnly:'true',changeMonth:'true',changeYear:'true',dateFormat:'yy-mm-dd',yearRange:"-0:+1"
        });
     $(".sui").click(function (e) {
                        e.preventDefault();
                        theHREF = $(this).attr("href");
                         $('#loader').show();
                         window.location.href=theHREF;
                         //$('#loader').hide();
                    });
    $('.search input[type="submit"]').hide();

    $('#search').keyup(function (key)
    {
        if (this.value.length >= 3) {
        $('#loader').show();
        
                $.ajax({
                url:"http://127.0.0.1:88/TimeSheet/web/app_dev.php/search/" + this.value,
                        method:"GET",
                        
                        success:function (data) {
                            $('#loader').hide();
                            $('#table').val(data);
                        }
                });
        } else{
        $('#loader').hide();
    }
    });
});