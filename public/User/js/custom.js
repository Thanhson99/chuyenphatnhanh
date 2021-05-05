function submitSearchOrders(link){
    var frm = $('#form-search');
    frm.attr('action', link);
    frm.submit();
}