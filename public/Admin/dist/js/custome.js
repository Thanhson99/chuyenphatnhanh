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