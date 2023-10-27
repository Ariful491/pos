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
    let SelectAllPermissions = $('#select-all-permissions'); // Select All ID catch

    $('input[data-type="module"]').change(function () { // checked all when module is checked.
        if ($(this).is(":checked")) {
            $(this).closest('.checkbox-observer').find('input[type="checkbox"]').prop('checked', true);
        } else if ($(this).is(":not(:checked)")) {
            $(this).closest('.checkbox-observer').find('input[type="checkbox"]').prop('checked', false);
        }
        checkPermissionIsAllSelected();
    })

    $('input[data-type="child"]').change(function () { // checked module when children all are checked.
        let checkBox = $(this).closest('.child-box').find('input[type="checkbox"]');
        let module = $(this).closest('.checkbox-observer').find('input[data-type="module"]');
        let checkBoxLength = checkBox.length;
        let checkedCount = checkboxCheckedCounter(checkBox);

        if (checkBoxLength === checkedCount) {
            $(module).prop('checked', true);
        } else {
            $(module).prop('checked', false);
        }
        checkPermissionIsAllSelected();
    })

    $(SelectAllPermissions).change(function () {  // checked all when select all.
        if ($(this).is(':checked')) {
            $('.all-permissions input[type="checkbox"]').prop('checked', true);
        } else {
            $('.all-permissions input[type="checkbox"]').prop('checked', false);
        }
    })


    function checkPermissionIsAllSelected() {
        let allCheckBox = $('.all-permissions input[type="checkbox"]');
        let totalCheckBoxLength = allCheckBox.length;
        let countTotalChecked = checkboxCheckedCounter(allCheckBox);
        if (totalCheckBoxLength === countTotalChecked) {
            $(SelectAllPermissions).prop('checked', true);
        } else {
            $(SelectAllPermissions).prop('checked', false);
        }
    }

    function checkboxCheckedCounter(checkBox) {
        let checkedCount = 0;
        checkBox.each(function () {
            if ($(this).is(":checked")) {
                checkedCount++;
            }
        });
        return checkedCount;
    }
});

