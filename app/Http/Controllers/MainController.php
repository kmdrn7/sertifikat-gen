<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MainController extends Controller
{
    public function index()
    {
        set_time_limit(9999);

        $data = [
            'peserta' => [
                [
                    'nama' => "Yudha Febri Rastuama",
                    'nrp' => "2103181001",
                ],
                [
                    'nama' => "Putra Edi Tia",
                    'nrp' => "2103181002",
                ],
                [
                    'nama' => "Etasa Karenisa",
                    'nrp' => "2103181003",
                ],
                [
                    'nama' => "Ilma Uqiyanis Saged",
                    'nrp' => "2103181004",
                ],
                [
                    'nama' => "Diana Fitri",
                    'nrp' => "2103181005",
                ],
                [
                    'nama' => "Muhajirin Ida Ilyas",
                    'nrp' => "2103181006",
                ],
                [
                    'nama' => "Mohammad Ali Roja'I",
                    'nrp' => "2103181007",
                ],
                [
                    'nama' => "Yuliarta Rizki Nusantoko",
                    'nrp' => "2103181008",
                ],
                [
                    'nama' => "Hasna Ayu Roida",
                    'nrp' => "2103181009",
                ],
                    [
                    'nama' => "Alwy Assegaf",
                    'nrp' => "2103181010",
                ],
                    [
                    'nama' => "Dimas Raka Dewanggana",
                    'nrp' => "2103181011",
                ],
                    [
                    'nama' => "Aditya Irfan Junianto",
                    'nrp' => "2103181012",
                ],
                    [
                    'nama' => "Annisa Riandani",
                    'nrp' => "2103181013",
                ],
                    [
                    'nama' => "Maryam Khansa' Mahdiyah",
                    'nrp' => "2103181014",
                ],
                    [
                    'nama' => "Julardo Satriawan",
                    'nrp' => "2103181015",
                ],
                    [
                    'nama' => "Aln Pujo Priambodo",
                    'nrp' => "2103181016",
                ],
                    [
                    'nama' => "Fathoni Ali Mukti",
                    'nrp' => "2103181018",
                ],
                    [
                    'nama' => "Talita Iza Nurazmi",
                    'nrp' => "2103181019",
                ],
                    [
                    'nama' => "Andrew Anggada",
                    'nrp' => "2103181020",
                ],
                    [
                    'nama' => "M Rijal Al Fariz",
                    'nrp' => "2103181021",
                ],

                    [
                    'nama' => "Alifano Reinanda A.F",
                    'nrp' => "2103181022",
                ],
                    [
                    'nama' => "Yonathan Susanto",
                    'nrp' => "2103181023",
                ],
                    [
                    'nama' => "Yokha Nur Alamsyah",
                    'nrp' => "2103181024",
                ],
                    [
                    'nama' => "Reisya Nur Hesika V",
                    'nrp' => "2103181025",
                ],
                    [
                    'nama' => "Muhammad Fitriansyah B.",
                    'nrp' => "2103181026",
                ],
                    [
                    'nama' => "Nina Fajriyah Citra",
                    'nrp' => "2103181027",
                ],
                    [
                    'nama' => "Bazliah Agvyan Dearni",
                    'nrp' => "2103181028",
                ],
                    [
                    'nama' => "Nurtanti",
                    'nrp' => "2103181030",
                ],
                    [
                    'nama' => "Jasica Ardana H",
                    'nrp' => "2103181031",
                ],
                    [
                    'nama' => "Praditya Nafiis M",
                    'nrp' => "2103181032",
                ],
                    [
                    'nama' => "Bimo Prasetyo Afif",
                    'nrp' => "2103181033",
                ],
                    [
                    'nama' => "Septian Tri Wahyuni",
                    'nrp' => "2103181034",
                ],
                    [
                    'nama' => "Muhammad Rivaldin ",
                    'nrp' => "2103181035",
                ],
                    [
                    'nama' => "Rinda Cahya Nahdliana",
                    'nrp' => "2103181036",
                ],
                    [
                    'nama' => "Nadia Ayu Laksmidewi",
                    'nrp' => "2103181037",
                ],
                    [
                    'nama' => "Zazabillah Sekar Puranti",
                    'nrp' => "2103181038",
                ],
                    [
                    'nama' => "Laily Febian Fitriani",
                    'nrp' => "2103181039",
                ],
                    [
                    'nama' => "Silfiana Nur Hamida",
                    'nrp' => "2103181040",
                ],
                    [
                    'nama' => "Trisha Mediana",
                    'nrp' => "2103181041",
                ],
                    [
                    'nama' => "Muhammad Irvan Y",
                    'nrp' => "2103181042",
                ],
                    [
                    'nama' => "Danindra Ihya' M",
                    'nrp' => "2103181043",
                ],
                    [
                    'nama' => "Affan Abiyyu",
                    'nrp' => "2103181044",
                ],
                    [
                    'nama' => "Rosyidah Amini Suci",
                    'nrp' => "2103181045",
                ],
                    [
                    'nama' => "Nadia Azahro C",
                    'nrp' => "2103181046",
                ],
                    [
                    'nama' => "Ahmad Faiz Kamaludin",
                    'nrp' => "2103181047",
                ],
                    [
                    'nama' => "Luri Shafira Amalia",
                    'nrp' => "2103181048",
                ],
                    [
                    'nama' => "Irvan Eksa Mahendra",
                    'nrp' => "2103181049",
                ],
                    [
                    'nama' => "Anwar Yusuf Al B",
                    'nrp' => "2103181050",
                ],
                    [
                    'nama' => "Galuh Nurul Istiqomah",
                    'nrp' => "2103181051",
                ],
                    [
                    'nama' => "Muhammad Anand Fa",
                    'nrp' => "2103181052",
                ],
                    [
                    'nama' => "M. Sulthan Rafif B.",
                    'nrp' => "2103181053",
                ],
                    [
                    'nama' => "Akhlakul Karim Hbp",
                    'nrp' => "2103181054",
                ],
                    [
                    'nama' => "Ani Dwi Astuti",
                    'nrp' => "2103181055",
                ],
                    [
                    'nama' => "Ditta Fania Budianti",
                    'nrp' => "2103181056",
                ],
                    [
                    'nama' => "Nabila Zalfa",
                    'nrp' => "2103181057",
                ],
                [
                    'nama' => "Nova Andre Saputra",
                    'nrp' => "2103181060",
                ],
                    [
                    'nama' => "Hakim Akbaru Sulthony",
                    'nrp' => "2110181001",
                ],
                    [
                    'nama' => "Ahmad Maulana Jihad",
                    'nrp' => "2110181002",
                ],
                    [
                    'nama' => "Refano Pradana Yogatama",
                    'nrp' => "2110181003",
                ],
                [
                    'nama' => "Yanu Adi Nugraha",
                    'nrp' => "2110181004",
                ],
                    [
                    'nama' => "Intan Fitri Rachmawati",
                    'nrp' => "2110181005",
                ],
                    [
                    'nama' => "Agustin Anisa Fitri",
                    'nrp' => "2110181006",
                ],
                    [
                    'nama' => "Ilham Dwi Kurniawan",
                    'nrp' => "2110181007",
                ],
                [
                    'nama' => "Mohamad Akbar Fadlika W",
                    'nrp' => "2110181008",
                ],
                    [
                    'nama' => "Rifqi Fajar Ramdani",
                    'nrp' => "2110181009",
                ],
                    [
                    'nama' => "Andro Aprila Adiputra",
                    'nrp' => "2110181010",
                ],
                    [
                    'nama' => "Ekky Regita Laurentino",
                    'nrp' => "2110181011",
                ],
                [
                    'nama' => "Helmi Dharmawan",
                    'nrp' => "2110181012",
                ],
                    [
                    'nama' => "Muh Nisar Yanuar Utomo",
                    'nrp' => "2110181013",
                ],
                    [
                    'nama' => "Milati Rohmatus Sakinah",
                    'nrp' => "2110181014",
                ],
                    [
                    'nama' => "Rochimatus Sa'diyah",
                    'nrp' => "2110181015",
                ],
                [
                    'nama' => "Muhammad Riza Nafis",
                    'nrp' => "2110181016",
                ],
                    [
                    'nama' => "I Putu Gede Verdhangga M",
                    'nrp' => "2110181017",
                ],
                    [
                    'nama' => "Muhammad Fahreza Ansori",
                    'nrp' => "2110181019",
                ],
                    [
                    'nama' => "Ardiansyah Dwi Saputra",
                    'nrp' => "2110181020",
                ],
                [
                    'nama' => "Sabillah Ferdiana F",
                    'nrp' => "2110181021",
                ],
                    [
                    'nama' => "Muhammad Ghozy Al G",
                    'nrp' => "2110181022",
                ],
                    [
                    'nama' => "Alfian Haidar Setyawan",
                    'nrp' => "2110181023",
                ],
                    [
                    'nama' => "Faidza Fariq Arrifa",
                    'nrp' => "2110181024",
                ],
                [
                    'nama' => "Zahrotul Chumairo",
                    'nrp' => "2110181025",
                ],
                    [
                    'nama' => "Muhammad Riza Bachtiar",
                    'nrp' => "2110181026",
                ],
                    [
                    'nama' => "Muhammad Satriyo Aji",
                    'nrp' => "2110181027",
                ],
                    [
                    'nama' => "Rissa Hanifah Ersanty",
                    'nrp' => "2110181028",
                ],
                [
                    'nama' => "Dary Winata Nugraha Djati",
                    'nrp' => "2110181029",
                ],
                    [
                    'nama' => "Muhammad Izzat",
                    'nrp' => "2110181030",
                ],
                    [
                    'nama' => "Iqbal Nur Imansyah",
                    'nrp' => "2110181031",
                ],
                    [
                    'nama' => "Sarah Ummul Afifah",
                    'nrp' => "2110181032",
                ],
                [
                    'nama' => "Chandra Kirana Jatu I",
                    'nrp' => "2110181033",
                ],
                    [
                    'nama' => "Febilenia Risma Putri A",
                    'nrp' => "2110181034",
                ],
                    [
                    'nama' => "Sylvi Indryana Safira",
                    'nrp' => "2110181035",
                ],
                    [
                    'nama' => "Muhammad Mujir",
                    'nrp' => "2110181036",
                ],
                [
                    'nama' => "Marisna Nurul Fadhila",
                    'nrp' => "2110181037",
                ],
                    [
                    'nama' => "Belinda Anindya K.W.",
                    'nrp' => "2110181038",
                ],
                    [
                    'nama' => "Eka Darma Widyana",
                    'nrp' => "2110181039",
                ],
                    [
                    'nama' => "Andi Abdul Salam Sabil",
                    'nrp' => "2110181040",
                ],
                [
                    'nama' => "Sabila Jamal",
                    'nrp' => "2110181041",
                ],
                    [
                    'nama' => "Fajar Septian Nugraha",
                    'nrp' => "2110181042",
                ],
                    [
                    'nama' => "Muhammad Fadhli U",
                    'nrp' => "2110181043",
                ],
                    [
                    'nama' => "Gilang Taufiq Arsyannur",
                    'nrp' => "2110181044",
                ],
                [
                    'nama' => "Ilyas Yudhistira K",
                    'nrp' => "2110181045",
                ],
                    [
                    'nama' => "Muhammad Irfan Shiddiq",
                    'nrp' => "2110181046",
                ],
                    [
                    'nama' => "Muhammad Aziz Karebet",
                    'nrp' => "2110181047",
                ],
                    [
                    'nama' => "Ulima Inas Shabrina",
                    'nrp' => "2110181048",
                ],
                [
                    'nama' => "Tiara Puspita Anggraeni",
                    'nrp' => "2110181049",
                ],
                    [
                    'nama' => "Lina Dwi Pratiwi",
                    'nrp' => "2110181050",
                ],
                    [
                    'nama' => "Nawa Almahasin",
                    'nrp' => "2110181051",
                ],
                    [
                    'nama' => "Goldy Najma Adli K",
                    'nrp' => "2110181052",
                ],
                [
                    'nama' => "M. Hakim Mumtazul Wafa",
                    'nrp' => "2110181053",
                ],
                    [
                    'nama' => "Rizky Adam Pambudi",
                    'nrp' => "2110181054",
                ],
                    [
                    'nama' => "I Md Akira Ivandio Agusta",
                    'nrp' => "2110181055",
                ],
                    [
                    'nama' => "Zul Fauzi Oktaviansyah",
                    'nrp' => "2110181056",
                ],
                [
                    'nama' => "Muh.Danang Tri Brata",
                    'nrp' => "2110181057",
                ],
                    [
                    'nama' => "Aditya Indra Pramana",
                    'nrp' => "2110181058",
                ],
                    [
                    'nama' => "I Gede Kresna Putra A.",
                    'nrp' => "2110181059",
                ],
                    [
                    'nama' => "Gebriela Rifka Duanti",
                    'nrp' => "2110181060",
                ],
            ],
            'img' => 'uploads/img/gb.png'
        ];

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $paper = [0,0,323.52755906,204.09448819];
        $pdf = PDF::loadView('print', $data)->setPaper($paper);
        return $pdf->stream('print.pdf');
    }
}
