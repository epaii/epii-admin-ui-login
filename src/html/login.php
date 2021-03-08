<style>
    body {
        background: url("<?php echo  $bg_imgs[0]; ?>");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        

        -moz-background-size: 100% 100%;
        height: 100vh;
    <?php  if(count($bg_imgs)==4): ?>
        animation-name: myfirst;
    <?php endif; ?>
        animation-duration: 30s;
        /*变换时间*/
        animation-delay: 1s;
        /*动画开始时间*/
        animation-iteration-count: infinite;
        /*下一周期循环播放*/
        animation-play-state: running;
        /*动画开始运行*/
    }
<?php  if(count($bg_imgs)==4): ?>

    @keyframes myfirst {
        0% {
            background: url("<?php  echo $bg_imgs[0]; ?>");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-background-size: 100% 100%;
        }
        34% {
            background: url("<?php echo  $bg_imgs[1]; ?>");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-background-size: 100% 100%;
        }
        67% {
            background: url("<?php echo  $bg_imgs[2]; ?>");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-background-size: 100% 100%;
        }
        100% {
            background: url("<?php echo  $bg_imgs[3]; ?>");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-background-size: 100% 100%;
        }
    }
    <?php endif; ?>

    .form-bg{
        background: #00b4ef;
    }
    .form-horizontal{
        background: rgba(255,255,255,0.5);
        padding-bottom: 40px;
        border-radius: 5px;
        text-align: center;
        min-width: 400px;
        width: 25%;
        <?php if($form_algin=="center") :?>
        margin: auto;
        margin-top:5%;
        <?php elseif($form_algin=="left") :?>
        margin-top: 13%;
        margin-left: 80px;
        <?php  elseif($form_algin=="right")  :?>
        margin-top: 13%;
         margin-right: 80px;
         float: right; 
         <?php  else :?>
            <?php echo $form_algin;?>
        <?php endif;?>
    }
    .form-horizontal .heading{
        display: block;
        font-size: <?php echo $title_size; ?>;
        font-weight: 400;
        padding: 35px 0;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 30px;
        color: <?php echo $title_color; ?>;
       
    }
    .form-horizontal .form-group{
        padding: 0 40px;
        margin: 0 0 25px 0;
        position: relative;
       
    }
    .form-horizontal .form-control{
        background: #f0f0f0;
        border: none;
        border-radius: 5px;
        box-shadow: none;
        padding: 0 20px 0 45px;
        height: 40px;
        transition: all 0.3s ease 0s;
    }
    .form-horizontal .form-control:focus{
        background: #e0e0e0;
        box-shadow: none;
        outline: 0 none;
    }
    .form-horizontal .form-group i{
        position: absolute;
        top: 12px;
        left: 60px;
        font-size: 17px;
        color: #c8c8c8;
        transition : all 0.5s ease 0s;
    }
    .form-horizontal .form-control:focus + i{
        color: #00b4ef;
    }
    .form-horizontal .fa-question-circle{
        display: inline-block;
        position: absolute;
        top: 12px;
        right: 60px;
        font-size: 20px;
        color: #808080;
        transition: all 0.5s ease 0s;
    }
    .form-horizontal .fa-question-circle:hover{
        color: #000;
    }
    .form-horizontal .main-checkbox{
        float: left;
        width: 20px;
        height: 20px;
        background: #11a3fc;
        border-radius: 50%;
        position: relative;
        margin: 5px 0 0 5px;
        border: 1px solid #11a3fc;
    }
    .form-horizontal .main-checkbox label{
        width: 20px;
        height: 20px;
        position: absolute;
        top: 0;
        left: 0;
        cursor: pointer;
    }
    .form-horizontal .main-checkbox label:after{
        content: "";
        width: 10px;
        height: 5px;
        position: absolute;
        top: 5px;
        left: 4px;
        border: 3px solid #fff;
        border-top: none;
        border-right: none;
        background: transparent;
        opacity: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }
    .form-horizontal .main-checkbox input[type=checkbox]{
        visibility: hidden;
    }
    .form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
        opacity: 1;
    }
    .form-horizontal .text{
        float: left;
        margin-left: 7px;
        line-height: 20px;
        padding-top: 5px;
        text-transform: capitalize;
    }
    .form-horizontal .btn{
        /* float: right; */
        font-size: 18px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
       
        text-transform: capitalize;
        transition: all 0.5s ease 0s;
        width: 100%;
    }
    @media only screen and (max-width: 679px){
        .form-horizontal .form-group{
            padding: 0 25px;
        }
        .form-horizontal .form-group i{
            left: 45px;
        }
        .form-horizontal .btn{
            padding: 10px 20px;
        }
        .form-horizontal{
        margin-top: 20%;
        width: 100%;
        margin: auto;
        float: clear; 
         
    }
    }

 
    .content{ 
        height: 100vh !important;
    }

    .form-horizontal .touxaing {
						
						margin: 0 auto;
                        margin-bottom: -30px;
                      
	}
	.form-horizontal .tou_img{
						width: 75px;
						height: 75px;
						border-radius: 50%;
                        margin-top: 35px;

	}
</style>

<div  >
   
       
            <form class="form-horizontal" data-form="1" method="post">
                <?php if($logo): ?>
                 <div class="touxaing">
                 <img class="tou_img" src="<?php echo $logo;?>" />
                </div>
                <?php endif; ?>  
                <span class="heading"><?php echo $title; ?></span>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="<?php echo $config_value["username_tip"]; ?>" required>
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input type="password" class="form-control"  name="password" placeholder="<?php echo $config_value["password_tip"]; ?>" required>
                    <i class="fa fa-lock"></i>
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                <div class="form-group" style="clear: both;">

                    <button type="submit" class="btn  <?php echo $config_value["btn_class"]; ?>"><?php echo $config_value["btn_msg"]; ?></button>
                    
                </div>
                <div class="form-group" style="clear: both;">
                <?php if($config_value["btn_reg_msg"]) :?>
                <button   class="btn   <?php echo $config_value["btn_reg_class"]; ?> btn-dialog" data-title="<?php echo $config_value["btn_reg_msg"]; ?>" data-area="<?php echo $config_value["btn_reg_dialog_area"]; ?>" data-url="<?php echo $config_value["btn_reg_url"]; ?>" style="color:#3e3e3e"><?php echo $config_value["btn_reg_msg"]; ?></button>
                <?php endif; ?> 
                <?php if($config_value["btn_other"]) :?>
                    <?php echo $config_value["btn_other"]; ?>
                <?php endif; ?>  
                </div>
            </form>
        
    
</div>