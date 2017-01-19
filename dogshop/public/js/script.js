
$('.success-box').delay(3000).slideUp();

$('.add-to-cart').on('click', function () {
    $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: "GET",
        dataType: "html",
        data: {id: $(this).data('id')},
        success: function (response) {
            location.reload();
        }
    });

    $(this).animate({
        opacity: 0.25,
        left: "+=50",
        height: "toggle"
    }, 5000, function () {
        // Animation complete.
    });
});

$('.update-cart').on('click', function () {

    var btnData = {
        id: $(this).data('id'),
        op: $(this).data('op')
    };

    $.ajax({
        url: BASE_URL + 'shop/update-cart',
        type: "GET",
        dataType: "html",
        data: btnData,
        success: function (response) {
            location.reload();
        }
    });

});


$('.remove-item').on('click', function () {
    $.ajax({
        url: BASE_URL + 'shop/remove-from-cart',
        type: "GET",
        dataType: "html",
        data: {ItemId: $(this).data('id')},
        success: function (response) {
            location.reload();
        }
    });

});

$('.original-text-input').on('focusout', function () {
    var originalText = $(this).val().trim();
    originalText = originalText.toLowerCase();
    originalText = originalText.replace(/\s/g, '-');

    $('.target-text-input').val(originalText);
});

$('#sortBy').change(function () {
    var selected = $('#sortBy option:selected').val();

    if (selected === 'high') {
        location.href = BASE_URL + catUrl + '?sortby=high';
    } else if (selected === 'low') {
        location.href = BASE_URL + catUrl + '?sortby=low';
    }
});


$('#main_searchBox').on('keyup', function () {

    var value = $(this).val().trim();

    if (value.length > 0) {
        
         var loading = '<img src=" '+ SRC_URL + 'img/ajax-loader.gif" class="img-responsive">';
        $('.search_results').html(loading).slideDown();
         
        $.get(BASE_URL + 'shop/search', {search: value}, function (response) {
            
            var result = JSON.parse(response);
            html = '';
            
            if (result.length > 0) {

                $.each(result, function (key, value) {

                    html += ' <a href=" ' + BASE_URL + 'shop/' + value.cat_url + '/' + value.url + '"> \n\
                            <div class="search_result_div">\n\
                            <img src=" ' + SRC_URL + 'img/products/' + value.image + ' " class="img-responsive">\n\
                            <b>' + value.title + '</b></div></a>';
                });

            } else {

               html = '<div>No results...</div>'; 

            }
                $('.search_results').html(html).slideDown();
        });
    }else if (value.length === 0){
       $('.search_results').slideUp(); 
    }
    
});

$('.search_group').on('mouseleave', function () {
    $('.search_results').delay(500).slideUp();
});

