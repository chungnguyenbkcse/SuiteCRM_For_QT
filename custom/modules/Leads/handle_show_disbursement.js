$(document).ready(function() {
    var lead_id = $('#lead_id').val();
    //console.log(lead_id)
    $.ajax({
        url: "index.php?module=Leads&entryPoint=get_card_image&case=1",
        data: {id: lead_id},
        success: function(data){
            var res = $.parseJSON(data);
            var html = '';
            var html_main = '';
            res.forEach((element, index) => {
                if (index == 0){
                    html_main = `<img src="${element.card_image_link}" id="main" alt="IMAGE">`
                }
                html += `<img src="${element.card_image_link}" id="image-${index}">`
            });
            $(".side_view ").html(html);
            $(".main_view").html(html_main)
            $(".side_view").css({
                "display": "flex",
                "justify-content": "center",
                "flex-wrap": "wrap",
            })

            $(".side_view img").css({
                "width": "9rem",
                "height": "7rem",
                "object-fit": "cover",
                "cursor": "pointer",
                "margin":  "0.5rem",
            })

            $(".main_view").css({
                "width": "80%",
                "height": "50rem",
            })

            $(".main_view img").css({
                "width": "100%",
                "height": "100%",
                "object-fit": "cover",
            })

            $("#image-0").css ({
                "border" : "5px solid green"
            })

        },
        
    });

    $(".side_view img").click(function() {
        $(".side_view img").css ({
            "border" : "none"
        })
        var img_type = $(this).attr("src");
        $(this).css({
            "border" : "5px solid green"
        })
        document.getElementById('main').src = img_type
        //console.log(img_type)
    })

    //$("#tab-actions").css({
    //    "cursor": "pointer",
    //    "background-color": "#f08377",
    //    "color": "#fff",
    //    "border-color": "#f08377",
    //    "border-bottom": "#fa988d",
    //    "font-size": "13px",
    //    "font-weight": "400",
    //    "margin": "0 2px 0 2px",
    //    "letter-spacing": "2px",
    //    "line-height": "10px",
    //})

    $("#edit_button").click(function (){
        window.location.href=`index.php?module=Leads&return_module=Leads&action=edit_disbursement&record=${lead_id}`;
    })
})