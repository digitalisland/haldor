<div class="haldor-menu">
    <!-- desktop -->
    <div class="logo-haldor"><?php the_custom_logo();?></div>
    <div class="nav-haldor nav-haldor--desktop">
        <?php wp_nav_menu(); ?>
    </div>

    <!-- mobile -->
    <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        </input>
        <ul id="menu" class="nav-haldor nav-haldor--mobile">
            <?php wp_nav_menu(); ?>
        </ul>
    </div>
    <div class="mobile-logo-haldor"><?php the_custom_logo();?></div>
    <a class="user-button " href=<?php  echo pll_e('logga-in');?>>

        <svg id="Lager_1" data-name="Lager 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.21 45.79">
            <defs>
                <style>
                .cls-1 {
                    fill: #005ea9;
                    stroke-width: 3px;
                }

                .cls-2 {
                    fill: none;
                    stroke: #005ea9;
                    stroke-miterlimit: 10;
                    stroke-width: 3px;
                }
                </style>
            </defs>
            <path class="cls-1"
                d="M23.1,22a5.28,5.28,0,1,0-5.27-5.28A5.27,5.27,0,0,0,23.1,22Zm0-8.37A3.1,3.1,0,1,1,20,16.68,3.09,3.09,0,0,1,23.1,13.59Z" />
            <path class="cls-1"
                d="M23.1,25.52a6.59,6.59,0,0,1,6.59,6.59,1.32,1.32,0,0,0,2.64,0,9.23,9.23,0,0,0-18.45,0,1.32,1.32,0,1,0,2.63,0,6.59,6.59,0,0,1,6.59-6.59Z" />
            <circle class="cls-2" cx="23.1" cy="22.9" r="17.33" />
        </svg>

    </a>
</div>