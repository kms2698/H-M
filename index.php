<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>주차장 빈공간 안내 시스템</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- favicon 추가 -->
    <link rel="shortcut icon" href="/img/favicon-32x32.png">
    <link rel="icon" href="/img/favicon-32x32.png">
</head>

<body>
    <div class="box-container">
        <div class="box1">
            <div class="title">
                <!-- <a href="/index.php"> -->
                <img id="example_image_large" src="/img/title.png" alt="HM" title="HM" , width=100%, height=auto>
                <img id="example_image_small" src="/img/logo.png" alt="HM" title="HM" , width=100%, height=auto>
                <!-- </a> -->
                <!-- 주차장 빈공간 안내 시스템 -->
                <img id="example_image_large" src="/img/title_name.png" alt="주차장 빈공간 안내 시스템" title="주차장 빈공간 안내 시스템" , width=100%, height=auto>
                
            </div>
            <div class="git">
                <a href="https://github.com/kms2698/H-M", target="_blank">
                    <img id="example_image_large" src="/img/Github.png" alt="github" title="Github로 이동" , width=100%, height=auto>
                </a>
            </div>
        </div>

        <div class="box2">     
            <div id="map"></div>
        </div>

        <div class="box3">
            <form class="button" name="form" action="" method="post">
                <select name="radius">
                    <option value=0.05>반경입력</option>
                    <option value=0.05>50m</option>
                    <option value=0.1>100m</option>
                    <option value=0.25>250m</option>
                    <option value=0.5>500m</option>
                    <option value=1>1km</option>
                </select>
                <input type="submit" name="submit" value="확인">
            </form>
            
            <div class=card_list>
            <?php
                $selected = 100;
                if(isset($_POST['radius'])){
                    if(!empty($_POST['radius'])) {
                        $selected = $_POST['radius'];
                    } else {
                    }
                }
                function getDistance($lat1, $lng1, $lat2, $lng2){
                    $earth_radius = 6371;
                    $dLat = deg2rad($lat2 - $lat1);
                    $dLon = deg2rad($lng2 - $lng1);
                    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
                    $c = 2 * asin(sqrt($a));
                    $d = $earth_radius * $c;
                    return $d;
                }
                $conn = mysqli_connect("localhost","root",root,'hm');
                if (mysqli_connect_errno()){
                    echo "연결실패" . mysqli_connect_error();
                }
                $result = mysqli_query($conn,"SELECT * FROM parkinglot");
                $n = 1;
                while($row = mysqli_fetch_array($result)){
                    if(getDistance($row['x'],$row['y'],37.296352,126.838889) < $selected ){
                    
                    echo    '<div class="card">';
                    echo        '<div class="header">';
                    echo             '' . $row['name'] . '';                    
                    echo         '</div>';
                    echo         '<div class="block">';
                    echo             '<div class="total-block">';
                    echo                 '<div>';
                    echo                     '<h2>'. $row['total_space'] .'</h2>';
                    echo                 '</div>';
                    echo                 '<div>';
                    echo                     '<h6>전체공간</h6>';
                    echo                 '</div>';
                    echo             '</div>';
                    echo             '<div class="recent-block">';
                    echo                 '<div>';
                    echo                     '<h2>'. $row['empty_space'] .'</h2>';
                    echo                 '</div>';
                    echo                 '<div>';
                    echo                     '<h6>남은공간</h6>';
                    echo                 '</div>';
                    echo             '</div>';
                    echo         '</div>';  
                    echo     '</div>';
                }
                    $n++;
                }
                // mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
<!-- body 끝 script 시작 -->
<!-- 민상 api -->
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=8a22c92620ce18ced038eefd01097d13"></script>
<!-- 효원 api -->
<!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=2ce674d31d7a0ac54f9b679b2e14b77b"></script> -->
<script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = {
            center: new kakao.maps.LatLng(37.296352, 126.838889), // 지도의 중심좌표 (집으로 설정함)
            level: 3 // 지도확대레벨
        };

    // 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
    var map = new kakao.maps.Map(mapContainer, mapOption);  // 지도 생성


    /* --------------현재위치 함수 --------------*/
    // HTML5의 geolocation으로 사용할 수 있는지 확인합니다 
    if (navigator.geolocation) {
        // GeoLocation을 이용해서 접속 위치를 얻어옵니다
        navigator.geolocation.getCurrentPosition(function (position) {

            var lat = 37.296352, lon = 126.838889; // 위도 경도
            var locPosition = new kakao.maps.LatLng(lat, lon); // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
            
            
            // 마커와 인포윈도우를 표시합니다
            displayMarker(locPosition, message);
            var circle = new kakao.maps.Circle({

                center: new kakao.maps.LatLng(lat, lon),  // 원의 중심좌표 입니다 
                radius: "<?php echo 1000*$selected; ?>", // 미터 단위의 원의 반지름입니다 
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

    } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다 -> 학교 위치로 설정할것임
        var locPosition = new kakao.maps.LatLng(37.296352, 126.838889),
            message = 'geolocation을 사용할수 없어요..'

        displayMarker(locPosition, message);
    }

    function displayMarker(locPosition, message) {
        // 현재위치 마커
        var imageSrc = "/img/now.png";
        var imageSize = new kakao.maps.Size(64, 64);
        var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize)

        // 마커를 생성합니다
        var marker = new kakao.maps.Marker({
            map: map,
            position: locPosition,
            clickable: true, // 마커를 클릭했을 때 지도의 클릭 이벤트가 발생하지 않도록 설정합니다
            image: markerImage // 마커 이미지 
        });
        // 지도 중심좌표를 접속위치로 변경합니다
        map.setCenter(locPosition);

    }
    /* ---------------------------------------------------*/
    // 마커 위치와 배열
    let positions = [
        <?php
            $result = mysqli_query($conn,"SELECT * FROM parkinglot");
            $n = 0;
            while($row = mysqli_fetch_array($result)){
                echo '{';
                echo    'content: "' . $row['name'] . '",';
                echo    'latlng: new kakao.maps.LatLng(' . $row['x'] . ',' . $row['y'] . '),';
                echo    'ratio: "' . $row['full_space']/$row['total_space']  . '",';
                echo '},';
                $n++;
            }
            // mysqli_close($conn);    
        ?>
    ];
    // 마커 이미지 추가 /Red/Green 상황에 따라 변화 예정
    var redimageSrc = '/img/red.png',
        imageSize = new kakao.maps.Size(65, 65);
    var greenimageSrc = '/img/green.png',
        imageSize = new kakao.maps.Size(65, 65);
    var grayimageSrc = '/img/gray.png',
        imageSize = new kakao.maps.Size(65, 65);

    var redmarkerImage = new kakao.maps.MarkerImage(redimageSrc, imageSize);
    var greenmarkerImage = new kakao.maps.MarkerImage(greenimageSrc, imageSize);
    var graymarkerImage = new kakao.maps.MarkerImage(grayimageSrc, imageSize);

    var getImageByCondition = (x, y, ratio) => {
        if(x > y) return graymarkerImage;
        else {
            if(ratio < 0.7){
                return greenmarkerImage;
            }
            else return redmarkerImage;
        }
    }
    function getDistanceFromLatLonInKm(lat1,lng1,lat2,lng2) {
        function deg2rad(deg) {
            return deg * (Math.PI/180)
        }

        var R = 6371; // Radius of the earth in km
        var dLat = deg2rad(lat2-lat1);  // deg2rad below
        var dLon = deg2rad(lng2-lng1);
        var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon/2) * Math.sin(dLon/2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        var d = R * c; // Distance in km
        return d;
    }

    for (let i = 0; i < positions.length; i++) {
        // 마커를 생성합니다   
        var marker = new kakao.maps.Marker({
            map: map, // 마커를 표시할 지도
            position: positions[i].latlng, // 마커의 위치
            clickable: true, // 마커를 클릭했을 때 지도의 클릭 이벤트가 발생하지 않도록 설정합니다
            image:  getImageByCondition(getDistanceFromLatLonInKm(positions[i].latlng["La"],positions[i].latlng["Ma"],126.838889,37.296352), <?php echo $selected; ?>,positions[i].ratio),
  
        });

        // 마커에 표시할 인포윈도우를 생성합니다 
        var infowindow = new kakao.maps.InfoWindow({
            content: '<div style="width:150px;text-align:center;font-size:8px;padding-top:4px;">'+positions[i].content+'</div>' // 인포윈도우에 표시할 내용
        });


        // 마커에 mouseover 이벤트와 mouseout 이벤트를 등록합니다
        // 이벤트 리스너로는 클로저를 만들어 등록합니다 
        // for문에서 클로저를 만들어 주지 않으면 마지막 마커에만 이벤트가 등록됩니다
        kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
        kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
        kakao.maps.event.addListener(marker, 'click', function() {
            open('https://map.kakao.com/link/to/'+positions[i].content +',' +  positions[i].latlng['Ma'] + ","+ positions[i].latlng['La']);
  
        });  
        // kakao.maps.event.addListener(marker, 'click', showPopup());       
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

    // 지도 확대 축소 줌 컨트롤을 생성합니다
    var zoomControl = new kakao.maps.ZoomControl();
    map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
</script>

</body>
</html>