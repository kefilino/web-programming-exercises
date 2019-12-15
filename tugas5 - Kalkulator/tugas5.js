function calc(operation) {
    var bil1 = document.getElementById("bil1").value;
    var bil2 = document.getElementById("bil2").value;
    var hasil;
    if (operation == "tambah") {
        hasil = parseInt(parseInt(bil1)) + parseInt(bil2);
    } else if (operation == "kurang") {
        hasil = parseInt(bil1) - parseInt(bil2);
    } else if (operation == "kali") {
        hasil = parseInt(bil1) * parseInt(bil2);
    } else if (operation == "bagi") {
        hasil = parseInt(bil1) / parseInt(bil2);
    }
    document.getElementById("hasil").value = hasil;
}