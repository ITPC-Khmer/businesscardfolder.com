<?php

use Illuminate\Database\Seeder;

class HrPositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hr_positions')->delete();
        
        \DB::table('hr_positions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'department_id' => 1,
                'title' => 'Chairman',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'department_id' => 1,
                'title' => 'President',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'department_id' => 1,
                'title' => 'Vice President',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'department_id' => 1,
                'title' => 'Chief Executive Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'department_id' => 1,
                'title' => 'General Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'department_id' => 1,
                'title' => 'Secretary of Chairman',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'department_id' => 1,
                'title' => 'Secretary of President',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'department_id' => 1,
                'title' => 'Assistant to CEO',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'department_id' => 1,
                'title' => 'Assistant to President',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'department_id' => 1,
                'title' => 'Assistant to GM',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'department_id' => 2,
                'title' => 'Accounting & Finance Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'department_id' => 2,
                'title' => 'Assistant Accounting & Finance Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'department_id' => 3,
                'title' => 'Chief Account',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'department_id' => 3,
                'title' => 'Accounting Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'department_id' => 3,
                'title' => 'Acting Accountant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'department_id' => 3,
                'title' => 'Accountant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'department_id' => 3,
                'title' => 'Accounting Clerk',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'department_id' => 3,
                'title' => 'Accounting Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'department_id' => 3,
                'title' => 'Cost Accountant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'department_id' => 3,
                'title' => 'Revenue Accountant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'department_id' => 4,
                'title' => 'Taxation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'department_id' => 4,
                'title' => 'Taxation Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'department_id' => 4,
                'title' => 'Taxation Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'department_id' => 4,
                'title' => 'Taxation Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'department_id' => 4,
                'title' => 'Taxation Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'department_id' => 4,
                'title' => 'Tax Declaration Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'department_id' => 5,
                'title' => 'Chief Finance Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'department_id' => 5,
                'title' => 'Finance Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'department_id' => 5,
                'title' => 'Assistant to Finance Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'department_id' => 5,
                'title' => 'Finance Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'department_id' => 5,
                'title' => 'Financial Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'department_id' => 5,
                'title' => 'Financial Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'department_id' => 5,
                'title' => 'Financial Clerk',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'department_id' => 5,
                'title' => 'Financial Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'department_id' => 5,
                'title' => 'Financial Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'department_id' => 6,
                'title' => 'Internal Auditor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'department_id' => 6,
                'title' => 'External Audititor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'department_id' => 6,
                'title' => 'Auditor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'department_id' => 6,
                'title' => 'Financial Auditor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'department_id' => 7,
                'title' => 'Admin & HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'department_id' => 7,
                'title' => 'Admin & HR Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'department_id' => 7,
                'title' => 'Assistant to Admin & HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'department_id' => 7,
                'title' => 'Assistant to Admin & HR Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'department_id' => 7,
                'title' => 'Admin & HR Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'department_id' => 7,
                'title' => 'Admin & HR Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'department_id' => 8,
                'title' => 'Admin Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'department_id' => 8,
                'title' => 'Admin Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'department_id' => 8,
                'title' => 'Assistant to Admin Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'department_id' => 8,
                'title' => 'Assistant to Admin Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'department_id' => 8,
                'title' => 'Administrator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'department_id' => 8,
                'title' => 'Admin Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'department_id' => 8,
                'title' => 'Administrative Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'department_id' => 8,
                'title' => 'Administrative Clerk',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'department_id' => 9,
                'title' => 'HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'department_id' => 9,
                'title' => 'HR Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'department_id' => 9,
                'title' => 'Group Partnership HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'department_id' => 9,
                'title' => 'Group Partnership HR Manager ',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'department_id' => 9,
                'title' => 'Group HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'department_id' => 9,
                'title' => 'Group HR Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'department_id' => 9,
                'title' => 'Assistant to HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'department_id' => 9,
                'title' => 'Assistant to HR Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'department_id' => 9,
                'title' => 'HR Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'department_id' => 9,
                'title' => 'HR Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'department_id' => 9,
                'title' => 'HR Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'department_id' => 9,
                'title' => 'HR Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'department_id' => 10,
                'title' => 'Recruitment Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'department_id' => 10,
                'title' => 'Recruitment Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'department_id' => 10,
                'title' => 'Recruitment Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'department_id' => 10,
                'title' => 'Recruitment Agent',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'department_id' => 10,
                'title' => 'Recruitment Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'department_id' => 10,
                'title' => 'Recruitment Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'department_id' => 10,
                'title' => 'Recruitment & HR Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'department_id' => 10,
                'title' => 'Recruitment & HR Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'department_id' => 10,
                'title' => 'Recruitment & HR Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'department_id' => 10,
                'title' => 'Recruitment & HR Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'department_id' => 10,
                'title' => 'Recruitment & HR Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'department_id' => 11,
                'title' => 'Legal Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'department_id' => 11,
                'title' => 'Business Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'department_id' => 11,
                'title' => 'Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'department_id' => 11,
                'title' => 'Legal Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'department_id' => 11,
                'title' => 'Business Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'department_id' => 11,
                'title' => 'Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'department_id' => 12,
                'title' => 'Sales & Marketing Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'department_id' => 12,
                'title' => 'Sales & Marketing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'department_id' => 12,
                'title' => 'Sales & Marketing Coordinator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'department_id' => 12,
                'title' => 'Sales & Marketing Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'department_id' => 12,
                'title' => 'Sales & Marketing Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'department_id' => 12,
                'title' => 'Sales & Marketing Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'department_id' => 12,
                'title' => 'Assistant Sales & Marketing Manger',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'department_id' => 12,
                'title' => 'Assistant to Sales & Marketing Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'department_id' => 12,
                'title' => 'Assistant to Sales & Marketing Manger',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'department_id' => 13,
                'title' => 'Area Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'department_id' => 13,
                'title' => 'Area Sales Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'department_id' => 13,
                'title' => 'Assistant Sales Branch Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'department_id' => 13,
                'title' => 'Assistant Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'department_id' => 13,
                'title' => 'Chief Sales Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'department_id' => 13,
                'title' => 'Corporate Sales Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'department_id' => 13,
                'title' => 'Corporate Sales Exective',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'department_id' => 13,
                'title' => 'Corporate Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'department_id' => 13,
                'title' => 'Corporate Sales Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'department_id' => 13,
                'title' => 'Customer Service Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'department_id' => 13,
                'title' => 'Disrtict Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'department_id' => 13,
                'title' => 'E-commerce Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'department_id' => 13,
                'title' => 'Inside Sales Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'department_id' => 13,
                'title' => 'Key-Account Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'department_id' => 13,
                'title' => 'Key-Account Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'department_id' => 13,
                'title' => 'Key-Account Sales Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'department_id' => 13,
                'title' => 'Key-Account Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'department_id' => 13,
                'title' => 'Lead Development Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'department_id' => 13,
                'title' => 'National Sales Coordinator & Distributor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'department_id' => 13,
                'title' => 'National Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'department_id' => 13,
                'title' => 'Online Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'department_id' => 13,
                'title' => 'Project Sales Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'department_id' => 13,
                'title' => 'Project Sales Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'department_id' => 13,
                'title' => 'Project Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'department_id' => 13,
                'title' => 'Project Sales Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'department_id' => 13,
                'title' => 'Regional Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'department_id' => 13,
                'title' => 'Sales Administrator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'department_id' => 13,
                'title' => 'Sales Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'department_id' => 13,
                'title' => 'Sales Associate',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'department_id' => 13,
                'title' => 'Sales Branch Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'department_id' => 13,
                'title' => 'Sales Clerk',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'department_id' => 13,
                'title' => 'Sales Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'department_id' => 13,
                'title' => 'Sales Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'department_id' => 13,
                'title' => 'Sales Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'department_id' => 13,
                'title' => 'Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'department_id' => 13,
                'title' => 'Sales Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'department_id' => 13,
                'title' => 'Sales Operation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'department_id' => 13,
                'title' => 'Sales Person',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'department_id' => 13,
                'title' => 'Sales Representative',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'department_id' => 13,
                'title' => 'Sales Specialist',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'department_id' => 13,
                'title' => 'Sales Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'department_id' => 13,
                'title' => 'Sales Support',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'department_id' => 13,
                'title' => 'Sales Trainee',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'department_id' => 13,
                'title' => 'Senior Sales Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'department_id' => 13,
                'title' => 'Senior Sales Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'department_id' => 13,
                'title' => 'Senior Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'department_id' => 13,
                'title' => 'Senior Sales Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'department_id' => 13,
                'title' => 'Trade Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'department_id' => 13,
                'title' => 'Zonal Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'department_id' => 14,
                'title' => 'Chief Marketing Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'department_id' => 14,
                'title' => 'Marketing Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'department_id' => 14,
                'title' => 'Marketing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'department_id' => 14,
                'title' => 'Marketing Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'department_id' => 14,
                'title' => 'Marketing Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'department_id' => 14,
                'title' => 'Marketing Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'department_id' => 14,
                'title' => 'Marketing & Media Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'department_id' => 14,
                'title' => 'Media & Marketing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'department_id' => 14,
                'title' => 'Marketing & Event Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'department_id' => 14,
                'title' => 'Marketing Advertising Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'department_id' => 14,
                'title' => 'Marketing & Communication Mnager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'department_id' => 14,
                'title' => 'Marketing & Brand Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'department_id' => 14,
                'title' => 'Marketing & Promotion Mabager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'department_id' => 14,
                'title' => 'Marketing Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'department_id' => 14,
                'title' => 'Brand Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'department_id' => 14,
                'title' => 'Team Leader',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'department_id' => 14,
                'title' => 'Brand Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'department_id' => 14,
                'title' => 'Brand Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'department_id' => 14,
                'title' => 'Brand Ambassador',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'department_id' => 14,
                'title' => 'Promoter Girl',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'department_id' => 14,
                'title' => 'Brand Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'department_id' => 14,
                'title' => 'Brand Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'department_id' => 14,
                'title' => 'Trade Marketing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'department_id' => 14,
                'title' => 'Trade Marketing Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'department_id' => 14,
                'title' => 'Trade Marketing Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'department_id' => 14,
                'title' => 'Digital Marketing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'department_id' => 14,
                'title' => 'Affiliate Marketing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'department_id' => 15,
                'title' => 'Public Relation & Communication Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'department_id' => 15,
                'title' => 'Public Relation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'department_id' => 15,
                'title' => 'Public Relation Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'department_id' => 15,
                'title' => 'Public Relation Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'department_id' => 15,
                'title' => 'Public Relation Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'department_id' => 15,
                'title' => 'Promoter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'department_id' => 15,
                'title' => 'Event Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'department_id' => 15,
                'title' => 'Event Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'department_id' => 15,
                'title' => 'Exhibition Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'department_id' => 15,
                'title' => 'Expo & Trade Show Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'department_id' => 15,
                'title' => 'Trade Show Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'department_id' => 15,
                'title' => 'Expo & Event Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'department_id' => 15,
                'title' => 'Intern\'l Expo Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'department_id' => 15,
                'title' => 'Exhibition Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'department_id' => 15,
                'title' => 'Exhibition Monitor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'department_id' => 16,
                'title' => 'Media & Advertising Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'department_id' => 16,
                'title' => 'Media Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'department_id' => 16,
                'title' => 'Media Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'department_id' => 16,
                'title' => 'Advertising Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'department_id' => 16,
                'title' => 'Advertising Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'department_id' => 16,
                'title' => 'Advertising & Promotion Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'department_id' => 16,
                'title' => 'Media & Promotion Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'department_id' => 16,
                'title' => 'Media & Sport Production Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'department_id' => 16,
                'title' => 'Sport Production Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'department_id' => 16,
                'title' => 'ATL Advertising Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'department_id' => 16,
                'title' => 'BTL Advertising Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'department_id' => 17,
                'title' => 'Architecture & Engineering Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'department_id' => 18,
                'title' => 'Architecture Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'department_id' => 18,
                'title' => 'Interior Design Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'department_id' => 18,
                'title' => 'Interior Décor Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'department_id' => 18,
                'title' => 'Interior Design & Décor Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'department_id' => 18,
                'title' => 'Design & Décor Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'department_id' => 19,
                'title' => 'Engineering Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'department_id' => 19,
                'title' => 'Civil Engineering Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'department_id' => 19,
                'title' => 'Mechanic Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'department_id' => 19,
                'title' => 'Electric Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'department_id' => 19,
                'title' => 'Plumbing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'department_id' => 19,
                'title' => 'MEP Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'department_id' => 19,
                'title' => 'Mechanic & Electric Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'department_id' => 19,
                'title' => 'Electric & Plumbing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'department_id' => 20,
                'title' => 'Site Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'department_id' => 20,
                'title' => 'Land Surveyor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'department_id' => 20,
                'title' => 'Construction Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'department_id' => 20,
                'title' => 'Assistant Construction Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'department_id' => 20,
                'title' => 'Assistant to Construction Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'department_id' => 21,
                'title' => 'IT - Programmer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'department_id' => 21,
                'title' => 'Programmer Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'department_id' => 21,
                'title' => 'Software Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'department_id' => 21,
                'title' => 'IT Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'department_id' => 21,
                'title' => 'IT Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'department_id' => 21,
                'title' => 'Programming & Software Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'department_id' => 22,
                'title' => 'IT - Networker',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'department_id' => 22,
                'title' => 'Networking Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'department_id' => 22,
                'title' => 'Networking Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'department_id' => 22,
                'title' => 'Server Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'department_id' => 22,
                'title' => 'Server & Network Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'department_id' => 22,
                'title' => 'Network & Programming Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'department_id' => 22,
                'title' => 'Database Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'department_id' => 22,
                'title' => 'Server & Database Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'department_id' => 23,
                'title' => 'Art Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'department_id' => 23,
                'title' => 'Art Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'department_id' => 23,
                'title' => 'Art & Graphic Design Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'department_id' => 23,
                'title' => 'Graphic Design Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'department_id' => 23,
                'title' => 'Creative Design Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'department_id' => 23,
                'title' => '2D Designer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'department_id' => 23,
                'title' => '3D Designer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'department_id' => 23,
                'title' => 'Illustration Designer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'department_id' => 23,
                'title' => 'Graphic Designer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'department_id' => 23,
                'title' => 'Creative Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'department_id' => 23,
                'title' => 'Art & Creative Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'department_id' => 23,
                'title' => 'Art & Creative Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'department_id' => 24,
                'title' => 'Web Design & Development Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'department_id' => 24,
                'title' => 'Web Design & Development Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'department_id' => 24,
                'title' => 'Web Development Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'department_id' => 24,
                'title' => 'Web Development Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'department_id' => 24,
                'title' => 'Web Database Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'department_id' => 24,
                'title' => 'Senior Web Developer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'department_id' => 24,
                'title' => 'Web Developer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'department_id' => 24,
                'title' => 'Web Coding Supporter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'department_id' => 25,
                'title' => 'Credit & Loan Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'department_id' => 25,
                'title' => 'Loan Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'department_id' => 25,
                'title' => 'Business Loan Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'department_id' => 25,
                'title' => 'Small Loan Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'department_id' => 25,
                'title' => 'Micro Loan Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'department_id' => 25,
                'title' => 'Chief Loan Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'department_id' => 25,
                'title' => 'Senior Loan Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'department_id' => 25,
                'title' => 'Senior Credit Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'department_id' => 26,
                'title' => 'Receptionist',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'department_id' => 26,
                'title' => 'Customer Service',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'department_id' => 26,
                'title' => 'Cashier',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'department_id' => 26,
                'title' => 'Teller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'department_id' => 27,
                'title' => 'General Counsel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'department_id' => 27,
                'title' => 'Chief Counsel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'department_id' => 27,
                'title' => 'Chief Legal Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'department_id' => 27,
                'title' => 'Lawyer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'department_id' => 27,
                'title' => 'Commercial Lawyer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'department_id' => 27,
                'title' => 'Contract Lawyer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'department_id' => 27,
                'title' => 'Senior Lawyer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'department_id' => 27,
                'title' => 'Attorney',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'department_id' => 27,
                'title' => 'Litigation Paralegal',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'department_id' => 27,
                'title' => 'Legal Counsel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'department_id' => 27,
                'title' => 'VP Legal Affairs',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'department_id' => 27,
                'title' => 'Legal Intern',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'department_id' => 27,
                'title' => 'Product and Regulatory Counsel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'department_id' => 27,
                'title' => 'Senior Legal Counsel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'department_id' => 27,
                'title' => 'Product Legal Counsel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'department_id' => 27,
                'title' => 'Director of Investigation & Supervision',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'department_id' => 27,
                'title' => 'Arbitrator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'department_id' => 27,
                'title' => 'Case Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'department_id' => 27,
                'title' => 'Jury Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'department_id' => 27,
                'title' => 'Law Firm Administrator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'department_id' => 27,
                'title' => 'Legal Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'department_id' => 27,
                'title' => 'Legal Services Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'department_id' => 27,
                'title' => 'Paralegal',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'department_id' => 27,
                'title' => 'Contract Drafting Legal Specialist',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'department_id' => 27,
                'title' => 'Contract Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'department_id' => 27,
                'title' => 'Regulatory Affairs Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'department_id' => 27,
                'title' => 'Right of Way Agent',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'department_id' => 28,
                'title' => 'Legal File Clerk',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'department_id' => 28,
                'title' => 'Legal File Clerk Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'department_id' => 28,
                'title' => 'Legal Assistant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'department_id' => 28,
                'title' => 'Copy Center Professional',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'department_id' => 28,
                'title' => 'Document Coder',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'department_id' => 28,
                'title' => 'Legal Secretary',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'department_id' => 28,
                'title' => 'Legal Assistant - Civil Litigation',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'department_id' => 28,
                'title' => 'Legal Record Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'department_id' => 28,
                'title' => 'Legal Aide',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'department_id' => 28,
                'title' => 'Mail room Personnel',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'department_id' => 28,
                'title' => 'Contract Administrator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'department_id' => 29,
                'title' => 'Court Advocate',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'department_id' => 29,
                'title' => 'Legal Advocate',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'department_id' => 29,
                'title' => 'Court Messenger',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'department_id' => 29,
                'title' => 'Court Reporter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'department_id' => 29,
                'title' => 'Court Representative',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'department_id' => 29,
                'title' => 'Court Transcriptionist',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'department_id' => 29,
                'title' => 'Corrections Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'department_id' => 29,
                'title' => 'Judge',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'department_id' => 29,
                'title' => 'Litigation Docket Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'department_id' => 29,
                'title' => 'Litigation Support Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'department_id' => 29,
                'title' => 'Magistrate',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'department_id' => 29,
                'title' => 'Trial Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'department_id' => 29,
                'title' => 'Conciliator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'department_id' => 29,
                'title' => 'Mediator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'department_id' => 29,
                'title' => 'Conflict Resolution Specialist',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'department_id' => 30,
                'title' => 'Money Transfer & Exchange Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'department_id' => 30,
                'title' => 'Money Transfer Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'department_id' => 30,
                'title' => 'Money Transfer Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'department_id' => 30,
                'title' => 'Currency Exchange Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'department_id' => 30,
                'title' => 'Currency Exchange Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'department_id' => 31,
                'title' => 'Valuation & Appraisal Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'department_id' => 31,
                'title' => 'Valuation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'department_id' => 31,
                'title' => 'Properties Valuation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'department_id' => 31,
                'title' => 'Properties Valuation Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'department_id' => 31,
                'title' => 'Properties Valuation Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'department_id' => 31,
                'title' => 'Properties Valuation Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'department_id' => 32,
                'title' => 'Properties Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'department_id' => 32,
                'title' => 'Properties Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'department_id' => 32,
                'title' => 'Properties Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'department_id' => 32,
                'title' => 'Properties Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'department_id' => 32,
                'title' => 'Gradener',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'department_id' => 32,
                'title' => 'Technician',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'department_id' => 32,
                'title' => 'Electrician',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'department_id' => 32,
                'title' => 'Plumber',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'department_id' => 32,
                'title' => 'Properties Hunter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'department_id' => 32,
                'title' => 'Properties Scanner',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'department_id' => 32,
                'title' => 'Properties Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'department_id' => 33,
                'title' => 'Real Estate Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'department_id' => 33,
                'title' => 'Sales & Rental Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'department_id' => 33,
                'title' => 'Properties Rental Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'department_id' => 33,
                'title' => 'Properties Rental Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'department_id' => 33,
                'title' => 'Properties Rental Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'department_id' => 33,
                'title' => 'Properties Rental Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'department_id' => 33,
                'title' => 'Properties Sales Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'department_id' => 33,
                'title' => 'Properties Sales Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'department_id' => 33,
                'title' => 'Properties Sales Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'department_id' => 33,
                'title' => 'Properties Sales Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'department_id' => 33,
                'title' => 'Condominium Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'department_id' => 33,
                'title' => 'Apartment Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'department_id' => 33,
                'title' => 'Town Project Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'department_id' => 33,
                'title' => 'Sales & Rental Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'department_id' => 33,
                'title' => 'Sales & Rental Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'department_id' => 33,
                'title' => 'Sales & Rental Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'department_id' => 34,
                'title' => 'Risk Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'department_id' => 34,
                'title' => 'Risk Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'department_id' => 34,
                'title' => 'Risk Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'department_id' => 34,
                'title' => 'Risk Analyst',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'department_id' => 34,
                'title' => 'Risk Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'department_id' => 35,
                'title' => 'Investment Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'department_id' => 35,
                'title' => 'Investment Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'department_id' => 35,
                'title' => 'Investment Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'department_id' => 35,
                'title' => 'Investment Advisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'department_id' => 35,
                'title' => 'Investment Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'department_id' => 36,
                'title' => 'Logistics & Supply Chain Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'department_id' => 36,
                'title' => 'Logistics & Supply Chain Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'department_id' => 36,
                'title' => 'Logistics & Supply Chain Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'department_id' => 37,
                'title' => 'Logistics Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'department_id' => 37,
                'title' => 'Logistics Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'department_id' => 37,
                'title' => 'Logistics Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'department_id' => 37,
                'title' => 'Logistics Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'department_id' => 37,
                'title' => 'Logistics Operator',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'department_id' => 37,
                'title' => 'Dry Port Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'department_id' => 37,
                'title' => 'Dry Port Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'department_id' => 37,
                'title' => 'Dry Port Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'department_id' => 37,
                'title' => 'Warehouse Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'department_id' => 37,
                'title' => 'Warehouse Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'department_id' => 37,
                'title' => 'Warehouse Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'department_id' => 37,
                'title' => 'Stock Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'department_id' => 37,
                'title' => 'Inventory Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'department_id' => 37,
                'title' => 'Receiver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'department_id' => 38,
                'title' => 'Supply Chain Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'department_id' => 38,
                'title' => 'Supply Chain Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'department_id' => 38,
                'title' => 'Supply Chain Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'department_id' => 38,
                'title' => 'Supply Chain Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'department_id' => 38,
                'title' => 'Group Supply Chain Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'department_id' => 38,
                'title' => 'Group Supply Chain Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'department_id' => 38,
                'title' => 'Group Supply Chain Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'department_id' => 38,
                'title' => 'Group Supply Chain Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'department_id' => 38,
                'title' => 'Warehouse Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'department_id' => 38,
                'title' => 'Warehouse Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'department_id' => 38,
                'title' => 'Warehouse Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'department_id' => 38,
                'title' => 'Stock Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'department_id' => 38,
                'title' => 'Inventory Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'department_id' => 38,
                'title' => 'Receiver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'department_id' => 39,
                'title' => 'Procurement Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'department_id' => 39,
                'title' => 'Procurement Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'department_id' => 39,
                'title' => 'Procurement Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'department_id' => 39,
                'title' => 'Purchasing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'department_id' => 39,
                'title' => 'Purchasing Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'department_id' => 39,
                'title' => 'Purchasing Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'department_id' => 39,
                'title' => 'Group Purchasing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'department_id' => 39,
                'title' => 'Group Purchasing Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'department_id' => 39,
                'title' => 'Group Purchasing Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'department_id' => 39,
                'title' => 'Receiver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'department_id' => 40,
                'title' => 'Finishing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'department_id' => 40,
                'title' => 'Finishing Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'department_id' => 40,
                'title' => 'Finishing Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'department_id' => 40,
                'title' => 'Finishing Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'department_id' => 40,
                'title' => 'Finishing Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'department_id' => 40,
                'title' => 'Finished Goods Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'department_id' => 41,
                'title' => 'Production Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'department_id' => 41,
                'title' => 'Production Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'department_id' => 41,
                'title' => 'Production Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'department_id' => 41,
                'title' => 'Processing Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'department_id' => 41,
                'title' => 'Processing Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'department_id' => 42,
                'title' => 'QC Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'department_id' => 42,
                'title' => 'QC Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'department_id' => 42,
                'title' => 'QC Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'department_id' => 42,
                'title' => 'QC Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'department_id' => 42,
                'title' => 'Quality Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'department_id' => 43,
                'title' => 'QA Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'department_id' => 43,
                'title' => 'QA Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'department_id' => 43,
                'title' => 'QA Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'department_id' => 43,
                'title' => 'QA Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'department_id' => 43,
                'title' => 'QA Consultant',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'department_id' => 44,
                'title' => 'Shipping Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'department_id' => 44,
                'title' => 'Shipping Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'department_id' => 44,
                'title' => 'Shipping Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'department_id' => 44,
                'title' => 'Shipping Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'department_id' => 44,
                'title' => 'Shipping Representative',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'department_id' => 44,
                'title' => 'Shipping & Clearance Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'department_id' => 44,
                'title' => 'Shipping & Clearance Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'department_id' => 44,
                'title' => 'Shipping & Clearance Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'department_id' => 44,
                'title' => 'Shipping & Clearance Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'department_id' => 44,
                'title' => 'Shipping & Clearance Representative',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'department_id' => 44,
                'title' => 'Custom & Clearnace Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'department_id' => 44,
                'title' => 'Custom & Clearnace Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'department_id' => 44,
                'title' => 'Custom & Clearnace Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'department_id' => 44,
                'title' => 'Custom & Clearnace Representative',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'department_id' => 44,
                'title' => 'Documentary Runner',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'department_id' => 44,
                'title' => 'Capitain Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'department_id' => 44,
                'title' => 'Ship Capitain',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'department_id' => 45,
                'title' => 'Import & Export Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'department_id' => 45,
                'title' => 'Import & Export Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'department_id' => 45,
                'title' => 'Import & Export Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'department_id' => 45,
                'title' => 'Import & Export Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'department_id' => 45,
                'title' => 'Import Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'department_id' => 45,
                'title' => 'Import Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'department_id' => 45,
                'title' => 'Import Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'department_id' => 45,
                'title' => 'Import Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'department_id' => 45,
                'title' => 'Export Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'department_id' => 45,
                'title' => 'Export Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'department_id' => 45,
                'title' => 'Export Executive',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'department_id' => 45,
                'title' => 'Export Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'department_id' => 46,
                'title' => 'Trasnport Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'department_id' => 46,
                'title' => 'Trasnport Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'department_id' => 46,
                'title' => 'Bus Driver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'department_id' => 46,
                'title' => 'Truck Driver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'department_id' => 46,
                'title' => 'Taxi Driver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'department_id' => 46,
                'title' => 'Driver',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'department_id' => 46,
                'title' => 'Cruise Capitain',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'department_id' => 46,
                'title' => 'Boat Capitain',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'department_id' => 47,
                'title' => 'Hotel Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'department_id' => 47,
                'title' => 'Assistant Hotel Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'department_id' => 47,
                'title' => 'Chief Purser',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'department_id' => 47,
                'title' => 'Deputy Purser',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'department_id' => 47,
                'title' => 'Purser',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'department_id' => 47,
                'title' => 'Assistant Purser',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'department_id' => 47,
                'title' => 'Junior Assistant Purser',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'department_id' => 47,
                'title' => 'Crew Purser',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'department_id' => 47,
                'title' => 'Shore Excursion Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'department_id' => 47,
                'title' => 'Assistant Shore Excursion Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'department_id' => 47,
                'title' => 'Hotel Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'department_id' => 47,
                'title' => 'Guesthouse Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'department_id' => 48,
                'title' => 'Receptionist',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'department_id' => 48,
                'title' => 'Customer Service',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'department_id' => 48,
                'title' => 'Bell Boy',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'department_id' => 48,
                'title' => 'Doorman',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'department_id' => 48,
                'title' => 'Night Auditor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'department_id' => 49,
                'title' => 'Restauant Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'department_id' => 49,
                'title' => 'Restaurant Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'department_id' => 49,
                'title' => 'Café Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'department_id' => 49,
                'title' => 'Café Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'department_id' => 49,
                'title' => 'Waiter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'department_id' => 49,
                'title' => 'Waitress',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'department_id' => 49,
                'title' => 'Room Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'department_id' => 49,
                'title' => 'Room Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'department_id' => 49,
                'title' => 'Head Waiter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'department_id' => 49,
                'title' => 'Assistant Waiter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'department_id' => 49,
                'title' => 'Assistant Waitress',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'department_id' => 49,
                'title' => 'Junior Waiter',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'department_id' => 49,
                'title' => 'Junior Waitress',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'department_id' => 49,
                'title' => 'Bartender',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'department_id' => 49,
                'title' => 'Bar Steward',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'department_id' => 49,
                'title' => 'Bar Stewardess',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'department_id' => 50,
                'title' => 'Housekeeping Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'department_id' => 50,
                'title' => 'Housekeeping Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'department_id' => 50,
                'title' => 'House-keeper',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'department_id' => 50,
                'title' => 'Laundry Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'department_id' => 50,
                'title' => 'Laundry Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'department_id' => 50,
                'title' => 'Cleaning Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'department_id' => 50,
                'title' => 'Roommaid',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'department_id' => 50,
                'title' => 'Chief Housekeeper',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'department_id' => 50,
                'title' => 'Assistant Chief Housekeeper',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('hr_positions')->insert(array (
            0 => 
            array (
                'id' => 501,
                'department_id' => 50,
                'title' => 'Floor Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'department_id' => 50,
                'title' => 'Head Steward',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'department_id' => 50,
                'title' => 'Cabin Steward',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'department_id' => 50,
                'title' => 'Assistant Cabin Steward',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'department_id' => 50,
                'title' => 'Assistant Cabin Stewardess',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'department_id' => 50,
                'title' => 'Assistant Laundry/Linen Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'department_id' => 50,
                'title' => 'Laundry/Linen Keeper',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'department_id' => 50,
                'title' => 'Cleaner',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'department_id' => 51,
                'title' => 'Protocol Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'department_id' => 51,
                'title' => 'Protocol Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'department_id' => 51,
                'title' => 'MC',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'department_id' => 52,
                'title' => 'Banguet & Catering Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'department_id' => 52,
                'title' => 'Banguet & Catering Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'department_id' => 52,
                'title' => 'Banquet Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'department_id' => 52,
                'title' => 'Banquet Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'department_id' => 52,
                'title' => 'Banquet Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'department_id' => 52,
                'title' => 'Catering Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'department_id' => 53,
                'title' => 'Operation Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'department_id' => 53,
                'title' => 'Operation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'department_id' => 54,
                'title' => 'International Relation Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'department_id' => 54,
                'title' => 'International Relation Officer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'department_id' => 55,
                'title' => 'Sous Chef',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'department_id' => 55,
                'title' => 'Bakery Chef',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'department_id' => 55,
                'title' => 'Cooker',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'department_id' => 55,
                'title' => 'Bar Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'department_id' => 55,
                'title' => 'Bar Supervisor',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'department_id' => 55,
                'title' => 'Cocktail Mixer',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'department_id' => 55,
                'title' => 'Chief Steward',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'department_id' => 55,
                'title' => 'Baristar',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'department_id' => 55,
                'title' => 'Executive Chef',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'department_id' => 55,
                'title' => 'F&B Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'department_id' => 55,
                'title' => 'Assistant F&B Director',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'department_id' => 55,
                'title' => 'F&B Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'department_id' => 55,
                'title' => 'Assistant F&B Manager',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'department_id' => 55,
                'title' => 'F&B Cost Controller',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'department_id' => 55,
                'title' => 'Sommelier',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}