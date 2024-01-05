<?php

namespace App\Controllers;

class estimasiController extends BaseController
{
    // public function index(): string
    // {
    //     return view('produk/estimasip');
    // }

    public function gauss()
    {
        // bikin tabel
        function tabel($matriks)
        {
            echo "<table class='table table-bordered'>";
            foreach ($matriks as $column) {
                echo "<tr >";
                echo "<td>$column[0]</td>";
                echo "<td>$column[1]</td>";
                echo "<td>$column[2]</td>";
                echo "<td>$column[3]</td>";
                echo "<tr>";
            }
            echo "</table>";
            echo "<hr>";
            echo "<br>";
        }

        // Matrik Awal

        echo "<div class='container'>";
        echo "<hr>";
        echo "<br>";
        echo "<hr>";

        $kulit = $_POST['kulit'];
        $waktu = $_POST['waktu'];
        $cat = $_POST['cat'];

        $matriks = [
            [60, 70, 50, $kulit],
            [8, 7, 7, $waktu],
            [3, 4, 2, $cat]
        ];

        echo "<h3>MATRIK AWAL</h3>";
        tabel($matriks);

        //Langkah 1
        for ($i = 0; $i <= count($matriks); $i++) {
            $row0[0][$i] = $matriks[0][$i] / $matriks[0][0];
        }

        $matriks[0] = array_replace($matriks[0], $row0[0]);
        echo "<h5>LANGKAH KE-1 </h5>";
        echo "Membuat baris 1 kolom 1 menjadi 1";
        tabel($matriks);


        for ($i = 0; $i <= count($matriks); $i++) {
            $row1[1][$i] = $matriks[1][$i] - ($matriks[1][0] * $matriks[0][$i]);
            $row2[2][$i] = $matriks[2][$i] - ($matriks[2][0] * $matriks[0][$i]);
        }

        $matriks[1] = array_replace($matriks[1], $row1[1]);
        $matriks[2] = array_replace($matriks[2], $row2[2]);
        echo "Membuat kolom 1 pada baris 2 dan 3 menjadi nol";
        tabel($matriks);


        //Langkah 2
        for ($i = 1; $i <= count($matriks); $i++) {
            $row1[1][$i] = $matriks[1][$i] / $matriks[1][1];
        }

        $matriks[1] = array_replace($matriks[1], $row1[1]);
        echo "<h5>LANGKAH KE-2 </h5>";
        echo "membuat baris 2 kolom 2 menjadi 1";
        tabel($matriks);

        for ($i = 1; $i <= count($matriks); $i++) {
            $row0[0][$i] = $matriks[0][$i] - ($matriks[0][1] * $matriks[1][$i]);
            $row2[2][$i] = $matriks[2][$i] - ($matriks[2][1] * $matriks[1][$i]);
        }
        $matriks[0] = array_replace($matriks[0], $row0[0]);
        $matriks[2] = array_replace($matriks[2], $row2[2]);
        echo "pada kolom 2 di baris 1 dan 3 diubah menjadi nol";
        tabel($matriks);

        //Langkah 3
        for ($i = 2; $i <= count($matriks); $i++) {
            $row2[2][$i] = $matriks[2][$i] / $matriks[2][2];
        }

        $matriks[2] = array_replace($matriks[2], $row2[2]);
        echo "<h5>LANGKAH KE-3 </h5>";
        echo "membuat baris 3 kolom 3 menjadi 1";
        tabel($matriks);

        for ($i = 1; $i <= count($matriks); $i++) {
            $row0[0][$i] = $matriks[0][$i] - ($matriks[0][2] * $matriks[2][$i]);
            $row1[1][$i] = $matriks[1][$i] - ($matriks[1][2] * $matriks[2][$i]);
        }
        $matriks[0] = array_replace($matriks[0], $row0[0]);
        $matriks[1] = array_replace($matriks[1], $row1[1]);
        echo "membuat kolom 3 di baris satu dan dua menjadi nol";
        tabel($matriks);

        echo "Kesimpulan";
        echo "<ul type='disc'>";
        echo "<li>Nilai X : " . $matriks[0][3] . "</li>";
        echo "<li>Nilai Y : " . $matriks[1][3] . "</li>";
        echo "<li>Nilai Z : " . $matriks[2][3] . "</li>";
        echo "</ul>";
        echo "</div>";
        return view('produk/hasil');
    }
}
