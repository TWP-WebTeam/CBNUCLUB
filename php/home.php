<?php
 include "../include/session.php";
 include "../include/dbConnect.php";
 include "./include/session.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
        <!-- <link rel="stylesheet" href="../css/chart.css"> -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <title>CBNU CLUB</title>
        <script src="../js/map.js"></script>
        <script src="../js/chart.js"></script>
        <script src="../js/home.js"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

        <script language = "javascript">
            temp = location.href.split("?");
            data = temp[1].split(":");
            clubname = data[0];
            clubgroup = data[1];
            console.log(clubname);
            document.getElementById('clubname').innerHTML = clubname;
            document.getElementById('clubgroup').innerHTML = clubgroup;
            document.getElementById('clubname').innerHTML = clubname;
        </script>
    </head>
    <body>
    <div class="header">
            <div class="Logo">
                <a
                    href="../php/home.php"
                    style="text-decoration: none; color: black; position: fixed; padding-left: 20px; padding-top: 15px;">
                    CBNUCLUB</a>
            </div>
            <div class="menu-bar">
                <ul class="main-menu">
                    <li class="sub-menu">
                        <a href="" style="text-decoration: none; color: black;">
                            ????????? ??????</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/clubpage_status.php" class="sub-list" style="padding-top: 10px;">???????????????</a>
                            </li>
                            <li >
                                <a href="../php/clubpage1.php" class="sub-list" id="list1"
                                    onmouseover="Change_img();"
                                    onmouseout="Change_text();">??????????????????</a>
                            </li>
                            <li>
                                <a href="../php/clubpage2.php" class="sub-list">????????????</a>
                            </li>
                            <li>
                                <a href="../php/clubpage3.php" class="sub-list">??????????????????</a>
                            </li>
                            <li>
                                <a href="../php/clubpage4.php" class="sub-list">???????????????</a>
                            </li>

                            <li>
                                <a href="../php/clubpage5.php" class="sub-list">????????????</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="" style="text-decoration: none; color: black;">????????? ????????????</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/registerform1.php" class="sub-list">????????????</a>
                            </li>
                            <li>
                                <a href="../php/apply.php" class="sub-list">????????????</a>
                            </li> 
                            <li>
                                <a href="../php/out.php" class="sub-list">?????? ????????????</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu" style="margin-top: 3px;">
                        <a href="../php/community_NOTI.php" style="text-decoration: none; color: black;">????????????</a>

                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/community_NOTI.php" class="sub-list">????????????</a>
                            </li>
                            <li>
                                <a href="../php/community_FREE.php" class="sub-list">???????????????</a>
                            </li>
                            <li>
                                <a href="../php/community_QNA.php" class="sub-list">QnA</a>
                            </li>
                            <li>
                                <a href="../php/community_FAQ.php" class="sub-list">FAQ</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="../php/profile.php" style="text-decoration: none; color: black;">?????? ?????????</a>
                    </li>
                    <div id="indicator"></div>
                </ul>
                <span class="menu-toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="gnb">
                <?php
                     if(empty($_SESSION['ses_userid'])){
                    ?>
                <a href="signin.php" id="signin" onclick="Login()">?????????</a>
                <a href="signup.php" id="signup" onclick="Signup()">????????????</a>
                <?php
                }else{
                ?>
                <a href="logout.php" id="signout">????????????</a>
                <?php
                 }
                ?>
                </div>
            </div>
        </div>


        <article>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/001.png" id="s1" alt="chungbuk" width="88%" height="550px"
                style="border: 1px solid rgb(119, 119, 119); border-radius: 3px; box-shadow: 0px 5px 6px rgb(143, 143, 143);">
              </div>
              <div class="carousel-item">
                <img src="../img/003.png" id="s1" alt="chungbuk" width="88%" height="550px"
                style="border: 1px solid rgb(119, 119, 119); border-radius: 3px; box-shadow: 0 5px 6px rgb(92, 92, 92);">
              </div>
              <div class="carousel-item">
                <img src="../img/002.png" id="s1" alt="chungbuk" width="88%" height="550px"
                style="border: 1px solid rgb(119, 119, 119); border-radius: 3px; box-shadow: 0 5px 6px rgb(92, 92, 92);">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section class="content" style="position: absolute; left: 198px; top: 615px;">
            <div class="container"
                style="background-color: white; width: 365px; height: 330px; border-radius: 3px; border: 1px solid rgb(119, 119, 119);">
                <h5 style="padding: 7px; padding-bottom: 0px;">?????????? ?????? ?????????</h5>
                <hr style="position: relative; width: 350px; left: -8px; margin: 1%;">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>????????????</th>
                            <th>????????????</th>
                            <th>????????????</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 48px;">
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="article-title" id="clubname">Nest.net</div></a></td>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="department" id="clubgroup">?????????????????????</div></a></td>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="due-date" id="deadline">2021.06.30</div></a></td>
                        </tr>
                        <tr style="height: 48px;">
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="article-title">????????????</div></a></td>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="department">???????????????</div></a></td>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="due-date">2021.07.02</div></a></td>
                        </tr>
                        <tr style="height: 48px;">
                            <td><a href="../php/clubpage2.php" class="table-content"><div class="article-title">UFC</div></a></td>
                            <td><a href="../php/clubpage2.php" class="table-content"><div class="department">???????????????</div></a></td>
                            <td><a href="../php/clubpage2.php" class="table-content"><div class="due-date">2021.08.29</div></a></td>
                        </tr>
                        <tr style="height: 48px;">
                            <td><a href="../php/clubpage4.php" class="table-content"><div class="article-title">??????</div></a></td>
                            <td><a href="../php/clubpage4.php" class="table-content"><div class="department">????????????</div></a></td>
                            <td><a href="../php/clubpage4.php" class="table-content"><div class="due-date">2021.06.16</div></a></td>
                        </tr>
                        <tr style="height: 48px;"s>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="article-title">?????????</div></a></td>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="department">?????????????????????</div></a></td>
                            <td><a href="../php/clubpage1.php" class="table-content"><div class="due-date">2021.09.02</div></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=""
                style="position: absolute; top: 0px; left: 379px; background-color: white; width: 365px; height: 330px; border-radius: 3px; border: 1px solid rgb(119, 119, 119);">
                <h5 style="padding: 7px; padding-bottom: 0px;">????????????????</h5>
                <hr style="position: relative; width: 350px; left: 2px; margin: 1%;">
                <ul class="list-group">
                    <li><a href="../php/community_NOTI.php" class="list-group-item"><div class="article-title">?????????(????????? ????????? ??????) ????????? ??????????????? ??????</div><div class="created_at">2021.06.07</div></a></li>
                    <li><a href="../php/community_NOTI.php" class="list-group-item"><div class="article-title">[??????????????? ???????????????]2021??? ??????????????? ????????????</div><div class="created_at">2021.05.18</div></a></li>
                    <li><a href="../php/community_NOTI.php" class="list-group-item"><div class="article-title">??????????????? ?????????????????????????????? CIEAT ??????</div><div class="created_at">2021.04.27</div></a></li>
                    <li><a href="../php/community_NOTI.php" class="list-group-item"><div class="article-title">2021????????? 1?????? ??????????????? ?????? ??????</div><div class="created_at">2021.03.22</div></a></li>
                    <li><a href="../php/community_NOTI.php" class="list-group-item"><div class="article-title">2021 ?????????????????? ???????????? ????????? ??????</div><div class="created_at">2021.03.16</div></a></li>
                </ul>
            </div>
            <div class=""
                style="position: absolute; top: 0px; left: 759px; background-color: white; width: 365px; height: 330px; border-radius: 3px; border: 1px solid rgb(119, 119, 119);">
                <h5 style="padding: 7px; padding-bottom: 0px;">???????????????????</h5>
                <hr style="position: relative; width: 350px; left: 2px; margin: 1%;">
                <ul class="list-group">
                    <li><a href="../php/community_FREE.php" class="list-group-item"><div class="article-title">????????? ??????????????????!</div><div class="created_at">2021.06.13</div></a></li>
                    <li><a href="../php/community_FREE.php" class="list-group-item"><div class="article-title">???????????? ?????? ??????</div><div class="created_at">2021.06.12</div></a></li>
                    <li><a href="../php/community_FREE.php" class="list-group-item"><div class="article-title">?????? ?????? ??????????????? ??????????????????!</div><div class="created_at">2021.06.10</div></a></li>
                    <li><a href="../php/community_FREE.php" class="list-group-item"><div class="article-title">???????????? ????????? ????????????!</div><div class="created_at">2021.06.08</div></a></li>
                    <li><a href="../php/community_FREE.php" class="list-group-item"><div class="article-title">???????????????!</div><div class="created_at">2021.06.01</div></a></li>
                </ul>
            </div>           
            <div  style="border: 1px solid black; background-color: white; position: absolute; float: left; margin-top: 10px;">
            <p style=" padding-left: 10px;font-size: 20px; padding-top:10px;">???????????? ???</p>
            <div style="width:550px; height: 300px;"  id="map" ></div>
            </div>

            <div  style = "border: 1px solid black;  background-color: white; margin-left: 575px; position: absolute;  margin-top: 10px; ">
            <p style=" padding-left: 10px;font-size: 20px; margin-left: 50px; padding-top:10px;">?????? ??????</p>
             <div style="width:550px; height: 300px;"  id = "chart_div"></div>
            </div>
            </section>
            <footer class="container-fluid" style="position: absolute; top: 1500px; background-color: rgba(255, 255, 255, 0.5)">
            </footer>
         </article>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCxi-l8-EWXOu-L6tD9lpDQTdysFKcIJA&callback=myMap"></script>
    </body>
</html>