<html>	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title> openAPI 통계청:공간정보서비스과 </title>
<script src=http://sgis.kostat.go.kr/OpenAPI2/Key.do?serviceKey=NBsJn4BOWy5bIg7rdiBBzB3kT9R6eyJnHyaAuUtwpfbKMsD4Sgny5xvPKBStGYqY7LqM25Be%2F1EmCKexG1MgNQ%3D%3D" type="text/javascript" ></script>
<script type="text/javascript">
var userURL = "http://hansbuild.cafe24.com/dust/";				
function fncGeoCode() {
	var url = userURL + "/AjaxRequest.jsp?getUrl=";
	var subURL = "http://openapi.airkorea.or.kr/openapi/services/rest/ArpltnInforInqireSvc/getCtprvnMesureSidoLIst?serviceKey=NBsJn4BOWy5bIg7rdiBBzB3kT9R6eyJnHyaAuUtwpfbKMsD4Sgny5xvPKBStGYqY7LqM25Be%2F1EmCKexG1MgNQ%3D%3D&numOfRows=10&pageNo=1&sidoName=%EC%84%9C%EC%9A%B8&searchCondition=HOUR";
	url += encodeURIComponent(subURL);
	$.ajax({
	 "url" : url,
	"type" : "GET",
	"success" : function(result) {
	      if(result == null || result == ""){
		alert("해당 주소로 얻을수 있는 좌표가 없습니다. 주소값을 다시 입력하세요");
	      }else{
		$.each(result, function(i,value){
	  	  if(result.data == null ){
		       if(i==0){
			$("#x_coords").attr("value",value.posX); 
$("#y_coords").attr("value",value.posY); 
			$("#address").attr("value", value.address);
		      }
		   }
	             });
	      }
	},
	"async" : "false",
	"dataType" : "json",
	"error": function(x,o,e){
		alert(x.status + ":" +o+":"+e);	
	}
	});	
}
</script> 
</head>
<body >
	serviceKey : <input type="text" id="serviceKey" value="NBsJn4BOWy5bIg7rdiBBzB3kT9R6eyJnHyaAuUtwpfbKMsD4Sgny5xvPKBStGYqY7LqM25Be%2F1EmCKexG1MgNQ%3D%3D"/><br />
	지번주소<br />
	시도 : <input type="text" id="sido" value="대전광역시"/><br />
	시군구 : <input type="text" id="sigungu" value="서구"/><br />
읍면동 : <input type="text" id="dong" value="월평동"/><br />
지번 : <input type="text" id="jibun" value="245"/><br />	
	<input type="button" value="GeoCode Service" onclick="fncGeoCode()"/><br />
	중부원점(TM_M)<br />
	X좌표 : <input type="text" id="x_coords" />  Y좌표 : <input type="text" id="y_coords" /><br />
	주 소 : <input type="text" id="address" /><br />
		</body>
</html>
