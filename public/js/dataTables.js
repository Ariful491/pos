$(document).ready(function () {
    $('#datatable').DataTable({
        dom: 'frlBtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "language": {
            "processing": "loading..."
        },
        pageLength: 25,
        "lengthMenu": [[25, 50, 100, 500, -1], [25, 50, 100, 500, 'All']],
        processing: true,
        serverSide: false,
    });

    /* === User Server side datatable === */
    $(function () {
        let table = $('#user-table').DataTable({
            dom: 'frlBtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "language": {
                "processing": "loading..."
            },
            pageLength: 25,
            "lengthMenu": [[25, 50, 100, 500, -1], [25, 50, 100, 500, 'All']],
            processing: true,
            serverSide: true,
            ajax: "/users",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
    })

})
