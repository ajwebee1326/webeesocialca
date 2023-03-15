<?php

namespace App\Observers;

use App\Models\OurWork;

class OurWorkObserver
{
    public function retrieved(OurWork $ourWork)
    {
       $ourWork->accordian_title = explode(',',$ourWork->accordian_title);
       $ourWork->accordian_description = explode(',',$ourWork->accordian_description);
    }

    public function creating(OurWork $ourWork)
    {
        $ourWork->accordian_title = implode(',',$ourWork->accordian_title);
        $ourWork->accordian_description = implode(',',$ourWork->accordian_description);
    }

    public function updating(OurWork $ourWork)
    {
        $ourWork->accordian_title = implode(',',$ourWork->accordian_title);
        $ourWork->accordian_description = implode(',',$ourWork->accordian_description);
    }
}
