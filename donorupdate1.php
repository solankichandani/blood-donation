<?php
										require "config.php";
										if(isset($_REQUEST['update_btn']))
										{
											$id=$_REQUEST['id'];
											$nm=$_REQUEST['txtnm'];
											$add=$_REQUEST['address'];
											$cno=$_REQUEST['contact'];															
											$email=$_REQUEST['email'];
											$age=$_REQUEST['age'];
											$gen=$_REQUEST['account'];
											$blood=$_REQUEST['account1'];
											$re=$_REQUEST['remark'];
											echo $update="UPDATE `donor`SET fullname='$nm',address='$add',contact='$cno',email='$email',age='$age',gender='$gen',blood_type='$blood',remark='$re' WHERE id=$id";
											mysqli_query($con,$update);
											header("location:donor.php");
										
											
										}
										?>
										