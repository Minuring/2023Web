var arr = document.getElementById("box").getElementsByTagName("li")
    function check(){
        success = arr[0].innerHTML == arr[1].innerHTML 
            && arr[1].innerHTML== arr[2].innerHTML
        return success;
    }
    function getRandNumber(){
        return Math.floor( (Math.random()*10)%3 );
    }
    for (const element of arr) {
        element.innerHTML = getRandNumber();
        element.onclick = function(){
            this.innerHTML = getRandNumber();
            if(check()){
                document.getElementById("check").innerHTML = "Success(click here to do again)";
            }else{
                document.getElementById("check").innerHTML = "fail(click here to do again)";
            };
        }
    }