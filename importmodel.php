<script>
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

<a-scene>
  <a-assets>
    <a-asset-item id="cityModel" src="3d/Hovering drone.glb"></a-asset-item>
  </a-assets>
  <a-entity gltf-model="#cityModel" modify-materials></a-entity>
 </a-scene> 




