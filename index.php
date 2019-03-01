<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
      #loadingDiv{
          color:white;
          font-family: monospace;
          font-size: 50px;
          text-align: center;
          background-color: cyan;
          width : 100%;
          height: 800px;
          z-index:10;
          position : fixed;
          overflow: hidden;
      }
    </style>
  </head>
  <body style="overflow:hidden;">
    <div id="loadingDiv">
      sayfa yükleniyor
    </div>
    <div id="productList">
      <?php
        for($i = 1 ; $i<10000; $i++){
          echo "product" . $i . "<hr>";
        }
      ?>
    </div>
  </body>
  <script type="text/javascript">
    window.addEventListener("load" , function(){
      var loadingDiv = document.getElementById("loadingDiv");
      document.body.removeChild(loadingDiv);
      document.body.removeAttribute("style");
    });
  </script>
</html>
