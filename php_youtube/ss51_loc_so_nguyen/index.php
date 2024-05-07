<?

 $number = '12344';

 if(filter_var($number,FILTER_VALIDATE_INT)){
    echo "đây là số nguyên";
 }else{
    echo "đây là không  số nguyên";
 }


?>