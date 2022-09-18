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
	<a-scene>
		<a-box color="" position="-1 1.25 -2" rotation="45 45 45" height="1" radius="99" width="1" 
			src="img/test.jpg" id="box" animation="property: object3D.position.y; to: 3.2; dir: alternate; dur: 2000; loop: true"
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
<a-light type="ambient" color="blue"> </a-light>
<a-light type="point" color="purple" intensity="2" position="2 4 4" target="#box"> </a-light>












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
    boxEl.setAttribute('scale', {x: 2, y: 2, z: 2});
  });
</script>







</body>
</html>