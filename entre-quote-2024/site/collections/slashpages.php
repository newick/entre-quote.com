<?php

return function ($site) {
    return $site->children()->filterBy("slash", "true");
};