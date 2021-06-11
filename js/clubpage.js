

var heart = 0;
var arr = new Array();

var count = 0;

for(var i = 0; i<8;i++)
{
  arr[i] = 0;
}


function submit(){

      alert("가입 페이지로 넘어갑니다.");    
      document.location.href="main.html";
     }

function changeheart(n)
    {

      for(var i =0;i<8;i++)
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

    