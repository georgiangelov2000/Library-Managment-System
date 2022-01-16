$(function($) {
    $('#assigned-books').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "0%", "targets": 0 },
            { "width": "10%","targets": 1 },
            { "width": "10%","targets": 2 },
            { "width": "10%","targets": 3 },
            { "width": "10%","targets": 4 },
            { "width": "10%","targets": 5 },
            { "width": "10%","targets": 6 },
            { "width": "10%","targets": 7 },
            { "width": "10%","targets": 8 },
            { "width": "10%","targets": 9 },
          ]
    });
})