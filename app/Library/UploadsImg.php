<?php

namespace App\Library;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class UploadsImg
{
    public function uploadPic( Request $request , $file, $path, $resize = true , $section)
    
    {
     

        $routeName = $request -> route() ->getName();
     

        if ($section === 'blog') {
            if ($routeName === 'admin.blog.add'  ||  $routeName === 'admin.blog.edit' ) {
                $smallx = 70 ;
                $smally = 50 ;

                $mediumx = 300 ;
                $mediumy = 200 ;

                $bigx = 600 ;
                $bigy =400;
                return  $this->uploadImg($path,  $file ,  $resize , $smallx , $smally , $mediumx ,$mediumy , $bigx , $bigy );
 
            }

        }elseif  ($section === 'category') {
            if ($routeName === 'admin.category.add'  ||  'admin.category.edit' ) {

                $smallx = 70 ;
                $smally = 50 ;

                $mediumx = 300 ;
                $mediumy = 200 ;

                $bigx = 600 ;
                $bigy =400;
                return  $this->uploadImg($path,  $file ,  $resize , $smallx , $smally , $mediumx ,$mediumy , $bigx , $bigy );
            }

        }
        return false; 
    }


 

    public function uploadImg ( $path , $file ,$resize = true , $smallx , $smally , $mediumx , $mediumy , $bigx , $bigy  ){


        $pathMain = $path . 'main/';
        if ($resize) {
            $pathBig = $path . '/big/';
            $pathMedium = $path . '/medium/';
            $pathSmall = $path . '/small/';
        }


        $extension = $file->getClientOriginalExtension();
        $extension1 = $file->getClientOriginalName();
        $ext = ['jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG','webp','WEBP','gif','GIF'];
        if (in_array($extension, $ext)) {
            if (!File::isDirectory($path)) {
                File::makeDirectory($path);
            }
            if (!File::isDirectory($pathMain)) {
                File::makeDirectory($pathMain);
            }
            if ($resize) {
                if (!File::isDirectory($pathBig)) {
                    File::makeDirectory($pathBig);
                }
                if (!File::isDirectory($pathMedium)) {
                    File::makeDirectory($pathMedium);
                }
                if (!File::isDirectory($pathSmall)) {
                    File::makeDirectory($pathSmall);
                }
            }


            $fileName = md5(microtime()) . ".$extension";
            $file->move($pathMain, $fileName);
            if ($resize) {
                $kaboom = explode(".", $fileName);
                $fileExt = end($kaboom);

                ResizerArt::resizePic($pathMain . $fileName, $pathSmall . $fileName, $smallx , $smally , $fileExt);
                ResizerArt::resizePic($pathMain . $fileName, $pathMedium . $fileName, $mediumx , $mediumy , $fileExt);
                ResizerArt::resizePic($pathMain . $fileName, $pathBig . $fileName, $bigx, $bigy , $fileExt, True);

            }
            return $fileName;
        } else {
            return false;
        }
        


    }

}




