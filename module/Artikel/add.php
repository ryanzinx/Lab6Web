<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas'],
        'prodi' => $_POST['prodi']
    ];
    $database->insert("tb_lab6", $data);
}

$form = new Form("", "submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("kelas", "Kelas");
$form->addField("prodi", "Prodi");
$form->displayForm();