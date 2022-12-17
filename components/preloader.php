<style>
      /* Preloader Start */
      .loader{
            display: block;
            width: 100%;
            height: 600vh;
            position: absolute;
            z-index:4;
            background-color:#fff;
            
      }
      .group-loader
      {
            margin-top: 50vh !important;
      }

      .loader span{
            
            width: 32px;
            height: 32px;
            margin: 0 10px;
            border-radius: 50%;
            display: inline-block;
            position: relative;
      }
      .loader span:nth-child(1){ background: #C20C01; }
      .loader span:nth-child(2){ background: #f38200; }
      .loader span:nth-child(3){ background: #f3ef00; }
      .loader span:before{
            content: "";
            background: inherit;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: absolute;
            animation: wave 1.5s ease-out infinite;
      }
      .loader span:nth-child(1):before{ animation-delay: 0.1s; }
      .loader span:nth-child(2):before{ animation-delay: 0.3s; }
      .loader span:nth-child(3):before{ animation-delay: 0.5s; }
      .loader span:nth-child(4):before{ animation-delay: 0.7s; }
      .loader span:nth-child(5):before{ animation-delay: 0.9s; }
            @keyframes wave{
            50%,75%{ transform: scale(2.5); }
            80%,100%{ opacity: 0; }
      }
      /* End Preloader */
</style>

<div id="preloader">
    <div class="loader">
      <div class="group-loader d-flex justify-content-center">
      <span></span>
      <span></span>
      <span></span>
      </div>
  </div>
</div>
  
<script>
    var loader = document.getElementById("preloader");
    var dismissLoadingScreen = function() {
        loader.style.display = "none";
    };
    var wait3seconds = function() {
        var result = setTimeout(dismissLoadingScreen, 3000);
    };
    window.addEventListener("load", wait3seconds);
</script>
