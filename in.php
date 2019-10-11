<?php
    function SQL_Injection($get_Str){
        //쿼리문
        $get_Str = preg_replace("/([\x00-\x08\x0b-\x0c\x0e-\x19])/","",$get_Str);//NULL,BACKSPACE,가로탭등 삭제
        $get_Str = preg_replace("/select[^\x21-\x7e]/i","select",$get_Str);//select뒤의 모든 문자를 허용하지 않고 무시한 후 select로 바꿈
        $get_Str = preg_replace("/insert[^\x22-\x7e]/i","insert",$get_Str);//insert뒤의 모든 문자를 허용하지 않고 무시한 후 insert로 바꿈
        $get_Str = preg_replace("/union[^\x21-\x7e]/i","union",$get_Str);//union뒤의 모든 문자를 허용하지 않고 무시한 후 union로 바꿈
        $get_Str = preg_replace("/drop[^\x21-\x7e]/i","drop",$get_Str);//drop뒤의 모든 문자를 허용하지 않고 무시한 후 drop로 바꿈
        $get_Str = preg_replace("/delete[^\x21-\x7e]/i","delete",$get_Str);//delete뒤의 모든 문자를 허용하지 않고 무시한 후 delete로 바꿈
        $get_Str = preg_replace("/update[^\x21-\x7e]/i","update",$get_Str);//update뒤의 모든 문자를 허용하지 않고 무시한 후 update로 바꿈
        $get_Str = preg_replace("/create[^\x21-\x7e]/i","create",$get_Str);//create뒤의 모든 문자를 허용하지 않고 무시한 후 create로 바꿈
        $get_Str = preg_replace("/alter[^\x21-\x7e]/i","alter",$get_Str);//alter뒤의 모든 문자를 허용하지 않고 무시한 후 alter로 바꿈
        //쿼리문
        $get_Str = preg_replace("/[^\x21-\x7e]select/i","select",$get_Str);//select뒤의 모든 문자를 허용하지 않고 무시한 후 select로 바꿈
        $get_Str = preg_replace("/[^\x22-\x7e]insert/i","insert",$get_Str);//insert뒤의 모든 문자를 허용하지 않고 무시한 후 insert로 바꿈
        $get_Str = preg_replace("/[^\x21-\x7e]union/i","union",$get_Str);//union뒤의 모든 문자를 허용하지 않고 무시한 후 union로 바꿈
        $get_Str = preg_replace("/[^\x21-\x7e]drop/i","drop",$get_Str);//drop뒤의 모든 문자를 허용하지 않고 무시한 후 drop로 바꿈
        $get_Str = preg_replace("/[^\x21-\x7e]delete/i","delete",$get_Str);//delete뒤의 모든 문자를 허용하지 않고 무시한 후 delete로 바꿈
        $get_Str = preg_replace("/[^\x21-\x7e]update/i","update",$get_Str);//update뒤의 모든 문자를 허용하지 않고 무시한 후 update로 바꿈
        $get_Str = preg_replace("/[^\x21-\x7e]create/i","create",$get_Str);//create뒤의 모든 문자를 허용하지 않고 무시한 후 create로 바꿈
        $get_Str = preg_replace("/[^\x21-\x7e]alter/i","alter",$get_Str);//alter뒤의 모든 문자를 허용하지 않고 무시한 후 alter로 바꿈
        //조건절
        $get_Str = preg_replace("/and[^\x21-\x7e]/i","and",$get_Str);//and뒤의 모든 문자를 허용하지 않고 무시한 후 and로 바꿈
        $get_Str = preg_replace("/or[^\x21-\x7e]/i","or",$get_Str);//or뒤의 모든 문자를 허용하지 않고 무시한 후 or로 바꿈
        $get_Str = preg_replace("/if[^\x21-\x7e]/i","if",$get_Str);//if뒤의 모든 문자를 허용하지 않고 무시한 후 if로 바꿈
        //특수문자
        $get_Str = preg_replace("/[\+%\\;\^!|\\?\*$#\[\]\{\}]/i","",$get_Str);//특수문자 삭제
        $get_Str = pefg_replace("/</","<",$get_Str);
        $get_Str = pefg_replace("/>/",">",$get_Str);
        $get_Str = pefg_replace("/'/","'",$get_Str);
        $get_Str = pefg_replace("/`/","`",$get_Str);
        $get_Str = preg_replace('/"/','"',$get_Str);
        $get_Str = pefg_replace("/--/i","__",$get_Str);
        //HTML 문자 엔티티 특수문자
        $get_Str = pefg_replace("/&/","&",$get_Str);
        $get_Str = pefg_replace("/&amp/","&",$get_Str);//&
        $get_Str = pefg_replace("/&nbsp/"," ",$get_Str);//공백
        $get_Str = pefg_replace("/&lt/","<",$get_Str);//<
        $get_Str = pefg_replace("/&gt/",">",$get_Str);//>
        $get_Str = pefg_replace("/&#39/","'",$get_Str);//'
        $get_Str = pefg_replace("/&#96/","`",$get_Str);//`
        $get_Str = pefg_replace("/&quot/",'"',$get_Str);//큰따옴표 한개(")
        $get_Str = pefg_replace("/&#95/","__",$get_Str);//__
    }

?>