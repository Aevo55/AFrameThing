<a-assets>
     <img id="alienImg" src="assets/alien/alien2.png">
</a-assets>
<a-entity id="ufoEnt" 
ufoEvent
position="-184.049 3 146.390"
rotation="0 127.35075616593295 0" 
scale="2.67064 2.67064 2.67064">
     <a-entity rotation="0 0 -15">
          <a-entity geometry="
          primitive: cone; 
          height: 0.15; 
          radiusBottom: 0.3; 
          radiusTop:0.6;"
          position="0 -0.075 0"
          material="color: #77B"
          ></a-entity>
          <a-entity geometry="
          primitive: cone; 
          height: 0.15; 
          radiusBottom: 0.6; 
          radiusTop: 0.3;"
          position="0 0.075 0"
          material="color: #77B"
          ></a-entity>
          <a-entity geometry="
          primitive: sphere;
          radius: 0.35;
          thetaStart: 0;
          thetaLength: 90;"
          position="0 0.075 0"
          material="src: #alienImg"
          ></a-entity>
          <a-entity id="ufoLight" visible="false" position="0 -0.15 0" rotation="-73.776 -98.067 156.840" light="type: spot; intensity: 35; color: #0F0; penumbra: 0.15; angle: 40; decay: 0.1; distance: 0;"></a-entity>
     </a-entity>
</a-entity>

<?php 
//position="175.091 83.30678 214.65159"
//position="3.62692 3.75486 3.15684"
?>