<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <?php $assets->get_image('img/user2-160x160.jpg',false,'img-circle','User Image'); ?>
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

        <li class="header"><?php echo $navigation['main']['title']; ?></li>
        <?php foreach($navigation['main']['items'] as $item): ?>
            <?php if(array_key_exists('menu',$item) && is_array($item['menu'])): ?>
                <li class="treeview">
                    <a href="#">
                        <i class="<?php echo $item['icon']; ?>"></i> <span><?php echo $item['title']; ?></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php foreach($item['menu'] as $menu_item): ?>

                            <li><a href="<?php echo $menu_item['link']; ?>"><i class="fa fa-circle-o"></i> <?php echo $menu_item['title']; ?></a></li>

                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(array_key_exists('link',$item) && !empty($item['link'])): ?>
                <li>
                    <a href="<?php echo $item['link']; ?>">
                        <i class="<?php echo $item['icon']; ?>"></i> <span><?php echo $item['title']; ?></span>
                        <?php if(array_key_exists('badge',$item) && is_array($item['badge'])): ?>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-<?php echo $item['badge']['color']; ?>">
                                    <?php echo $item['badge']['text']; ?>
                                </small>
                            </span>
                        <?php endif; ?>

                  </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
