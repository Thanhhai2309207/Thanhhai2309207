<!DOCTYPE HTML>
<html>
<head>
   <meta http-equiv="content-type" content="text/html" />
   <meta name="author" content="Quyet" />
   <title>Web Key Free</title>
   <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="MobileOptimized" content="320">
        <meta http-equiv="content-language" content="vi" />
<meta name="copyright" content="Nguyễn Thế Quyết" />
<meta name="author" content="Nguyễn Thế Quyết" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="content-language" content="vi" />
<meta property="og:type" content="website" />
<style>
    body { width:100%;
    height: 100%;
    background-image: url("background.jpg");
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat;}

    </style>
</head>

<body>
    
    <h1 style="color: rgb(204, 199, 221)" style = "font-family:Arial, Helvetica, sans-serif"></h1style>                              Web Và Tool Thuộc Quyền Của NTQ 5.0 (Nguyễn Thế Quyết)</h1>
    <h2 class="text-white mb-4"><span style="color: rgb(204, 199, 221)" class="d-block" style = "font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">                Chúc Mừng Bạn Đã Vượt Key Thành Công!!!</span></h2>
    <h2 class="text-white mb-4"><span style="color: rgb(204, 199, 221)" class="d-block">                Cảm Ơn Bạn Đã Sử Dụng Tool Của Chúng Tôi Chúc Các Bạn Sử Dụng Tool Vui Vẻ</span></h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

   </div>


  <div class="form">
        <div>
            <h3 style="color: rgb(204, 199, 221)" align="center">CLICK VÀO Ô BÊN DƯỚI SẼ TỰ ĐỘNG SAO CHÉP KEY</h3><div><br /></div>
            <p>
                <button class="button" name="submit" onclick="copyToClipboard('#keytool')" type="submit">
                    <span id="keytool">BẠN CHƯA LẤY KEY</span>
                </button>
            </p>
        </div>
    </div>
    
<style>
.button {
    background-color: #4c56af;
    width: 100%;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 15px;
    box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.25),
            2px 2px 2px rgba(0, 0, 0, 0.25),
            inset 2px 2px 4px rgba(255, 255, 255, 0.5),
            inset 2px 2px 6px rgba(255, 255, 255, 0.2),
            inset -1px -1px 6px rgba(218, 218, 218, 0.75);
}
</style>    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
    <script>
      	var key = GetURLParameter('key');
      	if(key != ""){
	        document.getElementById("keytool").innerHTML = key;
        }
      
        function GetURLParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                }
            }
        }
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            
            return confirm('Bạn đã copy key');
        }
    </script>
</body>
</html>
