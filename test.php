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
    <!-- favicon 추가 -->
    <link rel=" shortcut icon" href="/img/favicon-32x32.png">
    <link rel="icon" href="/img/favicon-32x32.png">
</head>

<body>
    <div class="main">
        <div class="sidebar">
            <div class="title">
                <a href="/test.php">
                    <img src="/img/title.png" alt="HM" title="HM", width=180px, height=90px>
                </a>
                주차장 빈공간 안내 시스템
            </div>
            <div class="git">
                <a href="https://github.com/kms2698/H-M", target="_blank">
                    <img src="/img/GitHub-Mark.png", width=32px, height=32px>
                </a>
                Github
            </div>
        </div>


        <div id="map">
            <!-- 효원 api -->
            <!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3d2fabc7ec0731f1ea29ad9dd9a67198"></script> -->
            <!-- 민상 api -->
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=8a22c92620ce18ced038eefd01097d13"></script>

            <script>
                var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                    mapOption = { 
                        center: new kakao.maps.LatLng(37.247577819457305, 127.0157852181996), // 지도의 중심좌표 (집으로 설정함)
                        level: 1 // 지도확대레벨
                    };

                // 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
                var map = new kakao.maps.Map(mapContainer, mapOption);  // 지도 생성


                /* --------------현재위치 함수 --------------*/
                // HTML5의 geolocation으로 사용할 수 있는지 확인합니다 
                if (navigator.geolocation) {
                    
                    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                    navigator.geolocation.getCurrentPosition(function(position) {
                        
                        var lat = position.coords.latitude, // 위도
                            lon = position.coords.longitude; // 경도
                        
                        var locPosition = new kakao.maps.LatLng(lat, lon), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
                            message = '<div style="padding:5px;text-align:center">현재 나의 위치</div>'; // 인포윈도우에 표시될 내용입니다
                        
                        // 마커와 인포윈도우를 표시합니다
                        displayMarker(locPosition, message);

                        var circle = new kakao.maps.Circle({

                            center : new kakao.maps.LatLng(lat, lon),  // 원의 중심좌표 입니다 
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
                            
                    });
                    
                } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
                    
                    var locPosition = new kakao.maps.LatLng(33.450701, 126.570667),    
                        message = 'geolocation을 사용할수 없어요..'
                        
                    displayMarker(locPosition, message);
                }

                // 지도에 마커와 인포윈도우를 표시하는 함수입니다
                function displayMarker(locPosition, message) {
                    // 내위치 마커만 특별하게
                    var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
                    var imageSize = new kakao.maps.Size(24, 35);
                    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize)

                    // 마커를 생성합니다
                    var marker = new kakao.maps.Marker({  
                        map: map, 
                        position: locPosition,
                        clickable: true, // 마커를 클릭했을 때 지도의 클릭 이벤트가 발생하지 않도록 설정합니다
                        image : markerImage // 마커 이미지 
                    }); 
                    
                    var iwContent = message, // 인포윈도우에 표시할 내용
                        iwRemoveable = false;

                    // 인포윈도우를 생성합니다
                    var infowindow = new kakao.maps.InfoWindow({
                        content : iwContent,
                        removable : iwRemoveable
                    });
                    
                    // 인포윈도우를 마커위에 표시합니다 
                    infowindow.open(map, marker);
                    
                    // 지도 중심좌표를 접속위치로 변경합니다
                    map.setCenter(locPosition);    

                }
                /* ---------------------------------------------------*/
                
                
                
                // 마커를 표시할 위치와 내용을 가지고 있는 객체 배열입니다

                var positions = [
                    // #0
                    {   
                        content: "제 12호 자투리 주차장",
                        latlng: new kakao.maps.LatLng(37.24804865875466, 127.01545563379784),
                    },
                    // #1
                    {   
                        content: '<div class="wrap">' + 
                                '    <div class="info">' + 
                                '        <div class="title">' + 
                                '            거주자 우선 주차(유료)' + 
                                '        </div>' + 
                                '        <div class="body">' + 
                                '            <div class="img">' +
                                '                <img src="/img/test.gif" width="200" height="200">' +
                                '           </div>' + 
                                '            <div class="title">' + 
                                '                <div class="ellipsis">32-951 ~ 32-985 (35대)</div>' + 
                                '            </div>' + 
                                '        </div>' + 
                                '    </div>' +    
                                '</div>',
                        latlng: new kakao.maps.LatLng(37.24754865875466, 127.01545563379784),
                    },
                    // #2
                    {   
                        content: "미영아파트 주차장",
                        latlng: new kakao.maps.LatLng(37.24754865875466, 127.01458593379784),
                    },
                    // #3
                    {   
                        content: "주차장1",
                        latlng: new kakao.maps.LatLng(37.25040007017113, 127.0177019705559),
                    },
                    // #4
                    {   
                        content: "주차장2",
                        latlng: new kakao.maps.LatLng(37.247293986252004, 127.01581615448784),
                    },
                    // #5
                    {   
                        content: "주차장3",
                        latlng: new kakao.maps.LatLng(37.24672403557383, 127.0161118992067),
                    },
                ];


                ////////////////////////////////////
                for (var i = 0; i < positions.length; i++) {
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


                // 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
                var mapTypeControl = new kakao.maps.MapTypeControl();

                // 지도에 컨트롤을 추가해야 지도위에 표시됩니다
                // kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
                map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

                // 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
                var zoomControl = new kakao.maps.ZoomControl();
                map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);

            </script>
    </div>
</div>


</body>
</html>
