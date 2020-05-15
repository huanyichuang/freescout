<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title'  => 'FreeScout 安裝程式',
    'next'   => '下一步',
    'back'   => '上一步',
    'finish' => '安裝',
    'forms'  => [
        'errorTitle' => 'The Following errors occurred:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => '歡迎',
        'title'         => 'FreeScout 安裝程式',
        'message'       => '簡易安裝與設定精靈。',
        'next'          => '確認系統需求',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => '步驟 1 | 伺服器需求',
        'title'         => '伺服器需求',
        'next'          => '檢查權限',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => '步驟 2 | 權限',
        'title'         => '權限',
        'next'          => '環境調校',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle'  => 'Step 3 | 環境設定',
            'title'          => '環境設定',
            'desc'           => '請選擇欲調校應用程式 <code>.env</code> 檔案的方式。',
            'wizard-button'  => '表單設定精靈',
            'classic-button' => '傳統文字編輯器',
        ],
        'wizard' => [
            'templateTitle' => 'Step 3 | 環境設定 | Guided Wizard',
            'title'         => 'Guided <code>.env</code> Wizard',
            'tabs'          => [
                'environment' => '環境',
                'database'    => '資料庫',
                'application' => '應用程式',
            ],
            'form' => [
                'name_required'                      => '須填寫環境名稱',
                'app_name_label'                     => '應用程式名稱',
                'app_name_placeholder'               => '應用程式名稱',
                'app_environment_label'              => '應用程式環境',
                'app_environment_label_local'        => '本地環境',
                'app_environment_label_developement' => '開發環境',
                'app_environment_label_qa'           => 'QA 環境',
                'app_environment_label_production'   => '實際執行環境',
                'app_environment_label_other'        => '其他',
                'app_environment_placeholder_other'  => '輸入環境名稱...',
                'app_debug_label'                    => '應用程式除錯',
                'app_debug_label_true'               => 'True',
                'app_debug_label_false'              => 'False',
                'app_log_level_label'                => '應用程式記錄層級',
                'app_log_level_label_debug'          => '除錯 (debug)',
                'app_log_level_label_info'           => '資訊 (info)',
                'app_log_level_label_notice'         => '通知 (notice)',
                'app_log_level_label_warning'        => '警告 (warning)',
                'app_log_level_label_error'          => '錯誤 (error)',
                'app_log_level_label_critical'       => '重要警示 (critical)',
                'app_log_level_label_alert'          => '警示 (alert)',
                'app_log_level_label_emergency'      => '緊急 (emergency)',
                'app_url_label'                      => '應用程式網址',
                'app_url_placeholder'                => '應用程式網址',
                'db_connection_label'                => '資料庫連結',
                'db_connection_label_mysql'          => 'mysql',
                'db_connection_label_sqlite'         => 'sqlite',
                'db_connection_label_pgsql'          => 'pgsql',
                'db_connection_label_sqlsrv'         => 'sqlsrv',
                'db_host_label'                      => '資料庫主機',
                'db_host_placeholder'                => '資料庫主機',
                'db_port_label'                      => '資料庫連接埠',
                'db_port_placeholder'                => '資料庫連接埠',
                'db_name_label'                      => '資料庫名稱',
                'db_name_placeholder'                => '資料庫名稱',
                'db_username_label'                  => '資料庫使用者',
                'db_username_placeholder'            => '資料庫使用者',
                'db_password_label'                  => '資料庫密碼',
                'db_password_placeholder'            => '資料庫密碼',

                'app_tabs' => [
                    'more_info'                => '更多資訊',
                    'broadcasting_title'       => '廣播、快取、工作階段與工作佇列',
                    'broadcasting_label'       => '廣播驅動程式',
                    'broadcasting_placeholder' => '廣播驅動程式',
                    'cache_label'              => '快取驅動程式',
                    'cache_placeholder'        => '快取驅動程式',
                    'session_label'            => '工作階段驅動程式',
                    'session_placeholder'      => '工作階段驅動程式',
                    'queue_label'              => '工作佇列驅動程式',
                    'queue_placeholder'        => '工作佇列驅動程式',
                    'redis_label'              => 'Redis 驅動程式',
                    'redis_host'               => 'Redis 主機',
                    'redis_password'           => 'Redis Password',
                    'redis_port'               => 'Redis Port',

                    'mail_label'                  => '郵件',
                    'mail_driver_label'           => '郵件驅動程式',
                    'mail_driver_placeholder'     => '郵件驅動程式',
                    'mail_host_label'             => '郵件主機',
                    'mail_host_placeholder'       => '郵件主機',
                    'mail_port_label'             => '郵件連接埠',
                    'mail_port_placeholder'       => '郵件連接埠',
                    'mail_username_label'         => '郵件使用者名稱',
                    'mail_username_placeholder'   => '郵件使用者名稱',
                    'mail_password_label'         => '郵件使用者密碼',
                    'mail_password_placeholder'   => '郵件使用者密碼',
                    'mail_encryption_label'       => '郵件加密方式',
                    'mail_encryption_placeholder' => '郵件加密方式',

                    'pusher_label'                  => 'Pusher',
                    'pusher_app_id_label'           => 'Pusher 應用程式 ID',
                    'pusher_app_id_palceholder'     => 'Pusher App ID',
                    'pusher_app_key_label'          => 'Pusher 應用程式金鑰',
                    'pusher_app_key_palceholder'    => 'Pusher App key',
                    'pusher_app_secret_label'       => 'Pusher 應用程式密鑰',
                    'pusher_app_secret_palceholder' => 'Pusher App secret',
                ],
                'buttons' => [
                    'setup_database'    => '設定資料庫',
                    'setup_application' => '設定應用程式',
                    'install'           => '安裝',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Step 3 | 環境設定 | 傳統編輯器',
            'title'         => '傳統環境編輯器',
            'save'          => '儲存 .env',
            'back'          => '使用表單設定精靈',
            'install'       => '儲存並安裝',
        ],
        'success' => '已儲存 .env 設定檔。',
        'errors'  => '無法儲存 .env 設定檔，請手動建立。',
    ],

    'install' => '安裝',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'FreeScout 安裝程式成功安裝於 ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title'         => '已完成安裝',
        'templateTitle' => '已完成安裝',
        'finished'      => '已成功安裝應用程式。',
        'migration'     => 'Migration &amp; Seed 主控台輸出:',
        'console'       => '應用程式主控台輸出:',
        'log'           => '安裝紀錄項目:',
        'env'           => '最終 .env 檔:',
        'exit'          => '點擊此處離開',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'FreeScout 更新程式',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => '歡迎使用更新程式',
            'message' => '歡迎使用更新精靈。',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'           => '總覽',
            'message'         => '有 1 個更新。|有 :number 個更新。',
            'install_updates' => '安裝更新',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title'    => '已完成',
            'finished' => '已成功更新應用程式之資料庫。',
            'exit'     => '點擊此處離開',
        ],

        'log' => [
            'success_message' => 'FreeScout 安裝程式成功更新於 ',
        ],
    ],
];
