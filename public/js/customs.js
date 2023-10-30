$(document).ready(function () {


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


    /* === Submit those form that id was form-ajax  === */
    $('body #form-ajax').submit(function () {
        event.preventDefault();
        let url, methodName, TypeName, form, data, submitBtn, submitBtnText;
        url = $(this).attr('action');
        methodName = $(this).attr('method');
        TypeName = $(this).attr('enctype');
        form = $(this)[0];
        data = new FormData(form);
        submitBtn = $('.submit-button');
        submitBtnText = $('.submit-btn-text');
        $(submitBtnText).text("Processing...");
        $(submitBtn).prop("disabled", true);


        $.ajax({
            type: methodName,
            enctype: TypeName,
            url: url,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
        }).done((res) => {
            $(submitBtnText).text("Save");
            $(submitBtn).prop("disabled", false);
            console.log(res);
        }).fail((error) => {
            console.log(error)
        });
    })


});

