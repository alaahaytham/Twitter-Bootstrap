    <?php if ( ( $logo && $topbar_logo ) || ( $site_name && $topbar_site_name ) || $page['topbar'] ): ?>
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <?php if ( $logo && $topbar_logo && $topbar_logo_output ): ?>
          <?php print $topbar_logo_output; ?>
          <?php endif; ?>

          <?php if ( $site_name && $topbar_site_name && $topbar_site_name_output ): ?>
          <?php print $topbar_site_name_output; ?>
          <?php endif; ?>

          <?php if ( $page['topbar'] ): ?>
          <?php print render($page['topbar']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if ( ( $logo && $header_logo ) || ( $site_name && $header_site_name ) || $page['header'] ): ?>
    <div id="wrapper-header">
      <div id="header" class="container">
        <?php if ( $logo && $header_logo && $header_logo_output ): ?>
        <?php print $header_logo_output; ?>
        <?php endif; ?>

        <?php if ( $site_name && $header_site_name && $header_site_name_output ): ?>
        <?php print $header_site_name_output; ?>
        <?php endif; ?>

        <?php if ( $page['header'] ) { ?>
        <?php print render($page['header']); ?>
        <?php } ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ( $page['hero'] ): ?>
    <div id="wrapper-hero">
      <div id="hero" class="container">
        <?php print render($page['hero']); ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ( $page['spotlight'] ): ?>
    <div id="wrapper-spotlight">
      <div id="spotlight" class="container">
        <?php print render($page['spotlight']); ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ( $page['spotlight_autosize'] ): ?>
    <div id="wrapper-spotlight-autosize">
      <div id="spotlight-autosize" class="container">
        <div class="row">
          <?php print render($page['spotlight_autosize']); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if ( $page['page_header'] || $breadcrumb ): ?>
    <div id="wrapper-page-header">
      <div id="page-header" class="container">
        <?php if ( $breadcrumb ): ?>
        <div id="breadcrumb">
          <?php print $breadcrumb; ?>
        </div>
        <?php endif; ?>
        <?php print render($page['page_header']); ?>
      </div>
    </div>
    <?php endif; ?>

    <div id="wrapper-page">
      <div id="backdrop-page">
        <div id="page" class="container">

          <a name="main-content"></a>

          <?php if ( $page['sidebar_first'] || $page['sidebar_first_header'] || $page['sidebar_first_footer'] ) { ?>
          <div id="wrapper-sidebar-first" class="wrapper-sidebar">
            <div id="sidebar-first" class="sidebar">

              <?php if ( $page['sidebar_first_header'] ): ?>
              <div id="sidebar-first-header" class="header">
                <?php print render($page['sidebar_first_header']); ?>
              </div>
              <?php endif; ?>

              <?php print render($page['sidebar_first']); ?>

              <?php if ( $page['sidebar_first_footer'] ): ?>
              <div id="sidebar-first-footer" class="footer">
                <?php print render($page['sidebar_first_footer']); ?>
              </div>
              <?php endif; ?>

            </div>
          </div>
          <?php } ?>

          <?php if ( $page['content'] ): ?>
          <div id="wrapper-content" class="wrapper-content">
            <div id="content" class="content">

              <?php print render($title_prefix); ?>
              <?php if ( $title ): ?>
              <h1 id="page-title"><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>

              <?php if ( $messages ): ?>
              <div id="messages">
                <?php print $messages; ?>
              </div>
              <?php endif; ?>

              <?php if ( $page['highlighted'] ): ?>
              <div id="wrapper-highlighted">
                <div id="highlighted">
                  <?php print render($page['highlighted']); ?>
                </div>
              </div>
              <?php endif; ?>

              <?php if ( $page['help'] ): ?>
              <div id="wrapper-help">
                <div id="help">
                  <?php print render($page['help']); ?>
                </div>
              </div>
              <?php endif; ?>

              <?php if ( $primary_local_tasks || $secondary_local_tasks || $action_links ): ?>
              <div id="local-tasks">

                <?php if ( $primary_local_tasks ): ?>
                <ul id="local-tasks-primary" class="tabs local-tasks">
                  <?php print render($primary_local_tasks); ?>
                </ul>
                <?php endif; ?>

                <?php if ( $secondary_local_tasks ): ?>
                <ul id="local-tasks-secondary" class="pills local-tasks">
                  <?php print render($secondary_local_tasks); ?>
                </ul>
                <?php endif; ?>

                <?php if ( $action_links ): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>

              </div>
              <?php endif; ?>

              <?php print render($page['content_header']); ?>
              <?php print render($page['content']); ?>
              <?php print render($page['content_footer']); ?>
            </div>
          </div>
          <?php endif; ?>

          <?php if ( $page['sidebar_second'] || $page['sidebar_second_header'] || $page['sidebar_second_footer'] ) { ?>
          <div id="wrapper-sidebar-second" class="wrapper-sidebar">
            <div id="sidebar-second" class="sidebar">

              <?php if ( $page['sidebar_second_header'] ): ?>
              <div id="sidebar-second-header" class="header">
                <?php print render($page['sidebar_second_header']); ?>
              </div>
              <?php endif; ?>

              <?php print render($page['sidebar_second']); ?>

              <?php if ( $page['sidebar_second_footer'] ): ?>
              <div id="sidebar-second-footer" class="footer">
                <?php print render($page['sidebar_second_footer']); ?>
              </div>
              <?php endif; ?>

            </div>
          </div>
          <?php } ?>

          <?php print $feed_icons; ?>

        </div>
      </div>
    </div>

    <?php if ( $page['footer_spotlight_autosize'] ): ?>
    <div id="wrapper-footer-spotlight-autosize">
      <div id="footer-spotlight-autosize" class="container">
        <div class="row">
          <?php print render($page['footer_spotlight_autosize']); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if ( $page['footer_spotlight'] ) { ?>
    <div id="wrapper-footer-spotlight">
      <div id="footer-spotlight" class="container">
        <?php print render($page['footer_spotlight']); ?>
      </div>
    </div>
    <?php } ?>

    <?php if ( $page['footer_hero'] ) { ?>
    <div id="wrapper-footer-hero">
      <div id="footer-hero" class="container">
        <?php print render($page['footer_hero']); ?>
      </div>
    </div>
    <?php } ?>

    <div id="wrapper-page-footer">
      <div id="backdrop-page-footer">
        <div id="page-footer" class="container">
          <?php if ( $page['page_footer'] ) { ?>
          <?php print render($page['page_footer']); ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <div id="wrapper-footer">
      <div id="footer" class="container">
        <?php if ( $page['footer_menu'] ) { ?>
        <div id="wrapper-footer-menu">
          <div id="footer-menu" class="navigation">
            <?php print render($page['footer_menu']); ?>
          </div>
        </div>
        <?php } ?>
        <?php if ( $page['footer'] ) { ?>
        <?php print render($page['footer']); ?>
        <?php } ?>
      </div>
    </div>
