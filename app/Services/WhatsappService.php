<?php

namespace App\Services;

use App\Models\Registrant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsappService
{
    public function http($method, $slug, $data = [], $file = null)
    {
        $base_uri = 'https://wa-api-server.onrender.com/';
        $slug = $slug . "?key=semnasti-wanya-ketuplak-2";

        if ($method == 'get') {
            $response = Http::asForm()
                ->withOptions(['base_uri' => $base_uri, 'debug' => false])
                ->get($slug, $data)
                ->json();
        } else if ($file != null) {
            $response = Http::attach('file', fopen($file, 'r'))
                ->withOptions(['base_uri' => $base_uri, 'debug' => false])
                ->post($slug, $data)
                ->json();
        } else if ($method == 'post') {
            $response = Http::asForm()
                ->withOptions(['base_uri' => $base_uri, 'debug' => false])
                ->post($slug, $data)
                ->json();
        }

        // Log::info($response);

        if ($response['error']) {
            return false;
        }

        return $response['data'];
    }

    public function message($whatsapp_number, $message)
    {
        // Log::info([$whatsapp_number, $message]);

        return $this->http('post', 'message/text', ['id' => $whatsapp_number, 'message' => $message]);
    }

    public function messageButton($whatsapp_number, $message, $buttons, $footer = 'Ditya')
    {
        $data = [
            "id" => $whatsapp_number,
            "btndata" => [
                "text" => $message,
                "footerText" => $footer,
                "buttons" => $buttons,
            ]
        ];

        return $this->http('post', 'message/button', $data);
    }

    public function messageDoc($whatsapp_number, $file, $filename)
    {
        return $this->http('post', 'message/doc', ['id' => $whatsapp_number, 'filename' => $filename], public_path($file));
    }

    public function messageList($code, $whatsapp_number, $title, $message, $slugList) {
        $data = [
            'id' => $whatsapp_number,
            'msgdata' => [
                'title'         => $title,
                'text'          => $message,
                'description'   => 'Semnasti 2023',
                'buttonText'    => 'Tombol Aksi',
                'sections'      => [
                    $this->getSection($slugList, $code)
                ],
            ]
        ];

        return $this->http('post', 'message/list', $data);
    }

    public function getSection($slug = null, $code = null) {
        $list = [
            'arrival_confirmation' => [
                'title' => 'Konfirmasi Kedatangan',
                'rows'  => [
                    [
                        'title'         => 'Datang',
                        'description'   => 'Konfirmasi bahwa anda akan datang',
                        'rowId'         => "code:$code&type:arrival_confirmation&value:1"
                    ],
                    [
                        'title'         => 'Tidak Datang',
                        'description'   => 'Konfirmasi bahwa anda berhalangan hadir',
                        'rowId'         => "code:$code&type:arrival_confirmation&value:0"
                    ]
                ]
            ],
            'payment_confirmation' => [
                'title' => 'Pembayaran Tiket',
                'rows'  => [
                    [
                        'title'         => 'Saya sudah membayar',
                        'description'   => 'Konfirmasi bahwa anda sudah membayar tagihan event semnasti',
                        'rowId'         => 'code:#SM-1002&type:payment_confirmation&value:pending'
                    ]
                ]
            ]
        ];

        if(!$slug) {
            return $list;
        }

        if(!isset($list[$slug])) {
            Log::error('getSection $slug not found: '.$slug);
            die();
        }

        return $list[$slug];
    }
}
