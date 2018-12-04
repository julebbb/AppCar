<?php

if (isset($_GET['id']) AND !empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        if ($id > 0) {
            
            
        } else {
            header('Location: ../../../404.html');
        }
    }