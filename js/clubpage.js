
function Change_img(num){
  var img1 = document.getElementById("img"+num);
  var content = document.getElementById("promo"+num).innerHTML;
  var content2 = document.getElementById("pro"+num);
  var content3 = document.getElementById("content");

  if(img1.getAttribute('src') == "../img/central/img"+num+".jpg" || img1.getAttribute('src') == "../img/noimg.jpg"){
      img1.setAttribute("src", "../img/img_change/imgw.PNG");
      img1.setAttribute("width", "50");
      img1.setAttribute("height", "80");
      content2.innerHTML = content;
      content2.style.width = "500px";
      content2.style.opacity = "1";
      content3.style.height = "500px";
      content2.style.paddingTop = "0px";
  }
  else {
      img1.setAttribute("src", "../img/central/img"+num+".jpg");
      content2.innerHTML = "Click하면 동아리 소개를 볼 수 있어요!";
      content2.style.width = "350px";
      img1.setAttribute("width", "350");
      img1.setAttribute("height", "250");
      content2.style.opacity = "0.4";
      content3.style.height = "500px";
      content2.style.paddingTop = "130px";
  }

}


var heart = 0;
var arr = new Array();

var count = 0;

for(var i = 0; i<8;i++)
{
  arr[i] = 0;
}


function submit(){

      alert("가입 페이지로 넘어갑니다.");    
      document.location.href="../php/apply.php";
     }

function changeheart(n)
    {

      for(var i =0;i<10;i++)
      {
        if(n=="heart"+i)
        {
          var str ="heart"+i;

          if(arr[i] == 0)
          {
          document.getElementById(str).src = "../img/heart1.png";
        alert("찜을 하셨습니다! \n\n");
        heart = 1;
        arr[i] = 1;
        count++;
          }
          else
          {
            document.getElementById(str).src = "../img/heart0.png";
            alert("찜을 해제하셨습니다!");
            heart = 0;
            arr[i] = 0;
           }
      }
    }
  }

    
