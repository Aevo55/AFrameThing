<a-entity id="camera-rig" rotation="0 0 0">
    <a-camera wasd-controls="enabled: true">
        <a-cursor color="#c00" opacity=".25"></a-cursor>
    </a-camera>
    <!-- Hand Controllers for VR -->
    <a-entity laser-controls="hand: right" raycaster="showLine: true; far: 50; lineColor: red; lineOpacity: 0.5"></a-entity>
</a-entity>