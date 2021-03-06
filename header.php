	<header class="header clear" role="banner" id="non-sticky">
                <div class="wrapper">
                    <?php if ( is_active_sidebar( 'header-left' ) ) {
                        if ( is_active_sidebar( 'header-right' ) ) { ?>
                            <div class="one-third">
                                <?php dynamic_sidebar( 'header-left' ); ?>
                            </div>
                        <?php } else { ?>
                            <div class="one-whole">
                                <?php dynamic_sidebar( 'header-left' ); ?>
                            </div>
                        <?php }
                    } else { ?>
                        <div id="default-logo" class="one-third">
                            <?php echo bloginfo('name'); ?>
                        </div>
                    <?php }; ?>

             <?php if ( is_active_sidebar( 'header-right' ) ) { ?>
                        <div class="two-third">
                            <?php dynamic_sidebar( 'header-right' ); ?>
							<nav class="nav" role="navigation">
                    <div id="toggle-wrapper">
                        <div id="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <?php html5blank_nav(); ?>
                </nav>
                        </div>
                    <?php } ?>
                </div>
                <div class="nav-block"></div>
			</header>
				
