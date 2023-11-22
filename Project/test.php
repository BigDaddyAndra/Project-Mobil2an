<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

#tempatnama {
        position: absolute;
        top: 90%;
        left: 2%;
    }

    #crash {
        position: absolute;
        z-index: 1002;
        width: 27%;
        height:40%;
        top: 40%;
        left: 24%;
        cursor: grab;
        display: none;
    }

    #car1 {
        position: absolute;
        z-index: 1002;
        width: 27%;
        height:40%;
        top: 40%;
        left: 22%;
        cursor: grab;
        display: none;
    }

    #car2 {
        position: absolute;
        z-index: 1002;
        width: 27%;
        height:40%;
        top: 40%;
        left: 49%;
        cursor: grab;
        display: none;
    }

    #ganticar {
        left: 94.5%;
        top: 30%;
        z-index: 1002;
        position: absolute;
        width: 5%;
        height: 10%;
        cursor: pointer;

    }

    #balokcar {
        width: 57.5%;
        height: 84%;

        background-color: white;
        opacity: 50%;
        z-index: 1002;
        top: 5%;
        left: 20.5%;
        position: absolute;
        display: none;
        animation: balok 1s;


    }

    #closecar {
        position: absolute;
        width: 4.3%;
        height: 8.5%;
        z-index: 1003;
        top: 6%;
        left: 73.2%;
        background-color: red;
        color: burlywood;
        cursor: grabbing;
        display: none;
        animation: close 1s;
    }

    #balokpopup {
        width: 57.5%;
        height: 84%;

        background-color: white;
        opacity: 50%;
        z-index: 1002;
        top: 5%;
        left: 20.5%;
        position: absolute;
        display: none;
        animation: balok 1s;



    }

    #tabelscore {
        margin-top: 8%;
        width: 100%;
        background-color: red;
        color: aliceblue;


    }

    #balokmap {
        width: 57.5%;
        height: 84%;

        background-color: white;
        opacity: 85%;
        z-index: 1002;
        top: 5%;
        left: 20.5%;
        position: absolute;
        display: none;
        animation: balok 1s;

    }

    #gantimap {
        left: 94.5%;
        top: 16%;
        z-index: 1002;
        position: absolute;
        width: 5%;
        height: 10%;
        cursor: pointer;

    }

    #map1 {
        position: absolute;
        z-index: 1002;
        width: 27%;
        height:40%;
        top: 40%;
        left: 21.5%;
        cursor: grab;
        display: none;
    }

    #map2 {
        position: absolute;
        z-index: 1002;
        width: 27%;
        height:40%;
        top: 40%;
        left: 50%;
        cursor: grab;
        display: none;
    }

    #closemap {
        position: absolute;
        width: 4.3%;
        height: 8.5%;
        z-index: 1003;
        top: 6%;
        left: 73.2%;
        background-color: red;
        color: burlywood;
        cursor: grabbing;
        display: none;
        animation: close 1s;
    }

    #on {
        position: absolute;
        z-index: 1002;
        width: 10%;
        height: 19%;

        top: 10%;
        left: 25%;
        cursor: grabbing;
        display: none;

    }

    #off {
        position: absolute;
        z-index: 1002;
        width: 10%;
        height: 19%;

        top: 10%;
        left: 25%;
        cursor: grabbing;
        display: none;
    }

    #close {
        position: absolute;
        width: 4.3%;
        height: 8.5%;
        z-index: 1003;
        top: 6%;
        left: 73.2%;
        background-color: red;
        color: burlywood;
        cursor: grabbing;
        display: none;
        animation: close 1s;
    }

    #balok {
        width: 57.5%;
        height: 84%;

        background-color: white;
        opacity: 50%;
        z-index: 1002;
        top: 5%;
        left: 20.5%;
        position: absolute;
        display: none;
        animation: balok 1s;


    }

    #setting {
        left: 94.5%;
        top: 3%;
        z-index: 1002;
        position: absolute;
        width: 5%;
        height: 10%;
        cursor: pointer;
    }

    body {
        background: url("background\ kuburan\ seram.jpg") no-repeat center;
        background-size: cover;
        height: 100vh;
        display: grid;
        place-items: center;
    }

    body {
        /* background: url("mapneraka.jpeg") no-repeat center; */
        background-size: cover;
        height: 100vh;
        display: grid;
        place-items: center;
    }

   

    #start {
        position: absolute;
        top:60% ;/*60vh*/
        left:47.8% ; /*47vw */
        z-index: 100;
        font-size: 2rem;
        background-color: red;
        color: white;
        padding: 5px;
        border-radius: 20px;
        cursor: pointer;
    }

    #score {
        position: absolute;
        top: 3%;
        left: 2%;
        font-size: 2rem;
        padding: 5px;
        background-color: rgb(255, 255, 255);
        border-radius: 20px;

    }

    #musuh1 {
        display: grid;
        place-items: center;
        position: relative;
        width: 100px;
        height: 100px;
        left: 250px;
        /*left: 210px;*/
        z-index: 1001;
        animation: musuh1 infinite linear 10s;
    }

    #musuh2 {
        display: grid;
        place-items: center;
        position: relative;
        width: 100px;
        height: 100px;
        left: 100px;
        z-index: 1001;
        animation: musuh2 infinite linear 5s;
    }

    #musuh3 {
        display: grid;
        place-items: center;
        position: relative;
        width: 100px;
        height: 100px;
        left: -100px;
        z-index: 1001;
        animation: musuh3 infinite linear 7s;
    }

    #musuh4 {
        display: grid;
        place-items: center;
        position: relative;
        width: 100px;
        height: 100px;
        left: -300px;/* -270% */
        z-index: 1001;
        animation: musuh4 infinite linear 3s;
    }

    .mm {
        border: 2px solid red;
        width: 80%;

    }

    .mckita {
        width: 100px;
        height: 100px;
        border: 2px solid red;
    }

    #mc {
        width: 100px;
        height: 100px;
        position: relative;
        top: 15vh;

    }
#jalanan {
    background: url(Hit\ the\ Road\,\ Jack!.jpg);
    height: 1200vh; /* 1200vh of 800px */
    width: 50.6%; /* 38.5rem */
    position: relative;
    top: -10%; /* -80vh of 800px */
    z-index: -9;
}
```




    @media screen and (max-width: 800px) {

        #jalanan {
            background: url(Hit\ the\ Road\,\ Jack!.jpg);
            height: 1200vh;
            right: 4rem;
            width: 12rem;
            position: relative;
            top: -80vh;
            z-index: -9;

        }

        #musuh1 {
            display: grid;
            place-items: center;
            position: relative;
            width: 2rem;
            height: 100px;
            left: 270px;
            /*left: 210px;*/
            z-index: 1001;
            animation: musuh1 infinite linear 10s;
        }

        #musuh2 {
            display: grid;
            place-items: center;
            position: relative;
            width: 100px;
            height: 100px;
            left: 100px;
            z-index: 1001;
            animation: musuh2 infinite linear 5s;
        }

        #musuh3 {
            display: grid;
            place-items: center;
            position: relative;
            width: 200px;
            height: 200px;
            left: -110px;
            z-index: 1001;
            animation: musuh3 infinite linear 7s;
        }

        #musuh4 {
            display: grid;
            place-items: center;
            position: relative;
            width: 100px;
            height: 100px;
            left: -300px;
            z-index: 1001;
            animation: musuh4 infinite linear 3s;
        }

        .mm {
            border: 2px solid red;
            width: 40px;

        }

        .mckita {
            width: 100px;
            height: 100px;
            border: 2px solid red;
        }

        #mc {
            width: 100px;
            height: 100px;
            position: relative;
            top: 15vh;

        }
    }

    @keyframes mm1 {
        0% {
            top: -30vh;
        }

        100% {
            top: 100vh;
        }
    }

    @keyframes mm2 {
        0% {
            top: -40vh;
        }

        100% {
            top: 100vh;
        }
    }

    @keyframes mm3 {
        0% {
            top: -60vh;
        }

        100% {
            top: 100vh;
        }
    }

    @keyframes mm4 {
        0% {
            top: -80vh;
        }

        100% {
            top: 100vh;
        }
    }

    @keyframes animasijalanan {
        0% {
            top: -1100vh;
        }

        100% {
            top: -200vh;
        }
    }
</style>

<body>
    <script>
        // let cake= new Audio("./Ballin.mp3");
        // cake.play()
        let nama = "";

        function updateNama() {
            let input = document.querySelector("#tempatnama").value;
            nama = input;
        }
    </script>
    <div id="score">Score : 0</div>
    <button id="start">Start</button>

    <div>
        <div id="musuh1"><img id="mm1" class="mm" src="mobil hotdog.png" alt=""></div>
        <div id="musuh2"><img id="mm2" class="mm" src="dababy.png" alt=""></div>
        <div id="musuh3"><img id="mm3" class="mm" src="mobil polisi car ril.png" alt=""></div>
        <div id="musuh4"><img id="mm4" class="mm" src="fris 1.jpg" alt=""></div>
    </div>

    <div id="mc"><img id="mckita" class="mckita" src="mc.png"></div>
    <div id="jalanan"></div>
    <div id="balok"></div>
    <div id="balokpopup"></div>
    <div id="balokmap" style="overflow: auto;">

        <table id="tabelscore" border="1">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Score</td>
            </tr>

            <?php
                        include "connection.php";

                        $sql = "SELECT * FROM score";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_array()) {
                            echo "<tr>
                                <td>".$row['no']."</td>
                                <td>".$row['nama']."</td>
                                <td>".$row['score']."</td>
                            </tr>";
                        }
                    ?>
        </table>
    </div>
    <button id="ganticar">Ganti Karakter</button>
    <div id="balokcar"></div>
    <div id="balokscore"></div>
    <img id="setting" src="settingicon.png">
    <img id="map2" src="mapneraka.jpeg" alt="" onclick="gantiMap('2')">
    <img id="map1" src="background kuburan seram.jpg" alt="" onclick="gantiMap('1')">
    <img id="car1" src="dogcar.png" onclick="gantiCar('a')">
    <img id="car2" src="mc.png" onclick="gantiCar('i')">
    <img id="crash" src="crash.png">
    <button id="close">Close</button>
    <button id="closemap">Close</button>
    <button id="closecar">Close</button>
    <button id="gantimap">History Score </button>
    <img id="on" src="soundon.png" alt="">
    <img id="off" src="soundoff.png" alt="">
    <input id="tempatnama" name="nama" onchange="updateNama()"></input>
    <script>

        function gantiMap(map) {
            if (map === "1") {
                document.querySelector('body').style.backgroundImage = "url('./kuburan.jpg')";
            } else if (map === "2") {
                document.querySelector('body').style.backgroundImage = "url('./mapneraka.jpeg')";
            }
        }
        function gantiCar(car) {
            if (car === "a") {
                console.log(car)
                document.querySelector('img.mckita').src = "./dogcar.png";
            } else if (car === "i") {
                document.querySelector('img.mckita').src = "./mc.png";
            }
        }


        document.getElementById("gantimap").addEventListener("click", function () {

            document.getElementById("balokmap").style.display = "inline-block"
            document.getElementById("closemap").style.display = "block"

            document.getElementById("closemap").addEventListener("click", function () {
                document.getElementById("balokmap").style.display = "none"
                document.getElementById("closemap").style.display = "none"

                // document.getElementById("map1").addEventListener("click",function(){
                //     // document.querySelectorbody.style.backgroundUrl = "background kuburan seram.jpg"
                //     document.querySelector('body').style.backgroundUrl = "./background kuburan seram.jpg";
                // })
            })
        })
        document.getElementById("setting").addEventListener("click", function () {

            document.getElementById("balok").style.display = "inline-block"
            document.getElementById("on").style.display = "block"
            document.getElementById("off").style.display = "block"
            document.getElementById("close").style.display = "block"


            document.getElementById("map1").style.display = "block"
            document.getElementById("map2").style.display = "block"


            document.getElementById("close").addEventListener("click", function () {
                document.getElementById("balok").style.display = "none"
                document.getElementById("close").style.display = "none"
                document.getElementById("on").style.display = "none"
                document.getElementById("off").style.display = "none"


                document.getElementById("map1").style.display = "none"
                document.getElementById("map2").style.display = "none"
            })
            document.getElementById("on").addEventListener("click", function () {
                document.getElementById("off").style.display = "block"
                document.getElementById("on").style.display = "none"

                audio.play()
                playing = true;
            })
            document.getElementById("off").addEventListener("click", function () {
                document.getElementById("on").style.display = "block"
                document.getElementById("off").style.display = "none"
                audio.pause();
                playing = false;
                audio.currentTime = 0;
            })


        })
        document.getElementById("ganticar").addEventListener("click", function () {

            document.getElementById("balokcar").style.display = "inline-block"
            document.getElementById("car1").style.display = "block"
            document.getElementById("car2").style.display = "block"
            // document.getElementById("on").style.display="block"
            // document.getElementById("off").style.display="block"
            document.getElementById("closecar").style.display = "block"


            // document.getElementById("map1").style.display="block"
            // document.getElementById("map2").style.display="block"


            document.getElementById("closecar").addEventListener("click", function () {
                document.getElementById("car1").style.display = "none"
                document.getElementById("car2").style.display = "none"

                document.getElementById("balokcar").style.display = "none"
                document.getElementById("closecar").style.display = "none"
                //     document.getElementById("on").style.display="none"
                //     document.getElementById("off").style.display="none"


                //     document.getElementById("map1").style.display="none"
                // document.getElementById("map2").style.display="none"
            })
        })
    </script>
    <script>
        let audio = new Audio("musicseram.mp3");
        audio.loop = true;
        let faris1 = new Audio("./faris rawr edited.mp3");
        let tabrak = new Audio("suaratabrakan.mp3");
        document.getElementById("start").addEventListener("click", function () {


            audio.play();


            document.getElementById("start").style.display = 'none'
            document.getElementById("jalanan").style.animation = 'animasijalanan 30s linear infinite'
            document.getElementById("gantimap").style.display = "none"
            document.getElementById("map1").onclick = false
            document.getElementById("map2").onclick = false
            document.getElementById("ganticar").style.display = "none"

            setInterval(() => {
                num = Math.floor(Math.random() * (280 - 225 + 1) + 225)
                document.getElementById("musuh1").style.left = `${num}px`
            }, 9000)

            setInterval(() => {
                num = Math.floor(Math.random() * (150 - 45 + 1) + 45)
                document.getElementById("musuh2").style.left = `${num}px`
            }, 6000)

            setInterval(() => {
                num = Math.floor(Math.random() * (-65 + 140 + 1) - 140)
                document.getElementById("musuh3").style.left = `${num}px`
            }, 4000)

            setInterval(() => {
                num = Math.floor(Math.random() * (-20 - 20 + 1) + 20)
                document.getElementById("musuh4").style.left = `${num}rem`
            }, 2000)

            document.getElementById("musuh1").style.animation = 'mm1 9s linear infinite'
            document.getElementById("musuh2").style.animation = 'mm2 6s linear infinite'
            document.getElementById("musuh3").style.animation = 'mm3 4s linear infinite'
            document.getElementById("musuh4").style.animation = 'mm4 2s linear infinite'

            let t = 15
            let l = 0

            window.addEventListener("keydown", function (x) {

                if (x.keyCode == 87) {
                    t = t - 3
                    // alert("w")

                }
                if (x.keyCode == 65) {
                    l = l - 1
                    // alert("a")
                }
                if (x.keyCode == 83) {
                    t = t + 3
                    // alert("s")
                }
                if (x.keyCode == 68) {
                    l = l + 1
                    // alert("d")
                }
                document.getElementById("mc").style.top = `${t}vh`
                document.getElementById("mc").style.left = `${l}vw`
            })

            function kenaTabrak(nama, score) {
                console.log(nama, score);
                axios.post('/Project/updateScore.php', { nama: nama, score: score }, {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                    .then((res) => {
                        // console.log(res);
                        location.reload();
                    })
                    .catch(console.error);
            }

            n = 0
            setInterval(() => {

                document.getElementById("score").innerText = `Score : ${n}`
                n = n + 1

                var mm1_left = Math.abs(document.getElementById("musuh1").getBoundingClientRect().left);
                var mm1_right = Math.abs(document.getElementById("musuh1").getBoundingClientRect().right);
                var mm1_top = Math.abs(document.getElementById("musuh1").getBoundingClientRect().top);
                var mm1_bottom = Math.abs(document.getElementById("musuh1").getBoundingClientRect().bottom);

                var mm2_left = Math.abs(document.getElementById("musuh2").getBoundingClientRect().left);
                var mm2_right = Math.abs(document.getElementById("musuh2").getBoundingClientRect().right);
                var mm2_top = Math.abs(document.getElementById("musuh2").getBoundingClientRect().top);
                var mm2_bottom = Math.abs(document.getElementById("musuh2").getBoundingClientRect().bottom);

                var mm3_left = Math.abs(document.getElementById("musuh3").getBoundingClientRect().left);
                var mm3_right = Math.abs(document.getElementById("musuh3").getBoundingClientRect().right);
                var mm3_top = Math.abs(document.getElementById("musuh3").getBoundingClientRect().top);
                var mm3_bottom = Math.abs(document.getElementById("musuh3").getBoundingClientRect().bottom);

                var mm4_left = Math.abs(document.getElementById("musuh4").getBoundingClientRect().left);
                var mm4_right = Math.abs(document.getElementById("musuh4").getBoundingClientRect().right);
                var mm4_top = Math.abs(document.getElementById("musuh4").getBoundingClientRect().top);
                var mm4_bottom = Math.abs(document.getElementById("musuh4").getBoundingClientRect().bottom);

                var mc_left = Math.abs(document.getElementById("mc").getBoundingClientRect().left);
                var mc_right = Math.abs(document.getElementById("mc").getBoundingClientRect().right);
                var mc_top = Math.abs(document.getElementById("mc").getBoundingClientRect().top);
                var mc_bottom = Math.abs(document.getElementById("mc").getBoundingClientRect().bottom);

                if (mc_left < 300 || mc_right > 910 || mc_top < 25 || mc_bottom > 690) {
                    document.querySelector('img.mckita').src = "./crash.png"
                    audio.pause();
                    tabrak.play()
                    setTimeout(() => {
                        alert(`FAIL`)
                        document.getElementById("balokpopup").style.display = "inline-block"
                    })
                    kenaTabrak(nama, n);
                    //   location.reload()
                }

                if (((mm1_left < mc_left && mc_left < mm1_right) || (mm1_left < mc_right && mc_right < mm1_right)) && ((mm1_top < mc_top && mc_top < mm1_bottom) || (mm1_top < mc_bottom && mc_bottom < mm1_bottom))) {

                    document.querySelector('img.mckita').src = "./crash.png"
                    audio.pause();
                    tabrak.play()
                    setTimeout(() => {
                        alert(`FAIL`)
                    })
                    kenaTabrak(nama, n);
                    // location.reload()
                }

                if (((mm2_left < mc_left && mc_left < mm2_right) || (mm2_left < mc_right && mc_right < mm2_right)) && ((mm2_top < mc_top && mc_top < mm2_bottom) || (mm2_top < mc_bottom && mc_bottom < mm2_bottom))) {

                    document.querySelector('img.mckita').src = "./crash.png"
                    audio.pause();
                    tabrak.play()
                    setTimeout(() => {
                        alert(`FAIL`)
                    })
                    kenaTabrak(nama, n);
                    // location.reload()
                }

                if (((mm3_left < mc_left && mc_left < mm3_right) || (mm3_left < mc_right && mc_right < mm3_right)) && ((mm3_top < mc_top && mc_top < mm3_bottom) || (mm3_top < mc_bottom && mc_bottom < mm3_bottom))) {

                    document.querySelector('img.mckita').src = "./crash.png"
                    audio.pause();
                    tabrak.play();
                    setTimeout(() => {
                        alert(`FAIL`)

                    })
                    kenaTabrak(nama, n);
                    // location.reload()
                }

                if (((mm4_left < mc_left && mc_left < mm4_right) || (mm4_left < mc_right && mc_right < mm4_right)) && ((mm4_top < mc_top && mc_top < mm4_bottom) || (mm4_top < mc_bottom && mc_bottom < mm4_bottom))) {

                    document.querySelector('img.mckita').src = "./crash.png"
                    audio.pause();
                    faris1.play()

                    setTimeout(() => {
                        alert(`FAIL`)
                    })
                    kenaTabrak(nama, n);
                    // location.reload()
                }




            }, 100)
        })



    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"
        integrity="sha512-WrdC3CE9vf1nBf58JHepuWT4x24uTacky9fuzw2g/3L9JkihgwZ6Cfv+JGTtNyosOhEmttMtEZ6H3qJWfI7gIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>