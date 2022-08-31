$(document).ready(function() {
    var call_status_lead_id = $('#call_status_lead option:selected').val();
    var call_status_description_lead_id = $('#call_status_description_id').val();

    var assigned_user_id = $("#assigned_user_id").val();
    var current_user_id = $("#current_user_id").val();

    console.log(current_user_id);
    console.log(assigned_user_id);
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    var access_override_divide_lead = getCookie("access_override_divide_lead");
    console.log(access_override_divide_lead)

    if (access_override_divide_lead != "90" && access_override_divide_lead != "96"){
        $("#campaign_name").prop('disabled', true);
        $("#btn_campaign_name").remove();
        $("#btn_clr_campaign_name").remove();
        $("#assigned_user_name").prop('disabled', true);
        $("#btn_assigned_user_name").remove();
        $("#btn_clr_assigned_user_name").remove();
    }

    if (access_override_divide_lead !== "90"){
        if (assigned_user_id !== current_user_id){
            $("#call_status_lead").prop('disabled', true);
            $("#call_status_description_lead").prop('disabled', true);
        }
    }


    
    var mobile_phone = $('#mobile_phone').val();
    $(window).resize(function () {
        if ($('#call_status_description_lead').length) {
            let width_call_status_description_lead = $('#phone_mobile').width().toString() + "px";
            $('#call_status_description_lead').css("width", width_call_status_description_lead);
        }
    })

    $("#call_to_lead").click(function () {
        console.log(mobile_phone);
        $.ajax({
            type: "POST",
            url: "http://51.3.9.2/call.php",
            data: { mobile_phone: mobile_phone }
        });
    })

    $.ajax({
        url: "index.php?module=Leads&entryPoint=LeadCallStatus&case=1",
        data: {id: call_status_lead_id, call_status_description_lead_id: call_status_description_lead_id},
        success: function(data){
            console.log(data);
            $("#call_status_description_lead").html(data);
            let width_call_status_description_lead = $('#phone_mobile').width().toString() + "px";
            $('#call_status_description_lead').css("width", width_call_status_description_lead);
            
        },
        dataType: 'html'
    });
    $('#call_status_lead').change(function() {
        var call_status_lead_id = $('#call_status_lead option:selected').val();
        var call_status_description_lead_id = $('#call_status_description_id').val();
        console.log(call_status_description_lead_id)
        $.ajax({
            url: "index.php?module=Leads&entryPoint=LeadCallStatus&case=1",
            data: {id: call_status_lead_id, call_status_description_lead_id: call_status_description_lead_id},
            success: function(data){
                //console.log(data);
                $("#call_status_description_lead").html(data);
                let width_call_status_description_lead = $('#phone_mobile').width().toString() + "px";
                $('#call_status_description_lead').css("width", width_call_status_description_lead);
            },
            dataType: 'html'
        });
    });
});
