<?php

class Persona{

    public $Id;
    public $Nombre;
    public $Apellido;
    public $FechaNacimieto;
    public $ObraSocial;
    public $ListDocumentos=array();


    public function MostrarDatos(){

        echo 'Id Persona:'. $this->Id .'<br>';
        echo 'Nombre :'. $this->Nombre.'<br>';
        echo 'Apellido :'.$this->Apellido.'<br>';
        echo 'Fecha de Nacimiento:'.$this->FechaNacimiento.'<br>';
        echo '-------------------------------------------<br>';
        echo 'Id Obra Social :'.$this->ObraSocial->Id.'<br>';
        echo 'Obra social <br>';
        echo 'Nomrbe obra social : '.$this->ObraSocial->RazonSocial.'<br>';
        echo 'Cuit : '.$this->ObraSocial->Cuit.'<br>';
        echo 'Sitio Web : ', $this->ObraSocial->SitioWeb.'<br>';
        echo 'Telefono : '.$this->ObraSocial->Telefono.'<br>';
        echo '-------------------------------------------<br>';
        foreach($this->ListDocumentos as $Documento){
            echo 'Id Documento : '.$Documento->Id.'<br>';
            echo 'Numero : '.$Documento->Numero.'<br>';
            echo 'Habilitado : '.$Documento->Habilitado.'<br>';
            echo 'Id Tipo Docuemnto : '.$Documento->TipoDocumento->Id.'<br>';
            echo 'Descripcion Tipo Docuemnto : '.$Documento->TipoDocumento->Descripcion.'<br>';
            echo 'Habilitado Tipo Documento: '.$Documento->TipoDocumento->Habilitado.'<br>';
            

        }  
    }

}