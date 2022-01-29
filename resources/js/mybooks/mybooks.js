$(function ($) {
    $(document).on("change", "#flag_id", function (e) {
        let value = $(this).val();
        let dataId = $.parseJSON($(this).attr('data-id'));
        $.ajax({
            method: "post",
            url: STATUSFAVOUTITE.replace(":id", dataId),
            data: { 'flag_id': value },
            success: function (data) {
                toastr.success('Successfully updated book status!')
            },
            error: function (errors) {
                toastr.danger('Unsuccessfully updated book status!')
            },
        });
    });


    $('#mybooks').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "10%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "10%","targets": 2 },
            { "width": "10%","targets": 3 },
            { "width": "10%","targets": 4 },
            { "width": "10%","targets": 5 },
          ]
        });
});
