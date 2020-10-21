<?php


// Header
include_once "paginas/includes/header.php";
// fim Header


// Páginas

if (isset($_GET['pg'])) {
    $paginas = $_GET['pg'];

    switch ($paginas) {
        case 'inicial':
            include "paginas/inicial.php";
            break;

        case 'sobre':
            include "paginas/sobre.php";
            break;

        case 'cardapio':
            include "paginas/cardapio.php";
            break;

        case 'resevas':
            include "paginas/resevas.php";
            break;

        case 'delivery':
            include "paginas/delivery.php";
            break;

        case 'servicos':
            include "paginas/servicos.php";
            break;

        case 'unidades':
            include "paginas/unidades.php";
            break;

        case 'contato':
            include "paginas/contato.php";
            break;
                
        case 'blog':
            include "paginas/blog.php";
            break;
                
        
        default:
            #code
            break;
    }
} else {
    
     include "paginas/inicial.php";
}

// fim páginas

// footer
include_once "paginas/includes/footer.php"
// fim footer
?>