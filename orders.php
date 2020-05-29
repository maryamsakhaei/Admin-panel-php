<?php
$price=$_POST['gheymat'];
$pic=$_POST['pic'];
$info=$_POST['info'];
include_once("header.php");
session_start();
    echo"    <div class='row'> 
                    <div class='col-md-4'></div><!--md4-->
                    <div class='col-md-4'>
                        <div class='row'>
                            <div class='col-md-1'></div>
                            <div class='col-md-10 orders-txt'>
                                 ";
                                 echo"Dear,";
                                 echo $_SESSION['name'];
                                 echo"<br>";
                                 echo" please compelet your orders";
                echo"
                            </div><!--md10-->
                            <div class='col-md-1'></div>
                        </div><!--row in to 4-->
                    </div><!--md4-->
                    <div class='col-md-4'></div><!--md4-->
                    <div class='row'>
                        <div class='col-md-4'></div><!--md4-->
                        <div class='col-md-4'>
                            <div class='row'>
                                <div class='col-md-1'></div>
                                <div class='col-md-10'>
                                    <div class='fruite-pic'>
                                        <img class='fruites-img' src='";
                                        echo $pic ;
                                        echo"'>
                                    </div>
                                </div><!--md10-->
                                <div class='col-md-1'></div>
                            </div><!--row in to 4-->
                        
                        </div><!--md4-->
                        <div class='col-md-4'></div><!--md4-->
                    </div><!--second row-->
                    <div class='row'>
                        <div class='col-md-1'></div><!--md4-->
                        <div class='col-md-10'>
                            <div class='form'>
                            <form action='finall.php' method='post'>
                                <div class='form-numbers'>
                                            <label class='numbers'>number</label>
                                </div>
                                <div class='number-box'>
                                            <input type='number' class='number' name='number'>
                                </div>
                                <div class='form-price'>
                                        <label class='pricee'>price</label>
                                </div>        
                                <div class='price-box'>
                                        <input type='number' class='price' name='price' value='";echo $price;
                                        echo"' readonly>
                                </div>
                                <div class='form-info'>
                                        <label class='infoo'>info</label>
                               </div>
                               <div class='info-box'>    
                                        <input type='text' class='info' name='info' value='";echo $info;
                                        echo"' readonly>
                                </div>
                                <button type='submit' class='order'>submit</button>
                            </form>
                            </div><!--form-->
                        </div><!--md10-->
                        <div class='col-md-1'></div><!--md4-->
                    </div><!--third row-->

                    
             </div><!--main-row-->
    ";
?>
