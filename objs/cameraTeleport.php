<a-entity id="cameraRig"cursor-teleport="cameraRig: #cameraRig; cameraHead: #head; collisionEntities: .collision; ignoreEntities: .clickable">
    <a-entity id="head" position="0 1.6 0" camera look-controls="reverseMouseDrag: true"></a-entity>
    <a-entity laser-controls="hand: left" raycaster="objects: .clickable; far: 100" line="color: red; opacity: 0.75" blink-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
    <a-entity laser-controls="hand: right" raycaster="objects: .clickable" line="color: red; opacity: 0.75" blink-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
</a-entity>