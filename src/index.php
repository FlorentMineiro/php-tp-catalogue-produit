<?php

$catalogue = [  
    0 => [  
        "id" => 1,  
        "nom" => "T-shirt coton bio",  
        "description" => "T-shirt en coton 100% biologique, coupe unisexe.",  
        "prix" => 19.99,  
        "categorie" => "Vêtements",  
        "image" => "t-shirt.jpg",  
        "stock" => 50  
    ],  
    1 => [  
        "id" => 2,  
        "nom" => "Mug personnalisé",  
        "description" => "Mug en céramique personnalisable avec votre photo.",  
        "prix" => 12.50,  
        "categorie" => "Objets",  
        "image" => "mug.jpg",  
        "stock" => 20  
    ],  
    2 => [  
        "id" => 3,  
        "nom" => "Carnet de notes",  
        "description" => "Carnet de notes A5 avec couverture rigide et papier recyclé.",  
        "prix" => 8.75,  
        "categorie" => "Papeterie",  
        "image" => "carnet.jpg",  
        "stock" => 100  
    ],  
    3 => [  
        "id" => 4,  
        "nom" => "Sac en toile",  
        "description" => "Sac en toile réutilisable, idéal pour les courses.",  
        "prix" => 5.00,  
        "categorie" => "Accessoires",  
        "image" => "sac.jpg",  
        "stock" => 75  
    ]  
];

// Code à écrire

/*for ($i= 0 ; $i <= 3 ; $i++){
    echo "Produit: ".$catalogue[$i]["nom"]."- Prix: ".$catalogue[$i]["prix"]. "EUR  \n";
}*/
 $somme = 0;
/*for($j = 0 ; $j <= count($catalogue) - 1;$j++){qq²
   $somme = $somme + $catalogitgue[$j]["stock"];
   
}
echo "Total du stock: ". $somme;*/
foreach($catalogue as $index){
    
        echo "Produit: ".$index["nom"]."- Prix: ".$index["prix"]."EUR  \n";
    

}
foreach($catalogue as $index){
    $somme = $somme + $index['stock'];
}
echo "Total du stock: ". $somme;

