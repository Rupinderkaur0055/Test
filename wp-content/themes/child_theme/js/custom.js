    $(document).ready(function () {
        var owl = $('.owl-carousel-1');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
        var owl = $('.owl-carousel-2');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.ziehharmonika').ziehharmonika({
            collapsible: true
        });
        $("[data-media]").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var videoUrl = $this.attr("data-media");
            var popup = $this.attr("href");
            var $popupIframe = $(popup).find("iframe");

            $popupIframe.attr("src", videoUrl);

            $this.closest(".left-video-hear, .future-left-video, .right-region-video, .language-video").addClass("show-popup");
        });

        $(".popup").on("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            $(".left-video-hear, .future-left-video, .right-region-video, .language-video").removeClass("show-popup");
        });

        $(".popup > iframe").on("click", function (e) {
            e.stopPropagation();
        });

    })
