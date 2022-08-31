{literal}
    <style>
        #thead-report-campaign {
            background-color: rgb(64, 51, 189);
            color: #ffffff;
        }
        #toolbar {
            margin: 0;
        }
    </style>
{/literal}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.table2excel.min.js"></script>

<h2>{$TITLE}</h2>
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <!-- Dropdown -->
        <select id='selectCampaign' style='width: 200px;'>
        </select>

        <input type='button' value={$FILTER_CAMPAIGN} id='filter'>
    </div>

    <div class="col-lg-3 col-xs-3">
        <input type='button' value="{$EXPORT_REPORT_PAGINATION}" id='exporttable'>
        <input type='button' value="{$EXPORT_REPORT_ALL}" id='btn-export-all'>
    </div>
</div>


<div class="row">
    <table>
        <thead id="thead-report-campaign">
            <tr>
                <th scope="col">{$STT}</th>
                <th scope="col">{$USER}</th>
                <th scope="col">{$CAMPAIGN}</th>
                <th scope="col">{$ASSIGNED_QUANTITY}</th>
                <th scope="col">{$CALLED_QUANTITY}</th>
                <th scope="col">{$NOT_CALL_YET_QUANTIRY}</th>
                <th scope="col">{$PERCENT}</th>
                <th scope="col">{$NEVER_CONTACT}</th>
                <th scope="col">{$CONTACTED}</th>
                <th scope="col">{$INTEREST}</th>
                <th scope="col">{$ARGREED}</th>
                <th scope="col">{$REFUSE}</th>
            </tr>
        </thead>
        <tbody id="data">
        </tbody>
    </table>
</div>

<br />
<input type="hidden" value={$ACCESS_OVERRIDE} name="access_override" id="access_override">
<input type="hidden" value={$SECURITYGROUP_ID} name="security_group_id" id="security_group_id">
<input type="hidden" value={$EMPLOYEE_ID} name="employee_id" id="employee_id">

{literal}
    <script type="text/javascript">
        $(document).ready(function() {
            var access_override = $('#access_override').val();
            var security_group_id = $('#security_group_id').val();
            var employee_id = $('#employee_id').val();
            var html_row = "";   
            console.log(employee_id)
            
            $("#exporttable").click(function(e){
                            var table = $("table");
                            if(table && table.length){
                                $(table).table2excel({
                                    exclude: ".noExl",
                                    name: "Campaign_Report",
                                    filename: "Campaign_Report" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                                    fileext: ".xls",
                                    exclude_img: true,
                                    exclude_links: true,
                                    exclude_inputs: true,
                                    preserveColors: false
                                });
                            }
                        });

            if (access_override == '90'){
                $.ajax({
                    url: "index.php?module=Leads&entryPoint=get_quantity_leads",
                    success: function(data) {
                        console.log(data)
                        $('#data').html(data);
                        $('table').DataTable({
                            "searching": false
                        });
                        var table = $('table').DataTable();

                        $('#btn-export-all').on('click', function(){
                            $('<table>').append(table.$('tr').clone()).table2excel({
                                exclude: ".noExl",
                                name: "Campaign_Report",
                                filename: "Campaign_Report" + new Date().toISOString().replace(/[\-\:\.]/g, ""),
                                fileext: ".xls",
                                exclude_img: true,
                                exclude_links: true,
                                exclude_inputs: true
                            });  
                        }); 
                    },
                });
                $.ajax({
                    url: "index.php?module=Leads&entryPoint=get_campaign",
                    success: function(data) {
                        $('#selectCampaign').html(data)
                    },
                });
            }
            else {
                $.ajax({
                    url: "index.php?module=Leads&entryPoint=get_quantity_leads",
                    data: {employee_id: employee_id},
                    success: function(data) {
                        console.log(data)
                        $('#data').html(data);
                        $('table').DataTable({
                            "searching": false
                        });
                    },
                });
                $.ajax({
                    url: "index.php?module=Leads&entryPoint=get_campaign",
                    data: {employee_id: employee_id},
                    success: function(data) {
                        //console.log(data)
                        $('#selectCampaign').html(data)
                    },
                });
            }

            // Initialize select2
            $("#selectCampaign").select2();
            // Read selected option
            $('#filter').click(function() {
                //$('table').DataTable().destroy();
                //$('table tbody').empty();
                //$.fn.dataTable.ext.errMode = 'none';
                var campaign_name = $('#selectCampaign option:selected').text();
                var campaign_id = $('#selectCampaign').val();
                $.ajax({
                url: "index.php?module=Leads&entryPoint=get_quantity_leads",
                data: {id_campaign: campaign_id},
                success: function(data) {
                    console.log(data)
                    $('#data').html(data);
                    $('table').DataTable();
                },
            });

            });
        });
    </script>
{/literal}