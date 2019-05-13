<?php
        switch ($_SERVER["SCRIPT_NAME"]) {
        case "Zielarnia/oferta.php":
			$CURRENT_PAGE = "oferta"; 
			$PAGE_TITLE = "Oferta";
			break;
		case "Zielarnia/kontakt.php":
			$CURRENT_PAGE = "kontakt"; 
			$PAGE_TITLE = "Kontakt";
            break;
		case "Zielarnia/pages/kosmetyki.php":
			$CURRENT_PAGE = "kosmetyki"; 
			$PAGE_TITLE = "Naturalne Kosmetyki";
			break;
        case "Zielarnia/pages/ziola.php":
			$CURRENT_PAGE = "ziola"; 
			$PAGE_TITLE = "Zioła";
			break;
        case "Zielarnia/pages/suplementy.php":
			$CURRENT_PAGE = "suplementy"; 
			$PAGE_TITLE = "Suplementy Diety";
            break;
        case "Zielarnia/pages/soki.php":
			$CURRENT_PAGE = "soki"; 
			$PAGE_TITLE = "Naturalne soki";
            break;
        case "Zielarnia/pages/produkty.php":
			$CURRENT_PAGE = "produkty"; 
			$PAGE_TITLE = "Ekologiczne produkty spożywcze";
            break;
        case "Zielarnia/pages/oleje.php":
			$CURRENT_PAGE = "oleje"; 
			$PAGE_TITLE = "Naturalne oleje";
			break;
		default:
			$CURRENT_PAGE = "index";
			$PAGE_TITLE = "Zielarnia Eko-Bazarek";
	}
?>