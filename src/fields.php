<?php
return [
        'ID' => 'id', // <int>
        /**
         * 1 -> blog
         * 2 -> news
         * 3 -> publ
         * 4 -> photo
         * 5 -> load
         * 6 -> Каталог сайтов
         * 7 -> Доска объявлений
         * 8 -> Онлайн игры
         * 9 -> Интернет-магазин
         * 10 -> Видео
         * 11 -> Видео-Каналы
         */
        'MODULE_ID' => 'moduleId', // <int>
        'CAT_ID' => 'catId', // int
        'PARENT_CAT_ID' => 'parentCatId', // int
        'PENDING' => 'status',
        'URL_YEAR' => 'urlYear',
        'URL_MONTH' => 'urlMonth',
        'URL_DAY' => 'urlDay',
        'URL_ALIAS' => 'urlAlias',
        'IS_DRAFT' => 'isDraft', // bool
        'COMMENTS_ENABLED' => 'isCommentsEnabled', // bool
        'DATE_CREATE' => 'dateCreate',
        'DATE_UPDATE' => 'dateUpdate',
        'COMMENTS_NUM' => 'commentsCount', // int
        'USERNAME' => 'username',
        'USER_ID' => 'userId',
        'TITLE' => 'title',
        'SNIPPET' => 'snippet',
        'MESSAGE' => 'message',
        'SHOW_ATTACHMENTS' => 'showAttachments', // bool
        'ATTACHMENTS' => 'attachments',
        'VIEWS_COUNT' => 'viewsCount', // int
        'RATING_SCORE' => 'ratingScore', // int
        'RATING_VOTES' => 'ratingVotes', // int
        'IP' => 'ip',
        'OTHER1' => 'other1',
        'OTHER2' => 'other2',
        'OTHER3' => 'other3',
        'OTHER4' => 'other4',
        'OTHER5' => 'other5',
        'IS_HTML' => 'isHtml', // bool
        'COMMENTS_SUBSCRIBE' => '??commentsSubscribe',

        'DOWNLOAD_FILENAME' => 'downloadFilename',
        'DOWNLOAD_EXTERNAL_URL' => 'downloadExternalUrl',
        'DOWNLOAD_SIZE' => 'downloadSize',
        'DOWNLOADS_COUNT' => 'downloadsCount', // int

        'AUTHOR_NAME' => 'authorName',
        'AUTHOR_EMAIL' => 'authorEmail',

        'BIRTHDAY' => 'birthday',
        'AVATAR_URL' => 'avatarUrl',
        'EMAIL' => 'email',
        'FULL_NAME' => 'fullName',
        'ICQ' => 'icq',
        'PASSWORD' => 'password',
        'SIGNATURE' => 'signature',
        'WEBSITE' => 'website',
        'REGISTRATION_SERVER' => 'registrationServer',
        'COUNTRY_ID' => 'countryId',
        'CITY' => 'city',
        'REGION' => 'region',
        'GENDER_ID' => 'genderId', // 1 -> m, 2 -> f
        'IS_BANNED' => 'isBanned', // bool
        'NEED_ACTIVATION' => 'needActivation', // bool

        'WIDTH' => 'width',
        'HEIGHT' => 'height',
        'EXT' => 'ext',
        'PHOTO_FILENAME' => 'photoFilename',

        'DESCRIPTION' => 'description',
        'IS_PINNED' => 'isPinned', // bool
        'IS_LOCKED' => 'isLocked', // bool
        'HAS_POLL' => 'hasPoll', // bool
        'POLL' => 'poll', // 'Don&#39,t Answer it`Answer1`Answer2`Answer3`Answer4`Answer5``````0`0`0`0`0`0`0`0`0`0`0``0`0'

        'POST_ID' => 'postId', // int
        'QUESTION' => 'question',
        'ANSWER' => 'answer',
        'LIKES' => 'likes', // int
        'LIKES_USER_IDS' => 'likesUserIds',
        'PARENT_ID' => 'parentId', // int

        'SOURCE_URL' => 'sourceUrl',
        'AMOUNT' => 'amount',
        'FROM_ID' => 'fromId',
        'TO_ID' => 'toId',

        'CODE' => 'code',
        'ALLOWED_GROUPS' => 'allowedGroups',
        'HAS_OWN_TEMPLATE' => 'hasOwnTemplate',
        'PROXY_URLS' => 'proxyUrls',

        'LAST_THEME_ID' => 'lastThemeId',
        'THEMES_COUNT' => 'themesCount',
        'THEME_NAME' => 'themeName',

        'IS_SECTION' => 'isSection', // bool
        'IS_GROUP' => 'isGroup',

        'POSITION' => 'position', //<int>  позиция в списке связных элементов (например позиция категории)
        'NUM_DATA' => 'numData', //<int> количество материалов в категории
        'WHO_CAN_READ' => 'whoCanRead', //<string> группы, которые могут читать материал
        'WHO_CAN_LOAD' => 'whoCanLoad', //<string> группы, которые могут скачивать ?? материал
        'WHO_CAN_ADD' => 'whoCanAdd', //<string> группы, которые могут добавлять материал

        /**
         * 1   - Пользователи
         * 2   - Проверенные
         * 3   - Глобальный модератор
         * 4   - Администраторы
         * 5   - Модераторы
         * 251 - Друзья
         * 255 - Заблокированные
         */
        'GROUP_ID' => 'groupId',
        'DATE_VISIT' => 'dateVisit',
        'POSTS_COUNT' => 'postsCount', // int
        'COMMENTS_COUNT' => 'commentsCount', // int
        'PUB_COUNT' => 'pubCount', // int
        'PHOTO_COUNT' => 'photoCount', // int
        'NEWS_COUNT' => 'newsCount', // int
        'BLOG_COUNT' => 'blogCount', // int
        'LOAD_COUNT' => 'loadCount', // int
        'BOARD_COUNT' => 'boardCount', // int
        'TOTAL_MATERIALS' => 'totalMaterials', // int
        'REPUTATION_COUNT' => 'reputationCount', // int
        'REPUTATION_SOURCES' => 'reputationSources',

        /**
         * 1 -> Radio
         * 2 -> Checkbox
         * 3 -> Select
         * 4 -> Select (multiple)
         * 5 -> Links
         */
        'INPUT_TYPE' => 'inputType',
        'IS_ACTIVE' => 'isActive',
        'DATE_POLL_START' => 'datePollStart',
        'DATE_POLL_END' => 'datePollEnd',
        'BUTTON_NAME' => 'buttonName',
        'ANSWER1' => 'answer1',
        'ANSWER2' => 'answer2',
        'ANSWER3' => 'answer3',
        'ANSWER4' => 'answer4',
        'ANSWER5' => 'answer5',
        'ANSWER6' => 'answer6',
        'ANSWER7' => 'answer7',
        'ANSWER8' => 'answer8',
        'ANSWER9' => 'answer9',
        'ANSWER10' => 'answer10',
        'ANSWER11' => 'answer11',
        'ANSWER12' => 'answer12',
        'ANSWER13' => 'answer13',
        'ANSWER14' => 'answer14',
        'ANSWER15' => 'answer15',
        'ANSWER1_COUNT' => 'answer1Count',
        'ANSWER2_COUNT' => 'answer2Count',
        'ANSWER3_COUNT' => 'answer3Count',
        'ANSWER4_COUNT' => 'answer4Count',
        'ANSWER5_COUNT' => 'answer5Count',
        'ANSWER6_COUNT' => 'answer6Count',
        'ANSWER7_COUNT' => 'answer7Count',
        'ANSWER8_COUNT' => 'answer8Count',
        'ANSWER9_COUNT' => 'answer9Count',
        'ANSWER10_COUNT' => 'answer10Count',
        'ANSWER11_COUNT' => 'answer11Count',
        'ANSWER12_COUNT' => 'answer12Count',
        'ANSWER13_COUNT' => 'answer13Count',
        'ANSWER14_COUNT' => 'answer14Count',
        'ANSWER15_COUNT' => 'answer15Count',
        'TOTAL_ANSWERS' => 'totalAnswers',
    ];