$('#check-all').click( function () {
    $('.data-table input[type="checkbox"]' ).prop('checked', this.checked)
});

$(document).ready(function() {
    $("#btn-delete-customer").click(function() {
        $("#form-list-customer").submit();
    });
});