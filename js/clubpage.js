function Change_img(num){
    var img1 = document.getElementById("img"+num);
    var content = document.getElementById("promo"+num).innerHTML;
    var content2 = document.getElementById("pro"+num);

    if(img1.getAttribute('src') == "../img/central/img"+num+".jpg"){
        img1.setAttribute("src", "../img/central/imgw.PNG");
        content2.innerHTML = content;
        content2.style.backgroundColor = "white";
        content2.style.opacity = "1";
    }
    else {
        img1.setAttribute("src", "../img/central/img"+num+".jpg");
        content2.innerHTML = "Click하면 동아리 소개를 볼 수 있어요!";
        content2.style.opacity = "0.4";
    }



}