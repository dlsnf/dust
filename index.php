<?php
	include "dbcon.php";


?>


<!DOCTYPE html>
	<head>
		<title>종설 4조 - 먼지가되어</title>

		<?php
		
			include "head_common.php";

			include "jquery.php";
		?>



	</head>
	<body class="bd">
		<?php
			//include "loading_progress.php";
		?>

		<div class="all_wrap">



			<div class="section_top">
				<div class="content_center" style="position:relative;">

					<div class="dust_button_div">
						<button class="text_inline_block text_middle font_oswald_semi_bold" onclick="today_dust_api_ajax(); $('.input_dust').val('');">노원구 미세먼지 가져오기</button>&nbsp;&nbsp;
						<button class="text_inline_block text_middle font_oswald_semi_bold" onclick="get_local_dust(); $('.input_dust').val(''); ">아두이노 미세먼지 가져오기</button><br><br>
						<span class= "text_inline_block text_middle font_oswald_semi_bold">수동 입력</span>
						<input type="text" class="input_dust" onkeyPress="if (event.keyCode==13){
							if(this.value > 0)
							{
								reload_dust(this.value);
							}else{
								alert('숫자를 입력하세요.');
							}
							
						}">
					</div>

					<span class="text_inline_block text_top_low font_oswald_semi_bold text_white">< 먼지가되어 ></span><br><br><br><br>

					<div class="today_time">
						<span class="text_inline_block text_middle font_oswald_regular text_white">현재 시각 : </span>
						<span class="text_inline_block text_middle font_oswald_regular text_white today_time_span"></span><!-- ex) 2019년 10월 9일(수) 오후 3시 13분 -->
					</div>

					
				

					<div class="today_dust_check">
						<span class="text_inline_block text_big font_oswald_semi_bold text_white">현재 미세먼지 측정량 :</span>
						<span class="text_inline_block text_big_row2 font_oswald_semi_bold text_white dust_pm10">&nbsp;</span>
						<span class="text_inline_block text_big_row2 font_oswald_semi_bold text_white dust_status">&nbsp;</span><br><br><br>
					</div>


				</div>

			</div><!-- section_top -->

			<div class="section_line_top"></div>

					
			<div class="content_center">

				<div class="today_dust_rank_title">
					<span class="text_inline_block text_top_low font_oswald_semi_bold">★ 오늘의 상품 매출 랭킹(TOP 20) - BEST</span><br>
					<span class="text_inline_block text_middle font_oswald_regular">( 현재 미세먼지 측정량에 따른 판매 우수 항목 랭킹 )</span>
				</div>

				<div class="today_dust_rank">
					<ul class="today_dust_rank_ul">
						<!--

						<li class="today_dust_rank_ul_li">
							<div class="today_dust_rank_ul_li_div">
								<span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_num">10.</span>
								<span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_title">스포츠 용품</span><br>

								<div class="rank_sex_age_div">
									<span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_sex">남성</span>
									<span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_age">20대</span>
								</div>

								<span class="text_inline_block text_middle_low font_oswald_regular today_dust_rank_list_info">미세먼지 87에서 판매지수 89%</span><br>

								<img src="images/graph_01.png" class="today_dust_rank_list_img">

							</div>
							
						</li>
					-->

					</ul>
				</div>
<br><br>
				<div class="today_dust_rank_title">
					<span class="text_inline_block text_top_low font_oswald_semi_bold">★ 오늘의 상품 매출 랭킹(TOP 20) - WORST</span><br>
					<span class="text_inline_block text_middle font_oswald_regular">( 현재 미세먼지 측정량에 따른 판매 저하 항목 랭킹 )</span>
				</div>


				<div class="today_dust_rank">
					<ul class="today_dust_rank_ul today_dust_rank_ul_2">
						<!--

						<li class="today_dust_rank_ul_li">
							<div class="today_dust_rank_ul_li_div">
								<span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_num">10.</span>
								<span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_title">스포츠 용품</span><br>

								<div class="rank_sex_age_div">
									<span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_sex">남성</span>
									<span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_age">20대</span>
								</div>

								<span class="text_inline_block text_middle_low font_oswald_regular today_dust_rank_list_info">미세먼지 87에서 판매지수 89%</span><br>

								<img src="images/graph_01.png" class="today_dust_rank_list_img">

							</div>
							
						</li>
					-->

					</ul>
				</div>
				
			</div><!-- content_center -->





			<div class="section_line"></div>



			<div class="dust_graph">
				<div class="content_center">
					

					<div class="dust_graph_title">
						<span class="text_inline_block text_top_low font_oswald_semi_bold">★ 미세먼지 <span class="font_oswald_regular text_top_low_low">X</span> 카드매출 그래프 통계</span>
					</div>


					<div class="graph_data_info">
						<span class="text_inline_block text_middle font_oswald_regular">※ 데이터 정보 : 서울시 2개의 구(종로구, 노원구) 2018.04.01~2019.03.31</span>
					</div>



					<div class="product_button product_button_list">
						<ul class="product_button_ul">
							
							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">숙박</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">레저용품</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">레저업소</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">문화취미</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">가구</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">전기</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">주방용구</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">연료판매</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">광학제품</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">가전</button>
							</li>




							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">유통업</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">의복</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">직물</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">신변잡화</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">서적문구</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">사무통신</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">자동차 판매</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">자동차 정비</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">의료기관</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">보건위생</button>
							</li>


							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">요식업소</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">음료식품</button>
							</li>

							<li class="product_button_ul_li">
								<button class="text_inline_block text_middle font_oswald_regular" onclick="product_btn(this);">수리서비스</button>
							</li>


						</ul>
					</div><!-- product_button -->




					<div class="product_graph">

						<div class="product_name">
							<span class="text_inline_block text_top_low font_oswald_semi_bold product_name_span">스포츠 용품</span>
						</div>

						<div class="product_name product_name_fixed" onclick="product_fixed_click();">
							<span class="text_inline_block text_top_low font_oswald_semi_bold product_name_span">스포츠 용품</span>
						</div>

						<div class="product_graph_info">
							<ul class="product_graph_info_ul">
								<li class="product_graph_info_ul_li graph_man">

									<div class="sex_title">
										<img src="images/sex_man.png" class="graph_sex_img" width="60px">
										<span class="text_inline_block text_top_low font_oswald_semi_bold" style="vertical-align: middle;">남자</span>
									</div>


									<div class="product_graph_age_list">
										<div class="product_graph_age product_graph_man_20">
											<img src="images/graph_01.png" width="100%"><br>
											<span class="text_inline_block text_top_low_low font_oswald_semi_bold">청년층</span>
										</div>

										<div class="product_graph_age product_graph_man_30">
											<img src="images/graph_01.png" width="100%"><br>
											<span class="text_inline_block text_top_low_low font_oswald_semi_bold">중년층</span>
										</div>

										<div class="product_graph_age product_graph_man_50">
											<img src="images/graph_01.png" width="100%"><br>
											<span class="text_inline_block text_top_low_low font_oswald_semi_bold">노년층</span>
										</div>
									</div>


								</li>

								<li class="product_graph_info_ul_li graph_woman">
									<div class="sex_title">
										<img src="images/sex_woman.png" class="graph_sex_img" width="60px">
										<span class="text_inline_block text_top_low font_oswald_semi_bold" style="vertical-align: middle;">여자</span>
									</div>

									<div class="product_graph_age_list">
										<div class="product_graph_age product_graph_woman_20">
											<img src="images/graph_01.png" width="100%"><br>
											<span class="text_inline_block text_top_low_low font_oswald_semi_bold">청년층</span>
										</div>

										<div class="product_graph_age product_graph_woman_30">
											<img src="images/graph_01.png" width="100%"><br>
											<span class="text_inline_block text_top_low_low font_oswald_semi_bold">중년층</span>
										</div>

										<div class="product_graph_age product_graph_woman_50">
											<img src="images/graph_01.png" width="100%"><br>
											<span class="text_inline_block text_top_low_low font_oswald_semi_bold">노년층</span>
										</div>
									</div>


								</li>

							</ul>
						</div>

					</div><!-- product_graph -->


				</div>
			</div>




			<div class="section_line"></div>




			<div class="data_info">
				<div class="content_center">

					<div class="card_info">
						<div class="card_info_title" style="text-align:center;">
							<span class="text_inline_block text_top_low_low font_oswald_semi_bold">< 카드매출 데이터 정보 안내 ></span>
						</div>

						<ul class="card_info_ul">
							<li class="card_info_ul_li">
								<span class="text_inline_block text_middle font_oswald_regular">
									숙박 – 호텔, 모텔, 기타숙박<br>
									레저용품 – 스포츠용품, 악기 및 음반<br>
									레저업소 – 실내·외 레저 및 오락시설<br>
									문화취미 – 동물원, 극장, 경기장<br>
									가구 – 목재·철재가구<br>
									전기 –  냉난방기구<br>
									주방용구 – 주방기구 및 용품, 정수기<br>
									연료판매 – 주유소, 가정용연료<br>
									광학제품 – 사진기, 사진관
								</span>
							</li>

							<li class="card_info_ul_li">
								<span class="text_inline_block text_middle font_oswald_regular">
									가전 – 가전, 가전용품<br>
									유통업 – 백화점, 마트, 자동판매기<br>
									의복 – 기성복, 양복, 내의<br>
									직물 – 침구류, 커텐, 카페트<br>
									신변잡화 – 가방, 신발, 시계<br>
									서적문구 – 문구, 기자채, 서적<br>
									사무통신 – 사무기기, 소프트웨어<br>
									자동차판매 – 자동차, 오토바이<br>
									자동차정비 – 정비, 세차, 견인서비스


								</span>
							</li>

							<li class="card_info_ul_li">
								<span class="text_inline_block text_middle font_oswald_regular">
									의료기관 – 약국, 병원, 보건소<br>
									보건위생 – 화장품, 목욕탕<br>
									요식업소 – 카페, 음식점, 주점<br>
									음료식품 – 농·수산식자재<br>
									수리서비스 – 세탁소, 각종수리점


								</span>
							</li>
						</ul>
						
					</div>

				</div>
			</div>


		</div><!-- all_wrap -->

			


		
    

	</body>
</html>
		
