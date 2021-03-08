<?php

use yii\db\Migration;

/**
 * Class m210303_163530_create_init_rbac
 */
class m210303_163530_create_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $auth = Yii::$app->authManager;

        // add "manageRegion" permission
        $manageRegion = $auth->createPermission('manageRegion');
        $manageRegion->description = 'Manage a region';
        $auth->add($manageRegion);

        // add "manageLocal" permission
        $manageLocal = $auth->createPermission('manageLocal');
        $manageLocal->description = 'Manage Local';
        $auth->add($manageLocal);

        // add "manageDispo" permission
        $manageDispo = $auth->createPermission('manageDispo');
        $manageDispo->description = 'Manage Dispo';
        $auth->add($manageDispo);

// ---- This is the start of the role creation ----

        // add "member" role and give this role the "manageRegion" permission
        $member = $auth->createRole('member');
        $auth->add($member);
        $auth->addChild($member, $manageRegion);

        // add "member" role and give this role the "manageLocal" permission
        $member = $auth->createRole('member');
        $auth->add($member);
        $auth->addChild($member, $manageLocal);

        // add "member" role and give this role the "manageDispo" permission
        $member = $auth->createRole('member');
        $auth->add($member);
        $auth->addChild($member, $manageDispo);

        // add "admin" role and give this role the permissions of the "member" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $member);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($member, 2);
        $auth->assign($admin, 1);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }

}
