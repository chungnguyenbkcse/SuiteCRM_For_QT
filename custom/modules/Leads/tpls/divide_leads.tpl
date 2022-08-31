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
        #btn-manage:hover{
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
    </style>
{/literal}

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<div class="row">
    <h1>{$DIVIDE}</h1>
</div>

<table class="table table-bordered" id="show-history-import">
    <thead id="thead-show-campaigns">
        <tr>
            <th scope="col">{$STT}</th>
            <th scope="col">{$CAMPAIGN}</th>
            <th scope="col">{$STATUS_CAMPAIGN}</th>
            <th scope="col">{$START_DAY}</th>
            <th scope="col">{$END_DAY}</th>
            <th scope="col">{$STATUS_DATA}</th>
            <th scope="col">{$ACT}</th>
        </tr>
    </thead>
    <tbody>
        {$DATA}
    </tbody>
</table>

{literal}
    <script type="text/javascript">
        $('#show-history-import').DataTable();
    </script>
{/literal}