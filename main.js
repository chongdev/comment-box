$(function () {

    $('#input-text').autosize();


    var $form = $('#box');
    $form.submit( function (evt) { 
        evt.preventDefault();


        $form.addClass( 'has-loading' )
        $form.find( '[type=submit]' ).prop( 'disabled', true );

        setTimeout(function () {
            
            $form.addClass( 'is-done' ).html( '<div class="text-center p-5"><div class="swal2-icon swal2-success swal2-animate-success-icon"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div><span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span><div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div><div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div></div><h2 class="swal2-title" id="swal2-title">ขอบคุณที่แสดงความคิดเห็น</h2></div>' );

        }, 1800);
    });


});