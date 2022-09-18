<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>class</title>
	<link rel="stylesheet" type="text/css" href="aframe/aframe.js">
	<script type="text/javascript" src="aframe.js"></script>
	<script type="text/javascript" src="aframe.min.js"></script>
	<script type="text/javascript" src="env.js"></script>
</head>
<body>
<!-- okay we first start with a-scene -->
<!-- in position d first is X den Y and Z -->  <!--  X pushes left or right, Y pushes up or down , Z pushes away or to you -->
<a-assets>
	<img src="img/test.jpg" id="texture">
	 <!-- this is how u add texture -->
</a-assets>
	<a-scene>
		<a-box color="" position="0 2 -5n" rotation="45 45 45" height="1" radius="99" width="1" 
			src="img/test.jpg"
			animation="property: object3D.position.y; to: 2.2; dir: alternate; dur: 2000; loop: true"
		>
			

			<!-- today we will use a-animation tag -->
			<a-animation

				attribute="rotation" repeat="indefinite" to="0 360 0" autoplay="true" animation="property: position;"
			>
				
			</a-animation>
		</a-box>
	</a-scene>

</body>
</html>