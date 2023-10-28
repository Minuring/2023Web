function getRandNumber(){
    return Math.floor(Math.random()*100);
}
var prev = document.getElementsByTagName('img')[0], current;
changeImg()
function changeImg(){
    prev.src = "../media/blank.jpg";
    prev.onclick = "";
    let rand = document.getElementsByTagName("img")[getRandNumber()];
    rand.src = "../media/Koala.png";
    rand.onclick = changeImg;
    prev = rand;
}


