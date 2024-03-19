<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
          [ 
            'name' => 'Riki Candra',
            'address' => 'Jakarta City'
          ],
          [ 
            'name' => 'Budi Kurniawan',
            'address' => 'Depok City'
          ],
          [ 
            'name' => 'Andre taulani',
            'address' => 'Jakarta City'
          ],
          [ 
            'name' => 'Yonke Ismaji',
            'address' => 'Bandung City'
          ],
          [ 
            'name' => 'Alan Hadi',
            'address' => 'Serang City'
          ],
          [ 
            'name' => 'Boby Asmara',
            'address' => 'Tangerang City'
          ],
          [ 
            'name' => 'Jojo Kendi',
            'address' => 'Surabaya City'
          ],
          [ 
            'name' => 'Randy',
            'address' => 'Bekasi City'
          ],
          [ 
            'name' => 'Ucup',
            'address' => 'Jakarta City'
          ],
          [ 
            'name' => 'Komar',
            'address' => 'Medan City'
          ]
        ];
        $this->db->table('students')->insertBatch($data);
    }
}
