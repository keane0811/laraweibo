<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 获取去除掉id为1的所有用户的id
        $fans = $users->slice(1);
        $fan_ids = $fans->pluck('id')->toArray();

        // 关注除了1号用户以外的所有用户
        $user->follow($fan_ids);

        // 除了1号用户以外的所有用户都关注1号
        foreach ($fans as $fan) {
            $fan->follow($user_id);
        }
    }
}
