<?php
namespace App\Form;

use App\Config;
use App\Entity;
use App\Settings;
use Doctrine\ORM\EntityManager;

class SettingsForm extends AbstractSettingsForm
{
    public function __construct(
        EntityManager $em,
        Entity\Repository\SettingsRepository $settingsRepo,
        Settings $settings,
        Config $config
    ) {
        $formConfig = $config->get('forms/settings', [
            'settings' => $settings,
        ]);

        parent::__construct(
            $em,
            $settingsRepo,
            $settings,
            $formConfig
        );
    }
}
