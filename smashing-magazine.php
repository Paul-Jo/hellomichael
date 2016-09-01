<?php
  include_once('includes/functions.php');

  $title    = "Smashing Magazine";
  $meta     = "Smashing Magazine is a responsive website for Sydney's premier industry event planner.";
  $project  = "smashing-magazine";
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

    <div id="content">
      <img class="section__logo hidden-md-up" src="includes/business-events-sydney/logo.png" alt="Smashing Magazine logo"/>

      <!-- Showcase Begin -->
      <div class="section section--showcase">
        <div class="showcase">
          <img class="showcase__image showcase__image--laptop" src="includes/business-events-sydney/laptop.jpg" alt="Smashing Magazine"/>
          <div class="showcase__sprite sprite sprite--laptop"></div>

          <img class="showcase__image showcase__image--tablet" src="includes/business-events-sydney/tablet.jpg" alt="Smashing Magazine"/>
          <div class="showcase__sprite sprite sprite--tablet"></div>

          <img class="showcase__image showcase__image--mobile" src="includes/business-events-sydney/mobile.jpg" alt="Smashing Magazine"/>
          <div class="showcase__sprite sprite sprite--mobile"></div>
        </div>
      </div>
      <!-- Showcase End -->

      <!-- Brief Begin -->
      <section class="section section--brief p-t-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">
                    <h1 class="heading__title">The Illusion of Life</h1>
                    <h6 class="heading__subtitle">
                      A Smashing Magazine Article
                    </h6>
                  </div>
                </div>

                <div class="col-xs-12 col-lg-4 col-lg-push-8 col-xl-3 col-xl-push-9 hidden-sm-down">
                  <div class="section__profile">
                    <img class="section__logo" src="includes/smashing-magazine/logo.png" alt="Smashing Magazine logo"/>

                    <a class="section__link" target="_blank" href="https://www.smashingmagazine.com/2016/07/an-svg-animation-case-study/">
                      <h5>Read Article</h5>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path class="arrow" fill="#C33" d="M11.83 9.828c.29.293.53.193.53-.22V4.392c0-.41-.338-.75-.75-.75H6.39c-.41 0-.51.24-.22.532l5.66 5.656z"/><path class="arrow" fill="#C33" d="M7.78 10.94c-.394.396-1.038.396-1.435 0L5.06 9.65c-.398-.396-.398-1.04 0-1.436l3.92-3.92c.395-.396 1.038-.396 1.437 0L11.7 5.583c.4.396.4 1.04 0 1.437l-3.92 3.92z"/><path fill="#C33" d="M9.078 11.18v1.47c0 .237-.19.43-.428.43H7.18l-.023.022-.023-.023H3.35c-.236 0-.428-.192-.428-.43V8.866L2.9 8.842l.022-.022V7.35c0-.236.192-.428.428-.428h1.47l1.5-1.5H3.35c-1.064 0-1.928.863-1.928 1.928v5.3c0 1.065.863 1.93 1.928 1.93h5.3c1.064 0 1.928-.864 1.928-1.93V9.68l-1.5 1.5z"/></svg>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-lg-8 col-lg-pull-4 col-xl-9 col-xl-pull-3">
                  <p>So what's the next step. Always looking for</p>

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
      <?php include_once('includes/more-work.php');?>
    </div>
  </div>
</div>

<?php include_once('includes/footer.php');?>
