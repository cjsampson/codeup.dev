<?php

session_start();

function clearSession(){
	// clear $_SESSION array
    session_unset();
    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
   	header('Location: login.php');
}

// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!

clearSession();

?>