<?php
return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [
        'failed' => ':email hoặc :password không đúng.',
    ],
    /**
     * Time.
     */
    \Core\Support\Time::NAME => [
        'y' => 'năm',
        'm' => 'tháng',
        'd' => 'ngày',
        'h' => 'giờ',
        'i' => 'phút',
        's' => 'giây',
        'ago' => 'trước.',
        'future' => 'nữa.',
        'recently' => 'vừa xong.',
    ],
    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [
        'request' => [
            'required' => ':field là bắt buộc!.',
            'dns' => ':field không hợp lệ!.',
            'url' => ':field không hợp lệ!.',
            'ip' => ':field không hợp lệ!.',
            'uuid' => ':field không phải uuid!.',
            'int' => ':field phải là số!.',
            'float' => ':field phải là số thực!.',
            'min' => ':field độ dài tối thiểu: :attribute',
            'max' => ':field độ dài tối đa: :attribute',
            'sama' => ':field không khớp với :attribute',
            'unik' => ':field đã tồn tại!.',
        ],
        'file' => [
            'required' => ':field là bắt buộc!.',
            'min' => ':field kích thước tối thiểu: :attribute',
            'max' => ':field kích thước tối đa: :attribute',
            'mimetypes' => ':field cho phép: :attribute',
            'mimes' => ':field cho phép: :attribute',
            'unsafe' => ':field có dấu hiệu không an toàn!.',
            'corrupt' => ':field tải lên không đúng cách!.',
        ],
    ]
];