<div class="relative">

  <?php require('views/partials/html-head.php'); ?>

  <main>

    <!-- BANNER -->
    <section class="banner">
      <article id="hero-1" style="--i: 5">
        <div class="hero-info">
          <h2>Travel the</h2>
          <h1>World</h1>
          <h3>Pragser Wildsee, Italy</h3>
        </div>
        <div class="hero-image hi-1"></div>
      </article>

      <article id="hero-2" style="--i: 4">
        <div class="hero-info">
          <h2>Savour the</h2>
          <h1>Journey</h1>
          <h3>Marignier, France</h3>
        </div>
        <div class="hero-image hi-2"></div>

      </article>

      <article id="hero-3" style="--i: 3">
        <div class="hero-info">
          <h2>Expand Your</h2>
          <h1>Horizons</h1>
          <h3>Hooker Valley Track, New Zealand</h3>
        </div>
        <div class="hero-image hi-3"></div>

      </article>

      <article id="hero-4" style="--i: 2">
        <div class="hero-info">
          <h2>Explore and</h2>
          <h1>Reflect</h1>
          <h3>Dolmites, Italy</h3>
        </div>
        <div class="hero-image hi-4"></div>

      </article>

      <article id="hero-5" style="--i: 1">
        <div class="hero-info">
          <h2>Change Your</h2>
          <h1>Perspective</h1>
          <h3>Phuket, Thailand</h3>
        </div>
        <div class="hero-image hi-5"></div>
      </article>
    </section>

    <!-- CONTROLLED SLIDER -->
    <div class="controlled-slider">
      <div class="container">
        <div class="slider">

          <div class="box1 box">
            <div class="bg"></div>
            <div class="details">
              <h1 class="slider-heading">I'm the first Box</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                diam, ac mattis orci pellentesque eget.
              </p>
              <button>Check Now</button>
            </div>

            <div class="illustration">
              <div class="inner"></div>
            </div>
          </div>


          <div class="box2 box">
            <div class="bg"></div>
            <div class="details">
              <h1 class="slider-heading">I'm the second Box</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                diam, ac mattis orci pellentesque eget.
              </p>
              <button>Check Now</button>
            </div>

            <div class="illustration">
              <div class="inner"></div>
            </div>
          </div>

          <div class="box3 box">
            <div class="bg"></div>
            <div class="details">
              <h1 class="slider-heading">I'm the third Box</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                diam, ac mattis orci pellentesque eget.
              </p>
              <button>Check Now</button>
            </div>

            <div class="illustration">
              <div class="inner"></div>
            </div>
          </div>

          <div class="box4 box">
            <div class="bg"></div>
            <div class="details">
              <h1 class="slider-heading">I'm the fourth Box</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                diam, ac mattis orci pellentesque eget.
              </p>
              <button>Check Now</button>
            </div>

            <div class="illustration">
              <div class="inner"></div>
            </div>
          </div>

          <div class="box5 box">
            <div class="bg"></div>
            <div class="details">
              <h1 class="slider-heading">I'm the fifth Box</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                diam, ac mattis orci pellentesque eget.
              </p>
              <button>Check Now</button>
            </div>

            <div class="illustration">
              <div class="inner"></div>
            </div>
          </div>

        </div>

        <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91">
          <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91">
          <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff" />
        </svg>
        <div class="trail">
          <div class="box1 active">1</div>
          <div class="box2">2</div>
          <div class="box3">3</div>
          <div class="box4">4</div>
          <div class="box5">5</div>
        </div>
      </div>
    </div>

  </main>

  <?php require('views/partials/html-foot.php'); ?>

</div>