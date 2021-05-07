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

function submitSaveNews(link){
    var frm = $('#form-list-new');
    frm.attr('action', link);
    frm.submit();
}

function toSlug(t){
    var str = $(t).val();
    // đổi input thành tiếng việt k dấu
    str = str.toLowerCase();
    //xóa dấu
    str = str.replace(/(à|á|ạ|ả|ẵ|â|ầ|ấ|ậ|ẫ|ẩ|ă|ắ|ẵ|ặ|ẳ|ằ)/g, 'a');
    str = str.replace(/(ó|ò|ọ|õ|ỏ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ỡ|ở)/g, 'o');
    str = str.replace(/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ)/g, 'e');
    str = str.replace(/(ù|ú|ụ|ũ|ủ|ư|ừ|ứ|ự|ữ|ử)/g, 'u')
    str = str.replace(/(í|ì|ĩ|ị|ỉ)/g, 'i');
    str = str.replace(/(ý|ỳ|ỷ|ỵ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
    //xóa ký tự đặc biệt
    str = str.replace(/([^0-9a-z-\s])/g, '');
    //thay khoảng trắng = ký tự -
    str = str.replace(/(\s+)/g, '-');
    // xóa phần dư - ở đầu
    str = str.replace(/^-+/g, '');
    // xóa phần dư - ở cuối
    str = str.replace(/-+$/g, '');

    $('#slug').val(str);
}

function toMetaDescription(t){
    var str = $(t).val();
    var arrStr = str.split(".");
    if(arrStr.length > 3){
        $("#meta_description").html(arrStr[0] + arrStr[1] + arrStr[2]);
    }else{
        $("#meta_description").html(str);
    }
}

function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}

function submitSaveUser(link){
    var frm = $('#form-list-customer');
    frm.attr('action', link);
    frm.submit();
}

function submitSaveTransportationType(link){
    var frm = $('#form-list-transportation-type');
    frm.attr('action', link);
    frm.submit();
}

function submitFormTransportationType(link){
    var frm = $('#form-transportation-type');
    if(confirm('Bạn  chắc chắn muốn xóa?')){
        frm.attr('action', link);
        frm.submit();
    }
}

function submitSaveRates(link){
    var frm = $('#form-list-rates');
    frm.attr('action', link);
    frm.submit();
}

function submitFormOrders(link){
    var frm = $('#form-list-orders');
    frm.attr('action', link);
    frm.submit();
}

$('#select_day').change(function(){
    var frm = $('#submit-select-day');
    // frm.attr('action', link);
    frm.submit();
})

$(document).ready(function () {
    $("input[type='radio']").click(function () {
        var sim = $("input[type='radio']:checked").val();
        //alert(sim);
        if (sim < 3) {
            $(".myratings").css("color", "red");
            $(".myratings").text(sim);
        } else {
            $(".myratings").css("color", "green");
            $(".myratings").text(sim);
        }
    });
});