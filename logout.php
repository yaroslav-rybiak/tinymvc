<?php
session_start();
session_destroy();
header('Location: /index.php', true, 303);
exit;