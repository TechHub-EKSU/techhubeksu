<style>
  #loader {
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    margin-top: auto!important;
    margin-bottom: auto!important;
    z-index: 999999;
    color: #fff;
    background: #fdd06779;
    user-select: none;
  }

  .spinner {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: .25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-animation .75s linear infinite;
    animation: spinner-animation .75s linear infinite;
  }

  @keyframes spinner-animation {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
</style>

<div id="loader">
  <h4 class="text-center" style="position: relative; top: 50%">
    <p class="spinner" aria-hidden="true"></p><br>
    Loading...
  </h4>
</div>