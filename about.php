<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>about</title>
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
            <div class="about">
                <a href="about.php", target="_blank">
                    <img id="example_image_large" src="/img/About_m.png" alt="about" title="About으로 이동" , width=100%, height=auto>
                </a>
            </div>            
            <div class="git">
                <a href="https://github.com/kms2698/H-M", target="_blank">
                    <img id="example_image_large" src="/img/Github_m.png" alt="github" title="Github로 이동" , width=100%, height=auto>
                </a>
            </div>
        </div>

        <div class="about">
            <h2>About</h2>
            <h3>Model</h3>
            <pre>
        layer     filters    size              input                output
            0 conv     32  3 x 3 / 1   832 x 832 x   3   ->   832 x 832 x  32  1.196 BFLOPs
            1 conv     64  3 x 3 / 2   832 x 832 x  32   ->   416 x 416 x  64  6.380 BFLOPs
            2 conv     32  1 x 1 / 1   416 x 416 x  64   ->   416 x 416 x  32  0.709 BFLOPs
            3 conv     64  3 x 3 / 1   416 x 416 x  32   ->   416 x 416 x  64  6.380 BFLOPs
            4 res    1                 416 x 416 x  64   ->   416 x 416 x  64
            5 conv    128  3 x 3 / 2   416 x 416 x  64   ->   208 x 208 x 128  6.380 BFLOPs
            6 conv     64  1 x 1 / 1   208 x 208 x 128   ->   208 x 208 x  64  0.709 BFLOPs
            7 conv    128  3 x 3 / 1   208 x 208 x  64   ->   208 x 208 x 128  6.380 BFLOPs
            8 res    5                 208 x 208 x 128   ->   208 x 208 x 128
            9 conv     64  1 x 1 / 1   208 x 208 x 128   ->   208 x 208 x  64  0.709 BFLOPs
            10 conv    128  3 x 3 / 1   208 x 208 x  64   ->   208 x 208 x 128  6.380 BFLOPs
            11 res    8                 208 x 208 x 128   ->   208 x 208 x 128
            12 conv    256  3 x 3 / 2   208 x 208 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            13 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            14 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            15 res   12                 104 x 104 x 256   ->   104 x 104 x 256
            16 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            17 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            18 res   15                 104 x 104 x 256   ->   104 x 104 x 256
            19 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            20 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            21 res   18                 104 x 104 x 256   ->   104 x 104 x 256
            22 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            23 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            24 res   21                 104 x 104 x 256   ->   104 x 104 x 256
            25 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            26 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            27 res   24                 104 x 104 x 256   ->   104 x 104 x 256
            28 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            29 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            30 res   27                 104 x 104 x 256   ->   104 x 104 x 256
            31 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            32 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            33 res   30                 104 x 104 x 256   ->   104 x 104 x 256
            34 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
            35 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
            36 res   33                 104 x 104 x 256   ->   104 x 104 x 256
            37 conv    512  3 x 3 / 2   104 x 104 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            38 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            39 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            40 res   37                  52 x  52 x 512   ->    52 x  52 x 512
            41 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            42 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            43 res   40                  52 x  52 x 512   ->    52 x  52 x 512
            44 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            45 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            46 res   43                  52 x  52 x 512   ->    52 x  52 x 512
            47 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            48 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            49 res   46                  52 x  52 x 512   ->    52 x  52 x 512
            50 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            51 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            52 res   49                  52 x  52 x 512   ->    52 x  52 x 512
            53 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            54 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            55 res   52                  52 x  52 x 512   ->    52 x  52 x 512
            56 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            57 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            58 res   55                  52 x  52 x 512   ->    52 x  52 x 512
            59 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            60 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            61 res   58                  52 x  52 x 512   ->    52 x  52 x 512
            62 conv   1024  3 x 3 / 2    52 x  52 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            63 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            64 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            65 res   62                  26 x  26 x1024   ->    26 x  26 x1024
            66 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            67 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            68 res   65                  26 x  26 x1024   ->    26 x  26 x1024
            69 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            70 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            71 res   68                  26 x  26 x1024   ->    26 x  26 x1024
            72 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            73 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            74 res   71                  26 x  26 x1024   ->    26 x  26 x1024
            75 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            76 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            77 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            78 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            79 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
            80 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
            81 conv     21  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x  21  0.029 BFLOPs
            82 yolo
            83 route  79
            84 conv    256  1 x 1 / 1    26 x  26 x 512   ->    26 x  26 x 256  0.177 BFLOPs
            85 upsample            2x    26 x  26 x 256   ->    52 x  52 x 256
            86 route  85 61
            87 conv    256  1 x 1 / 1    52 x  52 x 768   ->    52 x  52 x 256  1.063 BFLOPs
            88 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            89 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            90 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            91 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
            92 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
            93 conv     21  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x  21  0.058 BFLOPs
            94 yolo
            95 route  91
            96 conv    128  1 x 1 / 1    52 x  52 x 256   ->    52 x  52 x 128  0.177 BFLOPs
            97 upsample            4x    52 x  52 x 128   ->   208 x 208 x 128
            98 route  97 11
            99 conv    128  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x 128  2.835 BFLOPs
            100 conv    256  3 x 3 / 1   208 x 208 x 128   ->   208 x 208 x 256  25.518 BFLOPs
            101 conv    128  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x 128  2.835 BFLOPs
            102 conv    256  3 x 3 / 1   208 x 208 x 128   ->   208 x 208 x 256  25.518 BFLOPs
            103 conv    128  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x 128  2.835 BFLOPs
            104 conv    256  3 x 3 / 1   208 x 208 x 128   ->   208 x 208 x 256  25.518 BFLOPs
            105 conv     21  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x  21  0.465 BFLOPs
            106 yolo  
            </pre>
            사용되는 레이어
            Convolutional
            Shortcut
            Upsample
            Route
            Yolo
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
        var imageSize = new kakao.maps.Size(50, 50);
        var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize)

        // 마커를 생성합니다
        var marker = new kakao.maps.Marker({
            map: map,
            position: locPosition,
            clickable: true, // 마커를 클릭했을 때 지도의 클릭 이벤트가 발생하지 않도록 설정합니다
            image: markerImage, // 마커 이미지 
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
    let redimageSrc = '/img/red.png',
        imageSize = new kakao.maps.Size(65, 65),
        imageOption = {offset: new kakao.maps.Point(32.5, 32.5)};
    let greenimageSrc = '/img/green.png';
        // imageSize = new kakao.maps.Size(65, 65),
        // imageOption = {offset: new kakao.maps.Point(32.5, 32.5)};
    let grayimageSrc = '/img/gray.png';
        // imageSize = new kakao.maps.Size(65, 65),
        // imageOption = {offset: new kakao.maps.Point(32.5, 32.5)};

    let redmarkerImage = new kakao.maps.MarkerImage(redimageSrc, imageSize, imageOption);
    let greenmarkerImage = new kakao.maps.MarkerImage(greenimageSrc, imageSize, imageOption);
    let graymarkerImage = new kakao.maps.MarkerImage(grayimageSrc, imageSize, imageOption);

    let getImageByCondition = (x, y, ratio) => {
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
            // open('https://map.kakao.com/link/to/'+positions[i].content +',' +  positions[i].latlng['Ma'] + ","+ positions[i].latlng['La']);
            open('https://map.kakao.com/link/to/'+positions[i].content +',' +  positions[i].latlng['Ma'] + ","+ positions[i].latlng['La']);

        });  
        // kakao.maps.event.addListener(marker, 'click', showPopup());       
    }
    // // 테스트
    // var linePath = [
    //     new kakao.maps.LatLng(37.2993, 126.838),
    //     new kakao.maps.LatLng(37.296352,126.838889)

    // ];

    // var polyline = new kakao.maps.Polyline({
    //     path: linePath,
    //     strokeWeight: 5,
    //     strokeColor: '#FFAE00', // 선의 색깔입니다
    //     strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    //     strokeStyle: 'solid' // 선의 스타일입니다
    // });
    // polyline.setMap(map);

    // var distance = polyline.getLength();
        


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