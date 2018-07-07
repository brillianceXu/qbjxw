
//index title
$(function(){
	$(".in_content div:gt(0)").hide();
	$(".in_title li:first").addClass("current");
	$(".in_title li").click(function(){
		var index1=$(this).index();
		$(".in_content div").eq(index1).show().siblings().hide();
		$(this).addClass("current").siblings().removeClass("current");
	});	
});

//banner lunbo
var huhangnet = new function(){
    this.init = function(){

        /* 宽高比 */
        $('[hh-wh]').each(function(){
            var w = parseInt($(this).width()*parseFloat($(this).attr('hh-wh')));
            $(this).height(parseInt(w));
        })
        /*限制最大宽*/
        $('[hh-max-width] img,[hh-max-width] div,[hh-max-width] iframe').each(function(){
            $(this).css({'maxWidth':"100%",'height':'auto'});
        })

    }
}
$(function(){

    huhangnet.init();
    window.addEventListener("resize", function(){
        huhangnet.init();
    })
})
//banner lunbo end