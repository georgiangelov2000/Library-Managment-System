$(function($) {

    $('#commentsTable').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "0%", "targets": 0 },
            { "width": "20%","targets": 1 },
            { "width": "20%","targets": 2 },
            { "width": "10%","targets": 3 },
            { "width": "10%","targets": 4 },
          ]
        });

        $('#commentsUsersTable').DataTable({
            "autoWidth": false,
            "columnDefs": [
                { "width": "0%", "targets": 0 },
                { "width": "10%", "targets": 1 },
                { "width": "20%","targets": 2 },
                { "width": "15%","targets": 3 },
                { "width": "15%","targets": 4 },
                { "width": "10%","targets": 4 },
              ]
            });
})