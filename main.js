$(function () {

    $('#input-text').autosize();


    $('body').delegate('[data-action=close-tab-window]', 'click', function(evt) {
        evt.preventDefault();
        
        window.close();
    });

    var $form = $('#box');
    $form.submit( function (evt) { 
        evt.preventDefault();

        $form.addClass( 'has-loading' )
        $form.find( '[type=submit]' ).prop( 'disabled', true );

        $.each($form.find( ':input' ), function (indexInArray, valueOfElement) { 
            if( $(this).val()!='' ){
                $(this).addClass('form-textbox-entered');
            }
        });

        $form.find( ':input' ).prop( 'disabled', true );


        setTimeout(function () {
            
            // $form.find( ':input.form-textbox-entered' ).removeClass('form-textbox-entered').prop( 'disabled', false );

            $form.addClass( 'is-done' ).html( '<div class="text-center p-5">'+


                '<div class="swal2-icon swal2-success swal2-animate-success-icon"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div><span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span><div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div><div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div></div>' +
                
                '<h2 class="swal2-title" id="swal2-title">ขอบคุณที่แสดงความคิดเห็น</h2>'+
                
                '<div class="swal2-actions" style="display: flex;">'+
                    '<button type="button" class="btn btn-outline-secondary btn-lg" aria-label="ปิดหน้านี้" data-action="close-tab-window">ปิดหน้านี้</button>' +
                '</div>' +

            '</div>' );

        }, 1800);
    });


});