<?php
/**
 * 
 * @param string $email Endereço de email a ser validada
 * @return bool resultado booleano da validação
 * 
 * 
 *
 * 
 * 
 *  
 */


function validarEnderecoEmail(string $email): bool 
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
};






?>