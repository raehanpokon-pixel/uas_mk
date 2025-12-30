<!-- resources/views/components/drone-button.blade.php -->
<div id="droneDemoWrapper">
  <div class="demo" id="droneDemo" role="button" aria-pressed="false" tabindex="0">
    <div class="demo_drone-cont demo_drone-cont--takeoff">
      <div class="demo_drone-cont demo_drone-cont--shift-x">
        <div class="demo_drone-cont demo_drone-cont--landing">
          <svg viewBox="0 0 136 112" class="demo__drone" aria-hidden="true">
            <g class="demo__drone-leaving">
              <path class="demo__drone-arm" d="M52,46 c0,0 -15,5 -15,20 l15,10" />
              <path class="demo_drone-arm demo_drone-arm--2" d="M52,46 c0,0 -15,5 -15,20 l15,10" />
              <path class="demo__drone-yellow"
                d="M28,36 l20,0 a20,9 0,0,1 40,0 l20,0 l0,8 l-10,0 c-10,0 -15,0 -23,10 l-14,0 c-10,-10 -15,-10 -23,-10 l-10,0z" />
              <path class="demo__drone-green" d="M16,12 a10,10 0,0,1 20,0 l-10,50z" />
              <path class="demo__drone-green" d="M100,12 a10,10 0,0,1 20,0 l-10,50z" />
              <path class="demo__drone-yellow" d="M9,8 l34,0 a8,8 0,0,1 0,16 l-34,0 a8,8 0,0,1 0,-16z" />
              <path class="demo__drone-yellow" d="M93,8 l34,0 a8,8 0,0,1 0,16 l-34,0 a8,8 0,0,1 0,-16z" />
            </g>
            <path class="demo_drone-package demo_drone-green" d="M50,70 l36,0 l-4,45 l-28,0z" />
          </svg>
        </div>
      </div>
    </div>
    <div class="demo__circle" aria-hidden="true">
      <div class="demo__circle-inner">
        <svg viewBox="0 0 16 20" class="demo__circle-package">
          <path d="M0,0 16,0 13,20 3,20z" />
        </svg>
        <div class="demo__circle-grabbers"></div>
      </div>
      <svg viewBox="0 0 40 40" class="demo__circle-progress" aria-hidden="true">
        <path class="demo__circle-progress-line" d="M20,0 a20,20 0 0,1 0,40 a20,20 0 0,1 0,-40" />
        <path class="demo__circle-progress-checkmark" d="M14,19 19,24 29,14" />
      </svg>
    </div>
    <div class="demo__text-fields" aria-hidden="true">
      <div class="demo_text demo_text--step-0">Checkout</div>
      <div class="demo_text demo_text--step-1">Processing <span class="demo__text-dots"><span>.</span></span></div>
      <div class="demo_text demo_text--step-2">Delivering <span class="demo__text-dots"><span>.</span></span></div>
      <div class="demo_text demo_text--step-3">It's on the way</div>
      <div class="demo_text demo_text--step-4">Delivered</div>
    </div>
    <div class="demo__revert-line"></div>
  </div>
</div>
