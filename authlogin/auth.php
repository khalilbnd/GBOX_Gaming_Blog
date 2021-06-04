<?php

                               include 'DBcon.php';

                               $detect_error = 0;

                
                            if(isset($_POST['submit'])){
                                $fullname = $_POST['fullname'];
                                $email = $_POST['email'];
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $cpassword = $_POST['confirmPassword'];
                                $date_naiss = $_POST['year'] ."-". $_POST['month'] ."-". $_POST['day'];
                                $date = date('Y-m-d', strtotime($date_naiss));
                                

                                /**************************************************************/
                                /*DETCTION ERREUR*/
                                $file = fopen("error1.php", "w") or die ("Unable to open file");
                                $text ='';
                                fwrite($file, $text);
                                fclose($file);
                                
                                if(empty($fullname)){
                                    $file = fopen("error1.php", "w") or die ("Unable to open file");
                                    $text ='
                                        echo \'<div class="erreurFirst">Fullname is empty</div>\'';
                                    fwrite($file, $text);
                                    fclose($file);
                                    $detect_error = 1;
                                }
                               /**************************************************************/
                                $file = fopen("error2.php", "w") or die ("Unable to open file");
                                $text ='';
                                fwrite($file, $text);
                                fclose($file);
                              
                                if(empty($email)){
                                    $file = fopen("error2.php", "w") or die ("Unable to open file");
                                    $text ='
                                        echo \'<div class="erreurSecond">E-mail is invalid or empty</div>\'';
                                    fwrite($file, $text);
                                    fclose($file);
                                    $detect_error = 1;
                                }

                                /**************************************************************/

                                $file = fopen("error3.php", "w") or die ("Unable to open file");
                                $text ='';
                                fwrite($file, $text);
                                fclose($file);


                                
                                    if(empty($username)){
                                        $file = fopen("error3.php", "w") or die ("Unable to open file");
                                        $text ='
                                            echo \'<div class="erreurThird">Username is invalid</div>\'';
                                        fwrite($file, $text);
                                        fclose($file);
                                        $detect_error = 1;
                                    
                                    if(mysqli_num_rows(mysqli_query($con, $searchUsername))){
                                        $file = fopen("error3.php", "w") or die ("Unable to open file");
                                        $text ='
                                            echo \'<div class="erreurThird">Username is taken</div>\'';
                                        fwrite($file, $text);
                                        fclose($file);
                                        $detect_error = 1;

                                    }
                                }
                                /**************************************************************/
                                $file = fopen("error4.php", "w") or die ("Unable to open file");
                                $text ='';
                                fwrite($file, $text);
                                fclose($file);

                                if(empty($password)){
                                    $file = fopen("error4.php", "w") or die ("Unable to open file");
                                    $text ='
                                        echo \'<div class="erreurFourth">Password is invalid</div>\'';
                                    fwrite($file, $text);
                                    fclose($file);
                                    $detect_error = 1;
                                }

                                /**************************************************************/

                            }
                            

                                /**************************************************************/

                                /*insertion sur la base de donnes */ 
                                if($detect_error){
                                header('Location: signuperror.php');
                                exit();
                                }
                                else{
                                $sql = "INSERT INTO users (fullname, email, username, password, date_naiss) VALUES(?, ?, ?, ?, ?)";
                                $stmtinsert = $con->prepare($sql);
                                $result = $stmtinsert->execute([$fullname, $email, $username, $password, $date]);
                                header('Location: success.html');
                                }
                            
                            
                                ?>