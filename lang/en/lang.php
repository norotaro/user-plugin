<?php

return [
    'location' => [
        'new' => 'New Location',
    ],
    'locations' => [
        'enabled_label' => "Enabled",
        'enabled_help' => "Disabled locations are not visible on the front-end.",
        'enable_or_disable_title' => "Enable or Disable Locations",
        'enable_or_disable' => 'Enable or disable',
        'selected_amount' => 'Locations selected: :amount',
        'enable_success' => "Successfully enabled those locations.",
        'disable_success' => "Successfully disabled those locations.",
    ],
    'settings' => [
        'activation_tab' => 'Activation',
        'location_tab' => 'Location',
        'security_tab' => 'Security',
        'activate_mode' => 'Activation mode',
        'activate_mode_comment' => 'Select how a user account should be activated.',
        'activate_mode_auto' => 'Automatic',
        'activate_mode_auto_comment' => 'Activated automatically upon registration.',
        'activate_mode_user' => 'User',
        'activate_mode_user_comment' => 'The user activates their own account using mail.',
        'activate_mode_admin' => 'Administrator',
        'activate_mode_admin_comment' => 'Only an Administrator can activate a user.',
        'require_activation' => 'Sign in requires activation',
        'require_activation_comment' => 'Users must have an activated account to sign in.',
        'default_country' => 'Default Country',
        'default_country_comment' => 'When a user does not specify their location, select a default country to use.',
        'default_state' => 'Default State',
        'default_state_comment' => 'When a user does not specify their location, select a default state to use.',
        'use_throttle' => 'Throttle Sign In',
        'use_throttle_comment' => 'Repeat failed sign in attempts will temporarily suspend the user.',
    ],
];