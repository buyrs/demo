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
    "reset_password_mail_subject" => "réinitialisez votre mot de passe",
    "reset_password_mail_top" => "Vous recevez cet e-mail, car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte. Veuillez cliquer sur le bouton ci-dessous pour définir un nouveau mot de passe.",
    "reset_password_mail_cta" => "Réinitialiser le mot de passe",
    "reset_password_mail_bottom" => "Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune autre action n'est requise. Ce lien est valable 24 heures.",

    /*
     |--------------------------------------------------------------------------
     | User flow
     |--------------------------------------------------------------------------
     */

    // New user registration
    "user_registration_subject" => "Merci d'avoir essayé :account_name!",
    "user_registration_body_top" => ":user_name,\n\nMerci d'avoir essayé :account_name. Vos :trial_days jours d'essai ont commencés.",
    "user_registration_cta" => "Mettre en place une campagne de fidélité",
    "user_registration_body_bottom" => "Faites-nous signe et s'il vous plaît écrivez-nous à :support_email si vous rencontrez des problèmes ou avez des questions sur la configuration de votre compte.",

    // User trial ends in 3 days
    "user_trial_ends_in_3_days_subject" => "Votre essai se termine dans 3 jours",
    "user_trial_ends_in_3_days_body_top" => ":user_name,\n\nMerci d'avoir essayé :account_name. Ceci est un rappel aimable que votre essai expire dans 3 jours. À l'expiration de votre essai, toutes les données seront supprimées définitivement.",
    "user_trial_ends_in_3_days_cta" => "Activer votre compte",
    "user_trial_ends_in_3_days_body_bottom" => "Quel que soit votre choix, nous tenons à vous remercier d'avoir essayé :account_name. Nous savons que c'est un investissement de votre temps et nous apprécions que vous nous ayez donné une chance.",

    // User trial ends tomorrow
    "user_trial_ends_tomorrow_subject" => "Your trial ends tomorrow",
    "user_trial_ends_tomorrow_body_top" => "This is a kind reminder your :account_name account expires tomorrow. When your trial expires, all data will be deleted permanently. This can not be undone.",
    "user_trial_ends_tomorrow_cta" => "Upgrade account",
    "user_trial_ends_tomorrow_body_bottom" => "Regardless of your choice, we want to say thank you for trying :account_name. We know it's an investment of your time, and we appreciate you giving us a chance.",

    // User trial has ended
    "user_trial_has_ended_subject" => "Your trial has ended",
    "user_trial_has_ended_body_top" => "Thanks for trying :account_name. Your account and all associated data has been deleted. But no worries, you're always welcome to create a new account!",
    "user_trial_has_ended_cta" => "Create a new account",
    "user_trial_has_ended_body_bottom" => "Again, thank you for trying :account_name. We know it's an investment of your time, and we appreciate you gave us a chance.",

    // User account expired yesterday
    "user_account_expired_yesterday_subject" => "Your account has expired",
    "user_account_expired_yesterday_body_top" => "Thanks for using :account_name. We'd love to keep you as a customer, but we respect your decision. Your account and all associated data will be deleted after :grace_period_days days. You can prevent this by purchasing a subscription.",
    "user_account_expired_yesterday_cta" => "Prevent account removal",
    "user_account_expired_yesterday_body_bottom" => "Regardless of your choice, we want to say thank you for using :account_name!",

    // User account has been deleted
    "user_account_deleted_subject" => "Your account has been deleted",
    "user_account_deleted_body_top" => "We're sorry to see you go. All the best and you're always welcome back!",
    "user_account_deleted_cta" => "Create a new account",
    "user_account_deleted_body_bottom" => "Thanks again for using :account_name.",

    // User subscription expired (not used currently)
    "user_subscription_expired_subject" => "Your subscription has expired",
    "user_subscription_expired_body_top" => "This is a kind reminder your :account_name account expires tomorrow. When your subscription expires, it will be converted to the free trial account. No data will be lost at that point.",
    "user_subscription_expired_cta" => "Renew subscription",
    "user_subscription_expired_body_bottom" => "Regardless of your choice, we want to say thank you for trying :account_name. We know it's an investment of your time, and we appreciate you giving us a chance.",
];
