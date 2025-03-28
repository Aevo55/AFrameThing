//Dawson Gilmore
AFRAME.registerComponent('random-color', {
   dependencies: ['material'],
 
   init: function () {
     // Set material component's color property to a random color.
     this.el.setAttribute('material', 'color', getRandomColor());
   }
 });
 
 function getRandomColor() {
   const letters = '0123456789ABCDEF';
   var color = '#';
   for (var i = 0; i < 6; i++ ) {
     color += letters[Math.floor(Math.random() * 16)];
   }
   return color;
 }

AFRAME.registerComponent('moo-on-click', {
  init: function () {
    var data = this.data;
    var el = this.el;
    this.el.addEventListener('mousedown', function () {
      el.querySelector("#cowMoo").components.sound.playSound();
    });
  }
});

AFRAME.registerComponent('glow-on-hover', {
  init: function () {
    var data = this.data;
    var el = this.el;
    this.el.addEventListener('mouseenter', function () {
      el.components.material.material.emissive.r = 100;
    });
    this.el.addEventListener('mouseleave', function () {
      el.components.material.material.emissive.r = 0;
    });
    el.addEventListener('click', function () {
      el.removeAttribute('animation');
      el.setAttribute('animation', 'property: position; to: 0 0.95 0; dur: 500; direction: alternate; easing: easeInOutBack');
      var ufo = document.getElementById("ufoEnt");
      var ufoLight = document.getElementById("ufoLight");
      ufo.removeAttribute('animation');
      ufoLight.removeAttribute('animation');
      ufo.setAttribute('animation', 'property: position; elasticity: 1000000; to: 3.62692 3.75486 3.15684; dur: 10000; easing: easeOutElastic;')
      ufoLight.setAttribute('animation', 'dir: alternate; property: visible; to: true; dur: 8000;')
      ufoLight.setAttribute('animation__4', 'dir: alternate; property: visible; to: false; delay: 14000')
      ufo.setAttribute('animation__5', 'dir: alternate; property: position; from: 3.62692 3.75486 3.15684; to: 3 100 3; delay: 15000; dur: 10000; easing: easeInSine;')
      var cowObj = document.getElementById("cow");
      cowObj.removeAttribute('animation');
      cowObj.setAttribute('animation', 'delay: 10000; property: position; to: 3.5 2 3; dur: 3000; easing: linear;');
      cowObj.setAttribute('animation__2', 'delay: 10000; property: rotation; to: 359 359 359; dur: 3000; easing: linear;');
      cowObj.setAttribute('animation__3', 'property: visible; to: false; delay: 13000;');
    });
  }
});
