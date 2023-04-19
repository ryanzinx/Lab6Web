<?php


$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas'],
        'prodi' => $_POST['prodi'],
    ];
    $database->update("tb_lab6", $data, "nim=" . $nim);
    header("location: home");
}

$data = $database->get("tb_lab6", "where nim=" . $nim);

$form = new Form("", "submit");
$form->addField("nim", "Nim", $data["nim"]);
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("kelas", "Kelas", $data["kelas"]);
$form->addField("prodi", "Prodi", $data["prodi"]);
$form->displayForm();
