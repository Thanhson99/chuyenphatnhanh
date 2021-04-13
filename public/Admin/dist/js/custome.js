$('#check-all').click( function () {
    $('.data-table input[type="checkbox"]' ).prop('checked', this.checked)
});

function submitForm(link){
    var frm = $('#form-list-customer');
    if(confirm('Bạn  chắc chắn muốn xóa?')){
        frm.attr('action', link);
        frm.submit();
    }
}

$(document).ready(function(){
    $('.nav-sidebar .nav-item').click(function(){
        $('.nav-item').removeClass("admin-bar-active");
        $(this).addClass("admin-bar-active");
    });
});

$("select[name='provider-name']").change(function(){
    $(this).parents('form').submit();
})

$("select[name='news-type']").change(function(){
    $(this).parents('form').submit();
})

$("select[name='status']").change(function(){
    $(this).parents('form').submit();
})

function submitFormNews(link){
    var frm = $('#form-list-news');
    if(confirm('Bạn chắc chắn muốn xóa?')){
        frm.attr('action', link);
        frm.submit();
    }
}

function changeSearchField(field, text){
    var lowerText = text.toLowerCase();
    lowerText == 'tất cả' ? $('.search-text').text('Tìm kiếm ' + lowerText) : lowerText == 'cmnd' ? $('.search-text').text('Tìm kiếm theo ' + text) : $('.search-text').text('Tìm kiếm theo ' + lowerText);
    $('input[name="search_field"]').val(field);
}

function clearSearch(){
    $('input[name="search_field"]').val('all');
    $('input[name="search_value"]').val('');
    $('#frm-search').submit();
}

function submitFormTransportationType(link){
    var frm = $('#form-transportation-type');
    if(confirm('Bạn chắc chắn muốn xóa?')){
        frm.attr('action', link);
        frm.submit();
    }
}

function submitFormRates(link){
    var frm = $('#form-rates');
    if(confirm('Bạn chắc chắn muốn xóa?')){
        frm.attr('action', link);
        frm.submit();
    }
}

function submitFormOrder(link){
    var frm = $('#form-orders');
    if(confirm('Bạn chắc chắn muốn xóa?')){
        frm.attr('action', link);
        frm.submit();
    }
}