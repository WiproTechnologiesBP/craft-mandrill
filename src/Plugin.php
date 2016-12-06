<?php
/**
 * @copyright Copyright (c) 2015 Pixel & Tonic, Inc.
 */
namespace craftcms\mandrill;

use craft\events\Event;
use craft\events\RegisterComponentTypesEvent;
use craft\helpers\MailerHelper;

/**
 * Plugin represents the Mandrill plugin.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class Plugin extends \craft\base\Plugin
{
	// Public Methods
	// =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Event::on(MailerHelper::class, MailerHelper::EVENT_REGISTER_MAILER_TRANSPORT_TYPES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = MandrillAdapter::class;
        });
    }
}