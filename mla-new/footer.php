<footer class="site-footer style-1 bg-light b-1">


  <style>
    @media only screen and (max-width:768px) {
      .textmbcenters {
        text-align: center;
      }
    }


    /* CSS Multiple Whatsapp Chat */
    .whatsapp-name {
      font-size: 16px;
      font-weight: 600;
      padding-bottom: 0;
      margin-bottom: 0;
      line-height: 0.5;
    }

    #whatsapp-chat {
      box-sizing: border-box !important;
      background: #fff;
      outline: none !important;
      position: fixed;
      width: 350px;
      border-radius: 10px;
      box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
      bottom: 90px;
      right: 30px;
      overflow: hidden;
      z-index: 99;
      animation-name: showchat;
      animation-duration: 1s;
      transform: scale(1);
    }

    a.blantershow-chat {
      /*   background: #009688; */
      background: #fff;
      color: #404040;
      position: fixed;
      display: flex;
      font-weight: 400;
      justify-content: space-between;
      z-index: 98;
      bottom: 25px;
      right: 30px;
      font-size: 15px;
      padding: 10px 20px;
      border-radius: 30px;
      box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
    }

    a.blantershow-chat-1 {
      /*   background: #009688; */
      background: #fff;
      color: #404040;
      position: fixed;
      display: flex;
      font-weight: 400;
      z-index: 100;
      justify-content: space-between;
      z-index: 98;
      bottom: 25px;
      right: 200px;
      font-size: 15px;
      padding: 10px 20px;
      border-radius: 30px;
      box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
    }

    a.blantershow-chat svg {
      transform: scale(1.2);
      margin: 0 10px 0 0;
    }

    .header-chat {
      /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
      background: #009688;
      background: #095e54;
      color: #fff;
      padding: 20px;
    }

    .header-chat h3 {
      margin: 0 0 10px;
    }

    .header-chat p {
      font-size: 14px;
      line-height: 1.7;
      margin: 0;
    }

    .info-avatar {
      position: relative;
    }

    .info-avatar img {
      width: 50px;
      float: left;
      margin: 0 10px 0 0;
    }

    a.informasi {
      padding: 20px;
      display: block;
      overflow: hidden;
      animation-name: showhide;
      animation-duration: 0.5s;
    }

    a.informasi:hover {
      background: #f1f1f1;
    }

    .info-chat span {
      display: block;
    }

    #get-label,
    span.chat-label {
      font-size: 12px;
      color: #888;
    }

    #get-nama,
    span.chat-nama {
      margin: 5px 0 0;
      font-size: 15px;
      font-weight: 700;
      color: #222;
    }

    #get-label,
    #get-nama {
      color: #fff;
    }

    span.my-number {
      display: none;
    }

    /* .blanter-msg {
  color: #444;
  padding: 20px;
  font-size: 12.5px;
  text-align: center;
  border-top: 1px solid #ddd;
} */
    .blanter-msg {
      padding: 20px;
      text-align: center;
    }
.form-controls{
    margin-top:15px !important;
}
    input#chat-input,
    .form-controls{
      width: 100%;
      display: block;
      margin: auto;
      border: 1px solid #c9c9c9;
      height: 40px;
      border-radius: 20px;
      outline: none;
      resize: none;
      padding: 10px;
      font-size: 14px;
    }

    a#send-it {
      width: 30px;
      font-weight: 700;
      padding: 10px 10px 0;
      background: #eee;
      border-radius: 10px;

      svg {
        fill: #a6a6a6;
        height: 24px;
        width: 24px;
      }
    }

    .first-msg {
      background: transparent;
      padding: 30px;
      text-align: center;

      & span {
        background: #e2e2e2;
        color: #333;
        font-size: 14.2px;
        line-height: 1.7;
        border-radius: 10px;
        padding: 15px 20px;
        display: inline-block;
      }
    }


    #get-number {
      display: none;
    }

    a.close-chat {
      position: absolute;
      top: 5px;
      right: 15px;
      color: #fff;
      font-size: 16px;

    }

    @keyframes ZpjSY {
      0% {
        background-color: rgb(182, 181, 186);
      }

      15% {
        background-color: rgb(17, 17, 17);
      }

      25% {
        background-color: rgb(182, 181, 186);
      }
    }

    @keyframes hPhMsj {
      15% {
        background-color: rgb(182, 181, 186);
      }

      25% {
        background-color: rgb(17, 17, 17);
      }

      35% {
        background-color: rgb(182, 181, 186);
      }
    }

    @keyframes iUMejp {
      25% {
        background-color: rgb(182, 181, 186);
      }

      35% {
        background-color: rgb(17, 17, 17);
      }

      45% {
        background-color: rgb(182, 181, 186);
      }
    }


    @keyframes showhide {
      from {
        transform: scale(0.5);
        opacity: 0;
      }
    }

    @keyframes showchat {
      from {
        transform: scale(0);
        opacity: 0;
      }
    }

    @media screen and (max-width: 480px) {
      #whatsapp-chat {
        width: auto;
        left: 5%;
        right: 5%;
        font-size: 80%;
      }
    }

    .hide {
      display: none;
      animation-name: showhide;
      animation-duration: 0.5s;
      transform: scale(1);
      opacity: 1;
    }

    .show {
      display: block;
      animation-name: showhide;
      animation-duration: 0.5s;
      transform: scale(1);
      opacity: 1;
    }

    .whatsapp-message-container {
      display: flex;
      z-index: 1;
    }

    .whatsapp-message {
      padding: 7px 14px 6px;
      background-color: rgb(255, 255, 255);
      border-radius: 0px 8px 8px;
      position: relative;
      transition: all 0.3s ease 0s;
      opacity: 0;
      transform-origin: center top 0px;
      z-index: 2;
      box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
      margin-top: 4px;
      margin-left: -54px;
      max-width: calc(100% - 66px);
    }

    .whatsapp-chat-body {
      padding: 20px 20px 20px 10px;
      background-color: rgb(230, 221, 212);
      position: relative;
    }

    #mywhtasappbutton {
      display: none !important;
    }

    .whatsapp-chat-body::before {
      display: block;
      position: absolute;
      content: "";
      left: 0px;
      top: 0px;
      height: 100%;
      width: 100%;
      z-index: 0;
      opacity: 0.08;
      background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
    }

    .scroltop {
      display: none;
    }

    @media only screen and (min-width:0) and (max-width:768px) {
      a.blantershow-chat {
        right: 160px !important;
        font-size: 13px;
        align-items: center;
      }

      a.blantershow-chat-1 {
        right: 7px !important;
        font-size: 13px;
        align-items: center;
      }
    }

    .dAbFpq {
      display: flex;
      z-index: 1;
    }

    .eJJEeC {
      background-color: rgb(255, 255, 255);
      width: 52.5px;
      height: 32px;
      border-radius: 16px;
      display: flex;
      -moz-box-pack: center;
      justify-content: center;
      -moz-box-align: center;
      align-items: center;
      margin-left: 10px;
      opacity: 0;
      transition: all 0.1s ease 0s;
      z-index: 1;
      box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
    }

    .hFENyl {
      position: relative;
      display: flex;
    }

    .ixsrax {
      height: 5px;
      width: 5px;
      margin: 0px 2px;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      animation-duration: 1.2s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
      top: 0px;
      background-color: rgb(158, 157, 162);
      animation-name: ZpjSY;
    }

    .dRvxoz {

      height: 5px;
      width: 5px;
      margin: 0px 2px;
      background-color: rgb(182, 181, 186);
      border-radius: 50%;
      display: inline-block;
      position: relative;
      animation-duration: 1.2s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
      top: 0px;
      animation-name: hPhMsj;
    }

    .kAZgZq {
      padding: 7px 14px 6px;
      background-color: rgb(255, 255, 255);
      border-radius: 0px 8px 8px;
      position: relative;
      transition: all 0.3s ease 0s;
      opacity: 0;
      transform-origin: center top 0px;
      z-index: 2;
      box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
      margin-top: 4px;
      margin-left: -54px;
      max-width: calc(100% - 66px);

      &::before {
        position: absolute;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: contain;
        content: "";
        top: 0px;
        left: -12px;
        width: 12px;
        height: 19px;
      }
    }

    #mybutton {
      display: none !important;
    }

    .bMIBDo {
      font-size: 13px;
      font-weight: 700;
      line-height: 18px;
      color: rgba(0, 0, 0, 0.4);
    }

    .iSpIQi {
      font-size: 14px;
      line-height: 19px;
      margin-top: 4px;
      color: rgb(17, 17, 17);
    }

    .iSpIQi {
      font-size: 14px;
      line-height: 19px;
      margin-top: 4px;
      color: rgb(17, 17, 17);
    }

    .cqCDVm {
      text-align: right;
      margin-top: 4px;
      font-size: 12px;
      line-height: 16px;
      color:
        rgba(17, 17, 17, 0.5);
      margin-right: -8px;
      margin-bottom: -4px;
    }

    .btn-whatsapp {
      background-color: #4dc247;
      width: 100%;
      border: none;
      margin: auto;
      text-align: center;
      color: #fff;
      padding: 8px 10px;
      border-radius: 18px;
      margin-top: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    .blantershow-chat-1 img {
      width: 20px;
      margin-right: 10px;
    }

    #whtasappbtn {
      display: none;

      background-color: #4dc247;
      border: none;
      margin: auto;
      text-align: center;
      color: #fff;
      padding: 8px 10px;
      border-radius: 18px;
      margin-top: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    @media only screen and (min-width:360px) and (max-width:768px) {
      .iSpIQi {
        font-size: 17px;
      }
    }

    #invalidno {
      display: none;
      color: red;
      text-align: center;
      /*font-size: 17px;*/
    }
  </style>

  <div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
      <div class='head-home'>
        <div class='info-avatar'><img width="180px" height="109px" src='https://www.mlagroup.com/images/mla-logo.webp' alt="MLA Group" /></div>
        <p><span class="whatsapp-name">MLA Group</span><br></p>

      </div>
      <div class='get-new hide'>
        <div id='get-label'></div>
        <div id='get-nama'></div>
      </div>
    </div>
    <div class='home-chat'>

    </div>
    <div class='start-chat'>
      <div pattern="img\whatsapp.png " class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
        <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
          <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
            <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
              <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
              <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
              <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
            </div>
          </div>
          <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
            <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">MLA Group</div>
            <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there<br><br>How can I help you?</div>
            <!--<div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>-->
          </div>
        </div>
      </div>

      <div class='blanter-msg'>
        <input id='chat-input' placeholder="Submit Your Number" maxlength='120' row='1'>
        <small id="invalidno">Please fill correct number</small>
        <input class="form-controls" id="companynamev" placeholder="Company Name">
        <small style="color:red" id="companynameerr"></small>
          <input class="form-controls" id="countrynamev" placeholder="Country Name">
            <small style="color:red" id="countrynameerr"></small>
        <input type="hidden" value="" id="contact-method">
        <button id="submit-whatsapp" class="btn-whatsapp">Connect On Whatsapp</button>
        <div>
          <a rel="noreferrer" id="whtasappbtn" href="https://api.whatsapp.com/send?phone=919336116592&amp;text=Hi" class="float" target="_blank">Start Chat</a>
        </div>
      </div>
    </div>
    <div id='get-number'></div><a class='close-chat' href='javascript:void'>Close</a>
  </div>
  <a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24">
      <defs />
      <path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
      <path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
      <path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
    </svg> Chat with Us</a>


  <a class="blantershow-chat-1 GAFloatCallButton" href="javascript:void" title="Show Chat"><img src="images/telephone.webp" alt="call now"> Call Us Now</a>


  <style>
    .anu-hed {
      font-size: 1.125rem;
      color: var(--title);
    }
  </style>
  <!-- Footer Top -->
  <div class="footer-top">
    <div class="container">
      <div class="row ">
        <div class="col-xl-5 col-md-3 col-sm-6 textmbcenters">
          <div class="widget widget_about me-2">
            <div class="footer-logo logo-white">
              <a href="/"><img src="images/mla-logo.webp" alt="Footer Logo
"></a>
            </div>
            <ul class="widget-address">
              <li>
                <p><span>Address</span> : 111/230, Harsh Nagar, Kanpur-208012 (INDIA) </p>
              </li>
              <li>
                <p><span>E-mail</span> :<a href="mailto:md@mlagroup.com"> md@mlagroup.com</a>
                </p>
              </li>
              <li>
                <p><span>Phone</span> : <a href="tel:+91-9336116592">+91-9336116592 </a></p>
              </li>
            </ul>

          </div>
        </div>

        <div class="col-xl-3 col-md-3 col-sm-4 col-6">
          <div class="widget widget_services">
            <p class="footer-title anu-hed">Quick Links</p>
            <ul>
              <li><a class="bleft" href="/">Home</a></li>
              <li><a class="bleft" href="about">About Us</a></li>
              <li><a class="bleft" href="r-and-d">R & D</a></li>
              <li><a class="bleft" href="qc">quality</a></li>
              <li><a class="bleft" href="manufacturing">Manufacturing</a></li>
              <li><a href="contactus">Contact Us</a></li>

            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-4 col-6">
          <div class="widget widget_services">
            <p class="footer-title text-center anu-hed" style="text-transform: uppercase;">We exhibit at</p>
            <div class="section-inner">

              <div class="row gx-3 companies-inner ">
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp " data-wow-delay="0.1s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/veitnamplas.webp" alt="Vietnamplas
" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.2s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/chinaplas.webp" alt="Chinaplas" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.3s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/arab-plast.webp" alt="Arab Plast
" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.4s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/make-the-difference.webp" alt="Make the Difference
" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/kenya-plast.webp" alt="Kenya Plast" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/plast-india.webp" alt="Plast India" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/plastvision.webp" alt="Plast Vision" class="logo-foot">
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/india-rubber-expo.webp" alt="India Rubber Expo" class="logo-foot">
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img height="43" width="94" src="images/cphlindia.webp" alt="CPHL India" class="logo-foot">
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Footer Top End -->

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row fb-inner">
        <div class="col-lg-12 col-md-12 text-start">
          <p class="copyright-text">Copyright © MLA Group of Industries <?php echo date("Y"); ?> </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Footer Bottom End -->

</footer>
<!-- Footer End -->

<!-- <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button> -->


</div>


<!-- JAVASCRIPT FILES ========================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script defer src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<!-- <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>BOOTSTRAP SELECT MIN JS -->
<!-- <script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script>BOOTSTRAP TOUCHSPIN JS -->

<script defer src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<!-- <script src="vendor/counter/counterup.min.js"></script>COUNTERUP JS -->

<script defer src="vendor/swiper/swiper-bundle.min.js"></script>
<!-- <script src="vendor/imagesloaded/imagesloaded.js"></script>IMAGESLOADED -->
<!-- <script src="vendor/masonry/masonry-4.2.2.js"></script>MASONRY -->
<!-- <script src="vendor/masonry/isotope.pkgd.min.js"></script>ISOTOPE -->
<!-- <script src="vendor/countdown/jquery.countdown.js"></script>COUNTDOWN FUCTIONS  -->
<!-- <script src="vendor/wnumb/wNumb.js"></script>WNUMB -->

<!-- <script src="vendor/nouislider/nouislider.min.js"></script> -->

<script defer src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<!-- <script src="vendor/lightgallery/dist/lightgallery.min.js"></script> -->
<!-- <script src="vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script> -->
<!-- <script src="vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script> -->
<!-- <script src="js/dz.ajax.js"></script>AJAX -->
<script defer src="js/custom.js"></script><!-- CUSTOM JS -->


<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->

<script>
  // document.addEventListener("DOMContentLoaded", function (event) {
  //     setTimeout(function () {
  //         document.getElementById('typing-text').style.animationPlayState = 'running';
  //     }, 1000); // Delaying animation start by 1 second

  $("#chat-input").on('keyup', function() {

    let phonnumber = $(this).val();
    console.log(phonnumber.length);
    var regx = /^[6-9]\d{9}$/;
    if (phonnumber.length == "10") {

      if (regx.test(phonnumber)) {
        var contactmethod = $('#contact-method').val();
        if (contactmethod == 'call') {
          $("#submit-whatsapp").addClass("GAFloatCallButton")
          $("#submit-whatsapp").removeClass("GAFloatWAppButton")


        }
        if (contactmethod == 'whatsapp') {
          $("#submit-whatsapp").addClass("GAFloatWAppButton")
          $("#submit-whatsapp").removeClass("GAFloatCallButton")
        }
      }
    } else {
      $("#submit-whatsapp").removeClass("GAFloatCallButton")
      $("#submit-whatsapp").removeClass("GAFloatWAppButton")
    }
  })



  $('#submit-whatsapp').on('click', function() {
        var isValid = true;
    const pageUrl = window.location.href;
     var nameRegex = /^[A-Za-z\s]+$/;
       var phone = document.getElementById("chat-input").value;
              var regx = /^(\+?\d{1,3})?[6-9]\d{6,14}$/;
     var companynamev = document.querySelector("#companynamev");
     var companynameerr = document.querySelector("#companynameerr");
     var countrynamev = document.querySelector("#countrynamev");
     var countrynameerr = document.querySelector("#countrynameerr");
     
      if (!regx.test(phone)) {
            $("#invalidno").show();
      }
      else{
         $("#invalidno").hide(); 
      }
      
        if (companynamev.value.trim() === '') {
                companynameerr.textContent = 'Please enter company name';
                isValid = false;
            } else if (!nameRegex.test(companynamev.value.trim())) {
                companynameerr.textContent = 'Please enter company name';
                isValid = false;
            } else {
               companynameerr.textContent = ''; // Clear the error if validation passes
            }
     
      if (countrynamev.value.trim() === '') {
                countrynameerr.textContent = 'Please enter country name';
                isValid = false;
            } else if (!nameRegex.test(countrynamev.value.trim())) {
                countrynameerr.textContent = 'Please enter country name';
                isValid = false;
            } else {
               countrynameerr.textContent = ''; // Clear the error if validation passes
            }
            
           
    
 
  
    if (regx.test(phone) && isValid) {
      $("#invalidno").hide();
      var contactmethod = $('#contact-method').val();

      // Ensure a product is selected
    var ctname = countrynamev.value;
     var cpname = companynamev.value;

      //   alert(phone);
      $.ajax({
        url: "https://www.mlagroup.com/contact-us-submit-floater",
        method: "post",
        data: {
          phone: phone,
          contactmethod: contactmethod,
          pageUrl: pageUrl,
          companynamev:cpname,
          countrynamev:ctname,
          
          action: 'phone-number-submit'
        },
        beforeSend: function() {
          // setting a timeout
          $("#submit-whatsapp").attr("disabled", true);
          $("#submit-whatsapp").text("Sending......")
        },
        success: function(data) {
          if (data == 'success') {

            $('#chat-input').hide();
            // $('#whtasappbtn').css('display', 'block');
            $('#submit-whatsapp').hide();
            var contactmethod = $('#contact-method').val();
            if (contactmethod == 'call') {

              location.href = "tel:9140908101";

            }
            if (contactmethod == 'whatsapp') {
              location.href = "https://api.whatsapp.com/send?phone=919140908101&amp;text=Hi";
            }
            if (contactmethod == 'call2') {
              location.href = "tel:9140908101";
            }
            if (contactmethod == 'whatsappfootercontact') {
              location.href = "https://api.whatsapp.com/send?phone=919140908101&amp;text=Hi";
            }
          }
          if (data == 'error') {
            alert("Some error occured");
          }
          if (data == 'exist') {
            alert("You already submitted a request! Soon we'll get in touch with you");
          }
        }

      });
    } 
  });


  $(document).on("click", ".close-chat", function() {
      $("#whatsapp-chat")
        .addClass("hide")
        .removeClass("show");
    }),

    $(document).on("click", ".blantershow-chat-1", function() {
      $("#whatsapp-chat")
        .addClass("show")
        .removeClass("hide");
      $('#submit-whatsapp').removeClass("GAFloatWAppButton");
      $('#submit-whatsapp').removeClass("GAFloatCallButton");
      $("#contact-method").val("call");

      var contactmethod = $('#contact-method').val();

      let phonnumber = $("#chat-input").val();


      if (phonnumber.length > "6" && phonnumber.length < "15") {
        $('#submit-whatsapp').addClass("GAFloatCallButton");
      }

      if (contactmethod == 'call') {
        $('#submit-whatsapp').text("Connect On Call");
        $('.header-chat').css('background', 'rgb(113 107 100)');
        $('.btn-whatsapp').css('background', 'rgb(76 75 73)');
        $('.whatsapp-chat-body').css('display', 'none');
      } else {
        $('#submit-whatsapp').text("Connect On Whatsapp");
        $('.header-chat').css('background', '#095e54');
        $('.btn-whatsapp').css('background', '#4dc247');
        $('.whatsapp-chat-body').css('display', 'block');
      }

    });
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
    $("#contact-method").val("whatsapp");
    var contactmethod = $('#contact-method').val();
    $('#submit-whatsapp').removeClass("GAFloatWAppButton");
    $('#submit-whatsapp').removeClass("GAFloatCallButton");

    var contactmethod = $('#contact-method').val();

    let phonnumber = $("#chat-input").val();

    if (phonnumber.length == "10") {
      $('#submit-whatsapp').addClass("GAFloatWAppButton");
    }

    if (contactmethod == 'call') {
      $('#submit-whatsapp').text("Connect On Call");
      $('.header-chat').css('background', 'rgb(113 107 100)');
      $('.btn-whatsapp').css('background', 'rgb(76 75 73)');
      $('.whatsapp-chat-body').css('display', 'none');
    } else {
      $('#submit-whatsapp').text("Connect On Whatsapp");
      $('.header-chat').css('background', '#095e54');
      $('.btn-whatsapp').css('background', '#4dc247');
      $('.whatsapp-chat-body').css('display', 'block');
    }
  });

  $('.popupone').on('click', function() {
    var number = $(this).text();
    $("#mynumberone").val(number);
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
    $('#submit-whatsapp').removeClass("GAFloatWAppButton");
    $('#submit-whatsapp').removeClass("GAFloatCallButton");
    $("#contact-method").val("call");

    var contactmethod = $('#contact-method').val();

    let phonnumber = $("#chat-input").val();


    if (phonnumber.length > "6" && phonnumber.length < "15") {
      $('#submit-whatsapp').addClass("GAFloatCallButton");
    }


    if (contactmethod == 'call') {
      $('#submit-whatsapp').text("Connect On Call");
      $('.header-chat').css('background', 'rgb(113 107 100)');
      $('.btn-whatsapp').css('background', 'rgb(76 75 73)');
      $('.whatsapp-chat-body').css('display', 'none');
    }

  });

  $('.whatsapp-footer-contact').on('click', function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
    $("#contact-method").val("whatsappfootercontact");
    var contactmethod = $('#contact-method').val();
    if (contactmethod == 'whatsappfootercontact') {
      $('#submit-whatsapp').text("Connect On Whatsapp");
      $('.header-chat').css('background', '#095e54');
      $('.btn-whatsapp').css('background', '#4dc247');
      $('.whatsapp-chat-body').css('display', 'block');
    }

  });

  $(document).on("click", ".rahul1", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
    $('#submit-whatsapp').removeClass("GAFloatWAppButton");
    $('#submit-whatsapp').removeClass("GAFloatCallButton");
    $("#contact-method").val("call");

    var contactmethod = $('#contact-method').val();

    let phonnumber = $("#chat-input").val();


    if (phonnumber.length > "6" && phonnumber.length < "15") {
      $('#submit-whatsapp').addClass("GAFloatCallButton");
    }

    if (contactmethod == 'call') {
      $('#submit-whatsapp').text("Connect On Call");
      $('.header-chat').css('background', 'rgb(113 107 100)');
      $('.btn-whatsapp').css('background', 'rgb(76 75 73)');
      $('.whatsapp-chat-body').css('display', 'none');
    } else {
      $('#submit-whatsapp').text("Connect On Whatsapp");
      $('.header-chat').css('background', '#095e54');
      $('.btn-whatsapp').css('background', '#4dc247');
      $('.whatsapp-chat-body').css('display', 'block');
    }

  });
  $(document).on("click", ".wapopup", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
    $("#contact-method").val("whatsapp");
    var contactmethod = $('#contact-method').val();
    $('#submit-whatsapp').removeClass("GAFloatWAppButton");
    $('#submit-whatsapp').removeClass("GAFloatCallButton");

    var contactmethod = $('#contact-method').val();

    let phonnumber = $("#chat-input").val();

    if (phonnumber.length > "6" && phonnumber.length < "15") {
      $('#submit-whatsapp').addClass("GAFloatWAppButton");
    }

    if (contactmethod == 'call') {
      $('#submit-whatsapp').text("Connect On Call");
      $('.header-chat').css('background', 'rgb(113 107 100)');
      $('.btn-whatsapp').css('background', 'rgb(76 75 73)');
      $('.whatsapp-chat-body').css('display', 'none');
    } else {
      $('#submit-whatsapp').text("Connect On Whatsapp");
      $('.header-chat').css('background', '#095e54');
      $('.btn-whatsapp').css('background', '#4dc247');
      $('.whatsapp-chat-body').css('display', 'block');
    }
  });


  $(document).ready(function() {
    function animateCounters() {
      $('.counter-value').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 2500,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
    }

    function checkViewport() {
      if ($('.counternew')) {
        if (isElementInViewport($('.counternew')[0])) {
          if (!$('.counternew').hasClass('animated')) {
            $('.counternew').addClass('animated');
            animateCounters();
          }
        } else {
          $('.counternew').removeClass('animated');
        }
      }
    }

    $(window).on('scroll', checkViewport);

    // Trigger the function once in case the element is already in view
    checkViewport();
  });

  function isElementInViewport(el) {
    if (el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  }




  document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        } else {
          entry.target.classList.remove('visible');
        }
      });
    });

    const target = document.querySelector('.zoom-in-up');
    if (target) {
      observer.observe(target);
    }

  });


  // function showYouTubeVideo() {

  //     var youtubeUrl = document.getElementById('ytbplay').getAttribute('data-url');

  //     var iframe = document.createElement('iframe');
  //     iframe.setAttribute('width', '100%');
  //     iframe.setAttribute('height', '315');
  //     iframe.setAttribute('src', 'https://www.youtube.com/embed/' + youtubeUrl);
  //     iframe.setAttribute('frameborder', '0');
  //     iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
  //     iframe.setAttribute('allowfullscreen', '');


  //     document.querySelector('.modal-body').appendChild(iframe);
  // }


  // document.getElementById('ytbplay').addEventListener('click', showYouTubeVideo);


  var swiper = new Swiper('.swiper-container-sliding', {
    direction: 'horizontal',
    loop: true,
    speed: 20000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: true,
    },
    slidesPerView: 'auto',
    spaceBetween: 20,
    allowTouchMove: false,
    effect: 'slide',

  });
</script>


<script>
  var slider = new Swiper(".gallery-slider", {
    slidesPerView: 1,
    loop: true,
    loopedSlides: 6,
    noSwiping: true,
    keyboard: {
      enabled: true
    },

    noSwipingClass: "swiper-slide",
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });

  var thumbs = new Swiper(".gallery-thumbs", {
    slidesPerView: "auto",
    spaceBetween: 10,
    centeredSlides: false,
    loop: true,
    slideToClickedSlide: true
  });

  slider.controller.control = thumbs;
  thumbs.controller.control = slider;
</script>

<script>
  window.addEventListener('load', function() {
    function animateCounters(counterElements) {
      const totalDuration = 2000; // Total duration for all counters in milliseconds

      counterElements.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const startTime = performance.now();

        function updateCount(currentTime) {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / totalDuration, 1); // Progress ranges from 0 to 1
          const currentCount = Math.ceil(progress * target);

          counter.innerText = currentCount;

          if (progress < 1) {
            requestAnimationFrame(updateCount); // Continue the animation
          } else {
            counter.innerText = target; // Ensure the counter reaches the target exactly
          }
        }

        requestAnimationFrame(updateCount);
      });
    }

    function resetCounters(counterElements) {
      counterElements.forEach(counter => {
        counter.innerText = '0';
      });
    }

    let options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.5
    };

    let observer = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            const counters = entry.target.querySelectorAll('.counter');
            resetCounters(counters);
            animateCounters(counters);
          }, 500); // Adjust this to match your wow.js delay
        } else {
          const counters = entry.target.querySelectorAll('.counter');
          resetCounters(counters);
        }
      });
    }, options);

    let counterSection = document.querySelector('#counter-section');
    if (counterSection) {
      observer.observe(counterSection);
    }

  });
</script>



</body>



</html>