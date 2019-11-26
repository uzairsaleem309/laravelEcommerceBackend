<?php

use Illuminate\Database\Seeder;

class LabelValueTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('label_value')->delete();
        
        \DB::table('label_value')->insert(array (
            0 => 
            array (
                'label_value_id' => 1297,
                'label_value' => 'Home',
                'language_id' => 1,
                'label_id' => 1031,
            ),
            1 => 
            array (
                'label_value_id' => 1298,
                'label_value' => 'Menu',
                'language_id' => 1,
                'label_id' => 1030,
            ),
            2 => 
            array (
                'label_value_id' => 1299,
                'label_value' => 'Clear',
                'language_id' => 1,
                'label_id' => 1029,
            ),
            3 => 
            array (
                'label_value_id' => 1300,
                'label_value' => 'Apply',
                'language_id' => 1,
                'label_id' => 1028,
            ),
            4 => 
            array (
                'label_value_id' => 1301,
                'label_value' => 'Close',
                'language_id' => 1,
                'label_id' => 1027,
            ),
            5 => 
            array (
                'label_value_id' => 1302,
                'label_value' => 'Price Range',
                'language_id' => 1,
                'label_id' => 1026,
            ),
            6 => 
            array (
                'label_value_id' => 1303,
                'label_value' => 'Filters',
                'language_id' => 1,
                'label_id' => 1025,
            ),
            7 => 
            array (
                'label_value_id' => 1304,
                'label_value' => 'My Wish List',
                'language_id' => 1,
                'label_id' => 1024,
            ),
            8 => 
            array (
                'label_value_id' => 1305,
                'label_value' => 'Log Out',
                'language_id' => 1,
                'label_id' => 1023,
            ),
            9 => 
            array (
                'label_value_id' => 1306,
                'label_value' => 'Please login or create an account for free',
                'language_id' => 1,
                'label_id' => 1022,
            ),
            10 => 
            array (
                'label_value_id' => 1307,
                'label_value' => 'login & Register',
                'language_id' => 1,
                'label_id' => 1021,
            ),
            11 => 
            array (
                'label_value_id' => 1308,
                'label_value' => 'Save Address',
                'language_id' => 1,
                'label_id' => 1020,
            ),
            12 => 
            array (
                'label_value_id' => 1309,
                'label_value' => 'State',
                'language_id' => 1,
                'label_id' => 1018,
            ),
            13 => 
            array (
                'label_value_id' => 1310,
                'label_value' => 'Update Address',
                'language_id' => 1,
                'label_id' => 1019,
            ),
            14 => 
            array (
                'label_value_id' => 1311,
                'label_value' => 'Post code',
                'language_id' => 1,
                'label_id' => 1017,
            ),
            15 => 
            array (
                'label_value_id' => 1312,
                'label_value' => 'City',
                'language_id' => 1,
                'label_id' => 1016,
            ),
            16 => 
            array (
                'label_value_id' => 1313,
                'label_value' => 'Zone',
                'language_id' => 1,
                'label_id' => 1015,
            ),
            17 => 
            array (
                'label_value_id' => 1314,
                'label_value' => 'other',
                'language_id' => 1,
                'label_id' => 1014,
            ),
            18 => 
            array (
                'label_value_id' => 1315,
                'label_value' => 'Country',
                'language_id' => 1,
                'label_id' => 1013,
            ),
            19 => 
            array (
                'label_value_id' => 1316,
                'label_value' => 'Shipping Address',
                'language_id' => 1,
                'label_id' => 1012,
            ),
            20 => 
            array (
                'label_value_id' => 1317,
                'label_value' => 'Proceed',
                'language_id' => 1,
                'label_id' => 1011,
            ),
            21 => 
            array (
                'label_value_id' => 1318,
                'label_value' => 'Remove',
                'language_id' => 1,
                'label_id' => 1010,
            ),
            22 => 
            array (
                'label_value_id' => 1319,
                'label_value' => 'by',
                'language_id' => 1,
                'label_id' => 1008,
            ),
            23 => 
            array (
                'label_value_id' => 1320,
                'label_value' => 'View',
                'language_id' => 1,
                'label_id' => 1009,
            ),
            24 => 
            array (
                'label_value_id' => 1321,
                'label_value' => 'Quantity',
                'language_id' => 1,
                'label_id' => 1007,
            ),
            25 => 
            array (
                'label_value_id' => 1322,
                'label_value' => 'Price',
                'language_id' => 1,
                'label_id' => 1006,
            ),
            26 => 
            array (
                'label_value_id' => 1323,
                'label_value' => 'continue shopping',
                'language_id' => 1,
                'label_id' => 1005,
            ),
            27 => 
            array (
                'label_value_id' => 1324,
                'label_value' => 'Your cart is empty',
                'language_id' => 1,
                'label_id' => 1004,
            ),
            28 => 
            array (
                'label_value_id' => 1325,
                'label_value' => 'My Cart',
                'language_id' => 1,
                'label_id' => 1003,
            ),
            29 => 
            array (
                'label_value_id' => 1326,
                'label_value' => 'Continue',
                'language_id' => 1,
                'label_id' => 1002,
            ),
            30 => 
            array (
                'label_value_id' => 1327,
                'label_value' => 'Error: invalid cvc number!',
                'language_id' => 1,
                'label_id' => 1001,
            ),
            31 => 
            array (
                'label_value_id' => 1328,
                'label_value' => 'Error: invalid expiry date!',
                'language_id' => 1,
                'label_id' => 1000,
            ),
            32 => 
            array (
                'label_value_id' => 1329,
                'label_value' => 'Error: invalid card number!',
                'language_id' => 1,
                'label_id' => 999,
            ),
            33 => 
            array (
                'label_value_id' => 1330,
                'label_value' => 'Expiration',
                'language_id' => 1,
                'label_id' => 998,
            ),
            34 => 
            array (
                'label_value_id' => 1331,
                'label_value' => 'Expiration Date',
                'language_id' => 1,
                'label_id' => 997,
            ),
            35 => 
            array (
                'label_value_id' => 1332,
                'label_value' => 'Card Number',
                'language_id' => 1,
                'label_id' => 996,
            ),
            36 => 
            array (
                'label_value_id' => 1333,
                'label_value' => 'Payment',
                'language_id' => 1,
                'label_id' => 995,
            ),
            37 => 
            array (
                'label_value_id' => 1334,
                'label_value' => 'Order Notes',
                'language_id' => 1,
                'label_id' => 994,
            ),
            38 => 
            array (
                'label_value_id' => 1335,
                'label_value' => 'Shipping Cost',
                'language_id' => 1,
                'label_id' => 993,
            ),
            39 => 
            array (
                'label_value_id' => 1336,
                'label_value' => 'Tax',
                'language_id' => 1,
                'label_id' => 992,
            ),
            40 => 
            array (
                'label_value_id' => 1337,
                'label_value' => 'Products Price',
                'language_id' => 1,
                'label_id' => 991,
            ),
            41 => 
            array (
                'label_value_id' => 1338,
                'label_value' => 'SubTotal',
                'language_id' => 1,
                'label_id' => 990,
            ),
            42 => 
            array (
                'label_value_id' => 1339,
                'label_value' => 'Products',
                'language_id' => 1,
                'label_id' => 989,
            ),
            43 => 
            array (
                'label_value_id' => 1340,
                'label_value' => 'Shipping Method',
                'language_id' => 1,
                'label_id' => 988,
            ),
            44 => 
            array (
                'label_value_id' => 1341,
                'label_value' => 'Billing Address',
                'language_id' => 1,
                'label_id' => 987,
            ),
            45 => 
            array (
                'label_value_id' => 1342,
                'label_value' => 'Order',
                'language_id' => 1,
                'label_id' => 986,
            ),
            46 => 
            array (
                'label_value_id' => 1343,
                'label_value' => 'Next',
                'language_id' => 1,
                'label_id' => 985,
            ),
            47 => 
            array (
                'label_value_id' => 1344,
                'label_value' => 'Same as Shipping Address',
                'language_id' => 1,
                'label_id' => 984,
            ),
            48 => 
            array (
                'label_value_id' => 1345,
                'label_value' => 'Billing Info',
                'language_id' => 1,
                'label_id' => 981,
            ),
            49 => 
            array (
                'label_value_id' => 1346,
                'label_value' => 'Address',
                'language_id' => 1,
                'label_id' => 982,
            ),
            50 => 
            array (
                'label_value_id' => 1347,
                'label_value' => 'Phone',
                'language_id' => 1,
                'label_id' => 983,
            ),
            51 => 
            array (
                'label_value_id' => 1348,
                'label_value' => 'Already Memeber?',
                'language_id' => 1,
                'label_id' => 980,
            ),
            52 => 
            array (
                'label_value_id' => 1349,
                'label_value' => 'Last Name',
                'language_id' => 1,
                'label_id' => 979,
            ),
            53 => 
            array (
                'label_value_id' => 1350,
                'label_value' => 'First Name',
                'language_id' => 1,
                'label_id' => 978,
            ),
            54 => 
            array (
                'label_value_id' => 1351,
                'label_value' => 'Create an Account',
                'language_id' => 1,
                'label_id' => 977,
            ),
            55 => 
            array (
                'label_value_id' => 1352,
                'label_value' => 'Add new Address',
                'language_id' => 1,
                'label_id' => 976,
            ),
            56 => 
            array (
                'label_value_id' => 1353,
                'label_value' => 'Please add your new shipping address for the futher processing of the your order',
                'language_id' => 1,
                'label_id' => 975,
            ),
            57 => 
            array (
                'label_value_id' => 1354,
                'label_value' => 'Order Status',
                'language_id' => 1,
                'label_id' => 969,
            ),
            58 => 
            array (
                'label_value_id' => 1355,
                'label_value' => 'Orders ID',
                'language_id' => 1,
                'label_id' => 970,
            ),
            59 => 
            array (
                'label_value_id' => 1356,
                'label_value' => 'Product Price',
                'language_id' => 1,
                'label_id' => 971,
            ),
            60 => 
            array (
                'label_value_id' => 1357,
                'label_value' => 'No. of Products',
                'language_id' => 1,
                'label_id' => 972,
            ),
            61 => 
            array (
                'label_value_id' => 1358,
                'label_value' => 'Date',
                'language_id' => 1,
                'label_id' => 973,
            ),
            62 => 
            array (
                'label_value_id' => 1359,
                'label_value' => 'Customer Address',
                'language_id' => 1,
                'label_id' => 974,
            ),
            63 => 
            array (
                'label_value_id' => 1360,
                'label_value' => 'Customer Orders',
                'language_id' => 1,
                'label_id' => 968,
            ),
            64 => 
            array (
                'label_value_id' => 1361,
                'label_value' => 'Change Password',
                'language_id' => 1,
                'label_id' => 967,
            ),
            65 => 
            array (
                'label_value_id' => 1362,
                'label_value' => 'New Password',
                'language_id' => 1,
                'label_id' => 966,
            ),
            66 => 
            array (
                'label_value_id' => 1363,
                'label_value' => 'Current Password',
                'language_id' => 1,
                'label_id' => 965,
            ),
            67 => 
            array (
                'label_value_id' => 1364,
                'label_value' => 'Update',
                'language_id' => 1,
                'label_id' => 964,
            ),
            68 => 
            array (
                'label_value_id' => 1365,
                'label_value' => 'Date of Birth',
                'language_id' => 1,
                'label_id' => 963,
            ),
            69 => 
            array (
                'label_value_id' => 1366,
                'label_value' => 'Mobile',
                'language_id' => 1,
                'label_id' => 962,
            ),
            70 => 
            array (
                'label_value_id' => 1367,
                'label_value' => 'My Account',
                'language_id' => 1,
                'label_id' => 961,
            ),
            71 => 
            array (
                'label_value_id' => 1368,
                'label_value' => 'Likes',
                'language_id' => 1,
                'label_id' => 960,
            ),
            72 => 
            array (
                'label_value_id' => 1369,
                'label_value' => 'Newest',
                'language_id' => 1,
                'label_id' => 959,
            ),
            73 => 
            array (
                'label_value_id' => 1370,
                'label_value' => 'Top Seller',
                'language_id' => 1,
                'label_id' => 958,
            ),
            74 => 
            array (
                'label_value_id' => 1371,
                'label_value' => 'Special',
                'language_id' => 1,
                'label_id' => 957,
            ),
            75 => 
            array (
                'label_value_id' => 1372,
                'label_value' => 'Most Liked',
                'language_id' => 1,
                'label_id' => 956,
            ),
            76 => 
            array (
                'label_value_id' => 1373,
                'label_value' => 'Cancel',
                'language_id' => 1,
                'label_id' => 955,
            ),
            77 => 
            array (
                'label_value_id' => 1374,
                'label_value' => 'Sort Products',
                'language_id' => 1,
                'label_id' => 954,
            ),
            78 => 
            array (
                'label_value_id' => 1375,
                'label_value' => 'Special Products',
                'language_id' => 1,
                'label_id' => 953,
            ),
            79 => 
            array (
                'label_value_id' => 1376,
                'label_value' => 'Price : low - high',
                'language_id' => 1,
                'label_id' => 952,
            ),
            80 => 
            array (
                'label_value_id' => 1377,
                'label_value' => 'Price : high - low',
                'language_id' => 1,
                'label_id' => 951,
            ),
            81 => 
            array (
                'label_value_id' => 1378,
                'label_value' => 'Z - A',
                'language_id' => 1,
                'label_id' => 950,
            ),
            82 => 
            array (
                'label_value_id' => 1379,
                'label_value' => 'A - Z',
                'language_id' => 1,
                'label_id' => 949,
            ),
            83 => 
            array (
                'label_value_id' => 1380,
                'label_value' => 'All',
                'language_id' => 1,
                'label_id' => 948,
            ),
            84 => 
            array (
                'label_value_id' => 1381,
                'label_value' => 'Explore More',
                'language_id' => 1,
                'label_id' => 947,
            ),
            85 => 
            array (
                'label_value_id' => 1382,
                'label_value' => 'Note to the buyer',
                'language_id' => 1,
                'label_id' => 946,
            ),
            86 => 
            array (
                'label_value_id' => 1383,
                'label_value' => 'Coupon',
                'language_id' => 1,
                'label_id' => 945,
            ),
            87 => 
            array (
                'label_value_id' => 1384,
                'label_value' => 'coupon code',
                'language_id' => 1,
                'label_id' => 944,
            ),
            88 => 
            array (
                'label_value_id' => 1385,
                'label_value' => 'Coupon Amount',
                'language_id' => 1,
                'label_id' => 943,
            ),
            89 => 
            array (
                'label_value_id' => 1386,
                'label_value' => 'Coupon Code',
                'language_id' => 1,
                'label_id' => 942,
            ),
            90 => 
            array (
                'label_value_id' => 1387,
                'label_value' => 'Food Categories',
                'language_id' => 1,
                'label_id' => 941,
            ),
            91 => 
            array (
                'label_value_id' => 1388,
                'label_value' => 'Recipe of Day',
                'language_id' => 1,
                'label_id' => 940,
            ),
            92 => 
            array (
                'label_value_id' => 1389,
                'label_value' => 'Top Dishes',
                'language_id' => 1,
                'label_id' => 939,
            ),
            93 => 
            array (
                'label_value_id' => 1390,
                'label_value' => 'Skip',
                'language_id' => 1,
                'label_id' => 938,
            ),
            94 => 
            array (
                'label_value_id' => 1391,
                'label_value' => 'Term and Services',
                'language_id' => 1,
                'label_id' => 937,
            ),
            95 => 
            array (
                'label_value_id' => 1392,
                'label_value' => 'Privacy Policy',
                'language_id' => 1,
                'label_id' => 936,
            ),
            96 => 
            array (
                'label_value_id' => 1393,
                'label_value' => 'Refund Policy',
                'language_id' => 1,
                'label_id' => 935,
            ),
            97 => 
            array (
                'label_value_id' => 1394,
                'label_value' => 'Newest',
                'language_id' => 1,
                'label_id' => 934,
            ),
            98 => 
            array (
                'label_value_id' => 1395,
                'label_value' => 'OUT OF STOCK',
                'language_id' => 1,
                'label_id' => 933,
            ),
            99 => 
            array (
                'label_value_id' => 1396,
                'label_value' => 'Select Language',
                'language_id' => 1,
                'label_id' => 932,
            ),
            100 => 
            array (
                'label_value_id' => 1397,
                'label_value' => 'Reset',
                'language_id' => 1,
                'label_id' => 931,
            ),
            101 => 
            array (
                'label_value_id' => 1398,
                'label_value' => 'Shop',
                'language_id' => 1,
                'label_id' => 930,
            ),
            102 => 
            array (
                'label_value_id' => 1399,
                'label_value' => 'Settings',
                'language_id' => 1,
                'label_id' => 929,
            ),
            103 => 
            array (
                'label_value_id' => 1400,
                'label_value' => 'Enter keyword',
                'language_id' => 1,
                'label_id' => 928,
            ),
            104 => 
            array (
                'label_value_id' => 1401,
                'label_value' => 'News',
                'language_id' => 1,
                'label_id' => 927,
            ),
            105 => 
            array (
                'label_value_id' => 1402,
                'label_value' => 'Top Sellers',
                'language_id' => 1,
                'label_id' => 926,
            ),
            106 => 
            array (
                'label_value_id' => 1403,
                'label_value' => 'Go Back',
                'language_id' => 1,
                'label_id' => 925,
            ),
            107 => 
            array (
                'label_value_id' => 1404,
                'label_value' => 'Word Press Post Detail',
                'language_id' => 1,
                'label_id' => 924,
            ),
            108 => 
            array (
                'label_value_id' => 1405,
                'label_value' => 'Explore',
                'language_id' => 1,
                'label_id' => 923,
            ),
            109 => 
            array (
                'label_value_id' => 1406,
                'label_value' => 'Continue Adding',
                'language_id' => 1,
                'label_id' => 922,
            ),
            110 => 
            array (
                'label_value_id' => 1407,
                'label_value' => 'Your wish List is empty',
                'language_id' => 1,
                'label_id' => 921,
            ),
            111 => 
            array (
                'label_value_id' => 1408,
                'label_value' => 'Favourite',
                'language_id' => 1,
                'label_id' => 920,
            ),
            112 => 
            array (
                'label_value_id' => 1409,
                'label_value' => 'Continue Shopping',
                'language_id' => 1,
                'label_id' => 919,
            ),
            113 => 
            array (
                'label_value_id' => 1410,
                'label_value' => 'My Orders',
                'language_id' => 1,
                'label_id' => 918,
            ),
            114 => 
            array (
                'label_value_id' => 1411,
                'label_value' => 'Thank you for shopping with us.',
                'language_id' => 1,
                'label_id' => 917,
            ),
            115 => 
            array (
                'label_value_id' => 1412,
                'label_value' => 'Thank You',
                'language_id' => 1,
                'label_id' => 916,
            ),
            116 => 
            array (
                'label_value_id' => 1413,
                'label_value' => 'Shipping method',
                'language_id' => 1,
                'label_id' => 915,
            ),
            117 => 
            array (
                'label_value_id' => 1414,
                'label_value' => 'Sub Categories',
                'language_id' => 1,
                'label_id' => 914,
            ),
            118 => 
            array (
                'label_value_id' => 1415,
                'label_value' => 'Main Categories',
                'language_id' => 1,
                'label_id' => 913,
            ),
            119 => 
            array (
                'label_value_id' => 1416,
                'label_value' => 'Search',
                'language_id' => 1,
                'label_id' => 912,
            ),
            120 => 
            array (
                'label_value_id' => 1417,
                'label_value' => 'Reset Filters',
                'language_id' => 1,
                'label_id' => 911,
            ),
            121 => 
            array (
                'label_value_id' => 1418,
                'label_value' => 'No Products Found',
                'language_id' => 1,
                'label_id' => 910,
            ),
            122 => 
            array (
                'label_value_id' => 1419,
                'label_value' => 'OFF',
                'language_id' => 1,
                'label_id' => 909,
            ),
            123 => 
            array (
                'label_value_id' => 1420,
                'label_value' => 'Techincal details',
                'language_id' => 1,
                'label_id' => 908,
            ),
            124 => 
            array (
                'label_value_id' => 1421,
                'label_value' => 'Product Description',
                'language_id' => 1,
                'label_id' => 907,
            ),
            125 => 
            array (
                'label_value_id' => 1422,
                'label_value' => 'ADD TO CART',
                'language_id' => 1,
                'label_id' => 906,
            ),
            126 => 
            array (
                'label_value_id' => 1423,
                'label_value' => 'Add to Cart',
                'language_id' => 1,
                'label_id' => 905,
            ),
            127 => 
            array (
                'label_value_id' => 1424,
                'label_value' => 'In Stock',
                'language_id' => 1,
                'label_id' => 904,
            ),
            128 => 
            array (
                'label_value_id' => 1425,
                'label_value' => 'Out of Stock',
                'language_id' => 1,
                'label_id' => 903,
            ),
            129 => 
            array (
                'label_value_id' => 1426,
                'label_value' => 'New',
                'language_id' => 1,
                'label_id' => 902,
            ),
            130 => 
            array (
                'label_value_id' => 1427,
                'label_value' => 'Product Details',
                'language_id' => 1,
                'label_id' => 901,
            ),
            131 => 
            array (
                'label_value_id' => 1428,
                'label_value' => 'Shipping',
                'language_id' => 1,
                'label_id' => 900,
            ),
            132 => 
            array (
                'label_value_id' => 1429,
                'label_value' => 'Sub Total',
                'language_id' => 1,
                'label_id' => 899,
            ),
            133 => 
            array (
                'label_value_id' => 1430,
                'label_value' => 'Total',
                'language_id' => 1,
                'label_id' => 898,
            ),
            134 => 
            array (
                'label_value_id' => 1431,
                'label_value' => 'Price Detail',
                'language_id' => 1,
                'label_id' => 897,
            ),
            135 => 
            array (
                'label_value_id' => 1432,
                'label_value' => 'Order Detail',
                'language_id' => 1,
                'label_id' => 896,
            ),
            136 => 
            array (
                'label_value_id' => 1433,
                'label_value' => 'Got It!',
                'language_id' => 1,
                'label_id' => 895,
            ),
            137 => 
            array (
                'label_value_id' => 1434,
                'label_value' => 'Skip Intro',
                'language_id' => 1,
                'label_id' => 894,
            ),
            138 => 
            array (
                'label_value_id' => 1435,
                'label_value' => 'Intro',
                'language_id' => 1,
                'label_id' => 893,
            ),
            139 => 
            array (
                'label_value_id' => 1436,
                'label_value' => 'REMOVE',
                'language_id' => 1,
                'label_id' => 892,
            ),
            140 => 
            array (
                'label_value_id' => 1437,
                'label_value' => 'Deals',
                'language_id' => 1,
                'label_id' => 891,
            ),
            141 => 
            array (
                'label_value_id' => 1438,
                'label_value' => 'All Categories',
                'language_id' => 1,
                'label_id' => 890,
            ),
            142 => 
            array (
                'label_value_id' => 1439,
                'label_value' => 'Most Liked',
                'language_id' => 1,
                'label_id' => 889,
            ),
            143 => 
            array (
                'label_value_id' => 1440,
                'label_value' => 'Special Deals',
                'language_id' => 1,
                'label_id' => 888,
            ),
            144 => 
            array (
                'label_value_id' => 1441,
                'label_value' => 'Top Seller',
                'language_id' => 1,
                'label_id' => 887,
            ),
            145 => 
            array (
                'label_value_id' => 1442,
                'label_value' => 'Products are available.',
                'language_id' => 1,
                'label_id' => 886,
            ),
            146 => 
            array (
                'label_value_id' => 1443,
                'label_value' => 'Recently Viewed',
                'language_id' => 1,
                'label_id' => 885,
            ),
            147 => 
            array (
                'label_value_id' => 1444,
                'label_value' => 'Please connect to the internet',
                'language_id' => 1,
                'label_id' => 884,
            ),
            148 => 
            array (
                'label_value_id' => 1445,
                'label_value' => 'Contact Us',
                'language_id' => 1,
                'label_id' => 881,
            ),
            149 => 
            array (
                'label_value_id' => 1446,
                'label_value' => 'Name',
                'language_id' => 1,
                'label_id' => 882,
            ),
            150 => 
            array (
                'label_value_id' => 1447,
                'label_value' => 'Your Message',
                'language_id' => 1,
                'label_id' => 883,
            ),
            151 => 
            array (
                'label_value_id' => 1448,
                'label_value' => 'Categories',
                'language_id' => 1,
                'label_id' => 880,
            ),
            152 => 
            array (
                'label_value_id' => 1449,
                'label_value' => 'About Us',
                'language_id' => 1,
                'label_id' => 879,
            ),
            153 => 
            array (
                'label_value_id' => 1450,
                'label_value' => 'Send',
                'language_id' => 1,
                'label_id' => 878,
            ),
            154 => 
            array (
                'label_value_id' => 1451,
                'label_value' => 'Forgot Password',
                'language_id' => 1,
                'label_id' => 877,
            ),
            155 => 
            array (
                'label_value_id' => 1452,
                'label_value' => 'Register',
                'language_id' => 1,
                'label_id' => 876,
            ),
            156 => 
            array (
                'label_value_id' => 1453,
                'label_value' => 'Password',
                'language_id' => 1,
                'label_id' => 875,
            ),
            157 => 
            array (
                'label_value_id' => 1454,
                'label_value' => 'Email',
                'language_id' => 1,
                'label_id' => 874,
            ),
            158 => 
            array (
                'label_value_id' => 1455,
                'label_value' => 'or',
                'language_id' => 1,
                'label_id' => 873,
            ),
            159 => 
            array (
                'label_value_id' => 1456,
                'label_value' => 'Login with',
                'language_id' => 1,
                'label_id' => 872,
            ),
            160 => 
            array (
                'label_value_id' => 1457,
                'label_value' => 'Creating an account means you\'re okay with shopify\'s Terms of Service, Privacy Policy',
                'language_id' => 1,
                'label_id' => 2,
            ),
            161 => 
            array (
                'label_value_id' => 1458,
                'label_value' => 'I\'ve forgotten my password?',
                'language_id' => 1,
                'label_id' => 1,
            ),
            162 => 
            array (
                'label_value_id' => 1459,
                'label_value' => NULL,
                'language_id' => 1,
                'label_id' => NULL,
            ),
            163 => 
            array (
                'label_value_id' => 1462,
                'label_value' => 'Creating an account means you’re okay with our',
                'language_id' => 1,
                'label_id' => 1033,
            ),
            164 => 
            array (
                'label_value_id' => 1465,
                'label_value' => 'Login',
                'language_id' => 1,
                'label_id' => 1034,
            ),
            165 => 
            array (
                'label_value_id' => 1468,
                'label_value' => 'Turn on/off Local Notifications',
                'language_id' => 1,
                'label_id' => 1035,
            ),
            166 => 
            array (
                'label_value_id' => 1471,
                'label_value' => 'Turn on/off Notifications',
                'language_id' => 1,
                'label_id' => 1036,
            ),
            167 => 
            array (
                'label_value_id' => 1474,
                'label_value' => 'Change Language',
                'language_id' => 1,
                'label_id' => 1037,
            ),
            168 => 
            array (
                'label_value_id' => 1477,
                'label_value' => 'Official Website',
                'language_id' => 1,
                'label_id' => 1038,
            ),
            169 => 
            array (
                'label_value_id' => 1480,
                'label_value' => 'Rate Us',
                'language_id' => 1,
                'label_id' => 1039,
            ),
            170 => 
            array (
                'label_value_id' => 1483,
                'label_value' => 'Share',
                'language_id' => 1,
                'label_id' => 1040,
            ),
            171 => 
            array (
                'label_value_id' => 1486,
                'label_value' => 'Edit Profile',
                'language_id' => 1,
                'label_id' => 1041,
            ),
            172 => 
            array (
                'label_value_id' => 1489,
                'label_value' => 'A percentage discount for the entire cart',
                'language_id' => 1,
                'label_id' => 1042,
            ),
            173 => 
            array (
                'label_value_id' => 1492,
                'label_value' => 'A fixed total discount for the entire cart',
                'language_id' => 1,
                'label_id' => 1043,
            ),
            174 => 
            array (
                'label_value_id' => 1495,
                'label_value' => 'A fixed total discount for selected products only',
                'language_id' => 1,
                'label_id' => 1044,
            ),
            175 => 
            array (
                'label_value_id' => 1498,
                'label_value' => 'A percentage discount for selected products only',
                'language_id' => 1,
                'label_id' => 1045,
            ),
            176 => 
            array (
                'label_value_id' => 1501,
                'label_value' => 'Network Connected Reloading Data',
                'language_id' => 1,
                'label_id' => 1047,
            ),
            177 => 
            array (
                'label_value_id' => 1503,
                'label_value' => 'Sort by',
                'language_id' => 1,
                'label_id' => 1048,
            ),
            178 => 
            array (
                'label_value_id' => 1505,
                'label_value' => 'Flash Sale',
                'language_id' => 1,
                'label_id' => 1049,
            ),
            179 => 
            array (
                'label_value_id' => 1507,
                'label_value' => 'ok',
                'language_id' => 1,
                'label_id' => 1050,
            ),
            180 => 
            array (
                'label_value_id' => 1509,
                'label_value' => 'Number',
                'language_id' => 1,
                'label_id' => 1051,
            ),
            181 => 
            array (
                'label_value_id' => 1511,
                'label_value' => 'Expire Month',
                'language_id' => 1,
                'label_id' => 1052,
            ),
            182 => 
            array (
                'label_value_id' => 1513,
                'label_value' => 'Expire Year',
                'language_id' => 1,
                'label_id' => 1053,
            ),
            183 => 
            array (
                'label_value_id' => 1515,
                'label_value' => 'Payment Method',
                'language_id' => 1,
                'label_id' => 1054,
            ),
            184 => 
            array (
                'label_value_id' => 1517,
                'label_value' => 'Status',
                'language_id' => 1,
                'label_id' => 1055,
            ),
            185 => 
            array (
                'label_value_id' => 1519,
                'label_value' => 'And',
                'language_id' => 1,
                'label_id' => 1056,
            ),
        ));
        
        
    }
}