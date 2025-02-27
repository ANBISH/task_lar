<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле :attribute має бути прийнято.',
    'accepted_if' => 'Поле :attribute має бути прийнятим, якщо :other є :value.',
    'active_url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'after' => 'Поле :attribute має бути датою після :date.',
    'after_or_equal' => 'Поле :attribute має бути датою після або дорівнювати :date.',
    'alpha' => 'Поле :attribute має містити лише літери.',
    'alpha_dash' => 'Поле :attribute має містити лише літери, цифри, тире та підкреслення.',
    'alpha_num' => 'Поле :attribute має містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'ascii' => 'Поле :attribute має містити лише однобайтові буквено-цифрові символи та символи.',
    'before' => 'Поле :attribute має бути датою перед :date.',
    'before_or_equal' => 'Поле :attribute має передувати або дорівнювати даті :date.',
    'between' => [
        'array' => 'Поле :attribute має містити від :min до :max елементів.',
        'file' => 'Поле :attribute має бути від :min до :max кілобайт.',
        'numeric' => 'Поле :attribute має бути між :min і :max.',
        'string' => 'Поле :attribute має містити між символами :min і :max.',
    ],
    'boolean' => 'Поле :attribute має бути true або false.',
    'can' => 'Поле :attribute містить недозволене значення.',
    'confirmed' => 'Підтвердження поля :attribute не відповідає.',
    'contains' => "У полі :attribute відсутнє обов'язкове значення.",
    'current_password' => 'Пароль невірний.',
    'date' => 'Поле :attribute має бути дійсною датою.',
    'date_equals' => 'Поле :attribute має бути датою, що дорівнює :date.',
    'date_format' => 'Поле :attribute має відповідати формату :format.',
    'decimal' => 'Поле :attribute має містити :decimal знаків після коми.',
    'declined' => 'Поле :attribute має бути відхилено.',
    'declined_if' => 'Поле :attribute має бути відхилено, якщо :other є :value.',
    'different' => 'Поле :attribute і :other мають бути різними.',
    'digits' => 'Поле :attribute має бути :digits digits.',
    'digits_between' => 'Поле :attribute має бути між :min та :max цифрами.',
    'dimensions' => 'Поле :attribute містить недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'doesnt_end_with' => 'Поле :attribute не має закінчуватися одним із наступних: :values.',
    'doesnt_start_with' => 'Поле :attribute не повинно починатися з одного з наступного: :values.',
    'email' => 'Поле :attribute має бути дійсною електронною адресою.',
    'ends_with' => 'Поле :attribute має закінчуватися одним із наступних: :values.',
    'enum' => 'Вибраний :attribute недійсний.',
    'exists' => 'Вибраний :attribute недійсний.',
    'extensions' => 'Поле :attribute повинно мати одне з наступних розширень: :values.',
    'file' => 'Поле :attribute має бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    'gt' => [
        'array' => 'Поле :attribute має містити більше ніж :value елементів.',
        'file' => 'Поле :attribute має бути більше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute має бути більшим за :value.',
        'string' => 'Поле :attribute має містити більше символів :value.',
    ],
    'gte' => [
        'array' => 'Поле :attribute повинно містити елементи :value або більше.',
        'file' => 'Поле :attribute має бути більше або дорівнювати :value кілобайт.',
        'numeric' => 'Поле :attribute має бути більше або дорівнювати :value.',
        'string' => 'Поле :attribute має бути більше або дорівнювати символам :value.',
    ],
    'hex_color' => 'Поле :attribute має бути дійсним шістнадцятковим кольором.',
    'image' => 'Поле :attribute має бути зображенням.',
    'in' => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute має існувати в :other.',
    'integer' => 'Поле :attribute має бути цілим числом.',
    'ip' => 'Поле :attribute має бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute має бути дійсною адресою IPv4.',
    'ipv6' => 'Поле :attribute має бути дійсною адресою IPv6.',
    'json' => 'Поле :attribute має бути дійсним рядком JSON.',
    'list' => 'Поле :attribute має бути списком.',
    'lowercase' => 'Поле :attribute повинно бути малим регістром.',
    'lt' => [
        'array' => 'Поле :attribute має містити менше елементів :value.',
        'file' => 'Поле :attribute має бути меншим за :value кілобайт.',
        'numeric' => 'Поле :attribute має бути меншим за :value.',
        'string' => 'Поле :attribute має містити менше ніж :value символів.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :value елементів.',
        'file' => 'Поле :attribute має бути менше або дорівнювати :value кілобайт.',
        'numeric' => 'Поле :attribute має бути менше або дорівнювати :value.',
        'string' => 'Поле :attribute має бути менше або дорівнювати символам :value.',
    ],
    'mac_address' => 'Поле :attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :max елементів.',
        'file' => 'Поле :attribute не повинно перевищувати :max кілобайт.',
        'numeric' => 'Поле :attribute не повинно перевищувати :max.',
        'string' => 'Поле :attribute не повинно перевищувати :max символів.',
    ],
    'max_digits' => 'Поле :attribute не повинно містити більше ніж :max цифр.',
    'mimes' => 'Поле :attribute має бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute має бути файлом типу: :values.',
    'min' => [
        'array' => 'Поле :attribute має містити принаймні :min елементів.',
        'file' => 'Поле :attribute має бути принаймні :min кілобайт.',
        'numeric' => 'Поле :attribute має бути не менше :min.',
        'string' => 'Поле :attribute має містити принаймні :min символів.',
    ],
    'min_digits' => 'Поле :attribute має містити принаймні :min цифр.',
    'missing' => 'Поле :attribute повинно бути відсутнім.',
    'missing_if' => 'Поле :attribute повинно бути відсутнім, якщо :other є :value.',
    'missing_unless' => 'Поле :attribute має бути відсутнім, якщо :other не є :value.',
    'missing_with' => 'Поле :attribute повинно бути відсутнім, якщо присутній :values.',
    'missing_with_all' => 'Поле :attribute повинно бути відсутнім, якщо присутні :values.',
    'multiple_of' => 'Поле :attribute має бути кратним :value.',
    'not_in' => 'Вибраний :attribute недійсний.',
    'not_regex' => 'Формат поля :attribute недійсний.',
    'numeric' => 'Поле :attribute має бути числом.',
    'password' => [
        'letters' => 'Поле :attribute має містити принаймні одну літеру.',
        'mixed' => 'Поле :attribute має містити принаймні одну велику та одну малу літери.',
        'numbers' => 'Поле :attribute повинно містити принаймні одне число.',
        'symbols' => 'Поле :attribute має містити принаймні один символ.',
        'uncompromised' => "Даний :attribute з'явився під час витоку даних. Виберіть інший :attribute.",
    ],
    'present' => 'Поле :attribute повинно бути присутнім.',
    'present_if' => 'Поле :attribute повинно бути присутнім, коли :other є :value.',
    'present_unless' => 'Поле :attribute має бути присутнім, якщо :other не є :value.',
    'present_with' => 'Поле :attribute повинно бути присутнім, коли присутній :values.',
    'present_with_all' => 'Поле :attribute повинно бути присутнім, якщо присутні :values.',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, якщо :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не міститься в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат поля :attribute недійсний.',
    'required' => "Поле :attribute є обов'язковим.",
    'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
    'required_if' => "Поле :attribute є обов'язковим, якщо :other є :value.",
    'required_if_accepted' => "Поле :attribute є обов'язковим, якщо прийнято :other.",
    'required_if_declined' => "Поле :attribute є обов'язковим, якщо відхилено :other.",
    'required_unless' => "Поле :attribute є обов'язковим, якщо :other не міститься в :values.",
    'required_with' => "Поле :attribute є обов'язковим, якщо присутній :values.",
    'required_with_all' => "Поле :attribute є обов'язковим, якщо присутні :values.",
    'required_without' => "Поле :attribute є обов'язковим, якщо немає :values.",
    'required_without_all' => "Поле :attribute є обов'язковим, якщо немає жодного з :values.",
    'same' => 'Поле :attribute має відповідати :other.',
    'size' => [
        'array' => 'Поле :attribute має містити елементи :size.',
        'file' => 'Поле :attribute має бути :size кілобайт.',
        'numeric' => 'Поле :attribute має бути :size.',
        'string' => 'Поле :attribute має містити символи :size.',
    ],
    'starts_with' => 'Поле :attribute повинно починатися з одного з наступного: :values.',
    'string' => 'Поле :attribute має бути рядком.',
    'timezone' => 'Поле :attribute має бути дійсним часовим поясом.',
    'unique' => 'Атрибут :attribute уже використано.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'uppercase' => 'Поле :attribute має бути великим.',
    'url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'ulid' => 'Поле :attribute має бути дійсним ULID.',
    'uuid' => 'Поле :attribute має бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'due_date' => [
            'date_format' => 'Поле "Термін виконання" має відповідати формату d.m.Y.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title' => 'назва',
        'description' => 'опис',
        'priority_id' => 'пріоритет',
        'due_date' => 'термін виконання',
    ],

];
