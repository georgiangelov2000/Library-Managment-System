$(function ($) {

    $('#statusBooks').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "0%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "10%","targets": 2 },
            { "width": "12%","targets": 3 },
            { "width": "10%","targets": 4 },
            { "width": "10%","targets": 5 },
          ]
        });
})