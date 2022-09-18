<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>THE ROOM</title>
		<meta charset="utf-8">
	<title>class</title>
	<link rel="stylesheet" type="text/css" href="aframe/aframe.js">
	<script type="text/javascript" src="aframe.js"></script>
	<script type="text/javascript" src="aframe-enviroment-componenet.min.js"></script>
  <script type="text/javascript" src="aframe-inspector-min.js"></script>
  <script type="text/javascript" src="aframe/inspector2.js"></script>
<script type="text/javascript" src="https://unpkg.com/aframe-environment-component"></script>


	<script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
  <script src="https://unpkg.com/aframe-environment-component/dist/aframe-environment-component.min.js"></script>

</head>
<body>

	<a-scene>
  <a-scene fog="color:  #9b2c2c;  density:  0.3;  far:  500;  near:  20" enviroment="preset:forest">
		

  <a-assets >
      <img src="assets/sky1.jpg" id="sky1">
      <img src="assets/nm1.tif" id="nm1">
      <img src="assets/brickt.tif" id="nm2">

      <img src="texture/earth1.tif" id="nm2">
      <img src="texture/earth2.tif" id="nm3">
      <img src="texture/earth3.tif" id="nm4">
      <img src="assets/textures/normalmap.jpg" id="nm">
      <img src="assets/skyy.gltf" id="skyy">

      <a-asset-item id="mountain" src="dome/trees.gltf"></a-asset-item>
<a-sky src="img/space4.jpg" fog="true" double-sided="true" side="double"></a-sky>

    <a-plane rotation="-90 0 0" scale="500 500 1"  repeat="250 250" src="assets/textures/colormap.jpg" src="#nm" normal-map=""color="" receive-shadow="true"></a-plane>


<a-box width="99" height="10" depth="1.5" color="" normal-map="#nm" position="-55 6.89801 -10" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="height: 15" id="wallfront2">
      
    </a-box>



















<a-box width="0.2" height="10" depth="40" color="" normal-map="#nm" position="5.08547 1.5 -5" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #FFF; repeat: 1 1" geometry=""></a-box>
      
    </a-box>

    <a-box width="30" height="10" depth="0.5" color="" normal-map="#nm" position="-26.75824 15.63628 3.40446" src="img/pores.jpg" scale="2.16336 3.21759 1.92006" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #FFF; repeat: 1 1" geometry="primitive: cylinder; radius: 2" id="pillar1 
angle:  1;  color:  #d209ec;  decay:  0;  distance:  2;  intensity:  20;  type:  point;  castShadow:  true
    ">
        
    </a-box>

    <a-box width="30" height="10" depth="0.5" color="" normal-map="#nm" position="-13.93476 15.66794 17.06695" src="img/pores.jpg" scale="2.29032 3.1091 2.03964" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #FFF; repeat: 1 1" geometry="primitive: cylinder; radius: 2" id="pillar2"></a-box>

    <a-box width="30" height="10" depth="0.5" color="" normal-map="#nm" position="15.7231 12.71524 15.16181" src="img/pores.jpg" scale="1.67144 3.83135 1.75017" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #FFF; repeat: 1 1" geometry="primitive: cylinder; radius: 3" id="pillar3"></a-box>

    <a-box width="30" height="10" depth="0.5" color="" normal-map="#nm" position="27.93574 11.78341 0.33041" src="img/pores.jpg" scale="1.61791 4.07432 1.55251" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #FFF; repeat: 1 1" geometry="primitive: cylinder; radius: 3" id="pillar4"></a-box>

 <!--    <a-plane rotation="-87.03629978493797 179.9998479605043 179.9998479605043" scale="1100 1100 18.13271" repeat="600 600" src="assets/textures/colormap.jpg" normal-map="" color="" receive-shadow="true" material="color: #fafafa" geometry=""></a-plane> -->
<a-box width="30" height="10" depth="0.5" color="" normal-map="#nm" position="1.78944 30.62439 8.63756" src="img/pores.jpg" scale="36.946 0.4384 26.09918" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #db08f7; src: img/wall.jpeg; repeat: 1 1" geometry="primitive: cylinder" id="pillartop"></a-box>

  
  
  <!--   <a-sphere src="img/c10.jpg" position="30 100 200" radius="20" opacity="0.7 " >
       <a-entity
light="angle:  360;  color:  #f61e1e;  groundColor:  #ec0e0e;  decay:  0.5;  distance:  40;  intensity:  50;  type:  point;  castShadow:  true;  shadowCameraVisible: ;" position="30 100 200" 
></a-entity>

    </a-sphere> -->
    <a-sphere
material="src:  img/wall.jpeg;  width:  10;  repeat:  [object Object];  side:  double;  offset:  [object Object];  ambientOcclusionTextureOffset:  [object Object];  ambientOcclusionTextureRepeat:  [object Object];  color:  #d1511a;  displacementTextureOffset:  [object Object];  displacementTextureRepeat:  [object Object];  metalnessTextureOffset:  [object Object];  metalnessTextureRepeat:  [object Object];  normalScale:  [object Object];  normalTextureOffset:  [object Object];  normalTextureRepeat:  [object Object];  roughnessTextureOffset:  [object Object];  roughnessTextureRepeat:  [object Object]"
    ></a-sphere>
    <a-entity
    light="angle:  30;  color:  #ff1605;  groundColor:  #8c1fe5;  intensity:  5;  type:  point;  target:  [object HTMLElement];  castShadow:  true"></a-entity>
    <a-cylinder

    src="img/wall.jpeg"
    height="5 "
    width="10"
    length="10"
    radius="20 20 20"
    position="1 10 -5" 
    repeat="10 10"
    open-ended=""
    side="double"
    thickness="2"

    ></a-cylinder>
   <!--  <a-box width="0.2" height="10" depth="40" color="" normal-map="#nm" position="-5 1.5 -5" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" material="color: #FFF; repeat: 1 1" geometry=""></a-box> -->


                                  <!-- A-SQUARE -->

<a-box color="" normal-map="#nm" position="-93.86117 1.5 -71.98534" src="img/pores.jpg" scale="1 1 -0.62574" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 125" material="color: #FFF; repeat: 1 1" id="Aleft"></a-box>

<a-box color="" normal-map="#nm" position="81.04997 1.5 -72.4751" src="img/pores.jpg" scale="1 1 -0.5814" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 135" material="color: #FFF; repeat: 1 1" id="Aright"></a-box>

<a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-6.31089 1.5 -110.01711" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 177" id="Aback">
      
    </a-box>

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-40.31 1.5 -33.7293" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 108" id="Afront1">
      
    </a-box>

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="51.64146 1.5 -34.31219" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 60" id="Afront2">
      
    </a-box>






                           <!-- B-SQUARE -->

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-2.38112 1.5 -44.7402" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 140" id="B-front">
      
    </a-box>             

    <a-box color="" normal-map="#nm" position="67.12109 1.5 -72.65465" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 57" material="color: #FFF; repeat: 1 1" id="B-right"></a-box>

    <a-box color="" normal-map="#nm" position="-80.19445 1.5 -72.41208" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 57" material="color: #FFF; repeat: 1 1" id="B-left"></a-box>

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-6.61525 1.5 -99.85147" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 150" id="B-back">
      
    </a-box>


                                 C-BOX          

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-10.46434 1.5 -53.87066" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 120" id="C-front">
      
    </a-box>
    
    <a-box color="" normal-map="#nm" position="55.01505 1.85856 -73.38808" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 38" material="color: #FFF; repeat: 1 1" id="C-right"></a-box>

    <a-box color="" normal-map="#nm" position="-70.12575 1.5 -73.20744" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 38" material="color: #FFF; repeat: 1 1" id="C-left"></a-box>

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-7.53785 1.5 -91.81817" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 125" id="C-back">
      
    </a-box>


                               <!-- D-BOX                              -->

<a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-4.15032 1.5 -61.39354" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 105" id="D-front">
      
    </a-box>

    <a-box width="200" height="10" depth="1.5" color="" normal-map="#nm" position="-7.39525 1.5 -83.54938" src="img/pores.jpg" scale="-1 1 1" normal-texture-repeat="3 3" repeat="2 2" roughness="1" open-sided="true" open-ended="true" side="double" material="color: #FFF" geometry="width: 112" id="D-back">
      
    </a-box>

    <a-box color="" normal-map="#nm" position="48.39369 1.5 -72.93754" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 24" material="color: #FFF; repeat: 1 1" id="D-right"></a-box>

    <a-box color="" normal-map="#nm" position="-62.83174 1.5 -72.69602" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="width: 0.2; height: 10; depth: 24" material="color: #FFF; repeat: 1 1" id="D-left"></a-box>


                         <!-- E-CYLINDER -->

    <a-box color="" normal-map="#nm" position="-50.12138 0 -69.55028" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 4" material="color: #FFF; repeat: 1 1" id="E-1"></a-box>
    
    <a-box color="" normal-map="#nm" position="-36.44542 0 -76.46625" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 4" material="color: #FFF; repeat: 1 1" id="E-2"></a-box>

    <a-box color="" normal-map="#nm" position="-22.37078 0 -69.62397" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 4" material="color: #FFF; repeat: 1 1" id="E-3"></a-box>

    <a-box color="" normal-map="#nm" position="-7.84841 0 -75.96311" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 4" material="color: #FFF; repeat: 1 1" id="E-4"></a-box>

    <a-box color="" normal-map="#nm" position="6.00336 0 -69.00869" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 4" material="color: #FFF; repeat: 1 1" id="E-5"></a-box>

    <a-box color="" normal-map="#nm" position="21.43581 0 -76.07229" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 4" material="color: #FFF; repeat: 1 1" id="E-6"></a-box>

    <a-box color="" normal-map="#nm" position="37.77565 0 -72.1169" src="img/pores.jpg" scale="" normal-texture-repeat="3 3" repeat="" roughness="1" side="double" geometry="primitive: cylinder; radius: 6" material="color: #FFF; repeat: 1 1" id="E-7"></a-box>                     





                              <!-- E-light -->
                             
<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 5; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light " position="-50.12138 2.72522 -69.55028"></a-entity>

<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 5; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light2" position="-36.48919 1.40355 -76.52132"></a-entity>

<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 5; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light3" position="-22.51945 1.37937 -69.55028"></a-entity>

<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 5; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light4" position="-7.88535 1.88334 -75.93422"></a-entity>

<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 5; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light5" position="5.86146 1.88334 -69.07191"></a-entity>

<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 5; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light6" position="21.50031 1.88334 -76.15711"></a-entity>

<a-entity light="type: point; color: #cb0dd9; angle: 360; groundColor: #fbff0f; distance: 7; intensity: 20; penumbra: 1; target: #E-5; castShadow: true" id="E-light7" position="37.8167 1.88334 -71.94992"></a-entity>




                                 <!-- A-LIGHT -->

<a-entity light="color: #e307f2; groundColor: #ec0909; decay: 0.001; distance: 3.2; intensity: 10; penumbra: 3; type: point" id="a1" position="-89  3.70175 -30.57266"></a-entity>

<a-entity light="color: #e307f2; type: point; intensity: 10; distance: 3.2; penumbra: 3; decay: 0.001; groundColor: #ec0909" id="a2" position="-81  3.70175 -30.57266"></a-entity>

<a-entity light="color: #e307f2; type: point; intensity: 10; distance: 3.2; penumbra: 3; decay: 0.001; groundColor: #ec0909" id="a3" position="-73  3.70175 -30.57266"></a-entity>     

<a-entity light="color: #e307f2; type: point; intensity: 10; distance: 3.2; penumbra: 1; decay: 0.001; groundColor: #ec0909" id="a4" position="-65  3.70175 -30.57266"></a-entity>                                 












	</a-scene>

</body>
</html>