<a-assets>
    <img id="signArrow" src="assets/sign/arrow.png"></a-asset-item>
</a-assets>

<a-entity id="cowSign" <?php echo $cowSignPos; ?>>
    <a-box color="#642" scale="0.15 4 0.15" rotation="0 0 0"></a-box>
    <a-box color="#CCC" position="0 1.5 0.125" scale="2 0.8 .05" rotation="0 0 0"></a-box>
    <a-entity position="0 1.5 .15">
        <a-text value="Cow Abduction" position="0 .25 0" baseline="center" align="center" color="#000" font="mozillavr"></a-text>
        <a-text value="Training" position="0 -.05 0" baseline="center" align="center" color="#000" font="mozillavr"></a-text>
    </a-entity>
    <a-box color="#CCC" position="0 0.8 0.125" scale="0.99 0.4 0.05"></a-box>
    <a-image src="#signArrow" position="-0.030 0.81 0.155" transparent="true" rotation="0 0 90" scale="0.71 1.22 1"></a-image>
</a-entity>