

var arr = new Array();  //heart 눌린거 
var count = 0;
var club = new Array('','UFC','같이혜윰', 'SINSA FC', 'Buffalo', '타키온' , 'WISE M', '생각대로 D');
var cl = new Array(); //찜 목록에서 몇 번째에 어떤 동아리가
var img2 = 0;


for(var i = 1; i<9;i++)
{
  arr[i] = 0;
  cl[i] = 0;
}


function Change_img(num){
    var img1 = document.getElementById("img"+num);
    var content = document.getElementById("promo"+num).innerHTML;
    var content2 = document.getElementById("pro"+num);
    var content3 = document.getElementById("content");

    if(img1.getAttribute('src') == "../img/engine/img"+num+".jpg" || img1.getAttribute('src') == "../img/noimg.jpg"){
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
        img1.setAttribute("src", "../img/engine/img"+num+".jpg");
        content2.innerHTML = "Click하면 동아리 소개를 볼 수 있어요!";
        content2.style.width = "350px";
        img1.setAttribute("width", "350");
        img1.setAttribute("height", "250");
        content2.style.opacity = "0.4";
        content3.style.height = "500px";
        content2.style.paddingTop = "100px";
    }

}


function submit(){

      alert("가입 페이지로 넘어갑니다.");    
      document.location.href="../php/apply.php";
     }

     function changeheart(n)
     {
      
       for(var i =1;i<9;i++)
       {
         if(n=="heart"+i)
         {
           var str ="heart"+i;
           
           if(arr[i] == 0)
           {
              if(count!= 3)
             {
              document.getElementById(str).src = "../img/heart1.png";
              alert("찜을 하셨습니다! \n\n");
              arr[i] = 1;
              count++;
 
               var str2 = "cl"+count;
               cl[count] = i;
  
               document.getElementById(str2).innerHTML=club[i];
             }
           }
         else if(arr[i] == 1)
           {
             document.getElementById(str).src = "../img/heart0.png";
             alert("찜을 해제하셨습니다!");
             arr[i] = 0;
             var j;
            for(j=1;j<9;j++)
            {
              if(cl[j] == i)
              {
                break;
              }
            }
         
             count--;
               var str2;
               cl[j] =0;
 
               var num = j+1;
 
                 while(cl[num]!=0)
                 {
      
                   var temp = cl[num];
                   cl[j] = temp;
                   cl[num] = 0;
                   str2 = "cl"+j;
                   document.getElementById(str2).innerHTML=club[temp];
                   j++;
                   num++;
    
                 }
                 str2 = "cl"+j;
                 document.getElementById(str2).innerHTML="";
             }
          }
       }
     }
    
