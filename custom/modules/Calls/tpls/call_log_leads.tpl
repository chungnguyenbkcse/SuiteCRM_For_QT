{literal}

    <style>
        #thead-show-campaigns {
            background-color: rgb(64, 51, 189);
            color: #ffffff;
        }

        #btn-manage {
            color: #ffffff;
            background-color: #FF7F50;
            align-items: center;
            align-content: center;
            text-align: center;
        }

        #btn-manage:hover {
            background-color: #D2691E;
        }

        #count {
            background-color: aqua;
            max-width: 200px;
            align-items: center;
            align-content: center;
            text-align: center;
            margin-top: 10px;
        }

        #count_called_lead {
            background-color: #6495ED;
            max-width: 200px;
            align-items: center;
            align-content: center;
            text-align: center;
            margin-top: 10px;
        }

        #count_not_call_lead {
            background-color: #FFD700;
            max-width: 200px;
            align-items: center;
            align-content: center;
            text-align: center;
            margin-top: 10px;
        }

        #count_not_assign_lead {
            background-color: #ADFF2F;
            max-width: 200px;
            align-items: center;
            align-content: center;
            text-align: center;
            margin-top: 10px;
        }

        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        #filter {
            margin-bottom: 20px;
        }

        #btn-filter {
            background-color: #1E90FF;
            color: #ffffff;
        }

        #btn-filter:hover {
            background-color: #0000CD;
        }
        
        #start_date {
            background: #d8f5ee;
            padding: 5px;
            border: 1px solid #a5e8d6;
            border-radius: 4px;
        }

        #end_date {
            background: #d8f5ee;
            padding: 5px;
            border: 1px solid #a5e8d6;
            border-radius: 4px;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
{/literal}

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

{$ADMIN}

<table class="table table-bordered" id="show-call-log-leads">
    <thead id="thead-show-campaigns">
        <tr>
            <th scope="col">{$STT}</th>
            <th scope="col">{$USER}</th>
            <th scope="col">{$LEAD}</th>
            <th scope="col">{$CALL_DATE}</th>
            <th scope="col">{$CALL_STATUS}</th>
            <th scope="col">{$CALL_STATUS_DESCRIPTION}</th>
        </tr>
    </thead>
    <tbody id="data">
    </tbody>
</table>

<input type="hidden" name="user_id" id="user_id" value="{$USER_ID}">


<p id="test"></p>

{literal}
    <script type="text/javascript">
        $(document).ready(function() {
            var user_id = $('#user_id').val();
            var source_user_call = [];
            var source_leads = [];
            $.ajax({
                url: "index.php?module=Calls&entryPoint=get_caller",
                data: {user_id: user_id},
                success: function(data) {
                    var res = $.parseJSON(data);
                    source_user_call = res;
                    console.log(res)
                },
                async: false
            });

            //console.log(`List user filter: ${source_user_call}`)

            $.ajax({
                url: "index.php?module=Calls&entryPoint=get_leads",
                success: function(data) {
                    var res = $.parseJSON(data);
                    source_leads = res;
                },
                async: false
            });

            $("#lead_name").autocomplete({
                source: source_leads,
                select: function(e, ui) {
                    $("#lead_name").val(ui.item.label);
                    $("#lead_filter_id").val(ui.item.value);
                    return false;
                }
            })

            if($('#user_call_id').length){
                $("#user_call_name").autocomplete({
                    source: source_user_call,
                    select: function(e, ui) {
                        $("#user_call_name").val(ui.item.label);
                        $("#user_call_id").val(ui.item.value);
                        return false;
                    }
                })

                $("#btn-filter").click(function(event) {
                var user_call_id = $('#user_call_id').val();
                var lead_id = $('#lead_filter_id').val();
                var start_date = $('#start_date').val();
                var end_date = $('#end_date').val();
                console.log(start_date);
                $.ajax({
                    url: "index.php?module=Calls&entryPoint=call_log_leads_filter_paging",
                    data: {user_id: user_call_id, lead_id: lead_id, start_date: start_date, end_date: end_date},
                    success: function(data) {
                        //console.log(data);
                        $('#data').html(data)
                        $('#show-call-log-leads').DataTable();
                        console.log(data)
                    }
                });
            })
            }

            else {
                $("#btn-filter").click(function(event) {
                    var lead_id = $('#lead_filter_id').val();
                    var start_date = $('#start_date').val();
                    var end_date = $('#end_date').val();
                    console.log(start_date);
                    $.ajax({
                        url: "index.php?module=Calls&entryPoint=call_log_leads_filter_user_paging",
                        data: {user_id: user_id, lead_id: lead_id, start_date: start_date, end_date: end_date},
                        success: function(data) {
                            //console.log(data);
                            $('#data').html(data)
                            $('#show-call-log-leads').DataTable();
                            console.log(data)
                        }
                    });
                })
            }


            $.ajax({
                url: "index.php?module=Calls&entryPoint=call_log_leads_paging",
                data: {user_id: user_id},
                success: function(data) {
                    //console.log(data);
                    $('#data').html(data)
                    $('#show-call-log-leads').DataTable();
                }
            });
        })
    </script>
{/literal}