<?php 
    /**
     * 
     * Class for upload pictures write in php poo by G.
     * 
     *  @version 0.1
     *  
     */

    class CheckIMG{

        /**
         * Check if the file have a null byte
         */
        public static function check_null_byte($file = null){
            if(preg_match('~%~', $file)){return false;}else {return true;}
        }
        /**
         * Check type mime
         */
        public static function check_type_mime($fileMime){
            $mime = array('image/png', 'image/jpeg', 'image/gif');
            foreach($mime as $item){
                if($item == $fileMime){return true;}else{return false;}
            }
        }
        /**
         * Check double extension
         */
        public static function check_double_extension($file){
            $extension = explode('.', $file);
            if($extension[1] == "php"){return false;}else {return true;}
        }
        /**
         * Check mime
         */
        public static function check_mime($file){
            $check = $file;
            if($check !== false){return true;}
            else{return false;}
        }
        /**
         * Check size init at 20Mo
         */
        public static function check_size($file){
            if($file < 20000000)
                return true;
            else 
                return false;
        }

        /**
         * Check type
         */
        public static function check_type($file){
            if($file != "jpg" && $file != "png" && $file != "jpeg" && $file != "gif" && $file != "PNG"){return false;}else {return true;}
        }


    }




  



