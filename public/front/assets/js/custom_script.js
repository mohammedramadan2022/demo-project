/* go to top */
$(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 500, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

/* tooltip */
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

/* select2 */
$(document).ready(function () {
    <!-- live search -->
    $('.my-select-picker').select2();

    $('.my-normal-picker').select2({
        minimumResultsForSearch: Infinity
    });

    // when any modal opened
    $(document).on('shown.bs.modal', function () {
        $('.my-select-picker').select2();

        $('.my-normal-picker').select2({
            minimumResultsForSearch: Infinity
        });
    });
});

/* handle upload images */
$('#join-rental-business-logo').change(function () {
    readURL(this, '#join-rental-business-logo-display');
});

function readURL(input, img) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(img).attr('src', e.target.result).removeClass('d-none');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

/* handle section name */
$(document).on('click', '.section-name', function () {
    $('#section-id').val($(this).data('section-id'));
    $('.section-name-display').empty().text($(this).text());
    $(this).closest('.dropdown-menu').find('li a.active').removeClass('active');
    $(this).addClass('active');
});

/* handle section name */
$(document).on('keyup', 'form.main-search-form input[type="text"]', function () {
    $('form.main-search-form .input-group-text')
        .empty()
        .html('<button onclick="removeResearchResults();"><i class="fa fa-times"></i></button>');

    $('.main-search-results').removeClass('d-none');
});

/* handle display way */
$(document).on('change', '.display-way', function () {
    if ($(this).val() === 'grid') {
        $('#results-data').addClass('row-cols-lg-3 results-data').removeClass('row-cols-lg-2 results-data2');
    } else {
        $('#results-data').addClass('row-cols-lg-2 results-data2').removeClass('row-cols-lg-3 results-data');
    }
});

/* handle otp code */
$(document).ready(function () {
    $('.otp-code-div').find('input').each(function () {
        $(this).on('focus', function () {
            $(this).select();
            $(this).attr('maxlength', 1);
        });
        $(this).on('keyup', function (e) {
            var parent = $($(this).closest('.otp-code-div'));

            if (e.keyCode === 8 || e.keyCode === 37) {
                let prev = parent.find('input#' + $(this).data('previous'));

                if (prev.length) {
                    $(prev).select();
                }
            } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                let next = parent.find('input#' + $(this).data('next'));

                if (next.length) {
                    $(next).select();
                }
            }
        });
    });
});

/* handle discount coupon */
$(document).on('click', '#content.cart-fill.complete-order .order-summary .data form .coupon-div .btn-primary-color', function () {
    $('#content.cart-fill.complete-order .order-summary .data form .coupon-div .btn-primary-color').addClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form .coupon-div .btn-danger2').removeClass('d-none');
    //$('#content.cart-fill.complete-order .order-summary .data form .coupon-div .alert-success').removeClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form ul li.total_').removeClass('total');
    $('#content.cart-fill.complete-order .order-summary .data form ul li.discount').removeClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form ul li.results').removeClass('d-none');
});

$(document).on('click', '#content.cart-fill.complete-order .order-summary .data form .coupon-div .btn-danger2', function () {
    $('#content.cart-fill.complete-order .order-summary .data form .coupon-div input[type="text"]').val('');
    $('#content.cart-fill.complete-order .order-summary .data form .coupon-div .btn-primary-color').removeClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form .coupon-div .btn-danger2').addClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form .coupon-div .alert-success').addClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form ul li.total_').addClass('total');
    $('#content.cart-fill.complete-order .order-summary .data form ul li.discount').addClass('d-none');
    $('#content.cart-fill.complete-order .order-summary .data form ul li.results').addClass('d-none');
});

/* handle conditions-rules-agree */
$(document).on('change', '#content.cart-fill.complete-order .order-summary .data form .form-check .form-check-input', function () {
    if ($(this).is(':checked')) {
        $(this).closest('form').find('#btn-order-done').attr('disabled', false);
    } else {
        $(this).closest('form').find('#btn-order-done').attr('disabled', true);
    }
});

$(document).on('change', 'input#join-rental-business-agree', function () {
    if ($(this).is(':checked')) {
        $(this).closest('form').find('#btn-send-request').attr('disabled', false);
    } else {
        $(this).closest('form').find('#btn-send-request').attr('disabled', true);
    }
});

/* handle deliver way */
$(document).on('change', '#deliver-way #deliver-way-options .form-check-inline .form-check-input', function () {
    if ($(this).is(":checked")) {
        $(this).parent().addClass('checked');
    }
    $(this).closest('#deliver-way-options').find('.form-check-input:not(:checked)').parent().removeClass('checked');

    // if ($(this).val() === 'from_location') {
    //     $(this).closest('#deliver-way').find('#from-location-div').removeClass('d-none');
    //     $(this).closest('#deliver-way').find('#deliver-div').addClass('d-none');
    // } else {
    //     $(this).closest('#deliver-way').find('#from-location-div').addClass('d-none');
    //     $(this).closest('#deliver-way').find('#deliver-div').removeClass('d-none');
    // }
    // $(this).closest('#deliver-way').find('#add-address-div').addClass('d-none');
    // $(this).closest('#deliver-way').find('#show-addresses-div').addClass('d-none');
});

$(document).on('click', '#deliver-way #deliver-div .add-address-big-link, #deliver-way #show-addresses-div .add-new-address, #deliver-way #show-addresses-div .address-item .edit-address', function () {
    // $(this).closest('#deliver-way').find('#edit-address-div').removeClass('d-none');
    // $(this).closest('#deliver-way').find('#deliver-div').addClass('d-none');
    // $(this).closest('#deliver-way').find('#show-addresses-div').addClass('d-none');
    // $('.my-select-picker').select2();
});

// $(document).on('click', '#deliver-way #add-address-div .address-cancel, #deliver-way #add-address-div .btn-primary-color', function () {
//     $(this).closest('#deliver-way').find('#show-addresses-div').removeClass('d-none');
//     $(this).closest('#deliver-way').find('#add-address-div').addClass('d-none');
// });

/* handle payment way */
$(document).on('change', '#payment-way #payment-way-options .form-check-inline .form-check-input', function () {
    if ($(this).is(":checked")) {
        $(this).parent().addClass('checked');
    }
    $(this).closest('#payment-way-options').find('.form-check-input:not(:checked)').parent().removeClass('checked');

    if ($(this).val() === 'wallet') {
        $(this).closest('#payment-way').find('#cash-pay-way').addClass('d-none');
        $(this).closest('#payment-way').find('#wallet-pay-way').removeClass('d-none');
        $(this).closest('#payment-way').find('#visa-pay-way').addClass('d-none');
    } else {
        if ($(this).val() === 'visa') {
            $(this).closest('#payment-way').find('#cash-pay-way').addClass('d-none');
            $(this).closest('#payment-way').find('#wallet-pay-way').addClass('d-none');
            $(this).closest('#payment-way').find('#visa-pay-way').removeClass('d-none');
        } else {
            $(this).closest('#payment-way').find('#cash-pay-way').removeClass('d-none');
            $(this).closest('#payment-way').find('#wallet-pay-way').addClass('d-none');
            $(this).closest('#payment-way').find('#visa-pay-way').addClass('d-none');
        }
    }
});

/* handle pay-deposit-firstly */
$(document).on('change', '#content.my-orders-details #payment-way .cash-pay-way .form-check .form-check-input', function () {
    if ($(this).is(':checked')) {
        $(this).closest('#cash-pay-way').find('.btn-primary-color').attr('disabled', false);
    } else {
        $(this).closest('#cash-pay-way').find('.btn-primary-color').attr('disabled', true);
    }
});

/* handle rate input */
$(document).on('click, mouseover', '#rateModal form .rate-section .rates-input-div .rate-event', function () {
    let count = $(this).data('count');
    $(this).closest('.rates-input-div').find('.rate-input').val(count);
    $(this).closest('.rates-input-div').find('i:lt(' + count + ')').removeClass('fa-regular').addClass('fa-solid');
    $(this).closest('.rates-input-div').find('i:gt(' + parseInt(count - 1) + ')').removeClass('fa-solid').addClass('fa-regular');
});

$(document).on('shown.bs.modal', '#rateModal', function () {
    let rate_divs = $(this).find('.rates-input-div');
    rate_divs.each(function () {
        let count = $(this).find('.rate-input').val();
        if (count > 0) {
            $(this).closest('.rates-input-div').find('i:lt(' + count + ')').removeClass('fa-regular').addClass('fa-solid');
            $(this).closest('.rates-input-div').find('i:gt(' + parseInt(count - 1) + ')').removeClass('fa-solid').addClass('fa-regular');
        }
    });
});

/* owl carousel */
$(document).ready(function () {
    /* cities */
    // $('.cities-owl-carousel').owlCarousel({
    //     center: true,
    //     loop: true,
    //     rtl: true,
    //     autoplay: true,
    //     margin: 20,
    //     // items:4,
    //     nav: true,
    //     dots: false,
    //     navText: ['<div class="btn-arrows"><i class="fa fa-chevron-left"></i></div>', '<div class="btn-arrows"><i class="fa fa-chevron-right"></i></div>'],
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         271: {
    //             items: 2
    //         },
    //         541: {
    //             items: 3
    //         },
    //         811: {
    //             items: 4
    //         },
    //         1081: {
    //             items: 5
    //         },
    //         1621: {
    //             items: 6
    //         },
    //         1891: {
    //             items: 7
    //         },
    //         2161: {
    //             items: 8
    //         }
    //     }
    // });

    /* sections */
    // $('.sections-owl-carousel').owlCarousel({
    //     center: false,
    //     loop: true,
    //     rtl: true,
    //     autoplay: true,
    //     margin: 30,
    //     // items:4,
    //     nav: true,
    //     dots: false,
    //     navText: ['<div class="btn-arrows"><i class="fa fa-chevron-left"></i></div>', '<div class="btn-arrows"><i class="fa fa-chevron-right"></i></div>'],
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         171: {
    //             items: 2
    //         },
    //         511: {
    //             items: 3
    //         },
    //         851: {
    //             items: 4
    //         },
    //         1021: {
    //             items: 5
    //         },
    //         1191: {
    //             items: 6
    //         }
    //     }
    // });

    /* products */
    // $('.products-owl-carousel').owlCarousel({
    //     center: true,
    //     loop: true,
    //     rtl: true,
    //     autoplay: true,
    //     margin: 30,
    //     // items:4,
    //     nav: true,
    //     dots: true,
    //     navText: ['<div class="btn-arrows"><i class="fa fa-chevron-left"></i></div>', '<div class="btn-arrows"><i class="fa fa-chevron-right"></i></div>'],
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         541: {
    //             items: 2
    //         },
    //         811: {
    //             items: 3
    //         },
    //         1081: {
    //             items: 4
    //         }
    //     }
    // });

    /* stores */
    // $('.stores-owl-carousel').owlCarousel({
    //     center: false,
    //     loop: true,
    //     rtl: true,
    //     autoplay: true,
    //     margin: 30,
    //     // items:4,
    //     nav: true,
    //     dots: true,
    //     navText: [
    //         '<div class="btn-arrows"><i class="fa fa-chevron-left"></i></div>',
    //         '<div class="btn-arrows"><i class="fa fa-chevron-right"></i></div>'
    //     ],
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         171: {
    //             items: 2
    //         },
    //         511: {
    //             items: 3
    //         },
    //         768: {
    //             items: 4
    //         },
    //         1021: {
    //             items: 5
    //         },
    //         1191: {
    //             items: 6
    //         }
    //     }
    // });
});
