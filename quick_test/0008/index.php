<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết 1 class PHP
    có tên là Student với các thuộc tính
    1 - tên
    2 - ngày tháng năm sinh ( định dạng dd/mm/YY )
    3 - quê quán
    4 - giới tính
    5 - điểm của sinh viên đó ( dạng mảng )
    ví dụ array(
    'toan' => 0,
    'ly' => 0,
    'hoa' => 0
    )
    đây khi là khai báo mặc định khi khởi tạo đối tượng sẽ truyền điểm vào
    Hãy khai báo các phương thức để in ra
    1 - tạo ra 1 method constructor cho phép truyển vào các thuộc tính của sinh viên
    2 - thông tin đầy đủ của sinh viên đó tên method là getFullInfo()
    3 - tuổi của sinh viên hiện tại getAgeStudent()
    4 - điểm trung bình 3 môn của sinh viên đó
    5 - xếp loại học tập ( > 8 giỏi , > 7 khá , > 5 trung bình , < 5 yếu kém</h1>

Cuối cùng hãy khởi tạo đối tượng từ class này và truyền vào đầy đủ thông tin
sau đó lần lượt gọi các phương thức trong class mà bạn đã tạo

</body>
</html>

<?php
class Student
{
    private $ten;
    private $ngaySinh;
    private $queQuan;
    private $gioiTinh;
    private $diem = array();

    public function __construct($ten,$ngaySinh,$queQuan,$gioiTinh,$toan,$ly,$hoa){
        $this->ten = $ten;
        $this->ngaySinh = $ngaySinh;
        $this->queQuan = $queQuan;
        $this->gioiTinh = $gioiTinh;
        $this->diem[] =$toan;
        $this->diem[] =$ly;
        $this->diem[] =$hoa;
    }

    public function getFullInfo(){
        echo 'Tên:' . $this->ten;
        echo '<br>';
        echo 'Ngày Sinh:' . $this->ngaySinh;
        echo '<br>';
        echo 'Quê quán:' . $this->queQuan;
        echo '<br>';
        echo 'Giới tính:' . $this->gioiTinh;
        echo '<br>';
        foreach ($this->diem as $key => $val){
            echo 'Điểm:' . $val;
        }
    }

    public function getAgeStudent(){
        $birth = date_create($this->ngaySinh);
        $now = date_create(date("d-m-Y"));
        $inteval = date_diff($birth,$now);
        echo 'Tuổi:' . $inteval->format('%R%y years');
    }

    public function DiemTrungBinh(){
        $diem_trung_binh = 0;
        $so_mon =0;
        foreach ($this->diem as $key => $value){
            $diem_trung_binh +=$value;
        }
        return ($diem_trung_binh/$so_mon);
    }

    public function xeploai(){
        if($this->DiemTrungBinh()>8) $xeploai = "Giỏi";
        elseif($this->DiemTrungBinh()>7 && $this->DiemTrungBinh()<=8) $xeploai = "Khá";
        elseif($this->DiemTrungBinh()>5 && $this->DiemTrungBinh()<=7) $xeploai ="Trung bình";
        else $xeploai = "Yếu kém";
        echo '<br/>';
        echo 'Xếp loại:' . $xeploai;
    }
}

$student = new Student('Cù Tuấn Anh','24/11/1998','Hà Nội','Nam',5,5,10);

$student->getFullInfo();

$student->getAgeStudent();

$student->DiemTrungBinh();

$student->xeploai();


?>