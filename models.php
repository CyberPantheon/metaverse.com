<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a-scene>
   <!--  <a-assets >
      <img src="assets/sky1.jpg" id="sky1">
      <img src="assets/nm1.tif" id="nm1">
      <img src="assets/brickt.tif" id="nm2">

      <img src="texture/earth1.tif" id="nm2">
      <img src="texture/earth2.tif" id="nm3">
      <img src="texture/earth3.tif" id="nm4">
      <img src="assets/textures/normalmap.jpg" id="nm">
      <img src="assets/skyy.gltf" id="skyy"> -->

      <a-asset-item id="mountain" src="mountain/scene.gltf"></a-asset-item>

     
<a-entity hand-controls="color:  #131111"></a-entity>



    </a-assets>
    <a-entity gltf-model="#mountain" ></a-entity>

</a-scene>
</body>
</html>