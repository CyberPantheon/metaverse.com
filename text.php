<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>class</title>
	<link rel="stylesheet" type="text/css" href="aframe/aframe.js">
	<script type="text/javascript" src="aframe.js"></script>
	<script type="text/javascript" src="aframe-enviroment-componenet.min.js"></script>
  <script type="text/javascript" src="aframe-inspector-min.js"></script>


	<script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
  <script src="https://unpkg.com/aframe-environment-component/dist/aframe-environment-component.min.js"></script>

</head>
<body>
<!-- okay we first start with a-scene -->
<!-- in position d first is X den Y and Z -->  <!--  X pushes left or right, Y pushes up or down , Z pushes away or to you -->
<a-entity enviroment="preset: forest; dressingAmount: 500"></a-entity>
<a-assets>
	<img src="img/test.jpg" id="texture">
	 <!-- this is how u add texture -->
</a-assets>
	<a-scene fog=" type: linear; colo: red;" embedd>
		<a-box color="" position="-1 1.25 -2" rotation="45 45 45" height="1" radius="99" width="1" 
			src="img/test.jpg" id="box" animation="property: object3D.position.y; to: 3.2; dir: alternate; dur: 2000; loop: true"

			  rotation="0 45 45"
  scale="2 2 2"
  animation__position="property: object3D.position.y; to: 2.2; dir: alternate; dur: 2000; loop: true"
  animation__mouseenter="property: scale; to: 2.3 2.3 2.3; dur: 300; startEvents: mouseenter"
  animation__mouseleave="property: scale; to: 2 2 2; dur: 300; startEvents: mouseleave"

  class="box1"
		>
			

			<!-- today we will use a-animation tag -->
			<a-animation
               attribute="rotation" repeat="indefinite" to="0 360 0"

				begin="click"
			>
				
			</a-animation>
			<a-event name="mouseenter" scale="4 1 1">
				
			</a-event> <!-- used for things like mouseenter etc. -->
		</a-box>


		<a-box
  src="img/c10.jpg"
  position="0 2 -5"
  rotation="0 45 45"
  scale="2 2 2"
  animation__position="property: object3D.position.x; to: 7.2; dir: alternate; dur: 2000; loop: true"
  animation__mouseenter="property: scale; to: 2.3 2.3 2.3; dur: 300; startEvents: mouseenter"
  animation__mouseleave="property: scale; to: 2 2 2; dur: 300; startEvents: mouseleave"></a-box>

		<!-- setting up cusor -->
		<a-camera

			position="5 3 5"

		>

    <a-sky src="img/sbmount.png" color=""></a-sky>
			
			<a-cursor color="red"></a-cursor> <!-- this adds a cursor -->

		</a-camera>

<!-- this is for floor -->
    <a-plane rotation="-90 0 0" height="30" width="30" color="" repeat="50 50" src="img/c10.jpg"></a-plane>
<!-- this is for light -->
<a-light type="ambient" color="red"> </a-light>
<a-light type="point" color="silver" intensity="2" position="2 4 4" target="#box"> </a-light>







<!-- ADDING AUDIO, USING a sound WILL MAKE IT GET LOUD AS WE APPROACH VICE VERSA position puts d sound in a particular place -->
  
  <a-sound src="mp3/holyfather.mp3" autoplay="true"
    position="0 2 -5"></a-sound>
  


<!-- THIS ONE IS JUST GENERAL AUDIO -->
  
    <audio src="mp3/stalling.mp3" autoplay
      preload></audio>

      <!-- THIS IS HOW WE ADD TEXT -->
     <a-entity
  text="value: Hello, A-Frame!; color: #BBB"
  position="0 0 0"
  scale="2 2 2"></a-entity>




<!-- <script>
  AFRAME.registerComponent('modify-materials', {
    init: function () {
      // Wait for model to load.
      this.el.addEventListener('model-loaded', () => {
        // Grab the mesh / scene.
        const obj = this.el.getObject3D('mesh');
        // Go over the submeshes and modify materials we want.
        obj.traverse(node => {
          if (node.name.indexOf('ship') !== -1) {
            node.material.color.set('red');
          }
        });
      });
    }
  });
</script>


  <a-assets>
    <a-asset-item id="cityModel" src="3d/Hovering drone.glb"></a-asset-item>
  </a-assets>
  <a-entity gltf-model="#cityModel" modify-materials></a-entity>




 -->	

<h1 embedd>sssssssssssssss</h1>















</a-scene>

<script>
  AFRAME.registerComponent('scale-on-mouseenter', {
    schema: {
      to: {default: '2.5 2.5 2.5', type: 'vec3'}
    },

    init: function () {
      var data = this.data;
      var el = this.el;
      this.el.addEventListener('mouseenter', function () {
        el.object3D.scale.copy(data.to);
      });
    }
  });
</script>
<!-- this increases the size once mouseenters -->
<script>
  var boxEl = document.querySelector('a-box');
  boxEl.addEventListener('mouseenter', function () {
    boxEl.setAttribute('scale', {x: 5, y: 5, z: 5});
  });
</script>




<style type="text/css">
  .box1{
    display: none;
    margin-left: 2222vw;
  }
</style>


</body>
</html>