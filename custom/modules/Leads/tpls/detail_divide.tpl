{literal}

    <style>
        #table-info {
            background-color: #ffffff;
        }

        #thead-show-teamlead {
            background-color: #4169E1;
            color: #ffffff;
        }

        .btn-update {
            background-color: #1E90FF;
            color: #ffffff;
        }

        .btn-update:hover {
            background-color: #0000CD;
        }

        .btn-cancel {
            background-color: #FF0000;
            color: #ffffff;
        }

        .btn-cancel:hover {
            background-color: #FF6347;
        }
    </style>
{/literal}

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<input type='hidden' id='id_campaign' value={$ID_CAMPAIGN}>
<input type='hidden' id='total_leads_not_assign' value={$COUNT_NOT_ASSIGN_LEAD}>
<input type='hidden' id='total_employee' value={$TOTAL_EMPLOYEE}>
<input type='hidden' id='list_employee_string' value={$EMPLOYEE_LIST_STRING}>
<h2>{$INFORMATION}</h2>
<div class='row'>
    <div class="col-lg-12 col-xs-12">
        <table class="table table-bordered" id="table-info">
            <tbody>
                <tr>
                    <th scope="row">{$CAMPAIGN}</th>
                    <td>{$CAMPAIGN_NAME}</td>
                </tr>
                <tr>
                    <th scope="row">{$STATUS}</th>
                    <td>{$STATUS_NAME}</td>
                </tr>
                <tr>
                    <th scope="row">{$START_DAY}</th>
                    <td>{$START_NAME_VALUE}</td>
                </tr>
                <tr>
                    <th scope="row">{$END_DAY}</th>
                    <td>{$END_NAME_VALUE}</td>
                </tr>
                <tr>
                    <th scope="row">{$TOTAL_LEAD}</th>
                    <td>{$COUNT_LEAD}</td>
                </tr>
                <tr>
                    <th scope="row">{$CALLED}</th>
                    <td>{$COUNT_CALLED_LEAD}</td>
                </tr>
                <tr>
                    <th scope="row">{$NOT_CALL}</th>
                    <td>{$COUNT_NOT_CALL_LEAD}</td>
                </tr>
                <tr>
                    <th scope="row">{$NOT_ASSIGN}</th>
                    <td id="count_not_assign_lead">{$COUNT_NOT_ASSIGN_LEAD}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<h2>{$TITLE}</h2>
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <table class="table table-bordered" id="table_assign">
            <thead id="thead-show-teamlead">
                <tr>
                    <th scope="col">{$STT}</th>
                    <th scope="col">{$USERNAME}</th>
                    <th scope="col">{$FULL_NAME}</th>
                    <th scope="col">{$QUANTITY}</th>
                </tr>
            </thead>

            <tbody>
                {$DATA_NOT_ASSIGN}
            </tbody>
        </table>
        <button type='button' class='btn btn-update' id="btn-update-assign">{$BTN_UPDATE}</button>
        <button type='button' class='btn btn-cancel' id="btn-cancel-assign">{$BTN_CANCEL}</button>
        <p id="success"></p>
    </div>
</div>

<h2>{$RECALL_LEADS}</h2>
<div class="row"> 
<div class="col-lg-12 col-xs-12">
<table class="table table-bordered" id="table_assigned">
    <thead id="thead-show-teamlead">
        <tr>
            <th scope="col">{$STT}</th>
            <th scope="col">{$USERNAME}</th>
            <th scope="col">{$FULL_NAME}</th>
            <th scope="col">{$QUANTITY}</th>
            <th scope="col">{$QUANTITY_TO_CANCEL}</th>
            <th scope="col">{$MODIFIED_DATE}</th>
            <th scope="col">{$QUANTITY_TO_CANCELED}</th>
        </tr>
    </thead>
    <tbody>
        {$DATA_ASSIGNED}
    </tbody>
</table>
<button type='button' class='btn btn-update' id="btn-update-assigned">{$BTN_UPDATE}</button>
<button type='button' class='btn btn-cancel' id="btn-cancel-assigned">{$BTN_CANCEL}</button>
<p id="success-cancel"></p>
</div>
</div>

{literal}
    <script type="text/javascript">

        var res = []
        var res_x = []

        var list_employee_string = $("#list_employee_string").val();
        var myArrayIdEmployee = list_employee_string.split("_");
        //console.log(myArrayIdEmployee.length)
        myArrayIdEmployee.map((ele, idx) => {
            if (ele !== "_" && ele !== ""){
                //console.log(ele)
                //console.log(idx)
            }
        })

        for (let i = 0; i < myArrayIdEmployee.length - 1; i++) {
            res.push({
                id: myArrayIdEmployee[i],
                quantity: 0
            })
        }

        for (let i = 0; i < myArrayIdEmployee.length - 1; i++) {
            res_x.push({
                id: myArrayIdEmployee[i],
                quantity_cancel: 0
            })
        }

        console.log(res)


        $('.quantity').change(function() {
            console.log($(this).attr('id'))
            console.log($(this).val())
            let id = $(this).attr('id').substring(9);
            console.log(id);
            const index = res.findIndex(object => { return object.id === id;}); 
            console.log(index)
            res[index].quantity = $(this).val();
            console.log(res)
            
        })

        $('.quantity_cancel').change(function() {
            console.log($(this).attr('id'))
            console.log($(this).val())
            let id = $(this).attr('id').substring(7);
            console.log(id);
            const index = res_x.findIndex(object => { return object.id === id;}); 
            console.log(index)
            res_x[index].quantity_cancel = $(this).val();
            console.log(res_x)
            
        })
        
        $('#btn-update-assign').click(function() {
            $('#success').html('Vui lòng đợi trong giây lát!')
            $('#btn-update-assign').prop('disabled', true);
            $('#success').css('color', '#B8860B')
            let quantity = document.getElementsByClassName('quantity');
            let arr_quantity = [...quantity].map(input => input.value);
            let id_employees = document.getElementsByClassName('id_employees');
            let arr_employee = [...id_employees].map(input => input.value);
            let total_leads_not_assign = $('#count_not_assign_lead').html();
            var total = 0;
            for (let i = 0; i < arr_employee.length; i++) {
                if (arr_quantity[i] < 0){
                    alert('Vui lòng nhập số dương!');
                    return;
                }
                total += parseInt(arr_quantity[i])
            }
            //console.log(total)
            //console.log(total_leads_not_assign)
            if (parseInt(total_leads_not_assign) == 0){
                alert('Tất cả khách hàng tiềm năng đã được gán!')
                $('#success').html('Vui lòng nhập lại!')
                $('#btn-update-assign').prop('disabled', false);
                return;
            }
            else if (total == 0){
                alert('Vui lòng nhập số lượng!')
                $('#success').html('Vui lòng nhập lại!')
                $('#btn-update-assign').prop('disabled', false);
                return;
            }
            else if (total > parseInt(total_leads_not_assign)){
                alert('Số lượng nhập vượt quá quy định!')
                $('#success').html('Vui lòng nhập lại!')
                $('#btn-update-assign').prop('disabled', false);
                return;
            }
            else {
                const id_campaign = $('#id_campaign').val();
                //console.log(res);
                $.ajax({
                    url: "index.php?module=Leads&entryPoint=divide_leads",
                    data: {data: res, id_campaign: id_campaign},
                    success: function(data) {
                        var res = $.parseJSON(data);
                        console.log(res)
                        //console.log(arr_employee)
                        $('#count_not_assign_lead').html(res[0]['count'])
                        for (let i = 0; i < myArrayIdEmployee.length - 1; i++) { 
                            console.log(res[i+1].user_id)
                            console.log(res[i+1].quantity_assigned)
                            let id_assigned='#' +res[i+1]['user_id'] + 'assigned' ;
                            $(id_assigned).html(res[i+1]['quantity_assigned']);
                        }
                        $('#success').html('Cập nhật thành công! Vui lòng đợi giây lát để chúng tôi reload trang!')
                        $('#success').css('color', '#008000')
                        $('#btn-update-assign').prop('disabled', false);
                        $("input").val(0);
                        location.reload();
                    },
                });
            }
        });

        $('#btn-cancel-assign').click(function() { 
            let quantity = document.getElementsByClassName('quantity');
            [...quantity].map(input => (input.value = 0))
        })

        $('#btn-update-assigned').click(function() {
            $( "#btn-update-assigned" ).off( "mouseenter mouseleave" );
            $('#success-cancel').html('Vui lòng đợi trong giây lát!')
            $('#success-cancel').css('color', '#B8860B')
            $('#btn-update-assigned').prop('disabled', true);
            let quantity_cancel = document.getElementsByClassName('quantity_cancel');
            let arr_quantity_cancel = [...quantity_cancel].map(input => input.value);
            let id_employees = document.getElementsByClassName('id_employees_cancel');
            let arr_employee = [...id_employees].map(input => input.value);
            let check = 1;
            let total = 0;
            for (let i = 0; i < arr_employee.length; i++) {
                if (arr_quantity_cancel[i] < 0){
                    alert('Vui lòng nhập số dương!');
                    $('#success-cancel').html('Vui lòng nhập lại!')
                    $('#btn-update-assigned').prop('disabled', false);
                    return;
                }
                total += arr_quantity_cancel[i];
                let id_assigned = '#' + arr_employee[i] + 'assigned';
                let val_assigned = $(id_assigned).html();
                console.log(val_assigned)
                if (parseInt(val_assigned) == 0 && parseInt(arr_quantity_cancel[i]) != 0){
                    alert('Nhân viên không được gán cho bất kì lead nào!')
                    $('#success-cancel').html('Vui lòng nhập lại!')
                    $('#btn-update-assigned').prop('disabled', false);
                    return;
                    check = 0;
                    break;
                }
                else if (parseInt(arr_quantity_cancel[i]) > parseInt(val_assigned)){
                    alert('Số lượng nhập vượt quá quy định!')
                    $('#success-cancel').html('Vui lòng nhập lại!')
                    $('#btn-update-assigned').prop('disabled', false);
                    return;
                    check = 0;
                    console.log('hello')
                    break;
                }
            }
            if (check == 1) {
                if (total == 0){
                    alert('Vui lòng nhập số lượng!')
                    $('#success-cancel').html('Vui lòng nhập lại!')
                    $('#btn-update-assigned').prop('disabled', false);
                    return;
                }
                else {
                    const id_campaign = $('#id_campaign').val();
                    //console.log(res);
                    $.ajax({
                        url: "index.php?module=Leads&entryPoint=divide_leads_cancel",
                        data: {data: res_x, id_campaign: id_campaign},
                        success: function(data) {
                            var res = $.parseJSON(data);
                            //console.log(`Lead chia la:`)
                            console.log(res)
                            $('#count_not_assign_lead').html(res[0]['count'])
                            
                            for (let i = 0; i < myArrayIdEmployee.length - 1; i++) { 
                                console.log(res[i+1]['user_id'])
                                let id_assigned='#' +res[i+1]['user_id'] + 'assigned' ;
                                let id_cancel='#' +res[i+1]['user_id'] + 'quantity_cancel' ; 
                                let modified_date='#' +res[i+1]['user_id'] + 'modified_date' ;
                                $(id_assigned).html(res[i+1]['quantity_assigned']);
                                $(id_cancel).html(res[i+1]['quantity_to_cancel']);
                                $(modified_date).html(res[i+1]['date_modified']);
                            }
                            $('#success-cancel').html('Cập nhật thành công! Vui lòng đợi giây lát để chúng tôi reload trang!')
                            $('#success-cancel').css('color', '#008000')
                            $('#btn-update-assigned').prop('disabled', false);
                            $("input").val(0);
                            location.reload();
                        }
                    });
                }
            }
        });

        $('#btn-cancel-assigned').click(function() { 
            let quantity = document.getElementsByClassName('quantity_cancel');
            [...quantity].map(input => (input.value = 0))
        })

        $('#table_assign').DataTable();
        $('#table_assigned').DataTable();
    </script>
{/literal}