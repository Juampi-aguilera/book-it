<?php
// Create connection to Oracle
$conn = oci_connect("BG04", "g4#VFR4","");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>