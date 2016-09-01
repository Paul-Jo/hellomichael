<?php
  include_once('includes/functions.php');

  $title  = "Web Directions";
  $meta   = "People Behind the Pixels is a WebGl title sequence pushing the boundaries of what's capable in the browser.";
  $project  = "web-directions";
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

    <div id="content" data-start="modules/webdirections">
      <img class="section__logo hidden-md-up" src="includes/web-directions/logo.png" alt="Web Directions logo"/>

      <!-- Brief Begin -->
      <section class="section section--brief">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">
                    <h1 class="heading__title">When Opportunities Arise</h1>
                    <h6 class="heading__subtitle">
                      Pushing the boundaries of WebGL in the browser
                    </h6>
                  </div>
                </div>

                <div class="col-xs-12 col-lg-4 col-lg-push-8 col-xl-3 col-xl-push-9 hidden-sm-down">
                  <div class="section__profile">
                    <img class="section__logo" src="includes/web-directions/logo.png" alt="Web Directions logo"/>

                    <a class="section__link" target="_blank" href="http://www.peoplebehindthepixels.com">
                      <h5>Watch Title Sequence</h5>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path class="arrow" fill="#C33" d="M11.83 9.828c.29.293.53.193.53-.22V4.392c0-.41-.338-.75-.75-.75H6.39c-.41 0-.51.24-.22.532l5.66 5.656z"/><path class="arrow" fill="#C33" d="M7.78 10.94c-.394.396-1.038.396-1.435 0L5.06 9.65c-.398-.396-.398-1.04 0-1.436l3.92-3.92c.395-.396 1.038-.396 1.437 0L11.7 5.583c.4.396.4 1.04 0 1.437l-3.92 3.92z"/><path fill="#C33" d="M9.078 11.18v1.47c0 .237-.19.43-.428.43H7.18l-.023.022-.023-.023H3.35c-.236 0-.428-.192-.428-.43V8.866L2.9 8.842l.022-.022V7.35c0-.236.192-.428.428-.428h1.47l1.5-1.5H3.35c-1.064 0-1.928.863-1.928 1.928v5.3c0 1.065.863 1.93 1.928 1.93h5.3c1.064 0 1.928-.864 1.928-1.93V9.68l-1.5 1.5z"/></svg>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-lg-8 col-lg-pull-4 col-xl-9 col-xl-pull-3">
                  <p>After moving to Sydney to work for <a target="_blank" href="http://www.reactive.com/">Reactive Media</a>, I found myself one day sitting across the room from John Allsopp of "<a style="position: relative; left: -3px;" target="_blank" href="http://alistapart.com/article/dao">A Dao of Web Design</a>" fame. He had come in to plan an inter-agency crawl to support <a target="_blank" href="http://www.webdirections.org/wds14/">Web Directions</a>, the premier Australian event for digital creatives, strategists and technologists. Mid-discussion, John casually asked if we'd be interested in creating the opening title sequence for the event, the only caveat being it had to run real-time in the browser. With an intense passion for all things film and digital, we really didn't have a choice.</p>

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
      <section class="section section--dark section--research">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
              <h2 class="subheading">Research, Strategy, & Concept</h2>

              <div class="row">
                <div class="col-xs-12 col-xl-6">
                  <figure class="figure">
                    <img class="figure__image" src="includes/web-directions/storyboard.gif" alt="Storyboarding"/>
                    <figcaption class="figure__caption"><sup>[1]</sup> David Brown and Melissa Baillache's animatic epicness</figcaption>
                  </figure>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <p>Saying yes to circumstances unknown is an understatement for "People Behind the Pixels". Being cautiously optimistic, the creatives had to balance pushing the boundaries of design while acknowledging the developers were charting unexplored territories within the browser. After several weeks of ideation, the duo of  <a target="_blank" href="http://db-d.tumblr.com/">Dave Brown</a> and <a target="_blank" href="http://melissabaillache.com/">Melissa Baillache</a> presented this beautiful animatic described by the premise below.</p>
                </div>

                <div class="col-xs-12 col-lg-8 col-lg-push-2">
                  <blockquote class="blockquote">
                    <p class="blockquote__quote">In our film, all these individuals are represented by a "pixel". Their stories evolve into playful geometric structures, yet always keep their original core - the element that binds everything together into a single experience.</p>
                  </blockquote>
                </div>

                <div class="col-xs-12">
                  <p>Off the back of this, <a target="_blank" href="https://twitter.com/triceratopnotch">Dan Creamer</a>, <a target="_blank" href="http://pete-rawlings.com/">Pete Rawlings</a> (who coincidentally made the <a target="_blank" href="https://soundcloud.com/rawlinsoul/intime">music</a>) and I had full creative license to implement the title sequence. The development timeline roughly mapped to the following stages: prototyping, scaffolding, scene creation and sequencing.</p>
                </div>
              </div>

              <br class="hidden-lg-down"/>

              <div class="row">
                <div class="col-xs-12 col-lg-6 col-lg-push-6 col-xl-7 col-xl-push-5">
                  <figure class="figure">
                    <img class="figure__image" src="includes/web-directions/sketches.jpg" alt="Sketches"/>

                    <figcaption class="figure__caption"><sup>[2]</sup> Ideation on lots of sticky notes</figcaption>
                  </figure>

                  <figure class="figure">
                    <img class="figure__image" src="includes/web-directions/prototyping.jpg" alt="Prototyping"/>

                    <figcaption class="figure__caption"><sup>[3]</sup> Dan and I debating how best to structure our Javascript</figcaption>
                  </figure>

                  <figure class="figure m-b-0-lg-up">
                    <img class="figure__image" src="includes/web-directions/music-by-pete.jpg" alt="Hello World javascript"/>

                    <figcaption class="figure__caption"><sup>[4]</sup> Pete making the jams</figcaption>
                  </figure>
                </div>

                <div class="col-xs-12 col-lg-6 col-lg-pull-6 col-xl-5 col-xl-pull-7">
                  <p>
                    <strong>Prototyping</strong><br/>
                    We agreed that with WebGL, the potential was there to achieve the same fidelity as the sample stills. Deciding on <a target="_blank" href="http://www.threejs.org">ThreeJS</a> as our framework, we began to prototype various "hello worlds" and soon realized that we were out of our depths. Completely overwhelmed, we took a step back and decided to refocus our efforts on the "lower hanging fruits" of the project.
                  </p>

                  <p>
                    <strong>Scaffolding</strong><br/>

                    Regardless of the complexity of the animations, the project needed an architecture that would allow each of the developers to create individual scenes and then commit them to a larger sequence, very similar to modules within an application. Taking inspiration from my film education, we borrowed concepts from the editing process to create a basic Javascript scaffold.
                    Similar to most time-based editing suites, the underlying concept was simple. Schedule an event within a queue, then pop it off as the current time passes the marker.
                  </p>

                  <p>
                    <strong>Scene Creation</strong><br/>
                    Still overwhelmed and a little frustrated, we realized a point of contention was how we would move geometry: animation vs emulation. Dan coming from a gaming background recommended we create real world systems that would mimic physics (gravity, collision, etc.), while I argued we could achieve better craft by "keyframing" object parameters. Through much trial and error and the creation of several "happy accidents", we were forced to realize that it would have to be a combination of both.
                  </p>

                  <p class="m-b-0">
                    <strong>Sequencing</strong><br/>
                    When all was said and done, the team had 21 scenes that needed to be stitched together. Unfortunately, this process was more art than code. To respect the creative Research of creating a <em>single experience</em>, we still strived for seamlessness between scenes and events matching the tempo of the audio. This meant going back and creating transitions between scenes and also led to a process I can only describe as "pixel pushing" code, manually incrementing timecode to register on a particular beat.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Research End -->

      <!-- Screenshots Begin -->
      <div class="section section--darker section--screenshots">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
              <div class="row">
                <div class="col-xs-12">
                  <img src="includes/web-directions/sequence-1.jpg" alt="WebGL"/>
                  <img src="includes/web-directions/sequence-2.jpg" alt="WebGL"/>
                  <img src="includes/web-directions/sequence-3.jpg" alt="WebGL"/>
                  <img class="m-b-0" src="includes/web-directions/sequence-4.jpg" alt="WebGL"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Screenshots End -->

      <!-- Outcomes Begin -->
      <section class="section section--darkest section--outcomes section--twitter">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
              <div class="row">
                <div class="col-xs-12">
                  <h2 class="subheading">Outcomes</h2>
                  <p>People Behind the Pixels has surpassed our wildest expectations, having been nominated for a <a target="_blank" href="http://webbyawards.com/winners/2015/online-film-video/general-film-categories/experimental-weird/people-behind-the-pixels/">Webby</a> and an <a target="_blank" href="http://awards2015.agda.com.au/finalist/3/10007/980">AGDA</a> design award. Initially wowing an audience of 800 attendees, the title sequence has since been viewed by over 20,000 people online.  From the initial applause of the live audience to the awesome congratulatory tweets, one reaction stood out amongs the rest. Mr. Doob, the creator of Three.js, the very technology we were using gave us a little <a target="_blank" href="https://plus.google.com/+ricardocabello/posts/GxvwRXVCPSn">nod of approval</a> and featured our work on the official <a target="_blank" href="http://threejs.org/">ThreeJS.org</a> website.</p>
                </div>
              </div>

              <div class="twitter">
                <div class="section__row row row-thin">
                  <div class="col-xs-12 col-lg-6 col-xl-4">
                    <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Amazing use of Web GL, isn&#39;t it ? No really is it ? <a href="http://t.co/1xeKLMyinv">http://t.co/1xeKLMyinv</a></p>&mdash; THE GOOD FACTORY (@TheGoodFactory) <a href="https://twitter.com/TheGoodFactory/status/529391281936818176">November 3, 2014</a></blockquote></div>

                  <div class="col-xs-12 col-lg-6 col-xl-4">
                    <blockquote class="twitter-tweet tw-center-align"><p>Press F11 and watch this render in real time. Stunning:  <a href="http://t.co/SmPaKAq0Uu">http://t.co/SmPaKAq0Uu</a></p>&mdash; Drew Wells (@drewwells) <a href="https://twitter.com/drewwells/status/536979563582984192">November 24, 2014</a></blockquote>
                   </div>

                  <div class="col-xs-12 col-lg-12 col-xl-4">
                    <blockquote class="twitter-tweet tw-center-align"><p>You might&#39;ve already seen this, but I think it&#39;s lovely <a href="http://t.co/1YTUxr5Pwg">http://t.co/1YTUxr5Pwg</a></p>&mdash; Sarah Drasner (@sarah_edo) <a href="https://twitter.com/sarah_edo/status/578368273848233984">March 19, 2015</a></blockquote>
                  </div>
                </div>

                <div class="section__row row row-thin">
                  <div class="col-xs-12 col-lg-6 col-xl-5">
                    <blockquote class="twitter-tweet tw-center-align"><p>Quick post about &quot;People behind the pixels&quot;. <a href="https://t.co/CDJvulcKJQ">https://t.co/CDJvulcKJQ</a> <a href="https://twitter.com/hashtag/webgl?src=hash">#webgl</a> <a href="https://twitter.com/hashtag/demoscene?src=hash">#demoscene</a> <a href="http://t.co/E5fJkL9mNs">pic.twitter.com/E5fJkL9mNs</a></p>&mdash; Ricardo Cabello (@mrdoob) <a href="https://twitter.com/mrdoob/status/528204034222481411">October 31, 2014</a></blockquote>
                  </div>

                  <div class="col-xs-12 col-lg-6 col-xl-7">
                    <blockquote class="twitter-tweet tw-center-align"><p>Soundtrack and real time rendering <a href="https://twitter.com/hashtag/WebGL?src=hash">#WebGL</a> by the awesome team <a href="https://twitter.com/reactive">@reactive</a> Sydney - Web Directions 2014 Title Sequence <a href="http://t.co/bZejOKFKVc">http://t.co/bZejOKFKVc</a></p>&mdash; Paul Pritchard (@paulie2x) <a href="https://twitter.com/paulie2x/status/530192874919325696">November 6, 2014</a></blockquote>
                    <blockquote class="twitter-tweet tw-center-align"><p>How? What? Geeeeeeeze…. what a way to start the Monday. <a href="http://t.co/pIid3rFz6E">http://t.co/pIid3rFz6E</a></p>&mdash; The Pixel Geek (@thepixelgeek) <a href="https://twitter.com/thepixelgeek/status/529309613959569408">November 3, 2014</a></blockquote>
                  </div>
                </div>
              </div>

              <div class="section__row row row-thin">
                <div class="col-xs-12">
                  <p>I can't express enough, the gratitude that I have for the team that put this together. From the naive optimism that we shared early on, to the attention to detail we wouldn't sacrifice and the late nights that became early mornings, you guys made it all possible. I still can't believe we did it.</p>
                </div>

                <div class="col-xs-12 col-sm-7 col-lg-5 col-centered">
                  <figure class="figure m-b-0">
                    <img class="figure__image" src="includes/web-directions/team-awesome.jpg" alt="Web Directions South"/>

                    <figcaption class="figure__caption"><sup>[6]</sup> We are the five <a target="_blank" href="https://www.youtube.com/watch?v=xsGP35Vd6qQ">best friends</a> that anybody could have.</figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Outcomes End -->

      <?php include_once('includes/more-work.php');?>
    </div>
  </div>
</div>

<?php include_once('includes/footer.php');?>
