<?php

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

//Declare Variable as Global
global $about;
global $gallery;
global $about_link;
global $return_home;
global $error_message;
global $blog_error;
global $searchbar;
global $posts_per_pagelabel;
global $filter_1;
global $showall;
global $view_post_list;
global $label_1;
global $label_2;
global $label_3;
global $label_4;
global $label_5;
global $label_6;
global $noresults;
global $noresultsfor;
global $results_1;
global $results_2;
global $result_1;
global $result_2;
global $back;
global $collection;
global $nocurrentresults;
global $morecars;
global $category_name;
global $recent_cars;
global $postlist_subtitle;


if (strpos($url,'/en/') !== false) {
    //English Strings
    $about = "Read more";
    $gallery = "Gallery";
    $about_link = "about";
    $return_home = "Click here to return to the Home page.";
    $error_message = "The requested page could not be found.";
    $searchbar = "Search vehicles";
    $posts_per_pagelabel = "Cars per page:";
    $filter_1 = "Transmission:";
    $showall = "All";
    $view_post_list = "View Car";
    $label_1 = "Body: ";
    $label_2 = "Transmission: ";
    $label_3 = "Mileage(KM): ";
    $label_4 = "Year: ";
    $label_5 = "License Plate: ";
    $label_6 = "Price: ";
    $noresults = "At this moment there aren't any cars available.";
    $noresultsfor = "No results for:";
    $results_1 = "There are "; $results_2 = ' results for: "';
    $result_1 = "There is "; $result_2 = ' result for: "';
    $back = "Go Back";
    $collection = "/collection/#content";
    $nocurrentresults = "There aren't any available cars at this time.";
    $morecars = "More Cars";
    $category_name = "Collection";
    $recent_cars = "Recently added Cars";
    $postlist_subtitle = "Our range of Cars";

} else {
    //Dutch Strings
    $about = "Lees meer";
    $gallery = "Gellerij";
    $about_link = "over-ons";
    $return_home = "Klik hier om terug te gaan naar de Home pagina.";
    $error_message = "De opgevraagde pagina kon niet worden gevonden!";
    $blog_error = "Er zijn nog geen berichten.";
    $searchbar = "Zoek voertuigen";
    $posts_per_pagelabel = "Auto's per pagina:";
    $filter_1 = "Transmissie:";
    $showall = "Alle";
    $view_post_list = "Bekijk Auto";
    $label_1 = "Carrosserie: ";
    $label_2 = "Transmissie: ";
    $label_3 = "Kilometerstand: ";
    $label_4 = "Bouwjaar: ";
    $label_5 = "Kenteken: ";
    $label_6 = "Prijs: ";
    $noresults = "Op dit moment zijn er geen auto's beschikbaar.";
    $noresultsfor = "Geen resultaten voor:";
    $results_1 = "Er zijn "; $results_2 = ' resultaten gevonden voor: "';
    $result_1 = "Er is "; $result_2 = ' resultaat gevonden voor: "';
    $back = "Ga Terug";
    $collection = "/collectie/#content";
    $nocurrentresults = "Er zijn op dit moment geen beschikbare auto's.";
    $morecars = "Meer Auto's";
    $category_name = "Collectie";
    $recent_cars = "Recent toegevoegde Auto's";
    $postlist_subtitle = "Ons aanbod aan Auto's";
}
