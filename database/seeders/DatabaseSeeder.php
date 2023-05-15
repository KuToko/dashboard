<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use AzisHapidin\IndoRegion\RawDataGetter;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // truncate provinces, regencies, districts, and villages table
        DB::table('provinces')->truncate();
        DB::table('regencies')->truncate();
        DB::table('districts')->truncate();
        DB::table('villages')->truncate();

        $provinces = RawDataGetter::getProvinces();
        $provinces = collect($provinces)->map(function($province) {
            $originalId = $province['id'];
            $province['id'] = Str::uuid();
            $province['original_id'] = $originalId;
            return $province;
        });
        $provincesWithoutOriginalId = $provinces->map(function($province) {
            unset($province['original_id']);
            return $province;
        });
        DB::table('provinces')->insert($provincesWithoutOriginalId->toArray());

        $regencies = RawDataGetter::getRegencies();
        $regencies = collect($regencies)->map(function($regency) use ($provinces) {
            $originalId = $regency['id'];
            $regency['id'] = Str::uuid();
            $regency['original_id'] = $originalId;
            $regency['province_id'] = optional($provinces->where('original_id', $regency['province_id'])->first())['id'];
            return $regency;
        });
        $regenciesWithoutOriginalId = $regencies->map(function($regency) {
            unset($regency['original_id']);
            return $regency;
        })->where('province_id', '!=', null);
        DB::table('regencies')->insert($regenciesWithoutOriginalId->toArray());

        $districts = RawDataGetter::getDistricts();
        $districts = collect($districts)->map(function($district) use ($regencies) {
            $originalId = $district['id'];
            $district['id'] = Str::uuid();
            $district['original_id'] = $originalId;
            $district['regency_id'] = optional($regencies->where('original_id', $district['regency_id'])->first())['id'];
            return $district;
        });
        $districtsWithoutOriginalId = $districts->map(function($district) {
            unset($district['original_id']);
            return $district;
        })->where('regency_id', '!=', null);
        DB::table('districts')->insert($districtsWithoutOriginalId->toArray());

        $villages = RawDataGetter::getVillages();
        $villages = collect($villages)->map(function($village) use ($districts) {
            $originalId = $village['id'];
            $village['id'] = Str::uuid();
            $village['original_id'] = $originalId;
            $village['district_id'] = optional($districts->where('original_id', $village['district_id'])->first())['id'];
            return $village;
        });
        $villagesWithoutOriginalId = $villages->map(function($village) {
            unset($village['original_id']);
            return $village;
        })->where('district_id', '!=', null);
        DB::table('villages')->insert($villagesWithoutOriginalId->toArray());
    }
}