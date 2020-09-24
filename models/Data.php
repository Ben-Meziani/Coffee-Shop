<?php 

//pas dans l'exo mais bon, c'est la faute à karim
//cette classe pourait nous retourner toutes les données utiles à nos pages web
class Data 
{

    public function getOpeningHours()
    {
        $weekOpeningHours = [
            'Sunday' => 'Closed', 
            'Monday' => '7:00 AM to 8:00 PM',
            'Tuesday' => '7:00 AM to 8:00 PM',
            'Wednesday' => '7:00 AM to 8:00 PM',
            'Thursday' => '7:00 AM to 8:00 PM',
            'Friday' => '7:00 AM to 8:00 PM',
            'Saturday' => '9:00 AM to 5:00 PM'
        ];

        return $weekOpeningHours;
    }

}