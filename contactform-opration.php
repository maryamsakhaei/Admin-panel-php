<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
include_once("db.php");
include_once("header.php");
session_start();
$name=$_POST["name"];
$tel=$_POST["tel"]; 
if(!$name==null&&!$tel==null){
   // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $emailErr = "Invalid email format";}
    $sql="INSERT INTO user (name,tel)value ('$name','$tel')";
        if($conn->query($sql) === TRUE) {
            $_SESSION['name'] = $name;
            $_SESSION['tel'] = $tel;
            echo"
                <div class='row market'>
                <img  class='market'src='image/ss.jpg'>
                <div class='col-md-4'></div>
                <div class='col-md-4'>
                <p class='welcome'> Wellcome ";
                echo $_SESSION['name'];
                echo"</p>
                </div>
                <div class='col-md-4'></div>
                </div>
                 ";
            ?>
             <div class="row">
             <div class="col-md-8"> 
                    <div class='row border'>
                            <div class='col-lg-4'>
                             <a class='btn btn-default sib' role='button'>apple </a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default porteghal' role='button'>orange </a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default blue'  role='button'> bluebery</a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default shatoot'  role='button'> shotgun</a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default ezhdeha'  role='button'> Dragon</a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default khiar'  role='button'> cucumber</a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default holo'  role='button'> peache</a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default toot'  role='button'> Berries</a>
                            </div><!-- /.col-lg-4 -->
                            <div class='col-lg-4'>
                            <a class='btn btn-default anar'  role='button'> Pomegranate</a>
                            </div><!-- /.col-lg-4 -->
                            
                            
                        </div>
                    </div>
             
             <div class="col-md-4">
             <div class='col-md-12 basket'>
                 <form action="orders.php" method="POST">
                 <input class='gheymat' type='hidden' name='gheymat' value='' >
                 <input class='pic' type='hidden' name='pic' value=''>
                 <input class='info' type='hidden' name='info' value=''>
                            <div class="fruit"></div>
                            <div class="prices"></div>
                            <div class="information"></div>
                           <button type="submit" class='sub-btn' role='button'>Add to Cart</button>
                            </div><!-- /.col-lg-4 -->
                            </div>

                </form>
             </div>
             </div>
        <?php
        }else{
            echo"اطلاعات وارد نشد";
        } 
}else{
    echo"اطلاعات درستی وجود ندارد";
}  
 include_once("footer.php");
?>	       
          