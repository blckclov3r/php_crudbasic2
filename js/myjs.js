


$(document).ready(function(){
    getExistingData();
    
    function getExistingData(){
        $.ajax({
            url: "action.php",
            method: "POST",
            dataType: "text",
            data: {
                getExistingData: 1
            },
            success: function(response){
                $("tbody").html(response);
            }
        });
    }

    $("#insertBtn").click(function(event){
        event.preventDefault();
        var countryName = $("#countryName").val();
        var shortDesc= $("#shortDesc").val();
        var longDesc = $("#longDesc").val();
        $.ajax({
            url: "action.php",
            method: "POST",
            dataType: "text",
            data:{
                insertBtn: 1,
                countryName: countryName,
                shortDesc: shortDesc,
                longDesc: longDesc
            },
            success: function(response){
                alert(response);
                getExistingData();
            }
        });
    });

    $("body").delegate("#editBtn","click",function(event){
        
    });

    $("body").delegate("#viewBtn","click",function(event){

        var id = $(this).attr('countryId');
        var countryName = $(this).attr('countryName');
        var shortDesc = $(this).attr('shortDesc');
        var longDesc = $(this).attr('longDesc');

        
        $.ajax({
            url: "action.php",
            method: "POST",
            dataType: "json",
            data:{
                viewBtn: 1,
                id: id
            },
            success: function(response){
                $("#countryView").html(response.countryName);
                $("#shortDescView").html(response.shortDesc);
                $("#longDescView").html(response.longDesc);
            }
        });

        
    });
});