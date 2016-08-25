$('.pull-down').each(function () {
    var $this = $(this);
    $this.css('margin-top', $this.parent().height() - $this.height())
});
var ajax = $('#ajax_result');
var input = $('#search');
$(input).keyup(function () {
    $(ajax).html('');
    $.ajax({
        url: '/search/ajax/',
        method: 'get',
        dataType: 'json',
        data: $(input).serialize(),
        success: function (e) {
            if (e) {
                console.log(e);
                for (var i = 0; i < e.length; i++) {
                    console.log(e[i].price);
                    $(ajax).append('<a href="/catalog/product/'+e[i].link+'"><div class="ajax_item row">' +
                        '<div class="col-md-2"><img class="img_ajax" src="'+ e[i].preview+'"></div>' +
                        '<div class="col-md-8"><div class="ajax-name">'+e[i].product+'</div><div class="ajax-description">'+e[i].description+'</div></div>' +
                        '<div class="col-md-2 ajax-price">'+e[i].price+'</div></div></a>');
                }
            }
        }
    })
});
$().ready(function () {
    $(ajax).css({width: input["0"].clientWidth-1})
    console.log(input);
    console.log(input["0"].clientHeight);
})