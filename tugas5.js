function konversi() {
    var nilai = document.getElementById("nilai").value;
    if (nilai < 0 || nilai > 100) {
        nilai = "Nilai salah!";
    } else if (nilai <= 40) {
        nilai = "E";
    } else if (nilai <= 55) {
        nilai = "D";
    } else if (nilai <= 60) {
        nilai = "C";
    } else if (nilai <= 65) {
        nilai = "BC";
    } else if (nilai <= 70) {
        nilai = "B";
    } else if (nilai <= 80) {
        nilai = "AB";
    } else {
        nilai = "A";
    }
    document.getElementById("huruf").innerHTML = ((nilai == "Nilai salah!") ? "" : "Huruf Mutu : " ) + nilai;
}