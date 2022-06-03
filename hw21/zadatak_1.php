<?php

// 1.Zadatak 
// Data je tabela “colors” u bazi podataka koja predstavlja tabelu boja. 
// Jedna boja ima svoj id, svoj naziv, svoju hex vrednost, 
// status da li je aktivna i datume kad je kreirana i kad je poslednji put trpela promene.

// Napisati u SQL-u upite ka bazi:

// Za dobijanje svih boja koje su aktivne (status = 1), 
// a dobiti ih sortirane po datumu kreiranja.
$sql_active_colors_sort_by_create_date = "SELECT * FROM `colors` WHERE status=1 ORDER BY created_at ASC";
// Za dobijanje 5 bilo kojih bolja.
$sql_5_colors = "SELECT * FROM colors LIMIT 3";
// Za upis nove boje u bazu (proizvoljno odaberite vrednosti).
$sql_add_new_color = "INSERT INTO `colors`(`name`, `hex_value`, `status`, `created_at`, `updated_at`) VALUES 
('grey','#353535','1','2020-1-1 17:00:00','2020-1-1 17:17:00')";
// Za promenu statusa. Sve boje koje su neaktivne postaviti da su aktivne (status = 0 => 1).
$sql_change_status = "UPDATE `colors` SET `status`='1' WHERE status=0";
// Za brisanje boje koja ima id 5. 
$sql_delete_id_5 = "DELETE FROM colors WHERE id=5";
// Za bonus obrisati boju koja je najranije promenjena.
$sql_del_1_updated = "DELETE FROM `colors` ORDER BY updated_at ASC LIMIT 1";
