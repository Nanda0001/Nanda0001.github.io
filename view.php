<!DOCTYPE html>
<html lang="en">
<head>
  <title>3D Reconstruction from a Single Image</title>
  <meta charset="utf-8">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@_asjackson" />
  <meta name="twitter:title" content="3D Face Reconstruction" />
  <meta name="twitter:description" content="Online 3D Face Reconstruction from a Single Image" />
    <!-- <meta name="twitter:image"
     content="http://www.cs.nott.ac.uk/~psxasj/3dme/queue/obj/AFLW_image00046.jpg" /> -->
     <script src="three.min.js"></script>
     <script src="OBJVertexColorLoader.js?id=10"></script>
     <script src="OrbitControls.js"></script>
     <script src="view.js?id=2"></script>
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     
     <script src='https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.0.3/pixi.min.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.1/dat.gui.min.js'></script>
     <script src='js/epmrgo.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>

     

     <script  src="js/index.js"></script>

     <style>
     p {
       font-family: sans-serif;
     }
     #container {
       margin: 0 auto;
       width: 800px;
     }
     #container h1 {
       text-align: center;
     }
     #viewer {
       border: 1px solid #999999;
     }
     #viewer #viewer_frame {
       float: left;
       position: relative;
     }
     #viewer #viewer_controls {
       padding: 0 20px;
       background-color: #eeeeee;
       width: 296px;
       height: 462px;
       float: right;
       position: relative;
     }
     .button {
       background-color: #4CAF50;
       border: none;
       color: white;
       padding: 15px 32px;
       text-align: center;
       text-decoration: none;
       display: inline-block;
       font-size: 14px;
     }
     .button.blue {
       background-color: #4c84af;
     }
     #viewer .button {
       width: 230px;
     }
     #progress {
       left: 10px;
       right: 10px;
       bottom: 10px;
       height: 30px;
       border: 1px solid #aaaaaa;
       position: absolute;
     }
     #progress #progressin {
       background-color: #f4aa42;
       height: 100%;
     }
     address {
       margin-top: 10px;
     }
     #dragme {
       position: absolute;
       top: 0;
       right: 0;
       bottom: 0;
       left: 0;
       line-height: 460px;
       text-align: center;
       font-size: 80px;
       font-family: sans-serif;
       color: #FFFFFF;
       background:rgba(128,128,128,0.7);
     }
     .clear { clear: both; }
     span.note {
       font-size: 10pt;
       color: #eeeeee;
     }
   </style>
   <script>
     var objname;
     //objname = 'wow_150';
     objname = '<?php echo $_GET['id']; ?>';
      //AFLW_image00046.obj
   </script>
 </head>
 <body>
  <div id="container">
    <h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
    <p>
     <b>Drag the 3D model around with your mouse</b>. You can checkout the
     paper and code <a href="http://aaronsplace.co.uk/papers/jackson2017recon/">here</a>.
   </p>
   <p>
     If it is blank, it may be an issue with WebGL or
     browser. Sometimes this happens with Chromium, but not Google
     Chrome, as far as I know.
   </p>
   <div id="viewer">
     <div id="viewer_frame"><div id="dragme">Drag me!</div></div>
     <div id="viewer_controls">
       <p>
         <a id="objlink" class="button" href="#" download>
           Download Wavefront OBJ File
           <span class="note">(colours are stored per-vertex)</span>
         </a>
       </p>
       <p>
         <a href="index.php" class="button blue">Try another image</a>
       </p>
       <hr />
       <p>
         Z Translate:
         <input type="range" min="-50" max="20" value="-30" class="slider" id="zTranslate">
       </p>
       <p>
         <input type="checkbox" unchecked id="checkBackground" /> Show background image
       </p>
       <hr />
       
       <p>Please share and spread the word!</p>
       <a href="https://twitter.com/share" class="twitter-share-button"
       data-text="Make a 3D model of your face here"
       data-url="http://cs.nott.ac.uk/~psxasj/3dme"
       data-via="_asjackson" data-related="_asjackson"
       data-show-count="false">Tweet</a>
       <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

       <a class="github-button" href="https://github.com/AaronJackson/vrn"
       data-show-count="true"
       aria-label="Star AaronJackson/vrn on GitHub">Star</a>

       <p id="status"></p>
       <div id="progress"><div id="progressin"></div></div>
     </div>
     <div class="clear"></div>
   </div>

   <address>
     aaron.jackson@nottingham.ac.uk
     (<a href="http://aaronsplace.co.uk">website</a>)
     &bull; WebGL rendering done with the Three.js framework.
   </address>
 </div>

 <script>
  document.getElementById('dragme').style.display = 'none';
 //  setTimeout(function() {
 //   document.getElementById('dragme').style.display = 'none';
 // }, 1200)
</script>
</body>
</html>
