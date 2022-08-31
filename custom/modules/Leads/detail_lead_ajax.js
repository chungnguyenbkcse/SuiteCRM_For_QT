$(document).ready(function () {
    var lead_id = $('#lead_id').val();
    var mobile_phone = $('#mobile_phone').val();
    console.log(mobile_phone)
    var call_status_description_id = $("#call_status_description_id").val();
    $.ajax({
        url: "index.php?module=Leads&entryPoint=get_call_status_description_leads_for_detail",
        data: { id: call_status_description_id },
        success: function (data) {
            console.log(data);
            $("[field='call_status_description_lead']").html(data);
        },
        dataType: 'html'
    });

    $("#edit_button").click(function () {
        window.location.href = `index.php?module=Leads&return_module=Leads&action=EditView&record=${lead_id}`;
    })

    $("#call_button").click(function () {
        $.ajax({
            type: "POST",
            url: "http://51.3.9.2/call.php",
            data: { mobile_phone: mobile_phone }
        });
    })

    $(".hidden-xs #tab3").click(function () {
        console.log("hello")
        let html = `
        <table class=\"table table-bordered\" id=\"show-call-history\">
            <thead id=\"thead-show-call-history\">
                <tr>
                    <th scope="col" class="header">Số thứ tự</th>
                    <th scope="col" class="header">Nguồn</th>
                    <th scope="col" class="header">Đích</th>
                    <th scope="col" class="header">Trạng thái</th>
                    <th scope="col" class="header">Thời gian gọi</th>
                    <th scope="col" class="header">Thời gian cuộc gọi</th>
                </tr>
            </thead>
        <tbody id="content-call-history">
        </tbody>
    </table>`;
        $("#tab-content-3").html(html)
        $("#thead-show-call-history").css("background-color", "#1982C4")
        $(".header").css("color", "#ffffff")
        let html_row_table = "";
        $.ajax({
            type: "POST",
            url: "http://51.3.9.2/reports.php",
            data: { mobile_phone: mobile_phone },
            success: function (data) {
                //var res = $.parseJSON(data);
                console.log(data)
                data.map((ele, index) => {
                    html_row_table += `
                        <tr>
                            <th scope='row'>${index + 1}</th>
                            <th scope='row'>${ele.src}</th>
                            <th scope='row'>${ele.dst}</th>
                            <th scope='row'>${ele.disposition}</th>
                            <th scope='row'>${ele.calldate}</th>
                            <th scope='row'>${ele.duration}s</th>
                        </tr>
                    `;
                })
                console.log(html_row_table)
                $("#content-call-history").html(html_row_table)
                $("#show-call-history").DataTable();
            },
            async: false
        });
    })
    let html = `
        <table class=\"table table-bordered\" id=\"show-call-history\">
            <thead id=\"thead-show-call-history\">
                <tr>
                    <th scope="col" class="header">Số thứ tự</th>
                    <th scope="col" class="header">Nguồn</th>
                    <th scope="col" class="header">Đích</th>
                    <th scope="col" class="header">Trạng thái</th>
                    <th scope="col" class="header">Thời gian gọi</th>
                    <th scope="col" class="header">Thời gian cuộc gọi</th>
                </tr>
            </thead>
        <tbody id="content-call-history">
        </tbody>
    </table>`;
    $("#tab-content-3").html(html)
    $("#thead-show-call-history").css("background-color", "#1982C4")
    $(".header").css("color", "#ffffff")
    let html_row_table = "";
    $.ajax({
        type: "POST",
        url: "http://51.3.9.2/reports.php",
        data: { mobile_phone: mobile_phone },
        success: function (data) {
            //var res = $.parseJSON(data);
            console.log(data)
            data.map((ele, index) => {
                html_row_table += `
                        <tr>
                            <th scope='row'>${index + 1}</th>
                            <th scope='row'>${ele.src}</th>
                            <th scope='row'>${ele.dst}</th>
                            <th scope='row'>${ele.disposition}</th>
                            <th scope='row'>${ele.calldate}</th>
                            <th scope='row'>${ele.duration}s</th>
                        </tr>
                    `;
            })
            console.log(html_row_table)
            $("#content-call-history").html(html_row_table)
            $("#show-call-history").DataTable();
        },
        async: false
    });
})