function OnMouseIn_text(elem)
{
  elem.style.backgroundColor = "lightgrey";
}
function OnMouseOut_text(elem)
{
  elem.style.backgroundColor = "white";
}
function OnMouseIn_button(elem)
{
  elem.style.backgroundColor = "lightgrey";
  elem.style.border = "1px solid lightgrey";
}
function OnMouseOut_button(elem)
{
  elem.style.backgroundColor = "black";
  elem.style.border = "1px solid black";
}


var up=[0,0,0,0,0];
var down=[0,0,0,0,0];
var heart=[0,0,0,0,0];

function OnMouseIn_up(elem,n)
{
  elem.style.color = "red";
}
function OnMouseOut_up(elem,n)
{
  if(up[n]==0){
    elem.style.color = "grey";
  }
}
function fun_up(elem,n){
  if(down[n]==1){
    alert("이미 비추천하신 글입니다. 비추천을 제거해주세요.");
  }
  else if(up[n]==0){
    alert("추천이 표시되었습니다.");
    elem.style.color = "red";
    up[n]=1;
  }
  else{
    elem.style.color ="grey";
    up[n]=0;
  }
}

function OnMouseIn_down(elem,n)
{
  elem.style.color = "blue";
}
function OnMouseOut_down(elem,n)
{
  if(down[n]==0){
    elem.style.color = "grey";
  }
}
function fun_down(elem,n){
  if(up[n]==1){
    alert("이미 추천하신 글입니다. 추천을 제거해주세요.");
  }
  else if(down[n]==0){
    alert("비추천이 표시되었습니다.");
    elem.style.color = "blue";
    down[n]=1;
  }
  else{
    elem.style.color ="grey";
    down[n]=0;
  }
}

function OnMouseIn_heart(elem,n)
{
  elem.style.color = "red";
}
function OnMouseOut_heart(elem,n)
{
  if(heart[n]==0){
    elem.style.color = "grey";
  }
}
function fun_heart(elem,n){
  if(heart[n]==0){
      alert("좋아요가 표시되었습니다.");
    elem.style.color = "red";
    heart[n]=1;
  }
  else{
    elem.style.color ="grey";
    heart[n]=0;
  }
}
