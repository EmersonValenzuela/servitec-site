$(function () {
    "use strict";

    $('.subscribe-form').on("submit", function (event) {
        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            email = $.trim($form.find('input[name="email"]').val()),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {"email": email});

        // Put the results in a div
        posting.done(function () {
            $form.html('<h4 class="subscribe-title" style="margin-bottom: 25px; line-height: 56px;">Gracias por la suscripción!</h4>').fadeTo(300, 1);
        });

    });
	
	$('.seo-score-form').on("submit", function (event) {
        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            email = $.trim($form.find('input[name="email"]').val()),
			permalink = ($form.find('input[name="permalink"]').length) ? $.trim($form.find('input[name="permalink"]').val()) : '',
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {'email': email, 'permalink': permalink});

        // Put the results in a div
        posting.done(function () {
            $form.html('<h4 style="color:inherit">Gracias por el mensaje!</h4>').fadeTo(300, 1);
        });

    });

    $('.contact-form').on("submit", function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            name = $.trim($form.find('input[name="name"]').val()),
            email = $.trim($form.find('input[name="email"]').val()),
            permalink = ($form.find('input[name="permalink"]').length) ? $.trim($form.find('input[name="permalink"]').val()) : '',
            subject = ($form.find('input[name="subject"]').length) ? $.trim($form.find('input[name="subject"]').val()) : '',
            phone = ($form.find('input[name="phone"]').length) ? $.trim($form.find('input[name="phone"]').val()) : '',
            company = ($form.find('input[name="company"]').length) ? $.trim($form.find('input[name="company"]').val()) : '',
            message = $.trim($form.find('textarea[name="message"]').val()),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {'name': name, 'email': email, 'subject': subject, 'message': message, 'company': company, 'phone': phone, 'permalink': permalink})

        // Put the results in a div
        posting.done(function () {
            $form.html('<h4>Gracias por la suscripción!</h4>').fadeTo(300, 1);
        });

    });
        $('.contact').on("submit", function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            name = $.trim($form.find('input[name="name"]').val()),
            email = $.trim($form.find('input[name="email"]').val()),
            phone = ($form.find('input[name="phone"]').length) ? $.trim($form.find('input[name="phone"]').val()) : '',
            message = $.trim($form.find('textarea[name="message"]').val()),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {'name': name, 'email': email, 'phone': phone, 'message': message})

        // Put the results in a div
        posting.done(function () {
            alert("Enviado Correctamente");
        });

    });

});


$('#prime').click(function() {
  toggleFab();
});


//Toggle chat and links
function toggleFab() {
  $('.prime').toggleClass('zmdi-comment-outline');
  $('.prime').toggleClass('zmdi-close');
  $('.prime').toggleClass('is-active');
  $('.prime').toggleClass('is-visible');
  $('#prime').toggleClass('is-float');
  $('.chat').toggleClass('is-visible');
  $('.fab').toggleClass('is-visible');
  
}

  $('#chat_first_screen').click(function(e) {
        hideChat(1);
  });

  $('#chat_second_screen').click(function(e) {
        hideChat(2);
  });

  $('#chat_third_screen').click(function(e) {
        hideChat(3);
  });

  $('#chat_fourth_screen').click(function(e) {
        hideChat(4);
  });

  $('#chat_fullscreen_loader').click(function(e) {
      $('.fullscreen').toggleClass('zmdi-window-maximize');
      $('.fullscreen').toggleClass('zmdi-window-restore');
      $('.chat').toggleClass('chat_fullscreen');
      $('.fab').toggleClass('is-hide');
      $('.header_img').toggleClass('change_img');
      $('.img_container').toggleClass('change_img');
      $('.chat_header').toggleClass('chat_header2');
      $('.fab_field').toggleClass('fab_field2');
      $('.chat_converse').toggleClass('chat_converse2');
      //$('#chat_converse').css('display', 'none');
     // $('#chat_body').css('display', 'none');
     // $('#chat_form').css('display', 'none');
     // $('.chat_login').css('display', 'none');
     // $('#chat_fullscreen').css('display', 'block');
  });

function hideChat(hide) {
    switch (hide) {
      case 0:
            $('#chat_converse').css('display', 'none');
            $('#chat_body').css('display', 'none');
            $('#chat_form').css('display', 'none');
            $('.chat_login').css('display', 'block');
            $('.chat_fullscreen_loader').css('display', 'none');
             $('#chat_fullscreen').css('display', 'none');
            break;
      case 1:
            $('#chat_converse').css('display', 'block');
            $('#chat_body').css('display', 'none');
            $('#chat_form').css('display', 'none');
            $('.chat_login').css('display', 'none');
            $('.chat_fullscreen_loader').css('display', 'block');
            break;
      case 2:
            $('#chat_converse').css('display', 'none');
            $('#chat_body').css('display', 'block');
            $('#chat_form').css('display', 'none');
            $('.chat_login').css('display', 'none');
            $('.chat_fullscreen_loader').css('display', 'block');
            break;
      case 3:
            $('#chat_converse').css('display', 'none');
            $('#chat_body').css('display', 'none');
            $('#chat_form').css('display', 'block');
            $('.chat_login').css('display', 'none');
            $('.chat_fullscreen_loader').css('display', 'block');
            break;
      case 4:
            $('#chat_converse').css('display', 'none');
            $('#chat_body').css('display', 'none');
            $('#chat_form').css('display', 'none');
            $('.chat_login').css('display', 'none');
            $('.chat_fullscreen_loader').css('display', 'block');
            $('#chat_fullscreen').css('display', 'block');
            break;
    }
}


