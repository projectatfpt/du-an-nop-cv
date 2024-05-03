<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            #Áo sơ mi
            ['name' => 'Áo Sơ Mi Cổ Bẻ Tay Ngắn Sợi Nhân Tạo Thấm Hút Biểu Tượng Dáng Rộng Đơn Giản Seventy Seven 22', 'price' => 257000, 'sale_price' => null, 'images' => 'img13.jpg', 'summary' => 'Chất liệu: Kaki Nhung. Thành phần: 100% Polyester. Bo cổ, bo tay phối viền màu, sử dụng chất liệu bo poly co giãn, áo may rã phối màu , trên vị trí rã in dẻo tạo kiểu', 'hot' => 0, 'status' => 1, 'slug' => 'ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-don-gian-seventy-seven-22', 'category_id' => 2, 'brand_id' => 1, 'created_at' => now()],
            ['name' => 'Áo Sơ Mi Cổ Bẻ Tay Dài Sợi Cà Phê Ít Nhăn Trơn Dáng Vừa Đơn Giản WRINKLE FREE 13', 'price' => 327000, 'sale_price' => null, 'images' => 'img23.jpg', 'summary' => 'Chất liệu: Sợi cà phê (CAFÉ FABRIC). Thành phần: 50% Coffee 50% Polyester. Odor Control - Kiểm soát mùi. Fast Drying - Nhanh khô, Ice Cool Touch - Làm mát cơ thể', 'hot' => 0, 'status' => 1, 'slug' => 'ao-so-mi-co-be-tay-dai-soi-ca-phe-it-nhan-tron-dang-vua-don-gian-wrinkle-free-13', 'category_id' => 2, 'brand_id' => 2, 'created_at' => now()],
            ['name' => 'Áo Sơ Mi Cổ Bẻ Tay Ngắn Vải Cotton Thấm Hút Biểu Tượng Dáng Rộng BST Thiết Kế ONE PIECE 30', 'price' => 357000, 'sale_price' => null, 'images' => 'img33.jpg', 'summary' => 'Chất liệu: Sợi cà phê (CAFÉ FABRIC). Thành phần: 50% Coffee 50% Polyester. Odor Control - sử dụng chất liệu bo poly co giãn, áo may rã phối màu , trên vị trí rã in dẻo tạo kiểu', 'hot' => 1, 'status' => 1, 'slug' => 'ao-so-mi-co-be-tay-ngan-vai-cotton-tham-hut-bieu-tuong-dang-rong-bst-thiet-ke-one-piece-30', 'category_id' => 2, 'brand_id' => 3, 'created_at' => now()],
            ['name' => 'Áo Sơ Mi Cổ Bẻ Tay Ngắn Sợi Modal Mặc Nhẹ Trơn Dáng Rộng Đơn Giản WRINKLE FREE 05', 'price' => 277000, 'sale_price' => null, 'images' => 'img43.jpg', 'summary' => 'Chất liệu Modal Poly kết hợp 12% Modal và 88% Polyester. Với tính năng kháng khuẩn, nó giúp ngăn chặn sự phát triển của vi khuẩn. Đồng thời, chất liệu này cũng có khả năng thoáng mát, giúp cơ thể luôn cảm thấy dễ chịu trong mọi điều kiện.', 'hot' => 0, 'status' => 1, 'slug' => 'ao-so-mi-co-be-tay-ngan-soi-modal-mac-nhe-tron-dang-rong-don-gian-wrinkle-free-05', 'category_id' => 2, 'brand_id' => 4, 'created_at' => now()],
            ['name' => 'Áo Sơ Mi Cổ Bẻ Tay Dài Vải Cotton Thấm Hút Trơn Dáng Rộng Đơn Giản Y2010 Originals Ver40', 'price' => 397000, 'sale_price' => 277000, 'images' => 'img53.jpg', 'summary' => 'Áo sơ mi tay dài đơn giản Y Nguyên Bản Ver40 được làm từ chất liệu Cotton Flannel Fabric, đặc trưng bởi thành phần 100% cotton. Với khả năng thoát mồ hôi nhanh chóng, giữ cơ thể luôn mát mẻ và khô thoáng. Đồng thời, với khả năng hạn chế nhăn, co rút và giữ màu tốt, việc giặt giũ trở nên dễ dàng hơn.', 'hot' => 0, 'status' => 1, 'slug' => 'ao-so-mi-co-be-tay-dai-vai-cotton-tham-hut-tron-dang-rong-don-gian-y2010-originals-ver40', 'category_id' => 2, 'brand_id' => 5, 'created_at' => now()],

            #Áo polo
            ['name' => 'Áo Polo Cổ Bẻ Tay Ngắn Vải Cá Sấu 4 Chiều Thấm Hút Biểu Tượng Dáng Vừa Giá Tốt Seventy Seven 19', 'price' => 227000, 'sale_price' => null, 'images' => 'img63.jpg', 'summary' => 'Chất liệu Thun Cá Sấu Poly 4C bao gồm 95% Polyester và 5% Spandex, tạo nên tính đàn hồi và co giãn. Áo có bo cổ và bo tay được phối viền màu, sử dụng chất liệu bo poly co giãn, tạo sự thoải mái và phong cách. Với kỹ thuật in dẻo, áo được thiết kế với rã phối màu và in dẻo tạo kiểu trên vị trí rã. ', 'hot' => 0, 'status' => 1, 'slug' => 'ao-polo-co-be-tay-ngan-vai-ca-sau-4-chieu-tham-hut-bieu-tuong-dang-vua-gia-tot-seventy-seven-19', 'category_id' => 1, 'brand_id' => 1, 'created_at' => now()],
            ['name' => 'Áo Polo Cổ Bẻ Tay Ngắn Vải Cotton 2 Chiều Thấm Hút Phối Màu Dáng Rộng Đơn Giản Seventy Seven 02', 'price' => 247000, 'sale_price' => null, 'images' => 'img73.jpg', 'summary' => 'Chất liệu Cotton Uni được chọn với tính năng thấm hút tốt và thoáng mát, giúp cơ thể luôn cảm thấy thoải mái. Kỹ thuật in cao được áp dụng để tạo ra các họa tiết chất lượng cao trên sản phẩm. Đây là một áo thun Polo, được thiết kế với bo cổ và trụ sử dụng bo Poly có màu sắc khác nhau', 'hot' => 0, 'status' => 1, 'slug' => 'ao-polo-co-be-tay-ngan-vai-cotton-2-chieu-tham-hut-phoi-mau-dang-rong-don-gian-seventy-seven-02', 'category_id' => 1, 'brand_id' => 2, 'created_at' => now()],
            ['name' => 'Áo Polo Cổ Bẻ Tay Ngắn Vải Cá Sấu 4 Chiều Thoáng Mát Biểu Tượng Dáng Vừa Đơn Giản PREMIUM 30', 'price' => 257000, 'sale_price' => null, 'images' => 'img83.jpg', 'summary' => 'Chất liệu Cá Sấu Cotna, với thành phần 95% Polyester và 5% Spandex, không chỉ mang lại sự thoải mái nhờ ít vón cục và khả năng nhanh khô, mà còn thân thiện với môi trường và thoáng khí. Kỹ thuật thêu 2D được áp dụng, tạo ra các họa tiết chất lượng cao trên sản phẩm.', 'hot' => 1, 'status' => 1, 'slug' => 'ao-polo-co-be-tay-ngan-vai-ca-sau-4-chieu-thoang-mat-bieu-tuong-dang-vua-don-gian-premium-30', 'category_id' => 1, 'brand_id' => 3, 'created_at' => now()],
            ['name' => 'Áo Polo Cổ Bẻ Tay Ngắn Sợi Nhân Tạo Thoáng Mát Trơn Dáng Vừa Đơn Giản Gu Tối Giản M18', 'price' => 397000, 'sale_price' => 193000, 'images' => 'img9.jpg', 'summary' => 'Chất liệu Seamless Polyamide Spandex là sự kết hợp hoàn hảo giữa 60% Polyamide và 40% Spandex, mang lại nhiều tính năng ưu việt. Công nghệ Seamless giúp giảm thiểu đường may, tạo ra sản phẩm liền mạch, mang lại cảm giác thoải mái nhất khi mặc.', 'hot' => 0, 'status' => 1, 'slug' => 'ao-polo-co-be-tay-ngan-soi-nhan-tao-thoang-mat-tron-dang-vua-don-gian-gu-toi-gian-m18', 'category_id' => 1, 'brand_id' => 4, 'created_at' => now()],
            ['name' => 'Áo Polo Cổ Bẻ Tay Ngắn Cá Sấu 4 chiều Nhanh Khô Phối Màu Dáng Vừa Đơn Giản PREMIUM 28', 'price' => 277000, 'sale_price' => null, 'images' => 'img103.jpg', 'summary' => 'Chất liệu Cá Sấu Poly Spandex, với thành phần chủ yếu là 95% Polyester và 5% Spandex, mang lại nhiều ưu điểm. Với khả năng mau khô và thoáng mát, nó là sự lựa chọn lý tưởng cho những ngày nắng nóng.', 'hot' => 0, 'status' => 1, 'slug' => 'ao-polo-co-be-tay-ngan-ca-sau-4-chieu-nhanh-kho-phoi-mau-dang-vua-don-gian-premium-28', 'category_id' => 1, 'brand_id' => 5, 'created_at' => now()],

            #Quần
            ['name' => 'Quần Tây Lưng Gài Sợi Nhân Tạo Co Giãn Trung Bình Trơn Dáng Vừa Đơn Giản Non-Iron 19', 'price' => 347000, 'sale_price' => null, 'images' => 'img0113.jpg', 'summary' => 'Chất liệu Poly Rayon Spandex, với thành phần gồm 82% Polyester, 14% Rayon và 4% Spandex, mang lại nhiều ưu điểm. Với khả năng co giãn tốt, sản phẩm này cho phép bạn thoải mái di chuyển mà không bị gò bó.', 'hot' => 0, 'status' => 1, 'slug' => 'ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-don-gian-seventy-seven-22', 'category_id' => 3, 'brand_id' => 1, 'created_at' => now()],
            ['name' => 'Quần Jean Lưng Gài Ống Đứng Vải Cotton Co Giãn Trung Bình Trơn Dáng Vừa Đơn Giản PREMIUM 39', 'price' => 427000, 'sale_price' => null, 'images' => 'img0123.jpg', 'summary' => 'Quần jean lưng gài ôm dáng, sử dụng vải cotton co giãn trung bình, có form tròn vừa vặn. Đơn giản nhưng mang đẳng cấp, phong cách Premium, sản phẩm này là sự kết hợp hoàn hảo giữa thoải mái và phong cách.', 'hot' => 0, 'status' => 1, 'slug' => 'quan-jean-lung-gai-ong-dung-vai-cotton-co-gian-trung-binh-tron-dang-vua-don-gian-premium-39', 'category_id' => 3, 'brand_id' => 2, 'created_at' => now()],
            ['name' => 'Quần Dài Lưng Gài Ống Đứng Vải Denim Đứng Dáng Trơn Dáng Vừa Đơn Giản PREMIUM 58', 'price' => 397000, 'sale_price' => null, 'images' => 'img0133.jpg', 'summary' => 'Quần chất liệu Kaki Thun, với 95% Cotton và 5% Spandex, là lựa chọn hoàn hảo cho sự thoải mái và co giãn. Đặc biệt, sản phẩm này bền màu, giữ màu sắc sáng bóng qua nhiều lần giặt. Thiết kế có ngăn túi nhỏ đồng hồ và cạp thắt lưng sử dụng cùng loại vải', 'hot' => 1, 'status' => 1, 'slug' => 'quan-dai-lung-gai-ong-dung-vai-denim-dung-dang-tron-dang-vua-don-gian-premium-58', 'category_id' => 3, 'brand_id' => 3, 'created_at' => now()],
            ['name' => 'Quần Short Lưng Gài Dưới Gối Vải Jean Mặc Bền Wash Nhẹ Dáng Vừa Giá Tốt Seventy Seven 29', 'price' => 277000, 'sale_price' => 221000, 'images' => 'img0143.jpg', 'summary' => 'Quần jean chất liệu Cotton, với thành phần 100% Cotton, đảm bảo sự thoải mái và độ bền của sản phẩm. Đặc biệt, sử dụng kỹ thuật thêu 2D để tạo ra các họa tiết chất lượng cao, làm nổi bật và làm mới phong cách của sản phẩm.', 'hot' => 0, 'status' => 1, 'slug' => 'quan-short-lung-gai-duoi-goi-vai-jean-mac-ben-wash-nhe-dang-vua-gia-tot-seventy-seven-29', 'category_id' => 3, 'brand_id' => 4, 'created_at' => now()],
            ['name' => 'Quần Dài Lưng Thun Ống Ôm Vải Thun Co Giãn Biểu Tượng Dáng Vừa Thể Thao Beginner 08', 'price' => 257000, 'sale_price' => 205000, 'images' => 'img0153.jpg', 'summary' => 'Chất liệu vải thun Poly 2 Da, với thành phần 90% Polyester và 10% Spandex, mang lại sự thoải mái và co giãn. Sản phẩm này có khả năng hút ẩm tốt, giúp cơ thể luôn khô ráo và thoáng mát. Đồng thời, được thiết kế với nhãn BST riêng, tạo điểm nhấn cá nhân và độc đáo.', 'hot' => 0, 'status' => 1, 'slug' => 'quan-dai-lung-thun-ong-om-vai-thun-co-gian-bieu-tuong-dang-vua-the-thao-beginner-08', 'category_id' => 3, 'brand_id' => 5, 'created_at' => now()],

            #Giày
            ['name' => 'Giày Casual Phụ Kiện Miền Gió Cát 19', 'price' => 677000, 'sale_price' => null, 'images' => 'img016.jpg', 'summary' => 'Đôi giày sử dụng chất liệu Microfiber với lớp lót thân và lưỡi gà làm từ mousse 3mm, kết hợp với lớp mesh êm chân. Đế talon và lớp mousse 3.5mm mang lại sự thoải mái khi đi. Đế cao su cung cấp độ bám và bền bỉ. ', 'hot' => 1, 'status' => 1, 'slug' => 'giay-casual-phu-kien-mien-gio-cat-19', 'category_id' => 4, 'brand_id' => 1, 'created_at' => now()],
            ['name' => 'Giày Tây Lười Da Phụ Kiện Nguyên Bản A4 2023', 'price' => 797000, 'sale_price' => 557000, 'images' => 'img0171.jpg', 'summary' => 'Giày Tây Lười Nguyên Bản A4 2022 được làm từ chất liệu chính là da bò 100%, kết hợp với lớp lót bằng da heo, tạo cảm giác êm ái và sang trọng. Sản phẩm này có mảnh thun co giãn kéo dài từ cổ giày xuống dưới mắt cá, nhưng không dài đến đế giày, tạo sự thoải mái khi sử dụng.', 'hot' => 0, 'status' => 1, 'slug' => 'giay-tay-loi-da-phu-kien-nguyen-ban-a4-2023', 'category_id' => 4, 'brand_id' => 2, 'created_at' => now()],
            ['name' => 'Giày Casual Da Phụ Kiện Miền Gió Cát 13', 'price' => 657000, 'sale_price' => 463000, 'images' => 'img018.jpg', 'summary' => 'Đôi giày được làm từ chất liệu chính là da bò, mang lại độ bền và đẹp tự nhiên. Sản phẩm này đi kèm với lớp lót thân và lưỡi gà làm từ mousse 3mm, kết hợp với lớp mesh êm chân, tạo cảm giác thoải mái và thoáng mát.', 'hot' => 1, 'status' => 1, 'slug' => 'giay-casual-da-phu-kien-mien-gio-cat-13', 'category_id' => 4, 'brand_id' => 3, 'created_at' => now()],
            ['name' => 'Giày Casual Phụ Kiện Miền Gió Cát 15', 'price' => 487000, 'sale_price' => null, 'images' => 'img019.jpg', 'summary' => 'Giày được làm từ chất liệu Microfiber, tạo cảm giác mềm mại và thoải mái. Lót vòng cổ bằng Microfiber giúp tăng thêm sự êm ái khi đeo. Sản phẩm này có lớp lót thân và lưỡi mũi làm từ mousse 3mm, kết hợp với lớp mesh êm chân, mang lại sự thoải mái và thoáng mát.', 'hot' => 0, 'status' => 1, 'slug' => 'giay-casual-phu-kien-mien-gio-cat-15', 'category_id' => 4, 'brand_id' => 4, 'created_at' => now()],
            ['name' => 'Giày Tây Cột Dây Da Phụ Kiện No Style 45 2023', 'price' => 987000, 'sale_price' => null, 'images' => 'img020.jpg', 'summary' => 'CHUNKY DERBY - Giày buộc dây, phần thân giày có những lỗ xỏ dây sẽ được may lên phần trên của mũi giày. Vẫn mang kiểu dáng của Derby nhưng kiểu giày này không đem lại cảm giác trang trọng quá mức mà thêm vào là nét trẻ trung, hiện đại và năng động trên nền đế cao hầm hố.', 'hot' => 0, 'status' => 1, 'slug' => 'giay-tay-cot-day-da-phu-kien-no-style-45-2023', 'category_id' => 4, 'brand_id' => 5, 'created_at' => now()],

            #Phụ kiện
            ['name' => 'PKTT Nón Vải Cotton Phụ Kiện #Y2010 02', 'price' => 97000, 'sale_price' => 67000, 'images' => 'img021.jpg', 'summary' => 'Mũ được làm từ chất liệu kaki 100% cotton, với đặc tính dày dặn mang lại độ bền và tạo form mũ cứng và đẹp mắt. Khóa kim loại không gỉ giúp dễ dàng điều chỉnh theo form đầu để phù hợp và thoải mái khi đội.', 'hot' => 0, 'status' => 1, 'slug' => 'pktt-non-vai-cotton-phu-kien-y2010-02', 'category_id' => 5, 'brand_id' => 5, 'created_at' => now()],
            ['name' => 'PKTT Dây Nịt Da #Y2010 D14', 'price' => 285000, 'sale_price' => null, 'images' => 'img022.jpg', 'summary' => 'Dây làm từ 100% da bò thật, nổi bật với độ bền bỉ và vẻ sang trọng, tinh tế. Đầu khóa làm từ hợp kim Zinc contract, bề mặt sáng bóng và đẹp mắt, đồng thời đặc biệt không bị gỉ sét, giữ cho sản phẩm luôn mới mẻ và bền đẹp theo thời gian.', 'hot' => 0, 'status' => 1, 'slug' => 'pktt-day-nit-da-y2010-d14', 'category_id' => 5, 'brand_id' => 2, 'created_at' => now()],
            ['name' => 'Túi Đeo Vintage Phụ Kiện Miền Gió Cát 10', 'price' => 377000, 'sale_price' => 263000, 'images' => 'img023.jpg', 'summary' => 'Túi được làm từ vải Canvas, kết hợp 65% Polyester và 35% Cotton, tạo ra sự bền bỉ và thoải mái khi sử dụng. Lót bên trong được làm từ vải 210 Korea, đảm bảo chất lượng và độ bền. Sử dụng dây kéo YKK #5, đảm bảo sự mượt mà và đáng tin cậy khi sử dụng.', 'hot' => 1, 'status' => 1, 'slug' => 'tui-deo-vintage-phu-kien-mien-gio-cat-10', 'category_id' => 5, 'brand_id' => 3, 'created_at' => now()],
            ['name' => 'PKTT Vớ #Y2010 V19 Combo 5', 'price' => 147000, 'sale_price' => null, 'images' => 'img024.jpg', 'summary' => 'Cổ vớ được thiết kế cao, hỗ trợ đệm cổ chân, giúp giảm áp lực và đảm bảo sự thoải mái khi di chuyển. Kiểu dệt mắt lưới tăng độ thông thoáng, giúp cân bằng nhiệt độ và hỗ trợ lưu thông không khí. Linh động với đa số size chân người dùng, giúp vớ ôm vừa và thoải mái.', 'hot' => 0, 'status' => 1, 'slug' => 'pktt-vo-y2010-v19-combo-5', 'category_id' => 5, 'brand_id' => 4, 'created_at' => now()],
            ['name' => 'Kính Mát Louis Vuitton LV Waimea Sunglasses Z1082E', 'price' => 16850000, 'sale_price' => 15450000, 'images' => 'img0253.jpg', 'summary' => 'Phong cách của sunglasses của Louis Vuitton có thể được mô tả là sang trọng, hiện đại và lịch lãm. Chúng thường có thiết kế tinh tế, đẳng cấp với các chi tiết đặc trưng của thương hiệu, như logo LV hay các họa tiết phong cách.', 'hot' => 1, 'status' => 1, 'slug' => 'kinh-mat-louis-vuitton-lv-waimea-sunglasses-z1082e', 'category_id' => 5, 'brand_id' => 1, 'created_at' => now()],

        ]);
    }
}