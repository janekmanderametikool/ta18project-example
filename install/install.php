<?php

$createUsers = "CREATE TABLE `d82643sd339794`.`users`(
    `id` SERIAL,
    `username` VARCHAR(100) NOT NULL,
    `password` VARCHAR(60) NOT NULL,
    `last_login` DATETIME NOT NULL,
    `added` DATETIME NOT NULL,
    `edided` DATETIME NOT NULL
) ENGINE = InnoDB;";
