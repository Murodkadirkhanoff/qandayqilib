<?php

function getStatus($status)
{
    if ($status == \App\Helpers\Status::MODERATOR) {
        return [
            'class' => 'text-warning',
            'text' => 'Модератор'
        ];
    } elseif ($status == \App\Helpers\Status::CONFIRMED) {
        return [
            'class' => 'text-success',
            'text' => 'Подтвержденный'
        ];
    } elseif ($status == \App\Helpers\Status::DELETED) {
        return [
            'class' => 'text-danger',
            'text' => 'Удалено'
        ];
    } elseif ($status == \App\Helpers\Status::CANCELLED) {
        return [
            'class' => 'text-danger',
            'text' => 'Отменен'
        ];
    }
}


function minute_to_read($post)
{
    $words = str_word_count(strip_tags($post->body));

    $minutes = floor($words / 250);
    $seconds = floor($words % 120 / (120 / 60));

    if (1 <= $minutes) {
        $estimated_time = $minutes . trans('post.13') . ($minutes == 1 ? '' : '') . ', ' . $seconds .  trans('post.14') . ($seconds == 1 ? '' : '');
    } else {
        $estimated_time = $seconds . trans('post.14') . ($seconds == 1 ? '' : '');
    }

    return $estimated_time;

}


function randomBg()
{
    $bgs = [
        'bg-warning',
        'bg-danger',
        'bg-secondary',
        'bg-primary',
        'bg-info',
        'bg-success'
    ];
    return $bgs[array_rand($bgs, 1)];
}

function randomSoftBg()
{
    $bgs = [
        'bg-warning-soft',
        'bg-danger-soft',
        'bg-secondary-soft',
        'bg-primary-soft',
        'bg-info-soft',
        'bg-success-soft'
    ];
    return $bgs[array_rand($bgs, 1)];
}


function randomTextColor()
{
    $bgs = [
        'text-warning',
        'text-danger',
        'text-secondary',
        'text-primary',
        'text-info',
        'text-success'
    ];
    return $bgs[array_rand($bgs, 1)];
}


function randomCategoryColor()
{
    $bgs = [
//        [
//            'bg-warning-soft',
//            'text-warning',
//            'bg-warning',
//            'text-dark'
//        ],
//        [
//            'bg-danger-soft',
//            'text-danger',
//            'bg-danger',
//            'text-white'
//        ],
//        [
//            'bg-secondary-soft',
//            'text-secondary',
//            'bg-secondary',
//            'text-white'
//        ],
//        [
//            'bg-primary-soft',
//            'text-primary',
//            'bg-primary',
//            'text-white'
//        ],
//        [
//            'bg-info-soft',
//            'text-info',
//            'bg-info',
//            'text-white'
//        ],
//        [
//            'bg-success-soft',
//            'text-success',
//            'bg-success',
//            'text-white'
//        ],
        [
            'bg-white',
            'text-dark',
            'bg-white',
            'text-dark'
        ],
    ];

    return $bgs[array_rand($bgs, 1)];
}
