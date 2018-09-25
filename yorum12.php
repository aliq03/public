<?php
header("Access-Control-Allow-Origin: *"); 
?>
<style>
body {
    background-color: #FAFAFA;
}
#templatemo_wrapper {
    width: 100%;
    margin: auto;
    position: relative;
    margin-top: 31px;
    background: white;
    left: 0;
}
#templatemo_main {
    clear: both;
    position: relative;
    padding: 48px 1px;
    background: #ffffff;
    left: 50%;
    margin-left: -483px;
    margin-top: 30px;
}
table[align="center"][width="100%"] {
    position: absolute;
    left: 0;
    margin-top: 527px;
}
/**/
table[align="center"] table[width="100%"] td:first-child {
    color: red;
    font-size: 0px;
    padding-left: 6px;
    float: left;
height:30px;
}

table[width="100%"] b a[target="_blank"] {
    margin-top: -46px;
    position: absolute;
    margin-left: 64px;
    color: #597cad;
    font-size: 14px;
    text-decoration: none;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-weight: 600;
    font-style: normal;
    line-height: inherit;
    text-transform: initial;
}
	
table[align="center"][width="100%"] tr td a[name="comment"] + b {
    margin: -25px 130px;
    position: absolute;
    font-weight: 500;
}
table[width="100%"] b a[target="_blank"] img {
    width: 40px;
    height: 40px;
    margin-left: -54px;
    border-radius: 50%;
    margin-top: 30px;
}
table[align="center"] table[width="100%"] td:nth-child(2) {
    padding-left: 0px;
    padding-right: 5px;
    margin-left: 13px;
    margin-top: -10px;
    float: left;
    padding-top: 17px;
    padding-bottom: 5px;
    color: #2b2b2b;
    width: 577px;
    word-wrap: break-word;
    font-size: 18px;
    line-height: 1.58;
    letter-spacing: -.004em;
    font-family: medium-content-serif-font,Georgia,Cambria,"Times New Roman",Times,serif;
}

/*normal kullanıcı*/
table.yorum-alani {
       background: #f5f5f5;
    margin-top: -5px;
    padding-top: 0;
    margin-left: -1px;
    padding-bottom: 3px;
    border: 1px solid #d9d8da;
    border-top: 0px;
    box-shadow: 0px 2px 1px 0px rgba(0,0,0,0.2);
    display: block;

}
table[width="100%"] tbody tr td[width="100%"] i {font-size:0}
table[width="100%"] tbody tr td[width="100%"] i b {
    color: #3B5998;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-size: 14px;
    position: absolute;
    margin-left: -7px;
    margin-top: -40px;
    font-style: normal;
    font-weight: 600;
    border: 0;
    letter-spacing: initial;
}
table[width="100%"] tbody tr td[width="100%"] i b {
    size: 14px;
    margin-top: -40px;
    border: 0;
    letter-spacing: initial;
    position: absolute;
    margin-left: 47px;
    color: #597cad;
    font-size: 14px;
    text-decoration: none;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-weight: 600;
    font-style: normal;
    line-height: inherit;
    text-transform: initial;
}
table[width="100%"] tbody tr td[width="100%"] i b {
    size: 14px;
    margin-top: -49px;
    border: 0;
    letter-spacing: initial;
    position: absolute;
    margin-left: 47px;
    color: #597cad;
    font-size: 14px;
    text-decoration: none;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-weight: 600;
    font-style: normal;
    line-height: inherit;
    text-transform: initial;
}
table[width="100%"] tbody tr td[width="100%"] i b:before {
    content: "";
    position: absolute;
    margin-left: -51px;
    margin-top: -4px;
    background: url(https://img.webme.com/pic/a/aliq/purpleuser1.png);
    background-size: 61px;
    border-radius: 50%;
    width: 40px;
    height: 40px;
}
table[align="center"] table[width="100%"] td[width="100%"] {
    padding: 71px 0px 2px 18px;
    color: #2b2b2b;
    width: 600px;
    display: inline-table;
    word-wrap: break-word;
    font-size: 18px;
    line-height: 1.58;
    letter-spacing: -.004em;
    font-family: medium-content-serif-font,Georgia,Cambria,"Times New Roman",Times,serif;
}

td > .localtime {
    font-size: 11px;
    font-style: normal;
    font-family: arial;
    color: rgb(2, 2, 2);
    position: absolute;
    float: left;
    margin: 36px -528px;
}
td[width="100%"] .localtime {
    font-size: 11px;
    font-style: normal;
    font-family: arial;
    color: rgb(2, 2, 2);
    position: absolute;
    float: left;
    margin: -27px 47px;
}
/*yorum*/
hr {display:none}
table[width="100%"][align="center"] table[width="100%"] {
    margin-bottom: 38px;
    padding: 10px;
    border-radius: 4px;
    padding-top: 0;
    padding-bottom: 15px;
    margin-top: -22px;
    width: 660px;
    margin-left: 130px;
    border: 1px solid #E8E8E8;
    background: #fff;
    -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.04);
    box-shadow: 0 1px 4px rgba(0,0,0,.04);
    border: 1px solid rgba(0,0,0,.09);
    -webkit-border-radius: 3px;
    border-radius: 3px;
}
.yorumlar tbody tr td > b:nth-of-type(1) {
    position: absolute;
    margin-top: -33px;
    font-size: 15px;
    font-weight: 500;
    margin-left: 69px;
    font-family: medium-content-sans-serif-font,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;
}
.yorumlar font {
display:none;
}
</style>



<div class="paylas-yorum">

<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="custom" data-btn_size="37" data-icon_size="50" data-icon_l="hrt5" data-icon_l_c="#999697" data-icon_l_c_v="#e0245e" data-icon_d_c="#0094fe" data-icon_d_c_v="#00ff57" data-counter_l_c="#464646" data-bg_c="rgba(198,198,198,0)" data-bg_c_v="rgba(198,198,198,0)" data-brdr_c="rgba(198,198,198,0)" data-f_family="Lucida Console" data-counter_fs="b" data-lang="tr" data-i18n_like="buton adı" data-ef_voting="heartbeat" data-vert="true" data-show_like_label="false" data-dislike_enabled="false" data-icon_like_show="false" data-icon_dislike_show="false" data-counter_frmt="km" data-popup_width="0" data-site_id="56c2fe7ea4c688a2139531a5"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->

<div class="share-icon ifacebook">
<a target="_blank" title="Facebook'ta paylaş" onclick="window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href)+'&amp;t='+encodeURIComponent(document.title));return false;" href="http://www.facebook.com/" style="text-decoration:none;" rel="nofollow"><svg class="svgIcon-use" width="32" height="32"><path d="M16.39 23.61v-5.808h1.846a.55.55 0 0 0 .546-.48l.36-2.797a.551.551 0 0 0-.547-.62H16.39V12.67c0-.67.12-.813.828-.813h1.474a.55.55 0 0 0 .55-.55V8.803a.55.55 0 0 0-.477-.545c-.436-.06-1.36-.116-2.22-.116-2.5 0-4.13 1.62-4.13 4.248v1.513H10.56a.551.551 0 0 0-.55.55v2.797c0 .304.248.55.55.55h1.855v5.76c-4.172-.96-7.215-4.7-7.215-9.1 0-5.17 4.17-9.36 9.31-9.36 5.14 0 9.31 4.19 9.31 9.36 0 4.48-3.155 8.27-7.43 9.15M14.51 4C8.76 4 4.1 8.684 4.1 14.46c0 5.162 3.75 9.523 8.778 10.32a.55.55 0 0 0 .637-.543v-6.985a.551.551 0 0 0-.55-.55H11.11v-1.697h1.855a.55.55 0 0 0 .55-.55v-2.063c0-2.02 1.136-3.148 3.03-3.148.567 0 1.156.027 1.597.06v1.453h-.924c-1.363 0-1.93.675-1.93 1.912v1.78c0 .3.247.55.55.55h2.132l-.218 1.69H15.84c-.305 0-.55.24-.55.55v7.02c0 .33.293.59.623.54 5.135-.7 9.007-5.11 9.007-10.36C24.92 8.68 20.26 4 14.51 4"></path></svg></a></div>

<div class="share-icon itwitter">
<a  target="_blank" title="Twitter'da paylaş" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent(location.href)+'&amp;t='+encodeURIComponent(document.title));return false;" href="http://www.twitter.com/" style="text-decoration:none;" rel="nofollow"><svg class="svgIcon-use" width="32" height="32"><path d="M21.967 11.8c.018 5.93-4.607 11.18-11.177 11.18-2.172 0-4.25-.62-6.047-1.76l-.268.422-.038.5.186.013.168.012c.3.02.44.032.6.046 2.06-.026 3.95-.686 5.49-1.86l1.12-.85-1.4-.048c-1.57-.055-2.92-1.08-3.36-2.51l-.48.146-.05.5c.22.03.48.05.75.08.48-.02.87-.07 1.25-.15l2.33-.49-2.32-.49c-1.68-.35-2.91-1.83-2.91-3.55 0-.05 0-.01-.01.03l-.49-.1-.25.44c.63.36 1.35.57 2.07.58l1.7.04L7.4 13c-.978-.662-1.59-1.79-1.618-3.047a4.08 4.08 0 0 1 .524-1.8l-.825.07a12.188 12.188 0 0 0 8.81 4.515l.59.033-.06-.59v-.02c-.05-.43-.06-.63-.06-.87a3.617 3.617 0 0 1 6.27-2.45l.2.21.28-.06c1.01-.22 1.94-.59 2.73-1.09l-.75-.56c-.1.36-.04.89.12 1.36.23.68.58 1.13 1.17.85l-.21-.45-.42-.27c-.52.8-1.17 1.48-1.92 2L22 11l.016.28c.013.2.014.35 0 .52v.04zm.998.038c.018-.22.017-.417 0-.66l-.498.034.284.41a8.183 8.183 0 0 0 2.2-2.267l.97-1.48-1.6.755c.17-.08.3-.02.34.03a.914.914 0 0 1-.13-.292c-.1-.297-.13-.64-.1-.766l.36-1.254-1.1.695c-.69.438-1.51.764-2.41.963l.48.15a4.574 4.574 0 0 0-3.38-1.484 4.616 4.616 0 0 0-4.61 4.613c0 .29.02.51.08.984l.01.02.5-.06.03-.5c-3.17-.18-6.1-1.7-8.08-4.15l-.48-.56-.36.64c-.39.69-.62 1.48-.65 2.28.04 1.61.81 3.04 2.06 3.88l.3-.92c-.55-.02-1.11-.17-1.6-.45l-.59-.34-.14.67c-.02.08-.02.16 0 .24-.01 2.12 1.55 4.01 3.69 4.46l.1-.49-.1-.49c-.33.07-.67.12-1.03.14-.18-.02-.43-.05-.64-.07l-.76-.09.23.73c.57 1.84 2.29 3.14 4.28 3.21l-.28-.89a8.252 8.252 0 0 1-4.85 1.66c-.12-.01-.26-.02-.56-.05l-.17-.01-.18-.01L2.53 21l1.694 1.07a12.233 12.233 0 0 0 6.58 1.917c7.156 0 12.2-5.73 12.18-12.18l-.002.04z"></path></svg></a></div>

<div class="share-icon isavefacebook">
<a href="#save-fb"><svg class="svgIcon-use" width="32" height="32"><path d="M19.385 4h-9.77A2.623 2.623 0 0 0 7 6.615V23.01a1.022 1.022 0 0 0 1.595.847l5.905-4.004 5.905 4.004A1.022 1.022 0 0 0 22 23.011V6.62A2.625 2.625 0 0 0 19.385 4zM21 23l-5.91-3.955-.148-.107a.751.751 0 0 0-.884 0l-.147.107L8 23V6.615C8 5.725 8.725 5 9.615 5h9.77C20.275 5 21 5.725 21 6.615V23z" fill-rule="evenodd"></path></svg></a>
<div id="save-fb" class="save-fb-save-fb-overlay">
	<div class="save-fb-input">
		<a class="save-fb-close" href="#">&times;</a>
		<div class="fb-save" data-size="large"></div>
		</div>
	</div>
</div>
<div class="share-icon user iyorum"><svg class="svgIcon-use" width="32" height="32"><path d="M21.27 20.058c1.89-1.826 2.754-4.17 2.754-6.674C24.024 8.21 19.67 4 14.1 4 8.53 4 4 8.21 4 13.384c0 5.175 4.53 9.385 10.1 9.385 1.007 0 2-.14 2.95-.41.285.25.592.49.918.7 1.306.87 2.716 1.31 4.19 1.31.276-.01.494-.14.6-.36a.625.625 0 0 0-.052-.65c-.61-.84-1.042-1.71-1.282-2.58a5.417 5.417 0 0 1-.154-.75zm-3.85 1.324l-.083-.28-.388.12a9.72 9.72 0 0 1-2.85.424c-4.96 0-8.99-3.706-8.99-8.262 0-4.556 4.03-8.263 8.99-8.263 4.95 0 8.77 3.71 8.77 8.27 0 2.25-.75 4.35-2.5 5.92l-.24.21v.32c0 .07 0 .19.02.37.03.29.1.6.19.92.19.7.49 1.4.89 2.08-.93-.14-1.83-.49-2.67-1.06-.34-.22-.88-.48-1.16-.74z"></path></svg></div>

</div>


</div>
<style>
i.lb-tt.lb-share-tt, i.lb-tt.lb-tooltip-tt {
    visibility: hidden;
}
span.likebtn-wrapper {
    margin: 3px -8px 30px -15px;
}
span.lb-count {
    width: 87%;
    text-align: center;
}
@keyframes pop {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.1, 1.1);
  }
  100% {
    transform: scale(1, 1);
  }
}
@keyframes rotate-vertical {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(360deg);
  }
}

.share-icon:hover {
  animation: pop 0.3s 2;
}
.save-fb-save-fb-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;   
 z-index: 99999999;
}
.save-fb-save-fb-overlay:target {
  visibility: visible;
  opacity: 1;
}

.save-fb-input {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.save-fb-input .save-fb-close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
</style>

<script>
$(window).scroll(function() {
				if ($(this).scrollTop() > 110) {
                    $('.paylas-yorum').addClass('s-c-fix');
		        } else {
		            $('.paylas-yorum').removeClass('s-c-fix');
		        }
		});
</script>
<style>
.paylas-yorum {
    position: fixed;
    top: 193px;
    z-index: 10;
    margin-left: -76px;
}
.paylas-yorum.s-c-fix {
    top: 73px;
}
</style>





<style>
body .rns {display:inline}
ol#new-projects article,
.sidebaryan1,
.sidebaryan2 {
    display: none;
}
ol#new-projects {
    margin-left: -20px;
    width: 900px;
}
body article.carditem {
    width: 286px;}
.carditem header {height:125px;}
.carditem .img-fluid {image-rendering: -webkit-optimize-contrast;}
ol#new-projects article:nth-of-type(1),
ol#new-projects article:nth-of-type(2),
ol#new-projects article:nth-of-type(3),
ol#new-projects article:nth-of-type(4),
ol#new-projects article:nth-of-type(5),
ol#new-projects article:nth-of-type(6){
    display: inline-block;
}
body .carditem .img-fluid {
    width: 100%;
    float: left;
}
body .carditem header {
    height:166px;
background:none;
}
body .carditem div {
    float: right;
    width: 130px;
    position: absolute;
    bottom: 0px;
    margin: 2px 7px;
    height: 51px;
    max-height: 50px;
    overflow: hidden;
    padding-left: 43px;
}
body .carditem div:before {
    margin: -5px -40px;
    border-radius: 13px;
    background-color: white;
    background-position: 2px;
}
body .carditem div:after {width:100px }
body .sidebar_section.sidebar_section_bg.sidebaryan3 {
    width: 241px;
    margin-left: -17px;
    box-shadow: 0px 0px;
    border: 0px;
}
body #webme_sky_ad {
    padding-left: 45px;
}
body #new-projects .carditem:first-of-type {
    margin-left: 8px;
}
</style>
<style>
article.carditem {
    height: 244px;
    width: 332px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    padding: 0;
    margin: 20px 5px;
    background: white;
}
.carditem {
    transition: all 0.25s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
}
.carditem a {
    color: #212121;
}
#content .carditem:first-of-type {
    margin-left: 8px;
}
.carditem .img-fluid {
    height: auto;
    -moz-transition: -moz-transform 0.2s ease-out;
    -webkit-transition: -webkit-transform 0.2s ease-out;
    -ms-transition: -ms-transform 0.2s ease-out;
    transition: transform 0.2s ease-out;
    width: 100%;
        image-rendering: -webkit-optimize-contrast;
    height: 166px;

}
.carditem header:hover img {
    -moz-transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

.carditem header {
    background: url(https://img.webme.com/pic/a/aliq03/pattern.png)  #fdfbd1;
    background-size: 600px;
    background-position: -63px;
overflow: hidden;
}
.carditem div {
    text-transform: capitalize;
    padding: 12px 10px;
    text-align: left;
    font-family: roboto;
    font-weight: 400;
    font-size: 15px;
    height: 30px;
    word-wrap: break-word;
    margin-left: 36px;
}
.carditem div:before {
    content: "";
    background: red;
    width: 30px;
    height: 30px;
    position: absolute;
    margin-left: -34px;
margin-top:-3px;
}
article.carditem.aliq-btn {
    white-space: inherit;
    line-height: 20px;
background: white;
}
article.carditem.aliq-btn:hover{
background: white;
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2), 0 6px 10px 0 rgba(0,0,0,0.3);
}
.carditem div:after {
    display: block;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 39px;
    height: 30px;
    content: "";
    background: linear-gradient(to right,rgba(255,255,255,0),rgba(255,255,255,1));
}
/*********/
.filter-select .filters {
    width:29px;
    height: 29px;
    background: #333333;
    display: -webkit-inline-box;
    margin-right:6px;
    font-size: 0;
    cursor: pointer;
}
.filter-select {
    position: absolute;
    right: 50%;
    margin-right: -508px;
    margin-top: -41px;
}
.filter-select .tema-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/template-icon.png) no-repeat;
    background-size: 29px;
}
.filter-select .kodlar-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/codes-icon.png) no-repeat;
    background-size: 29px;
}
.filter-select .ps-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/icon-psd.png) no-repeat;
    background-size: 29px;
}
.filter-select .font-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/icon-font.png) no-repeat;
    background-size: 29px;
}
.filter-select .photo-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/photo-aqua-icon.png) no-repeat;
    background-size: 29px;
}

.filter-select .all-filter-button {
    background: transparent;
    background-size: 32px;
    font-size: 16px;
    width: auto;
    font-weight: 400;
    vertical-align: text-top;
    letter-spacing: 1px;
}
.tema-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/template-icon.png) no-repeat;
background-size:25px;
}
.kodlar-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/adimsa.png) no-repeat;
background-size:25px;
}
.ps-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/icon-psd.png) no-repeat;
background-size:25px;
}
.photo-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/photo-aqua-icon.png) no-repeat;
background-size:25px;
}
.font-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/icon-font.png) no-repeat;
background-size:25px;
}
</style>

<style>
center .comment-container {
    display: block;
    float: left;
    width: 666px;
    margin-left: 131px;
}
center {
    text-align: initial;
}
</style>
<div class="reaction-ekle"></div>
<script type="text/javascript">
$( document ).ready(function() {

$( "br + center" ).append( $( ".reaction-ekle" ) );
$( "br + center" ).append( $( "#new-projects" ) );
$( "br + center" ).append( $( ".comment-container" ) );


});
</script>
