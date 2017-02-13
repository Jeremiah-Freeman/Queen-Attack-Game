<?php
    class Queen
    {
        function canAttack($queen, $pawn) {
            if($queen[0] > 7 || $queen[1] > 7 || $pawn[0] > 7 || $pawn[1] > 7){
                return "Your coordinates do not exist on a chess board";
            }else{
                if($queen[1]==$pawn[1] && $queen[0]==$pawn[0]){
                    return "Same Spot";
                }else{
                    if($queen[0]==$pawn[0]){
                        return "Yes";
                    } else if($queen[1]==$pawn[1]){
                        return "Yes";
                    }else if(1==(($pawn[1]-$queen[1])/($pawn[0]-$queen[0]))){
                        return "Yes";
                    }else{
                        return "No";
                    }
                }
            }
        }
    }

?>
<!--

size 8

function canAttack(first, second){
    if(first[1]==second[1] && first[0]==second[0]){
        return "they are on the same spot"
    }else{
        if(1==((second[1]-first[1])/(second[0]-first[0]))){
            return("diag true");
        }else{
            return("diag false");
        }

        if(first[0]==second[0]){
            return("hor true");
        }else{
            return("hor false");
        }

        if(first[1]==second[1]){
            return("ver true");
        }else{
            return("ver false");
        }
    }
} -->
