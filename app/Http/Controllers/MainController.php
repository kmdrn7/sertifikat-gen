<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => [
                "Hakim Akbaru Sulthony",
                "Ahmad Maulana Jihad",
                "Yanu Adi Nugraha",
                "Intan Fitri Rachmawati",
                "Agustin Anisa Fitri",
                "Ilham Dwi Kurniawan",
                "Mohamad Akbar Fadlika",
                "Andro Aprila Adiputra",
                "Ekky Regita Laurentino",
                "Helmi Dharmawan",
                "Muh Nisar Yanuar Utomo",
                "Milati Rohmatus Sakinah",
                "Rochimatus Sa'diyah",
                "Muhammad Riza Nafis",
                "I Putu Gede Verdhangga",
                "Ardiansyah Dwi Saputra",
                "Sabilah Ferdiana F",
                "Muhammad Ghozy Al G",
                "Alfian Haidar Setyawan",
                "Zahrotul Chumairo",
                "Muhammad Riza Bachtiar",
                "Muhammad Satriyo Aji",
                "Dary Winata Nugraha D",
                "Muhammad Izzat",
                "Iqbal Nur Imansyah",
                "Sarah Ummul Afifah",
                "Sylvi Indryana Safira",
                "Muhammad Mujir",
                "Marisna Nurul Fadhila",
                "Belinda Anindya K.W.",
                "Eka Darma Widyana",
                "Andi Abdul Salam Sabil",
                "Sabila Jamal",
                "Fajar Septian Nugraha",
                "Muhammad Fadhli U",
                "Gilang Taufiq Arsyannur",
                "Ilyas Yudhistira K",
                "Muhammad Irfan Shiddiq",
                "Muhammad Aziz Karebet",
                "Ulima Inas Shabrina",
                "Tiara Puspita Anggraeni",
                "Lina Dwi Pratiwi",
                "Nawa Almahasin",
                "Goldy Najma Adli K",
                "M. Hakim Mumtazul Wafa",
                "Rizky Adam Pambudi",
                "I Md Akira Ivandio Agusta",
                "Aditya Indra Pramana",
                "I Gede Kresna Putra A.",
                "Gabriela Rifka Duanti",
                "Yudha Gebri Rastuama",
                "Putra Edi Tia",
                "Etasa Karenisa",
                "Ilma Uqiyanis Saged",
                "Diana Fitri",
                "Mohammad Ali Roja'I",
                "Yuliarta Rizki Nusantoko",
                "Hasna Ayu Roida",
                "Dimas Raka Dewanggana",
                "Aditya Irfan Junianto",
                "Maryam Khansa' M",
                "Julardo Satriawan",
                "Fathoni Ali Mukti",
                "Talita Iza Nurazmi",
                "M Rijal Al Fariz",
                "Alifano Reinanda A.F",
                "Yonathan Susanto",
                "Yokha Nur Alamsyah",
                "Nina Fajriyah Citra",
                "Bazliah Agvyan Dearni",
                "Nurtanti",
                "Jasica Ardana H",
                "Praditya Nafiis M",
                "Septian Tri Wahyuni",
                "Rinda Cahya Nahdliana",
                "Zazabillah Sekar Puranti",
                "Laily Febian Fitriani",
                "Silfiana Nur Hamida",
                "Trisha Mediana",
                "Affan Abiyyu",
                "Rosyidah Amini Suci",
                "Nadia Azahro C",
                "Ahmad Faiz Kamaludin",
                "Luri Shafira Amalia",
                "Irvan Eksa Mahendra",
                "Galuh Nurul Istiqomah",
                "Muhammad Anand Fa",
                "M. Sulthan Rafif B.",
                "Ani Dwi Astuti",
                "Ditta Fania Budianti",
                "Nabila Zalfa",
                "Nova Andre Saputra"
            ],
            'img' => 'uploads/img/0001.jpg'
        ];

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('print', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('print.pdf');
    }
}
