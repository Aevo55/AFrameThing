<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>DFrame</title>
     
     <link rel="stylesheet" href="style/ua-reset.css">
     <link rel="stylesheet" href="style/normalize.css">
     <link rel="stylesheet" href="style/style.css">

     <script src="https://aframe.io/releases/1.7.0/aframe.min.js"></script>
     <script src="https://cdn.jsdelivr.net/gh/c-frame/aframe-physics-system@v4.2.3/dist/aframe-physics-system.min.js"></script>
     <script src="https://cdn.jsdelivr.net/gh/c-frame/aframe-extras@7.5.4/dist/aframe-extras.min.js"></script>
     <script src="https://unpkg.com/aframe-environment-component@1.5.x/dist/aframe-environment-component.min.js"></script>
     <?php //<script src="https://cdn.jsdelivr.net/gh/c-frame/aframe-cursor-teleport@1.6.0/dist/aframe-cursor-teleport-component.min.js"></script>?>

     <script defer src="scripts/main.js"></script>
</head>
     

<body>
<a-scene>
     <?php include 'objs/environment.php'; ?>
     <!-- camera rig -->
     <?php include 'objs/cameraOrion.php'; ?>

     <!-- collidable entity -->
     <a-entity class="collision" position="0 0.05 0" geometry="primitive: box; width: 8; height: 0.1; depth: 8" material="shader: standard; visible: false"></a-entity>

     <!-- Cow Sign -->
     <?php $cowSignPos = "position='-.5 0 -2.5' rotation='0 20 0'"; include 'objs/cowSign.php'; ?>
     
     <!-- Cow -->
     <?php $cowPos = "position='3.5 0 3' rotation='0 -160 0'"; include 'objs/cow.php'; ?>

     <!-- Big Buton -->
     <?php $buttonPos = "position='0.8 0 1.5' rotation='0 25 0'"; include "objs/BigButton.php"; ?>

     <!-- UFO -->
     <?php $ufoPos = "position='1 1.5 -1' rotation = '0 0 0'"; include "objs/ufo.php"; ?>
</a-scene>
</body>
</html>


<?php /*
+ Create a new A-Frame scene in a new HTML file from the "Hello, WebVR!" demo 
- Add at least 10 new Primitive Elements to the scene utilizing at least 5 different geometric shapes (e.g. sky, plane, cylinder, box, sphere, and/or cone).
- Implement at least 3 examples of the A-Frame Animation component to animate one of your primitive shapes.
+ Add at least two text objects using an a-text entity
+ Utilize the A-Frame Asset Management system to preload and implement multiple image textures.
? Add custom lighting to override default lighting 
+ Add at least one 3D model to your scene using the glTF model primitive
+ Add at least one sound object to your scene using the sound primitive
+ Implement the A-Frame Camera and Curser components 
+ Add at least one example of handling an interactive mouse/controller click or rollover event with a JavaScript component
*/
?>