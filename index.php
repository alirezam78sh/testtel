<?php

ob_start();
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
$admin = '[*[ADMIN]*]';
define('API_KEY','1231277254:AAHAMSRyyCivx5-Z4JZx9v_mQyB7bC3Sq_0');
function Happytime($method,$datas=[]){
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
/* فانکشن ها */
function SendMessage($chatid,$text,$parsmde,$disable_web_page_preview,$keyboard){
    Happytime('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>$text,
    ]);
}
function sendphoto($chat_id,$photo,$captionl){
    Happytime('sendphoto',[
        'chat_id'=>$chat_id,
        'photo'=>$photo,
        'caption'=>$caption,
    ]);
}

//==========فانکشن های مورد نیاز=========//
function EditMsg1($chatid, $msgid, $text, $keyboard = null) {
    bot('EditMessageText', ['chat_id' => $chatid, 'message_id' => $msgid, 'text' => $text, 'reply_markup' => $keyboard]);
}
function EditMsg($chat_id, $text, $mode, $msg_id, $keyboard = null) {
    bot('EditMessageText', ['chat_id' => $chat_id, 'message_id' => $msg_id, 'text' => $text, 'parse_mode' => $mode, 'reply_markup' => $keyboard]);
}
function Forward($chat_id, $from_id, $massege_id) {
    bot('ForwardMessage', ['chat_id' => $chat_id, 'from_chat_id' => $from_id, 'message_id' => $massege_id]);
}
function objectToArrays($object) {
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
    if (is_object($object)) {
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}
/* متغییر ها */
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $update->message->from->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$first = $update->callback_query->from->first_name;
$username = $message->from->username;
$name = $update->message->from->first_name;
$chat_id = $update->message->chat->id;
$chatid = $update->callback_query->message->chat->id;
$dev = "994250837"; //admin
$Dev = "994250837"; //admin
$admin = "994250837"; //admin
$rt = $update->message->reply_to_message;
$tc = $update->message->chat->type;
$reply = $update->message->reply_to_message;
$reply = $update->message->reply_to_message;
$coin = file_get_contents("data/$from_id/coin.txt");
$pool = $coin * 100
$data = $update->callback_query->data;
$bot = file_get_contents("data/$from_id/step.txt");
$wait = file_get_contents("data/$from_id/wait.txt");
$allcoin = file_get_contents("data/$from_id/allcoin.txt");
@$onof = file_get_contents("data/onof.txt");
@$list = file_get_contents("users.txt");
@$sea = file_get_contents("data/$from_id/membrs.txt");
$step = file_get_contents("data/$from_id/step.txt");
$state = file_get_contents("data/$from_id/state.txt");
$Members = file_get_contents("data/Member.txt");
$type = file_get_contents("data/$from_id/type.txt");
$Viph = file_get_contents("data/$from_id/Viph.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel&user_id=".$from_id));
$tch = $forchaneel->result->status;
$forchaneel1 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel&user_id=".$from_id));
$tch1 = $forchaneel1->result->status;
$blocklist = file_get_contents("data/blocklist.txt");
$da = $update->message->reply_to_message->forward_from->id;
$forward_chat_username = $update->message->forward_from_chat->username;
$data = $update->callback_query->data;
$text = $update->message->text;
$text1 = $update->message->text;
$text3 = $update->message->text;
$contact = $message->contact;
date_default_timezone_set('Asia/Tehran');
$time = date('H:i');
error_reporting(0);
$timenow = time("h:i:s");
$timenow = time();
$emtiaz = file_get_contents("data/$from_id/emtiaz.txt");
$lasttime = file_get_contents("data/$from_id/time.txt");
$emtiaz = file_get_contents("data/$from_id/coin.txt");
$contactid = $contact->user_id;
$contactnum = $contact->phone_number;
$rpto = $update->message->reply_to_message->forward_from->id;
$user = json_decode(file_get_contents("data/$from_id.json"),true);
$step = $user["step"];
$gpname = $update->callback_query->message->chat->title;
$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$createfree = $user["createfree"];
$createbot = $user["createbot"];
$storebot = $user["storebot"];
$suchi = file_get_contents("data/$chat_id/setnt.txt");
$settings = json_decode(file_get_contents("data/settings.json"),true);
$message_id = $message->message_id;
$messageid = $update->callback_query->message->message_id;
$message_id_feed = $update->message->message_id;
$reply = $message->reply_to_message->forward_from->id;
$reply_id = $message->reply_to_message->from->id;
$userlist = explode(',',file_get_contents('data/list.txt'));
$newuser = file_exists('data/'.$from_id.'.json');
$off_on = file_get_contents("bot.txt");
mkdir("data/$from_id");
//==========دستور نمایش زمان======//
$photo = $update->message->photo;
$now = date('h:i:s');
$date = file_get_contents("https://r2f.ir/web/tit.php");
$today = file_get_contents("https://r2f.ir/web/dataf.php");
$get = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=$channel&user_id=$from_id"), true);
$rank = $get['result']['status'];
//===========مورد نیاز==========//
$arz=json_decode(file_get_contents("https://r2f.ir/web/arz.php"),true);
$yoro=$arz['0']['price'];
$emarat=$arz['1']['price'];
$swead=$arz['2']['price'];
$norway=$arz['3']['price'];
$iraq=$arz['4']['price'];
$swit=$arz['5']['price'];
$armanestan=$arz['6']['price'];
$gorgea=$arz['7']['price'];
$pakestan=$arz['8']['price'];
$soudi=$arz['9']['price'];
$russia=$arz['10']['price'];
$india=$arz['11']['price'];
$kwait=$arz['12']['price'];
$astulia=$arz['13']['price'];
$oman=$arz['14']['price'];
$qatar=$arz['15']['price'];
$kanada=$arz['16']['price'];
$tailand=$arz['17']['price'];
$turkye=$arz['18']['price'];
$england=$arz['19']['price'];
$hong=$arz['20']['price'];
$azarbayjan=$arz['21']['price'];
$malezy=$arz['22']['price'];
$danmark=$arz['23']['price'];
$newzland=$arz['24']['price'];
$china=$arz['25']['price'];
$japan=$arz['26']['price'];
$bahrin=$arz['27']['price'];
$souria=$arz['28']['price'];
$dolar=$arz['29']['price'];
$talaa=json_decode(file_get_contents("https://r2f.ir/web/tala.php"),true);
$tala=$talaa['4']['price'];
$nogre=$talaa['5']['price'];
$emami=$talaa['0']['price'];
$nim=$talaa['1']['price'];
$rob=$talaa['2']['price'];
$geram=$talaa['3']['price'];
$bahar=$talaa['6']['price'];
//----------//
function Spam($user_id){
@mkdir("data/spam");
$spam_status = json_decode(file_get_contents("data/spam/$user_id.json"),true);
if($spam_status != null){
if(mb_strpos($spam_status[0],"time") !== false){
if(str_replace("time ",null,$spam_status[0]) >= time())
exit(false);
else
$spam_status = [1,time()+2];
}
elseif(time() < $spam_status[1]){
if($spam_status[0]+1 > 3){
$time = time() + 100;
$spam_status = ["time $time"];
file_put_contents("data/spam/$user_id.json",json_encode($spam_status,true));
bot('SendMessage',[
'chat_id'=>$user_id,
'text'=>"جهت جلوگیری از اسپم ربات شما به مدت 100 ثانیه از ربات  بلاک  شدید.⏳",
]);
exit(false);
}else{
$spam_status = [$spam_status[0]+1,$spam_status[1]];
}}else{
$spam_status = [1,time()+2];
}}else{
$spam_status = [1,time()+2];
}
file_put_contents("data/spam/$user_id.json",json_encode($spam_status,true));
}
Spam($from_id);
//--------//
/* کد اصلی */
if($text1=="/start"){
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "5");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}
file_put_contents("data/$chat_id/hadi.txt", "no");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
درود $first_name
⚊⚊⚊⚊⚊⚊
به ربات کسب درآمد خوش آمدید ، با استفاده از ربات ما میتونید به درآمد خوبی دست پیدا کنید 👌♥️
برای اطمینان بیشتر شما کانال پرداختی ها نیز ساخته شده است :)
انتخاب کنید .... ♥️👇
⚊⚊⚊⚊⚊⚊
Creator : @MotherfuckerNM
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'👑برداشت👑']],
[['text'=>'🔱انتقال وجه🔱'],['text'=>'⚜️جمع آوری پول⚜️'],['text'=>'🔱صفر کردن مبلغ🔱']],
[['text'=>'✮درباره ما✮'],['text'=>'✰سرگرمی✰']],
[['text'=>"✯زیر مجموعه گیری✯"],['text'=>'✶راهنما✶'],['text'=>'✰آپدیت✰']],
[['text'=>'✰پشتیبانی✰'],['text'=>'✮حساب من✮']],
[['text'=>'👑سرمایه گذاری👑']],
],
'resize_keyboard'=>true,
])
]);
}
elseif (strpos($text, '/start') !== false) {
$newid = str_replace("/start ", "", $text);
if($from_id == $newid) {
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "
خودت نمیتونی معرف خودت بشی 😐
",
]);
} 
elseif (strpos($list, "$from_id") !== false){
SendMessage($chat_id,"
شما قبلا عضو ربات شده اید :|
");
}else{
@$sho = file_get_contents("data/$newid/coin.txt");
$getsho = $sho + 1;
file_put_contents("data/$newid/coin.txt", $getsho);
@$sea = file_get_contents("data/$newid/membrs.txt");
$getsea = $sea + 1;
file_put_contents("data/$newid/membrs.txt", $getsea);
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
@$sea = file_get_contents("data/$from_id/membrs.txt");
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "5");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}
file_put_contents("data/$chat_id/hadi.txt", "No");
sendmessage($chat_id, "
شما با دعوت [کاربر](tg://user?id=$newid)عضو ربات ما شدید.⭐️
","Markdown","true");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
درود $first_name
⚊⚊⚊⚊⚊⚊
به ربات کسب درآمد خوش آمدید ، با استفاده از ربات ما میتونید به درآمد خوبی دست پیدا کنید 👌♥️
برای اطمینان بیشتر شما کانال پرداختی ها نیز ساخته شده است :)
انتخاب کنید .... ♥️👇
⚊⚊⚊⚊⚊⚊
Creator : @MotherfuckerNM
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'👑برداشت👑']],
[['text'=>'🔱انتقال وجه🔱'],['text'=>'⚜️جمع آوری پول⚜️'],['text'=>'🔱صفر کردن مبلغ🔱']],
[['text'=>'✮درباره ما✮'],['text'=>'✰سرگرمی✰']],
[['text'=>"✯زیر مجموعه گیری✯"],['text'=>'✶راهنما✶'],['text'=>'✰آپدیت✰']],
[['text'=>'✰پشتیبانی✰'],['text'=>'✮حساب من✮']],
[['text'=>'👑سرمایه گذاری👑']],
],
'resize_keyboard'=>true,
])
]);
SendMessage($newid, "[$first_name](tg://user?id=$from_id) از طریق لینک شما وارد ربات شد🔅","Markdown","true");
}
}
//========//
if($onof == "off" && $from_id != $dev){
SendMessage($chat_id,"اوه⚠️
ربات در حال حاضر توسط مدیر خاموش شدع!!!!!", null, $message_id, $remove);   
 return false;
}
//========//
elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator' or $tch1 != 'member' && $tch1 != 'creator' && $tch1 != 'administrator'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
سلام رفیق
لطفا برای حمایت و اطلاع از اپدیت ها و پرداختی های ربات در کانال های ما عضو شوید 👐🏻
@happy_time_org l @happy_time_org
@happy_time_org l @happy_time_org
بعد از عضویت در کانال ها بر روی (/start) کلیک کنید ❗️
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💫 channel 1 ™✨",'url'=>'https://t.me/happy_time_org']],
[['text'=>"🔆 channel 2 ™✨",'url'=>'https://t.me/happy_time_org']],
]
])
]);
}
if($text == '✮حساب من✮'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❄️ Name : $first_name ❄️
❄️ Last Name : $last_name ❄️
❄️ Id : $from_id ❄️
❄️ User Name : @$username ❄️
❄️ Your Money : $pool ❄️
-------------
Channel : @Happy_Time_Org
Time : $time
",
'reply_to_message_id'=>$message_id,
]);
}
//========@happy_time_org=>کص ننت منبع نزنی==//
if($text == 'بکیرم'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
شما یک اخطار دریافت کردید ، لطفا دیگر از این کلمه استفاده نکنید که در صورت مشاهده مجدد در 24 ساعت اکانت شما مسدود میشود :))
سایر فحش ها مجاز است :|
",
'reply_to_message_id'=>$message_id,
]);
Happytime('sendMessage',[
'chat_id'=>$dev,
'text'=>"
شخصی با آیدی عددی $from_id گفت ب کیرم
دوست داشتی بلاک کن :))))))))
",
]);
}
if($text == 'خسته ام'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
😂😂😂          😂         😂
😂         😂      😂       😂
😂           😂    😂     😂
😂        😂       😂   😂
😂😂😂          😂😂
😂         😂      😂   😂
😂           😂    😂      😂
😂           😂    😂        😂
😂        😂       😂          😂
😂😂😂          😂            😂
",
'reply_to_message_id'=>$message_id,
]);
}
if($text == '✶راهنما✶'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
به بخش راهنمای ربات خوش آمدید
⚊⚊⚊⚊⚊⚊
استفاده از ربات اسان است اما بازهم در اینجا راهنمایی هایی کرده ایم که برایتان مشکلی وجود نداشتع باشد
1- روش های کسب درآمد ربات زیاد است شما از بخش امتیاز تصادفی و امتیاز روزانه میتوانید مبلغی بیش از 1000 تومان را به دست آورید
⚡️————⚡️
2- با هر زیرمجموعه 100 تومان دریافت میکنید :)
⚡️————⚡️
3- کانال پرداختی ها برای اطمینان شما وجود دارد ، هر پرداختی را در آنجا قرار میدهیم
⚡️————⚡️
4- اطلاعات مدیر و سازنده ربات وجود دارد در صورت هر گونه مشکل میتوانید به مدیر مراجعه کنید
⚡️————⚡️
5- استفاده از زیر مجموعه فیک مشکلی ندارد 😍(البته بیش از 10 زیرمجموعه فیک در روز ممکن است باعث صفر شدن موجودی شود)
⚡️————⚡️
6- هر هفته ربات اپدیت هایی ارائه میکند که از بخش اپدیت ربات میتوانید انها را مشاهده کنید
⚡️————⚡️
7- بخش برداشت راه های مختلف برداشت پول را به شما نمایش میدهد (چند راه وجود دارد)
⚡️————⚡️
8- ممکن است پرداخت وجه تا چند ساعت طول بکشد پس صبور باشید
⚡️————⚡️
9- پشتیبانی آنلاین وجود دارد (از ساعت 10:00 تا ساعت 23:00)
⚡️————⚡️
10- برای کمک مالی به ربات میتوانید به پشتیبانی پیام دهید
⚡️————⚡️
11- امکان اسپانسر شدن ربات وجود دارد :)
⚡️————⚡️
12- اگر از بخش مدیر امتیازی برای شما پرداخت شد ، هر امتیاز معادل 100 تومان میباشد
موفق باشید در صورت وجود سوال به پشتیبانی مراجعه کنید ♥️🌹
",
'reply_to_message_id'=>$message_id,
]);
}
if($text == 'بازگشت 🔙'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
درود $first_name
⚊⚊⚊⚊⚊⚊
به صفحه اصلی بازگشتیم .
انتخاب کنید .... ♥️👇
⚊⚊⚊⚊⚊⚊
Creator : @MotherfuckerNM
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'👑برداشت👑']],
[['text'=>'🔱انتقال وجه🔱'],['text'=>'⚜️جمع آوری پول⚜️'],['text'=>'🔱صفر کردن مبلغ🔱']],
[['text'=>'✮درباره ما✮'],['text'=>'✰سرگرمی✰']],
[['text'=>"✯زیر مجموعه گیری✯"],['text'=>'✶راهنما✶'],['text'=>'✰آپدیت✰']],
[['text'=>'✰پشتیبانی✰'],['text'=>'✮حساب من✮']],
[['text'=>'👑سرمایه گذاری👑']],
],
'resize_keyboard'=>true,
])
]);
}
if($text == '⚜️جمع آوری پول⚜️'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
درود $first_name
⚊⚊⚊⚊⚊⚊
به بخش جمع آوری پول خوش امدید ، در اینجا میتوانید با روش های مختلف پول کسب کنید :)
یکی از گزینه ها را انتخاب کنید
⚊⚊⚊⚊⚊⚊
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'✯زیر مجموعه گیری✯']],
[['text'=>'امتیاز تصادفی⏰'],['text'=>'امتیاز روزانه⏰']],
[['text'=>'✮عضویت در کانال✮'],['text'=>'✯فروش شماره مجازی✯']],
[['text'=>'بازگشت 🔙']],
],
'resize_keyboard'=>true,
])
]);
}
if($text == '👑برداشت👑'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
به بخش برداشت و واریز پول خوش آمدید
نحوه واریز را انتخاب کنید 🤑
⚊⚊⚊⚊⚊⚊
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'💳کارت به کارت💳']],
[['text'=>'💸WebMoney💸'],['text'=>'💸PayPal💸']],
[['text'=>'🤑ارز دیجیتال🤑']],
[['text'=>'🏦کارت شارژ🏦']],
[['text'=>'بازگشت 🔙']],
],
'resize_keyboard'=>true,
])
]);
}
if($text1 =="💸WebMoney💸"){
if($coin >= 150){
file_put_contents("data/$from_id/state.txt","mok");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ادرس وب مانی خود را وارد کنید 👇🏻",
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"بازگشت 🔙"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مقدار پول شما برای واریز کافی نمیباشد :(
متاسفم 🙏♥️
برای واریز پول موجودی شما باید بیشتر از 15000 تومان باشد
موجودی شما : $pool
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "mok" && $text !="❕ᗷᗩᑕᏦ❗️" ){
bot('ForwardMessage',[
'chat_id'=>$Dev,
'from_chat_id'=>$from_id,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"منتظر واریز مبلغ باشید ، در کمتر از 24 ساعت مبلغ (به اندازه تمام موجودی شما) برای شما ارسال خواهد شد ✅ ، بعد از واریز مبلغ شما 0 میشود :)",
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"ادمین یه پیام (برای پرداخت وب مانی) با ایدی عددی زیر داری:
<pre>$from_id</pre>
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'پیام به کاربر📭']],
],
'resize_keyboard'=>true,
])
]);
}
elseif($da != "" && $from_id == $Dev){
bot('sendMessage',[
'chat_id'=>$da,
 'text'=>"
 شما یک پیام از پشتیبانی دارید ♥️
💌:$text
",
'parse_mode'=>'MarkDown',
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"ارسال شد ✅",
'parse_mode'=>'MarkDown',
]);
}
if($text1 =="💸PayPal💸"){
if($coin >= 150){
file_put_contents("data/$from_id/state.txt","mok");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ادرس PayPal خود را وارد کنید 👇🏻",
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"بازگشت 🔙"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مقدار پول شما برای واریز کافی نمیباشد :(
متاسفم 🙏♥️
برای واریز پول موجودی شما باید بیشتر از 15000 تومان باشد
موجودی شما : $pool
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "mok" && $text !="❕ᗷᗩᑕᏦ❗️" ){
bot('ForwardMessage',[
'chat_id'=>$Dev,
'from_chat_id'=>$from_id,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"منتظر واریز مبلغ باشید ، در کمتر از 24 ساعت مبلغ (به اندازه تمام موجودی شما) برای شما ارسال خواهد شد ✅ ، بعد از واریز مبلغ شما 0 میشود :)",
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"ادمین یه پیام (برای پرداخت پی پال) با ایدی عددی زیر داری:
<pre>$from_id</pre>
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'پیام به کاربر📭']],
],
'resize_keyboard'=>true,
])
]);
}
elseif($da != "" && $from_id == $Dev){
bot('sendMessage',[
'chat_id'=>$da,
 'text'=>"
 شما یک پیام از پشتیبانی دارید ♥️
💌:$text
",
'parse_mode'=>'MarkDown',
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"ارسال شد ✅",
'parse_mode'=>'MarkDown',
]);
}
if($text == '💳کارت به کارت💳'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
این بخش هنوز کامل نشده ، لطفا منتظر بروزرسانی ربات باشید
Is wirking....
",
]);
}
//ارز دیجیتال کامل ش//
if($text == '🤑ارز دیجیتال🤑'){
if($coin >= 150){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ارز دیجیتال خود را انتخاب کنید (زمان واریز حدود 2 تا 48  ساعت)
⚊⚊⚊⚊⚊⚊
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'بیت کوین']],
[['text'=>'لایت کوین'],['text'=>'دوج کوین']],
[['text'=>'بازگشت 🔙']],
],
'resize_keyboard'=>true,
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مقدار پول شما برای واریز کافی نمیباشد :(
متاسفم 🙏♥️
برای واریز پول موجودی شما باید بیشتر از 15000 تومان باشد
موجودی شما : $pool
",
'parse_mode'=>'HTML',
]);
}
}
//کارت شارژ کامل ش//
if($text == '🏦کارت شارژ🏦'){
if($coin >= 100){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
انتخاب کنید ....🤑
⚊⚊⚊⚊⚊⚊
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'ایرانسل']],
[['text'=>'همراه اول'],['text'=>'رایتل']],
[['text'=>'بازگشت 🔙']],
],
'resize_keyboard'=>true,
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مقدار پول شما برای واریز کافی نمیباشد :(
متاسفم 🙏♥️
برای واریز پول موجودی شما باید بیشتر از 15000 تومان باشد
موجودی شما : $pool
",
'parse_mode'=>'HTML',
]);
}
}
if($text1 == "✯زیر مجموعه گیری✯"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
لینک 📎 اِمتیاز گیری شما 👇🏻
https://t.me/Make_Money_irbot?start=$from_id
",
'parse_mode'=>"HTML",  
]);
}
if($text1 == "🔱انتقال وجه🔱"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
این گزینه فعلا غیرفعال است
Is Working ....
",
'parse_mode'=>"HTML",  
]);
}
if($text1 == "👑سرمایه گذاری👑"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
این گزینه فعلا غیرفعال است
Is Working ....
",
'parse_mode'=>"HTML",  
]);
}
if($text1 == "✮عضویت در کانال✮"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
با عضویت در کانال زیر میتوانید 200 تومان دریافت کنید :)
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عضویت",'url'=>'https://t.me/happy_time_org']],
[['text'=>"دریافت پول",'callback_data'=>'daryaftsekes']],
[['text'=>"بازگشت 🔙"]],
]
])
]);
}
if($data == 'daryaftsekes'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
دوست عزیز باید 1 ساعت در کانال عضو بمانید 👌
بعد از یک ساعت سکه عضویت خودکار به شما افزوده خواهد شد (این کار صرفا جهت جلوگیری از تقلب میباشد)
پیام دریافت مبلغ برای شما ارسال خواهد شد ♥️
",
]);
Happytime('sendMessage',[
'chat_id'=>$admin,
'text'=>"
شخصی با آیدی عددی ($from_id) درخواست سکه برای عضویت کرده است
چک شه و ارسال شه اگه عضوه :))
",
}
if($text == '✰سرگرمی✰'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$first_name
⚊⚊⚊⚊⚊⚊
به بخش سرگرمی خوش آمدید ، یکی از گزینه ها را انتخاب کنید :)
⚊⚊⚊⚊⚊⚊
Time : $time
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'قیمت ارز']],
[['text'=>'قیمت سکه'],['text'=>'قیمت طلا']],
[['text'=>'✮کد شارژ تصادفی✮']],
[['text'=>'بازگشت 🔙']],
],
'resize_keyboard'=>true,
])
]);
}
//==================//
function rand_string( $length ) {
$chars = "0123456789";
return substr(str_shuffle($chars),0,$length);
}
$ali =  rand_string(16);
if($text == '✮کد شارژ تصادفی✮'){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "
این ترفند جالبه که 5 درصد امکان داره شارژ واقعی بده :)
(ایرانسل)
-------
کد  شارژ شما:
$ali",
]);
}
//=========دریافت قیمت ها=========//
if($text == 'قیمت ارز'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
💵 (قیمت ارز های کشور های مختلف (به ریال:

🇪🇺 یورو : `$yoro`
------
🇺🇸 دلار : `$dolar`
------
🇦🇪درهم امارات  : `$emarat`
------
🇸🇪 کرون سوئد : `$swead`
------
🇳🇴 کرون نروژ : `$norway`
------
🇮🇶 دینار عراق : `$iraq`
------
🇨🇭فرانک سوئیس : `$swit`
------
🇦🇲 درام ارمنستان : `$armanestan`
------
🇬🇪لاری گرجستان : `$gorgea`
------
🇵🇰 روپیه پاکستان : `$pakestan`
------
🇷🇺 روبل روسیه : `$russia`
------
🇮🇳 روپیه هندوستان : `$india`
------
🇰🇼 دینار کویت : `$kwait`
------
🇦🇺 دلار استرلیا : `$astulia`
------
🇴🇲 ریال عمان : `$oman`
------
🇶🇦 ریال قطر : `$qatar`
------
🇨🇦 دلار کانادا : `$kanada`
------
🇹🇭بات تایلند : `$tailand`
------
🇹🇷 لیر ترکیه : `$turkye`
------
🇬🇧 پوند انگلیس : `$england`
------
🇭🇰 دلار هنگ کنگ : `$hong`
------
🇦🇿 منات اذربایجان : `$azarbayjan`
------
🇲🇾رینگیت مالزی : `$malezy`
------
🇩🇰 کرون دانمارک : `$danmark`
------
🇳🇿 دلار نیوزلند : `$newzland`
------
🇨🇳 یوان چین : `$china`
------
🇯🇵 ین ژآپن : `$japan`
------
🇧🇭 دینار بحرین : `$bahrin`
------
🇸🇾 لیر سوریه : `$souria`
",
]);
}
//===========دریافت قیمت طلا===========//
if($text == 'قیمت طلا'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🏵قیمت طلا و نقره به دلار :

🥇انس طلا : `$tala`
------
🥈انس نقره : `$nogre`
",
]);
}
//==========قیمت سکه=======//
if($text == 'قیمت سکه'){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🏅قیمت سکه به تومان :

💰سکه گرمی : `$geram`
------
💰ربع سکه : `$rob`
------
💰نیم سکه : `$nim`
------
💰سکه بهار آزادی :  `$bahar`
------
💰سکه امامی : `$emami`
",
]);
}
if($text == '🔱صفر کردن مبلغ🔱'){
if($coin >= 1){
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
(آیا مطمئن هستید که میخواهید مبلغ خود را 0 کنید ؟ (مبلغ حذف شده اضافه و برگشت داده نخواهد شد
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'❌ تایید میکنم ❌'],['text'=>'❌ تایید میکنم ❌']],
[['text'=>'بازگشت 🔙']],
],
'resize_keyboard'=>true,
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مبلغی در حساب شما موجود نیست :|
موجودی شما : $pool
",
'parse_mode'=>'HTML',
]);
}
}
if($text == '❌ تایید میکنم ❌'){
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - $coin;
save("data/$from_id/coin.txt",$newcoin);
Happytime('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
تمام مبلغ کسب شده از حساب شما حذف شد :(
",
]);
}
if($text == "امتیاز تصادفی⏰"){
if($timenow < $lasttime){
sendMessage($chat_id,"▫️شما امتیاز مربوط به امروز خود را دریافت کرده اید !");
}else{
$rand = rand(1,10);
$randl = $rand * 100
file_put_contents("data/$from_id/coin.txt", $emtiaz + $rand);
file_put_contents("data/$from_id/time.txt", $timenow + 86400);
sendMessage($chat_id,"▫️تبریک ، $randl تومان به شما تعلق گرفت !");
}}
if($text == "امتیاز روزانه⏰"){
if($timenow < $lasttime){
sendMessage($chat_id,"▫️شما امتیاز مربوط به امروز خود را دریافت کرده اید !");
}else{
$rand = rand(1,2);
$randa = $rand * 100
file_put_contents("data/$from_id/coin.txt", $emtiaz + $rand);
file_put_contents("data/$from_id/time.txt", $timenow + 86400);
sendMessage($chat_id,"▫️تبریک ، $rands تومان به شما تعلق گرفت !");
}}
//===============پشتیبانی========//
elseif($text1 =="✰پشتیبانی✰" && $text =="پشتیبانی"){
file_put_contents("data/$from_id/state.txt","mok");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا نظر،پیشنهاد و مشکل خود را اِرسال کنید 👇🏻",
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
]
])
]);
}
elseif($state == "mok" && $text !="❕ᗷᗩᑕᏦ❗️" ){
bot('ForwardMessage',[
'chat_id'=>$Dev,
'from_chat_id'=>$from_id,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ارسال شد ✅",
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"ادمین یه پیام با ایدی عددی زیر داری:
<pre>$from_id</pre>
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'پیام به کاربر📭']],
],
'resize_keyboard'=>true,
])
]);
}
elseif($da != "" && $from_id == $Dev){
bot('sendMessage',[
'chat_id'=>$da,
 'text'=>"
 شما یک پیام از پشتیبانی دارید ♥️
💌:$text
",
'parse_mode'=>'MarkDown',
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"ارسال شد ✅",
'parse_mode'=>'MarkDown',
]);
}
elseif($text1 == "🎁 امتیاز همگانی" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","coin to all");
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"😋 مدیر لطفا مقدار امتیاز را وارد کن :",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}

elseif($bot == "coin to all"){
if(preg_match('/^([0-9])/',$text)){
file_put_contents("data/$from_id/wait.txt",$text);
file_put_contents("data/$from_id/step.txt","coin to all 2");
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"⁉️ آیا ارسال $text امتیاز به تمام کاربران ربات را تایید میکنید ؟

بله یا خیر؟",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
	  [['text'=>"خیر"],['text'=>"بله"]],
      ],'resize_keyboard'=>true])
	]);
}else{
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"⚠️ ورودی نامعتبر است !
👈🏻 لطفا فقط عدد ارسال کنید :",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}
}
elseif($bot == "coin to all 2"){
if($text == "خیر"){
unlink("data/$from_id/wait.txt");
file_put_contents("data/$from_id/step.txt",'none');
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"✅ با موفقیت لغو شد !",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
        	'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}
elseif($text == "بله"){
$Member = explode("\n",$list);
$count = count($Member)-2;
file_put_contents("data/$from_id/step.txt",'none');
for($z = 0;$z <= $count;$z++){
$user = $Member[$z];
if($user != "\n" && $user != " "){
	$id = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$user));
	$user2 = $id->result->id;
if($user2 != null){
$coin = file_get_contents("data/$user/coin.txt");
file_put_contents("data/$user/coin.txt",$coin + $wait);
        bot('sendmessage', [
                'chat_id' =>$user,
                'text' =>"
🍀 تبریک!!
👨‍💻 به شما از طرف مدیریت مقدار $wait امتیاز تعلق‌ گرفت . . . 

#همگانی
",
               'parse_mode'=>'html'
	]);
}
}
}
unlink("data/$from_id/wait.txt");
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"✅ با موفقیت به تمام اعضا مقدار $wait امتیاز ارسال شد !",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
        	'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}else{
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"💢 لطفا فقط از کیبورد زیر انتخاب کنید :",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
	  [['text'=>"خیر"],['text'=>"بله"]],
      ],'resize_keyboard'=>true])
	]);
}
}
elseif($text1 == "/panel"){
if($from_id == $admin){
bot('sendmessage', [
'chat_id' =>$chat_id,
'text' =>"مدیر عزیز به پنل مدیریت خوش آمدید 🌹",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار 🎭"],['text'=>"پیام همگانی 🧧"]],
[['text'=>"آنبلاک کردن ✅"],['text'=>"بلاک کردن❌"]],
[['text'=>"امتیاز به کاربر ⭐️"],['text'=>"🎁 امتیاز همگانی"]],
[['text'=>"ربات ها 📮"],['text'=>"حذف ربات 🗑"]],
[['text'=>"پیام به کاربر📭"],['text'=>"اطلاعات کاربر 👤"]],
[['text'=>"روشن کردن ربات🔔"],['text'=>"خاموش کردن ربات🔕"]],
[['text'=>"🔫 صفر کردن امتیاز کاربر"]],
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true
])
]);
}else{
SendMessage($chat_id,"کص ننت داش
این دستور فقط واسه ادمینه
@My_gaper_online_bot
@My_gaper_online_bot
@My_gaper_online_bot","HTML");
}
}
elseif($text1 == "ربات ها 📮" && $chat_id == $admin){
file_put_contents("data/$from_id/step.txt","none");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$Bots کل ربات های ساخته شده:
",
]);
}
elseif($text1 == "حذف ربات 🗑" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","delezi");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📀 ایدی ربات مورد نظر رو بدون @ ارسال کنید....
",
]);
}
elseif($step =="delezi" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/step.txt","none");
deletefolder("bot00/$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات حذف شد ✅",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"پیام به کاربر📭"]],
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($text1 == "آنبلاک کردن ✅" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","sharr");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی عددی کاربر مورد نظر رو ارسال کنید",
]);
}
elseif($step == "sharr" && $text !="❕ᗷᗩᑕᏦ❗️" ){
$newlist = str_replace($text, "", $blocklist);
file_put_contents("data/blocklist.txt", $newlist);
file_put_contents("data/$chat_id/step.txt", "No");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
خب ایدی $text از بلاکی درآمد 😎
",
]);
}
elseif($text1 == "بلاک کردن❌" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","shar");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی فرد مورد نظر را ارسال کنید",
]);
}
elseif($step == "shar" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/shar.txt","$text");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
ایدی $text از ربات بلاک شد
",
]);
$adduser = file_get_contents("data/blocklist.txt");
$adduser .= $text . "\n";
file_put_contents("data/blocklist.txt", $adduser);
file_put_contents("data/$from_id/step.txt","no");
$id11 = file_get_contents("data/$from_id/shar.txt");
bot('Sendmessage',[
'chat_id'=>$id11,
'text'=>"ارتباط شما با سرور ما قطع شد و نمیتوانید از بات استفاده کنید 😹",
]);
}

elseif($text1 == "پیام به کاربر📭" && $chat_id == $Dev){
file_put_contents("data/$from_id/state.txt","info");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا شناسه کاربر را وارد کنید??",
]);
}
elseif($state == "info" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/state.txt","sendpm");
file_put_contents("data/$from_id/info.txt","$text");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را وارد کنید✏",
'parse_mode'=>"HTML",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($state== "sendpm"){
file_put_contents("data/$from_id/state.txt","none");
file_put_contents("data/$from_id/sendpm.txt","$text");
$sendpm = file_get_contents("data/$from_id/sendpm.txt");
$info = file_get_contents("data/$from_id/info.txt");
bot('Sendmessage',[
'chat_id'=>$info,
'text'=>"
سرورم شما یک پیام از پشتیبانی دارید ♥️
💌:$sendpm
",
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما به کاربر مورد نظر ارسال شد📮",
'parse_mode'=>'HTML',
]);
}
elseif($text1 == "آمار 🎭" && $chat_id == $admin){
$user = file_get_contents("users.txt");
$member_id = explode("\n",$user);
$member_count = count($member_id) -1;
sendmessage($chat_id , "
🎲آمار:
 $member_count
" , "html");
}
elseif($text1 == "پیام همگانی 🧧" && $chat_id == $admin){
file_put_contents("data/$from_id/step.txt","pm");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📬پیام خود را ارسال کنید !!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'/panel']],
],
'resize_keyboard'=>true
])
]);
}
elseif($step == "pm" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما فرستاده شد 💫",
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
SendMessage($user,$text1,"html");
}
}
elseif($text1 == "امتیاز به کاربر ⭐️" && $from_id == $admin){
file_put_contents("data/$from_id/step.txt","fromidforcoin");
bot('sendmessage',[
'chat_id' => $admin,
'text' =>"🍇ایدی عددی کاربر را وارد کنید:",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($step == "fromidforcoin" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/step.txt","tedadecoin4set");
$text20 = $message->text;
file_put_contents("data/$from_id/token.txt",$text20);
$coin1 = file_get_contents("data/$text20/coin.txt");
bot('sendmessage', [
'chat_id' => $admin,
'text' =>"
این فرد $coin1 امتیاز دارد
چه مقدار امتیاز  اضافه کنم؟
",
]);
}
elseif($step == "tedadecoin4set"){
file_put_contents("data/$from_id/step.txt","none");
$text20 = $message->text;
$coin = file_get_contents("data/$to/coin.txt");
settype($coin,"integer");
$newcoin = $coin + $text20;
save("data/$to/coin.txt",$newcoin);
$cooin = $coin + $text20;
bot('sendmessage', [
'chat_id' => $admin,
'text' =>"به فرد $text20 امتیاز اضافه شد و امتیاز های او الان $cooin میباشد!",
]);
bot('sendmessage',[
'chat_id' => $to,
'text' =>"مقدار $text20 امتیاز به شما افزوده شد 🍒",
]);
}
//===
elseif($text1 == "پنل مدیریت"){
if($from_id == $admin1){
bot('sendmessage', [
'chat_id' =>$chat_id,
'text' =>"مدیر عزیز به پنل مدیریت خوش آمدید 🌹",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار 🎭"],['text'=>"پیام همگانی 🧧"]],
[['text'=>"آنبلاک کردن ✅"],['text'=>"بلاک کردن❌"]],
[['text'=>"امتیاز به کاربر ⭐️"],['text'=>"🎁 امتیاز همگانی"]],
[['text'=>"ربات ها 📮"],['text'=>"حذف ربات 🗑"]],
[['text'=>"پیام به کاربر📭"],['text'=>"اطلاعات کاربر 👤"]],
[['text'=>"روشن کردن ربات🔔"],['text'=>"خاموش کردن ربات🔕"]],
[['text'=>"🔫 صفر کردن امتیاز کاربر"]],
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true
])
]);
}else{
SendMessage($chat_id,"شما admin نیستی /:","HTML");
}
}
elseif($text1 == "ربات ها 📮" && $chat_id == $admin1){
file_put_contents("data/$from_id/step.txt","none");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$Bots کل ربات های ساخته شده:
",
]);
}
elseif($text1 == "حذف ربات 🗑" && $chat_id == $admin1){
file_put_contents("data/$from_id/man.txt","delezi");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📀 ایدی ربات مورد نظر رو بدون @ ارسال کنید....
",
]);
}
elseif($man =="delezi" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/man.txt","none");
deletefolder("bot00/$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات حذف شد ✅",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"پیام به کاربر📭"]],
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($text1 == "آنبلاک کردن ✅" && $chat_id == $admin1){
file_put_contents("data/$from_id/step.txt","none");
file_put_contents("data/$from_id/hadi.txt","sharr");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی عددی کاربر مورد نظر رو ارسال کنید",
]);
}
elseif($hadi == "sharr" && $text !="❕ᗷᗩᑕᏦ❗️" ){
$newlist = str_replace($text, "", $blocklist);
file_put_contents("data/blocklist.txt", $newlist);
file_put_contents("data/$chat_id/hadi.txt", "No");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
خب ایدی $text از بلاکی درآمد 😎
",
]);
}
elseif($text1 == "بلاک کردن❌" && $chat_id == $admin1){
file_put_contents("data/$from_id/hadi.txt","shar");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی فرد مورد نظر را ارسال کنید",
]);
}
elseif($hadi == "shar" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/shar.txt","$text");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
ایدی $text از ربات بلاک شد
",
]);
$adduser = file_get_contents("data/blocklist.txt");
$adduser .= $text . "\n";
file_put_contents("data/blocklist.txt", $adduser);
file_put_contents("data/$from_id/hadi.txt","no");
$id11 = file_get_contents("data/$from_id/shar.txt");
bot('Sendmessage',[
'chat_id'=>$id11,
'text'=>"ارتباط شما با سرور ما قطع شد و نمیتوانید از بات استفاده کنید 😹",
]);
}
elseif($text1 == "پیام به کاربر📭" && $chat_id == $Dev){
file_put_contents("data/$from_id/hadi.txt","info");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا شناسه کاربر را وارد کنید💉",
]);
}
elseif($hadi == "info" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/hadi.txt","sendpm");
file_put_contents("data/$from_id/info.txt","$text");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را وارد کنید✏",
'parse_mode'=>"HTML",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"ربات شما فعال شد ✅"]],
[['text'=>"ربات شما رد شد❌"]],
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($hadi == "sendpm"){
file_put_contents("data/$from_id/hadi.txt","none");
file_put_contents("data/$from_id/sendpm.txt","$text");
$sendpm = file_get_contents("data/$from_id/sendpm.txt");
$info = file_get_contents("data/$from_id/info.txt");
bot('Sendmessage',[
'chat_id'=>$info,
'text'=>"
سرورم شما یک پیام از پشتیبانی دارید ♥️
💌:$sendpm
",
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما به کاربر مورد نظر ارسال شد📮",
'parse_mode'=>'HTML',
]);
}

elseif($text1 == "آمار 🎭" && $chat_id == $admin1){
$user = file_get_contents("users.txt");
$member_id = explode("\n",$user);
$member_count = count($member_id) -1;
sendmessage($chat_id , "
🎲آمار:
 $member_count
" , "html");
}
elseif($text1 == "پیام همگانی 🧧" && $chat_id == $admin1){
file_put_contents("data/$from_id/step.txt","pm");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📬پیام خود را ارسال کنید !!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'/panel']],
],
'resize_keyboard'=>true
])
]);
}
elseif($step == "pm" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما فرستاده شد 💫",
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
SendMessage($user,$text1,"html");
}
}
elseif($text1 == "امتیاز به کاربر ⭐️" && $from_id == $admin1){
file_put_contents("data/$from_id/step.txt","fromidforcoin");
bot('sendmessage',[
'chat_id' => $admin1,
'text' =>"🍇ایدی عددی کاربر را وارد کنید:",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"❕ᗷᗩᑕᏦ❗️"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($step == "fromidforcoin" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/step.txt","tedadecoin4set");
$text20 = $message->text;
file_put_contents("data/$from_id/token.txt",$text20);
$coin1 = file_get_contents("data/$text20/coin.txt");
bot('sendmessage', [
'chat_id' => $admin1,
'text' =>"
این فرد $coin1 امتیاز دارد
چه مقدار امتیاز  اضافه کنم؟
",
]);
}
/*
ساخته شده توسط Happy Time
*/

elseif($step == "tedadecoin4set"){
file_put_contents("data/$from_id/step.txt","none");
$text20 = $message->text;
$coin = file_get_contents("data/$to/coin.txt");
settype($coin,"integer");
$newcoin = $coin + $text20;
save("data/$to/coin.txt",$newcoin);
$cooin = $coin + $text20;
bot('sendmessage', [
'chat_id' => $admin1,
'text' =>"به فرد $text20 امتیاز اضافه شد و امتیاز های او الان $cooin میباشد!",
]);
bot('sendmessage',[
'chat_id' => $to,
'text' =>"مقدار $text20 امتیاز به شما افزوده شد 🍒",
]);
}
elseif($text1 == "اطلاعات کاربر 👤" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","informatin");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ایدی عددی شخص را ارسال کنید.",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'/panel']],
],
'resize_keyboard'=>true
])
]);
}
elseif($step == "informatin" && $text !="❕ᗷᗩᑕᏦ❗️" ){
file_put_contents("data/$from_id/step.txt","$text");
$zirs = file_get_contents('data/'.$text."/membrs.txt");
$hesab = file_get_contents('data/'.$text."/type.txt");
$coin = file_get_contents('data/'.$text."/coin.txt");
$phone = file_get_contents('data/'.$text."/bots.txt");
$txtt = file_get_contents("data/$text/mems.txt");
$member_id = explode("\n",$txtt);
$mm1 = count($member_id)-1;
unset($member_id[$mm1]);
foreach($member_id as $id => $value){
$new .= "[$value](tg://user?id=$value)\n";
}
SendMessage($chat_id,"
نوع حساب کاربر: $hesab 
پیوی کاربر: [$text](tg://user?id=$text) 
موجودی کاربر : $coin
موجودی پولی : $pool
زیرمجوعه های شخص :$zirs
ربات های شخص : $phone
 ","MarkDown","true");
}
elseif($text1 == "روشن کردن ربات🔔"&& $from_id == $Dev){
file_put_contents("data/onof.txt","on");
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات هم اکنون در دسترس قرار گرفت ✅",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"/panel"],
],
]
])
]);
}
elseif($text1 == "خاموش کردن ربات🔕"&& $from_id == $Dev){
file_put_contents("data/onof.txt","off");
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات با موفقیت از دسترس کاربران خارج شد🚫",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"/panel"],
],
]
])
]);
}
elseif($text1 == "🔫 صفر کردن امتیاز کاربر" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","em0");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👩‍💻 لطفا آیدی عددی کاربری که میخواهید تعداد امتیازات او را 0 را ارسال کنید :",
]);
}
elseif($step == "em0" && $text !="❕ᗷᗩᑕᏦ❗️" ){
$aaddd = file_get_contents("data/$text/coin.txt");
file_put_contents("data/$text/coin.txt","0");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🔪 امتیاز های او صفر شد
",
]);
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"🔥امتیازات شما به دلیل آوردن زیرمجموعه فیک حذف شدند!",
]);
file_put_contents("data/$from_id/step.txt","none");
}
if (is_file("error_log")){
unlink("error_log");
}
?>