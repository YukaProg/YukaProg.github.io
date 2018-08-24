<?php
session_start();


if($_REQUEST["soushin"]!=""){

$M ="";

//氏名が入力・送信されているかどうか
if($_REQUEST["name"]==""){//氏名の情報が空っぽであるならば
$M .= "<p>氏名をご記入ください。</p><p>Please fill in your name.</p>"."\n";//.=で既存の情報に「追加」
}

$_SESSION["name"]= mb_convert_kana($_REQUEST["name"], "KVa");  

//if($_REQUEST["email"]!=""){
//  if($_REQUEST["email"]!=$_REQUEST["email2"]){
//    $M .= "<p>確認メールアドレスが一致しません</p>";
//  }
//}

if($_REQUEST["email"] ==""){
	$M .= "<p>メールアドレスをご記入ください。</p><p>Please fill in your email address.</p>";

}

$_SESSION["email"] = mb_convert_kana($_REQUEST["email"], "KVa");
$_SESSION["message"] = mb_convert_kana($_REQUEST["message"], "KVa");




//if($M==""){//$Mの中身が空のままなら→エラーが無いということなので、次のページへ
//header("location: check.php");//header();移動しなさい　location:アドレス
//exit();//この行のあとの処理は行わなくて良いですよ
//}
//
//if($M!=""){
//header("location: index.php#contact");
//exit();
//}

}



?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Yuka Masuko - Personal Portfolio 増子由香　ポートフォリオ</title>
<link href="css/min-768px.css" rel="stylesheet" type="text/css">
<link href="css/format.css" rel="stylesheet" type="text/css">
<link href="css/common.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="(max-width: 768px)" href="./css/max-768px.css" type="text/css">
<link rel="stylesheet" media="(min-width: 768px)" href="./css/min-768px.css" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.inview.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>

<body id="topMenu">
<!--btnTop-->
<a href="#topMenu"><aside id="btnTop"></aside></a>
<!--Top Menu-->
<nav>
<ul>
	<li><a href="#works">WORKS</a></li>
	<li><a href="#about">ABOUT</a></li>
	<li><a href="#contact">CONTACT</a></li>
</ul>
</nav>

<!--top-->
<div class="squareWrapper">
<div id="top" class="top">
<div id="flakeSpace"></div>
<div class="circleTop">
<div class="centerFlake"></div>

<div class="centerFlake2"></div>
<p>Hi, my name is</p>
<div class="nameWrapper">
<h1 class="scriptFont">Yuka M.</h1>
<h2>増子由香</h2>
<h3>WEB DESIGNER</h3>
</div>
</div>


</div>
</div>
<script type="text/javascript" src="js/flake-floating.js"></script>

<!--works-->

<section id="works">
<div class="bkgCircle">

<div class="sectionTitle">
<h1>My Works</h1>
</div>

<div id="pjWrapper">

<button id="pj-1" class="project" >

<div class="pj-frame">
<div class="pj-frame2">
<div class="pj-image">
<a href="pj1.html" target="_blank">
<img class="pj-shot" src="./images/works/teapond-s.jpg" alt="tea-renewal-site">
<img class="pj-logo" src="./images/projects/teapond/tp-logo.png" width="130" height="auto" alt="">
</a>
</div>
</div>
</div>

</button>


<button id="pj-2" class="project">

<div class="pj-frame">
<div class="pj-frame2">
<div class="pj-image">
<a href="pj2.html" target="_blank">
<img class="pj-shot" src="./images/works/silkscreen-s.jpg" alt="">
<img class="pj-logo" src="./images/projects/silkscreen/logo.png" width="200" height="auto" alt="">
</a>
</div>
</div>
</div>
</button>

<button id="pj-3" class="project">

<div class="pj-frame">
<div class="pj-frame2">
<div class="pj-image">
<a href="../tourism.html" target="_blank">
<img class="pj-shot" src="./images/works/tourism-s.jpg" alt="">
</a>
</div>
</div>
</div>
</button>

<button id="pj-4" class="project">

<div class="pj-frame">
<div class="pj-frame2">
<div class="pj-image">
<a href="../space.html" target="_blank">
<img class="pj-shot" src="./images/works/space-s.jpg" alt="">
</a>
</div>
</div>
</div>
</button>

</div>

</div>
</section>


<section id="about">
<div class="bkgCircle">

<div class="sectionTitle">
<h1>About Me</h1>
</div>
<div class="content">

<div id="cv">
<h5>Education</h5>
<p>2018年 9月末 東京デザインプレックス 修了<br>
<p class="english">2018 Sept. Tokyo Design Plex Web Creative Course<br>
<h5>Skills</h5>
<p>html5, css3, jQuery, JavaScript, PHP, Ai, Ps, Dw</p>
<h5>Languages</h5>
<p>Japanese &amp; English</p>
<h5>Interests</h5>
<p>美術鑑賞、映画鑑賞、読書、ハーブティー、散歩</p>
<p class="english">Arts, movies, reading, herbal tea, and walking</p>

</div>

<table>
<tbody>

<tr>
<th scope="row"><p>Education</p></th>
<td>
<p>2018年 9月末 東京デザインプレックス Web Creative 専攻 修了予定</p>
<p>2018年 5月 CodeCademy Javascript Intensive Course 修了</p>

<p class="english">2018 Sept. Tokyo Design Plex Web Creative Course</p>
<p class="english">2018 May  CodeCademy Javascript Intensive Course</p>

</td>
</tr>

<tr>
<th scope="row"><p>Skills</p></th>
<td>
<p>html5, css3, jQuery, JavaScript, PHP,</p>
<p>Ai, Ps, Dw</p>
</td>
</tr>

<tr>
<th scope="row"><p>Languages</p></th>
<td><p>Japanese &amp; English</p></td>
</tr>

<tr>
<th scope="row"><p>Interests</p></th>
<td>
<p>美術鑑賞、映画鑑賞、読書、ハーブティー、散歩</p>

<p class="english">Arts, movies, reading, herbal tea, and walking</p>

</td>
</tr>

</tbody>
</table>

</div>

</div>
</section>


<section id="profile">

<div class="btnWrapper">
<div id="openProfile" class="btn-profile">
<div class="btnTitle">
<h1 class="color-white">OPEN PROFILE</h1>
</div>
</div>
</div>



<div id="modalProfile">
<div class="profileInnerModal">
<div id="closeProfile" class="btnClose"><p>+</p></div>
<div class="sectionTitle">
<h1>Profile</h1>
</div>

<div class="content">
<p>これまで、貿易会社、ギャラリーやクラフト業界に従事。仕事でweb編集に関わったことを契機に、webデザインの専門学校に通い技術・知識を習得。2018年よりWebデザイナーとして再出発。日々、新しい知識と技術の習得に励む。</p>
<p>見せる側にも使う側にも喜んでもらえるような心地よいWebデザインを制作できるよう心がけています。</p>
</div>

</div>
</div>

<div id="profileLong" class="bkgCircle">
<div class="sectionTitle">
<h1>Profile</h1>
</div>

<div class="content">
<p>日本で生まれ、両親の仕事の都合で11歳〜18歳までの多感な時期をオランダで過ごしました。</p>

<p>バスケットボールが大好きなスポーツ少女でしたが、絵画や芸術作品にも心惹かれ、ヴァンゴッホは今でもお気に入りの画家です。</p>

<p>これまで、貿易会社、ギャラリーやクラフト業界でのお仕事を経験して参りました。それぞれの職場で、コーポレートサイトやECサイトの保守管理を行う機会がありましたが、残念ながら素人では思い通りに編集できず、悔しい想いをしました。より良いサイトを作れるようになりたいと思うと同時に、これからのIT社会におけるWebの可能性に心惹かれ、専門学校に通いWebデザインを学びました。</p>

<p>学校で習得した技術やこれまでの知識・経験を生かして、見せる側にも使う側にも喜んでもらえるような心地よいWebデザインを皆様にお届けできれば幸いです。良いWebサイトを作りたいと思っている方々のお力に少しでもなれるよう精進して参ります。</p>

<p>また、日々アンテナを貼りながら知識を増やし、皆様とのお仕事を通じて、これからのWebの可能性を広げていければ嬉しいです。</p>

</div>
</div>

</section>

<!-- #contact -->

<section id="contact">
<div class="bkgCircle">
<div class="sectionTitle">
<h1>Contact</h1>
</div>
<div class="sectionHeading">
<p>下記のお問い合わせフォームより、お気軽にご連絡ください。</p>
<p class="english2">You can get in touch with me with the contact form below.</p>
</div>


<button id="openContactModal">
<p>OPEN<br>
CONTACT FORM</p>
</button>

<div class="btnWrapper">
<div id="openContactModal2">
<div class="btnTitle">
<h1 class="color-white">OPEN <br>CONTACT FORM</h1>
</div>
</div>
</div>

<script type="text/javascript" src="js/image-spread.js"></script>
<script type="text/javascript">
$(function(){
// include jQuery
// Open Contact Form
$('#openContactModal').click(function(){

  $('#modalWrapper').fadeIn('slow');
	$('#modalWrapper').css('display','flex');
	$('#btnTop').fadeOut();

	spreadImage("clover-light", "mitsuba", "modalWrapper");

} );
$('#openContactModal2').click(function(){

  $('#modalWrapper').fadeIn('slow');
	$('#modalWrapper').css('display','flex');
	$('#btnTop').fadeOut();

} );

// Close Contact Form
$("#closeModal").click(function(){
	$('#modalWrapper').fadeOut('slow');
	$('#btnTop').fadeIn();
});

//Open Profile
$('#openProfile').click(function(){

  $('#modalProfile').fadeIn('slow');
	$('#btnTop').fadeOut();
	
} );

$("#closeProfile").click(function(){
	$('#modalProfile').fadeOut('slow');
	$('#btnTop').fadeIn();
});


});
</script>

<div id="modalWrapper">
<!--<div id="modalWindow">-->

<div id="modalInnerWrapper">
<div id="innerWrapper1" class="innerWrapper">
<div id="closeModal" class="btnClose"><p>+</p></div>
<form id="contactForm" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" class="h-adr"> 

<div id="error-message">
</div>

<h1 class="scriptFont">Dear Yuka,</h1>
<textarea id="contactMessage" name="message" placeholder="ご用件をご記入ください。please write your message here..." cols="30" rows="10">
<?php echo($_SESSION["message"]);?>
</textarea>
<h2 class="scriptFont">From :</h2>
<input id="contactName" type="name" name="name" value="<?php echo($_SESSION["name"]);?>" placeholder="お名前" autocomplete="name">
<h2 class="scriptFont">My email address is...</h2>
<input id="contactEmail" type="email" name="email" value="<?php echo($_SESSION["email"]);?>"  autocomplete="email" placeholder="xxx@yyy.com">



</form>
<div id="btnNext" class="btn-goNext"></div>
</div> <!--innerWrapper終わり-->

<div id="innerWrapper2" class="innerWrapper">
<div id="sentMessageWrapper">
<div class="sectionHeading">
<p>下記の内容でよろしければ送信ボタンを押してください。</p>
<p class="english2">Please check and press send button to send.</p>
</div>
<div id="sentMessage">
<h1 class="scriptFont">Dear Yuka,</h1>
<div id="yourMessage">
</div>

<h2 class="scriptFont">From :</h2>
<div id="yourName"></div>

<h2 class="scriptFont">My email address is...</h2>
<div id="yourEmail"></div>

</div>

<div id="btnBack" class="btn-goback"></div>
<button id="sendMessage" class="btn-send" type="submit" name="soushin" value="send"></button>
</div>
</div> <!--innerWrapper終わり-->


<script type="text/javascript">

$(function(){

var contactMessage = $('#contactMessage');
var contactName =  $('#contactName');
var contactEmail = $("#contactEmail");
var yourMessage = $("#yourMessage");
var yourName = $("#yourName");
var yourEmail = $("#yourEmail");

//btn-goNextを押したら
$("#btnNext").click(function(){

//errorMessageを初期化
var errorMessage = "";
$('#error-message').empty();
//errorMessageを生成
errorMessage = generateErrorMessage();
//errorMessageが空なら...

//スライドさせる幅を設定
var slideWidth = "-552px";
if($("body").width()<=768){
slideWidth = $("#innerWrapper1").css("width");
console.log(slideWidth);
}

if(errorMessage == "" || errorMessage == null){
console.log("エラーなし");
//x軸をスライドさせ確認画面へ

$('#error-message').css('display', 'none');
$(".innerWrapper").css('transform', 'translateX(-'+slideWidth+')');

//内容を表示するためのプログラム

//値の付与
yourMessage.html("<p>"+contactMessage.val()+"</p>");
yourName.html("<p>"+contactName.val()+"</p>");
yourEmail.html("<p>"+contactEmail.val()+"</p>");

//errorMessageがあれば...
}else{
//error messageの表示
$('#error-message').append("<p>"+errorMessage+"</p>");
$('#error-message').css('display', 'block');
return;
}

});




function generateErrorMessage(){
var errorMes = "";

if(contactMessage.val() == "" || contactMessage.val() ==null){
errorMes += "メッセージをご記入ください。<br>Please fill in your message.<br>";
}
if(contactName.val() == "" || contactName.val() ==null){
errorMes+= "お名前をご記入ください。<br>Please fill in your name.<br>";
}
if(contactEmail.val() == "" || contactEmail.val() ==null){
errorMes += "メールアドレスをご記入ください。<br>Please fill in your email address.<br>";
}
return errorMes;
}


//btn-goBackを押したら入力画面へ
$("#btnBack").click(function(){
$(".innerWrapper").css('transform', 'translateX(0px)');
});

//送信ボタンを押したらAjaxでフォームを送信
$("#sendMessage").click(function(){
submitForm();
return false;
});


function submitForm(){
	 $.ajax({
		type: "POST",
		url: "sendContactForm.php",
		cache:false,
		data: $('#contactForm').serialize(),
		success: function(response){
			//全ての入力をクリア
			resetContactForm();
			
			$('#modalWrapper').fadeOut('slow');
			$('#checkWrapper').fadeIn('slow');
			$(".innerWrapper").css('transform', 'translateX(0px)');
			
			console.log(response);
		},
		error: function(){
			alert("Error");
		}
	});


//全ての入力をクリアするためのfunction
function resetContactForm(){
console.log("resetContactFormを実行中");
yourMessage.empty();
yourName.empty();
yourEmail.empty();
contactMessage.val("");
contactName.val("");
contactEmail.val("");
}


}

});

</script>


</div><!--modalInnerWrapperの終わり-->
<!--</div><!--modalWindowの終わり-->-->
</div><!--modalWrapperの終わり-->


</div> <!--bkgCircleの終わり-->
</section>

</body>
</html>
