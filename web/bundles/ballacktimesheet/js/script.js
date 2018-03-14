/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function ()
{
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