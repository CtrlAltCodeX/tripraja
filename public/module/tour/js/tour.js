jQuery(function ($) {
    $(".bravo_filter .g-filter-item").each(function () {
        if($(window).width() <= 990){
            $(this).find(".item-title").toggleClass("e-close");
        }
        $(this).find(".item-title").click(function () {
            $(this).toggleClass("e-close");
            if($(this).hasClass("e-close")){
                $(this).closest(".g-filter-item").find(".item-content").slideUp();
            }else{
                $(this).closest(".g-filter-item").find(".item-content").slideDown();
            }
        });
        $(this).find(".btn-more-item").click(function () {
            $(this).closest(".g-filter-item").find(".hide").removeClass("hide");
            $(this).addClass("hide");
        });
        $(this).find(".bravo-filter-price").each(function () {
            var input_price = $(this).find(".filter-price");
            var min = input_price.data("min");
            var max = input_price.data("max");
            var from = input_price.data("from");
            var to = input_price.data("to");
            var symbol = input_price.data("symbol");
            input_price.ionRangeSlider({
                type: "double",
                grid: true,
                min: min,
                max: max,
                from: from,
                to: to,
                prefix: symbol
            });
        });
    });
    $(".bravo_form_filter input[type=checkbox]").change(function (event) {
        event.preventDefault(); // Prevent default form submission
        updateForm();
    });

    function updateForm() {
        var formData = $(".bravo_form_filter").serialize(); // Serialize form data

        $.ajax({
            type: "GET",
            url: $(".bravo_form_filter").attr("action"),
            data: formData,
            success: function (response) {
                // Handle the response if needed
                console.log(response);
            },
            error: function (error) {
                console.error(error);
            },
        });
    }

});