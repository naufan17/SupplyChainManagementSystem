$(function(){
    $("#navDashboard").on("click",function(){
        $("#dashboard").fadeIn(1000);
        $("#pasokan").fadeOut(1000);
    });

    $("#navPasokan").on("click",function(){
        $("#pasokan").fadeIn(1000);
        $("#dashboard").fadeOut(1000);
    });
})