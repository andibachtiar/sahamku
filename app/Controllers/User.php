<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    // read raw JSON data from request
    public static function getJson()
    {
        $body = file_get_contents("php://input");
        return json_decode($body, true);
    }

    public static function response($update)
    {
        if (!$update) {
            return [
                'status' => 'error',
                'message' => 'Update gagal'
            ];
        }
        return [
            'status' => 'ok',
            'message' => 'Update sukses'
        ];
    }

    // Update table bobot perbankan
    public function updatePerbankan($id)
    {
        $object = self::getJson();

        $data = [
            'car' => $object['car'],
            'nim' => $object['nim'],
            'npm' => $object['npm'],
            'ldr' => $object['ldr'],
            'eps' => $object['eps']
        ];
        $builder = $this->db->table('bobot_perbankan')->where('id_user', $id);
        $update = $builder->update($data);

        return json_encode(self::response($update));
    }

    // Update table bobot non perbankan
    public function updateNonPerbankan($id)
    {
        $object = self::getJson();

        $data = [
            'roa' => $object['roa'],
            'roe' => $object['roe'],
            'eps' => $object['eps'],
            'eva' => $object['eva'],
            'tato' => $object['tato']
        ];
        $builder = $this->db->table('bobot_non_perbankan')->where('id_user', $id);
        $update = $builder->update($data);

        return json_encode(self::response($update));
    }
}
