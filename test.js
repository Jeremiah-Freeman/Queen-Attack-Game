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
