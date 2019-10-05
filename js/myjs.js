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
                $("tbody").append(response);
            }
        });
    }
});