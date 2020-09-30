<?php


namespace App\Traits;

Trait BookTrait{
    function SaveFile($file,$folder){
        $file_extention = $file->getClientOriginalExtension();
        if($file_extention=="pdf"){
            $file_name = "file".time().'.'.$file_extention;
        }else{
            $file_name = "img".time().'.'.$file_extention;
        }
        //$path = 'uploads';
        $path =$folder;
        $file->move($path,$file_name);
        return $file_name;
    }
}
