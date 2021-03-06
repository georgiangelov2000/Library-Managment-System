$(function ($) {

    if("#userTable"){
        $("#userTable").DataTable({
            
            "autoWidth": false,
            "columnDefs": [
                { "width": "0%", "targets": 0,},
                { "width": "5%","targets": 1 },
                { "width": "8%","targets": 2 },
                { "width": "5%","targets": 3 },
                { "width": "5%","targets": 4 },
                { "width": "5%","targets": 5 },
                { "width": "13%","targets": 6 },
                { "width": "11%","targets": 7 },
                { "width": "11%","targets": 8 },
                { "width": "11%","targets": 9 },
                { "width": "11%","targets": 10 },
                { "width": "10%","targets": 11 },
              ]
        });
    }if('#approvedUsers'){
        $("#approvedUsers").DataTable({
            "autoWidth": false,
            "columnDefs": [
                { "width": "0%", "targets": 0 },
                { "width": "10%","targets": 1 },
                { "width": "10%","targets": 2 },
                { "width": "10%","targets": 3 },
                { "width": "6%","targets": 4 },
                { "width": "6%","targets": 5 },
                { "width": "11%","targets": 6 },
                { "width": "10%","targets": 7 },
                { "width": "7%","targets": 8 },
                { "width": "13%","targets": 9 },
                { "width": "13%","targets": 10 },
              ]
        });
    }if('#waitingUsers'){
        $("#waitingUsers").DataTable({
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
              ]
        });
    }if('#user-roles-admin'){
        $("#user-roles-admin").DataTable({
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
                { "width": "11%","targets": 8 },
              ]
        });
    }
});
