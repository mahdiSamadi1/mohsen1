<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent' => NULL,
                'title' => 'آذربایجان شرقی',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent' => NULL,
                'title' => 'آذربایجان غربی',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent' => NULL,
                'title' => 'اردبیل',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent' => NULL,
                'title' => 'اصفهان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent' => NULL,
                'title' => 'البرز',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent' => NULL,
                'title' => 'ایلام',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent' => NULL,
                'title' => 'بوشهر',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent' => NULL,
                'title' => 'تهران',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'parent' => NULL,
                'title' => 'چهارمحال بختیاری',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'parent' => NULL,
                'title' => 'خراسان جنوبی',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'parent' => NULL,
                'title' => 'خراسان رضوی',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'parent' => NULL,
                'title' => 'خراسان شمالی',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'parent' => NULL,
                'title' => 'خوزستان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'parent' => NULL,
                'title' => 'زنجان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'parent' => NULL,
                'title' => 'سمنان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'parent' => NULL,
                'title' => 'سیستان و بلوچستان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'parent' => NULL,
                'title' => 'فارس',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'parent' => NULL,
                'title' => 'قزوین',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'parent' => NULL,
                'title' => 'قم',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'parent' => NULL,
                'title' => 'کردستان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'parent' => NULL,
                'title' => 'کرمان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'parent' => NULL,
                'title' => 'کرمانشاه',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'parent' => NULL,
                'title' => 'کهکیلویه و بویراحمد',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'parent' => NULL,
                'title' => 'گلستان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'parent' => NULL,
                'title' => 'گیلان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'parent' => NULL,
                'title' => 'لرستان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'parent' => NULL,
                'title' => 'مازندران',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'parent' => NULL,
                'title' => 'مرکزی',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'parent' => NULL,
                'title' => 'هرمزگان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'parent' => NULL,
                'title' => 'همدان',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'parent' => NULL,
                'title' => 'یزد',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'parent' => 1,
                'title' => 'آذرشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            32 => 
            array (
                'id' => 33,
                'parent' => 1,
                'title' => 'تیمورلو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            33 => 
            array (
                'id' => 34,
                'parent' => 1,
                'title' => 'گوگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            34 => 
            array (
                'id' => 35,
                'parent' => 1,
                'title' => 'ممقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            35 => 
            array (
                'id' => 36,
                'parent' => 1,
                'title' => 'اسکو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            36 => 
            array (
                'id' => 37,
                'parent' => 1,
                'title' => 'ایلخچی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            37 => 
            array (
                'id' => 38,
                'parent' => 1,
                'title' => 'سهند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            38 => 
            array (
                'id' => 39,
                'parent' => 1,
                'title' => 'اهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            39 => 
            array (
                'id' => 40,
                'parent' => 1,
                'title' => 'هوراند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            40 => 
            array (
                'id' => 41,
                'parent' => 1,
                'title' => 'بستان آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            41 => 
            array (
                'id' => 42,
                'parent' => 1,
                'title' => 'تیکمه داش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            42 => 
            array (
                'id' => 43,
                'parent' => 1,
                'title' => 'بناب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            43 => 
            array (
                'id' => 44,
                'parent' => 1,
                'title' => 'باسمنج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            44 => 
            array (
                'id' => 45,
                'parent' => 1,
                'title' => 'تبریز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            45 => 
            array (
                'id' => 46,
                'parent' => 1,
                'title' => 'خسروشاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            46 => 
            array (
                'id' => 47,
                'parent' => 1,
                'title' => 'سردرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            47 => 
            array (
                'id' => 48,
                'parent' => 1,
                'title' => 'جلفا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            48 => 
            array (
                'id' => 49,
                'parent' => 1,
                'title' => 'سیه رود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            49 => 
            array (
                'id' => 50,
                'parent' => 1,
                'title' => 'هادیشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            50 => 
            array (
                'id' => 51,
                'parent' => 1,
                'title' => 'قره آغاج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            51 => 
            array (
                'id' => 52,
                'parent' => 1,
                'title' => 'خمارلو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            52 => 
            array (
                'id' => 53,
                'parent' => 1,
                'title' => 'دوزدوزان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            53 => 
            array (
                'id' => 54,
                'parent' => 1,
                'title' => 'سراب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            54 => 
            array (
                'id' => 55,
                'parent' => 1,
                'title' => 'شربیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            55 => 
            array (
                'id' => 56,
                'parent' => 1,
                'title' => 'مهربان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            56 => 
            array (
                'id' => 57,
                'parent' => 1,
                'title' => 'تسوج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:25',
                'updated_at' => '2020-08-28 13:47:25',
            ),
            57 => 
            array (
                'id' => 58,
                'parent' => 1,
                'title' => 'خامنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            58 => 
            array (
                'id' => 59,
                'parent' => 1,
                'title' => 'سیس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            59 => 
            array (
                'id' => 60,
                'parent' => 1,
                'title' => 'شبستر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            60 => 
            array (
                'id' => 61,
                'parent' => 1,
                'title' => 'شرفخانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            61 => 
            array (
                'id' => 62,
                'parent' => 1,
                'title' => 'شندآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            62 => 
            array (
                'id' => 63,
                'parent' => 1,
                'title' => 'صوفیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            63 => 
            array (
                'id' => 64,
                'parent' => 1,
                'title' => 'کوزه کنان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            64 => 
            array (
                'id' => 65,
                'parent' => 1,
                'title' => 'وایقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            65 => 
            array (
                'id' => 66,
                'parent' => 1,
                'title' => 'جوان قلعه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            66 => 
            array (
                'id' => 67,
                'parent' => 1,
                'title' => 'عجب شیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            67 => 
            array (
                'id' => 68,
                'parent' => 1,
                'title' => 'آبش احمد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            68 => 
            array (
                'id' => 69,
                'parent' => 1,
                'title' => 'کلیبر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            69 => 
            array (
                'id' => 70,
                'parent' => 1,
            'title' => 'خداجو(خراجو)',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            70 => 
            array (
                'id' => 71,
                'parent' => 1,
                'title' => 'مراغه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            71 => 
            array (
                'id' => 72,
                'parent' => 1,
                'title' => 'بناب مرند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            72 => 
            array (
                'id' => 73,
                'parent' => 1,
                'title' => 'زنوز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            73 => 
            array (
                'id' => 74,
                'parent' => 1,
                'title' => 'کشکسرای',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            74 => 
            array (
                'id' => 75,
                'parent' => 1,
                'title' => 'مرند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            75 => 
            array (
                'id' => 76,
                'parent' => 1,
                'title' => 'یامچی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            76 => 
            array (
                'id' => 77,
                'parent' => 1,
                'title' => 'لیلان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            77 => 
            array (
                'id' => 78,
                'parent' => 1,
                'title' => 'مبارک شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            78 => 
            array (
                'id' => 79,
                'parent' => 1,
                'title' => 'ملکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            79 => 
            array (
                'id' => 80,
                'parent' => 1,
                'title' => 'آقکند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            80 => 
            array (
                'id' => 81,
                'parent' => 1,
                'title' => 'اچاچی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            81 => 
            array (
                'id' => 82,
                'parent' => 1,
                'title' => 'ترک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            82 => 
            array (
                'id' => 83,
                'parent' => 1,
                'title' => 'ترکمانچای',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            83 => 
            array (
                'id' => 84,
                'parent' => 1,
                'title' => 'میانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            84 => 
            array (
                'id' => 85,
                'parent' => 1,
                'title' => 'خاروانا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:26',
                'updated_at' => '2020-08-28 13:47:26',
            ),
            85 => 
            array (
                'id' => 86,
                'parent' => 1,
                'title' => 'ورزقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            86 => 
            array (
                'id' => 87,
                'parent' => 1,
                'title' => 'بخشایش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            87 => 
            array (
                'id' => 88,
                'parent' => 1,
                'title' => 'خواجه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            88 => 
            array (
                'id' => 89,
                'parent' => 1,
                'title' => 'زرنق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            89 => 
            array (
                'id' => 90,
                'parent' => 1,
                'title' => 'کلوانق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            90 => 
            array (
                'id' => 91,
                'parent' => 1,
                'title' => 'هریس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            91 => 
            array (
                'id' => 92,
                'parent' => 1,
                'title' => 'نظرکهریزی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            92 => 
            array (
                'id' => 93,
                'parent' => 1,
                'title' => 'هشترود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            93 => 
            array (
                'id' => 94,
                'parent' => 2,
                'title' => 'ارومیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            94 => 
            array (
                'id' => 95,
                'parent' => 2,
                'title' => 'سرو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            95 => 
            array (
                'id' => 96,
                'parent' => 2,
                'title' => 'سیلوانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            96 => 
            array (
                'id' => 97,
                'parent' => 2,
                'title' => 'قوشچی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            97 => 
            array (
                'id' => 98,
                'parent' => 2,
                'title' => 'نوشین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            98 => 
            array (
                'id' => 99,
                'parent' => 2,
                'title' => 'اشنویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            99 => 
            array (
                'id' => 100,
                'parent' => 2,
                'title' => 'نالوس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            100 => 
            array (
                'id' => 101,
                'parent' => 2,
                'title' => 'بوکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            101 => 
            array (
                'id' => 102,
                'parent' => 2,
                'title' => 'سیمینه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            102 => 
            array (
                'id' => 103,
                'parent' => 2,
                'title' => 'پلدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            103 => 
            array (
                'id' => 104,
                'parent' => 2,
                'title' => 'نازک علیا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            104 => 
            array (
                'id' => 105,
                'parent' => 2,
                'title' => 'پیرانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            105 => 
            array (
                'id' => 106,
                'parent' => 2,
                'title' => 'گردکشانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            106 => 
            array (
                'id' => 107,
                'parent' => 2,
                'title' => 'تکاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            107 => 
            array (
                'id' => 108,
                'parent' => 2,
                'title' => 'آواجیق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            108 => 
            array (
                'id' => 109,
                'parent' => 2,
                'title' => 'سیه چشمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            109 => 
            array (
                'id' => 110,
                'parent' => 2,
                'title' => 'قره ضیاءالدین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            110 => 
            array (
                'id' => 111,
                'parent' => 2,
                'title' => 'ایواوغلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            111 => 
            array (
                'id' => 112,
                'parent' => 2,
                'title' => 'خوی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:27',
                'updated_at' => '2020-08-28 13:47:27',
            ),
            112 => 
            array (
                'id' => 113,
                'parent' => 2,
                'title' => 'دیزج دیز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            113 => 
            array (
                'id' => 114,
                'parent' => 2,
                'title' => 'زرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            114 => 
            array (
                'id' => 115,
                'parent' => 2,
                'title' => 'فیرورق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            115 => 
            array (
                'id' => 116,
                'parent' => 2,
                'title' => 'قطور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            116 => 
            array (
                'id' => 117,
                'parent' => 2,
                'title' => 'ربط',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            117 => 
            array (
                'id' => 118,
                'parent' => 2,
                'title' => 'سردشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            118 => 
            array (
                'id' => 119,
                'parent' => 2,
                'title' => 'میرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            119 => 
            array (
                'id' => 120,
                'parent' => 2,
                'title' => 'تازه شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            120 => 
            array (
                'id' => 121,
                'parent' => 2,
                'title' => 'سلماس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            121 => 
            array (
                'id' => 122,
                'parent' => 2,
                'title' => 'شاهین دژ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            122 => 
            array (
                'id' => 123,
                'parent' => 2,
                'title' => 'کشاورز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            123 => 
            array (
                'id' => 124,
                'parent' => 2,
                'title' => 'محمودآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            124 => 
            array (
                'id' => 125,
                'parent' => 2,
                'title' => 'شوط',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            125 => 
            array (
                'id' => 126,
                'parent' => 2,
                'title' => 'مرگنلر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            126 => 
            array (
                'id' => 127,
                'parent' => 2,
                'title' => 'بازرگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            127 => 
            array (
                'id' => 128,
                'parent' => 2,
                'title' => 'ماکو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            128 => 
            array (
                'id' => 129,
                'parent' => 2,
                'title' => 'خلیفان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            129 => 
            array (
                'id' => 130,
                'parent' => 2,
                'title' => 'مهاباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            130 => 
            array (
                'id' => 131,
                'parent' => 2,
                'title' => 'باروق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            131 => 
            array (
                'id' => 132,
                'parent' => 2,
                'title' => 'چهاربرج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            132 => 
            array (
                'id' => 133,
                'parent' => 2,
                'title' => 'میاندوآب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            133 => 
            array (
                'id' => 134,
                'parent' => 2,
                'title' => 'محمدیار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            134 => 
            array (
                'id' => 135,
                'parent' => 2,
                'title' => 'نقده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            135 => 
            array (
                'id' => 136,
                'parent' => 3,
                'title' => 'اردبیل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:28',
                'updated_at' => '2020-08-28 13:47:28',
            ),
            136 => 
            array (
                'id' => 137,
                'parent' => 3,
                'title' => 'هیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            137 => 
            array (
                'id' => 138,
                'parent' => 3,
                'title' => 'بیله سوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            138 => 
            array (
                'id' => 139,
                'parent' => 3,
                'title' => 'جعفرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            139 => 
            array (
                'id' => 140,
                'parent' => 3,
                'title' => 'اسلام اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            140 => 
            array (
                'id' => 141,
                'parent' => 3,
                'title' => 'اصلاندوز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            141 => 
            array (
                'id' => 142,
                'parent' => 3,
                'title' => 'پارس آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            142 => 
            array (
                'id' => 143,
                'parent' => 3,
                'title' => 'تازه کند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            143 => 
            array (
                'id' => 144,
                'parent' => 3,
                'title' => 'خلخال',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            144 => 
            array (
                'id' => 145,
                'parent' => 3,
                'title' => 'کلور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            145 => 
            array (
                'id' => 146,
                'parent' => 3,
                'title' => 'هشتجین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            146 => 
            array (
                'id' => 147,
                'parent' => 3,
                'title' => 'سرعین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            147 => 
            array (
                'id' => 148,
                'parent' => 3,
                'title' => 'گیوی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            148 => 
            array (
                'id' => 149,
                'parent' => 3,
                'title' => 'تازه کندانگوت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            149 => 
            array (
                'id' => 150,
                'parent' => 3,
                'title' => 'گرمی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            150 => 
            array (
                'id' => 151,
                'parent' => 3,
                'title' => 'رضی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            151 => 
            array (
                'id' => 152,
                'parent' => 3,
                'title' => 'فخراباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            152 => 
            array (
                'id' => 153,
                'parent' => 3,
                'title' => 'قصابه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            153 => 
            array (
                'id' => 154,
                'parent' => 3,
                'title' => 'لاهرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            154 => 
            array (
                'id' => 155,
                'parent' => 3,
                'title' => 'مرادلو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            155 => 
            array (
                'id' => 156,
                'parent' => 3,
                'title' => 'مشگین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            156 => 
            array (
                'id' => 157,
                'parent' => 3,
                'title' => 'آبی بیگلو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            157 => 
            array (
                'id' => 158,
                'parent' => 3,
                'title' => 'عنبران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            158 => 
            array (
                'id' => 159,
                'parent' => 3,
                'title' => 'نمین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            159 => 
            array (
                'id' => 160,
                'parent' => 3,
                'title' => 'کوراییم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            160 => 
            array (
                'id' => 161,
                'parent' => 3,
                'title' => 'نیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            161 => 
            array (
                'id' => 162,
                'parent' => 4,
                'title' => 'آران وبیدگل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            162 => 
            array (
                'id' => 163,
                'parent' => 4,
                'title' => 'ابوزیدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            163 => 
            array (
                'id' => 164,
                'parent' => 4,
                'title' => 'سفیدشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            164 => 
            array (
                'id' => 165,
                'parent' => 4,
                'title' => 'نوش آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            165 => 
            array (
                'id' => 166,
                'parent' => 4,
                'title' => 'اردستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            166 => 
            array (
                'id' => 167,
                'parent' => 4,
                'title' => 'زواره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            167 => 
            array (
                'id' => 168,
                'parent' => 4,
                'title' => 'مهاباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            168 => 
            array (
                'id' => 169,
                'parent' => 4,
                'title' => 'اژیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            169 => 
            array (
                'id' => 170,
                'parent' => 4,
                'title' => 'اصفهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:29',
                'updated_at' => '2020-08-28 13:47:29',
            ),
            170 => 
            array (
                'id' => 171,
                'parent' => 4,
                'title' => 'بهارستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            171 => 
            array (
                'id' => 172,
                'parent' => 4,
                'title' => 'تودشک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            172 => 
            array (
                'id' => 173,
                'parent' => 4,
                'title' => 'حسن اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            173 => 
            array (
                'id' => 174,
                'parent' => 4,
                'title' => 'زیار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            174 => 
            array (
                'id' => 175,
                'parent' => 4,
                'title' => 'سجزی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            175 => 
            array (
                'id' => 176,
                'parent' => 4,
                'title' => 'قهجاورستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            176 => 
            array (
                'id' => 177,
                'parent' => 4,
                'title' => 'کوهپایه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            177 => 
            array (
                'id' => 178,
                'parent' => 4,
                'title' => 'محمدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            178 => 
            array (
                'id' => 179,
                'parent' => 4,
                'title' => 'نصرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            179 => 
            array (
                'id' => 180,
                'parent' => 4,
                'title' => 'نیک آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            180 => 
            array (
                'id' => 181,
                'parent' => 4,
                'title' => 'ورزنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            181 => 
            array (
                'id' => 182,
                'parent' => 4,
                'title' => 'هرند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            182 => 
            array (
                'id' => 183,
                'parent' => 4,
                'title' => 'حبیب آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            183 => 
            array (
                'id' => 184,
                'parent' => 4,
                'title' => 'خورزوق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            184 => 
            array (
                'id' => 185,
                'parent' => 4,
                'title' => 'دستگرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            185 => 
            array (
                'id' => 186,
                'parent' => 4,
                'title' => 'دولت آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            186 => 
            array (
                'id' => 187,
                'parent' => 4,
                'title' => 'سین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            187 => 
            array (
                'id' => 188,
                'parent' => 4,
                'title' => 'شاپورآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            188 => 
            array (
                'id' => 189,
                'parent' => 4,
                'title' => 'کمشچه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            189 => 
            array (
                'id' => 190,
                'parent' => 4,
                'title' => 'افوس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            190 => 
            array (
                'id' => 191,
                'parent' => 4,
                'title' => 'بویین ومیاندشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            191 => 
            array (
                'id' => 192,
                'parent' => 4,
                'title' => 'تیران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            192 => 
            array (
                'id' => 193,
                'parent' => 4,
                'title' => 'رضوانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            193 => 
            array (
                'id' => 194,
                'parent' => 4,
                'title' => 'عسگران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            194 => 
            array (
                'id' => 195,
                'parent' => 4,
                'title' => 'چادگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            195 => 
            array (
                'id' => 196,
                'parent' => 4,
                'title' => 'رزوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            196 => 
            array (
                'id' => 197,
                'parent' => 4,
                'title' => 'اصغرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            197 => 
            array (
                'id' => 198,
                'parent' => 4,
                'title' => 'خمینی شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            198 => 
            array (
                'id' => 199,
                'parent' => 4,
                'title' => 'درچه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            199 => 
            array (
                'id' => 200,
                'parent' => 4,
                'title' => 'کوشک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            200 => 
            array (
                'id' => 201,
                'parent' => 4,
                'title' => 'خوانسار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:30',
                'updated_at' => '2020-08-28 13:47:30',
            ),
            201 => 
            array (
                'id' => 202,
                'parent' => 4,
                'title' => 'جندق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            202 => 
            array (
                'id' => 203,
                'parent' => 4,
                'title' => 'خور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            203 => 
            array (
                'id' => 204,
                'parent' => 4,
                'title' => 'فرخی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            204 => 
            array (
                'id' => 205,
                'parent' => 4,
                'title' => 'دهاقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            205 => 
            array (
                'id' => 206,
                'parent' => 4,
                'title' => 'گلشن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            206 => 
            array (
                'id' => 207,
                'parent' => 4,
                'title' => 'حنا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            207 => 
            array (
                'id' => 208,
                'parent' => 4,
                'title' => 'سمیرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            208 => 
            array (
                'id' => 209,
                'parent' => 4,
                'title' => 'کمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            209 => 
            array (
                'id' => 210,
                'parent' => 4,
                'title' => 'ونک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            210 => 
            array (
                'id' => 211,
                'parent' => 4,
                'title' => 'شاهین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            211 => 
            array (
                'id' => 212,
                'parent' => 4,
                'title' => 'گرگاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            212 => 
            array (
                'id' => 213,
                'parent' => 4,
                'title' => 'گزبرخوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            213 => 
            array (
                'id' => 214,
                'parent' => 4,
                'title' => 'لای بید',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            214 => 
            array (
                'id' => 215,
                'parent' => 4,
                'title' => 'میمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            215 => 
            array (
                'id' => 216,
                'parent' => 4,
                'title' => 'وزوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            216 => 
            array (
                'id' => 217,
                'parent' => 4,
                'title' => 'شهرضا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            217 => 
            array (
                'id' => 218,
                'parent' => 4,
                'title' => 'منظریه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            218 => 
            array (
                'id' => 219,
                'parent' => 4,
                'title' => 'داران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            219 => 
            array (
                'id' => 220,
                'parent' => 4,
                'title' => 'دامنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            220 => 
            array (
                'id' => 221,
                'parent' => 4,
                'title' => 'برف انبار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            221 => 
            array (
                'id' => 222,
                'parent' => 4,
                'title' => 'فریدونشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            222 => 
            array (
                'id' => 223,
                'parent' => 4,
                'title' => 'ابریشم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            223 => 
            array (
                'id' => 224,
                'parent' => 4,
                'title' => 'ایمانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            224 => 
            array (
                'id' => 225,
                'parent' => 4,
                'title' => 'بهاران شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            225 => 
            array (
                'id' => 226,
                'parent' => 4,
                'title' => 'پیربکران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            226 => 
            array (
                'id' => 227,
                'parent' => 4,
                'title' => 'زازران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            227 => 
            array (
                'id' => 228,
                'parent' => 4,
                'title' => 'فلاورجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            228 => 
            array (
                'id' => 229,
                'parent' => 4,
                'title' => 'قهدریجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            229 => 
            array (
                'id' => 230,
                'parent' => 4,
                'title' => 'کلیشادوسودرجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            230 => 
            array (
                'id' => 231,
                'parent' => 4,
                'title' => 'برزک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            231 => 
            array (
                'id' => 232,
                'parent' => 4,
                'title' => 'جوشقان قالی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            232 => 
            array (
                'id' => 233,
                'parent' => 4,
                'title' => 'قمصر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            233 => 
            array (
                'id' => 234,
                'parent' => 4,
                'title' => 'کاشان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            234 => 
            array (
                'id' => 235,
                'parent' => 4,
                'title' => 'کامو و چوگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            235 => 
            array (
                'id' => 236,
                'parent' => 4,
                'title' => 'مشکات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            236 => 
            array (
                'id' => 237,
                'parent' => 4,
                'title' => 'نیاسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            237 => 
            array (
                'id' => 238,
                'parent' => 4,
                'title' => 'گلپایگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            238 => 
            array (
                'id' => 239,
                'parent' => 4,
                'title' => 'گلشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            239 => 
            array (
                'id' => 240,
                'parent' => 4,
                'title' => 'گوگد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            240 => 
            array (
                'id' => 241,
                'parent' => 4,
                'title' => 'باغ بهادران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:31',
                'updated_at' => '2020-08-28 13:47:31',
            ),
            241 => 
            array (
                'id' => 242,
                'parent' => 4,
                'title' => 'باغشاد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            242 => 
            array (
                'id' => 243,
                'parent' => 4,
                'title' => 'چرمهین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            243 => 
            array (
                'id' => 244,
                'parent' => 4,
                'title' => 'چمگردان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            244 => 
            array (
                'id' => 245,
                'parent' => 4,
                'title' => 'زاینده رود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            245 => 
            array (
                'id' => 246,
                'parent' => 4,
                'title' => 'زرین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            246 => 
            array (
                'id' => 247,
                'parent' => 4,
                'title' => 'سده لنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            247 => 
            array (
                'id' => 248,
                'parent' => 4,
                'title' => 'فولادشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            248 => 
            array (
                'id' => 249,
                'parent' => 4,
                'title' => 'ورنامخواست',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            249 => 
            array (
                'id' => 250,
                'parent' => 4,
                'title' => 'دیزیچه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            250 => 
            array (
                'id' => 251,
                'parent' => 4,
                'title' => 'زیباشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            251 => 
            array (
                'id' => 252,
                'parent' => 4,
                'title' => 'طالخونچه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            252 => 
            array (
                'id' => 253,
                'parent' => 4,
                'title' => 'کرکوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            253 => 
            array (
                'id' => 254,
                'parent' => 4,
                'title' => 'مبارکه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            254 => 
            array (
                'id' => 255,
                'parent' => 4,
                'title' => 'مجلسی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            255 => 
            array (
                'id' => 256,
                'parent' => 4,
                'title' => 'انارک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            256 => 
            array (
                'id' => 257,
                'parent' => 4,
                'title' => 'بافران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            257 => 
            array (
                'id' => 258,
                'parent' => 4,
                'title' => 'نایین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            258 => 
            array (
                'id' => 259,
                'parent' => 4,
                'title' => 'جوزدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            259 => 
            array (
                'id' => 260,
                'parent' => 4,
                'title' => 'دهق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            260 => 
            array (
                'id' => 261,
                'parent' => 4,
                'title' => 'علویجه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            261 => 
            array (
                'id' => 262,
                'parent' => 4,
                'title' => 'کهریزسنگ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            262 => 
            array (
                'id' => 263,
                'parent' => 4,
                'title' => 'گلدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            263 => 
            array (
                'id' => 264,
                'parent' => 4,
                'title' => 'نجف آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            264 => 
            array (
                'id' => 265,
                'parent' => 4,
                'title' => 'بادرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            265 => 
            array (
                'id' => 266,
                'parent' => 4,
                'title' => 'خالدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            266 => 
            array (
                'id' => 267,
                'parent' => 4,
                'title' => 'طرق رود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            267 => 
            array (
                'id' => 268,
                'parent' => 4,
                'title' => 'نطنز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:32',
                'updated_at' => '2020-08-28 13:47:32',
            ),
            268 => 
            array (
                'id' => 269,
                'parent' => 5,
                'title' => 'اشتهارد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            269 => 
            array (
                'id' => 270,
                'parent' => 5,
                'title' => 'چهارباغ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            270 => 
            array (
                'id' => 271,
                'parent' => 5,
                'title' => 'شهرجدیدهشتگرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            271 => 
            array (
                'id' => 272,
                'parent' => 5,
                'title' => 'کوهسار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            272 => 
            array (
                'id' => 273,
                'parent' => 5,
                'title' => 'گلسار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            273 => 
            array (
                'id' => 274,
                'parent' => 5,
                'title' => 'هشتگرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            274 => 
            array (
                'id' => 275,
                'parent' => 5,
                'title' => 'طالقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            275 => 
            array (
                'id' => 276,
                'parent' => 5,
                'title' => 'فردیس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            276 => 
            array (
                'id' => 277,
                'parent' => 5,
                'title' => 'مشکین دشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            277 => 
            array (
                'id' => 278,
                'parent' => 5,
                'title' => 'آسارا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            278 => 
            array (
                'id' => 279,
                'parent' => 5,
                'title' => 'کرج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            279 => 
            array (
                'id' => 280,
                'parent' => 5,
                'title' => 'کمال شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            280 => 
            array (
                'id' => 281,
                'parent' => 5,
                'title' => 'گرمدره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            281 => 
            array (
                'id' => 282,
                'parent' => 5,
                'title' => 'ماهدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            282 => 
            array (
                'id' => 283,
                'parent' => 5,
                'title' => 'محمدشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            283 => 
            array (
                'id' => 284,
                'parent' => 5,
                'title' => 'تنکمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            284 => 
            array (
                'id' => 285,
                'parent' => 5,
                'title' => 'نظرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            285 => 
            array (
                'id' => 286,
                'parent' => 6,
                'title' => 'آبدانان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            286 => 
            array (
                'id' => 287,
                'parent' => 6,
                'title' => 'سراب باغ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            287 => 
            array (
                'id' => 288,
                'parent' => 6,
                'title' => 'مورموری',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            288 => 
            array (
                'id' => 289,
                'parent' => 6,
                'title' => 'ایلام',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            289 => 
            array (
                'id' => 290,
                'parent' => 6,
                'title' => 'چوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            290 => 
            array (
                'id' => 291,
                'parent' => 6,
                'title' => 'ایوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            291 => 
            array (
                'id' => 292,
                'parent' => 6,
                'title' => 'زرنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:33',
                'updated_at' => '2020-08-28 13:47:33',
            ),
            292 => 
            array (
                'id' => 293,
                'parent' => 6,
                'title' => 'بدره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            293 => 
            array (
                'id' => 294,
                'parent' => 6,
                'title' => 'آسمان آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            294 => 
            array (
                'id' => 295,
                'parent' => 6,
                'title' => 'بلاوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            295 => 
            array (
                'id' => 296,
                'parent' => 6,
                'title' => 'توحید',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            296 => 
            array (
                'id' => 297,
                'parent' => 6,
                'title' => 'سرابله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            297 => 
            array (
                'id' => 298,
                'parent' => 6,
                'title' => 'شباب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            298 => 
            array (
                'id' => 299,
                'parent' => 6,
                'title' => 'دره شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            299 => 
            array (
                'id' => 300,
                'parent' => 6,
                'title' => 'ماژین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            300 => 
            array (
                'id' => 301,
                'parent' => 6,
                'title' => 'پهله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            301 => 
            array (
                'id' => 302,
                'parent' => 6,
                'title' => 'دهلران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            302 => 
            array (
                'id' => 303,
                'parent' => 6,
                'title' => 'موسیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            303 => 
            array (
                'id' => 304,
                'parent' => 6,
                'title' => 'میمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:34',
                'updated_at' => '2020-08-28 13:47:34',
            ),
            304 => 
            array (
                'id' => 305,
                'parent' => 6,
                'title' => 'لومار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            305 => 
            array (
                'id' => 306,
                'parent' => 6,
                'title' => 'ارکواز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            306 => 
            array (
                'id' => 307,
                'parent' => 6,
                'title' => 'دلگشا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            307 => 
            array (
                'id' => 308,
                'parent' => 6,
                'title' => 'مهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            308 => 
            array (
                'id' => 309,
                'parent' => 6,
                'title' => 'صالح آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            309 => 
            array (
                'id' => 310,
                'parent' => 6,
                'title' => 'مهران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            310 => 
            array (
                'id' => 311,
                'parent' => 7,
                'title' => 'بوشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            311 => 
            array (
                'id' => 312,
                'parent' => 7,
                'title' => 'چغادک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:35',
                'updated_at' => '2020-08-28 13:47:35',
            ),
            312 => 
            array (
                'id' => 313,
                'parent' => 7,
                'title' => 'خارک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            313 => 
            array (
                'id' => 314,
                'parent' => 7,
                'title' => 'عالی شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            314 => 
            array (
                'id' => 315,
                'parent' => 7,
                'title' => 'آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            315 => 
            array (
                'id' => 316,
                'parent' => 7,
                'title' => 'اهرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            316 => 
            array (
                'id' => 317,
                'parent' => 7,
                'title' => 'دلوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            317 => 
            array (
                'id' => 318,
                'parent' => 7,
                'title' => 'انارستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            318 => 
            array (
                'id' => 319,
                'parent' => 7,
                'title' => 'جم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            319 => 
            array (
                'id' => 320,
                'parent' => 7,
                'title' => 'ریز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            320 => 
            array (
                'id' => 321,
                'parent' => 7,
                'title' => 'آب پخش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            321 => 
            array (
                'id' => 322,
                'parent' => 7,
                'title' => 'برازجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            322 => 
            array (
                'id' => 323,
                'parent' => 7,
                'title' => 'بوشکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            323 => 
            array (
                'id' => 324,
                'parent' => 7,
                'title' => 'تنگ ارم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            324 => 
            array (
                'id' => 325,
                'parent' => 7,
                'title' => 'دالکی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:36',
                'updated_at' => '2020-08-28 13:47:36',
            ),
            325 => 
            array (
                'id' => 326,
                'parent' => 7,
                'title' => 'سعد آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            326 => 
            array (
                'id' => 327,
                'parent' => 7,
                'title' => 'شبانکاره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            327 => 
            array (
                'id' => 328,
                'parent' => 7,
                'title' => 'کلمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            328 => 
            array (
                'id' => 329,
                'parent' => 7,
                'title' => 'وحدتیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            329 => 
            array (
                'id' => 330,
                'parent' => 7,
                'title' => 'بادوله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            330 => 
            array (
                'id' => 331,
                'parent' => 7,
                'title' => 'خورموج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            331 => 
            array (
                'id' => 332,
                'parent' => 7,
                'title' => 'شنبه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            332 => 
            array (
                'id' => 333,
                'parent' => 7,
                'title' => 'کاکی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            333 => 
            array (
                'id' => 334,
                'parent' => 7,
                'title' => 'آبدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            334 => 
            array (
                'id' => 335,
                'parent' => 7,
                'title' => 'بردخون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            335 => 
            array (
                'id' => 336,
                'parent' => 7,
                'title' => 'بردستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            336 => 
            array (
                'id' => 337,
                'parent' => 7,
                'title' => 'بندردیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            337 => 
            array (
                'id' => 338,
                'parent' => 7,
                'title' => 'دوراهک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            338 => 
            array (
                'id' => 339,
                'parent' => 7,
                'title' => 'امام حسن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            339 => 
            array (
                'id' => 340,
                'parent' => 7,
                'title' => 'بندردیلم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            340 => 
            array (
                'id' => 341,
                'parent' => 7,
                'title' => 'عسلویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            341 => 
            array (
                'id' => 342,
                'parent' => 7,
                'title' => 'نخل تقی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            342 => 
            array (
                'id' => 343,
                'parent' => 7,
                'title' => 'بندرکنگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            343 => 
            array (
                'id' => 344,
                'parent' => 7,
                'title' => 'بنک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            344 => 
            array (
                'id' => 345,
                'parent' => 7,
                'title' => 'سیراف',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:37',
                'updated_at' => '2020-08-28 13:47:37',
            ),
            345 => 
            array (
                'id' => 346,
                'parent' => 7,
                'title' => 'بندرریگ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:38',
                'updated_at' => '2020-08-28 13:47:38',
            ),
            346 => 
            array (
                'id' => 347,
                'parent' => 7,
                'title' => 'بندرگناوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:38',
                'updated_at' => '2020-08-28 13:47:38',
            ),
            347 => 
            array (
                'id' => 348,
                'parent' => 8,
                'title' => 'احمد آباد مستوفی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:38',
                'updated_at' => '2020-08-28 13:47:38',
            ),
            348 => 
            array (
                'id' => 349,
                'parent' => 8,
                'title' => 'اسلامشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:38',
                'updated_at' => '2020-08-28 13:47:38',
            ),
            349 => 
            array (
                'id' => 350,
                'parent' => 8,
                'title' => 'چهاردانگه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:38',
                'updated_at' => '2020-08-28 13:47:38',
            ),
            350 => 
            array (
                'id' => 351,
                'parent' => 8,
                'title' => 'صالحیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:38',
                'updated_at' => '2020-08-28 13:47:38',
            ),
            351 => 
            array (
                'id' => 352,
                'parent' => 8,
                'title' => 'گلستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            352 => 
            array (
                'id' => 353,
                'parent' => 8,
                'title' => 'نسیم شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            353 => 
            array (
                'id' => 354,
                'parent' => 8,
                'title' => 'پاکدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            354 => 
            array (
                'id' => 355,
                'parent' => 8,
                'title' => 'شریف آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            355 => 
            array (
                'id' => 356,
                'parent' => 8,
                'title' => 'فرون اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            356 => 
            array (
                'id' => 357,
                'parent' => 8,
                'title' => 'بومهن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            357 => 
            array (
                'id' => 358,
                'parent' => 8,
                'title' => 'پردیس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            358 => 
            array (
                'id' => 359,
                'parent' => 8,
                'title' => 'پیشوا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            359 => 
            array (
                'id' => 360,
                'parent' => 8,
                'title' => 'تهران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            360 => 
            array (
                'id' => 361,
                'parent' => 8,
                'title' => 'آبسرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            361 => 
            array (
                'id' => 362,
                'parent' => 8,
                'title' => 'آبعلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            362 => 
            array (
                'id' => 363,
                'parent' => 8,
                'title' => 'دماوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            363 => 
            array (
                'id' => 364,
                'parent' => 8,
                'title' => 'رودهن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            364 => 
            array (
                'id' => 365,
                'parent' => 8,
                'title' => 'کیلان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            365 => 
            array (
                'id' => 366,
                'parent' => 8,
                'title' => 'پرند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            366 => 
            array (
                'id' => 367,
                'parent' => 8,
                'title' => 'رباطکریم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            367 => 
            array (
                'id' => 368,
                'parent' => 8,
                'title' => 'نصیرشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            368 => 
            array (
                'id' => 369,
                'parent' => 8,
                'title' => 'باقرشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            369 => 
            array (
                'id' => 370,
                'parent' => 8,
                'title' => 'حسن آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            370 => 
            array (
                'id' => 371,
                'parent' => 8,
                'title' => 'ری',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            371 => 
            array (
                'id' => 372,
                'parent' => 8,
                'title' => 'کهریزک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            372 => 
            array (
                'id' => 373,
                'parent' => 8,
                'title' => 'تجریش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            373 => 
            array (
                'id' => 374,
                'parent' => 8,
                'title' => 'شمشک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            374 => 
            array (
                'id' => 375,
                'parent' => 8,
                'title' => 'فشم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            375 => 
            array (
                'id' => 376,
                'parent' => 8,
                'title' => 'لواسان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            376 => 
            array (
                'id' => 377,
                'parent' => 8,
                'title' => 'اندیشه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            377 => 
            array (
                'id' => 378,
                'parent' => 8,
                'title' => 'باغستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            378 => 
            array (
                'id' => 379,
                'parent' => 8,
                'title' => 'شاهدشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            379 => 
            array (
                'id' => 380,
                'parent' => 8,
                'title' => 'شهریار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            380 => 
            array (
                'id' => 381,
                'parent' => 8,
                'title' => 'صباشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            381 => 
            array (
                'id' => 382,
                'parent' => 8,
                'title' => 'فردوسیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            382 => 
            array (
                'id' => 383,
                'parent' => 8,
                'title' => 'وحیدیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:39',
                'updated_at' => '2020-08-28 13:47:39',
            ),
            383 => 
            array (
                'id' => 384,
                'parent' => 8,
                'title' => 'ارجمند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            384 => 
            array (
                'id' => 385,
                'parent' => 8,
                'title' => 'فیروزکوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            385 => 
            array (
                'id' => 386,
                'parent' => 8,
                'title' => 'قدس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            386 => 
            array (
                'id' => 387,
                'parent' => 8,
                'title' => 'قرچک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            387 => 
            array (
                'id' => 388,
                'parent' => 8,
                'title' => 'صفادشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            388 => 
            array (
                'id' => 389,
                'parent' => 8,
                'title' => 'ملارد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            389 => 
            array (
                'id' => 390,
                'parent' => 8,
                'title' => 'جوادآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            390 => 
            array (
                'id' => 391,
                'parent' => 8,
                'title' => 'ورامین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            391 => 
            array (
                'id' => 392,
                'parent' => 9,
                'title' => 'اردل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            392 => 
            array (
                'id' => 393,
                'parent' => 9,
                'title' => 'دشتک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            393 => 
            array (
                'id' => 394,
                'parent' => 9,
                'title' => 'سرخون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            394 => 
            array (
                'id' => 395,
                'parent' => 9,
                'title' => 'کاج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            395 => 
            array (
                'id' => 396,
                'parent' => 9,
                'title' => 'بروجن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            396 => 
            array (
                'id' => 397,
                'parent' => 9,
                'title' => 'بلداجی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            397 => 
            array (
                'id' => 398,
                'parent' => 9,
                'title' => 'سفیددشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            398 => 
            array (
                'id' => 399,
                'parent' => 9,
                'title' => 'فرادبنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            399 => 
            array (
                'id' => 400,
                'parent' => 9,
                'title' => 'گندمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            400 => 
            array (
                'id' => 401,
                'parent' => 9,
                'title' => 'نقنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            401 => 
            array (
                'id' => 402,
                'parent' => 9,
                'title' => 'بن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            402 => 
            array (
                'id' => 403,
                'parent' => 9,
                'title' => 'وردنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            403 => 
            array (
                'id' => 404,
                'parent' => 9,
                'title' => 'سامان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            404 => 
            array (
                'id' => 405,
                'parent' => 9,
                'title' => 'سودجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            405 => 
            array (
                'id' => 406,
                'parent' => 9,
                'title' => 'سورشجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            406 => 
            array (
                'id' => 407,
                'parent' => 9,
                'title' => 'شهرکرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            407 => 
            array (
                'id' => 408,
                'parent' => 9,
                'title' => 'طاقانک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            408 => 
            array (
                'id' => 409,
                'parent' => 9,
                'title' => 'فرخ شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            409 => 
            array (
                'id' => 410,
                'parent' => 9,
                'title' => 'کیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            410 => 
            array (
                'id' => 411,
                'parent' => 9,
                'title' => 'نافچ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            411 => 
            array (
                'id' => 412,
                'parent' => 9,
                'title' => 'هارونی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            412 => 
            array (
                'id' => 413,
                'parent' => 9,
                'title' => 'هفشجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            413 => 
            array (
                'id' => 414,
                'parent' => 9,
                'title' => 'باباحیدر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            414 => 
            array (
                'id' => 415,
                'parent' => 9,
                'title' => 'پردنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            415 => 
            array (
                'id' => 416,
                'parent' => 9,
                'title' => 'جونقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            416 => 
            array (
                'id' => 417,
                'parent' => 9,
                'title' => 'چلیچه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:40',
                'updated_at' => '2020-08-28 13:47:40',
            ),
            417 => 
            array (
                'id' => 418,
                'parent' => 9,
                'title' => 'فارسان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            418 => 
            array (
                'id' => 419,
                'parent' => 9,
                'title' => 'گوجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            419 => 
            array (
                'id' => 420,
                'parent' => 9,
                'title' => 'بازفت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            420 => 
            array (
                'id' => 421,
                'parent' => 9,
                'title' => 'چلگرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            421 => 
            array (
                'id' => 422,
                'parent' => 9,
                'title' => 'صمصامی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            422 => 
            array (
                'id' => 423,
                'parent' => 9,
                'title' => 'دستنا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            423 => 
            array (
                'id' => 424,
                'parent' => 9,
                'title' => 'شلمزار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            424 => 
            array (
                'id' => 425,
                'parent' => 9,
                'title' => 'گهرو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            425 => 
            array (
                'id' => 426,
                'parent' => 9,
                'title' => 'ناغان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            426 => 
            array (
                'id' => 427,
                'parent' => 9,
                'title' => 'آلونی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            427 => 
            array (
                'id' => 428,
                'parent' => 9,
                'title' => 'سردشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            428 => 
            array (
                'id' => 429,
                'parent' => 9,
                'title' => 'لردگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            429 => 
            array (
                'id' => 430,
                'parent' => 9,
                'title' => 'مال خلیفه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            430 => 
            array (
                'id' => 431,
                'parent' => 9,
                'title' => 'منج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            431 => 
            array (
                'id' => 432,
                'parent' => 10,
                'title' => 'ارسک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            432 => 
            array (
                'id' => 433,
                'parent' => 10,
                'title' => 'بشرویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            433 => 
            array (
                'id' => 434,
                'parent' => 10,
                'title' => 'بیرجند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            434 => 
            array (
                'id' => 435,
                'parent' => 10,
                'title' => 'خوسف',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            435 => 
            array (
                'id' => 436,
                'parent' => 10,
                'title' => 'محمدشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            436 => 
            array (
                'id' => 437,
                'parent' => 10,
                'title' => 'اسدیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            437 => 
            array (
                'id' => 438,
                'parent' => 10,
                'title' => 'طبس مسینا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            438 => 
            array (
                'id' => 439,
                'parent' => 10,
                'title' => 'قهستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            439 => 
            array (
                'id' => 440,
                'parent' => 10,
                'title' => 'گزیک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            440 => 
            array (
                'id' => 441,
                'parent' => 10,
                'title' => 'حاجی آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            441 => 
            array (
                'id' => 442,
                'parent' => 10,
                'title' => 'زهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:41',
                'updated_at' => '2020-08-28 13:47:41',
            ),
            442 => 
            array (
                'id' => 443,
                'parent' => 10,
                'title' => 'آیسک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            443 => 
            array (
                'id' => 444,
                'parent' => 10,
                'title' => 'سرایان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            444 => 
            array (
                'id' => 445,
                'parent' => 10,
                'title' => 'سه قلعه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            445 => 
            array (
                'id' => 446,
                'parent' => 10,
                'title' => 'سربیشه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            446 => 
            array (
                'id' => 447,
                'parent' => 10,
                'title' => 'مود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            447 => 
            array (
                'id' => 448,
                'parent' => 10,
                'title' => 'دیهوک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            448 => 
            array (
                'id' => 449,
                'parent' => 10,
                'title' => 'طبس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            449 => 
            array (
                'id' => 450,
                'parent' => 10,
                'title' => 'عشق آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            450 => 
            array (
                'id' => 451,
                'parent' => 10,
                'title' => 'اسلامیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            451 => 
            array (
                'id' => 452,
                'parent' => 10,
                'title' => 'فردوس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            452 => 
            array (
                'id' => 453,
                'parent' => 10,
                'title' => 'آرین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            453 => 
            array (
                'id' => 454,
                'parent' => 10,
                'title' => 'اسفدن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            454 => 
            array (
                'id' => 455,
                'parent' => 10,
                'title' => 'خضری دشت بیاض',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            455 => 
            array (
                'id' => 456,
                'parent' => 10,
                'title' => 'قاین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            456 => 
            array (
                'id' => 457,
                'parent' => 10,
                'title' => 'نیمبلوک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            457 => 
            array (
                'id' => 458,
                'parent' => 10,
                'title' => 'شوسف',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            458 => 
            array (
                'id' => 459,
                'parent' => 10,
                'title' => 'نهبندان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            459 => 
            array (
                'id' => 460,
                'parent' => 11,
                'title' => 'باخرز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            460 => 
            array (
                'id' => 461,
                'parent' => 11,
                'title' => 'بجستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            461 => 
            array (
                'id' => 462,
                'parent' => 11,
                'title' => 'یونسی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            462 => 
            array (
                'id' => 463,
                'parent' => 11,
                'title' => 'انابد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            463 => 
            array (
                'id' => 464,
                'parent' => 11,
                'title' => 'بردسکن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            464 => 
            array (
                'id' => 465,
                'parent' => 11,
                'title' => 'شهراباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            465 => 
            array (
                'id' => 466,
                'parent' => 11,
                'title' => 'شاندیز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            466 => 
            array (
                'id' => 467,
                'parent' => 11,
                'title' => 'طرقبه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            467 => 
            array (
                'id' => 468,
                'parent' => 11,
                'title' => 'تایباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            468 => 
            array (
                'id' => 469,
                'parent' => 11,
                'title' => 'کاریز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            469 => 
            array (
                'id' => 470,
                'parent' => 11,
                'title' => 'مشهدریزه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            470 => 
            array (
                'id' => 471,
                'parent' => 11,
                'title' => 'احمدابادصولت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:42',
                'updated_at' => '2020-08-28 13:47:42',
            ),
            471 => 
            array (
                'id' => 472,
                'parent' => 11,
                'title' => 'تربت جام',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            472 => 
            array (
                'id' => 473,
                'parent' => 11,
                'title' => 'صالح آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            473 => 
            array (
                'id' => 474,
                'parent' => 11,
                'title' => 'نصرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            474 => 
            array (
                'id' => 475,
                'parent' => 11,
                'title' => 'نیل شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            475 => 
            array (
                'id' => 476,
                'parent' => 11,
                'title' => 'بایک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            476 => 
            array (
                'id' => 477,
                'parent' => 11,
                'title' => 'تربت حیدریه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            477 => 
            array (
                'id' => 478,
                'parent' => 11,
                'title' => 'رباط سنگ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            478 => 
            array (
                'id' => 479,
                'parent' => 11,
                'title' => 'کدکن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            479 => 
            array (
                'id' => 480,
                'parent' => 11,
                'title' => 'جغتای',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            480 => 
            array (
                'id' => 481,
                'parent' => 11,
                'title' => 'نقاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            481 => 
            array (
                'id' => 482,
                'parent' => 11,
                'title' => 'چناران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            482 => 
            array (
                'id' => 483,
                'parent' => 11,
                'title' => 'گلبهار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            483 => 
            array (
                'id' => 484,
                'parent' => 11,
                'title' => 'گلمکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            484 => 
            array (
                'id' => 485,
                'parent' => 11,
                'title' => 'خلیل آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            485 => 
            array (
                'id' => 486,
                'parent' => 11,
                'title' => 'کندر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            486 => 
            array (
                'id' => 487,
                'parent' => 11,
                'title' => 'خواف',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            487 => 
            array (
                'id' => 488,
                'parent' => 11,
                'title' => 'سلامی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            488 => 
            array (
                'id' => 489,
                'parent' => 11,
                'title' => 'سنگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            489 => 
            array (
                'id' => 490,
                'parent' => 11,
                'title' => 'قاسم آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            490 => 
            array (
                'id' => 491,
                'parent' => 11,
                'title' => 'نشتیفان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            491 => 
            array (
                'id' => 492,
                'parent' => 11,
                'title' => 'سلطان آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            492 => 
            array (
                'id' => 493,
                'parent' => 11,
                'title' => 'داورزن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            493 => 
            array (
                'id' => 494,
                'parent' => 11,
                'title' => 'چاپشلو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            494 => 
            array (
                'id' => 495,
                'parent' => 11,
                'title' => 'درگز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:43',
                'updated_at' => '2020-08-28 13:47:43',
            ),
            495 => 
            array (
                'id' => 496,
                'parent' => 11,
                'title' => 'لطف آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            496 => 
            array (
                'id' => 497,
                'parent' => 11,
                'title' => 'نوخندان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            497 => 
            array (
                'id' => 498,
                'parent' => 11,
                'title' => 'جنگل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            498 => 
            array (
                'id' => 499,
                'parent' => 11,
                'title' => 'رشتخوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            499 => 
            array (
                'id' => 500,
                'parent' => 11,
                'title' => 'دولت آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'parent' => 11,
                'title' => 'روداب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            1 => 
            array (
                'id' => 502,
                'parent' => 11,
                'title' => 'سبزوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            2 => 
            array (
                'id' => 503,
                'parent' => 11,
                'title' => 'ششتمد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            3 => 
            array (
                'id' => 504,
                'parent' => 11,
                'title' => 'سرخس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            4 => 
            array (
                'id' => 505,
                'parent' => 11,
                'title' => 'مزدآوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            5 => 
            array (
                'id' => 506,
                'parent' => 11,
                'title' => 'سفیدسنگ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            6 => 
            array (
                'id' => 507,
                'parent' => 11,
                'title' => 'فرهادگرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            7 => 
            array (
                'id' => 508,
                'parent' => 11,
                'title' => 'فریمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            8 => 
            array (
                'id' => 509,
                'parent' => 11,
                'title' => 'قلندرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            9 => 
            array (
                'id' => 510,
                'parent' => 11,
                'title' => 'فیروزه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            10 => 
            array (
                'id' => 511,
                'parent' => 11,
                'title' => 'همت آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            11 => 
            array (
                'id' => 512,
                'parent' => 11,
                'title' => 'باجگیران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            12 => 
            array (
                'id' => 513,
                'parent' => 11,
                'title' => 'قوچان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            13 => 
            array (
                'id' => 514,
                'parent' => 11,
                'title' => 'ریوش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            14 => 
            array (
                'id' => 515,
                'parent' => 11,
                'title' => 'کاشمر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            15 => 
            array (
                'id' => 516,
                'parent' => 11,
                'title' => 'شهرزو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            16 => 
            array (
                'id' => 517,
                'parent' => 11,
                'title' => 'کلات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            17 => 
            array (
                'id' => 518,
                'parent' => 11,
                'title' => 'بیدخت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:44',
                'updated_at' => '2020-08-28 13:47:44',
            ),
            18 => 
            array (
                'id' => 519,
                'parent' => 11,
                'title' => 'کاخک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            19 => 
            array (
                'id' => 520,
                'parent' => 11,
                'title' => 'گناباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            20 => 
            array (
                'id' => 521,
                'parent' => 11,
                'title' => 'رضویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            21 => 
            array (
                'id' => 522,
                'parent' => 11,
                'title' => 'مشهد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            22 => 
            array (
                'id' => 523,
                'parent' => 11,
                'title' => 'مشهد ثامن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            23 => 
            array (
                'id' => 524,
                'parent' => 11,
                'title' => 'ملک آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            24 => 
            array (
                'id' => 525,
                'parent' => 11,
                'title' => 'شادمهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            25 => 
            array (
                'id' => 526,
                'parent' => 11,
                'title' => 'فیض آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            26 => 
            array (
                'id' => 527,
                'parent' => 11,
                'title' => 'بار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            27 => 
            array (
                'id' => 528,
                'parent' => 11,
                'title' => 'چکنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            28 => 
            array (
                'id' => 529,
                'parent' => 11,
                'title' => 'خرو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            29 => 
            array (
                'id' => 530,
                'parent' => 11,
                'title' => 'درود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            30 => 
            array (
                'id' => 531,
                'parent' => 11,
                'title' => 'عشق آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            31 => 
            array (
                'id' => 532,
                'parent' => 11,
                'title' => 'قدمگاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            32 => 
            array (
                'id' => 533,
                'parent' => 11,
                'title' => 'نیشابور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            33 => 
            array (
                'id' => 534,
                'parent' => 12,
                'title' => 'اسفراین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            34 => 
            array (
                'id' => 535,
                'parent' => 12,
                'title' => 'صفی آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            35 => 
            array (
                'id' => 536,
                'parent' => 12,
                'title' => 'بجنورد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            36 => 
            array (
                'id' => 537,
                'parent' => 12,
                'title' => 'چناران شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            37 => 
            array (
                'id' => 538,
                'parent' => 12,
                'title' => 'حصارگرمخان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            38 => 
            array (
                'id' => 539,
                'parent' => 12,
                'title' => 'جاجرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            39 => 
            array (
                'id' => 540,
                'parent' => 12,
                'title' => 'سنخواست',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            40 => 
            array (
                'id' => 541,
                'parent' => 12,
                'title' => 'شوقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            41 => 
            array (
                'id' => 542,
                'parent' => 12,
                'title' => 'راز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            42 => 
            array (
                'id' => 543,
                'parent' => 12,
                'title' => 'زیارت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            43 => 
            array (
                'id' => 544,
                'parent' => 12,
                'title' => 'شیروان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            44 => 
            array (
                'id' => 545,
                'parent' => 12,
                'title' => 'قوشخانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            45 => 
            array (
                'id' => 546,
                'parent' => 12,
                'title' => 'لوجلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            46 => 
            array (
                'id' => 547,
                'parent' => 12,
                'title' => 'تیتکانلو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:45',
                'updated_at' => '2020-08-28 13:47:45',
            ),
            47 => 
            array (
                'id' => 548,
                'parent' => 12,
                'title' => 'فاروج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            48 => 
            array (
                'id' => 549,
                'parent' => 12,
                'title' => 'ایور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            49 => 
            array (
                'id' => 550,
                'parent' => 12,
                'title' => 'درق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            50 => 
            array (
                'id' => 551,
                'parent' => 12,
                'title' => 'گرمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            51 => 
            array (
                'id' => 552,
                'parent' => 12,
                'title' => 'آشخانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            52 => 
            array (
                'id' => 553,
                'parent' => 12,
                'title' => 'آوا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            53 => 
            array (
                'id' => 554,
                'parent' => 12,
                'title' => 'پیش قلعه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            54 => 
            array (
                'id' => 555,
                'parent' => 12,
                'title' => 'قاضی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            55 => 
            array (
                'id' => 556,
                'parent' => 13,
                'title' => 'آبادان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            56 => 
            array (
                'id' => 557,
                'parent' => 13,
                'title' => 'اروندکنار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            57 => 
            array (
                'id' => 558,
                'parent' => 13,
                'title' => 'چویبده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            58 => 
            array (
                'id' => 559,
                'parent' => 13,
                'title' => 'آغاجاری',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            59 => 
            array (
                'id' => 560,
                'parent' => 13,
                'title' => 'امیدیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            60 => 
            array (
                'id' => 561,
                'parent' => 13,
                'title' => 'جایزان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            61 => 
            array (
                'id' => 562,
                'parent' => 13,
                'title' => 'آبژدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            62 => 
            array (
                'id' => 563,
                'parent' => 13,
                'title' => 'قلعه خواجه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            63 => 
            array (
                'id' => 564,
                'parent' => 13,
                'title' => 'آزادی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            64 => 
            array (
                'id' => 565,
                'parent' => 13,
                'title' => 'اندیمشک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            65 => 
            array (
                'id' => 566,
                'parent' => 13,
                'title' => 'بیدروبه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            66 => 
            array (
                'id' => 567,
                'parent' => 13,
                'title' => 'چم گلک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            67 => 
            array (
                'id' => 568,
                'parent' => 13,
                'title' => 'حسینیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            68 => 
            array (
                'id' => 569,
                'parent' => 13,
                'title' => 'الهایی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            69 => 
            array (
                'id' => 570,
                'parent' => 13,
                'title' => 'اهواز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            70 => 
            array (
                'id' => 571,
                'parent' => 13,
                'title' => 'ایذه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            71 => 
            array (
                'id' => 572,
                'parent' => 13,
                'title' => 'دهدز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            72 => 
            array (
                'id' => 573,
                'parent' => 13,
                'title' => 'باغ ملک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            73 => 
            array (
                'id' => 574,
                'parent' => 13,
                'title' => 'صیدون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            74 => 
            array (
                'id' => 575,
                'parent' => 13,
                'title' => 'قلعه تل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            75 => 
            array (
                'id' => 576,
                'parent' => 13,
                'title' => 'میداود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            76 => 
            array (
                'id' => 577,
                'parent' => 13,
                'title' => 'شیبان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            77 => 
            array (
                'id' => 578,
                'parent' => 13,
                'title' => 'ملاثانی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            78 => 
            array (
                'id' => 579,
                'parent' => 13,
                'title' => 'ویس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:46',
                'updated_at' => '2020-08-28 13:47:46',
            ),
            79 => 
            array (
                'id' => 580,
                'parent' => 13,
                'title' => 'بندرامام خمینی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            80 => 
            array (
                'id' => 581,
                'parent' => 13,
                'title' => 'بندرماهشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            81 => 
            array (
                'id' => 582,
                'parent' => 13,
                'title' => 'چمران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            82 => 
            array (
                'id' => 583,
                'parent' => 13,
                'title' => 'بهبهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            83 => 
            array (
                'id' => 584,
                'parent' => 13,
                'title' => 'تشان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            84 => 
            array (
                'id' => 585,
                'parent' => 13,
                'title' => 'سردشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            85 => 
            array (
                'id' => 586,
                'parent' => 13,
                'title' => 'منصوریه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            86 => 
            array (
                'id' => 587,
                'parent' => 13,
                'title' => 'حمیدیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            87 => 
            array (
                'id' => 588,
                'parent' => 13,
                'title' => 'خرمشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            88 => 
            array (
                'id' => 589,
                'parent' => 13,
                'title' => 'مقاومت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            89 => 
            array (
                'id' => 590,
                'parent' => 13,
                'title' => 'مینوشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            90 => 
            array (
                'id' => 591,
                'parent' => 13,
                'title' => 'چغامیش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            91 => 
            array (
                'id' => 592,
                'parent' => 13,
                'title' => 'حمزه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            92 => 
            array (
                'id' => 593,
                'parent' => 13,
                'title' => 'دزفول',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            93 => 
            array (
                'id' => 594,
                'parent' => 13,
                'title' => 'سالند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            94 => 
            array (
                'id' => 595,
                'parent' => 13,
                'title' => 'سیاه منصور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            95 => 
            array (
                'id' => 596,
                'parent' => 13,
                'title' => 'شمس آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            96 => 
            array (
                'id' => 597,
                'parent' => 13,
                'title' => 'شهر امام',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:47',
                'updated_at' => '2020-08-28 13:47:47',
            ),
            97 => 
            array (
                'id' => 598,
                'parent' => 13,
                'title' => 'صفی آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            98 => 
            array (
                'id' => 599,
                'parent' => 13,
                'title' => 'میانرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            99 => 
            array (
                'id' => 600,
                'parent' => 13,
                'title' => 'ابوحمیظه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            100 => 
            array (
                'id' => 601,
                'parent' => 13,
                'title' => 'بستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            101 => 
            array (
                'id' => 602,
                'parent' => 13,
                'title' => 'سوسنگرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            102 => 
            array (
                'id' => 603,
                'parent' => 13,
                'title' => 'کوت سیدنعیم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            103 => 
            array (
                'id' => 604,
                'parent' => 13,
                'title' => 'رامشیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            104 => 
            array (
                'id' => 605,
                'parent' => 13,
                'title' => 'مشراگه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            105 => 
            array (
                'id' => 606,
                'parent' => 13,
                'title' => 'رامهرمز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            106 => 
            array (
                'id' => 607,
                'parent' => 13,
                'title' => 'خنافره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            107 => 
            array (
                'id' => 608,
                'parent' => 13,
                'title' => 'دارخوین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            108 => 
            array (
                'id' => 609,
                'parent' => 13,
                'title' => 'شادگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            109 => 
            array (
                'id' => 610,
                'parent' => 13,
                'title' => 'الوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            110 => 
            array (
                'id' => 611,
                'parent' => 13,
                'title' => 'حر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            111 => 
            array (
                'id' => 612,
                'parent' => 13,
                'title' => 'شاوور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            112 => 
            array (
                'id' => 613,
                'parent' => 13,
                'title' => 'شوش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            113 => 
            array (
                'id' => 614,
                'parent' => 13,
                'title' => 'فتح المبین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            114 => 
            array (
                'id' => 615,
                'parent' => 13,
                'title' => 'سرداران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            115 => 
            array (
                'id' => 616,
                'parent' => 13,
                'title' => 'شرافت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            116 => 
            array (
                'id' => 617,
                'parent' => 13,
                'title' => 'شوشتر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            117 => 
            array (
                'id' => 618,
                'parent' => 13,
                'title' => 'گوریه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            118 => 
            array (
                'id' => 619,
                'parent' => 13,
                'title' => 'کوت عبداله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            119 => 
            array (
                'id' => 620,
                'parent' => 13,
                'title' => 'ترکالکی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            120 => 
            array (
                'id' => 621,
                'parent' => 13,
                'title' => 'جنت مکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            121 => 
            array (
                'id' => 622,
                'parent' => 13,
                'title' => 'سماله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            122 => 
            array (
                'id' => 623,
                'parent' => 13,
                'title' => 'صالح شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            123 => 
            array (
                'id' => 624,
                'parent' => 13,
                'title' => 'گتوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:48',
                'updated_at' => '2020-08-28 13:47:48',
            ),
            124 => 
            array (
                'id' => 625,
                'parent' => 13,
                'title' => 'لالی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            125 => 
            array (
                'id' => 626,
                'parent' => 13,
                'title' => 'گلگیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            126 => 
            array (
                'id' => 627,
                'parent' => 13,
                'title' => 'مسجدسلیمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            127 => 
            array (
                'id' => 628,
                'parent' => 13,
                'title' => 'هفتگل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            128 => 
            array (
                'id' => 629,
                'parent' => 13,
                'title' => 'زهره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            129 => 
            array (
                'id' => 630,
                'parent' => 13,
                'title' => 'هندیجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            130 => 
            array (
                'id' => 631,
                'parent' => 13,
                'title' => 'رفیع',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            131 => 
            array (
                'id' => 632,
                'parent' => 13,
                'title' => 'هویزه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            132 => 
            array (
                'id' => 633,
                'parent' => 14,
                'title' => 'ابهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            133 => 
            array (
                'id' => 634,
                'parent' => 14,
                'title' => 'صایین قلعه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            134 => 
            array (
                'id' => 635,
                'parent' => 14,
                'title' => 'هیدج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            135 => 
            array (
                'id' => 636,
                'parent' => 14,
                'title' => 'حلب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            136 => 
            array (
                'id' => 637,
                'parent' => 14,
                'title' => 'زرین آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            137 => 
            array (
                'id' => 638,
                'parent' => 14,
                'title' => 'زرین رود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            138 => 
            array (
                'id' => 639,
                'parent' => 14,
                'title' => 'سجاس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            139 => 
            array (
                'id' => 640,
                'parent' => 14,
                'title' => 'سهرورد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            140 => 
            array (
                'id' => 641,
                'parent' => 14,
                'title' => 'قیدار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            141 => 
            array (
                'id' => 642,
                'parent' => 14,
                'title' => 'کرسف',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            142 => 
            array (
                'id' => 643,
                'parent' => 14,
                'title' => 'گرماب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            143 => 
            array (
                'id' => 644,
                'parent' => 14,
                'title' => 'نوربهار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            144 => 
            array (
                'id' => 645,
                'parent' => 14,
                'title' => 'خرمدره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            145 => 
            array (
                'id' => 646,
                'parent' => 14,
                'title' => 'ارمغانخانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            146 => 
            array (
                'id' => 647,
                'parent' => 14,
                'title' => 'زنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            147 => 
            array (
                'id' => 648,
                'parent' => 14,
                'title' => 'نیک پی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            148 => 
            array (
                'id' => 649,
                'parent' => 14,
                'title' => 'سلطانیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            149 => 
            array (
                'id' => 650,
                'parent' => 14,
                'title' => 'آب بر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            150 => 
            array (
                'id' => 651,
                'parent' => 14,
                'title' => 'چورزق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            151 => 
            array (
                'id' => 652,
                'parent' => 14,
                'title' => 'دندی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            152 => 
            array (
                'id' => 653,
                'parent' => 14,
                'title' => 'ماه نشان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            153 => 
            array (
                'id' => 654,
                'parent' => 15,
                'title' => 'آرادان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:49',
                'updated_at' => '2020-08-28 13:47:49',
            ),
            154 => 
            array (
                'id' => 655,
                'parent' => 15,
                'title' => 'کهن آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            155 => 
            array (
                'id' => 656,
                'parent' => 15,
                'title' => 'امیریه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            156 => 
            array (
                'id' => 657,
                'parent' => 15,
                'title' => 'دامغان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            157 => 
            array (
                'id' => 658,
                'parent' => 15,
                'title' => 'دیباج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            158 => 
            array (
                'id' => 659,
                'parent' => 15,
                'title' => 'کلاته',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            159 => 
            array (
                'id' => 660,
                'parent' => 15,
                'title' => 'سرخه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            160 => 
            array (
                'id' => 661,
                'parent' => 15,
                'title' => 'سمنان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            161 => 
            array (
                'id' => 662,
                'parent' => 15,
                'title' => 'بسطام',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            162 => 
            array (
                'id' => 663,
                'parent' => 15,
                'title' => 'بیارجمند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            163 => 
            array (
                'id' => 664,
                'parent' => 15,
                'title' => 'رودیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            164 => 
            array (
                'id' => 665,
                'parent' => 15,
                'title' => 'شاهرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            165 => 
            array (
                'id' => 666,
                'parent' => 15,
                'title' => 'کلاته خیج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            166 => 
            array (
                'id' => 667,
                'parent' => 15,
                'title' => 'مجن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            167 => 
            array (
                'id' => 668,
                'parent' => 15,
                'title' => 'ایوانکی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            168 => 
            array (
                'id' => 669,
                'parent' => 15,
                'title' => 'گرمسار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            169 => 
            array (
                'id' => 670,
                'parent' => 15,
                'title' => 'درجزین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            170 => 
            array (
                'id' => 671,
                'parent' => 15,
                'title' => 'شهمیرزاد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            171 => 
            array (
                'id' => 672,
                'parent' => 15,
                'title' => 'مهدی شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            172 => 
            array (
                'id' => 673,
                'parent' => 15,
                'title' => 'میامی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            173 => 
            array (
                'id' => 674,
                'parent' => 16,
                'title' => 'ایرانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            174 => 
            array (
                'id' => 675,
                'parent' => 16,
                'title' => 'بزمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            175 => 
            array (
                'id' => 676,
                'parent' => 16,
                'title' => 'بمپور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            176 => 
            array (
                'id' => 677,
                'parent' => 16,
                'title' => 'محمدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            177 => 
            array (
                'id' => 678,
                'parent' => 16,
                'title' => 'چابهار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            178 => 
            array (
                'id' => 679,
                'parent' => 16,
                'title' => 'نگور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            179 => 
            array (
                'id' => 680,
                'parent' => 16,
                'title' => 'خاش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            180 => 
            array (
                'id' => 681,
                'parent' => 16,
                'title' => 'نوک آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            181 => 
            array (
                'id' => 682,
                'parent' => 16,
                'title' => 'گلمورتی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            182 => 
            array (
                'id' => 683,
                'parent' => 16,
                'title' => 'بنجار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:50',
                'updated_at' => '2020-08-28 13:47:50',
            ),
            183 => 
            array (
                'id' => 684,
                'parent' => 16,
                'title' => 'زابل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            184 => 
            array (
                'id' => 685,
                'parent' => 16,
                'title' => 'زاهدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            185 => 
            array (
                'id' => 686,
                'parent' => 16,
                'title' => 'نصرت آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            186 => 
            array (
                'id' => 687,
                'parent' => 16,
                'title' => 'زهک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            187 => 
            array (
                'id' => 688,
                'parent' => 16,
                'title' => 'جالق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            188 => 
            array (
                'id' => 689,
                'parent' => 16,
                'title' => 'سراوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            189 => 
            array (
                'id' => 690,
                'parent' => 16,
                'title' => 'سیرکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            190 => 
            array (
                'id' => 691,
                'parent' => 16,
                'title' => 'گشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            191 => 
            array (
                'id' => 692,
                'parent' => 16,
                'title' => 'محمدی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            192 => 
            array (
                'id' => 693,
                'parent' => 16,
                'title' => 'پیشین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            193 => 
            array (
                'id' => 694,
                'parent' => 16,
                'title' => 'راسک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            194 => 
            array (
                'id' => 695,
                'parent' => 16,
                'title' => 'سرباز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            195 => 
            array (
                'id' => 696,
                'parent' => 16,
                'title' => 'سوران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            196 => 
            array (
                'id' => 697,
                'parent' => 16,
                'title' => 'هیدوچ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            197 => 
            array (
                'id' => 698,
                'parent' => 16,
                'title' => 'فنوج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            198 => 
            array (
                'id' => 699,
                'parent' => 16,
                'title' => 'قصرقند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            199 => 
            array (
                'id' => 700,
                'parent' => 16,
                'title' => 'زرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            200 => 
            array (
                'id' => 701,
                'parent' => 16,
                'title' => 'کنارک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            201 => 
            array (
                'id' => 702,
                'parent' => 16,
                'title' => 'مهرستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            202 => 
            array (
                'id' => 703,
                'parent' => 16,
                'title' => 'میرجاوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            203 => 
            array (
                'id' => 704,
                'parent' => 16,
                'title' => 'اسپکه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            204 => 
            array (
                'id' => 705,
                'parent' => 16,
                'title' => 'بنت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            205 => 
            array (
                'id' => 706,
                'parent' => 16,
                'title' => 'نیک شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            206 => 
            array (
                'id' => 707,
                'parent' => 16,
                'title' => 'ادیمی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            207 => 
            array (
                'id' => 708,
                'parent' => 16,
                'title' => 'شهرک علی اکبر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            208 => 
            array (
                'id' => 709,
                'parent' => 16,
                'title' => 'محمدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            209 => 
            array (
                'id' => 710,
                'parent' => 16,
                'title' => 'دوست محمد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            210 => 
            array (
                'id' => 711,
                'parent' => 17,
                'title' => 'آباده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            211 => 
            array (
                'id' => 712,
                'parent' => 17,
                'title' => 'ایزدخواست',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            212 => 
            array (
                'id' => 713,
                'parent' => 17,
                'title' => 'بهمن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            213 => 
            array (
                'id' => 714,
                'parent' => 17,
                'title' => 'سورمق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            214 => 
            array (
                'id' => 715,
                'parent' => 17,
                'title' => 'صغاد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            215 => 
            array (
                'id' => 716,
                'parent' => 17,
                'title' => 'ارسنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            216 => 
            array (
                'id' => 717,
                'parent' => 17,
                'title' => 'استهبان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            217 => 
            array (
                'id' => 718,
                'parent' => 17,
                'title' => 'ایج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            218 => 
            array (
                'id' => 719,
                'parent' => 17,
                'title' => 'رونیز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            219 => 
            array (
                'id' => 720,
                'parent' => 17,
                'title' => 'اقلید',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            220 => 
            array (
                'id' => 721,
                'parent' => 17,
                'title' => 'حسن اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            221 => 
            array (
                'id' => 722,
                'parent' => 17,
                'title' => 'دژکرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            222 => 
            array (
                'id' => 723,
                'parent' => 17,
                'title' => 'سده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            223 => 
            array (
                'id' => 724,
                'parent' => 17,
                'title' => 'بوانات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            224 => 
            array (
                'id' => 725,
                'parent' => 17,
                'title' => 'حسامی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            225 => 
            array (
                'id' => 726,
                'parent' => 17,
                'title' => 'کره ای',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            226 => 
            array (
                'id' => 727,
                'parent' => 17,
                'title' => 'مزایجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            227 => 
            array (
                'id' => 728,
                'parent' => 17,
                'title' => 'سعادت شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            228 => 
            array (
                'id' => 729,
                'parent' => 17,
                'title' => 'مادرسلیمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:51',
                'updated_at' => '2020-08-28 13:47:51',
            ),
            229 => 
            array (
                'id' => 730,
                'parent' => 17,
                'title' => 'باب انار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            230 => 
            array (
                'id' => 731,
                'parent' => 17,
                'title' => 'جهرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            231 => 
            array (
                'id' => 732,
                'parent' => 17,
                'title' => 'خاوران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            232 => 
            array (
                'id' => 733,
                'parent' => 17,
                'title' => 'دوزه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            233 => 
            array (
                'id' => 734,
                'parent' => 17,
                'title' => 'قطب آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            234 => 
            array (
                'id' => 735,
                'parent' => 17,
                'title' => 'خرامه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            235 => 
            array (
                'id' => 736,
                'parent' => 17,
                'title' => 'سلطان شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            236 => 
            array (
                'id' => 737,
                'parent' => 17,
                'title' => 'صفاشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            237 => 
            array (
                'id' => 738,
                'parent' => 17,
                'title' => 'قادراباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            238 => 
            array (
                'id' => 739,
                'parent' => 17,
                'title' => 'خنج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            239 => 
            array (
                'id' => 740,
                'parent' => 17,
                'title' => 'جنت شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            240 => 
            array (
                'id' => 741,
                'parent' => 17,
                'title' => 'داراب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            241 => 
            array (
                'id' => 742,
                'parent' => 17,
                'title' => 'دوبرجی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            242 => 
            array (
                'id' => 743,
                'parent' => 17,
                'title' => 'فدامی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            243 => 
            array (
                'id' => 744,
                'parent' => 17,
                'title' => 'کوپن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            244 => 
            array (
                'id' => 745,
                'parent' => 17,
                'title' => 'مصیری',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            245 => 
            array (
                'id' => 746,
                'parent' => 17,
                'title' => 'حاجی آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            246 => 
            array (
                'id' => 747,
                'parent' => 17,
                'title' => 'دبیران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            247 => 
            array (
                'id' => 748,
                'parent' => 17,
                'title' => 'شهرپیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            248 => 
            array (
                'id' => 749,
                'parent' => 17,
                'title' => 'اردکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            249 => 
            array (
                'id' => 750,
                'parent' => 17,
                'title' => 'بیضا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            250 => 
            array (
                'id' => 751,
                'parent' => 17,
                'title' => 'هماشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            251 => 
            array (
                'id' => 752,
                'parent' => 17,
                'title' => 'سروستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            252 => 
            array (
                'id' => 753,
                'parent' => 17,
                'title' => 'کوهنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            253 => 
            array (
                'id' => 754,
                'parent' => 17,
                'title' => 'خانه زنیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            254 => 
            array (
                'id' => 755,
                'parent' => 17,
                'title' => 'داریان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            255 => 
            array (
                'id' => 756,
                'parent' => 17,
                'title' => 'زرقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            256 => 
            array (
                'id' => 757,
                'parent' => 17,
                'title' => 'شهرصدرا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            257 => 
            array (
                'id' => 758,
                'parent' => 17,
                'title' => 'شیراز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:52',
                'updated_at' => '2020-08-28 13:47:52',
            ),
            258 => 
            array (
                'id' => 759,
                'parent' => 17,
                'title' => 'لپویی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            259 => 
            array (
                'id' => 760,
                'parent' => 17,
                'title' => 'دهرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            260 => 
            array (
                'id' => 761,
                'parent' => 17,
                'title' => 'فراشبند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            261 => 
            array (
                'id' => 762,
                'parent' => 17,
                'title' => 'نوجین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            262 => 
            array (
                'id' => 763,
                'parent' => 17,
                'title' => 'زاهدشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            263 => 
            array (
                'id' => 764,
                'parent' => 17,
                'title' => 'ششده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            264 => 
            array (
                'id' => 765,
                'parent' => 17,
                'title' => 'فسا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            265 => 
            array (
                'id' => 766,
                'parent' => 17,
                'title' => 'قره بلاغ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            266 => 
            array (
                'id' => 767,
                'parent' => 17,
                'title' => 'میانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            267 => 
            array (
                'id' => 768,
                'parent' => 17,
                'title' => 'نوبندگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            268 => 
            array (
                'id' => 769,
                'parent' => 17,
                'title' => 'فیروزآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            269 => 
            array (
                'id' => 770,
                'parent' => 17,
                'title' => 'میمند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            270 => 
            array (
                'id' => 771,
                'parent' => 17,
                'title' => 'افزر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            271 => 
            array (
                'id' => 772,
                'parent' => 17,
                'title' => 'امام شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            272 => 
            array (
                'id' => 773,
                'parent' => 17,
                'title' => 'قیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            273 => 
            array (
                'id' => 774,
                'parent' => 17,
            'title' => 'کارزین (فتح آباد)',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            274 => 
            array (
                'id' => 775,
                'parent' => 17,
                'title' => 'مبارک آباددیز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            275 => 
            array (
                'id' => 776,
                'parent' => 17,
                'title' => 'بالاده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            276 => 
            array (
                'id' => 777,
                'parent' => 17,
                'title' => 'خشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            277 => 
            array (
                'id' => 778,
                'parent' => 17,
                'title' => 'قایمیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            278 => 
            array (
                'id' => 779,
                'parent' => 17,
                'title' => 'کازرون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            279 => 
            array (
                'id' => 780,
                'parent' => 17,
                'title' => 'کنارتخته',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            280 => 
            array (
                'id' => 781,
                'parent' => 17,
                'title' => 'نودان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            281 => 
            array (
                'id' => 782,
                'parent' => 17,
                'title' => 'کوار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            282 => 
            array (
                'id' => 783,
                'parent' => 17,
                'title' => 'گراش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            283 => 
            array (
                'id' => 784,
                'parent' => 17,
                'title' => 'اوز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            284 => 
            array (
                'id' => 785,
                'parent' => 17,
                'title' => 'بنارویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            285 => 
            array (
                'id' => 786,
                'parent' => 17,
                'title' => 'بیرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            286 => 
            array (
                'id' => 787,
                'parent' => 17,
                'title' => 'جویم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            287 => 
            array (
                'id' => 788,
                'parent' => 17,
                'title' => 'خور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            288 => 
            array (
                'id' => 789,
                'parent' => 17,
                'title' => 'عمادده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            289 => 
            array (
                'id' => 790,
                'parent' => 17,
                'title' => 'لار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            290 => 
            array (
                'id' => 791,
                'parent' => 17,
                'title' => 'لطیفی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            291 => 
            array (
                'id' => 792,
                'parent' => 17,
                'title' => 'اشکنان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            292 => 
            array (
                'id' => 793,
                'parent' => 17,
                'title' => 'اهل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            293 => 
            array (
                'id' => 794,
                'parent' => 17,
                'title' => 'علامرودشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            294 => 
            array (
                'id' => 795,
                'parent' => 17,
                'title' => 'لامرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            295 => 
            array (
                'id' => 796,
                'parent' => 17,
                'title' => 'خانیمن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            296 => 
            array (
                'id' => 797,
                'parent' => 17,
                'title' => 'رامجرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:53',
                'updated_at' => '2020-08-28 13:47:53',
            ),
            297 => 
            array (
                'id' => 798,
                'parent' => 17,
                'title' => 'سیدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            298 => 
            array (
                'id' => 799,
                'parent' => 17,
                'title' => 'کامفیروز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            299 => 
            array (
                'id' => 800,
                'parent' => 17,
                'title' => 'مرودشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            300 => 
            array (
                'id' => 801,
                'parent' => 17,
                'title' => 'بابامنیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            301 => 
            array (
                'id' => 802,
                'parent' => 17,
                'title' => 'خومه زار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            302 => 
            array (
                'id' => 803,
                'parent' => 17,
                'title' => 'نورآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            303 => 
            array (
                'id' => 804,
                'parent' => 17,
                'title' => 'اسیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            304 => 
            array (
                'id' => 805,
                'parent' => 17,
                'title' => 'خوزی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            305 => 
            array (
                'id' => 806,
                'parent' => 17,
                'title' => 'گله دار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            306 => 
            array (
                'id' => 807,
                'parent' => 17,
                'title' => 'مهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            307 => 
            array (
                'id' => 808,
                'parent' => 17,
                'title' => 'وراوی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            308 => 
            array (
                'id' => 809,
                'parent' => 17,
                'title' => 'آباده طشک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            309 => 
            array (
                'id' => 810,
                'parent' => 17,
                'title' => 'قطرویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            310 => 
            array (
                'id' => 811,
                'parent' => 17,
                'title' => 'مشکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            311 => 
            array (
                'id' => 812,
                'parent' => 17,
                'title' => 'نی ریز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            312 => 
            array (
                'id' => 813,
                'parent' => 18,
                'title' => 'آبیک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            313 => 
            array (
                'id' => 814,
                'parent' => 18,
                'title' => 'خاکعلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            314 => 
            array (
                'id' => 815,
                'parent' => 18,
                'title' => 'آبگرم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            315 => 
            array (
                'id' => 816,
                'parent' => 18,
                'title' => 'آوج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            316 => 
            array (
                'id' => 817,
                'parent' => 18,
                'title' => 'الوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            317 => 
            array (
                'id' => 818,
                'parent' => 18,
                'title' => 'بیدستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            318 => 
            array (
                'id' => 819,
                'parent' => 18,
                'title' => 'شریفیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            319 => 
            array (
                'id' => 820,
                'parent' => 18,
                'title' => 'محمدیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            320 => 
            array (
                'id' => 821,
                'parent' => 18,
                'title' => 'ارداق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            321 => 
            array (
                'id' => 822,
                'parent' => 18,
                'title' => 'بویین زهرا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            322 => 
            array (
                'id' => 823,
                'parent' => 18,
                'title' => 'دانسفهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            323 => 
            array (
                'id' => 824,
                'parent' => 18,
                'title' => 'سگزآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            324 => 
            array (
                'id' => 825,
                'parent' => 18,
                'title' => 'شال',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            325 => 
            array (
                'id' => 826,
                'parent' => 18,
                'title' => 'اسفرورین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            326 => 
            array (
                'id' => 827,
                'parent' => 18,
                'title' => 'تاکستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            327 => 
            array (
                'id' => 828,
                'parent' => 18,
                'title' => 'خرمدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            328 => 
            array (
                'id' => 829,
                'parent' => 18,
                'title' => 'ضیاڈآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            329 => 
            array (
                'id' => 830,
                'parent' => 18,
                'title' => 'نرجه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            330 => 
            array (
                'id' => 831,
                'parent' => 18,
                'title' => 'اقبالیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            331 => 
            array (
                'id' => 832,
                'parent' => 18,
                'title' => 'رازمیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            332 => 
            array (
                'id' => 833,
                'parent' => 18,
                'title' => 'سیردان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            333 => 
            array (
                'id' => 834,
                'parent' => 18,
                'title' => 'قزوین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            334 => 
            array (
                'id' => 835,
                'parent' => 18,
                'title' => 'کوهین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            335 => 
            array (
                'id' => 836,
                'parent' => 18,
                'title' => 'محمودآبادنمونه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:54',
                'updated_at' => '2020-08-28 13:47:54',
            ),
            336 => 
            array (
                'id' => 837,
                'parent' => 18,
                'title' => 'معلم کلایه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            337 => 
            array (
                'id' => 838,
                'parent' => 19,
                'title' => 'جعفریه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            338 => 
            array (
                'id' => 839,
                'parent' => 19,
                'title' => 'دستجرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            339 => 
            array (
                'id' => 840,
                'parent' => 19,
                'title' => 'سلفچگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            340 => 
            array (
                'id' => 841,
                'parent' => 19,
                'title' => 'قم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            341 => 
            array (
                'id' => 842,
                'parent' => 19,
                'title' => 'قنوات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            342 => 
            array (
                'id' => 843,
                'parent' => 19,
                'title' => 'کهک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            343 => 
            array (
                'id' => 844,
                'parent' => 20,
                'title' => 'آرمرده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            344 => 
            array (
                'id' => 845,
                'parent' => 20,
                'title' => 'بانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            345 => 
            array (
                'id' => 846,
                'parent' => 20,
                'title' => 'بویین سفلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            346 => 
            array (
                'id' => 847,
                'parent' => 20,
                'title' => 'کانی سور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            347 => 
            array (
                'id' => 848,
                'parent' => 20,
                'title' => 'بابارشانی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            348 => 
            array (
                'id' => 849,
                'parent' => 20,
                'title' => 'بیجار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            349 => 
            array (
                'id' => 850,
                'parent' => 20,
                'title' => 'پیرتاج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            350 => 
            array (
                'id' => 851,
                'parent' => 20,
                'title' => 'توپ آغاج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            351 => 
            array (
                'id' => 852,
                'parent' => 20,
                'title' => 'یاسوکند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            352 => 
            array (
                'id' => 853,
                'parent' => 20,
                'title' => 'بلبان آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            353 => 
            array (
                'id' => 854,
                'parent' => 20,
                'title' => 'دهگلان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            354 => 
            array (
                'id' => 855,
                'parent' => 20,
                'title' => 'دیواندره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            355 => 
            array (
                'id' => 856,
                'parent' => 20,
                'title' => 'زرینه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            356 => 
            array (
                'id' => 857,
                'parent' => 20,
                'title' => 'اورامان تخت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            357 => 
            array (
                'id' => 858,
                'parent' => 20,
                'title' => 'سروآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            358 => 
            array (
                'id' => 859,
                'parent' => 20,
                'title' => 'سقز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            359 => 
            array (
                'id' => 860,
                'parent' => 20,
                'title' => 'صاحب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            360 => 
            array (
                'id' => 861,
                'parent' => 20,
                'title' => 'سنندج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            361 => 
            array (
                'id' => 862,
                'parent' => 20,
                'title' => 'شویشه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            362 => 
            array (
                'id' => 863,
                'parent' => 20,
                'title' => 'دزج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            363 => 
            array (
                'id' => 864,
                'parent' => 20,
                'title' => 'دلبران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            364 => 
            array (
                'id' => 865,
                'parent' => 20,
                'title' => 'سریش آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            365 => 
            array (
                'id' => 866,
                'parent' => 20,
                'title' => 'قروه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:55',
                'updated_at' => '2020-08-28 13:47:55',
            ),
            366 => 
            array (
                'id' => 867,
                'parent' => 20,
                'title' => 'کامیاران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            367 => 
            array (
                'id' => 868,
                'parent' => 20,
                'title' => 'موچش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            368 => 
            array (
                'id' => 869,
                'parent' => 20,
                'title' => 'برده رشه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            369 => 
            array (
                'id' => 870,
                'parent' => 20,
                'title' => 'چناره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            370 => 
            array (
                'id' => 871,
                'parent' => 20,
                'title' => 'کانی دینار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            371 => 
            array (
                'id' => 872,
                'parent' => 20,
                'title' => 'مریوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            372 => 
            array (
                'id' => 873,
                'parent' => 21,
                'title' => 'ارزوییه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            373 => 
            array (
                'id' => 874,
                'parent' => 21,
                'title' => 'امین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            374 => 
            array (
                'id' => 875,
                'parent' => 21,
                'title' => 'انار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            375 => 
            array (
                'id' => 876,
                'parent' => 21,
                'title' => 'بافت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            376 => 
            array (
                'id' => 877,
                'parent' => 21,
                'title' => 'بزنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            377 => 
            array (
                'id' => 878,
                'parent' => 21,
                'title' => 'بردسیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            378 => 
            array (
                'id' => 879,
                'parent' => 21,
                'title' => 'دشتکار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            379 => 
            array (
                'id' => 880,
                'parent' => 21,
                'title' => 'گلزار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            380 => 
            array (
                'id' => 881,
                'parent' => 21,
                'title' => 'لاله زار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            381 => 
            array (
                'id' => 882,
                'parent' => 21,
                'title' => 'نگار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            382 => 
            array (
                'id' => 883,
                'parent' => 21,
                'title' => 'بروات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            383 => 
            array (
                'id' => 884,
                'parent' => 21,
                'title' => 'بم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            384 => 
            array (
                'id' => 885,
                'parent' => 21,
                'title' => 'بلوک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            385 => 
            array (
                'id' => 886,
                'parent' => 21,
                'title' => 'جبالبارز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            386 => 
            array (
                'id' => 887,
                'parent' => 21,
                'title' => 'جیرفت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            387 => 
            array (
                'id' => 888,
                'parent' => 21,
                'title' => 'درب بهشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            388 => 
            array (
                'id' => 889,
                'parent' => 21,
                'title' => 'رابر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            389 => 
            array (
                'id' => 890,
                'parent' => 21,
                'title' => 'هنزا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            390 => 
            array (
                'id' => 891,
                'parent' => 21,
                'title' => 'راور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            391 => 
            array (
                'id' => 892,
                'parent' => 21,
                'title' => 'هجدک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            392 => 
            array (
                'id' => 893,
                'parent' => 21,
                'title' => 'بهرمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:56',
                'updated_at' => '2020-08-28 13:47:56',
            ),
            393 => 
            array (
                'id' => 894,
                'parent' => 21,
                'title' => 'رفسنجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            394 => 
            array (
                'id' => 895,
                'parent' => 21,
                'title' => 'صفاییه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            395 => 
            array (
                'id' => 896,
                'parent' => 21,
                'title' => 'کشکوییه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            396 => 
            array (
                'id' => 897,
                'parent' => 21,
                'title' => 'مس سرچشمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            397 => 
            array (
                'id' => 898,
                'parent' => 21,
                'title' => 'رودبار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            398 => 
            array (
                'id' => 899,
                'parent' => 21,
                'title' => 'زهکلوت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            399 => 
            array (
                'id' => 900,
                'parent' => 21,
                'title' => 'گنبکی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            400 => 
            array (
                'id' => 901,
                'parent' => 21,
                'title' => 'محمدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            401 => 
            array (
                'id' => 902,
                'parent' => 21,
                'title' => 'خانوک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            402 => 
            array (
                'id' => 903,
                'parent' => 21,
                'title' => 'ریحان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            403 => 
            array (
                'id' => 904,
                'parent' => 21,
                'title' => 'زرند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            404 => 
            array (
                'id' => 905,
                'parent' => 21,
                'title' => 'یزدان شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            405 => 
            array (
                'id' => 906,
                'parent' => 21,
                'title' => 'بلورد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            406 => 
            array (
                'id' => 907,
                'parent' => 21,
                'title' => 'پاریز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            407 => 
            array (
                'id' => 908,
                'parent' => 21,
                'title' => 'خواجو شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            408 => 
            array (
                'id' => 909,
                'parent' => 21,
                'title' => 'زیدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            409 => 
            array (
                'id' => 910,
                'parent' => 21,
                'title' => 'سیرجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            410 => 
            array (
                'id' => 911,
                'parent' => 21,
                'title' => 'نجف شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            411 => 
            array (
                'id' => 912,
                'parent' => 21,
                'title' => 'هماشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            412 => 
            array (
                'id' => 913,
                'parent' => 21,
                'title' => 'جوزم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            413 => 
            array (
                'id' => 914,
                'parent' => 21,
                'title' => 'خاتون اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            414 => 
            array (
                'id' => 915,
                'parent' => 21,
                'title' => 'خورسند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            415 => 
            array (
                'id' => 916,
                'parent' => 21,
                'title' => 'دهج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            416 => 
            array (
                'id' => 917,
                'parent' => 21,
                'title' => 'شهربابک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            417 => 
            array (
                'id' => 918,
                'parent' => 21,
                'title' => 'دوساری',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            418 => 
            array (
                'id' => 919,
                'parent' => 21,
                'title' => 'عنبرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            419 => 
            array (
                'id' => 920,
                'parent' => 21,
                'title' => 'مردهک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            420 => 
            array (
                'id' => 921,
                'parent' => 21,
                'title' => 'فاریاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            421 => 
            array (
                'id' => 922,
                'parent' => 21,
                'title' => 'فهرج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            422 => 
            array (
                'id' => 923,
                'parent' => 21,
                'title' => 'قلعه گنج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            423 => 
            array (
                'id' => 924,
                'parent' => 21,
                'title' => 'اختیارآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            424 => 
            array (
                'id' => 925,
                'parent' => 21,
                'title' => 'اندوهجرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            425 => 
            array (
                'id' => 926,
                'parent' => 21,
                'title' => 'باغین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            426 => 
            array (
                'id' => 927,
                'parent' => 21,
                'title' => 'جوپار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            427 => 
            array (
                'id' => 928,
                'parent' => 21,
                'title' => 'چترود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            428 => 
            array (
                'id' => 929,
                'parent' => 21,
                'title' => 'راین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:57',
                'updated_at' => '2020-08-28 13:47:57',
            ),
            429 => 
            array (
                'id' => 930,
                'parent' => 21,
                'title' => 'زنگی آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            430 => 
            array (
                'id' => 931,
                'parent' => 21,
                'title' => 'شهداد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            431 => 
            array (
                'id' => 932,
                'parent' => 21,
                'title' => 'کاظم آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            432 => 
            array (
                'id' => 933,
                'parent' => 21,
                'title' => 'کرمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            433 => 
            array (
                'id' => 934,
                'parent' => 21,
                'title' => 'گلباف',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            434 => 
            array (
                'id' => 935,
                'parent' => 21,
                'title' => 'ماهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            435 => 
            array (
                'id' => 936,
                'parent' => 21,
                'title' => 'محی آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            436 => 
            array (
                'id' => 937,
                'parent' => 21,
                'title' => 'کوهبنان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            437 => 
            array (
                'id' => 938,
                'parent' => 21,
                'title' => 'کیانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            438 => 
            array (
                'id' => 939,
                'parent' => 21,
                'title' => 'کهنوج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            439 => 
            array (
                'id' => 940,
                'parent' => 21,
                'title' => 'منوجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            440 => 
            array (
                'id' => 941,
                'parent' => 21,
                'title' => 'نودژ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            441 => 
            array (
                'id' => 942,
                'parent' => 21,
                'title' => 'نرماشیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            442 => 
            array (
                'id' => 943,
                'parent' => 21,
                'title' => 'نظام شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            443 => 
            array (
                'id' => 944,
                'parent' => 22,
                'title' => 'اسلام آبادغرب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            444 => 
            array (
                'id' => 945,
                'parent' => 22,
                'title' => 'حمیل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            445 => 
            array (
                'id' => 946,
                'parent' => 22,
                'title' => 'بانوره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            446 => 
            array (
                'id' => 947,
                'parent' => 22,
                'title' => 'باینگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            447 => 
            array (
                'id' => 948,
                'parent' => 22,
                'title' => 'پاوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            448 => 
            array (
                'id' => 949,
                'parent' => 22,
                'title' => 'نودشه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            449 => 
            array (
                'id' => 950,
                'parent' => 22,
                'title' => 'نوسود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            450 => 
            array (
                'id' => 951,
                'parent' => 22,
                'title' => 'ازگله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            451 => 
            array (
                'id' => 952,
                'parent' => 22,
                'title' => 'تازه آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            452 => 
            array (
                'id' => 953,
                'parent' => 22,
                'title' => 'جوانرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            453 => 
            array (
                'id' => 954,
                'parent' => 22,
                'title' => 'ریجاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:58',
                'updated_at' => '2020-08-28 13:47:58',
            ),
            454 => 
            array (
                'id' => 955,
                'parent' => 22,
                'title' => 'کرند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            455 => 
            array (
                'id' => 956,
                'parent' => 22,
                'title' => 'گهواره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            456 => 
            array (
                'id' => 957,
                'parent' => 22,
                'title' => 'روانسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            457 => 
            array (
                'id' => 958,
                'parent' => 22,
                'title' => 'شاهو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            458 => 
            array (
                'id' => 959,
                'parent' => 22,
                'title' => 'سرپل ذهاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            459 => 
            array (
                'id' => 960,
                'parent' => 22,
                'title' => 'سطر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            460 => 
            array (
                'id' => 961,
                'parent' => 22,
                'title' => 'سنقر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            461 => 
            array (
                'id' => 962,
                'parent' => 22,
                'title' => 'صحنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            462 => 
            array (
                'id' => 963,
                'parent' => 22,
                'title' => 'میان راهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            463 => 
            array (
                'id' => 964,
                'parent' => 22,
                'title' => 'سومار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            464 => 
            array (
                'id' => 965,
                'parent' => 22,
                'title' => 'قصرشیرین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            465 => 
            array (
                'id' => 966,
                'parent' => 22,
                'title' => 'رباط',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            466 => 
            array (
                'id' => 967,
                'parent' => 22,
                'title' => 'کرمانشاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            467 => 
            array (
                'id' => 968,
                'parent' => 22,
                'title' => 'کوزران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            468 => 
            array (
                'id' => 969,
                'parent' => 22,
                'title' => 'هلشی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            469 => 
            array (
                'id' => 970,
                'parent' => 22,
                'title' => 'کنگاور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            470 => 
            array (
                'id' => 971,
                'parent' => 22,
                'title' => 'گودین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            471 => 
            array (
                'id' => 972,
                'parent' => 22,
                'title' => 'سرمست',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            472 => 
            array (
                'id' => 973,
                'parent' => 22,
                'title' => 'گیلانغرب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            473 => 
            array (
                'id' => 974,
                'parent' => 22,
                'title' => 'بیستون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            474 => 
            array (
                'id' => 975,
                'parent' => 22,
                'title' => 'هرسین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            475 => 
            array (
                'id' => 976,
                'parent' => 23,
                'title' => 'باشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            476 => 
            array (
                'id' => 977,
                'parent' => 23,
                'title' => 'چیتاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:47:59',
                'updated_at' => '2020-08-28 13:47:59',
            ),
            477 => 
            array (
                'id' => 978,
                'parent' => 23,
                'title' => 'گراب سفلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            478 => 
            array (
                'id' => 979,
                'parent' => 23,
                'title' => 'مادوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            479 => 
            array (
                'id' => 980,
                'parent' => 23,
                'title' => 'مارگون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            480 => 
            array (
                'id' => 981,
                'parent' => 23,
                'title' => 'یاسوج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            481 => 
            array (
                'id' => 982,
                'parent' => 23,
                'title' => 'لیکک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            482 => 
            array (
                'id' => 983,
                'parent' => 23,
                'title' => 'چرام',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            483 => 
            array (
                'id' => 984,
                'parent' => 23,
                'title' => 'سرفاریاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            484 => 
            array (
                'id' => 985,
                'parent' => 23,
                'title' => 'پاتاوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            485 => 
            array (
                'id' => 986,
                'parent' => 23,
                'title' => 'سی سخت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            486 => 
            array (
                'id' => 987,
                'parent' => 23,
                'title' => 'دهدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            487 => 
            array (
                'id' => 988,
                'parent' => 23,
                'title' => 'دیشموک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            488 => 
            array (
                'id' => 989,
                'parent' => 23,
                'title' => 'سوق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            489 => 
            array (
                'id' => 990,
                'parent' => 23,
                'title' => 'قلعه رییسی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            490 => 
            array (
                'id' => 991,
                'parent' => 23,
                'title' => 'دوگنبدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            491 => 
            array (
                'id' => 992,
                'parent' => 23,
                'title' => 'لنده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            492 => 
            array (
                'id' => 993,
                'parent' => 24,
                'title' => 'آزادشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            493 => 
            array (
                'id' => 994,
                'parent' => 24,
                'title' => 'نگین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            494 => 
            array (
                'id' => 995,
                'parent' => 24,
                'title' => 'نوده خاندوز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            495 => 
            array (
                'id' => 996,
                'parent' => 24,
                'title' => 'آق قلا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            496 => 
            array (
                'id' => 997,
                'parent' => 24,
                'title' => 'انبارآلوم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            497 => 
            array (
                'id' => 998,
                'parent' => 24,
                'title' => 'بندرگز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            498 => 
            array (
                'id' => 999,
                'parent' => 24,
                'title' => 'نوکنده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            499 => 
            array (
                'id' => 1000,
                'parent' => 24,
                'title' => 'بندرترکمن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'parent' => 24,
                'title' => 'تاتارعلیا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            1 => 
            array (
                'id' => 1002,
                'parent' => 24,
                'title' => 'خان ببین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            2 => 
            array (
                'id' => 1003,
                'parent' => 24,
                'title' => 'دلند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            3 => 
            array (
                'id' => 1004,
                'parent' => 24,
                'title' => 'رامیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            4 => 
            array (
                'id' => 1005,
                'parent' => 24,
                'title' => 'سنگدوین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            5 => 
            array (
                'id' => 1006,
                'parent' => 24,
                'title' => 'علی اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            6 => 
            array (
                'id' => 1007,
                'parent' => 24,
                'title' => 'فاضل آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:00',
                'updated_at' => '2020-08-28 13:48:00',
            ),
            7 => 
            array (
                'id' => 1008,
                'parent' => 24,
                'title' => 'مزرعه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            8 => 
            array (
                'id' => 1009,
                'parent' => 24,
                'title' => 'کردکوی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            9 => 
            array (
                'id' => 1010,
                'parent' => 24,
                'title' => 'فراغی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            10 => 
            array (
                'id' => 1011,
                'parent' => 24,
                'title' => 'کلاله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            11 => 
            array (
                'id' => 1012,
                'parent' => 24,
                'title' => 'گالیکش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            12 => 
            array (
                'id' => 1013,
                'parent' => 24,
                'title' => 'جلین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            13 => 
            array (
                'id' => 1014,
                'parent' => 24,
                'title' => 'سرخنکلاته',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            14 => 
            array (
                'id' => 1015,
                'parent' => 24,
                'title' => 'گرگان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            15 => 
            array (
                'id' => 1016,
                'parent' => 24,
                'title' => 'سیمین شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            16 => 
            array (
                'id' => 1017,
                'parent' => 24,
                'title' => 'گمیش تپه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            17 => 
            array (
                'id' => 1018,
                'parent' => 24,
                'title' => 'اینچه برون',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            18 => 
            array (
                'id' => 1019,
                'parent' => 24,
                'title' => 'گنبدکاووس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            19 => 
            array (
                'id' => 1020,
                'parent' => 24,
                'title' => 'مراوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            20 => 
            array (
                'id' => 1021,
                'parent' => 24,
                'title' => 'مینودشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            21 => 
            array (
                'id' => 1022,
                'parent' => 25,
                'title' => 'آستارا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            22 => 
            array (
                'id' => 1023,
                'parent' => 25,
                'title' => 'لوندویل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            23 => 
            array (
                'id' => 1024,
                'parent' => 25,
                'title' => 'آستانه اشرفیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            24 => 
            array (
                'id' => 1025,
                'parent' => 25,
                'title' => 'کیاشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            25 => 
            array (
                'id' => 1026,
                'parent' => 25,
                'title' => 'املش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            26 => 
            array (
                'id' => 1027,
                'parent' => 25,
                'title' => 'رانکوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            27 => 
            array (
                'id' => 1028,
                'parent' => 25,
                'title' => 'بندرانزلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            28 => 
            array (
                'id' => 1029,
                'parent' => 25,
                'title' => 'خشکبیجار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            29 => 
            array (
                'id' => 1030,
                'parent' => 25,
                'title' => 'خمام',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            30 => 
            array (
                'id' => 1031,
                'parent' => 25,
                'title' => 'رشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            31 => 
            array (
                'id' => 1032,
                'parent' => 25,
                'title' => 'سنگر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            32 => 
            array (
                'id' => 1033,
                'parent' => 25,
                'title' => 'کوچصفهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            33 => 
            array (
                'id' => 1034,
                'parent' => 25,
                'title' => 'لشت نشاء',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            34 => 
            array (
                'id' => 1035,
                'parent' => 25,
                'title' => 'لولمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            35 => 
            array (
                'id' => 1036,
                'parent' => 25,
                'title' => 'پره سر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            36 => 
            array (
                'id' => 1037,
                'parent' => 25,
                'title' => 'رضوانشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            37 => 
            array (
                'id' => 1038,
                'parent' => 25,
                'title' => 'بره سر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            38 => 
            array (
                'id' => 1039,
                'parent' => 25,
                'title' => 'توتکابن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            39 => 
            array (
                'id' => 1040,
                'parent' => 25,
                'title' => 'جیرنده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            40 => 
            array (
                'id' => 1041,
                'parent' => 25,
                'title' => 'رستم آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:01',
                'updated_at' => '2020-08-28 13:48:01',
            ),
            41 => 
            array (
                'id' => 1042,
                'parent' => 25,
                'title' => 'رودبار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            42 => 
            array (
                'id' => 1043,
                'parent' => 25,
                'title' => 'لوشان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            43 => 
            array (
                'id' => 1044,
                'parent' => 25,
                'title' => 'منجیل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            44 => 
            array (
                'id' => 1045,
                'parent' => 25,
                'title' => 'چابکسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            45 => 
            array (
                'id' => 1046,
                'parent' => 25,
                'title' => 'رحیم آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            46 => 
            array (
                'id' => 1047,
                'parent' => 25,
                'title' => 'رودسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            47 => 
            array (
                'id' => 1048,
                'parent' => 25,
                'title' => 'کلاچای',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            48 => 
            array (
                'id' => 1049,
                'parent' => 25,
                'title' => 'واجارگاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            49 => 
            array (
                'id' => 1050,
                'parent' => 25,
                'title' => 'دیلمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            50 => 
            array (
                'id' => 1051,
                'parent' => 25,
                'title' => 'سیاهکل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            51 => 
            array (
                'id' => 1052,
                'parent' => 25,
                'title' => 'احمدسرگوراب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            52 => 
            array (
                'id' => 1053,
                'parent' => 25,
                'title' => 'شفت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            53 => 
            array (
                'id' => 1054,
                'parent' => 25,
                'title' => 'صومعه سرا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            54 => 
            array (
                'id' => 1055,
                'parent' => 25,
                'title' => 'گوراب زرمیخ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            55 => 
            array (
                'id' => 1056,
                'parent' => 25,
                'title' => 'مرجقل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            56 => 
            array (
                'id' => 1057,
                'parent' => 25,
                'title' => 'اسالم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            57 => 
            array (
                'id' => 1058,
                'parent' => 25,
                'title' => 'چوبر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            58 => 
            array (
                'id' => 1059,
                'parent' => 25,
                'title' => 'حویق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            59 => 
            array (
                'id' => 1060,
                'parent' => 25,
                'title' => 'لیسار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            60 => 
            array (
                'id' => 1061,
                'parent' => 25,
            'title' => 'هشتپر (تالش)',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            61 => 
            array (
                'id' => 1062,
                'parent' => 25,
                'title' => 'فومن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            62 => 
            array (
                'id' => 1063,
                'parent' => 25,
                'title' => 'ماسوله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            63 => 
            array (
                'id' => 1064,
                'parent' => 25,
                'title' => 'ماکلوان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            64 => 
            array (
                'id' => 1065,
                'parent' => 25,
                'title' => 'رودبنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            65 => 
            array (
                'id' => 1066,
                'parent' => 25,
                'title' => 'لاهیجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            66 => 
            array (
                'id' => 1067,
                'parent' => 25,
                'title' => 'اطاقور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:02',
                'updated_at' => '2020-08-28 13:48:02',
            ),
            67 => 
            array (
                'id' => 1068,
                'parent' => 25,
                'title' => 'چاف و چمخاله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            68 => 
            array (
                'id' => 1069,
                'parent' => 25,
                'title' => 'شلمان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            69 => 
            array (
                'id' => 1070,
                'parent' => 25,
                'title' => 'کومله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            70 => 
            array (
                'id' => 1071,
                'parent' => 25,
                'title' => 'لنگرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            71 => 
            array (
                'id' => 1072,
                'parent' => 25,
                'title' => 'بازار جمعه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            72 => 
            array (
                'id' => 1073,
                'parent' => 25,
                'title' => 'ماسال',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            73 => 
            array (
                'id' => 1074,
                'parent' => 26,
                'title' => 'ازنا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            74 => 
            array (
                'id' => 1075,
                'parent' => 26,
                'title' => 'مومن آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            75 => 
            array (
                'id' => 1076,
                'parent' => 26,
                'title' => 'الیگودرز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            76 => 
            array (
                'id' => 1077,
                'parent' => 26,
                'title' => 'شول آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            77 => 
            array (
                'id' => 1078,
                'parent' => 26,
                'title' => 'اشترینان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            78 => 
            array (
                'id' => 1079,
                'parent' => 26,
                'title' => 'بروجرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            79 => 
            array (
                'id' => 1080,
                'parent' => 26,
                'title' => 'پلدختر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            80 => 
            array (
                'id' => 1081,
                'parent' => 26,
                'title' => 'معمولان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            81 => 
            array (
                'id' => 1082,
                'parent' => 26,
                'title' => 'بیران شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            82 => 
            array (
                'id' => 1083,
                'parent' => 26,
                'title' => 'خرم آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            83 => 
            array (
                'id' => 1084,
                'parent' => 26,
                'title' => 'زاغه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            84 => 
            array (
                'id' => 1085,
                'parent' => 26,
                'title' => 'سپیددشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            85 => 
            array (
                'id' => 1086,
                'parent' => 26,
                'title' => 'نورآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            86 => 
            array (
                'id' => 1087,
                'parent' => 26,
                'title' => 'هفت چشمه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            87 => 
            array (
                'id' => 1088,
                'parent' => 26,
                'title' => 'چالانچولان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            88 => 
            array (
                'id' => 1089,
                'parent' => 26,
                'title' => 'دورود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            89 => 
            array (
                'id' => 1090,
                'parent' => 26,
                'title' => 'سراب دوره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            90 => 
            array (
                'id' => 1091,
                'parent' => 26,
                'title' => 'ویسیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            91 => 
            array (
                'id' => 1092,
                'parent' => 26,
                'title' => 'چقابل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            92 => 
            array (
                'id' => 1093,
                'parent' => 26,
                'title' => 'الشتر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            93 => 
            array (
                'id' => 1094,
                'parent' => 26,
                'title' => 'فیروزآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            94 => 
            array (
                'id' => 1095,
                'parent' => 26,
                'title' => 'درب گنبد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            95 => 
            array (
                'id' => 1096,
                'parent' => 26,
                'title' => 'کوهدشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            96 => 
            array (
                'id' => 1097,
                'parent' => 26,
                'title' => 'کوهنانی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            97 => 
            array (
                'id' => 1098,
                'parent' => 26,
                'title' => 'گراب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            98 => 
            array (
                'id' => 1099,
                'parent' => 27,
                'title' => 'آمل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            99 => 
            array (
                'id' => 1100,
                'parent' => 27,
                'title' => 'امامزاده عبدالله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            100 => 
            array (
                'id' => 1101,
                'parent' => 27,
                'title' => 'دابودشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:03',
                'updated_at' => '2020-08-28 13:48:03',
            ),
            101 => 
            array (
                'id' => 1102,
                'parent' => 27,
                'title' => 'رینه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            102 => 
            array (
                'id' => 1103,
                'parent' => 27,
                'title' => 'گزنک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            103 => 
            array (
                'id' => 1104,
                'parent' => 27,
                'title' => 'امیرکلا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            104 => 
            array (
                'id' => 1105,
                'parent' => 27,
                'title' => 'بابل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            105 => 
            array (
                'id' => 1106,
                'parent' => 27,
                'title' => 'خوش رودپی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            106 => 
            array (
                'id' => 1107,
                'parent' => 27,
                'title' => 'زرگرمحله',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            107 => 
            array (
                'id' => 1108,
                'parent' => 27,
                'title' => 'گتاب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            108 => 
            array (
                'id' => 1109,
                'parent' => 27,
                'title' => 'گلوگاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            109 => 
            array (
                'id' => 1110,
                'parent' => 27,
                'title' => 'مرزیکلا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            110 => 
            array (
                'id' => 1111,
                'parent' => 27,
                'title' => 'بابلسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            111 => 
            array (
                'id' => 1112,
                'parent' => 27,
                'title' => 'بهنمیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            112 => 
            array (
                'id' => 1113,
                'parent' => 27,
                'title' => 'هادی شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            113 => 
            array (
                'id' => 1114,
                'parent' => 27,
                'title' => 'بهشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            114 => 
            array (
                'id' => 1115,
                'parent' => 27,
                'title' => 'خلیل شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            115 => 
            array (
                'id' => 1116,
                'parent' => 27,
                'title' => 'رستمکلا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            116 => 
            array (
                'id' => 1117,
                'parent' => 27,
                'title' => 'تنکابن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            117 => 
            array (
                'id' => 1118,
                'parent' => 27,
                'title' => 'خرم آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            118 => 
            array (
                'id' => 1119,
                'parent' => 27,
                'title' => 'شیرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            119 => 
            array (
                'id' => 1120,
                'parent' => 27,
                'title' => 'نشتارود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            120 => 
            array (
                'id' => 1121,
                'parent' => 27,
                'title' => 'جویبار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            121 => 
            array (
                'id' => 1122,
                'parent' => 27,
                'title' => 'کوهی خیل',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            122 => 
            array (
                'id' => 1123,
                'parent' => 27,
                'title' => 'چالوس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            123 => 
            array (
                'id' => 1124,
                'parent' => 27,
                'title' => 'مرزن آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            124 => 
            array (
                'id' => 1125,
                'parent' => 27,
                'title' => 'هچیرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            125 => 
            array (
                'id' => 1126,
                'parent' => 27,
                'title' => 'رامسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            126 => 
            array (
                'id' => 1127,
                'parent' => 27,
                'title' => 'کتالم وسادات شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            127 => 
            array (
                'id' => 1128,
                'parent' => 27,
                'title' => 'پایین هولار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            128 => 
            array (
                'id' => 1129,
                'parent' => 27,
                'title' => 'ساری',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            129 => 
            array (
                'id' => 1130,
                'parent' => 27,
                'title' => 'فریم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            130 => 
            array (
                'id' => 1131,
                'parent' => 27,
                'title' => 'کیاسر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            131 => 
            array (
                'id' => 1132,
                'parent' => 27,
                'title' => 'آلاشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            132 => 
            array (
                'id' => 1133,
                'parent' => 27,
                'title' => 'پل سفید',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            133 => 
            array (
                'id' => 1134,
                'parent' => 27,
                'title' => 'زیرآب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            134 => 
            array (
                'id' => 1135,
                'parent' => 27,
                'title' => 'شیرگاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            135 => 
            array (
                'id' => 1136,
                'parent' => 27,
                'title' => 'کیاکلا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            136 => 
            array (
                'id' => 1137,
                'parent' => 27,
                'title' => 'سلمان شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:04',
                'updated_at' => '2020-08-28 13:48:04',
            ),
            137 => 
            array (
                'id' => 1138,
                'parent' => 27,
                'title' => 'عباس اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            138 => 
            array (
                'id' => 1139,
                'parent' => 27,
                'title' => 'کلارآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            139 => 
            array (
                'id' => 1140,
                'parent' => 27,
                'title' => 'فریدونکنار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            140 => 
            array (
                'id' => 1141,
                'parent' => 27,
                'title' => 'ارطه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            141 => 
            array (
                'id' => 1142,
                'parent' => 27,
                'title' => 'قایم شهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            142 => 
            array (
                'id' => 1143,
                'parent' => 27,
                'title' => 'کلاردشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            143 => 
            array (
                'id' => 1144,
                'parent' => 27,
                'title' => 'گلوگاه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            144 => 
            array (
                'id' => 1145,
                'parent' => 27,
                'title' => 'سرخرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            145 => 
            array (
                'id' => 1146,
                'parent' => 27,
                'title' => 'محمودآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            146 => 
            array (
                'id' => 1147,
                'parent' => 27,
                'title' => 'سورک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            147 => 
            array (
                'id' => 1148,
                'parent' => 27,
                'title' => 'نکا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            148 => 
            array (
                'id' => 1149,
                'parent' => 27,
                'title' => 'ایزدشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            149 => 
            array (
                'id' => 1150,
                'parent' => 27,
                'title' => 'بلده',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            150 => 
            array (
                'id' => 1151,
                'parent' => 27,
                'title' => 'چمستان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            151 => 
            array (
                'id' => 1152,
                'parent' => 27,
                'title' => 'رویان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            152 => 
            array (
                'id' => 1153,
                'parent' => 27,
                'title' => 'نور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            153 => 
            array (
                'id' => 1154,
                'parent' => 27,
                'title' => 'پول',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            154 => 
            array (
                'id' => 1155,
                'parent' => 27,
                'title' => 'کجور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            155 => 
            array (
                'id' => 1156,
                'parent' => 27,
                'title' => 'نوشهر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            156 => 
            array (
                'id' => 1157,
                'parent' => 28,
                'title' => 'آشتیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            157 => 
            array (
                'id' => 1158,
                'parent' => 28,
                'title' => 'اراک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            158 => 
            array (
                'id' => 1159,
                'parent' => 28,
                'title' => 'داودآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            159 => 
            array (
                'id' => 1160,
                'parent' => 28,
                'title' => 'ساروق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            160 => 
            array (
                'id' => 1161,
                'parent' => 28,
                'title' => 'کارچان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:05',
                'updated_at' => '2020-08-28 13:48:05',
            ),
            161 => 
            array (
                'id' => 1162,
                'parent' => 28,
                'title' => 'تفرش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            162 => 
            array (
                'id' => 1163,
                'parent' => 28,
                'title' => 'خمین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            163 => 
            array (
                'id' => 1164,
                'parent' => 28,
                'title' => 'قورچی باشی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            164 => 
            array (
                'id' => 1165,
                'parent' => 28,
                'title' => 'جاورسیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            165 => 
            array (
                'id' => 1166,
                'parent' => 28,
                'title' => 'خنداب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            166 => 
            array (
                'id' => 1167,
                'parent' => 28,
                'title' => 'دلیجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            167 => 
            array (
                'id' => 1168,
                'parent' => 28,
                'title' => 'نراق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            168 => 
            array (
                'id' => 1169,
                'parent' => 28,
                'title' => 'پرندک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            169 => 
            array (
                'id' => 1170,
                'parent' => 28,
                'title' => 'خشکرود',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            170 => 
            array (
                'id' => 1171,
                'parent' => 28,
                'title' => 'رازقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            171 => 
            array (
                'id' => 1172,
                'parent' => 28,
                'title' => 'زاویه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            172 => 
            array (
                'id' => 1173,
                'parent' => 28,
                'title' => 'مامونیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            173 => 
            array (
                'id' => 1174,
                'parent' => 28,
                'title' => 'آوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            174 => 
            array (
                'id' => 1175,
                'parent' => 28,
                'title' => 'ساوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            175 => 
            array (
                'id' => 1176,
                'parent' => 28,
                'title' => 'غرق آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            176 => 
            array (
                'id' => 1177,
                'parent' => 28,
                'title' => 'نوبران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            177 => 
            array (
                'id' => 1178,
                'parent' => 28,
                'title' => 'آستانه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            178 => 
            array (
                'id' => 1179,
                'parent' => 28,
                'title' => 'توره',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            179 => 
            array (
                'id' => 1180,
                'parent' => 28,
                'title' => 'شازند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            180 => 
            array (
                'id' => 1181,
                'parent' => 28,
                'title' => 'شهباز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            181 => 
            array (
                'id' => 1182,
                'parent' => 28,
                'title' => 'مهاجران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            182 => 
            array (
                'id' => 1183,
                'parent' => 28,
                'title' => 'هندودر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            183 => 
            array (
                'id' => 1184,
                'parent' => 28,
                'title' => 'خنجین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            184 => 
            array (
                'id' => 1185,
                'parent' => 28,
                'title' => 'فرمهین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            185 => 
            array (
                'id' => 1186,
                'parent' => 28,
                'title' => 'کمیجان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            186 => 
            array (
                'id' => 1187,
                'parent' => 28,
                'title' => 'میلاجرد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            187 => 
            array (
                'id' => 1188,
                'parent' => 28,
                'title' => 'محلات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            188 => 
            array (
                'id' => 1189,
                'parent' => 28,
                'title' => 'نیمور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            189 => 
            array (
                'id' => 1190,
                'parent' => 29,
                'title' => 'ابوموسی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            190 => 
            array (
                'id' => 1191,
                'parent' => 29,
                'title' => 'بستک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            191 => 
            array (
                'id' => 1192,
                'parent' => 29,
                'title' => 'جناح',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            192 => 
            array (
                'id' => 1193,
                'parent' => 29,
                'title' => 'سردشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            193 => 
            array (
                'id' => 1194,
                'parent' => 29,
                'title' => 'گوهران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            194 => 
            array (
                'id' => 1195,
                'parent' => 29,
                'title' => 'بندرعباس',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            195 => 
            array (
                'id' => 1196,
                'parent' => 29,
                'title' => 'تازیان پایین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:06',
                'updated_at' => '2020-08-28 13:48:06',
            ),
            196 => 
            array (
                'id' => 1197,
                'parent' => 29,
                'title' => 'تخت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            197 => 
            array (
                'id' => 1198,
                'parent' => 29,
                'title' => 'فین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            198 => 
            array (
                'id' => 1199,
                'parent' => 29,
                'title' => 'قلعه قاضی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            199 => 
            array (
                'id' => 1200,
                'parent' => 29,
                'title' => 'بندرلنگه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            200 => 
            array (
                'id' => 1201,
                'parent' => 29,
                'title' => 'چارک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            201 => 
            array (
                'id' => 1202,
                'parent' => 29,
                'title' => 'کنگ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            202 => 
            array (
                'id' => 1203,
                'parent' => 29,
                'title' => 'کیش',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            203 => 
            array (
                'id' => 1204,
                'parent' => 29,
                'title' => 'لمزان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            204 => 
            array (
                'id' => 1205,
                'parent' => 29,
                'title' => 'پارسیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            205 => 
            array (
                'id' => 1206,
                'parent' => 29,
                'title' => 'دشتی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            206 => 
            array (
                'id' => 1207,
                'parent' => 29,
                'title' => 'کوشکنار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            207 => 
            array (
                'id' => 1208,
                'parent' => 29,
                'title' => 'بندرجاسک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            208 => 
            array (
                'id' => 1209,
                'parent' => 29,
                'title' => 'حاجی اباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            209 => 
            array (
                'id' => 1210,
                'parent' => 29,
                'title' => 'سرگز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            210 => 
            array (
                'id' => 1211,
                'parent' => 29,
                'title' => 'فارغان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            211 => 
            array (
                'id' => 1212,
                'parent' => 29,
                'title' => 'خمیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            212 => 
            array (
                'id' => 1213,
                'parent' => 29,
                'title' => 'رویدر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            213 => 
            array (
                'id' => 1214,
                'parent' => 29,
                'title' => 'بیکاء',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            214 => 
            array (
                'id' => 1215,
                'parent' => 29,
                'title' => 'دهبارز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            215 => 
            array (
                'id' => 1216,
                'parent' => 29,
                'title' => 'زیارتعلی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            216 => 
            array (
                'id' => 1217,
                'parent' => 29,
                'title' => 'سیریک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            217 => 
            array (
                'id' => 1218,
                'parent' => 29,
                'title' => 'کوهستک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            218 => 
            array (
                'id' => 1219,
                'parent' => 29,
                'title' => 'گروک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            219 => 
            array (
                'id' => 1220,
                'parent' => 29,
                'title' => 'درگهان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            220 => 
            array (
                'id' => 1221,
                'parent' => 29,
                'title' => 'سوزا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            221 => 
            array (
                'id' => 1222,
                'parent' => 29,
                'title' => 'قشم',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            222 => 
            array (
                'id' => 1223,
                'parent' => 29,
                'title' => 'هرمز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            223 => 
            array (
                'id' => 1224,
                'parent' => 29,
                'title' => 'تیرور',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            224 => 
            array (
                'id' => 1225,
                'parent' => 29,
                'title' => 'سندرک',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:07',
                'updated_at' => '2020-08-28 13:48:07',
            ),
            225 => 
            array (
                'id' => 1226,
                'parent' => 29,
                'title' => 'میناب',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            226 => 
            array (
                'id' => 1227,
                'parent' => 29,
                'title' => 'هشتبندی',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            227 => 
            array (
                'id' => 1228,
                'parent' => 30,
                'title' => 'آجین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            228 => 
            array (
                'id' => 1229,
                'parent' => 30,
                'title' => 'اسدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            229 => 
            array (
                'id' => 1230,
                'parent' => 30,
                'title' => 'بهار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            230 => 
            array (
                'id' => 1231,
                'parent' => 30,
                'title' => 'صالح آباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            231 => 
            array (
                'id' => 1232,
                'parent' => 30,
                'title' => 'لالجین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            232 => 
            array (
                'id' => 1233,
                'parent' => 30,
                'title' => 'مهاجران',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            233 => 
            array (
                'id' => 1234,
                'parent' => 30,
                'title' => 'تویسرکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            234 => 
            array (
                'id' => 1235,
                'parent' => 30,
                'title' => 'سرکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            235 => 
            array (
                'id' => 1236,
                'parent' => 30,
                'title' => 'فرسفج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            236 => 
            array (
                'id' => 1237,
                'parent' => 30,
                'title' => 'دمق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            237 => 
            array (
                'id' => 1238,
                'parent' => 30,
                'title' => 'رزن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            238 => 
            array (
                'id' => 1239,
                'parent' => 30,
                'title' => 'قروه درجزین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            239 => 
            array (
                'id' => 1240,
                'parent' => 30,
                'title' => 'فامنین',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            240 => 
            array (
                'id' => 1241,
                'parent' => 30,
                'title' => 'شیرین سو',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            241 => 
            array (
                'id' => 1242,
                'parent' => 30,
                'title' => 'کبودرآهنگ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            242 => 
            array (
                'id' => 1243,
                'parent' => 30,
                'title' => 'گل تپه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            243 => 
            array (
                'id' => 1244,
                'parent' => 30,
                'title' => 'ازندریان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            244 => 
            array (
                'id' => 1245,
                'parent' => 30,
                'title' => 'جوکار',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            245 => 
            array (
                'id' => 1246,
                'parent' => 30,
                'title' => 'زنگنه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            246 => 
            array (
                'id' => 1247,
                'parent' => 30,
                'title' => 'سامن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            247 => 
            array (
                'id' => 1248,
                'parent' => 30,
                'title' => 'ملایر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            248 => 
            array (
                'id' => 1249,
                'parent' => 30,
                'title' => 'برزول',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            249 => 
            array (
                'id' => 1250,
                'parent' => 30,
                'title' => 'فیروزان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            250 => 
            array (
                'id' => 1251,
                'parent' => 30,
                'title' => 'گیان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            251 => 
            array (
                'id' => 1252,
                'parent' => 30,
                'title' => 'نهاوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            252 => 
            array (
                'id' => 1253,
                'parent' => 30,
                'title' => 'جورقان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            253 => 
            array (
                'id' => 1254,
                'parent' => 30,
                'title' => 'قهاوند',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            254 => 
            array (
                'id' => 1255,
                'parent' => 30,
                'title' => 'مریانج',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            255 => 
            array (
                'id' => 1256,
                'parent' => 30,
                'title' => 'همدان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            256 => 
            array (
                'id' => 1257,
                'parent' => 31,
                'title' => 'ابرکوه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:08',
                'updated_at' => '2020-08-28 13:48:08',
            ),
            257 => 
            array (
                'id' => 1258,
                'parent' => 31,
                'title' => 'مهردشت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            258 => 
            array (
                'id' => 1259,
                'parent' => 31,
                'title' => 'احمدآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            259 => 
            array (
                'id' => 1260,
                'parent' => 31,
                'title' => 'اردکان',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            260 => 
            array (
                'id' => 1261,
                'parent' => 31,
                'title' => 'عقدا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            261 => 
            array (
                'id' => 1262,
                'parent' => 31,
                'title' => 'اشکذر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            262 => 
            array (
                'id' => 1263,
                'parent' => 31,
                'title' => 'خضرآباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            263 => 
            array (
                'id' => 1264,
                'parent' => 31,
                'title' => 'بافق',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            264 => 
            array (
                'id' => 1265,
                'parent' => 31,
                'title' => 'بهاباد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            265 => 
            array (
                'id' => 1266,
                'parent' => 31,
                'title' => 'تفت',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            266 => 
            array (
                'id' => 1267,
                'parent' => 31,
                'title' => 'نیر',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            267 => 
            array (
                'id' => 1268,
                'parent' => 31,
                'title' => 'مروست',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            268 => 
            array (
                'id' => 1269,
                'parent' => 31,
                'title' => 'هرات',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            269 => 
            array (
                'id' => 1270,
                'parent' => 31,
                'title' => 'مهریز',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            270 => 
            array (
                'id' => 1271,
                'parent' => 31,
                'title' => 'بفروییه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            271 => 
            array (
                'id' => 1272,
                'parent' => 31,
                'title' => 'میبد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            272 => 
            array (
                'id' => 1273,
                'parent' => 31,
                'title' => 'ندوشن',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            273 => 
            array (
                'id' => 1274,
                'parent' => 31,
                'title' => 'حمیدیا',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            274 => 
            array (
                'id' => 1275,
                'parent' => 31,
                'title' => 'زارچ',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            275 => 
            array (
                'id' => 1276,
                'parent' => 31,
                'title' => 'شاهدیه',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            276 => 
            array (
                'id' => 1277,
                'parent' => 31,
                'title' => 'یزد',
                'sort' => 1,
                'created_at' => '2020-08-28 13:48:09',
                'updated_at' => '2020-08-28 13:48:09',
            ),
            277 => 
            array (
                'id' => 1278,
                'parent' => NULL,
                'title' => 'نامشخص',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'parent' => 1278,
                'title' => 'Moḩammadābād',
                'sort' => NULL,
                'created_at' => '2023-01-17 10:38:03',
                'updated_at' => '2023-01-17 10:38:03',
            ),
            279 => 
            array (
                'id' => 1280,
                'parent' => 1278,
                'title' => 'Neyshābūr',
                'sort' => NULL,
                'created_at' => '2023-01-17 10:58:28',
                'updated_at' => '2023-01-17 10:58:28',
            ),
        ));
        
        
    }
}