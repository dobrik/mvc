$('.pull-down').each(function () {
    var $this = $(this);
    $this.css('margin-top', $this.parent().height() - $this.height())
});
var ajax = $('#ajax_result');
var input = $('#search');
$(input).keyup(function () {
    if($(input).val() == ''){
        $(ajax).html('');
    }
    $(ajax).css({width: input["0"].offsetWidth})
    $.ajax({
        url: '/search/ajax/',
        method: 'get',
        dataType: 'json',
        data: $(input).serialize(),
        success: function (e) {
            $(ajax).html('');
            if (e) {
                for (var i = 0; i < e.length; i++) {
                    $(ajax).append('<a href="/catalog/product/'+e[i].link+'"><div class="ajax_item row">' +
                        '<div class="col-md-2"><img class="img_ajax" src="'+ e[i].preview+'"></div>' +
                        '<div class="col-md-8"><div class="ajax-name">'+e[i].product+'</div><div class="ajax-description">'+e[i].description+'</div></div>' +
                        '<div class="col-md-2 ajax-price">'+e[i].price+'</div></div></a>');
                }
            }
        }
    })
});