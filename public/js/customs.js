$(document).ready(function () {
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


    /* === Role Module Name checked & unchecked  children also checked or unchecked  === */
    $('input[data-type="module"]').change(function () {
        if ($(this).is(":checked")) {
            $(this).closest('.checkbox-observer').find('input[type="checkbox"]').prop('checked', true);
        } else if ($(this).is(":not(:checked)")) {
            $(this).closest('.checkbox-observer').find('input[type="checkbox"]').prop('checked', false);
        }
    })

    $('input[data-type="child"]').change(function () {
        let checkBox = $(this).closest('.child-box').find('input[type="checkbox"]');
        let module = $(this).closest('.checkbox-observer').find('input[data-type="module"]');

        let checkBoxLength = checkBox.length;
        let checkedCount = 0;

        checkBox.each(function () {
            if ($(this).is(":checked")) {
                checkedCount++;
            }
        });

        if (checkBoxLength === checkedCount) {
            $(module).prop('checked', true);
        } else {
            $(module).prop('checked', false);
        }
    })


});
