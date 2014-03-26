<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//ini_set ("SMTP","127.0.0.1:3307");
//ini_set("smtp_port","25");
//ini_set ("sendmail_from","j.boand@gmail.com");
//ini_set("sendmail_from","j.boand@gmail.com");
// Please specify your Mail Server - Example: mail.example.com.
//ini_set("SMTP","ssl://smtp.gmail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
//ini_set("smtp_port","465");

/*$smtp = array(
    'transport' => 'Smtp',
    'from' => 'satish@websquare.co.uk',
    'host' => 'ssl://smtp.gmail.com',
    'port' => 465,
    'timeout' => 30,
    'username' => 'j.boand@gmail.com',
    'password' => '888888'
);*/

ini_set ("SMTP","127.0.0.1:3307");
ini_set("smtp_port","25");
ini_set ("sendmail_from","j.boand@gmail.com");
 $to="satish@websquare.co.uk";
 $subject="I am learning PHP";
 $body="This is the program means how to send mail to the different user";
 mail($to,$subject,$body);
 echo "mail sent to $to";

?>

