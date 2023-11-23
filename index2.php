<?php
//1
function _isset($varaible){
    if($varaible==null){
        return false;

    }
    else{
        return true;
    }
}
//2
function _isnull($varaible){
 if($varaible==null){
    return true;
 }
 else{
    return false;
 }
}
//3

function _substr($str, $start, $length){
    $supstring='';
   
    for($i = 0; $i < strlen($str); $i++){
        if($i==$start ){
            $counter= $i;
            for($j=0;$j<$length;$j++){
                $supstring.=$str[$counter];
                $counter++;
            }
            return $supstring;
        }
     
        else{
            continue;
        }
        
    }
}
//4
function _str_contains($str,$value){
  
    $lenth=strlen($value);
    for($i= 0;$i<strlen($str);$i++){

    if(substr($str,$i,$lenth)==$value) {
       
       return 1;
    }
    else {
       continue;
    }
    return false;
}
}

//5
function _split(&$str,$n,$sprator )
{ 
    $newstr="";
    $counter=0;
        for($i= 0;$i<strlen($str);$i++){
        if($n==$counter){
            $newstr=$newstr.$sprator;
            $newstr= $newstr.$str[$i];
           $counter=1;
           

        }
        else{
            $newstr= $newstr.$str[$i];;
            $counter++;
        
          
           
        }
        
    }

    return $str=$newstr;
   

}
//6
function _str_repeat($str,$repnumber){
    $i=0;
    $newstr='';
    while($i<$repnumber){
        $newstr.= $str;
        $i++;
    }
    return $newstr;
}

//7 
function _str_split($str){
    $arr=array();
    for($i= 0;$i<strlen($str);$i++){
        array_push($arr,$str[$i]);
    }
    return $arr;
}
//8
function  _str_starts_with($str,$supstring){
    $lenth=strlen($supstring);
    for($i= 0;$i<strlen($str);$i++){

    if(substr($str,0,$lenth)==$supstring) {
       
       return 1;
    }
    else {
       continue;
    }
    return false;
}

}


//9

//10
function wordCount( $string ) {
    $x=0;
    for ( $i = 0; $i < strlen( $string );$i++){
        if ( $string[$i] ==" " )
        {
           
          $x++;
    }
   
}
return $x;
}

//11
function _strrev( $string ) {
    $revstring='';
    for ( $i = strlen( $string )-1; $i >=0;$i--){
         $revstring=  $revstring . $string[ $i];
}
return $revstring;
}

//12
function _strpos($string,$letter,$index){
        for ( $i = $index; $i <strlen( $string );$i++){
         if ($string[ $i ] == $letter){
            return $i;
}
}
}
function  _str_ends_with($str,$supstring){
    $lenth=strlen($supstring);
    for($i= 0;$i<strlen($str);$i++){

    if(substr($str,strlen($str)-$lenth,$lenth)==$supstring) {
       
       return 1;
    }
    else {
       continue;
    }
    return false;
}

}



//13
function _ucfirst($string) {
    $letters=["A"=>'a' ,"B"=>'b',"C"=>'c',"D"=>"d","E"=>'e',"F"=>'f',"G"=>"g","H"=>"h"
,"I"=>"i","J"=>"j","K"=>"k","L"=>"l","M"=>"m","N"=>"n","O"=>"o","P"=>"p","Q"=>"q","R"=>"r",
"S"=>"s","T"=>"t","U"=>"u","V"=>"v","W"=>"w","X"=>"x","Y"=>"y","Z"=>"z"];
    foreach ($letters as $k=>$v){
           if($string[0]==$v){
            $string[0]=$k;
            return $string;
           }
        
    }
}







//14
function positionacc($string,$letter,$occ){
    
    $c=0;
    for ( $i = 0; $i <strlen( $string );$i++){
     if ($string[ $i ] == $letter){
        $c++;
        if($c==$occ ){
            
            return $i;
            
        }
    
}
}

    return -1;
}


//15
function _stripos($string,$letter,$index){
    for ( $i = $index; $i <strlen( $string );$i++){
     if ($string[ $i ] == $letter or ucfirst($string[ $i ])==$letter){
        return $i;
}
}
}



function _explode($separator,$string){
    $arr = [];
    $newstr="";
   for( $i = 0; $i < strlen( $string ); $i++ ){
    if ($string[$i] == $separator){
        array_push($arr,$newstr);

        $newstr="";

   }
   else{
    $newstr.=$string[$i];
  
   }

   }
   array_push($arr,$newstr);
   return $arr;

}
//-------------array-------------------------------------------------------------------------------------------------

//16
function _array_shift(&$arr){
    unset($arr[0]);


}

function _array_merge(&$array1,&$array2){
    $mergedarr=[];
    for($i= 0;$i<count($array1);$i++){
        array_push($mergedarr,$array1[$i]);
    }
    for($i= 0;$i<count($array2);$i++){
       array_push($mergedarr,$array2[$i]);
    }
    return $mergedarr;

}

//18
function  _array_pop(&$arr){
   unset($arr[count($arr)-1]);
   return $arr;
}

function _array_search($value,$arr){
    foreach($arr as $k=>$v){
        if($v == $value){
         return $k  ;
    }

    }
    return false;
}
//22
function _array_key_exists($key,$arr){
    foreach($arr as $k=>$v){
        if($k ==$key){
        return 1;
    }
  
    }
    return false;
}

//23
function _array_reverse($arr){
    $reversedarr=[];
    for($i=count($arr)-1;$i>=0;$i--){
       array_push($reversedarr,$arr[$i]);
    }
    return $reversedarr;
}

//24
function _array_sum($array){
    $sum=0;
    
    for($i= 0;$i<count($array);$i++){
        if(is_numeric($array[$i])){
            $sum+=$array[$i];
        }
        else{
            continue;
        }
        }
      
    return $sum;
}


//25
function _array_replace(&$arr1,$arr2){
    for($i= 0;$i<count($arr2);$i++){
        $arr1[$i]=$arr2[$i];
    }
    return $arr1;
    
}
//26
function _count(&$arr){
    $counter=0;
    foreach($arr as $item){
       
       $counter++;
    }
    return $counter;
}



function _push( &$arr,$value){
   
    $arr[count($arr)]=$value;
    echo $arr[3];    
    return $arr;

}
//32
function _max( $arr ){
    $max=$arr[0];
    
      for ($i= 0;$i<count($arr);$i++){
        if($arr[$i]>$max) {
            $max=$arr[$i];
        }
       

      }
      return $max;


}
function _in_array( $value,$arr){

    foreach($arr as $k=>$v){
        if($value == $v){
            return true;
        }
    }
    return false;
    }
//33
function _min( $arr ){
    $min=$arr[0];
    
      for ($i= 0;$i<count($arr);$i++){
        if($arr[$i]<$min) {
            $min=$arr[$i];
        }
       

      }
      return $min;


}
//------------------------number------------------------------------------------------------------------------


function factors($number){
    $arr= [];
    for ($i = 1; $i < $number; $i++){
        if($number%$i==0){
            array_push($arr,$i);

        }
        else{
            continue;
        }
    }
    return $arr;

 }
 function factorail($number){
    $fact=1;
    for ($i = 1; $i <= $number; $i++){
              $fact*=$i;
    }
    return $fact;
       
 }
 function _intdiv($number1,$number2){
    return intval( $number1/$number2 );
}

//29
function _Power($number1,$number2){
    $result=1;
    for($i= 0;$i<$number2;$i++){
        $result=$result*$number1;
    }
    return $result;
}
function _abs($number){
    
    if($number<0){
       
        return  $number*-1;
    }
    else{
         return $number;
    }
}

//34
function date_now(){

    return  date('h:i:s ');
 
 }
 //35
 function date_Year(){
 
     return  date('Y');
  
  }
  //36
  function date_Month(){
 
     return  date('m');
  
  }
  //37
  function date_Day(){
 
     return  date('d');
  
  }
  //38
  function date_Hour(){
 
     return  date('h');
  
  }
  //39
  function date_Minutes(){
 
     return  date('i');
  
  }
  //40
  function date_Seconds(){
 
     return  date('s');
  
  }
  //41
  function date_FullDate(){
 
     return  date('Y-m-d');
  
  }
 



?>