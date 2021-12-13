<?php
session_name('player');
session_start();
echo $_SESSION['name'];