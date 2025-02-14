<?php

return array(

    'does_not_exist' => 'Ліцензія не існує або у вас немає дозволу на її перегляд.',
    'user_does_not_exist' => 'Користувач не існує або у вас немає дозволу на його перегляд.',
    'asset_does_not_exist' 	=> 'Актив, який ви намагаєтеся пов\'язати з цією ліцензією, не існує.',
    'owner_doesnt_match_asset' => 'Актив, який ви намагаєтеся пов\'язати з цією ліцензією, належить жодній особі, яка була обрана в призначеному для розірвання.',
    'assoc_users'	 => 'Ця ліцензія на даний час перевірена з користувачем і не може бути видалена. Будь ласка, спочатку перевірте ліцензію, і повторіть спробу. ',
    'select_asset_or_person' => 'Ви повинні вибрати актив або користувача, але не обох.',
    'not_found' => 'Ліцензію не знайдено',
    'seats_available' => 'Доступно :seat_count місць',


    'create' => array(
        'error'   => 'Ліцензію не створено, будь ласка, спробуйте ще раз.',
        'success' => 'Ліцензію успішно створено.'
    ),

    'deletefile' => array(
        'error'   => 'Файл не видалено. Будь ласка, спробуйте ще раз.',
        'success' => 'Файл успішно видалено.',
    ),

    'upload' => array(
        'error'   => 'Файл(и) не завантажено. Повторіть спробу.',
        'success' => 'Файл(и) успішно завантажено.',
        'nofiles' => 'Ви не обрали жодного файлу для завантаження, або завеликий файл',
        'invalidfiles' => 'Один або кілька ваших файлів завеликий або є файловим типом, який не допускається. Дозволені типи файлів - png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rtf, rtf, xml, і lic.',
    ),

    'update' => array(
        'error'   => 'Ліцензія не була оновлена, будь ласка, спробуйте ще раз',
        'success' => 'Ліцензію успішно оновлено.'
    ),

    'delete' => array(
        'confirm'   => 'Ви дійсно бажаєте видалити цю ліцензію?',
        'error'   => 'Виникла проблема при видаленні ліцензії. Будь ласка, спробуйте ще раз.',
        'success' => 'Ліцензію успішно видалено.'
    ),

    'checkout' => array(
        'error'   => 'Виникла проблема з перевіркою ліцензії. Спробуйте ще раз.',
        'success' => 'Ліцензію успішно перевірено',
        'not_enough_seats' => 'Недостатньо вільних ліцензійних місць для оформлення замовлення',
        'mismatch' => 'Надане місце ліцензії не відповідає ліцензії',
        'unavailable' => 'Це місце недоступне для видачі.',
    ),

    'checkin' => array(
        'error'   => 'Виникла помилка перевірки ліцензії. Будь ласка, спробуйте ще раз.',
        'not_reassignable' => 'Ліцензія не є допустимою',
        'success' => 'Ліцензія успішно перевірена'
    ),

);
