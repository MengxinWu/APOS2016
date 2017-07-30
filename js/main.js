$(function() {
	var originalCur = $("#nav_main li.current");
	$("#nav_main li").mousemove(function(){
		$("#nav_main li").removeClass("current");	
		$(this).addClass("current");		
		$(this).children(".lm").show().animate({left : 0,top : 52}, "fast");
	});
	$("#nav_main li").mouseleave(function(){
		$(this).removeClass("current");	
		$(this).children(".lm").stop(true,true).animate({left:0,top:0},100,function(){
			$(this).hide();
		});
		originalCur.addClass("current");
	});


	$('a.subnav_show').click(function(e) {
		var subNav = $(e.target).attr('href');
		var navName = subNav.split('#').pop();
		console.log(navName);
		if(navName === 'welcome-message') {
			$('#welcome-message').show();
			$('#news-information').hide();
			$('#important-dates').hide();
		}
		if(navName === 'news-information' || navName === 'important-dates') {
			$('#welcome-message').hide();
			$('#news-information').show();
			$('#important-dates').show();
		}
	});


});