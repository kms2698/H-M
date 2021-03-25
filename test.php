<!-- <?php
            $conn = mysqli_connect("localhost","root",1234,'study');
	        $sql="SELECT * FROM food";
            $result=mysqli_query($conn,$sql);
            $board=mysqli_fetch_array($result);
            echo $board['fo_kind'];
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>주차장 빈공간 안내 시스템</title>
    <link rel="stylesheet" type="text/css" href="test.css"/>

</head>
<body>

<div class="box1" >주차장 빈공간 안내 시스템</div>

<div id="map"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3d2fabc7ec0731f1ea29ad9dd9a67198"></script>

<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.247577819457305, 127.0157852181996), // 지도의 중심좌표 (집으로 설정함)
        level: 1 // 지도확대레벨
    };

// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption); 
var circle = new kakao.maps.Circle({
    center : new kakao.maps.LatLng(37.24804865875466, 127.01545563379784),  // 원의 중심좌표 입니다 
    radius: 100, // 미터 단위의 원의 반지름입니다 
    strokeWeight: 5, // 선의 두께입니다 
    strokeColor: '#75B8FA', // 선의 색깔입니다
    strokeOpacity: 1, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'dashed', // 선의 스타일 입니다
    fillColor: '#CFE7FF', // 채우기 색깔입니다
    fillOpacity: 0.7  // 채우기 불투명도 입니다   
}); 

// 지도에 원을 표시합니다 
circle.setMap(map); 

// 마커를 표시할 위치와 내용을 가지고 있는 객체 배열입니다

var positions = [
    {   
        content: "현재 나의 위치",
        latlng: new kakao.maps.LatLng(37.24804865875466, 127.01545563379784),
    },
    {   
        content: "주차장1",
        latlng: new kakao.maps.LatLng(37.24754865875466, 127.01545563379784),
    },
    {   
        content: "주차장2",
        latlng: new kakao.maps.LatLng(37.24754865875466, 127.01458593379784),
    }
    
    
];
// 내위치 마커만 특별하게
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
var imageSize = new kakao.maps.Size(24, 35);
var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize);
var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[0].latlng, // 마커의 위치
        clickable: true, // 마커를 클릭했을 때 지도의 클릭 이벤트가 발생하지 않도록 설정합니다
        image : markerImage // 마커 이미지 
    });

    // 마커에 표시할 인포윈도우를 생성합니다 
    var infowindow = new kakao.maps.InfoWindow({
        content: positions[0].content // 인포윈도우에 표시할 내용
        
    });
    var iwContent = '<div style="padding:5px;">현재 나의 위치 <br><a href="https://map.kakao.com/link/map/Hello World!,33.450701,126.570667" style="color:blue" target="_blank">큰지도보기</a> <a href="https://map.kakao.com/link/to/Hello World!,33.450701,126.570667" style="color:blue" target="_blank">길찾기</a></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwPosition = new kakao.maps.LatLng(37.24804865875466, 127.01545563379784); //인포윈도우 표시 위치입니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    position : iwPosition, 
    content : iwContent 
});
infowindow.open(map, marker); 




////////////////////////////////////
for (var i = 1; i < positions.length; i++) {
    // 마커를 생성합니다   
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커의 위치
        clickable: true, // 마커를 클릭했을 때 지도의 클릭 이벤트가 발생하지 않도록 설정합니다

    });

    // 마커에 표시할 인포윈도우를 생성합니다 
    var infowindow = new kakao.maps.InfoWindow({
        content: positions[i].content // 인포윈도우에 표시할 내용
        
    });


    // 마커에 mouseover 이벤트와 mouseout 이벤트를 등록합니다
    // 이벤트 리스너로는 클로저를 만들어 등록합니다 
    // for문에서 클로저를 만들어 주지 않으면 마지막 마커에만 이벤트가 등록됩니다
    kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
    kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
    // kakao.maps.event.addListener(marker, 'click', function() {
    //   // 마커 클릭시 특정 웹사이트 열기
    //   // 이제 여기에 몇번째 마커인지를 이용해서 우리 이미지도 열 수 있을듯
    //   open("http://t1.daumcdn.net/friends/prod/editor/dc8b3d02-a15a-4afa-a88b-989cf2a50476.jpg");
        
    // });  
    kakao.maps.event.addListener(marker, 'click',showPopup());


}


// 인포윈도우를 표시하는 클로저를 만드는 함수입니다 
function makeOverListener(map, marker, infowindow) {
    return function () {
        infowindow.open(map, marker);
    };
}

// 인포윈도우를 닫는 클로저를 만드는 함수입니다 
function makeOutListener(infowindow) {
    return function () {
        infowindow.close();
    };
} 
// 마커 클릭시 팝업으로 이미지를 띄우는 함수입니다.
function showPopup() {
    return function () {
        window.open("i1.png", "a", "width=400, height=300, left=100, top=50"); 
    };

}


var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };


// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
var mapTypeControl = new kakao.maps.MapTypeControl();

// 지도에 컨트롤을 추가해야 지도위에 표시됩니다
// kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
var zoomControl = new kakao.maps.ZoomControl();
map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
</script>

</body>
</html>
