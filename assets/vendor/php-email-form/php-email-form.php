<?php
$conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
mysqli_query($conn, "INSERT INTO tblcontact (name,email,subject,message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
$insert_id = mysqli_insert_id($conn);
?>