<div class="ipAdminToolbarContainer ipsAdminToolbarContainer">
    <div class="ipAdminToolbar ipsAdminToolbar">
        <a href="#" class="ipmItemMenu ipsAdminMenu">
            <span class="ipmMenuBar"></span>
            <span class="ipmMenuBar"></span>
            <span class="ipmMenuBar"></span>
        </a>
        <div class="ipsAdminMenuBlock ipmMenu">
            <a class="ipmItemMenu">
                <span class="ipmMenuBar"></span>
                <span class="ipmMenuBar"></span>
                <span class="ipmMenuBar"></span>
            </a>

            <span class="ipmMenuTitle"><?php _e('Menu', 'ipAdmin') ?></span>
            <?php
                echo $this->generateMenu('admin_navigation', $menuItems, 'bootstrapNav.php');
                //TODOX in this way anyone who can access menu config, can change this menu to anything :| secure somehow
            ?>
            <ul>
                <li>
                    <a href="<?php echo ipConfig()->baseUrl('', array('sa' => 'Admin.logout')) ?>">
                        <?php _e('Logout', 'ipAdmin') ?>
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-times fa-stack-1x"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <?php if ($curModTitle) { ?>
            <a href="<?php echo $this->esc($curModUrl) ?>" class="ipmItemCurrent ipsItemCurrent ipmMobileHide"><?php echo $this->esc($curModTitle) ?></a>
        <?php } ?>



        <a href="<?php echo ipConfig()->baseUrl('', array('sa' => 'Admin.logout')) ?>" class="ipmAdminAction ipmMobileHide">
            <?php _e('Logout', 'ipAdmin') ?>
            <span class="fa-stack">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-times fa-stack-1x"></i>
            </span>
        </a>
        <a target="_blank" href="<?php echo $this->esc($helpUrl); ?>" class="ipmAdminAction ipmMobileHide">
            <?php _e('Help', 'ipAdmin') ?>
            <span class="fa-stack">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-question fa-stack-1x"></i>
            </span>
        </a>
    </div>
</div>
