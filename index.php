<?php

use CatalystWP\Atom\controllers\OrganismsController;

//Determine which controller to use
if (is_front_page()) {
    new OrganismsController();
} elseif (is_singular('neighborhood') || is_post_type_archive('neighborhood')) {
    new CatalystWP\Atom\controllers\NeighborhoodController();
} elseif (is_singular('floorplan') || is_post_type_archive('floorplan')) {
    new CatalystWP\Atom\controllers\FloorplanController();
} elseif (is_post_type_archive()) {
} elseif (is_tax()) {
} elseif (is_archive()) {
} elseif (is_category()) {
} elseif (is_404()) {
} elseif (is_page()) {
    new OrganismsController();
} else {
}
