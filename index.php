<?php

require_once 'modelo/Documento.php';
require_once 'modelo/ObraSocial.php';
require_once 'modelo/Persona.php';
require_once 'modelo/TipoDocumento.php';


$ObraSocial= new ObraSocial();
$ObraSocial->Id=1;
$ObraSocial->RazonSocial='S.A';
$ObraSocial->Cuit=3756456456;
$ObraSocial->SitioWeb='obrasocial.com.ar';
$ObraSocial->Telefono='456789222';

$TD1= new TipoDocumento();
$TD1->Id=1;
$TD1->Descripcion='DNI';
$TD1->Habilitado='true';

$TD2= new TipoDocumento();
$TD2->Id=2;
$TD2->Descripcion='Pasaporte';
$TD2->Habilitado='true';

$Persona= new Persona();
$Persona->Id=1;
$Persona->Nombre='Pedro';
$Persona->Apellido='Navaja';
$Persona->FechaNacimiento='11/03/1998';
$Persona->ObraSocial=$ObraSocial;

$D1= New Documento ();
$D1->Id=1;
$D1->Numero='40123123';
$D1->Habilitado='true';
$D1->TipoDocumento=$TD1;

$D2= New Documento ();
$D2->Id=2;
$D2->Numero='50123123';
$D2->Habilitado='true';
$D2->TipoDocumento=$TD2;

$Persona->ListDocumentos[]=$D1;
$Persona->ListDocumentos[]=$D2;

$Persona->MostrarDatos();






