<?php 
  $title      = "Keno";
  $meta       = "Keno is an Angular app based on Australia's favorite lottery game.";
  $work       = array('business-events-sydney', 'foodsters', 'big-head-mode');
?>

<?php include_once('includes/header.php');?>
<?php include_once('includes/menu.php');?>

<div class="menu__wrapper--clone"></div>

<div class="menu__wrapper">
  <div id="skrollr-body">
    <a href="#" class="menu__toggle">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <div id="content" data-start="modules/keno">
      <img class="section__logo hidden-md-up" src="includes/keno/logo-color.png" alt="Keno Logo"/>

      <!-- Showcase Begin -->
      <div class="section section--showcase">  
        <div class="showcase">
          <img class="showcase__image showcase__image--laptop" src="includes/keno/laptop.jpg" alt="Keno"/>
          <div class="showcase__sprite sprite sprite--laptop"></div>
          
          <img class="showcase__image showcase__image--tablet" src="includes/keno/tablet.jpg" alt="Keno"/>
          <div class="showcase__sprite sprite sprite--tablet"></div>
          
          <img class="showcase__image showcase__image--mobile" src="includes/keno/mobile.jpg" alt="Keno"/>
          <div class="showcase__sprite sprite sprite--mobile"></div>
        </div>
      </div>
      <!-- Showcase End -->

      <!-- Brief Begin -->
      <section class="section section--brief p-t-0">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">          
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">
                    <h1 class="heading__title">The Physicality of Animations</h1>
                    <h6 class="heading__subtitle">
                      Experimenting with 3D CSS in the browser
                    </h6>
                  </div>
                </div>

                <div class="col-xs-12 col-lg-4 col-lg-push-8 col-xl-3 col-xl-push-9 hidden-sm-down">
                  <div class="section__profile">
                    <img class="section__logo" src="includes/keno/logo-color.png" alt="Keno logo"/>
                    
                    <a class="section__link" target="_blank" href="https://keno.com.au/">
                      <h5>Launch Website</h5>
                    
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path class="arrow" fill="#C33" d="M11.83 9.828c.29.293.53.193.53-.22V4.392c0-.41-.338-.75-.75-.75H6.39c-.41 0-.51.24-.22.532l5.66 5.656z"/><path class="arrow" fill="#C33" d="M7.78 10.94c-.394.396-1.038.396-1.435 0L5.06 9.65c-.398-.396-.398-1.04 0-1.436l3.92-3.92c.395-.396 1.038-.396 1.437 0L11.7 5.583c.4.396.4 1.04 0 1.437l-3.92 3.92z"/><path fill="#C33" d="M9.078 11.18v1.47c0 .237-.19.43-.428.43H7.18l-.023.022-.023-.023H3.35c-.236 0-.428-.192-.428-.43V8.866L2.9 8.842l.022-.022V7.35c0-.236.192-.428.428-.428h1.47l1.5-1.5H3.35c-1.064 0-1.928.863-1.928 1.928v5.3c0 1.065.863 1.93 1.928 1.93h5.3c1.064 0 1.928-.864 1.928-1.93V9.68l-1.5 1.5z"/></svg>
                    </a>
                  </div>
                </div>
                  
                <div class="col-xs-12 col-lg-8 col-lg-pull-4 col-xl-9 col-xl-pull-3">
                  <p>
                    While attending the <a target="_blank" href="http://www.webdirections.org/code15/">Code 15</a> conference in Melbourne, I had the opportunity to watch <a target="_blank" href="https://twitter.com/rachelnabors">Rachel Nabors'</a> presentation on the "State of Animation". During her QA session, a participant asked her what was the most common misconception made by designers and front-end developers. She aptly replied, <a target="_blank" href="http://thewebahead.net/103">"mistaking animation for delight"</a>.
                  </p>

                  <p>Her advice strongly resonated with me as I was in the initial stages of a project where animation played a fundamental role in defining success. Keno is traditionally an "in venue" lottery based game where users play with pen and paper while watching tv screens. With a brand refresh in the works, a digital counterpart was included in the brief to bring Keno from the venues into the home.</p>
                  
                  <ul class="section__tags">
                    <li class="tag"><span>Front-end Development</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Brief End -->

      <!-- Research Begin -->
      <section class="section section--dark section--keno">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">   
              <h2 class="subheading subheading--left">A Glimpse into Implementation</h2>

              <div class="row">
                <div class="col-sm-9">
                  <p>At Tabcorp, I had the amazing opportunity to augment their internal team of Javascript and Angular developers. While they focused on the game mechanics happening behind the scenes, I was tasked with structuring the CSS architecture and realizing animation prototypes in browser.</p>
                </div>

                <div class="col-sm-6">
                  <figure class="figure">
                    <img class="figure__image" src="includes/keno/code-guide.jpg" alt="Keno code guide"/>

                    <figcaption class="figure__caption"><sup>[1]</sup> sample from the Keno code guide</figcaption>
                  </figure>
                </div>

                <div class="col-sm-6">
                  <figure class="figure">
                    <img class="figure__image" src="includes/keno/style-guide.jpg" alt="Keno style guide"/>

                    <figcaption class="figure__caption"><sup>[2]</sup> sample from the Keno style guide</figcaption>
                  </figure>
                </div>
              </div>    

              <p class="m-b-0">As the only front-end developer addressing styling, it was important to establish a set of standards that I could communicate with the rest of the team. By creating a style and code guide, not only could developers use examples from the repository, it also gave designers a chance to audit modules before being placed on live pages. It proved to be even more practical when the team tripled in size over the span of a few weeks. With the guides, new hires were able to ramp up quickly without compromising the quality of the build.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Research End -->

      <!-- Research Begin -->
      <section class="section section--darker section--research">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">   
              <h2 class="subheading">Bringing Keno to Life</h2>

              <div class="row">
                <div class="col-xs-12 col-lg-12 col-xl-6 col-xl-push-6">
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-12">
                      <figure class="figure figure--gif">
                        <img class="figure__image preload" src="includes/keno/prototype.gif" alt="Keno prototype"/>

                        <figcaption class="figure__caption"><sup>[3]</sup> initial designer prototypes</figcaption>
                      </figure>
                    </div>

                    <div class="col-sm-12 col-lg-6 col-xl-12">
                      <figure class="figure figure--gif m-b-0-md-up">
                        <img class="figure__image preload" src="includes/keno/implementation.gif" alt="Keno live"/>

                        <figcaption class="figure__caption"><sup>[4]</sup>  final implementation in browser</figcaption>
                      </figure>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6 col-xl-pull-6">
                  <p>During the entire time Keno was in development, this <a target="_blank" href="https://www.youtube.com/watch?list=PLHur9zEgkhXipQlwi_-qDuhsSYaZ3vSVp&v=tW3M_PMLUhA">commercial</a> was being broadcast all across Australia. And while the initial designer prototypes were more than acceptable, the animations didn't quite capture the metaphor of the ball, "mistaking animation for delight".</p>

                  <p>Advocating for more time to revisit this problem, I placed an emphasis on seamless transitions and timing. By using a combination of 3D CSS transforms, I was able to place the game ball on the board without resorting to fading in two separate elements. Furthermore, because each ball is drawn in succession and appears on the screen for only a limited amount of time, easing functions were used to maximize the duration that a ball is visible.</p>

                  <p class="m-b-0">Lastly and possibly the most difficult aspect of the build, the entire web app is responsive, allowing players on mobile and tablet devices to enjoy Keno on the go.</p>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </section>
      <!-- Research End -->

      <!-- Screenshots Begin -->
      <div class="section section--dark section--screenshots">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">          
              <div class="row">
                <div class="col-xs-12">
                  <img src="includes/keno/homepage.jpg" alt="Keno homepage"/>
                  <img src="includes/keno/venue-finder.jpg" alt="Keno venue finder"/>
                  <img class="m-b-0" src="includes/keno/marketing.jpg" alt="Keno marketing"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Screenshots End -->

      <?php include_once('includes/more-work.php');?>
    </div>
  </div>
</div>

<?php include_once('includes/footer.php');?>