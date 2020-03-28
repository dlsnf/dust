



<script>
			

			$(window).load(function(){

				
			});


			//상품이름 좌표값
			var product_div_top;
			//버튼들 좌표값
			var product_list_div_top;

			$(window).ready(function(){

				//alert("nuri");
				today_time_get();

				//today_dust_api_ajax();

				//상품 이름 변경
				set_product_name("숙박");

				//상품에 대한 그래프 가져오기
				graph_select_ajax(get_product_name_en("숙박"));


				//상품이름 좌표값
				product_div_top = $(".product_name").offset().top;

				product_list_div_top = $(".dust_graph_title").offset().top;


			});




			$(window).scroll(windowScroll);
			$(window).resize(winodwResize);



			function windowScroll()
			{				
				//스크롤 좌표갑
				var toppx = $(document).scrollTop();

				if ( ( product_div_top + $(".product_name").height() ) <= toppx)
				{
					//활성화
					$(".product_name_fixed").show();
				}else{
					//비활성화
					$(".product_name_fixed").hide();
				}
				
			}


			function winodwResize()
			{
				

			}



			function product_btn(name)
			{
				var el = $(name);
				var el_text = el.text();

				//상품 이름 변경
				set_product_name(el_text);

				//상품에 대한 그래프 가져오기
				graph_select_ajax(get_product_name_en(el_text),"woman");
			}

			function product_fixed_click()
			{
				//alert(product_list_div_top);

				$('html, body').animate({scrollTop : product_list_div_top - 40}, 200);

			}





			function get_product_name_en(product)
			{

				switch (product)
				{
					case "가구": 
						return "furniture";
					break;
					case "가전": 
						return "appliances";
					break;
					case "광학제품": 
						return "optics";
					break;
					case "레저업소": 
						return "leisure";
					break;
					case "레저용품": 
						return "leisure_goods";
					break;
					case "문화취미": 
						return "culture";
					break;
					case "보건위생": 
						return "health";
					break;
					case "사무통신": 
						return "communication";
					break;
					case "서적문구": 
						return "books";
					break;
					case "수리서비스": 
						return "repair";
					break;
					case "숙박": 
						return "lodgment";
					break;
					case "신변잡화": 
						return "stuff";
					break;
					case "연료판매": 
						return "fuel";
					break;
					case "요식업소": 
						return "restaurant";
					break;
					case "유통업": 
						return "circulation";
					break;
					case "음료식품": 
						return "beverage";
					break;
					case "의료기관": 
						return "medical";
					break;
					case "의복": 
						return "cloth";
					break;
					case "자동차 정비": 
						return "car_repair";
					break;
					case "자동차 판매": 
						return "car";
					break;
					case "전기": 
						return "electric";
					break;
					case "주방용구": 
						return "kitchen";
					break;
					case "직물": 
						return "textile";
					break;

					default:
						alert("상품 이름값 입력 에러");
					break;
				}



			}

			function get_product_name_kr(product)
			{

				switch (product)
				{
					case "furniture": 
						return "가구";
					break;
					case "appliances": 
						return "가전";
					break;
					case "optics": 
						return "광학제품";
					break;
					case "leisure": 
						return "레저업소";
					break;
					case "leisure_goods": 
						return "레저용품";
					break;
					case "culture": 
						return "문화취미";
					break;
					case "health": 
						return "보건위생";
					break;
					case "communication": 
						return "사무통신";
					break;
					case "books": 
						return "서적문구";
					break;
					case "repair": 
						return "수리서비스";
					break;
					case "lodgment": 
						return "숙박";
					break;
					case "stuff": 
						return "신변잡화";
					break;
					case "fuel": 
						return "연료판매";
					break;
					case "restaurant": 
						return "요식업소";
					break;
					case "circulation": 
						return "유통업";
					break;
					case "beverage": 
						return "음료식품";
					break;
					case "medical": 
						return "의료기관";
					break;
					case "cloth": 
						return "의복";
					break;
					case "car_repair": 
						return "자동차 정비";
					break;
					case "car": 
						return "자동차 판매";
					break;
					case "electric": 
						return "전기";
					break;
					case "kitchen": 
						return "주방용구";
					break;
					case "textile": 
						return "직물";
					break;

					default:
						alert("상품 이름값 입력 에러");
					break;
				}



			}

			function get_age_kr(age)
			{

				
				switch (age)
				{
					case "20": 
						return "청년층";
					break;
					case "30": 
						return "중년층";
					break;
					case "50": 
						return "노년층";
					break;
					default:
						alert("나이 입력 에러");
					break;
				}
			}

			function get_sex_kr(sex)
			{

				switch (sex)
				{
					case "man": 
						return "남자";
					break;
					case "woman": 
						return "여자";
					break;
					default:
						alert("성별 입력 에러");
					break;
				}



			}



			function graph_select_ajax(card_name){


				//카드매출 종류
				var card_name_data = card_name;
				//성별
				//var sex_data = sex;


				//var URL = "graph_select_ajax.php?card_name="+card_name_data+"&sex="+sex_data;



				$.ajax({
					type:"POST",
					url:"graph_select_ajax.php",
					data: {'card_name' : card_name_data},
					dataType:"json",
					traditional: true,
					contentType: "application/x-www-form-urlencoded;charset=utf-8",
					success:function( data ){
						//길이
						//console.log(data);
						//alert(data[0].card_name);
						//console.log(data);



						//화면 바꾸기
						for(var i = 0; i < data.length; i++)
						{

							set_product_replace(data[i].card_name, data[i].sex, data[i].age, data[i].file_name);

						}


					},
					error:function(e){
							//alert("ajax 에러");
							alert( "ajax 에러 : " + e.responseText );
						}
					});
				


				//alert(card_name);

			}

			function set_product_name(product_name)
			{
				var product_name_data = product_name;

				$(".product_name_span").empty();
				$(".product_name_span").append(product_name_data);
			}


			function set_product_replace(product_name, sex, age, file_name)
			{
				var product_name_data = product_name;
				var sex_data = sex;
				var age_data = age;
				var file_name_data = encodeURI(file_name);

				//console.log(file_name_data);


				$(".product_graph_"+sex_data+"_"+age_data+" img").remove();

				var prepend_text = "<img src='images/"+file_name_data+"' width='100%'>";

				$(".product_graph_"+sex_data+"_"+age_data).prepend(prepend_text);
			}





			function today_dust_api_ajax(){


				var URL = "http://openapi.airkorea.or.kr/openapi/services/rest/ArpltnInforInqireSvc/getCtprvnMesureSidoLIst?serviceKey=NBsJn4BOWy5bIg7rdiBBzB3kT9R6eyJnHyaAuUtwpfbKMsD4Sgny5xvPKBStGYqY7LqM25Be%2F1EmCKexG1MgNQ%3D%3D&numOfRows=10&pageNo=1&sidoName=%EC%84%9C%EC%9A%B8&searchCondition=HOUR&_returnType=json";


				$.ajax({
					type:"GET",
					url: URL,
					dataType:"json",
					async: "true",
					traditional: true,
					contentType: "application/x-www-form-urlencoded;charset=utf-8",
					success:function( data ){
						//길이
						//alert(data.list.length);
						//alert(data.list[0].cityName);

						console.log(data);


						var city;
						var pm10;

						for(var i = 0; i < data.list.length; i++)
						{
							if( data.list[i].cityName == "노원구")
							{
								//alert(data.list[i].cityName);
								//alert(data.list[i].pm10Value);

								city = data.list[i].cityName;
								pm10 = data.list[i].pm10Value;

								break;
							}
						}

						//alert(city);
						//alert(pm10);

						reload_dust(pm10);

						//상품이름 좌표값
						product_div_top = $(".product_name").offset().top;

						product_list_div_top = $(".dust_graph_title").offset().top;
						


					},
					error:function(x,o,e){
							dust_clear();
							alert("공공데이터 ajax 에러 : CORS 크로스도메인을 활성화 하세요.");
							
							//alert( "ajax dust 에러 : " + e.responseText );
							//alert(x.status + ":" +o+":"+e);	
						}
					});


			}



			var pm_status = "좋음";
			var pm_status_val = 1;

			function reload_dust(pm_val){



				pm_status_check(pm_val);

				$(".dust_pm10").empty();
				$(".dust_pm10").append("&nbsp;"+pm_val);

				$(".dust_status").empty();
				$(".dust_status").append("&nbsp;"+pm_status);

			}

			function dust_clear(){
				$(".dust_pm10").empty();
				$(".dust_status").empty();

				$(".today_dust_rank_ul").empty();
				$(".today_dust_rank_ul_2").empty();
			}


			function pm_status_check(pm_val){

				


				if( pm_val <= 30)
				{
					pm_status = "좋음";
					pm_status_val = 1;
				}else if(pm_val <= 80)
				{
					pm_status = "보통";
					pm_status_val = 2;
				}else if(pm_val <= 150)
				{
					pm_status = "나쁨";
					pm_status_val = 3;
				}else{
					pm_status = "매우나쁨";
					pm_status_val = 4;
				}

				product_select_ajax(pm_status_val, pm_val, "DESC");


			}


			function product_select_ajax(dust_count, pm_val, order){

				$.ajax({
					type:"POST",
					url:"product_select_ajax.php",
					data: {'dust_count' : dust_count, 'order_': order},
					dataType:"json",
					traditional: true,
					contentType: "application/x-www-form-urlencoded;charset=utf-8",
					success:function( data ){
						//길이
						//console.log(data);
						//alert(data[0].card_name);
						//console.log(data);

						reload_rank(data, pm_val, order);


/*

						//화면 바꾸기
						for(var i = 0; i < data.length; i++)
						{

							

						}
						*/


					},
					error:function(e){
							//alert("ajax 에러");
							alert( "ajax 에러 : " + e.responseText );
						}
					});

			}

			function get_local_dust(){
				$.ajax({
					type:"POST",
					url:"get_dust_local_ajax.php",
					//data: {'dust_count' : dust_count},
					dataType:"json",
					traditional: true,
					contentType: "application/x-www-form-urlencoded;charset=utf-8",
					success:function( data ){
						//길이
						//console.log(data);
						//alert(data[0].card_name);
						console.log("nuri");
						console.log(data);

						if(data.length == 0)
						{
							dust_clear();
							alert("최근 측정된 미세먼지 값이 없습니다.");

						}else{
							//alert(data[0].dust_val);
							reload_dust(data[0].dust_val);
						}




					},
					error:function(e){
							//alert("ajax 에러");
							alert( "ajax 에러 : " + e.responseText );
						}
					});
			}



			function reload_rank(dust_data, pm_val, order)
			{
				console.log(dust_data);

				
				if( order == "DESC")
				{
					product_select_ajax(pm_status_val, pm_val, "ASC");

					$(".today_dust_rank_ul").empty();
					for(var i = 0; i < dust_data.length; i++)
					{

						var sale_count = dust_data[i].sale_count;
						var today_dust_rank_text = '<li class="today_dust_rank_ul_li"><div class="today_dust_rank_ul_li_div"><span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_num">'+ (i+1) +'.</span><span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_title">'+ get_product_name_kr(dust_data[i].card_name)+'</span><br><div class="rank_sex_age_div"><span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_sex">'+get_sex_kr(dust_data[i].sex)+'</span><span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_age">&nbsp;'+get_age_kr(dust_data[i].age)+'</span></div><span class="text_inline_block text_middle_low font_oswald_regular today_dust_rank_list_info">미세먼지 '+pm_val+'에서 판매지수 '+sale_count+'%</span><br><img src="images/'+ dust_data[i].age + '_'+ dust_data[i].sex+'_'+dust_data[i].card_name+'.png" class="today_dust_rank_list_img"></div></li>';
						//console.log(today_dust_rank_text);
						$(".today_dust_rank_ul").append(today_dust_rank_text);
					}
				}else{ //Worst 상황
					$(".today_dust_rank_ul_2").empty();
					for(var i = 0; i < dust_data.length; i++)
					{

						var sale_count = dust_data[i].sale_count;
						var today_dust_rank_text = '<li class="today_dust_rank_ul_li"><div class="today_dust_rank_ul_li_div"><span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_num">'+ (i+1) +'.</span><span class="text_inline_block text_top_low font_oswald_semi_bold today_dust_rank_list_title">'+ get_product_name_kr(dust_data[i].card_name)+'</span><br><div class="rank_sex_age_div"><span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_sex">'+get_sex_kr(dust_data[i].sex)+'</span><span class="text_inline_block text_top_low_low font_oswald_semi_bold today_dust_rank_list_info_age">&nbsp;'+get_age_kr(dust_data[i].age)+'</span></div><span class="text_inline_block text_middle_low font_oswald_regular today_dust_rank_list_info">미세먼지 '+pm_val+'에서 판매지수 '+sale_count+'%</span><br><img src="images/'+ dust_data[i].age + '_'+ dust_data[i].sex+'_'+dust_data[i].card_name+'.png" class="today_dust_rank_list_img"></div></li>';
						//console.log(today_dust_rank_text);
						$(".today_dust_rank_ul_2").append(today_dust_rank_text);
					}
				}


				
				//상품이름 좌표값
				product_div_top = $(".product_name").offset().top;

				product_list_div_top = $(".dust_graph_title").offset().top;


				
				
			}


			function today_time_get(){
				$.ajax({
					type:"POST",
					url:"today_time_get_ajax.php",
					dataType:"json",
					//traditional: true,
					//contentType: "application/x-www-form-urlencoded;charset=utf-8",
					success:function( data ){
						//alert(data[0].seq);

						//ajax 성공적으로 가져올때
						if(data[0].seq == 1)
						{
							var today_time_text = data[0].get_yaer + "년 " + data[0].get_month + "월 " + data[0].get_day + "일 (" + data[0].get_dayday + ") " + data[0].get_hour + "시 " + data[0].get_minute + "분 " + data[0].get_second + "초";

							$(".today_time_span").empty();
							$(".today_time_span").append(today_time_text);


							//alert(today_time_text);

						}else{
							alert("today_time_get ajax 에러");
						}


					},
					error:function(e){
							//alert("ajax 에러");
							alert( "ajax 에러 : " + e.responseText );
						}
					});
			}




		</script>