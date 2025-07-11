<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyakit::create([
            'kode' => 'P01',
            'nama_penyakit' => 'Generelized Anxiety Disorder (GAD)',
            'deskripsi' => 'Generalized Anxiety Disorder (GAD) atau Gangguan Kecemasan Menyeluruh adalah salah satu bentuk gangguan kecemasan yang ditandai dengan kecemasan berlebihan dan kronis terhadap berbagai hal, bahkan tanpa alasan yang jelas. Kekhawatiran ini sulit dikendalikan dan berlangsung lama setidaknya 6 bulan - 12 bulan',
            'solusi' => 'Pengobatan GAD biasanya melibatkan kombinasi psikoterapi (terutama Terapi Perilaku Kognitif atau CBT) dan medikasi (seperti antidepresan atau ansiolitik). Perubahan gaya hidup seperti teknik relaksasi, olahraga teratur, meditasi, dan manajemen stres juga sangat membantu'
        ]);
        Penyakit::create([
            'kode' => 'P02',
            'nama_penyakit' => 'Panic Attack',
            'deskripsi' => 'Penderita mengalami serangan panik secara tiba-tiba, yang memuncak dalam beberapa menit dan menimbulkan gejala fisik dan psikologis yang intens. Orang yang mengalami gangguan panik sering kali merasa seperti akan mati, pingsan, atau kehilangan kendali. durasi pendek (biasanya 10-30 menit)',
            'solusi' => 'Penanganan utama untuk Panic Attack adalah CBT yang membantu individu mengidentifikasi dan mengubah pola pikir yang memicu panik, serta strategi pernapasan dan relaksasi. Obat-obatan seperti antidepresan atau benzodiazepine juga bisa diresepkan untuk mengelola gejala akut'
        ]);
        Penyakit::create([
            'kode' => 'P03',
            'nama_penyakit' => 'Social Anxiety Disorder',
            'deskripsi' => 'Social Anxiety Disorder (SAD) atau Fobia Sosial adalah gangguan kecemasan yang ditandai dengan ketakutan intens dan terus-menerus terhadap situasi sosial, terutama yang melibatkan penilaian, perhatian, atau pengamatan dari orang lain. Orang dengan gangguan ini sangat khawatir akan dipermalukan, dihakimi, atau ditolak, sehingga sering menghindari interaksi social',
            'solusi' => 'Terapi Perilaku Kognitif (CBT) adalah pendekatan paling efektif untuk Social Anxiety Disorder, seringkali dengan fokus pada restrukturisasi kognitif dan terapi pajanan (exposure therapy) untuk menghadapi situasi sosial secara bertahap. Dukungan kelompok dan terkadang medikasi juga dapat digunakan'
        ]);
        Penyakit::create([
            'kode' => 'P04',
            'nama_penyakit' => 'Specific Phobia',
            'deskripsi' => 'Specific Phobia adalah jenis gangguan kecemasan yang ditandai dengan ketakutan yang kuat, tidak rasional, dan terus-menerus terhadap objek atau situasi tertentu, yang sebenarnya tidak berbahaya atau hanya sedikit berisiko. Orang dengan fobia spesifik biasanya akan menghindari hal tersebut sebisa mungkin, atau mengalami kecemasan ekstrem jika terpaksa menghadapinya',
            'solusi' => 'Terapi pajanan (exposure therapy) adalah pengobatan paling efektif untuk Specific Phobia, di mana individu secara bertahap dan terkontrol dihadapkan pada objek atau situasi yang ditakuti hingga kecemasan berkurang. Teknik relaksasi juga dapat membantu'
        ]);
        Penyakit::create([
            'kode' => 'P05',
            'nama_penyakit' => 'Obsessive-Compulsive Disorder (OCD)',
            'deskripsi' => 'Obsessive-Compulsive Disorder (OCD). OCD sendiri adalah gangguan mental yang menyebabkan penderitanya merasa harus melakukan suatu tindakan secara berulang-ulang. Bila tidak dilakukan, penderita OCD akan diliputi kecemasan atau ketakutan. OCD ditandai dengan pikiran mengganggu, mengganggu (obsesi), berulang, perilaku ritualistik (kompulsi) yang memakan waktu, secara signifikan merusak fungsi atau menyebabkan kesulitan bagi penderitanya',
            'solusi' => ' Pengobatan utama untuk OCD adalah Terapi Pencegahan Paparan dan Respons (Exposure and Response Prevention/ERP), yang merupakan jenis CBT. Ini melibatkan paparan terhadap pemicu obsesi tanpa melakukan kompulsi. Medikasi, terutama jenis antidepresan tertentu, seringkali digunakan bersamaan dengan ERP'
        ]);
        Penyakit::create([
            'kode' => 'P06',
            'nama_penyakit' => 'Post-Traumatic Stress Disorder (PTSD)',
            'deskripsi' => 'Stres Pasca Trauma (PTSD) merupakan sindrom kecemasan, labilitas autonomi, ketidak rentanan emosional, dan kilas balik dari pengalaman yang amat pedih. PTSD sangat penting untuk diketahui, selain karena banyaknya kejadian yang telah menimpa orang-orang di sekitar kita, PTSD juga dapat menyerang siapapun yang telah mengalami kejadian traumatik dengan tidak memandang usia dan jenis kelamin',
            'solusi' => 'Pengobatan untuk PTSD seringkali melibatkan psikoterapi traumafokus seperti Terapi Pemrosesan Kognitif (CPT), Terapi Pajanan Berkepanjangan (Prolonged Exposure/PE), atau Eye Movement Desensitization and Reprocessing (EMDR). Obat-obatan seperti antidepresan juga dapat diresepkan untuk membantu mengelola gejala'
        ]);
    }
}
