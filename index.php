<?php

// Ecrire la fonction getLike() qui prend en paramètre un array et qui return une string
function getLike($users) : String
{
    // RAPPEL : Les messages suivants doivent s'afficher 
    // selon s'il y a 0, 1, 2, ou supérieur à 2 users dans le tableaux d'entrée 
    // "Soyez le premier à aimer cette publication" = 0 
    // "Simon aime cette publication" = 1 
    // "Simon et Arthur aiment cette publication" = 2 
    // "Simon et X autres personnes ont aimé cette publication." > 2 
    return "Ceci est une string";
}

$users = []; // Créer la data qui permet de tester la méthode

// Tester la fonction
echo getLike($users);
