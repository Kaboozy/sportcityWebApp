/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#go").on("click", function(){
    if($(this).hasClass("open")){
        $(this).removeClass("open");
        $("#map").removeClass("correction-map");
        $("#hidden-go").css("display", "none");
        $("#add, #km").show();
    }else{
        $(this).addClass("open");
        $("#hidden-go").css("display", "block");
        $("#add, #km").hide();
        $("#map").addClass("correction-map");
        if($(".hidden .child button").hasClass("time-select") == true){
            $(".hidden .child button").removeClass("time-select");
        }
    }
});


$("#add").on("click", function(){
    if($(this).hasClass("open")){
        $(this).removeClass("open");
        $("#map").removeClass("correction-map");
        $("#hidden-add").css("display", "none");
        $("#go, #km").show();
    }else{
        $(this).addClass("open");
        $("#map").addClass("correction-map");
        $("#hidden-add").css("display", "block");
        $("#go, #km").hide(); 
    }
});


$("#km").on("click", function(){
    if($(this).hasClass("open")){
        $(this).removeClass("open");
        //$("#map").css("height", "500px");
        $("#map").removeClass("correction-map");
        $("#hidden-km").css({"display": "none", "height":"200px"});
        $("#add, #go").show();
    }else{
        $(this).addClass("open");
        //$("#map").css("height", "300px");
        $("#map").addClass("correction-map");
        $("#hidden-km").css({"display": "block", "height":"500px"});
        $("#add, #go").hide();
       
    }
});

$(".hidden .child button").on("click", function(){
    if($(".hidden .child button").hasClass("time-select") == true){
        $(".hidden .child button").removeClass("time-select");
    }
    $(this).addClass("time-select");
});

$(".point strong").on("click", function(){
    $(this).hide().parent().next().show();
});




