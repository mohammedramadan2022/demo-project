(function ($) {
    window.crud_ajax_setup = function () {
        $.ajaxSetup({ // to send CSRF with ajax request.
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    };

    window.setAlertDeleteObject = function (deleteMessage, deleteMessageTitle) {
        return {
            title: deleteMessage,
            text: deleteMessageTitle,
            icon: "warning",
            buttons: ["إلغاء", "متأكد"],
            dangerMode: true
        };
    }

    window.showModal = function(response, className) {
        let siteModel = $('div#site-modals');

        siteModel.html(response);

        if (response.requestStatus && response.requestStatus === false) {
            siteModel.html('');
            return;
        }

        $('#' + className).modal('show');
    }

    window.setAlertObject = function (message, text, icon= 'success', isDanger = false) {
        return {title: message, text: text, icon: icon, buttons: true, dangerMode: isDanger};
    }

    window.displayLocation = function(latitude, longitude) {
        let request = new XMLHttpRequest();
        let map_api_key = $('meta[name="map_api_key"]').attr('content');
        let method = 'GET';
        let url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${map_api_key}&language=ar`;
        let async = true;
        request.open(method, url, async);
        request.onreadystatechange = function(){
            if(request.readyState === 4 && request.status === 200){
                let data = JSON.parse(request.responseText);

                if(data.status === 'REQUEST_DENIED') { console.log(data.error_message); return; }

                let address = data.results[0];

                $('#searchmap').val(address);
            }
        };
        request.send();
    }

    crud_ajax_setup();

    window.originPath = $('meta[name="http-root"]').attr('content'); // hold the correct current domain.

    window.locale = $('html').attr('lang'); // hold the current locale.

    let bodySelector = $('body');

    bodySelector.on('submit','form.ajax',function (e) {
        e.preventDefault();

        let form = $(this);

        let formButton = $('input[type=submit]');

        formButton.attr('disabled',false);

        form.prop('disabled','false');

        let progressBar = $('.progress-bar');

        let progressBarEl = $('.progress');

        if ($('.js-ckeditor').length) $.each(CKEDITOR.instances, (key, value) => value.updateElement());

        let formInputs = $(form.find(':input.form-data'));

        let formData = new FormData();

        formInputs.each(function (index, el) {
            let formInput = $(el);

            if (formInput.attr('type') === 'file' && formInput.attr('name').indexOf('[]') >= 0)
            {
                if (formInput[0].files[0])
                {
                    for (let i = 0; i < formInput[0].files.length; i++) {
                        formData.append(formInput.attr('name'), formInput[0].files[i]);
                    }
                }
                else
                {
                    formData.append(formInput.attr('name'), formInput.val());
                }
            }
            else if (formInput.attr('type') === 'file')
            {
                if (formInput.val()) {
                    formData.append(formInput.attr('name'), formInput[0].files[0]);
                }
            }
            else if (formInput[0].type === 'select-multiple')
            {
                if (formInput.val()) {
                    for (let i = 0; i < formInput.val().length; i++) {
                        formData.append(formInput.attr('name'), formInput.val()[i]);
                    }
                }
            }
            else if (formInput[0].type === 'radio' || formInput[0].type === 'checkbox')
            {
                if (formInput.is(':checked'))
                {
                    formData.append(formInput.attr('name'), formInput.val());
                }
                else
                {
                    if (formInput[0].type === 'checkbox') formData.append(formInput.attr('name'), '');
                }
            }
            else
            {
                formData.append(formInput.attr('name'), formInput.val());
            }
        });

        if (form.find('input[name="_method"]').length) formData.append('_method', form.find('input[name="_method"]').val());

        if (form.find('input[name="_token"]').length) formData.append('_token', form.find('input[name="_token"]').val());

        $('.flash-messages').remove();
        $('#ajax-messages').html('');
        $('.val-error').remove();
        $('.nav-tab-title-js').removeClass('text-danger'); // for form wizard tabs.
        $('.is-invalid').removeClass('is-invalid');
        $('.select2-selection.select2-selection--single').css('border', '');
        $('div.dropify-wrapper').css('border-color', '');

        $('form.ajax').ajaxSubmit({
            beforeSubmit: (formData, formObject, formOptions) => HoldOn.open(),
            beforeSend: () => {},
            uploadProgress: function (event, position, total, percentComplete) {
                HoldOn.close();
                progressBarEl.fadeIn();
                progressBar.css('width', percentComplete + '%');
                progressBar.html(percentComplete + '%');
            },
            success: function (response) {
                if (response.requestStatus)
                {
                    if (form.hasClass('edit'))
                    {
                        if (response.data !== undefined) {
                            let data = response.data;

                            if (data.images !== undefined) {
                                $.each(data.images, function (inputName, inputData) {
                                    if (inputData.type === 'single') {
                                        if (inputData.imageName) {
                                            let imgContainer = $('input[name="' + inputName + '"]').parents('div.img-media').find('div.img-container');

                                            if (imgContainer.find('a.single-image').length) {

                                                let smallImage = form.find('img.' + inputName + '-small-image');

                                                if (smallImage.data('imgName') !== inputData.imageName) {

                                                    smallImage.attr('src', inputData.smImgUrl);
                                                    smallImage.data('imgName', inputData.imageName);
                                                    smallImage.parent('a.single-image').data('imgHref', inputData.imageHref);
                                                }
                                            } else {
                                                let imageCard = `
                                                    <a
                                                        class='single-image'
                                                        style='cursor: pointer;'
                                                        data-popup='tooltip'
                                                        data-img-href='${inputData.imageHref}'
                                                        data-placement='bottom'
                                                        data-original-title='View'>

                                                        <img src='${inputData.smImgUrl}' data-img-name='${inputData.imageName}' class='${inputName}-small-image img-responsive' alt="">
                                                    </a>
                                                `;
                                                imgContainer.html(imageCard);
                                            }

                                            // for admin profile image changes in sidebar.
                                            if (form.hasClass('admin-profile') && inputName === 'image') {
                                                $('div.side-header img.profile-img').attr('src', inputData.sideImgUrl);
                                                // $('div.sidebar-user img.user-profile-img').parent('a').addClass('show-user-image');
                                            }
                                        }

                                    } else if (inputData.type === 'multiple') {
                                        let realInputName = inputName + '[]'; // its multiple files ( array )
                                        if (Object.keys(data.images[inputName].images).length) {
                                            $.each(data.images[inputName].images, function (key, value) {

                                                let imagesHref = $('input[name="' + realInputName + '"]').siblings('input#' + inputName + '-href').val() + '/' + key;

                                                if ($('#' + inputName + '-additional-images img#img-' + key).length === 0) {
                                                    let additionalImageDiv = `
                                                            <div class="col-xs-4 gallery-img-${key}">
                                                                <a class='img-link additional-imgs-item' data-img-href = '${imagesHref}' data-img-id='${key}' data-popup='tooltip' data-popup='tooltip' data-placement='bottom' data-original-title='View' style="cursor: pointer;">
                                                                    <img class="img-responsive" id='img-${key}' src='${data.images[inputName].thumbUrl}/${value}' >
                                                                </a>
                                                            </div>`;

                                                    $('#' + inputName + '-additional-images').find('.js-gallery').append(additionalImageDiv);
                                                }

                                            });
                                        }
                                    }
                                    $('[data-popup="tooltip"]').tooltip();
                                });
                            }

                            // for admin profile image changes in sidebar.
                            if (form.hasClass('admin-profile')) {
                                $('div.side-header .profile-name').html(form.find('input[name=name]').val());
                            }

                            form.find('input[type=password]').val('');
                        }

                        // $('#ajax-messages').html("<div class='alert alert-success alert-styled-left alert-arrow-left alert-bordered'><button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button><p>" + response.message + "</p></div>");
                        $.NotificationApp.send("رسالة", response.message,"top-left","#64768d","info");
                    }
                    else
                    {
                        // create forms.
                        form.trigger("reset");
                        $('.dropify-preview').css('display', 'none');
                        $('div.dropify-wrapper').css('border-color', '');
                        form.find('select').val('').trigger('change');
                        form.find('select').parent('div.form-valid').children('span').css('border', '');

                        if ($('.js-ckeditor').length) {
                            $.each(CKEDITOR.instances, function (key, value) {
                                value.setData('');
                            });
                        }

                        if (response.redirect !== undefined)
                        {
                            window.location = originPath + '/' + locale + '/' + response.redirect;
                        }
                        else
                        {
                            $.NotificationApp.send("رسالة", response.message, "top-left", "#44cab4", "info");
                            // $('#ajax-messages').html("<div class='alert alert-primary text-center alert-styled-left alert-arrow-left alert-bordered'><button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button>" + response.message + "</div>");
                            // $("html, body").animate({ scrollTop: 0}, "slow");
                        }
                    }

                    if (form.find('input[type="file"]').length) {

                        form.find('input[type="file"]').val('');

                        let fileInputs = form.find('input[type="file"]')
                            .parents('.form-group')
                            .find('span.filename');

                        for (let i = 0; i < fileInputs.length; i++) {
                            form.find('input[type="file"]')
                                .parents('.form-group')
                                .find('span.filename')[i].innerHTML = "No file selected";
                        }
                    }

                    /**** callback here ****/

                    /**** callback End ****/
                }
                else
                {
                    // $('#ajax-messages').html("<div class='alert alert-danger alert-styled-left alert-bordered'><button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button><p>" + response.message + "</p></div>");
                    crud_handle_server_errors(response, form);
                }
            },
            error: data => crud_handle_server_errors(data, form),
            complete: data => {
                progressBarEl.fadeOut();
                formButton.attr('disabled',false);
                HoldOn.close();
            },
        });

        return false;
    });

    window.crud_handle_validation_errors = function (data, form = null) {
        // $('#ajax-messages').html("<div class='alert alert-danger alert-styled-left alert-bordered'><button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button><p>تحقق من القيم المدخلة.</p></div>");
        let message = ((locale === 'ar') ? 'خطأ في المدخلات' : 'Validation error');

        $.NotificationApp.send("خطأ", message,"top-left","#bf441d","error");

        let errors = data.responseJSON.errors;

        $.each(errors, function (key, value) {
            let input = (form != null) ? form.find(':input[name="' + key + '"]') : $(':input[name="' + key + '"]');

            if (input.length === 0)
            {
                input = $(':input[name="' + key + '[]"]'); // for multiple inputs
            }

            if (input.length === 0 && key.indexOf(".") !== -1)
            {
                // for multiple inputs nested names
                let nestedNames = key.split(".");
                let inputName = '';

                for (let i = 0; i < nestedNames.length; i++)
                {
                    inputName += (i !== 0) ? '[' + nestedNames[i] + ']' : nestedNames[i];
                }

                input = form != null ? form.find(':input[name="' + inputName + '"]') : $(':input[name="' + inputName + '"]');
            }

            if (input.length)
            {
                if (input[0].nodeName === 'TEXTAREA')
                {
                    input.parent('div.form-valid').children('TEXTAREA').addClass('is-invalid');
                    input.parent('div.form-valid ').after("<div class='help-block text-right animated fadeInDown val-error'>" + value[0] + "</div>");
                    input.next('div#cke_' + input[0].id).css('border-color', 'red');
                }

                else if (input.attr('type') === 'file')
                {
                    let dropifyErrors = $('.dropify-errors-container');
                    dropifyErrors.html('');
                    dropifyErrors.append(`<ul><li>${value[0]}</li></ul>`);
                    input.val('');
                    input.parent().css('border-color','red');
                    // input.parent('div.form-valid').children('input').addClass('is-invalid');
                    // input.parent('div.form-valid').after("<div class='help-block text-left animated fadeInDown val-error'>" + value[0] + "</div>");
                }
                else if(input[0].nodeName === 'SELECT')
                {
                    input.parent('div.form-valid').children('span').css('border', '1px solid #f0643b');
                    input.parent('div.form-valid ').after("<div class='help-block text-right animated fadeInDown val-error'>" + value[0] + "</div>");
                }
                else
                {
                    input.parent('div.form-valid').children('input').addClass('is-invalid');

                    if (input.hasClass('js-colorpicker')) // for color picker inputs.
                    {
                        input.parents('div.js-colorpicker ').after("<div class='help-block text-right animated fadeInDown val-error' style='color:#d26a5c;'>" + value[0] + "</div>");
                    }
                    else
                    {
                        input.parent('div.form-valid ').after("<div class='help-block text-right animated fadeInDown val-error'>" + value[0] + "</div>");
                        input.parent('label').parent().parent('div.form-valid ').after("<div class='help-block text-center animated fadeInDown val-error'>" + value[0] + "</div>");
                        input.parent('label').parent('div.form-valid ').after("<div class='help-block text-center animated fadeInDown val-error'>" + value[0] + "</div>");
                    }
                }

                // for form wizard tabs.
                if (input.parents('.nav-tabs').length)
                {
                    let tabPane = input.parents('.nav-tabs');

                    let navTab = $('a[href="#' + $(tabPane[0]).attr('id') + '"]');

                    navTab.find('.nav-tab-title-js').css('border', '2px solid red');

                    if (navTab.find('.val-error-icon').length === 0)
                    {
                        navTab.find('.nav-tab-title-js').after(' <i class="fa fa-exclamation-circle text-danger is-invalid val-error-icon"></i>')
                    }
                }
                //End wizard tabs.
            }
            else
            {
                console.log(key + ' input not found to show its error validation');
            }
        });
    };

    // send delete action request using bootbox and ajax.
    $(".table-delete-action").on("click",".delete-action",function () {
            let clickedBtn = $(this);

            let datatable = clickedBtn.parents('table').dataTable();

            bootbox.confirm({
                title: "<div class='text-center'>" + Lang.get('responseMessages.confirmation') + "</div>",
                message: "<div>" + Lang.get('responseMessages.confirm-deletion') + "</div>",
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> ' + Lang.get('responseMessages.cancel')
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> ' + Lang.get('responseMessages.confirm'),
                        className: "btn-danger"
                    }
                },
                callback: function (result) {
                    if (!result) return;

                    $.ajax({
                        url: clickedBtn.attr("href"),
                        method: "POST",
                        data: { "_method": "DELETE" },
                        success: function (responseData)
                        {
                            if (responseData.deleteStatus)
                            {
                                let clickedTr = clickedBtn.parents('tr');
                                clickedTr.fadeOut('slow', function () {
                                    datatable.fnDeleteRow($(this)); //this for clickedTr
                                });
                            }
                            else
                            {
                                let errorMsg = responseData.error;
                                bootbox.alert({
                                    size: "small",
                                    title: "<p class='text-danger'>" + Lang.get('responseMessages.error') + "</p>",
                                    message: "<p class='text-danger'>" + errorMsg + "<p>",
                                    buttons: {
                                        ok: {
                                            label: '<i class="fa fa-check"></i> ' + Lang.get('responseMessages.cancel'),
                                        }
                                    }
                                });
                            }
                        },
                        error: (x) => crud_handle_server_errors(x),
                        complete: function (data) {}
                    });
                }
            });

            return false;
        });

    window.crud_handle_server_errors = function (data, form = null) {
        switch (data.status) {
            case 422: // validation error.
                crud_handle_validation_errors(data, form);
                break;
            case 401: // Authentication error.
                $.NotificationApp.send("خطأ",data.responseJSON.message ?? 'Unauthenticated', "top-left", "#bf441d", "error");
                break;
            case 403: // Permission error.
                $.NotificationApp.send("خطأ",data.responseJSON.message ?? 'You do not have the permission to do that', "top-left", "#bf441d", "error");
                break;
            case 419: // CSRF Token error.
                $.NotificationApp.send("خطأ",data.responseJSON.message ?? 'Token Expired, Please refresh the page.', "top-left", "#bf441d", "error");
                break;
            case 500: // server error.
                // toastr["error"]('Server Error');
                $.NotificationApp.send("خطأ",data.responseJSON.message ?? 'Server Error 500', "top-left", "#bf441d", "error");
                break;
            default: // unknown error
                $.NotificationApp.send("خطأ",data.message ? data.message : 'Something happen wrong', "top-left", "#bf441d", "error");
                break;
        }
    }

})(jQuery);
