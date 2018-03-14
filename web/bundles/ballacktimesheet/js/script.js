/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
//    $('#search').keyup(function(key)
//    {
//        if(this.value.length >= 3 || this.value == '') {
//            $('#loader').show();
//          }
//    });
});

$(document).ready(function ()
{
   /* jQuery('.datepicker').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true,
    });*/
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
    $(".datepicker").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "2013-02-14 10:00",
        minuteStep: 10
    });
    $('[data-datetimepicker]').datetimepicker({
        widgetPositioning:{
            vertical: '{{v}}',
            horizontal: '{{h}}'
        }
    });
    $('input[data-click-target]').focus();
    $('span[data-click-target]').click();
  /*  $('.form_datetime').datepicker({
        locale: 'fr'
    });*/
    $('#side-menu').metisMenu();
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