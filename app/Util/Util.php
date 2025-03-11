<?php

namespace App\Util;



class Util {


	public function getPolicy() {
        return file_get_contents("/var/www/AvaliaAulaAPI/1.0.0/app/Util/policy.html");
    }


}