


var arr = new Array();  //heart 눌린거 
var dib= new Array(); //몇 번째가 눌렸는가
var count = 0;
var club = new Array('','SAMMARU','CUVIC', 'PDA-Pro', 'EMSYS', 'Nest.net', 'NOVA', 'CGAC', 'TUX');
var cl = new Array(); //찜 목록에서 몇 번째에 어떤 동아리가


for(var i = 1; i<9;i++)
{
  arr[i] = 0;
  cl[i] = 0;
}



function submit(){

      alert("가입 페이지로 넘어갑니다.");    
      document.location.href="main.html";
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
            // alert("찜을 해제하셨습니다!"+"j :"+ j+ "cl[j]:"+cl[j]);
           for(j=1;j<9;j++)
           {
             if(cl[j] == i)
             {
               break;
             }
           }
        
            count--;
              var str2;
              // document.getElementById(str2).innerHTML="";
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


  
  

    