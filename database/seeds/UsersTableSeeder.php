<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Schema;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('name','admin')->first();
        $userRole=Role::where('name','user')->first();
        $attendeeRole=Role::where('name','attendee')->first();

        $admin=User::create([
            'name'=>'Admin',
            'email'=>'admin@admini.com',
            'phone'=>'0756060856',
            'password'=>Hash::make('password')
        ]);
        $user=User::create([
            'name'=>'Organizer ',
            'email'=>'organizer@organizer.com',
            'phone'=>'0772824698',
            'password'=>Hash::make('password')
        ]);
        $attendee=User::create([
            'name'=>'Attendee',
            'email'=>'attendee@attendee.com',
            'phone'=>'0622347342',
            'password'=>Hash::make('password')
        ]);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $attendee->roles()->attach($attendeeRole);
        Schema::enableForeignKeyConstraints();
    }
    
}
