<?php
$telegram_ip_ranges = [
['lower' => '149.154.160.0', 'upper' => '149.154.175.255'], 
['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],    
];
$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
}
if(!$ok) die("Sik :)");
define('API_KEY','[*[TOKEN]*]');
function bot($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//خط 27 توکن بزارید و تامام
function bot($method,$datas=[]){
	$url = "https://api.telegram.org/bot".API_KEY."/".$method;
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,True);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
	$res = curl_exec($ch);
	If(curl_error($ch)){
		var_dump(curl_error($ch));
		return "null";
	}else{
		return json_decode($res);
	}
}
date_default_timezone_set('Asia/Tehran');
$time = date('H:i');
error_reporting(0);
define("API_KEY", "[*[TOKEN]*]"); //به جای کلمه TOKEN توکن رباتتون بزارید و تامام
ini_set("log_errors","off");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$textmessage = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$first_namei = $message->from->first_name;
$last_namei = $message->from->last_name;
$usernamei = $message->from->username;
$user = json_decode(file_get_contents("data/$from_id.json"),true);
$step = $user["step"];
$tc = $update->message->chat->type;
$new_chat_member = $message->new_chat_member;
$new_chat_member_id = $new_chat_member->id;
$new_chat_member_first_name = $new_chat_member->first_name;
$new_chat_member_last_name = $new_chat_member->last_name;
$new_chat_member_username = $new_chat_member->username;
$suchi = file_get_contents("data/$chat_id/setnt.txt");
function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function objectToArrays( $object ) {
				if( !is_object( $object ) && !is_array( $object ) )
				{
				return $object;
				}
				if( is_object( $object ) )
				{
				$object = get_object_vars( $object );
				}
			return array_map( "objectToArrays", $object );
			}
function DeleteFolder($path){
 if($handle=opendir($path)){
  while (false!==($file=readdir($handle))){
   if($file<>"." AND $file<>".."){
    if(is_file($path.'/'.$file)){ 
     @unlink($path.'/'.$file);
    } 
    if(is_dir($path.'/'.$file)) { 
     deletefolder($path.'/'.$file); 
     @rmdir($path.'/'.$file); 
    }
   }
        }
    }
}

function sendaction($chat_id, $action){
  bot('sendchataction',[
  'chat_id'=>$chat_id,
  'action'=>$action
  ]);
  }
  
$update  = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text    = $message->text;
$chat    = $message->chat;
$chat_id = $chat->id;
$from    = $message->from;
$from_id = $from->id;
if(!file_exists('data')){
	mkdir('data');
	$userlist = [];
}else{
	$userlist = explode(',',file_get_contents('data/list.txt'));
}
$newuser = file_exists('data/'.$from_id.'.json');
if($newuser){
	file_put_contents('data/'.$from_id.'.json', json_encode(['step'=>'', 'coin'=>0]));
	$userlist[] = $from_id;
}
$profile = json_decode(file_get_contents('data/'.$from_id.'.json'));

/*
codexsilver.r98.ir
سورس های تست شده و دیباگ 
و نمونه فیلم از رباته ساخته شده
کاملا رایگان
@codex_silver
*/

$buttons = [
];


function fara($var, $text){$all = explode("||", $text);foreach($all as $a){$a = trim($a);$stars = explode("*",$a);$c="";$d = $var;for($i=0;$i<count($stars);$i++){$b=$stars[$i];if($b!=""){$f = strpos($d,$b);if($i==0&&$f!==0){break;}if($i==(count($stars)-1)&&$f+strlen($b)!=strlen($d)){break;}if($f===false){break;}$d=substr($d,$f+strlen($b));}if($i==(count($stars)-1)){return true;}}}return false;}


if($text == "/start")
{
	bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"🎩به ربات احمد ذوقی خوش آمدید😼 👨‍🦳\n\n🔅 دستورات ربات 🙂 : /dastorat\n🔅 راهنما 😎 : /help",
		'parse_mode'=>"MarkDown"
	]);
}
elseif($text == "/dastorat")
{
	bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"😁 دستورات ربات سرگرمی احمد ذوقی 🎩👨‍🦳\n\nدر وارد کردن دستورات از + استفاده نکنید وگرنه جوابی دریافت نمیکنید..\n علامت | فقط برای جدا سازی فارسی و انگلیسی است برای مثال نحوه درست نمایش پروفایل ( من ) و یا (me)\n\n+ من | me\n🔺 نمایش پروفایل شما \n\n+ زمان | time\n🔺 نمایش زمان دقیق بصورت فارسے\n\n+ ربات | bot\n🔺  اطلاع از آنلاینی ربات\n\n+  پینگ | ping\n🔺 دریافت پینگ و اطلاعات سرور\n\n+ شاخ | text\n🔺 دریافت متن شاخ مخصوص بیو\n\n+ حدیث | hadith\n🔺 دریافت حدیث از امامان\n\n+ فال | fal\n🔺 دریافت فال بصورت تصویری\n\n➖➖➖➖\n+ /photo name\nساخت لوگو با نام شما بجای name اسم موردنظرتونو بزارید 😄\n\n+ /Blue name\nبزرگ و آبی کردن متن بجای name اسم موردنظرتونو بزارید 😄\n\n+ /Little name\nکوچک کردن و زیباسازی متن، بجای name اسم موردنظرتونو بزارید 😄\n\n+ /Dayer name\nبرای دایره ای کردن متن ها و زیباسازی بجای name اسم موردنظرتونو بزارید😄\n➖➖➖➖\nقابلیت های دیگه در دست ساخته :)\nراستی این ربات دارای هوش مصنوعی هست و باهاتون صحبت هم میکنه !\n😢 البته نمی تونه همه حرف هاتونو بفهمه !\n\n😶 در وارد کردن دستورات حروف کوچک بزرگ دقت شود!\n\nاز طریق دکمه زیر ربات رو به گروهتون ببرید ꙮ ☻‌‌⫷",
		'parse_mode'=>"MarkDown"
	]);
}
elseif($text == "/help")
{
	bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"🤧 راهنمای ربات احمد ذوقی ❪⃘ٖٖٖٜٖٖٖٜٖٖٖٜٖٖٜ⃔͜☬⃘ٖٖٖٜٖٖٖٜٖٖٖٜٖٖٜ⃕͜❫\n➖➖➖➖➖➖➖➖➖➖\n این ربات پیشرفته دارای هوش مصنوعیه و قابلیت سرگرم کردن شما و اعضای گروهتون رو داره!\nچون این ربات کلی حرف بلده و میتونه باهاتون حرف بزنه😉\nولی خوب نمیتونید باهاش بحث کنید و یا درباره یه موضوع حرف بزنید.😎\nو بعضی از حرفارو هم تشخیص نمیده و نمیفهمه!😛\n😶 این ربات پیشرفته هر روز درحال آپدیته و قابلیت های جدید بهش اضافه میشه!😼\nبرید بخش دستورات میتونید امکاناتش رو ببینید :)\nاین ربات خوب مناسب گروهه یه سرگرمی مناسب و خوب برای گروه\nاین رباتو ببرید توی گروهاتون و ازش لذت ببرید!\n➖➖➖➖➖➖➖➖➖➖➖\n ⃟⃦⃘⃐⃤‌از طریق دکمه زیر ربات رو به گروهتون ببرید ☬",
		'parse_mode'=>"MarkDown"
	]);
}
	 elseif($textmessage == "فال" or $textmessage == "fal"){
$add = "http://www.beytoote.com/images/Hafez/".rand(1,149).".gif";
bot('sendphoto', [
'chat_id' => $chat_id,
'photo'=>$add,
'caption' =>"
☝️ فال حافظ برای شما گرفته شد.
 ",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
	 elseif($textmessage == "زمان" or $textmessage == "time" ){
	bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"
⏰ $time 
",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	 }
	 elseif($textmessage == "من" or $textmessage == "me"){
	 $profile = "https://telegram.me/$username";
 bot('sendphoto',[
'chat_id' => $chat_id,
'photo'=>$profile,
'caption' =>"#پروفایل_شما  :)
➖➖➖➖➖➖➖
🔹First Name : $first_name
🔹Last Name : $last_name
🔹Username : @$username
🔹id : $chat_id
➖➖➖➖➖➖➖",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
		 elseif($textmessage == "ping" or $textmessage == "/ping" or $textmessage == "پینگ" ){
	 $load = sys_getloadavg();
	 $mem = memory_get_usage();
	 $ver = phpversion();  
	bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"
• ᴘɪɴɢ : <code>$load[0]</code>
• ᴍᴇᴍ : <code>$mem KB</code>
• ᴘʜᴘ ᴠᴇʀ : <code>$ver</code>
",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	 }
	 elseif($textmessage == "bot" or $textmessage == "آنلاینی" or $textmessage == "رباتی" or $textmessage == "ربات"){
$bot = [
"ماشین بفرستم؟ 🚗",
"جووون شهلا کارم داری؟ 🤤",
"خدا وکیلی 100 میدم 😐",
"دوستت دارم 😐❤️",
];
$r = $bot[rand(0, count($bot)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$r",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"سلام") !== false){
$botss = [
"سلام شهلا 🙂❤️",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"صلام") !== false){
$botss = [
"خداوکیلی 100 میدم فقط اینجوری صلام بده 👨‍🦳",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"خوبی") !== false){
$botss = [
"تو خوبی شهلا ؟ 😋❤️",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"چطوری") !== false){
$botss = [
"خوبم تو چطوری؟",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"چخبر") !== false){
$botss = [
"سلامتی شهلا 💋",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"چه خبر") !== false){
$botss = [
"سلامتی شهلا 💋",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"php") !== false){
$botss = [
"خداوکیلی 100 میدم تو یکی از php نگو 😐",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"فرزندم") !== false){
$botss = [
"ماشین بفرستم؟",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"مادرت") !== false){
$botss = [
"از این جدیدایه؟😋",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"کون") !== false){
$botss = [
"جووون😋",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"صیک") !== false){
$botss = [
"صیک صیک نکن خودم میرم🙁",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"سلوم") !== false){
$botss = [
"/:",
];
$s = $botss[rand(0, count($botss)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$s",
'reply_to_message_id'=>$message_id,
]);
}
		elseif(strpos($textmessage,"بای") !== false){
$bots = [
"برو هروقت بگی ماشین میفرستم 🙂❤️",
"از کنار دیوار برو شهلا 😘❤️",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
		elseif(strpos($textmessage,"خدافظ") !== false){
$bots = [
"برو هروقت بگی ماشین میفرستم 🙂❤️",
"از کنار دیوار برو شهلا 😘❤️",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
		elseif(strpos($textmessage,"خداحافظ") !== false){
$bots = [
"برو هروقت بگی ماشین میفرستم 🙂❤️",
"از کنار دیوار برو شهلا 😘❤️",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
		elseif(strpos($textmessage,"کص") !== false){
$bots = [
"کصتو بخورم شهلا 😋",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"کیر") !== false){
$bots = [
"کیر دوس داری شهلا؟😀",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"سکس") !== false){
$bots = [
"ماشین بفرستم؟ 😁",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"fuck") !== false){
$bots = [
"ماشین بفرستم؟ 😁",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
elseif(strpos($textmessage,"ساک") !== false){
$bots = [
"جووون بیا ساک بزن شهلا 🤤",
];
$b = $bots[rand(0, count($bots)-1)];
	bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' => "$b",
'reply_to_message_id'=>$message_id,
]);
}
if($textmessage and file_exists("cmd/$textmessage.txt")){
	$textcmd = file_get_contents("cmd/$textmessage.txt");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$textcmd,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}

if($text == "پنل مدیریت" && $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🎗پنل مدیریت.",
 'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار🌷 "],['text'=>"📧پیام به همه"]],
[['text'=>"📬فرواد به همه"]],
],
"resize_keyboard"=>true,
])
]);
}

if($text ==   'آمار🌷' && $from_id == $admin){
$users = file_get_contents("http://r2f.ir/bot/sokh/users.txt");
$member_id = explode("\n",$users);
$member_count = count($member_id) -1;
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"🎗تعداد اعضا ربات سخنگو : $member_count",
 'parse_mode'=>"markdown",
 ]);
}
  // in the name of god
  //  - @hi000bot - @t000c
// channel  https://t.me/my_oj
// channel  https://t.me/my_oj
/*
https://t.me/my_oj
*/
if($text == '📧پیام به همه' && $from_id == $admin){
file_put_contents("data/$from_id/bot.suchi.ir.txt","Send");
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "پیامتون رو بفرستید تا به همه گروه ها و کاربرانی که ربات مورد استفاده انهاست بفرستم",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"پنل مدیریت"]
],
]
])
]);
}
elseif($suchi_bot == "Send" && $from_id == $admin){
file_put_contents("data/$chat_id/bot.suchi.ir.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" پیام همگانی فرستاده شد.",
'parse_mode' => 'html'
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)) {
$user = fgets( $all_member);
SendMessage($user,$text,'html');
}
}

if($text == '📬فرواد به همه' && $from_id == $admin){
file_put_contents("data/$from_id/bot.suchi.ir.txt","forvar");
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "پیامتونو رو فروارد کنید تا به تمامی کاربران و گروه ها ارسال شود",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"پنل مدیریت"]
],
]
])
]);
}

elseif($suchi_bot == "forvar" && $from_id == $admin){
file_put_contents("data/$chat_id/bot.suchi.ir.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📬فرواد به همه ارسال شد به تمامی کاربران و گروه ها",
'parse_mode' => 'html'
]);
$forp = fopen( "users.txt", 'r'); 
while( !feof( $forp)) { 
$fakar = fgets( $forp); 
Forward($fakar, $chat_id,$message_id); 
  } 
   bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
   'text'=>"با موفقیت فروارد شد.", 
   ]);
}

if($text == "یاد دادن کلمه جدید"){
file_put_contents("data/$from_id/bot.suchi.ir.txt","setname");

if(strpos($off_on,"false") !== false && $from_id != $Dev){
 return false;
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"میخوای چه کلمه ای رو یاد بگیرم ؟ (فقط سوال)",
'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
]);
}
elseif($suchi_bot == "setname"){
file_put_contents("text/$text");
file_put_contents("data/$chat_id/setnt.txt","$text");
file_put_contents("data/$chat_id/bot.suchi.ir.txt","settext");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🎗در جواب اون کلمه چی بگم؟",
'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
]);
}
elseif($suchi_bot == "settext"){
file_put_contents("text/$suchi/text.txt","$text");
file_put_contents("data/$chat_id/bot.suchi.ir.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"دمت گرم یاد گرفتم بریم بعدی🎄🎯",
'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
]);
}

if(preg_match('/^\/([Dd]ayer) (.*)/s',$textmessage) and $tc == 'group' | $tc == 'supergroup' | $tc == 'private') {
preg_match('/^\/([Dd]ayer) (.*)/s',$textmessage,$match);
$ev1 = $match[2];
$a1 = str_replace('a','ⓐ',$ev1);
$a1 = str_replace('A','ⓐ',$a1);
$b1 = str_replace("b","ⓑ",$a1);
$b1 = str_replace("B","ⓑ",$b1);
$c1 = str_replace("c","ⓒ",$b1);
$c1 = str_replace("C","ⓒ",$c1);
$d1 = str_replace("d","ⓓ",$c1);
$d1 = str_replace("D","ⓓ",$d1);
$e1 = str_replace("e","ⓔ",$d1);
$e1 = str_replace("E","ⓔ",$e1);
$f1 = str_replace("f","ⓕ",$e1);
$f1 = str_replace("F","ⓕ",$f1);
$g1 = str_replace("g","ⓖ",$f1);
$g1 = str_replace("G","ⓖ",$g1);
$h1 = str_replace("h","ⓗ",$g1);
$h1 = str_replace("H","ⓗ",$h1);
$i1 = str_replace("i","ⓘ",$h1);
$i1 = str_replace("I","ⓘ",$i1);
$j1 = str_replace("j","ⓙ",$i1);
$j1 = str_replace("J","ⓙ",$j1);
$k1 = str_replace("k","ⓚ",$j1);
$k1 = str_replace("K","ⓚ",$k1);
$l1 = str_replace("l","ⓛ",$k1);
$l1 = str_replace("L","ⓛ",$l1);
$m1 = str_replace("m","ⓜ",$l1);
$m1 = str_replace("M","ⓜ",$m1);
$n1 = str_replace("n","ⓝ",$m1);
$n1 = str_replace("N","ⓝ",$n1);
$o1 = str_replace("o","ⓞ",$n1);
$o1 = str_replace("O","ⓞ",$o1);
$p1 = str_replace("p","ⓟ",$o1);
$p1 = str_replace("P","ⓟ",$p1);
$q1 = str_replace("q","ⓠ",$p1);
$q1 = str_replace("Q","ⓠ",$q1);
$r1 = str_replace("r","ⓡ",$q1);
$r1 = str_replace("R","ⓡ",$r1);
$s1 = str_replace("s","ⓢ",$r1);
$s1 = str_replace("S","ⓢ",$s1);
$t1 = str_replace("t","ⓣ",$s1);
$t1 = str_replace("T","ⓣ",$t1);
$u1 = str_replace("u","ⓤ",$t1);
$u1 = str_replace("U","ⓤ",$u1);
$v1 = str_replace("v","ⓥ",$u1);
$v1 = str_replace("V","ⓥ",$v1);
$w1 = str_replace("w","ⓦ",$v1);
$w1 = str_replace("W","ⓦ",$w1);
$x1 = str_replace("x","ⓧ",$w1);
$x1 = str_replace("X","ⓧ",$x1);
$y1 = str_replace("y","ⓨ",$x1);
$y1 = str_replace("Y","ⓨ",$y1);
$z1 = str_replace("z","ⓩ",$y1);
$z1 = str_replace("Z","ⓩ",$z1);
$z1 = str_replace("1","ⓩ",$z1); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
if(preg_match('/^\/([Ll]ittle) (.*)/s',$textmessage) and $tc == 'group' | $tc == 'supergroup' | $tc == 'private') {
preg_match('/^\/([Ll]ittle) (.*)/s',$textmessage,$match);
$ev1 = $match[2];
$a1 = str_replace('a',"ᵃ",$ev1);
$a1 = str_replace('A',"ᵃ",$a1);
$b1 = str_replace("b","ᵇ",$a1);
$b1 = str_replace("B","ᵇ",$b1);
$c1 = str_replace("c","ᶜ",$b1);
$c1 = str_replace("C","ᶜ",$c1);
$d1 = str_replace("d","ᵈ",$c1);
$d1 = str_replace("D","ᵈ",$d1);
$e1 = str_replace("e","ᵉ",$d1);
$e1 = str_replace("E","ᵉ",$e1);
$f1 = str_replace("f","ᶠ",$e1);
$f1 = str_replace("F","ᶠ",$f1);
$g1 = str_replace("g","ᵍ",$f1);
$g1 = str_replace("G","ᵍ",$g1);
$h1 = str_replace("h","ʰ",$g1);
$h1 = str_replace("H","ʰ",$h1);
$i1 = str_replace("i","ᶤ",$h1);
$i1 = str_replace("I","ᶤ",$i1);
$j1 = str_replace("j","ʲ",$i1);
$j1 = str_replace("J","ʲ",$j1);
$k1 = str_replace("k","ᵏ",$j1);
$k1 = str_replace("K","ᵏ",$k1);
$l1 = str_replace("l","ˡ",$k1);
$l1 = str_replace("L","ˡ",$l1);
$m1 = str_replace("m","ᵐ",$l1);
$m1 = str_replace("M","ᵐ",$m1);
$n1 = str_replace("n","ᶰ",$m1);
$n1 = str_replace("N","ᶰ",$n1);
$o1 = str_replace("o","ᵒ",$n1);
$o1 = str_replace("O","ᵒ",$o1);
$p1 = str_replace("p","ᵖ",$o1);
$p1 = str_replace("P","ᵖ",$p1);
$q1 = str_replace("q","ᵠ",$p1);
$q1 = str_replace("Q","ᵠ",$q1);
$r1 = str_replace("r","ʳ",$q1);
$r1 = str_replace("R","ʳ",$r1);
$s1 = str_replace("s","ˢ",$r1);
$s1 = str_replace("S","ˢ",$s1);
$t1 = str_replace("t","ᵗ",$s1);
$t1 = str_replace("T","ᵗ",$t1);
$u1 = str_replace("u","ᵘ",$t1);
$u1 = str_replace("U","ᵘ",$u1);
$v1 = str_replace("v","ᵛ",$u1);
$v1 = str_replace("V","ᵛ",$v1);
$w1 = str_replace("w","ʷ",$v1);
$w1 = str_replace("W","ʷ",$w1);
$x1 = str_replace("x","ˣ",$w1);
$x1 = str_replace("X","ˣ",$x1);
$y1 = str_replace("y","ʸ",$x1);
$y1 = str_replace("Y","ʸ",$y1);
$z1 = str_replace("z","ᶻ",$y1);
$z1 = str_replace("Z","ᶻ",$z1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
if(preg_match('/^\/([Bb]lue) (.*)/s',$textmessage) and $tc == 'group' | $tc == 'supergroup' | $tc == 'private') {
preg_match('/^\/([Bb]lue) (.*)/s',$textmessage,$match);
$ev1 = $match[2];
$a1 = str_replace('a','•🇦',$ev1);
$a1 = str_replace('A','•🇦',$a1);
$b1 = str_replace("b","•🇧",$a1);
$b1 = str_replace("B","•🇧",$b1);
$c1 = str_replace("c","•🇨",$b1);
$c1 = str_replace("C","•🇨",$c1);
$d1 = str_replace("d","•🇩",$c1);
$d1 = str_replace("D","•🇩",$d1);
$e1 = str_replace("e","•🇪",$d1);
$e1 = str_replace("E","•🇪",$e1);
$f1 = str_replace("f","•🇫",$e1);
$f1 = str_replace("F","•🇫",$f1);
$g1 = str_replace("g","•🇬",$f1);
$g1 = str_replace("G","•🇬",$g1);
$h1 = str_replace("h","•🇭",$g1);
$h1 = str_replace("H","•🇭",$h1);
$i1 = str_replace("i","•🇮",$h1);
$i1 = str_replace("I","•🇮",$i1);
$j1 = str_replace("j","•🇯",$i1);
$j1 = str_replace("J","•🇯",$j1);
$k1 = str_replace("k","•🇰",$j1);
$k1 = str_replace("K","•🇰",$k1);
$l1 = str_replace("l","•🇱",$k1);
$l1 = str_replace("L","•🇱",$l1);
$m1 = str_replace("m","•🇲",$l1);
$m1 = str_replace("M","•🇲",$m1);
$n1 = str_replace("n","•🇳",$m1);
$n1 = str_replace("N","•🇳",$n1);
$o1 = str_replace("o","•🇴",$n1);
$o1 = str_replace("O","•🇴",$o1);
$p1 = str_replace("p","•🇵",$o1);
$p1 = str_replace("P","•🇵",$p1);
$q1 = str_replace("q","•🇶",$p1);
$q1 = str_replace("Q","•🇶",$q1);
$r1 = str_replace("r","•🇷",$q1);
$r1 = str_replace("R","•🇷",$r1);
$s1 = str_replace("s","•🇸",$r1);
$s1 = str_replace("S","•🇸",$s1);
$t1 = str_replace("t","•🇹",$s1);
$t1 = str_replace("T","•🇹",$t1);
$u1 = str_replace("u","•🇻",$t1);
$u1 = str_replace("U","•🇻",$u1);
$v1 = str_replace("v","•🇺",$u1);
$v1 = str_replace("V","•🇺",$v1);
$w1 = str_replace("w","•🇼",$v1);
$w1 = str_replace("W","•🇼",$w1);
$x1 = str_replace("x","•🇽",$w1);
$x1 = str_replace("X","•🇽",$x1);
$y1 = str_replace("y","•🇾",$x1);
$y1 = str_replace("Y","•🇾",$y1);
$z1 = str_replace("z","•🇿",$y1);
$z1 = str_replace("Z","•🇿",$z1);
$z1 = str_replace("1","•🇿",$z1); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
file_put_contents('data/'.$from_id.'.json', json_encode($profile));
file_put_contents('data/list.txt', join($userlist, ','));

?>