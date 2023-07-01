<?php
function valid_email($email)
{
  $result = trim($email);
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    echo "true<br>";
  } 
  else 
  {
    echo "false";
  }
}
echo valid_email("sravanp@example.com");
echo valid_email("sravanp%.com");
?>