<?php
function success_alert($msg)
{
  return "<div style='padding:5px; color:green; background:lightgray;
  border-radius:2px; width:auto; border:2px solid black;'>$msg</div>
  <script> var div_element=document.getElementById('success-id');
  setTimeout(function() {div_element.style='display:none;';},3000); </script>";
}
function error_alert($msg)
{
  return "<div id='error-id' style='padding:5px; color:red; 
  border-radius:2px; width:auto;'>$msg</div>
  <script> var div_element=document.getElementById('error-id');
  setTimeout(function() {div_element.style='display:none;';},3000); </script>";
}

?>