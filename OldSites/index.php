<!DOCTYPE html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTFTS5F');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="V_EPtnEJl5UjwCqfRw6vstjWn-G061IvIVML5wIAyeI" />

<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <script src="http://bradweldy.com/space/Scrollify/jquery.scrollify.js"></script> -->

<style>

body{ 
  background: #000; 
  margin: 0px; 
  max-width: 100%;
  overflow-x: hidden;
}
div#banner{
  width: 100%;
  height: 500px;
  margin: 0px auto;
  background-color: #000;
  background-image: url(http://bradweldy.com/space/star2.png), url(http://bradweldy.com/space/star1.png);
  background-position: 0px 0px, 0px 0px;
  background-repeat: no-repeat, repeat-x, repeat-x;
  animation: animate-background linear 30s infinite;
}
@keyframes animate-background {
  from { background-position: 0px 0px, 0px 0px;  } 
  to { background-position: -500px 0px, -1000px 0px; }
}
#planet-marketing {
  margin: 0px auto; 
  position: absolute;
  top: 120px;
  right: -10%;

  animation: space-background-planet linear 30s infinite;
  display: none;
}
#planet-marketing img {
  position: absolute;
  width: 350px;
}
@media (min-width: 768px) {
  #planet-marketing {
    display: block;
  }
}
/*@media (max-width: 767px) {
  #planet-marketing {
    animation: space-background-planet-mob linear 30s infinite;
  }
  #planet-marketing, 
  #planet-marketing img {
    display: none;
  }
}
@media (min-width: 768px) {
  #planet-marketing {
    animation: space-background-planet linear 30s infinite;
  }
}*/
@keyframes space-background-planet {
  from { right: -1%;  } 
  to { right: 120%; }
}
@keyframes space-background-planet-mob {
  from { right: 350px;  } 
  to { right: 90%; }
}
.space-bg {
  width: 100%;
  height: 100%;
  margin: 0px auto;
  background-color: #000;
  background-image: url(http://bradweldy.com/space/star2.png), url(http://bradweldy.com/space/star1.png);
  background-position: 0px 0px, 0px 0px;
  background-repeat: repeat, repeat;
  animation: space-background linear 50s infinite;
}
@keyframes space-background {
  from { background-position: 0px 0px, 0px 0px;  } 
  to { background-position: 0px -500px, 0px -1000px; }
}

#rocket {
  position: absolute;
  top: 0px;
  margin-top: 200px;
  z-index: 10;

  transform: rotate(90deg);
}
#rocket.dock-in-nav {
  text-align: center;
  position: fixed;
  margin-top: 0px;
  transform: rotate(180deg);
}
#rocket.docking-in-nav, 
#rocket.dock-in-nav-scrolled {  
  text-align: center;

  position: fixed;
  animation-duration: .75s;
  animation-fill-mode: forwards;
  animation-name: dock-rocket;
}
@keyframes dock-rocket {
  from { margin-top: 200px; transform: rotate(90deg);  } 
  to { margin-top: 0px; transform: rotate(180deg); }
}

#rocket.rocket-bump-margin {
  animation-duration: 0.75s;
  animation-fill-mode: forwards;
  animation-name: rocket-nova-marg;
  transform: rotate(180deg);
}
@keyframes rocket-nova-marg {
  from { top: 0px; transform: rotate(180deg); } 
  50% { top: 150px; transform: rotate(180deg); }
  to { top: 0px; transform: rotate(180deg); }
}
nav#main-nav {
  position: fixed;
    width: 100%;
    padding: 15px 0px;
    top: 0px;
    z-index: 10;
    text-shadow: 9px 4px 9px black;
    background: rgba(0,0,0,.6);
}
nav .nav-orb {
  width: 100px;
  height:100px;
  background: rgba(0,0,255,0.6);
  border-radius: 50%;
  display: inline-block;
  margin: 0 6.5%;

  text-align: center;
  vertical-align: middle;
  padding-top: 2.5em;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
}
nav .nav-orb:nth-child(2) {
  padding-top: 2em;
}
nav ul {
  padding: 0px;
  margin: 0 auto;
  text-align: center;
}


@keyframes roundandround {
  to {
    transform: rotateX(360deg) rotateY(360deg);
  }
}

@keyframes show {
  to {
    opacity: 1;
  }
}

.scene {
  width:600px;
  height:600px;
  margin: -250px auto 0px auto;
  perspective: 10px;
  visibility: hidden;
  position: fixed;
  top: 230px;
}
.scene.show {
  visibility: visible;
}
.wrapper {
  width:100%;
  height:100%;
  transform: rotateX(45deg) rotateY(45deg);
  transform-style: preserve-3d;
}
.ball {
  position: relative;
  width: 70%;
  height: 70%;
  margin:0 auto;
  transform-style:  preserve-3d;
  animation: roundandround 3.5s 0s infinite linear;
}
.ball .ring {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border:6px;
  border-style: dashed;
  border-radius: 50%;
  opacity: 0;
  animation: show 0.25s forwards ease-in-out;
  list-style: none;
}
.ring:nth-child(1) {
  color:#8df435;
  transform: rotateY(4deg);
  animation-delay: 0s;
}
.ring:nth-child(2) {
  color:#a8e526;
  transform: rotateY(8deg);
  animation-delay: 0.01s;
}
.ring:nth-child(3) {
  color:#c2d11c;
  transform: rotateY(12deg);
  animation-delay: 0.02s;
}
.ring:nth-child(4) {
  color:#c8cb1b;
  transform: rotateY(16deg);
  animation-delay: 0.03s;
}
.ring:nth-child(5) {
  color:#deb21a;
  transform: rotateY(20deg);
  animation-delay: 0.04s;
}
.ring:nth-child(6) {
  color:#ef9621;
  transform: rotateY(24deg);
  animation-delay: 0.05s;
}
.ring:nth-child(7) {
  color:#f29122;
  transform: rotateY(28deg);
  animation-delay: 0.06s;
}
.ring:nth-child(8) {
  color:#fb7430;
  transform: rotateY(32deg);
  animation-delay: 0.07s;
}
.ring:nth-child(9) {
  color:#fe5944;
  transform: rotateY(36deg);
  animation-delay: 0.08s;
}
.ring:nth-child(10) {
  color:#fe5548;
  transform: rotateY(40deg);
  animation-delay: 0.09s;
}
.ring:nth-child(11) {
  color:#f83d61;
  transform: rotateY(44deg);
  animation-delay: 0.1s;
}
.ring:nth-child(12) {
  color:#ec2b7d;
  transform: rotateY(48deg);
  animation-delay: 0.1s;
}
.ring:nth-child(13) {
  color:#e82983;
  transform: rotateY(52deg);
  animation-delay: 0.1s;
}
.ring:nth-child(14) {
  color:#d41e9f;
  transform: rotateY(56deg);
  animation-delay: 0.09s;
}
.ring:nth-child(15) {
  color:#bd1aba;
  transform: rotateY(60deg);
  animation-delay: 0.08s;
}
.ring:nth-child(16) {
  color:#b81ac0;
  transform: rotateY(64deg);
  animation-delay: 0.07s;
}
.ring:nth-child(17) {
  color:#9c1fd7;
  transform: rotateY(68deg);
  animation-delay: 0.06s;
}
.ring:nth-child(18) {
  color:#802aea;
  transform: rotateY(72deg);
  animation-delay: 0.05s;
}
.ring:nth-child(19) {
  color:#7a2dee;
  transform: rotateY(76deg);
  animation-delay: 0.04s;
}
.ring:nth-child(20) {
  color:#5f40f9;
  transform: rotateY(80deg);
  animation-delay: 0.03s;
}
.ring:nth-child(21) {
  color:#4657fe;
  transform: rotateY(84deg);
  animation-delay: 0.02s;
}
.ring:nth-child(22) {
  color:#425cfe;
  transform: rotateY(88deg);
  animation-delay: 0.01s;
}
.ring:nth-child(23) {
  color:#2f77fb;
  transform: rotateY(92deg);
  animation-delay: 0s;
}
/*TEST********************/
/*END TEST******************/
.section {
  padding-top: 5%;
  overflow: hidden;
  position: relative;
}
.section h1 {
  font-size: 1.8em;
}
.section .circle {
  width: 175px;
  height: 175px;
  border-radius: 100%;
  background: rgba(0,0,255,0.4);
  color: #fff;
  text-align: center;
  margin: 50px auto;

  padding-top: 50px;
    box-sizing: border-box;
}
.circle a {
  color: #fff;
  text-decoration: none;
}
.section .circle.marketing-research {
  width: 300px;
  height: 300px;
  /*background: rgba(255,255,255,0.4);*/
  /*background: url(http://bradweldy.com/space/moon.png);*/
  background: none;
  margin-top: 0px;
    margin-left: 3%;

    position: relative;
}
.marketing-research .content {
  z-index: 2;
  position: absolute;
  max-width: 250px;
  padding-left: 15px;

  font-family: stranger;
  color: #000;
}
.marketing-research .content p {
  font-size: 18px;
}
h4 {
  font-size: 22px;
}
.marketing-research .moon img {
  width: 300px;
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: 1;
}
.marketing-research .moon .rover {
  width: 100px;
  position: absolute;
  z-index: 1;
  top: -30px;
  left: -20px;
  transform: rotate(-30deg);

  /*top: -39px;
    right: 0px;
    transform: rotate(387deg);*/
}
.marketing-research .moon .rover img {
  width: 100%;
}

@font-face {
    font-family: stranger;
    src: url(/space/itc-benguiat-bold.otf);
    font-weight:700;
}
.circle.marketing-tag {
  width: 400px;
  height: 400px;
  position: absolute;
  background: rgba(255,255,255,0.4);
  /*background: url(http://bradweldy.com/space/moon.png);*/
  margin-top: -100px;
    margin-left: 60%;
}
#brand {
  font-family: stranger;
  text-align: center;
  margin-top: 25px;
}
.brand {
  text-align: center;
}
.strokeme
{
  display: inline-block;
  font-size: 50px;
  text-transform: uppercase;

  -webkit-text-stroke: 2px #ad3232;

    color: #000;
    /*text-shadow:
    -2px -2px 0 #ad3232,
    2px -2px 0 #ad3232,
    -2px 2px 0 #ad3232,
    2px 2px 0 #ad3232;*/
}
.brand.strokeme h1 {
  font-size: 50px;
  border-top: 2px #000;
  margin-bottom: 0px;

  letter-spacing: 2px;
  transform: scale(1, 1.25);
    -webkit-transform: scale(1, 1.25); /* Safari and Chrome */
    -moz-transform: scale(1, 1.25); /* Firefox */
    -ms-transform: scale(1, 1.25); /* IE 9+ */
    -o-transform: scale(1, 1.25);
}

.brand.strokeme h2 {
  font-size: 40px;
  margin-top: 0px;

  letter-spacing: 2.5px;
  transform: scale(1, 1.5);
    -webkit-transform: scale(1, 1.5); /* Safari and Chrome */
    -moz-transform: scale(1, 1.5); /* Firefox */
    -ms-transform: scale(1, 1.5); /* IE 9+ */
    -o-transform: scale(1, 1.5);
}

.brand.strokeme h1 .brand-end {
  font-size: 70px;
  position: relative;
  top: 13px;
    border-bottom: 2px solid #ad3232;
}
.brand.strokeme h1 .brand-end.brand-end-Y {
  margin-left: -5px;
}
.brand-inner-wrapper {
  position: relative;
  padding-top: 20px;
}
.brand-logo-top-bar {
  width: 100%;
  margin-bottom: -.8em;
    height: 2px;
    background: #000;
    border: 2px solid #ad3232;
    border-radius: 5px;
}
.web-dev h1 {
  margin-top: 0px;
}
#portfolio-mac {
  display: block;
  margin: 0 auto;
  text-align: center;
}
#mac {
  position: relative;
  width: 464px;
    margin: 0 auto;
}
.portfolio-featured {
  position: absolute;
  top: 18px;
  left: 68px;
}
.portfolio-featured img {
  width: 325px;
  height: 200px;
}
#contact-click {
  float: left;
  width: 50%;
  box-sizing: border-box;
  padding-top: 15%; 
}
#contact-form {
  float: left;
  width: 50%;
  box-sizing: border-box;
}

@media screen and (max-width: 767px) {
  #planet-marketing {
    display: none;
  }
}

/*Doesn't work. . .do @keyframes work inside media queries, or do they need to live outside?


/*@media screen and (max-width: 767px) {
  #planet-marketing {
    animation: space-background-planet linear 30s infinite;
  }
  @keyframes space-background-planet-mob {
    from { right: 350px;  } 
    to { right: 90%; }
  }
}
@media screen and (min-width: 768px) {
  #planet-marketing {
    animation: space-background-planet linear 30s infinite;
  }
  @keyframes space-background-planet-mob {
    from { right: -1%;  } 
    to { right: 120%; }
  }
}*/


</style>
<script type="text/javascript">
  $(function() {

    $("html,body").animate({scrollTop: 0}, 100); //100ms for example
    var toTheTop = window.pageYOffset;

    var winHeight = $(window).height();
    var winWidth = $(window).width();

    $('.section').css('height', winHeight);
    
    $('#brand').css('height', (winHeight - 500));
    //Center logo within #brand element
    var brandHeight = $('#brand').height();
    var logoHeight = $('#brand .brand-inner-wrapper').height();
    var wrapLogoPad = (brandHeight - logoHeight) / 2;
    $('#brand .brand-inner-wrapper').css('paddingTop', wrapLogoPad);
    //
    var rocketPosition = (winWidth - 128) / 2;
    $('#rocket').css('marginLeft', rocketPosition);

    console.log('jquery running! windowHeight: ' + winHeight + 'windowWidth' + winWidth);

    var rocketClicked = 0;
    var rocketClickedBool = false;

    var marketingTop = $('.marketing').offset().top;
    var webdevTop = $('.web-dev').offset().top;
    var portfolioTop = $('.portfolio').offset().top;
    var contactTop = $('.contact').offset().top;

    if(winWidth < 768) {
      $('#planet-marketing').hide();
    }

    $('#main-nav .nav-orb').on('click', function() {
      if($(this).hasClass('marketing-nav')) {
        $('html, body').animate({ scrollTop: marketingTop}, 1500);
        rocketClicked = 2;
        //console.log(marketingTop + ' toTheTop = ' + toTheTop);
      } else if ($(this).hasClass('web-dev-nav')) {
        $('html, body').animate({ scrollTop: webdevTop}, 1500);
        rocketClicked = 3;
      } else if ($(this).hasClass('portfolio-nav')) {
        $('html, body').animate({ scrollTop: portfolioTop}, 1500);
        rocketClicked = 4;
      }else {
        $('html, body').animate({ scrollTop: contactTop}, 1500);
        rocketClicked = 5;
        if(history.pushState) {
            history.pushState(null, null, '#contact');
        }
        else {
            location.hash = '#contact';
        }
      }
    });
    
    function rocketBump() {
      rocketClickedBool = true;
      $('#rocket').toggleClass('rocket-bump-margin');
      setTimeout(function(){
          $('#rocket').toggleClass('rocket-bump-margin');
        }, 750);
    }

    function rocketPos() {
      if(rocketClicked >= 1) {
        if(rocketClicked == 1) {  
          $('#banner').fadeOut();
          $('html, body').animate({ scrollTop: 0 }, 1500);
          $('#banner').fadeIn(2000);
        } else if(rocketClicked == 2) {
          $('html, body').animate({ scrollTop: marketingTop}, 1500);
          rocketBump();
        } else if(rocketClicked == 3) {
          $('html, body').animate({ scrollTop: webdevTop }, 1500);
          rocketBump();
        } else if(rocketClicked == 4) {
          $('html, body').animate({ scrollTop: portfolioTop }, 1500);
          rocketBump();
        } else if(rocketClicked == 5) {
          $('html, body').animate({ scrollTop: contactTop }, 1500);
          rocketBump();
        }
      }
    }
    //On Rocket Click
    $('#rocket').on('click', function rocketClick() {
      rocketClickedBool = true;
      $(this).addClass('dock-in-nav');

      if(rocketClicked < 5) {
        rocketClicked ++;
      } else {
        rocketClicked = 1;
      }

      console.log(rocketClicked + ' rocket clicks.  5th click = contact\nrocketClickedBool = ' + rocketClickedBool);

      var sceneXAxis = (winWidth - 600) / 2;
      $('.scene').css('left', sceneXAxis);
      
      rocketPos();

      $('.scene').addClass('show');
        setTimeout(function(){
          $('.scene').removeClass('show');
        }, 900);
      return false;

      
    });

    function scrollDock() {
      if(window.pageYOffset >= 1 && rocketClickedBool == false && $('#rocket').offset().top != 0) {
        $('#rocket').addClass('dock-in-nav-scrolled');
      } else {
        $('#rocket').removeClass('dock-in-nav-scrolled');
      }

      //Next 3 lines are example of parallax
      // var prlx_lyr_2 = document.getElementById('prlx_lyr_2');
      // prlx_lyr_2.style.left = (window.pageYOffset * 1.15 )+'px';
      // prlx_lyr_2.style.top = (window.pageYOffset * 0.5 )+'px';

      var prlx_lyr_2 = document.getElementById('market-research');
      prlx_lyr_2.style.top = (window.pageYOffset * 0.15 )+'px';
      var prlx_lyr_3 = document.getElementById('market-tag');
      prlx_lyr_3.style.bottom = (window.pageYOffset * 0.2 )+'px';
      var prlx_lyr_4 = document.getElementById('mac');
      prlx_lyr_4.style.top = ((window.pageYOffset * 0.2 ) - (winHeight/2))+'px';
      var prlx_lyr_5 = document.getElementById('web-dev-summary');
      prlx_lyr_5.style.top = ((window.pageYOffset * 0.15 ) + (winHeight/8))+'px';

      // var winYOff = window.pageYOffset;
      // var prlxTwo = winYOff * 0.5;

      // var mrktTagOff = $('.marketing-tag').offset().top;
      // $('.marketing-tag').css('top', prlxTwo + mrktTagOff);

    }
    window.addEventListener("scroll", scrollDock, false);
    
  });
</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTFTS5F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <nav id="main-nav">
    <ul>
      <li class="nav-orb marketing-nav"><div>Marketing</div></li>
      <li class="nav-orb web-dev-nav"><div>Web Development</div></li>
      <li class="nav-orb portfolio-nav"><div>Portfolio</div></li>
      <li class="nav-orb contact-nav"><div>Contact</div></li>
    </ul>
  </nav>
  <div id="banner"></div>
  <div id="planet-marketing">
    <img src="http://bradweldy.com/space/planet1.png" />
  </div>
  <div id="rocket">
    <img src="http://bradweldy.com/space/rocket2.png" alt="rocket" style="width: 128px; height: 224px;">
  </div>
  <div class="scene">
    <div class="wrapper">
      <ul class="ball">
        <?php 
          for($i = 0; $i < 23; $i++) {
            echo '<li class="ring ' . $i . '"></li>';
          }
        ?>
      </ul>
    </div>
  </div>
  <div id="brand">
    <div class="brand strokeme">
      <div class="brand-inner-wrapper">
        <div class="brand-logo-top-bar"></div>
        <h1><span class="brand-end brand-end-B">B</span>rad Weld<span class="brand-end brand-end-Y">y</span></h1>
        <h2>Marketing</h2>
      </div>
    </div>
  </div>
  <div id="sections" class="space-bg">
    <div class="section marketing">
      <div class="circle">
        <h1>Marketing</h1>
      </div>
      <div id="market-tag" class="circle marketing-tag">
        <h4>Digital marketing expertise that revolves around your business.</h4>
        <p>It is all about cost-effectively attracting qualified shoppers and buyers to your website. When your Digital Marketing solar system is aligned with your business goals, no other marketing investment offers a better ROI due to its speed, accuracy and efficiency. Digital Marketing programs (also known as Online Marketing or Internet Marketing) typically include a combination of SEO, PPC, Content creation, Video, Mobile tactics and Social Media participation. Email marketing, programmatic media and CRM automation are typically woven into these programs. The optimal combination is somewhat different for every client and will change as situations change.</p>
        
      </div>
      <div id="market-research" class="circle marketing-research">
        <div class="content"> 
          <h4>Market Research</h4>
          <p>Reduce risk and gain insights with decision focused research.</p>
        </div>
        <div class="moon">
          <img src="http://bradweldy.com/space/moon.png" />
          <div class="rover">
            <img src="http://bradweldy.com/space/moonRover.png" />
          </div>
        </div>
      </div>
    </div>
    <div class="section web-dev">
      <div class="circle">
        <h1>Web Development</h1>
      </div>
      <div class="circle">
        <h4>Meet your High-Performance 24-7 Digital Marketing Sales Force</h4>
      </div>
      <div id="web-dev-summary" class="circle Temp-marketing-tag marketing-tag">
        <p> When you consider that your website never sleeps and it sees more prospects and customers than your entire sales force, you appreciate the significant role website marketing plays in your company's success. Each year the stakes go higher. Based on a 100 point competitive website evaluation, we carefully examine the features and tactics that attract, retain and convert visitors into paying customers. We compile this information to prepare website recommendations and determine website optimizing, social media management, and/or conversion goals to track from-the-jump.</p>
      </div>
    </div>
    <div id="portfolio" class="section portfolio">
      <div class="circle">
        <h1>Portfolio</h1>
      </div>
      <div id="portfolio-mac">
        <div id="mac">
          <img src="http://bradweldy.com/space/macbook-pro.png" />
          <div class="portfolio-featured">
            <img src="http://bradweldy.com/space/californiapridewindowcleaners.png" />
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="section contact">
      <div class="circle">
  <h1>Contact</h1>
</div>
<div class="circle">
    <div id="contact-click">
      <h4><a href="mailto:BWeldy@BradWeldy.com">BWeldy@BradWeldy.com</a></h4>
      <h4><a href="tel:9494563310">(949)456-3310</a></h4>
    </div>
</div>
<div class="circle">  
  <div id="contact-form">
    <form name="contactform" method="post" action="http://bradweldy.com/space/send_form_email.php">

        <label for="first_name">First Name *</label>
        <br />
      <input  type="text" name="first_name" maxlength="50" size="25">
      <br />
      <br />
      <label for="last_name">Last Name *</label>
      <br />
      <input  type="text" name="last_name" maxlength="50" size="25">
      <br />
      <br />
      <label for="email">Email *</label>
      <br />
      <input  type="text" name="email" maxlength="80" size="25">
      <br />
      <br />
      <label for="telephone">Phone</label>
        <br />
        <input  type="text" name="telephone" maxlength="30" size="25">
        <br />
        <br />
        <label for="comments">Comments *</label>
        <br />
        <textarea  name="comments" maxlength="1000" size="50"></textarea>
        <br />
        <br />
      <input type="submit" value="Submit">
    </form>
  </div>
</div>
    </div>
  </div>
</body>
</html>