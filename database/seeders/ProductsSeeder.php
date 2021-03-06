<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new Product();
        $products->name         = "Đồi Thỏ";
        $products->price        = 299000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'bank-4.0.jpg';
        $products->quantity     = 11;
        $products->category_id  = 1 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Nguyễn Nhi';
        $products->save();    

        $products = new Product();
        $products->name         = " Đi tìm lẽ sống";
        $products->price        = 199000;
        $products->description  = 'Hay ,Ý nghĩa';
        $products->image        = 'combo-chuyen-nghe-chuyen-doi.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Herman Melville';
        $products->save();    

        $products = new Product();
        $products->name         = "Vũ trụ";
        $products->price        = 300000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-buoi-sang-dieu-ky.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Ernest Hemingway';
        $products->save();    

        $products = new Product();
        $products->name         = "A Survivor's Tale";
        $products->price        = 299000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-buoi-sang-dieu-ky.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Haruki Murakami';
        $products->save();    

        $products = new Product();
        $products->name         = "Chuông nguyện hồn ai";
        $products->price        = 310000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-buoi-sang-dieu-ky.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Antoine de Saint-Exupéry';
        $products->save();    

        $products = new Product();
        $products->name         = "Hoàng tử bé";
        $products->price        = 99000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-buoi-sang-dieu-ky.jpg';
        $products->quantity     = 11;
        $products->category_id  = 4 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Cormac McCarthy';
        $products->save();    

        $products = new Product();
        $products->name         = "Trăm năm cô đơn ";
        $products->price        = 300000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 10 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Gabriel Garcia Marquez';
        $products->save();    

        $products = new Product();
        $products->name         = "Phía Đông vườn Địa đàng";
        $products->price        = 310000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 8 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'John Steinbeck';
        $products->save();    

        $products = new Product();
        $products->name         = "Anh em nhà Karamazov";
        $products->price        = 125000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Ai hiểu được lòng em";
        $products->price        = 150000;
        $products->description  = 'Câu chuyện tình yêu giưã Giang Nhân Ly và Mạc Tu Lăng';
        $products->image        = 'tung-buoc-chan-no-hoa.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Lục Xu';
        $products->save();    

        $products = new Product();
        $products->name         = "Chứng khoán bách động sản đầu tư";
        $products->price        = 160000;
        $products->description  = 'Thị trường chứng khoán, bách động sản đầy biến động ';
        $products->image        = 'tls-sach-chung-khoan-bat-dong-san-dau-tu.png';
        $products->quantity     = 11;
        $products->category_id  = 1 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Đừng nói với anh ấy tôi vẫn còn yêu";
        $products->price        = 198000;
        $products->description  = 'Chuyện tình yêu';
        $products->image        = 'combo-hanh-phuc-sang-tao.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Thất tịch không mưa";
        $products->price        = 169000;
        $products->description  = 'Tình yêu, gia đình ...';
        $products->image        = 'combo-hanh-phuc-sang-tao.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();  

        $products = new Product();
        $products->name         = "Cảm ơn vì đã được thương";
        $products->price        = 159000;
        $products->description  = 'Truyện tình cảm';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus1';
        $products->save();  

        $products = new Product();
        $products->name         = "Phong cách sống";
        $products->price        = 190000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Nhân viên giao nhận";
        $products->price        = 160000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   

        $products = new Product();
        $products->name         = "Kinh tế chính trị";
        $products->price        = 350000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'tls-kinh-te-chinh-tri.png';
        $products->quantity     = 11;
        $products->category_id  = 1 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();  

        $products = new Product();
        $products->name         = "Phong cách sống";
        $products->price        = 370000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-phong-cach-song.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   
         
        $products = new Product();
        $products->name         = "Đường mây trên đất hoa";
        $products->price        = 125000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'duong-may-tren-dat-hoa.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   

        $products = new Product();
        $products->name         = "Buổi sáng diệu kỳ";
        $products->price        = 150000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   

        $products = new Product();
        $products->name         = "Sách khởi nghiệp";
        $products->price        = 200000;
        $products->description  = 'Bí quyết khởi nghiệp cho người mới bắt nghe';
        $products->image        = 'tls-sach-khoi-nghiep.png';
        $products->quantity     = 11;
        $products->category_id  = 1 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Nhân vật bài học kinh doanh";
        $products->price        = 279000;
        $products->description  = 'Câu chuyện kinh doanh';
        $products->image        = 'tls-nhan-vat-bai-hoc-kinh-doanh.png';
        $products->quantity     = 11;
        $products->category_id  = 1 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Muôn kiếp nhân sinh";
        $products->price        = 125000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'muon-kiep-nhan-sinh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Sách Mới";
        $products->price        = 120000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Anh em không tiếc em tiếc thanh xuân";
        $products->price        = 109000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   

        $products = new Product();
        $products->name         = "Ngoại giao của chính quyền sài gòn";
        $products->price        = 140000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'ngoai-giao-cua-chinh-quyen-sai-gon.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Anh em nhà Karamazov";
        $products->price        = 209000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Trạng Quỷnh";
        $products->price        = 23000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Doremon";
        $products->price        = 25000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();  

        $products = new Product();
        $products->name         = "Công chúa ngủ trong rừng";
        $products->price        = 89000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Cô bé bán diêm";
        $products->price        = 160000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 3 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Làm chủ tuổi 20";
        $products->price        = 199000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 4 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Luật tâm thức";
        $products->price        = 159000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 4 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();  

        $products = new Product();
        $products->name         = "Cuộc chiến lỗ đen";
        $products->price        = 123000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 4 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Lược sử thời gian";
        $products->price        = 120000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 4 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Nhà giả kim";
        $products->price        = 124000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 6 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Cafe sánng cùng Tony";
        $products->price        = 125000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 6 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Trên đường băng";
        $products->price        = 126000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 6 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Giá như ";
        $products->price        = 340000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 6 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Chân trời góc bể";
        $products->price        = 199000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 5 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Mẹ con sư tử";
        $products->price        = 99000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat.jpg';
        $products->quantity     = 11;
        $products->category_id  =  8;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Lập kế hoạch kinh doanh ";
        $products->price        = 124000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'lap-ke-hoach-kinh-doanh-hieu-qua.jpg';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Chuyện nghề, chuyện đời";
        $products->price        = 199000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 8 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Yêu em từ cái nhìn đầu tiên";
        $products->price        = 149000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 5 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Bên nhau trọn đời";
        $products->price        = 180000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 5 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   

        $products = new Product();
        $products->name         = "Ngủ cùng sói";
        $products->price        = 230000;
        $products->description  = 'Truyện ngôn tình';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 5 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();   

        $products = new Product();
        $products->name         = "Marketing bán hàng";
        $products->price        = 240000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'tls-sach-marketing-ban-hang.png';
        $products->quantity     = 11;
        $products->category_id  = 7 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Mãi mãi tuổi 20";
        $products->price        = 110000;
        $products->description  = 'Sách tiểu thuyết';
        $products->image        = 'tls-sach-marketing-ban-hang.png';
        $products->quantity     = 11;
        $products->category_id  = 2 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Đường mây trên đất hoa";
        $products->price        = 154000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'duong-may-tren-dat-hoa.jpg';
        $products->quantity     = 11;
        $products->category_id  = 9 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    

        $products = new Product();
        $products->name         = "Lỡ chúng ta FA cả đời thì sao";
        $products->price        = 267000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'combo-an-xanh-song-lanh.jpg';
        $products->quantity     = 11;
        $products->category_id  = 5 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save(); 

        $products = new Product();
        $products->name         = "Lịch sử thế giới";
        $products->price        = 120000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'lich-su-the-gioi.jpg';
        $products->quantity     = 11;
        $products->category_id  = 10;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();  

        $products = new Product();
        $products->name         = "Ma bùn lưu manh";
        $products->price        = 150000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'ma-bun-luu-manh-mt.jpg';
        $products->quantity     = 11;
        $products->category_id  = 4 ;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();  

        $products = new Product();
        $products->name         = "Ca dao tục ngữ";
        $products->price        = 260000;
        $products->description  = 'Ý nghĩa nhân văn, Mô tả nội dung đời thực';
        $products->image        = 'bo-sach-500-cau-chuyen-dao-duc.jpg';
        $products->quantity     = 11;
        $products->category_id  = 9;
        $products->status       = 'Còn Hàng';
        $products->supplier_id  = 'Nhà cung cấp Phát Đạt';
        $products->author_id    = 'Albert Camus';
        $products->save();    
    }
}
