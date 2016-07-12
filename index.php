<?php 
  $meta = "Front-end Developer based out of Sydney, Australia and Vancouver, Canada.";
?>

<?php include_once('includes/header.php');?>
<?php include_once('includes/menu.php');?>

<div class="menu__wrapper">
  <div id="skrollr-body">
    <?php include_once('includes/hello.php');?>
    
    <a href="#" class="menu__toggle">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <a target="_blank" class="sprite sprite--awwwards" href="http://www.awwwards.com/best-websites/hellomichael?subsection=all">&nbsp;</a>

    <div id="content" data-start="modules/index">
      <div class="hello__hand hello__hand--left">
        <img src="img/hand-left.png" alt="Left hand"/>
      </div>

      <div class="hello__hand hello__hand--right">
        <img src="img/hand-right.png" alt="Right hand"/>
      </div>

      <!-- About Begin -->
      <section id="about" class="section section--about">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">      
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">
                    <h1 class="heading__title">Michael Ngo</h1>
                    <h6 class="heading__subtitle subtitle">
                      Front-End Developer | Vancouver, Sydney <br/> Perfecting the web one pixel at a time
                    </h6>
                  </div>
                </div>

                <div class="col-xs-12 col-lg-4 col-lg-push-8 col-xl-3 col-xl-push-9">
                  <div class="row">
                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-lg-push-0 col-lg-12 text-xs-right">
                      <a class="ajax menu__link menu__link--alt" href="resume">
                        <svg class="menu__icon"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                        <path fill="#FCFCFC" d="M30.25,13.417V4.333L8.917,4.28L8.75,4.375V44H39.5l0.417-30.75"/>
                        <path fill="#CC3333" d="M31.075,2.817H7.265v42.367h33.469V12.017L31.075,2.817z M31.837,7.053l4.448,4.237h-4.448V7.053z
                           M9.807,42.641V5.36h19.488v8.473h8.896v28.808H9.807L9.807,42.641z"/>
                        </svg>

                        <h4 class="menu__title">Resume</h4>
                        <h6 class="menu__subtitle">View Resume</h6>
                      </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-lg-push-0 col-lg-12">
                      <a class="menu__link menu__link--alt" target="_blank" href="https://github.com/hellomichael">
                        <svg class="menu__icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="#C33"><path d="M22.583 44.02c.29-1.812.232-8.262.207-10.293l-.027-2.117-1.83 1.064c-.157.09-1.538.96-1.538 3.293 0 .336-.02 5.76-.02 6.503 0 .22-.18.45-.444.657.16-.346.26-.74.26-1.197 0-1.382-.03-4.938-.03-4.938l-.012-1.445-1.428.236c-.01.003-1.033.17-2.47.17-2.733 0-3.828-1.307-4.53-2.8.61.697 1.297 1.304 2.2 1.585.718.223 1.537.34 2.372.34 1.39 0 2.683-.314 3.546-.863l.506-.32.062-.598c.087-.857.738-1.727 1.387-2.258.555-.146 2.62-.39 4.835-.39 2.045 0 2.973.223 3.177.34 1.23.764 1.825 1.566 1.825 5.563 0 2.398-.02 3.54-.033 4.27-.01.498-.016.812-.01 1.19.006.453.12.853.294 1.204-.488-.407-.51-.865-.5-1.033l.007-.14-.08-5.33c.042-.682.05-2.574-.83-3.505-.353-.374-.823-.58-1.32-.58H26.92v9.96c0 .54.084 1.008.213 1.41-.685-.705-.648-2.697-.623-4.154l.008-.417c.027-1.848-.016-5.768-.018-5.934l-.014-1.248-3.287.067.044 1.255c.15 4.1.076 9.05-.303 9.898-.093.203-.217.386-.357.55z"/><path d="M7.204 28.86c-.21 0-.43.022-.663.064-.757.14-.605.632.05 1.05 1.07.68 2.074 1.53 2.85 3.342.596 1.39 1.85 3.873 5.81 3.873 1.572 0 2.675-.188 2.675-.188s.03 3.548.03 4.927c0 1.59-2.187 2.038-2.187 2.804 0 .3.724.33 1.305.33 1.15 0 3.538-.94 3.538-2.595 0-1.314.022-5.73.022-6.504 0-1.69.922-2.225.922-2.225s.113 9.017-.22 10.228c-.392 1.422-1.1 1.22-1.1 1.854 0 .275.248.41.62.41.9 0 2.534-.783 3.21-2.25.737-1.608.414-10.456.414-10.456l.786-.018s.045 4.05.018 5.902c-.026 1.916-.16 4.34.998 5.484.54.534 1.938 1.353 2.706 1.353.313 0 .522-.138.522-.487 0-.7-1.352-1.275-1.352-3.17v-8.724c1.08 0 .917 2.867.917 2.867l.08 5.33s-.24 1.94 2.138 2.754c.41.14 1.044.23 1.6.23.58 0 1.07-.1 1.115-.348.085-.486-2.16-1.208-2.18-2.71-.013-.918.042-1.453.042-5.44s-.546-5.457-2.443-6.632c-.645-.37-2.165-.507-3.797-.507-2.33 0-4.888.277-5.438.53-.852.636-1.874 1.837-2.014 3.23-.667.422-1.755.67-2.884.67-.68 0-1.378-.09-2.006-.285-2.187-.676-3.114-4.694-6.082-4.694z"/></g><path class="head" fill="#FFF" stroke="#C33" stroke-width="2.472" d="M29.424 29.592c5.855-.59 9.48-2.016 11.248-5.828.137 0 .72-1.78.644-1.78.396-1.44.61-3.144.65-5.16-.01-5.47-2.67-7.403-3.183-8.31.754-4.142-.127-6.026-.535-6.672-1.51-.527-5.252 1.358-7.295 2.686-3.33-.958-10.374-.865-13.015.247-4.872-3.428-7.45-2.905-7.45-2.905s-1.667 2.936-.44 7.23c-1.603 2.01-2.8 3.43-2.8 7.195.002 2.123.257 4.02.83 5.68-.07 0 .768 1.776.792 1.776 1.832 3.27 5.362 5.302 11.32 5.865l9.234-.023z"/></svg>
                      
                        <h4 class="menu__title">Github</h4>
                        <h6 class="menu__subtitle">View Repository</h6>
                      </a>
                    </div>
                  </div>
                </div>
                  
                <div class="col-xs-12 col-lg-8 col-lg-pull-4 col-xl-9 col-xl-pull-3">
                  <p>Though I am a front-end developer by day, I have put pen to paper during the design process, been completely lost in a full stack environment and have even worn the entrepreneurship hat.</p>

                  <p>I am an alumnus of <a target="_blank" href="http://www.sfu.ca/siat.html">SFU's School of Interactive Arts + Technology</a> program, graduating with a Bachelors of Science with a major in Media Arts. Originally from Vancouver, Canada but now residing in Sydney, Australia, I'm looking to grow personally and professionally anywhere in the world.</p>

                  <p class="m-b-0">I want to be involved in projects that I can be proud of, join an amazing team and advance my development career. Take some time to look at my work, credentials and if you're interested in helping me make this happen, <a class="scroll" target="_blank" href="?section=contact">let's get in touch</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About End -->

      <!-- Work Begin -->
      <section id="work" class="section section--work">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">   
              <div class="heading p-t-0">
                <h1 class="heading__title">Work</h1>
                <h6 class="heading__subtitle">
                  A showcase of design, <br class="hidden-xs-down"/>
                  development and experiments
                </h6>
              </div>
              
              <div class="section__row row row-thin">
                <div class="col-xs-12 col-sm-8">
                  <?php include_once('includes/web-directions/project.php');?>
                </div>

                <div class="col-xs-12 col-sm-4">
                  <?php include_once('includes/keno/project.php');?>
                </div>
              </div>

              <div class="section__row row row-thin">
                <div class="col-xs-12 col-sm-4">
                  <?php include_once('includes/business-events-sydney/project.php');?>
                </div>

                <div class="col-xs-12 col-sm-8">
                  <?php include_once('includes/foodsters/project.php');?>
                </div>
              </div>

              <div class="section__row row row-thin">
                <div class="col-xs-12 col-sm-4">
                  <?php include_once('includes/big-head-mode/project.php');?>
                </div>

                <div class="col-xs-12 col-sm-4">
                  <?php include_once('includes/this-is-neat/project.php');?>
                </div>
                
                <div class="col-xs-12 col-sm-4">
                  <?php include_once('includes/the-sockeye/project.php');?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Work End -->

      <!-- Contact Begin -->
      <section id="contact" class="section section--contact p-t-0">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">   
              <div class="heading">
                <h1 class="heading__title">Contact</h1>
                <h6 class="heading__subtitle">
                  Currently available for contract or full-time work, <br class="hidden-xs-down"/>
                  and would love to hear from you
                </h6>
              </div>
              
              <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-4">
                  <small class="contact">
                    michael@hellomichael.com<br/>
                    +61 435 124 204 <br/>
                    Sydney NSW, Australia / Vancouver B.C, Canada<br/>
                    <a target="_blank" href="http://ca.linkedin.com/in/hellomichael/">LinkedIn</a> / <a target="_blank" href="https://www.facebook.com/hello.michael.ngo">Facebook</a> / <a target="_blank" href="https://twitter.com/hellomichaelngo">Twitter</a> / <a target="_blank" href="https://instagram.com/hellomichaelngo">Instagram</a>
                  </small>
                </div>

                <div class="col-xs-12 col-sm-7 col-md-8">
                  <form id="contact-form" class="form" method="post" action="includes/mailer">
                    <input type="text" name="foo" style="display: none;">
                    
                    <div class="form__control">
                      <input class="form__input" type="text" id="name" name="name" placeholder="Your name">

                      <label class="form__label" for="name">
                        <svg class="form__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g fill="#FFF"><path d="M8.518 11.45h.146c-.04-.032-.08-.065-.114-.1-1.157-1.043-2.038-3.074-2.038-4.714 0-2.322 1.9-3.848 3.697-3.848 1.795 0 3.6 1.65 3.6 3.972 0 1.64-.976 3.608-2.187 4.616.248.947 1.607 1.257 4.41 2.025 3.113.854 2.575 2.97 2.566 4.388H1.8c-.01-1.418-.78-3.534 2.332-4.387 2.725-.75 4.082-1.062 4.386-1.95z"/><path d="M8.663 11.45h-.145l.03-.1c.035.038.075.068.115.1z"/></g></svg>
                      </label>  
                    </div>

                    <div class="form__control">          
                      <input class="form__input" type="text" id="email" name="email" placeholder="Your email">   
                      
                      <label class="form__label" for="email">
                        <svg class="form__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g fill="#FFF"><path d="M10.267 12.27c-.093.094-.22.145-.352.145s-.26-.055-.355-.145L3.048 5.755C3.028 5.835 3 5.912 3 6v8c0 .552.447 1 1 1h12c.554 0 1-.447 1-1V6c0-.138-.023-.27-.076-.387l-6.657 6.657z"/><path d="M9.915 11.208l6.187-6.188c-.038-.003-.065-.02-.1-.02H4c-.086 0-.164.03-.245.048l6.16 6.16z"/></g></svg>
                      </label>
                    </div>

                    <div class="form__control">
                      <textarea class="form__textarea" id="message" name="message" placeholder="Your message"></textarea>

                      <label class="form__label" for="message">
                        <svg class="form__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g fill="#FFF"><path d="M2.99 17l4.18-1.124-3.06-3.057M15.043 8.02l-7.497 7.498-3.073-3.072 7.497-7.5zM15.653 3.46c-.61-.613-1.57-.613-2.182 0L12.33 4.6l3.08 3.08 1.143-1.142c.61-.61.61-1.57 0-2.182l-.897-.897z"/></g></svg>
                      </label>
                    </div>

                    <div class="row row-xs-center">
                      <div class="col-xs-7 col-md-9">
                        <small class="form__error"></small>
                      </div>

                      <div class="col-xs-5 col-md-3">
                        <button class="form__submit pull-xs-right" type="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact End -->
    </div>


    <div class="hello__feet" data-1600-end="top: -500px" data-700-end="top: 0" >
      <!-- Add height from head of skrollr -->
      <img src="img/feet.jpg" alt="Michael Ngo's Feet"/>
    </div>
  </div>
</div>

<div class="menu__wrapper--clone"></div>

<?php include_once('includes/footer.php');?>