<?php

echo '<script>
        function koshin(){
                             location.reload();}
                            
                             
 
       
                             </script>


            <input type="button" value = "じゃんけん" onclick="koshin()" 
            
            style= " padding: 20px 20px ;  font-size: 4em ; font-weight: bold;
            background-color:red ";
  ><br>';

echo '自分の手';

$myhand = mt_rand(1,3);

    if($myhand==1){

    echo '<img src="img/1.jpg" alt="gu">';
            
    }



    else if($myhand==2){

        echo '<img src="img/2.jpg" alt="pa"> ' ;
    
            }
    
     else if($myhand==3){

    echo '<img src="img/3.jpg" alt="choki"> ';
        
    }

     echo "<div> </div> ";

    echo '相手の手';


    $yourhand = mt_rand(1,3);

        if($yourhand==1){

        echo '<img src="img/1.jpg" alt="gu"> ';
        }

        else if($yourhand==2){

        echo '<img src="img/2.jpg" alt="pa"> ' ;
            
        }
            
         else if($yourhand==3){

        echo '<img src="img/3.jpg" alt="choki"> ';
                
        }


echo "<br>";
//結果//

  

 if ($myhand ==1 and $yourhand==3){
     echo  '<div class = "abc" style = "color : red" ;>勝ち</div>';
 }
 if ($myhand ==2 and $yourhand==1){
    echo  '<div class = "abc"  style = "color : red" ;>勝ち</div>';
}

if ($myhand ==3 and $yourhand==2){
    echo '<div class = "abc" style = "color : red" ;>勝ち</div>';
}

if ($myhand ==$yourhand){
    echo '<div class = "abc" style = "color : yellow" ;>あいこ</div>';
}

if ($myhand ==1 and $yourhand==2){
    echo '<div class = "abc" style = "color : blue" ;>負け</div>';
}

if ($myhand ==2 and $yourhand==3){
    echo '<div class = "abc" style = "color : blue" ;>負け</div>';
}

if ($myhand ==3 and $yourhand==1){
    echo '<div class = "abc" style = "color : blue" ;>負け</div>';
}




?>

