
		
		
		<script>

			

			function menu_windowScroll()
			{
				var toppx = $(this).scrollTop();
				//스텝 위치 초기화
				init_step_position();
				
				if (toppx >= 1)
				{
					if( !$("body").hasClass('scroll') )
					{
						$("body").addClass("scroll");
					}
				}else{
					if( $("body").hasClass('scroll') )
					{
						$("body").removeClass("scroll");
					}					
				}				

				scrollMenuColor(menu,toppx);

			}

			

			

			//스크롤할때 메뉴 글씨 바꾸기
			var scrollMenuColor = function (menu, toppx) {

				var wH = $(window).height()/2;
				var toppxWh = toppx + wH;
				var count = 0;

				
				if(menu[6] < toppxWh)
				{
					if($(".menu_btn").eq(6).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(6).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(6).addClass("active");
					}
					
				}else if(menu[5] < toppxWh)
				{
					if($(".menu_btn").eq(5).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(5).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(5).addClass("active");
					}
					
				}else if(menu[4] < toppxWh)
				{
					if($(".menu_btn").eq(4).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(4).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(4).addClass("active");
					}
					
				}else if(menu[3] < toppxWh)
				{
					if($(".menu_btn").eq(3).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(3).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(3).addClass("active");
					}
					
				}else if(menu[2] < toppxWh)
				{
					if($(".menu_btn").eq(2).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(2).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(2).addClass("active");
					}
					
				}else if(menu[1] < toppxWh)
				{
					if($(".menu_btn").eq(1).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(1).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(1).addClass("active");
					}
					
				}else if(menu[0] < toppxWh){
					if($(".menu_btn").eq(0).hasClass("active"))
					{

					}else{
						$(".menu_btn").removeClass("active");
						$(".menu_btn").eq(0).addClass("active");
						$(".menu_btn2").removeClass("active");
						$(".menu_btn2").eq(0).addClass("active");
					}
				}

				
			}

		</script>




<div class="menu2_wrap">
	<div class="menu2">

		<div class="menu2_title">
			<!--<h1>SPIEVENT</h1>-->
			<span class="menu_2_title_img" onclick="location.href='<?=$url?>';"></span>
			<span class="menu_2_title_text text_middle font_oswald_bold" onclick="location.href='<?=$url?>';">대전라이브페스타</span>
		</div><!-- title -->

		<div class="menu2_right_div">
			<ul class="menu2_right">
				<li><a class="menu_btn active" onclick="scroll_move(0);" >HOME</a></li>
				<li><a class="menu_btn" onclick="scroll_move(menu[1]);" >ABOUT</a></li>
				<li><a class="menu_btn" onclick="scroll_move(menu[2]);" >VIDEO</a></li>
				<li><a class="menu_btn" onclick="scroll_move(menu[3]);" >LINE-UP</a></li>
				<li><a class="menu_btn" onclick="scroll_move(menu[4]);" >BEER</a></li>
				<li><a class="menu_btn" onclick="scroll_move(menu[5]);" >TIME-TABLE</a></li>
				<li><a class="menu_btn" onclick="scroll_move(menu[6]);" >LOCATION</a></li>
			</ul>
		</div>

		<?php
			include "menu.php";
		?>

	</div>
</div>

<link rel="stylesheet" href="css/menu2_style.css?<?=filemtime('css/menu2_style.css')?>">



