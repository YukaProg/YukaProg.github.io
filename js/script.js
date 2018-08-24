// JavaScript Document

$(function(){
	//smooth scrollの設定
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href === "#" || href === "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
  	//inViewの設定
  $('section').on('inview', function(event, isInView) {
	if (isInView) {
		$(this).css("opacity","1");

	}else {
		$(this).css("opacity","0");

	}
	});

});

//スクロール値による動作の設定

var startPos = 0;	//基準位置（最初はスクロールしてない状態なので0）
$(window).scroll(function(){	//画面をスクロールさせたら以下の処理を実行
var currentPos = $(window).scrollTop();	//現在地の座標を取得 ＝ scrollTop();は画面の一番上からのスクロール値
//$("#position").text(currentPos);	//現在地の座標を#positionの中身のテキストとして表示する

if(currentPos > 50){
$("#btnTop").css("bottom", "50px");//上に戻るボタンを画面内に配置
}else{
$("#btnTop").css("bottom", "-100px");//上に戻るボタンを画面外に配置
}



if (currentPos > startPos) {	//もし現在地が基準位置より大きかったら（下スクロールされていたら）
if( currentPos >= 80) {	//もしスクロールさせた量が80px以上であったら
$("nav").css("top", "-50px");	//nav の cssに以下を設定（topを-80px）
}
}else{	//もし現在地が基準位置より大きくないなら（マイナス方向にスクロールさせた＝上にスクロールさせた）
$("nav").css("top", "0px");	//nav の cssに以下を設定（topを0px）
}



startPos = currentPos;	//基準位置を現在地に再設定する
});


