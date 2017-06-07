function initializeJS() {

    //tool tips
    jQuery('.tooltips').tooltip();

    //popovers
    jQuery('.popovers').popover();

    //custom scrollbar
        //for html
    jQuery("html").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '6', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: '', zindex: '1000'});
        //for sidebar
    jQuery("#sidebar").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});
        // for scroll panel
    jQuery(".scroll-panel").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});
    
    //sidebar dropdown menu
    jQuery('#sidebar .sub-menu > a').click(function () {
        var last = jQuery('.sub-menu.open', jQuery('#sidebar'));        
        jQuery('.menu-arrow').removeClass('arrow_carrot-right');
        jQuery('.sub', last).slideUp(200);
        var sub = jQuery(this).next();
        if (sub.is(":visible")) {
            jQuery('.menu-arrow').addClass('arrow_carrot-right');            
            sub.slideUp(200);
        } else {
            jQuery('.menu-arrow').addClass('arrow_carrot-down');            
            sub.slideDown(200);
        }
        var o = (jQuery(this).offset());
        diff = 200 - o.top;
        if(diff>0)
            jQuery("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            jQuery("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

    // sidebar menu toggle
    jQuery(function() {
        function responsiveView() {
            var wSize = jQuery(window).width();
            if (wSize <= 768) {
                jQuery('#container').addClass('sidebar-close');
                jQuery('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                jQuery('#container').removeClass('sidebar-close');
                jQuery('#sidebar > ul').show();
            }
        }
        jQuery(window).on('load', responsiveView);
        jQuery(window).on('resize', responsiveView);
    });

    jQuery('.toggle-nav').click(function () {
        if (jQuery('#sidebar > ul').is(":visible") === true) {
            jQuery('#main-content').css({
                'margin-left': '0px'
            });
            jQuery('#sidebar').css({
                'margin-left': '-180px'
            });
            jQuery('#sidebar > ul').hide();
            jQuery("#container").addClass("sidebar-closed");
        } else {
            jQuery('#main-content').css({
                'margin-left': '180px'
            });
            jQuery('#sidebar > ul').show();
            jQuery('#sidebar').css({
                'margin-left': '0'
            });
            jQuery("#container").removeClass("sidebar-closed");
        }
    });

    //bar chart
    if (jQuery(".custom-custom-bar-chart")) {
        jQuery(".bar").each(function () {
            var i = jQuery(this).find(".value").html();
            jQuery(this).find(".value").html("");
            jQuery(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }

}

jQuery(document).ready(function(){
    initializeJS();
});


$('document').ready(function(){


    $('.save-sub-cat').on('click',function(e){

        // e.preventDefault();

        var name       = $('.sub_name').val();
        var desc       = $('.sub_desc').val();
        var service_id = $('.service_id').val();
        var btn = $(this);


        // $('.error').html('');

        $('.name-error').html('');
        $('.desc-error').html('');
        $('.service_id-error').html('');
        var check = true;
       
        if (name=='') {

             $('.name-error').html('Please provide a subservice name');
            check =  false;
        }
        if (desc=='') {

             $('.desc-error').html('Please provide a description');
             check =  false;
        }
        if (service_id=='') {

             $('.service_id-error').html('Please choose a service');
             check =  false;
        }


        if (check==false) {

            return false;
        }
       
        

        $.ajax({

            url :"ajax.php",
            
            type: 'POST',
            
            data : {'sub_service':'create',name:name,desc:desc,service_id:service_id},
            
            beforeSend :  function(){
                // $('.form-loader').show();
                // $('.create-cat').attr('disabled','disabled');
                btn.after('<img src="img/loader.gif" class="ajax-loader">');

            },

            success :function(html) {

                $('.ajax-loader').hide();
                 console.log(html);
                // $('.create-cat').removeAttr('disabled');
                // $('.form-loader').hide();

               

                if (html=='false') {

                    alert('there was an error, try later !');
                    return ;
                
                  } else {

                    $('.success-msg').html('Successfully created sub service <a href="subservice_list.php"> Go Back</a>');
                    $('.success-msg').show()
                    

                    
                }
                
            }


        });

        return false;
    });


    $('.delete-subcat').on('click',function(){

        var btn = $(this);
        var id = $(this).attr('data-subId');

        if (id=='') {

            alert('Error occured, try later !');
            return false;
        }

       $.ajax({

            url :"ajax.php",
            
            type: 'POST',
            
            data : {'sub_service':'delete',id:id},
            
            beforeSend :  function(){
               
                 btn.before('<img src="img/loader.gif" class="ajax-loader">');

            },

            success :function(html) {

                $('.ajax-loader').hide();
                 console.log(html);
                
               

                if (html=='success') {

                    $('#row_'+id).fadeOut();
                    $('.success-msg').html('Successfully deleted sub service ');
                    $('.success-msg').show();
                    $('.success-msg').fadeOut(800);
                
                  } else {

                   
                    alert('there was an error, try later !');
                    return ;

                    

                    
                }
                
            }


        });


    });




});