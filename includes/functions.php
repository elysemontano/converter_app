<?php 

    const VOLUME_TO_LITER = array(
        "gallons" => 3.78541,
        "quarts" => 0.946353,
        "liters" => 1,
        "pints" => 0.473176,
        "cups" => 0.24,
        "ounces" => 0.0295735,
        "tablespoons" => 0.0147868,
        "teaspoons" => 0.00492892,
        "milliliters" => 0.001
    );

    function convert_to_liters($value, $from_unit) {
        if(array_key_exists($from_unit, VOLUME_TO_LITER)) {
            return $value * VOLUME_TO_LITER[$from_unit];
        } else {
            return "Ooops!  Sorry, I can't do that conversion";
        }
    }

    function convert_from_liters($value, $to_unit) {
        if(array_key_exists($to_unit, VOLUME_TO_LITER)) {
            return $value / VOLUME_TO_LITER[$to_unit];
        } else {
            return "Ooops!  Sorry, I can't do that conversion";
        }
    }

    function convert_volume($value, $from_unit, $to_unit) {
    $liter_value = convert_to_liters($value, $from_unit);
    $new_value = convert_from_liters($liter_value, $to_unit);
    return $new_value;
}

?>