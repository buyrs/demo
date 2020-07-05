<?php

return [

    /*
     |--------------------------------------------------------------------------
     | General
     |--------------------------------------------------------------------------
     */
    "current_password_incorrect" => "Le mot de passe actuel est incorrect.",

    /*
     |--------------------------------------------------------------------------
     | Email and notifications
     |--------------------------------------------------------------------------
     */
    "reset_password_mail_subject" => "Réinitialiser votre mot de passe",
    "reset_password_mail_top" => "Vous recevez ce courriel parce que nous avons reçu une demande de réinitialisation du mot de passe de votre compte. Veuillez cliquer sur le bouton ci-dessous pour définir un nouveau mot de passe.",
    "reset_password_mail_cta" => "Réinitialisation du mot de passe",
    "reset_password_mail_bottom" => "Si vous n'avez pas demandé une réinitialisation de votre mot de passe, aucune autre action n'est nécessaire. Ce lien est valable pendant 24 heures.",

    /*
     |--------------------------------------------------------------------------
     | User flow
     |--------------------------------------------------------------------------
     */

    // New user registration
    "user_registration_subject" => "Merci d'avoir essayé :account_name!",
    "user_registration_body_top" => ":user_name,\n\nMerci d'avoir essayé :account_name. Vos :trial_days jours d'éssai ont commencé.",
    "user_registration_cta" => "Mettre en place une campagne de fidélisation",
    "user_registration_body_bottom" => "Faites un tour, et envoyez-nous un courriel à l'adresse :support_email si vous rencontrez des problèmes ou si vous avez des questions concernant la création de votre compte.",

    // User trial ends in 3 days
    "user_trial_ends_in_3_days_subject" => "Votre essai se termine dans 3 jours",
    "user_trial_ends_in_3_days_body_top" => ":user_name,\n\nThanks for trying :account_name. This is a kind reminder your trial expires in 3 days. When your trial expires, all data will be deleted permanently.",
    "user_trial_ends_in_3_days_cta" => "Upgrade account",
    "user_trial_ends_in_3_days_body_bottom" => "Regardless of your choice, we want to say thank you for trying :account_name. We know it's an investment of your time, and we appreciate you giving us a chance.",

    // User trial ends tomorrow
    "user_trial_ends_tomorrow_subject" => "Votre période d'essai s'achève demain",
    "user_trial_ends_tomorrow_body_top" => "This is a kind reminder your :account_name account expires tomorrow. When your trial expires, all data will be deleted permanently. This can not be undone.",
    "user_trial_ends_tomorrow_cta" => "Upgrade account",
    "user_trial_ends_tomorrow_body_bottom" => "Regardless of your choice, we want to say thank you for trying :account_name. We know it's an investment of your time, and we appreciate you giving us a chance.",

    // User trial has ended
    "user_trial_has_ended_subject" => "Votre période d'essai est fini",
    "user_trial_has_ended_body_top" => "Thanks for trying :account_name. Your account and all associated data has been deleted. But no worries, you're always welcome to create a new account!",
    "user_trial_has_ended_cta" => "Créer un nouveau compte",
    "user_trial_has_ended_body_bottom" => "Again, thank you for trying :account_name. We know it's an investment of your time, and we appreciate you gave us a chance.",

    // User account expired yesterday
    "user_account_expired_yesterday_subject" => "Votre compte a expiré",
    "user_account_expired_yesterday_body_top" => "Thanks for using :account_name. We'd love to keep you as a customer, but we respect your decision. Your account and all associated data will be deleted after :grace_period_days days. You can prevent this by purchasing a subscription.",
    "user_account_expired_yesterday_cta" => "Prevent account removal",
    "user_account_expired_yesterday_body_bottom" => "Quel que soit votre choix, nous voulons vous remercier d'avoir utilisé la plateforme, :account_name!",

    // User account has been deleted
    "user_account_deleted_subject" => "Votre compte a été supprimé",
    "user_account_deleted_body_top" => "Nous sommes désolés de vous voir partir. Nous vous souhaitons bonne chance et vous êtes toujours les bienvenus.!",
    "user_account_deleted_cta" => "Créer un nouveau compte",
    "user_account_deleted_body_bottom" => "Merci encore d'utiliser :account_name.",

    // User subscription expired (not used currently)
    "user_subscription_expired_subject" => "Votre abonnement a expiré",
    "user_subscription_expired_body_top" => "This is a kind reminder your :account_name account expires tomorrow. À l'expiration de votre abonnement, il sera converti en compte d'essai gratuit. Aucune donnée ne sera perdue à ce moment-là.",
    "user_subscription_expired_cta" => "Renouveler l'abonnement",
    "user_subscription_expired_body_bottom" => "Quel que soit votre choix, nous voulons vous remercier d'avoir essayé la plateforme, :account_name. Nous savons que c'est un investissement de votre temps, et nous apprécions que vous nous donniez une chance.",
];
