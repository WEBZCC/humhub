<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            echo \humhub\core\content\widgets\Stream::widget([
                'streamAction' => '//dashboard/dashboard/stream',
                'showFilters' => false,
                'messageStreamEmpty' => Yii::t('DashboardModule.views_dashboard_index_guest', '<b>No public contents to display found!</b>'),
            ]);
            ?>

        </div>
        <div class="col-md-4">
            <?php
            echo \humhub\core\dashboard\widgets\Sidebar::widget(['widgets' => [
                //array('application.modules_core.directory.widgets.NewMembersWidget', array('showMoreButton' => true), array('sortOrder' => 10)),
                //array('application.modules_core.directory.widgets.NewSpacesWidget', array('showMoreButton' => true), array('sortOrder' => 10)),
            ]]);
            ?>
        </div>
    </div>
</div>
