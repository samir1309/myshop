<?php 
namespace Database\Seeders;
use App\Models\User;
use App\Models\Role; 
use Illuminate\Database\Seeder;

class CreateAdminUserSeeder extends Seeder
{
  public function run() 
  {
    // create admin user
    // $admin = User::createAdmin();  

    // // assign admin role
    // $admin->assignRole('admin');

    // $adminRole = Role::where('name', 'admin')->first();

$admin = User::createAdmin();

  }
}