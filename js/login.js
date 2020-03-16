/*  there are other libraries that could use "$" - so it is 100% save to use "jQuery" instead of "$"
 if you don't use any other libraries than jQuery you could still go with "$"
 so the following line would be
 $(document).ready(function() {
 */
jQuery(document).ready(function() {

    var registerModal = $('#registerModal');

    $('.registerOverlay').click(function(e) {
        e.preventDefault();

        registerModal.modal('show');
    });


    //this is that we are able to trigger a submit although a button was clicked outside of your form!
    registerModal.find('.btn-primary').click(function() {
        registerModal.find('form').trigger('submit', [this]);
    });

    //so we have some input fields
    registerModal.find('form').bind('submit', function(e, that) {
        e.preventDefault();

        registerModal.find('.btn-primary').prop('disabled', true); //prevent sending the formular again while we check it

        if(typeof that === 'undefined') {
            that = registerModal.find('.btn-primary').get(0);
        }

        if(this.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();

            if($('#name').val() === '') {
                $('#name').siblings('.invalid-feedback').text('Nutzername darf nicht leer sein!');
            }

            registerModal.find('.btn-primary').prop('disabled', false);
            jQuery(this).addClass('was-validated');

        } else {
            if($('#pwd').val() !== $('#pwd2').val()) {
                e.preventDefault();
                e.stopPropagation();
                $('#pwd').focus();

                $('#pwd2')[0].setCustomValidity('Passwörter müssen übereinstimmen!');
                registerModal.find('.btn-primary').prop('disabled', false);

                jQuery(this).addClass('was-validated');

                return false;
            }
            else {
                $.ajax({
                    'url': $(this).attr('action'),
                    'method': $(this).attr('method'),
                    'data': $(this).serialize(),
                    'dataType': "json",
                    'success': function (receivedData) {

                        if(receivedData.result)
                        {
                            toastr.success(receivedData.message);

                            window.setTimeout(function() {
                                location.reload();
                            }, 2500);

                        }
                        else
                        {
                            registerModal.find('.form-group').removeClass('has-error');

                            $.each(receivedData.data.errorFields, function(key, value) {
                                $('#'+key).addClass('is-invalid');

                                if(key == 'name') {
                                    $('#name').siblings('.invalid-feedback').text('Nutzername ist schon vorhanden!');
                                }
                            });
                        }

                        registerModal.find('.btn-primary').prop('disabled', false);
                    }
                });
            }

        }

        //jQuery(this).addClass('was-validated');



        registerModal.find('.btn-primary').prop('disabled', false);


    });



});