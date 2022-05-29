<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
        case 'produto':
            return (new App\Controller\ControllerProduto)->render();
        case 'cadastro':
            return (new App\Controller\ControllerCadastro)->render();
        case 'administrador':
            return (new App\Controller\ControllerAdministrador)->render();
    }
    return 'Página não encontrada!';
}
