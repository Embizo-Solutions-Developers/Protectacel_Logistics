<!DOCTYPE html>
<html style="font-size: 16px" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>Shop</title>
    <link rel="stylesheet" href="nicepage.css" media="screen" />
    <link rel="stylesheet" href="About.css" media="screen" />
    <link rel="stylesheet" href="Home.css" media="screen" />

    <script
      class="u-script"
      type="text/javascript"
      src="jquery.js"
      defer
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="nicepage.js"
      defer
    ></script>
    <meta name="theme-color" content="#478ac9" />
  </head>

  <body class="u-body u-xl-mode" data-lang="en">
    <!-- HEADER -->
    <header class="u-clearfix u-header u-white" id="sec-header">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="Home.html" class="u-image u-logo u-image-1">
          <img
            src="images/logo-01.png"
            class="u-logo-image u-logo-image-1"
            style="width: 87px; height: 87px"
          />
        </a>
        <nav class="nav-bar">
          <div class="nav-container">
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <ul class="nav-menu" id="navMenu">
              <!-- <li><a href="Home.html">Home</a></li>
              <li><a href="About.html">About</a></li>
              <li><a href="Shop.html">Shop</a></li>
              <li><a href="Contact.html">Contact</a></li> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <!-- SHOP SECTION -->
    <section
      class="u-align-center u-clearfix u-grey-5 u-section-4"
      id="carousel_custom"
    >
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-palette-1-dark-1 u-text-1">
          <i class="fas fa-shopping-cart" style="margin-right: 10px"></i>SHOP
          WITH US
        </h2>

        <div class="carousel-container">
          <!-- Row 1 -->
          <div class="carousel-row-wrapper">
            <button
              class="carousel-arrow left"
              onclick="scrollCarousel('carousel1', -1)"
            >
              &#10094;
            </button>
            <div class="carousel-row" id="carousel1">
              <div class="product-card">
                <img src="images/green_vest.jpg" alt="Power Equipment" />
                <div class="product-info">
                  <h5>Green Vest</h5>
                  <p class="desc">
                    High-visibility helmet designed for safety and comfort on
                    the job
                  </p>
                </div>
              </div>
              <div class="product-card">
                <img src="images/orange-helmet.jpg" alt="Logistics" />
                <div class="product-info">
                  <h5>Orange Safety Helmet</h5>
                  <p class="desc">
                    Durable head protection for high-risk work zones.
                  </p>
                </div>
              </div>
              <div class="product-card">
                <img src="images/yellow-boots.jpg" alt="Logistics" />
                <div class="product-info">
                  <h5>Safety Boots</h5>
                  <p class="desc">Durable in terrain grounds.</p>
                </div>
              </div>
              <div class="product-card">
                <img src="images/mining_gloves.jpeg" alt="Logistics" />
                <div class="product-info">
                  <h5>Safety Gloves</h5>
                  <p class="desc">Durable in handling rough equipment.</p>
                </div>
              </div>
              <div class="product-card">
                <img
                  src="images/close-up-hand-holding-heaphones.jpg"
                  alt="Logistics"
                />
                <div class="product-info">
                  <h5>Acoustic Earmuffs</h5>
                  <p class="desc">
                    Durable in blocking loud environmental noises.
                  </p>
                </div>
              </div>
            </div>
            <button
              class="carousel-arrow right"
              onclick="scrollCarousel('carousel1', 1)"
            >
              &#10095;
            </button>
          </div>

          <!-- Row 2 -->
          <div class="carousel-row-wrapper">
            <button
              class="carousel-arrow left"
              onclick="scrollCarousel('carousel2', -1)"
            >
              &#10094;
            </button>
            <div class="carousel-row" id="carousel2">
              <div class="product-card">
                <img src="images/package_poe's.jpg" alt="Power Equipment" />
                <div class="product-info">
                  <h5>Safety Package</h5>
                  <p class="desc">
                    Engineered for protection, built to last in tough
                    environments.
                  </p>
                </div>
              </div>
              <div class="product-card">
                <img src="images/orange_vests.jpg" alt="Power Equipment" />
                <div class="product-info">
                  <h5>Orange Safety Vest</h5>
                  <p class="desc">
                    High-visibility helmet designed for safety and comfort on
                    the job
                  </p>
                </div>
              </div>
              <div class="product-card">
                <img
                  src="images/protective-equipment-ensures-safety-work.jpg"
                  alt="Power Equipment"
                />
                <div class="product-info">
                  <h5>Safety Glasses</h5>
                  <p class="desc">
                    High-visibility helmet designed for safety and comfort on
                    the job
                  </p>
                </div>
              </div>
              <div class="product-card">
                <img src="images/safety_trousers.jpeg" alt="Power Equipment" />
                <div class="product-info">
                  <h5>Orange Safety Trousers</h5>
                  <p class="desc">
                    High-visibility helmet designed for safety and comfort on
                    the job
                  </p>
                </div>
              </div>
              <div class="product-card">
                <img
                  src="images/kid-holding-with-two-hands-blue-medical-face-mask.jpg"
                  alt="Power Equipment"
                />
                <div class="product-info">
                  <h5>N95 Respiratory Mask</h5>
                  <p class="desc">
                    Protective mask from surrounding chemicals.
                  </p>
                </div>
              </div>
            </div>
            <button
              class="carousel-arrow right"
              onclick="scrollCarousel('carousel2', 1)"
            >
              &#10095;
            </button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
