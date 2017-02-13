var first = [1,2];
var second = [0,3];


function canAttack(first, second){
    if(first[1]==second[1] && first[0]==second[0]){
        return "they are on the same spot"
    }else{
        if(1==((second[1]-first[1])/(second[0]-first[0]))){
            console.log("diag true");
        }else{
            console.log("diag false");
        }

        if(first[0]==second[0]){
            console.log("hor true");
        }else{
            console.log("hor false");
        }

        if(first[1]==second[1]){
            console.log("ver true");
        }else{
            console.log("ver false");
        }
    }
}


// hour hand
function hourClock(hr, min){
    return .5 * (60*hr + min);
}

//min hanf
function minClock(min){
    return 6 * min;
}


//deg calc
function checkAngle(hr, min){
    var hourDeg = .5 * (60*hr + min);
    // console.log(hourDeg);
    var minDeg = 6 * min;
    // console.log(minDeg);
    var deg;

    if(hourDeg>minDeg){
        deg = hourDeg-minDeg;
    }else{
        deg = minDeg-hourDeg;
    }

    if(deg>180){
        return 360-deg;
    }else{
        return deg;
    }
}

//or

function checkAngle2(hr, min){
    var deg = .5*(60 * hr - 11 * min);
    if(deg>180){
        return Math.abs(360-deg);
    }else{
        return Math.abs(deg);
    }
}
