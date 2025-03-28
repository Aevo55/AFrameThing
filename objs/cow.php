<a-assets>
    <a-asset-item id="cowAsset" src="assets/cow/scene.gltf"></a-asset-item>
    <audio id="moo" src="assets/cow/moo.mp3" preload="auto"></audio>
</a-assets>
<a-entity moo-on-click id="cow" scale="1.5 1.5 1.5" <?php echo $cowPos ?>>
    <a-gltf-model 
    animation-mixer="clip: *;" 
    position="-8.6796 0.9032 -0.16469" 
    scale="0.01 0.01 0.01" 
    rotation="0 0 0" 
    src='#cowAsset'></a-gltf-model>
    <a-entity id="cowMoo" sound="src: #moo"></a-entity>
</a-entity>
