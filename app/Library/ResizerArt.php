<?php  
namespace App\Library;  

class ResizerArt {  

    public static function resizePic($main, $copy, $w, $h, $ext, $delete = false) {  
        $ext = strtolower($ext);  

        if ($ext == 'svg') {  
            self::resizeSVG($main, $copy, $w, $h, $delete);  
        } else {  
            self::resizeImageFromFile($main, $copy, $w, $h, $ext, $delete);  
        }  
    }  

    private static function resizeSVG($main, $copy, $w, $h, $delete = false) {  
        $svg = file_get_contents($main);  
        $svg = preg_replace('/(width|height)="[^"]+"/','$1="'.$w.'px"',$svg);  
        $svg = preg_replace('/(width|height)=[^"]+/','$1="'.$h.'px"',$svg);  
        file_put_contents($copy, $svg);  

        if ($delete) {  
            unlink($main);  
        }  
    }  

    private static function resizeImageFromFile($main, $copy, $w, $h, $ext, $delete = false) {  
        list($w_orig, $h_orig) = getimagesize($main);  
        $scale_ratio = $w_orig / $h_orig;  

        if (($w / $h) > $scale_ratio) {  
            $w = $h * $scale_ratio;  
        } else {  
            $h = $w / $scale_ratio;  
        }  

        $img = '';  
        if ($ext == 'gif') {  
            $img = imagecreatefromgif($main);  
        } elseif ($ext == 'png') {  
            $img = imagecreatefrompng($main);  
        } else {  
            $img = imagecreatefromjpeg($main);  
        }  

        $tci = imagecreatetruecolor($w, $h);  
        imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);  
        imagejpeg($tci, $copy, 100);  

        if ($delete) {  
            unlink($main);  
        }  
    }  
}