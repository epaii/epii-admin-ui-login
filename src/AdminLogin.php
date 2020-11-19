<?php

namespace epii\ui\login;

use epii\admin\ui\EpiiAdminUi;
use epii\admin\ui\lib\epiiadmin\jscmd\Alert;
use epii\admin\ui\lib\epiiadmin\jscmd\JsCmd;

/**
 * Created by PhpStorm.
 * User: mrren
 * Date: 2019/1/8
 * Time: 1:09 PM
 */
class AdminLogin
{

    private static $d_config = [
        "title" => "后台登录",
        "title_color"=>"#212529",
        "title_size"=>"35px",
        "success_url" => "",
        "username_tip" => "用户名或电子邮件",
        "password_tip" => "请输入密码",
        "btn_msg" => "登 录",
        "btn_class"=>"btn-info",
        "form_algin"=>"center", //left right center or some as margin-top:50%;margin-left:300px
        "btn_reg_msg" => "",//不为空则显示注册按钮
        "btn_reg_class"=>"btn-outline-info",
        "btn_reg_url"=>"",
        "btn_reg_dialog_area"=>"50%,80%",
        "btn_other"=>"",
        "logo"=>"http://epii.gitee.io/epiiadmin-js/img/epii.jpg"

    ];

    private static function get_defualt_config(){
        $config = [];
        $image_count = file_get_contents("http://epii.gitee.io/static/imgs/login_imgs/count.html?_r=".rand(0,1000));
         
        $index = rand(1,$image_count);
        $config["bg_imgs"] = ["http://epii.gitee.io/static/imgs/login_imgs/login".$index.".jpg"];
        return $config;
    }

    public static function login(IloginConfig $config)
    {

        $config_value = $config->getConfigs();

        if ($config_value) {
            $config_value = array_merge(self::$d_config, $config_value);
        } else {
            $config_value = self::$d_config;
        }
        
        if(!isset($config_value["bg_imgs"]))
        {   
            $config_value= array_merge( $config_value,self::get_defualt_config());
        }


        if (!$config_value["success_url"]) {
            echo "admin ui login config must include success_url ";
            exit;
        }

        if ($_POST) {

            $ret = $config->onPost($_POST["username"], $_POST["password"], $error_msg);

            if ($ret) {
                if ($error_msg)
                    echo JsCmd::alertUrl($config_value["success_url"], $error_msg);
                else
                    echo JsCmd::url($config_value["success_url"]);

            } else {

                echo JsCmd::make()->addCmd(Alert::make()->msg($error_msg)->onOk(null))->run();
            }
            exit;
        } else {
            ob_start();
             extract($config_value);
            if (!in_array(count($bg_imgs), [1, 4])) {
                echo "admin ui login must include 4 imgs ";
                exit;
            }
            
            include_once __DIR__ . "/html/login.php";
            $conetnt = ob_get_clean();
            EpiiAdminUi::showPage($conetnt);

        }
    }
}

