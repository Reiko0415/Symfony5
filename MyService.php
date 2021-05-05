<?php

namespace App\Service;

class MyService
{
    public function getMessage()
    {
        $msgs = [
            'これは、オリジナルのメッセージ・サービスです',
            'これは、新しいメッセージです。',
            '・・・あ。すいません、ちょっと居眠りをしてしまいました',
            'はい!　メッセージは、何もありません！'
        ];
        $res = array_rand($msgs);
        return $msgs[$res];
    }
}