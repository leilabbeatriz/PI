<?php

$id = $_GET['id'];
$member = new Member(connection());
$member->delete($id);

header('Location: /members/crud');


