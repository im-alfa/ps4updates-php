<?php
/*

  By AlFaMoDz.

  This simple PHP script will get the HMAC-SHA-256 of a CUSA and will return the xml url with the information.
  For do a webiste similar to orbismodding.com o ps4database.io what you have to do is to read the xml with simplexml_load_file and print the info.

  Thanks to @Zer0xFF for his original PS4Updates.py
    - @Zer0xFF https://twitter.com/Zer0xFF
    - Original python gist: https://gist.github.com/Zer0xFF/d94818f15e3e85b0b4d48000a4be1c73

*/
    function unhexlify($str) {
        return pack("H*", $str);
    }

    function GetURL($GameID) {
        $byte_key = unhexlify("AD62E37F905E06BC19593142281C112CEC0E7EC3E97EFDCAEFCDBAAFA6378D84");
        $hash = hash_hmac("sha256" , "np_$GameID", $byte_key);
        echo "Game ID: " . $GameID . "<br>";
        echo "Hash: " . $hash . "<br>";
        $Url = "URL: https://gs-sec.ww.np.dl.playstation.net/plo/np/$GameID/$hash/$GameID-ver.xml";
        echo $Url;
    }

    GetURL("CUSA00411");


?>
