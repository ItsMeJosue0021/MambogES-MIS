<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'firstName' => 'John',
                'middleName' => 'Robert',
                'lastName' => 'Smith',
                'dob' => '1990-05-15',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 123-4567',
                'user_id' => '1',
            ],
            [
                'firstName' => 'Mary',
                'middleName' => 'Ann',
                'lastName' => 'Johnson',
                'dob' => '1985-09-22',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 987-6543',
                'user_id' => '2',
            ],
            [
                'firstName' => 'David',
                'middleName' => 'Michael',
                'lastName' => 'Brown',
                'dob' => '1995-03-10',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 555-5555',
                'user_id' => '3',
            ],
            [
                'firstName' => 'Sarah',
                'middleName' => 'Elizabeth',
                'lastName' => 'Davis',
                'dob' => '1988-11-30',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 321-7890',
                'user_id' => '4',
            ],
            [
                'firstName' => 'James',
                'middleName' => 'Patrick',
                'lastName' => 'Wilson',
                'dob' => '1992-07-12',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 234-5678',
                'user_id' => '5',
            ],
            [
                'firstName' => 'Joshua',
                'middleName' => 'Clores',
                'lastName' => 'Salceda',
                'dob' => '1987-04-18',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 876-5432',
                'user_id' => '6',
            ],
            [
                'firstName' => 'Rad',
                'middleName' => 'Samson',
                'lastName' => 'Simon',
                'dob' => '1998-01-25',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 789-0123',
                'user_id' => '7',
            ],
            [
                'firstName' => 'Emma',
                'middleName' => 'Louise',
                'lastName' => 'Clark',
                'dob' => '1993-06-28',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 555-1234',
                'user_id' => '8',
            ],
            [
                'firstName' => 'William',
                'middleName' => 'Thomas',
                'lastName' => 'Moore',
                'dob' => '1989-02-10',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 789-4567',
                'user_id' => '9',
            ],
            [
                'firstName' => 'Olivia',
                'middleName' => 'Grace',
                'lastName' => 'Wilson',
                'dob' => '1994-09-15',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 123-7890',
                'user_id' => '10',
            ],
            [
                'firstName' => 'Liam',
                'middleName' => 'Henry',
                'lastName' => 'Taylor',
                'dob' => '1997-03-05',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 987-6543',
                'user_id' => '11',
            ],
            [
                'firstName' => 'Ava',
                'middleName' => 'Marie',
                'lastName' => 'Johnson',
                'dob' => '1986-12-20',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 234-5678',
                'user_id' => '12',
            ],
            [
                'firstName' => 'Ethan',
                'middleName' => 'James',
                'lastName' => 'Davis',
                'dob' => '1999-08-02',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 876-5432',
                'user_id' => '13',
            ],
            [
                'firstName' => 'Sophia',
                'middleName' => 'Grace',
                'lastName' => 'Brown',
                'dob' => '1984-11-17',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 321-6549',
                'user_id' => '14',
            ],
            [
                'firstName' => 'Mason',
                'middleName' => 'Michael',
                'lastName' => 'Smith',
                'dob' => '1996-07-09',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 987-3210',
                'user_id' => '15',
            ],
            [
                'firstName' => 'Isabella',
                'middleName' => 'Rose',
                'lastName' => 'Wilson',
                'dob' => '1991-04-25',
                'sex' => 'Female',
                'contactNumber' => '+1 (555) 789-0123',
                'user_id' => '16',
            ],
            [
                'firstName' => 'Noah',
                'middleName' => 'William',
                'lastName' => 'Turner',
                'dob' => '1992-09-18',
                'sex' => 'Male',
                'contactNumber' => '+1 (555) 123-4567',
                'user_id' => '17',
            ],
        ];


        foreach ($profiles as $profile) {
            DB::table('profiles')->insert([
                'firstName' => $profile['firstName'],
                'middleName' => $profile['middleName'],
                'lastName' => $profile['lastName'],
                'dob' => $profile['dob'],
                'sex' => $profile['sex'],
                'contactNumber' => $profile['contactNumber'],
                'user_id' => $profile['user_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}