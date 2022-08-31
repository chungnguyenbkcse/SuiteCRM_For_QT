$(document).ready(function() {
    let width_call_status_description_lead = ($('#phone_mobile').width() + 10).toString() + "px";
    $('#call_status_disbursement').css("width", width_call_status_description_lead);
    var form_data = new FormData();
    $('#files_card_image').change(function() {
        var totalfiles = document.getElementById('files_card_image').files.length;
        var regex =  /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        //console.log(totalfiles)
        var lst = [];
        if(totalfiles > 0 ){
            // Read selected files
            for (var index = 0; index < totalfiles; index++) {
                var image_name = document.getElementById('files_card_image').files[index].name
                if(image_name.match(regex)){
                    lst.push(document.getElementById('files_card_image').files[index]);
                    form_data.append("files[]", document.getElementById('files_card_image').files[index]);
                }
                else {
                    alert('File is invalid..')
                }
            }
        }

        //console.log(lst)
        for(var pair of form_data.entries()) {
            console.log(pair[0]+ ', '+ pair[1]); 
        }
    })
})

function handle_upload_image(){
    var lead_id = $('#lead_id').val();
    var totalfiles = document.getElementById('files_card_image').files.length;
    var card_images = [];

    if (totalfiles == 0){
        $.ajax({
            url: "index.php?module=Leads&entryPoint=get_card_image&case=1",
            data: {id: lead_id},
            success: function(data){
                var res = $.parseJSON(data);
                console.log(res)
                card_images = res
            },
            async: false
        
        });

        if (card_images.length == 0){
            alert('Please choose card image!')
            return false;
        }
    }
    var regex =  /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    //console.log(lead_id)
    var form_data = new FormData();
    var lst = [];
    if(totalfiles > 0 ){
        // Read selected files
        for (var index = 0; index < totalfiles; index++) {
            var image_name = document.getElementById('files_card_image').files[index].name
            if(image_name.match(regex)){
                lst.push(document.getElementById('files_card_image').files[index])
                form_data.append("files[]", document.getElementById('files_card_image').files[index]);
            }
            else {
                alert('File is invalid..')
            }
        }

        form_data.append('lead_id', lead_id)
        $.ajax({
            url: "index.php?module=Leads&entryPoint=handle_upload_card_image",
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data){
                alert(data);
            },
            
        });
    }

    return true;
}

function check_form(form_name){
        //console.log(lst)
    if (handle_upload_image() == false){
        return false;
    }
    cstm_validate = validate_form(form_name,'');
    if (cstm_validate  && other_condition)
        return true;
    return false;

}