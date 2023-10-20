$(document).ready(function () {

    $(function () {
        let table = $('#example').DataTable({
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


});
