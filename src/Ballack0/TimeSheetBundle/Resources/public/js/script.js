/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    $('#side-menu').metisMenu();
});

$(document).ready( function() {
    if (!jQuery('body').hasClass('searching')) {
        $('#search').keyup(function (e) {
            var contenu = $('#mot_cle').val();
            $('#results').html('');
            if (contenu.length > 2) {
                jQuery('#table').addClass('miniload');
                jQuery('#table').append('<div id="chargement">Chargement...<div id="spinner" class="spinner"></div></div>');
                setTimeout(function() {
                    $.ajax({
                        type: 'GET',
                        url: "{{ path('employe_search') }}",
                        data: 'mot_cle=' + contenu,
                        success: function (data) {
                            jQuery('body').addClass('searching');
                            $('#results').html('');
                            jQuery('#chargement').remove();
                            $('#table').html(data);
                            return;
                        },
                        complete : function(){
                            jQuery('#chargement').remove();
                            return jQuery('body').removeClass('searching');
                        }
                    });
                }, 1000);
            }
        });
    }
});