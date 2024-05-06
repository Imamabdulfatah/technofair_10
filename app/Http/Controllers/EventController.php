<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class EventController extends Controller
{
    public function satu()
    {
        return view('event/webinarWorkshop', [
            "title" => "Internet Of Things",
            "active" => "bigdata",
            "navbar" => "event",
            "type" => "seminar",
            "image" => "/asset/seminar/datascience.jpg",
            "deskripsi" => "Seminar ini akan mengangkat tema Internet of Things (IoT). Internet of Things (IoT) merupakan sebuah infrastruktur jaringan global, yang dapat menghubungkan perangkat keras dan virtual melalui eksploitasi data capture serta kemampuan komunikasi. Tujuannya untuk menawarkan objek, sensor dan kemampuan koneksi agar dapat menyediakan layanan dan aplikasi kooperatif yang independen.
            Seminar ini akan mengangkat tema UI/UX. UI/UX designer adalah kedua bidang yang memiliki fungsi untuk mengembangkan desain produk. User interface atau UI designer memiliki tugas untuk membangun interface dalam perangkat lunak yang berfokus pada visual atau penampilan, warna, dan segala hal yang berkaitan dengan kreativitas.",
            "tiket1" => "IoT atau UI/UX",
            "tiket2" => "1 tiket 10.000  ||  2 tiket atau 2 orang  15.000",
            "tiket3" => "2 tiket 18.000 (1 orang)  |  2 tiket  25.000 (2 orang)",
            "tanggal" => "1 Juli 2023 | 09.00 – (selesai) ",
            "tempat" => "Auditorium F6, Kampus F6, Universitas Gunadarma", 
            "contact1" => "089630685597 | Kalyca",
            // "contact2" => "",
            "pembicara1" => "/img/pembicara/iot-1.jpg", 
            "pembicara2" => "/img/pembicara/uiux-2.jpg", 
            "nama_pembicara1" => "I Komang Sugiarta",
            "nama_pembicara2" => "Ahmad Siddiq Nurahman",
            "ket_pembicara1" => "Dosen Gunadarma",
            "ket_pembicara2" => "Engineer IOT",
            "img2" => "",
            "lokasi1" => "https://www.google.com/maps/place/Kampus+F6+Universitas+Gunadarma/@-6.3460951,106.8508464,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ec4e3dea472f:0x1331b28157493b88!8m2!3d-6.3460951!4d106.8534213!16s%2Fg%2F11cnc12zgb?entry=ttu",
            "lokasi2" => "",
            "openclose" => Register::all(),
        ]);
    }

    public function dua()
    {
        return view('event/webinarWorkshop', [
            "title" => "UI UX",
            "active" => "smartcity",
            "navbar" => "event",
            "type" => "seminar",
            "image" => "/asset/seminar/ui-ux.png",
            "deskripsi" => "Acara seminar tema UI/UX merupakan platform yang menghadirkan wawasan mendalam tentang pentingnya pengalaman pengguna (User Experience) yang baik dalam desain antarmuka (User Interface). Seminar ini memberikan kesempatan kepada peserta untuk mempelajari prinsip-prinsip dasar dalam mendesain antarmuka yang intuitif, menarik, dan mudah digunakan. Para ahli terkemuka di bidang UI/UX akan berbagi pengetahuan, tren terkini, dan praktik terbaik dalam menciptakan pengalaman pengguna yang luar biasa melalui presentasi inspiratif dan studi kasus yang menginspirasi. Peserta seminar akan mendapatkan pemahaman yang lebih mendalam tentang bagaimana menerapkan desain berbasis pengguna untuk meningkatkan kualitas produk dan layanan, meningkatkan kepuasan pengguna, serta mencapai kesuksesan bisnis. ",
            "tiket1" => "IoT atau UI/UX",
            "tiket2" => "10K /Tiket",
            "tiket3" => "15K /2 Tiket",
            "tanggal" => "Sabtu, 22 Juli 2023 | 09.00 – (Selesai) ",
            "tempat" => "Auditorium D461, Kampus D, Universitas Gunadarma, Kelapa Dua,  Depok", 
            "contact1" => "089531731877 (primanita) uiux",
            // "contact2" => "",
            "pembicara1" => "/img/pembicara/uiux-1.jpg", 
            "pembicara2" => "/img/pembicara/iot-2.jpg", 
            "nama_pembicara1" => "Synthia",
            "nama_pembicara2" => "Galuh Akhdandika",
            "ket_pembicara1" => " Designer at Lazada",
            "ket_pembicara2" => "UI UX Specialist",
            "img2" => "",
            "lokasi1" => "https://www.google.com/maps/place/Universitas+Gunadarma+Kampus+D/@-6.3690506,106.8311452,17z/data=!4m6!3m5!1s0x2e69ed01b68548ad:0x89aea3afc2b2e77d!8m2!3d-6.3691146!4d106.8331944!16s%2Fg%2F11r_tyb614?entry=ttu",
            "lokasi2" => "",
            "openclose" => Register::all(),
        ]);
    }

    public function tiga()
    {
        return view('event/webinarWorkshop', [
            "title" => "Product Design",
            "active" => "digital-marketing",
            "navbar" => "event",
            "type" => "workshop",
            "image" => "/asset/workshop/design.jpg",
            "deskripsi" => "Acara seminar tema Product Design adalah platform yang menggabungkan kreativitas, inovasi, dan pengalaman pengguna untuk membahas pentingnya desain produk yang unggul. Seminar ini memberikan kesempatan kepada peserta untuk mempelajari prinsip-prinsip inti dalam mendesain produk yang fungsional, estetis, dan memenuhi kebutuhan pengguna. Para ahli terkemuka di industri ini akan berbagi wawasan mendalam, strategi desain, dan pendekatan praktis untuk menciptakan produk yang menarik, memikat, dan memberikan pengalaman yang luar biasa kepada pengguna. Peserta seminar akan mendapatkan pemahaman yang lebih baik tentang bagaimana memahami kebutuhan pengguna, melakukan riset pasar, mengintegrasikan teknologi, dan menghasilkan produk yang berhasil di pasaran. ",
            "tiket1" => "Rp. 25.OOO",
            "tiket2" => "",
            "tiket3" => "",
            "tanggal" => "Sabtu, 8 Juli 2023 | 09.00 - 12.00",
            "tempat" => "Zoom Cloud Meeting", 
            "contact1" => "08998019141 (sabrina - workshop)",
            "pembicara1" => "/img/pembicara/product-designer.jpeg", 
            "pembicara2" => "", 
            "nama_pembicara1" => "Ecky Alimansyah",
            "nama_pembicara2" => "",
            "ket_pembicara1" => "Product Designer at Moladin",
            "ket_pembicara2" => "",
            "img2" => "d-none",
            "lokasi1" => "",
            "lokasi2" => "d-none",
            "openclose" => Register::all(),
        ]);
    }
    public function empat()
    {
        return view('event/webinarWorkshop', [
            "title" => "Sofware Engineering",
            "active" => "ui-design",
            "navbar" => "event",
            "type" => "workshop",
            "image" => "/asset/workshop/software.png",
            "deskripsi" => "Acara seminar tema Software Engineering adalah platform yang menghadirkan pengetahuan mendalam dan pemahaman tentang praktik terbaik dalam pengembangan perangkat lunak. Seminar ini memberikan kesempatan kepada peserta untuk mempelajari metodologi, alat, dan proses yang diperlukan untuk merancang, mengembangkan, dan mengelola sistem perangkat lunak yang kompleks dan handal. Para ahli terkemuka di industri ini akan berbagi wawasan tentang teknik pengkodean, pengujian, manajemen proyek, dan kolaborasi tim yang efektif. Acara ini merupakan kesempatan yang tak ternilai bagi para profesional, pengembang perangkat lunak, dan praktisi di bidang teknologi untuk meningkatkan keterampilan mereka, memperluas jaringan, dan tetap terkini dengan tren terbaru dalam industri pengembangan perangkat lunak.",
            "tiket1" => "Rp. 25.OOO",
            "tiket2" => "",
            "tiket3" => "",
            "tanggal" => "Minggu, 9 Juli 2023 | 09.00 - 12.00",
            "tempat" => "Zoom Cloud Meeting", 
            "contact1" => "628998019141 (sabrina - workshop)",
            "pembicara1" => "/img/pembicara/software.jpg", 
            "pembicara2" => "", 
            "nama_pembicara1" => "Billy Sutomo",
            "nama_pembicara2" => "",
            "ket_pembicara1" => "Tech Infra Lead",
            "ket_pembicara2" => "",
            "img2" => "d-none",
            "lokasi1" => "",
            "lokasi2" => "d-none",
            "openclose" => Register::all(),
        ]);
    }
    public function lima()
    {
        return view('event/competitionCp', [
            "title" => "Competitive Programming",
            "active" => "infografic",
            "navbar" => "event",
            "image" => "/asset/competition/competitive2.jpg",
            "deskripsi" => "Kompetisi Programming Kompetitif adalah ajang di mana para pemrogram bersaing dalam menyelesaikan serangkaian tantangan pemrograman yang rumit dan membutuhkan pemikiran cepat serta keterampilan algoritma yang kuat. Dalam kompetisi ini, para peserta diberikan masalah-masalah yang memerlukan pemecahan efisien menggunakan bahasa pemrograman tertentu, seringkali dengan batasan waktu yang ketat. Mereka harus menghasilkan solusi yang tepat dan efisien dalam waktu yang terbatas, dengan tujuan mencetak sebanyak mungkin poin atau mengalahkan peserta lain. Kompetisi programming kompetitif tidak hanya menguji pengetahuan teknis dan keterampilan pemrograman, tetapi juga kemampuan untuk berpikir secara kreatif, menemukan strategi yang optimal, dan menghadapi tekanan dalam situasi kompetitif.",
            "openclose" => Register::all(),
           
        ]);
    }
    public function enam()
    {
        return view('event/competitionCf', [
            "title" => "Capture The Flag",
            "active" => "bigdata",
            "navbar" => "event",
            "image" => "/asset/competition/cyber-scurity.jpg",
            "deskripsi" => "Capture the Flag adalah kompetisi yang menguji kecerdikan, strategi, dan kerja tim para pesertanya. Dalam kompetisi ini, tim-tim berlomba untuk merebut bendera lawan dan mengamankan bendera mereka sendiri, sambil berusaha menghindari penangkapan oleh lawan. Dengan berbagai tantangan dan rintangan yang harus diatasi, peserta harus menggunakan keahlian mereka dalam berkomunikasi, merencanakan serangan, dan menjaga pertahanan agar dapat meraih kemenangan. Capture the Flag menghadirkan ketegangan dan keseruan yang tak terduga, memacu adrenalin para peserta, dan menghasilkan momen-momen yang mendebarkan serta strategi yang brilian.",
            "openclose" => Register::all(),
        ]);
    }

}
