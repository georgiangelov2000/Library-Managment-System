$(function ($) {

    $('#incomings-books').DataTable({
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
})