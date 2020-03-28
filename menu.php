
		<link rel="stylesheet" href="css/menu_style.css?<?=filemtime('css/menu_style.css')?>">
		
		<script>

			var menu_on = 1;
			

       		function menu_click()
       		{
       			if( menu_on == 1)
       			{
       				$("body").addClass("menu-open");
       				$(".status").text("상태 : ON");
       				menu_on = 2;

					//모바일에서 버그 방지
					$(".menu").css({'overflow-y':'auto'});
					$("body").css({'overflow-y':'hidden','overflow-x':'hidden'});
					setTimeout(function(){
						$("body").css({'overflow-y':'hidden','overflow-x':'hidden'});
						$(".menu").css({'overflow-y':'scroll'});
						menu_on = 2;
					},500);
					setTimeout(function(){
						$(".menu").css({'overflow-y':'auto'});
						//menu_on = 3;
					},600);
					
					
       			}else if(menu_on == 2){
       				$("body").removeClass("menu-open");
       				$(".status").text("상태 : OFF");
       				menu_on = 1;
					$("body").css({'overflow-y':'auto','overflow-x':'hidden'});
					//모바일에서 버그 방지
					setTimeout(function(){
						$(".menu").css({'overflow-y':'hidden'});
						menu_on = 1;
					},500);
       			}


       		}
		</script>

	<div class="btn-menu" onclick="menu_click();">
	
			<div class="btn-menu_i">
			
				<div class="btn-menu_ii">
					<div class="btn-menu__line-1"></div>
					<div class="btn-menu__line-2"></div>
					<div class="btn-menu__line-3"></div>
				</div>
				
			</div>
			
		</div><!-- btn-menu -->

	
	
	<!-- <div class="status">상태 : OFF</div> -->


	<div class="menu">
			<div class="menu_content row">
				<div class="block" style="transition-delay: 0ms;"><h1 onclick="scroll_move(0); menu_click();"><span class="menu_btn2 active">HOME</span></h1></div>
				<div class="block" style="transition-delay: 50ms;"><h1 onclick="scroll_move(menu[1]); menu_click();"><span class="menu_btn2">ABOUT</span></h1></div>
				<div class="block" style="transition-delay: 100ms;"><h1 onclick="scroll_move(menu[2]); menu_click();"><span class="menu_btn2">VIDEO</span></h1></div>
				<div class="block" style="transition-delay: 150ms;"><h1 onclick="scroll_move(menu[3]); menu_click();"><span class="menu_btn2">LINE-UP</span></h1></div>
				<div class="block" style="transition-delay: 200ms;"><h1 onclick="scroll_move(menu[4]); menu_click();"><span class="menu_btn2">BEER</span></h1></div>
				<div class="block" style="transition-delay: 250ms;"><h1 onclick="scroll_move(menu[5]); menu_click();"><span class="menu_btn2">TIME-TABLE</span></h1></div>
				<div class="block" style="transition-delay: 300ms;"><h1 onclick="scroll_move(menu[6]); menu_click();"><span class="menu_btn2">LOCATION</span></h1></div>
			</div>
	</div><!-- menu -->

