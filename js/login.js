$(document).ready(function() {
    const $login_form = $('#login_form');
    let validator = void(0);

    if ($login_form.length) {
        validator = $login_form.validate({
            rules: {
                reg_email: {
                    required: true,
                    email: true
                },
                reg_password: {
                    required: true,
                },
            },
            messages: {
                reg_email: {
                    required: "Unesite email",
                    email: "E-mail nije validan."
                },
                reg_password: {
                    required: "Unesite sifru"
                },
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: "admin/php_assets/register_function/login_function.php",
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;

                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: "Error",
                                text: str,
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                title: "Uspesno",
                                text: str,
                                showCancelButton: false,
                                showConfirmButton: true,
                                type: "success",
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            }, function(isConfirm) {
                                if (!isConfirm) return;
                                $('#login_form')[0].reset();
                                window.location.replace('admin/admin_blog.php')
                            });
                        }
                    }
                });
            }
        });

    }

});