<?php
// Inicio
// Home
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Inicio', route('home_path'));
});

// Home > About
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Sobre nós', route('about_path'));
});

// Home > hotel
Breadcrumbs::register('hotel', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Hotéis', route('hoteles_path'));
});

// Home > social
Breadcrumbs::register('social', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Responsabilidade social', route('social_path'));
});

// Home > tours
Breadcrumbs::register('tours', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Passeios em Perú', route('tours_path'));
});

// Home > paquetes
Breadcrumbs::register('paquetes', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Pacotes de Viagem', route('paquetes_path'));
});

// Home > destinos
Breadcrumbs::register('destino', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Destinos no Peru', route('destinations_path'));
});

// Home > tours > [titulo]
Breadcrumbs::register('tours-show', function ($breadcrumbs, $title) {
    $breadcrumbs->parent('tours');
    $breadcrumbs->push(ucwords(strtolower($title)), route('itinerario_tours_show_path', str_replace(' ','-',strtolower($title))));
});

// Home > paqutes > [titulo]
Breadcrumbs::register('paquetes-show', function ($breadcrumbs, $title) {
    $breadcrumbs->parent('paquetes');
    $breadcrumbs->push(ucwords(strtolower($title)), route('home_show_path', str_replace(' ','-',strtolower($title))));
});

// Home > paqutes sin hotel > [titulo]
Breadcrumbs::register('paquetes-sin-show', function ($breadcrumbs, $title) {
    $breadcrumbs->parent('paquetes');
    $breadcrumbs->push(ucwords(strtolower($title)), route('sin_hotel_show_path', str_replace(' ','-',strtolower($title))));
});

// Home > destinos > [titulo]
Breadcrumbs::register('destino-show', function ($breadcrumbs, $title) {
    $breadcrumbs->parent('destino');
    $breadcrumbs->push(ucwords(strtolower($title)), route('destinations_show_path', str_replace(' ','-',strtolower($title))));
});



