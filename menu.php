	<header class="header header_fixed container-fluid js-header-sticky" id="page-header" data-arts-theme-text="dark" data-arts-header-sticky-theme="bg-portfolio-1" data-arts-header-logo="primary" data-arts-header-sticky-logo="primary" data-arts-header-sticky-theme-text="dark" data-arts-header-overlay-theme-text="light">
        <!-- top bar -->
        <div class="header__container header__controls">
          <div class="row justify-content-between align-items-center">
            <!-- logo -->
            <div class="col-auto header__col header__col-left"><a class="logo" href="index.php">
                <div class="logo__wrapper-img">
                  <!-- primary logo version (for light backgrounds)--><img class="logo__img-primary" src="img/logo-dark.svg" alt="7 Days Creation" width="122" height="25"/>
                  <!-- secondary logo version (for dark backgrounds)--><img class="logo__img-secondary" src="img/logo-light.svg" alt="7 Days Creation" width="122" height="25"/>
                </div></a>
            </div>
            <!-- - logo -->
			<div class="col-auto header__col d-flex align-items-center">
              <div class="ms-auto header__burger" data-arts-cursor-scale="1.7" >
                <!-- Social Media -->
                <div class="placement">
					<div class="heart" id="likeButton" onclick="like()"></div>
				</div>
				<div class="placenumber">
					<span class="pnumber" id="likeCount">0</span>
				</div>
				<!-- Social Media -->
			  </div>
            </div>
            <!-- burger icon -->
            <div class="col-auto header__col d-flex align-items-center">
			  <div class="ms-auto header__burger" id="js-burger" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
                <!-- burger labels -->
                <div class="header__label header__burger-label">
                  <div class="header__label-burger header__label-burger_inner header__label-burger_closed-open">Menu</div>
                  <div class="header__label-burger header__label-burger_inner header__label-burger_closed-hover">Open</div>
                  <div class="header__label-burger header__label-burger_inner header__label-burger_opened-open">Close</div>
                  <div class="header__label-burger header__label-burger_inner header__label-burger_opened-hover">Close</div>
                </div>
                <!-- - burger labels -->
              </div>
            </div>
            <!-- - burger icon -->
            <!-- "back" button for submenu nav -->
            <div class="header__overlay-menu-back" id="js-submenu-back" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"><i class="material-icons">arrow_back</i>
              <div class="header__label header__label_status">
                <div class="js-header-label-submenu"></div>
              </div>
              <div class="header__label header__label_opened-back">Back</div>
            </div>
            <!-- - "back" button for submenu nav -->
            <!-- slider label -->
            <div class="header__overlay-menu-info header__label header__label_side">Selected Projects</div>
            <!-- - slider label -->
          </div>
        </div>
        <!-- - top bar -->
        <!-- fullscreen overlay container -->
        <div class="header__wrapper-overlay-menu" data-arts-theme-text="light">
          <div class="mask-reveal w-100 h-100">
            <div class="mask-reveal__layer mask-reveal__layer-1 bg-dark-1">
              <div class="mask-reveal__layer mask-reveal__layer-2">
                <div class="row align-items-center h-100">
                  <!-- menu & bottom widgets -->
                  <div class="header__menu-column col-lg-7 order-lg-2 h-100 d-flex flex-column position-relative bg-dark-2">
                    <!-- top gradient-->
                    <div class="header__menu-gradient header__menu-gradient_top"></div>
                    <!-- - top gradient-->
                    <!-- virtual scrolling container -->
                    <div class="header__scroll-container js-header-smooth-scroll-container overflow pointer-events-auto">
                      <div class="header__wrapper-menu">
                        <ul class="menu-overlay js-menu-overlay">
                          <li class="menu-item-has-children"><a href="about.php" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">01&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;2004 to 2024 Journey</span>
                                <div class="menu-overlay__heading h2">About</div>
                              </div></a>
                          </li>
						  <li class="menu-item-has-children current-menu-ancestor"><a href="#" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">01&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;Fullscreen & Halfscreen</span>
                                <div class="menu-overlay__heading h2">Sliders</div>
                              </div></a>
                            <ul class="sub-menu pointer-events-none">
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Fullscreen Sliders</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="001-portfolio-fullscreen-slider-background-color-1.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Background Color 1</div>
                                      </div></a>
                                  </li>
                                  <li><a href="002-portfolio-fullscreen-slider-background-color-2.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Background Color 2</div>
                                      </div></a>
                                  </li>
                                  <li><a href="003-portfolio-fullscreen-slider-background-image-1.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Background Image 1</div>
                                      </div></a>
                                  </li>
                                  <li><a href="004-portfolio-fullscreen-slider-background-image-2.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Background Image 2</div>
                                      </div></a>
                                  </li>
                                  <li><a href="005-portfolio-fullscreen-slider-bottom-navigation.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Bottom Navigation</div>
                                      </div></a>
                                  </li>
                                  <li><a href="006-portfolio-fullscreen-slider-horizontal-cards.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Horizontal Cards</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Horizontal Scrolling</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="007-portfolio-horizontal-scrolling-columns-1.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Horizontal Scrolling / Columns 1</div>
                                      </div></a>
                                  </li>
                                  <li><a href="008-portfolio-horizontal-scrolling-columns-2.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Horizontal Scrolling / Columns 2</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children current-menu-ancestor"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Halfscreen Sliders</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="009-portfolio-halfscreen-slider-vertical-1.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Halfscreen 1</div>
                                      </div></a>
                                  </li>
                                  <li class="current-menu-item"><a href="010-portfolio-halfscreen-slider-vertical-2.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Slider / Halfscreen 2</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">02&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;Introduction Pages</span>
                                <div class="menu-overlay__heading h2">Landing Pages</div>
                              </div></a>
                            <ul class="sub-menu pointer-events-none">
                              <li><a href="011-landing-page-1.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Landing Page 1</div>
                                  </div></a>
                              </li>
                              <li><a href="012-landing-page-2.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Landing Page 2</div>
                                  </div></a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">03&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;Set of Portfolio Details</span>
                                <div class="menu-overlay__heading h2">Works</div>
                              </div></a>
                            <ul class="sub-menu pointer-events-none">
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Works 01 – 06</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="013-portfolio-details-masthead-boxed-horizontal.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Errica Fashion Store</div>
                                      </div></a>
                                  </li>
                                  <li><a href="014-portfolio-details-masthead-boxed-horizontal.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Zero Audio Speaker</div>
                                      </div></a>
                                  </li>
                                  <li><a href="015-portfolio-details-masthead-boxed-vertical.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Contemporary Workplace</div>
                                      </div></a>
                                  </li>
                                  <li><a href="016-portfolio-details-masthead-boxed-vertical.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Cassio Apartments</div>
                                      </div></a>
                                  </li>
                                  <li><a href="017-portfolio-details-masthead-fullwidth-horizontal.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Winter Villa</div>
                                      </div></a>
                                  </li>
                                  <li><a href="018-portfolio-details-masthead-boxed-vertical.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Portable Stereo</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Works 07 – 12</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="019-portfolio-details-masthead-boxed-horizontal.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Coffee &amp; Milk Website</div>
                                      </div></a>
                                  </li>
                                  <li><a href="020-portfolio-details-masthead-fullwidth-horizontal.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Modern Furniture Shop</div>
                                      </div></a>
                                  </li>
                                  <li><a href="021-portfolio-details-masthead-boxed-vertical.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Minimalex</div>
                                      </div></a>
                                  </li>
                                  <li><a href="022-portfolio-details-masthead-boxed-vertical.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Arrigo Accessories Shop</div>
                                      </div></a>
                                  </li>
                                  <li><a href="023-portfolio-details-masthead-fullwidth-horizontal.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Arte</div>
                                      </div></a>
                                  </li>
                                  <li><a href="024-portfolio-details-masthead-boxed-vertical.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Anagrama</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">04&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;Different Portfolio Views</span>
                                <div class="menu-overlay__heading h2">Grids &amp; Lists</div>
                              </div></a>
                            <ul class="sub-menu pointer-events-none">
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Grids</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="025-portfolio-grid-2-columns-aligned.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Grid / 2 Columns / Aligned</div>
                                      </div></a>
                                  </li>
                                  <li><a href="026-portfolio-grid-2-columns.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Grid / 2 Columns / Fancy</div>
                                      </div></a>
                                  </li>
                                  <li><a href="027-portfolio-grid-3-columns.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Grid / 3 Columns</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Lists</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="028-portfolio-list-cards-fullwidth.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">List / Cards / Fullwidth</div>
                                      </div></a>
                                  </li>
                                  <li><a href="029-portfolio-list-cards-boxed.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">List / Cards / Boxed</div>
                                      </div></a>
                                  </li>
                                  <li><a href="030-portfolio-list-backgrounds.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">List / Backgrounds / Parallax</div>
                                      </div></a>
                                  </li>
                                  <li><a href="031-portfolio-list-hover-backgrounds.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">List / Backgrounds / Hover</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Categories</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="032-portfolio-categories.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Categories Listing</div>
                                      </div></a>
                                  </li>
                                  <li><a href="033-portfolio-categories-details.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Category Single</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">05&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;Essential Site Pages</span>
                                <div class="menu-overlay__heading h2">Pages</div>
                              </div></a>
                            <ul class="sub-menu pointer-events-none">
                              <li><a href="034-services.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Services</div>
                                  </div></a>
                              </li>
                              <li><a href="035-about.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">About</div>
                                  </div></a>
                              </li>
                              <li><a href="036-contacts.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Contacts</div>
                                  </div></a>
                              </li>
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Special Pages</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li><a href="046-404-page-dark.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">404 Page / Dark</div>
                                      </div></a>
                                  </li>
                                  <li><a href="047-404-page-light.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">404 Page / Light</div>
                                      </div></a>
                                  </li>
                                  <li><a href="048-coming-soon-dark.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Coming Soon / Dark</div>
                                      </div></a>
                                  </li>
                                  <li><a href="049-coming-soon-light.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Coming Soon / Light</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Classic Menu</div>
                                  </div></a>
                                <ul class="sub-menu pointer-events-none">
                                  <li class="no-ajax"><a href="050-classic-menu-right.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Logo Left / Menu Right</div>
                                      </div></a>
                                  </li>
                                  <li class="no-ajax"><a href="051-classic-menu-center.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Logo Left / Menu Center</div>
                                      </div></a>
                                  </li>
                                  <li class="no-ajax"><a href="052-classic-menu-split-center.html" data-pjax-link="overlayMenu">
                                      <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                        <div class="menu-overlay__heading h3">Logo Center / Split Menu</div>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="053-fullscreen-menu-light-theme.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Fullscreen Menu / Light Theme</div>
                                  </div></a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children"><a href="#" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines"><span class="menu-overlay__subheading small mb-1">05&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;Essential Site Pages</span>
                                <div class="menu-overlay__heading h2">Student's Blog</div>
                              </div></a>
                            <ul class="sub-menu pointer-events-none">
                              <li><a href="034-services.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Services</div>
                                  </div></a>
                              </li>
                              <li><a href="035-about.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">About</div>
                                  </div></a>
                              </li>
                              <li><a href="036-contacts.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Contacts</div>
                                  </div></a>
                              </li>
                              <li><a href="053-fullscreen-menu-light-theme.html" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper arts-split-text js-arts-split-text" data-arts-split-text="lines,words" data-arts-split-text-set="lines" data-arts-split-text-overflow-wrap="lines">
                                    <div class="menu-overlay__heading h3">Fullscreen Menu / Light Theme</div>
                                  </div></a>
                              </li>
                            </ul>
                          </li>
						  
                        </ul>
                      </div>
                    </div>
                    <!-- - virtual scrolling container -->
                    <!-- bottom gradient-->
                    <div class="header__menu-gradient header__menu-gradient_bottom"></div>
                    <!-- - bottom gradient-->
                  </div>
                  <!-- - menu & bottom widgets -->
                  <!-- featured projects slider -->
                  <div class="header__slider-column col-lg-5 order-lg-1 h-100 d-none d-lg-flex flex-column position-relative bg-dark-1">
                    <div class="header__wrapper-slider">
                      <div class="header__label d-lg-none mb-4">Selected Projects</div>
                      <div class="slider-menu swiper-container js-slider-menu" data-speed="1200" data-centered-slides="true" data-drag-mouse="true" data-drag-cursor="true" data-drag-label="Drag" data-drag-hide-cursor="true" data-drag-class="slider-projects-fullscreen__images_scale-up" data-mousewheel-enabled="true" data-keyboard-enabled="true">
                        <div class="swiper-wrapper">
                          <!-- item -->
                          <div class="swiper-slide slider-menu__slide" data-arts-hover-class="hover-zoom-underline">
                            <div data-swiper-parallax-opacity="0.3"><a class="slider-menu__wrapper-image" href="test.php" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                <div class="overflow" data-swiper-parallax-y="-25%">
                                  <div class="w-100 h-100" data-swiper-parallax="true" data-swiper-parallax-y="25%"><img class="swiper-lazy of-cover hover-zoom__zoom" src="#" data-src="img/assets/projects/project1/img-cover-1.jpg" width="1920" height="1280" alt=""/>
                                  </div>
                                </div></a>
                              <div class="slider-menu__header" data-swiper-parallax-y="-50%"><a class="d-inline-block" href="test.php" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                  <h3 class="h3 mt-0 mb-2 slider__heading underline-hover__target">Errica Fashion Store</h3></a>
                                <div class="w-100"></div>
                                <div class="d-inline-block slider__subheading">
                                  <ul class="post-meta post-meta_mini">
                                    <li><a href="#">Identity</a>
                                      <div class="post-meta__divider"></div>
                                    </li>
                                    <li><a href="#">2024</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- item -->
                          <div class="swiper-slide slider-menu__slide" data-arts-hover-class="hover-zoom-underline">
                            <div data-swiper-parallax-opacity="0.3"><a class="slider-menu__wrapper-image" href="014-portfolio-details-masthead-boxed-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                <div class="overflow" data-swiper-parallax-y="-25%">
                                  <div class="w-100 h-100" data-swiper-parallax="true" data-swiper-parallax-y="25%"><img class="swiper-lazy of-cover hover-zoom__zoom" src="#" data-src="img/assets/projects/project2/img-cover-2.jpg" width="1920" height="1280" alt=""/>
                                  </div>
                                </div></a>
                              <div class="slider-menu__header" data-swiper-parallax-y="-50%"><a class="d-inline-block" href="014-portfolio-details-masthead-boxed-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                  <h3 class="h3 mt-0 mb-2 slider__heading underline-hover__target">Zero Audio Speaker</h3></a>
                                <div class="w-100"></div>
                                <div class="d-inline-block slider__subheading">
                                  <ul class="post-meta post-meta_mini">
                                    <li><a href="#">Concept</a>
                                      <div class="post-meta__divider"></div>
                                    </li>
                                    <li><a href="#">2023</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- item -->
                          <div class="swiper-slide slider-menu__slide" data-arts-hover-class="hover-zoom-underline">
                            <div data-swiper-parallax-opacity="0.3"><a class="slider-menu__wrapper-image" href="017-portfolio-details-masthead-fullwidth-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                <div class="overflow" data-swiper-parallax-y="-25%">
                                  <div class="w-100 h-100" data-swiper-parallax="true" data-swiper-parallax-y="25%"><img class="swiper-lazy of-cover hover-zoom__zoom" src="#" data-src="img/assets/projects/project5/img-cover-5.jpg" width="1920" height="1280" alt=""/>
                                  </div>
                                </div></a>
                              <div class="slider-menu__header" data-swiper-parallax-y="-50%"><a class="d-inline-block" href="017-portfolio-details-masthead-fullwidth-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                  <h3 class="h3 mt-0 mb-2 slider__heading underline-hover__target">Winter Villa</h3></a>
                                <div class="w-100"></div>
                                <div class="d-inline-block slider__subheading">
                                  <ul class="post-meta post-meta_mini">
                                    <li><a href="#">Interior</a>
                                      <div class="post-meta__divider"></div>
                                    </li>
                                    <li><a href="#">2022</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- item -->
                          <div class="swiper-slide slider-menu__slide" data-arts-hover-class="hover-zoom-underline">
                            <div data-swiper-parallax-opacity="0.3"><a class="slider-menu__wrapper-image" href="019-portfolio-details-masthead-boxed-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                <div class="overflow" data-swiper-parallax-y="-25%">
                                  <div class="w-100 h-100" data-swiper-parallax="true" data-swiper-parallax-y="25%"><img class="swiper-lazy of-cover hover-zoom__zoom" src="#" data-src="img/assets/projects/project7/img-cover-7.jpg" width="1920" height="1280" alt=""/>
                                  </div>
                                </div></a>
                              <div class="slider-menu__header" data-swiper-parallax-y="-50%"><a class="d-inline-block" href="019-portfolio-details-masthead-boxed-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                  <h3 class="h3 mt-0 mb-2 slider__heading underline-hover__target">Coffee &amp; Milk Website</h3></a>
                                <div class="w-100"></div>
                                <div class="d-inline-block slider__subheading">
                                  <ul class="post-meta post-meta_mini">
                                    <li><a href="#">UI / UX</a>
                                      <div class="post-meta__divider"></div>
                                    </li>
                                    <li><a href="#">2024</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- item -->
                          <div class="swiper-slide slider-menu__slide" data-arts-hover-class="hover-zoom-underline">
                            <div data-swiper-parallax-opacity="0.3"><a class="slider-menu__wrapper-image" href="020-portfolio-details-masthead-fullwidth-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                <div class="overflow" data-swiper-parallax-y="-25%">
                                  <div class="w-100 h-100" data-swiper-parallax="true" data-swiper-parallax-y="25%"><img class="swiper-lazy of-cover hover-zoom__zoom" src="#" data-src="img/assets/projects/project8/img-cover-8.jpg" width="1920" height="1280" alt=""/>
                                  </div>
                                </div></a>
                              <div class="slider-menu__header" data-swiper-parallax-y="-50%"><a class="d-inline-block" href="020-portfolio-details-masthead-fullwidth-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                  <h3 class="h3 mt-0 mb-2 slider__heading underline-hover__target">Modern Furniture Shop</h3></a>
                                <div class="w-100"></div>
                                <div class="d-inline-block slider__subheading">
                                  <ul class="post-meta post-meta_mini">
                                    <li><a href="#">UI / UX</a>
                                      <div class="post-meta__divider"></div>
                                    </li>
                                    <li><a href="#">2023</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- item -->
                          <div class="swiper-slide slider-menu__slide" data-arts-hover-class="hover-zoom-underline">
                            <div data-swiper-parallax-opacity="0.3"><a class="slider-menu__wrapper-image" href="023-portfolio-details-masthead-fullwidth-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                <div class="overflow" data-swiper-parallax-y="-25%">
                                  <div class="w-100 h-100" data-swiper-parallax="true" data-swiper-parallax-y="25%"><img class="swiper-lazy of-cover hover-zoom__zoom" src="#" data-src="img/assets/projects/project11/img-cover-11.jpg" width="1920" height="1280" alt=""/>
                                  </div>
                                </div></a>
                              <div class="slider-menu__header" data-swiper-parallax-y="-50%"><a class="d-inline-block" href="023-portfolio-details-masthead-fullwidth-horizontal.html" data-arts-hover="trigger" data-arts-cursor="true" data-arts-cursor-hide-native="true" data-arts-cursor-label="View Project" data-arts-cursor-scale="2.4" data-arts-cursor-color="#fff" data-arts-cursor-background-color="#ed4830">
                                  <h3 class="h3 mt-0 mb-2 slider__heading underline-hover__target">Arte</h3></a>
                                <div class="w-100"></div>
                                <div class="d-inline-block slider__subheading">
                                  <ul class="post-meta post-meta_mini">
                                    <li><a href="#">Identity</a>
                                      <div class="post-meta__divider"></div>
                                    </li>
                                    <li><a href="#">2023</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="is-dragging__blocker"></div>
                      </div>
                    </div>
                  </div>
                  <!-- - featured projects slider -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- - fullscreen overlay container // - fullscreen overlay container 
        -->
        <!-- - fullscreen overlay container -->
      </header>