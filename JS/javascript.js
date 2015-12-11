    $(document).ready(function() {
        $("li#btn").click(function(){
            if($("#dropdown2").css("display") == "block"){
                $("#dropdown2").toggle("fast");
            }
            $("ul#dropdown").toggle("fast");
        });

        $("li#btn2").click(function(){
            if($("#dropdown").css("display") == "block"){
                $("#dropdown").toggle("fast");
            }
            $("ul#dropdown2").toggle("fast");
        });
        $(".nav_bar").click(function(){
        	$(".navigation").toggleClass("visible");
      	});

        $("img").click(function(){
            if($(".navigation").css("left") == "0px"){
                $(".navigation").removeClass("visible");
            }
        });
});  
