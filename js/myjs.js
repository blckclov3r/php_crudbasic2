


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

    $("body").delegate("#selectUpdate","click",function(event){
        event.preventDefault();
        var id = $(this).attr('countryId');
        $("#countryId").val(id);
        $.ajax({
            url: "action.php",
            method: "POST",
            dataType: "json",
            data:{
                selectUpdate: 1,
                id: id
            },
            success: function(response){
             
                $("#countryUpdateTitle").html(response.countryName);
                $("#countryNameUpdate").val(response.countryName);
                $("#shortDescUpdate").val(response.shortDesc);
                $("#longDescUpdate").val(response.longDesc);
            }
        });
    });

    $("body").delegate("#selectView","click",function(event){
        event.preventDefault();
        var id = $(this).attr('countryId');
        
        $.ajax({
            url: "action.php",
            method: "POST",
            dataType: "json",
            data:{
                selectView: 1,
                id: id
            },
            success: function(response){
                $("#countryView").html(response.countryName);
                $("#shortDescView").html(response.shortDesc);
                $("#longDescView").html(response.longDesc);
            }
        });
    });


    $("body").delegate("#selectDelete","click",function(event){
        event.preventDefault();
        var id = $(this).attr('countryId');
        if(confirm("Are you sure?")){
            $.ajax({
                url: "action.php",
                method: "POST",
                dataType: "text",
                data:{
                    selectDelete: 1,
                    id: id
                },
                success: function(response){
                    alert(response);
                    getExistingData();
                }
            });
        }
    });

    $("#updateBtn").click(function(event){
        event.preventDefault();
        var id = $("#countryId").val();
        var countryName = $("#countryNameUpdate").val();
        var shortDesc = $("#shortDescUpdate").val();
        var longDesc = $("#longDescUpdate").val();
        $.ajax({
            url: "action.php",
            method: "POST",
            dataType: "text",
            data: {
                updateBtn: 1,
                id: id,
                countryName: countryName,
                shortDesc: shortDesc,
                longDesc: longDesc
            },
            success: function(response){
                alert(response);
                getExistingData();
            }
        })
    });

});