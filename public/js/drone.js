/* public/js/drone.js */
(function(){
  const demo = document.getElementById('droneDemo');
  if(!demo) return;
  let processing=false;
  let timeoutReset = null;

  function startProcessing(duration = 10000) {
    if (processing) return;
    processing = true;
    demo.classList.add('s--processing');
    const endListener = document.createElement('div');
    endListener.className = 'demo-transitionend-listener';
    demo.appendChild(endListener);

    endListener.addEventListener('transitionend', function onEnd() {
      if (!processing) return;
      demo.classList.add('s--reverting');
    });

    timeoutReset = setTimeout(() => { stopProcessing(); }, duration);
  }

  function stopProcessing() {
    if (!processing) return;
    processing = false;
    demo.classList.remove('s--processing','s--reverting');
    const el = demo.querySelector('.demo-transitionend-listener');
    if (el) demo.removeChild(el);
    if (timeoutReset) { clearTimeout(timeoutReset); timeoutReset = null; }
  }

  demo.addEventListener('click', () => startProcessing());
  demo.addEventListener('keydown', (e) => { if(e.key==='Enter' || e.key===' ') startProcessing(); });

  window.DroneButton = { startProcessing, stopProcessing };
})();
