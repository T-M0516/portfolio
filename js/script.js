//loding テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Circle('#loading-circle', {
	easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
	duration: 1500,//時間指定(1000＝1秒)
	strokeWidth: 5,//進捗ゲージの太さ
	color: '#fff',//進捗ゲージのカラー
	trailWidth: 5,//ゲージベースの線の太さ
	trailColor: '#bbb',//ゲージベースの線のカラー
	// step: function(state, bar) {
	// 	bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
	// }
});


//アニメーションスタート
// bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
// 	jQuery(function(){
// 	$("#loading").delay(500).fadeOut(800);//アニメーションが終わったら#loadingエリアをフェードアウト
// });
// });

//アニメーションスタート
bar.animate(1.0, function() {
	setTimeout(function() {
	  var loadingElement = document.getElementById("loading");
	  loadingElement.style.transition = "opacity 800ms";
	  loadingElement.style.opacity = 0;
	  loadingElement.style.display = "none";
	}, 500);
  });

// jQuery(function(){
// // ハンバーガーメニュー
//   $(".nav-btn").click(function () {//ボタンがクリックされたら
// 	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
//     $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
//     $(".g-nav-bgc").toggleClass('backGround');
// });

// $("#g-nav").click(function () {//ナビゲーションのリンクがクリックされたら
//     $(".nav-btn").removeClass('active');//ボタンの activeクラスを除去し
//     $("#g-nav").removeClass('panelactive');
//     $(".g-nav-bgc").removeClass('backGround');//ナビゲーションのpanelactiveクラスも除去
// });
// });


// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", function() {
    var navBtn = document.querySelector(".nav-btn");
    var gNav = document.getElementById("g-nav");
    var gNavLinks = gNav.getElementsByTagName("a");
    var gNavBgc = document.querySelector(".g-nav-bgc");
  
    navBtn.addEventListener("click", function() {
        this.classList.toggle("active");
        gNav.classList.toggle("panelactive");
        gNavBgc.classList.toggle("backGround");
    });
  
    gNav.addEventListener("click", function() {
        navBtn.classList.remove("active");
        gNav.classList.remove("panelactive");
        gNavBgc.classList.remove("backGround");
    });
  
    for (var i = 0; i < gNavLinks.length; i++) {
        gNavLinks[i].addEventListener("click", function() {
            navBtn.classList.remove("active");
            gNav.classList.remove("panelactive");
            gNavBgc.classList.remove("backGround");
        });
    }

    // メディアクエリがmax-width: 768pxの場合の処理
    // if (window.matchMedia("(max-width: 768px)").matches) {
    //     gNav.classList.add("panelactive");
    //     gNav.style.right = "0%";
    // }
});


  
//コピーライト年数自動更新
document.addEventListener("DOMContentLoaded", function() {
  // 現在の年を取得
  const currentYear = new Date().getFullYear();
  // idでHTMLのタグを取得
  const copyrightElement = document.getElementById("copyright-year");

  if (copyrightElement) {
    // 指定したidの場所に現在の年を書き込み
    copyrightElement.textContent = currentYear;
  }
});