<?php
session_start();
if (empty($_POST['name'])|| empty($_POST['email']) || empty($_POST['msg'])) {
 echo "الرجاء ملء كافة الحقول";
} else {
date_default_timezone_set('Asia/Baghdad');
 $nw_date=date("F j, Y");
 $body="الاسم: ".$_POST['name']."\n الرسالة: ".$_POST['msg']."\n التاريخ: ".$nw_date;
 $email=$_POST['email'];
mail("apdoahmed795@gmail.com", "new message",$body, "من:  <".$email.">");

echo "Thank you, we will reply to you as soon as possible";
echo "-"."<a href='contact.php'>العودة</a>";
}
?>