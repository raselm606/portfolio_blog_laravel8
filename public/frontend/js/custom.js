$(document).ready(function(){
    $('.responsive').slick({
        dots: false,
        infinite: false,
        arrows: false,
        speed: 300,
        prevArrow: ' <button type="button" class="slick-prev"><i class="fas fa-fw fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-fw fa-arrow-right"></i></button>',
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: false,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow:1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    //slider
    $('.banner_slider').slick({
        dots: false,
        infinite: false,
        arrows: false,
        speed: 300,
        prevArrow: ' <button type="button" class="slick-prev"><i class="fas fa-fw fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-fw fa-arrow-right"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: false,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow:1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false
                }
            }
        ]
    });

    $(".navbar-toggler").click(function(){
        $(".navbarr").slideToggle("slow");
    });
});





    $(document).ready(function(){
        //add to cart
    $('.add_my_cart').click(function (e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty_input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "post",
            url: "/add-to-cart",
            data:{
                'product_id': product_id,
                'product_qty' : product_qty,
            },
            success: function (response) {
                window.location.reload();
                swal(response.msg);
            }
        });
    });

    //increment btn
    $('.increment_btn').click(function (e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.prod_qty').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value <10){
            value++;
            $(this).closest('.product_data').find('.qty_input').val(value);
        }
    });

    //decrement btn
    $('.decrement_btn').click(function (e) {
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty_input').val();

        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1){
            value--;
            $(this).closest('.product_data').find('.qty_input').val(value);
        }
    });

    //delete item from cart
    $('.delete_cart_item').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var user_id = $(this).closest('.product_data').find('.user_id').val();

        data={
            'user_id': user_id,
        };

        $.ajax({
            method: "post",
            url: "/delete-cart",
            data:data,
            success: function (response) {
                toastr.info(response.msg, 'Cart item deleted');
                window.location.reload();
            }
        });
    });


// change quantity
    $('.change_quantity').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var qty = $(this).closest('.product_data').find('.qty_input').val();
        data={
            'product_id': product_id,
                'qty_input': qty,
        };
        $.ajax({
            type: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                toastr.success(response.msg);
                window.location.reload();
            }
        });

    });


    // //decrement btn
    // $('.decrement_btn').click(function (e) {
    //     e.preventDefault();
    //
    //     var dec_value = $('.qty_input').val();
    //     var value = parseInt(dec_value, 10);
    //     value = isNaN(value) ? 0 : value;
    //     if(value > 1){
    //         value--;
    //         $('.qty_input').val(value);
    //     }
    // });
    //
    // //increment btn
    // $('.increment_btn').click(function (e) {
    //     e.preventDefault();
    //
    //     var inc_value = $('.qty_input').val();
    //     var value = parseInt(inc_value, 10);
    //     value = isNaN(value) ? 0 : value;
    //     if(value <10){
    //         value++;
    //         $('.qty_input').val(value);
    //     }
    // });

});


