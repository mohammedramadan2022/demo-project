(function (i) {
    "use strict";
    i(".image-popup-vertical-fit").magnificPopup({ type: "image", closeOnContentClick: !0, mainClass: "mfp-img-mobile", image: { verticalFit: !0 } }),
        i(".image-popup-no-margins").magnificPopup({
            type: "image",
            closeOnContentClick: !0,
            closeBtnInside: !1,
            fixedContentPos: !0,
            mainClass: "mfp-no-margins mfp-with-zoom",
            image: { verticalFit: !0 },
            zoom: { enabled: !0, duration: 300 },
        }),
        i(".popup-gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: { enabled: !0, navigateByImgClick: !0, preload: [0, 1] },
            image: { tError: '<a href="%url%">The image #%curr%</a> could not be loaded.' },
        }),
        i(".zoom-gallery").magnificPopup({
            delegate: "a",
            type: "image",
            closeOnContentClick: !1,
            closeBtnInside: !1,
            mainClass: "mfp-with-zoom mfp-img-mobile",
            image: {
                verticalFit: !0,
                titleSrc: function (e) {
                    return e.el.attr("title") + ' &middot; <a href="' + e.el.attr("data-source") + '" target="_blank">image source</a>';
                },
            },
            gallery: { enabled: !0 },
            zoom: {
                enabled: !0,
                duration: 300,
                opener: function (e) {
                    return e.find("img");
                },
            },
        }),
        i(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({ disableOn: 700, type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: !1, fixedContentPos: !1 }),
        i(".popup-modal").magnificPopup({ type: "inline", preloader: !1, focus: "#username", modal: !0 }),
        i(document).on("click", ".popup-modal-dismiss", function (e) {
            e.preventDefault(), i.magnificPopup.close();
        }),
        i(".popup-with-form").magnificPopup({
            type: "inline",
            preloader: !1,
            focus: "#name",
            callbacks: {
                beforeOpen: function () {
                    i(window).width() < 700 ? (this.st.focus = !1) : (this.st.focus = "#name");
                },
            },
        });
}.apply(this, [jQuery]));
