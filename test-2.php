<!doctype html>
<html lang="en-US">
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
<head>
<script src="https://subtitle.bioskopkeren.pro/jquery7.min.js"></script>

<meta charset="utf-8">
<style>body,html{overflow:hidden;background-color:#000;margin:0;padding:0;position:relative;margin:0;padding:0;height:100%;width:100%;box-sizing:border-box}.dow-erlay{display:none;position:absolute;z-index:10;margin:10px;right:0}#player{height:100%!important;width:100%!important;position:relative;background:#000}.loader{box-sizing:border-box;border:15px solid #f3f3f3;border-top:15px solid #3498db;border-bottom:15px solid #3498db;border-radius:50%;width:70px;height:70px;animation:spin 1s linear infinite;position:absolute;top:50%;left:50%;margin:-35px}@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}p{color:#fff;margin-top:40vh;font-size:22px;text-align:center}.jw-rightclick{display:none!important}#bar{position:fixed;top:0;right:0;z-index:999;color:red;font-weight:700;right:1em;top:1em;display:none}#bar::before{content:' ';height:.85em;width:.85em;background:currentColor;border-radius:50%;position:absolute;top:47%!important;left:-1em;transform:translateY(-50%)}.videocontent{position:relative;color:#fff}
#list-server-more{z-index:1;padding:10px 0 0 0;position:absolute;color:#fff;top:0;left:8px;text-align:left;font-family:Arial,Helvetica,sans-serif}#show-server{color:#fff;padding:5px 50px;font-size:10px;background:url(../listbaru.png) no-repeat center center}.list-server-items{margin-top:10px;background:rgba(0,0,0,.7)}.list-server-items li{cursor:pointer;padding:6px 5px 6px 15px;color:#ccc;text-align:left;list-style:none;border-top:solid 1px #20201f;font-size:13px}.list-server-items li.active,.list-server-items li:hover{color:#fff}#load-iframe{display:block;position:relative}.list-server-items li:first-child{border:0}.list-server-items a{color:#ccc;text-decoration:none}.list-server-items .active a,.list-server-items a:hover{color:#fff}
iframe {
    display: block;       /* iframes are inline by default */
    background: #000;
    border: none;         /* Reset default border */
    height: 100vh;        /* Viewport-relative units */
    width: 100vw;
}</style>
    <script type="text/javascript">
    var data_hls_mp4  = "";
	document.oncontextmenu =new Function("return false;")
</script>
</head>
<body onselectstart="return false">
<div id="bar" data-id="1">1</div>
<!--ASPD ASS-->
<div id="list-server-more">
    <a href="javascript:void(0)" id="show-server" title="Show Server"></a>
    <ul class="list-server-items">
    <li class="linkserver" data-status="1" data-video="https://player.serverbk.com/farhanredirector5xx.php?id=&type=hls">2. Player CF</li>
    <li class="linkserver" data-status="0" data-video="https://player.serverbk.com/dlbk/download.php?id=">3. DOWNLOAD FILM</li>
    </ul>
</div>
<div id="load-iframe">
    <iframe id="embedvideo" src="https://player.serverbk.com/new3.php?id=" allowfullscreen="true" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" ></iframe>
</div>
<!--END ASPD ASS-->
<script>
$(document).ready(function(){
function i(){setTimeout(function(){
jQuery(".list-server-items").fadeOut()},5e3)}

jQuery("#show-server").click(function (e) {
e.preventDefault(), jQuery(".list-server-items").toggle();
}),
jQuery(".list-server-items li.linkserver").click(function (e) {
        e.preventDefault();
        var t = jQuery(this).attr("data-video"),
            a = jQuery(this).attr("data-status");
            if(a == 0){
                window.open(t, '_blank');
            }else{
             if (jQuery(this).hasClass("active")) return !1;
        jQuery("iframe").attr("src", ""),
        jQuery("iframe").attr("src", t),
            i(),
            jQuery(".list-server-items li").removeClass("active"),
            jQuery(this).addClass("active");
        }
    });
    i();
});

</script>
<script type="text/javascript">
function backupme(filename) {
    fetch(filename).then((resp) => resp.text()).then(function(data) {
    });
}
window.onload = function(){
backupme('https://player.serverbk.com/backupdrive1.php?id=');
};
</script>

</body>
</html>
