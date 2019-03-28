<?php
   $name = $_post['name'];
   $visitor_email = $_post['email'];
   $message = $_post['message']

   $email_from = 'kunalparashar1997@gmail.com';

   $email_subject = "new form submission"

   $email_body = "user name: \n"
               "User Email: $visitor_email.\n";
               "User Message: $message. \n";

   $to = "gmonu1999@gmail.com";
   $headers = "From: $email_form \r\n";
   $headers = "Reply-To: $visitor_email \r\n";
   mail ($to,$email_subject,$email_body,headers);
   header(("Location: contact.html"));
