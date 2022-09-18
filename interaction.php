<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>class</title>
	<link rel="stylesheet" type="text/css" href="aframe/aframe.js">
	<script type="text/javascript" src="aframe.js"></script>
	<script type="text/javascript" src="aframe.min.js"></script>
</head>
<body>
<!-- okay we first start with a-scene -->
<!-- in position d first is X den Y and Z -->  <!--  X pushes left or right, Y pushes up or down , Z pushes away or to you -->
<a-assets>
	<img src="img/test.jpg" id="texture">
	 <!-- this is how u add texture -->
</a-assets>
	<a-scene>
		<a-box color="" position="-1 1.25 -2" rotation="45 45 45" height="1" radius="99" width="1" 
			src="img/test.jpg"
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
			
			<a-cursor color="red"></a-cursor> <!-- this adds a cursor -->

		</a-camera>
	</a-scene>

</body>
</html>