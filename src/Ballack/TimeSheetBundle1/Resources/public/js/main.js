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