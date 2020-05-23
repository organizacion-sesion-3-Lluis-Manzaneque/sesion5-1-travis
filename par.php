<?php
class Par
{
 
 
    public function comprobarPar($numero): float
    {
        if ($numero%2==0) 
        { 
            return true;
        } //escribo Par
        else //Sino
        { 
            return false; 
        } //Escribo impar
    }

 

}
